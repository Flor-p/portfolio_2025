<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Compose email message
    $to = "florparamidani@gmail.com";
    $subject = "New message from website contact form";
    $body = "First Name: $first_name\nLast Name: $last_name\nEmail: $email\nMessage: $message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "¡Message sent successfully!";
    } else {
        echo "¡Oops! Something went wrong";
    }
}
?>
