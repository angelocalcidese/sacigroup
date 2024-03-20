<?php
session_start(); if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){ $larg= $_SESSION['screen_width'] ; $alt= $_SESSION['screen_height']; } else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) { $_SESSION['screen_width'] = $_REQUEST['width']; $_SESSION['screen_height'] = $_REQUEST['height']; header('Location: ' . $_SERVER['PHP_SELF']); } else { echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width+"&height="+screen.height;</script>'; } 

include "conf_DB.php";                
$clientew=$_REQUEST["clientey"];
$commessaw=$_REQUEST["commessay"];
$slaw=$_REQUEST["slay"];
$attivitaw=$_REQUEST["attivitay"];
$attivew=$_REQUEST["attivey"];
$ingranaggio=$_REQUEST["ingranaggio"];
$ingranaggiott=$_REQUEST["ingranaggiott"];
#echo "in ".$ingranaggio;
$login=$_REQUEST["login"];

$commessa=$_REQUEST["commessa"];
$progr=$_REQUEST["progr"];
$login=$_REQUEST["login"];
$cliente=$_REQUEST["cliente"];
$attivita=$_REQUEST["attivita"];
$rif=$_REQUEST["rif"];
$dal=$_REQUEST["dal"];
$al=$_REQUEST["al"];
$ordine=$_REQUEST["ordine"];
$notegen=$_REQUEST["notegen"];
$tipoattivita=$_REQUEST["tipoattivita"];
$sla=$_REQUEST["sla"];
$materiale=$_REQUEST["materiale"];
$copiecolore=$_REQUEST["copiecolore"];
$copieb=$_REQUEST["copieb"];
$noteatt=$_REQUEST["noteatt"];
$testo=$_REQUEST["testo"];
$tipofatta=$_REQUEST["tipofatta"];
$periodofatta=$_REQUEST["periodofatta"];

$caricoa=$_REQUEST["caricoa"];
$importoa=$_REQUEST["importoa"];
$tipofattp=$_REQUEST["tipofattp"];
$periodofattp=$_REQUEST["periodofattp"];
$caricop=$_REQUEST["caricop"];
$importop=$_REQUEST["importop"];
$notefatt=$_REQUEST["notefatt"];


if ($ingranaggio=="7")
{
$newdata=$_POST["newdata"];
$newoggetto=$_POST["newoggetto"];
$clientexx=$_POST["commessa"];
#echo "data ".$newdata." ogg ".$newoggetto." cli ".$clientexx; 

$uploadOk = 1;
if ($newdata=="") {echo " <b><font color='#FF0000'>**missing document date** </font></b>"; $uploadOk = 0;}
if ($newoggetto=="") {echo "<b><font color='#FF0000'>MANCA OGGETTO DEL DOCUMENTO OPPURE </font></b>"; $uploadOk = 0;}
$cliente=$_SESSION["SPICLIENTLOGGED"];
$nomefile=basename($_FILES["fileToUpload"]["name"]);
if ($nomefile=="") {echo "<b><font color='#FF0000'> MANCA DOCUMENTO DA CARICARE OPPURE </font></b>"; $uploadOk = 0;}
$lunghezza=strlen($nomefile);
$lunghezza=$lunghezza-4;
$nomefileparz=substr($nomefile, 0, $lunghezza);
$errorefile=strpos($nomefileparz, ' ');




$pieces = explode("/", $newdata);
$newdata=$pieces[2]."-".$pieces[1]."-".$pieces[0];
if ($pieces[2]=="0000"){$newdata=$oggix;}
$target_dir = "documenti/";

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

$sql1 = "SELECT * FROM progressivofile  where progr = '1' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $tesseraww = $macrogruppo["numero"];	 
			} }
$tesseraww++;
$sql = "UPDATE progressivofile set 
numero = '$tesseraww'
where 
progr = '1' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 
    $estensione=explode(".",$nomefile);
$newfile=$tessera."-".$tesseraww.".".$estensione[1];
$target_dire = "documenti/";

