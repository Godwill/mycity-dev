<?php include '../system/initialize.php'; ?>
<?php 
      $url = $_SERVER['REQUEST_URI'];
      $url = ltrim($url, '/');
      $url = rtrim($url, '/');
      $url = explode('/', $url);
    if(isset($url[3])){ 
       $products = Craft_Product::find_by_sql("SELECT * FROM craft_products WHERE id='{$url[4]}'");
          foreach ($products as $product):?>
<!DOCTYPE html>
<html lang="en">
  <head>
   
    <meta charset=utf-8" />
    <meta content="" http-equiv="keywords" name="<?php echo $product->tags; ?>" />
    <meta content="" http-equiv="description" name="<?php echo $product->description; ?>" />

    <meta property="og:title" content="<?php echo $product->name;?>"/>
    <meta property="og:type" content="Product"/>
    <meta property="og:url" content="<?php echo PATH ?>craftshop/<?php echo $product->system?>/<?php echo $product->id?>"/>
    <meta property="og:image" content="<?php echo PATH ?>images/logos/<?php echo $product->picture; ?>"/>
    <meta property="og:site_name" content="<?php echo $product->name;?> | See My City Craft Shop"/>
    <meta property="fb:admins" content="tawanike"/>
    <meta property="og:description" content="<?php echo $product->description;?>"/>
    <meta name="directory" content="submission" />
    <meta property="fb:app_id" content="147231072020134"/>
    
    <title><?php echo $product->name;?> | See My City Craft Shop</title>
    
    <link href="<?php echo PATH ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo PATH ?>assets/css/craftshop.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo PATH ?>assets/css/main.css" rel="stylesheet" type="text/css"/>
   </head>
  <body>
    <div id="page">
      <header>
        <div class="countries"><a href="<?php echo PATH ?>botswana/">Botswana</a> | <a href="<?php echo PATH ?>namibia/">Namibia</a> | <a href="<?php echo PATH ?>zambia/">Zambia</a> | <a href="<?php echo PATH ?>zimbabwe/">Zimbabwe</a></div>
        <div class="logo"><a href="<?php echo PATH ?>">See My City</a></div>
        <div class="ad1">
         <!-- new_ad_unit -->
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1359311124978-0'); });
</script>
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
<aside class="aside-120 left"><?php include'../template/craftshop/sidebar-left.php'; ?></aside>
<section class="main-content-profile">
    <h1><?php  echo $product->name; ?></h1>
    <img src="<?php echo PATH ?>images/craftshop/<?php echo $product->id;?>.jpg">
    <div class="pic-list">
      <img src="<?php echo PATH ?>images/craftshop/<?php echo $product->id;?>.jpg">
      <img src="<?php echo PATH ?>images/craftshop/<?php echo $product->id;?>.jpg">
      <img src="<?php echo PATH ?>images/craftshop/<?php echo $product->id;?>.jpg">

    </div>
    <div class="details">
      <div>Price: &pound; <?php echo number_format($product->price, 2); ?></div>
      <div>Shipping: &pound; <?php echo number_format($product->shipping, 2); ?></div>
      <div class="capitalize">Origin: <?php echo get_city($product->city); ?>, <?php echo code_to_country($product->country);?></div>
      
      <div>Weight: &pound; <?php echo number_format($product->price, 2); ?></div>
      
      <p><?php echo nl2br($product->description);?></p>
      
 
    </div>
</section>
<aside class="aside-300 right"><?php include'../template/craftshop/sidebar-right.php'; ?></aside>
<?php endforeach;?>


<?php 
  #if no product is selected

}else{ ?>
      
      
<?php } ?>