<?php
$server = "db";
$username = "bluebird_user";
$password = "password";
$database = "bluebirdhotel";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("<script>alert('Connection failed: " . mysqli_connect_error() . "')</script>");
}
?>
