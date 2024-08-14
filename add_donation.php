<?php
include("header.php");
if(!isset($_SESSION["email"])){
	header("Location: user_register.php?msg=Please Login.");
}
?>
 <link rel="stylesheet" href="assets/css/Donation.css">
<div class="inner-banner fixed-top">
</div>
<!-- <section class="w3l-content-6"> -->
    <div class="container donation-container my-5">
        <div class="row">
            <div class="col">
            <div class="card donation-panel">
        <div class="card-body">
        <?php
              if(isset($_REQUEST["msg"])){
                ?>
                <div class="alert alert-info">
                  <?php
                  echo $_REQUEST["msg"];
                  ?>
                </div>
               <?php
              }
              ?>
          <h2 class="card-title">Donation Form</h2>
          <form id="donationForm" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="donation-type">Type of Donation</label>
              <select id="donation-type" name="donation-type" required onchange="showFoodOptions()">
                <option value="" selected disabled>Select Donation Type</option>
                <?php
                  $arr=["Food","Wheelchair","Clothes","Toys","Books","Medical","Others"];
                  foreach($arr as $a){
                      ?>
                          <option><?php echo $a?></option>
                      <?php
                  }
                  ?>
              </select>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" name="description" required placeholder="Description" />
            </div>
            <div id="food-options" style="display:none;">
                <div class="form-group">
                  <label for="expiry-date">Expiry Date</label>
                  <input type="date" id="expiry-date" name="expiry-date" />
                </div>
                <div class="form-group">
                  <label for="manufacturing-date">Manufacturing Date</label>
                  <input type="date" id="manufacturing-date" name="manufacturing-date" />
                </div>
            </div>
            <div class="form-group">
              <label for="pickup-address">Pickup Address</label>
              <textarea id="pickup-address" name="pickup-address" required placeholder="Enter Pickup Address"></textarea>
            </div>
            <div class="form-group">
              <label for="donation-image">Upload Image of Donation(if any)</label>
              <input type="file" id="donation-image" name="donation-image" accept="image/*" />
            </div>
            <button type="submit" name="submit_btn"class="btn btn-danger d-block mx-auto ">Donate</button>
          </form>
          <!-- </section> -->
        </div>
      </div>
    </div>
  </div>
</div>
  <?php
   include("footer.php");
   ?> 
<?php
if (isset($_REQUEST["submit_btn"])){
$name=$_SESSION["name"];
$email=$_SESSION["email"];
$type=$_REQUEST["donation-type"];
$description=$_REQUEST["description"];
$expiry=$_REQUEST["expiry-date"];
$mfg=$_REQUEST["manufacturing-date"];
$pickup=$_REQUEST["pickup-address"];
$image=$_FILES["donation-image"];
$img_name=$image["name"];
$tmp=$image["tmp_name"];
// unique name
$new_name=rand().$img_name;
// method
move_uploaded_file($tmp,"images/". $new_name);

include("config.php");
 $query= "INSERT INTO `donation`( `donor name`, `email`, `type`,`description`,`expiry_date`,`mfg_date`, `image`,`pickup_address`) VALUES ('$name','$email','$type','$description','$expiry','$mfg','$new_name','$pickup')";

$result=mysqli_query($connect,$query);

  if($result>0){
    echo"<script>window.location.assign('user_donation.php?msg=Data inserted')</script>";
  }
    else{
       echo"<script>window.location.assign('add_donation.php?msg=Error')</script>";
    }
  }
?>

<script>
		function showFoodOptions() {
			var donationType = document.getElementById("donation-type").value;
			var foodOptions = document.getElementById("food-options");
			if (donationType == "Food") {
				foodOptions.style.display = "block";
			} else {
				foodOptions.style.display = "none";
			}
		}
	</script>