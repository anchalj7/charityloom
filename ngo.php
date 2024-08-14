<?php
include("header.php");
?>
<div class="inner-banner">
</div>
<div class="w3-services py-5">
		<div class="container py-lg-4">
			<div class="title-content text-left mb-lg-5 mb-4">
				<h3 class="hny-title">NGO's</h3>
				<p> Explore our cause grids to see the diverse initiatives we support,
				 from food and clothing donations to educational and healthcare programs, all aimed at making a significant impact in communities worldwide.
				</p>
                </div> 
    <div class="row">  
<?php
// database connect
include("config.php");
// query
$query="select * from `ngo`";
// query run with database
$result= mysqli_query($connect, $query);
// result use

$data=mysqli_fetch_assoc($result);
while ($data=mysqli_fetch_assoc($result)){
    // print_r($data);
?>
    <div class="col-md-12 text-capitalize my-2">
        <div class="causes-grid-info border">
            <div class="row p-3">
                <div class="col-md-4">
                    <img src="images/<?php echo $data['image']?>" class="img-fluid p-5"  style="height:350px;">
                </div>
                <div class="col-md-8">
                    <h3 class="text-center"><?php echo $data['ngo_name']?></h3>
                    <p class="card-text mb-2 text-dark text-center  p-3"><?php echo $data['description']?></p>
                    <p class="card-text mb-2 text-dark text-center  p-3">Location:<?php echo $data['location']?></p>
                    <p class="card-text mb-2 text-dark text-center  p-3">Address:<?php echo $data['address']?></p>
                </div>
            </div>
         
          
        </div>
    </div>

<?php
}
?>
   </div>
        </div>   
     </div>
<?php
include("footer.php");
?>