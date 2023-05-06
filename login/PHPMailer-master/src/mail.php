
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';
$subject = $_POST[ 'subject' ];
$content = $_POST[ 'content' ];
if ( !is_null( $subject ) ) {
    $mail = new PHPMailer( true );
    $mail->isSMTP();
    $mail->Host        = 'smtp.naver.com';
    $mail->SMTPAuth    = true;
    $mail->Username    = '';
    $mail->Password    = '';
    $mail->SMTPSecure  = 'ssl';
    $mail->Port        = 465;
    $mail->setFrom( 'qo99033@naver.com', 'FROM' );
    $mail->addAddress( 'qo99033@naver.com', 'TO' );
    $mail->isHTML( true );
    $mail->Subject     = $subject;
    $mail->Body        = $content;
    $mail->CharSet = 'utf-8';
    $mail->send();
    $send = 'Yes';
}
?>