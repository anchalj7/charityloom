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
<script>
         function logout() {
            // Clear the session storage or any stored user data
            sessionStorage.clear();
            // Redirect to login page
            window.location.href = "ngo_login.php";
        }
    </script>
	
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.getElementById('requestForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const requestType = document.getElementById('requestType').value;
            const requestDescription = document.getElementById('requestDescription').value;
            const requesterName = document.getElementById('requesterName').value;
            const requesterContact = document.getElementById('requesterContact').value;

            console.log('Request Type:', requestType);
            console.log('Description:', requestDescription);
            console.log('Requester Name:', requesterName);
            console.log('Contact Information:', requesterContact);

            // Here you can add code to send this data to your backend or API
        });
</script>