$target_filee = $target_dire . $newfile;


    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_filee)) {
        #echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
$comodo=explode("-",$newdata);
$newdata=$comodo[2]."/".$comodo[1]."/".$comodo[0];


$newoggetto=str_replace("'", "\'", $newoggetto); 
       $sql = "INSERT INTO documenti
              (               
              tipodoc, 
              datadoc, 
              oggetto, 
              file) 
            VALUES (            
              '$clientexx',
              '$newdata', 
              '$newoggetto',
              '$newfile'
              )";

  if ($conn->query($sql) === TRUE)
        { } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 

$ingranaggio=10; 
 } }
}



#$importo=number_format($importo, 2);
$erroreriferimento="";
if ($ingranaggio==100)
   { 
$errore="";      
$sql = "Update commesse set                           
cliente='$cliente', 
attivita='$attivita', 
rif='$rif', 
dal='$dal', 
al='$al', 
ordine='$ordine', 
notegen='$notegen', 
sla='$sla', 
materiale='$materiale', 
copiecolore='$copiecolore', 
copieb='$copieb', 
noteatt='$noteatt', 
testo='$testo', 
tipofatta='$tipofatta', 

periodofatta='$periodofatta', 
caricoa='$caricoa', 
importoa='$importoa', 
tipofattp='$tipofattp', 
periodofattp='$periodofattp', 
caricop='$caricop', 
importop='$importop', 
login='$login'
where progr = '$progr' ";
  #echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {$errore="Cliente Modificato Correttamente"; } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 
   
} 
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>inserimento documenti</title>


  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


</head>
</head>
<style>
@font-face {
   font-family: 'Montserrat';
   src: url(Montserrat.eot);
   src: local('Montserrat'), url('Montserrat.ttf') format('truetype');
}
body {
  background-color: #e5e5e5;
}
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 0px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 350px;
  height: 160;
  background-color: #c0bff8;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
    border: 10px solid #99cf8c;
 box-shadow: 5px 10px 18px #1b5633;
  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
} 


