<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="inizio.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
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
<title>abacus apertura ticket</title> 
</head>
<style>
div#container {
min-width:   1000px;
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
border: 8px solid #476b5d;
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

$login=$_REQUEST["login"];
$ingranaggio=$_REQUEST["ingranaggio"];
$erroreriferimento="";
if ($ingranaggio==1)
   {
   
# memorizza immaggine   
$uploadOk = 1;
$cliente=$_SESSION["SPICLIENTLOGGED"];
$nomefile=basename($_FILES["fileToUpload"]["name"]);
if ($nomefile!="") {
$target_dir = "ticket/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$nomefile=basename($_FILES["fileToUpload"]["name"]);
$nomefile1=basename($_FILES["fileToUpload1"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if ($_FILES["fileToUpload"]["size"] > 1000000000) {
    echo "ATTENZIONE FILE TROPPO GRANDE.</font></b>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "pdf" && $imageFileType != "docx"  && $imageFileType != "txt" && $imageFileType != "csv"   && $imageFileType != "xlsx"
&& $imageFileType != "gif" ) {
    echo "<b><font color='#FF0000'> FILE NON DI TIPO  JPG, PDF, PNG, GIF, DOCX, TXT, CSV, XLSX QUINDI </font></b>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<b><font color='#FF0000'> OPERAZIONE ABORTITA.</font></b>";
// if everything is ok, try to upload file
} else {

$sql1 = "SELECT * FROM progressivofilet  where progr = '1' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $tesseraww = $macrogruppo["numero"];	 
			} }
$tesseraww++;
$sql = "UPDATE progressivofilet set 
numero = '$tesseraww'
where 
progr = '1' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 
    $estensione=explode(".",$nomefile);
$newfile=$tessera."-".$tesseraww.".".$estensione[1];
$target_dire = "ticket/";

$target_filee = $target_dire . $newfile;


    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_filee)) {
        #echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

}   
} 
}  
# fine memorizza immagine   
   
   
   
   
   
   
$sql1 = "SELECT * FROM progressivoticketseg  where progr = '1' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $tessera = $macrogruppo["tessera"];	 
			} }
$tessera++;
$sql = "UPDATE progressivoticketseg set 
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
   login,
   allegato,
   procedura,
   operatore 
   ) 
   VALUES (
   '$tessera',
   '$argomento',  
   '$descrizione',
   '$oggi',
   '$login',
   '$newfile',
   'ALLGEST-T',
   'AMMINISTRATORE')";
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
            
# invia email 
#carlo.deangelis@sacigroup.it

$emailwd=$opemail;            
 // definisco mittente e destinatario della mail 
$nome_mittente = "SACI GROUP";
$mail_mittente = "info@sacigroup.it";
$mail_destinatario = $emailwd;

// definisco il subject ed il body della mail
$mail_oggetto = "Richiesta apertura Segnalazione.";
$aggiunta = "da: "." ALLGEST-P ".$login." ha aperto una segnalazione numero ".$tessera." con argomento: ".$argomento." descrizione peroblema: ".$descrizione."\n Per accedere: https://www.easysw.it/cruscottoticket.php?ingranaggio=200&codice=".$codice."&operatore=AMMINISTRATORE";
$mail_corpo = $aggiunta."\r\n Cordiali saluti SACI GROUP";


// aggiusto un po' le intestazioni della mail
// E' in questa sezione che deve essere definito il mittente (From)
// ed altri eventuali valori come Cc, Bcc, ReplyTo e X-Mailer
$mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
$mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
$mail_headers .= "X-Mailer: PHP/" . phpversion();


if (mail("enrico.conforti@sacigroup.it", $mail_oggetto, $mail_corpo, $mail_headers))
{  #echo "Messaggio inviato con successo a " . $mail_destinatario; 

}
else
  { "Errore. Nessun messaggio inviato."; }
