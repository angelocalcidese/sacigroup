<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="index.php";  ?>
   <script>
	top.window.location='<? echo $url_pagina_chiamante; ?>';
	</script>
<?php  }
$login=$_REQUEST["login"];
$zona=$_REQUEST["zona"];
$tessera=$_REQUEST["tessera"];
$ingranaggio = $_REQUEST["ingranaggio"];   
$mittente = $_REQUEST["mittente"];  
$messaggio="";
#echo "ingr ".$ingranaggio; 
include "conf_DB.php";
#require 'mailer/PHPMailerAutoload.php';
$sql1 = "SELECT * FROM socivolontari  where tessera = '$tessera' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())                  
		{ 
      $tessera = $macrogruppo["tessera"];	
      $cognome = $macrogruppo["cognome"];
      #echo " nome ".$nome;
      $nome = $macrogruppo["nome"];
      $datanascita = $macrogruppo["data_nascita"];
      $data_iscrizione = $macrogruppo["data_iscrizione"];
      #echo "data".$data_iscrizione;
     
      
      $resvia = $macrogruppo["indirizzo"];
      $rescitta = $macrogruppo["localita_residenza"];
      
      $cap = $macrogruppo["cap"];
      $telefono = $macrogruppo["telefono"];
      $emailw = $macrogruppo["email"];
     
      $data_iscrizione = $macrogruppo["data_iscrizione"];
     
      $sesso = $macrogruppo["sesso"];
      $lun = $macrogruppo["lun"];
      $mar = $macrogruppo["mar"];
      $mer = $macrogruppo["mer"];
      $gio= $macrogruppo["gio"];
      $ven = $macrogruppo["ven"];
      $dom = $macrogruppo["dom"];
      $professione = $macrogruppo["professione"];
      $competenze = $macrogruppo["competenze"];
      $frequenza = $macrogruppo["frequenza"];
      $emergenze = $macrogruppo["emergenze"];
      $referente = $macrogruppo["referente"];
      $membro = $macrogruppo["membro"];
      $mensa = $macrogruppo["mensa"];
      $guardaroba = $macrogruppo["guardaroba"];
      $tesseramento = $macrogruppo["tesseramento"];
      $varie = $macrogruppo["varie"];
      $saputo = $macrogruppo["saputo"];
         $status = $macrogruppo["status"];
      
      $lung = $macrogruppo["lung"];
      $marg = $macrogruppo["marg"];
      $merg = $macrogruppo["merg"];
      $giog = $macrogruppo["giog"];
      $veng = $macrogruppo["veng"];
      $domg = $macrogruppo["domg"];
      
      $lunt = $macrogruppo["lunt"];
      $mart = $macrogruppo["mart"];
      $mert = $macrogruppo["mert"];
      $giot = $macrogruppo["giot"];
      $vent = $macrogruppo["vent"];
      $domt = $macrogruppo["domt"];
      
      $luna = $macrogruppo["luna"];
      $mara = $macrogruppo["mara"];
      $mera = $macrogruppo["mera"];
      $gioa = $macrogruppo["gioa"];
      $vena = $macrogruppo["vena"];
      $doma = $macrogruppo["doma"];
      
      $luns = $macrogruppo["luns"];
      $mars = $macrogruppo["mars"];
      $mers = $macrogruppo["mers"];
      $gios = $macrogruppo["gios"];
      $vens = $macrogruppo["vens"];
      $doms = $macrogruppo["doms"];
      
      $lunv = $macrogruppo["lunv"];
      $marv = $macrogruppo["marv"];
      $merv = $macrogruppo["merv"];
      $giov = $macrogruppo["giov"];
      $venv = $macrogruppo["venv"];
      $domv = $macrogruppo["domv"];
      
      $sorveglianza = $macrogruppo["sorveglianza"];
      
      $frequenzag = $macrogruppo["frequenzag"];
      $emergenzeg = $macrogruppo["emergenzeg"];
      $referenteg = $macrogruppo["referenteg"];
      $membrog = $macrogruppo["membrog"];
      
      $frequenzat = $macrogruppo["frequenzat"];
      $emergenzet = $macrogruppo["emergenzet"];
      $referentet = $macrogruppo["referentet"];
      $membrot = $macrogruppo["membrot"];
      
      $frequenzaa = $macrogruppo["frequenzaa"];
      $emergenzea = $macrogruppo["emergenzea"];
      $referentea = $macrogruppo["referentea"];
      $membroa = $macrogruppo["membroa"];
      
      $frequenzas = $macrogruppo["frequenzas"];
      $emergenzes = $macrogruppo["emergenzes"];
      $referentes = $macrogruppo["referentes"];
      $membros = $macrogruppo["membros"];
      
      $frequenzav = $macrogruppo["frequenzav"];
      $emergenzev = $macrogruppo["emergenzev"];
      $referentev = $macrogruppo["referentev"];
      $membrov = $macrogruppo["membrov"];
     }} 
 
