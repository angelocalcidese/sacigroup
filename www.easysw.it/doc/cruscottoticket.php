<?php    

include "conf_DB.php";
include("mailer/PHPMailerAutoload.php");
$login=$_REQUEST["login"];
$ingranaggio=$_REQUEST["ingranaggio"];
$ingranaggiox=$_REQUEST["ingranaggiox"];
$tessera=$_REQUEST["ticket"];
$operatore=$_REQUEST["operatore"];
$operatoreas=$_REQUEST["operatoreas"];
$codice=$_REQUEST["codice"];
#echo $ingranaggio;
if($ingranaggio==300){

$sql = "UPDATE ticket set 
operatore = '$operatoreas'
where 
codice = '$codice' 
";
#echo $sql;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 
    
if($operatoreas=="AMMINISTRATORE"){$emailwd="nfo@lacallaodv.it";}
#if($operatoreas=="MARCO"){$emailwd="m52888232@gmail.com";}  
if($operatoreas=="DOMENICO"){$emailwd="domenico.calcidese@gmail.com";}
#if($operatoreas=="SERGIO"){$emailwd="sergio.amidani@gmail.com";} 
#if($operatoreas=="FABIO"){$emailwd="info@zunelliassociati.it";} 

#if($operatore=="FABIO"){$email="info@zunelliassociati.it";}
if($operatore=="AMMINISTRATORE"){$email="nfo@lacallaodv.it";}
#if($operatore=="MARCO"){$email="m52888232@gmail.com";}  
if($operatore=="DOMENICO"){$email="domenico.calcidese@gmail.com";}
#if($operatore=="SERGIO"){$email="sergio.amidani@gmail.com";}



#$emailwd="domenico.calcidese@gmail.com";   
$oggetto="Assegnazione Ticket GESTDOCUMENTALE";      
$oggiy=date("d/m/Y");
$ora=date("H:m:s");
$message = "da: ".$operatore." ti ha assegnato il ticket <font face='Arial' size='5' color='#cc0000'>".$codice."</font><br>Per accedere: http://www.mensacarita.it/doc/cruscottoticket.php?ingranaggio=200&codice=".$codice."&operatore=".$operatoreas;
$mittente="info@la-calla.it";
#echo $emailwd."/".$email;
#echo $message;
$mail = newMailer();
$mail->From     = ($email);
$mail->FromName = "TICKET GESTIONE DOCUMENTALE";
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
}
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
$sql1 = "SELECT * FROM associazione  where login = '$login'";
#echo $sql1; 
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())
		{ 
      
      $logink = $macrogruppo["loginorig"];
      #echo $logink; exit;
      
			}  }
#echo "login ".$logink;     
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
   'R')";
   #echo $sql; exit;
if ($conn->query($sql) === FALSE) 
    {
    $erroreriferimento="errore inserimento ticket";
    } 
    else
     {}
$sql = "UPDATE associazione set 
ticket = '1'
where 
login = '$login' 
";
#echo $sql; exit;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; }             
$ingranaggio="0";
}
if($ingranaggio==5){
$sql1 = "SELECT * FROM associazione  where login = '$login'";
#echo $sql1; 
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())
		{ 
      
      $logink = $macrogruppo["loginorig"];
      #echo $logink; exit;
      
			}  } 
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
   'CHIUSO TIKET DA HELP DESK',
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
codice = '$tessera' 
";
#echo $sql; exit;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; }  
    
   
$sql = "UPDATE associazione set 
ticket = '1'
where 
login = '$login' 
";
#echo $sql; exit;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; }  
    
                 
$ingranaggio="0";
}
if($ingranaggio==6){
 
$oggi=date("Y-m-d H:m:s");
$sql1 = "SELECT * FROM associazione  where login = '$login'";
#echo $sql1; 
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())
		{ 
      
      $logink = $macrogruppo["loginorig"];
      #echo $logink; exit;
      
			}  }
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
   'RIAPERTURA TIKET DA HELP DESK',
   '$oggi',
   '$logink',
   '$newfile',
   'P')";
   #echo $sql; exit;
