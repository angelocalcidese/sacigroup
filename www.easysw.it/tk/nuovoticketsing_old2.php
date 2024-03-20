<?php
session_start(); if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){ $larg= $_SESSION['screen_width'] ; $alt= $_SESSION['screen_height']; } else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) { $_SESSION['screen_width'] = $_REQUEST['width']; $_SESSION['screen_height'] = $_REQUEST['height']; header('Location: ' . $_SERVER['PHP_SELF']); } else { echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width+"&height="+screen.height;</script>'; } 

include "conf_DB.php";
$ingranaggio=$_REQUEST["ingranaggio"];
$login=$_REQUEST["login"];
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



if($ingranaggio==100){
$clientex=$_REQUEST["cliente"];
}
if($ingranaggio==200){
$clientex=$_REQUEST["cliente"];
$commessax=$_REQUEST["commessasel"];
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

</style>

<?php 

$login=$_REQUEST["login"];



#$importo=number_format($importo, 2);
$erroreriferimento="";
if($ingranaggio==300){

$cliente=$_REQUEST["cliente"];
$commessa=$_REQUEST["commessa"];
$attivita=$_REQUEST["attivita"];
$ticketcli=$_REQUEST["ticketcli"];
$datainizio=$_REQUEST["datainizio"];
#$orainizio=$_REQUEST["orainizio"];
$tipointervento=$_REQUEST["tipoinervento"];
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

$clientex=$_REQUEST["cliente"];
$comodo=explode(" - ",$clientex);
$clientex=$comodo[0];
$commessax=$_REQUEST["commessa"];
$comodo=explode(" - ",$commessax);
$commessax=$comodo[0];

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
aggiornamento) 
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
'$adesso' 
)";
  #echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {$errore="Ticket ".$numero." Memorizzato Correttamente "; } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; exit;} 
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
progr = '$id' 
";
echo $sql;
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
<?php

?>

<br>
<div align="center">   
<br>
<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data"> 
<table width="60%">

<tr> <tr>
           
            <td colspan="3"   align="left" style="border-radius: 3px; border: 1px solid #949699;background: #476b5d;color: ffffff;" > <font face="Verdana"  style="font-size: 10pt;">Identificazione:</font></b>
            </td>
            </tr>
<tr> <tr align="center">
            <td height="45" colspan="1"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" ><font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Cliente:</b><br></font></b>
            <input type="text" id="cliente" onkeyup="Ricerca()" name="cliente" value="<?php echo $cliente; ?>" maxlength="100" size="40" style="background-color: #ffffff;border-radius: 3px; border: 0px; font-size: 12pt;">   
<!--            <input id="ricerca" onkeyup="Ricerca()" name="ricerca">   -->
            </td>
            
            <td colspan="2"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Commessa:</b><br></font></b>
            <input type="text" id="commessa" onkeyup="Ricerca1()" name="commessa" value="<?php echo $commessa; ?>" maxlength="120" size="60" style="background-color: #ffffff; border: 0px; border-radius: 3px;font-size: 12pt;">
            </td>            
            </tr>
            <tr> <tr align="left">
            <td height="45" colspan="1"  align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" ><font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Attività:</b><br></font></b>
            <input type="text" name="attivita" value="<?php echo $attivita; ?>" maxlength="60" size="40" style="background-color: #ffffff;border-radius: 3px; border: 0px; font-size: 12pt;">
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
            
             <tr> <tr>
           
            <td colspan="3"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #476b5d;color: ffffff;" > 
            <!--<font face="Verdana"  style="font-size: 10pt;">Luogo intervento: 
              <a href="javascript:MM_openBrWindow('esponiluogo.php?login=<?php echo $login; ?>&chiave=<?php echo $codice; ?>&cliente=<?php echo $cliente; ?>',' ','width=1400,height=450,left=100,top=250');">
                <img border="0" src="lente1.png" width="15" height="15">
              </a>
           </font>-->
           <font face="Verdana"  style="font-size: 10pt;">Luogo intervento: 
              <img border="0" src="lente1.png" width="15" height="15" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor:pointer">
           </font>
        </b>
            </td>
            </tr>
            
            <tr><tr>
            <td height="45" colspan="1"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Insegna:</b><br></font></b>
            <input type="text" name="insegna" id="insegnaF" maxlength="200" size="40" style="background-color: #ffffff; border-radius: 3px;border: 0px; font-size: 12pt;">
            </td>
            <td  colspan="2"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Ragione Sociale:</b><br></font></b>
            <input type="text" name="ragsoc" id="ragsocF" maxlength="200" size="60" style="background-color: #ffffff; border-radius: 3px;border: 0px; font-size: 12pt;">
            </td>
            </tr>
            <tr><tr>
             <td colspan="1"  align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Indirizzo:</b><br></font></b>
             <input type="text" name="indirizzo" id="indirizzoF" maxlength="200" size="40" style="background-color: #ffffff; border-radius: 3px;border: 0px; font-size: 12pt;">
            </td>
             <td colspan="1"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Cap: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; Prov:</b><br></font></b>
            <input type="text" name="cap" id="capF" maxlength="200" size="5" style="background-color: #ffffff; border-radius: 3px;border: 0px; font-size: 12pt;">
            <input type="text" name="prov" id="provF" maxlength="200" size="5" style="background-color: #ffffff; border-radius: 3px;border: 0px; font-size: 12pt;">
            
            </td>
             <td colspan="1"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Città:</b><br></font></b>
            <input type="text" name="citta" id="cittaF" maxlength="200" size="25" style="background-color: #ffffff; border-radius: 3px;border: 0px; font-size: 12pt;">
            </td>
            </tr>
            
             <tr><tr>
            <td height="45" colspan="1"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Telefoni:</b><br></font></b>
            <input type="text" name="telefono" id="telefonoF" maxlength="200" size="40" style="background-color: #ffffff; border-radius: 3px;border: 0px; font-size: 12pt;">
            </td>
             <td colspan="2"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Contatto:</b><br></font></b>
             <input type="text" name="contatto" id="contattoF" maxlength="200" size="60" style="background-color: #ffffff; border-radius: 3px;border: 0px; font-size: 12pt;">
            </td>
            
            </tr>
            
            
            <tr> <tr>           
            <td colspan="3"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #476b5d;color: ffffff;" > <font face="Verdana"  style="font-size: 10pt;">Descrizione Attività Intervento:</font></b>
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
            
          
            
       
<?php if($ingranaggio!=300){ ?>           
           <tr>
           <td colspan="3"   align="left" style="border-radius: 3px; border: 0px solid #949699;background: #cbcccd;" >
           <input type="hidden" name="ingranaggio" value="300" />
             <input type="hidden" name="login" value="<?php echo $login; ?>" />
             <input type="hidden" name="id" value="<?php echo $progr; ?>" />
             <br><br>
             <input type="submit" value="Memorizza Ticket"   style="border-radius: 3px;height: 22px; width: 140px; background-color: #cc0000;border: 0px; color: #ffffff;" name="B3xxx">
           </td>  
           </tr>
<?php } ?>           
</table> 
</form> 
<?php if($ingranaggio==300){ ?> 
<td align="left" valign="top" width="50%">
<p align="left"><font face="Montserrat" size="4" color="#993300" style="font-family: Montserrat;">Documenti </font></b></p><div align="left">    

<table border="0" width="60%" align="left" >

	  <tr>		  
      <td style="background-color:#476b5d;font-family: Montserrat;" width="15%" align="left"><font size="2" face="Montserrat" color="#FFFFFF">DATA DOC.</td>
      <td style="background-color:#476b5d;font-family: Montserrat;" width="15%" align="left"><font size="2" face="Montserrat" color="#FFFFFF">DATA SCAD.</td>
      <td style="background-color:#476b5d;font-family: Montserrat;" width="60%" align="left"><font size="2" face="Montserrat" color="#FFFFFF">OGGETTO</td>
      <td colspan="2" style="background-color:#476b5d;font-family: Montserrat;" width="10%" align="left"><font size="2" face="Montserrat" color="#FFFFFF">OPERAZIONI&nbsp;&nbsp;</td>
      </tr>
<?
$sql = "SELECT * FROM documenti  where    tipodoc = '$codice'";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
   $prgr = $macrogruppo["progr"];
   $data = $macrogruppo["datadoc"];
   $datasca = $macrogruppo["datasca"];
   $tipodoc = $macrogruppo["tipodoc"];
   $oggettox= $macrogruppo["oggetto"];
   $file = $macrogruppo["file"];
?>
<tr>
<tr onMouseOver="style.background='#c9cacb';" onMouseOut="style.background=''">

      
		<td  style="font-family: Montserrat;" align="left"><font size="2" face="Montserrat" color="<?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>"><? echo $data; ?></td>
        <td  style="font-family: Montserrat;" align="left"><font size="2" face="Montserrat" color="<?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>"><? echo $datasca; ?></td>
        
        <td  style="font-family: Montserrat;" align="left"><font size="2" face="Montserrat" color="<?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>"><? echo $oggettox; ?></td>
		<td style=" border: 0px solid black;font-family: Montserrat;" align="left" ><a  onclick="myFunction('?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&prgrx=<? echo $prgr; ?>&ingranaggio=10&ingranaggiott=201&prgry=<?php echo $prgr; ?>&progr=<?php echo $progr; ?>');" ><img border="0" background="btn1.gif" src="occhio.png" width="25" height="25"></a></td>
        <td style=" border: 0px solid black;font-family: Montserrat;" align="left" >
<!--        <a  onclick="myFunction('?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&prgrx=<? echo $prgr; ?>&ingranaggio=10&ingranaggiott=202&oggetto=<?php echo $oggettox; ?>&progr=<?php echo $progr; ?>');" ><img border="0" background="btn1.gif" src="x1.png" width="15" height="15"></a>   -->
<a href="?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&prgrx=<? echo $prgr; ?>&ingranaggio=10&ingranaggiott=202&prgry=<?php echo $prgr; ?>&progr=<?php echo $progr; ?>"><button  onclick="return confirm('Sei sicuro di volere cancellare?')"><img border="0" src="x1.png" width="15" height="15"></button></a>

</td>

     
        </tr>
<? }}
$oggiora=date("d/m/Y"); ?>
</table>

