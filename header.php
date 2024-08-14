<?php
session_start();

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
	
</head>

<body>

	<!--header-->
	<header id="site-header" class="fixed-top">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark stroke">
				<h1> <a class="navbar-brand" href="index.php">
						<span class="fa fa-heart"></span> <span class="sub-logo">Charity</span>Loom
					</a></h1>
				
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
							<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">About</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="ngo.php">NGO</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="services.php">Causes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
						
						
							<?php
						if(isset($_SESSION["email"])){
           				 ?>
						 <li class="nav-item">
							<a class="nav-link" href="user_donation.php">Status</a>
						</li>
						<li class="nav-item ml-lg-4">
							<a class="nav-link donate btn btn-style" href="add_donation.php">Donate</a>
						</li>
						<li class="nav-item ml-lg-4">
						<a class="nav-link donate btn btn-style" href="logout.php">Logout</a>
						</li>
                         <?php
          				}else{
            			?>
						<li class="nav-item ml-lg-4">
							<a class="nav-link donate btn btn-style" href="add_donation.php">Donate</a>
						</li>
							<li class="nav-item ml-lg-4 pe-5">
							<div class="dropdown pe-5">
								<a class="nav-link donate btn btn-style dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Login
								</a>
								<div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
									<a class="dropdown-item" href="user_register.php">User</a>
									<a class="dropdown-item" href="ngo_login.php">Ngo</a>
									<a class="dropdown-item" href="admin_login.php">Admin</a>
								</div>
							</div>
						</li>
							
           				 <?php
		 				 }
          				?>
						
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<!--/header-->