if ($conn->query($sql) === FALSE) 
    {
    $erroreriferimento="errore inserimento ticket";
    } 
    else
     {}
$sql = "UPDATE ticket set 
stato= 'APERTO',
lavorazione = 'IN PROGRESS',
datachiusura = '$oggi'
where 
codice = '$tessera' 
";
#echo $sql; 
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; }      
$sql = "UPDATE associazione set 
ticket = '1'
where 
login = '$login' 
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
	<title>Cruscotto ticket</title>
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
@charset "UTF-8";
.custom-select {
  position: relative;
  display: block;
  max-width: 400px;
  min-width: 180px;
  margin: 0 auto;
  border: 1px solid #3C1C78;
  background-color: #ffffff;
  z-index: 10;
}
.custom-select select {
  border: none;
  outline: none;
  background: transparent;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  border-radius: 0;
  margin: 0;
  display: block;
  width: 100%;
  padding: 12px 55px 15px 15px;
  font-size: 14px;
  color: #000000;
}
.custom-select:after {
  position: absolute;
  right: 0;
  top: 0;
  width: 50px;
  height: 100%;
  line-height: 38px;
  content: "∨";
  text-align: center;
  color: #714BB9;
  font-size: 24px;
  border-left: 1px solid #3C1C78;
  z-index: -1;
}



