<?php
include("navbar.php");
include("connection.php");
?>

<?php
$result = mysqli_query($conn,"SELECT * FROM online_appoitment_info");
$info = mysqli_fetch_assoc($result);
?>
<form action="save_online_appoitment.php" method="post">
<div class="container p-4 mt-2 shadow">
	<div class="row">
		<div class="col-md-12">
			<h3>Online Appoitment</h3>
		</div>
		<div class="col-md-3 mb-3">
			<label>Enter Title</label>
			<input type="text" name="appoitment_title" class="form-control" value="<?=$info['appoitment_title']?>">
		</div>
		<div class="col-md-3 mb-3">
			<label>Enter Heading</label>
			<input type="text" name="appoitment_heading" class="form-control"value="<?=$info['appoitment_heading']?>">
		</div>

		<div class="col-md-6 mb-3">
			<label>Enter Details</label>
			<input type="text" name="appoitment_details" class="form-control"value="<?=$info['appoitment_details']?>">
		</div>

		<div class="col-md-12 text-center">
			<button class="btn btn-primary">Save Details</button>			
		</div>
	</div>
</div>
</form>

<form action="save_emergency_details.php" method="post">
<div class="container p-4 mt-4 shadow">
	<div class="row">
		<div class="col-md-12">
			<h3>Emergency Cases</h3>
		</div>
		<div class="col-md-3 mb-3">
			<label>Enter Title</label>
			<input type="text" name="emergency_title" class="form-control">
		</div>
		<div class="col-md-3 mb-3">
			<label>Enter Contact No.</label>
			<input type="number" name="emergency_contact_no" class="form-control">
		</div>

		<div class="col-md-6 mb-3">
			<label>Enter Emergency Details</label>
			<input type="text" name="emergency_details" class="form-control">
		</div>

		<div class="col-md-12 text-center">
			<button class="btn btn-primary">Save Details</button>			
		</div>
	</div>
</div>
</form>

<?php
include("footer.php");
?>