<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $firstName = htmlspecialchars(trim($_POST['first-name']));
    $lastName = htmlspecialchars(trim($_POST['last-name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Prepare the email content
    $to = "valekbudimir@gmail.com"; // Your email address
    $subject = "New Message from Contact Form";
    $body = "Name: $firstName $lastName\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    // Use an email address from your domain as the "From" address
    $from = "valentinbudimir@developer.softlaunchpad.com";
    $headers = "From: $from\r\nReply-To: $email\r\n";

    // Send the email
    mail($to, $subject, $body, $headers);

    // Redirect back to the contact page
    header("Location: contact.html");
    exit();
} else {
    header("Location: contact.html");
    exit();
}
