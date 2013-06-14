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
 <h3>See My City Restaurant Guide</h3>
 <?php
 
  if(!isset($url[1])){ ?>
   <ul class="nav nav-tabs nav-stacked">
      <?php $restaurants = Company::find_by_sql("SELECT * FROM companies WHERE industry=12 ORDER BY created LIMIT 10");
          foreach($restaurants as $restaurant): ?>
 <li><a href="http://seemycity.net/<?php echo code_to_country($restaurant->country); ?>/dineout/<?php echo $restaurant->system; ?>"><?php echo $restaurant->name; ?> - <?php echo get_city($restaurant->city); ?></a></li>
      <?php endforeach; ?>
  </ul>
   <?php }else{?>
        <ul class="nav nav-tabs nav-stacked">
        <?php $country = get_country($url[1]); 
        $restaurant = Company::find_by_sql("SELECT * FROM companies WHERE country='{$country}' AND industry=12");
        foreach($restaurant as $restaurant):
          echo '<li><a href="http://seemycity.net/'.code_to_country($restaurant->country).'/dineout/'.$restaurant->system.'">'. $restaurant->name . '</a></li>';
        endforeach;
        ?></ul><?php };?>
</div>

<div class="side-section">
 <h3>See My City Wine Cellar</h3>
  <ul class="nav nav-tabs nav-stacked">
        <?php 
        $wine = Wine::find_by_sql("SELECT * FROM wines LIMIT 10");
        foreach($wine as $wine):?>
         <li><a href="<?php echo PATH ?>dineout/wine/<?php echo $wine->id; ?>"><?php echo $wine->name; ?></a></li>
       <?php  endforeach;
        ?></ul>
</div>

<div class="side-section">
	<fb:activity site="http://www.seemycity.net" app_id="118280394918580"></fb:activity>
</div>


