if ($ingranaggio==2){
$oggetto = $_REQUEST["oggetto"];
$testo=$_REQUEST["testo"];
#$testo=str_replace('"', '\"', $testo);   
#$testo=str_replace("'", "\'", $testo); 
$oggetto=str_replace('"', '\"', $oggetto);   
$oggetto=str_replace("'", "\'", $oggetto); 
$classe=str_replace('"', '\"', $classe);   
$classe=str_replace("'", "\'", $classe);
#echo $testo; exit;
if ($oggetto!="")
{
if ($testo!="")
{$uploadOk = 1; 
$target_dir = "./allegati/";
 
$nomefile=basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . $nomefile; 
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
#echo "file ".$nomefile;
if ($nomefile!="") {
#echo $nomefile;
#echo $imageFileType; exit;
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "pdf" && $imageFileType != "docx"  && $imageFileType != "txt" && $imageFileType != "csv"   && $imageFileType != "xlsx"   && $imageFileType != "jpeg"  && $imageFileType != "JPEG"
&& $imageFileType != "gif" && $imageFileType != "JPG") {
    echo "<b><font color='#FF0000'> FILE NON DI TIPO  JPG, PDF, PNG, GIF, DOCX, TXT, CSV, XLSX QUINDI </font></b>";
    $uploadOk = 0;}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<b><font color='#FF0000'> OPERAZIONE ABORTITA.</font></b>";} else 
    { 
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        #echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
}
}
}
} else { echo "<script type='text/javascript'>alert('MANCA IL TESTO DELLA EMAIL');</script>"; }
} else { echo "<script type='text/javascript'>alert('MANCA IL CAMPO OGGETTO DELLA EMAIL');</script>"; exit; }


   { 
#echo "passo ".$mittente; exit;
$ingranaggio="";  





   


$message = $testo;

$nomefilex = "./allegati/".$nomefile;
include("mailer/PHPMailerAutoload.php");

$mail = new PHPMailer();
$mail->From     = ($mittente);
$mail->FromName = "OPERA MESSA DELLA CARITA'";
$mail->AddAddress($emailw);
$mail->IsHTML(true);
$mail->AddBCC($indirizzibcc);
$mail->Subject  =  $oggetto;
$mail->Body     =  $message;
$mail->AltBody  =  "";
$mail->AddAttachment($nomefilex); 


if(!$mail->Send()){
    $messaggio="ERRORE non riesco a inviare la Email"; 
}else{
    $messaggio="EMAIL inviata con successo!!!";
}
$testo=str_replace("'", "\'", $testo); 
$message = $testo;

$nomefilex = "./allegati/".$nomefile;


$mail = new PHPMailer();
$mail->From     = ($mittente);
$mail->FromName = "MESSA DELLA CARITA'";
$mail->AddAddress("domenico.calcidese@gmail.com");
$mail->IsHTML(true);
$mail->AddBCC($indirizzibcc);
$mail->Subject  =  $oggetto;
$mail->Body     =  $message;
$mail->AltBody  =  "";
$mail->AddAttachment($nomefilex); 


if(!$mail->Send()){
    $messaggio="ERRORE non riesco a inviare la Email";
}else{
    $messaggio="EMAIL inviata con successo!!!";
}
$oggi=date("d/m/Y");  
$datasel=date("Ymd"); 
$sql = "INSERT INTO 
    intervistaemail (
    zona,
    tessera,
    data,
    volontario1,
    volontario2,
    volontario3,
    volontario4,
    testo,
    login,
    datasel,
    mittente,
    oggetto,
    nomefile

    ) VALUES (
    '$zona',
    '$tessera',
    '$oggi',
    '',
    '',
    '',
    '',
    '$testo',
    '$login',
    '$datasel',
    '$mittente',
    '$oggetto',
    '$nomefile'
      
    )";
#echo $sql;  exit;   
    if ($conn->query($sql) === FALSE) 
        {        
        echo "ERRORE SCRITTURA INTERVISTA".$sql;exit;
       } 
       else
       { } 
if ($mittente=="segreteria@messadellacarita.it"){
$oggi=date("d/m/Y");  
$datasel=date("Ymd"); 
$sql = "INSERT INTO 
    intervista57 (
    zona,
    tessera,
    data,
    volontario1,
    volontario2,
    volontario3,
    volontario4,
    testo,
    login,
    datasel,
    mittente,
    oggetto,
    nomefile

    ) VALUES (
    '$zona',
    '57',
    '$oggi',
    '',
    '',
    '',
    '',
    '$testo',
    '$login',
    '$datasel',
    '$emailw',
    '$oggetto',
    '$nomefile'
      
    )";
#echo $sql;  exit;   
    if ($conn->query($sql) === FALSE) 
        {        
        echo "ERRORE SCRITTURA INTERVISTA";exit;
       } 
       else
       { }  
}             
}     
}     
     
?>

<html>
<head>

	<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
	<title>inserimento presenze volontari</title>



<style>
div#container {
min-width:   1200px;
  min-height:  500px;
  max-width:  600px;
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
.table6 td {
background: #ffffff;
padding: 2px;
}

