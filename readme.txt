=== Share It for All Users on BuddyPress YR ===
Contributors: intels
Donate link:https://www.paypal.com/donate/?hosted_button_id=Z9EWDARP3SNZQ
Tags:share,button,Facebook,Like,Buddypress,Wordpress,Social,twitter,linkedin,digg,google,search,email,whatsapp,viber,telegram,vkontakte,viber group,viber community,join viber group,join viber community,BP,activity,FB,buttons,link,share it,Buddy,bp share,buddy share,fb share,bp social,YR,blog,links,
Requires at least: 3.3.1 
Tested up to: 6.1.1 
Stable tag: 3.4.2
Version: 3.4.2
License: GPLv2 or later

== Description ==
This plugin will help you insert different buttons (Share, Like, Viber, Whatsapp, Google and others) into WordPress posts or pages, into Activity or Groups Buddypress. You can select buttons from the initial list: Facebook Share, Facebook Like, Twitter Share, LinkedIn Share, Digg, WhatsApp Button, Viber Share, Join Viber Community, Viber Group Button, Telegram share, Google search for article title, or search only on the site, Bing search, Yahoo search, Ask search, Duckduckgo search. You can also quickly insert a new custom button for any URL link. Can be used custom icons, images, styles. Works with Wordpress or BuddyPress sites. Original code, credit Modemlooper.

== Installation ==
= After updating the plugin version, do the following: =

1. Click submenu 'BP Sharing YR' under the 'General options' admin menu
2. Check the options and press "Save Changes" - be sure to click to save and see the site

= Automatic first Installation =

1. From inside your WordPress administration panel, visit 'Plugins -> Add New'
2. Search for 'Buddy Share It Allusers FB YR' (by the keyword YR) and find this plugin in the results
3. Click 'Install'
4. Once installed, activate via the 'Plugins -> Installed' page
5. Click submenu 'BP Sharing YR' under the 'General options' admin menu
6. Check the options you want and press "Save Changes"

= Manual Installation =

1. Upload 'Buddy Share It Allusers FB YR' to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress
5. Click submenu 'BP Sharing YR' link under the 'General options' admin menu
6. Check the options you want

= Setup options: =

To configure (generate) one button, you need to fill in one line of the parameter settings table.
The number of buttons can be up to 40 pieces (this number can be increased).
In the name of the button, you can specify in addition different 'keywords' for different types of buttons.
Buttons are generated such types:
1) By default: JS hidden button - the button is hidden behind the common (large) JS Share button, the hidden button drops out of it when pressed. There can be several JS buttons. Each JS button can have its own name (v.3.3.6).
2) The open button, clicking on it will click on the link (the keyword 'nojsb').
3) Buttons above the content 'Activity' Buddypress (by default).
4) Buttons below the content 'Activity' Buddypress (keyword 'afteractivity').
5) Buttons in any place of the blog article ('intxt').
6) Any button can have its own individual image (icon) by reference ('imgsrc=').
7) Any button can have its own link to the program button handler. The link is indicated in the URL field.
8) SIMULTANEOUSLY there can be ALL kinds of buttons 1) 2) 3) 4) 5) 6) 7). That is, for example, there may be one large common JS Share button above the content in the Baddipress Activity and below the content of the activity, and several open small buttons next to them. Each button is individually described.

In the row of the table in the field 'Name' instead of setting the button you can write a command to the plugin. The plugin command begins with the $ sign. In such a row of the table, the remaining fields are ignored, they can be left blank.

Instructions for filling in the fields and rows of the table:

