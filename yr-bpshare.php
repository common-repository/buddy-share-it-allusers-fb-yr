<?php
// yr_bpshare 3.4.2
if ( ! defined( 'ABSPATH' ) ) exit;
//
global $yr_bpshare_linemax, $yr_noname1;
$yr_bpshare_linemax = 40;  // max table lines *version 3.3.2 =24 
$yr_noname1 = "no name";    // Share on: (name), if empty
global $yr_bpshare_options_lines_init_ser;
// declare initial options lines array 
$yr_bpshare_options_lines_init = array();
$i=0;
while ($i < $yr_bpshare_linemax) {
	$yr_bpshare_options_lines_init[$i] = array ( "name" => "", "img" => " ", "blog" => "", "activity" => "", "forum" => "", "groups" => "", "add1" =>0, "links" =>"" );
	$yr_bpshare_options_lines_init[$i]["name"] = $yr_noname1;
	$i++;
}
//
$yr_bpshare_options_lines_init[0]["name"] = '$jsbname=<Facebook Like>';
$yr_bpshare_options_lines_init[0]["img"] = "commands32.png";
//
$yr_bpshare_options_lines_init[1]["name"] = '$fblikesize=<large> $fblikelayout=<button_count>   $fblikedatashare=<true> $fblikeloc=<en_US>  $fblikeappid=';
$yr_bpshare_options_lines_init[1]["img"] = "commands32.png";
//
$yr_bpshare_options_lines_init[2]["name"] = '$fblikestyle=<display:inline;vertical-align:top;position:relative;left:-6px;>';
$yr_bpshare_options_lines_init[2]["img"] = "commands32.png";
//
$yr_bpshare_options_lines_init[3]["name"] = 'fblike buttonFBlike afteractivity';
$yr_bpshare_options_lines_init[3]["img"] = "fblike32.jpg";
$yr_bpshare_options_lines_init[3]["blog"] = 1; 
$yr_bpshare_options_lines_init[3]["activity"] = 0;
$yr_bpshare_options_lines_init[3]["forum"] = 0; 
$yr_bpshare_options_lines_init[3]["groups"] =1;
//
$yr_bpshare_options_lines_init[4]["name"] = '$jsbname=<Share to>';
$yr_bpshare_options_lines_init[4]["img"] = "commands32.png";
//
$yr_bpshare_options_lines_init[5]["name"] = "Facebook share afteractivity";
$yr_bpshare_options_lines_init[5]["img"] = "facebsh-c32.png";
$yr_bpshare_options_lines_init[5]["blog"] = 1; 
$yr_bpshare_options_lines_init[5]["activity"] =1; 
$yr_bpshare_options_lines_init[5]["forum"] = 1; 
$yr_bpshare_options_lines_init[5]["groups"] =1;
$yr_bpshare_options_lines_init[5]["links"] = 'http://www.facebook.com/sharer.php?u=$link&t=$title';
//
$yr_bpshare_options_lines_init[6]["name"] = "Twitter share afteractivity";
$yr_bpshare_options_lines_init[6]["img"] = "twitter-c32.png";
$yr_bpshare_options_lines_init[6]["blog"] = 1; 
$yr_bpshare_options_lines_init[6]["activity"] = 1;
$yr_bpshare_options_lines_init[6]["forum"] = 1; 
$yr_bpshare_options_lines_init[6]["groups"] =1;
$yr_bpshare_options_lines_init[6]["links"] = 'http://twitter.com/share?url=$link&text=$title';
//
$yr_bpshare_options_lines_init[7]["name"] = "LinkedIn afteractivity";
$yr_bpshare_options_lines_init[7]["img"] = "LinkedIn32.png";
$yr_bpshare_options_lines_init[7]["blog"] = 1; 
$yr_bpshare_options_lines_init[7]["activity"] = 1;
$yr_bpshare_options_lines_init[7]["forum"] = 1; 
$yr_bpshare_options_lines_init[7]["groups"] =1;
$yr_bpshare_options_lines_init[7]["links"] = 'http://www.linkedin.com/shareArticle?mini=true&url=$link&title=$title';
//
$yr_bpshare_options_lines_init[8]["name"] = "Digg afteractivity";
$yr_bpshare_options_lines_init[8]["img"] = "Digg32.png";
$yr_bpshare_options_lines_init[8]["blog"] = 1; 
$yr_bpshare_options_lines_init[8]["activity"] = 1;
$yr_bpshare_options_lines_init[8]["forum"] = 1; 
$yr_bpshare_options_lines_init[8]["groups"] =1;
$yr_bpshare_options_lines_init[8]["links"] = 'http://digg.com/submit?url=$link';
//
$yr_bpshare_options_lines_init[9]["name"] = "Email afteractivity";
$yr_bpshare_options_lines_init[9]["img"] = "Email32.png";
$yr_bpshare_options_lines_init[9]["blog"] = 1; 
$yr_bpshare_options_lines_init[9]["activity"] = 1;
$yr_bpshare_options_lines_init[9]["forum"] = 1; 
$yr_bpshare_options_lines_init[9]["groups"] =1;
$yr_bpshare_options_lines_init[9]["links"] = 'mailto:?subject=$title&body=$link';
//
$yr_bpshare_options_lines_init[10]["name"] = '$jsbname=<Mob+Viber>';
$yr_bpshare_options_lines_init[10]["img"] = "commands32.png";
//
$yr_bpshare_options_lines_init[11]["name"] = "WhatsApp share afteractivity";
$yr_bpshare_options_lines_init[11]["img"] = "whatsapp-c32.png";
$yr_bpshare_options_lines_init[11]["blog"] = 1; 
$yr_bpshare_options_lines_init[11]["activity"] = 1;
$yr_bpshare_options_lines_init[11]["forum"] = 0; 
$yr_bpshare_options_lines_init[11]["groups"] =1;
$yr_bpshare_options_lines_init[11]["links"] = 'https://api.whatsapp.com/send?text=$title%20$link';
//
$yr_bpshare_options_lines_init[12]["name"] = "telegram share, afteractivity";
$yr_bpshare_options_lines_init[12]["img"] = "telegram-c32.png";
$yr_bpshare_options_lines_init[12]["blog"] = 1; 
$yr_bpshare_options_lines_init[12]["activity"] = 1;
$yr_bpshare_options_lines_init[12]["forum"] = 0; 
$yr_bpshare_options_lines_init[12]["groups"] =1;
$yr_bpshare_options_lines_init[12]["links"] = 'https://telegram.me/share/url?url=$link&text=$title';
//
$yr_bpshare_options_lines_init[13]["name"] = "viber share , afteractivity";
$yr_bpshare_options_lines_init[13]["img"] = "vibershare_white32.png";
$yr_bpshare_options_lines_init[13]["blog"] = 1; 
$yr_bpshare_options_lines_init[13]["activity"] = 1;
$yr_bpshare_options_lines_init[13]["forum"] = 0; 
$yr_bpshare_options_lines_init[13]["groups"] =0;
$yr_bpshare_options_lines_init[13]["links"] = 'viber://forward?text=$link%20$title';
//
$yr_bpshare_options_lines_init[14]["name"] = 'viber join War in Ukraine news feed - afteractivity';
$yr_bpshare_options_lines_init[14]["img"] = "viberjoin_war_news32.png";
$yr_bpshare_options_lines_init[14]["blog"] = 1; 
$yr_bpshare_options_lines_init[14]["activity"] = 1;
$yr_bpshare_options_lines_init[14]["forum"] = 1; 
$yr_bpshare_options_lines_init[14]["groups"] =1;
$yr_bpshare_options_lines_init[14]["links"] = 'https://invite.viber.com/?g2=AQAWz4SlOONejk7O3GfzWu%2FnBdXEi%2BJ6kFOqKneY6Xfmx3vjo%2FDyGeS8eV%2B1k2WZ';
//
$yr_bpshare_options_lines_init[15]["name"] = '$buttonstyle=<height: 32px; width: 80px; >';
$yr_bpshare_options_lines_init[15]["img"] = "commands32.png";
//
$yr_bpshare_options_lines_init[16]["name"] = '$jsbname=<Google>';
$yr_bpshare_options_lines_init[16]["img"] = "commands32.png";
//
$yr_bpshare_options_lines_init[17]["name"] = 'Google search for:  imgsrc=https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png';
$yr_bpshare_options_lines_init[17]["img"] = "Google32.png";
$yr_bpshare_options_lines_init[17]["blog"] = 1; 
$yr_bpshare_options_lines_init[17]["activity"] = 1;
$yr_bpshare_options_lines_init[17]["forum"] = 0; 
$yr_bpshare_options_lines_init[17]["groups"] =0;
$yr_bpshare_options_lines_init[17]["links"] = 'https://www.google.com/search?q=$title';
//
$yr_bpshare_options_lines_init[18]["name"] = '$buttonstyle=< > for style reset';
//
$yr_bpshare_options_lines_init[19]["name"] = 'Yahoo search';
$yr_bpshare_options_lines_init[19]["img"] = "yahoo_purp32a.png";
$yr_bpshare_options_lines_init[19]["blog"] = 1; 
$yr_bpshare_options_lines_init[19]["activity"] = 1;
$yr_bpshare_options_lines_init[19]["forum"] = 0; 
$yr_bpshare_options_lines_init[19]["groups"] =0;
$yr_bpshare_options_lines_init[19]["links"] = 'https://search.yahoo.com/search?p=$title';
//
$yr_bpshare_options_lines_init[20]["name"] = '$jsbname=<GO to>';
$yr_bpshare_options_lines_init[20]["img"] = "commands32.png";
//
$yr_bpshare_options_lines_init[21]["name"] = 'Gotodirect to this page of activity - afteractivity';
$yr_bpshare_options_lines_init[21]["img"] = "gotodirect32.png";
$yr_bpshare_options_lines_init[21]["blog"] = 0; 
$yr_bpshare_options_lines_init[21]["activity"] = 1;
$yr_bpshare_options_lines_init[21]["forum"] = 0; 
$yr_bpshare_options_lines_init[21]["groups"] =0;
$yr_bpshare_options_lines_init[21]["links"] = '$link';


