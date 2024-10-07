<?php
session_start(); // Start the session to access session variables

// Include database connection
include 'db_connection.php';

// Check if the employer ID is set in the session
if (!isset($_SESSION['employer_id'])) {
    die("Access denied: Employer not logged in.");
}

$employer_id = $_SESSION['employer_id'];

// Initialize variables
$result = null;
$stmt = null;

try {
    // Prepare the query to select jobs posted by the logged-in employer
    $stmt = $conn->prepare("SELECT * FROM jobs WHERE employer_id = ?");
    $stmt->bind_param("i", $employer_id);
    $stmt->execute();
    $result = $stmt->get_result();
} catch (mysqli_sql_exception $e) {
    // Handle SQL error
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Posted Jobs - Recruitz</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.jpg">
    <link rel="stylesheet" href="Header.css">
    <link rel="stylesheet" href="Footer.css">
    <link rel="stylesheet" href="Breadcrumb.css">
    <link rel="stylesheet" href="JobsPosted.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <div class="logo">
                <a href="#"><img src="images/logo.png" alt="Recruitz Logo"><span>Recruitz</span></a>
            </div>
            <nav class="nav">
                <ul>
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#"><i class="fas fa-search"></i> Find a Job</a></li>
                    <li><a href="#"><i class="fas fa-briefcase"></i> Post a Job</a></li>
                    <li><a href="#"><i class="fas fa-info-circle"></i> About Us</a></li>
                </ul>
            </nav>
            <div class="search-bar-header">
                <input type="text" placeholder="Search...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="auth-container">
                <div class="user-icon">
                    <img src="images/user.png" alt="User Icon">
                </div>
                <div class="auth-buttons">
                    <a href="#" class="btn register-btn">Register | Login</a>
                </div>
            </div>
            <div class="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <!-- Breadcrumb Section -->
    <div class="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">My Posted Jobs</a></li>
            </ul>
        </div>
    </div>

    <!-- Job Listings Section -->
    <div class="container job-listings">
        <h1>My Posted Jobs</h1>
        <?php
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='job-box'>";
                echo "<h2>" . htmlspecialchars($row['job_title']) . "</h2>";
                echo "<p>" . htmlspecialchars($row['job_description']) . "</p>";
                echo "<p><strong>Salary:</strong> " . htmlspecialchars($row['salary']) . "</p>";
                echo "<p><strong>Location:</strong> " . htmlspecialchars($row['location']) . "</p>";
                echo "<p><strong>Type:</strong> " . htmlspecialchars($row['job_type']) . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No jobs posted yet.</p>";
        }
        // Close statement and connection
        if ($stmt) {
            $stmt->close();
        }
        if ($conn) {
            $conn->close();
        }
        ?>
    </div>

    <!-- Footer Section -->
    <footer>
        <div class="footer-container">
            <div class="footer-section about">
                <h2>Recruitz</h2>
                <p>Connecting the best talents with the best opportunities. Join us to find your dream job or hire the
                    perfect candidate.</p>
            </div>
            <div class="footer-section links">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Find a Job</a></li>
                    <li><a href="#">Post a Job</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-section contact">
                <h2>Contact Us</h2>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> 123/A Recruitz Lane, Colombo 10</li>
                    <li><i class="fas fa-phone"></i> 0112581241</li>
                    <li><i class="fas fa-envelope"></i> info@recruitz.com</li>
                </ul>
            </div>
            <div class="footer-section social">
                <h2>Follow Us</h2>
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Recruitz. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
