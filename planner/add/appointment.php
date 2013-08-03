<?php
		include '../../system/initialize.php';
		include '../template/header.php';
		$id = $_GET['q'];
		$wedding = Wedding::find_by_sql("SELECT * FROM weddings WHERE id='$id' LIMIT 1");
		foreach($wedding as $wedding):
?>
<aside class="aside-250"><?php include '../template/logged-in-left-sidebar.php'; ?></aside>
<section style="width:635px;height:500px;float:left;margin-left:5px;">
<h3>Set New Appointment</h3>
	<form action="../process/new/appointment.php" method="post">
	<input type="hidden" name="event_id" value="<?php echo $wedding->id; ?>" />
	<input type="hidden" name="event_type" value="1" />
	
	<div class="form-body">
	<div id="location" class="input-append">
	<label for="title">Title</label>
	<input type="text" name="title" class="" id="title"/>
	<span class="add-on">
      <i class="icon-file"></i>
    </span>
			</div>
	</div>
	
	<div class="form-body">
		<div class="form-aside">
			<label for="title">Person/Vendor's Name</label>
			<div id="tel" class="input-append">
			<input type="text" name="contact" class="" id="title"/>
		<span class="add-on">
      <i class="icon-user"></i>
    </span>
			</div>
			</div>
			<div class="form-aside">
			<label for="tel">Tel/Cell</label>
			<div id="tel" class="input-append">
			<input type="text" name="contact_number" class="" id="title"/>
			 <span class="add-on">
      <i class="icon-info-sign">
      </i>
    </span>
			</div>
		</div>
	</div>
	
	<div class="form-body">
		<div class="form-aside">
		<label for="title">Date</label>
		<div id="datetimepicker4" class="input-append">
    <input data-format="dd-MM-yyyy" type="text" name="date"></input>
    <span class="add-on">
      <i data-time-icon="icon-time" data-date-icon="icon-calendar">
      </i>
    </span>
  </div>
		</div>
		<div class="form-aside">
		
		<label for="title">Time</label>
		<div id="datetimepicker3" class="input-append">
    <input data-format="hh:mm:ss" type="text" name="time"></input>
    <span class="add-on">
      <i data-time-icon="icon-time" data-date-icon="icon-calendar">
      </i>
    </span>
  </div>
		</div>
	</div>
	
<div class="form-body">
<div class="form-aside">
	<label for="title">Place</label>
	<div id="location" class="input-append">
		<input type="text" name="location" class="" id="title"/>
		<span class="add-on">
	      <i class="icon-map-marker"></i>
	    </span>
	</div>
	</div>
	<div class="form-aside">
	<label for="title">Related Task</label>
	<div id="location" class="input-append">
		<select name="task">
			<option>Select Related Task</option>
		</select>
		 <span class="add-on">
	      <i class="icon-tasks"></i>
	    </span>
	</div>
	</div>
</div>
	</p>
	<input type="submit" name="submit" value="Set Appointment" class="btn btn-success"/>
	</form>
	</section>
<aside class="aside-300"><?php include '../template/sidebar.php'; ?></aside>
<?php endforeach;?>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/0.0.11/js/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript">
  $(function() {
    $('#datetimepicker3').datetimepicker({
      pickDate: false
    });
  });
</script>
<script type="text/javascript">
  $(function() {
    $('#datetimepicker4').datetimepicker({
      pickTime: false
    });
  });
</script>