<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="pomaindex.php";  ?>
    <script>
		top.window.location='<?php echo $url_pagina_chiamante; ?>';
		</script>
<?php
}
$login=$_REQUEST["login"];
$zona=$_REQUEST["zona"];
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>menu' ticket</title> 
</head>
<style>
div#container {
min-width:   900px;
  min-height:  500px;
  max-width:  700px;
  max-height: 1000px;
}
</style>
<style>
a 
{
    text-decoration: none; 
    font-weight: normal;
    color: #000000
}
 
a:hover
{
    color: #0080FF;
}
</style>
<style>
.table4 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
background: #ECE9E0;
color: #656665;
border: 16px solid #5197FF;
border-radius: 20px;
}
.table4 th {
font-size: 18px;
padding: 10px;
}
.table4 td {
background: #B3B3D0;
padding: 5px;

}

.table5 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
background: #ECE9E0;
color: #656665;
border: 16px solid #9B9B9B;
border-radius: 20px;
}
.table5 th {
font-size: 18px;
padding: 10px;
}
.table5 td {
background: #8888B3;
padding: 5px;
}
.table6 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
background: #ffffff;
color: #656665;
border: 16px solid #B2CAEA;
border-radius: 20px;
}
.table6 th {
font-size: 18px;
padding: 10px;
}

.table7 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
background: #ECE9E0;
color: #656665;
border: 16px solid #FF9900;
border-radius: 20px;
}
.table7 th {
font-size: 18px;
padding: 10px;
}
.table7 td {
background: #FFD393;
padding: 5px;
}
.table8 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
background: #ECE9E0;
color: #656665;
border: 16px solid #006600;
border-radius: 20px;
}
.table8 th {
font-size: 18px;
padding: 10px;
}
.table8 td {
background: #97FF97;
padding: 5px;
}
.table9 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
background: #ECE9E0;
color: #656665;
border: 16px solid #0066FF;
border-radius: 20px;
}
.table9 th {
font-size: 18px;
padding: 10px;
}
.table9 td {
background: #AECEFF;
padding: 5px;
}
</style>
<style>
table, th, td {
    border: 0px solid black;    
}
</style>
<style>
tr {
  background-image: url("btn1.gif");
}
 
tr:hover {
    background-image: url("back-barra-menuorrizontale1.gif");
}
</style>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;1,100&display=swap');
</style>
<script type="text/javascript">
		
		function controllo(){ 
            with(document.modulo) { 
        if(argomento.value=="") { 
            alert("Error: manca ARGOMENTO"); 
            argomento.focus(); 
            return false; 
                            } 
        if(descrizione.value=="") { 
            alert("Error: manca DESCIZIONE PROBLEMA"); 
            descrizione.focus(); 
            return false; 
                            } 
                                                                   
					                                                                                                                    
                                  } 
        } 
</script>
<?php 
include "conf_DB.php";
include("mailer/PHPMailerAutoload.php");
$login=$_REQUEST["login"];

$sql1 = "SELECT * FROM associazione  where login = '$login'";
#echo $sql1; 
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())
		{ 
      
      $logink = $macrogruppo["loginorig"];
      #echo $logink; exit;
      
			}  }
$ingranaggio=$_REQUEST["ingranaggio"];
$erroreriferimento="";
if ($ingranaggio==1)
   {
$sql1 = "SELECT * FROM progressivoticket  where progr = '1' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $tessera = $macrogruppo["tessera"];	 
			} }
$tessera++;
$sql = "UPDATE progressivoticket set 
tessera = '$tessera'
where 
progr = '1' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; }   
$descrizione=$_REQUEST["descrizione"];
$descrizione=str_replace("'", "\'", $descrizione);
$argomento=$_REQUEST["argomento"];
$argomento=str_replace("'", "\'", $argomento);  
$oggi=date("Y-m-d H:m:s");
   $sql = "INSERT INTO `ticket`(
   `codice`,
   argomento, 
   `descrizione`,
   dataora,
   login 
   ) 
   VALUES (
   '$tessera',
   '$argomento',  
   '$descrizione',
   '$oggi',
   '$login')";
  # echo $sql; exit;
if ($conn->query($sql) === FALSE) 
    {
    $erroreriferimento="errore inserimento ticket";
    } 
    else
     {}
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
      $btempo = $macrogruppo["btempo"];
      $donazioni = $macrogruppo["donazioni"]; 
       
			}  }     
$emailwd="domenico.calcidese@gmail.com";   
$oggetto="Richiesta apertura Ticket.";      
$oggiy=date("d/m/Y");
$ora=date("H:m:s");
$message = "da: ".$login." ha aperto il ticket <font face='Arial' size='5' color='#cc0000'>".$tessera."</font><br><b> con argomento: </b><font face='Arial' size='4' color='#0d5019'>".$argomento."</font><br><b> descrizione peroblema:</b><font face='Arial' size='4' color='#0d5019'> ".$descrizione."</font>";
$mittente="info@la-calla.it";
#$nomefilex = "./allegati/".$nomefile;
#include("mailer/PHPMailerAutoload.php");
#echo  $emailss; exit;
$mail = new PHPMailer();
$mail->From     = ($email);
$mail->FromName = "UTENTE ABACUSCALLA";
$mail->AddAddress($emailwd);
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
     $url_pagina_chiamante="menugenerale.php?login=".$login."&zona=".$zona."&codice=2";?>
    <script>
		top.window.location='<?php  echo $url_pagina_chiamante; ?>';
		</script> 
    <?php
   }
   