//

//
$yr_bpshare_options_lines_init_ser = serialize($yr_bpshare_options_lines_init);
//
global $yr_bpshare_options_lines;
$yr_bpshare_options_lines = array(
0 => array(), 1 => array(), 2 => array(), 3 => array(), 4 => array(), 5 => array(),
6 => array()
);

global $button_img_htm3;
global $yr_bpshare_optpath;
global $jsbname_flag;
global $yr_bpshare_fblike_flagSDK;  // =0 -returns SDK; =1 -SDK is on page  - v.3.2.6
global $yr_bpshare_fblikeappid;  // FB appId  for Like - v.3.2.6 
global $yr_bpshare_fblikeloc;  // en_US/fr_FR ...etc - local for Like button - v.3.2.6
global $yr_bpshare_fblikesize;  // small/large - size for Like button - v.3.2.6
global $yr_bpshare_fblikelayout;  // standard/box_count/button_count/button - layout for Like button - v.3.2.6
global $yr_bpshare_fblikestyle;  // style Like button - v.3.2.6
global $yr_bpshare_buttonstyle;  // "other buttons" custom style - v.3.2.7

global $yr_bpshare_optpath_init;
global $yr_bpshare_plugin_dir_path;  //  v.3.2.9
global $yr_bpshare_redir;  	// v.3.3
global $yr_bpshare_redir_admin_url;
global $yr_bpshare_options_lines_ser_nonce;

global $yr_bpshare_butt_tags;	//  3416
global $yr_bpshare_name_tags;	//  3417

$yr_bpshare_butt_tags = array(
'a' => array('href' => array(),  // does not give correct construction viber://forward  -342
	'rel' => array(), 'class' => array(), 'target' => array()),
'div' => array('class'=>array(), 'style'=>array(), 'data-href'=>array(), 'data-layout'=>array(), 'data-action'=>array(),
'data-size'=>array(), 'data-show-faces'=>array(), 'data-share'=>array()),
'table' => array('border'=>array(), 'style'=>array()),
'tr' => array(),
'td' => array('style'=>array()),
'img' => array('src'=>array(), 'alt'=>array(), 'title'=>array(), 'class' => array(), 'style' => array()),
'span' => array('style'=>array())
);

$yr_bpshare_name_tags = array(
'=<' => array()
);


$yr_bpshare_buttonstyle = '';    // default button custom style
$yr_bpshare_fblikestyle = '';	 // default Like button style
$yr_bpshare_fblikeloñ = 'en_US';  // default local for Like
$yr_bpshare_fblikeappid = '';   // default FB appId  for Like
$yr_bpshare_fblikesize = 'small';  // default Like button size
$yr_bpshare_fblikelayout = 'button_count';  // default Like button layout
$jsbname_flag = 0;    // 0 = user not define own jsbname - sharetrans by default

$button_img_htm3 = plugins_url("/img/", __FILE__);
// path to txt file for options (12*7=96)- more simple than Wp options 
$yr_bpshare_optpath = plugin_dir_path(__FILE__)."yr-bpshare-options";
$yr_bpshare_plugin_dir_path = plugin_dir_path(__FILE__);   // 3.2.9
$yr_bpshare_optpath_init = $yr_bpshare_plugin_dir_path . "yr-bpshare-options-init";
$yr_bpshare_redir = admin_url()."options-general.php?page=yr-bpshare";
// **!!** admin page = options-general.php?page=yr-bpshare
$yr_bpshare_redir_admin_url = admin_url();

// instruction for admin page:
// 1) You can create your own Button, Share Name, and Sharer URL, directly from admin page.
// Share Name can choose any.
// 2) You can to add (upload) own button image files into plugin dir /img/, 
// and will be better if 2-4 letters of this image name = 2-4 letters of "share on name",
// and images size must be: height = 16 or 32 (weight = any),
// and images name must include digital 16 or 32 
// 3) You can create your own Sharer URL (Php template) with rule: 
// variable $title - plugin replaced by Article title, 
// variable $link - plugin replaced by Article link
// all another text in http: link - may be yours
// 4) Button "Reset to init" - set options lines to plugin initial


add_action('admin_menu', 'yr_bpshare_admin_menu');
add_action( 'network_admin_menu', 'yr_bpshare_admin_menu' );

function yr_bpshare_admin_menu() {
	global $yr_bpshare_options_lines, $yr_bpshare_linemax, $yr_noname1, $button_img_htm3;
	add_submenu_page( 
	'options-general.php', // parent menu options-general.php / bp-general-settings / 
	'bpshare-yr',  // page_title 
	'BP Sharing YR',  // submenu name
	'manage_options',  // Administrator role
	'yr-bpshare',   // options-general.php?page=yr-bpshare
// **!!** admin page = yr-bpshare	
	'yr_bpshare_subpage');   // func displays the submenu page content

	//call register settings function
	add_action( 'admin_init', 'yr_bpshare_reg_settings' );
}

function yr_bpshare_reg_settings() {
	register_setting( 'yr_bpshare',  // option_group
	'yr_bpshare_options' );     // option_name
	}



function yr_bpshare_subpage() {   
	// *********** start admin subpage
	
	global $yr_bpshare_linemax, $yr_noname1, $button_img_htm3;
	global $yr_bpshare_options_lines_init_ser;
	global $yr_bpshare_options_lines;
	global $yr_bpshare_optpath;
	global $yr_bpshare_plugin_dir_path;  //  v.3.2.9
	global $yr_bpshare_optpath_init;
	global $yr_bpshare_redir;		// v.3.3
	global $yr_bpshare_redir_admin_url;
	global $yr_bpshare_flag_bp;
	global $yr_bpshare_options_lines_ser_nonce;
	
	if (!current_user_can('manage_options'))  {   // Admin check
		wp_die( __('BuddyShare-YR: You do not have sufficient permissions to access this admin page') );
	}
		
	$pluginpath = plugins_url();		
			
// dcl table
// dcl table htm
// dcl htm name
// v3.2: $name_htm1 = <input type="text"
$name_htm1a = '<tr class="alternate"><td width="10"><p align="center">';
$name_htm1b = '</p></td><td width="68"><p align="center"><textarea name="i';
$name_htm2 = '" rows="3" cols="16">';   /* value */
$name_htm3 = '</textarea></p></td>';	
// dcl htm button
$button_img_htm1 = '<td width="68"><p align="center">';
$button_img_htm2 = '<img src="';
// $button_img_htm3 = global
$button_img_htm4 = '" border="0"> '; // width="16" height="16"
$button_img_htm5 = '</p></td>';
// dcl select image
$select_img_htm1 = '<td width="68"><p align="center"><select name="i';
$select_img_htm1a = '" size="1">';
$select_img_htm2 = '<option selected value="';
$select_img_htm3 = '">';
$select_img_htm4 = '</option>';
$select_img_htm5 = '<option value="';
$select_img_htm6 = '</select></p></td>';
// dcl activity
$activity_htm1 = '<td width="68" valign="middle"><p align="center"><input type="checkbox" name="i';
$activity_htm2 = '" value="1"';
$activity_htm3 = ' checked></p></td>';
$activity_htm4 = '></p></td>';
// dcl blog, forums, groups - the same as activity
// dcl php template
$phptmpl_htm1 = '<td width="68"><p align="center"><textarea name="i';
$phptmpl_htm2 = '" rows="3" cols="20">';
$phptmpl_htm3 = '</textarea></p></td>';

	require_once "yr-bpshare-hlp.php";
	
	$yr_bpshare_hlploc = $yr_bpshare_plugin_dir_path . "yr-bpshare-hlploc.htm";		// 342 add .htm
	if (file_exists($yr_bpshare_hlploc) === false) {  // not exist locale hlp -3.2.9.1
		ob_start();
		yr_bpshare_hlp329();
		$hlploc =  ob_get_contents();
		ob_end_clean();
		
		$fptr = fopen($yr_bpshare_hlploc, 'w');
		fwrite($fptr,$hlploc);
		fclose($fptr);
	} else {}

	require_once "yr-bpshare-optexample.php";		//  3416
	$yr_bpshare_optexample_loc = $yr_bpshare_plugin_dir_path . "yr-bpshare-optexample.htm";
	if (file_exists($yr_bpshare_optexample_loc) === false) {  // not exist optexample.htm -3.4.1.6
		ob_start();
		yr_bpshare_optexample_htm();
		$yr_bpshare_optexample_content =  ob_get_contents();
		ob_end_clean();
		
		$fptr = fopen($yr_bpshare_optexample_loc, 'w');
		fwrite($fptr,$yr_bpshare_optexample_content);
		fclose($fptr);
	} else {}
?>

<html>
<div class="wrap">
<h2>BPShare-YR: <?php _e('Settings', 'buddy-share-it-allusers-fb-yr'); ?> 
</h2>
<hr>
<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
<input type="hidden" name="action" value="yr_bpshare_options_hnd">

<p>Hi! If you have not yet customized the button table of this plugin - then you can start with small templates. </p>
<p>1) Select one or more templates below and click the "Choose from templates" button.</p>
<p>2) You can change the settings in the Button settings table.</p>

<p>3) You can always return to the settings table offered by the plugin by default by clicking the "Reset" button.</p>
<hr>
<h3>Button Templates</h3>