.tooltipx {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltipx .tooltiptext {
  visibility: hidden;
  width: 400px;
  height: 700;
  background-color: #feaaaa;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  border: 3px solid #b0adad;
 box-shadow: 5px 10px 18px #1b5633;
  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltipx:hover .tooltiptext {
  visibility: visible;
}  
</style>
<style>
div#container {
min-width:   650px;
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
    color: #000000;
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


<?php 


#echo $ingranaggio;
if($ingranaggio==33 or $ingranaggio==100){
#echo "ivax ".$ivax;
if ($commessaw!="")
   {$selezionacommessa= " and commessa like '".$commessaw."%"."' ";}
   else
   {$selezionacommessa="";}
if ($clientew!="Tutti")
   {$selezionacliente= " and (cliente like '".$clientew."%"."'".") ";}
   else
   {$selezionacliente="";}
if ($slaw!="Tutti")
   {$selezionasla= " and sla = '".$slaw."' ";}
   else
   {$selezionasla="";}

if ($attivitaw!="Tutte")
   {$selezionaattivita= " and attivita = '".$attivitaw."' ";}
   else
   {$selezionaattivita="";}



}
?>
<script language="javascript">

function xyz() {
var dataRilascio = document.form.dataoperazione.value;
var oggi = new Date();
var giorno = oggi.getDate();
var mese = oggi.getMonth() + 1;
var anno = oggi.getYear();
var datacompleta = giorno + "/" + mese + "/" + anno;

//controllo formato del mese
if (mese < 10) {
mese = "0" + mese;
}
// controllo sul valore del mese
if (mese > 12){
alert ("Il mese inserito non č valido");
}
// controllo il formato del giorno
if (giorno < 10) {
giorno = "0" + giorno;
}
// controllo sul valore del giorno
if (giorno > 31){
alert("Il giorno non č valido");
}

if (dataRilascio > datacompleta) {

let confirmAction = confirm("ATTENZIONE la data ha un valore maggiore del " +
datacompleta);
        if (confirmAction === true) {
        alert("Hai premuto OK");
         
        } else {
        dataoperazione.focus(); 
            return false; 
        }
}
}
</script>
<script type="text/javascript">
		
		function controllo(){ 
            with(document.modulo) { 
        
                    

        if(dataoperazione.value=="") { 
            alert("Error: manca DATA DEL DOCUMENTO"); 
            dataoperazione.focus(); 
            return false; 
                              } 
                              
         if(ragsoc.value=="") { 
            alert("Error: manca RAGIONE SOCIALE"); 
            ragsoc.focus(); 
            return false; 
                              }  
         if(via.value=="") { 
            alert("Error: manca VIA"); 
            via.focus(); 
            return false; 
                              }  
         if(citta.value=="") { 
            alert("Error: manca CITTA'"); 
            citta.focus(); 
            return false; 
                              }               
          if(cap.value=="") { 
            alert("Error: manca CAP"); 
            cap.focus(); 
            return false; 
                              }                      
                              
          if(prov.value=="") { 
            alert("Error: manca PROVINCIA"); 
            prov.focus(); 
            return false; 
                              }                                                                                                   
          if(regione.value=="") { 
            alert("Error: manca REGIONE"); 
            regione.focus(); 
            return false; 
                              } 
          if(iva.value=="") { 
            alert("Error: manca IVA"); 
            iva.focus(); 
            return false; 
                              } 
                              
          if(acro.value=="") { 
            alert("Error: manca ACRONICO"); 
            acro.focus(); 
            return false; 
                              }                                         
                                                     
                                  } 
        } 
</script>

<body>
<div align="center">   

<?php { 
#echo "ragsocxx ".$ragsocx;
#echo "ivax ".$ivax;
$sql = "SELECT *  FROM  commesse where  progr = '13' ";  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
     $progr = $macrogruppo["progr"];
     $cliente = $macrogruppo["cliente"];
     $attivita = $macrogruppo["attivita"];
     $rif = $macrogruppo["rif"];
     $dal = $macrogruppo["dal"];
     $al = $macrogruppo["al"];
     
     $ordine = $macrogruppo["ordine"];
     $notegen = $macrogruppo["notegen"];
     $tipoattivita = $macrogruppo["tipoattivita"];
     $sla = $macrogruppo["sla"];
     $materiale = $macrogruppo["materiale"];
     
     $copiecolore = $macrogruppo["copiecolore"];
     $copieb = $macrogruppo["copieb"];
     $noteatt = $macrogruppo["noteatt"];
     $testo = $macrogruppo["testo"];
     $tipofatta = $macrogruppo["tipofatta"];
     
     $periodofatta = $macrogruppo["periodofatta"];
     $caricoa = $macrogruppo["caricoa"];
     $importoa = $macrogruppo["importoa"];
     $tipofattp = $macrogruppo["tipofattp"];
     $periodofattp = $macrogruppo["periodofattp"];
     
     $caricop = $macrogruppo["caricop"];
     $importop = $macrogruppo["importop"];
     $notefatt = $macrogruppo["notefatt"];
?>
<br>
<table align="left">
<tr>
<td align="left" width="50%">
<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data">
<table width="97%">
                <td colspan="2" width="650" align="center" style=" border: 1px solid #949699;background: #476b5d;"  ><font face="Montserrat" color="#ffffff" style="font-size: 12pt;"><b>Riferimenti Generici</b></font>
            </td>            
            </tr>
            
            <tr>
            <td colspan="1" align="left" width="220" style=" border: 1px solid #949699;" ><b><font face="Montserrat" color="#000000" style="font-size: 10pt;">Cliente</font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <select size="1" name="cliente" style="background-color: #ececee">          
<?php
$sql = "SELECT *  FROM  clienti where login = '$login' order by ragsoc ";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($macrogruppo = $result->fetch_assoc())	
	{       $ragsoc = $macrogruppo["ragsoc"];
            $codice = $macrogruppo["codice"];     
?>                 		
            <option value="<?php echo $codice; ?>"><?php echo $ragsoc; ?></option>          
<?php  }} ?>
            </select>
            </td>
            </tr>
            
			<tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt;" ><font face="Montserrat" color="#000000">Attività: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <select size="1" name="attivita" style="background-color: #ececee">          
<?php
$sql = "SELECT *  FROM  attivita  order by codice ";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($macrogruppo = $result->fetch_assoc())	
	{       $codice = $macrogruppo["codice"];
            $descrizione = $macrogruppo["descrizione"];     
?>                 		
            <option ><?php echo $codice; ?></option>          
<?php  }} ?>
            </select>
            </td>
            </tr>
            
            <tr>
			<td align="left" valign="top" style=" border: 1px solid #949699;font-size: 10pt;" ><font face="Montserrat" color="#000000">Riferimenti del Cliente: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <textarea style="background-color: #ececee" name="rif"  cols="57" rows="8"><?php echo $rif; ?></textarea></td>
            </tr>
            
            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #949699;" width="20%"><font face="Montserrat" color="#000000" style="font-size: 10pt;">Contratto Dal:</font>
            </td>
            <td style=" border: 1px solid #949699;" ><input maxlength="10" type="text" name="dal" value="<?php echo $dal; ?>" autocomplete="off" id="popupDatepicker1" size="10" style="background-color: #cac7c7; border: 0px; font-size: 10pt;"><font face="Montserrat" color="#000000"></font>
			</td>
            </tr>
            
             <tr>
            <td colspan="1" align="left" style=" border: 1px solid #949699;" ><font face="Montserrat" color="#000000" style="font-size: 10pt;">Contratto Al:</font>
            </td>
            <td style=" border: 1px solid #949699;" ><input maxlength="10" type="text" name="al" value="<?php echo $al; ?>" autocomplete="off" id="popupDatepicker2" size="10" style="background-color: #cac7c7; border: 0px; font-size: 10pt;"><font face="Montserrat" color="#000000"></font>
			</td>
            </tr>
            
            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #949699;" ><font face="Montserrat" color="#000000" style="font-size: 10pt;">Ordine Cliente:</font>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="ordine" value="<?php echo $ordine; ?>" maxlength="60" size="56" style="background-color: #cac7c7; border: 0px; font-size: 12pt;">
            </td>
            </tr>
            
            <tr>
			<td align="left" valign="top" style=" border: 1px solid #949699;font-size: 10pt;" ><font face="Montserrat" color="#000000">Note Generali: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <textarea style="background-color: #ececee" name="notegen"  cols="57" rows="8"><?php echo $notegen; ?></textarea></td>
            </tr>
            
            <tr>
            <td colspan="2" align="center" style=" border: 1px solid #949699;background: #476b5d;"  ><font face="Montserrat" color="#ffffff" style="font-size: 12pt;"><b>Specifiche Attività</b></font>
            </td>            
            </tr>
            
            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #949699;" ><font face="Montserrat" color="#000000" style="font-size: 10pt;">Tipo Attività:</font>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="tipoattivita" value="<?php echo $tipoattivita; ?>" maxlength="80" size="56" style="background-color: #cac7c7; border: 0px; font-size: 12pt;">
            </td>
            </tr>
            
            <tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt;" ><font face="Montserrat" color="#000000">SLA Intervento: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <select size="1" name="sla" style="background-color: #ececee">          
<?php
$sql = "SELECT *  FROM  sla  order by codice ";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($macrogruppo = $result->fetch_assoc())	
	{       $codice = $macrogruppo["codice"];
            $descrizione = $macrogruppo["descrizione"];     
?>                 		
            <option ><?php echo $codice; ?></option>          
<?php  }} ?>
            </select>
            </td>
            </tr>
            
            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #949699;" ><font face="Montserrat" color="#000000" style="font-size: 10pt;">Materiale:</font>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="materiale" value="<?php echo $materiale; ?>" maxlength="200" size="56" style="background-color: #cac7c7; border: 0px; font-size: 12pt;">
            </td>
            </tr>
            
            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #949699;" ><font face="Montserrat" color="#000000" style="font-size: 10pt;">Copie Colore Anno:</font>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="copiecolore" value="<?php echo $copiecolore; ?>" maxlength="200" size="56" style="background-color: #cac7c7; border: 0px; font-size: 12pt;">
            </td>
            </tr>
            
            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #949699;" ><font face="Montserrat" color="#000000" style="font-size: 10pt;">Copie B/N Anno:</font>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="copieb" value="<?php echo $copib; ?>" maxlength="200" size="56" style="background-color: #cac7c7; border: 0px; font-size: 12pt;">
            </td>
            </tr>
            
            <tr>
			<td align="left" valign="top" style=" border: 1px solid #949699;font-size: 10pt;" ><font face="Montserrat" color="#000000">Note Attività: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <textarea style="background-color: #ececee" name="noteatt"  cols="57" rows="12"><?php echo $noteatt; ?></textarea></td>
            </tr>
            
            <tr>
			<td align="left" valign="top" style=" border: 1px solid #949699;font-size: 10pt;" ><font face="Montserrat" color="#000000">Ripartizioni: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <div align="left"> 
            <div class="row">
            <div class="col-xs-12">
            <textarea name="testo" id="ta-1" cols="30" rows="50"><?php echo $testo; ?></textarea>
            </div>
            </div>
            </div></td>
            </tr>
           
            <tr>
            <td colspan="2" align="center" style=" border: 1px solid #949699;background: #476b5d;"  ><font face="Montserrat" color="#ffffff" style="font-size: 12pt;"><b>Specifiche Economiche</b></font>
            </td>            
            </tr>
            
            <tr>
			<td colspan="2" align="left" valign="top" style=" border: 1px solid #949699;font-size: 10pt;" ><font face="Montserrat" color="#000000"><b>Fatturazione Attiva</b> </font></b>
            </td>
            </tr>
            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #949699;" ><font face="Montserrat" color="#000000" style="font-size: 10pt;">Tipo Fatturazione:</font>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="tipofatta" value="<?php echo $tipofatta; ?>" maxlength="200" size="56" style="background-color: #cac7c7; border: 0px; font-size: 12pt;">
            </td>
            </tr>
           
            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #949699;" ><font face="Montserrat" color="#000000" style="font-size: 10pt;">Periodicità Fatt.:</font>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="periodofatta" value="<?php echo $periodofatta; ?>" maxlength="200" size="56" style="background-color: #cac7c7; border: 0px; font-size: 12pt;">
            </td>
            </tr>
           
            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #949699;" ><font face="Montserrat" color="#000000" style="font-size: 10pt;">In Carico a:</font>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="caricoa" value="<?php echo $caricoa; ?>" maxlength="200" size="56" style="background-color: #cac7c7; border: 0px; font-size: 12pt;">
            </td>
            </tr>

            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #949699;" ><font face="Montserrat" color="#000000" style="font-size: 10pt;">Importi:</font>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="importoa" value="<?php echo $importoa; ?>" maxlength="200" size="56" style="background-color: #cac7c7; border: 0px; font-size: 12pt;">
            </td>
            </tr>
            
            <tr>
			<td colspan="2" align="left" valign="top" style=" border: 1px solid #949699;font-size: 10pt;" ><font face="Montserrat" color="#000000"><b>Fatturazione Passiva</b> </font></b>
            </td>
            </tr>
            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #949699;" ><font face="Montserrat" color="#000000" style="font-size: 10pt;">Tipo Fatturazione:</font>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="tipofattp" value="<?php echo $tipofattp; ?>" maxlength="200" size="56" style="background-color: #cac7c7; border: 0px; font-size: 12pt;">
            </td>
            </tr>
           
            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #949699;" ><font face="Montserrat" color="#000000" style="font-size: 10pt;">Periodicità Fatt.:</font>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="periodofattp" value="<?php echo $periodofattp; ?>" maxlength="200" size="56" style="background-color: #cac7c7; border: 0px; font-size: 12pt;">
            </td>
            </tr>
           
            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #949699;" ><font face="Montserrat" color="#000000" style="font-size: 10pt;">In Carico a:</font>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="caricop" value="<?php echo $caricop; ?>" maxlength="200" size="56" style="background-color: #cac7c7; border: 0px; font-size: 12pt;">
            </td>
            </tr>

            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #949699;" ><font face="Montserrat" color="#000000" style="font-size: 10pt;">Importi:</font>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="importop" value="<?php echo $importop; ?>" maxlength="200" size="56" style="background-color: #cac7c7; border: 0px; font-size: 12pt;">
            </td>
            </tr>
            
            <tr>
			<td align="left" valign="top" style=" border: 1px solid #949699;font-size: 10pt;" ><font face="Montserrat" color="#000000">Note Fatturazione: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <textarea style="background-color: #ececee" name="notefatt"  cols="57" rows="8"><?php echo $notefatt; ?></textarea></td>
            </tr>
            
            <tr>
				<td >&nbsp;</td>
                <?php if($ingranaggio==11){ ?>
				<td>
                
                 <input type="hidden" name="ingranaggio" value="100" />
                 <input type="hidden" name="login" value="<?php echo $login; ?>" />
                  <input type="hidden" name="commessa" value="<?php echo $commessaw; ?>" />
                 <input type="hidden" name="cliente" value="<?php echo $clientew; ?>" />
                 <input type="hidden" name="sla" value="<?php echo $slaw; ?>" />
                 <input type="hidden" name="attivita" value="<?php echo $attivita ?>" />
                 <input type="submit" value="Modifica Commessa" style="height: 22px; background-color: #cc0000;border: 0px; color: #ffffff;" name="B3xxx"></td>               
			<?php } ?>
            </tr>
            <tr>
            <td>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </td>
            </tr>                   
            </table>
