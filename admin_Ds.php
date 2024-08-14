<?php
session_start();
if(!isset($_SESSION["email"])){
    echo "<script>window.location.assign('admin_login.php?msg=Please Login.')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CharityLoom Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-starter.css" rel="stylesheet">
    <!-- <link href="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap-grid.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="sidebar"class="bg-darkborder-right" id="sidebar-wrapper">
            <div class="sidebar-heading">
            <span class="fa fa-heart text-light mx-3">
                <span class="text-danger ">Charity</span>Loom
            </div>
           
           
            <div class="list-group list-group-flush ">
                <a href="#" class="  text-light py-3 mx-5"><i class="bi bi-house-add"> Dashboard</a></i>
                <a href="manage_donation.php" class=" text-light py-3 mx-5"><i class="bi bi-currency-dollar"> Manage Donations</a></i>
                <a href="view_enquiries.php" class="l text-light py-3 mx-5"><i class="bi bi-chat-left-heart"> View Enquiries</a></i>
                <a href="View_Request.php" class="text-light py-3 mx-5"><i class="bi bi-person-add"> View Request</a></i>
                <a href="add_ngo.php" class="text-light py-3 mx-5"><i class="bi bi-node-plus"> Add NGO</a></i>
                <a href="manage_ngo.php" class="text-light py-3 mx-5"><i class="bi bi-pencil"> Manage NGO</a></i>
                <a href="#" class=" text-light py-3 mx-5" data-toggle="modal" data-target="#logoutModal"><i class="bi bi-box-arrow-right"> Logout</a></i>
</div>
        </div>
        <!-- /#sidebar-wrapper -->

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
                        <h1 class="mt-4">Dashboard</h1>
                        <p>Welcome, Admin! Select an option from the menu to manage donations or inquiries.</p>
                        <div class="row">
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                <div class="card" style="background: linear-gradient(to bottom, #fff200, #ffcc00);">
                                <div class="card-body ">
                                    <h5 class="card-title">New Donations</h5>
                                    <h3 class="card-text"> 
                                    <?php
                                        include("config.php");
                                        $query="SELECT count(*) as total_donation from `donation` where `status`='Pending'";
                                        $res=mysqli_query($connect,$query);
                                        $data=mysqli_fetch_assoc($res);
                                        echo $data['total_donation'];
                                        ?>
                                    </h3>
                                    <a href="manage_donation.php" class="btn btn-primary">Manage</a>
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-3" >
                                <div class="card "style="background: linear-gradient(to bottom, #a8e063, #56ab2f); ">
                                <div class="card-body ">
                                    <h5 class="card-title">View Enquiries</h5>
                                    <h3 class="card-text"> 
                                    <?php
                                        include("config.php");
                                        $query="SELECT count(*) as total_enquiry from `enquiry`";
                                        $res=mysqli_query($connect,$query);
                                        $data=mysqli_fetch_assoc($res);
                                        echo $data['total_enquiry'];
                                        ?>
                                    </h3>
                                    <a href="view_enquiries.php" class="btn btn-primary">View</a>
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card" style="background: linear-gradient(to bottom, #ffafbd, #ffc3a0);">
                                <div class="card-body">
                                    <h5 class="card-title">View Request</h5>
                                    <h3 class="card-text"> 
                                    <?php
                                        include("config.php");
                                        $query="SELECT count(*) as total_request from `request`";
                                        $res=mysqli_query($connect,$query);
                                        $data=mysqli_fetch_assoc($res);
                                        echo $data['total_request'];
                                        ?>
                                    </h3>
                                    <a href="View_Request.php" class="btn btn-primary">Request</a>
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card" style=" background: linear-gradient(to bottom, #2193b0, #6dd5ed);">
                                <div class="card-body">
                                    <h5 class="card-title">Total NGO</h5>
                                    <h3 class="card-text"> 
                                    <?php
                                        include("config.php");
                                        $query="SELECT count(*) as total_ngo from `ngo`";
                                        $res=mysqli_query($connect,$query);
                                        $data=mysqli_fetch_assoc($res);
                                        echo $data['total_ngo'];
                                        ?>
                                    </h3>
                                    <a href="add_ngo.php" class="btn btn-primary">Add</a>
                                </div>
                                </div>
                            </div>
                        </div>     
                    </div>
                    <div class="container">
                        <div class="row ">
                            <div class="col  table-responsive">
                                <h1 class="text-center">New Donations</h1>
                                <table class="table table-bordered table-responsive table-striped table-hover">
                                    <tr class="table-danger">
                                        <th scope="col">Id</th>
                                        <th scope="col">Donor Name</th>
                                        <th scope="col">Email</th>
                                        <!-- <th scope="col">Phone Number</th> -->
                                        <th scope="col">Donation Type</th>
                                        <th scope="col">Expiry Date</th>
                                        <th scope="col">Manufacture Date</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Pickup Address</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th> 
                                    </tr>
                                    <?php
                                    include("config.php");
                                    $query="SELECT * from `donation` where `status`='Pending' order by `id` desc limit 5";
                                    $result= mysqli_query($connect, $query);
                                    $id=1;
                                    if(mysqli_num_rows($result)>0){
                                    while ($data=mysqli_fetch_assoc($result)){
                                    ?>
                                    <tr>
                                        <td><?php echo $id;?></td>
                                        <td><?php echo $data['donor name']?></td>
                                        <td><?php echo $data['email']?></td>
                                        <!-- <td><?php echo $data['phone']?></td> -->
                                        <td><?php echo $data['type']?></td>
                                        <td><?php echo $data['expiry_date']?></td>
                                        <td><?php echo $data['mfg_date']?></td>
                                        <td>
                                            <img src='images/<?php echo $data['image']?>'style="width: 100px; height: 100px;">
                                        </td>

                                        <td><?php echo $data['pickup_address']?></td>
                                        
                                        <td><?php echo $data['status']?></td>
                                        <td><?php echo $data['created_at']?></td>
                                        <td>
                                            <a href="delete.php?id=<?php echo $data['id']?>" class="btn btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php
                                    $id++;
                                    }}else{
                                        ?>
                                        <tr>
                                            <td colspan="12">No New Donations found!!</td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </table>
                            </div>
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

</div>
</div>
</div>
                

    <!-- Bootstrap and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
   <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

        function showPanel(panelId) {
            $(".content-panel").addClass("d-none"); // Hide all panels
            $("#" + panelId).removeClass("d-none"); // Show the selected panel
        }

        function logout() {
            // Clear the session storage or any stored user data
            sessionStorage.clear();
            // Redirect to login page
            window.location.href = "admin_login.php";
        }
    </script>
</body>
</html>
