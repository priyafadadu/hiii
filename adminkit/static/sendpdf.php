<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/autoload.php';

//require '../../phpmailer/src/Exception.php';
//require '../../phpmailer/src/PHPMailer.php';
//require '../../phpmailer/src/SMTP.php';


// Grab variable
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
//$message=$_POST['message'];

//Create new PDF instance
    $mpdf = new  Mpdf\Mpdf();

//Create our PDF
    $data = '';

    $data .= '<img src="uploads/unnamed.jpg" style="width:100px; height:100px;"><br />';
    $data .= '<hr>';
    $data .= '<table>';
    $data .= '<tr>';
    $data .= '<td>';

//Add data
    $data .= '<strong>Name</strong>';
    $data .= '</td>';
    $data .= '<td>' . $name . '</td>';
    $data .= '</tr>';
    $data .= '<tr>';
    $data .= '<td><strong>Email</strong></td><td>' . $email . '</td>';
    $data .= '</tr>';
    $data .= '<tr>';
    $data .= '<td><strong>Address</strong></td><td>' . $address . '</td>';
    $data .= '</tr>';
    $data .= '</table>';

//if($message)
//{
//    $data .= '<br /><strong>Message</strong><br />' . $message . '<br />';
//}

//Write PDF
    $mpdf->WriteHTML($data);

//Output to string
    $pdf = $mpdf->Output('', 'S');

    $enquirydata = [

        'Name' => $name,
        'Email' => $email,
        'Address' => $address,
        // 'Message'    => $message
    ];


//Run the function
    sendEmail($pdf, $enquirydata);


    function sendEmail($pdf, $enquirydata)
    {

        $emailbody = '';


        foreach ($enquirydata as $title => $data) {
            $emailbody .= '<strong>' . $title . '</strong>: ' . $data . '<br />';
        }
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;

            $mail->Username = 'agherapriya34@gmail.com';
           $mail->Password = 'udgieqxtmlmltlyh';

            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            //Recipients
            $mail->setFrom('agherapriya34@gmail.com');

            $mail->addAddress('agherapriya34@gmail.com');
            //  $mail->addBCC('bcc@example.com');

            //Attachment
            $mail->addStringAttachment($pdf, 'invoice.pdf');

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'invoice';
            $mail->Body = $emailbody;
            $mail->AltBody = strip_tags($emailbody);

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

?>
