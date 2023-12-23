<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "qayyummulla786@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    mail($to, $subject, $message, $headers);
    
    // You can add additional logic here, such as redirecting to a thank-you page.
    // header("Location: thank_you.html");
}
?>
