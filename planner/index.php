<?php include '../system/initialize.php'; ?>
<?php include '../template/header.php'; ?>
<div class="main-content-wedding">
	<!-- <div class="section-main">
		<div class="category-container"><h1>Top News</h1></div>
		<div class="category-container"><h1>Latest Blog Posts</h1></div>
		
	</div> -->
  <?php
    $category = Category::find_by_sql("SELECT * FROM wedding_categories ORDER BY name ASC");
    foreach ($category as $category):
  ?>
    <div class="category-container">
        <div class="category-pic" ><img src="<?php echo PATH ?>images/planner/assets/<?php echo $category->system; ?>.jpg" width="50" height="50" alt="<?php echo $category->name; ?> See My City" /></div>
        <div class="featuredDetails">
          <h4><a href="<?php echo PATH ?>planner/category/<?php echo $category->system; ?>"><?php echo $category->name; ?></a></h4>
          <?php echo $category->description; ?>
        </div>
    </div><?php #end of category container ?>
<?php endforeach; ?>
</div><?php #end of main content ?>

  <aside class="aside-300 right">
    <div class="ad2">
      <script type="text/javascript">
var uri = 'http://imp.tradedoubler.com/imp?type(js)pool(478129)a(2113950)' + new String (Math.random()).substring (2, 11);
document.write('<sc'+'ript type="text/javascript" src="'+uri+'" charset="ISO-8859-1"></sc'+'ript>');
</script>
    </div>
    <div class="section">
      <h3>Featured Vendors</h3>
    </div>
  </aside>

<?php include '../template/footer.php'; ?>
