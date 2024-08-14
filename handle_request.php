<?php
include("config.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $request_id = intval($_POST['request_id']);
    $donation_id = intval($_POST['donation_id']);
    $action = $_POST['action'];
    $current_status = $_POST['current_status'];
    $ngo_id = intval($_POST['ngo_id']); // NGO ID from form

    if ($action === 'approve') {
        $donation_result = mysqli_query($connect, "SELECT status FROM donation WHERE id=$donation_id");
        $donation = mysqli_fetch_assoc($donation_result);

        if ($donation['status'] === 'active') {
            mysqli_query($connect, "UPDATE request SET status='approved', ngo_id=$ngo_id WHERE id=$request_id");
            mysqli_query($connect, "UPDATE donation SET status='approved' WHERE id=$donation_id");
            echo "Request and donation approved successfully.";
        } else {
            mysqli_query($connect, "UPDATE request SET status='not available' WHERE id=$request_id");
            echo "Donation not available.";
        }
    } elseif ($action === 'reject' && $current_status === 'pending') {
        mysqli_query($connect, "UPDATE request SET status='rejected' WHERE id=$request_id");
        echo "Request rejected successfully.";
    }
}

// Redirect back to the view page after handling the request
header("Location: View_Requests.php");
exit();
?>
