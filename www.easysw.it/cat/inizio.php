<?php 
#echo "passo"; exit;
session_start(); if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){ $larg= $_SESSION['screen_width'] ; $alt= $_SESSION['screen_height']; } else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) { $_SESSION['screen_width'] = $_REQUEST['width']; $_SESSION['screen_height'] = $_REQUEST['height']; header('Location: ' . $_SERVER['PHP_SELF']); } else { echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width+"&height="+screen.height;</script>'; } 
$larg=$_REQUEST["larg"];
#echo $larg;
$alt=$_REQUEST["alt"];
$perczoom=$larg/1280;
$perczoom=$perczoom*80;

#echo $perczoom; 
$altezza="689px";$larghezza="1280px";
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
$aggiunta="	<font face='Montserrat' size='4' color='black' >Spett.le Società ".$intesta1." ".$intesta2." ".$indirizzo." ".$localita." email ".$email.", le credenziali per accedere alla Gestione Documentale sono:"."<br>";
$message = $aggiunta."Il link: ".
"https://www.easysw.it/doc"."<br><br>".
"Username=".$loginxx."<br>".
"Password=".$passwordxx."<br><br>".
"Cordiali saluti.<br><br><br><br></font><font face='Montserrat' size='3' color='black' >SACI GROUP Srl<br>CF 93050770150<br>Web: www.?????.it<br>Email: info@???????.it<br>La presente e-mail e` stata generata automaticamente da un indirizzo di posta elettronica di solo invio; si chiede pertanto di non rispondere al messaggio.";
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


$sql1 = "SELECT * FROM cat  where oplogin = '$login' and oppassword = '$passw' ";
#echo $sql1;  exit;
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{ $trovato=1;
         #echo $trovato; exit;
          #$dio = $macrogruppo["dio"];
          $emailw = $macrogruppo["email"];
          $cognome = $macrogruppo["opcognome"];
          $nome = $macrogruppo["opnome"];	
#echo "passo";  exit;          
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
#echo $login.$passw; exit; 

 
if ($trovato==1)
{ 
#echo "passo";  exit;
setcookie("POMACLIENTLOGGED",$login,time()+86400,"/");
$newpass=rand(1, 90000);  
#echo "passo1";
$url_pagina_chiamante="menugenerale.php?login=".$login."&larg=".$larg."&alt=".$alt."&swprima=0";    
?>
<script>
top.window.location='<? echo $url_pagina_chiamante; ?>';
</script>
<?php            
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
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Operation</title>
  <link rel="stylesheet" href="css/style.css">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
<?
 
?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;1,100&display=swap');
</style>   
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
<style>
body {
  font-family: Montserrat,Montserrat,courier, serif;
}
</style>








</head>

<body onload="updateImage();" style="background-color: #ffffff; zoom: <? echo $perczoom; ?>%" >
<!--
   <center>
   <div  align="center"  style="border-radius: 10px;height: 60px; width: 540;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <br><b><font face="Montserrat" size="4" color="#0051ba">LA CALLA ORGANIZZAZIONE DI VOLONTARIATO ODV ETS</font></b><br>
    <font face="Montserrat" size="2" color="#666666">info@lacallaodv.it www.lacallaodv.it</font>
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
<style>
    .navbar-top {
        clear:both;
        height:100px;
        margin:5px 0 50px;
    }
    .navbar-top .navbar-logo{
        background-color: #afc81b;
        width: 100%;
        height: 100px;
    }
    .navbar-top .logout-header{
        float:right;
        font-size: 16px;
        color:#FFFFFF;
        font-weight: 400;
        margin-right: 45px 10px;
        padding: 10px;
    }
    .navbar-top .logout-header a{
        font-size: 16px;
        color:#FFFFFF;
        font-weight: 400;
    }
    .navbar-top .image-navbar{
        background-color:#FFFFFF;
        padding: 10px;
        float:left;
        width: 275px;
    }
  </style>
<div class="navbar-top">
    <div class="navbar-logo">
		<div class="image-navbar">
            <img src="ticketing2.png"  height="80" >
        </div>
        <div class="logout-header"> 
              
            
        </div>   
    </div>  
</div>

<div align="center" >	

    
<? if($swopt==0) {?>

 <? if($ingranaggiox==""){ ?>
<table width="100%">

<td width="30%" align="center" valign="top">
 <form  method="POST" action="" style="width: 33%;">
  <div align="center"><font face="Montserrat" size="3"><header style="background: #476b5d;">CENTO ASSISTENZA TECNICA<br>AUTENTIFICAZIONE</header></font></div>
  
  </header>
<div align="center"> 


  <div align="left"><label><font face="Montserrat">Username<span> &nbsp;&nbsp;&nbsp;* </span></font></label></div>
  <div align="left"><input name="login" /></div>
  <div align="left"><label> <font face="Montserrat">Password <span> &nbsp;&nbsp;*</span></font></label></div> 
  <div align="left"><input type="password" name="passw" id="passw" /></div>
  
  

  <input type="hidden" name="ingranaggio" value="1" /> 
  
  <div align="left"><button style="background: #afc81b;color: #ffffff;"><font face="Montserrat">Login</font></button></div>
  

<a href="?ewsew=1" ><font color="000000" face="Montserrat">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Password dimenticata </font></a> <br>


<b><font color="#FF0000" face="Montserrat"><?php if ($trovato=="0") {echo "Login o Password Errate". "&nbsp;"; }else {?>&nbsp;<?php } ?></font></b></p>
</td>
</tr>
</table> 
<?php } else { ?> 
<form  method="POST" action="" style="width: 33%;">
<div align="center"><font face="Montserrat" size="3"><header style="background: #476b5d;">AUTENTIFICAZIONE</header></font></div>
  
  </header>
<div align="center"> 
<p align="center"><font face="Verdana" size="3" color="#cc0000" style="font-weight: normal;" ><b>RECUPERO PASSWORD</b></font>
<div align="left"><label>Digita la tua Email </label></div>
<div align="left"><input name="emailnew" /></div>
<input type="hidden" name="ingranaggio" value="5" /> 
  
  <div align="left"><button><font face="Verdana">Invia richiesta</font></button></div>
</form>
<?php } } ?>









</td>
<td width="20%" align="left" valign="top">
</td>
</tr></table>
</div>
</div> </div>
<!--<p align=center ><b><font color="#FF0000" face="Montserrat"><?php if ($trovato=="0") {echo "Login o Password Errate". "&nbsp;"; }else {?>&nbsp;<?php } ?></font></b></p> -->

<!--
  <div  align="center"  style="width: 650;background-color: #80b8f8; ">
    <br><p align="left"><b><font face="Montserrat" size="3" color="#ffffff">&nbsp;&nbsp;&nbsp;LA CALLA<br>&nbsp;&nbsp;&nbsp;ORGANIZZAZIONE DI VOLONTARIATO ODV ETS</font></b><br>
    <font face="Montserrat" size="2" color="#ffffff">&nbsp;&nbsp;&nbsp;info@lacallaodv.it <br>&nbsp;&nbsp;&nbsp;www.lacallaodv.it<br></font></p>
    </div>  -->
</center>     
<script src="https://www.google.com/recaptcha/api.js"></script>
</body>

</html> 