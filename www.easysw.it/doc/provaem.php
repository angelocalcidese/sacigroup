<?php
include("mailer/class.phpmailer.php");

$mail = new PHPMailer();
$mail->From     = "info@nomesito.it";
$mail->FromName = "NOMESITO.IT";
$mail->AddAddress("domenico.calcidese@gmail.com");
$mail->IsHTML(true);
$mail->AddBCC($indirizzibcc);
$mail->Subject  =  "prova";
$mail->Body     =  "tttttt";
$mail->AltBody  =  "";
$mail->AddAttachment("allegati/4679.jpg"); 


if(!$mail->Send()){
    echo "ERRORE nell'invio della mail.";
}else{
    echo "SUCCESSO l'email è stata inviata!";
}
?>