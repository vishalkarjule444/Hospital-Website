<?php
include "connection.php";
echo "<pre>";
print_r($_POST);
print_r($_FILES);
extract($_POST);

$sql = "UPDATE about_services SET title = '$title',details = '$details' WHERE about_services_id = 1";
mysqli_query($conn,$sql);

echo "<pre>";
print_r($_FILES);
if($_FILES['image1']['name']!="")
{
	$image1 = time().$_FILES['image1']['name'];
	move_uploaded_file($_FILES['image1']['tmp_name'],"uploads/$image1");
	$sql = "UPDATE about_services SET image1 = '$image1' WHERE about_services_id = 1";
	mysqli_query($conn,$sql);
}

if($_FILES['image2']['name']!="")
{
	$image2 = time().$_FILES['image2']['name'];
	move_uploaded_file($_FILES['image2']['tmp_name'],"uploads/$image2");
	$sql = "UPDATE about_services SET image2 = '$image2' WHERE about_services_id = 1";
	mysqli_query($conn,$sql);
}

if($_FILES['image3']['name']!="")
{
	$image3 = time().$_FILES['image3']['name'];
	move_uploaded_file($_FILES['image3']['tmp_name'],"uploads/$image3");
	$sql = "UPDATE about_services SET image3 = '$image3' WHERE about_services_id = 1";
	mysqli_query($conn,$sql);
}
header("location:about_services.php");
?>

<!-- CREATE TABLE about_services (about_services_id INT PRIMARY KEY AUTO_INCREMENT, title VARCHAR(300),details TEXT, image1 TEXT, image2 TEXT, image3 TEXT) -->

<!-- INSERT INTO about_services(title) VALUES ('') -->