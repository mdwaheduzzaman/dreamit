<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "srmidea86@gmail.com";  // Admin email address
    $subject = "New Course Order";
    $message = "
    Name: " . $_POST['name'] . "\n
    Mobile Number: " . $_POST['mobile'] . "\n
    Date of Birth: " . $_POST['dob'] . "\n
    Educational Qualification: " . $_POST['education'] . "\n
    Profession: " . $_POST['profession'] . "\n
    Address: " . $_POST['address'] . "\n
    Email: " . $_POST['email'] . "\n
    Facebook ID: " . $_POST['facebook'] . "\n
    Course Name: " . $_POST['course'] . "\n
    Payment Method: " . $_POST['payment'] . "\n
    Transaction ID: " . $_POST['transaction'] . "\n";

    mail($to, $subject, $message);
    echo "Thank you for your submission!";
}
?>
