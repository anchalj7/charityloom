
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
            <span class="fa fa-heart text-light">
                <span class="text-danger ">Charity</span>Loom
            </div>
           
            <div class="list-group list-group-flush ">
                <a href="admin_Ds.php" class="text-light py-3 mx-5"><i class="bi bi-house-add"> Dashboard</a></i>
                <a href="manage_donation.php" class=" text-light py-3 mx-5"><i class="bi bi-currency-dollar"> Manage Donations</a></i>
                <a href="view_enquiries.php" class="l text-light py-3 mx-5"><i class="bi bi-chat-left-heart"> View Enquiries</a></i>
                <a href="View_Request.php" class="text-light py-3 mx-5"><i class="bi bi-person-add"> View Request</a></i>
                <a href="add_ngo.php" class="text-light py-3 mx-5"><i class="bi bi-node-plus"> Add NGO</a></i>
                <a href="manage_ngo.php" class="text-light py-3 mx-5"><i class="bi bi-pencil"> Manage NGO</a></i>
                <a href="#" class=" text-light py-3 mx-5" data-toggle="modal" data-target="#logoutModal"><i class="bi bi-box-arrow-right"> Logout</a></i>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->