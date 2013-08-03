<div class="summary" style="text-align:center;" >
	<div style="width:100%;float:left;border-bottom:2px solid purple;margin-bottom:10px;padding-bottom:10px;">
			<div><h4 style="color:#ff3990;"><?php echo 23 ?></h4></div>
			<h4>Days to Wedding</h4>
			Wedding Date
			<?php echo $wedding->wedding_date; ?>
			</p><a href="<?php echo PATH; ?>planner/edit/wedding/<?php echo $wedding->id; ?>">Edit Wedding Profile</a>
			</div>
		<div style="width:100%;float:left;border-bottom:2px solid purple;margin-bottom:10px;padding-bottom:10px;">	
		Budget: P 100 000</p>
		Spend: P 32 900.78</p>
		Balance: P 67 100</p>
		<a href="<?php echo PATH ?>planner/edit/budget/wedding/<?php echo $wedding->id; ?>">Edit Badguet</a>
		</div>
		
		<div style="width:100%;float:left;border-bottom:2px solid purple;margin-bottom:10px;padding-bottom:10px;">	
			<h4 style="color:#ff3990;">23</h4>
			<h4>Saved vendors</h4>
			</p>
			18
			Deals Available </p>
		</div>
		<div style="width:100%;float:left;border-bottom:2px solid purple;margin-bottom:10px;padding-bottom:10px;">	
			<h5><a href="<?php echo PATH; ?>planner/calendar/">Upcomming Appointments</a></h5>
			<?php 
				$appoint = Appointment::find_by_sql("SELECT * FROM appointments WHERE event_type=1 AND event_id='$system' ");
				foreach ($appoint as $appoint):
			?>
			<div class="up-ap-container">
				<div class="up-ap"><a href="<?php echo PATH; ?>planner/calendar/23456767"><?php echo $appoint->title; ?></a></div>
				<div class="up-ap-date"><?php echo $appoint->time; ?> on <?php echo $appoint->date; ?> at <?php echo $appoint->location; ?>.</div>
			</div>
			<?php endforeach;?>
			<p>
				<a href="<?php echo PATH; ?>planner/calendar/">More Appointments</a>
			</p>
		</div>
		<div style="width:100%;float:left;border-bottom:2px solid purple;margin-bottom:10px;padding-bottom:10px;">	
			<h4 style="color:#ff3990;">Guests</h4>
			<p>Invited: 150</p>
			<p>Attending: 140</p>
		</div>
		<div style="width:100%;float:left;border-bottom:2px solid purple;margin-bottom:10px;padding-bottom:10px;">	
			<h4 style="color:#ff3990;">Gift Registry</h4>
			<div class="up-ap-container">Table</div>
			<div class="up-ap-container">Stove</div>
			<div class="up-ap-container">Pan</div>
			<div class="up-ap-container">Plate</div>
			<div class="up-ap-container">Spoon</div>
			<div class="up-ap-container">Cup</div>
			<div class="up-ap-container">Dish</div>
			</p><a href="<?php echo PATH; ?>planner/registry/wedding/<?php echo $wedding->id; ?>">All Items</a>
		</div>
		<div style="width:100%;float:left;border-bottom:2px solid purple;margin-bottom:10px;padding-bottom:10px;">	</div>
		
		</div>