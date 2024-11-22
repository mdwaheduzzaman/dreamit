<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Admin email address
    $to = "srmidea86@gmail.com";
    $subject = "New Order Request";

    // Email message body
    $body = "You have received a new order request.\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message: $message\n";

    // Email headers
    $headers = "From: $email\r\n";  // Sender's email address
    $headers .= "Reply-To: $email\r\n";  // Reply-to address
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";  // Text content type

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Error: Unable to send message.";
    }
}
?>
