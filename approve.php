<?php
include("config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $status = $_POST['status'];
    $donation_id = $_POST['donation_id'];
    $ngo_id = $_POST['ngo_id'];

    $query = "UPDATE request SET status = ? WHERE id = ?";
    if ($stmt = $connect->prepare($query)) {
        $stmt->bind_param("si", $status, $id);
        if ($stmt->execute()) {
            if($status=='approved'){
             $query2="UPDATE donation set status= 'completed', ngo='$ngo_id' where id = '$donation_id'";
      
            include("config.php");
            $result=mysqli_query($connect,$query2);
            if($result>0){
                echo "<script>window.location.href='View_Request.php?msg=Status updated successfully';</script>";
            }else{

                echo "<script>window.location.href='View_Request.php?msg=Try again';</script>";
            }
        }else{
            echo "<script>window.location.href='View_Request.php?msg=Try again';</script>";
        }
        } else {
            echo "<script>window.location.href='View_Request.php?msg=Try again';</script>";
        }
        $stmt->close();
    } else {
        echo "<script> window.location.href='View_Request.php?msg=Try again';</script>";
    }
} else {
    echo "<script> window.location.href='View_Request.php?msg=Invalid method';</script>";
}
?>

