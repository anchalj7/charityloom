<?php
session_start();
if (!isset($_SESSION['email'])) {
  echo "<script>window.location.assign('ngo_login.php')</script>";
  exit();
}
?>
<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>CharityLoom
	</title>
	<!-- Template CSS -->
	<link rel="stylesheet" href="assets/css/style-starter.css">
	<!-- Template CSS -->
	<link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
	<!-- Template CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

	<!--header-->
	<header id="site-header" class="fixed-top">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark stroke">
				<h1> <a class="navbar-brand" href="index.php">
						<span class="fa fa-heart"></span> <span class="sub-logo">Charity</span>Loom
					</a></h1>
				<!-- if logo is image enable this   
		<a class="navbar-brand" href="#index.php">
			<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
		</a> -->
				<button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
					data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
					<span class="navbar-toggler-icon fa icon-close fa-times"></span>
					</span>
				</button>

				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="ngo_Ds.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="donation.php">Donation</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="request.php">History</a>
						</li>
							
                        <li class="nav-item">
							<a class="nav-link" href="add_enquiry.php">Add Enquiry</a>
						</li>
						<li class="nav-item ml-lg-4">
							<?php
						if(isset($_SESSION["email"])){
           				 ?>
						<a class="nav-link donate btn btn-style" href="logout_ngo.php">Logout</a>
                         <?php
          				}else{
            			?>
						<li class="nav-item ml-lg-4">
           				 <a class="nav-link donate btn btn-style" href="ngo_login.php">Login</a>
							</li>
           				 <?php
		 				 }
          				?>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<!--/header-->
    