<p>1) <input type="checkbox" name="templ1" value="1"> Like and Share buttons from Facebook SDK (API), nojsb /better to specify fblikeappid= of your site/</p>
<p>2) <input type="checkbox" name="templ2" value="1"> Like and Share buttons from Facebook SDK (API), inside jsb-button</p>
<p>3) <input type="checkbox" name="templ3" value="1"> Share buttons: Facebook, Twitter, LinkedIn, Digger, Vkontakte, Email, inside jsb-button</p>
<p>4) <input type="checkbox" name="templ4" value="1"> Share buttons: WhatsApp, Telegram, inside jsb-button</p>
<p>5) <input type="checkbox" name="templ5" value="1"> Viber buttons: Viber share, join Viber group (customize your group code), inside jsb-button</p>
<p>6) <input type="checkbox" name="templ6" value="1"> Search buttons: Google, Bing, Yahoo, Ask, Duckduckgo, inside jsb-button</p>
<p>7) <input type="checkbox" name="templ7" value="1"> Button: Contact me via Whatsapp Viber (enter your number in the settings)</p>
<p>8) <input type="checkbox" name="templ8" value="1"> Button set version 339</p>
<p>9) <input type="checkbox" name="templ9" value="1"> Button set for current version init</p>

<p align="left"><button name="templates" type="submit" class="button-primary" title="The settings table will be changed. If you want to save the settings table, please make a backup." value="Templates"><span style="font-size:8pt;">choose from one or several</span></button></p>

<hr>
<h3>Button settings table (for detailed settings)  <a title='FAQ, Instruction' href="<?php echo plugins_url('yr-bpshare-hlploc.htm',__FILE__); ?>" onclick="window.open(this.href,'','left=550,top=250,width=400,height=400'); return false;" ><img src="<?php echo plugins_url('img/info32.png',__FILE__); ?>" width="24" height="24" border="0" align="bottom"></a>
<a title='Settings examples' href="<?php echo plugins_url('yr-bpshare-optexample.htm',__FILE__);  ?>" target="_blank" onclick="yr_bpshare_OptionsExamplesyr(this.href,this.target); return false;" ><img src="<?php echo plugins_url('img/exampleset.png',__FILE__); ?>" width="68" height="24" border="0" align="bottom"></a></h3>

<table class="wp-list-table widefat users" border="1" width="100%">
    <tr>
        <td width="10" rowspan="2"><p align="center">No.</p></td>
		<td width="68" rowspan="2"><p align="center">Share on: (name)</p></td>
        <td width="68" rowspan="2">
            <p align="center"><?php _e('Button:', 'buddy-share-it-allusers-fb-yr') ?></p>
        </td>
        <td width="68" rowspan="2"><p align="center"><?php _e('Select button image:', 'buddy-share-it-allusers-fb-yr') ?></p></td>
        <td width="290" colspan="4">
            <p align="center"><?php _e('Content to share:', 'buddy-share-it-allusers-fb-yr') ?></p>
        </td>
        <td width="68" rowspan="2"><p align="center"><?php _e('Sharer URL (Php template):', 'buddy-share-it-allusers-fb-yr') ?></p></td>
    </tr>
    <tr>
        <td width="68" height="12">
            <p align="center"><?php _e('Activity', 'buddy-share-it-allusers-fb-yr') ?></p>
        </td>
        <td width="68" height="27">
            <p align="center"><?php _e('Blog', 'buddy-share-it-allusers-fb-yr') ?></p>
        </td>
        <td width="68" height="27">
            <p align="center"><?php _e('Forums', 'buddy-share-it-allusers-fb-yr') ?></p>
        </td>
        <td width="68" height="27">
            <p align="center"><?php _e('Groups', 'buddy-share-it-allusers-fb-yr') ?></p>
        </td>
    </tr>

<?php 

	if (file_exists($yr_bpshare_optpath_init) === false) {  // not exist init options file -3.2.9
		$fptr = fopen($yr_bpshare_optpath_init, 'w');
		fwrite($fptr,base64_encode($yr_bpshare_options_lines_init_ser));
		fclose($fptr);
	} else {}
	
	$yr_bpshare_options_lines_ser = $yr_bpshare_options_lines_init_ser;
	if (get_option('yr_bpshare_options')) {  
		$yr_bpshare_options_lines_ser = get_option('yr_bpshare_options');  // options from DB
	}	
	else {}
	if (file_exists($yr_bpshare_optpath)) {
		$yr_bpshare_options_lines_ser64 = file_get_contents($yr_bpshare_optpath);
		unlink( $yr_bpshare_optpath );		// del yr-bpshare-options file
		if (base64_decode($yr_bpshare_options_lines_ser64)) {  // correct base64
			$yr_bpshare_options_lines_ser = base64_decode($yr_bpshare_options_lines_ser64);			
		} 
		else {  // not correct base64 - maybe v3.2.8  without 64
			$yr_bpshare_options_lines_ser = $yr_bpshare_options_lines_ser64;					
		}
	} 
	else {}
	
    // save $yr_bpshare_options_lines_ser as template 
    $fptr = fopen($yr_bpshare_plugin_dir_path . "yr-bpshare-tempoptions", 'w');
    fwrite($fptr,$yr_bpshare_options_lines_ser);
    fclose($fptr);

    
	if (unserialize ($yr_bpshare_options_lines_ser) === false) {  // what seri error ?		
		$yr_bpshare_options_lines = unserialize($yr_bpshare_options_lines_init_ser);
	}  else {   // without seri error		
		$yr_bpshare_options_lines = unserialize ($yr_bpshare_options_lines_ser);		
	}
	
	// and update in DB - reserved 
	$yr_bpshare_options_lines_ser = serialize($yr_bpshare_options_lines);
	delete_option('yr_bpshare_options');
	update_option( 'yr_bpshare_options', $yr_bpshare_options_lines_ser ); // serialize
		
	// and create wp-nonce
	wp_nonce_field( "checking_nonce_". $yr_bpshare_plugin_dir_path );
	
	
// **************** table Loop  
$i = 0; // lines. For <input name="iXjY" : X=line (from 0), Y=input col (from 1)

while ($i < $yr_bpshare_linemax) {   // ********* htm table lines loop start
	
	if ((stripos($yr_bpshare_options_lines[$i]['name'],'$') !== false ) and 
	($yr_bpshare_options_lines[$i]['img'] == false) ){   // v.337, its command
		$yr_bpshare_options_lines[$i]['img'] = 'commands32.png';	
	} else {}
// name
?><tr class="alternate"><td width="10"><p align="center"><?php
echo esc_textarea($i);
?></p></td><td width="68"><p align="center"><textarea name="i<?php
echo esc_textarea($i). "j1";
?>" rows="3" cols="16"><?php  
echo esc_html($yr_bpshare_options_lines[$i]['name']);    
?></textarea></p></td><?php   
// button image
?><td width="68"><p align="center"><img src="<?php
echo esc_url($button_img_htm3). esc_html($yr_bpshare_options_lines[$i]['img']); 
?>" border="0"> <?php 	
echo esc_html($yr_bpshare_options_lines[$i]['img']); 
?></p></td><?php	
// select button image
?><td width="68"><p align="center"><select name="i<?php
echo esc_textarea($i). "j2";
?>" size="1"><option selected value="<?php 
echo esc_html($yr_bpshare_options_lines[$i]['img']); 
?>"><?php 	
echo esc_html($yr_bpshare_options_lines[$i]['img']); 
?></option><?php	
// read image files name
if ($desdir = @opendir( dirname( __FILE__ ) . '/img')) {
    $j=0;
	while (false !== ($bpsh_img_files[$j] = readdir($desdir))) { 
		if (($yr_bpshare_options_lines[$i]['name'] !== false) and ($yr_bpshare_options_lines[$i]['name'] !== "no name")) {
        // echo only if the same first 3 letters in image Name "Fac" = "Fac...png"(v.3.2.1 =2,3,4 letters)
		if (strtolower(substr($yr_bpshare_options_lines[$i]['name'],1,3)) == strtolower(substr($bpsh_img_files[$j],1,3)) and ($bpsh_img_files[$j] !== $yr_bpshare_options_lines[$i]['img'])) {
			?><option value="<?php  	
			echo esc_html($bpsh_img_files[$j]); 
			?>"><?php 			
			echo esc_html($bpsh_img_files[$j]); 
			?></option><?php
			}
		}
		else {
			if (substr($bpsh_img_files[$j],0,1) !== ".") {
			?><option value="<?php 		
			echo esc_html($bpsh_img_files[$j]); 
			?>"><?php 
			echo esc_html($bpsh_img_files[$j]);  
			?></option><?php
			} else {}
		}
		$j=$j+1;
		}
	closedir($desdir); 
	}
else {}
?></select></p></td><?php

// activity checked
?><td width="68" valign="middle"><p align="center"><input type="checkbox" name="i<?php
echo esc_textarea($i). "j3";
?>" value="1"<?php 
if ($yr_bpshare_options_lines[$i]['activity'] == 1) {  // checked
	?> checked></p></td><?php
	} else { ?>></p></td><?php }   // not checked
 
// blog checked
?><td width="68" valign="middle"><p align="center"><input type="checkbox" name="i<?php
echo esc_textarea($i). "j4";
?>" value="1"<?php
if ($yr_bpshare_options_lines[$i]['blog'] == 1) {  // checked
	?> checked></p></td><?php
	} else { ?>></p></td><?php }   // not checked

// forum checked
?><td width="68" valign="middle"><p align="center"><input type="checkbox" name="i<?php
echo esc_textarea($i). "j5";
?>" value="1"<?php 
if ($yr_bpshare_options_lines[$i]['forum'] == 1) {  // checked
	?> checked></p></td><?php
	} else { ?>></p></td><?php }   // not checked

// groups checked
?><td width="68" valign="middle"><p align="center"><input type="checkbox" name="i<?php
echo esc_textarea($i). "j6";
?>" value="1"<?php 
if ($yr_bpshare_options_lines[$i]['groups'] == 1) {  // checked
	?> checked></p></td><?php
	} else { ?>></p></td><?php }   // not checked
 
// php template
?><td width="68"><p align="center"><textarea name="i<?php
echo esc_textarea($i). "j7";
?>" rows="3" cols="20"><?php 
echo esc_html($yr_bpshare_options_lines[$i]['links']); 
?></textarea></p></td></tr><?php 		

	$i=$i+1;
}   //  ********  htm table lines loop end

