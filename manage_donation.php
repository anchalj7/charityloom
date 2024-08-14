<?php
include("sidebar.php");
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
            <?php
            if(isset($_GET["msg"])){
                echo "<div class='alert alert-info'>".$_GET['msg']."</div>";
            }
            ?>
        <div class="container-fluid">
                <h1 class="mt-4 text-center" >Manage Donation</h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col table-responsive">
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
                        // database connect
                        include("config.php");
                        // query
                        $query="SELECT * from `donation`";
                        // query run with database
                        $result= mysqli_query($connect, $query);
                        // print_r($result);
                        // result use
                        $id=1;
                        // $data=mysqli_fetch_assoc($result);
                        while ($data=mysqli_fetch_assoc($result)){
                            // print_r($data);
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
<?php
include("toggle.php");
?>






    