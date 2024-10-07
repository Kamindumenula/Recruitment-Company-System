<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruitz</title>
    <link rel="icon" type="image/ico" href="images/favicon.ico">
    <link rel="stylesheet" href="Header.css">
    <link rel="stylesheet" href="Footer.css">
    <link rel="stylesheet" href="Breadcrumb.css">
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="Home.js" defer></script>
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
                <li><a href="#">Home</a></li>
                <li><a href="#">Section</a></li>
                <li>Current Page</li>
            </ul>
        </div>
    </div>

    <!-- Search and Filter Section -->
    <div class="filter-container">
        <div class="container">
            <div class="search-filter">
            <form action="SearchResults.php" method="GET">
                <input type="text" placeholder="Search jobs...">
                <button><i class="fas fa-search"></i></button>
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

    <!-- Ads Section -->
    <div class="ads">
        <div class="ad-container">
            <div class="ad-image" id="adBar1"></div>
            <p class="ad-text"></p>
        </div>
        <div class="ad-container">
            <div class="ad-image" id="adBar2"></div>
            <p class="ad-text"></p>
        </div>
        <div class="ad-container">
            <div class="ad-image" id="adBar3"></div>
            <p class="ad-text"></p>
        </div>
    </div>

    <!-- Job Section -->
    <div class="job-container" class="job-container-hidden">
        <div class="job-box">
            <div class="job-image">
                <img src="https://i.pinimg.com/564x/6b/c6/d8/6bc6d874eda0f123a5dfff33cd0c15b2.jpg"
                    alt="Mechanical Engineer">
            </div>
            <div class="job-details">
                <h2>Mechanical Engineer</h2>
                <p>Description of the job goes here. This box can contain all the details about the job.</p>
                <p><strong>Salary:</strong> LKR 250,000.00</p>
                <a href="#"><button>View Job</button></a>
            </div>
        </div>

        <div class="job-box">
            <div class="job-image">
                <img src="https://i.pinimg.com/564x/c9/59/00/c9590049081498dca290183b7847f51d.jpg"
                    alt="Marketing Manager">
            </div>
            <div class="job-details">
                <h2>Marketing Manager</h2>
                <p>Description of the job goes here. This box can contain all the details about the job.</p>
                <p><strong>Salary:</strong> LKR 200,000.00</p>
                <a href="#"><button>View Job</button></a>
            </div>
        </div>

        <div class="job-box">
            <div class="job-image">
                <img src="https://i.pinimg.com/564x/ae/fc/33/aefc3396929dd03203674b941bd93e20.jpg" alt="Nurse">
            </div>
            <div class="job-details">
                <h2>Nurse</h2>
                <p>Description of the job goes here. This box can contain all the details about the job.</p>
                <p><strong>Salary:</strong> LKR 150,000.00</p>
                <a href="#"><button>View Job</button></a>
            </div>
        </div>

        <div class="job-box">
            <div class="job-image">
                <img src="https://i.pinimg.com/564x/10/8f/d4/108fd49da826e041d1d3b3f616c2dd87.jpg" alt="Nurse">
            </div>
            <div class="job-details">
                <h2>Information Technology (IT) Specialist</h2>
                <p>Description of the job goes here. This box can contain all the details about the job.</p>
                <p><strong>Salary:</strong> LKR 261,000.00</p>
                <a href="#"><button>View Job</button></a>
            </div>
        </div>
        <div class="job-box">
            <div class="job-image">
                <img src="https://i.pinimg.com/564x/9d/76/e4/9d76e49befb136a5dafa05ee8c74e2b1.jpg" alt="Nurse">
            </div>
            <div class="job-details">
                <h2>Business Analyst</h2>
                <p>Description of the job goes here. This box can contain all the details about the job.</p>
                <p><strong>Salary:</strong> LKR 155,000.00</p>
                <a href="#"><button>View Job</button></a>
            </div>
        </div>
        <div class="job-box">
            <div class="job-image">
                <img src="https://i.pinimg.com/564x/2b/3b/f5/2b3bf59b9a54b9f0abaebd390e1c4213.jpg" alt="Nurse">
            </div>
            <div class="job-details">
                <h2>Civil Engineer</h2>
                <p>Description of the job goes here. This box can contain all the details about the job.</p>
                <p><strong>Salary:</strong> LKR 120,000.00</p>
                <a href="#"><button>View Job</button></a>
            </div>
        </div>

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