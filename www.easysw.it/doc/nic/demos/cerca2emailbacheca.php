<?php  
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="pomaindex.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php  }
include "conf_DB.php";
include("mailer/PHPMailerAutoload.php");
$login=$_REQUEST["login"];
$zona=$_REQUEST["zona"];
$tessera=$_REQUEST["tessera"];
$tesseralis=$_REQUEST["tesseralis"];
$ntessera=$_REQUEST["ntessera"];
#echo "dd".$ntesseralis;
$tespas=$_REQUEST["tespas"];
$cognome=$_REQUEST["cognome"];
$annoassociato=$_REQUEST["annoassociato"];
#$cognome="CALCIDESE";
$nome=$_REQUEST["nome"];
$natoa=$_REQUEST["natoa"];
$datanascita=$_REQUEST["datanascita"];
$residentecitta=$_REQUEST["residentecitta"];
$mittente=$_REQUEST["mittente"];
$testo=$_REQUEST["testo"];
$linguaggio=$_REQUEST["linguaggio"];
$email=$_REQUEST["email"];
$telefono=$_REQUEST["telefono"];
$cellulare=$_REQUEST["cellulare"];
$oggetto=$_REQUEST["oggetto"];

$mittente=$_REQUEST["mittente"];
$nomefile=$_REQUEST["nomefile"];
$comunicazioni=$_REQUEST["comunicazioni"];
$frequenza=$_REQUEST["frequenza"];
$emergenze=$_REQUEST["emergenze"];
$referente=$_REQUEST["referente"];
$membro=$_REQUEST["membro"];
$lun=$_REQUEST["lun"];
$mar=$_REQUEST["mar"];
$mer=$_REQUEST["mer"];
$gio=$_REQUEST["gio"];
$ven=$_REQUEST["ven"];
$dom=$_REQUEST["dom"];
$mensa=$_REQUEST["mensa"];
$guardaroba=$_REQUEST["guardaroba"];
$tesseramento=$_REQUEST["tesseramento"];
$varie=$_REQUEST["varie"];
$ingranaggio=$_REQUEST["ingranaggio"];
$status=$_REQUEST["status"];

#if ($ingranaggio==2) {echo "stop ".$ingranaggio;}
if ($ingranaggio=="44"){
$sql = "UPDATE socivolontari set invio=0 ";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 
}
#echo "<br>"."ling ".$linguaggio;
if($igranaggio==2)
{if ($oggetto=="") { $ingranaggio="33";echo "<script type='text/javascript'>alert('MANCA IL CAMPO OGGETTO DELLA EMAIL');</script>"; }
 if ($testo=="")   { $ingranaggio="33";echo "<script type='text/javascript'>alert('MANCA IL TESTO DELLA EMAIL');</script>"; }}

#echo "ingr ".$ingranaggio." ling ".$linguaggio;


#if ($prova=="prova"){$ingranaggio="";}
#if ($ingranaggio=="2"){$prova="";}
#echo "<br>"."ingra ".$ingranaggio;
#echo "<br>"."prova ".$prova;


if ($ingranaggio==2)
{
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
} else { echo "<script type='text/javascript'>alert('MANCA IL CAMPO OGGETTO DELLA EMAIL');</script>"; }

if ($ingranaggio==2 and $linguaggio == "prova")
   { 
  # echo "passo";exit;
$ingranaggio="33";     
   $inviate++;
#echo $testo; exit;   
$message = $testo;
$nomefilex = "./allegati/".$nomefile;

$mail = new PHPMailer();
$mail->From     = ($mittente);
$mail->FromName = "EMAIL DI PROVA";
$mail->AddAddress($mittente);
$mail->IsHTML(true);
$mail->AddBCC($indirizzibcc);
$mail->Subject  =  $oggetto;
$mail->Body     =  $message;
$mail->AltBody  =  "";
$mail->AddAttachment($nomefilex); 


if(!$mail->Send()){
    $messaggio="ERRORE non riesco a inviare la Email di prova"; exit;
}else{
    $messaggio="EMAIL inviata con successo!!! ";  
}

}   


}



   


