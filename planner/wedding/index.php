<?php include '../../system/initialize.php'; ?>
<?php include 'template/header.php'; ?>
<div class="main-content-wedding">
	<div class="section-main">
		<div class="category-container"><h3>Top News</h3></div>
		<div class="category-container"><h3>Latest Blog Posts</h3></div>
		
	</div>
  <?php
    $category = Category::find_by_sql("SELECT * FROM wedding_categories");
    foreach ($category as $category):
  ?>
    <div class="category-container">
        <a href="<?php echo PATH ?>planner/category/<?php echo $category->system; ?>"><?php echo $category->name; ?></a>
    </div><?php #end of category container ?>
<?php endforeach; ?>
</div><?php #end of main content ?>

  <aside class="aside-300 right"><?php #include 'template/sidebar.php';?></aside>

<?php include '../../template/footer.php'; ?>
