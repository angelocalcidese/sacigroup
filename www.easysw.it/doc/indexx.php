<?php 
#echo "passo"; exit;
session_start(); if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){ $larg= $_SESSION['screen_width'] ; $alt= $_SESSION['screen_height']; } else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) { $_SESSION['screen_width'] = $_REQUEST['width']; $_SESSION['screen_height'] = $_REQUEST['height']; header('Location: ' . $_SERVER['PHP_SELF']); } else { echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width+"&height="+screen.height;</script>'; } 

$ingranaggiox=$_REQUEST["ewsew"];
$emailnew=$_REQUEST["emailnew"];
$zona="Centro Ascolto";
$ingranaggio=$_REQUEST["ingranaggio"];
$opt=$_REQUEST["opt"];
#echo $ingranaggio;
#if ($zona=="")   {exit;}
#echo "zona ".$zona;
#echo "ingranaggio ".$ingranaggio;
#echo "ingra ".$ingranaggio;
include "conf_DB.php";
include("mailer/PHPMailerAutoload.php");
if ($ingranaggio=='5')
{ 
#echo "passo"; exit;
$sql1 = "SELECT * FROM utenti  where email = '$emailnew'  ";
#echo $sql1."<br>";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{$codvolontario = $macrogruppo["codvolontario"];
     $dioxx = $macrogruppo["dio"];
     $loginxx = $macrogruppo["login"];
     $email = $macrogruppo["email"];
     $passwordxx = $macrogruppo["password"];
     $intesta1 = $macrogruppo["cognome"];
     $intesta2 = $macrogruppo["nome"];
     $codicexx = $macrogruppo["codvolontario"];
    } }
$sql1 = "SELECT * FROM associazione  where codice = '$codicexx'  ";
#echo $sql1;  exit;
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{
     $indirizzo = $macrogruppo["indirizzo"];
     $localita = $macrogruppo["localita"];
     $cf = $macrogruppo["cf"];
     $runs = $macrogruppo["runs"];
     $rappresentante = $macrogruppo["rappresentante"];
     $iva = $macrogruppo["iva"];
     $forma = $macrogruppo["forma"];
     $bilancio = $macrogruppo["bilancio"];
     $rendi = $macrogruppo["rendi"];
     $autorizzato = $macrogruppo["autorizzato"];
     $fine = $macrogruppo["fine"];
     $messa = $macrogruppo["messa"];
     $sito = $macrogruppo["sito"];
     $telefono = $macrogruppo["telefono"];
    } }
#echo $loginxx; exit;


$oggetto="Richiesta recupero password per utilizzo la Gestione Documentale.";            
$aggiunta="	<font face='Arial' size='4' color='black' >Spett.le Società ".$intesta1." ".$intesta2." ".$indirizzo." ".$localita." email ".$email.", le credenziali per accedere alla Gestione Documentale sono:"."<br>";
$message = $aggiunta."Il link: ".
"https://www.mensacarita.it/doc"."<br><br>".
"Username=".$loginxx."<br>".
"Password=".$passwordxx."<br><br>".
"Cordiali saluti.<br><br><br><br></font><font face='Arial' size='3' color='black' >SACI GROUP Srl<br>CF 93050770150<br>Web: www.?????.it<br>Email: info@???????.it<br>La presente e-mail e` stata generata automaticamente da un indirizzo di posta elettronica di solo invio; si chiede pertanto di non rispondere al messaggio.";
$mittente="domenico.calcidese@gmail.com";
$emailk=$emailnew;
#$emailk="domenico.calcidese@gmail.com";
#$nomefilex = "./allegati/".$nomefile;
$mail = new PHPMailer();
$mail->From     = ($mittente);
$mail->FromName = "SACI GROUP Srl";
$mail->AddAddress($emailk);
$mail->IsHTML(true);
$mail->AddBCC($indirizzibcc);
$mail->Subject  =  $oggetto;
$mail->Body     =  $message;
$mail->AltBody  =  "";
if(!$mail->Send()){
echo "ERRORE1 non riesco a inviare la Email"; exit;
}else{#echo "EMAIL1 inviata con successo!!!";
}        
      
        
}
$trovato="";
if ($ingranaggio==1)
{
$login=$_REQUEST["login"];
$loginq=$_REQUEST["loginq"];
#echo "log ".$login;
$passw=$_REQUEST["passw"];
$ip = $_SERVER['REMOTE_ADDR'];
#echo "pass ".$login; exit;
$trovato=0;
$sql1 = "SELECT * FROM utenti  where login = '$login' and password = '$passw' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{ $trovato=1;
          $dio = $macrogruppo["dio"];
          $emailw = $macrogruppo["email"];
          $cognome = $macrogruppo["cognome"];
          $nome = $macrogruppo["nome"];	
$sql = "INSERT INTO `accessi` 
(`prg`, 
  `dataaccesso`,
   `login`,
    `password`,
     `buono`,
      `ip` ) 
VALUES 
(NULL, 
  CURRENT_TIMESTAMP,
   '$login',
    '$passw',
     'SI',
      '$ip');";

if ($conn->query($sql) === TRUE)      
  {  echo "";   }     
			} }
            #echo $login.$passw; 

 


