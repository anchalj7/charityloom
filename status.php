 
 <?php
include("header.php");
if(!isset($_SESSION["email"])){
	header("Location: user_register.php?msg=Please Login.");
}
?>
<div class="inner-banner">
</div>
<?php
include("config.php");
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

// Ensure email is retrieved from the session
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';

if (empty($email)) {
    die("User not logged in or invalid email.");
}

// Initialize result variable
$result = null;

// Query to get completed donations
$sql = "SELECT ngo.ngo_name, donation.status 
        FROM donation 
        JOIN ngo ON donation.ngo = ngo.id 
        WHERE donation.status = 'completed' AND donation.email = ?";

// Prepare and execute the query
if ($stmt = $connect->prepare($sql)) {
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    die("Query error: " . $connect->error);
}
?>
    <div class="container mt-5">
        <h2 class="text-center mb-3">Completed Donations</h2>
        <?php if ($result && $result->num_rows > 0): ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>NGO Name</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['ngo_name']); ?></td>
                            <td><?php echo htmlspecialchars($row['status']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p class="text-center">No completed donations found.</p>
        <?php endif; ?>
    </div>
   

<?php
include("footer.php");
?>


