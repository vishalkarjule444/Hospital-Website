<?php
include("navbar.php");
include("connection.php");
?>
<?php
$result = mysqli_query($conn,"SELECT * FROM home_page_banner");
$row = mysqli_fetch_assoc($result);
?>

<div class="container mt-3 shadow p-4">
	<form action="save_home_page_banner.php" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-12 mb-3">
			<h3>Home Page Banner</h3>
		</div>
		<div class="col-md-3 mb-3">
			<label>Enter Short Title</label>
			<input type="text" name="banner_Short_title" class="form-control" value="<?=$row['banner_Short_title']?>">
		</div>

		<div class="col-md-6 mb-3">
			<label>Enter Title</label>
			<input type="text" name="banner_title" class="form-control"value="<?=$row['banner_title']?>">
		</div>

		<div class="col-md-3 mb-3">
			<label>Select Banner Image (1920*900)</label>
			<input type="file" name="banner_image" class="form-control">
		</div>

		<div class="col-md-9 mb-3">
			<label>Enter Details</label>
			<input type="text" name="banner_Details" class="form-control"value="<?=$row['banner_Details']?>">
		</div>

		<div class="col-md-3">
			<img src="uploads/<?=$row['banner_image']?>" width="100%">
		</div>

		<div class="col-md-12 mb-3 text-center">
			<button class="btn btn-primary">Save</button>
		</div>
	</div>
</form>
</div>



<?php
include("footer.php");
?>