<p align="left"><font face="Montserrat" size="4" style="font-family: Montserrat;" color="#993300">Inserimento Nuovo Documento </font></b></p><div align="left">    
<table  border="0" width="60%" align="left" >
<form action="" method="post" enctype="multipart/form-data" >
		<tr>
        <td colspan="2">
        <table>
        <tr>
		<td colspan="1" align="left" width="25%" style=" border: 0px solid #949699;font-size: 10pt;font-family: Montserrat;" >
        <font style="font-family: Montserrat;" face="Montserrat" color="#000000" size="2" face="Montserrat" color="#000000">Data Documento: &nbsp;</b></font>
		<font style="font-family: Montserrat;" size="2" face="Montserrat"> <input type="text" name="newdata" value="<?php echo $oggiora; ?>"  size="10"  style="background-color: #cac7c7; border: 0px; font-size: 12pt;"> </font></td>
        <td colspan="1" align="right" width="25%" style=" border: 0px solid #949699;font-size: 10pt;font-family: Montserrat;" >
        <font style="font-family: Montserrat;" face="Montserrat" color="#000000" size="2" face="Montserrat" color="#000000">Data scadenza Documento: </b></font>
		<font tyle="font-family: Montserrat;" size="2" face="Montserrat"> <input type="text" name="newdatasca" value="31/12/9999"  size="10"  style="background-color: #cac7c7; border: 0px; font-size: 12pt;"> </font>        
        </td>
        </tr>
        </table>
        </td>
        </tr> 
        <tr>
		<td align="left" width="130" style=" border: 0px solid #949699;font-size: 10pt;font-family: Montserrat;"> <font size="2" face="Montserrat" color="#000000">oggetto: </b></font>
		</td>
        <td ><input type="text" name="newoggetto"   size="68"  placeholder="Inserisci qui l'oggetto del documento che stai caricando(obbligatorio)" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
        </td>
        </tr>
	
		<tr>
			<td align="left" style=" border: 0px solid #949699;font-size: 10pt;font-family: Montserrat;">
       <font size="2" face="Montserrat"><font color="#000000" style="font-family: Montserrat;">Carica Documento:</b></font>
      </td>
	  <td align="left" ><font size="2" face="Montserrat">
		 <input type="hidden" name="ingranaggio" value="7" />
         <input type="hidden" name="login" value="<? echo $login; ?>" />
         <input type="hidden" name="cliente" value="<? echo $commessa; ?>" />
         <input type="hidden" name="progr" value="<? echo $progr; ?>" />
         <input type="hidden" name="cliente" value="<? echo $codice; ?>" />
		 <input type="file" name="fileToUpload" id="fileToUpload" size="150" style="font-size: 12pt; font-weight: normal; background-color: #cac7c7;font-family: Montserrat;">
    </td>	
    </tr>
    <tr>
    <td> 
    <input type="submit" value="Memorizza" size="50" name="submit" style="font-size: 12pt; font-weight: normal; background-color: #cc0000; color: #ffffff;border: 0px;font-family: Montserrat;">
</form>
	</td>
<?php if($ingranaggiott==201){ ?>
	</tr>
    <tr>
    <td colspan="2" width="100%"><br>
<div>
<iframe  align="right" frameborder="0" width="100%" height="900" scrolling="yes" src="esponipdfffx.php?login=<?php echo $login; ?>&fl=<?php echo $fileh; ?>"></iframe> 
</div>    
    </td>
    </tr>
<?php } ?>   
	</table> 
<?php } ?>     

            
            <tr>
            <td>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </td>
            </tr>
            
            
            
            
            
            
            </table>
</form>    
      



</div>
</div>
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