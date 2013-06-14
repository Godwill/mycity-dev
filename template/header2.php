<!DOCTYPE html>
<html lang="en">
  <head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0 user-scalable=no" /> 
    
<link rel="canonical" href="http://www.seemycity.net/" />
<link href="https://plus.google.com/u/0/102108803626351948187/" rel="publisher" />


    
    <title><?php echo SITE_NAME; ?> <?php
    $url = $_SERVER['REQUEST_URI'];
    $url = ltrim($url, '/');
    $url = rtrim($url, '/');
    $url = explode('/', $url);
    if($url[0] == "directory"){
      echo 'Business Directory';
    }elseif($url[0] == 'botswana' && $url[1] == 'directory'){
      echo 'Botswana Business Directory';
    }elseif($url[0] == 'namibia' && $url[1] == 'directory'){
      echo 'Namibia Business Directory';
    }elseif($url[0] == 'zambia' && $url[1] == 'directory'){
      echo 'Zambia Business Directory';
    }elseif($url[0] == 'zimbabwe' && $url[1] == 'directory'){
      echo 'Zimbabwe Business Directory';
    }elseif ($url[0] == "wedding-planner") {
      echo 'Wedding Planner';
    }elseif ($url[0] == 'botswana' && $url[1] == 'wedding-planner') {
      echo 'Botswana Wedding Planner';
    }elseif ($url[0] == 'namibia' && $url[1] == 'wedding-planner') {
      echo 'Namibia Wedding Planner';
    }elseif ($url[0] == 'zambia' && $url[1] == 'wedding-planner') {
      echo 'Zambia Wedding Planner';
    }elseif ($url[0] == 'zimbabwe' && $url[1] == 'wedding-planner') {
      echo 'Zimbabwe Wedding Planner';
    }
    
    ?></title>
    
    <link href="<?php echo PATH ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo PATH ?>assets/css/main.css" rel="stylesheet" type="text/css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans|Varela+Round|Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>

<script type='text/javascript'>
googletag.cmd.push(function() {
googletag.defineSlot('/7069884/side_300x250', [300, 250], 'div-gpt-ad-1359310974347-0').addService(googletag.pubads());
googletag.defineSlot('/7069884/new_ad_unit', [728, 90], 'div-gpt-ad-1359311124978-0').addService(googletag.pubads());
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>


  </head>
  <body>
    <div id="page">
      <header>

        <div class="countries"><a href="<?php echo PATH ?>botswana/">Botswana</a> | <a href="<?php echo PATH ?>namibia/">Namibia</a> | <a href="<?php echo PATH ?>zambia/">Zambia</a> | <a href="<?php echo PATH ?>zimbabwe/">Zimbabwe</a></div>
        <div class="logo"><a href="<?php echo PATH ?>">See My City</a></div>
        <div class="ad1">
         <!-- new_ad_unit -->
<div id='div-gpt-ad-1359311124978-0' style='width:728px; height:90px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1359311124978-0'); });
</script>
</div>
        </div>
        <nav class="">
           <ul class="nav nav-tabs nav-pills">
    <li><a href="<?php echo PATH; ?>magazine/">MAGAZINE</a></li>
    <li><a href="<?php echo PATH; ?>directory/">DIRECTORY</a></li>
        <li><a href="<?php echo PATH; ?>dineout/">DINEOUT</a></li>
      <li><a href="<?php echo PATH; ?>wedding-planner">WEDDING PLANNER</a></li>

  </ul>
        </nav>
      </header>