if($swch==1){$trovato=0;}
if ($trovato==1)
    {     
$sql1 = "SELECT * FROM associazione  where login = '$login'";
#echo $sql1; 
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())
		{ 
      $intesta1 = $macrogruppo["intesta1"];	
      $intesta2 =  $macrogruppo["intesta2"];
      $indirizzo = $macrogruppo["indirizzo"];
      $localita = $macrogruppo["localita"];
      $cf = $macrogruppo["cf"];
      $runs = $macrogruppo["runs"];
      $email = $macrogruppo["email"];
      $rappresentante = $macrogruppo["rappresentante"];
      $bilancio = $macrogruppo["bilancio"];
      $rendi = $macrogruppo["rendi"];
      $iva = $macrogruppo["iva"];
      $forma = $macrogruppo["forma"];
      
      $ut2a = $macrogruppo["ut2a"];
      $ut3a = $macrogruppo["ut3a"];
      $ut2 = $macrogruppo["ut2"];
      $ut3 = $macrogruppo["ut3"];
      $email2 = $macrogruppo["email2"];
      $email3 = $macrogruppo["email3"];
       
      $assistiti = $macrogruppo["assistiti"];  
      $soci = $macrogruppo["soci"]; 
      $volontari = $macrogruppo["volontari"]; 
      $medico = $macrogruppo["medico"]; 
      $donazioni = $macrogruppo["donazioni"]; 
       
			}  }
           
if($loginq==""){$emailss=$email;$cognomecomodo=$rappresentante;} 
else 
{ $emailss="";
if($loginq==$email2 and $ut2a == "SI"){$emailss=$email2;$cognomecomodo=$ut2;}
if($loginq==$email3 and $ut3a == "SI"){$emailss=$email3;$cognomecomodo=$ut3;}
#echo $emailss; exit; 
if($emailss=="")
{
$sqlyu = "INSERT INTO `accessi` 
(`prg`, 
  `dataaccesso`,
   `login`,
    `password`,
     `buono`,
     `ip` ) 
VALUES 
(NULL, 
  CURRENT_TIMESTAMP,
   '$login',
    '$passw',
     'NO',
      '$ip');";
#echo  $sql; exit;
if ($conn->query($sqlyu) === TRUE)
  {   } 
$trovato=0;
}
}

if($trovato==1){

    
    setcookie("POMACLIENTLOGGED",$login,time()+86400,"/");
    $newpass=rand(1, 90000);  
$controllopass=0;  
$sql1 = "SELECT * FROM passinfo  where login = '$login'  ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{
         $controllopass=1;        
        }}
if($controllopass==1){        
$sql = "UPDATE `passinfo` 
SET `password`='$newpass' 
WHERE login = '$login'  
";
#echo  $sql; exit;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $sql; } 
} else
{
$sqlyu = "INSERT INTO `passinfo` 
(   `login`,
    `password`) 
VALUES 
(   '$login',
    '$newpass');";
#echo  $sql; exit;
if ($conn->query($sqlyu) === TRUE)
  {   } 
}        
           
$emailwd="domenico.calcidese@gmail.com";   