?>
</table>

  
<p class="submit">
<input type="submit" class="button-primary" style="font-size:20pt;" value="<?php _e('Save Changes', 'buddy-share-it-allusers-fb-yr') ?>" />
</p>
<p>
<button name="for-yr-bpshare-options-file" type="button" title="Settings information for Backup saving or copying to yr-bpshare-options file" class="button-primary" style="float:left;" onclick="yr_bpshare_optionsbackupf1();" ><span style="font-size:8pt;">yr-bpshare-options file Backup</span></button></p>


<p align="right"><button name="reset" type="submit" class="button-primary" title="Please backup your settings before clicking this button." value="Reset"><span style="font-size:8pt;">Reset to initial - Removes your settings</span></button></p>

</form>
</div>

<script type="text/javascript">
function yr_bpshare_optionsbackupf1() {   
  var optionsbackup = window.open("", "", "width=820,height=600");
  optionsbackup.document.write('<h2>BPShare-YR: backup parameters to the archive</h2><textarea name="optbackuparea1" rows="30" cols="95">' + '<?php echo esc_html($yr_bpshare_options_lines_ser); ?>' + '</textarea><p>1) Select all in the window, e.g. right click</p><p>2) Copy all the information selected in the window to the clipboard</p><p>3) Using any text editor, save the information from the clipboard to a text file</p><p>4) To restore the parameters from the saved text file, copy this file to the plugin subdirectory under the name: yr-bpshare-options</p>');
}
</script>

<script>
function yr_bpshare_OptionsExamplesyr(href,target) {
	var winoptionsexample = window.open(href,target);  }
</script>

<hr>
<div style="font-size:14px;">
<p style="margin-top:10;"><a title='FAQ, Instruction' href="<?php echo plugins_url('yr-bpshare-hlploc.htm',__FILE__); ?>" onclick="window.open(this.href,'','left=550,top=250,width=400,height=400'); return false;" ><img src="<?php echo plugins_url('img/info32.png',__FILE__); ?>" width="32" height="32" border="0"align="bottom"></a></p>
<p><i><?php _e('You can:', 'buddy-share-it-allusers-fb-yr') ?></i></p>
<p><?php _e('1) You can create your own Button, Share Name, and Sharer URL, directly from admin page. Share Name can choose any.', 'buddy-share-it-allusers-fb-yr'); ?></p>
<p><?php _e('2) You can to add (upload) own button image files into plugin dir /img/, &nbsp;and will be better if 1-3 letters of this image name = 1-3 letters of &quot;share on name&quot;, &nbsp;and images size must be: height = 16 or 32 (weight = any), &nbsp;and images name must include digital 16 or 32.', 'buddy-share-it-allusers-fb-yr'); ?></p>
<p><?php _e('3) You can create your own Sharer URL (Php template) with rule: &nbsp;variable $title - plugin replaced by Article title, &nbsp;variable $link - plugin replaced by Article link, all another text in http: link - may be yours.', 'buddy-share-it-allusers-fb-yr'); ?></p>
<p><?php _e('- For example, for the Google button: to search the Internet for the article title, specify the link - https://www.google.com/search?q=$title. To limit Google search only within your site, write down the link as follows: https://www.google.com/search?q=$title+site%3Ayoursite.com', 'buddy-share-it-allusers-fb-yr'); ?></p>
<p><?php _e('4) Share on:(name) - may be your own text-name, but: if Shareon:(name) is empty or = "no name", then this line is not processed. Shareon:(name) can contain keywords:', 'buddy-share-it-allusers-fb-yr'); ?></p>
<p><?php _e('- If Shareon:(name) includes the keyword "nojsb", then such Button not hidden by one JS Share Button (JS Share Button - the default option).', 'buddy-share-it-allusers-fb-yr'); ?></p>
<p><?php _e('- If Shareon:(name) includes the keyword "intxt", then such Button appears in those blog articles, in the text of which the Shortcode [yr-bpshare-button] is inserted. Only one Shortcode [yr-bpshare-button] can be inserted anywhere in the article. The Shortcode [yr-bpshare-button] will be replaced by "intxt" buttons.', 'buddy-share-it-allusers-fb-yr'); ?></p>
<p><?php _e('- If Shareon:(name) includes the keyword "afteractivity", then such Button will appear after the Activity content. (By default, the button appears before the activity content.)', 'buddy-share-it-allusers-fb-yr'); ?></p>
<p><?php _e('- If Shareon:(name) includes the keyword "imgsrc=" and then a link is written, for example "imgsrc=http://yoursite.com/images/facebround32.png", then the image for such a button will be taken from this link. You can give a link to any image of any size and see how they are displayed on the site. This keyword is convenient for debugging. The keyword "imgsrc=" is more priority than setting the icons from the plugin sub-directory. The image settings from the plugin sub-directory on the admin page remain unchanged.', 'buddy-share-it-allusers-fb-yr'); ?></p>
<p><?php _e('- If Shareon:(name) includes the keyword "ifintitle=&lt;xxx&gt;", then such a button will appear on the site only if the xxx text is in the title of the article or in the name of the Buddypress group, or in the $title variable in the button link. Thus, for example, you can set different Join Viber Community buttons for different Buddypress groups.', 'buddy-share-it-allusers-fb-yr'); ?></p>
<p><?php _e('- If Shareon:(name) includes the keyword "buttonfblike", then such Button will be a Facebook Like button. In this row you also need to specify only the sections of the site where the Like button should be generated.', 'buddy-share-it-allusers-fb-yr'); ?></p>
<p><?php _e('- Commands to the plugin in Share on(name) field: $jsbname=&lt;Text and text&gt; -is the plugin command, "Text and text" will replace the standard JS Share name of a single large button.','buddy-share-it-allusers-fb-yr'); ?></p>
<p><?php _e('- Commands to the plugin to customize the FB Like button: $fblikeappid=, $fblikeloc=, $fblikesize=, $fblikelayout=, $fblikedatashare=, $fblikestyle=. For more details, please see the Instructions.','buddy-share-it-allusers-fb-yr'); ?></p>
<p><?php _e('- Examples of the values of the column Share on (name):  Facebook nojsb  / Linked2 intxt / Faceb3 intxt nojsb / Facebook nojsb imgsrc=http://own-home.com.ua/images/facebround32.png', 'buddy-share-it-allusers-fb-yr'); ?></p>
<p><?php _e('- Example of FB Like button settings: $fblikesize=&lt;small&gt; $fblikelayout=&lt;button_count&gt; $fblikeappid=&lt;222222222222222&gt; $fblikedatashare=&lt;true&gt;  $fblikestyle=&lt;display:inline;vertical-align:middle;position:relative;bottom:4px;&gt;', 'buddy-share-it-allusers-fb-yr'); ?></p>
<p><?php _e('- Example of FB Like button generation keywords: buttonFBlike nojsb', 'buddy-share-it-allusers-fb-yr'); ?></p>
<p><?php _e('- Commands to the plugin to customize your style of any button: $buttonstyle=&lt;border: 2px solid red;&gt; - For example. For more details, please see the Instructions.','buddy-share-it-allusers-fb-yr'); ?></p>
<p><?php _e('- If the Shareon:(name) field contains the keyword *insertline*, then an empty row will be inserted before such a row in the parameter table. But at the same time, the last bottom row of the parameter table will disappear.', 'buddy-share-it-allusers-fb-yr'); ?></p>
<p><?php _e('- If the Shareon:(name) field contains the keyword *deleteline*, then this row of the parameter table will be deleted. In this case, all the lines that are lower will rise one line up. And remember that if the Shareon:(name) field begins with: no name - then such a line of the parameter table is not processed.', 'buddy-share-it-allusers-fb-yr'); ?></p>
<p><?php _e('5) Button Reset_to_init - set options lines to plugin initial. Be careful. Your settings will be lost.', 'buddy-share-it-allusers-fb-yr'); ?></p>
<p><?php _e('6) When upgrading, your settings remain. After upgrade please press Save - rule for versions from 3.0 and higher. However, the sub-directory of the plugin images will be overwritten with images for the new version (all the old plugin icons are saved), i.e your own icon images will not be saved. Your own icons will need to be re-written in the sub-directory of the new version of the plugin.', 'buddy-share-it-allusers-fb-yr'); ?></p>
<p><?php _e('7) To restore your settings table from the archive, you need to copy the text backup file to the plugin directory under the name yr-bpshare-options.', 'buddy-share-it-allusers-fb-yr'); ?></p>

