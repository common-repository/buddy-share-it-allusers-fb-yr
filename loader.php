<?php 
/*
	Plugin Name: Share It for All Users on BuddyPress YR
	Plugin URI:	http://yr.openthis.uno/2022/12/share-it-for-all-users-on-buddypress-yr-wordpress-plugin-free/yrplugins/

	Description: This plugin will help you insert different buttons (Share, Like, Viber, Whatsapp, Google and others) into WordPress posts or pages, into Activity or Groups Buddypress. You can select buttons from the initial list: Facebook Share, Facebook Like, Twitter Share, LinkedIn Share, Digg, WhatsApp Button, Viber Share, Join Viber Community, Viber Group Button, Telegram share, Google search for article title, or search only on the site, Bing search, Yahoo search, Ask search, Duckduckgo search. You can also quickly insert a new custom button for any URL link. Can be used custom icons, images, styles. Works with Wordpress or BuddyPress sites. Original code, credit Modemlooper.

	Author: Yuriy Radko
	Version: 3.4.2

	Author URI: http://yr.openthis.uno/yr/
	Text Domain: buddy-share-it-allusers-fb-yr
	Domain Path: /languages
	License: GPL2		Tags:share,button,Facebook,Like,Buddypress,Wordpress,Social,twitter,linkedin,digg,google,search,email,whatsapp,viber,telegram,vkontakte,viber group,viber community,join viber group,join viber community,BP,activity,FB,buttons,link,share it,Buddy,bp share,buddy share,fb share,bp social,YR,blog,links,
*/

// v.3.0 - plugin for: BuddyPress+Wordpress
// v.3.1 - plugin for: BuddyPress+Wordpress OR Wordpress only - 23.12.2016
// v.3.2 - shortcode [yr-bpshare-button] in blog article replaced by intxt button
// v.3.2.1 - imgsrc=http://URL_for_image
// v.3.2.2 - afteractivity  for Activity buttons
// v.3.2.3 - Fixed a bug - for Russian and other languages UTF-8. "download more" (ajax) works correctly in the Activity
// v.3.2.4 - Fixed potential errors (due to new versions of Buddypress) in the plugin block: "Replaces Buddypress URL with activity number on redirect Buddypress URL with member name, -  this enables Facebook Sharer algoritm do right".
// v.3.2.5 - BuddyPress to 2.9.3 ,  Wordpress to 4.9.4. The plugin has been added the option (command) to change the name of the large common button. Added an instruction to the admin page.  
// v.3.2.6 - added LIKE button for Facebook
// v.3.2.7 - Added command to describe the style of the button. Now each button can have its own custom style.
// v.3.2.8 - The initial list of buttons is expanded. Google search button. Whatsapp button.
// v.3.2.9 - fixed POST bug
// v.3.2.9.1 - fixed some security issues
// v.3.3 - fix: POST handler now in wp environment, nonce and checking permissions, and other
// v.3.3.1 - some fixes: sanitizing the image file name,
// v.3.3.2 - Options are written only to the database 
// v.3.3.3 - Added: max line 40, Viber share button, Telegram share button, 
//   row insertion in the settings table - *insertline*
//   deleting a row in the settings table - *deleteline*
//   Search buttons added: Yahoo, Bing, Ask, DuckDuckGo
//   Added table of examples for settings
//   Added the ability to make a backup file for settings and restore the settings table from this file
//   limit the Google search button to search only for the specified site, for example, to search on your site
//   write down the link as follows: https://www.google.com/search?q=$title+site%3Ayoursite.com
// v.3.3.4 - tested on wp524, fixed some PHP 7 Notice, fixed /r, removed style effect from wpautop, Like style setting, removing button shadow style. 
// v.3.3.5 - added button: Invite Viber Community, Viber Group. 
//   Now you can specify the condition for the button to appear. For example, a condition for the presence of a certain text in the title of an article or in the title of Buddypress group.  
// v.3.3.6 - fixed for Wordpress 5.5.3 & BuddyPress 6.3.0
//	 And now you can create many JS buttons with different names.
// v.3.3.6.1 - corrected some notes
// v.3.3.7 - A group of JS buttons now appears in horizontal table cells. Except positions afteractivity and intxt. Fixed several CSS styles.
// v.3.3.8 - For the Like button, the fblikedatashare parameter has been added - Facebook SDK generates two buttons at once - Like and Share. Added the ability to select buttons from simple templates.
// v.3.3.9 - Fixed width 200px of table cells for JS buttons, including for the Activity section of the site. 
//   The buttons began to open also on mouse hover. Several bugs fixed.
// v.3.4.1 - additional button images and Several bugs fixed.
// v.3.4.1.1 - v.3.4.1.5 - corrected some notes
// v.3.4.2 - SDK loading fix and Several bugs fixed
//


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly - WP not loaded

global $yr_bpshare_flag_bp;
if (!$yr_bpshare_flag_bp) {
	$yr_bpshare_flag_bp = 0;    // BP not loaded AND plugin not Initialize
}
	
// start internationalize  buddy-share-it-allusers-fb-yr
add_action( 'plugins_loaded', 'yr_bpshare_load_textdomain' );
function yr_bpshare_load_textdomain() {
    load_plugin_textdomain( 'buddy-share-it-allusers-fb-yr', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
// end internationalize

// Initialize the plugin once 
if ( !function_exists( 'bp_core_install' ) ) {
	require_once( ABSPATH . '/wp-admin/includes/plugin.php' );
	if ( is_plugin_active( 'buddypress/bp-loader.php' ) ) {
		require_once ( WP_PLUGIN_DIR . '/buddypress/bp-loader.php' );
	} else {  
		add_action('init', 'yr_wpshare_init');
		return;
	}
} else {
	add_action('init', 'yr_wpshare_init');
	return;
}
	add_action( 'bp_include', 'yr_bpshare_init' );
	
	
function yr_bpshare_init() {
	global $yr_bpshare_flag_bp;
	$yr_bpshare_flag_bp = 1;    // BP loaded and yr-bpshare.php loaded	
	require( dirname( __FILE__ ) . '/yr-bpshare.php' );	
}

function yr_wpshare_init() {	
	global $yr_bpshare_flag_bp;
	$yr_bpshare_flag_bp = 2;	// WP only loaded and yr-bpshare.php loaded
	require( dirname( __FILE__ ) . '/yr-bpshare.php' );	// yr-bpshare.php instead yr-wpshare
}

?>