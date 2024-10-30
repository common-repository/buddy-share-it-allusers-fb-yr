<?php
// yr-bpshare-hnd  - POST handler

function yr_bpshare_options_handler() {
	global $yr_bpshare_linemax, $yr_noname1, $yr_bpshare_optpath, $yr_bpshare_plugin_dir_path, $yr_bpshare_redir, $yr_bpshare_optpath_init;
	global $yr_bpshare_options_lines_init_ser;
	global $yr_bpshare_options_lines_ser_nonce;
	global $yr_bpshare_name_tags;
	
	$yr_bpshare_invparhnd = "yr-bpshare-hnd: invalid parameters - ";
	if (!current_user_can('manage_options'))  {   // Admin? 
		$yr_bpshare_invparhnd02 = $yr_bpshare_invparhnd."current user is not admin";
		echo esc_textarea($yr_bpshare_invparhnd02);
		exit;
	}
	
	check_admin_referer("checking_nonce_". $yr_bpshare_plugin_dir_path);
	
	if ( $_POST ) {    // !empty($_POST) 
		
		if (stripos($yr_bpshare_optpath,"/buddy-share-it-allusers-fb-yr/") === false ) {
			$yr_bpshare_invparhnd03 = $yr_bpshare_invparhnd."optpath=".$yr_bpshare_optpath;
			echo esc_textarea($yr_bpshare_invparhnd03);
			exit;
		}  else {}
		
		if ($_POST["templates"] == "Templates") {  // Templates: 			
			$i = 1;   // template number
			$ioptline = 0;   // line number in $yr_bpshare_options_lines
			$itempflag = 0;  // =1 if choose any template 
			while ($i < 21) {  // max temlates =20 
				$yr_bpshare_template = "templ".$i;
				if (isset($_POST[$yr_bpshare_template]) ){
					if ($_POST[$yr_bpshare_template] = 1) {
						$yr_bpshare_options_lines_temp_ser = file_get_contents($yr_bpshare_plugin_dir_path . "yr-bpshare-tempoptions".$i );
						
						// template files: yr-bpshare-tempoptions1 , yr-bpshare-tempoptions2
						$yr_bpshare_options_lines_temp = unserialize($yr_bpshare_options_lines_temp_ser);
                        
						$itempflag = 1;
						foreach ($yr_bpshare_options_lines_temp as $templine) {
							if ($templine["name"] != "no name") {
								$yr_bpshare_options_lines[$ioptline] = $templine;
								$ioptline = $ioptline+1;
							}
							else {}
						}
					}	else {}			
				}	else {}
				$i=$i+1;
			}
			if ($itempflag == 1) {   // template choose - save template				
				// put options in dbase 
				$yr_bpshare_options_lines_ser = serialize($yr_bpshare_options_lines);					
				$yr_bpshare_options_lines_ser = str_replace(array("\r", "\n")," ",$yr_bpshare_options_lines_ser);
				delete_option('yr_bpshare_options');
				update_option( 'yr_bpshare_options', $yr_bpshare_options_lines_ser ); 
			} else {}	
			wp_redirect( $yr_bpshare_redir );  	exit;
		}	
		else { 		}   // template else
		
		//  button Reset or Save
		if ($_POST["reset"] == "Reset") {  // reset: init file ->array  339:init_array ->array
			// 339 $yr_bpshare_options_lines_init_ser = base64_decode(file_get_contents($yr_bpshare_optpath_init));
            
			if (unserialize($yr_bpshare_options_lines_init_ser) === false) {
				$yr_bpshare_invparhnd04 = $yr_bpshare_invparhnd."optpath_init=".$yr_bpshare_options_lines_init_ser;
				echo esc_textarea($yr_bpshare_invparhnd04);
				exit;
			}  else {
				$yr_bpshare_options_lines = unserialize($yr_bpshare_options_lines_init_ser);
			}
				
		}
		else { 
			// read all options 
		$i = 0;   // post input line number
		$iarr = 0;   // line number of the output parameter array  - since 3.3.3
		while ($i < $yr_bpshare_linemax) {  
			$j1="i".$i."j1";  $j2="i".$i."j2";  $j3="i".$i."j3";
			$j4="i".$i."j4";  $j5="i".$i."j5";  $j6="i".$i."j6";
			$j7="i".$i."j7";
			
			$yr_fldeleteline = 0;   // 3.3.3
			$yr_bpshare_options_lines[$yr_bpshare_linemax-1]["name"] = $yr_noname1;
			$yr_bpshare_options_lines[$yr_bpshare_linemax-1]["img"] = "";
			$yr_bpshare_options_lines[$yr_bpshare_linemax-1]["activity"] = "";
			$yr_bpshare_options_lines[$yr_bpshare_linemax-1]["blog"] = "";
			$yr_bpshare_options_lines[$yr_bpshare_linemax-1]["forum"] = "";
			$yr_bpshare_options_lines[$yr_bpshare_linemax-1]["groups"] = "";
			$yr_bpshare_options_lines[$yr_bpshare_linemax-1]["links"] = "";
			if ($_POST[$j1]) {
				$yr_tempname = wp_kses(str_replace('=<','=&lt;',$_POST[$j1]),$yr_bpshare_name_tags);

//				$yr_tempname = esc_html(str_replace(array("\'", '\"'),'',$_POST[$j1]));	// sanitize single double QUOT  -3412
//				$yr_tempname = str_replace('=&lt;','=<',$yr_tempname);
//				$yr_tempname = str_replace('&lt;','',$yr_tempname);	// sanitize &lt;
//				$yr_tempname = str_replace('&amp;','',$yr_tempname);	// sanitize &amp;
				$yr_tempname = wp_specialchars_decode($yr_tempname);
				if (stripos($yr_tempname,"*insertline*") !== false) {
					// insert blank line before   - since 3.3.3
					$yr_bpshare_options_lines[$iarr]["name"] = $yr_noname1;
					$yr_bpshare_options_lines[$iarr]["img"] = "";
					$yr_bpshare_options_lines[$iarr]["activity"] = "";
					$yr_bpshare_options_lines[$iarr]["blog"] = "";
					$yr_bpshare_options_lines[$iarr]["forum"] = "";
					$yr_bpshare_options_lines[$iarr]["groups"] = "";
					$yr_bpshare_options_lines[$iarr]["links"] = "";
					$iarr=$iarr+1;
					$yr_tempname = str_replace("*insertline*", "", $yr_tempname); // scratch *insertline* instruction
				} else {}
				
				if (stripos($yr_tempname,"*deleteline*") !== false) { 
					$yr_fldeleteline = 1;    // *deleteline* instruction -3.3.3
					$yr_tempname = str_replace("*deleteline*", "", $yr_tempname); // scratch *deleteline*
				} else {
					$yr_fldeleteline = 0; 
					}  				
				
				$yr_bpshare_options_lines[$iarr]["name"] = $yr_tempname;
				} 
			else {$yr_bpshare_options_lines[$iarr]["name"] = $yr_noname1;}
			
			if ($yr_bpshare_options_lines[$iarr]["name"] == $yr_noname1) {
				$yr_bpshare_options_lines[$iarr]["img"] = '';
			}
			else {
				$yr_bpshare_options_lines[$iarr]["img"] = sanitize_file_name($_POST[$j2]);
			}
			
			$yr_bpshare_options_lines[$iarr]["activity"] = "";
			$yr_bpshare_options_lines[$iarr]["blog"] = "";
			$yr_bpshare_options_lines[$iarr]["forum"] = "";
			$yr_bpshare_options_lines[$iarr]["groups"] = "";
			if (isset($_POST[$j3]) ){
				if ($_POST[$j3] = 1) {
					$yr_bpshare_options_lines[$iarr]["activity"] = "1";
				}	else {}			
			}	else {}
			if (isset($_POST[$j4]) ) {
				if ($_POST[$j4] = 1) {
					$yr_bpshare_options_lines[$iarr]["blog"] = "1";
				}	else {}				
			}	else {}
			if (isset($_POST[$j5]) ) {
				if ($_POST[$j5] = 1) {
					$yr_bpshare_options_lines[$iarr]["forum"] = "1";
				}	else {}				
			}	else {}
			if (isset($_POST[$j6]) ) {
				if ($_POST[$j6] = 1) {
					$yr_bpshare_options_lines[$iarr]["groups"] = "1";
				}	else {}				
			}	else {}
				
			
			if (isset($_POST[$j7]) ) {
				if (substr($_POST[$j7],0,6) == "viber:") {	
//				    $templinkviber_yr = $_POST[$j7];
				    if (substr($_POST[$j7],0,19) == "viber://add?number=") {
				        // 339 viber number
                        $yr_bpshare_options_lines[$iarr]["links"] = "viber://add?number=" . filter_var(substr($_POST[$j7],19),FILTER_SANITIZE_NUMBER_INT);
				    }
                    else {  // not viber number
                        $yr_bpshare_options_lines[$iarr]["links"] = "viber:" . sanitize_url(substr($_POST[$j7],6));
                    }						
				} else {  // not viber
					if ($_POST[$j7] == '$link') {
						// exclusion list - 341
						$yr_bpshare_options_lines[$iarr]["links"] = '$link';
					} 
					else {
						$yr_bpshare_options_lines[$iarr]["links"] = sanitize_url($_POST[$j7]);

					}
				}
				
			}	else {}
					
			$i=$i+1;
			if ($yr_fldeleteline == 0 ) {
				$iarr=$iarr+1;
			} else {}
			
			}
		}
		
			// put options in dbase - since 3.3.2 /put options in file - 3.3.1/
			$yr_bpshare_options_lines_ser = serialize($yr_bpshare_options_lines);
			$yr_bpshare_options_lines_ser = str_replace(array("\r", "\n")," ",$yr_bpshare_options_lines_ser);
			delete_option('yr_bpshare_options');
			update_option( 'yr_bpshare_options', $yr_bpshare_options_lines_ser ); 
	
	}  else {}	
	
	wp_redirect( $yr_bpshare_redir );
	exit;
	
}

add_action( 'admin_post_yr_bpshare_options_hnd', 'yr_bpshare_options_handler' );
?>