Field 'Name' - 'Share on(name)':
1) It can be empty or no name - then the table row is not processed.
2) The table row can be of two types:
a) The string that contains the command to the plugin - if the $ character is found in the Share on: (name) field. Then the plugin ignores the remaining fields of the string. The command line does not generate a button.
b) The string that generates the button, its fields describe the parameters of the button. The Share on: (name) field in this case is the name of the button (for example, Faceb4) and there can be one or several KEYWORDS to describe how to place the button, where to take its icon, etc.
3) What should I write in the Share on(name) field to generate a button? The first word is any of your button names, for example: Faceb1, Twit2, etc, ... The second, third and fourth letters of the first word will be offered pictures for the buttons, the file names of which contain these 2,3,4 letters. A set of standard image files is supplied with the plugin in the img subdirectory. The user can add any additional files of any pictures to the plugin subdirectories independently.
4) The second and further words in the Share on(name) field - there may be 'plugin keywords'. The plugin keywords can be:
a) nojsb - do not hide this button behind the common JS Share button. By default, the JS Share option common button is enabled, that is, without the 'nojsb' keyword, such a button will be hidden behind the common JS button, and such a button will 'fall out' from a single JS Share button when it is pressed.
b) intxt - such a button will appear in those articles of the BLOG in the text of which the shortcode [yr-bpshare-button] is inserted, and exactly in the place where this code is inserted into the text of the article.
c) afteractivity - this button will appear after (below) the content of the Activity. By default, if there is no such keyword, the button will appear in front of (above) the content of the activity (Activity).
d) imgsrc= - this button will take its image (icon) at the specified link, for example: imgsrc=http://yoursite.com/images/facebround32.png
e) buttonfblike - a description of the Facebook Like button. It should be in the line that is below the lines with the Like configuration commands (below the parameter lines of the Like button). In this line of the table only the sections of the site (pages of the site) where the button should be generated are marked.
f) ifintitle=&lt;xxx&gt; - then such a button will appear on the site only if the xxx text is in the title of the article or in the name of the Buddypress group, or in the $title variable in the button link. Thus, for example, you can set different Join Viber Community buttons for different Buddypress groups.
g) *insertline* - then an empty row will be inserted before such a row in the parameter table. But at the same time, the last bottom row of the parameter table will disappear.
h) *deleteline*, then this row of the parameter table will be deleted. In this case, all the lines that are lower will rise one line up.
5) In the 'Share on(name)' field, you can specify commands to the plugin. Then in such a line the remaining fields are ignored. The plugin can specify the following commands:
a) $jsbname=&lt;Text and text&gt; is a plugin command, 'Text and text' will replace the standard JS Share name of a single button. Very useful option. For example: $jsbname=&lt;There are even more different buttons&gt; - try. You can choose different names for several JS buttons. Table rows are scanned from top to bottom. Therefore, the name below will be active, and all the lines below will fall under the active JS button.
b) $buttonstyle=&lt;border: 2px solid red;&gt; - For example, Here you can specify different style elements for the any button. You can specify many elements of style. The command $buttonstyle= applies to all buttons that are located below in the settings table. To annul a style for a button, above the button, you can specify a command with a space instead of a style. Or a different style. Remember that commands are written in separate lines of the settings table, and are not combined with the button description.
c) Commands to customize the Like Facebook button:
i. The Like button is configured only by the plugin commands in the 'Share on (name)' field, while the remaining fields of the table row are not analyzed. In the Share on (name) field, you can specify several commands at once to configure the Like button parameters. All parameters of the Like button here have the same meaning as in the Facebook description of the Like button. The commands for the Like plugin extend to those rows in the table with the 'buttonfblike' keywords that are located below.
ii. $fblikeappid=&lt;222222222222222&gt; - the command indicates the Facebook application code for the site where you install the Like button. In this command, write down the Facebook code of the application for your site. If you do not specify this command or do not specify an application code, then the button will be called without an application code (this works using the Facebook algorithm). This parameter is inserted into '&appId=' when the SDK is loaded for the Like button.
iii. $fblikeloc=&lt;en_US&gt; - or for example fr_FR, and so on - this is the localized language of your site, by default - en_US. This parameter is inserted into the link to download the SDK with a different language for the Like button.
iv. $fblikesize=&lt;large&gt; - small/large - size for Like button, default = small, - is the size of the button. This parameter is inserted into the 'data-size=' for the Like button.
v. $fblikelayout=&lt;standard&gt; - standard/box_count/button_count/button - the form of the Like button, default = button_count. This parameter is inserted into the 'data-layout=' for the Like button SDK.
vi. $fblikestyle=&lt;... ..&gt; - Here you can specify different style elements for the div block that frames the Like button. For example, for a button that has $fblikesize=&lt;small&gt; $fblikelayout=&lt;button&gt; parameters, the recommended combination of style elements is: $fblikestyle=&lt;display:inline;vertical-align:middle;position:relative;bottom:4px;&gt; - try it.
vii. buttonfblike - (this is a keyword, it is not a command, it is without the $ sign !!) - indicates that this is the line for generating the Facebook Like button. It should be below the lines with the Like button parameters (below the Like commands). In this row of the settings table, you also need to specify only the sections of the site (pages of the site) where the Like button should be generated. You can generate several different Like buttons, with different parameters.

