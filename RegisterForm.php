<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection
    include 'db_connection.php';
    
    // Get form data
    $userType = $_POST['userType'];
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];

    // Insert user into database
    $sql = "INSERT INTO users (user_type, fullname, username, password, email) VALUES ('$userType', '$fullname', '$username', '$password', '$email')";
    if (mysqli_query($conn, $sql)) {
        echo json_encode(['status' => 'success', 'message' => 'New record created successfully']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error: ' . mysqli_error($conn)]);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
