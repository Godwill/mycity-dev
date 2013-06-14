<?php
    include '../../system/initialize.php';
    include '../template/header.php';
?>
<div class="aside-left aside-200"><?php include 'categories.php'; ?></div>

<div class="main-content">
  

    <?php
      $wine = Wine::find_by_sql("SELECT * FROM wines LIMIT 20");
      foreach($wine as $wine):
    ?>
   <div class="wine-list-container">
    <div class="wine-list-pic"><img src="<?php echo PATH ?>images/dineout/wines/<?php echo $wine->picture; ?>"></div>
    <div class="wine-list-details">
      <div class="vineyard"><a href="<?php echo PATH; ?>dineout/wine/vineyard/<?php echo slug(get_vineyard($wine->vineyard)); ?>"><?php echo get_vineyard($wine->vineyard); ?></a></div>
      <div class="wine-name"><h3><a href="<?php echo PATH ?>dineout/wine/<?php echo $wine->id; ?>"><?php echo $wine->name; ?></a> </h3></div>
      
      <div class="wine-item">Category: <?php echo get_category("wine_categories", $wine->type); ?></div>
      <div class="wine-item">Vintage: <?php echo $wine->year; ?></div>
      <div class="wine-item">Alc: <?php echo $wine->alcohol; ?>&percnt; </div>
      <div class="wine-name">Origin: <?php echo get_city($wine->origin);  ?> </div>
    </div>
  </div>
  <?php endforeach;?>
</div>
<div class="aside-right aside-300">
  <script type="text/javascript"><!--
google_ad_client = "ca-pub-6137026230943940";
/* See My City sidebar */
google_ad_slot = "3864822224";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
<div style="clear: both;"></div>
<?php include '../template/footer.php';?>