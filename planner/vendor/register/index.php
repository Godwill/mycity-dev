<?php
	include '../../../system/initialize.php';
	include '../../template/header.php';
?>

<div style="width:500px;float:left;">
<h2>Add Company</h2>
	<form action="<?php echo PATH; ?>process/new/company.php" method="post"> 
	<label for="name">Company Name</label>
		<input type="text" name="name" class="span6" id="name" placeholder="Company Name"/>
		<label for="tel">Telephone</label>
		<input type="text" name="tel" class="span6" id="tel" placeholder="Telephone Number"/>
		<label for="fax">Fax Number</label>
		<input type="text" name="fax" class="span6" id="fax" placeholder="Fax Number"/>
		<label for="email">Email Address</label>
		<input type="text" name="email" class="span6" id="" placeholder="Email Address"/>
		<label for="website">Website</label>
		<input type="text" name="website" class="span6" id="" placeholder="Website"/>
		<label for="facebook">Facebook</label>
		<input type="text" name="facebook" class="span6" id="" placeholder="Facebook"/>
		<label for="twitter">Twitter</label>
		<input type="text" name="twitter" class="span6" id="" placeholder="Twitter"/>
		<label for="address1">Address Line One</label>
		<input type="text" name="address1" class="span6" id="" placeholder="Address Line One"/>
		<label for="address2">Address Line Two</label>
		<input type="text" name="address2" class="span6" id="" placeholder="Address Line Two"/>
		<label for="address3">Address Line Three</label>
		<input type="text" name="address3" class="span6" id="" placeholder="Address Line Three"/>
		<label for="city">City</label>
		<select name="city" id="city" class="span6" >
			<option value="0">Select City/Village</option>
			<?php $city = City::find_by_sql("SELECT * FROM cities WHERE country='bw'");
				foreach($city as $city):
			?>
			<option value="<?php echo $city->id; ?>"><?php echo $city->name; ?></option>
			<?php endforeach;?>
		</select>
		<label for="description">Description</label>
		<textarea name="description" class="span6" rows="10" id="">Description</textarea>
		<label for="location">Location</label>
		<select name="location" id="location" class="span6" >
			<option value="0">Select Location</option>
			<?php $location = Location::find_by_sql("SELECT * FROM business_centers WHERE country='bw'");
				foreach($location as $location):
			?>
			<option value="<?php echo $location->id; ?>"><?php echo $location->name; ?></option>
			<?php endforeach;?>
		</select></p>
		<label for="category1">Category</label>
		<select name="category1" id="category1" class="span3" >
			<option value="0">Select Category</option>
			<?php $category = WP_Category::find_by_sql("SELECT * FROM wedding_categories");
				foreach($category as $category):
			?>
			<option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
			<?php endforeach;?>
		</select>
		<label for="category2">Category</label>
		<select name="category2" id="category2" class="span3" >
			<option value="0">Select Category</option>
			<?php $category = WP_Category::find_by_sql("SELECT * FROM wedding_categories");
				foreach($category as $category):
			?>
			<option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
			<?php endforeach;?>
		</select>
		<label for="category3">Category</label>
		<select name="category3" id="category3" class="span3" >
			<option value="0">Select Category</option>
			<?php $category = WP_Category::find_by_sql("SELECT * FROM wedding_categories");
				foreach($category as $category):
			?>
			<option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
			<?php endforeach;?>
		</select>
		<label for="category4">Category</label>
		<select name="category4" id="category4" class="span3" >
			<option value="0">Select Category</option>
			<?php $category = WP_Category::find_by_sql("SELECT * FROM wedding_categories");
				foreach($category as $category):
			?>
			<option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
			<?php endforeach;?>
		</select></br>
		<input type="submit" name="submit" class="btn btn-success" id="" value="Submit Company"/>
	</form>
	</div>
<div style="width:600px;float:right;">
<h3>About See My City Event Planner</h3>

<p>
	See My City Event Planner is an online tool that enables professional and non-professional event planners to organise an entire
	event in one place. This is a great tool for business owners to advertise their products to people in search of products and services
	that would make their event a success. 

</p>
<p>
	
</p>
<h3>Listing is free of charge.</h3>

</div>