Button field:
1) Button field shows already selected image (icon) for button generation. Not used for plugin commands, not used for Like Facebook button.

Field 'Select button image':
1) The Select button image field invites you to select an image (icon) for the button, if in the img subdirectory of the plugin there are names of image files that have 2,3,4 letters the same as the 2,3,4 letter of the first word in the Share on (name ). The first word is the name of the button. For example, a button name could be Faceb1, Faceb2, Twit3, etc. Try to choose the name of the button by the name of the network for which the button is generated. Or upload additional icons to a subdirectory. Or specify the link to the icon with the keyword 'imgsrc='.

Fields 'Content to share':
1) In the Content to share field, select the sections of the site where the button should appear. On which pages of the site you need to put a button. For plugin commands, this field is ignored.

'Sharer URL (Php template)' field:
1) In the Sharer URL field (Php template) the destination link should be described, which will be followed by a click on the button. The plugin offers here standard links for Facebook, Twitter, Linkedin, etc. You can change the link that the plugin suggested (but will it be processed later?), Or you can write your own link to another handler program. An example of a standard link in this field: http://www.facebook.com/sharer.php?t=$title&u=$link -Variable '$title' - the plugin replaces it with the name of the article, variable '$link' - the plugin replaces it with the link to the article. You can create any link for your button, for example: http://yoursite.com/blog1.php?s=$link then your blog1.php handler will handle the '$link' link to your site. Try it. You can generate different buttons, including advertising.

== Frequently Asked Questions ==

= What can the BPShare-YR plugin do? =

This plugin can insert various buttons or links into the text (above, below the content) of the article, or activity post, in the forum.  The plugin works with both WordPress and WordPress + Buddypress. There are also social network buttons on Facebook, Twitter, LinkedIn, Google+, Digg, etc. for sharing articles of the WordPress blog or Buddypress activity. There is also a Facebook button Like, with different parameters. There can also be any other buttons or images with links that the admin site indicates. Buttons can have any images or icons, or loaded along with the plugin, or images that the site administrator will assign. The image / icon can be specified outside the site by a link to the Internet. The button link format can be standard for social networking buttons like Facebook, Linkedin, Twitter, etc, or the site administrator can create a link for their new invented button. The handler of the new button can be given a link to the blog article or activity, and the text of the title of this article. Buttons (images with links) can be inserted in any place of the text of the article of the blog WordPress.
The plugin provides many options for setting buttons on the site. The plugin is complicated in the settings, but it is a very powerful plugin in the hands of an experienced admin site.

= Example of settings for share button YR =

