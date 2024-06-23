<?php


include "connection.php";
extract($_POST);
$sql = "INSERT INTO working_hours (working_days,working_schedule) VALUES ('$working_days','$working_schedule')";

mysqli_query($conn,$sql); 
header("location:working_hours.php");
?>

<!-- CREATE TABLE working_hours (working_hours_id INT PRIMARY AUTO_INCREMENT,working_days VARCHAR(30), working_schedule VARCHAR(50)) -->