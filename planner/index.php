<?php include '../system/initialize.php'; ?>
<?php include 'template/header.php'; ?>
<aside class="film-strip left">
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
</aside>
<div class="front-main-content ">
<?php 
$url = $_SERVER['REQUEST_URI'];
$url = ltrim($url, '/');
$url = rtrim($url, '/');
$url = explode('/', $url);
#print_r($url[2]);

?>
	<div class="row-fluid left">
	
	<h3>Find Vendor by Category</h3>
			  <?php
		    $category = Category::find_by_sql("SELECT * FROM wedding_categories");
		    foreach ($category as $category):
		  ?>
		    <div class="category-container">
		        <a href="<?php echo PATH ?>planner/category/<?php echo $category->system; ?>"><?php echo $category->name; ?></a>
		    </div><?php #end of category container ?>
		<?php endforeach; ?>
	</div>		
	
	<div class="row-fluid">
	<h3>Find Vendor by City</h3>
		<?php 
			$city = City::find_by_sql("SELECT * FROM cities WHERE country='bw'");
			foreach ($city as $city):
		?>
		<div class="category-container">
			<a href="<?php echo PATH ?>planner/city/<?php echo $city->system; ?>">
				<?php echo $city->name;?>
			</a>
		</div><?php #end of category container ?>
	<?php endforeach;?>
	</div>
	<div class="row-fluid">
	<h3>Find Vendor by Location</h3>
	<?php 
			$city = City::find_by_sql("SELECT * FROM cities WHERE country='bw'");
			foreach ($city as $city):
		?>
	<?php 
		$center = Location::find_by_sql("SELECT * FROM business_centers WHERE city=$city->id");
		foreach ($center as $center):
	?>
		<div class="category-container">
			<a href="<?php echo PATH ?>planner/location/<?php echo $center->system; ?>">
				<?php echo $center->name;?>
			</a>
		</div><?php #end of category container ?>
	<?php endforeach;?>
	<?php endforeach;?>
	</div>
	
	
	<div class="ad1">
		<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- Planner Header -->
		<ins class="adsbygoogle"
		     style="display:inline-block;width:728px;height:90px"
		     data-ad-client="ca-pub-6137026230943940"
		     data-ad-slot="3956611537"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
	<div class="row-fluid">
	<h3>Featured Vendors</h3>
	<?php 
		$company = Company::find_by_sql("SELECT * FROM companies WHERE country='bw' AND type=4 AND featured=1");
		foreach ($company as $company):
	
	?>
		<div class="featured">
			<div class="picture left"><img src="<?php echo PATH; ?>images/logos/<?php echo $company->logo; ?>" alt="<?php echo $company->name; ?>" /></div>
			<div class="details right">
				<h5><?php echo $company->name; ?></h5>
				<?php echo $company->address_line_1; ?>
			</div>
			<div class="actions">
				<div class="view-profile right"><a href="<?php echo PATH; ?>botswana/directory/<?php echo $company->system; ?>">View Profile</a></div>
			</div>
		</div>
	<?php endforeach; ?>
	</div>
	
	<div class="ad1">
	<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Planner Header -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-6137026230943940"
     data-ad-slot="3956611537"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>	
	
</div><?php #end of main content ?>

  <aside class="film-strip right">
  	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>  
  </aside>
	
<?php include '../template/footer.php'; ?>
