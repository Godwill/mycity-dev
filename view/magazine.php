<?php
  if(!isset($_GET['q'])){
    include'../template/magazine/header.php';
?>
<ul>
  <?php
      $stories = Article::find_by_sql("SELECT * FROM articles WHERE featured=1 ORDER BY created LIMIT 10");
      foreach ($stories as $article): ?>
       <li><a href="<?php echo date('Y', $article->created);?>/<?php echo date('F', $article->created);?>/<?php echo date('d', $article->created);?><?php echo $article->system; ?>"><?php echo $article->title; ?></a></li>
  <?php    endforeach; ?>
</ul>

<?php }else{ ?>
  <?php
      $system = $_GET['q'];
      $stories = Article::find_by_sql("SELECT * FROM articles WHERE system='{$system}' LIMIT 1");
      foreach ($stories as $article): ?>
       
<!DOCTYPE html>
<html lang="en">
  <head>
    
     
    <meta charset=utf-8" />
    <meta content="" http-equiv="keywords" name="" />
    <meta content="" http-equiv="description" name="" />

    <meta property="og:title" content="<?php echo $article->title;?>"/>
    <meta property="og:type" content="Website"/>
    <meta property="og:url" content="<?php echo PATH ?>magazine/<?php echo $article->system?>"/>
    <meta property="og:image" content="<?php echo PATH ?>images/logos/<?php echo $article->picture; ?>"/>
    <meta property="og:site_name" content="<?php echo $article->title;?>"/>
    <meta property="fb:admins" content="tawanike"/>
    <meta property="og:description" content="<?php echo $article->body;?>"/>
    <meta name="directory" content="submission" />
    <meta property="fb:app_id" content="147231072020134"/>
    
    <title><?php echo SITE_NAME; ?> :: <?php echo $article->title;?></title>
    
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
    
     $url = $_SERVER['REQUEST_URI'];
      $url = ltrim($url, '/');
      $url = rtrim($url, '/');
      $url = explode('/', $url);
      #print_r($url);
      
      #if(!isset($_GET['country'])){$_GET['country'] = 'bw';}
      
      if($url[1] == "botswana"){
        $countryCode = "bw";
      }elseif($url[1] == "namibia"){
        $countryCode = "na";
      }elseif($url[1] == "zambia"){
        $countryCode = "zm";
      }elseif($url[1] == "zimbabwe"){
        $countryCode = "zw";
      }
      
      
      if(isset($url[1])){
        if($countryCode == "bw"){
          $country = "botswana";
        }elseif($countryCode == "na"){
          $country = "namibia";
        }elseif($countryCode == "zm"){
          $country = "zambia";
        }elseif($countryCode == "zw"){
          $country = "zimbabwe";
        }
      
      }
    ?>
    <li><a href="<?php echo PATH; ?><?php echo $country; ?>/magazine/?country=<?php echo $countryCode;?>">HOME</a></li>
    <li><a href="<?php echo PATH; ?><?php echo $country; ?>/directory/?country=<?php echo $countryCode;?>">ENTERTAINMENT</a></li>
    <li><a href="<?php echo PATH; ?><?php echo $country; ?>/venues/?country=<?php echo $countryCode;?>">HEALTH & BEAUTY</a></li>
    <li><a href="<?php echo PATH; ?><?php echo $country; ?>/restaurants/?country=<?php echo $countryCode;?>">LIFESTYLE</a></li>
    <li><a href="<?php echo PATH; ?><?php echo $country; ?>/events/?country=<?php echo $countryCode;?>">EVENTS</a></li>
    <li><a href="<?php echo PATH; ?><?php echo $country; ?>/pricecheck/?country=<?php echo $countryCode;?>">SPORTS</a></li>
    <li><a href="<?php echo PATH; ?><?php echo $country; ?>/hotels/?country=<?php echo $countryCode;?>">TRAVEL</a></li>
    <li><a href="<?php echo PATH; ?><?php echo $country; ?>/weddings/?country=<?php echo $countryCode;?>">WEDDINGS</a></li>
    <li><a href="<?php echo PATH; ?><?php echo $country; ?>/offers/?country=<?php echo $countryCode;?>">OFFERS</a></li>
    <li><a href="<?php echo PATH; ?><?php echo $country; ?>/cars/?country=<?php echo $countryCode;?>">CARS</a></li>
    <li><a href="<?php echo PATH; ?><?php echo $country; ?>/recipes/?country=<?php echo $countryCode;?>">RECIPES</a></li>
  </ul>
        </nav>
      </header>
 <div class="main-content">
   <li><a href="<?php echo $article->system; ?>"><?php echo $article->title; ?></a></li>
 <?php    endforeach; #END OF ARTICLE FOREACH?>
<?php } ?>