<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="index.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
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
$anno=$_REQUEST["anno"];
#echo $login;
$ingranaggio=$_REQUEST["ingranaggio"];
$progr=$_REQUEST["progr"];
#echo "progr. ".$progr;
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>modifica documenti</title>
<link href="./datapilcker3/jquery.datepick.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="./datapilcker3/jquery.plugin.js"></script>
<script src="./datapilcker3/jquery.datepick.js"></script>
<script type="text/javascript" src="./datapilcker3/jquery.datepick-it.js" ></script>
<script type="text/javascript">
function setCosto(sel){
var costo = String(document.form.tipodocumento.value); // prendo il valore della select
document.form.bancacassa.value = costo; // lo setto come valore della textfield } 
 var f = document.form;
  f.sel_value.value = sel.options[sel.selectedIndex].value;
  f.sel_textx.value = sel.options[sel.selectedIndex].text;
  
var op = document.getElementById("bancacassa").getElementsByTagName("option");

for (var i = 0; i < op.length; i++) {
//alert (costo);
//alert (op[i].value.toLowerCase());
if(costo == 2) {
op[i].disabled = false;
  if (op[i].value.toLowerCase() >= "51" && op[i].value.toLowerCase() <= "59") {    
    op[i].disabled = true;
  } 
  }
  
if(costo == 1) {
op[i].disabled = false;
  if (op[i].value.toLowerCase() >= "61" && op[i].value.toLowerCase() <= "69") {
    op[i].disabled = true;
  }
} 
}
}
</script>
 <SCRIPT type="text/javascript">
 function aggiorna(sel){
  var f = document.form;
  f.sel_value.value = sel.options[sel.selectedIndex].value;
  f.sel_text.value = sel.options[sel.selectedIndex].text;
  
  
  

 }
</SCRIPT>
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
</head>
<style>
@font-face {
   font-family: 'Montserrat';
   src: url(Montserrat.eot);
   src: local('Montserrat'), url('Montserrat.ttf') format('truetype');
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
min-width:   1050px;
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

$login=$_REQUEST["login"];
$dataoperazione=$_REQUEST["dataoperazione"];
$datax=$_REQUEST["dataoperazione"];
$tipo=$_REQUEST["tipo"];
$classe=$_REQUEST["classe"];
$classesic=$_REQUEST["classesic"];
$numero=$_REQUEST["numero"];
$oggetto=$_REQUEST["oggetto"];
$oggetto=str_replace("'", "\'", $oggetto);
$protocollo=$_REQUEST["protocollo"];
$posizione=$_REQUEST["posizione"];
$correla=$_REQUEST["correla"];


#$importo=number_format($importo, 2);
$erroreriferimento="";
if ($ingranaggio==100)
   { 


$oggi=date("Y-m-d H.m.s");
$sql = "update documenti
   SET
datadoc='$dataoperazione',
tipodoc='$tipo', 
classe='$classe',
classesic='$classesic',
iddoc='$numero',
oggetto='$oggetto',
protocollo='$protocollo',
fisico='$posizione',
oggi='$oggi',
login= '$logink',
correla='$correla'  
  where progr = '$progr'
    ";
#echo $sql; exit;
    if ($conn->query($sql) === TRUE)
        { 
       
         $url_pagina_chiamante="modificadoc.php?login=$login&progr=$progr";           
?>         
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script> 
    <?php } 
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
                              
         if(numero.value=="") { 
            alert("Error: manca N. ID DOCUMENTO"); 
            numero.focus(); 
            return false; 
                              }  
          if(oggetto.value=="") { 
            alert("Error: manca OGGETTO"); 
            oggetto.focus(); 
            return false; 
                              }  
           if(protocollo.value=="") { 
            alert("Error: manca N. PROTOCOLLO"); 
            protocollo.focus(); 
            return false; 
                              } 
            if(posizione.value=="") { 
            alert("Error: manca POSIZIONE DI ARCHIVAZIONE"); 
            posizione.focus(); 
            return false; 
                              } 
                      
                              
                              
                                                                                                           

                                                     
                                  } 
        } 
