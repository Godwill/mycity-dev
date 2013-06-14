<?php
#echo "this is coming from the companies file in the views folder</p>";
      $url = $_SERVER['REQUEST_URI'];
      $url = ltrim($url, '/');
      $url = rtrim($url, '/');
      $url = explode('/', $url);
      $country = get_country($url[1]);
    ?>
<?php 
  
    if(!isset($url[3])){
      include'../template/simple-header.php';     
     
    $companies = Company::find_by_sql("SELECT * FROM companies WHERE country ='{$country}'");
    foreach ($companies as $company): ?>
<div class="list-container span-190">
  <a href="<?php echo PATH ?><?php echo code_to_country($company->country);?>/directory/<?php echo $company->system?>"> 
      <div class="list-pic"><img src="<?php echo PATH ?>images/logos/<?php echo $company->logo;?>" width="50" height="50"></div>
      </a>
      <ul>
        <li><a href="<?php echo PATH ?><?php echo code_to_country($company->country);?>/directory/<?php echo $company->system?>"> <?php echo $company->name; ?></a></li>
      <li>
        <?php 
        $city_id = $company->city;
        $sql = "SELECT * FROM cities WHERE id={$city_id}";
        $city = City::find_by_sql($sql);
        foreach($city as $city): ?>
  <a href="<?php echo PATH ?>directory/search/?city=<?php echo $city->id; ?>"><?php echo $city->name; ?></a>
  <?php endforeach; #end of city look up?></li>
        
   </ul>
</div>
<?php endforeach; 
    }else{
      $url = $_SERVER['REQUEST_URI'];
      $url = ltrim($url, '/');
      $url = rtrim($url, '/');
      $url = explode('/', $url);
      #print_r($url);
      $system = $url[3];
      #print_r($system);
      
      $company = Company::find_by_sql("SELECT * FROM companies WHERE system='{$system}'");
      foreach ($company as $company):
?>
<?php include '../system/initialize.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
     
    <meta charset=utf-8" />
    <meta content="" http-equiv="keywords" name="<?php echo $company->keywords; ?>" />
    <meta content="" http-equiv="description" name="" />

    <meta property="og:title" content="<?php echo $company->name;?>"/>
    <meta property="og:type" content="Website"/>
    <meta property="og:url" content="<?php echo PATH ?><?php echo code_to_country($company->country); ?><?php echo $url[2]; ?>/<?php echo $company->system?>"/>
    <meta property="og:image" content="<?php echo PATH ?>images/logos/<?php echo $company->logo; ?>"/>
    <meta property="og:site_name" content="<?php echo $company->name;?>"/>
    <meta property="fb:admins" content="tawanike"/>
    <meta property="og:description" content="<?php echo $company->description;?>"/>
    <meta name="directory" content="submission" />
    <meta property="fb:app_id" content="147231072020134"/>
    
    <title><?php echo $company->name;?></title>
    
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
   
    ?>
    <li><a href="<?php echo PATH; ?><?php echo code_to_country($company->country); ?>/magazine/">MAGAZINE</a></li>
    <li><a href="<?php echo PATH; ?><?php echo code_to_country($company->country); ?>/directory/">DIRECTORY</a></li>
   <!-- <li><a href="<?php echo PATH; ?><?php echo code_to_country($company->country); ?>/venues/">VENUES</a></li>
    <li><a href="<?php echo PATH; ?><?php echo code_to_country($company->country); ?>/restaurants/">RESTAURANTS</a></li>
    <li><a href="<?php echo PATH; ?><?php echo code_to_country($company->country); ?>/events/">EVENTS</a></li>
    <li><a href="<?php echo PATH; ?><?php echo code_to_country($company->country); ?>/pricecheck/">PRICECHECK</a></li>
    <li><a href="<?php echo PATH; ?><?php echo code_to_country($company->country); ?>/hotels/">HOTELS</a></li>
    <li><a href="<?php echo PATH; ?><?php echo code_to_country($company->country); ?>/weddings/">WEDDINGS</a></li>
    <li><a href="<?php echo PATH; ?><?php echo code_to_country($company->country); ?>/offers/">OFFERS</a></li>
    <li><a href="<?php echo PATH; ?><?php echo code_to_country($company->country); ?>/cars/">CARS</a></li>
    <li><a href="<?php echo PATH; ?><?php echo code_to_country($company->country); ?>/recipes/">RECIPES</a></li> -->
  </ul>
        </nav>
      </header>
 <div class="main-content">
   <h2><?php echo $company->name; ?></h2>
<div class="profile-contact">      
<div class="profile-logo">
  <img src="<?php echo PATH; ?>images/logos/<?php echo $company->logo; ?>" width="300" height="180">
</div>

  <strong>Website</strong> <a href="http://www.<?php echo $company->website; ?>" target="_blank">www.<?php echo $company->website; ?></a></br>
  <strong>Blog</strong> <a href="http://www.<?php echo $company->website; ?>/blog" target="_blank">www.<?php echo $company->website; ?></a></br>
  <strong>Twitter</strong> <a href="http://www.twitter.com/<?php echo $company->twitter; ?>" target="_blank">@<?php echo $company->twitter; ?></a></br>
  <strong>Facebook</strong> <a href="http://www.facebook.com/<?php echo $company->facebook; ?>" target="_blank"><?php echo $company->name; ?></a></br>
  <strong>LinkedIn</strong> <a href="http://www.linkedin.com/<?php echo $company->linkedin; ?>" target="_blank"><?php echo $company->name; ?></a></br>
  <strong>Phone</strong> <?php echo $company->tel; ?></br>
  <strong>Email</strong> <?php echo $company->email; ?></br>
  
<h4>Office Address</h4>
<div class="address-line"><?php echo $company->address_line_1; ?>, </br><?php echo $company->address_line_2; ?>, <?php echo $company->address_line_3; ?></div>
<div class="address-line"><?php echo $company->postal1; ?>, <?php echo $company->postal2; ?></div>
<div class="address-line"><?php $city_id = $company->city; $city = City::find_by_sql("SELECT * FROM cities WHERE id='{$city_id}'");
 foreach ($city as $city): echo $city->name; endforeach;?>, <?php if($company->country == "bw"){ echo 'Botswana';}elseif($company->country == "na"){echo 'Namibia';}elseif($company->country == "zw"){echo 'Zimbabwe';}elseif($company->country == "zm"){echo 'Zambia';} ?></div>
</div><?php #end of profile contacts?>
<div>
  <div class="share">
    
  </div>
  <?php echo nl2br($company->description); ?></div>


</div><?php #end of main content ?>
      
      <div class="aside-300 right">
        
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
googletag.defineSlot('/7069884/side_300x250', [300, 250], 'div-gpt-ad-1360430375275-0').addService(googletag.pubads());
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>
        
        <div class="ad2">
          <!-- side_300x250 -->
<div id='div-gpt-ad-1360430375275-0' style='width:300px; height:250px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1360430375275-0'); });
</script>
</div>
        </div><?php #end of ad2?>

<div class="side-section">
  <h3>Similar Companies</h3>
  <ul>
  <?php 
  $min = rand(317790, 99999999);
  $max = rand($min, 99999999);
    $similar = Company::find_by_sql("SELECT * FROM companies WHERE industry='{$company->industry}' AND id!='{$company->id}' LIMIT 6");
    foreach($similar as $similar): ?>
  <li> <a href="<?php echo PATH; ?><?php if($similar->country == "bw"){ ?>botswana/<?php }elseif($similar->country == "na"){ ?>namibia/<?php }elseif($similar->country == "zm"){ ?>zambia/<?php }elseif($similar->country == "zw"){ ?>zimbabwe/<?php } ?>directory/<?php echo $similar->system;?>"><?php echo $similar->name; ?></a></li>
  <?php endforeach; ?>
  </ul>
  </div><?php # end of similar companies ?>
<div class="side-section">
  <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
<script type="IN/JYMBII" data-format="inline"></script>
  </div><?php # end of?>
<!--<div class="side-section">
  <h3>Jobs in this Industry</h3>
  </div><?php # end of?> -->

      </div>
   <?php endforeach;?>   
  <?php  }
?>