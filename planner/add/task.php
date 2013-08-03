<?php
		include '../../system/initialize.php';
		include '../template/header.php';
		$id = $_GET['q'];
		$wedding = Wedding::find_by_sql("SELECT * FROM weddings WHERE id='$id'");
		foreach($wedding as $wedding):
?>
<aside class="aside-250"><?php include '../template/logged-in-left-sidebar.php'; ?></aside>
<section style="width:635px;height:500px;float:left;margin-left:5px;">
	<form action="../process/new/task.php" method="post">
	<input type="hidden" name="event_id" value="<?php echo $wedding->id; ?>" />
	<input type="hidden" name="event_type" value="1" />
	<label for="title">Title</label>
	
	<input type="text" name="title" class="" id="title"/>
	<div class="form-body">
	<label for="body">Description</label>
	<textarea name="body" class="" id="body" style="width:600px;" ></textarea>
	</div>
	<div class="form-body">
	<div class="form-aside">
	<label for="category" id="category">Category</label>
	<select name="category_id">
		<option value="">Select Category</option>
		<?php
    $category = Category::find_by_sql("SELECT * FROM wedding_categories ORDER BY name ASC");
    foreach ($category as $category):
  ?>
  <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
  <?php endforeach;?>
	</select>
	</div>
	<div class="form-aside">
	<label for="due_date">Due Date</label>
	<input type="text" name="due_date" class="datepicker" />
	</div>
	<div class="form-aside">
	<label for="status">Status</label>
	<select>
		<option value="">Select Status of Task</option>
		<option value="1">In Progress</option>
		<option value="2">Completed</option>
	</select>
	</div>
</div>
	<div>
	<input type="submit" name="submit" value="Save Task" class="btn btn-success"/>
	</div>
	
	
	</form>

</section>
<aside class="aside-300"><?php include '../template/sidebar.php'; ?></aside>
<?php endforeach; ?>