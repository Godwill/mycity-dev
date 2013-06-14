<?php ob_start(); ?>
<?php include('../../system/initialize.php');?>
<?php include('../../template/header.php');
?>

<?php #if (!$session->is_logged_in()) { redirect_to('../home.php');}

if (isset($_POST['submit'])){
	
	$companyName = $_POST['companyName'];
	$description = $_POST['description'];
	$email = $_POST['email'];
	$website = $_POST['website'];
	$industry = $_POST['industry'];
	$tag1 = $_POST['tag1'];
	$tag2 = $_POST['tag2'];
	$tag3 = $_POST['tag3'];
	$tel = $_POST['tel'];
	$fax = $_POST['fax'];
	$postal1 = $_POST['postal1'];
	$postal2 = $_POST['postal2'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$address3 = $_POST['address3'];
	$city = $_POST['city'];
	$weekDays = $_POST['weekDays'];
	$saturday = $_POST['saturday'];
	$sunday = $_POST['sunday'];
	$publicHolidays = $_POST['publicHolidays'];
	$country = $_POST['country'];
	$created = time();
	$facebook = $_POST['facebook'];
	$twitter = $_POST['twitter'];
	$system = slug($_POST['companyName']);
	/* 
	$address = $address1 "" $address2 "" $address3;
	from an address to a couple (lat,long) coordinates
	public function getLatLong($address){
		if (!is_string($address))die("All Addresses must be passed as a string");
		$_url = sprintf('http://maps.google.com/maps?output=js&q=%s',rawurlencode($address));
		$_result = false;
		if($_result = file_get_contents($_url)) {
			if(strpos($_result,'errortips') > 1 || strpos($_result,'Did you mean:') !== false) return false;
			preg_match('!center:\s*{lat:\s*(-?\d+\.\d+),lng:\s*(-?\d+\.\d+)}!U', $_result, $_match);
			$_coords['lat'] = $_match[1];
			$_coords['long'] = $_match[2];
		}
		return $_coords;
	}
*/

	
	$company = new Company();
	$company->companyName = $companyName;
	$company->description = $description;
	$company->email = $email;
	$company->website = $website;
	$company->industry = $industry;
	$company->tag1 = $tag1;
	$company->tag2 = $tag2;
	$company->tag3 = $tag3;
	$company->tel = $tel;
	$company->fax = $fax;
	$company->postal_1 = $postal1;
	$company->postal_2 = $postal2;
	$company->address_line_1 = $address1;
	$company->address_line_2 = $address1;
	$company->address_line_3 = $address1;
	$company->city = $city;
	$company->weekDays = $weekDays;
	$company->saturday = $saturday;
	$company->sunday = $sunday;
	$company->publicHolidays = $publicHolidays;
	$company->country = $country;
	$company->date_entered = $created;
	$company->facebook = $facebook;
	$company->twitter = $twitter;
	#$company->latitude
	#$company->longitude = $long
	$company->system = $system;
		if($company->create()) {
		$session->message("New vacancy created successfully.");
		$newcid = mysql_insert_id();
		$uid = $session->user_id;
		redirect_to("../process/new_company.php?q={$newcid}&uid={$uid}");
	}else{
		$message = join("<br />", $company->errors);
		redirect_to("../company/dashboard.php?q={$cid}");
	}


}else{

	$companyName = "";
	$description = "";
	$email = "";
	$website = "";
	$industry = "";
	$tag1 = "";
	$tag2 = "";
	$tag3 = "";
	$tel = "";
	$fax = "";
	$postal1 = "";
	$postal2 = "";
	$address1 = "";
	$address2 = "";
	$address3 = "";
	$city = "";
	$weekDays = "";
	$saturday = "";
	$sunday = "";
	$publicHolidays = "";
	$country = "";
	$facebook = "";
	$twitter = "";


}

?>

<div id="ProfileMainContent">
	<form action="new-company.php" method="POST" >
	<input type="text" name="name" value="<?php echo $companyName;?>" class="span7 rqd" placeholder="Company Name"/>
	<input type="email" name="email" value="<?php echo $email ;?>" class="span7 rqd" placeholder="Email Address" />
     <input type="url" name="website" value="<?php echo $website ;?>" class="span7 rqd" placeholder="Website" />
     <input type="text" name="address1" value="<?php echo $address1;?>" class="span7 rqd" placeholder="Address Line 1" />
	<input type="text" name="address2" value="<?php echo $address2;?>" class="span7 rqd" placeholder="Address Line 2" />
     <input type="text" name="address3" value="<?php echo $address3;?>" class="span7 rqd" placeholder="Address Line 3" />
     <input type="text" name="postal1" value="<?php echo $postal1;?>" class="span7 rqd" placeholder="Postal Line 1" />
     <input type="text" name="postal2" value="<?php echo $postal2;?>" class="span7 rqd" placeholder="Postal Line 2" />
     <input type="text" name="city" value="<?php echo $city;?>" class="span7 rqd" placeholder="City">
	<select name="country" placeholder="Country" class="span7 rqd">
        <option value="">Select Country</option>
        <option value="1">Botswana</option>
        <option value="2">Malawi</option>
        <option value="3">Namibia</option>
        <option value="4">South Africa</option>
        <option value="5">Zimbabwe</option>
        <option value="6">Zambia</option>
      </select>
     <input type="text" name="tel" value="<?php echo $tel;?>" class="span7 rqd" placeholder="Telephone Number">
     <input type="text" name="fax" value="<?php echo $fax;?>" class="txt rqd" placeholder="Fax Number">
	
	<input type="text" name="industry" value="<?php echo $industry;?>" class="txt rqd" placeholder="Industry">
			</tr>
			<tr>
				<td><label for="description">Description: </label></td>
				<td ><textarea name="description" id="description" cols="70" rows="10"><?php echo $description;?></textarea></td>
			</tr>
			<tr>
				<td ><label for="facebook">Facebook:</label></td>
				<td ><input type="text" name="facebook" value="<?php echo $facebook;?>" class="txt rqd" id="facebook"></td>
			</tr>
			<tr>
				<td ><label for="twitter">Twitter: </label></td>
				<td ><input type="text" name="twitter" value="<?php echo $twitter;?>" class="txt rqd" id="twitter"></td>
			</tr>
			<tr>
				<td ><label for="tag1">Tag 1:</label></td>
				<td ><input type="text" name="tag1" value="<?php echo $tag1;?>" class="txt rqd" id="tag1"></td>
			</tr>
			<tr>
				<td ><label for="tag2">Tag 2:</label></td>
				<td ><input type="text" name="tag2" value="<?php echo $tag2;?>" class="txt rqd" id="tag2"></td>
			</tr>
			<tr>
				<td ><label for="tag3">Tag 3:</label></td>
				<td ><input type="text" name="tag3" value="<?php echo $tag3;?>" class="txt rqd" id="tag3"></td>
			</tr>
			<tr>
				<td ><label for="weekDays">Weekdays 1:</label></td>
				<td ><input type="text" name="weekDays" value="<?php echo $tag1;?>" class="txt rqd" id="weekDays"></td>
			</tr>
			<tr>
				<td ><label for="saturday">Saturday:</label></td>
				<td ><input type="text" name="saturday" value="<?php echo $saturday;?>" class="txt rqd" id="saturday"></td>
			</tr>
			<tr>
				<td ><label for="sunday">Sunday:</label></td>
				<td ><input type="text" name="sunday" value="<?php echo $sunday;?>" class="txt rqd" id="sunday"></td>
			</tr>
			<tr>
				<td ><label for="publicHolidays">Public Holiday 1:</label></td>
				<td ><input type="text" name="publicHolidays" value="<?php echo $publicHolidays;?>" class="txt rqd" id="publicHolidays"></td>
			</tr>

			<tr>
				<td><label for=""></label></td>
				<td ><input type="submit" name="submit" value="Save " class="txt rqd" id="submit"></td>
			</tr>

		</table>
	</form>
		
</div>

<div id="ProfileSideBar">
	<ul>
		<li>Basic Information</li>
		<li>Contact Information</li>
		
	</ul>
</div>
	
<?php include('../../template/footer.php');?>