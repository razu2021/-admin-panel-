<?php
//print_r($_SERVER);
//echo $_SERVER['PHP_SELF'];
$link=explode('/',$_SERVER['PHP_SELF']);
//print_r($link);
$page=$link['3'];
//echo $page;


?>






<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Arclabs Architecture</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|Roboto:400,500" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<!-- Start Header Area -->
	<header class="default-header">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="img/logo.png" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">

				
				<ul class="navbar-nav">
					
						<li><a <?php if($page=='index.php'){echo 'class="active"';}?> href="index.php">Home</a></li>
						<li><a  <?php if($page=='about.php'){echo 'class="active"';}?> href="about.php">About</a></li>
						<li><a  <?php if($page=='services.php'){echo 'class="active"';}?> href="services.php">Services</a></li>
						<li>
							<a  <?php if($page=='blog-home.php'){echo 'class="active"';}?> href="blog-home.php">
								Blog
							</a>
						</li>
						<li><a  <?php if($page=='contact.php'){echo 'class="active"';}?> href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End Header Area -->


	<?php
	require_once('functions/function.php');
	$sell ="SELECT* FROM cs_menu";
	$Q=mysqli_query($con,$sell);
	$i=1;
	while($infor=mysqli_fetch_assoc($Q)){
		
	?> 
    <h1><?= $infor['menu_name'];?></h1>
     <?php }?>