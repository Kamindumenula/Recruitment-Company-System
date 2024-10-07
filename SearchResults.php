<?php
// Include database connection
include 'db_connection.php';

// Initialize search term if set, otherwise set to empty string
$searchTerm = isset($_POST['searchTerm']) ? $_POST['searchTerm'] : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruitz - Search Results</title>
    <link rel="icon" type="image/ico" href="images/favicon.ico">
    <link rel="stylesheet" href="Header.css">
    <link rel="stylesheet" href="Footer.css">
    <link rel="stylesheet" href="Breadcrumb.css">
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" alt="Recruitz Logo"><span>Recruitz</span></a>
            </div>
            <nav class="nav">
                <ul>
                    <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="FindAJob.php"><i class="fas fa-search"></i> Find a Job</a></li>
                    <li><a href="PostAJob.php"><i class="fas fa-briefcase"></i> Post a Job</a></li>
                    <li><a href="AboutUs.php"><i class="fas fa-info-circle"></i> About Us</a></li>
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
                    <a href="Login.php" class="btn register-btn">Register | Login</a>
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
                <li><a href="index.php">Home</a></li>
                <li>Search Results</li>
            </ul>
        </div>
    </div>

    <!-- Search and Filter Section -->
    <div class="filter-container">
        <div class="container">
            <div class="search-filter">
                <form action="SearchResults.php" method="POST">
                    <input type="text" name="searchTerm" placeholder="Search jobs..." value="<?php echo htmlspecialchars($searchTerm); ?>">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="filter-menu">
                <button id="filter-toggle" onclick="toggleFilterMenu()">Filters</button>
                <div id="filter-options" class="filter-options">
                    <div class="filter-item">
                        <label for="salary-range">Salary Range:</label>
                        <input type="range" id="salary-range" name="salary-range" min="30000" max="200000" step="1000">
                        <span id="salary-value">LKR 30,000</span>
                    </div>
                    <div class="filter-item">
                        <label>Job Field:</label>
                        <select id="job-field" name="job-field">
                            <option value="IT">IT</option>
                            <option value="Health">Health</option>
                            <option value="Business">Business</option>
                            <option value="Engineering">Engineering</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Job Section -->
    <div class="job-container">
        <?php
        if (!empty($searchTerm)) {
            // SQL query to search for jobs
            $sql = "SELECT * FROM jobs WHERE job_title LIKE '%$searchTerm%' OR job_description LIKE '%$searchTerm%'";
            // Perform the query
            $result = mysqli_query($conn, $sql);

            // Check if query executed successfully
            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    // Display job results
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="job-box">';
                        echo '<div class="job-details">';
                        echo '<h2>' . $row['job_title'] . '</h2>';
                        echo '<p>' . $row['job_description'] . '</p>';
                        echo '<p><strong>Salary:</strong> LKR ' . number_format($row['salary'], 2) . '</p>';
                        echo '<img src="' . $row['job_image'] . '" alt="' . $row['job_title'] . '">';
                        echo '<a href="#"><button>View Job</button></a>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    // No job results found message
                    echo '<p>No job results found for your search criteria.</p>';
                }
                // Free result set
                mysqli_free_result($result);
            } else {
                // Query execution error
                echo '<p>Error: ' . mysqli_error($conn) . '</p>';
            }
        } else {
            echo '<p>Please enter a search term.</p>';
        }
        ?>
    </div>

    <!-- Footer Section -->
    <footer>
        <div class="footer-container">
            <div class="footer-section about">
                <h2>Recruitz</h2>
                <p>Connecting the best talents with the best opportunities. Join us to find your dream job or hire the perfect candidate.</p>
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
<?php
// Close the database connection
mysqli_close($conn);
?>