For example, set up a social network button Vkontakte. 
In column Share on:(name) write 'Vkontakte' . Select image vk32.png or vk16.png. Or add the icon file of your button in the plugin directory /img, size 16x16 or 32x32. The file name of the icon should include numbers 16 or 32. It will be better if 1-3 letters of this image name = 1-3 letters of value 'Share on name'.
In column Sharer URL (Php template): - write http://vk.com/share.php?url=$link&title=$title . Variable $title - plugin replaced by Article title, variable $link - plugin replaced by Article link, all another text in http: link - may be yours. 
Select Blog or/and Activity or/and ... etc. - where the button Vkontakte will appear. If we have only blog on Wordpress - without Buddypress - then you can select only Blog, another selections must be ignored. Press Save Changes. Button set.
If in Share on:(name) write "Vkontakte nojsb" then the button will not be hidden behind the general JS-button.
If Shareon:(name) column includes the keyword "intxt", then such Button appears in those blog articles, in the text of which the Shortcode [yr-bpshare-button] is inserted. Only one Shortcode [yr-bpshare-button] can be inserted anywhere in the article. The Shortcode [yr-bpshare-button] will be replaced with "intxt" buttons.
If Shareon:(name) includes the keyword "imgsrc=" and then a link is written, for example "imgsrc=http://yoursite.com/images/facebround32.png", then the image for such a button will be taken from this link. You can give a link to any image of any size and see how they are displayed on the site. This keyword is convenient for debugging. The keyword "imgsrc=" is more priority than setting the icons from the plugin sub-directory. The image settings from the plugin sub-directory on the admin page remain unchanged.
Now (v.322) you can specify in the settings that the share buttons should be located at the bottom of the Activity content (after content). Now some buttons can be placed upper of the Activity content (by default) and some buttons - after the content by the keyword "afteractivity" in Shareon:(name) .

Examples of the values of the column Share on (name):  Facebook nojsb  / Linked2 intxt / Faceb3 intxt nojsb / Facebook nojsb imgsrc=http://yoursite.com/images/facebround32.png / Twitter   afteractivity /

Examples of the values of the column URL:  http://www.facebook.com/sharer.php?t=$title&u=$link / http://twitter.com/share?text=$title&url=$link / http://www.linkedin.com/shareArticle?mini=true&url=$link&title=$title / https://plus.google.com/share?url=$link / http://digg.com/submit?url=$link / mailto:?subject=$title&body=$link / http://vk.com/share.php?url=$link&title=$title /

Examples of settings for the "Like Facebook" button:
$fblikesize=&lt;small&gt; $fblikelayout=&lt;button_count&gt; $fblikeappid=&lt;222222222222222&gt;
$fblikestyle=&lt;display:inline;vertical-align:middle;position:relative;bottom:4px;&gt;
And the "Like" button generation line (and you need to mark sections of the site):
buttonFBlike nojsb

= An example of a creative button: Search Google =

You can create a button by clicking on which Google search results by the title of the article will be displayed (example):
In the row of the settings table, in the row with the conditional number N, in the Share on: (name) field, write down the style command:
$buttonstyle=&lt;height: 32px; width: 80px; &gt;
In the next (from the top) row of the settings table, in the row with conditional number N + 1, in the Share on: (name) field, write down the button name and keywords:
Google search for: nojsb imgsrc=https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png
Here Google search for: - is the name of the button and it will be in alt =, nojsb - do not hide this button in the common JS button, imgsrc = - indicates the Google image that will be used as an icon.
In the same N + 1 row of the settings table, check the sections of the site content where the button should appear, for example, blog, activity.
In the same N + 1 row of the settings table in the column (field) Sharer URL write down:
https://www.google.com/search?q=$title
This link will appeal to Google with the transfer of the search parameter - the title of the blog article.

= What other features of the plugin?

