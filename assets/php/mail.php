
<?php
$to = 'maksoodm01@gmail.com';
$headers = 'From: "'.$email.'"';

// All form values
$name = $_POST['name'];
$email = $_POST['phone'];
$msg = $_POST['msg'];

// Construct email body
$body = "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Topic: $topic\n";
$body .= "Subject: $subject\n\n";
$body .= "Message: $msg";

// Send email
$send = mail($to, $subject, $body, $headers);

// Check if email was sent successfully
if ($send) {
    echo "Email has been sent successfully.";
} else {
    echo "Failed to send email.";
}
?>