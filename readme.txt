=== csstimeline ===
Contributors: Mark Washeim (poetaster)
Author: Mark Washeim
Author URI: https://netzpolitik.org
Donate link: http://www.netzpolitik.org
Plugin URI: https://github.com/poetaster/csstimeline
Tags: timeline,shortcode,simple,style
Requires at least: 3.6
Tested up to: 4.4.2
Stable tag: 1.0
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

== Installation == 

* Download zip archive into wordpress plugins directory. 
* Enable in wordpress plugins interface. 
* That's it.

== Frequently Asked Questions == 

None Yet.

== Changelog == 
1.0.1 css fixes, initial mobile view removed (works down to 480 px)
1.0 initial release

== Upgrade Notice == 

None yet.

== Screenshots == 

1. Basic Appearance 1
2. Basic Appearance 2

== Description ==

= EN: =

A simple wordpress plugin to parse shortcodes and produce a nice html/css only timeline.

This plugin provides 4 shortcodes:

* [ctimeline] - a wrapper for the entire timeline
* [ctentry] - a date label with an entry and option content
* [ctspace] - a simple spacer
* [ctdate] - not implemented yet.


Take a look at the screenshots to see what rendering looks like. CSS3
transitions and html supply minimal animations. Most markup can be used within
the shortcodes to achieve formatting and, for instance, embed images. The
following example demonstrates,

* 'fake' super/sub sections, not using the 'date' param of ctentry 
* embed a picture
* format a label

[ctimeline]

[ctentry date="" label="<b>2015</b>"] Wasn't much going on in 2015.[/ctentry]

[ctentry date="11 May 2015 " label="The title of this entry reflects the needs of verbose headline copy editors."]
<img src="https://netzpolitik.org/wp-upload/house-of-parliament-westminster-150x150.jpg" alt="Das britische Parlament" width="150" height="150" class="alignnone size-thumbnail wp-image-112853" />
amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
[/ctentry]

[ctspace][/ctspace]

[ctspace][/ctspace]

[ctentry date="" label="<b>2016</b>"] A bit more going on in 2016.[/ctentry]

[ctentry date="12 May 2016" label="12th cool"]
Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante.
[/ctentry]

[ctentry date="13 May 2016" label="13th cool"]
In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Curabitur tortor. Pellentesque nibh. Aenean quam. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
[/ctentry]

[/ctimeline]
