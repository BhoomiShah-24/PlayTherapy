<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Set recipient email address
    $to = "hrishikeshtonge@gmail.com"; // Replace with your email address

    // Set email headers
    $headers = "From: $name <$email>" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send email
    $mailSuccess = mail($to, $subject, $message, $headers);

    // Check if the email was sent successfully
    if ($mailSuccess) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    // If the form is not submitted using POST method, redirect to the form page
    header("Location: PlayTherapy/index.html"); // Replace with the actual path
    exit();
}
?>
