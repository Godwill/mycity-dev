<?php include '../../../system/initialize.php'; ?>
<?php include '../../template/header.php'; ?>

<nav>
  		<ul class="nav nav-tabs nav-pills">
  			<li><a href="<?php echo PATH ?>planner/account/profile/personal">Personal Profile</a></li>
  			<li><a href="<?php echo PATH ?>planner/account/profile/events">My Events</a></li>
  			<li><a>Change Password</a></li>
  			<li><a></a></li>
  		</ul>
  	</nav>
	<?php 
		if(isset($_GET['q'])){ $url = $_GET['q']; }else{$url = '';}
		
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		$system = $url[0];
		#print_r($url);
	?>
	<?php if($system == 'personal'){ ?>
	<div class="form-section">
	<h2>Personal Profile</h2>
	
		<form action="<?php echo PATH; ?>planner/process/updates/personal.php" method="post">
		<?php 
			$user = User::find_by_sql("SELECT * FROM users WHERE id='$session->user_id'");
			foreach ($user as $user):
		?>
			<input type="hidden" name="id" value="<?php echo $user->id?>" />
			<label for="fname">First Name</label>
			<input type="text" name="fname" id="fname" class="span4" value="<?php echo $user->fname; ?>"/>
			<label for="lname">Last Name</label>
			<input type="text" name="lname" id="lname" class="span4" value="<?php echo $user->lname; ?>"/>
			<label for="email">Email</label>
			<input type="text" name="email" id="email" class="span4" value="<?php echo $user->email; ?>"/>
			<label for="cell">Mobile Phone</label>
			<input type="text" name="cell" id="cell" class="span4" value="<?php echo $user->cell; ?>"/>
			<label for="location">City</label>
			<input type="text" name="location" id="location" class="span4" value="<?php echo $user->location; ?>"/>
			<label for="birthday">Birthday</label>
			<input type="text" name="birthday" id="birthday" class="span4 datepicker" value="<?php echo $user->date_of_birth; ?>" data-date-format="dd/mm/yy" class="datepicker"/></p>
			<input type="submit" name="submit" value="Update" class="btn btn-success" />
			<?php endforeach;?>
		</form>
	</div>
	
	<?php }elseif($system == 'events') {?>
	<a href="<?php echo PATH; ?>planner/add/wedding" class="btn btn-medium btn-success">Add Wedding </a>
	<ul>
		<?php 
			$wedding =Wedding::find_by_sql("SELECT * FROM weddings WHERE uid='$session->user_id'");
			foreach ($wedding as $wedding):
		?>
		<li><a href="<?php echo PATH; ?>planner/wedding/home/<?php echo $wedding->id; ?>"><?php echo $wedding->couple_name;?></a>  <?php echo $wedding->wedding_date; ?></li>
		
		
		
		<?php endforeach;?>
		</ul>
	<?php } ?>
	
	<script type="text/javascript"
		src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

<script type="text/javascript"
		src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.0.2/js/bootstrap-datepicker.min.js"></script>
<<script type="text/javascript">
$('.datepicker').datepicker('setEndDate', '1996-12-31');
</script>