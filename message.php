<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = $_POST['to'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    // Additional headers
    $headers = "From: bermudezallyzamae39@gmail.com"; // Replace with your Gmail address

    // Send email using mail() function
    if (mail($to, $subject, $message, $headers)) {
        echo "<h2>Email sent successfully!</h2>";
    } else {
        echo "<h2>Email sending failed.</h2>";
    }
} else {
    echo "Method not allowed.";
}
?>