<hr>
<p><b><span style="font-size:14pt;"><a href="https://api.whatsapp.com/send/?phone=380683511825&text=HelloBPShareYR" target="_blank">Hello, I am from Ukraine!</a>
</span></b><img src="<?php echo plugins_url('img/flagua3232.png',__FILE__); ?>">
<span style="font-size:14pt;"> - If you have any questions about setting up the plugin, you can ask me in this <a href="https://invite.viber.com/?g2=AQBWo4Svv0ukA0qdf2%2BqGdQlSLKMJ0%2BE7r5eDFMvHalarqsHeBg6e%2BXObgRk3Y15" target="_blank">viber group.</a> I can help you customize the buttons on your site. 
You can also <a href="https://www.paypal.com/donate/?hosted_button_id=Z9EWDARP3SNZQ" target="_blank">donate </a> any amount and I will give this help directly to the defenders or people in need in Ukraine. Thanks. Regards, <a href="https://api.whatsapp.com/send/?phone=380683511825&text=HelloBPShareYR" target="_blank">Yuriy</a></span></p>

<p style="margin-top:10;"><i>(<a href="https://wordpress.org/support/plugin/buddy-share-it-allusers-fb-yr/reviews/" target="_blank">Feedback on the plugin</a>)</i></p>
</div>
</html>

<?php
}  // ********** end subpage function

//    **********  start processing buttons
if (file_exists($yr_bpshare_optpath) === false) {
	// read options from DB if not empty
	if (get_option('yr_bpshare_options')) {
		$yr_bpshare_options_lines_ser = get_option('yr_bpshare_options');
	} else {
		// if DB empty then options = init
		$yr_bpshare_options_lines_ser = $yr_bpshare_options_lines_init_ser;
	}
} else {
	// options file exist - read options
	$yr_bpshare_options_lines_ser64 = file_get_contents($yr_bpshare_optpath);
	if (base64_decode($yr_bpshare_options_lines_ser64)) {  // correct base64
		$yr_bpshare_options_lines_ser = base64_decode($yr_bpshare_options_lines_ser64);
	} else {  // not correct base64 - maybe v3.2.8  without 64
		$yr_bpshare_options_lines_ser = $yr_bpshare_options_lines_ser64;
	}
	
}
$yr_bpshare_options_lines = unserialize ($yr_bpshare_options_lines_ser);

// ********** start2:  is not admin  ==============
//if ( ! is_admin() ) {
	
	// ** blog hook

//add_action('bp_before_blog_single_post', 'yr_bpshare_blog_hook', 999);  // upper left
//add_action('bp_after_blog_single_post', 'yr_bpshare_blog_hook', 999);    // under bottom
// left upper corner each post incl. stream loop on main page
	add_filter( 'the_content', 'yr_bpshare_blog_hook', 999);   // 339 341
		
if ($yr_bpshare_flag_bp == 1) {  // processing for Buddypress
	// ** activity hook
	// show not only for members but for all 
	//	add_filter('bp_insert_activity_meta' , 'yr_bp_share_it_content_filter'); // v.321
	add_filter('bp_get_activity_content_body' , 'yr_bp_share_it_content_filter');  // v.322
	function yr_bp_share_it_content_filter($activity_content2) {
		// receive from return - array($buttons_ret,$intxt_buttons_ret)
		$yr_bpsh_activitybuttonsarray = yr_bpshare_activity_meta();
		// buttons before + content + after "afteractivity"
		$yr_bpsh_activity_ret1 = $yr_bpsh_activitybuttonsarray[0] . $activity_content2;
		$yr_bpsh_activity_ret2 = $yr_bpsh_activitybuttonsarray [1];
		return   $yr_bpsh_activity_ret1 . $yr_bpsh_activity_ret2 ;
		// default from v.321 = before
	}

	// ** forum hook - Adds share button to forum topics
	add_action('bp_before_group_forum_topic_posts', 'yr_bpshare_forum_hook', 999);

	// ** group hook
	add_action('bp_group_header_meta', 'yr_bpshare_group_hook', 999);
} 	// end processing for Buddypress
	else {	// only Wordpress
	}

//} 
//else { }
// ********* stop2: is not admin  ================



// function on activity hook
function yr_bpshare_activity_meta() {
	global $yr_bpshare_options_lines;
	global $yr_bpshare_linemax, $button_img_htm3;
	global $yr_bpshare_plugin_dir_path;
	global $yr_bpshare_fblike_flagSDK;
			
	$activitylink = bp_get_activity_thread_permalink();  
// Unspecified case 26 06 17  --- wrong result bp_get_activity_thread_permalink() 
	$pos1 = stripos($activitylink, "Content-Type:");
	if (  $pos1 != false ) {
			$url2 = substr($activitylink,0,$pos1);
			$activitylink = $url2;
		} else {}
// the same case
	$pos1 = stripos($activitylink, "Content-Length:");
	if (  $pos1 != false ) {
			$url2 = substr($activitylink,0,$pos1);
			$activitylink = $url2;
		} else {}
	
	$activitylink_reserv = $activitylink;	// v 341
//*** Buddypress activity redirect url - special for facebook	
	$position_activity = stripos($activitylink, "/p/");    
	if (  ($position_activity != false)  ) {
		//  WP HTTP - attempt to get buddypress url redirects
		$respwp_headers = wp_remote_head( $activitylink );
		
		$respwp_headers2_url_flag =0;	// 3413
		if (isset($respwp_headers["headers"])) {	// Requests_Utility_CaseInsensitiveDictionary Object ( [data:protected] => Array 
			$respwp_headers2 = $respwp_headers["headers"]->offsetGet('location');    //  3413
			if (substr($respwp_headers2,0,4) == "http") {
				$activitylink = $respwp_headers2;
				$respwp_headers2_url_flag =1;   // yes redirect from wp_remote_head  -3411
			} else {
				}
		} else {
		}

//crd	if ($respwp_headers2_url_flag == 0) {    // in case we didn't get the redirect url from wp_remote_head
			// left for early versions of WordPress when the header feature didn't show redirects
			// if the header from wp_remote_head does not contain a redirect url
//crd		$headers = "";
//crd		if( function_exists('curl_init')) {
				// second attempt to get buddypress url redirects 
//crd			$ch = curl_init();
//crd			curl_setopt($ch, CURLOPT_URL, $activitylink);
//crd			curl_setopt($ch, CURLOPT_HEADER, 1);  // incl header
//crd			curl_setopt($ch, CURLOPT_NOBODY, 1);  // not incl txt
//crd			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  // not echo but return
				//		curl_setopt($ch, CURLOPT_HTTPGET, 1);  // in GET (default)
//crd			$headers = curl_exec($ch);
//crd			curl_close($ch);
//crd			}	else {}
			// url from header
//crd			$pos1 = 0;
//crd			if (  $pos1 != false ) {
//crd			$url2 = substr($headers,$pos1+10);
//crd			$url2_l = strlen($url2);
//crd			$url2 = substr($url2,0,$url2_l-4);  // last 4 bytes
//crd			$activitylink = $url2;		
//crd		} else {}
//crd		}  else { }

	} else {}
//*** end BP redirect

//	$activitylink = $activitylink_reserv;   // to use or not to use direct url?  v.341: to use
		
	$activitytitle = bp_get_activity_feed_item_title() ;  
	$activitytitle = sanitize_text_field( $activitytitle );   // 341
	$activitytitle = str_replace(array('"', "'"),"",$activitytitle);  // 341
	$activitytitle = str_replace(array(':'),"-",$activitytitle);    // 341
	$activitytitle = str_replace(array('[',']'),"",$activitytitle);    // 341
	
	$pluginpath = plugins_url();
	
	
	return yr_bpshare_button_activity_filter("activity",$yr_bpshare_options_lines,$yr_bpshare_linemax,$button_img_htm3,$activitylink,$activitytitle) ;
}   // end activity hook function

// function on forum hook
function yr_bpshare_forum_hook() {
	global $yr_bpshare_options_lines;
	global $yr_bpshare_linemax, $button_img_htm3;
	global $yr_bpshare_fblike_flagSDK;

	$topiclink = bp_get_the_topic_permalink();
	$topictitle = bp_get_the_topic_title();
	$pluginpath = plugins_url();
	
	$activitylink = $topiclink;
	$activitytitle = $topictitle;
	
	yr_bpshare_button_activity_filter("forum",$yr_bpshare_options_lines,$yr_bpshare_linemax,$button_img_htm3,$activitylink,$activitytitle) ;
	
}

// function on group hook
function yr_bpshare_group_hook() {
	global $yr_bpshare_options_lines;
	global $yr_bpshare_linemax, $button_img_htm3;
	global $yr_bpshare_fblike_flagSDK;

	$grouplink =  bp_get_group_permalink();
	$groupname = bp_get_group_name();
	$pluginpath = plugins_url();
	
	$activitylink = $grouplink;
	$activitytitle = $groupname;
	
	yr_bpshare_button_activity_filter("groups",$yr_bpshare_options_lines,$yr_bpshare_linemax,$button_img_htm3,$activitylink,$activitytitle);
	
}

// function on blog hook
function yr_bpshare_blog_hook($content) {  // $content - if add_filter( 'the_content', 
	global $yr_bpshare_options_lines;
	global $yr_bpshare_linemax, $button_img_htm3;
	$yr_bpsh_div_before_butt = '<div class="yr_deltag_p">';  // for del wpautop
	$yr_bpsh_div_after_butt = '</div>';

	$postlink =  get_permalink();
	$posttitle = get_the_title();
	$pluginpath = plugins_url();
	
	$activitylink = $postlink;
	$activitytitle = $posttitle;

	// receive from return - array($buttons_ret,$intxt_buttons_ret)
	$yr_bpshare_blogbuttonsarray = yr_bpshare_button_activity_filter("blog",$yr_bpshare_options_lines,$yr_bpshare_linemax,$button_img_htm3,$activitylink,$activitytitle);
	
	// seek shortcode [yr-bpshare-button] in $content and replace by  $intxt_buttons_ret
	$buttonpos = stripos($content,'[yr-bpshare-button]');
	if(!is_feed() && !is_home()) {	// 341
		if ($buttonpos) {
		$content = substr($content,0,$buttonpos) . $yr_bpsh_div_before_butt . $yr_bpshare_blogbuttonsarray[1] . $yr_bpsh_div_after_butt . substr($content,$buttonpos+19);
		} else { 	}
	
		return $content . $yr_bpsh_div_before_butt . $yr_bpshare_blogbuttonsarray[0] . $yr_bpsh_div_after_butt;
		// for share butt style under blog post
	// if add_filter( 'the_content', 'yr_bpshare_blog_hook');
	}  else {   // feed or home
		if ($buttonpos) {
			$content = substr($content,0,$buttonpos) . substr($content,$buttonpos+19);
		}    //341
		return $content;
	}
}