</script>

<body>
<div align="center" >
<table border="0" width="760" height="140" bgcolor="#ffffff"  >
<tr > 
<? include "mettilogo.php"; ?>
</tr> 
<tr> 
<td bgcolor="#FFFFFF" style="border: 0px ; "><a href="menugenerale.php?login=<?php echo $login; ?>&codice=1"><font face="Montserrat">Menù Generale</font></a></td>             
<?php
$sql1 = "SELECT * FROM associazione  where login = '$login'";
#echo $sql1; 
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())
		{ 
      
      $btempo = $macrogruppo["btempo"];
			}  }

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
<td bgcolor="#FFFFFF" align="right" style="border: 0px ; "><font face="Montserrat"><? echo $codvolontario." - ".$cognomevol." ".$nomevol." - ".$dicidio; ?></font></td>         
</tr>
</table> 
     
<br>      
</div> 


<div align="center">   
<div id="container">

<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data">
<b><font face="Montserrat" size="4" color="#993300">MODIFICA DATI DEL DOCUMENTO</font></b>

<p align="center"><b><font face="Montserrat" size="4" color="#cc0000"><?php echo $erroreriferimento; ?></font></b></p>
<?

$sql1 = "SELECT *  FROM  documenti where progr = '$progr'"; 
	        $result = $conn->query($sql1);
            if ($result->num_rows > 0) {
            while($macrogruppo = $result->fetch_assoc()) 
        	{$progr = $macrogruppo["progr"]; 
              $datadoc = $macrogruppo["datadoc"];
      $tipo = $macrogruppo["tipodoc"];
      $classe = $macrogruppo["classe"];
      $classesic = $macrogruppo["classesic"];
      $numero = $macrogruppo["iddoc"];
      $protocollo = $macrogruppo["protocollo"];
      $posizione = $macrogruppo["fisico"];
      $file = $macrogruppo["file"];
      $oggetto = $macrogruppo["oggetto"]; 
      $correla = $macrogruppo["correla"];           
            }}  
?>            

<table id="thetable" style=" border: 1px solid black;" cellspacing="0" width="100%" class="table6">
			<tr>
			<td style=" border: 1px solid black;" width="35%"><b><font face="Montserrat" color="#cc0000">DATA DOCUMENTO</font></b></td>
            <td style=" border: 1px solid black;" width="65%"><input type="text" name="dataoperazione"  value="<? echo $datadoc; ?>" autocomplete="off" id="popupDatepicker1" size="10" style="background-color: #e4dede; border: 0px; font-size: 12pt;"><font face="Montserrat" color="#000000">  formato GG/MM/AAAA</font></td>
			</tr>
            <tr>
            <td style=" border: 1px solid black;"><font face="Montserrat" color="#000000">TIPO DOCUMENTO: </td>
            <td style=" border: 1px solid black;">
            <font color="#FFFFFF">
           <select size="1" name="tipo" style="background-color: #e4dede; border: 0px; font-size: 12pt;" > 
<?          
            $sql1 = "SELECT *  FROM  tipo where operatore = '$logink' order by descrizione "; 
            #echo $sql1; exit;
	        $result = $conn->query($sql1);
            if ($result->num_rows > 0) {
            while($macrogruppo = $result->fetch_assoc()) 
        	{$descrizione = $macrogruppo["descrizione"];
?>			
            <option <?php if ($descrizione==$tipo){echo "selected";}?>><?php echo $descrizione; ?></option>
            <? }} ?>
			</select>
			</td>
			</tr>
              <tr>
            <td style=" border: 1px solid black;"><font face="Montserrat" color="#000000">CLASSIFICAZIONE: </td>
            <td style=" border: 1px solid black;">
            <font color="#FFFFFF">
            <select size="1" name="classe" style="font-size: 12pt; background-color: #e4dede; border: 0px;" >
