<?php include("../../system/initialize.php");?>
<?php include ('../header.php');?>
<?php
 $url = $_GET['q'];
      $url = rtrim($url, '/');
      $url = explode('/', $url);
      $category = $url[0];

    $cat = $category;
?> 
<div id="leftSidebar">
	
   <ul class="nav nav-tabs nav-stacked">
    <li><a href="<?php echo PATH ?>magazine/">Home</a></li>
    <?php
    $sql = "SELECT * FROM sub_categories WHERE category_id={$cat}";
	$Category = SubCategory::find_by_sql($sql);
	foreach($Category as $Category):
?>
	<li><a href="<?php echo PATH ?>magazine/browse/<?php echo $Category->id;?>/<?php echo $Category->system;?>"><?php echo $Category->name;?></a></li>
    <?php endforeach;?>
    </ul>
    </p>
</div>  

<div class="sidebar" >
	<div class="ad6">
<script type="text/javascript">
var uri = 'http://imp.tradedoubler.com/imp?type(js)pool(478569)a(2113950)' + new String (Math.random()).substring (2, 11);
document.write('<sc'+'ript type="text/javascript" src="'+uri+'" charset="ISO-8859-1"></sc'+'ript>');
</script>		
	</div>
    <div class="ad6">
          <h2>Connect With Us</h2>
          <div class="share-icon"><a href="https://www.facebook.com/pages/See-My-City/237937022885363" target="_blank"><img src="<?php echo PATH ?>images/site/social/facebook.jpg" width="32" height="32" /></a></div>
           <div class="share-icon"><a href="http://www.twitter.com/citysee" target="_blank"><img src="<?php echo PATH ?>images/site/social/twitter.jpg" width="32" height="32" /></a></div>
           <div class="share-icon"><a href="http://www.plus.google.com" target="_blank"><img src="<?php echo PATH ?>images/site/social/google.jpg" width="32" height="32" /></a></div>
           <div class="share-icon"><a href="http://www.pinterest.com" target="_blank"><img src="<?php echo PATH ?>images/site/social/pinterest.jpg" width="32" height="32" /></a></div>
           <div class="share-icon"><a href="http://www.youtube.com/user/" target="_blank"><img src="<?php echo PATH ?>images/site/social/youtube.jpg" width="32" height="32" /></a></div>
           <div class="share-icon"><a href="http://www..com" target="_blank"><img src="<?php echo PATH ?>images/site/social/rss.jpg" width="32" height="32" /></a></div>
    </div>	
</div>


<div class="main-content1">

  <?php
  $page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
  $per_page = 10;
  $sql = "SELECT COUNT(*) FROM articles WHERE category='{$category}'";
    global $database;
    $results = $database->query($sql);
    $num = $database->fetch_array($results);
    $total_count = array_shift($num);

  $pagination = new Pagination($page, $per_page, $total_count);
?>
<?php 
  $sql = "SELECT * FROM articles WHERE category='{$category}' ";
  $sql .= " ORDER BY created DESC ";
  $sql .= "LIMIT {$per_page} ";
  $sql .= "OFFSET {$pagination->offset()}";

  $articles = Article::find_by_sql($sql);
  foreach($articles as $article):
?>

<div class="new-container" style="width: 600px;height: auto;float: left;margin-bottom: 3px;border-bottom: 2px solid #ccc;">
  <h3><a href="<?php echo PATH ?>magazine/<?php echo date('Y', $article->created);?>/<?php echo date('m', $article->created);?>/<?php echo date('d', $article->created);?>/<?php echo $article->system; ?>"><?php echo $article->title;?></a></h3>
  <div class="new-picture" style="width:230px;height:160px;float:left;margin:3px;">
    <img src="<?php echo PATH ?>images/magazine/<?php echo $article->picture; ?>" width="230" height="160">
  </div>
  <div class="new-teaser" style="width:350px;height:160px;float:left;margin:3px;">
    
  <?php echo substr($article->body,0, 300); ?>
  </div>
  <div class="new-social" style="width:710px;height:50px;float:left;margin:3px;">
    Comments <fb:comments-count href=<?php echo PATH ?>magazine/<?php echo date('Y', $article->created);?>/<?php echo date('m', $article->created);?>/<?php echo date('d', $article->created);?>/<?php echo $article->system; ?>></fb:comments-count>
  </div>
</div>  
  
<?php endforeach;?>
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


<?php include ('../footer.php');?> 