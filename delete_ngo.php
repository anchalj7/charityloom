<?php
$id= $_GET["id"];
//database connect
include("config.php");
//query
//DELETE from `table` where `id`='$id'
$query= "DELETE from `ngo` where `id`='$id'";

// query run
$result=mysqli_query($connect,$query);
// echo($result);
//result store and use
if($result>0){
    echo "<script>window.location.assign('manage_ngo.php?msg=Data deleted successfully')</script>";
}else{
    echo "<script>window.location.assign('manage_ngo.php?msg=Try again later')</script>";
}
?>