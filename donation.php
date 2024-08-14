<?php
include("ngo_header.php");

// session_start();

?>
<style>
  .container-side {
    background-color: #f8f9fa;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }
</style>
<div class="inner-banner">
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
      $query = "select * from `donation`";
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
            if ($data['status'] == "Pending") {
            ?>
              <form method="post">
                <?php echo "<input type='hidden' name='donation_id' value='".$data["id"]."'>" ?>
                <button type="submit" class="btn btn-danger " name="request_btn">Request</button>
              </form>
            <?php
            } else {
              echo $data['status'];
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
<!-- logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logoutModalLabel">Confirm Logout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to logout?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
        <a href="logout.php" class="btn btn-success" >Logout</a>
      </div>
    </div>
  </div>
</div>

<?php
include("footer.php");
?>

<?php
include "config.php";

if (isset($_REQUEST["request_btn"])) {
  $ngo_id = $_SESSION["user_id"];
  $donation_id = $_REQUEST["donation_id"];

  $query = "INSERT INTO `request` (`ngo_id`, `donation_id`) VALUES ('$ngo_id', '$donation_id')";

  echo $query;
  try {
    $result = mysqli_query($connect, $query);

    echo $result;

    if ($result) {
      echo "<script>window.location.assign('donation.php?msg=Request submitted successfully.')</script>";
    } else {
      echo "<script>window.location.assign('donation.php?msg=Something went wrong, please try again.')</script>";
    }
  } catch (mysqli_sql_exception $e) {
    $error = $e->getMessage();
    echo "<script>window.location.assign('donation.php?msg=$error')</script>";
  }
}

?>