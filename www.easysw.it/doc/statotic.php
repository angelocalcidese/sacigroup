<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="index.php";  ?>
    <script>
		top.window.location='<?php  echo $url_pagina_chiamante; ?>';
		</script>
<?php
}
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
$tessera=$_REQUEST["ticket"];
#echo $ingranaggio;

$sql = "UPDATE associazione set 
ticket = '0'
where 
login = '$login' 
";
#echo $sql; exit;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; }   


if($ingranaggio==2){
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
   




$descrizione=$_REQUEST["descrizione"];
$descrizione=str_replace("'", "\'", $descrizione);
$argomento=$_REQUEST["argomento"];
$argomento=str_replace("'", "\'", $argomento); 

$oggi=date("Y-m-d H:m:s");
   $sql = "INSERT INTO `ticketgest`(
   `codice`,
   argomento, 
   `descrizione`,
   dataora,
   login,
   allegato,
   tipomessaggio
   ) 
   VALUES (
   '$tessera',
   '',  
   '$descrizione',
   '$oggi',
   '$logink',
   '$newfile',
   'D')";
   #echo $sql; exit;
if ($conn->query($sql) === FALSE) 
    {
    $erroreriferimento="errore inserimento ticket";
    } 
    else
     {}
$sql1 = "select * from ticket  where codice = '$tessera'";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ 
      $operatoreas = $macrogruppo["operatore"];	
      }}   
if($operatoreas=="AMMINISTRATORE"){$emailwd="domenico.calcidese@gmail.com";}        
#if($operatoreas=="AMMINISTRATORE"){$emailwd="nfo@lacallaodv.it";}
#if($operatoreas=="MARCO"){$emailwd="m52888232@gmail.com";}  
#if($operatoreas=="DOMENICO"){$emailwd="domenico.calcidese@gmail.com";}
#if($operatoreas=="SERGIO"){$emailwd="sergio.amidani@gmail.com";} 
#if($operatoreas=="FABIO"){$emailwd="info@zunelliassociati.it";}
 
$sql1 = "SELECT * FROM associazione  where login = '$login'";
#echo $sql1; 
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())
		{ 
      $email = $macrogruppo["email"];
			}  }  




#$emailwd="domenico.calcidese@gmail.com";   
$oggetto="Messaggio da Ticket GESTDOCUMENTALE.";      
$oggiy=date("d/m/Y");
$ora=date("H:m:s");
$message = "da: ".$login." ti ha risposto alla tua comunicazione per il ticket <font face='Arial' size='5' color='#cc0000'>".$tessera."</font><br>Per accedere: http://www.mensacarita.it/doc/cruscottoticket.php?ingranaggio=200&codice=".$codice."&operatore=".$operatoreas;
$mittente="domenico.calcidese@gmail.com";
#echo $emailwd."/".$email;
#echo $message;
$mail = new PHPMailer();
$mail->From     = ($email);
$mail->FromName = "RISPOSTA DA TICKET GESTIONE DOCUMENTALE";
$mail->AddAddress($emailwd);
$mail->IsHTML(true);
$mail->AddBCC($indirizzibcc);
$mail->Subject  =  $oggetto;
$mail->Body     =  $message;
$mail->AltBody  =  "";

if(!$mail->Send()){
echo "ERRORE1 non riesco a inviare la Email";
echo $mail;
exit; 
}else{
#echo "EMAIL1 inviata con successo!!!"; exit;
$swopt=1;
}                  
$ingranaggio="";
}
if($ingranaggio==5){
 
$oggi=date("Y-m-d H:m:s");
   $sql = "INSERT INTO `ticketgest`(
   `codice`,
   argomento, 
   `descrizione`,
   dataora,
   login,
   allegato,
   tipomessaggio 
   ) 
   VALUES (
   '$tessera',
   '',  
   'CHIUSO TIKET DA UTENTE',
   '$oggi',
   '$logink',
   '$newfile',
   'C')";
   #echo $sql; exit;
if ($conn->query($sql) === FALSE) 
    {
    $erroreriferimento="errore inserimento ticket";
    } 
    else
     {}
$sql = "UPDATE ticket set 
stato= 'CHIUSO',
lavorazione = 'RISOLTO',
datachiusura = '$oggi'
where 
codice = '$tessera' and procedura = '$logink'
";
#echo $sql; exit;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; }      
     
$ingranaggio="";
}
?>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
	<title>Stato ticket</title>
