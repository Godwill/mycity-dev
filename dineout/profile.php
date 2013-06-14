<?php  include'../system/initialize.php'?>
<?php
if(isset($_GET['q'])){
	$url = $_GET['q'];
	$url = rtrim($url, '/');
	$url = explode('/', $url);
	$system = $url[2];

	$sql = "SELECT * FROM companies where system='{$system}'";
	$company = Company::find_by_sql($sql);
	foreach($company as $company):
/*
$views = new Views();
$views->storyid = $article->id;
$views->created = time();
$views->create();
*/
?>
<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/Restaurant" 
      xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="http://www.facebook.com/2008/fbml">

    <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="og:type" content="dineoutnam:restaurant"/>
   
   <meta name="keywords" content="<?php echo $company->name; ?>, <?php echo get_city($company->city); ?>"/>
  <meta name="description" content="<?php echo substr($company->description, 0, 150); ?>"/>
 
  <meta name="url" content="<?php echo PATH?>dineout/<?php echo $company->id; ?>/<?php echo $company->system; ?>">
  <meta name="identifier-URL" content="<?php echo PATH?>dineout/<?php echo $company->id; ?>/<?php echo $company->system; ?>">
  <meta name="directory" content="submission">

  <meta property="twitter:card" content="summary">
  <meta property="twitter:url" content="<?php echo PATH?>dineout/<?php echo $company->id; ?>/<?php echo $company->system; ?>">
  <meta property="twitter:title" content="<?php echo $company->name; ?>">
  <meta property="twitter:description" content="<?php echo substr($company->description, 0, 200); ?>">
  <meta property="twitter:image" content="<?php echo PATH?>images/dineout/restaurants/<?php echo $company->logo; ?>">
  
  <meta property="twitter:site" content="@dineoutNamibia">
  <meta property="twitter:site:id" content="">
  <meta property="twitter:creator" content="">
  <meta property="twitter:creator:id" content="">
 
  <!-- Add the following three tags inside head. -->
<meta itemprop="name" content="<?php echo $company->name; ?>">
<meta itemprop="description" content="<?php echo substr($company->description, 0, 200); ?>">
<meta itemprop="image" content="<?php echo PATH?>images/dineout/restaurant/<?php echo $company->logo; ?>">
  
  <meta property="og:title" content="<?php echo $company->name; ?>"/>
 
  <meta property="og:url" content="<?php echo PATH?>dineout/<?php echo $company->id; ?>/<?php echo $company->system; ?>"/>
  <meta property="og:image" content="<?php echo PATH?>images/dineout/restaurant/<?php echo $company->logo; ?>"/>
  <meta property="og:site_name" content="<?php echo $company->name; ?>"/>
  <meta property="og:description" content="<?php echo substr($company->description, 0, 200); ?>"/>
  <meta property="og:email" content="<?php echo $company->email; ?>"/>
  <meta property="og:phone_number" content="<?php echo $company->tel; ?>"/>
  <meta property="og:fax_number" content="<?php echo $company->fax; ?>"/>
<meta property="fb:app_id" content="271609212950136"/>

  <meta property="og:latitude" content="<?php echo $company->latitude; ?>"/>
  <meta property="og:longitude" content="<?php echo $company->longitude; ?>"/>
  <meta property="og:street-address" content="<?php echo $company->address_line_1; ?>"/>
  <meta property="og:locality" content="<?php echo $company->address_line_2; ?>"/>
  <meta property="og:region" content="<?php echo get_city($company->city);?>"/>
  <meta property="og:country-name" content="<?php echo code_to_country($company->country);?>"/>

    <link rel="shortcut icon" type="image/ico" href="/favicon.ico" />
    <link href="<?php echo PATH ?>assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo PATH ?>dineout/css/main.css"/>

    
    
  <title><?php echo $company->name;?></title>  

  
  <script type="text/javascript" language="javascript" src="<?php echo PATH ?>assets/js/jquery.js"></script>
     <script type="text/javascript" src="scripts/jquery-ui.js"></script>	

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="<?php echo PATH ?>assets/js/dineout.js"></script>
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

   <script>
       $('#myTab').tab('show');
 </script>

 <script type="text/javascript">
function initialize() {
  var myLatLng = new google.maps.LatLng(<?php echo $company->latitude; ?>, <?php echo $company->longitude; ?>);
  var mapOptions = {
    zoom: 15,
    center: myLatLng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
  
  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    Title:"<?php echo $company->name;?>"
  });
}

