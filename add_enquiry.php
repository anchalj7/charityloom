<?php
include("ngo_header.php");
?>
<div class="inner-banner">
</div>
<section class="w3l-contact-11">
		<div class="form-41-mian py-5">
			<div class="container py-lg-4">
			  <div class="row align-form-map">
				<div class="col-lg-6 contact-left pr-lg-4">
					<div class="partners">
					  <div class="cont-details">
						<div class="title-content text-left">
							<h6 class="sub-title">Contact Us</h6>
							<h5 class="hny-title">We will get in touch with you shortly.</h5>
						</div>
						<p class="mt-3 mb-4 pr-lg-5">Hi there, We are available 24/7 by fax, e-mail or by phone. Drop us line so we can talk
						  futher about that.</p>
						<h6 class="mb-4"> Feel free to ask any problem regaring donation,ngo and etc.</h6>
					  </div>
					  <div class="hours">
						<h6 class="mt-4">Email:</h6>
						<p> <a href="mailto:info@example.com">
							CharityLoom@gmail.com</a></p>
						<h6 class="mt-4">Address:</h6>
						<p>123, Model Town, Jalandhar, Punjab, India - 144003 </p>
						<h6 class="mt-4">Contact:</h6>
						<p class="margin-top">
							</a>+91 98765 43210</p>
					  </div>
					</div>
				  </div>
				<div class="col-lg-6 form-inner-cont">
					<div class="title-content text-left">
						<h3 class="hny-title mb-lg-5 mb-4"> Enquiry Form</h3>
					</div>
				  <form method="post" class="signin-form">
					<div class="form-input">
					  <input type="text" name="name" placeholder="Name" />
					</div>
					<div class="row con-two">
					<div class="col-lg-6 form-input">
					  <input type="email" name="email"  placeholder="Email" required />
					</div>
					<div class="col-lg-6 form-input">
						<input type="text" name="subject" placeholder="Subject" class="contact-input" />
					</div>
					</div>
					<div class="form-input">
					  <textarea placeholder=" Leave your Message" name="message" required></textarea>
					</div>
					<div class="submit-button text-lg-right">
					   <button type="submit"name="submit_btn" class="btn btn-style">Submit</button>
				    </div>
				  </form>
				</div>
			  </div>
			</div>
		  </div>
<?php
include("footer.php");
?>
<?php
if (isset($_REQUEST["submit_btn"])){
$name=$_REQUEST["name"];
// $email=$_REQUEST["email"];
$subject=$_REQUEST["subject"];
$message=$_REQUEST["message"];

include("config.php");
$query= "INSERT INTO `enquiry`( `name`,`subject`, `message`) VALUES ('$name','$subject','$message')";

$result=mysqli_query($connect,$query);

  if($result>0){
    echo"<script>window.location.assign('add_enquiry.php?msg=Data inserted')</script>";
  }
    else{
       echo"<script>window.location.assign('add_enquiry.php?msg=Error')</script>";
    }
  }
?>