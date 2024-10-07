<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find a Job</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.jpg">
    <link rel="stylesheet" href="Header.css">
    <link rel="stylesheet" href="Footer.css">
    <link rel="stylesheet" href="Breadcrumb.css">
    <link rel="stylesheet" href="FindAJob.css">
    <script src="FindAJob.js" defer></script>
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
                <li><a href="#">Find a Job</a></li>
                <li>Search Jobs</li>
            </ul>
        </div>
    </div>

    <!-- Search Jobs Section -->
    <section class="search-jobs">
        <div class="container">
            <div class="search-bar">
                <input type="text" placeholder="Search for jobs...">
                <button><i class="fas fa-search"></i> Search</button>
            </div>
            <div class="filter-options">
                <label for="job-type">Job Type:</label>
                <select id="job-type">
                    <option value="full-time">Full Time</option>
                    <option value="part-time">Part Time</option>
                    <option value="contract">Contract</option>
                </select>

                <label for="location">Location:</label>
                <input type="text" id="location" placeholder="Enter location">

                <label for="salary-range">Salary Range:</label>
                <input type="range" id="salary-range" min="0" max="100000" step="1000" value="0">
                <span id="salary-value">LKR 0</span>
            </div>
        </div>
    </section>

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