?>
<body>

<div align="center" >
<table border="0" width="760" height="140" bgcolor="#ffffff"  >
<tr > 
<?php include "mettilogo.php"; ?>
</tr> 
<tr> 
<td bgcolor="#FFFFFF" style="border: 0px ; "><a href="menugenerale.php?login=<?php echo $login; ?>&codice=1"><font face="Montserrat">Menu Generale</font></a></td>             
<?php
$sql1 = "SELECT * FROM utenti  where login = '$login'  ";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{$codvolontario = $macrogruppo["codvolontario"];
     $dio = $macrogruppo["dio"];
     $cognomevol = $macrogruppo["cognome"];
     $nomevol = $macrogruppo["nome"];
    } }
if($dio=="1"){$dicidio="amm.";}else{$dicidio="utente";}
?>           
<td bgcolor="#FFFFFF" align="right" style="border: 0px ; "><font face="Montserrat"><?php echo $codvolontario." - ".$cognomevol." ".$nomevol." - ".$dicidio; ?></font></td>         
</tr>
</table> 
     
<br>      
</div> 
<div align="center">   
<div id="container">
<form method="POST" action="" name="modulo" onSubmit="return controllo();">
<p align="center"><b><font face="Arial" size="5" color="#993300">RICHIESTA DI ASSISTENZA</font></b></p>

<p align="center"><b><font face="Arial" size="6" color="#FF0000"><?php echo $erroreriferimento; ?></font></b></p>
<table>
<tr>
<td>
<table>
<tr>
<td>
<table border="1" width="60" height="60" cellspacing="0" cellpadding="0" class="table6"> 
<tr valign="top">
<td  bgcolor="#FFFFFF">
<p align="center">					
<a href="apritic.php?login=<?php echo $login."&tic=1"; ?>">
<img src="apritic.png" width="130" height="120"></a></p>   
</td>
</tr>
</table>
</td>
</tr>
<tr>

<td>
<center>
<font face="Arial" size="3" color="#888b89"><b>Apertura Nuovo Ticket</b></font>
</center>
</td>
</tr>
</table>
</td>
<td>
<table>
<tr>
<td>
<table border="1" width="60" height="60" cellspacing="0" cellpadding="0" class="table6">  
<tr valign="top">
<td  bgcolor="#FFFFFF">
<p align="center">					
<a href="statotic.php?login=<?php echo $login."&tic=2"; ?>">
<img src="statotic.png" width="130" height="120"></a></p>     
</td></tr>
</table>
</td>
</tr>
<tr>
<td>
<?php
$totsto=0;
$sql1 = "select * from ticket  where stato = 'APERTO' and procedura = '$logink' order by dataora";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ 
      $dataora = $macrogruppo["dataora"];
      $argomento = $macrogruppo["argomento"];
      $descrizione = $macrogruppo["descrizione"];
      $stato = $macrogruppo["stato"];
      $lavorazione = $macrogruppo["lavorazione"];
      $datachiusura = $macrogruppo["datachiusura"];	
      $totsto++;}}
?>
<center>
<font face="Arial" size="3" color="#888b89"><b> Ticket Aperti </font><font face="Arial" size="4" color="#cc0000"><?php echo $totsto; ?></b></font>
</center>
</td>
</tr>
</table>
</td>
<td>
<table>
<tr>
<td>
<table border="1" width="60" height="60" cellspacing="0" cellpadding="0" class="table6">  
<tr valign="top">
<td  bgcolor="#FFFFFF">
<p align="center">					
<a href="storicotic.php?login=<?php echo $login."&tic=3"; ?>">
<img src="storicotic.png" width="130" height="120"></a></p>     
</td></tr>
</table>
</td>
</tr>
<tr>
<td>
<?php
$totsto=0;
$sql1 = "select * from ticket  where stato = 'CHIUSO' and procedura = '$logink' order by dataora";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ 
      $dataora = $macrogruppo["dataora"];
      $argomento = $macrogruppo["argomento"];
      $descrizione = $macrogruppo["descrizione"];
      $stato = $macrogruppo["stato"];
      $lavorazione = $macrogruppo["lavorazione"];
      $datachiusura = $macrogruppo["datachiusura"];	
      $totsto++;}}
?>
<center>
<font face="Arial" size="3" color="#888b89"><b>Storico Ticket </font><font face="Arial" size="4" color="#cc0000"><?php echo $totsto; ?></b></font>
</center>
</td>
</tr>
</table>
</td>
</tr>
</table>
<!--END OF EDIT-->
</div>

		
<p>&nbsp;</p>
</form>


</div>
</div>
</body>

</html>