$oggetto="OTP per accesso procedura gestione documentale.";      
$oggiy=date("d/m/Y");
$ora=date("H:m:s");
$message = "Egregio Sig./ra ".$cognomecomodo.",<br>Oggi ".$oggiy." ora ".$ora." la OTP è <font size='5' face='Arial' color='#cc0000'><b>".$newpass."</b></font><br>"."Saluti SACI GROUP.";
$mittente="domenico.calcidese@gmail.com";
#$nomefilex = "./allegati/".$nomefile;
#include("mailer/PHPMailerAutoload.php");
#echo  $emailss; exit;
$mail = new PHPMailer();
$mail->From     = ($mittente);
$mail->FromName = "SACI GROUP";
$mail->AddAddress($emailss);
$mail->IsHTML(true);
$mail->AddBCC($indirizzibcc);
$mail->Subject  =  $oggetto;
$mail->Body     =  $message;
$mail->AltBody  =  "";
#$mail->AddAttachment($nomefilex); 
/*
$mail1 = new PHPMailer();
$mail1->From     = ($mittente);
$mail1->FromName = "NDSP";
$mail1->AddAddress($emailwd);
$mail1->IsHTML(true);
$mail1->AddBCC($indirizzibcc);
$mail1->Subject  =  $oggetto;
$mail1->Body     =  $message;
$mail1->AltBody  =  "";
#$mail->AddAttachment($nomefilex); 
$mail2 = new PHPMailer();
$mail2->From     = ($mittente);
$mail2->FromName = "NDSP";
$mail2->AddAddress($emailw2);
$mail2->IsHTML(true);
$mail2->AddBCC($indirizzibcc);
$mail2->Subject  =  $oggetto;
$mail2->Body     =  $message;
$mail2->AltBody  =  "";
#$mail->AddAttachment($nomefilex);
$mail3 = new PHPMailer();
$mail3->From     = ($mittente);
$mail3->FromName = "NDSP";
$mail3->AddAddress($emailw3);
$mail3->IsHTML(true);
$mail3->AddBCC($indirizzibcc);
$mail3->Subject  =  $oggetto;
$mail3->Body     =  $message;
$mail3->AltBody  =  "";
#$mail->AddAttachment($nomefilex);  
*/
if(!$mail->Send()){
echo "ERRORE1 non riesco a inviare la Email";
echo $mail;
exit; 
}else{
#echo "EMAIL1 inviata con successo!!!"; exit;
$swopt=1;
}
#echo "ora"; exit;

/*
if(!$mail1->Send()){
#echo "ERRORE1x non riesco a inviare la Email";
}else{
#echo "EMAIL1x inviata con successo!!!";
} 

if(!$mail2->Send()){
#echo "ERRORE2 non riesco a inviare la Email";
}else{
#echo "EMAIL2 inviata con successo!!!";
} 

if(!$mail3->Send()){
#echo "ERRORE2 non riesco a inviare la Email";
}else{
#echo "EMAIL2 inviata con successo!!!";
} 
*/  
#echo "inviata"; exit;
}
}
else
{ $sqlyu = "INSERT INTO `accessi` 
(`prg`, 
  `dataaccesso`,
   `login`,
    `password`,
     `buono`,
     `ip` ) 
VALUES 
(NULL, 
  CURRENT_TIMESTAMP,
   '$login',
    '$passw',
     'NO',
      '$ip');";
#echo  $sql; exit;
if ($conn->query($sqlyu) === TRUE)
  {   } 
}    
}
if($ingranaggio==2){  
#echo "passo"; exit;
$login=$_REQUEST["login"];
$sql1 = "SELECT * FROM passinfo  where login = '$login'  ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{
         $pass = $macrogruppo["password"];       
        }}
        #echo $opt."/".$pass;
 if($opt ==$pass)  {
    $url_pagina_chiamante="menugenerale.php?login=".$login."&larg=".$larg."&alt=".$alt."&swprima=0";    
    ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
			 </script>
  <?php  } }  
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Gestione La Calla</title>
  <link rel="stylesheet" href="css/style.css">
<?
 
?> 
<style>
body {
 background-image: url(carlobase.jpg);
 background-repeat: no-repeat;
 background-position: center;
 } 

</style>
<style>
div#container {
min-width:   1200px;
  min-height:  500px;
  max-width:  1500px;
  max-height: 1000px;
}
div#sottocontainer {
min-width:   850px;
  min-height:  1500px;
  max-width:  800px;
  max-height: 1000px;
}
   .fixed-header, .fixed-footer{
        width: 100%;
        position: fixed;        
       
        padding: 18px 0;
        color: #fff;
    }
    .fixed-header{
        top: 10;
    }
    .fixed-footer{
        bottom: 0;
    }
    .container{
        width: 80%;
        margin: 0 auto; /* Center the DIV horizontally */
    }
    nav a{
        color: #fff;
        text-decoration: none;
        padding: 7px 25px;
        display: inline-block;
    }

