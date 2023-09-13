<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Include the PHPMailer autoloader

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host       = 'smtp.gmail.com'; // Replace with your SMTP server
    $mail->Port       = 587; // Replace with your SMTP port
    $mail->Username   = 'nagesh@orchids.edu.in';
    $mail->Password   = 'Junnu_2023';

    // $mail->SMTPOptions = array(
    //     'ssl' => array(
    //         'verify_peer' => false,
    //         'verify_peer_name' => false,
    //         'allow_self_signed' => true
    //     )
    // );
    // $mail->SMTPDebug = 2;
    
    // Sender and recipient
    $mail->setFrom('jemsco2023@gmail.com', 'JEMSCO 2023');
    $mail->addAddress('nageshy.php@gmail.com', 'Nagesh');

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Student Registration Success';
    $mail->Body    = "<!DOCTYPE html>            <html>
    <head>
        <title>Student Registration Success</title>
    </head>
    <body>
        <h1>Welcome, JEMSCO!</h1>
        <p>Your registration for CSO,CEO has been successfully processed.</p>
        <p>Thank you for choosing our institution!</p>
    </body>
    </html>            "; // Load your email template file

    // Replace placeholders in the email template
    $studentName = 'John Doe'; // Replace with the actual student name
    $courseName = 'Computer Science'; // Replace with the actual course name
    $mail->Body = str_replace('John', $studentName, $mail->Body);
    $mail->Body = str_replace('CEO', $courseName, $mail->Body);

    $mail->send();
    echo "success";
    return true;
} catch (Exception $e) {
     echo "Email could not be sent. Error: {$mail->ErrorInfo}";
    //return false
}

?>