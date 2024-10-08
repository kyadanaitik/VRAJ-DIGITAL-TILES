<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "youremail@example.com"; // Replace with your own email address
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Thank you for your message!";
    } else {
        echo "Error: Unable to send email.";
    }
}
?>