</style>
<style> 
input[type=button], input[type=submit], input[type=reset] {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
.button {
<?php  if($ingranaggiox==600){ ?>
  background-color: #cc0000; /* Green */
<?php }else{?>  
  background-color: #4CAF50; /* Green */
<?php }?>
  border: none;
  color: white;
  padding: 2px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.buttonx {
<?php  if($ingranaggiox!=600){ ?>
  background-color: #cc0000; /* Green */
<?php }else{?>  
  background-color: #4CAF50; /* Green */
<?php }?>
  border: none;
  color: white;
  padding: 2px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<script type="text/javascript">
		
		function controllo(){ 
            with(document.modulo) { 

        if(descrizione.value=="") { 
            alert("Error: manca DESCRIZIONE PRESTAZIONE"); 
            descrizione.focus(); 
            return false; 
                            } 
                                                                   
					                                                                                                                    
                                  } 
        } 
</script>


<body>
<div align="center" >
	
	    <div align="center" style="width: 60em;">
			<td style="border: 0px ; ">
			<img border="0" src="carlopoma.png" width="480" height="140"></td>
		  </div>
     
</div>
<div align="center">   
<div id="container">
<p align="center"><b><font face="Arial" size="5" color="#993300">CRUSCOTTO GESTIONE TICKET</font></b>
&nbsp;&nbsp;<a href="cruscottoticket.php"?><button class="button">Aperti</button></a>

&nbsp;&nbsp;<a href="cruscottoticket.php?ingranaggiox=600&operatore=<?php  echo $operatore; ?>"?><button class="buttonx">chiusi</button></a>


</p>
<?php  if($ingranaggio=="" ){?>
<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data">

<label class="custom-select" for="styledSelect1"><select id="styledSelect1" name="operatore">
    
    <option value="AMMINISTRATORE">
      AMMINISTRATORE
    </option>
    <option value="DOMENICO">
      DOMENICO
    </option>
    <!--
    <option value="MARCO">
      MARCO
    </option>
    <option value="SERGIO">
      SERGIO
     </option> 
    <option value="FABIO">
      FABIO  
    </option>
    -->
  </select></label>

<br>
<input type="hidden" name="ingranaggio" value="200" />                    
<input style="background:#fc7e61;" type="submit" value="Scelta" name="B3">
</form>
<?php  exit; } ?>



<?php if($ingranaggiox==""){?>

<p align="center"><b><font face="Arial" size="4" color="#993300">TICKET APERTI</font></b></p>
<p align="center"><b><font face="Arial" size="5" color="#000000"><?php  echo $operatore; ?></font></b></p>
</h1><h2> 

<table border="1" width="100%" bgcolor="#FFF4F7" class="table6">
<tr>
<td style="color: #000000; font-size: 20px;" >Proc.</td>	
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
if($operatore == "AMMINISTRATORE"){
$sql1 = "select * from ticket  where stato = 'APERTO'  order by codice, dataora";
}else{
$sql1 = "select * from ticket  where stato = 'APERTO' and operatore = '$operatore' order by codice, dataora";
}
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
      $allegato = $macrogruppo["allegato"];	
      $login = $macrogruppo["login"];
      $operatorex = $macrogruppo["operatore"];
      $procedura = $macrogruppo["procedura"];	
      $tot++;
?>
<tr>
<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data">
<td colspan="10" align="center" style=" border: 1px solid black;background-color: #059d3e; color: #ffffff;font-size: 20px;" ><b><?php  echo "TK: ".$codice." - utente: ".$login. "  assegnato a: "; ?></b>

<select size="1" name="operatoreas" style="background-color: #ececee">
					<option <?php  if($operatorex=="AMMINISTRAZIONE"){echo "selected";}?>>AMMINISTRAZIONE</option>
					<option <?php  if($operatorex=="DOMENICO"){echo "selected";}?>>DOMENICO</option>
<!--                    <option <?php  if($operatorex=="MARCO"){echo "selected";}?>>MARCO</option>
                    <option <?php  if($operatorex=="SERGIO"){echo "selected";}?>>SERGIO</option>
                     <option <?php  if($operatorex=="FABIO"){echo "selected";}?>>FABIO</option>  -->
					</select>
<input type="hidden" name="ingranaggio" value="300" /> 
<input type="hidden" name="codice" value="<?php  echo $codice; ?>" /> 
<input type="hidden" name="operatore" value="<?php  echo $operatore; ?>" />                    
<input style="background:#fc7e61; border: none;
  color: white;
  padding: 1px 10px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;" type="submit" value="Scelta" name="B3">
</form>



</td>
</tr>
<tr>
<td valign="top" style=" border: 1px solid black;background-color: #cc0000; color: #ffffff;" ><b><?php  echo $procedura; ?></b></td>
<td valign="top" style=" border: 1px solid black;background-color: #cc0000; color: #ffffff;" ><b><?php  echo $codice; ?></b></td>	
<td valign="top" width=100 style=" border: 1px solid black;background-color: #cc0000; color: #ffffff;" >(<?php  echo $dataora; ?>)</td>	
<td valign="top" style=" border: 1px solid black;background-color: #cc0000; color: #ffffff;" ><?php  echo $argomento; ?></td>
<td valign="top" style=" border: 1px solid black;background-color: #cc0000; color: #ffffff;" ><?php  echo $descrizione; ?></td>
<?php  if($allegato!=""){?>
<?php  $comodo=explode(".",$allegato);
if($comodo[1] == "pdf"){ ?> 
<td  valign="top" style=" border: 1px solid black;background-color: #cc0000; color: #ffffff;"><a  href="JavaScript:carica_consegnaB('esponipdfff.php?fl=<?php echo $allegato; ?>&login=<?php echo $login; ?>');" >SI</a></td>  
<?php  } else { ?> 
<td  valign="top" style=" border: 1px solid black;background-color: #cc0000; color: #ffffff;"><a href="JavaScript:carica_consegnaB('esponiimage.php?fl=<?php echo $allegato; ?>&login=<?php echo $login; ?>');" >SI</a></td>  
 <?php }?>

<?php  } else { ?>
<td valign="top" style=" border: 1px solid black;background-color: #cc0000; color: #ffffff;" >NO</td>
<?php  } ?>
<td valign="top" style=" border: 1px solid black;background-color: #cc0000; color: #ffffff;" ><?php  echo $stato; ?></td>
<td valign="top" style=" border: 1px solid black;background-color: #cc0000; color: #ffffff;" ><?php  echo $lavorazione; ?></td>
<td  valign="top" style=" border: 1px solid black;background-color: #cc0000; color: #ffffff;"><a href="?login=<?php  echo $login; ?>&ticket=<?php  echo $codice; ?>&operatore=<?php  echo $operatore; ?>&ingranaggio=1">Rispondi</a></td>  

                                                                                                               
<td valign="top" style=" border: 1px solid black;background-color: #cc0000; color: #ffffff;" ></td>
</tr>
<?php 
$sql1w = "select * from ticketgest  where  login = '$login' and codice = '$codice' order by progr";
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
      $allegatow = $macrogruppow["allegato"];  
$sql1k = "SELECT * FROM associazione  where login = '$login'";
#echo $sql1k; 
    $resultk = $conn->query($sql1k);
    if ($resultk->num_rows > 0) {
    while($macrogruppok = $resultk->fetch_assoc())
		{ $ticketsi = $macrogruppok["ticket"]; } }  
if($ticketsi==1){$nosiletti="non letto";}else{$nosiletti="letto";}    
      ?>
<tr> 
<td valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "4e6f9a";}else{echo "cc0000";} ?>; color: #ffffff;" ><?php if($tipomessaggio=="R"){echo $nosiletti;}?></td>
<td valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "4e6f9a";}else{echo "cc0000";} ?>; color: #ffffff;" ></td>	
<td valign="top" width=100 style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "4e6f9a";}else{echo "cc0000";} ?>; color: #ffffff;" >(<?php  echo $dataoraw; ?>)</td>	
<td valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "4e6f9a";}else{echo "cc0000";} ?>; color: #ffffff;" ></td>
<td valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "4e6f9a";}else{echo "cc0000";} ?>; color: #ffffff;" ><?php  echo $descrizionew; ?></td>
<?php  if($allegatow!=""){?>
<?php  $comodo=explode(".",$allegatow);
if($comodo[1] == "pdf"){ ?>
<td  valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "4e6f9a";}else{echo "cc0000";} ?>; color: #ffffff;"><a href="JavaScript:carica_consegnaB('esponipdfff.php?fl=<?php echo $allegatow; ?>&login=<?php echo $login; ?>');" >SI</a></td>  
<?php  } else { ?>
<td  valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "4e6f9a";}else{echo "cc0000";} ?>; color: #ffffff;"><a href="JavaScript:carica_consegnaB('esponiimage.php?fl=<?php echo $allegatow; ?>&login=<?php echo $login; ?>');" >SI</a></td>  
<?php }?>

