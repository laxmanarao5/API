<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once 'Exception.php';
require_once 'PHPMailer.php';
require_once 'SMTP.php';
$mail=new PHPMailer(true);
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->SMTPAuth=true;
$mail->Username='s170116@rguktsklm.ac.in';
$mail->Password='ihbjkyhrqgxkrkuz';
$mail->SMTPSecure='tls';
$mail->Port='587';
$mail->setFrom('s170116@rguktsklm.ac.in');
$mail->addAddress('s170073@rguktsklm.ac.in');
$mail->isHTML(true);
$mail->Subject='TCS test';
$mail->Body='testing TCS';
$mail->send();
echo "Sucess";
?>
