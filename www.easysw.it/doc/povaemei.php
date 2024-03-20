
<?php
include 'mailer/PHPMailerAutoload.php';
#echo $emailx."<br>";
$mail = new PHPMailer;
// Set PHPMailer to use the sendmail transport
$mail->isSendmail();
//Set who the message is to be sent from
$mail->setFrom('csra.carlopoma@gmail.com', 'CARLOPOMA');
//Set an alternative reply-to address
//Set an alternative reply-to address
$mail->addReplyTo('domenico.calcidese@gmail.com', 'CARLOPOMA');
//Set who the message is to be sent to
$mail->addAddress('domenico.calcidese@gmailcom', 'Comunicazione CARLOPOMA'); 

	$mail->msgHTML("prova");
	$mail->AltBody = 'Comunicazione CARLOPOMA';
	$mail->Subject = "provatesto";

$mail->addAddress('domenico.calcidese@gmailcom');
//$mail->addAddress('angelo.calcidese@gmail.com', $societa);
//$mail->addAddress('domenico.calcidese@gmail.com');
	$ora = date('H:i:s');
	$mail->msgHTML("provatesto");
	$mail->AltBody = 'Comunicazione ';
	$mail->Subject = "prova";
#echo "./allegati/".$nomefile;
$mail->addAttachment("./allegati/"."3.jpg");
#if($a == 1)
#echo $email."<br>";
#{$mail->send();}

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else { echo "inviato"; }
?>
