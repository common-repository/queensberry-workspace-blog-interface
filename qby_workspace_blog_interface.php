<?php

  /*
  Plugin Name: Queensberry Workspace Blog Interface
  Plugin URI:  http://wordpress.org/extend/plugins/qby_workspace_blog_interface/
  Version:     1.05
  Description: Provides and easy way for photographers to share their Workspace Story Boards and Slide Shows on their Wordpress Blog. For further information and installation instructions visit this plugins <a href="http://wordpress.org/extend/plugins/qby_workspace_blog_interface/">home page.</a> Go here for further information on <a href="http://workspace.queensberry.com/">Workspace.</a>
  Author:      Stephen Baugh
  Author URI:  http://www.stephenbaugh.com/
  */

  /*
    Copyright 20012 Stephen Baugh  (email : stephen@stephenbaugh.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 3 of the License, or
    (at your option) any later version.

	http://www.gnu.org/licenses/quick-guide-gplv3.html

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
  */


// Check to see if user has sufficient privileges
function qbyws_is_authorized() 
{
        global $user_level;
        if (function_exists("current_user_can")) {
                return current_user_can('activate_plugins');
        } else {
                return $user_level > 5;
        }
}


// Register fuction to execute when plugin activates
register_activation_hook(__FILE__, 'qbyws_activate');

// Register Short Code and Function to execute when found
add_shortcode( 'ws_gallery', 'qbyws_gallery_display' );


// Short Code Function.
// This just finds attributes then requests Gallery HTML, CSS & Javascriptfrom Worspace
// for requested slideshow or storyboard.
	
function qbyws_gallery_display($atts)
{

	extract( shortcode_atts( array(
		'type' => '',
		'eventid' => '',
		'id' => '',
		'num' => '',
	), $atts ) );

	$url = 'http://workspace.queensberry.com/remotegallery/?type=' . $type . '&eventid=' . $eventid . '&id=' . $id . '&num=' . $num;
	

	if(extension_loaded('curl'))
	{
	
		$timeout = 30;
		$ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout); 
        $pagedata = curl_exec($ch); 
        curl_close($ch); 
        
    } else {
    
	    $pagedata = '<iframe src="'.$url.'" width="100%" height="750px"></iframe>';
	    
	}
            
  	return '<div style="clear:both;">' . $pagedata . '</div>';
	
}
		
		
function qbyws_activate()
{
	
	qbyws_defaultdata();
	
}


function qbyws_defaultdata()
{

	# No configuration Needed
	
}	









?>