function loadScript() {
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyCQzrJ6dBwq0nAjUTqNP87dOKMpmYg-wBk&sensor=false&callback=initialize";
document.body.appendChild(script);
}

window.onload = loadScript;
 </script>   
 
</head>
 <body onload="initialize()" itemscope itemtype="http://schema.org/Restaurant">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=271609212950136";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <div id="mainNav" style="float: left;width:100%;height: 50px;" >
      <div id="mainNav" style="margin: 0px auto;width:1024px;font-size: 18px;" ><?php include'template/nav.php'; ?></div>
   </div>
<div id="page"> 
  
    <header>
      <div id="logo"><img src="<?php echo PATH ?>images/site/logo.jpg" /></div>
      
      <div class="ad1">
      <script type="text/javascript"><!--
google_ad_client = "ca-pub-6137026230943940";
/* See My City Header */
google_ad_slot = "6026108253";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

      </div>
      
      <navigation>
        <ul>
          <li><a href="<?php echo PATH ?>dineout/">HOME</a></li>
          <li><a href="<?php echo PATH ?>dineout/wine">WINE CELLAR</a> </li> 
          <li><a href="<?php echo PATH ?>dineout/menus">MENUS</a></li>        
        </ul>
        
        <div class="fb-like" data-href="https://www.facebook.com/pages/Eat-Out-Namibia/500264410002362" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false" data-font="segoe ui"></div>
      <a href="https://twitter.com/dineoutNamibia" class="twitter-follow-button" data-show-count="false">Follow @dineoutNamibia</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </navigation>
      
    </header>
  
  <div id="message" class="message"> </div>
  
  <div class="aside-right aside-250"><?php include '../dineout/template/sidebar.php'; ?></div>
  
  <div class="rest-container">
    
        <h1><span itemprop="name"><?php echo $company->name; ?></span></h1>
    <div class="rest-header">
    
    <div class="addr">
    <div class="small" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
       <?php if(!empty($company->address_line_1)){ ?><span itemprop="streetAddress"> <?php echo $company->address_line_1; ?></span>, <?php }?>
       <?php if(!empty($company->address_line_2)){ ?><span itemprop="addressLocality"><?php echo $company->address_line_2; ?></span>, <?php }?>
     <span itemprop="addressRegion"><?php echo get_city($company->city);?></span>, <?php echo code_to_country($company->country);?>
    </div>
    <div class="small">
     <?php if(!empty($company->tel)){ ?> t. <span itemprop="telephone"><?php echo $company->tel; ?></span> <?php }?> <?php if(!empty($company->fax)){ ?>f. <?php echo $company->fax; ?><?php }?></br>
      <?php if(!empty($company->email)){ ?><a href="mailto:<?php echo $company->email; ?>" target="_blank"><?php echo $company->email; ?></a> <?php }?><?php if(!empty($company->website)){ ?><a itemprop="url" target="_blank" href="http://www.<?php echo $company->website; ?>">www.<?php echo $company->website; ?></a><?php }?>
    </div>
    </div><?php #end of address container ?>
      
    <div class="social">
<!-- Place this tag where you want the share button to render. -->
<div class="g-plus" data-action="share" data-annotation="bubble" href="<?php echo PATH?>dineout/<?php echo $company->id; ?>/<?php echo $company->system; ?>" ></div>