// create BUTTONS function  ==============
function yr_bpshare_button_activity_filter($activity_par,$yr_bpshare_options_lines,$imax,$button_img_url,$activitylink,$activitytitle) {
	global $yr_noname1; 
	global $jsbname_flag;   //  1 = user js button name  
	global $yr_bpshare_fblike_flagSDK;  // =0 -returns SDK; =1 -SDK is on page  - v.3.2.6
	global $yr_bpshare_fblikeappid;  // FB appId  for Like - v.3.2.6 
	global $yr_bpshare_fblikeloc;  // en_US/fr_FR ...etc - local for Like button - v.3.2.6
	global $yr_bpshare_fblikesize;  // small/large - size for Like button - v.3.2.6
	global $yr_bpshare_fblikelayout;  // standard/box_count/button_count/button - layout for Like button - v.3.2.6
	global $yr_bpshare_fblikestyle;   // style for Like button - v.3.2.6
	global $yr_bpshare_buttonstyle;  // "other buttons" style - v.3.2.7 
	global $yr_bpshare_fblikedatashare;   //  true =like+share or false =like -v.3.3.8
	global $yr_bpshare_butt_tags;	//  3416
	
	$yr_bpshare_fblikestyle = '';	 //  default for first line - init for all commands
	$yr_bpshare_buttonstyle = '';
	$yr_bpshare_fblikesize = 'small';  // default Like button size
	$yr_bpshare_fblikelayout = 'button_count';  // default Like button layout
	$yr_bpshare_fblikedatashare = 'false';	// default only Like button
	$yr_bpsh_nojsbclassdiv = '<div class="yr_nojsb">';
	$yr_bpsh_nojsbclassdiv_end = '</div>';
	$yr_bpsh_share_buttonclassdiv = '<div class="yr_share_button">';
	// '<p style="margin-top:0px; margin-bottom:-5px;">&nbsp;</p>'   -327
	$yr_bpsh_marginbottom5 = '<span style="margin-top:0px; margin-bottom:-5px;">&nbsp;</span>';  // 334
		
	$jsbuttonflag = 1;   // "nojsb"  - default = yes JS Butt
	
	if ($jsbname_flag == 0) {
		$sharetrans = __('Share more', 'buddy-share-it-allusers-fb-yr');
	} else {
		if (empty($sharetrans)) {
			$sharetrans = __('Share more', 'buddy-share-it-allusers-fb-yr');
		} else {}
	}
			
	$shareit = '';   // JS buttons group 
	$shareit_arr = array();   // 336  array for JS buttons group  - null
	$shareit_nojs = '';  // not JS buttons group
	
	$intxt_shareit = '';   // intxt Blog - JS buttons group 
	$intxt_shareit_arr = array();   // 336  array for intxt JS buttons group  - null
	$intxt_shareit_nojs = '';  // intxt Blog - not JS buttons group
	
	$afteractiv_shareit = '';   // afteractivity - JS buttons group 
	$afteractiv_shareit_arr = array();   // 336  array for afteractiv JS buttons group  - null
	$afteractiv_shareit_nojs = '';  // afteractivity - not JS buttons group
	
	$i = 0;  
	while ($i < $imax) { 	// START while lines	
		
		$jsbname_pos = stripos($yr_bpshare_options_lines[$i]["name"],'$');
		if ($jsbname_pos !== false) {    	// v.3.2.5 this is plugin command line,  includes $
			$jsbname_pos2 = stripos($yr_bpshare_options_lines[$i]["name"],'$jsbname=<');
			if ($jsbname_pos2 === false) {
				// What is the plugin command? (beginning with $ symbol)
				$fblikeappid2 = yr_bpshare_keyw_value($yr_bpshare_options_lines[$i]["name"],'$fblikeappid=<');
				if ($fblikeappid2) {
					$yr_bpshare_fblikeappid = $fblikeappid2;   // LIKE appid
				}  else {}
				$fblikeloc2 = yr_bpshare_keyw_value($yr_bpshare_options_lines[$i]["name"],'$fblikeloc=<');
				if ($fblikeloc2) {
					$yr_bpshare_fblikeloc = $fblikeloc2;    // LIKE loc not en
				}  else {}
				$fblikesize2 = yr_bpshare_keyw_value($yr_bpshare_options_lines[$i]["name"],'$fblikesize=<');
				if ($fblikesize2) {
					$yr_bpshare_fblikesize = $fblikesize2;   //  LIKE size 
				}  else {}
				$fblikelayout2 = yr_bpshare_keyw_value($yr_bpshare_options_lines[$i]["name"],'$fblikelayout=<');
				if ($fblikelayout2) {
					$yr_bpshare_fblikelayout = $fblikelayout2;  // LIKE layout button
				}  else {}
				$fblikestyle2 = yr_bpshare_keyw_value($yr_bpshare_options_lines[$i]["name"],'$fblikestyle=<');
				if ($fblikestyle2) {
					$yr_bpshare_fblikestyle = ' style="'.$fblikestyle2.'"';  // LIKE style
				}  else {}
				$fblikedatashare2 = yr_bpshare_keyw_value($yr_bpshare_options_lines[$i]["name"],'$fblikedatashare=<');
				if ($fblikedatashare2) {
					$yr_bpshare_fblikedatashare = $fblikedatashare2;  // true =like+share or false =like
				}  else {}
				
				$buttonstyle2 = yr_bpshare_keyw_value($yr_bpshare_options_lines[$i]["name"],'$buttonstyle=<');
				if ($buttonstyle2) {
					$yr_bpshare_buttonstyle = $buttonstyle2;  // other button custom style
					$shareit_arr[$sharetrans]["buttonstyle"] = $buttonstyle2;  // 3.3.6
					$intxt_shareit_arr[$sharetrans]["buttonstyle"] = $buttonstyle2;  // 3.3.6
					$afteractiv_shareit_arr[$sharetrans]["buttonstyle"] = $buttonstyle2;  // 3.3.6
				}  else {}
			}
			else {	
				// Share more button name - by user
				$sharetrans_temp = substr($yr_bpshare_options_lines[$i]["name"],$jsbname_pos2+10);  // 10= lenth $jsbname=<
				$jsbname_pos3 = stripos($sharetrans_temp,'>');
				if ($jsbname_pos3 === false) {}
				else {
					$sharetrans = substr($sharetrans_temp,0,$jsbname_pos3);
					$jsbname_flag = 1;
					
					if (isset($shareit_arr[$sharetrans]["shareit"]))	
                        {$shareit = $shareit_arr[$sharetrans]["shareit"]; }  // 336
					 	// 339 undefined index php notice
					else {$shareit = "";}
					if (isset($intxt_shareit_arr[$sharetrans]["shareit"]))
						{$intxt_shareit = $intxt_shareit_arr[$sharetrans]["shareit"]; }  // 336
					    // 339 undefined index php notice
					else {$intxt_shareit = "";}
					if (isset($afteractiv_shareit_arr[$sharetrans]["shareit"]))
						{$afteractiv_shareit = $afteractiv_shareit_arr[$sharetrans]["shareit"]; }   // 336
						// 339 undefined index php notice
					else {$afteractiv_shareit = "";}					  
				}
				$sharetrans = sanitize_text_field($sharetrans);
			}  
		}  
	else { 	//  button line  ***
		
	$buttonfblike_pos = stripos(strtolower($yr_bpshare_options_lines[$i]["name"]),'buttonfblike');  // v.3.2.6
	
	if ($buttonfblike_pos !== false) {  
		// this is a string for like button  - v.3.2.6

				
		if  ($yr_bpshare_options_lines[$i][$activity_par] == 1) {  // marked page
		// button
		$yr_bpshare_button = yr_bpshare_fblikediv($activitylink);
				
		// intxt --  the same as 3.2.5
		$name_intxt_pos = stripos($yr_bpshare_options_lines[$i]["name"],"intxt");
		$name_nojsb_pos = stripos($yr_bpshare_options_lines[$i]["name"],"nojsb");
		$name_afteractivity_pos = stripos($yr_bpshare_options_lines[$i]["name"],"afteractivity");
			if ($name_intxt_pos !== false ) {  
				// button only for intxt
				if ($name_nojsb_pos !== false) {	
					// separate: nojsb
					$intxt_shareit_nojs = $intxt_shareit_nojs . $yr_bpshare_button . ' ';
				} else {	// not nojsb
					$intxt_shareit = $intxt_shareit . $yr_bpshare_button . ' ';
					$intxt_shareit_arr[$sharetrans]["shareit"] = $intxt_shareit;  // 3.3.6
				}	
				
			} else {	// not intxt
				if ($activity_par == "activity") {  
					// and activity hook
					if ($name_afteractivity_pos !== false) {  
						// separate before after 
						if ($name_nojsb_pos !== false) {	
						// and nojsb
							$afteractiv_shareit_nojs = $afteractiv_shareit_nojs . $yr_bpshare_button . ' ';
						} else {	
						// not nojsb
							$afteractiv_shareit = $afteractiv_shareit . $yr_bpshare_button . ' ';
							$afteractiv_shareit_arr[$sharetrans]["shareit"] = $afteractiv_shareit;  // 3.3.6
						}					
					} else {	// not afteractivity
						if ($name_nojsb_pos !== false) {	
							// and nojsb
							$shareit_nojs = $shareit_nojs . $yr_bpshare_button . ' ';
						} else {	// not nojsb
							$shareit = $shareit . $yr_bpshare_button . ' ';
							$shareit_arr[$sharetrans]["shareit"] = $shareit;  // 3.3.6
						}
					}		
				}
				else {
					// not activity hook and not intxt
					if ($name_nojsb_pos) {	
						// yes nojsb
						$shareit_nojs = $shareit_nojs . $yr_bpshare_button . ' ';
					} else {	// not nojsb
						$shareit = $shareit . $yr_bpshare_button . ' ';
						$shareit_arr[$sharetrans]["shareit"] = $shareit;  // 3.3.6
					}
				}
			}	// end not intxt
		}	else {} //  end button if
	}   // end fblike
	else {	// not fblike
		// v335: additional if for yr_bpshare_options_lines[$i]["name"]
		$ifintitle = false;
		$ifintitle_check = true;
		$ifintitle_pos2 = false;
		$ifintitle_pos = stripos($yr_bpshare_options_lines[$i]["name"],'ifintitle=<');
		if ($ifintitle_pos) {	// ifintitle=<    if presents
			$ifintitle_check = false;
			$ifintitle = substr($yr_bpshare_options_lines[$i]["name"],$ifintitle_pos+11); // 11=lenth ifintitle=<
			$ifintitle_pos2 = stripos($ifintitle,'>');
			if ($ifintitle_pos2 === false) { }
			else {
				$ifintitle = substr($ifintitle,0,$ifintitle_pos2);					
			}
			$ifintitle_check = stripos($activitytitle,$ifintitle);
			// if $ifintitle_check not false the button must appear -- v335
		} else {}
		
		
		// all before 3.2.6
		if (($jsbname_pos === false) and ($yr_bpshare_options_lines[$i][$activity_par] == 1) and (stripos($yr_bpshare_options_lines[$i]["name"],$yr_noname1) === false) and ($ifintitle_check !== false) ) {
						
			// links processing 
						
			if ($activitylink) { }		// 341   - empty link for buttons? 
			else { 		// v.341: buddypress 9.1.1 -error activity hook
				$activitylink = sanitize_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);   // url must be -341
				if (isset($_SERVER['HTTPS']) ) { 
					$activitylink = sanitize_url("https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
				}	
				else { 					
				}
//				$activitylink = sanitize_url($activitylink);
			}
					
			// replace $link
			$articlelink = str_replace('$link',$activitylink,$yr_bpshare_options_lines[$i]["links"]);   // 341
		
			// replace $title
			$titlepos = stripos($articlelink,'$title');
			if ($titlepos) {
				$articlelink = substr($articlelink,0,$titlepos) . $activitytitle . substr($articlelink,$titlepos+6);
			} else { 	}
						
			$buttonalt = 'YR_BPshare: ' . $yr_bpshare_options_lines[$i]["name"];
			$buttontitle = $yr_bpshare_options_lines[$i]["name"] . ' '.
			$activitytitle ;  
			// title = 26 - 60 utf name - tuning...
			
			if ($ifintitle) {	// clear from keyword ifintitle=<...>
				$ifintitle_w1 = 'ifintitle=<' . $ifintitle;
				if ($ifintitle_pos2) {
					$ifintitle_w1 = $ifintitle_w1 . '>';
				} else {}
				yr_bpshare_clearkeyw($buttonalt,$ifintitle_w1);
				yr_bpshare_clearkeyw($buttontitle,$ifintitle_w1);
			} else {}
			
			yr_bpshare_clearkeyw($buttonalt,"nojsb");  // clear from keywords
			yr_bpshare_clearkeyw($buttontitle,"nojsb");
			yr_bpshare_clearkeyw($buttonalt,"intxt");
			yr_bpshare_clearkeyw($buttontitle,"intxt");
			yr_bpshare_clearkeyw($buttonalt,"afteractivity");
			yr_bpshare_clearkeyw($buttontitle,"afteractivity");
			
			// button
			$yr_bpshare_button = '';	
			$yr_bpsh_imgsrc = '';   $yr_bpsh_imgsrchttplen = 0;
			yr_bpshare_imgsrc($yr_bpshare_options_lines[$i]["name"],"imgsrc=",$yr_bpsh_imgsrc,$yr_bpsh_imgsrcpos,$yr_bpsh_imgsrchttplen);  // v3.2.1
						
			$yr_bpshare_button = $yr_bpshare_button . '<a rel="nofollow" class="new-window yr_del_underline" target="_blank" href="' . $articlelink . '"><img src="' ;
			if ($yr_bpsh_imgsrcpos and $yr_bpsh_imgsrchttplen >0) { // yes  imgsrc= +http not empty
				$yr_bpshare_button = $yr_bpshare_button . 
				$yr_bpsh_imgsrc;
				yr_bpshare_clearkeyw($buttonalt,"imgsrc=");
				yr_bpshare_clearkeyw($buttonalt,$yr_bpsh_imgsrc);
				yr_bpshare_clearkeyw($buttontitle,"imgsrc=");
				yr_bpshare_clearkeyw($buttontitle,$yr_bpsh_imgsrc);
			}
			else {
				$yr_bpshare_button = $yr_bpshare_button . 
				$button_img_url .
				$yr_bpshare_options_lines[$i]["img"] ;
			}
						
			$yr_bpshare_button = $yr_bpshare_button .
			'" alt="' . $buttonalt;
			$yr_bpshare_button = $yr_bpshare_button . '" title="' . $buttontitle;			
						
				// vertical image align - only for 16px pic, eg name = LinkedIn16.png
				if (stripos($yr_bpshare_options_lines[$i]["img"],"16") !== false) { // 16px pic - 327: margin style deleted
					$yr_bpshare_button = $yr_bpshare_button . '" class="yr_share_img"  style="'.$yr_bpshare_buttonstyle.'"></a>';
				}
				else // 32px image  OR  any   
				{$yr_bpshare_button = $yr_bpshare_button . '" class="yr_share_img" style="'.$yr_bpshare_buttonstyle.'"></a>';}
			
			// intxt 
			if (stripos($yr_bpshare_options_lines[$i]["name"],"intxt") !== false ) {  
				// button only for intxt
				if (stripos($yr_bpshare_options_lines[$i]["name"],"nojsb") !== false) {	
					// separate: nojsb
					$intxt_shareit_nojs = $intxt_shareit_nojs . $yr_bpshare_button . ' ';
				} else {	// not nojsb
					$intxt_shareit = $intxt_shareit . $yr_bpshare_button . ' ';
					$intxt_shareit_arr[$sharetrans]["shareit"] = $intxt_shareit;  // 3.3.6
					
				}	
				
			} else {	// not intxt
				if ($activity_par == "activity") {  
					// and activity hook
					if (stripos($yr_bpshare_options_lines[$i]["name"],"afteractivity") !== false) {  
						// separate before after 
						if (stripos($yr_bpshare_options_lines[$i]["name"],"nojsb") !== false) {	
						// and nojsb
							$afteractiv_shareit_nojs = $afteractiv_shareit_nojs . $yr_bpshare_button . ' ';
						} else {	
						// not nojsb
							$afteractiv_shareit = $afteractiv_shareit . $yr_bpshare_button . ' ';
							$afteractiv_shareit_arr[$sharetrans]["shareit"] = $afteractiv_shareit;  // 3.3.6
						}	
				
					} else {	// not afteractivity
						if (stripos($yr_bpshare_options_lines[$i]["name"],"nojsb") !== false) {	
							// and nojsb
							$shareit_nojs = $shareit_nojs . $yr_bpshare_button . ' ';
						} else {	// not nojsb
							$shareit = $shareit . $yr_bpshare_button . ' ';
							$shareit_arr[$sharetrans]["shareit"] = $shareit;   // 3.3.6
						}
					}		
				}
				else {
					// not activity hook and not intxt
					if (stripos($yr_bpshare_options_lines[$i]["name"],"nojsb") !== false) {	
						// yes nojsb
						$shareit_nojs = $shareit_nojs . $yr_bpshare_button . ' ';
					} else {	// not nojsb
						$shareit = $shareit . $yr_bpshare_button . ' ';
						$shareit_arr[$sharetrans]["shareit"] = $shareit;   // 3.3.6
					}
				}
								
			}	// end not intxt	
			
			
		} else {}
	}
	}
		$i=$i+1;

	}	// END while lines
	
		
	// classic button - css  -------------
	// JS Share button
	// -- 3.3.6   JS Share button array
	// -- 3.3.7   added <td>
    // -- 3.3.9   tdwidth=200
    $yr_tdwidth_temp = 200;    // default cell width
	if (isset($buttons)) {} else {$buttons = "";} // undef var 339
    $yr_jsbuttontableflag = 0;
	foreach ($shareit_arr as $sharetrans_arr => $shareit_arr_elm) {			
		if ($shareit_arr_elm["shareit"]) {
			if ($yr_jsbuttontableflag == 0) {
			$buttons = $buttons . '<table border="0" style="border:0px; margin:0 0 0 0; width: unset;"><tr>';
			$yr_jsbuttontableflag = 1;
			}	else {}
						$buttons = $buttons . '<td style="border:0px; vertical-align:top; width:'.$yr_tdwidth_temp.
// 339           'px;"><div class="bp-share-it-button-group yrgeneric-button"><a>'.$sharetrans_arr.'</a></div><div class="share-buttons group"><ul>' . $shareit_arr_elm["shareit"] . '</ul></div></td>'; 
// 341
			'px;"><div class="bp-share-it-button-group yrgeneric-button"><a>'.$sharetrans_arr.'</a></div><div class="share-buttons group" style="margin-top:10px;">' . $shareit_arr_elm["shareit"] . '</div></td>'; 
			// .$yr_bpsh_marginbottom5 - up to version 3.3.6
		} else {}	
	}
	if ($yr_jsbuttontableflag == 1) {
		$buttons = $buttons . '</tr></table>';
		$yr_jsbuttontableflag = 0;
	} else {}
	
	
	// not JS  
	if (isset($buttons_nojs)) {} else {$buttons_nojs = "";} // undef var 339
    if (!empty($shareit_nojs))  {
		$buttons_nojs = $yr_bpsh_share_buttonclassdiv.$shareit_nojs.'</div>';
        $buttons_nojs = $yr_bpsh_nojsbclassdiv.$buttons_nojs . $yr_bpsh_nojsbclassdiv_end;
	} else {   	}
	// common classic button
	$buttons_ret = $buttons_nojs . $buttons ;  
	
	// intxt button - css	----------------
	// JS intxt Share button
	
	// -- 3.3.6   JS intxt Share button array
	foreach ($intxt_shareit_arr as $sharetrans_arr => $shareit_arr_elm) {		
		if (isset($shareit_arr_elm["shareit"])) {	// php notice
			$intxt_buttons = $intxt_buttons . '<div class="bp-share-it-button-group yrgeneric-button"><a>'.$sharetrans_arr.'</a></div><div class="share-buttons group" style="margin-top:10px;">' . $shareit_arr_elm["shareit"] . '</div>';
			// 341: style="margin-top:10px;"   <ul> -del
		}	else {}
	}	//  else {$intxt_buttons = null;}	// v335
	
	// not JS intxt
	if (!empty($intxt_shareit_nojs)) {
		$intxt_buttons_nojs = $yr_bpsh_share_buttonclassdiv.$intxt_shareit_nojs.'</div>';
	}	else {$intxt_buttons_nojs = "";}	 // v335
	// common intxt button
	if (!empty($intxt_buttons)) {} else {$intxt_buttons = "";} // undef var 339
    if ($intxt_buttons_nojs !== "" OR $intxt_buttons !== ""){
        $intxt_buttons_ret = $yr_bpsh_nojsbclassdiv.$intxt_buttons_nojs . $yr_bpsh_nojsbclassdiv_end . $intxt_buttons ;  
	    } else {
	       $intxt_buttons_ret = "";
	    }
	 
	
	// afteractiv button - css  ------------
	// JS afteractiv Share button
	// -- 3.3.6   JS afteractiv Share button array
    if (isset($afteractiv_buttons)) {} else {$afteractiv_buttons = "";} // undef var 339
    $yr_jsbuttontableflag_act = 0;  // 339  table for JS button
	foreach ($afteractiv_shareit_arr as $sharetrans_arr => $shareit_arr_elm) {
	   if ($yr_jsbuttontableflag_act == 0) {
                $yr_jsbuttontableflag_act = 1;
                $afteractiv_buttons = $afteractiv_buttons . '<table border="0" style="border:0px; margin:0 0 0 0; width: unset;"><tr>';
	   } else {}
	   // php undef index 339  -isset($shareit_arr_elm["shareit"])
       if (isset($shareit_arr_elm["shareit"])) {
            $afteractiv_buttons = $afteractiv_buttons . '<td style="border:0px; vertical-align:top; width:'.$yr_tdwidth_temp.
            'px;"><div class="bp-share-it-button-group yrgeneric-button"><a>'.
              $sharetrans_arr.'</a></div><div class="share-buttons group" style="margin-top:10px;">' . $shareit_arr_elm["shareit"] . '</div></td>'; 
			// 341: style="margin-top:10px;"   <ul> -del  
			// .$yr_bpsh_marginbottom5 - up to version 3.3.6
	   } else {}	
	}	//  else {$afteractiv_buttons = null;}	// v335
    if ($yr_jsbuttontableflag_act == 1) {
		$afteractiv_buttons = $afteractiv_buttons . '</tr></table>';
		$yr_jsbuttontableflag_act = 0;
	} else {}
		
	// not JS afteractiv
	if (!empty($afteractiv_shareit_nojs)) {
		$afteractiv_buttons_nojs = $yr_bpsh_share_buttonclassdiv.$afteractiv_shareit_nojs.'</div>'; 
	}	else {$afteractiv_buttons_nojs = "";}	 // v335
	// common afteractiv button
	if ($afteractiv_buttons_nojs !== "" OR $afteractiv_buttons !== "") {   // undef afteractiv_buttons 339
		$afteractiv_buttons_ret = $yr_bpsh_nojsbclassdiv.$afteractiv_buttons_nojs . $yr_bpsh_nojsbclassdiv_end . $afteractiv_buttons ;
	} else {}
	
	$buttons_ret_group = $buttons_ret;	// 342
	// 342 - add load Facebook SDK 
	$yr_bpshare_fblike_flagSDK = 0;
	
	$buttons_ret = yr_bpshare_fbsdk() . $buttons_ret;
	$afteractiv_buttons_ret = yr_bpshare_fbsdk() . $afteractiv_buttons_ret;
	$intxt_buttons_ret = yr_bpshare_fbsdk() . $intxt_buttons_ret;
	
	
	if ($activity_par == 'blog' ) {  // blog:  we have 2 group buttons: classic + intxt
		return array($buttons_ret,$intxt_buttons_ret);		
	} else {   
		if ($activity_par == 'activity') {
			// activity: we have 2 group buttons: classic before content + buttons after content
			return array($buttons_ret,$afteractiv_buttons_ret);
		}
		else {} 
	}
	
	
	// 1 group buttons - classic
	// for group and forum
	$buttons_ret_group_viber1 = str_replace('viber://forward','http://viberforward1.uno',$buttons_ret_group);   // 342
	$buttons_ret_group_viber2 = str_replace('viber://add','http://viberadd1.uno',$buttons_ret_group_viber1);
	$buttons_ret_group_viber = wp_kses($buttons_ret_group_viber2,$yr_bpshare_butt_tags);	
	$buttons_ret_group_viber1 = str_replace('http://viberforward1.uno','viber://forward',$buttons_ret_group_viber);
	$buttons_ret_group_viber2 = str_replace('http://viberadd1.uno','viber://add',$buttons_ret_group_viber1);
	echo $buttons_ret_group_viber2;
	
}	// END create BUTTONS function ===============

