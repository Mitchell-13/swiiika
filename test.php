<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New message from swiiika.com</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        color: #333333;
        margin: 0;
        padding: 20px;
      }
      
      h1 {
        font-size: 24px;
        margin-bottom: 20px;
      }
      
      strong {
        font-weight: bold;
      }
      
      p {
        margin-bottom: 10px;
      }
    </style>
  </head>
  <body>
    testing
  </body>
  </html>

  <?php





use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

date_default_timezone_set('America/Denver');

require '/vendor/autoload.php';



function send($name, $subject, $email, $content)
{
    //Create a new PHPMailer instance
    $mail = new PHPMailer();
    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    //Enable SMTP debugging
    //SMTP::DEBUG_OFF = off (for production use)
    //SMTP::DEBUG_CLIENT = client messages
    //SMTP::DEBUG_SERVER = client and server messages
    $mail->SMTPDebug = 2;
    $mail->Host = 'mail.privateemail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'business@swiiika.com';
    $mail->Password = '!';
    $mail->setFrom('business@swiiika.com', 'swiiika.com');
    //Set an alternative reply-to address
    $mail->addReplyTo($email, $name);
    $mail->addAddress("mitchellogden13@gmail.com");
    $mail->Subject = 'swiiika.com: ' . $subject;
    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    $html = "<html><body>";
    $html .= " <style>
body {
  font-family: Arial, sans-serif;
  line-height: 1.6;
  color: #333333;
  margin: 0;
  padding: 20px;
}

h1 {
  font-size: 24px;
  margin-bottom: 20px;
}

strong {
  font-weight: bold;
}

p {
  margin-bottom: 10px;
}
</style>
<h1>New message from swiiika.com</h1>
<p><strong>Name:</strong>" . $name . "</p>
<p><strong>Email:</strong>" . $email . "</p>
<p><strong>Message:</strong>" . $content . "</p>";
    $html .= "</body></html>";




    $mail->msgHTML($html);
    //$mail->AddEmbeddedImage('../Assets/logo/logo-purple.png', 'logo');
    //Replace the plain text body with one created manually
    $mail->AltBody = '';

    //send the message, check for errors
    $errors = '';
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        $errors = 'Failed to send, try again later';
        return $errors;
    } else {
        $errors = 'sent successfully';
        return $errors;
    }
}

