<?php include'../../system/initialize.php'; ?>
<?php
	include'../../template/header.php';;

if(!$session->is_logged_in()) {
  redirect_to("../?status=not-logged-in");
}
?>
<?php 
    $url = $_GET['q'];
    $url = rtrim($url, '/');
    $url = explode('/', $url);
    $system = $url[0];
?> 
<section class="main-content">
<?php 
	if($system == 'new-blog'){ ?>
		<form action="../process/blog.php" method="POST">
			<input type="text" name="name" class="span7" placeholder="Name of Blog" />
			<textarea name="description" class="span7" rows="10" placeholder="Blog Description"></textarea>
			<select name="category" class="span7">
				<option value="">Select Category</option>
				<?php
					$category = Category::find_all();
					foreach ($category as $category):
				?>
				<option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
			<?php endforeach; ?>
			</select>
			<input type="text" name="tags" class="span7" placeholder="Blog Tags" />
			<input type="text" name="facebook" class="span7" placeholder="Facebook Page for Blog (Optional)" />
			<input type="text" name="twitter" class="span7" placeholder="Twitter Profile for Blog (Optional)" />
			<input type="text" name="pinterest" class="span7" placeholder="Pinterest Profile for Blog (Optional)" />
		</p>
			<input type="submit" name="submit" value="Create Blog" class="btn btn-large btn-primary" />
		</form>
<?php	}elseif ($system == 'new-post') { ?>
		<?php if (isset($_GET['status']) && $_GET['status'] == 202){ ?>
<p><span class="red">Entry was not saved, please try again.</span></p>
<?php }?>
<h2>New Blog Post</h2>
  <form action="../process/post.php" method="POST">
    <input type="text" name="title" id="title" required="required"  class="span8" placeholder="Title of Post"/></p>
    <textarea name="body" id="body" required="required" rows="20" class="span8" placeholder="Write your post here."></textarea></p>
    <select name="blog" class="span8">
    <?php 
    	$blog = Blogs::find_by_sql("SELECT * FROM blogs WHERE uid='$session->user_id'");
    	foreach ($blog as $blog):
    ?>
<option value="<?php echo $blog->id; ?>"><?php echo $blog->name; ?></option>
<?php endforeach; ?>
</select></p>
	<input type="submit" name="submit"  value="Save " class="btn btn-large btn-primary"/>
  </form>
<?php	}
?>
</section>
<aside class="aside-300 right">
<ul class="nav nav-tabs nav-stacked">
	<li><a href="new-blog">Create New Blog</a></li>
	<li><a href="new-post">Create New Blog Post</a></li>
	<li><a href="list-posts">My Blog Posts</a></li>
	<li><a href="list-blogs">My Blogs</a></li>
</ul>
</aside>
<?php include'../../template/footer.php'; ?>