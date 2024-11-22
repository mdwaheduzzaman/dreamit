<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "srmidea86@gmail.com"; // Admin email
    $subject = "New Course Order";

    // Collect form data
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    $education = $_POST['education'];
    $profession = $_POST['profession'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $facebook = $_POST['facebook'];
    $course = $_POST['course'];
    $payment_method = $_POST['payment-method'];
    $transaction_id = $_POST['transaction-id'];

    // Compose email message
    $message = "
    <html>
    <head>
    <title>New Course Order</title>
    </head>
    <body>
    <h3>Course Order Details</h3>
    <table>
    <tr><th>Name</th><td>$name</td></tr>
    <tr><th>Mobile</th><td>$mobile</td></tr>
    <tr><th>Date of Birth</th><td>$dob</td></tr>
    <tr><th>Education</th><td>$education</td></tr>
    <tr><th>Profession</th><td>$profession</td></tr>
    <tr><th>Address</th><td>$address</td></tr>
    <tr><th>Email</th><td>$email</td></tr>
    <tr><th>Facebook ID</th><td>$facebook</td></tr>
    <tr><th>Course</th><td>$course</td></tr>
    <tr><th>Payment Method</th><td>$payment_method</td></tr>
    <tr><th>Transaction ID</th><td>$transaction_id</td></tr>
    </table>
    </body>
    </html>
    ";

    // Set content-type header for HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your order!";
    } else {
        echo "There was an error processing your order.";
    }
}
?>
