<?php
include("ngo_header.php");
?>
<div class="inner-banner">
</div>
<div class="container">
                <h1 class="mt-4">View Status</h1>
         <div class="row">
            <div class="col">
            <table class="table table-bordered table-striped table-hover">
                            <!-- <thead> -->
                                <tr class="table-danger">
                                  <th>Sno</th>
                                    <th scope="col">Donor Name</th>
                                    <th scope="col">donation Type</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                </tr>
<?php
include("config.php");
$current_ngo=$_SESSION["user_id"];

$query="SELECT
  `request`.*,
  donation.`donor name` as donor_name,
  donation.type as donation_type,
 donation.description as  donation_description
from `request` 
left join donation on request.donation_id=donation.id
where request.ngo_id=$current_ngo;";

$result=mysqli_query($connect,$query);
 $sno=1;
// $row=mysqli_fetch_assoc($result);
// print_r($result);
while($row=mysqli_fetch_array($result)){
            // print_r($row);
?>
<tr>
  <td><?php echo $sno;?></td>
<td><?php echo $row['donor_name']?></td>
<td><?php echo $row['donation_type']?></td>
<td><?php echo $row['donation_description']?></td>
<td><?php echo $row['status']?></td>
</td>
</tr>
<?php
// $id++;
$sno++;
}
?>

</table>
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
include("footer.php");
?>