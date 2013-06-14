<!DOCTYPE html>
<html lang="en">
  <head>
    
<link rel="canonical" href="http://www.seemycity.net/" />
<link href="https://plus.google.com/115771908788438436647/" rel="publisher" />
<meta name="google-site-verification" content="c3ejzcc8DLz0Rj4KV1AO-DpAnsbg7nw2RU_1FjRlSZM" />

    
    <title><?php echo SITE_NAME; ?> :: News, Magazine, Blogs</title>
    
    <link href="<?php echo PATH ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo PATH ?>assets/css/main.css" rel="stylesheet" type="text/css"/>
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
        <div class="countries"><a href="<?php echo PATH ?>botswana?country=bw">Botswana</a> | <a href="<?php echo PATH ?>namibia?country=na">Namibia</a> | <a href="<?php echo PATH ?>zambia?country=zm">Zambia</a> | <a href="<?php echo PATH ?>zimbabwe?country=zw">Zimbabwe</a></div>
        <div class="logo"></div>
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
    <?php
    if(isset($_GET['country'])){
      
     $url = $_SERVER['REQUEST_URI'];
      $url = ltrim($url, '/');
      $url = rtrim($url, '/');
      $url = explode('/', $url);
      #print_r($url);
      
      #if(!isset($_GET['country'])){$_GET['country'] = 'bw';}
      
      if($url[1] == "botswana"){
        $countryCode = "bw";
      }
      if(isset($url[1])){
        if($countryCode == "bw"){
          $country = "botswana/";
        }elseif($countryCode == "na"){
          $country = "namibia/";
        }elseif($countryCode == "zm"){
          $country = "zambia/";
        }elseif($countryCode == "zw"){
          $country = "zimbabwe/";
        }
      
      }
      }else{
        $countryCode = "all";
        $country = "featured/";
      }
    ?>
    <li><a href="<?php echo PATH; ?><?php echo $country; ?>magazine/?country=<?php echo $countryCode;?>">MAGAZINE</a></li>
    <li><a href="<?php echo PATH; ?><?php echo $country; ?>directory/?country=<?php echo $countryCode;?>">DIRECTORY</a></li>
    <li><a href="<?php echo PATH; ?><?php echo $country; ?>venues/?country=<?php echo $countryCode;?>">VENUES</a></li>
    <li><a href="<?php echo PATH; ?><?php echo $country; ?>restaurants/?country=<?php echo $countryCode;?>">RESTAURANTS</a></li>
    <li><a href="<?php echo PATH; ?><?php echo $country; ?>events/?country=<?php echo $countryCode;?>">EVENTS</a></li>
    <li><a href="<?php echo PATH; ?><?php echo $country; ?>pricecheck/?country=<?php echo $countryCode;?>">PRICECHECK</a></li>
    <li><a href="<?php echo PATH; ?><?php echo $country; ?>hotels/?country=<?php echo $countryCode;?>">HOTELS</a></li>
    <li><a href="<?php echo PATH; ?><?php echo $country; ?>weddings/?country=<?php echo $countryCode;?>">WEDDINGS</a></li>
    <li><a href="<?php echo PATH; ?><?php echo $country; ?>offers/?country=<?php echo $countryCode;?>">OFFERS</a></li>
    <li><a href="<?php echo PATH; ?><?php echo $country; ?>cars/?country=<?php echo $countryCode;?>">CARS</a></li>
    <li><a href="<?php echo PATH; ?><?php echo $country; ?>recipes/?country=<?php echo $countryCode;?>">RECIPES</a></li>
  </ul>
        </nav>
      </header>