<?php
include("connection.php");
print_r($_POST);
extract($_POST);
 $sql = "UPDATE counter SET happy_people = '$happy_people',surgery_completed = '$surgery_completed',expert_doctors = '$expert_doctors',worldwide_branch = '$worldwide_branch'";

 mysqli_query($conn,$sql);
 header("location:counter.php");
?>
<!-- 
CREATE TABLE counter(
		counter_id INT PRIMARY KEY AUTO_INCREMENT,
		happy_people VARCHAR(200),
		surgery_completed VARCHAR(200),
		expert_doctors VARCHAR(200),
		worldwide_branch VARCHAR(200)
)
 -->

 <!-- INSERT INTO counter (happy_people) VALUES ('') -->