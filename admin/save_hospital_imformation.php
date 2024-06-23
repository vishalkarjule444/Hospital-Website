<?php
include("connection.php");
extract($_POST);
$sql = "UPDATE hospital SET hospital_name='$hospital_name',hospital_mobile='$hospital_mobile',hospital_email='$hospital_email',hospital_address='$hospital_address',hospital_map_link='$hospital_map_link' WHERE hospital_id = 1";
mysqli_query($conn,$sql);
header("location:hospital_information.php");
?>

<!-- CREATE TABLE hospital(
	hospital_id INT PRIMARY KEY AUTO_INCREMENT,
	hospital_name VARCHAR(100),
	hospital_mobile VARCHAR(15),
	hospital_email VARCHAR(100),
	hospital_address TEXT,
	hospital_map_link TEXT
)
 -->

<!-- INSERT chi query hi ekdach execute karaychi ahe beacauze hospital ekah ahe aaplyakad -->

<!-- INSERT INTO hospital(hospital_name,hospital_mobile,hospital_email,hospital_address,hospital_map_link) VALUES ('','','','','') -->