.table7 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 2px;
background: #d9d9d8;
color: #656665;
border: 16px solid #FF9900;
border-radius: 20px;
}
.table7 th {
font-size: 18px;
padding: 10px;
}
.table7 td {
background: #fef8f0;
padding: 1px;
}
.table8 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 2px;
background: #8e918f;
color: #656665;
border: 16px solid #006600;
border-radius: 20px;
}
.table8 th {
font-size: 18px;
padding: 10px;
}
.table8 td {
background: #f5fcf7;
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
table, th, td {
  border-collapse: collapse;
}

textarea{ /* Stili per il campo di testo e per la textarea */
    background: #1C1C1C; /* Colore di sfondo */
    border: 0px solid #323232; /* Bordo */
    color: #000000; /* Colore del testo */
    font-weight: bold;
    padding: 0 10px; /* Padding */
} 
select { /* Stili per il campo di testo e per la textarea */
    background: #1C1C1C; /* Colore di sfondo */
    border: 0px solid #323232; /* Bordo */
    color: #000000; /* Colore del testo */
    height: 20px; /* Altezza */
    line-height: 20px; /* Altezza di riga */
    font-weight: bold;
    padding: 0 10px; /* Padding */
}
input[type=submit] {
    padding:2px 20px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;  }
input[type=reset] {
    padding:2px 20px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;  }    
</style>
</head>
<body>
<div align="center" >
	<table border="0" width="760" height="140" bgcolor="#ffffff"  >
		<tr > 
			<td style="border-radius: 20px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"">
      <div align="center">
			<img border="0" src="carlopoma.png" width="200" height="90"> <br>
      </div>
      </td>
      </tr>
   <tr> 

	
</tr> 
 <td bgcolor="#FFFFFF" style="border: 0px ; "><a href="javascript:close_window();">EXIT</a></td>   
   
	</table>  
      
</div> 
<div align="center">   
<div id="container">

<p align="center"><b><font face="Arial" size="5" color="#993300">INVIO EMAIL A VOLONTARIO</font></b></p>
<table  width="100%" bgcolor="#FFF4F7" class="table6">
	<tr>
		<td>
<table  width="100%" bgcolor="#FFF4F7">
	<tr>
		<td>
		<table border="1" width="100%">
     <tr>
				<td colspan="6"><font face="Arial" size="1" color="#000000">- DATA SKEDA:</font></td>
    
        </tr>  
			<tr>
      <td colspan="6"><p><input type="text" name="datask" value="<?php echo $data_iscrizione; ?>"  size="10"  style="background-color: #ececee"></p></td>
		  </tr>
      <tr>
				<td colspan="3" style="background-color: #B2CAEA"><font face="Arial" size="2" color="#ffffff" style="background-color: #B2CAEA"><b>- STATUS:</b></font></td>
       <td colspan="3" style="background-color: #B2CAEA"><select size="1" name="status"  style="background-color: #ececee; color: red">
					<option <? if($status=="ATTIVO"){echo "selected";}?>>ATTIVO</option>
          <option <? if($status=="LISTA DI ATTESA"){echo "selected";}?>>LISTA DI ATTESA</option>         
          <option <? if($status=="RISERVA"){echo "selected";}?>>RISERVA</option>
          <option <? if($status=="RITIRATO"){echo "selected";}?>>RITIRATO</option>
					</select></td> 
        </tr> 
     
      
			<tr> 
				<td colspan="3" ><font face="Arial" size="1" color="#000000" >- COGNOME:</font></td>
        <td colspan="3" ><font face="Arial" size="1" color="#000000" >- NOME:</font></td>  
        </tr>
        <tr>
				<td colspan="3" ><p><input type="text" name="cognome" value="<?php echo $cognome; ?>" size="60" style="background-color: #ececee"></p></td>				
				<td colspan="3"><p><input type="text" name="nome" value="<?php echo $nome; ?>" size="60" style="background-color: #ececee"></p></td>
			</tr>
      
      
			<tr>
				<td ><font face="Arial" size="1" color="#000000">- NATO/A IL:</font></td>
        <td colspan="2"><font face="Arial" size="1" color="#000000">- SESSO:</font></td>
        <td colspan="3"><font face="Arial" size="1" color="#000000">- INDIRIZZO:</font></td>
        <tr>
				<td><p><input type="text" name="datanascita" value="<?php echo $datanascita; ?>" size="10" style="background-color: #ececee"></p></td>			
				<td colspan="2"><select size="1" name="sesso" style="background-color: #ececee">
					<option <? if($sesso=="M"){echo "selected";}?>>M</option>
					<option <? if($sesso=="F"){echo "selected";}?>>F</option>
					</select></td>
        <td colspan=3"><p><input type="text" name="resvia" value="<?php echo $resvia; ?>" size="50" style="background-color: #ececee"></p></td>			
				</tr>
        
      <tr>
				<td colspan="3"><font face="Arial" size="1" color="#000000">- CITTA':</font></td>
        <td colspan="1"><font face="Arial" size="1" color="#000000">- CAP:</font></td>
        <td colspan="2"><font face="Arial" size="1" color="#000000">- TELEFONO:</font></td>
        </tr>  
			<tr>
      <td colspan="3"><p><input type="text" name="rescitta" value="<?php echo $rescitta; ?>"  size="60"  style="background-color: #ececee"></p></td>
		  <td colspan="1"><p><input type="text" name="cap" value="<?php echo $cap; ?>"  size="10"  style="background-color: #ececee"></p></td>	  
      <td colspan="2"><p><input type="text" name="telefono" value="<?php echo $telefono; ?>" size="20" style="background-color: #ececee"></p></td>	
			</tr>
      
     <tr>
				<td colspan="3"><font face="Arial" size="1" color="#000000">- EMAIL:</font></td>
        <td colspan="3"><font face="Arial" size="1" color="#000000">- PROFESSIONE:</font></td>
        </tr>  
			<tr>
      <td colspan="3"><p><input type="text" name="email" value="<?php echo $emailw; ?>"  size="60"  style="background-color: #ececee"></p></td>
		  <td colspan="3"><p><input type="text" name="professione" value="<?php echo $professione; ?>" size="30" style="background-color: #ececee"></p></td>	
			</tr>  
     
        <tr>
				<td colspan="3"><font face="Arial" size="1" color="#000000">- COMPETENZE:</font></td>
       
        </tr>  
			<tr>
      <td colspan="6"><p><input type="text" name="competenze" value="<?php echo $competenze; ?>"  size="60"  style="background-color: #ececee"></p></td>
		  
      </tr>  
      
      <tr>
				<td colspan="5"><font face="Arial" size="1" color="#000000">- SERVIZIO ASSEGNATO:</font></td>
 <!--       <td colspan="3"><font face="Arial" size="1" color="#000000">- GIORNO:</font></td> -->
        </tr> 
         
			<tr>
      <td colspan="1"><p><input type="checkbox" name="mensa" value="1" <? if($mensa==1){echo "checked";} ?>><b> Mensa</b><br></p></td>	      
			<td colspan="1"><p><input type="checkbox" name="membro" value="1" <? if($membro==1){echo "checked";} ?>> Membro ordinario<br></p></td>	
      <td colspan="1"><p><input type="checkbox" name="referente" value="1" <? if($referente==1){echo "checked";} ?>> Referente<br></p></td>	
      <td colspan="1"><p><input type="checkbox" name="emergenze" value="1" <? if($emergenze==1){echo "checked";} ?>> Emergenze<br></p></td>	
			<td colspan="1"><p><input type="checkbox" name="frequenza" value="1" <? if($frequenza==1){echo "checked";} ?>> Frequenza regolare<br></p></td>				
      <td><p><input type="checkbox" name="lun" value="1" <? if($lun==1){echo "checked";} ?>> Lun
      <input type="checkbox" name="mar" value="1" <? if($mar==1){echo "checked";} ?>> Mar
      <input type="checkbox" name="mer" value="1" <? if($mer==1){echo "checked";} ?>> Mer
      <input type="checkbox" name="gio" value="1" <? if($gio==1){echo "checked";} ?>> Gio
      <input type="checkbox" name="ven" value="1" <? if($ven==1){echo "checked";} ?> > Ven
      <input type="checkbox" name="dom" value="1" <? if($dom==1){echo "checked";} ?> > Dom
      </p>
      </td>			
      </tr>
       
      <tr>
      <td colspan="1"><p><input type="checkbox" name="guardaroba" value="1" <? if($guardaroba==1){echo "checked";} ?>><b> Guardaroba</b><br></p></td>					
      <td colspan="1"><p><input type="checkbox" name="membrog" value="1" <? if($membrog==1){echo "checked";} ?>> Membro ordinario<br></p></td>	
      <td colspan="1"><p><input type="checkbox" name="referenteg" value="1" <? if($referenteg==1){echo "checked";} ?>> Referente<br></p></td>	
      <td colspan="1"><p><input type="checkbox" name="emergenzeg" value="1" <? if($emergenzeg==1){echo "checked";} ?>> Emergenze<br></p></td>	
			<td colspan="1"><p><input type="checkbox" name="frequenzag" value="1" <? if($frequenzag==1){echo "checked";} ?>> Frequenza regolare<br></p></td>				
      <td>
      <p><input type="checkbox" name="lung" value="1" <? if($lung==1){echo "checked";} ?>> Lun
      <input type="checkbox" name="marg" value="1" <? if($marg==1){echo "checked";} ?>> Mar
      <input type="checkbox" name="merg" value="1" <? if($merg==1){echo "checked";} ?>> Mer
      <input type="checkbox" name="giog" value="1" <? if($giog==1){echo "checked";} ?>> Gio
      <input type="checkbox" name="veng" value="1" <? if($veng==1){echo "checked";} ?> > Ven
      <input type="checkbox" name="domg" value="1" <? if($domg==1){echo "checked";} ?> > Dom
      </p>
      </td>			
      </tr> 
      
      <tr>
      <td colspan="1"><p><input type="checkbox" name="tesseramento" value="1" <? if($tesseramento==1){echo "checked";} ?>><b> Registrazione</b><br></p></td>	
			<td colspan="1"><p><input type="checkbox" name="membrot" value="1" <? if($membrot==1){echo "checked";} ?>> Membro ordinario<br></p></td>	
      <td colspan="1"><p><input type="checkbox" name="referentet" value="1" <? if($referentet==1){echo "checked";} ?>> Referente<br></p></td>	
      <td colspan="1"><p><input type="checkbox" name="emergenzet" value="1" <? if($emergenzet==1){echo "checked";} ?>> Emergenze<br></p></td>	
			<td colspan="1"><p><input type="checkbox" name="frequenzat" value="1" <? if($frequenzat==1){echo "checked";} ?>> Frequenza regolare<br></p></td>				
      <td>
      <p><input type="checkbox" name="lunt" value="1" <? if($lunt==1){echo "checked";} ?>> Lun
      <input type="checkbox" name="mart" value="1" <? if($mart==1){echo "checked";} ?>> Mar
      <input type="checkbox" name="mert" value="1" <? if($mert==1){echo "checked";} ?>> Mer
      <input type="checkbox" name="giot" value="1" <? if($giot==1){echo "checked";} ?>> Gio
      <input type="checkbox" name="vent" value="1" <? if($vent==1){echo "checked";} ?> > Ven
      <input type="checkbox" name="domt" value="1" <? if($domt==1){echo "checked";} ?> > Dom
      </p>
      </td>			
      </tr> 
      
      <tr>
      <td colspan="1"><p><input type="checkbox" name="ascolto" value="1" <? if($ascolto==1){echo "checked";} ?>><b> Ascolto</b><br></p></td>	
			<td colspan="1"><p><input type="checkbox" name="membroa" value="1" <? if($membroa==1){echo "checked";} ?>> Membro ordinario<br></p></td>	
      <td colspan="1"><p><input type="checkbox" name="referentea" value="1" <? if($referentea==1){echo "checked";} ?>> Referente<br></p></td>	
      <td colspan="1"><p><input type="checkbox" name="emergenzea" value="1" <? if($emergenzea==1){echo "checked";} ?>> Emergenze<br></p></td>	
			<td colspan="1"><p><input type="checkbox" name="frequenzaa" value="1" <? if($frequenzaa==1){echo "checked";} ?>> Frequenza regolare<br></p></td>				
      <td>
      <p><input type="checkbox" name="luna" value="1" <? if($luna==1){echo "checked";} ?>> Lun
      <input type="checkbox" name="mara" value="1" <? if($mara==1){echo "checked";} ?>> Mar
      <input type="checkbox" name="mera" value="1" <? if($mera==1){echo "checked";} ?>> Mer
      <input type="checkbox" name="gioa" value="1" <? if($gioa==1){echo "checked";} ?>> Gio
      <input type="checkbox" name="vena" value="1" <? if($vena==1){echo "checked";} ?> > Ven
      <input type="checkbox" name="doma" value="1" <? if($doma==1){echo "checked";} ?> > Dom
      </p>
      </td>			
      </tr> 
      
      <tr>
      <td colspan="1"><p><input type="checkbox" name="sorveglianza" value="1" <? if($sorveglianza==1){echo "checked";} ?>><b> Sorveglianza</b><br></p></td>	
			<td colspan="1"><p><input type="checkbox" name="membros" value="1" <? if($membros==1){echo "checked";} ?>> Membro ordinario<br></p></td>	
      <td colspan="1"><p><input type="checkbox" name="referentes" value="1" <? if($referentes==1){echo "checked";} ?>> Referente<br></p></td>	
      <td colspan="1"><p><input type="checkbox" name="emergenzes" value="1" <? if($emergenzes==1){echo "checked";} ?>> Emergenze<br></p></td>	
			<td colspan="1"><p><input type="checkbox" name="frequenzas" value="1" <? if($frequenzas==1){echo "checked";} ?>> Frequenza regolare<br></p></td>				
      <td>
      <p><input type="checkbox" name="luns" value="1" <? if($luns==1){echo "checked";} ?>> Lun
      <input type="checkbox" name="mars" value="1" <? if($mars==1){echo "checked";} ?>> Mar
      <input type="checkbox" name="mers" value="1" <? if($mers==1){echo "checked";} ?>> Mer
      <input type="checkbox" name="gios" value="1" <? if($gios==1){echo "checked";} ?>> Gio
      <input type="checkbox" name="vens" value="1" <? if($vens==1){echo "checked";} ?> > Ven
      <input type="checkbox" name="doms" value="1" <? if($doms==1){echo "checked";} ?> > Dom
      </p>
      </td>			
      </tr> 
      
      <tr>
      <td colspan="1"><p><input type="checkbox" name="varie" value="1" <? if($varie==1){echo "checked";} ?>><b> Varie</b><br></p></td>	
      <td colspan="1"><p><input type="checkbox" name="membrov" value="1" <? if($membrov==1){echo "checked";} ?>> Membro ordinario<br></p></td>	
      <td colspan="1"><p><input type="checkbox" name="referentev" value="1" <? if($referentev==1){echo "checked";} ?>> Referente<br></p></td>	
      <td colspan="1"><p><input type="checkbox" name="emergenzev" value="1" <? if($emergenzev==1){echo "checked";} ?>> Emergenze<br></p></td>	
			<td colspan="1"><p><input type="checkbox" name="frequenzav" value="1" <? if($frequenzav==1){echo "checked";} ?>> Frequenza regolare<br></p></td>				
      <td>
      <p><input type="checkbox" name="lunv" value="1" <? if($lunv==1){echo "checked";} ?>> Lun
      <input type="checkbox" name="marv" value="1" <? if($marv==1){echo "checked";} ?>> Mar
      <input type="checkbox" name="merv" value="1" <? if($merv==1){echo "checked";} ?>> Mer
      <input type="checkbox" name="giov" value="1" <? if($giov==1){echo "checked";} ?>> Gio
      <input type="checkbox" name="venv" value="1" <? if($venv==1){echo "checked";} ?> > Ven
      <input type="checkbox" name="domv" value="1" <? if($domv==1){echo "checked";} ?> > Dom
      </p>
      </td>			
      </tr> 
      
        
      
				<td colspan="6"><font face="Arial" size="1" color="#000000">- COME SAPUTO DI NOI:</font></td>
        
        </tr>  
			<tr>
      <td colspan="6"><p><input type="text" name="saputo" value="<?php echo $saputo; ?>"  size="120"  style="background-color: #ececee"></p></td>
		  </tr>  
      <input type="hidden" name="ingranaggio" value="1" />
       <input type="hidden" name="login" value="<?php echo $login; ?>" />
<!--       
			<tr>
				
				<td colspan="6" align="center"><input type="submit" value="Modifica" name="B3"></td>
			</tr> 
-->     
		</table>
		</td>
	</tr>
</table>
		</td>
	</tr>
</table>


<p align="center"><b><font face="Arial" size="5" color="#993300">(Storia) EMAIL INVIATE A <? echo $cognome; ?></font></b></p><div align="center">   
<div id="container">

<table  width="100%" bgcolor="#FFF4F7" class="table7">

<?
$somma=0;
$sql = "SELECT *  FROM  intervistaemail where  tessera = '$tessera' order by datasel  ";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
      $vol1 = $macrogruppo["volontario1"];
      $vol2 = $macrogruppo["volontario2"]; 
      $vol3 = $macrogruppo["volontario3"];
      $vol4 = $macrogruppo["volontario4"];
      $testomem = $macrogruppo["testo"];
      $datamem = $macrogruppo["data"];
      $prg = $macrogruppo["prg"];
      $mittente = $macrogruppo["mittente"];
      $oggettox = $macrogruppo["oggetto"];
      $nomefilex = $macrogruppo["nomefile"];
?>
<tr>
<td><font size="2" face="Arial" ><b>DataNota </b></font>
             </font>   </td>
<td>

<font size="3" face="Arial" color="#f61212"><b><? echo $datamem; ?></b></font>
             </font>  
</td>
</tr>
 <tr>
<td><font size="2" face="Arial" ><b>Mittente </b></font>
             </font>   </td>
<td><font size="3" face="Arial" color="#000000"><? echo $mittente; ?></font>
             </font>  
</td>              
 </tr>
<tr>
<td><font size="2" face="Arial" ><b>Oggetto</b></font>
             </font>   </td>
<td><font size="3" face="Arial" color="#000000"><? echo $oggettox; ?></font>
             </font>  
</td>              
 </tr> 
<tr>
<td> </td>
 <td ><p>
 <? 
 {$lungo=800;}
 $somma++;
 $uno="testo".$somma;
 ?>
 <textarea id="<? echo $uno; ?>" rows="3" name="testo" style=" background-color: #ffffff; width: <? echo $lungo;?>; "><? echo $testomem;?></textarea>
</td>	            
</tr>
<tr>
<td><font size="2" face="Arial" ><b>Allegato</b></font>
             </font>   </td>
<td><font size="3" face="Arial" color="#000000"><? echo $nomefilex; ?></font>
             </font>  
</td>              
 </tr> 
<tr></tr><tr></tr>
<? }} ?>
</table>
<? if ($tessera==57) { ?>
<p align="center"><b><font face="Arial" size="5" color="#993300">EMAIL INVIATE DA <? echo $cognome; ?></font></b></p><div align="center">   
<div id="container">

<table  width="100%" bgcolor="#FFF4F7" class="table8">

<?
$somma=0;
$sql = "SELECT *  FROM  intervista57 where  tessera = 57 order by datasel  ";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
      $vol1 = $macrogruppo["volontario1"];
      $vol2 = $macrogruppo["volontario2"]; 
      $vol3 = $macrogruppo["volontario3"];
      $vol4 = $macrogruppo["volontario4"];
      $testomem = $macrogruppo["testo"];
      $datamem = $macrogruppo["data"];
      $prg = $macrogruppo["prg"];
      $mittente = $macrogruppo["mittente"];
      $oggettox = $macrogruppo["oggetto"];
      $nomefilex = $macrogruppo["nomefile"];
     
?>
<tr>
<td><font size="2" face="Arial" ><b>DataNota </b></font>
             </font>   </td>
<td>

<font size="3" face="Arial" color="#f61212"><b><? echo $datamem; ?></b></font>
             </font>  
</td>
</tr>
 <tr>
<td><font size="2" face="Arial" ><b>Destinatario </b></font>
             </font>   </td>
<td><font size="3" face="Arial" color="#000000"><? echo $mittente; ?></font>
             </font>  
</td>              
 </tr>
<tr>
<td><font size="2" face="Arial" ><b>Oggetto</b></font>
             </font>   </td>
<td><font size="3" face="Arial" color="#000000"><? echo $oggettox; ?></font>
             </font>  
</td>              
 </tr> 
<tr>
<td> </td>
 <td ><p>
 <? 
 {$lungo=800;}
 $somma++;
 $uno="testo".$somma;
 ?>
 <textarea id="<? echo $uno; ?>" rows="3" name="testo" style=" background-color: #ffffff; width: <? echo $lungo;?>; "><? echo $testomem;?></textarea>
</td>	            
</tr>
<tr>
<td><font size="2" face="Arial" ><b>Allegato</b></font>
             </font>   </td>
<td><font size="3" face="Arial" color="#000000"><? echo $nomefilex; ?></font>
             </font>  
</td>              
 </tr> 
<tr></tr><tr></tr>
<? }} ?>
</table>

