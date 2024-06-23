<?php
include("connection.php");
print_r($_POST);
extract($_POST);
$sql = "UPDATE online_appoitment_info SET appoitment_title = '$appoitment_title',appoitment_heading = '$appoitment_heading',appoitment_details = '$appoitment_details'";

mysqli_query($conn,$sql);
header("location:online_appoitment.php");
?>
<!-- 
CREATE TABLE online_appoitment_info(
		online_appoitment_info_id INT PRIMARY KEY AUTO_INCREMENT,
		appoitment_title VARCHAR(200),
		appoitment_heading VARCHAR(200),
		appoitment_details TEXT
)
 -->

 <!-- INSERT INTO online_appoitment_info (appoitment_title) VALUES ('') -->