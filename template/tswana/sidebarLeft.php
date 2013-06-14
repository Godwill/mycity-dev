<ul class="nav nav-stacked nav-tabs">

<?php
    $word = Word::find_by_sql("SELECT * FROM dictionary WHERE language=1");
    foreach($word as $word):
?>
   <li><a href="<?php echo PATH ?>english-to-setswana-dictionary/def/<?php echo $word->system2; ?>"><span class="capitalize"><?php echo $word->word2; ?></span></a></li>
<?php endforeach; ?>
</ul>
<div class="ad5">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-6137026230943940";
/* Dictionary Side */
google_ad_slot = "8131841138";
google_ad_width = 250;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
