<?php			// 3416
function yr_bpshare_optexample_htm() {
	global $yr_bpshare_plugin_dir_path;
?>
<html>
<head>
<title>Share It for All Users on BuddyPress YR: Example parameters</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<h3>BPShare-YR (Share It for All Users on BuddyPress YR): Examples of button settings (v.3.4.1)</h3>
<?php
$yr_bpshare_options_lines_example = array(
0 => array ( "name" => "Facebook afteractivity", "img" => "Facebook16.png",  "links" =>'http://www.facebook.com/sharer.php?t=$title&u=$link',
"comment" => "- sets the Facebook Share button. If this is the Activity section, then below (after) the message)"),
1 => array ( "name" => "Twitter afteractivity", "img" => "Twitter16.png",  "links" =>'http://twitter.com/share?text=$title&url=$link',
"comment" => "- sets the Twitter Share button. If this is the Activity section, then below (after) the message"),
2 => array ( "name" => "LinkedIn afteractivity", "img" => "LinkedIn16.png",  "links" =>'http://www.linkedin.com/shareArticle?mini=true&url=$link&title=$title',
"comment" => "- sets the LinkedIn Share button. For the Activity section, place the button below the content.")
);

$yr_bpshare_optexample_csvloc = $yr_bpshare_plugin_dir_path . "yr-bpshare-optexample.csv";
$fptr = @fopen($yr_bpshare_optexample_csvloc, "r");
if ($fptr) {
	$i=0;
	while (($yrbpsh_csvarr = fgetcsv($fptr, 800, "|")) !== FALSE) {
		$yr_bpshare_options_lines_example[$i]["name"] = $yrbpsh_csvarr[0];
		$yr_bpshare_options_lines_example[$i]["img"] = $yrbpsh_csvarr[1];
		$yr_bpshare_options_lines_example[$i]["links"] = $yrbpsh_csvarr[2];
		$yr_bpshare_options_lines_example[$i]["comment"] = $yrbpsh_csvarr[3];
		$i++;
	}
	fclose($fptr);
}
else {
	// file of example buttons did not open for reading. Message Warning suppressed.
	// The first lines of the array $yr_bpshare_options_lines_example are displayed from memory.
}
?>
<p><b><span style="background-color:rgb(255,255,204);">You can copy the example values from the Shareon and SharerURL fields to the row of the Settings table.</span></b></p>

<table border="1" width="100%">
    <tr>
        <td width="6"><p align="center"><b>No.</b></p></td>
		<td width="120"><p align="center"><b>Share on: (name)</b></p></td>
        <td width="30"><p align="center"><b>Button image:</b></p></td>
        <td width="120"><p align="center"><b>Sharer URL (Php template):</b></p></td>
		<td width="120"><p align="center"><b>Comment about this line</b></p></td>
    </tr>
<?php	

$i=0;
while (isset($yr_bpshare_options_lines_example[$i])) {
?>
	<tr>
		<td bgcolor="silver"><p align="center"><textarea rows="1" cols="2"></textarea></p></td>
		<td><p align="center"><textarea rows="3" style="background-color:rgb(255,255,204);"><?php echo esc_html($yr_bpshare_options_lines_example[$i]["name"]); ?></textarea></p></td>
		<td><p align="center"><?php echo esc_html($yr_bpshare_options_lines_example[$i]["img"]); ?></p></td>
		<td><p align="center"><textarea rows="3" style="background-color:rgb(255,255,204);"><?php echo esc_html($yr_bpshare_options_lines_example[$i]["links"]); ?></textarea></p></td>
		<td><p align="center"><?php echo esc_html($yr_bpshare_options_lines_example[$i]["comment"]); ?></p></td>
	</tr>
<?php	
$i++;
}

?>	
</table>

<p><b>After copying the sample values to the settings table, click Save, after that select the appropriate icon for the button (or provide a link to the picture imgsrc=).</b></p>
<p><b>And do not forget indicate the sections of the site where to place the button. And again click Save.</b></p>
<p>More examples of buttons will be in the next version of the plugin.</p>
<?php
}
?>