<? } ?>


<p align="center"><b><font face="Arial" size="5" color="#993300">EMAIL DA INVIARE A <? echo $cognome; ?></font></b><br>
<b><font face="Arial" size="5" color="#cc0000"><? echo $messaggio; ?></font></b>
</p>
<form method="POST" action="" enctype="multipart/form-data">   
<table border="1" width="100%" bgcolor="#FFF4F7" class="table6" >	
  <tr>
		<td><font size="3" face="Arial" color="#000000">Mittente: </font>   </td>
  	<td><select size="1" name="mittente" style="background-color: #ececee">
					<option <? if($mittente=="info@messadellacarita.it"){echo "selected";}?>>info@messadellacarita.it</option>
					<option <? if($mittente=="segreteria@messadellacarita.it"){echo "selected";}?>>segreteria@messadellacarita.it</option>
					<option <? if($mittente=="volontariato@messadellacarita.it"){echo "selected";}?>>volontariato@messadellacarita.it</option>
          </select></td>
   </tr>
	<tr>
		<td><font size="3" face="Arial" color="#000000">Oggetto: </font>   </td>
    <td><input style="font-size: 20px;" name="oggetto"  value="<? echo $oggetto; ?>" size="63" ></td>
   </tr>
  <tr >

    <td><font size="3" face="Arial" color="#000000">Inserisci testo da inviare </font>   </td>