The plugin works with both Buddypress + Wordpress, and works only with the Wordpress blog - without Buddypress installed. In the Wordpress blog social buttons can be inserted anywhere in the blog text. 
For Buddypress:
Buttons shows for all - not only for registered user. 
Icons on social networks can appear above and/or below the content of activity - that is, there can be two groups of icons - and higher and lower. 
Icons can be "hidden" behind the JS-button SHARE and/or not hidden. 
Icons can be your own pictures. 
Icons URL can be your own - So you can create buttons on new social networks or on those sites that you need. 
You have a great field for creativity with this plugin. Custom icons, images, styles.
The plugin has the property: Replaces Buddypress URL with activity number on redirect Buddypress URL with member name, -  this enables Facebook Sharer algoritm do right

= Which versions of the WP and BP plugin tested? =

"Buddy Share It Allusers FB YR" plugin tested on versions: 
Wordpress 3.3.1 and Buddypress 1.6.1, 
Wordpress 3.4.2 and Buddypress 1.6.1,
Wordpress 4.7.5 and Buddypress 2.7.3,
Wordpress 4.9.8 and Buddypress 2.9.3 
Wordpress 4.9.8 and Buddypress 3.2.0
Wordpress 5.0.7 and Buddypress 4.1.0
Wordpress 5.2.4 and Buddypress 5.0.0
Wordpress 5.5.3 and Buddypress 6.3.0
Wordpress 5.6 and Buddypress 7.1.0
Wordpress 5.7 and Buddypress 7.1.0
Wordpress 5.8.1 and Buddypress 9.1.1
Wordpress 5.9.3  and Buddypress 9.1.1
Wordpress 6.1.1  and Buddypress 10.6.0
Wordpress 6.1.1  and Buddypress 11.0.0
Between versions: (WP 3.3.1 - WP 6.1.1) + (BP 1.6.1 - BP 11.0.0) - plugin should work.

== Screenshots ==

1. An initial set of buttons for a blog article.

2. An example of a set of buttons for a Buddypress group. Also, a button Join us on Viber is inserted.

3. Admin page. Settings table, screen 1. Button for instructions, button for a table of sample settings.

4. Admin page. Settings table, screen 2.

5. Admin page. Settings table, screen 3. The Facebook Like button settings are visible.

6. Admin page. Settings table, screen 4. 

7. Admin page. Settings table, screen 5. Buttons for saving settings, for backup, for reset.

8. An example of a set of buttons for a Buddypress Activity.

== Notes ==
License.txt - contains the licensing details for this component.

== Changelog ==
= 3.4.2 =
SDK loading fix and Several bugs fixed

= 3.4.1.1 - 3.4.1.5 =
corrected some notes

= 3.4.1 =
Additional buttons. Several bugs fixed.

= 3.3.9 =
Fixed width 200px of table cells for JS buttons, including for the Activity section of the site.
The buttons began to open also on mouse hover.
Several bugs fixed.

= 3.3.8 =
For the Like button, the fblikedatashare parameter has been added - Facebook SDK generates two buttons at once - Like and Share. Added the ability to select buttons from simple templates.

= 3.3.7 =
A group of JS buttons now appears in horizontal table cells. Except positions afteractivity and intxt.
Fixed several CSS styles.

= 3.3.6.1 =
corrected some notes

= 3.3.6 =
fixed for Wordpress 5.5.3 & BuddyPress 6.3.0
And now you can create many JS buttons with different names.!

= 3.3.5 =
added button: Invite Viber Community, Viber Group. 
Now you can specify the condition for the button to appear. For example, a condition for the presence of a certain text in the title of an article or in the title of Buddypress group.

= 3.3.4 =
tested on wp524, fixed some PHP 7 Notice, fixed /r, removed style effect from wpautop, Like style setting, removing button shadow style.

= 3.3.3 =
Number of rows in the parameter table increased from 24 to 40 /max line admin table - 40
Viber share button added.
Telegram share button added.
You can limit the Google search button to search only for the specified site, for example, to search on your site.
Implemented row insertion in the settings table - *insertline*
Implemented deleting a row in the settings table - *deleteline*
Search buttons added: Yahoo, Bing, Ask, DuckDuckGo.
Added table of examples for settings.
Added the ability to make a backup file for settings and restore the settings table from this file.

