<?php
include("connection.php");
extract($_POST);

if($_FILES ['banner_image']['tmp_name'] != '')
{
$banner_image = time().$_FILES['banner_image']['name'];
move_uploaded_file($_FILES ['banner_image']['tmp_name'],"uploads/".$banner_image);
$sql = "UPDATE home_page_banner SET banner_image = '$banner_image'";
mysqli_query($conn,$sql);

}

$sql = "UPDATE home_page_banner SET banner_Short_title='$banner_Short_title',banner_title='$banner_title',banner_Details='$banner_Details'";
mysqli_query($conn,$sql);

header("location:home_page_banner.php");
?>	
<!-- 
CREATE TABLE home_page_banner(
	banner_id INT PRIMARY KEY AUTO_INCREMENT,
	banner_Short_title TEXT,
	banner_title TEXT,
	banner_Details TEXT,
	banner_image TEXT
) -->

<!-- INSERT INTO home_page_banner(banner_short_title,banner_title,banner_details,banner_image) VALUES ('','','','') -->