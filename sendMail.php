<?php
$to       = $_POST['email'];
$subject  = 'Registration Completed';
$message  = 'Thank you for registering with Test Your Skill';
$headers  = 'From: arjunabraham11@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $message, $headers))
    echo "Email sent";
else
    echo "Email sending failed";
?>