<?          
            $sql1 = "SELECT *  FROM  classe where operatore = '$logink' order by descrizione "; 
	        $result = $conn->query($sql1);
            if ($result->num_rows > 0) {
            while($macrogruppo = $result->fetch_assoc()) 
        	{$descrizione = $macrogruppo["descrizione"];
?>			
            <option <?php if($descrizione==$classe){echo "selected";}?>><?php echo $descrizione; ?></option>
            <? }} ?>
			</select>
			</td>
			</tr>
            <tr>
            <td style=" border: 1px solid black;"><font face="Montserrat" color="#000000">CLASSE RISERVATEZZA: </td>
            <td style=" border: 1px solid black;">
            <font color="#FFFFFF">
            <select size="1" name="classesic" style="font-size: 12pt; background-color: #e4dede; border: 0px;" >
<?          
            $sql1 = "SELECT *  FROM  classesic where operatore = '$logink'  order by descrizione "; 
	        $result = $conn->query($sql1);
            if ($result->num_rows > 0) {
            while($macrogruppo = $result->fetch_assoc()) 
        	{$descrizione = $macrogruppo["descrizione"];
?>			
            <option <?php if($descrizione==$classesic){echo "selected";}?>><?php echo $descrizione; ?></option>
            <? }} ?>
			</select>
			</td>
			</tr>
            <tr>
            <td style=" border: 1px solid black;"><font face="Montserrat" color="#000000">N. IDENTIFICATIVO DOCUMENTO: </td>
            <td style=" border: 1px solid black;">
            <input type="text" name="numero"  size="30" value="<? echo $numero; ?>" style="background-color: #e4dede; border: 0px; font-size: 12pt;">
			</td>
			</tr>
            <tr>
            <td style=" border: 1px solid black;"><font face="Montserrat" color="#000000">OGGETTO DEL DOCUMENTO: </td>
            <td style=" border: 1px solid black;">
            <input type="text" name="oggetto"  size="75" value="<? echo $oggetto; ?>" style="background-color: #e4dede; border: 0px; font-size: 12pt;">
			</td>
			</tr>
            <tr>
            <td style=" border: 1px solid black;"><font face="Montserrat" color="#000000">NUMERO PROTOCOLLO: </td>
            <td style=" border: 1px solid black;">
            <input type="text" name="protocollo"  size="30" value="<? echo $protocollo; ?>" style="background-color: #e4dede; border: 0px; font-size: 12pt;">
			</td>
			</tr>
            <tr>
            <td style=" border: 1px solid black;"><font face="Montserrat" color="#000000">POSIZIONE FISICA DI ARCHIVIAZIONE: </td>
            <td style=" border: 1px solid black;">
            <input type="text" name="posizione"  size="30" value="<? echo $posizione; ?>" style="background-color: #e4dede; border: 0px; font-size: 12pt;">
			</td>
			</tr>
             <tr>
            <td style=" border: 1px solid black;"><font face="Montserrat" color="#cc0000"><b>DATO DI CORRELAZIONE: </b></td>
            <td style=" border: 1px solid black;">
            <input type="text" name="correla"  size="30" value="<? echo $correla; ?>" style="background-color: #e4dede; border: 0px; font-size: 12pt;">
			</td>
			</tr>       
            <tr>
			<td >&nbsp;</td>
			<td>
                 <input type="hidden" name="ingranaggio" value="100" />
                 <input type="hidden" name="login" value="<?php echo $login; ?>" />
                 <input type="hidden" name="progr" value="<?php echo $progr; ?>" />
                 <input type="submit" value=Modifica Documento" style="height: 22px; background-color: #cc0000;border: 0px; color: #ffffff;" name="B3xxx"></td>               
			</tr>
</table>       
       
          </form>



<p>&nbsp;</p>
<center>
<iframe  align="center" frameborder="0" width="100%" height="100%"  src="esponipdfff.php?fl=<?php echo $file; ?>&login=<?php echo $login; ?>"></iframe> 
</center>
<br>
<br>
</div>
</div>
<br>
<br>
</body>

</html>