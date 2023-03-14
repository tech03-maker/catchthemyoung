<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

// Replace this with your own email address
$to = 'abushaaziyyah@gmail.com';

function url(){
  return sprintf(
    "%s://%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME']
  );
}

if($_POST) {

   $name = trim(stripslashes($_POST['name']));
   $email = trim(stripslashes($_POST['email']));
   $subject = trim(stripslashes($_POST['subject']));
   $contact_message = trim(stripslashes($_POST['message']));




	if ($subject == '') { $subject = "Contact Form Submission"; }

   // Set Message
   $message = "Email from: " . $name . "<br />";
	 $message .= "Email address: " . $email . "<br />";
   $message .= "Message: <br />";
   $message .= nl2br($contact_message);
   $message .= "<br />----- <br /> This email was sent from your site " . url() . " contact form. <br />";
 
   // Set From: header
   $from =  $name . " <" . $email . ">";
   // Email H



   //Create an instance; passing `true` enables exceptions
   $mail = new PHPMailer(true);

   try {
      //Server settings
      $mail->SMTPDebug = false;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = '8069566bdee53c';                     //SMTP username
      $mail->Password   = '32f2712e00e0b0';                               //SMTP password
      $mail->SMTPSecure = null;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
      $mail->setFrom($email, 'Mailer');
      $mail->addAddress($email, 'Joe User');     //Add a recipient
      //  $mail->addAddress('ellen@example.com');               //Name is optional

      //  //Attachments
      //  $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
      //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = $subject;
      $mail->Body    = $contact_message;
      //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      if($mail->send()){
            echo "<script>alert('Message Submitted Successfully')</script>";
      
         // header("location: index.php?status=1");
      }

   
   } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
}

?>