<?php  } else { ?>
<td valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "4e6f9a";}else{echo "cc0000";} ?>; color: #ffffff;" >NO</td>
<?php  } ?>
<td valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "4e6f9a";}else{echo "cc0000";} ?>; color: #ffffff;" ></td>
<td valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "4e6f9a";}else{echo "cc0000";} ?>; color: #ffffff;" ></td>
<td  valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "4e6f9a";}else{echo "cc0000";} ?>; color: #ffffff;"><?php  if($tipomessaggio=="D"){echo "<a href='?login=$login&ticket=$codicew&operatore=$operatore&ingranaggio=1' >Rispondi</a>";}else{if($tipomessaggio=="R" or $tipomessaggio=="P"){echo "<a href='?login=$login&ticket=$codicew&operatore=$operatore&ingranaggio=1' >Rispondi</a>";}}?></td>  


<td valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "4e6f9a";}else{echo "cc0000";} ?>; color: #ffffff;" ><?php  if($tipomessaggio=="R"){echo "<a href='?login=$login&ticket=$codicew&operatore=$operatore&ingranaggio=5' >Chiudi TK</a>";}?></td>
<td></td>
</tr>
	
<?php } 
}  ?>
<?php  
#echo $tessera." ".$codice."/";
if($ingranaggio==1 and $tessera == $codice ){?>
<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data">
<tr>
<td valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" ></td>	
<td valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" ></td>	
<td valign="top" width=100 style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" ></td>	
<td valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" ></td>
<td valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" ><textarea width="100%" style="background-color: #ececee" name="descrizione"  cols="50" rows="5"></textarea>
<br>
<input type="file" name="fileToUpload" id="fileToUpload" size="50" style="font-size: 12pt; font-weight: normal; background-color: #ffffff; color: #000000;"><font color="#000000">		
<br>		      
<input type="hidden" name="ingranaggio" value="2" />
<input type="hidden" name="login" value="<?php echo $login; ?>" />
<input type="hidden" name="ticket" value="<?php echo $codice; ?>" />
<input type="hidden" name="operatore" value="<?php echo $operatore; ?>" />
<input type="submit" value="Invia Risposta" name="B3">				
</td>
<td  valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;"></td>  
<td valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" >NO</td>
<td valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" ></td>
<td valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" ></td>
<td  valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;"></td>  

</tr>


<?php  } ?>
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
<td></td>


