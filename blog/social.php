<?php

function fb_count() {

	global $fbcount;

	$facebook = file_get_contents('http://api.facebook.com/restserver.php?method=links.getStats&urls=http://www.seemycity.net/blogs/botstech/upcoming-technology-events-issue-one-2013#');

	$fbbegin = '<share_count>'; $fbend = '</share_count>';

	$fbpage = $facebook;

	$fbparts = explode($fbbegin,$fbpage);

	$fbpage = $fbparts[1];

	$fbparts = explode($fbend,$fbpage);

	$fbcount = $fbparts[0];

	if($fbcount == '') { $fbcount = '0'; }

	return $fbparts;

}       

echo fb_count();
?>

<!DOCTYPE html>
<html lang="en-us">
<?php
require("social.php");
fb_count();
twit_count();
?>
<head>
<meta charset="utf-8">
<title>Daddy Design - Custom Facebook Share Button With Custom Counter - Demo</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<base target='_blank' />
</head>
<body>
<div id="container">
<?php
$title=urlencode("How to Create a Custom Facebook Share Button with a Custom Counter");
$url=urlencode("http://www.daddydesign.com/wordpress/how-to-create-a-custom-facebook-share-button-with-a-custom-counter/");
$summary=urlencode("Learn how to create a custom Facebook 'Share' button, complete with a custom counter, for your website!");
$image=urlencode("http://www.daddydesign.com/ClientsTemp/Tutorials/custom-iframe-share-button/images/thumbnail.jpg");
?>
<a onclick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title;?>&amp;p[summary]=<?php echo $summary;?>&amp;p[url]=<?php echo $url; ?>&amp;&p[images][0]=<?php echo $image;?>', 'sharer', 'toolbar=0,status=0,width=620,height=280');" href="javascript: void(0)"> 
Insert text or an image here. 
</a>
<div id="fbcount">
<?php	echo $fbcount; ?>
</div>
</div>
</body>
</html>