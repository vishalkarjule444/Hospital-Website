<?php
include("navbar.php");
include("connection.php");
?>


<?php
$result = mysqli_query($conn,"SELECT * FROM counter");
$info = mysqli_fetch_assoc($result);
?>

<form action="save_counter.php" method="post">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Counter</h2>
			</div>

			<div class="col-md-6 mb-3">
				<label>Happy People in k</label>
				<input type="number" class="form-control" name="happy_people" value="<?=$info['happy_people']?>">
			</div>

			<div class="col-md-6 mb-3">
				<label>Surgery Completed</label>
				<input type="number" class="form-control" name="surgery_completed" value="<?=$info['surgery_completed']?>">
			</div>

			<div class="col-md-6 mb-3">
				<label>Expert Doctors</label>
				<input type="number" class="form-control" name="expert_doctors" value="<?=$info['expert_doctors']?>">
			</div>

			<div class="col-md-6 mb-3">
				<label>Worldwide Branch</label>
				<input type="number" class="form-control" name="worldwide_branch" value="<?=$info['worldwide_branch']?>">
			</div>

			<div class="col-md-12">
				<button class="btn btn-primary ">Submit</button>
			</div>
		</div>
	</div>


</form>






<?php
include("footer.php");
?>