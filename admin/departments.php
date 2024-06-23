<?php
include("navbar.php");
?>

<form action="save_department.php" method="post" enctype="multipart/form-data">
	
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>Departments</h2>
		</div>

		<div class="col-md-6 mb-3">
			<label>Select Image</label>
			<input type="file" name="department_image" class="form-control" required>
		</div>

		<div class="col-md-6 mb-3">
			<label>Department Name</label>
			<input type="text" name="department_name" class="form-control">
		</div>

		<div class="col-md-12 mb-3">
			<label>Department Details</label>
			<textarea name="department_details" class="form-control"></textarea>
		</div>

		<div class="col-md-12 mb-3">
			<button class="btn btn-primary">Save Department</button>
		</div>
	</div>
</div>

</form>


<?php
include("footer.php");
?>