if ($ingranaggio==8){ 
#echo "tea ".$tesseralis;  
$sql = "UPDATE socivolontari set 
invio=1
WHERE tessera = '$tesseralis' ";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 
}  

#echo $status."<br>"; 
if ($status=="TUTTI")
   {$selezionastatus= " ";}
   else
   {$selezionastatus=" and status = '".$status."'" ;}


if ($cognome!="")
   {$selezionacognome= " and cognome like '".$cognome."%' ";}
   else
   {$selezionecognome="";}
   
if ($nome!="")
   {$selezionanome= " and nome like '".$nome."%' ";}
   else
   {$selezionanome="";}
 
if ($frequenza!="")
   {$selezionafrequenza= " and frequenza  = 1 ";}
   else
   {$selezionafrequenza="";}
   

if ($emergenze!="")
   {$selezionaemergenze=" and emergenze = 1 ";}
   else
   {$selezionaemergenze="";} 

if ($referente!="")
   {$selezionareferente=" and referente = 1 ";}
   else
   {$selezionareferente="";} 
   
if ($membro!="")
   {$selezionamembro=" and membro = 1 ";}
   else
   {$selezionamembro="";} 
   
if ($lun!="")
   {$selezionalun=" and (lung = 1 or lunt = 1 or luna = 1 or luns = 1 or lunv = 1) ";}
   else
   {$selezionalun="";}    
if ($mar!="")
   {$selezionamar=" and (marg = 1 or mart = 1 or mara = 1 or mars = 1 or marv = 1) ";}
   else
   {$selezionamar="";}  
if ($mer!="")
   {$selezionamer=" and (merg = 1 or mert = 1 or mera = 1 or mers = 1 or merv = 1) ";}
   else
   {$selezionamer="";}     
if ($gio!="")
   {$selezionagio=" and (giog = 1 or giot = 1 or gioa = 1 or gios = 1 or giov = 1) ";}
   else
   {$selezionagio="";}     
if ($ven!="")
   {$selezionaven=" and (veng = 1 or vent = 1 or vena = 1 or vens = 1 or venv = 1) ";}
   else
   {$selezionaven="";}     
if ($dom!="")
   {$selezionadom=" and (domg = 1 or domt = 1 or doma = 1 or doms = 1 or domv = 1) ";}
   else
   {$selezionadom="";}     
if ($mensa!="")
   {$selezionamensa=" and mensa = 1 ";}
   else
   {$selezionamensa="";}     
if ($guardaroba!="")
   {$selezionaguardaroba=" and guardaroba = 1 ";}
   else
   {$selezionaguardaroba="";}  
if ($tesseramento!="")
   {$selezionatesseramento=" and tesseramento = 1 ";}
   else
   {$selezionatesseramento="";}     
if ($varie!="")
   {$selezionavarie=" and varie = 1 ";}
   else
   {$selezionavarie="";}     

$oggi=date("Y-m-d");
#header('Content-Type: text/html; charset=utf-8'); 
?>

<html>
<head>

	<meta http-equiv="Content-Type" >
	<title>Opera Messa della Carita' invio email massive</title>
	<link rel="stylesheet" type="text/css" href="jquery.tablescroll.css"/>

<style>
div#container {
min-width:   900px;
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

input[type=radio] {
    border: 0px;
    width: 10%;
    height: 2em;
}
</style>   
</head>
<body>
<div align="center" >
	<table style=" border: 0px solid black;" width="760" height="140" bgcolor="#ffffff"  >
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
<td bgcolor="#FFFFFF" style="border: 0px ; "><a href="../../menugenerale.php?login=<?php echo $login; ?>">Menu Generale</a></td>             

 
   
	</table>  
      
</div> 
<div align="center">   
<div id="container">


<?
$totale=0;  
if ($tessera!="")
   {$sql = "SELECT *  FROM  socivolontari where  tessera = '$tessera' " . " and email like '%@%'  and invio = 0 " .
        "order by cognome";   }
   else
    {$sql = "SELECT *  FROM  socivolontari where  tessera != '' and status = 'ATTIVO' and email like '%@%'  and invio = 0 " . 
        "order by cognome"; }  