</head>
<style>
div#container {
min-width:   1150px;
  min-height:  500px;
  max-width:  955px;
  max-height: 1000px;
}
div#containerx {
min-width:   955px;
  min-height:  5px;
  max-width:  955px;
  max-height: 5px;
}
div#sottocontainer {
min-width:   800px;
  min-height:  500px;
  max-width:  800px;
  max-height: 1000px;
}
</style>  
<style>
table, th, td {
    border: 0px solid black;
    font-family: "Arial", "Lucida Grande", Sans-Serif;    
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
a 
{
    text-decoration: none; 
    font-weight: normal;
    color: #fdf401;
}
 
a:hover
{
    color: #0080FF;
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

</style>
<script type="text/javascript">
		
		function controllo(){ 
            with(document.modulo) { 

        if(descrizione.value=="") { 
            alert("Error: manca IL TESTO DELLA RIPOSTA/DOMANDA"); 
            descrizione.focus(); 
            return false; 
                            } 
                                                                   
					                                                                                                                    
                                  } 
        } 
</script>


<body>
<div align="center" >
<table border="0" width="760" height="140" bgcolor="#ffffff"  >
<tr > 
<?php  include "mettilogo.php"; ?>
</tr> 
<tr> 
<td bgcolor="#FFFFFF" style="border: 0px ; "><a style="color: #000000;" href="apriticmenu.php?login=<?php echo $login; ?>&codice=1">Indietro</a></td>             
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
<td bgcolor="#FFFFFF" align="right" style="border: 0px ; "><?php  echo $codvolontario." - ".$cognomevol." ".$nomevol." - ".$dicidio; ?></td>         
</tr>
</table> 
     
<br>      
</div> 
<div align="center">   
<div id="container">

<p align="center"><b><font face="Arial" size="5" color="#993300">STATO TICKET APERTI</font></b></p></h1><h2> 

<table border="1" width="100%" bgcolor="#FFF4F7" class="table6">
<tr>
<td style="color: #000000; font-size: 20px;" >Num.</td>		
<td style="color: #000000; font-size: 20px;" >Data</td>
<td style="color: #000000; font-size: 20px;" >Argomento</td>
<td style="color: #000000; font-size: 20px;" >Descrizione ticket</td>
<td style="color: #000000; font-size: 20px;" >Allegato</td>
<td style="color: #000000; font-size: 20px;" >Stato</td>
<td style="color: #000000; font-size: 20px;" >Lavorazione</td>
<td style="color: #000000; font-size: 20px;" >Rispondi</td>
<td style="color: #000000; font-size: 20px;" >Chiudi</td>
</tr>
<?php
#echo $logink;
$sql1 = "select * from ticket  where stato = 'APERTO' and procedura = '$logink' order by codice, dataora";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ 
      $dataora = $macrogruppo["dataora"];
      $argomento = $macrogruppo["argomento"];
      $descrizione = $macrogruppo["descrizione"];
      $stato = $macrogruppo["stato"];
      $lavorazione = $macrogruppo["lavorazione"];	
      $codice = $macrogruppo["codice"];
      $codicew = $macrogruppo["codice"];
      $allegato = $macrogruppo["allegato"];	
      $tot++;
?>
<tr>
<td valign="top" style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" ><b><?php  echo $codice; ?></b></td>	
<td valign="top" width=100 style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" >(<?php  echo $dataora; ?>)</td>	
<td valign="top" style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" ><?php  echo $argomento; ?></td>
<td valign="top" style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" ><?php  echo $descrizione; ?></td>
<?php  if($allegato!=""){?>
<?php  $comodo=explode(".",$allegato);
if($comodo[1] == "pdf"){ ?>
<td  valign="top" style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;"><a  href="JavaScript:carica_consegnaB('esponipdfff.php?fl=<?php echo $allegato; ?>&login=<?php echo $login; ?>');" >SI</a></td>  
<?php  } else { ?>
<td  valign="top" style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;"><a href="JavaScript:carica_consegnaB('esponiimage.php?fl=<?php echo $allegato; ?>&login=<?php echo $login; ?>');" >SI</a></td>  
<?php }?>

<?php  } else { ?>
<td valign="top" style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" >NO</td>
<?php  } ?>
<td valign="top" style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" ><?php  echo $stato; ?></td>
<td valign="top" style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" ><?php  echo $lavorazione; ?></td>
<td  valign="top" style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;"><a href="?login=<?php  echo $login; ?>&ticket=<?php  echo $codicew; ?>&ingranaggio=1" >Aggiungi</a></td>  


<td valign="top" style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" ></td>
</tr>
<?php 
$sql1w = "select * from ticketgest  where  login = '$logink' and codice = '$codice' order by progr";
#echo $sql1w;
$result1w = $conn->query($sql1w);
if ($result1w->num_rows > 0) {
  while($macrogruppow = $result1w->fetch_assoc())
		{ 
      $dataoraw = $macrogruppow["dataora"];
      $argomentow = $macrogruppow["argomento"];
      $descrizionew = $macrogruppow["descrizione"];
      $statow = $macrogruppow["stato"];
      $lavorazionew = $macrogruppow["lavorazione"];	
      $codicew = $macrogruppow["codice"];
      $tipomessaggio = $macrogruppow["tipomessaggio"];
      $allegatow = $macrogruppow["allegato"];  ?>
<tr>
<td valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "cc0000";}else{echo "4e6f9a";} ?>; color: #ffffff;" ></td>	
<td valign="top" width=100 style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "cc0000";}else{echo "4e6f9a";} ?>; color: #ffffff;" >(<?php  echo $dataoraw; ?>)</td>	
<td valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "cc0000";}else{echo "4e6f9a";} ?>; color: #ffffff;" ></td>
<td valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "cc0000";}else{echo "4e6f9a";} ?>; color: #ffffff;" ><?php  echo $descrizionew; ?></td>
<?php  if($allegatow!=""){?>
<?php  $comodo=explode(".",$allegatow);
if($comodo[1] == "pdf"){ ?>
<td  valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "cc0000";}else{echo "4e6f9a";} ?>; color: #ffffff;"><a href="JavaScript:carica_consegnaB('esponipdfff.php?fl=<?php echo $allegatow; ?>&login=<?php echo $login; ?>');" >SI</a></td>  
<?php  } else { ?>
<td  valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "cc0000";}else{echo "4e6f9a";} ?>; color: #ffffff;"><a href="JavaScript:carica_consegnaB('esponiimage.php?fl=<?php echo $allegatow; ?>&login=<?php echo $login; ?>');" >SI</a></td>  
<?php }?>

