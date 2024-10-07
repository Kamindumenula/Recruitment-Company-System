<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/ico" href="images/favicon.ico">
    <link rel="stylesheet" href="Header.css">
    <link rel="stylesheet" href="Footer.css">
    <link rel="stylesheet" href="Breadcrumb.css">
    <link rel="stylesheet" href="Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta name="google-signin-client_id" content="YOUR_GOOGLE_CLIENT_ID.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="Login.js" defer></script>
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
                <li><a href="#">Register / Login</a></li>
            </ul>
        </div>
    </div>

    <!-- Register / Login Section -->
    <section class="register-login">
        <div class="container container-login">
            <form action="loginform.php" method="post">
                <div class="input-group">
                    <label for="username">Username / Email:</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username or email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password:</label>
                    <div class="password-input">
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                        <span class="toggle-password"><i class="fas fa-eye"></i></span>
                    </div>
                </div>
                <button type="submit">Login</button>
            </form>
            <div class="additional-links">
                <a href="#" id="forgot-password-link">Forgot Password?</a>
            </div>
            <div class="divider"><span>or</span></div>
            <div class="g-signin2" data-onsuccess="onSignIn"></div>
            <div class="additional-links">
                <a href="register.php" class="register-link">Not a Member? Register</a>
            </div>
        </div>
    </section>

    <!-- Forgot Password Modal -->
    <div id="forgot-password-modal" class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h2>Reset Password</h2>
            <form id="forgot-password-form" action="send_reset_email.php" method="post">
                <div class="input-group">
                    <label for="reset-email">Email:</label>
                    <input type="email" id="reset-email" name="email" placeholder="Enter your registered email" required>
                </div>
                <button type="submit">Send Verification Email</button>
            </form>
        </div>
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