</tr>
</form>
<?php  } }?>


		</table>

<br>
<?php }?>
<?php if($ingranaggiox==600){?>
<p align="center"><b><font face="Arial" size="5" color="#993300">STORICO TICKET RICHIESTI E CHIUSI</font></b></p></h1><h2> 

<table border="1" width="100%" bgcolor="#FFF4F7" class="table6">
<tr>
<td style="color: #000000; font-size: 20px;" >Proc.</td>
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
if($operatore == "AMMINISTRATORE"){
$sql1 = "select * from ticket  where stato = 'CHIUSO'  order by codice, dataora";
}else{
$sql1 = "select * from ticket  where stato = 'CHIUSO' and operatore = '$operatore' order by codice, dataora";
}
#echo  $sql1;
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
      $login = $macrogruppo["login"];
      $allegato = $macrogruppo["allegato"];
      $operatore = $macrogruppo["operatore"];
      $procedura = $macrogruppo["procedura"];	
      $tot++;
?>
<tr>
<td colspan="10" align="center" style=" border: 1px solid black;background-color: #059d3e; color: #ffffff;font-size: 20px;" ><b><?php  echo "TK: ".$codice." - utente: ".$login. "  assegnato a: ".$operatore; ?></b> </b>
</tr>
<tr>
<td valign="top" style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" ><?php  echo $procedura; ?></td>
<td valign="top" style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" ><?php  echo $codice; ?></td>	
<td valign="top" width=100 style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" >(<?php  echo $dataora; ?>)</td>	
<td valign="top" style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" ><?php  echo $argomento; ?></td>
<td valign="top" style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" ><?php  echo $descrizione; ?></td>
<?php  if($allegato!=""){?>
<?php  $comodo=explode(".",$allegato);
if($comodo[1] == "pdf"){ ?>
<td  valign="top" style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;"><a style="color: #ffffff;" href="JavaScript:carica_consegnaB('esponipdfff.php?fl=<?php echo $allegato; ?>&login=<?php echo $login; ?>');" >SI</a></td>  
<?php  } else { ?>
<td  valign="top" style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;"><a href="JavaScript:carica_consegnaB('esponiimage.php?fl=<?php echo $allegato; ?>&login=<?php echo $login; ?>');" >SI</a></td>  
<?php }?>

<?php  } else { ?>
<td valign="top" style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" >NO</td>
<?php  } ?>
<td valign="top" style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" ><?php  echo $stato; ?></td>
<td valign="top" style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" ><?php  echo $lavorazione; ?></td>
<td  valign="top" style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;"><a href="statotic1.php?fl=<?php echo $allegato; ?>&login=<?php echo $login; ?>&ticket="<?php  echo $codice; ?> ></a></td>  


<td valign="top" style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" ></td>
</tr>
<?php 
$sql1w = "select * from ticketgest  where   codice = '$codice' order by progr";
#echo $sql1w;
$result1w = $conn->query($sql1w);
if ($result1w->num_rows > 0) {
  while($macrogruppow = $result1w->fetch_assoc())
		{ 
      $progr = $macrogruppow["progr"];  
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
<td valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "cc0000";}else{echo "4e6f9a";} ?>; color: #ffffff;" ><?php  echo $codicew; ?></td>	
<td valign="top" width=100 style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "cc0000";}else{echo "4e6f9a";} ?>; color: #ffffff;" >(<?php  echo $dataoraw; ?>)</td>	
<td valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "cc0000";}else{echo "4e6f9a";} ?>; color: #ffffff;" ></td>
<td valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "cc0000";}else{echo "4e6f9a";} ?>; color: #<?php if($tipomessaggio=="C" or $tipomessaggio == "P"){echo "fbf820";}else{echo "ffffff";}?>;" ><?php  echo $descrizionew; ?></td>
<?php  
#echo "proc ".$procedura; exit;
if($allegatow!=""){?>
<?php  $comodo=explode(".",$allegatow);
if($comodo[1] == "pdf"){ 
if($procedura=="auserborgo")
{
?>
<td  valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "cc0000";}else{echo "4e6f9a";} ?>; color: #ffffff;"><a href="JavaScript:carica_consegnaB('https://www.auserborgo.it/esponipdfff.php?fl=<?php echo $allegatow; ?>&login=<?php echo $login; ?>');" >SI</a></td>  
<?php 
} else { ?>
<td  valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "cc0000";}else{echo "4e6f9a";} ?>; color: #ffffff;"><a href="JavaScript:carica_consegnaB('esponipdfff.php?fl=<?php echo $allegatow; ?>&login=<?php echo $login; ?>');" >SI</a></td>  
<?php  }
 } else { 
if($procedura=="auserborgo")
{
?> 
<td  valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "cc0000";}else{echo "4e6f9a";} ?>; color: #ffffff;"><a href="JavaScript:carica_consegnaB('https://www.auserborgo.it/esponiimage.php?fl=<?php echo $allegatow; ?>&login=<?php echo $login; ?>');" >SI</a></td>  
<?php 
} else { ?>
<td  valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "cc0000";}else{echo "4e6f9a";} ?>; color: #ffffff;"><a href="JavaScript:carica_consegnaB('esponiimage.php?fl=<?php echo $allegatow; ?>&login=<?php echo $login; ?>');" >SI</a></td>  
<?php  } 
}?>

