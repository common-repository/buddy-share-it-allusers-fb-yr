<?php
// v.3.2.6  - for Facebook LIKE Button
// yr_bpshare_fbsdk  - Include the JavaScript SDK
// uses the global parameters: FB appId, en_US/fr_FR - local for Like button
// 
function yr_bpshare_fbsdk() {     
	global $yr_bpshare_fblikeappid;
	global $yr_bpshare_fblikeloc;
	global $yr_bpshare_fblike_flagSDK;  // =0 -call SDK; =1 -SDK is on page
	
	$yr_bpshare_fblike_SDK_ret = '';
	if ( ! is_admin() ) {
		if ($yr_bpshare_fblikeappid == '') {
			$appid = '';
		} else {
			$appid = '&appId='.esc_textarea($yr_bpshare_fblikeappid);
		}
		if ($yr_bpshare_fblikeloc == '') {
			$en_US = 'en_US';
		} else {
		$en_US = $yr_bpshare_fblikeloc;
		}
	if ($yr_bpshare_fblike_flagSDK == 0) {   
		$yr_bpshare_fblike_flagSDK = 1;   // SDK place on Body
		$yr_bpshare_fblike_SDK_ret = "
  <!-- YR-BPshare: Load Facebook SDK for JavaScript -->
  <div id='fb-root'></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/" 
		. esc_textarea($en_US)
		. "/sdk.js#xfbml=1&version=v3.1"
		. $appid	// esc upper
		. "&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <!-- YR-BPshare: End Facebook SDK 2 -->
	";
	}
	else {   	}
	
	} // end NOT admin 342
	else {}
	return $yr_bpshare_fblike_SDK_ret;
}
// function of extract value of keyword 
// returns value of keyword or FALSE 
function yr_bpshare_keyw_value($field_where_keyw,$keyword) {
	// examples of keywords: 
	// $fblikeappid=<232857250134107>   def - empty  but return false if not exist
	// $fblikeloc=<fr_FR>   def en_US  but return false if not exist
	// $fblikesize=<large>   def small  but return false if not exist
	// $fblikelayout=<standard>  def button_count   but return false if not exist
	// $fblikestyle=< ... >  
	// $buttonstyle=< ... >
	// $fblikedatashare=<false> -def or true - both buttons: like+share  // v.338
	$ret_value = false;
	$pos2 = stripos($field_where_keyw,$keyword);
	if ($pos2 === false) {
		return $ret_value;  // false value
	}
	else {	
		$lkeyword = strlen($keyword);
		$ret_value = substr($field_where_keyw,$pos2+$lkeyword);
		$pos3 = stripos($ret_value,'>');
			if ($pos3 === false) {
				$ret_value = false; return $ret_value; // wrong value = false
			}
			else {
				$ret_value = substr($ret_value,0,$pos3);
				$ret_value = esc_html($ret_value);       // sanitize style, etc. to front -v.3.3
				return $ret_value;   // value
			}
	}  
}
// FB LIKE button display function
// returns LIKE div code that uses the SDK
// 
function yr_bpshare_fblikediv($fblikedatahref) {
	global $yr_bpshare_fblikesize;  // small/large - size for Like button - v.3.2.6
	global $yr_bpshare_fblikelayout;  // standard/box_count/button_count/button - layout for Like button - v.3.2.6
	global $yr_bpshare_fblikestyle;   // style for Like button
	global $yr_bpshare_fblikedatashare;   //  true =like+share or false =like
	if ($yr_bpshare_fblikestyle) {
		$likedivret = '<div'.$yr_bpshare_fblikestyle.'>';
	}	else $likedivret = "";
	$likedivret = $likedivret . '<div class="yr_share_img2 fb-like" data-href="' . $fblikedatahref .
	'" data-layout="' . $yr_bpshare_fblikelayout .
	'" data-action="like" data-size="' . $yr_bpshare_fblikesize .
	'" data-show-faces="true" data-share="' . $yr_bpshare_fblikedatashare . '"></div>';
	if ($yr_bpshare_fblikestyle) {
		$likedivret = $likedivret . '</div>';
	} else {}
	return $likedivret;
}
?>