</form>    
</td>
<td align="right" valign="top" width="50%">


<?php   }}} 
#echo "ing ".$ingranaggio;

#echo "ing ".$ingranaggio;
?>
</div>
</div>
</div>
 <script>
(function() {
	var content =
		"<p><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzC_Ho_08G0m7PyxJOPLpPujM9UTLxvaE-5nXewscnqa3GMWjGwg' alt='Image result for summernote.js'></p><h1>Summernote</h1>";
	var $sumNote = $("#ta-1")
		.summernote({
			callbacks: {
				onPaste: function(e,x,d) {
					$sumNote.code(($($sumNote.code()).find("font").remove()));
				}
			},

			dialogsInBody: true,
			dialogsFade: true,
			disableDragAndDrop: true,
			//                disableResizeEditor:true,
			height: "250px",
            width: "500px",
			tableClassName: function() {
				//alert("tbl");
				$(this)
					.addClass("table table-bordered")

					.attr("cellpadding", 0)
					.attr("cellspacing", 0)
					.attr("border", 1)
					.css("borderCollapse", "collapse")
					.css("table-layout", "fixed")
					.css("width", "100%");

				$(this)
					.find("td")
					.css("borderColor", "#ccc")
					.css("padding", "4px");
			}
		})
		.data("summernote");

	//get
	$("#btn-get-content").on("click", function() {
		var y =$($sumNote.code());
	
		console.log(y[0]);console.log(y.find("p> font"));
	var x = y.find("font").remove();		
		$("#content").text($("#ta-1").val());
	});
	//get text$($sumNote.code()).find("font").remove()$($sumNote.code()).find("font").remove()
	$("#btn-get-text").on("click", function() {
		$("#content").html($($sumNote.code()).text());
	});
	//set
	$("#btn-set-content").on("click", function() {
		$sumNote.code(content);
	}); //reset
	$("#btn-reset").on("click", function() {
		$sumNote.reset();
		$("#content").empty();
	});
})();
</script>
</body>

</html>