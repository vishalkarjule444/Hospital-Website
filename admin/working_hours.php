<?php
include("navbar.php");

?>


<form action="save_working_hours.php" method="post">
<div class="container mt-3 border shadow p-5">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<h3>Working Hours</h3>
		</div>
		<div class="col-md-5">
			Enter Days
			<input type="text" name="working_days" class="form-control">
		</div>

		<div class="col-md-5">
			Enter shedule
			<input type="text" name="working_schedule" class="form-control">
		</div>
		<div class="col-md-1 mt-2">
			<button class="btn btn-primary">Save Schedule</button>
		</div>
		
	</div>
</div>
 </form>

 <?php
include "connection.php";
$result = mysqli_query($conn,"SELECT * FROM working_hours");
 ?>

 <div class="container">
 	<div class="row">
 		<div class="col-md-12">
 			<table class="table table-bordered table-hover">
 				<tr>
 					<th>STATUS</th>
 					<th>SN</th>
 					<th>DAYS</th>
 					<th>SCHEDULE</th>
 				</tr>
 				<?php
 				foreach($result as $key => $row)
 				{
 					?>

 					<tr>
 						<td>
 							<button class="btn btn-primary btn-sm">
							<i class="ti ti-edit"></i></button>

							 <button class="btn btn-primary btn-sm">
							<i class="ti ti-trash"></i></button>
 						</td>
 						<td><?=$key+1?></td>
 						<td><?=$row['working_days']?></td>
 						<td><?=$row['working_schedule']?></td>
 					</tr>
 					<?php
 				}
 				?>
 			</table>
 		</div>
 	</div>
 </div>

<?php
include("footer.php");
?>