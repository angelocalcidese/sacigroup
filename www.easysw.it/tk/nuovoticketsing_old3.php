<?php
session_start(); if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){ $larg= $_SESSION['screen_width'] ; $alt= $_SESSION['screen_height']; } else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) { $_SESSION['screen_width'] = $_REQUEST['width']; $_SESSION['screen_height'] = $_REQUEST['height']; header('Location: ' . $_SERVER['PHP_SELF']); } else { echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width+"&height="+screen.height;</script>'; } 

include "conf_DB.php";
$ingranaggio=$_REQUEST["ingranaggio"];
$ingranaggioy=$_REQUEST["ingranaggioy"];
$ingranaggiott=$_REQUEST["ingranaggiott"];
$ingranaggiohh=$_REQUEST["ingranaggiohh"];
$login=$_REQUEST["login"];
$fileh=$_REQUEST["fileh"];
/*
$swce=0;
$comodoprogr="";
$sql = "SELECT * FROM loginluogo  where    login = '$login'";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
   $comodoprogr = $macrogruppo["comodoprogr"];
   $swce=1;
   }}
if($swce==0){
 $sql = "INSERT INTO loginluogo 
        (login) 
        VALUES ( 
        '$login')";
             if ($conn->query($sql) === TRUE)
             {  }
             else { echo $sql."Errore inserimento recoerd: " . $conn->error; exit;}
}  
*/ 
$errore=$_REQUEST["errore"];
$numero=$_REQUEST["numero"];
#echo "num ".$numero;
$cliente=$_REQUEST["cliente"];
$clienteintero=$_REQUEST["clienteintero"];
$commessa=$_REQUEST["commessa"];
$attivita=$_REQUEST["attivita"];
$ticketcli=$_REQUEST["ticketcli"];
$datainizio=$_REQUEST["datainizio"];
#$orainizio=$_REQUEST["orainizio"];
$tipointervento=$_REQUEST["tipointervento"];
$apparato=$_REQUEST["apparato"];
$seriale=$_REQUEST["seriale"];
$insegna=$_REQUEST["insegna"];
$ragsoc=$_REQUEST["ragsoc"];
$indirizzo=$_REQUEST["indirizzo"];
$cap=$_REQUEST["cap"];
$prov=$_REQUEST["prov"];
$citta=$_REQUEST["citta"];
$telefono=$_REQUEST["telefono"];
$contatto=$_REQUEST["contatto"];
$intervento=$_REQUEST["intervento"];
$serialeparte=$_REQUEST["serialeparte"];
$nomeparte=$_REQUEST["nomeparte"];
$spedizione=$_REQUEST["spedizione"];
$notesla=$_REQUEST["notesla"];
$nota=$_REQUEST["nota"];
$dataapp=$_REQUEST["dataapp"];
$notaapp=$_REQUEST["notaapp"];
$id=$_REQUEST["id"];
$progrnew=$_REQUEST["progrnew"];
$priorita=$_REQUEST["priorita"];



if($ingranaggio==100){
$clientex=$_REQUEST["cliente"];
}
if($ingranaggio==200){
$clientex=$_REQUEST["cliente"];
$commessax=$_REQUEST["commessasel"];
}


if ($ingranaggio=="7")
{
$newdata=$_POST["newdata"];
$newdatasca=$_POST["newdatasca"];
$newoggetto=$_POST["newoggetto"];
$clientexx=$_POST["numero"];
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
              file,
              datasca) 
            VALUES (            
              '$numero',
              '$newdata', 
              '$newoggetto',
              '$newfile',
              '$newdatasca'
              )";
#echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        { } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 

$ingranaggio=300;
$ingranaggioy=1;  
 } }
}

