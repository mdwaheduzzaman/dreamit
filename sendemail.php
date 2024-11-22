<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "srmidea86@gmail.com";
    $subject = "New Service Order";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>
                alert('Thank you! Your order has been placed.');
                window.location.href = 'index.html';
              </script>";
    } else {
        echo "<script>
                alert('Error! Please try again later.');
                window.history.back();
              </script>";
    }
}
?>
