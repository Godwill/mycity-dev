<html>
	<head>
	
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0 user-scalable=no" /> 
	<meta content="" http-equiv="keywords" name="weddings, Magazine, Online, Fashion, Motoring, Technology, price comparison, restaurant reviews " />
	<meta content="" http-equiv="description" name="Most comprehensive event planning tool" />

	<meta property="og:title" content="See My City Event Planner"/>
    <meta property="og:type" content="Website"/>
    <meta property="og:url" content="<?php echo PATH ?>planner"/>
    <meta property="og:image" content="<?php echo PATH ?>images/logo.jpg"/>
    <meta property="og:site_name" content="See My City Event Planner"/>
    <meta property="fb:admins" content="tawanike"/>
    <meta property="og:description" content="Most comprehensive event planning tool that turns anyone planning and event into a pro."/>
	
	
		<title>See My City Event Planner</title>
	
		<link rel="stylesheet" type="text/css" href="<?php echo PATH ?>assets/css/custom-boot.css"/>
		
		<link href="<?php echo PATH ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
	    <link href="<?php echo PATH ?>assets/css/bootstrap-responsive.css" rel="stylesheet" type="text/css"/>
	    <link href="<?php echo PATH ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
	    <link rel="stylesheet" href="<?php echo PATH ?>planner/assets/css/style.css" />
    	<link href='http://fonts.googleapis.com/css?family=Ubuntu|Julius+Sans+One' rel='stylesheet' type='text/css'>
	
	<script type="text/javascript">
			  var _gaq = _gaq || [];
			  _gaq.push(['_setAccount', 'UA-31936670-1']);
			  _gaq.push(['_setDomainName', 'seemycity.net']);
			  _gaq.push(['_trackPageview']);
			  (function() {
			    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			  })();
	</script>
	<script type="text/javascript">
var fb_param = {};
fb_param.pixel_id = '6008231386242';
fb_param.value = '0.00';
fb_param.currency = 'USD';
(function(){
  var fpw = document.createElement('script');
  fpw.async = true;
  fpw.src = '//connect.facebook.net/en_US/fp.js';
  var ref = document.getElementsByTagName('script')[0];
  ref.parentNode.insertBefore(fpw, ref);
})();
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/offsite_event.php?id=6008231386242&amp;value=0&amp;currency=USD" /></noscript>
	</head>
	<body>
	<section class="page">
	<div class="top-menu">
	<?php 
		if(!$session->is_logged_in()) { ?>
			<a href="<?php echo PATH; ?>planner/account/login">Log In</a>
		<?php } ?>
		<?php 
		if($session->is_logged_in()) { ?>
			<a href="<?php echo PATH; ?>planner/process/logout.php">Log Out</a>
		<?php } ?>
	
	</div>
		<header>
		<div class="site-logo"><a href="<?php echo PATH; ?>planner/">See My City Planner</a></div>
		<div class="ad1">
			<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- Planner Header -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:728px;height:90px"
			     data-ad-client="ca-pub-6137026230943940"
			     data-ad-slot="3956611537"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
		
		<nav>
			<ul>
				<li><a href="<?php echo PATH; ?>planner/">Home</a></li>
				<!--  <li><a href="<?php echo PATH; ?>planner/weddings">Wedding Planner</a></li>
				<li><a href="<?php echo PATH; ?>planner/birthdays">Birthday Planner</a></li>
				<li><a href="<?php echo PATH; ?>planner/vendors">Vendors</a></li>
				<li><a href="<?php echo PATH; ?>planner/articles">Articles & Advice</a></li>
				<li><a href="<?php echo PATH; ?>planner/gifts">Gifts</a></li>-->
			</ul>
		
		</nav>
		
		</header>
	