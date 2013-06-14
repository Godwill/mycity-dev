<?php include'../system/initialize.php'; ?>
<?php include'header.php'; ?>
      <nav>
          <ul>
              <li><a href="http://www.seemycity.net/">Home</a></li>
              <li><a href="http://www.seemycity.net/blogs/about/<?php echo $blog->system; ?>">About</a></li>
              <li><a href="http://www.seemycity.net/blogs/bloggers/">Bloggers</a></li>
              <li><a href="http://www.seemycity.net/blogs/">Blogs</a></li>
              <li><a href="http://www.seemycity.net/blogs/category/">Categories</a></li>
              <li><a href="http://www.seemycity.net/blogs/latest/">Posts</a></li>
          </ul>
      </nav>

<div class="main-content">
	<div class="blog-body">
	<!--<div class="blog-header">
		<div class="blog-cover"><img src="<?php echo PATH; ?>images/blog/cover/tawanike.jpg"/></div><?php #end of blog cover ?>
		<div class="profile-picture"></div><?php #end of profile picture ?> 

	</div><?php #end of blog header ?>-->
	<div style="float:left;width:100%;margin-bottom:10px;">
		<h1>Blogs</h1>
			<?php $blogs = Blogs::find_by_sql("SELECT * FROM blogs"); 
					foreach ($blogs as $blog):?>
	<div class="category-container">
			<a href="<?php echo PATH; ?>blogs/<?php echo $blog->system; ?>"><?php echo $blog->name; ?></a>
	</div>

			<?php endforeach; ?>
	</div>

<div style="float:left;width:100%;margin-bottom:10px;">
	<h1><a href="<?php echo PATH; ?>blogs/category/">Categories</a></h1>
	<?php
		$category = Category::find_all();
		foreach ($category as $category):
	?>
	<div class="category-container">
			<a href="<?php echo PATH; ?>blogs/category/<?php echo $category->system; ?>"><?php echo $category->name; ?></a>
	</div>
	<?php endforeach; ?>
</div>

<div style="float:left;width:100%;margin-bottom:10px;">
	<h1><a href="<?php echo PATH; ?>blogs/bloggers/">Top Bloggers</a></h1>

	<?php
		$user = User::find_by_sql("SELECT * FROM users WHERE position=3");
		foreach($user as $user):
	?>
	<div class="blogger-container">
		<div class="blogger-pic"><img src="<?php echo PATH ?>images/users/<?php echo $user->picture; ?>"  /></div>
		<?php echo $user->full_name(); ?>
	</div>

	<?php endforeach; ?>
</div>

<div style="float:left;width:100%;margin-bottom:10px;">
<h1><a href="<?php echo PATH; ?>blogs/latest">Latest Posts</a></h1>
	<?php 
		$blogs = Blogs::find_all();
		foreach ($blogs as $blog):
	?>	
		<div class="blogs-container">
			<h3><a href="<?php echo PATH; ?>blogs/<?php echo $blog->system; ?>"><?php echo $blog->name; ?></a></h3>
			<p><?php echo $blog->description; ?></p>
		</div><?php #end of blog-posts ?>
	<?php endforeach;?>
</div>

</div><?php #end of blog body?>


 <section class="blog-aside">
    <div class="ad2">
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
<div class="">
		<fb:recommendations site="seemycity.net" app_id="273590589390170"></fb:recommendations>
</div><?php #end of facebook recommendations?>
  </section>
</div><?php #end of main-content ?>

	</div> <?php #end of page ?>

