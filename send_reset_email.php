<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    // You would normally validate the email here and check if it exists in your database
    // Then you would generate a password reset token and send it via email

    // For demonstration purposes, we'll just send a dummy email
    $to = $email;
    $subject = "Password Reset Request";
    $message = "You requested a password reset. Click the link below to reset your password.\n\n";
    $message .= "http://yourdomain.com/reset_password.php?token=YOUR_GENERATED_TOKEN_HERE";

    // Use the mail function to send the email
    // In a real-world scenario, you'd use a more robust email sending library
    if (mail($to, $subject, $message)) {
        echo "A password reset email has been sent to your email address.";
    } else {
        echo "Failed to send the password reset email. Please try again.";
    }
}
?>
