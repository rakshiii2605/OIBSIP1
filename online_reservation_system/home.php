<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}
?>
<h2>Welcome to Smart Reservation System</h2>
<a href="reserve.php">Make a Reservation</a><br>
<a href="cancel.php">Cancel Reservation</a><br>
<a href="logout.php">Logout</a>
