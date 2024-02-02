<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "aahudon@gmail.com";
    $subject = "New Contact Form Submission";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        // Redirect or respond to the user
        header("Location: thank_you.html");
        exit();
    } else {
        echo "Error: Unable to send email.";
    }
} else {
    echo "Error: Invalid request method.";
}
?>
