<?php
// Database configuration
$host = "localhost"; // or your database host
$username = "root"; // your database username
$password = ""; // your database password
$database = "rcs"; // your database name

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
