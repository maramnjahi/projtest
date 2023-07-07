<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"]))
{
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host ='smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = ''; ///lena 7ot gmail li bch te5dem bih
    $mail->Password =''; // lena akel code heka mta3 l gmail
    $mail->SMTPSecure ='tls';
    $mail->Port =587;
    $mail->setFrom(''); // lena 7ot zeda l gmail nafsou 
    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);
    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];
    if($mail->send()){
        echo "<script>alert('sent successfully');</script>";
    }else{
        echo "<script>alert('failed to send');</script>";
    }
    echo "<script>location.href='indexmail.php';</script>";
}
?>

