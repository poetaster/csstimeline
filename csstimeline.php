<?php
/**
 * Plugin Name: csstimeline
 * Plugin URI: https://github.com/poetaster/csstimeline
 * Description: A simple plugin to style your content as a timeline with a few shortcodes.
 * Version: 1.0
 * Author: Mark Washeim
 * Author URI: https://netzpolitik.org
 * License: GPL v3.0
 * License URI:  http://www.gnu.org/licenses/gpl-3.0.html
 */
 
// constant definition
if( !defined( 'IS_ADMIN' ) ) define( 'IS_ADMIN', is_admin() );

// WordPress actions
if( IS_ADMIN ) {
}
else {
	add_action( 'wp_enqueue_scripts', array( 'csstimeline', 'script_and_style' ) );
	//move wpautop filter to AFTER shortcode is processed
	remove_filter( 'the_content', 'wpautop' );
	add_filter( 'the_content', 'wpautop' , 99);
	add_filter( 'the_content', 'shortcode_unautop',100 );
}
 
class csstimeline {

	function __construct() {
		// shortcode init
		if( !IS_ADMIN ) {
			self::init_shortcodes(array('ctimeline','ctentry','ctdate','ctspace'));
		}
	}
	
  /**
	* Add shortcodes
	*/
	function init_shortcodes( $shortcodes ) {
		foreach($shortcodes as $shortcode) {
			if(method_exists('csstimeline','shortcode_handler_' . $shortcode)) {
				add_shortcode( $shortcode, array( 'csstimeline', 'shortcode_handler_' . $shortcode ) );
			}
		}
	}
	
  /**
	* Shortcode handlers
	*/
	function shortcode_handler_ctimeline( $atts, $content = null ) {
		extract( shortcode_atts( array( 'style' => 'grey' ), $atts ) );
		return '<ul id="timeline" class="ctimeline' . $style . '" >' . do_shortcode($content) . '</ul>';
   }
   
  function shortcode_handler_ctentry( $atts, $content = null ) {
    $ranid = rand(1,5000);
   	extract( shortcode_atts( array( 'date' => '', 'label' => '' ), $atts ) );
   	$output = "<li class='work'><input class='radio' id='" . $ranid . "' name='works' type='radio' checked>";
    $output .= "<div class='relative'>";
   	if($label != '') {
   		$output .= "<label for='". $ranid. "'>" . $label . '</label>';
   	}
   	if($date != '') {
   		$output .= "<span class='date'>" . $date . '</span>';
   	}
    $output .= "<span class='circle'></span>";
    $output .= "</div>";
   	$output .= "<div class='content'><p>" . do_shortcode($content) . "</p></div>";
    
    $output .= "</li>";
		return $output;
   }
   
   function shortcode_handler_csstimeline_date( $atts, $content = null ) {
   	return '<br clear="all"><p class="csstimeline_date csstimeline_order"><span>' . do_shortcode($content) . '</span></p>';
   }
   function shortcode_handler_ctspace( $atts, $content = null ) {
   	return '<li class="ctspace"><span></span></li>';
   }
	
  /**
	* Enqueue css stylesheet and some script
	*/
	function script_and_style() {
		global $post;
		if( isset($post->post_content) AND has_shortcode( $post->post_content, 'ctimeline') ) {
      /* wp_enqueue_script( 'csstimeline_script', plugins_url('js/csstimeline_script.js', __FILE__), 'jquery'); */
		wp_enqueue_style( 'csstimeline_style', plugins_url('css/csstimeline_style.css', __FILE__) );
    	}
	}

}
$csstimeline = new csstimeline();