<script type="text/javascript" src="../nicEdit.js"></script>
<script type="text/javascript">                                                    
	   bkLib.onDomLoaded(function() {
          var myNicEditor = new nicEditor();
          myNicEditor.setPanel('myNicPanel');
          myNicEditor.addInstance('testo');
          myNicEditor.addInstance('testo1');
          myNicEditor.addInstance('testo2');
          myNicEditor.addInstance('testo3');
          myNicEditor.addInstance('testo4');
          myNicEditor.addInstance('testo5');
          myNicEditor.addInstance('testo6');
          myNicEditor.addInstance('testo7');
          myNicEditor.addInstance('testo8');
          myNicEditor.addInstance('testo9');
          myNicEditor.addInstance('testo10');
          myNicEditor.addInstance('testo11');
          myNicEditor.addInstance('testo12');
          myNicEditor.addInstance('testo13');
          myNicEditor.addInstance('testo14');
          myNicEditor.addInstance('testo15');
          myNicEditor.addInstance('testo16');
          myNicEditor.addInstance('testo17');
          myNicEditor.addInstance('testo18');
          myNicEditor.addInstance('testo19');
          myNicEditor.addInstance('testo20');
          myNicEditor.addInstance('testo21');
          myNicEditor.addInstance('testo22');
          myNicEditor.addInstance('testo23');
          myNicEditor.addInstance('testo24');
          myNicEditor.addInstance('testo25');
          myNicEditor.addInstance('testo26');
          myNicEditor.addInstance('testo27');
          myNicEditor.addInstance('testo28');
          myNicEditor.addInstance('testo29');
          myNicEditor.addInstance('testo30');
          myNicEditor.addInstance('testo31');
          myNicEditor.addInstance('testo32');
          myNicEditor.addInstance('testo33');
          myNicEditor.addInstance('testo34');
      
          myNicEditor.addInstance('testo35');
          myNicEditor.addInstance('testo36');
          myNicEditor.addInstance('testo37');
          myNicEditor.addInstance('testo38');
          myNicEditor.addInstance('testo39');
          myNicEditor.addInstance('testo40');
            myNicEditor.addInstance('testo41');
          myNicEditor.addInstance('testo42');
          myNicEditor.addInstance('testo43');
          myNicEditor.addInstance('testo44');
          myNicEditor.addInstance('testo45');
          myNicEditor.addInstance('testo46');
          myNicEditor.addInstance('testo47');
          myNicEditor.addInstance('testo48');
          myNicEditor.addInstance('testo49');
          myNicEditor.addInstance('testo50');
          myNicEditor.addInstance('testo51');
          myNicEditor.addInstance('testo52');
          myNicEditor.addInstance('testo53');
          myNicEditor.addInstance('testo54');
          myNicEditor.addInstance('testo55');
          myNicEditor.addInstance('testo56');
          myNicEditor.addInstance('testo57');
          myNicEditor.addInstance('testo58');
          myNicEditor.addInstance('testo59');
          myNicEditor.addInstance('testo60');
          myNicEditor.addInstance('testo61');
          myNicEditor.addInstance('testo62');
          myNicEditor.addInstance('testo63');
          myNicEditor.addInstance('testo64');
          myNicEditor.addInstance('testo65');
          myNicEditor.addInstance('testo66');
          myNicEditor.addInstance('testo67');
          myNicEditor.addInstance('testo68');
          myNicEditor.addInstance('testo69');
          myNicEditor.addInstance('testo70');
          myNicEditor.addInstance('testo71');
          myNicEditor.addInstance('testo72');
          myNicEditor.addInstance('testo73');
          myNicEditor.addInstance('testo74');
          myNicEditor.addInstance('testo75');
         
          myNicEditor.addInstance('testo76');
          myNicEditor.addInstance('testo77');
          myNicEditor.addInstance('testo78');
          myNicEditor.addInstance('testo79');
          myNicEditor.addInstance('testo80');          
          myNicEditor.addInstance('myInstance2');
          myNicEditor.addInstance('myInstance3');
     });
