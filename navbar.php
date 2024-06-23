<?php
include("admin/connection.php");
?>


<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <?php
  $sql = "SELECT * FROM hospital";
  $result = mysqli_query($conn,$sql);
  $hospital = mysqli_fetch_assoc($result);
  ?>

  <title><?=$hospital['hospital_name']?></title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/logo_icon.png" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="top">

<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="mailto:<?=$hospital['hospital_email']?>"><i class="icofont-support-faq mr-2"></i><?=$hospital['hospital_email']?></a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i><?=$hospital['hospital_address']?></li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:+23-345-67890" >
							<span>Call Now : </span>
							<span class="h4">+91 <?=$hospital['hospital_mobile']?></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="index.php">
			  	<img src="images/logo.png" alt="" class="img-fluid" style="height: 80px !important;">
			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="index.php">Home</a>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
			    <li class="nav-item"><a class="nav-link" href="service.php">Services</a></li>
			    <li class="nav-item"><a class="nav-link" href="department.php">Department</a></li>
			    <li class="nav-item"><a class="nav-link" href="doctor.php">Doctors</a></li>
			    <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>

			     

			   
			   <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
			   <li class=" btn-sm btn-primary"><a class="nav-link" href="appoinment.php">Appoinment</a></li>
			</ul>
		  </div>
		</div>
	</nav>
</header>
	