<?php
include("sidebar.php");
?>
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
            <h1 class="mt-4">Edit NGO</h1>
                <p>Welcome, Admin!  Allows administrators to add new NGOs to the system. .</p>
                <!-- <div class="row">
                    <div class="col d-flex justify-content-end mx-5 mb-5">
                    <a href="update_ngo.php" type="submit" name="submit_btn"class="btn btn-danger">Edit</a>
                    </div>
                </div> -->
<?php
$id=$_GET["id"];
// database connect
include("config.php");
//query
$query= "SELECT * from `ngo` where `id`='$id'";
//query run
$result=mysqli_query($connect,$query);
// print_r($result);
//result use
$data=mysqli_fetch_assoc($result);
// print_r($data);
?>    
        <div class="container">
        <div class="card">
            <div class="card-header">
                NGO Details
            </div>
            <div class="card-body">
                <form id="addNgoForm" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label for="ngoName">NGO Name</label>
                        <input type="text"name="ngo_name" class="form-control" id="ngoName" required value="<?php echo $data['ngo_name']?>">
                    </div>
                    <div class="form-group">
                        <label for="ngoDescription">Description</label>
                        <textarea class="form-control"name="description"  rows="3" required><?php echo $data['description']?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="donation-image">Upload Image of Donation</label>
                        <input type="file" id="donation-image" name="image" accept="image/*" />
                    </div>
                    <div class="form-group">
                        <label for="ngoLocation">Location</label>
                        <input type="text" class="form-control"name="location"  required value="<?php echo $data['location']?>">
                    </div>
                    <div class="form-group">
                        <label for="ngoAddress">Address</label>
                        <input type="text" class="form-control"name="address"  required value="<?php echo $data['address']?>">
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
     $password=$_REQUEST["password"];
     $description=$_REQUEST["description"];
     $location=$_REQUEST["location"];    
     $address=$_REQUEST["address"];
     if($_FILES["image"]["name"]){
        $image=$_FILES["image"];
        $image_name=$image["name"];
        $tmp_path=$image["tmp_name"];
        $new_name=rand().$image_name;
        move_uploaded_file($tmp_path,"images/".$new_name);
    }else{
         //$new_name=$_REQUEST["previous_image"];
        $new_name=$data["image"];
        //previous data
    }
     include("config.php");
    // UPDATE `table` set `col`='val' where `id`='val'
     $query="UPDATE `ngo` set `ngo_name`='$ngo', `description`='$description',`location`='$location',`address`='$address',`image`='$new_name' where `id`='$id'";
     $result=mysqli_query($connect,$query);
     if($result>0){
        echo "<script>window.location.assign('manage_ngo.php?msg=Updated successfully')</script>";
     }else{
        echo "<script>window.location.assign('manage_ngo.php?msg=Error!!! Try again later')</script>";
    }
}

?> 