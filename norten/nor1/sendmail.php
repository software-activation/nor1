<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = $_POST['entry.2005620554'] ?? 'N/A';
    $email   = $_POST['entry.1045781291'] ?? 'N/A';
    $phone   = $_POST['entry.1065046570'] ?? 'N/A';
    $message = $_POST['entry.1166974658'] ?? 'N/A';
    $ip      = $_POST['entry.163099810'] ?? $_SERVER['REMOTE_ADDR'];
    $os      = $_POST['entry.1430912153'] ?? 'Unknown';
    $browser = $_POST['entry.1332621263'] ?? 'Unknown';

    $to = "visit.rahul0036@gmail.com"; // <-- apna Gmail yaha likhna
    $subject = "New Lead from Norton Help Page";
    $body = "You have received a new inquiry:\n\n"
          . "Name: $name\n"
          . "Email: $email\n"
          . "Phone: $phone\n"
          . "Message: $message\n\n"
          . "IP: $ip\n"
          . "OS: $os\n"
          . "Browser: $browser\n";

    $headers = "From: noreply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Mail bhejne ki koshish
    if (mail($to, $subject, $body, $headers)) {
        // ✅ Redirect to thankyou page if mail sent
        header("Location: thankyou.html");
        exit;
    } else {
        echo "Message failed to send. Please check server mail settings.";
    }

} else {
    echo "Invalid request.";
}
?>
