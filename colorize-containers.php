<?php
/**
 * Plugin Name: Colorize Containers
 * Plugin URI: https://github.com/akozoubsky/colorize-containers
 * Description: Colorize WP container for debuging. 
 * Version: 0.0.1
 * Author: Alexandre Kozoubsky
 * Author URI: http://alexandrekozoubsky.com
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU 
 * General Public License as published by the Free Software Foundation; either version 2 of the License, 
 * or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without 
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * You should have received a copy of the GNU General Public License along with this program; if not, write 
 * to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 */

/**
 * Outputs the Plugin style in the header.
 */
add_action( 'wp_head', 'colorize_containers');		

function colorize_containers() {
print "\n" .
'<style type="text/css" id="colorize_containers-css">
body { background-color: #FFF; }
#container { background-color: gray; }
header { background-color: #497BAD; }
nav, #menu-portfolio {background: #330000;}
#main {background: red;}
.loop-meta {background: black;}
.loop-nav  {background: black;}
.entry {background: yellow;}
.entry-header {background: blue;}
.entry-header.taxonomy-header {background: #CC0099;}
.entry-content { background: green;} 
.comment-respond {background: purple;}
footer#footer {background: #00FFCC;}
</style>' . "\n";
}
?>

