<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.jpg">
    <link rel="stylesheet" href="Header.css">
    <link rel="stylesheet" href="Footer.css">
    <link rel="stylesheet" href="Breadcrumb.css">
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="register.js" defer></script>
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
                <li><a href="#">Register</a></li>
            </ul>
        </div>
    </div>

    <!-- Register Section -->
    <section class="register">
        <div class="container container-register">
            <button id="select-user-type" onclick="showUserTypeButtons()">Select User Type</button>
            <div id="user-type-buttons" class="user-type-buttons" style="display: none;">
                <button onclick="handleUserType('employer')">Employer</button>
                <button onclick="handleUserType('employee')">Employee</button>
                <button onclick="handleUserType('both')">Both</button>
            </div>

            <!-- Employer Form -->
            <div id="employer-form" class="form-container" style="display: none;">
                <h3>Employer Registration</h3>
                <form id="employer-form-details" action="RegisterForm.php" method="POST" onsubmit="return validateEmployerForm()">
                    <input type="hidden" name="userType" value="employer">
                    <div class="form-group">
                        <label for="emp-fullname">Full Name:</label>
                        <input type="text" id="emp-fullname" name="fullname" placeholder="Enter your full name" required>
                    </div>
                    <div class="form-group">
                        <label for="emp-username">Username:</label>
                        <input type="text" id="emp-username" name="username" placeholder="Enter your username" required>
                    </div>
                    <div class="form-group password-group">
                        <label for="emp-password">Password:</label>
                        <input type="password" id="emp-password" name="password" placeholder="Enter your password" required>
                        <span class="toggle-password" onclick="togglePasswordVisibility('emp-password')"><i class="fas fa-eye"></i></span>
                    </div>
                    <div class="form-group password-group">
                        <label for="emp-confirm-password">Confirm Password:</label>
                        <input type="password" id="emp-confirm-password" name="confirm-password" placeholder="Confirm your password" required>
                        <span class="toggle-password" onclick="togglePasswordVisibility('emp-confirm-password')"><i class="fas fa-eye"></i></span>
                    </div>
                    <div class="form-group">
                        <label for="emp-email">Email:</label>
                        <input type="email" id="emp-email" name="email" placeholder="Enter your email" required>
                    </div>
                    <button type="submit">Next</button>
                </form>
            </div>

            <!-- Employee Form -->
            <div id="employee-form" class="form-container" style="display: none;">
                <h3>Employee Registration</h3>
                <form id="employee-form-details" action="RegisterForm.php" method="POST" onsubmit="return validateEmployeeForm()">
                    <input type="hidden" name="userType" value="employee">
                    <div class="form-group">
                        <label for="emp-fullname">Full Name:</label>
                        <input type="text" id="emp-fullname" name="fullname" placeholder="Enter your full name" required>
                    </div>
                    <div class="form-group">
                        <label for="emp-username">Username:</label>
                        <input type="text" id="emp-username" name="username" placeholder="Enter your username" required>
                    </div>
                    <div class="form-group password-group">
                        <label for="emp-password">Password:</label>
                        <input type="password" id="emp-password" name="password" placeholder="Enter your password" required>
                        <span class="toggle-password" onclick="togglePasswordVisibility('emp-password')"><i class="fas fa-eye"></i></span>
                    </div>
                    <div class="form-group password-group">
                        <label for="emp-confirm-password">Confirm Password:</label>
                        <input type="password" id="emp-confirm-password" name="confirm-password" placeholder="Confirm your password" required>
                        <span class="toggle-password" onclick="togglePasswordVisibility('emp-confirm-password')"><i class="fas fa-eye"></i></span>
                    </div>
                    <div class="form-group">
                        <label for="emp-email">Email:</label>
                        <input type="email" id="emp-email" name="email" placeholder="Enter your email" required>
                    </div>
                    <button type="submit">Next</button>
                </form>
            </div>

            <!-- Both Form -->
            <div id="both-form" class="form-container" style="display: none;">
                <h3>Both Registration</h3>
                <form id="both-form-details" action="RegisterForm.php" method="POST" onsubmit="return validateBothForm()">
                    <input type="hidden" name="userType" value="both">
                    <div class="form-group">
                        <label for="both-fullname">Full Name:</label>
                        <input type="text" id="both-fullname" name="fullname" placeholder="Enter your full name" required>
                    </div>
                    <div class="form-group">
                        <label for="both-username">Username:</label>
                        <input type="text" id="both-username" name="username" placeholder="Enter your username" required>
                    </div>
                    <div class="form-group password-group">
                        <label for="both-password">Password:</label>
                        <input type="password" id="both-password" name="password" placeholder="Enter your password" required>
                        <span class="toggle-password" onclick="togglePasswordVisibility('both-password')"><i class="fas fa-eye"></i></span>
                    </div>
                    <div class="form-group password-group">
                        <label for="both-confirm-password">Confirm Password:</label>
                        <input type="password" id="both-confirm-password" name="confirm-password" placeholder="Confirm your password" required>
                        <span class="toggle-password" onclick="togglePasswordVisibility('both-confirm-password')"><i class="fas fa-eye"></i></span>
                    </div>
                    <div class="form-group">
                        <label for="both-email">Email:</label>
                        <input type="email" id="both-email" name="email" placeholder="Enter your email" required>
                    </div>
                    <button type="submit">Next</button>
                </form>
            </div>
        </div>
    </section>

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
