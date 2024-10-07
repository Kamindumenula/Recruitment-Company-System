<?php
// Ensure the necessary headers are present
header('Content-Type: application/json');

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rcs"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if this is a Google sign-in
if (isset($_POST['idtoken'])) {
    $id_token = $_POST['idtoken'];

    // Verify the ID token with Google
    $client = new Google_Client(['client_id' => 'YOUR_GOOGLE_CLIENT_ID.apps.googleusercontent.com']); // Specify the CLIENT_ID of the app that accesses the backend
    $payload = $client->verifyIdToken($id_token);
    if ($payload) {
        $userid = $payload['sub'];
        $email = $payload['email'];
        $name = $payload['name'];

        // Check if the user already exists in the database
        $sql = "SELECT * FROM users WHERE google_id='$userid'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // User exists, update their info
            $sql = "UPDATE users SET name='$name', email='$email' WHERE google_id='$userid'";
        } else {
            // New user, insert them into the database
            $sql = "INSERT INTO users (google_id, name, email) VALUES ('$userid', '$name', '$email')";
        }

        if ($conn->query($sql) === TRUE) {
            echo json_encode(['status' => 'success', 'message' => 'User logged in successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error updating/inserting user: ' . $conn->error]);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid ID token']);
    }
} else {
    // Handle form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    $sql = "SELECT * FROM users WHERE email='$username' OR username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Credentials are valid
        echo json_encode(['status' => 'success', 'message' => 'User logged in successfully']);
    } else {
        // Invalid credentials
        echo json_encode(['status' => 'error', 'message' => 'Invalid username or password']);
    }
}

$conn->close();
?>
