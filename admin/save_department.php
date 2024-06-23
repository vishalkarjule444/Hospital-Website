<?php
include "connection.php";
print_r($_POST);
print_r($_FILES);
extract($_POST);

$department_image = time().$_FILES['department_image']['name'];
move_uploaded_file($_FILES['department_image']['tmp_name'],"uploads/$department_image");

$sql = "INSERT INTO department (department_name,department_details,department_image) VALUES ('$department_name', '$department_details', '$department_image')";

mysqli_query($conn,$sql);
header("location:departments.php");



?>
<!-- 
CREATE TABLE department (
	department_id INT PRIMARY KEY AUTO_INCREMENT,
	department_name VARCHAR(100),
	department_details TEXT,
	department_image TEXT
) -->