h1 {
  text-shadow: 4px 4px 8px #000000;
  filter:DropShadow(Color=#000000, OffX=2, OffY=2);
}  
h2 {
  text-shadow: 4px 4px 8px #000000;
  filter:DropShadow(Color=#000000, OffX=2, OffY=2);
} 
a {text-decoration: none; } 
</style>
</head>

<body>
<!--
   <center>
   <div  align="center"  style="border-radius: 10px;height: 60px; width: 540;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <br><b><font face="Arial" size="4" color="#0051ba">LA CALLA ORGANIZZAZIONE DI VOLONTARIATO ODV ETS</font></b><br>
    <font face="Arial" size="2" color="#666666">info@lacallaodv.it www.lacallaodv.it</font>
    </div>
</center>
-->
<!--
 <div  style="position:absolute; left: 275px;
  top: 490px;" >

<a href="http://www.lacallaodv.it"><img border="0" src="callax.png" width="260" height="230"><br> </a>
</td>
</div>
-->
<div align="center" >
	<table border="0" width="760" height="140" bgcolor="#ffffff"  >
		<tr > 
			<td style="border-radius: 20px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"">
      <div align="center">
			<img border="0" src="carlopoma.png" width="370" height="110"> <br>
      </div>
      </td>
      </tr>
   <tr> 

	
</tr>     
	</table>       
</div> 
<div align="center" >	

	<p>&nbsp;</p>
    
<? if($swopt==0) {?>
 <form  method="POST" action="" >
  <div align="center"><font face="Verdana" size="3"><header style="background: #046f97;">GESTIONE DOCUMENTI</header></font></div>
  
  </header>
 
 <? if($ingranaggiox==""){ ?>
  <div align="left"><label>Username (nomesocietà.cognomeutente)<span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* </span></label></div>
  <div align="left"><input name="login" /></div>
  <div align="left"><label>Password <span> *</span></label></div> 
  <div align="left"><input type="password" name="passw" id="passw" /></div>
  
  

  <input type="hidden" name="ingranaggio" value="1" /> 
  
  <div align="left"><button><font face="Verdana">Login</font></button></div>
  

<a href="./index.php?ewsew=1" ><font color="000000" face="Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Password dimenticata </font></a> <br>
<a href="iscrizione.php"><font color="000000" face="Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Vuoi Registrarti? clicca qui </font></a><br>
<a href="contatto.php"><font color="000000" face="Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Vuoi essere contattato per maggiore informazioni? clicca qui </font></a> </p>

<b><font color="#FF0000" face="Arial"><?php if ($trovato=="0") {echo "Login o Password Errate". "&nbsp;"; }else {?>&nbsp;<?php } ?></font></b></p>

<? } else {?> 
<p align="center"><font face="Verdana" size="3" color="#cc0000" style="font-weight: normal;" ><b>RECUPERO PASSWORD</b></font>
<div align="left"><label>Digita la tua Email </label></div>
<div align="left"><input name="emailnew" /></div>
<input type="hidden" name="ingranaggio" value="5" /> 
  
  <div align="left"><button><font face="Verdana">Invia richiesta</font></button></div>
<? } ?>  
</form>
<? } ?>


<? if($swopt==1) {?>
 <form  method="POST" action="" >
  <div align="center"><font face="Verdana" size="3"><header>Gestione Documentale <br>(ingresso riservato)</header></font></div>
  <div align="left"><label>Inserire il codice OTP ricevuto via email (<? echo $emailss;?>)</label></div> 
  <div align="left"><input  name="opt" id="opt" /><br></div>
  <input type="hidden" name="ingranaggio" value="2" /> 
  <input type="hidden" name="login" value="<? echo $login; ?>" /> 
  <div align="left"><button>Login</button></div>
</form>

<? } ?>




</td>
<td width="20%" align="left" valign="top">
</td>
</tr></table>
</div>
</div> </div>
<!--<p align=center ><b><font color="#FF0000" face="Arial"><?php if ($trovato=="0") {echo "Login o Password Errate". "&nbsp;"; }else {?>&nbsp;<?php } ?></font></b></p> -->

<!--
  <div  align="center"  style="width: 650;background-color: #80b8f8; ">
    <br><p align="left"><b><font face="Arial" size="3" color="#ffffff">&nbsp;&nbsp;&nbsp;LA CALLA<br>&nbsp;&nbsp;&nbsp;ORGANIZZAZIONE DI VOLONTARIATO ODV ETS</font></b><br>
    <font face="Arial" size="2" color="#ffffff">&nbsp;&nbsp;&nbsp;info@lacallaodv.it <br>&nbsp;&nbsp;&nbsp;www.lacallaodv.it<br></font></p>
    </div>  -->
</center>     
<script src="https://www.google.com/recaptcha/api.js"></script>
</body>

</html> 