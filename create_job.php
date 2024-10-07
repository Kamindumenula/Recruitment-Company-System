<?php
session_start(); // Start the session to access session variables

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection
    include 'db_connection.php';

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO jobs (job_title, job_description, salary, location, job_type, employer_id) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $title, $description, $salary, $location, $type, $employer_id);

    // Set parameters and execute
    $title = $_POST["title"];
    $description = $_POST["description"];
    $salary = $_POST["salary"];
    $location = $_POST["location"];
    $type = $_POST["type"];
    $employer_id = $_SESSION['employer_id']; // Assuming you have an employer ID in session

    if ($stmt->execute()) {
        // Successful insertion
        $_SESSION['message'] = "Job posted successfully!";
    } else {
        // Error during insertion
        $_SESSION['message'] = "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();

    // Redirect to the employer jobs page with a success message
    header("Location: JobsPosted.php");
    exit();
}
?>
