<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require '../includes/Functions.php';

$mail = new PHPMailer();
try {
    if (isset($_POST['sending'])) {
        $title = setTitle("Contact Us");
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        //Sender
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'duongnnhgch230313@fpt.edu.vn';
        $mail->Password = 'fill the app password here';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        //Recipient
        $mail->addAddress('duongnnhgch230313@fpt.edu.vn');
        //Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = '<b>' . $message . '</b>';
        //Send mail
        $mail->send();
        $output = 'Message has been sent';
    } else {
        $title = setTitle("Contact Us");
        ob_start();
        include 'contact_form.html.php';
        $output = ob_get_clean();
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

include '../templates/layout.html.php';
