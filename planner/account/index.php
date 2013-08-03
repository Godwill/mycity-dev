<?php include '../../system/initialize.php'; ?>
<?php include '../template/header.php'; ?>
<section class="main-content">
	<?php 
		if(isset($_GET['q'])){ $url = $_GET['q']; }else{$url = '';}
		
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		$system = $url[0];
		#print_r($url);
	?>
	<?php if($system == 'login'){ ?>
	<h2>Log In</h2>
	<div class="">
		<form action="../process/login.php" method="post">
			<label for="email">Email</label>
			<input type="text" name="email" id="email" class="span4" /></p>
			<label for="password">Password</label>
			<input type="password" name="password" id="password" class="span4" /></p>
			<input type="submit" name="submit" value="Log In" class="btn btn-success" />
		</form>
	</div>
	<p>Don't have an account yet, <a href="<?php echo PATH; ?>planner/account/register">register here</a></p>
	<?php }elseif($system == 'register') { ?>
	<h2>Register</h2>
	
		<form action="../process/join.php" method="post">
			<label for="fname">First Name</label>
			<input type="text" name="fname" id="fname" class="span4" />
			<label for="lname">Last Name</label>
			<input type="text" name="lname" id="lname" class="span4" />
			<label for="location">City</label>
			<input type="text" name="location" id="location" class="span4" />
			<label for="email">Email</label>
			<input type="text" name="email" id="email" class="span4" /></p>
			<label for="password">Password</label>
			<input type="password" name="password" id="password" class="span4" /></p>
			<input type="submit" name="submit" value="Register" class="btn btn-success" />
		</form>
	
	<p>Already have an account, <a href="<?php echo PATH; ?>planner/account/login">log in here</a></p>
	<?php }elseif($session->is_logged_in()) { ?>
  	<nav>
  		<ul class="nav nav-tabs nav-pills">
  			<li><a href="<?php echo PATH ?>planner/account/profile/personal">Personal Profile</a></li>
  			<li><a href="<?php echo PATH ?>planner/account/profile/events">My Events</a></li>
  			<li><a></a></li>
  		</ul>
  	</nav>
  
	<?php } else { ?>
		redirect_to("../account/login");
	<?php }?>
</section>






