#echo $sql; 
$result1 = $conn->query($sql);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ $tesseraf = $macrogruppoa["tessera"]; $totale++;  } }
#echo $totale;  exit;

?>

<p align="center"><b><font face="Arial" size="4" color="#993300">INVIO EMAIL MASSIVO PER NUOVA COMUNICAZIONE IN BACHECA <? echo $totale; ?> EMAIL</font></b></p>


<div align="center">   
<div id="container">
 <form method="POST" action="" enctype="multipart/form-data">   
<table border="1" width="100%" bgcolor="#FFF4F7" class="table6" >	
  <tr>
		<td><font size="3" face="Arial" color="#000000">Mittente: </font>   </td>
  	<td><select size="1" name="mittente" style="background-color: #ececee">
         	<option <? if($mittente=="info@messadellacarita.it"){echo "selected";}?>>info@messadellacarita.it</option>
					<option <? if($mittente=="segreteria@massadellacarita.it"){echo "selected";}?>>segreteria@messadellacarita.it</option> 
					<option <? if($mittente=="volontariato@messadellacarita.it"){echo "selected";}?>>volontariato@messadellacarita.it</option>
          </select></td>
   </tr>
	<tr>
		<td><font size="3" face="Arial" color="#000000">Oggetto: </font>   </td>
    <td><input style="font-size: 20px;" name="oggetto"  size="63" value="Nuova comunicazione in Bacheca."></td>
   </tr>
  <tr >

    <td><font size="3" face="Arial" color="#000000">Inserisci testo da inviare </font>   </td>