<?php  } else { ?>
<td valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "cc0000";}else{echo "4e6f9a";} ?>; color: #ffffff;" >NO</td>
<?php  } ?>
<td valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "cc0000";}else{echo "4e6f9a";} ?>; color: #ffffff;" ></td>
<td valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "cc0000";}else{echo "4e6f9a";} ?>; color: #ffffff;" ></td>
<td  valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "cc0000";}else{echo "4e6f9a";} ?>; color: #ffffff;"><?php  if($tipomessaggio=="D"){echo "<a href='?login=$login&ticket=$codicew&ingranaggio=1' >Aggiungi</a>";}else{if($tipomessaggio=="R" or $tipomessaggio=="P"){echo "<a href='?login=$login&ticket=$codicew&ingranaggio=1' >Rispondi</a>";}}?></td>  


<td valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "cc0000";}else{echo "4e6f9a";} ?>; color: #ffffff;" ><?php  if($tipomessaggio=="R"){echo "<a href='?login=$login&ticket=$codicew&ingranaggio=5' >Chiudi TK</a>";}?></td>
</tr>
	
<?php } 
}  ?>
<?php  if($ingranaggio==1 and $tessera == $codicew){?>
<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data">
<tr>
<td valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" ></td>	
<td valign="top" width=100 style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" ></td>	
<td valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" ></td>
<td valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" ><textarea width="100%" style="background-color: #ececee" name="descrizione"  cols="50" rows="5"></textarea>
<br>
<input type="file" name="fileToUpload" id="fileToUpload" size="50" style="font-size: 12pt; font-weight: normal; background-color: #ffffff; color: #000000;"><font color="#000000">		
<br>		      
<input type="hidden" name="ingranaggio" value="2" />
<input type="hidden" name="login" value="<?php echo $login; ?>" />
<input type="hidden" name="ticket" value="<?php echo $codicew;  ?>" />
<input type="submit" value="Invia Risposta" name="B3">				
</td>
<td  valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;"></td>  
<td valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" >NO</td>
<td valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" ></td>
<td valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" ></td>
<td  valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;"></td>  
<td valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" ></td>
</tr>


<?php  }  ?>
<tr>
<td valign="top" style=" border: 0px solid black;background-color: #ffffff; color: #ffffff;" ></td>	
<td valign="top" width=100 style=" border: 0px solid black;background-color: #ffffff; color: #ffffff;" ></td>	
<td valign="top" style=" border: 0px solid black;background-color: #ffffff; color: #ffffff;" ></td>
<td valign="top" style=" border: 0px solid black;background-color: #ffffff; color: #ffffff;" ></td>
<td  valign="top" style=" border: 0px solid black;background-color: #ffffff; color: #ffffff;"></td>  
<td valign="top" style=" border: 0px solid black;background-color: #ffffff; color: #ffffff;" >NO</td>
<td valign="top" style=" border: 0px solid black;background-color: #ffffff; color: #ffffff;" ></td>
<td valign="top" style=" border: 0px solid black;background-color: #ffffff; color: #ffffff;" ></td>
<td  valign="top" style=" border: 0px solid black;background-color: #ffffff; color: #ffffff;"></td>  



</tr>
</form>
<?php  } } ?>


		</table>

<br>
</div>
</div>
  <script>
function carica_consegnaB(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=900,height=400,left=150,top=150,location=0,directories=0,toolbar=0')
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script> 
</body>

</html>