?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>nuovo cat</title>
<link href="./datapilcker3/jquery.datepick.css" rel="stylesheet">
<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="./bootstrap/js/bootstrap.min.js"></script>
<script src="./datapilcker3/jquery.plugin.js"></script>

																					
<script src="jquery-3.4.1.min.js"></script>
<script src="query-ui.min.js"></script>
<script type="text/javascript" src="./datapilcker3/jquery.datepick-it.js" ></script>
<script src="./datapilcker3/jquery.datepick.js"></script>
<link rel="stylesheet" href="query-ui.css">
<script>
$(function() {
	$('#popupDatepicker').datepick();
  $('#popupDatepicker1').datepick();
	$('#inlineDatepicker').datepick({onSelect: showDate});

});

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
function MM_openBrWindow(theURL,winName,features) { //v2.0
let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
width=0,height=0,left=-1000,top=-1000`;
  window.open(theURL,winName,features,params);
}
//-->
</script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Verdana:ital,wght@0,200;0,300;0,500;1,100&display=swap');

	   
@font-face {
   font-family: 'Verdana';
   src: url(Verdana.eot);
   src: local('Verdana'), url('Verdana.ttf') format('truetype');
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
div#container {
min-width:   650px;
  min-height:  500px;
  max-width:  700px;
  max-height: 1000px;
}
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
#email { background: #1C1C1C url('email.png') no-repeat 7px ; }
#emailamm { background: #1C1C1C url('email.png') no-repeat 7px ; }
#email1amm { background: #1C1C1C url('email.png') no-repeat 7px ; }
#emailop { background: #1C1C1C url('email.png') no-repeat 7px ; }
#email1op { background: #1C1C1C url('email.png') no-repeat 7px ; }
#emaillog { background: #1C1C1C url('email.png') no-repeat 7px ; }
#email1log { background: #1C1C1C url('email.png') no-repeat 7px ; }
#telefono { background: #1C1C1C url('telefono.png') no-repeat 7px ; }
#telefonoop { background: #1C1C1C url('telefono.png') no-repeat 7px ; }
#telefonolog { background: #1C1C1C url('telefono.png') no-repeat 7px ; }
#telefonoamm { background: #1C1C1C url('telefono.png') no-repeat 7px ; }

#annullaLuogo {float:right; cursor:pointer; margin-right:5px}
</style>

<?php 

$login=$_REQUEST["login"];



#$importo=number_format($importo, 2);
$erroreriferimento="";
if($ingranaggio==300 and $ingranaggioy==""){

$clienteintero=$_REQUEST["cliente"];
$clientex=$_REQUEST["cliente"];
$comodo=explode(" - ",$clientex);
$clientex=$comodo[0];
$commessax=$_REQUEST["commessa"];
$comodo=explode(" - ",$commessax);
$commessax=$comodo[0];

if($ingranaggiohh!=1){
$errore="";   
$sql1 = "SELECT * FROM progressivotk  where progr = '1' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $numero = $macrogruppo["numero"];	 
			} }
$numero++;
$sql = "UPDATE progressivotk set 
numero = '$numero'
where 
progr = '1' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; }   
$codice=$acro."-".$numero;  
$adesso=date("Y-m-d H:m:s");    
$sql = "INSERT INTO tk
( 
numero,
cliente,
commessa,
attivita,
ticketcli,
datainizio,
tipointervento,
apparato,
seriale,
intervento,
serialeparte,
nomeparte,
spedizione,
notesla,
nota,
dataapp,
notaapp,
login,
aggiornamento,
priorita) 
VALUES ( 
'$numero',
'$clientex',
'$commessax',
'$attivita',
'$ticketcli',
'$datainizio',
'$tipointervento',
'$apparato',
'$seriale',
'$intervento',
'$serialeparte',
'$nomeparte',
'$spedizione',
'$notesla',
'$nota',
'$dataapp',
'$notaapp',
'$login',
'$adesso',
'$priorita' 
)";
  #echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {$errore="Ticket ".$numero." Memorizzato Correttamente "; } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; exit;} 
} else
{
#echo "comm".$commessa; exit;

$numero=$_REQUEST["numero"];
$adesso=date("Y-m-d H:m:s"); 
#echo "numeo".$numero; exit;
$sql = "UPDATE tk set 
cliente='$clientex',
commessa='$commessax',
attivita='$attivita',
ticketcli='$ticketcli',
datainizio='$datainizio',
tipointervento='$tipointervento',
apparato='$apparato',
seriale='$seriale',
intervento='$intervento',
serialeparte='$serialeparte',
nomeparte='$nomeparte',
spedizione='$spedizione',
notesla='$notesla',
nota='$nota',
dataapp='$dataapp',
notaapp='$notaapp',
login='$login',
aggiornamento='$aggiornamento',
priorita='$priorita'
where 
numero = '$numero' 
";
#echo $sql;
if ($conn->query($sql) === TRUE)
    {$errore="Ticket ".$numero." Modificato Correttamente "; } 
    else { echo "Error inserted record: " . $conn->error; exit;}



}        
        
        
if($id==""){
$sql = "UPDATE luogo set 
insegna = '$insegna',
ragsoc='$ragsoc',
indirizzo='$indirizzo',
cap='$cap',
prov='$prov',
citta='$citta',
contatto='$contatto',
telefono='$telefono'
where 
progr = '$progrnew' 
";
#echo $sql;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; exit;} 
$sql = "INSERT INTO tkluogo
( 
numero,
insegna,
ragsoc,
indirizzo,
cap,
prov,
citta,
telefono,
contatto) 
VALUES ( 
'$numero',
'$insegna',
'$ragsoc',
'$indirizzo',
'$cap',
'$prov',
'$citta',
'$telefono',
'$contatto'
)";
  #echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {} 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; exit;} 
}   
} 
?>

<script type="text/javascript">
		
		function controllo(){ 
            with(document.modulo) { 
        
                    

        if(cliente.value=="") { 
            alert("Error: manca SCELTA CLIENTE"); 
            cliente.focus(); 
            return false; 
                              } 
         if(commessa.value=="") { 
            alert("Error: manca SCELTA COMMESSA"); 
            commessa.focus(); 
            return false; 
                              } 
         if(attivita.value=="") { 
            alert("Error: manca ATTIVITA'"); 
            attivita.focus(); 
            return false; 
                              }   
         if(tipointervento.value=="") { 
            alert("Error: manca TIPO DI INTERVENTO"); 
            tipointervento.focus(); 
            return false; 
                              }
         if(apparato.value=="") { 
            alert("Error: manca APPARATO"); 
            cliente.focus(); 
            return false; 
                              }                                                                                    
         if(seriale.value=="") { 
            alert("Error: manca SERIALE"); 
            seriale.focus(); 
            return false; 
                              } 
         if(insegna.value=="") { 
            alert("Error: manca INSEGNA"); 
            insegna.focus(); 
            return false; 
                              }                                           
         if(ragsoc.value=="") { 
            alert("Error: manca RAGIONE SOCIALE"); 
            ragsoc.focus(); 
            return false; 
                              }  
         if(indirizzo.value=="") { 
            alert("Error: manca INDIRIZZO LUOGO INTERVENTO"); 
            via.focus(); 
            return false; 
                              }  
         if(citta.value=="") { 
            alert("Error: manca CITTA' LUOGO INTERVENTO"); 
            citta.focus(); 
            return false; 
                              }               
          if(intervento.value=="") { 
            alert("Error: manca DESCRIZIONE DELL'INTERVENTO"); 
            intervento.focus(); 
            return false; 
                              }                      
           if(serialeparte.value=="") { 
            alert("Error: manca DESCRIZIONE DELL'INTERVENTO"); 
            serialeparte.focus(); 
            return false; 
                              }                      
                                                     
                                  } 
        } 

function pulisciLuogo(){
  $("#insegnaF").val("");
  $("#cittaF").val("");
  $("#contattoF").val("");
  $("#ragsocF").val("");
  $("#indirizzoF").val("");
  $("#capF").val("");
  $("#telefonoF").val("");
  $("#provF").val("");
	$("#progr").val("");
  $("#progrId").text("");
}
</script>
</head>
<body>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inserimento nuovo luogo intervento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php include("esponiluogo.php"); ?>
      </div>
     
    </div>
  </div>
</div>
<!-- FINE MODALE  -->
<!-- Modal 1-->
<div class="modal fade" id="leggiclienti" tabindex="-1" aria-labelledby="leggiclientiLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="leggiclientiLabel">Clienti</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <?php include("chiamatasingolo.php"); ?>  
      </div>
     
    </div>
  </div>
</div>
<!-- FINE MODALE  1-->
<?php

?>

<br>
<div align="center">   
<br>
<p align=center"><font face="Verdana"  style="font-size: 18pt;color: #cc0000;"><?php echo $errore; ?></font>
<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data"> 
<table width="60%">

<tr> <tr>
           
            <td colspan="3"   align="left" style="border-radius: 3px; border: 1px solid #949699;background: #476b5d;color: ffffff;" > <font face="Verdana"  style="font-size: 10pt;">Identificazione:</font></b>
            </td>
            </tr>
<tr> <tr align="center">
            <td height="45" colspan="1"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" ><font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Cliente:</b>
            <img border="0" src="lente1.png" width="15" height="15"  data-bs-toggle="modal" data-bs-target="#leggiclienti" style="cursor:pointer">
            <br></font></b>
            <input type="text" id="cliente" onkeyup="Ricerca()" name="cliente" value="<?php echo $clienteintero; ?>" maxlength="100" size="40" style="background-color: #ffffff;border-radius: 3px; border: 0px; font-size: 12pt;">   
<!--            <input id="ricerca" onkeyup="Ricerca()" name="ricerca">   -->
            </td>
            
            <td colspan="2"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Commessa:</b><br></font></b>
            <input type="text" id="commessa" onkeyup="Ricerca1()" name="commessa" value="<?php echo $commessa; ?>" maxlength="120" size="60" style="background-color: #ffffff; border: 0px; border-radius: 3px;font-size: 12pt;">
            </td>            
            </tr>
            <tr> <tr align="left">
            <td height="45" colspan="1"  align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" ><font face="Verdana" color="#000000" style="font-size: 8pt;"><b>AttivitÃ :</b><br></font></b>
            <input type="text" name="attivita" value="<?php echo $attivita; ?>" maxlength="50" size="40" style="background-color: #ffffff;border-radius: 3px; border: 0px; font-size: 12pt;">
            </td>
            
            <td colspan="1"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>N. Ticket Cliente:</b><br></font></b>
            <input type="text" name="ticketcli" value="<?php echo $ticketcli; ?>" maxlength="60" size="30" style="background-color: #ffffff; border: 0px; border-radius: 3px;font-size: 12pt;">
            </td>
<?php $oggi=date("d/m/Y H:m:s");
if($datainizio==""){$datainizio=$oggi;} ?>           
            <td colspan="1"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Data di aperura:</b><br></font></b>
            <input maxlength="10" type="text" name="datainizio" value="<?php echo $datainizio; ?>" autocomplete="off" id="popupDatepicker" size="25" style="border-radius: 3px;background-color: #ffffff; border: 0px; font-size: 12pt;">
			</td>
            
            
            </tr>



             <tr><tr>
            <td height="45" colspan="1"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Tipo intervento:</b><br></font></b>
            <input type="text" name="tipointervento" value="<?php echo $tipointervento; ?>" maxlength="200" size="40" style="background-color: #ffffff; border-radius: 3px;border: 0px; font-size: 12pt;">
            </td> 
            <td colspan="1"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Apparato:</b><br></font></b>
            <input type="text" name="apparato" value="<?php echo $apparato; ?>" maxlength="200" size="30" style="background-color: #ffffff; border-radius: 3px;border: 0px; font-size: 12pt;">
            </td>
            <td colspan="1"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Seriale:</b><br></font></b>
            <input type="text" name="seriale" value="<?php echo $seriale; ?>" maxlength="200" size="25" style="background-color: #ffffff; border-radius: 3px;border: 0px; font-size: 12pt;">
            </td>
            </tr>
             <? if($priorita==""){$priorita="verde";} ?>
             <tr><tr>
            <td height="45" colspan="1"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Priorità alta:</b><br></font></b>
            <input type="radio" name="priorita" id="rosso" value="rosso" <?php if ($priorita=="rosso"){echo "checked";} ?> style="width: 35px;height: 35px;accent-color: red;">
            </td> 
            <td colspan="1"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Priorità media:</b><br></font></b>
            <input type="radio" name="priorita" id="giallo" value="giallo" <?php if ($priorita=="giallo"){echo "checked";} ?> " style="width: 35px;height: 35px;accent-color: yellow;">
            </td>
            <td colspan="1"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Priorità Normle:</b><br></font></b>
            <input type="radio" name="priorita" id="verde" value="verde" <?php if ($priorita=="verde"){echo "checked"; } ?>   style="width: 35px;height: 35px;accent-color: green;border: 15px solid green;background-color: green;">
            </td>
            </tr>
            
             <tr> <tr>
           
            <td colspan="3"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #476b5d;color: ffffff;" > 
            <!--<font face="Verdana"  style="font-size: 10pt;">Luogo intervento: 
              <a href="javascript:MM_openBrWindow('esponiluogo.php?login=<?php echo $login; ?>&chiave=<?php echo $codice; ?>&cliente=<?php echo $cliente; ?>',' ','width=1400,height=450,left=100,top=250');">
                <img border="0" src="lente1.png" width="15" height="15">
              </a>
           </font>-->
           <font face="Verdana"  style="font-size: 10pt;">Luogo intervento: 
              <img border="0" src="lente1.png" width="15" height="15" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor:pointer">
           
		   <span id="progrId" style="float:right"></span><span id="annullaLuogo" onClick="pulisciLuogo()">&#x2715; Svuota Luogo</span>
       </font>
        </b>
            </td>
            </tr>
            
            <tr><tr>
            <td height="45" colspan="1"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Insegna:</b><br></font></b>
            <input type="text" name="insegna" id="insegnaF" value="<?php echo $insegna; ?>" maxlength="200" size="40" style="background-color: #ffffff; border-radius: 3px;border: 0px; font-size: 12pt;">
            </td>
            <td  colspan="2"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Ragione Sociale:</b><br></font></b>
            <input type="text" name="ragsoc" id="ragsocF" value="<?php echo $ragsoc; ?>" maxlength="200" size="60" style="background-color: #ffffff; border-radius: 3px;border: 0px; font-size: 12pt;">
            </td>
            </tr>
            <tr><tr>
             <td colspan="1"  align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Indirizzo:</b><br></font></b>
             <input type="text" name="indirizzo" id="indirizzoF" value="<?php echo $indirizzo; ?>" maxlength="200" size="40" style="background-color: #ffffff; border-radius: 3px;border: 0px; font-size: 12pt;">
            </td>
             <td colspan="1"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Cap: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; Prov:</b><br></font></b>
            <input type="text" name="cap" id="capF" value="<?php echo $cap; ?>" maxlength="200" size="5" style="background-color: #ffffff; border-radius: 3px;border: 0px; font-size: 12pt;">
            <input type="text" name="prov" id="provF" value="<?php echo $prov; ?>" maxlength="200" size="5" style="background-color: #ffffff; border-radius: 3px;border: 0px; font-size: 12pt;">
            
            </td>
             <td colspan="1"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>CittÃ :</b><br></font></b>
            <input type="text" name="citta" id="cittaF" value="<?php echo $citta; ?>" maxlength="200" size="25" style="background-color: #ffffff; border-radius: 3px;border: 0px; font-size: 12pt;">
            </td>
            </tr>
            
             <tr><tr>
            <td height="45" colspan="1"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Telefoni:</b><br></font></b>
            <input type="text" name="telefono" id="telefonoF" value="<?php echo $telefono; ?>" maxlength="200" size="40" style="background-color: #ffffff; border-radius: 3px;border: 0px; font-size: 12pt;">
            </td>
             <td colspan="2"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Contatto:</b><br></font></b>
             <input type="text" name="contatto" id="contattoF" value="<?php echo $contatto; ?>" maxlength="200" size="60" style="background-color: #ffffff; border-radius: 3px;border: 0px; font-size: 12pt;">
            </td>
            
            </tr>
            
            
            <tr> <tr>           
            <td colspan="3"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #476b5d;color: ffffff;" > <font face="Verdana"  style="font-size: 10pt;">Descrizione AttivitÃ  Intervento:</font></b>
            </td>
            </tr>
            
            <tr> <tr>
            <td height="40" colspan="3"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Descrizione: </b><br> </font></b>
            <textarea style="border: 0px; background-color: #ffffff;font-size: 14pt;color: #000000;" name="intervento"  cols="83" rows="1"><?php echo $intervento; ?></textarea></td>
            </tr> 
                    
            
            
           
             <tr> <tr>
           
            <td colspan="3"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #476b5d;color: ffffff;" > <font face="Verdana"  style="font-size: 10pt;">Spare Parts:</font></b>
            </td>
            </tr>
            
            <tr><tr>
            <td height="45"colspan="1"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Numero seriale:</b><br></font></b>
            <input type="text" name="serialeparte" value="<?php echo $serialeparte ?>" maxlength="200" size="40" style="background-color: #ffffff; border-radius: 3px;border: 0px; font-size: 12pt;">
            </td>
            <td height="45"colspan="2"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Nome parte:</b><br></font></b>
            <input type="text" name="nomeparte" value="<?php echo $nomeparte; ?>" maxlength="200" size="60" style="background-color: #ffffff; border-radius: 3px;border: 0px; font-size: 12pt;">
            </td>            
            </tr>
            <tr> <tr>
            <td height="40" colspan="3"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Nota per la spedizione parti di ricambio: </b><br> </font></b>
            <textarea style="border: 0px; background-color: #ffffff;font-size: 14pt;color: #000000;" name="spedizione"  cols="83" rows="1"><?php echo $spedizione; ?></textarea></td>
            </tr>
                       
               
            <tr><tr>          
            <td colspan="3"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #476b5d;color: ffffff;" > <font face="Verdana"  style="font-size: 10pt;">Descrizione Note SLA:</font></b>
            </td>
            </tr>
          
            <tr> <tr>
            <td colspan="3" height="40"  align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>SLA: </b><br> </font></b>
            <textarea style="border: 0px; background-color: #ffffff;font-size: 14pt;color: #000000;" name="notesla"  cols="83" rows="1"><?php echo $notesla; ?></textarea></td>
            </tr>
          
            <tr><tr>          
            <td colspan="3"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #476b5d;color: ffffff;" > <font face="Verdana"  style="font-size: 10pt;">Note Interne:</font></b>
            </td>
            </tr>
          
            <tr> <tr>
            <td colspan="3" height="70"  align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Note:</b> <br> </font></b>
            <textarea style="border: 0px; background-color: #ffffff;font-size: 14pt;color: #000000;" name="nota"  cols="83" rows="2"><?php echo $nota; ?></textarea></td>
            </tr>
          
          <tr><tr>         
            <td colspan="3"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #476b5d;color: ffffff;" > <font face="Verdana"  style="font-size: 10pt;">Appuntamento Intervento:</font></b>
            </td>
            </tr>
          
            <tr><tr> 
            <td colspan="1" height="50"  align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Data Ora:</b><br></font></b>
            <input type="text" name="dataapp" value="<?php echo $dataapp; ?>" maxlength="50" size="20" style="background-color: #ffffff; border-radius: 3px;border: 0px; font-size: 12pt;">
            </td>
            
            <td colspan="2"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Nota appuntamento: </b><br> </font></b>
            <textarea style="border: 0px; background-color: #ffffff;font-size: 14pt;color: #000000;" name="notaapp"  cols="40" rows="1"><?php echo $notaapp; ?></textarea></td>
            </tr>
            
          
            
       
<?php if($ingranaggio==300 ){ ?>
 <tr>
           <td colspan="3"   align="center" style="border-radius: 3px; border: 0px solid #949699;" >
           <input type="hidden" name="ingranaggio" value="300" />
           <input type="hidden" name="ingranaggiohh" value="1" />
             <input type="hidden" name="login" value="<?php echo $login; ?>" />
             <input type="hidden" name="id" value="<?php echo $progr; ?>" />
             <input type="hidden" name="numero" value="<?php echo $numero; ?>" />
             <input type="hidden" name="progrnew" id="progrnew" />
             <br><br>
             <input type="submit" value="Modifica Ticket"   style="border-radius: 3px;height: 22px; width: 140px; background-color: #13be27;border: 0px; color: #ffffff;" name="B3xxx">
           </td>  
           </tr>

<? } else { ?>           
           <tr>
           <td colspan="3"   align="center" style="border-radius: 3px; border: 0px solid #949699;" >
           <input type="hidden" name="ingranaggio" value="300" />
             <input type="hidden" name="login" value="<?php echo $login; ?>" />
             <input type="hidden" name="id" value="<?php echo $progr; ?>" />
             <input type="hidden" name="progrnew" id="progrnew" />
             <br><br>
             <input type="submit" value="Memorizza Ticket"   style="border-radius: 3px;height: 22px; width: 140px; background-color: #cc0000;border: 0px; color: #ffffff;" name="B3xxx">
           </td>  
           </tr>
<?php } ?>           
</table> 
</form> 
<?php if($ingranaggio==300){ ?> 
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Documenti Allegati</font></b></p><div align="left">    
<center>   
<div style="background-color:#cbcccd;width: 60%;" align="center">
<table align="center">
<td align="center" valign="top" width="50%">

<table border="0" width="100%" align="center"   >

	  <tr>		  
      <td style="background-color:#476b5d;font-family: Verdana;" width="15%" align="left"><font size="2" face="Verdana" color="#FFFFFF">DATA DOC.</td>
      <td style="background-color:#476b5d;font-family: Verdana;" width="15%" align="left"><font size="2" face="Verdana" color="#FFFFFF">DATA SCAD.</td>
      <td style="background-color:#476b5d;font-family: Verdana;" width="60%" align="left"><font size="2" face="Verdana" color="#FFFFFF">OGGETTO</td>
      <td colspan="2" style="background-color:#476b5d;font-family: Verdana;" width="10%" align="left"><font size="2" face="Verdana" color="#FFFFFF">OPERAZIONI&nbsp;&nbsp;</td>
      </tr>
<?
$sql = "SELECT * FROM documenti  where    tipodoc = '$numero'";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
   $prgrrr = $macrogruppo["progr"];
   $data = $macrogruppo["datadoc"];
   $datasca = $macrogruppo["datasca"];
   $tipodoc = $macrogruppo["tipodoc"];
   $oggettox= $macrogruppo["oggetto"];
   $file = $macrogruppo["file"];
?>
<tr>
<tr onMouseOver="style.background='#c9cacb';" onMouseOut="style.background=''">

      
		<td  style="font-family: Verdana;" align="left"><font size="2" face="Verdana" color="<?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>"><? echo $data; ?></td>
        <td  style="font-family: Verdana;" align="left"><font size="2" face="Verdana" color="<?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>"><? echo $datasca; ?></td>
        
        <td  style="font-family: Verdana;" align="left"><font size="2" face="Verdana" color="<?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>"><? echo $oggettox; ?></td>
		<td style=" border: 0px solid black;font-family: Verdana;" align="left" ><a href="?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&prgrx=<? echo $prgrrr; ?>&ingranaggio=300&ingranaggioy=1&ingranaggiott=201&numero=<? echo $numero; ?>&clienteintero=<? echo $clienteintero; ?>&commessa=<? echo $commessa; ?>&attivita=<? echo $attivita; ?>&ticketcli=<? echo $ticketcli; ?>&datainizio=<? echo $datainizio; ?>&tipointervento=<? echo $tipointervento; ?>&apparato=<? echo $apparato; ?>&seriale=<? echo $seriale; ?>&intervento=<? echo $intervento; ?>&serialeparte=<? echo $serialeparte; ?>&nomeparte=<? echo $nomeparte; ?>&spedizione=<? echo $spedizione; ?>&notesla=<? echo $notesla; ?>&nota=<? echo $nota; ?>&dataapp=<? echo $dataapp; ?>&notaapp=<? echo $notaapp; ?>&insegna=<? echo $insegna; ?>&ragsoc=<? echo $ragsoc; ?>&indirizzo=<? echo $indirizzo; ?>&cap=<? echo $cap; ?>&prov=<? echo $prov; ?>&citta=<? echo $citta; ?>&telefono=<? echo $telefono; ?>&contatto=<? echo $contatto; ?> &errore=<? echo $errore; ?>&priorita=<?php echo $priorita; ?>  " ><img border="0" background="btn1.gif" src="occhio.png" width="25" height="25"></a></td>
        
        
        
        
        
        <td style=" border: 0px solid black;font-family: Verdana;" align="left" >
<!--        <a  onclick="myFunction('?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&prgrx=<? echo $prgr; ?>&ingranaggio=10&ingranaggiott=202&oggetto=<?php echo $oggettox; ?>&progr=<?php echo $progr; ?>');" ><img border="0" background="btn1.gif" src="x1.png" width="15" height="15"></a>   -->
<a href="?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&prgrx=<? echo $prgrrr; ?>&ingranaggio=10&ingranaggiott=201&prgry=<?php echo $prgrrr; ?>&progr=<?php echo $progrrr; ?>"><button  onclick="return confirm('Sei sicuro di volere cancellare?')"><img border="0" src="x1.png" width="15" height="15"></button></a>

</td>

     
        </tr>
<? }}
$oggiora=date("d/m/Y"); ?>
</table>

<p align="center"><font face="Verdana" size="4" style="font-family: Verdana;" color="#993300"><br>Inserimento Nuovo Documento </font></b></p><div align="left">    
<table  border="0" width="100%" align="center" >
<form action="" method="post" enctype="multipart/form-data" >
		<tr>
		<td colspan="1" align="left" " style=" border: 0px solid #949699;font-size: 10pt;font-family: Verdana;" >
        <font style="font-family: Verdana;" face="Verdana" color="#000000" size="2" face="Verdana" color="#000000">Data Documento:</b></font>
		</td>
        <td>
        <font style="font-family: Verdana;" size="2" face="Verdana"> <input type="text" name="newdata" value="<?php echo $oggiora; ?>"  size="10"  style="background-color: #ffffff; border: 0px; font-size: 12pt;"> </font>
        <font style="font-family: Verdana;" face="Verdana" color="#000000" size="2" face="Verdana" color="#000000">Data scadenza Documento: </b></font>
		<font tyle="font-family: Verdana;" size="2" face="Verdana"> <input type="text" name="newdatasca" value="31/12/9999"  size="10"  style="background-color: #ffffff; border: 0px; font-size: 12pt;"> </font>        
        </td>
        </tr>
        <tr>
		<td align="left"  style=" border: 0px solid #949699;font-size: 10pt;font-family: Verdana;"> <font size="2" face="Verdana" color="#000000">oggetto: </b></font>
		</td>
        <td ><input type="text" name="newoggetto"   size="60"  placeholder="Inserisci qui l'oggetto del documento che stai caricando(obbligatorio)" style="background-color: #ffffff; border: 0px; font-size: 12pt;font-family: Verdana;">
        </td>
        </tr>
	
		<tr>
			<td align="left" style=" border: 0px solid #949699;font-size: 10pt;font-family: Verdana;">
       <font size="2" face="Verdana"><font color="#000000" style="font-family: Verdana;">Carica Documento:</b></font>
      </td>
	  <td align="center ><font size="2" face="Verdana">
		 <input type="hidden" name="ingranaggio" value="7" />
         <input type="hidden" name="login" value="<? echo $login; ?>" />
         <input type="hidden" name="progr" id="progr"  />
         <input type="hidden" name="cliente" value="<? echo $codice; ?>" />
<input type="hidden" name="numero" value="<? echo $numero; ?>" />         
<input type="hidden" name="clienteintero" value="<? echo $clienteintero; ?>" />
<input type="hidden" name="commessa" value="<? echo $commessa; ?>" />
<input type="hidden" name="attivita" value="<? echo $attivita; ?>" />
<input type="hidden" name="ticketcli" value="<? echo $ticketcli; ?>" />
<input type="hidden" name="datainizio" value="<? echo $datainizio; ?>" />
<input type="hidden" name="tipointervento" value="<? echo $tipointervento; ?>" />
<input type="hidden" name="apparato" value="<? echo $apparato; ?>" />
<input type="hidden" name="seriale" value="<? echo $seriale; ?>" />
<input type="hidden" name="intervento" value="<? echo $intervento; ?>" />
<input type="hidden" name="serialeparte" value="<? echo $serialeparte; ?>" />
<input type="hidden" name="nomeparte" value="<? echo $nomeparte; ?>" />
<input type="hidden" name="spedizione" value="<? echo $spedizione; ?>" />
<input type="hidden" name="notesla" value="<? echo $notesla; ?>" />
<input type="hidden" name="nota" value="<? echo $nota; ?>" />
<input type="hidden" name="dataapp" value="<? echo $dataapp; ?>" />
<input type="hidden" name="notaapp" value="<? echo $notaapp; ?>" />
<input type="hidden" name="insegna" value="<? echo $insegna; ?>" />
<input type="hidden" name="ragsoc" value="<? echo $ragsoc; ?>" />
<input type="hidden" name="indirizzo" value="<? echo $indirizzo; ?>" />
<input type="hidden" name="cap" value="<? echo $cap; ?>" />
<input type="hidden" name="prov" value="<? echo $prov; ?>" />
<input type="hidden" name="citta" value="<? echo $citta; ?>" />
<input type="hidden" name="telefono" value="<? echo $telefono; ?>" />
<input type="hidden" name="contatto" value="<? echo $contatto; ?>" /> 
<input type="hidden" name="errore" value="<? echo $errore; ?>" /> 
<input type="hidden" name="priorita" value="<? echo $priorita; ?>" />          
		 <input type="file" name="fileToUpload" id="fileToUpload" size="150" style="font-size: 12pt; font-weight: normal; background-color: #cac7c7;font-family: Verdana;">
    </td>	
    </tr>
    <tr>
    <td align="center" colspan="2"> 
    <input type="submit" value="Memorizza" size="50" name="submit" style="font-size: 12pt; font-weight: normal; background-color: #cc0000; color: #ffffff;border: 0px;font-family: Verdana;">
</form>
	</td>
    
<?php if($ingranaggiott==201){ ?>
	</tr>
    <tr>
    <td colspan="2" width="100%"><br>
<div>
<iframe  align="right" frameborder="0" width="100%" height="900" scrolling="yes" src="esponipdfffx.php?login=<?php echo $login; ?>&fl=<?php echo $fileh; ?>"></iframe> 
</div> <br>   
    </td>
    </tr>
<?php } ?>   
	</table>
</center>   
<?php } ?>     

</div>
</div>
</div>
 <p align="center"><font face="Verdana" size="4" style="font-family: Verdana;" color="#993300">Ultimi 5 ticket inseriti</font></b></p>   

<div align="left">
<table id="example" class="display" cellspacing="0" align="left" style="width:99%; position:relative;">         
             <thead class="intesta">
	<tr class="testa">
		 
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >N.Ticket</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Data</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Clente</td>        
      	  <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Commessa</td>
           <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Attività</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Tipo Intervento</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Apparato</td>            
          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Seriale.</td>
          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Rag.Soc. Luogo.</td>
           </tr>       
	</thead>
	<tbody>
<?php    
$sql = "SELECT *  FROM  tk where  login  = '$login' order by numero desc limit 5 " ;  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
     $seriale = $macrogruppo["seriale"];
     $numero = $macrogruppo["numero"];
     $cliente = $macrogruppo["cliente"];
     $commessa = $macrogruppo["commessa"];
     $attivita = $macrogruppo["attivita"];
     $datainizio = $macrogruppo["datainizio"];
     $tipointervento = $macrogruppo["tipointervento"];
     $apparato = $macrogruppo["apparato"];
$sqlx = "SELECT *  FROM  tkluogo where  numero  = '$numero' " ;  
#echo $sql;
$rCount = 1;
$resultx = $conn->query($sqlx);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc())	
	{   
     $ragsoc = $macrogruppox["ragsoc"];
     }}
$sqlx = "SELECT *  FROM  clienti where  codice  = '$cliente' " ;  
#echo $sql;
$rCount = 1;
$resultx = $conn->query($sqlx);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc())	
	{   
     $ragsoccli = $macrogruppox["ragsoc"];
     }}     
$sqlx = "SELECT *  FROM  commesse where  commessa  = '$commessa' " ;  
#echo $sql;
$rCount = 1;
$resultx = $conn->query($sqlx);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc())	
	{   
     $nomecommessa = $macrogruppox["nomecommessa"];
     }}        
?>     
    <tr >    
      <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $numero; ?></font></td>
      <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $datainizio; ?></font></td>
      <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $ragsoccli; ?></font></td>
      <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $nomecommessa; ?></font></td>
      <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $attivita; ?></font></td>
      <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $tipointervento; ?></font></td>
      <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center"><font size="2" face="Verdana"><?php echo $apparato; ?></font></td>
      <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $seriale; ?></font></td>
      <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $ragsoc; ?></font></td>
     
     </tr>	
     
<?php          
}
}           
?>                    
            </table>
   
      





<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<script>
var italianTeams = [];

function autoComplete(){
         $("#cliente").autocomplete({
			source: italianTeams
		 });
          $("#commessa").autocomplete({
			source: italianTeams
		 });
}



function Ricerca(){
	var valore = $('#cliente').val();
	if(valore.length >= 1){
	 
	 $.ajax({
	         url: 'leggiclienti.php',
	         type: 'POST',
	         dataType: 'json',
	         data: {},
	         success: function(risposta){
	            italianTeams = risposta;
				autoComplete();
	         },
	         error: function(error){
				console.log("ERRORE CHIAMATA");
	         }
	});
	
  }       
}
function Ricerca1(){
	var valore1 = $('#commessa').val();
	if(valore1.length >= 1){
	 
	 $.ajax({
	          url: 'leggicommessa1.php?cliente=' + $('#cliente').val(),
	         type: 'POST',
	         dataType: 'json',
	         data: {},
	         success: function(risposta1){
	            italianTeams = risposta1;
				autoComplete();
	         },
	         error: function(error){
				console.log("ERRORE CHIAMATA");
	         }
	});
	
  }
}

</script>

</body>

</html>