<script type="text/javascript" src="../nicEdit.js"></script>
<script type="text/javascript">
	   bkLib.onDomLoaded(function() {
          var myNicEditor = new nicEditor();
          myNicEditor.setPanel('myNicPanel');
          myNicEditor.addInstance('testo');
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
$testo="<p align='left'><font size='3' face='Arial' color='#000000'>l'Opera Messa dell Carita' ti segnala che nella <b>BACHECA</b> e' stata pubblicata una nuova comunicazione. <br>Se nel tuo smart phone non hai ancora scaricato l'<b>APP bacheca</b>, prendi contatto con Domenico 3755575840 per farlo al piu' presto.<br>cordialmente. OPERA MESSA DELLA CARITA'</font><br><br><font size='2' face='Arial' color='#000000'>l presente messaggio e' generato automaticamente. <b>Non rispondere a questa e-mail.</b></font></p>";
?>
<!--<textarea style="font-size: 20px;" name="testo"  id="testo" rows="20" cols="60"><? echo $testo;?></textarea>   -->

<textarea id="testo" rows="8" name="testo" style=" background-color: #ffffff;  width: <? echo $lungo;?>;"><? echo $testo;?></textarea>

    </td>
   </tr>
   <tr>
	
    <input type="hidden" name="login" value="<?php echo $login; ?>" />
       <input type="hidden" name="tessera" value="<?php echo $tesserax; ?>" />
       <input type="hidden" name="cognome" value="<?php echo $cognomex; ?>" />
       
      
   
				<td ><font size="3" face="Arial" color="#000000">- Carica Allegato</font></td>
				<td> 
        <input type="file"   name="fileToUpload" id="fileToUpload" size="50" style="font-size: 12pt; font-weight: bold" ></td>
       	</tr>
         
           
      	<tr>
				<td ><font size="3" face="Arial" color="#ffffff">- Invia EMAIL di prova </font></td>
				<td><fieldset>
        <font size="3" face="Arial" color="#000000">Email di Prova <input type="radio" name="linguaggio" value="prova" checked="checked" " /> </font>
        <font size="3" face="Arial" color="#000000">Email per tutta la lista<input type="radio" name="linguaggio" value="noprova"/> </font>
        </fieldset></td>
        </tr> 
       
			<tr> 
        <input type="hidden" name="cognome" value="<?php echo $cognome; ?>" />
       <input type="hidden" name="nome" value="<?php echo $nome; ?>" />
       <input type="hidden" name="frequenza" value="<?php echo $frequenza; ?>" />    
       <input type="hidden" name="emergenze" value="<?php echo $emergenze; ?>" />
       <input type="hidden" name="membro" value="<?php echo $membro; ?>" />
       <input type="hidden" name="lun" value="<?php echo $lun; ?>" />
       <input type="hidden" name="mar" value="<?php echo $mar; ?>" />
       <input type="hidden" name="mer" value="<?php echo $mer; ?>" />
       <input type="hidden" name="gio" value="<?php echo $gio; ?>" /       
       <input type="hidden" name="ven" value="<?php echo $ven; ?>" />
       <input type="hidden" name="dom" value="<?php echo $dom; ?>" />
       <input type="hidden" name="mensa" value="<?php echo $mensa; ?>" />
       <input type="hidden" name="guardaroba" value="<?php echo $guardaroba; ?>" />
       <input type="hidden" name="tesseramento" value="<?php echo $tesseramento; ?>" />
       <input type="hidden" name="varia" value="<?php echo $varie; ?>" />
       <input type="hidden" name="nomefile" value="<?php echo $nomefile; ?>" />
       <input type="hidden" name="ingranaggio" value="2" />    
<? if($ingranaggio==2){ } else { ?>             
				<td ><font size="3" face="Arial" color="#FF0000">- Invia EMAIL</font></td>      
				<td><input type="image" name="B3xx"  src="mail.png" width="50" height="50"></td>   
<? } ?>              
        
			</tr>
   </table>
</form>   
<br>
 
<div align="center">
<div id="container">
	<table id="thetable" border="1"  cellspacing="0" width="100%">
	<thead>
		<tr>
		  <td background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#ffffff">N.</td>
		  <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#ffffff">Codice</td>
		  <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#ffffff">Cognome</td>
		  <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#ffffff">Nome</td>
		  <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#ffffff">email</td>
      <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#ffffff"><img border="0" background="btn1.gif" </td>
    </tr>
	</thead>
	<tbody>

  <?php

  
if ($tessera!="")
   {$sql = "SELECT *  FROM  socivolontari where  tessera = '$tessera' " . " and email like '%@%'  and invio = 0 " .
        "order by cognome";   }
   else
    {$sql = "SELECT *  FROM  socivolontari where  tessera != '' and (status = 'ATTIVO' or status = 'RISERVA') and email like '%@%'  and invio = 0 " . 
        "order by cognome"; }  
#echo $sql; 
$result1 = $conn->query($sql);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{  $tesseralis = $macrogruppo["tessera"];
  
    	
     $tot++;
      $cognomer = $macrogruppo["cognome"];
      $nomer = $macrogruppo["nome"];
      $datanascita = $macrogruppo["data_nascita"];
      $natoa = $macrogruppo["luogo_nascita"];
      $provnatoa = $macrogruppo["provincia_nascita"];
      $indirizzores = $macrogruppo["indirizzo"];
      $residentecitta = $macrogruppo["localita_residenza"];
      $residenteprov= $macrogruppo["provincia"];
      $cap = $macrogruppo["cap"];
      $telefono = $macrogruppo["telefono"];
      $emailx = $macrogruppo["email"];
      $codfisc = $macrogruppo["codice_fiscale"];
      $oggi = $macrogruppo["data_iscrizione"];
      $accdati = $macrogruppo["ass"];
      $comunicazioni = $macrogruppo["altro"];	
      $deceduto = $macrogruppo["deceduto"];	
      #echo $tessera;exit;

      

?>



      
  <form method="POST" action="cerca2emailbacheca.php?login=<?php echo $login; ?>">    
	<tr class="first">
      <td align="center"><font size="3"><?php echo $tot; ?></td>
      <td  align="center"><font size="3"><?php echo $tesseralis; ?></td>
      <td  align="center"><font size="3"><?php echo $cognomer; ?></td>
      <td  align="center"><font size="3"><?php echo $nomer; ?></td>
      <td  align="center"><font size="3"><?php echo $emailx; ?></td>
      <td  align="center">

       <input type="hidden" name="login" value="<?php echo $login; ?>" />

       <input type="hidden" name="tesseralis" value="<?php echo $tesseralis; ?>" />

      <input type="hidden" name="login" value="<?php echo $login; ?>" />
      
       <input type="hidden" name="cognome" value="<?php echo $cognome; ?>" />
       
       <input type="hidden" name="nome" value="<?php echo $nome; ?>" />
       <input type="hidden" name="frequenza" value="<?php echo $frequenza; ?>" />    
       <input type="hidden" name="emergenze" value="<?php echo $emergenze; ?>" />
       <input type="hidden" name="membro" value="<?php echo $membro; ?>" />
       <input type="hidden" name="lun" value="<?php echo $lun; ?>" />
       <input type="hidden" name="mar" value="<?php echo $mar; ?>" />
       <input type="hidden" name="mer" value="<?php echo $mer; ?>" />
       <input type="hidden" name="gio" value="<?php echo $gio; ?>" /       
       <input type="hidden" name="ven" value="<?php echo $ven; ?>" />
       <input type="hidden" name="dom" value="<?php echo $dom; ?>" />
       <input type="hidden" name="mensa" value="<?php echo $mensa; ?>" />
       <input type="hidden" name="guardaroba" value="<?php echo $guardaroba; ?>" />
       <input type="hidden" name="tesseramento" value="<?php echo $tesseramento; ?>" />
       <input type="hidden" name="varia" value="<?php echo $varie; ?>" />
       <input type="hidden" name="nomefile" value="<?php echo $nomefile; ?>" />
       <input type="hidden" name="ingranaggio" value="8" /> 
<?php
if ($linguaggio=="prova")   
{$ingranaggio="33";} 
#echo "ingra ".$ingranaggio;
if ($ingranaggio==2)
   {   
   $inviate++;
   
   
   
   
   
   

#echo $emailx."<br>";
$message = $testo;
$nomefilex = "./allegati/".$nomefile;
#include("mailer/PHPMailerAutoload.php");
$mail = new PHPMailer();
$mail->From     = ($mittente);
$mail->FromName = "messaggio OPERA MESSA DELLA CARITA'";
$mail->AddAddress($emailx);
$mail->IsHTML(true);
$mail->AddBCC($indirizzibcc);
$mail->Subject  =   utf8_decode($oggetto);
$mail->Body     =  utf8_decode($message);
$mail->AltBody  =  "";
$mail->AddAttachment($nomefilex); 


if(!$mail->Send()){
    $messaggio="ERRORE non riesco a inviare la Email"; 
}else{
    $messaggio="EMAIL inviata con successo!!!";
}
  
   ?>
   <img src="spunta.png" width="20" height="20">
   <?php
   }
   else
   {
?>       
      <input type="image" name="submit" src="x.png" width="20" height="20">
<?php }  ?>			
     
      </td>

    </tr>	
    </form>
<?php  }}?>          
      
      
      
      
      
      
      
		</tr>

	</tbody>
	</table>
  <br>
  <?
if ($ingranaggio==2)
   {
?>
<p align="center"><b><font face="Arial" size="6" color="#993300">INVIATE <? echo $inviate; ?> EMAIL</font></b></p>

 <?
 }
 ?>  
</div>
</div>
</div>
</div>


	<br> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery.tablescroll.js"></script>

<script>
/*<![CDATA[*/

jQuery(document).ready(function($)
{
	$('#thetable').tableScroll({height:750});

	$('#thetable2').tableScroll();
});

/*]]>*/
</script>
<script>
function carica_consegnaA(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=600,height=800,left=150,top=150,location=0,directories=0,toolbar=0,scrollbars=yes,resizable=1')
    
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>
  <script>
function carica_consegnaB(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script> 
  <script>
function carica_consegnaC(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=800,height=700,left=150,top=150,location=0,directories=0,toolbar=0')
    //location.href = 'http://www.spi.it/root/provascroll/provalistatestata.php';
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>  
  <script>
function carica_consegnaD(url){
	<!-- intestazione -->	
    //popupWindow =
	//	window.open(url,'pdf','width=800,height=700,left=150,top=150,location=0,directories=0,toolbar=0')
    location.href = url;
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>  
<script>
function carica_consegnaF(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=1000,height=300,left=150,top=150,location=0,directories=0,toolbar=0,scrollbars=yes,resizable=1')
    
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>
</body>
</html>