if (mail("carlo.deangelis@sacigroup.it", $mail_oggetto, $mail_corpo, $mail_headers))
{  #echo "Messaggio inviato con successo a " . $mail_destinatario; 

}
else
  { "Errore. Nessun messaggio inviato."; }            
/*          
            
include("mailer/PHPMailerAutoload.php");              
#$emailwd="domenico.calcidese@gmail.com"; 
$emailwd="calcidese.domenico@gmail.com";   
$oggetto="Richiesta apertura Segnalazione.";      
$oggiy=date("d/m/Y");
$ora=date("H:m:s");
$message = "da: "." ALLGEST-P ".$login." ha aperto una segnalazione <font face='Arial' size='5' color='#cc0000'>".$tessera."</font><br><b> con argomento: </b><font face='Arial' size='4' color='#0d5019'>".$argomento."</font><br><b> descrizione peroblema:</b><font face='Arial' size='4' color='#0d5019'> ".$descrizione."</font><br>Per accedere: https://www.easysw.it/cruscottoticket.php?ingranaggio=200&codice=".$codice."&operatore=AMMINISTRATORE";
$mittente="calcidese.domenico@gmail.com";
#$nomefilex = "./allegati/".$nomefile;
#include("mailer/PHPMailerAutoload.php");
#echo  $emailss; exit;
$mail = new PHPMailer();
$mail->From     = ($email);
$mail->FromName = "UTENTE ALLGEST-T";
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
*/  /*
if(!$mail->Send()){
echo "ERRORE1 non riesco a inviare la Email";
echo $mail;
exit; 
}else{
#echo $emailwd."EMAIL1 inviata con successo!!!"; exit;
$swopt=1;
}
*/
$erroreriferimento="SEGNALAZIONE INVIATA CORRETTAMENTE";
$ingranaggio="";
   }
   




?>
<body>

<div align="center" >

<br>      
</div> 
<div align="center">   
<div id="container">
<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data">
<p align="center"><b><font face="Arial" size="4" color="#476b5d">RICHIESTA DI ASSISTENZA</font></b><br>
<b><font face="Arial" size="5" color="#476b5d">APERTURA NUOVA SEGNALAZIONE</font></b></p>

<p align="center"><b><font face="Arial" size="5" color="#FF0000"><?php echo $erroreriferimento; ?></font></b></p>
<table border="1" width="100%" bgcolor="#FFF4F7" class="table6">
	<tr>
		<td>
		<table border="1" width="100%">		
      <tr>
				<td ><font face="Arial" color="#003300">- ARGOMENTO</font></td>
				<td>				
					<p>
					<textarea style="background-color: #ececee;font-size: 14pt;" name="argomento"  cols="70" rows="3"><?php echo $argomento; ?></textarea>
					</p>
				</td>			
				</tr>  
	 <tr>
				<td ><font face="Arial" color="#003300">- DESCRIZIONE PROBLEMA</font></td>
				<td>				
					<p>
					<textarea width="100%" style="background-color: #ececee;font-size: 14pt;" name="descrizione"  cols="70" rows="10"><?php echo $descrizione; ?></textarea>	</p>
				</td>			
				</tr>  	
	
		<tr>
		<td>
       <font face="Arial" color="#003300">CARICA ALLEGATO: </font>
       </td>
			  <td align="left" ><font size="2" face="Arial">
              <input type="file" name="fileToUpload" id="fileToUpload" size="50" style="font-size: 12pt; font-weight: normal; background-color: #ffffff;"><font color="#000000">		
		      </td>      
       <input type="hidden" name="ingranaggio" value="1" />
       <input type="hidden" name="login" value="<?php echo $login; ?>" />
       <input type="hidden" name="zona" value="<?php echo $zona; ?>" />
			<tr>
				<td width="237">&nbsp;</td>
				<td><input type="submit" value="Invia Segnalazione" name="B3"><input type="reset" value="Reset" name="B4"></td>
			</tr>
		</table>
		</td>
	</tr>
</table>
<p>&nbsp;</p>
</form>


</div>
</div>
</body>

</html>