</script>

<td style="font-size: 13px;background-color: #ffffff;"  align="center">
<div id="myNicPanel" style="width: 700px;"></div>
<?php

//Controlla il tipo di browser
function GetBrowser()
{
$browser = array(
'Lynx'      => 'Lynx',
'Opera'     => 'Opera',
'WebTV'     => 'WebTV',
'Konqueror' => 'Konqueror',
'bot'       => 'Bot',
'Google'    => 'Bot', 
'Chrome'     => 'Chrome',
'slurp'     => 'Bot',
'scooter'   => 'Bot',
'spider'    => 'Bot',
'infoseek'  => 'Bot',
'MSIE'      => 'Internet Explorer',
'Firefox'   => 'FireFox',
'Nav'       => 'Netscape',
'Gold'      => 'Netscape',
'x11'       => 'Netscape',
'Netscape'  => 'Netscape'
);
foreach($browser as $chiave => $valore)
{
if(strpos($_SERVER['HTTP_USER_AGENT'], $chiave ))
{
return $valore;
}
}
return 'Altro';
}
//esempio applicato
$browser=GetBrowser();
if ($browser == "Chrome")
{$lungo=700;}else{$lungo=724;}

?>
<!--<textarea style="font-size: 20px;" name="testo"  id="testo" rows="20" cols="60"><? echo $testo1;?></textarea>   -->
<textarea id="testo" rows="8" name="testo" style=" background-color: #ffffff;  width: <? echo $lungo;?>;"><? echo $testo;?></textarea>

    </td>
   </tr>
   <tr>
	
    
   
				<td ><font size="3" face="Arial" color="#000000">- Carica Allegato</font></td>
				<td> 
        <input type="file"   name="fileToUpload" id="fileToUpload" size="50" style="font-size: 12pt; font-weight: bold" ></td>
       	</tr>
          
           
      
       
			<tr>
				<td ><font size="3" face="Arial" color="#FF0000">- Invia EMAIL</font></td>      
				<td>
       <input type="hidden" name="ingranaggio" value="2" />  
       <input type="image" name="B3"  src="mail.png" width="50" height="50">    
