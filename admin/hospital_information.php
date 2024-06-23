<?php
include ("navbar.php");
?>

<?php
include ("connection.php");
?>
<?php
$sql = "SELECT * FROM hospital";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>

<div class="container mt-3 shadow p-4">
	<form action="save_hospital_imformation.php" method="post">
	<div class="row">
		<div class="col-md-12 mb-3">
			<h3>Hospital Imformation</h3>
		</div>

		<div class="col-md-6 mb-3">
			<label>Hospital Name</label>
			<input type="text" name="hospital_name" class="form-control" value="<?=$row['hospital_name']?>">
		</div>
		<div class="col-md-3 mb-3">
			<label>Hospital Mobile</label>
			<input type="text" name="hospital_mobile" class="form-control" value="<?=$row['hospital_mobile']?>">
		</div>
		<div class="col-md-3 mb-3">
			<label>Hospital Email</label>
			<input type="text" name="hospital_email" class="form-control" value="<?=$row['hospital_email']?>">
		</div>
		<div class="col-md-6 mb-3">
			<label>Hospital Address</label>
			<textarea type="text" name="hospital_address" class="form-control" ><?=$row['hospital_address']?></textarea>
		</div>

		<div class="col-md-6 mb-3">
			<label>Google Map Link</label>
			<textarea type="text" name="hospital_map_link" class="form-control"><?=$row['hospital_address']?></textarea>
		</div>

		<div class="col-md-12 mb-3 text-center">
			<button class="btn btn-primary">Save Imformation</button>			
		</div>
	</div>
	</form>
</div>



<?php
include ("footer.php");
?>