<?php  } else { ?>
<td valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "cc0000";}else{echo "4e6f9a";} ?>; color: #ffffff;" >NO</td>
<?php  } ?>
<td valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "cc0000";}else{echo "4e6f9a";} ?>; color: #ffffff;" ></td>
<td valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "cc0000";}else{echo "4e6f9a";} ?>; color: #ffffff;" ></td>
<td  valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "cc0000";}else{echo "4e6f9a";} ?>; color: #ffffff;"><?php  if($tipomessaggio=="D"){echo "";}else{echo "";}?></a></td>  


<td valign="top" style=" border: 1px solid black;background-color: #<?php  if($tipomessaggio=="R"){echo "cc0000";}else{echo "4e6f9a";} ?>; color: #ffffff;" ><?php  if($tipomessaggio=="C"){echo "<a href='?login=$login&ticket=$codicew&ingranaggio=6' >Riapri TK</a>";}?></td>
<td></td>
</tr>
	
<?php } 
}  ?>
<?php  if($ingranaggio==1){?>
<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data">
<tr>
<td valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" ></td>	
<td valign="top" width=100 style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" ></td>	
<td valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" ></td>
<td valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" ><textarea width="100%" style="background-color: #ececee" name="descrizione"  cols="70" rows="5"></textarea>
<td></td>
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
<td></td>
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
<td></td>

</tr>
</form>
<?php  } } ?>


		</table>

<br>
<?php } ?>
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