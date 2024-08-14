<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['user_type']);
unset($_SESSION['name']);
unset($_SESSION['user_id']);
session_destroy();
// you can also redirect to index page
header('location:user_register.php');
?>