<!-- Place this tag after the last share tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo PATH?>dineout/<?php echo $company->id; ?>/<?php echo $company->system; ?>" data-via="dineoutNamibia" data-lang="en" data-related="SeeMyCityNam" data-count="horizontal">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<div class="fb-like" data-href="<?php echo PATH?>dineout/<?php echo $company->id; ?>/<?php echo $company->system; ?>" data-send="true" data-layout="button_count" data-width="120" data-show-faces="true"></div>
      </div>
  
    </div><?php #end of rest header?>
        <div class="rest-main-pic"><img src="<?php echo PATH ?>images/dineout/restaurant/<?php echo $company->logo;?>"/></div>
        
        <div class="ratings">
          <table class="table">
            <?php
                $restaurant = Restaurant::find_by_sql("SELECT * FROM restaurant WHERE company_id='{$company->id}'");
                foreach($restaurant as $restaurant):
            ?>
            <tr>
              <td>Operating Hours</td>
              <td><?php echo $restaurant->operating_hours?></td>
            </tr>
            <tr>
              <td>Meals</td>
              <td><?php if($restaurant->breakfast == 1){echo "Breakfast";}?>
            <?php if($restaurant->lunch == 1){echo " ~ Lunch";}?>
            <?php if($restaurant->dinner == 1){echo " ~ Dinner";}?></td>
            </tr>
            <tr>
              <td>Payment Options</td>
              <td><?php echo $restaurant->payment_types; ?></td>
            </tr>
            <tr>
              <td>Accessibility</td>
              <td><?php if($restaurant->accessibility == 1){echo "Wheelchair";} ?></td>
            </tr>
            <tr>
              <td>Reservations</td>
              <td><?php if($restaurant->reservations == 1){ echo "Reservations Allowed ";}?></td>
            </tr>
            <tr>
              <td>Features</td>
              <td><?php 
              if($restaurant->deliveries == 1){ echo "Home Deliveries, ";} 
              if($restaurant->take_out == 1){ echo "Take away, ";} 
              if($restaurant->internet == 1){ echo "WI-FI, ";} 
              if($restaurant->waiter_service == 1){ echo "Waiter Sevice, ";}
              if($restaurant->good_for_kids == 1){ echo "Kids menu and play area, ";}
              if($restaurant->good_for_groups == 1){ echo "Good for groups, ";}
              if($restaurant->music == 1){ echo "music";}
              ?></td>
            </tr>
            <tr>
              <td>Happy Hour</td>
              <td><?php echo $restaurant->happy_hour; ?></td>
            </tr>
            <?php endforeach; ?>
          </table>
        </div>
        <div class="rest-header">
          
          
        </div>
    <ul class="nav nav-tabs across" id="myTab">
      <li><a href="#about" data-toggle="tab">Description</a></li>
      <li><a href="#reviews" data-toggle="tab">Reviews</a></li>
      <li><a href="#menu" data-toggle="tab">Menu</a></li>
      <li><a href="#map" data-toggle="tab">Map & Directions</a></li>
    </ul>

      <div class="tab-content across">
    <div class="tab-pane active" id="about"><?php echo nl2br($company->description); ?></div>

   <div class="tab-pane " id="reviews">
     <div class="fb-comments" data-href="http://www.seemycity.net/dineout/<?php $rid = $company->id; ?>/<?php $rid = $company->system; ?>" data-num-posts="10" data-width="720"></div>
 
    </div>    
    
        <div class="tab-pane" id="menu"><?php $rid = $company->id; ?> </div>
        <div class="tab-pane" id="map"><div id="map_canvas" style="width: 700px; height: 300px"></div></div>
  
 </div>
<?php endforeach; } ?>
  
  	<script type="text/javascript" language="javascript" src="<?php echo PATH ?>assets/js/bootstrap.js"></script>
        
 <script type="text/javascript">
    $('#reviewBtn').click(function(){
      $('#addReview').modal('show');
    });
 </script>    
  <script type="text/javascript">
   $('#submit').click(function(){
      var company = $('#add-review').val();
      var review = $('#review').val();
      var rating = $('#rating').val();
      $.post('process/review.php', { place_id: company }, function(data){
        hscroll('Your review for '+data+'  has been saved.');
      });
    $('#reviewBtn').hide();
    $('#addReview').modal('hide');
    $('#reviewForm').submit;
  });
 </script>
     <div style="clear: both;">
<?php include'template/footer.php'; ?>