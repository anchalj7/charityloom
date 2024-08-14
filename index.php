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
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="ngo.php">NGO</a>
						</li>
						
						<li class="nav-item">
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
	<!-- main-slider -->
	<section class="w3l-main-slider position-relative" id="home">
		<div class="companies20-content">
			<div class="owl-one owl-carousel owl-theme">
				<div class="item">
					<li>
						<div class="slider-info banner-view bg bg2">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg">
										<h5>Actions speak louder than words! Give today.</h5>
										<div class="banner-buttons">
											<a class="btn btn-style btn-primary" href="services.php">Volunteer</a>
											<a href="#small-dialog" class="popup-with-zoom-anim play-view">
												<span class="video-play-icon">
													<span class="fa fa-play"></span>
												</span>
												<h6>How We Works</h6>
											</a>
											<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
											<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
												<iframe src="https://player.vimeo.com/video/164890650"
													allow="autoplay; fullscreen" allowfullscreen=""></iframe>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info  banner-view banner-top1 bg bg2">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg">
										<h5>Creative a Better Future through your Help</h5>
										<div class="banner-buttons">
											<a class="btn btn-style btn-primary" href="services.php">Volunteer</a>
											<a href="#small-dialog" class="popup-with-zoom-anim play-view">
												<span class="video-play-icon">
													<span class="fa fa-play"></span>
												</span>
												<h6>How We Works</h6>
											</a>
											<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
											<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
												<iframe src="https://player.vimeo.com/video/164890650"
													allow="autoplay; fullscreen" allowfullscreen=""></iframe>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info banner-view banner-top2 bg bg2">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg">
										<h5>Actions speak louder than words! Give today.</h5>
										<div class="banner-buttons">
											<a class="btn btn-style btn-primary" href="services.php">Volunteer</a>
											<a href="#small-dialog1" class="popup-with-zoom-anim play-view">
												<span class="video-play-icon">
													<span class="fa fa-play"></span>
												</span>
												<h6>How We Works</h6>
											</a>
											<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
											<div id="small-dialog1" class="zoom-anim-dialog mfp-hide">
												<iframe src="https://player.vimeo.com/video/164890650"
													allow="autoplay; fullscreen" allowfullscreen=""></iframe>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info banner-view banner-top3 bg bg2">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg">
										<h5>Creative a Better Future through your Help</h5>
										<div class="banner-buttons">
											<a class="btn btn-style btn-primary" href="services.php">Volunteer</a>
											<a href="#small-dialog2" class="popup-with-zoom-anim play-view">
												<span class="video-play-icon">
													<span class="fa fa-play"></span>
												</span>
												<h6>How We Works</h6>

											</a>
											<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
											<div id="small-dialog2" class="zoom-anim-dialog mfp-hide">
												<iframe src="https://player.vimeo.com/video/164890650"
													allow="autoplay; fullscreen" allowfullscreen=""></iframe>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
			</div>
		</div>
	</section>
	<!-- //banner-slider-->
	<!-- //bottom-grids -->
	<div class="w3l-bottom-grids">
		<div class="container-fluid px-0">
			<div class="bottomhny-grids-sec">
				<div class="bottomhny-1">
					<div class="bottomhny-gd-ingf">
						<h4>Charity is a simple method to prove kindness</h4>
					</div>
				</div>
				<div class="bottomhny-1 bottomhny-2">
					<div class="bottomhny-gd-ingf">
						<h4>By giving a little, you will help out a lot.</h4>
					</div>
				</div>
				<div class="bottomhny-1 bottomhny-1-img">
					<div class="bottomhny-gd-ingf">

					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- //bottom-grids -->

	<!-- /features-4 -->
	<section class="features-4">
		<div class="features4-block py-5">
			<div class="container py-lg-4">
				<div class="title-content text-center mb-lg-5 mt-4">
					<h6 class="sub-title">Why Choose Us</h6>
					<h3 class="hny-title">How Can Help?</h3>
					<p class="fea-para">"Together, we can make a meaningful difference by providing essential resources to those in need."</p>
				</div>
				<div class="row features4-grids text-left mt-lg-4">
					<div class="col-lg-3 col-md-6 features4-grid mt-4">
						<div class="features4-grid-inn">
							<div class="img-featured">
								<div class="ch-item ch-img-1">
									<div class="ch-info-wrap">
										<div class="ch-info">
											<div class="ch-info-front ch-img-1"></div>
											<div class="ch-info-back">
												<h4>Donate</h4>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="features4-rightinfo">
								<h5><a href="#URL">Give Donation</a></h5>
								<p>Your donations of food, clothes, and essentials to CharityLoom make a vital difference for those in need. Give today to support and uplift communities.</p>

							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 features4-grid mt-4">
						<div class="features4-grid-inn">
							<div class="img-featured">
								<div class="ch-item ch-img-2">
									<div class="ch-info-wrap">
										<div class="ch-info">
											<div class="ch-info-front ch-img-2"></div>
											<div class="ch-info-back">
												<h4>Donate</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="features4-rightinfo">
								<h5><a href="#URL">
										Become A Volunteer</a></h5>
								<p>Become a volunteer at CharityLoom and make a direct impact in your community. Join us in helping those in need by donating your time and skills.</p>

							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 features4-grid mt-4">
						<div class="features4-grid-inn">
							<div class="img-featured">
								<div class="ch-item ch-img-3">
									<div class="ch-info-wrap">
										<div class="ch-info">
											<div class="ch-info-front ch-img-3"></div>
											<div class="ch-info-back">
												<h4>Donate</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="features4-rightinfo">
								<h5><a href="#URL">
										Adopt A Child</a></h5>
								<p>Through our 'Adopt a Child' program, you can directly impact a child's life by providing essential support for their education, health, and well-being.</p>

							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 features4-grid mt-4">
						<div class="features4-grid-inn">
							<div class="img-featured">
								<div class="ch-item ch-img-4">
									<div class="ch-info-wrap">
										<div class="ch-info">
											<div class="ch-info-front ch-img-4"></div>
											<div class="ch-info-back">
												<h4>Donate</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="features4-rightinfo">
								<h5><a href="#URL">
										Help For Education</a></h5>
								<p>Your support enables us to provide educational resources, scholarships, and opportunities that empower individuals to achieve their academic goals and build brighter futures.</p>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<!--//features-4 -->

	<!-- /specification-6-->
	<section class="w3l-specification-6">
		<div class="specification-6-mian py-5">
			<div class="container py-lg-5">
				<div class="row story-6-grids">
					<div class="col-lg-10 story-gd pl-lg-4  text-center mx-auto">
						<div class="title-content px-lg-5">
							<h6 class="sub-title">Our Organization</h6>
							<h3 class="hny-title two">Want to get involved?</h3>
							<p class="mt-3 mb-lg-5 px-lg-5 counter-para">
							Our organization wants to get involved with CharityLoom to make a positive impact. Together, we can support and uplift those in need.</p>
						</div>
						<div class="skill_info mt-lg-5 mt-4 pt-lg-4">
							<div class="stats_left">
								<div class="counter_grid">
									<div class="icon_info">
										<p class="counter">65</p>
										<h4>Number of supporters</h4>

									</div>
								</div>
							</div>
							<div class="stats_left">
								<div class="counter_grid">
									<div class="icon_info">
										<p class="counter">165</p>
										<h4>Fund raised</h4>

									</div>
								</div>
							</div>
							<div class="stats_left">
								<div class="counter_grid">
									<div class="icon_info">
										<p class="counter">463</p>
										<h4>Children Helped</h4>

									</div>
								</div>
							</div>
							<div class="stats_left">
								<div class="counter_grid">
									<div class="icon_info">
										<p class="counter">5063</p>
										<h4>Volunteers Worldwide</h4>

									</div>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- //specification-6-->
	<!--/blog-grids-home-->
	<section class="bloghny-gds py-5">
		<div class="container py-lg-4">
			<div class="title-content text-left mb-lg-5 mb-4">
				<h6 class="sub-title">Latest Posts</h6>
				<h3 class="hny-title">News & Updates</h3>

			</div>
			<div class="row text-left img-grids">
				<div class="col-lg-4 col-sm-6 maghny-gd-1">
					<div class="maghny-grid">
						<figure class="effect-lily">
							<img class="img-fluid" src="assets/images/g1.jpg" alt="" />
							<figcaption>
								<div>
									<h4>Partnering to create a community</h4>

									<p><span class="year">Apr 4th 2024</span> <span class="info">News, Updates</span>
									</p>
								</div>

							</figcaption>
						</figure>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 maghny-gd-1">
					<div class="maghny-grid">
						<figure class="effect-lily">
							<img class="img-fluid" src="assets/images/g2.jpg" alt="" />
							<figcaption>
								<div>
									<h4>Partnering to create a community</h4>

									<p><span class="year">Apr 4th 2024</span> <span class="info">News, Updates</span>
									</p>
								</div>

							</figcaption>
						</figure>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 maghny-gd-1">
					<div class="maghny-grid">
						<figure class="effect-lily">
							<img class="img-fluid" src="assets/images/g3.jpg" alt="" />
							<figcaption>
								<div>
									<h4>Partnering to create a community</h4>

									<p><span class="year">Apr 4th 2024</span> <span class="info">News, Updates</span>
									</p>
								</div>

							</figcaption>
						</figure>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 maghny-gd-1">
					<div class="maghny-grid">
						<figure class="effect-lily">
							<img class="img-fluid" src="assets/images/g4.jpg" alt="" />
							<figcaption>
								<div>
									<h4>Partnering to create a community</h4>

									<p><span class="year">Apr 4th 2024</span> <span class="info">News, Updates</span>
									</p>
								</div>

							</figcaption>
						</figure>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 maghny-gd-1">
					<div class="maghny-grid">
						<figure class="effect-lily">
							<img class="img-fluid" src="assets/images/g5.jpg" alt="" />
							<figcaption>
								<div>
									<h4>Partnering to create a community</h4>

									<p><span class="year">Apr 4th 2024</span> <span class="info">News, Updates</span>
									</p>
								</div>

							</figcaption>
						</figure>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 maghny-gd-1">
					<div class="maghny-grid">
						<figure class="effect-lily">
							<img class="img-fluid" src="assets/images/g6.jpg" alt="" />
							<figcaption>
								<div>
									<h4>Partnering to create a community</h4>

									<p><span class="year">Apr 4th 2024</span> <span class="info">News, Updates</span>
									</p>
								</div>

							</figcaption>
						</figure>
					</div>
				</div>
			</div>

		</div>
		</div>
	</section>
	<!--//blog-grids-home-->
	<!-- middle -->
	<div class="middle py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="welcome-left text-center py-3">
				<div class="title-content">
					<h6 class="sub-title">Join Us</h6>
					<h3 class="hny-title two">Become A Volunteer</h3>
					<p>Join your hand with us for a better life and beautiful future</p>

				</div>
				<a href="add_donation.php" class="btn btn-style transparent-btn mt-4 mr-sm-2">Donate Now</a>
				<a href="contact.php" class="btn btn-style btn-primary mt-4">Contact Us</a>
			</div>
		</div>
	</div>
	<!-- //middle -->
	<!--/testimonials-->
	<section class="w3l-testimonials">
		<div class="testimonials py-5">
			<div class="container text-center py-lg-3">
				<div class="title-content text-center mb-lg-5 mb-4">
					<h6 class="sub-title">Testimonials</h6>
					<h3 class="hny-title">What Our
						People Says?</h3>

				</div>
				<div class="row">
					<div class="col-lg-10 mx-auto">
						<div class="owl-testimonial owl-carousel owl-theme">
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="img-circle">
										<img src="assets/images/f2.jpg" class="img-fluid rounded" alt="client image">
									</div>
									<div class="message">CharityLoom has made it so easy for me to contribute to my community. Knowing my donations of food and clothes are going directly to those in need gives me immense satisfaction.
									</div>
									<div class="name">- Jenkins</div>

								</div>
							</div>
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="img-circle">
										<img src="assets/images/f4.jpg" class="img-fluid rounded" alt="client image">
									</div>
									<div class="message">Volunteering with CharityLoom has been a life-changing experience. I've seen firsthand the positive impact we can make, and it's truly inspiring.
									</div>
									<div class="name">- John Balmer</div>
								</div>
							</div>
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="img-circle">
										<img src="assets/images/f3.jpg" class="img-fluid rounded" alt="client image">
									</div>
									<div class="message">Through CharityLoom, our organization has been able to extend our reach and help more people than ever before. It's a fantastic platform for making a real difference.</div>
									<div class="name">- Kiss Kington</div>
								</div>
							</div>
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="img-circle">
										<img src="assets/images/f6.jpg" class="img-fluid rounded" alt="client image">
									</div>
									<div class="message">Donating to CharityLoom has been a seamless and rewarding process. I love knowing that my contributions are helping to provide essentials to those who need them most.</div>
									<div class="name">- Elizabeth</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--//testimonials-->

	<!-- footer-66 -->
	<footer class="w3l-footer-66">
		<section class="footer-inner-main">
			<div class="footer-hny-grids py-5">
				<div class="container py-lg-4">
					<div class="text-txt">
						
						<div class="right-side">
							<div class="row sub-columns">
								<div class="col-lg-4 col-md-6 sub-one-left pr-lg-4">
									<h2><a class="navbar-brand" href="index.php">
											<span class="fa fa-heart"></span> <span class="sub-logo">Charity</span>Loom
										</a></h2>
									<!-- if logo is image enable this   
										<a class="navbar-brand" href="#index.php">
											<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
										</a> -->
									<p class="pr-lg-4">CharityLoom is a platform dedicated to donating food, clothes, and essential items to those in need. Our mission is to provide basic necessities and support to underserved communities.Join us in spreading kindness and support where it's needed most. </p>
									<div class="columns-2">
										<ul class="social">
											<li><a href="#facebook"><span class="fa fa-facebook"
														aria-hidden="true"></span></a>
											</li>
											<li><a href="#linkedin"><span class="fa fa-linkedin"
														aria-hidden="true"></span></a>
											</li>
											<li><a href="#twitter"><span class="fa fa-twitter"
														aria-hidden="true"></span></a>
											</li>
											<li><a href="#google"><span class="fa fa-google-plus"
														aria-hidden="true"></span></a>
											</li>
											<li><a href="#github"><span class="fa fa-github"
														aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 sub-one-left">
									<h6>Our Services</h6>
									<div class="mid-footer-gd sub-two-right">

										<ul>
											<li><a href="#"><span class="fa fa-angle-double-right mr-2"></span>Water
													Surve</a>
											</li>
											<li><a href="#"><span class="fa fa-angle-double-right mr-2"></span>Education
													for
													all</a>
											</li>
											<li><a href="#"><span class="fa fa-angle-double-right mr-2"></span>Food
													Serving</a>
											</li>
											<li><a href="#"><span class="fa fa-angle-double-right mr-2"></span>Animal
													Saves</a>
											</li>
										</ul>
										<ul>
											<li><a href="#"><span
														class="fa fa-angle-double-right mr-2"></span>Sponsors</a>
											</li>
											<li><a href="#"><span class="fa fa-angle-double-right mr-2"></span>Help
													Orphan</a>
											</li>
											<li><a href="#support"><span
														class="fa fa-angle-double-right mr-2"></span>Case
													Studies</a></li>
											<li><a href="#terms"><span class="fa fa-angle-double-right mr-2"></span>Our
													Organization</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 sub-one-left">
									<h6>Happy Faces</h6>
									<div class="instagram-feeds">
										<div class="b-img"> <a href="#url"><img src="assets/images/f1.jpg"
													class="img-fluid" alt=""></a></div>
										<div class="b-img"> <a href="#url"><img src="assets/images/f2.jpg"
													class="img-fluid" alt=""></a></div>
										<div class="b-img"> <a href="#url"><img src="assets/images/f3.jpg"
													class="img-fluid" alt=""></a></div>
										<div class="b-img"> <a href="#url"><img src="assets/images/f4.jpg"
													class="img-fluid" alt=""></a></div>
										<div class="b-img"> <a href="#url"><img src="assets/images/f5.jpg"
													class="img-fluid" alt=""></a></div>
										<div class="b-img"> <a href="#url"><img src="assets/images/f6.jpg"
													class="img-fluid" alt=""></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="below-section">
				<div class="container">
					<div class="copyright-footer">
						<div class="columns text-lg-left">
							<p>© 2024 CharityLoom. All rights reserved | Designed by Anchal Jaiswal
									</p>
						</div>
						<ul class="columns text-lg-right">
							<li><a href="#">Privacy Policy</a>
							</li>
							<li>|</li>
							<li><a href="#">Terms Of Use</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- copyright -->
			<!-- move top -->
			<button onclick="topFunction()" id="movetop" title="Go to top">
				<span class="fa fa-long-arrow-up" aria-hidden="true"></span>
			</button>
			<script>
				// When the user scrolls down 20px from the top of the document, show the button
				window.onscroll = function () {
					scrollFunction()
				};

				function scrollFunction() {
					if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
						document.getElementById("movetop").style.display = "block";
					} else {
						document.getElementById("movetop").style.display = "none";
					}
				}

				// When the user clicks on the button, scroll to the top of the document
				function topFunction() {
					document.body.scrollTop = 0;
					document.documentElement.scrollTop = 0;
				}
			</script>
			<!-- /move top -->

		</section>
	</footer>
	<!--//footer-66 -->
</body>

</html>

<script src="assets/js/jquery-3.3.1.min.js"></script>

<!-- disable body scroll which navbar is in active -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
	$(document).ready(function () {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

		$('.popup-with-move-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-slide-bottom'
		});
	});
</script>
<!--//-->
<!-- stats -->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
	$('.counter').countUp();
</script>
<!-- //stats -->
<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
	$(document).ready(function () {
		$('.owl-one').owlCarousel({
			loop: true,
			margin: 0,
			nav: false,
			responsiveClass: true,
			autoplay: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 1,
					nav: false
				},
				667: {
					items: 1,
					nav: true
				},
				1000: {
					items: 1,
					nav: true
				}
			}
		})
	})
</script>
<!-- //script -->
<!-- script for owlcarousel -->
<script>
	$(document).ready(function () {
		$('.owl-testimonial').owlCarousel({
			loop: true,
			margin: 0,
			nav: false,
			responsiveClass: true,
			autoplay: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 1,
					nav: false
				},
				667: {
					items: 1,
					nav: false
				},
				1000: {
					items: 1,
					nav: false
				}
			}
		})
	})
</script>
<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->
<script src="assets/js/bootstrap.min.js"></script>