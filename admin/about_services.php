<?php
include("navbar.php");
include("connection.php");
?>

<?php
$result  = mysqli_query($conn,"SELECT * FROM about_services");
$row = mysqli_fetch_assoc($result);
?>

<form action="save_about_services.php" method="post" enctype="multipart/form-data">

	<div class="container shadow p-5">
		<div class="row">
			<div class="col-md-12">
				<h2>About services for home page</h2>
			</div>	
			<div class="col-md-4 mb-3">
				<label>Image 1</label>
				<input type="file" name="image1" class="form-control">
			</div>

			<div class="col-md-2">
				<img src="uploads/<?=$row['image1']?>" width="100%">
			</div>

			<div class="col-md-4 mb-3">
				<label>Image 2</label>
				<input type="file" name="image2" class="form-control">
			</div>

			<div class="col-md-2">
				<img src="uploads/<?=$row['image2']?>" width="100%">
			</div>

			<div class="col-md-4 mb-3">
				<label>Image 3</label>
				<input type="file" name="image3" class="form-control">
			</div>

			<div class="col-md-2">
				<img src="uploads/<?=$row['image3']?>" width="100%">
			</div>

			<div class="col-md-6 mb-3">
				<label>Enter Title</label>
				<input type="text" name="title" class="form-control" value="<?=$row['title']?>">
			</div>

			<div class="col-md-12 mb-3">
				<label>Enter Details</label>
				<textarea name="details" class="form-control">value="<?=$row['details']?></textarea>
			</div>

			<div class="col-md-12 text-center">
				<button class="btn btn-primary">Save About</button>
			</div>
		</div>
	</div>
	
</form>

<?php
include("footer.php");
?>