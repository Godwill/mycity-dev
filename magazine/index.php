<?php include("../system/initialize.php");?>
<?php include("header.php");?>
<div class="sidebar"><?php include("sidebar.php");?></div>
<div class="main-content">
  <div class="row-300">
<?php
  $page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
  $per_page = 9;
  $total_count = Article::count_all();
  $pagination = new Pagination($page, $per_page, $total_count);
?>
<?php 
  $sql = "SELECT * FROM articles WHERE featured=1 ORDER BY created DESC ";
  $sql .= "LIMIT {$per_page} ";
  $sql .= "OFFSET {$pagination->offset()}";

  $articles = Article::find_by_sql($sql);
  foreach($articles as $article):
?>

<div class="new-container" style="width: 330px;height: auto;float: left;margin-bottom: 3px;border-bottom: 2px solid #ccc;">
  <div class="new-picture" style="width:320px;height:160px;float:left;margin:3px;">
    <img src="<?php echo PATH ?>images/magazine/thumb/<?php echo $article->picture; ?>" width="320" height="160">
  </div>
  <div class="new-teaser" style="width:330px;height:160px;float:left;margin:3px;">
    <h3><a href="<?php echo PATH ?>magazine/<?php echo date('Y', $article->created);?>/<?php echo date('m', $article->created);?>/<?php echo date('d', $article->created);?>/<?php echo $article->system; ?>"><?php echo $article->title;?></a></h3>
  <?php echo substr($article->body,0, 200); ?>
  </div>
  <div class="new-social" style="width:330px;height:50px;float:left;margin:3px;">
    Comments <fb:comments-count href=<?php echo PATH ?>magazine/<?php echo date('Y', $article->created);?>/<?php echo date('m', $article->created);?>/<?php echo date('d', $article->created);?>/<?php echo $article->system; ?>></fb:comments-count>
    
    <div class="fb-like" data-href="<?php echo PATH ?>/magazine/<?php echo date('Y', $article->created);?>/<?php echo date('m', $article->created);?>/<?php echo date('d', $article->created);?>/<?php echo $article->system; ?>" data-send="true" data-layout="button_count" data-width="120" data-show-faces="false"></div>
   <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo PATH ?>/magazine/<?php echo date('Y', $article->created);?>/<?php echo date('m', $article->created);?>/<?php echo date('d', $article->created);?>/<?php echo $article->system; ?>" data-text="<?php echo $article->title ?>" data-via="CitySee" data-hashtags="SeeMyCityNamibia">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> 
  
<!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-size="tall" data-annotation="inline" data-width="120" data-href="<?php echo PATH ?>magazine/<?php echo date('Y', $article->created);?>/<?php echo date('m', $article->created);?>/<?php echo date('d', $article->created);?>/<?php echo $article->system; ?>" ></div>

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

  </div>
</div>  
  
<?php endforeach;?>
  
  <div style="clear: both;"></div>
<div class="pagination">
      <ul >
<?php	
	if($pagination->total_pages() > 1){
		
		if($pagination->has_previous_page()){
			echo "<li class=\"previous\"><a href=\"?page=".$pagination->previous_page();
			echo " \"><i class=\"icon-circle-arrow-left\"></i> Prevous</a></li>";
		}
          ?>
  <?php
       
		for($i=1; $i <= $pagination->total_pages(); $i++) {
			if($i == $page){
				echo " <li class=\"disabled\"><a href=\"#\">{$i}</a></li>";
			} else {	
			echo " <li><a href=\"?page={$i}\">{$i}</a></li> ";
			}
		}
        
		if($pagination->has_next_page()){ 
			echo "<li class=\"next\"><a href=\"?page=";
			echo $pagination->next_page();
			echo "\">Next <i class=\"icon-circle-arrow-right\"></i></a></li> ";
		}
	}
?>
        </ul>
