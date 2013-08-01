<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0 user-scalable=no" />

    <link rel="canonical" href="http://www.seemycity.net/" />
    <link href="https://plus.google.com/u/0/102108803626351948187/" rel="publisher" />


    
    <title>
        <?php echo SITE_NAME; ?>
        <?php
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
              echo 'Wedding Planner Bot';

            }elseif ($url[0] == 'namibia' && $url[1] == 'wedding-planner') {
              echo 'Namibia Wedding Planner';

            }elseif ($url[0] == 'zambia' && $url[1] == 'wedding-planner') {
              echo 'Zambia Wedding Planner';

            }elseif ($url[0] == 'zimbabwe' && $url[1] == 'wedding-planner') {
              echo 'Zimbabwe Wedding Planner';
            }
        ?>
    </title>
    
    <link href="<?php echo PATH ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo PATH ?>assets/css/bootstrap-responsive.css" rel="stylesheet" type="text/css"/>
<!--    <link href="--><?php //echo PATH ?><!--assets/css/wedding.css" rel="stylesheet" type="text/css"/>-->
    <link href="<?php echo PATH ?>assets/css/main.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo PATH ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans|Varela+Round|Montserrat:400,700' rel='stylesheet' type='text/css'>


    <!-- Google analytics code--->
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

    <!-- Google Ads code -->
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

  	<div id="fb-root"> <!-- Empty div, for some facebook stuff -->

  	</div>

    <script>
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=273590589390170";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- MixItUp Grid Initialisation-->
    <script type="text/javascript">
        $(function(){

            $('#Grid').mixitup();

        });
    </script>

  <header>

   <div id="page"> <!-- Country link div-->

    <div class="countries"><a href="<?php echo PATH ?>botswana/<?php if(isset($url[1])){ echo $url[1]; }?>">Botswana</a> | <a href="<?php echo PATH ?>namibia/<?php if(isset($url[1])){ echo $url[1]; }?>">Namibia</a> | <a href="<?php echo PATH ?>zambia/<?php if(isset($url[1])){ echo $url[1]; }?>">Zambia</a> | <a href="<?php echo PATH ?>zimbabwe/<?php if(isset($url[1])){ echo $url[1]; }?>">Zimbabwe</a></div>
    <div class="ad1">

     <script type="text/javascript">
        var uri = 'http://imp.tradedoubler.com/imp?type(js)pool(478131)a(2113950)' + new String (Math.random()).substring (2, 11);
        document.write('<sc'+'ript type="text/javascript" src="'+uri+'" charset="ISO-8859-1"></sc'+'ript>');
     </script>

    </div>

       <div class="navbar navbar-inverse navbar-fixed-top">
           <div class="navbar-inner">
               <div class="container">
                   <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                   </button>

                   <div class="top"> <!--TODO:Add country links-->

                   </div>

                   <a class="brand" href="./index.php">See My City</a>
                   <div class="nav-collapse collapse pull-right">
                       <ul class="nav">
                           <li><a href="<?php echo PATH; ?>magazine/">Magazine</a></li>
                           <li><a href="<?php echo PATH; ?>directory/">Directory</a></li>
                           <li><a href="<?php echo PATH; ?>dineout/">Dine Out</a></li>
                           <li><a href="<?php echo PATH; ?>planner/">Wedding Planner</a></li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>


</header>