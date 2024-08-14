<?php
include("header.php");
if(!isset($_SESSION["email"])){
	header("Location: user_register.php?msg=Please Login.");
}
?>
<div class="inner-banner fixed-top">
</div>
<?php
if (isset($_GET["msg"])) {
  echo "<div class='alert alert-info'>" . $_GET['msg'] . "</div>";
}
?>
<div class="container">
  <h1 class="mt-4 text-center mb-3">Donation</h1>

      <?php
      // database connect
      include("config.php");
      // query
      $query = "select * from `donation` where `email`='$_SESSION[email]'";
      // query run with database
      $result = mysqli_query($connect, $query);
      // print_r($result);
      // result use
      while ($data = mysqli_fetch_assoc($result)) {
        // print_r($data);
      ?>
        <div class="card mb-3" >
             <div class="row g-0">
                  <div class="col-md-4">
                    <img src="images/<?php echo $data['image'] ?>" class="img-fluid rounded-start p-3"style="width: 200px; height: 200px;" >
                  </div>
                <div class="col-md-8">
                  <div class="card-body">
                  <p class="card-text mb-2 text-dark ">Type:<?php echo $data['type'] ?></p>
                  <p class="card-text mb-2 text-dark ">Description:<?php echo $data['description'] ?></p>
                  <!-- <p class="card-text mb-2 text-dark ">status:<?php echo $data['status'] ?></p> -->
                  <p class="card-text mb-2 text-dark ">Date of Donation:<?php echo $data['created_at'] ?></p>
                  <?php
                    echo $data['status'];
                    if($data['status']=="completed"){
                      if(isset($data['ngo'])){
                        $que="SELECT * from `ngo` where `id`='$data[ngo]'";
                        $res=mysqli_fetch_assoc(mysqli_query($connect,$que));
                        echo "<br>Assigned To: ".$res['ngo_name'];
                      }
                    }
                  ?>
                </div>
            </div>
        </div>
        </div>
      <?php
      }
      ?>

    </div>
    <?php
    include("footer.php");
    ?>