// function: clear from keywords
function yr_bpshare_clearkeyw(&$yr_clearname,$yr_clearkeyw) {	
	$keywpos = stripos($yr_clearname,$yr_clearkeyw);
	if ($keywpos !== false) {
		$clearkeyw_len = strlen($yr_clearkeyw);
		$clearname1 = substr($yr_clearname,0,$keywpos) . 
		substr($yr_clearname,$keywpos+$clearkeyw_len);
		$yr_clearname = $clearname1;
	} else {}			
}

// function: analyze imgsrc= in name field. imgsrc=http://URL_for_image
function yr_bpshare_imgsrc($yr_bpsh_name,$yr_bpsh_srctxt,&$yr_bpsh_imgsrc,&$yr_bpsh_imgsrcpos, 
	&$yr_bpsh_imgsrchttplen) {
	$yr_bpsh_imgsrcpos = stripos($yr_bpsh_name,$yr_bpsh_srctxt);
	if ($yr_bpsh_imgsrcpos !== false) {
		$yr_bpsh_imgsrchttppos = $yr_bpsh_imgsrcpos + 7;
		$blankpos = stripos(substr($yr_bpsh_name,$yr_bpsh_imgsrchttppos)," ");				
		if ($blankpos > $yr_bpsh_imgsrchttppos) {
			$yr_bpsh_imgsrchttplen = $blankpos;		
			$yr_bpsh_imgsrc = substr($yr_bpsh_name,$yr_bpsh_imgsrchttppos,$yr_bpsh_imgsrchttplen);
		} else {   // blankpos=false -> imgsrc= at line end
			$yr_bpsh_imgsrchttplen = strlen(substr($yr_bpsh_name,$yr_bpsh_imgsrchttppos));			
			if ($yr_bpsh_imgsrchttplen > 0) {
				$yr_bpsh_imgsrc = substr($yr_bpsh_name,$yr_bpsh_imgsrchttppos,$yr_bpsh_imgsrchttplen);
			}
		}
		$yr_bpsh_imgsrc = esc_url($yr_bpsh_imgsrc);
	}
	else {
		$yr_bpsh_imgsrc = '';
		$yr_bpsh_imgsrchttplen =0;
	}
}


/**
 * Includes the css.
 */

function yr_bp_share_it_button_insert_head() {
	$path_css = path_join(WP_PLUGIN_URL, basename( dirname( __FILE__ ) )."/style.css");
	wp_enqueue_style ( "yr_buddy-share-it-style", $path_css);
}
add_action('wp_print_styles', 'yr_bp_share_it_button_insert_head');
//add_action('wp_head', 'yr_bp_share_it_button_insert_head');  

// includes bp-share-it.js   
function yr_bp_share_it_scripts() {
wp_enqueue_script( "yr_buddypress-share-it", path_join(WP_PLUGIN_URL, basename( dirname( __FILE__ ) )."/bp-share-it.js"), array( 'jquery' ) );
}
add_action('wp_print_scripts', 'yr_bp_share_it_scripts');


require_once "yr-bpshare-hnd.php";	// v.3.3	
require_once "yr-bpshare-fbsdk.php";  // LIKE button functions

?>