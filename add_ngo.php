<?php
include("sidebar.php");
session_start();
?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-dark border-bottom">
                <button class="btn btn-primary mx-2" id="menu-toggle"> <i class="fa fa-bars "></i></button>
                <form class="form-inline ml-auto my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                </form>
                <div class="dropdown ml-3">
                   
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profileDropdown">
                       
                    </div>
                </div>
            </nav>
            <div class="container-fluid">
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
                <h1 class="mt-4 text-center">Add NGO</h1>
            
        <div class="container">
        <div class="card">
            <div class="card-header ">
                NGO Details
            </div>
            <div class="card-body">
                <form id="addNgoForm" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label for="ngoName">NGO Name</label>
                        <input type="text"name="ngo_name" class="form-control"  required>
                    </div>
                    <div class="form-group">
                        <label for="ngoEmail">Email</label>
                        <input type="email"name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="ngoPassword">Password</label>
                        <input type="password"name="password" class="form-control"  required>
                    </div>
                    <div class="form-group">
                        <label for="ngoDescription">Description</label>
                        <textarea class="form-control"name="description"  required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="donation-image">Upload Image of Donation</label>
                        <input type="file" name="image" accept="image/*" />
                    </div>
                    <div class="form-group">
                        <label for="ngoLocation">Location</label>
                        <input type="text" class="form-control"name="location" required>
                    </div>
                    <div class="form-group">
                        <label for="ngoAddress">Address</label>
                        <input type="text" class="form-control"name="address"  required>
                    </div>
                    <button type="submit" name="submit_btn"class="btn btn-danger">Add</button>
                    
                </form>
            </div>
        </div>
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
include("toggle.php");
?>
<?php
if (isset($_REQUEST["submit_btn"])){
$ngo=$_REQUEST["ngo_name"];
$email=$_REQUEST["email"];
$password=md5($_REQUEST["password"]);
$description=$_REQUEST["description"];
$location=$_REQUEST["location"];    
$address=$_REQUEST["address"];
$image=$_FILES["image"];
$img_name=$image["name"];
$tmp=$image["tmp_name"];
// unique name
$new_name=rand().$img_name;
// method
move_uploaded_file($tmp,"images/". $new_name);

include("config.php");
$query= "INSERT INTO `ngo`( `ngo_name`, `image`, `description`, `location`, `address`, `email`, `password`) VALUES ('$ngo','$new_name','$description','$location','$address','$email','$password')";
$result=mysqli_query($connect,$query);

print_r ($result);

  if($result>0){
    echo"<script>window.location.assign('add_ngo.php?msg=Data inserted')</script>";
  }
    else{
       echo"<script>window.location.assign('add_ngo.php?msg=Error')</script>";
    }
  }
?>