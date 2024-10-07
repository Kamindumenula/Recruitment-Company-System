<?php
session_start();
// Database credentials
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch search parameters
$searchKeyword = isset($_GET['searchKeyword']) ? $_GET['searchKeyword'] : '';
$jobType = isset($_GET['jobType']) ? $_GET['jobType'] : '';
$location = isset($_GET['location']) ? $_GET['location'] : '';
$salaryRange = isset($_GET['salaryRange']) ? $_GET['salaryRange'] : '';

// Construct the SQL query
$sql = "SELECT * FROM jobs WHERE title LIKE ? AND location LIKE ? AND salary <= ?";

$params = ["%$searchKeyword%", "%$location%", $salaryRange];

if ($jobType) {
    $sql .= " AND type = ?";
    $
