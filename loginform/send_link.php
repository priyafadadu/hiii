<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';
include("db.php");

if(isset($_POST['submit']) && $_POST['email'])
{
        $email = $_POST['email'];

    /** @var $conn */
    $result = mysqli_query($conn,"SELECT * FROM registration WHERE email='" . $email . "'");

     $row= mysqli_fetch_array($result);
     if($row)
     {
      $token =  md5($email).rand(10,9999);
     $link = "<a href='localhost/pariya/ajaxreg/registration.php?email=".$email."&token=".$token."'>Click To Reset password</a>";

       $mail = new PHPMailer();
      try
      {
          $mail->SMTPDebug = 2;
          $mail->isSMTP();
          $mail->Host       = 'smtp.gmail.com';
          $mail->SMTPAuth   = true;
          $mail->Username   = 'vishalkumar14@gecg28.ac.in';
          $mail->Password   = "Sureshbhai";
          $mail->SMTPSecure = 'tls';
          $mail->Port       = 587;
          $mail->setFrom('agherapriya34@gmail.com');

          $mail->addAddress('agherapriya34@gmail.com');
          $mail->isHTML(true);
          $mail->Subject = 'Send mail for reset password';

         $mail->Body    = 'Click On This Link to Reset Password '.$link.'';

          $mail->send();
          echo "Mail has been sent successfully!";
      }
      catch (Exception $e)
      {
          echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }
  }
}
?>


