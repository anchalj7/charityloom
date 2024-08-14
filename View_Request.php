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
            <div class="container-fluid">
                <h1 class="mt-4 text-center">View Request</h1>
                <div class="container-fluid">
                       <?php
            if(isset($_GET["msg"])){
                echo "<div class='alert alert-info'>".$_GET['msg']."</div>";
            }
            ?>
         <div class="row">
            
            <div class="col table-responsive">
            <table class="table text-capitalize table-bordered table-striped table-hover">
                                <tr class="table-danger">
                                    <th scope="col">id</th>
                                    <th scope="col">Images</th>
                                    <th scope="col">Donation Details</th>
                                    <th scope="col">Donor Details</th>
                                    <th scope="col">NGO Name</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>

                                </tr>

<?php
include("config.php");
$query="SELECT
  `request`.*,
  donation.`donor name` as donor_name,
  donation.email as donor_email,
  donation.type, donation.description,
  ngo.ngo_name,donation.image as donation_image
from `request`
inner join donation on request.donation_id=donation.id
inner join ngo on request.ngo_id=ngo.id;";
$result=mysqli_query($connect,$query);
 
$row=mysqli_fetch_assoc($result);
// print_r($result);
$id=1;
while($row=mysqli_fetch_array($result)){
            // print_r($row);
?>
<tr>
<td><?php echo $id++;?></td>
<td>
    <img src='images/<?php echo $row['donation_image']?>'style="width: 100px; height: 100px;">
</td>
<td>
    <?php echo $row['type']."<br>". $row['description']?>
</td>
<td><?php echo $row['donor_name']?><br><?php echo $row['donor_email']?></td>
<td><?php echo $row['ngo_name']?></td>
<td><?php echo $row['status']?></td>
<td><?php echo $row['created_at']?></td>
<td style="width: 150px;">
    <?php
if ($row['status'] == "Pending") {
    ?>
  <form method="POST" action="approve.php" style="display:inline;">
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
        <input type="hidden" name="status" value="approved">
        <input type="hidden" name="donation_id" value="<?php echo $row['donation_id'] ?>">
        <input type="hidden" name="ngo_id" value="<?php echo $row['ngo_id'] ?>">
        <button type="submit" class="btn btn-success">
            <i class="bi bi-hand-thumbs-up"></i>
        </button>
    </form>
    <form method="POST" action="approve.php" style="display:inline;">
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
        <input type="hidden" name="ngo_id" value="<?php echo $row['ngo_id'] ?>">
        <input type="hidden" name="status" value="rejected">
        <input type="hidden" name="donation_id" value="<?php echo $row['donation_id'] ?>">
        <button type="submit" class="btn btn-danger">
            <i class="bi bi-ban"></i>
        </button>
</form>
<?php
}else{
    echo $row['status'];
}
?>

</td>
</tr>
</tr>
<?php
// $id++;

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
    <script>
        function updateStatus(element) {
    var requestId = $(element).data('id');
    var status = $(element).data('status');

    $.ajax({
        url: 'approve.php',
        type: 'POST',
        data: {
            id: requestId,
            status: status
        },
        success: function(response) {
            if(response.success) {
                alert('Status updated successfully.');
                // Optionally, you can update the status in the table without refreshing the page
                location.reload(); // This will refresh the page
            } else {
                alert('Failed to update status.');
            }
        },
        error: function() {
            alert('Error in AJAX request.');
        }
    });
}
    </script>
<?php
include("toggle.php");
?>