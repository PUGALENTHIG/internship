<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "pugalpugalee333@gmail.com"; // Admin email address
    $subject = "New Internship Registration";

    // Collect form data
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $university = $_POST['university'];
    $major = $_POST['major'];
    $year = $_POST['year'];
    
    // Email body
    $message = "Name: $fullName\n";
    $message .= "Email: $email\n";
    $message .= "University: $university\n";
    $message .= "Major: $major\n";
    $message .= "Year of Study: $year\n";
    
    // Send email
    $headers = "From: $email";
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your registration. We will contact you soon!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    echo "Access denied.";
}
?>
