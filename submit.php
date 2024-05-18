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
        header("Location: thank_you.html"); // Redirect to thank you page
        exit();
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    echo "Access denied.";
}
?>