<!--             <input type="submit" value="Invia" name="B3">   -->
        </td> 
        
			</tr>
   </table>
</form>   
</div>
</div>
</div>
</div>

<script>
function close_window() {
  if (confirm("Sei sicuro di volere chiudere la pagina?")) {
    close();
  }
}
</script>

<script type="text/javascript">
<!-- 
/*
Floating Menu script-  Roy Whittle (http://www.javascript-fx.com/)
Script featured on/available at http://www.dynamicdrive.com/
This notice must stay intact for use

Prelevato e illustrato su http://www.web-link.it
*/

//Enter "frombottom" or "fromtop"
var verticalpos="frombottom"

function JSFX_FloatTopDiv()
{
	var startX = 5,
	startY = 382;
	var ns = (navigator.appName.indexOf("Netscape") != -1);
	var d = document;
	function ml(id)
	{
		var el=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
		if(d.layers)el.style=el;
		el.sP=function(x,y){this.style.left=x;this.style.top=y;};
		el.x = startX;
		if (verticalpos=="fromtop")
		el.y = startY;
		else{
		el.y = ns ? pageYOffset + innerHeight : document.body.scrollTop + document.body.clientHeight;
		el.y -= startY;
		}
		return el;
	}
	window.stayTopLeft=function()
	{
		if (verticalpos=="fromtop"){
		var pY = ns ? pageYOffset : document.body.scrollTop;
		ftlObj.y += (pY + startY - ftlObj.y)/8;
		}
		else{
		var pY = ns ? pageYOffset + innerHeight : document.body.scrollTop + document.body.clientHeight;
		ftlObj.y += (pY - startY - ftlObj.y)/8;
		}
		ftlObj.sP(ftlObj.x, ftlObj.y);
		setTimeout("stayTopLeft()", 10);
	}
	ftlObj = ml("divStayTopLeft");
	stayTopLeft();
}
JSFX_FloatTopDiv();
// end  -->
</script>

</body>
</html>