</div><!--End of Pagination-->  
  </div>
 <div class="row-300">
   <div class="section categories">
    <h3><a href="<?php echo PATH ?>lifestyle/">Lifestyle</a></h3>
    <ul class="nav nav-stacked nav-tabs">
       <?php
          $article = Article::find_by_sql("SELECT * FROM articles WHERE category=2 ORDER BY created DESC LIMIT 5");
          foreach ($article as $article):
       ?>
       <li><a href="<?php echo PATH ?>magazine/<?php echo date('Y', $article->created);?>/<?php echo date('m', $article->created);?>/<?php echo date('d', $article->created);?>/<?php echo $article->system; ?>">
         <?php echo $article->title; ?></a></li>
       <?php endforeach; ?>
     </ul>
  </div>
  <div class="section categories">
    <h3><a href="<?php echo PATH ?>health-and-beauty/">Health & Beauty</a></h3>
    <ul class="nav nav-stacked nav-tabs">
       <?php
          $article = Article::find_by_sql("SELECT * FROM articles WHERE category=4 OR category=6 ORDER BY created DESC LIMIT 5");
          foreach ($article as $article):
       ?>
       <li><a href="<?php echo PATH ?>magazine/<?php echo date('Y', $article->created);?>/<?php echo date('m', $article->created);?>/<?php echo date('d', $article->created);?>/<?php echo $article->system; ?>">
         <?php echo $article->title; ?></a></li>
       <?php endforeach; ?>
     </ul>
  </div>
  <div class="section categories">
     <h3><a href="<?php echo PATH ?>technology/">Technology</a></h3>
     <ul class="nav nav-stacked nav-tabs">
       <?php
          $article = Article::find_by_sql("SELECT * FROM articles WHERE category=8 ORDER BY created DESC LIMIT 5");
          foreach ($article as $article):
       ?>
       <li><a href="<?php echo PATH ?>magazine/<?php echo date('Y', $article->created);?>/<?php echo date('m', $article->created);?>/<?php echo date('d', $article->created);?>/<?php echo $article->system; ?>">
         <?php echo $article->title; ?></a></li>
       <?php endforeach; ?>
     </ul>
  </div>
  <div class="section categories">
    <h3><a href="<?php echo PATH ?>fashion/">Fashion</a></h3>
   <ul class="nav nav-stacked nav-tabs">
       <?php
          $article = Article::find_by_sql("SELECT * FROM articles WHERE category=1 ORDER BY created DESC LIMIT 5");
          foreach ($article as $article):
       ?>
       <li><a href="<?php echo PATH ?>magazine/<?php echo date('Y', $article->created);?>/<?php echo date('m', $article->created);?>/<?php echo date('d', $article->created);?>/<?php echo $article->system; ?>">
         <?php echo $article->title; ?></a></li>
       <?php endforeach; ?>
     </ul>
  </div>
  <div class="section categories">
    <h3><a href="<?php echo PATH ?>money-and-business/">Money & Business</a></h3>
    <ul class="nav nav-stacked nav-tabs">
       <?php
          $article = Article::find_by_sql("SELECT * FROM articles WHERE category=5 ORDER BY created DESC LIMIT 5");
          foreach ($article as $article):
       ?>
       <li><a href="<?php echo PATH ?>magazine/<?php echo date('Y', $article->created);?>/<?php echo date('m', $article->created);?>/<?php echo date('d', $article->created);?>/<?php echo $article->system; ?>">
         <?php echo $article->title; ?></a></li>
       <?php endforeach; ?>
     </ul>
  </div>
  <div class="section categories">
    <h3><a href="<?php echo PATH ?>sports/">Sports</a></h3>
    <ul class="nav nav-stacked nav-tabs">
       <?php
          $article = Article::find_by_sql("SELECT * FROM articles WHERE category=7 ORDER BY created DESC LIMIT 5");
          foreach ($article as $article):
       ?>
       <li><a href="<?php echo PATH ?>magazine/<?php echo date('Y', $article->created);?>/<?php echo date('m', $article->created);?>/<?php echo date('d', $article->created);?>/<?php echo $article->system; ?>">
         <?php echo $article->title; ?></a></li>
       <?php endforeach; ?>
     </ul>
  </div>
  <div class="section categories">
    <h3><a href="<?php echo PATH ?>travel/">Travel</a></h3>
    <ul class="nav nav-stacked nav-tabs">
       <?php
          $article = Article::find_by_sql("SELECT * FROM articles WHERE category=9 ORDER BY created DESC LIMIT 5");
          foreach ($article as $article):
       ?>
       <li><a href="<?php echo PATH ?>magazine/<?php echo date('Y', $article->created);?>/<?php echo date('m', $article->created);?>/<?php echo date('d', $article->created);?>/<?php echo $article->system; ?>">
         <?php echo $article->title; ?></a></li>
       <?php endforeach; ?>
     </ul>
  </div>
  <div class="section categories">
    <h3><a href="<?php echo PATH ?>entertainment/">Entertainment</a></h3>
    <ul class="nav nav-stacked nav-tabs">
       <?php
          $article = Article::find_by_sql("SELECT * FROM articles WHERE category=10 ORDER BY created DESC LIMIT 5");
          foreach ($article as $article):
       ?>
       <li><a href="<?php echo PATH ?>magazine/<?php echo date('Y', $article->created);?>/<?php echo date('m', $article->created);?>/<?php echo date('d', $article->created);?>/<?php echo $article->system; ?>">
         <?php echo $article->title; ?></a></li>
       <?php endforeach; ?>
     </ul>
  </div>
  <div class="section categories"><h3><a href="<?php echo PATH ?>autos/">Autos</a></h3></div>
  <ul class="nav nav-stacked nav-tabs">
       <?php
          $article = Article::find_by_sql("SELECT * FROM articles WHERE category=11 ORDER BY created DESC LIMIT 5");
          foreach ($article as $article):
       ?>
       <li><a href="<?php echo PATH ?>magazine/<?php echo date('Y', $article->created);?>/<?php echo date('m', $article->created);?>/<?php echo date('d', $article->created);?>/<?php echo $article->system; ?>">
         <?php echo $article->title; ?></a></li>
       <?php endforeach; ?>
     </ul>
 </div>
</div><?php // end of main content?>
<div style="clear: both;"></div>
<?php include("footer.php");?>