= 3.3.2 =
Options are written only to the database

= 3.3.1 =
some fixes

= 3.3 =
fix: POST handler now in wp environment, nonce and checking permissions, and other

= 3.2.9.1 =
fixed some security issues

= 3.2.9 =
Fixed a POST exploit bug 

= 3.2.8 =
The initial list of buttons is expanded. Google search button. Whatsapp button.

= 3.2.7 =
Added command to describe the style of the button. Now each button can have its own custom style.
Fixed some small bugs. And tuning styles for buttons.

= 3.2.6 =
The Like button for Facebook has been added to the plugin. The button Like has many parameters.

= 3.2.5 =
The plugin has been added the option (command) to change the name of the large common button.
Added an instruction to the admin page.

= 3.2.4 =
Fixed potential errors (due to new versions of Buddypress) in the plugin block: "Replaces Buddypress URL with activity number on redirect Buddypress URL with member name, -  this enables Facebook Sharer algoritm do right".

= 3.2.3 =
Fixed a bug - for Russian and other languages UTF-8 excluded the possibility of incorrect characters in the 'title' of icons. Thanks to this, "download more" (ajax) works correctly in the Activity.

= 3.2.2 =
Now you can specify in the settings that the share buttons should be located at the bottom of the Activity content (after content). Now some buttons can be placed upper of the Activity content (by default) and some buttons - after the content (keyword "afteractivity" in Shareon:(name) ).

= 3.2.1 =
Now for button icon you can give a link to any image of any size.

= 3.2 =
Now you can insert social buttons and other icons and pictures with links directly into the text of the blog article. The place for the buttons in the blog indicates by the Shortcode [yr-bpshare-button] .

= 3.1 =
Now plugin can operate without Buddypress - working only with WordPress.
Now each button can have a parameter 'nojsb' in Name. That is, at the same time will be JS button and not hidden button (nojsb).

= 3.0 =
The plugin is completely rewritten. Admin page made to create your own "Share" buttons. Tested on WP 4.7 and BP 2.7.3. Russian localization.

= 2.0 =
Buddy Share It Allusers FB YR  - v.2.0  (tested on BP 1.6.1)

== Upgrade Notice ==
= 3.3.3 =
Viber share button added: the Viber Share button for mobile devices and the Viber Share button for both mobile devices and Windows desktops.
Telegram share button added.
You can limit the Google search button to search only for the specified site, for example, to search on your site.
Implemented row insertion in the settings table - *insertline*
Implemented deleting a row in the settings table - *deleteline*
Search buttons added: Yahoo, Bing, Ask, DuckDuckGo - search by article title.
Added table of examples for settings: You can copy the example values from the Shareon and SharerURL fields to the row of the Settings table.
Added the ability to make a backup file for settings and restore the settings table from this file.

= 3.2.7 =
Now each button can have its own custom style. The Like button for Facebook has been added to the plugin. The plugin has been added the command to change the name of the large common button. Now some buttons can be placed upper of the Activity content (by default) and some buttons - after the content. Now for button icon you can give a link to any image of any size. Now you can insert social buttons or other icons with links directly into the text of the blog article. The place for the buttons in the blog indicates by the Shortcode [yr-bpshare-button], plus a standard place for buttons in the article. Now plugin can operate without Buddypress - working only with WordPress for blog. Now each button can have a parameter 'nojsb' - non hidden button (via large shared button). and even more options ...

= 3.0 =
The plugin is completely rewritten. Now you can from the admin page create your buttons on your "Share" links. The max number of Share Buttons - 12, but may be virtually unlimited. All buttons can be hidden behind one JS button. The plugin gives the administrator a great field of creativity for its buttons.

= 2.0 =
Not required. 2.0 is a first public release - it is a modified «BuddyShare» Plugin.