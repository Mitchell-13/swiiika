<?php

/**
 * This example shows making an SMTP connection with authentication.
 */

//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require '../vendor/autoload.php';

function send($subj, $content, $senderEmail)
{

    //Create a new PHPMailer instance
    $mail = new PHPMailer();
    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    //Enable SMTP debugging
    //SMTP::DEBUG_OFF = off (for production use)
    //SMTP::DEBUG_CLIENT = client messages
    //SMTP::DEBUG_SERVER = client and server messages
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    //Set the hostname of the mail server
    $mail->Host = 'mail.privateemail.com';
    //Set the SMTP port number - likely to be 25, 465 or 587
    $mail->Port = 587;
    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;
    //Username to use for SMTP authentication
    $mail->Username = 'business@swiiika.com';
    //Password to use for SMTP authentication
    $mail->Password = 'Swiiika24!';
    //Set who the message is to be sent from
    $mail->setFrom('business@swiiika.com', 'Swiiika.com');
    //Set an alternative reply-to address
    //$mail->addReplyTo('replyto@example.com', 'First Last');
    //Set who the message is to be sent to
    $mail->addAddress("business@swiiika.com");
    //Set the subject line
    $mail->Subject = "swiiika.com:" . $subj;
    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    $html = "<html><body>";
    $html .= $content;
    $html .= "</body></html>";




    $mail->msgHTML($html);
    $mail->AddEmbeddedImage('../Assets/logo/logo-purple.png', 'logo');
    //Replace the plain text body with one created manually
    $mail->AltBody = '';
    //Attach an image file
    //$mail->addAttachment('images/phpmailer_mini.png');

    //send the message, check for errors
    $errors = '';
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        $errors = 'Failed to submit, try again later';
        return $errors;
    } else {
        $errors = 'Submitted successfully';
        return $errors;
    }
}
