<?php
$host = "localhost";
$user = "root";
$pass = "root";
$dbname = "reservation_db";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
