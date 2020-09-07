<?php

// Load Composer's autoloader
require 'vendor/autoload.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug  = 1;
    $mail->isSMTP();                                            // Send using SMTP

    $mail->Host       = 'xxxx';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'xxxx';
    $mail->Password   = 'xxxx';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;


    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $call = $_POST['call'];
    $website = $_POST['website'];
    $priority = $_POST['priority'];
    $type = $_POST['type'];
    $message = $_POST['message'];
    $formcontent = " From: $name \n Phone: $phone \n Call Back: $call \n Website: $website \n Priority: $priority \n Type: $type \n Message: $message";
    $recipient = "romel.dream@gmail.com";
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";

    //Recipients
    $mail->setFrom('noreply@myatmen.com', 'Mailer');
    $mail->addAddress($recipient, 'Romel');

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $formcontent;

    $mail->send();
    echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
