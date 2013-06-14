<?php include 'system/initialize.php'; ?>
<?php include 'template/header.php'; ?>
<?php
  //if(!isset($_GET['country'])){$_GET['country'] = 'bw';}
?>
<div class="main-content" >
	<?php
		$stream = Stream::find_by_sql("SELECT * FROM stream ORDER BY created DESC");
		foreach($stream as $stream):

		echo get_for_stream($stream->object_id, $stream->table);
		
		endforeach; 
	?>
</div>
 
<div class="aside-300 right"><?php include'template/sidebar-left.php';?></div>

<div class="clear"></div>
<footer>
  <?php include 'template/footer.php'; ?>
</footer>