<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="index.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php  }
$filename="listavolontari.xls";
header ("Content-Type: application/vnd.ms-excel");
header ("Content-Disposition: inline; filename=$filename");
$status=$_REQUEST["status"];
$tessera=$_REQUEST["tessera"];
$ntessera=$_REQUEST["ntessera"];
#echo $ntessera;
$tespas=$_REQUEST["tespas"];
$cognome=$_REQUEST["cognome"];
$annoassociato=$_REQUEST["annoassociato"];
#$cognome="CALCIDESE";
$nome=$_REQUEST["nome"];
$natoa=$_REQUEST["natoa"];
$datanascita=$_REQUEST["datanascita"];
$residentecitta=$_REQUEST["residentecitta"];
$provnatoa=$_REQUEST["provnatoa"];
$indirizzores=$_REQUEST["indirizzores"];
$cap=$_REQUEST["cap"];
$email=$_REQUEST["email"];
$telefono=$_REQUEST["telefono"];
$cellulare=$_REQUEST["cellulare"];
$codfisc=$_REQUEST["codfisc"];
$residenteprov=$_REQUEST["residenteprov"];
$accdati=$_REQUEST["accdati"];
$comunicazioni=$_REQUEST["comunicazioni"];

$frequenzam=$_REQUEST["frequenzam"];
$frequenzag=$_REQUEST["frequenzag"];
$frequenzat=$_REQUEST["frequenzat"];
$frequenzaa=$_REQUEST["frequenzaa"];
$frequenzas=$_REQUEST["frequenzas"];
$frequenzav=$_REQUEST["frequenzav"];


$emergenzem=$_REQUEST["emergenzem"];
$emergenzeg=$_REQUEST["emergenzeg"];
$emergenzet=$_REQUEST["emergenzet"];
$emergenzea=$_REQUEST["emergenzea"];
$emergenzes=$_REQUEST["emergenzes"];
$emergenzev=$_REQUEST["emergenzev"];


$referentem=$_REQUEST["referentem"];
$referenteg=$_REQUEST["referenteg"];
$referentet=$_REQUEST["referentet"];
$referentea=$_REQUEST["referentea"];
$referentes=$_REQUEST["referentes"];
$referentev=$_REQUEST["referentev"];


$membrom=$_REQUEST["membrom"];
$membrog=$_REQUEST["membrog"];
$membrot=$_REQUEST["membrot"];
$membroa=$_REQUEST["membroa"];
$membros=$_REQUEST["membros"];
$membrov=$_REQUEST["membrov"];



$lunm=$_REQUEST["lunm"];
$marm=$_REQUEST["marm"];
$merm=$_REQUEST["merm"];
$giom=$_REQUEST["giom"];
$venm=$_REQUEST["venm"];
$domm=$_REQUEST["domm"];

$lung=$_REQUEST["lung"];
$marg=$_REQUEST["marg"];
$merg=$_REQUEST["merg"];
$giog=$_REQUEST["giog"];
$veng=$_REQUEST["veng"];
$domg=$_REQUEST["domg"];

$lunt=$_REQUEST["lunt"];
$mart=$_REQUEST["mart"];
$mert=$_REQUEST["mert"];
$giot=$_REQUEST["giot"];
$vent=$_REQUEST["vent"];
$domt=$_REQUEST["domt"];

$luna=$_REQUEST["luna"];
$mara=$_REQUEST["mara"];
$mera=$_REQUEST["mera"];
$gioa=$_REQUEST["gioa"];
$vena=$_REQUEST["vena"];
$doma=$_REQUEST["doma"];

$luns=$_REQUEST["luns"];
$mars=$_REQUEST["mars"];
$mers=$_REQUEST["mers"];
$gios=$_REQUEST["gios"];
$vens=$_REQUEST["vens"];
$doms=$_REQUEST["doms"];

$lunv=$_REQUEST["lunv"];
$marv=$_REQUEST["marv"];
$merv=$_REQUEST["merv"];
$giov=$_REQUEST["giov"];
$venv=$_REQUEST["venv"];
$domv=$_REQUEST["domv"];

$mensa=$_REQUEST["mensa"];
if($mensa==1){$lunm="";$marm="";$merm="";$giom="";$venm="";$domm="";}
$guardaroba=$_REQUEST["guardaroba"];
if($guardaroba==1){$lung="";$marg="";$merg="";$giog="";$veng="";$domg="";}
$tesseramento=$_REQUEST["tesseramento"];
if($tesseramento==1){$lunt="";$mart="";$mert="";$giot="";$vent="";$domt="";}
$sorveglianza=$_REQUEST["sorveglianza"];
if($sorveglianza==1){$luns="";$mars="";$mers="";$gios="";$vens="";$doms="";}
$varie=$_REQUEST["varie"];
if($varie==1){$lunv="";$marv="";$merv="";$giov="";$venv="";$domv="";}
$ascolto=$_REQUEST["ascolto"];
if($ascolto==1){$luna="";$mara="";$mera="";$gioa="";$vena="";$doma="";}
include "conf_DB.php";
if ($cognome!="")
   {$selezionacognome= " and cognome like '".$cognome."%' ";}
   else
   {$selezionecognome="";}
   
if ($nome!="")
   {$selezionanome= " and nome like '".$nome."%' ";}
   else
   {$selezionanome="";}
 
if ($status!="TUTTI")
   {$selezionastatus= " and (status = '".$status."') ";}
   else
   {$selezionastatus="";} 
 
 
$swfrem=0;$contafrem=0;  
$swfreg=0;$contafreg=0;
$swfret=0;$contafret=0;
$swfrea=0;$contafrea=0;
$swfres=0;$contafres=0;
$swfrev=0;$contafrev=0;
if ($frequenzam!="")
   {$selezionafrequenzam= " frequenza  = 1 ";$swfrem=1;$contafrem++; }
   else
   {$selezionafrequenzam="";}
if ($frequenzag!="")
   {$selezionafrequenzag= " frequenzag  = 1 ";$swfreg=1;$contafreg++;}
   else
   {$selezionafrequenzamg="";}
if ($frequenzat!="")
   {$selezionafrequenzat= " frequenzat  = 1 ";$swfret=1;$contafret++;}
   else
   {$selezionafrequenzat="";}
if ($frequenzaa!="")
   {$selezionafrequenzaa= " frequenzaa  = 1 ";$swfrea=1;$contafrea++;}
   else
   {$selezionafrequenzaa="";}
if ($frequenzas!="")
   {$selezionafrequenzas= " frequenzas  = 1 ";$swfres=1;$contafres++;}
   else
   {$selezionafrequenzas="";}
if ($frequenzav!="")
   {$selezionafrequenzav= " frequenzav  = 1 ";$swfrev=1;$contafrev++;}
   else
   {$selezionafrequenzav="";}


   
$swemem=0;$contaemem=0;  
$swemeg=0;$contaemeg=0;
$swemet=0;$contaemet=0;
$swemea=0;$contaemea=0;
$swemes=0;$contaemes=0;
$swemev=0;$contaemev=0;
if ($emergenzem!="")
   {$selezionaemergenzem="  emergenze = 1 ";$swemem=1;$contaemem++;}
   else
   {$selezionaemergenzem="";} 
if ($emergenzeg!="")
   {$selezionaemergenzeg="  emergenzeg = 1 ";$swemeg=1;$contaemeg++;}
   else
   {$selezionaemergenzeg="";}    
if ($emergenzet!="")
   {$selezionaemergenzet="  emergenzet = 1 ";$swemet=1;$contaemet++;}
   else
   {$selezionaemergenzet="";}    
if ($emergenzea!="")
   {$selezionaemergenzea="  emergenzea = 1 ";$swemea=1;$contaemea++;}
   else
   {$selezionaemergenzea="";}    
if ($emergenzes!="")
   {$selezionaemergenzes="  emergenzes = 1 ";$swemes=1;$contaemes++;}
   else
   {$selezionaemergenzes="";}    
if ($emergenzev!="")
   {$selezionaemergenzev="  emergenzev = 1 ";$swemev=1;$contaemev++;}
   else
   {$selezionaemergenzev="";}   
    
   
$swrefm=0;$contarefm=0;  
$swrefg=0;$contarefg=0;
$swreft=0;$contareft=0;
$swrefa=0;$contarefa=0;
$swrefs=0;$contarefs=0;
$swrefv=0;$contarefv=0;   
if ($referentem!="")
   {$selezionareferentem="  referente = 1 ";$swrefm=1;$contarefm++;}
   else
   {$selezionareferentem="";} 
if ($referenteg!="")
   {$selezionareferenteg="  referenteg = 1 ";$swrefg=1;$contarefg++;}
   else
   {$selezionareferenteg="";}    
if ($referentet!="")
   {$selezionareferentet="  referentet = 1 ";$swreft=1;$contareft++;}
   else
   {$selezionareferentet="";}    
if ($referentea!="")
   {$selezionareferentea="  referentea = 1 ";$swrefa=1;$contarefa++;}
   else
   {$selezionareferentea="";}    
if ($referentes!="")
   {$selezionareferentes="  referentes = 1 ";$swrefs=1;$contarefs++;}
   else
   {$selezionareferentes="";}    
if ($referentev!="")
   {$selezionareferentev="  referentev = 1 ";$swrefv=1;$contarefv++;}
   else
   {$selezionareferentev="";}    
   
#echo  $swrefm; exit;  
$swmemm=0;$contamemm=0;  
$swmemg=0;$contamemg=0;
$swmemt=0;$contamemt=0;
$swmema=0;$contamema=0;
$swmems=0;$contamems=0;
$swmemv=0;$contamemv=0;         
if ($membrom!="")
   {$selezionamembrom="  membro = 1 ";$swmemm=1;$contamemm++;}
   else
   {$selezionamembrom="";} 
if ($membrog!="")
   {$selezionamembrog="  membrog = 1 ";$swmemg=1;$contamemg++;}
   else
   {$selezionamembrog="";} 
if ($membrot!="")
   {$selezionamembrot="  membrot = 1 ";$swmemt=1;$contamemt++;}
   else
   {$selezionamembrot="";} 
if ($membroa!="")
   {$selezionamembroa="  membroa = 1 ";$swmema=1;$contamema++;}
   else
   {$selezionamembroa="";} 
if ($membros!="")
   {$selezionamembros="  membros = 1 ";$swmems=1;$contamems++;}
   else
   {$selezionamembros="";} 
if ($membrov!="")
   {$selezionamembrov="  membrov = 1 ";$swmemv=1;$contamemv++;}
   else
   {$selezionamembrov="";} 

#echo $swrmemm;   
   
$swm=0;$contam=0;   
/* MENSA */  
if ($lunm!="")
   {$selezionalunm=" lun = 1 ";$swm=1;$contam++; }
   else
   {$selezionalunm="";}    
if ($marm!="")
   {if ($contam==0) {$selezionamarm=" mar = 1 ";$swm=1;$contam++;}else{$selezionamarm=" or mar = 1 ";$swm=1;$contam++;}}
   else
   {$selezionamarm="";}    
if ($merm!="")
   {if ($contam==0) {$selezionamerm=" mer = 1 ";$swm=1;$contam++;}else {$selezionamerm=" or mer = 1 ";$swm=1;$contam++;}}
   else
   {$selezionamerm="";}     
if ($giom!="")
   {if ($contam==0){$selezionagiom=" gio = 1 ";$swm=1;$contam++;}else {$selezionagiom=" or gio = 1 ";$swm=1;$contam++;} }
   else
   {$selezionagiom="";}     
if ($venm!="")
   {if ($contam==0){$selezionavenm=" ven = 1 ";$swm=1;$contam++;}else {$selezionavenm=" or ven = 1 ";$swm=1;$contam++;} }
   else
   {$selezionavenm="";}     
if ($domm!="")
   {if ($contam==0){$selezionadomm=" dom = 1 ";$swm=1;$contam++;}else {$selezionadomm=" or dom = 1 ";$swm=1;$contam++;}  }
   else
   {$selezionadomm="";}  
   
$swg=0;$contag=0;    
/* GUARDAROBA */  
if ($lung!="")
   {$selezionalung=" lung = 1 ";$swg=1;$contag++; }
   else
   {$selezionalung="";}    
if ($marg!="")
   {if ($contag==0) {$selezionamarg=" marg = 1 ";$swg=1;$contag++;}else{$selezionamarg=" or marg = 1 ";$swg=1;$contag++;}}
   else
   {$selezionamarg="";}  
if ($merg!="")
   {if ($contag==0){$selezionamerg=" merg = 1 ";$swg=1;$contag++;}else {$selezionamerg=" or merg = 1 ";$swg=1;$contag++;}}
   else
   {$selezionamerg="";}     
if ($giog!="")
   {if ($contag==0){$selezionagiog=" giog = 1 ";$swg=1;$contag++;}else {$selezionagiog=" or giog = 1 ";$swg=1;$contag++;} }
   else
   {$selezionagiog="";}     
if ($veng!="")
   {if ($contag==0){$selezionaveng=" veng = 1 ";$swg=1;$contag++;}else {$selezionaveng=" or veng = 1 ";$swg=1;$contag++;}}
   else
   {$selezionavenmg="";}     
if ($domg!="")
   {if ($contag==0){$selezionadomg=" domg = 1 ";$swg=1;$contag++;}else {$selezionadomg=" or domg = 1 ";$swg=1;$contag++;}}
   else
   {$selezionadomg="";}  
   

$swt=0;$contat=0; 
/* TESSERAMENTO */  
if ($lunt!="")
   {$selezionalunt=" lunt = 1 ";$swt=1;$contat++; }
   else
   {$selezionalunt="";}    
if ($mart!="")
   {if ($contat==0) {$selezionamart=" mart = 1 ";$swt=1;$contat++;}else{$selezionamart=" or mart = 1 ";$swt=1;$contat++;}}
   else
   {$selezionamart="";}  
if ($mert!="")
   {if ($contat==0){$selezionamert=" mert = 1 ";$swt=1;$contat++;}else {$selezionamert=" or mert = 1 ";$swt=1;$contat++;}}
   else
   {$selezionamert="";}     
if ($giot!="")
   {if ($contat==0){$selezionagiot=" giot = 1 ";$swt=1;$contat++;}else {$selezionagiot=" or giot = 1 ";$swt=1;$contat++;}}
   else
   {$selezionagiot="";}     
if ($vent!="")
   {if ($contat==0){$selezionavent=" vent = 1 ";$swt=1;$contat++;}else {$selezionavent=" or vent = 1 ";$swt=1;$contat++;}}
   else
   {$selezionavent="";}     
if ($domt!="")
   {if ($contat==0){$selezionadomt=" domt = 1 ";$swt=1;$contat++;}else {$selezionadomt=" or domt = 1 ";$swt=1;$contat++;} }
   else
   {$selezionadomt="";}  
   
   
$swa=0;$contaa=0; 
/* ASCOLTO */  
if ($luna!="")
   {$selezionaluna=" luna = 1 ";$swa=1;$contaa++; }
   else
   {$selezionaluna="";}    
if ($mara!="")
   {if ($contaa==0) {$selezionamara=" mara = 1 ";$swa=1;$contaa++;}else{$selezionamara=" or mara = 1 ";$swa=1;$contaa++;}}
   else
   {$selezionamara="";}  
if ($mera!="")
   {if ($contaa==0){$selezionamera=" mera = 1 ";$swa=1;$contaa++;}else {$selezionamera=" or mera = 1 ";$swa=1;$contaa++;}}
   else
   {$selezionamera="";}     
if ($gioa!="")
   {if ($contaa==0){$selezionagioa=" gioa = 1 ";$swa=1;$contaa++;}else {$selezionagioa=" or gioa = 1 ";$swa=1;$contaa++;}}
   else
   {$selezionagioa="";}     
if ($vena!="")
   {if ($contaa==0){$selezionavena=" vena = 1 ";$swa=1;$contaa++;}else {$selezionavena=" or vena = 1 ";$swa=1;$contaa++;} }
   else
   {$selezionavena="";}     
if ($doma!="")
   {if ($contaa==0){$selezionadoma=" doma = 1 ";$swa=1;$contaa++;}else {$selezionadoma=" or doma = 1 ";$swa=1;$contaa++;} }
   else
   {$selezionadoma="";} 


$sws=0;$contas=0;    
/* SORVEGLIANZA */  
if ($luns!="")
   {$selezionaluns=" luns = 1 ";$sws=1;$contas++; }
   else
   {$selezionaluns="";}    
if ($mars!="")
   {if ($contas==0) {$selezionamars=" mars = 1 ";$sws=1;$contas++;}else{$selezionamars=" or mars = 1 ";$sws=1;$contas++;}}
   else
   {$selezionamars="";}  
if ($mers!="")
   {if ($contas==0){$selezionamers=" mers = 1 ";$sws=1;$contas++;}else {$selezionamers=" or mers = 1 ";$sws=1;$contas++;}}
   else
   {$selezionamers="";}     
if ($gios!="")
   {if ($contas==0){$selezionagios=" gios = 1 ";$sws=1;$contas++;}else {$selezionagios=" or gios = 1 ";$sws=1;$contas++;} }
   else
   {$selezionagioas="";}     
if ($vens!="")
   {if ($contas==0){$selezionavens=" vens = 1 ";$sws=1;$contas++;}else {$selezionavens=" or vens = 1 ";$sws=1;$contas++;} }
   else
   {$selezionavens="";}     
if ($doms!="")
   {if ($contas==0){$selezionadoms=" doms = 1 ";$sws=1;$contas++;}else {$selezionadoms=" or doms = 1 ";$sws=1;$contas++;} }
   else
   {$selezionadomas="";} 
   
$swv=0;$contav=0; 
/* VARIE */  
if ($lunv!="")
   {$selezionalunv=" lunv = 1 ";$swv=1;$contav++; }
   else
   {$selezionalunv="";}    
if ($marv!="")
   {if ($contav==0) {$selezionamarv=" marv = 1 ";$swv=1;$contav++;}else{$selezionamarv=" or marv = 1 ";$swv=1;$contav++;}}
   else
   {$selezionamarv="";}  
if ($merv!="")
   {if ($contav==0){$selezionamerv=" merv = 1 ";$swv=1;$contav++;}else {$selezionamerv=" or merv = 1 ";$swv=1;$contav++;}}
   else
   {$selezionamerv="";}     
if ($giov!="")
   {if ($contav==0){$selezionagiov=" giov = 1 ";$swv=1;$contav++;}else {$selezionagiov=" or giov = 1 ";$swv=1;$contav++;} }
   else
   {$selezionagioav="";}     
if ($venv!="")
   {if ($contav==0){$selezionavenv=" venv = 1 ";$swv=1;$contav++;}else {$selezionavenv=" or venv = 1 ";$swv=1;$contav++;} }
   else
   {$selezionavenv="";}     
if ($domv!="")
   {if ($contav==0){$selezionadomv=" domv = 1 ";$swv=1;$contav++;}else {$selezionadomv=" or domv = 1 ";$swv=1;$contav++;} }
   else
   {$selezionadomav="";} 
   


   
   
   
      
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
if ($ascolto!="")
   {$selezionaascolto=" and ascolto = 1 ";}
   else
   {$selezionaascolto="";} 
if ($sorveglianza!="")
   {$selezionasorveglianza=" and sorveglianza = 1 ";}
   else
   {$selezionasorvegliante="";}               

;

$oggi=date("Y-m-d");

$oggi=date("Y-m-d");
#header('Content-Type: text/html; charset=utf-8'); 
?>

<html>
<head>

	<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
	<title>Esponi volontari</title>
<style>
div#container {
min-width:   1000px;
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
    border: 1px solid black;    
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
a:link, a:visited {
  text-decoration: none; 
    font-weight: normal;
    color: #000000
}

a:hover {
  color: black;
 
  text-decoration: none;
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
<script>
window.onload = function() {
    var image = document.getElementById("img");

    function updateImage() {
        image.src = image.src.split("?")[0] + "?" + new Date().getTime();
    }

    setInterval(updateImage, 1000);
}
</script>
</head>
<body>





<?
echo '<table border="1">';  ?>
<tr>
<td colspan="79" bgcolor="#ede1c9" align="center"><b><font face="Arial" size="4" color="#ffffff">ELENCO ANAGRAFICA VOLONTARI</font></b></td>
</tr>
<tr>
<td colspan="13" bgcolor="#d9dbe0" align="center">ANAGRAFICA</td>
<td colspan="11" bgcolor="#d3cdfa" align="center">MENSA</td>
<td colspan="11" bgcolor="#facdda" align="center">GUARDAROBA</td>
<td colspan="11" bgcolor="#cdfae7" align="center">TESSERAMENTO</td>
<td colspan="11" bgcolor="#f7facd" align="center">ASCOLTO</td>
<td colspan="11" bgcolor="#fdd29a" align="center">SORVEGLIANZA</td>
<td colspan="11" bgcolor="#fcd2fb" align="center">VARIE</td>
</tr>
<tr bgcolor="#d9dbe0" >


<?php {echo '<td align="center"> CODICE</td> ';} ?>
<?php {echo '<td align="center">STATUS</td>';} ?>
<?php {echo '<td align="center">COGNOME</td>';} ?>		
<?php {echo '<td align="center">NOME</td>';} ?>
<?php {echo '<td align="center">NATO IL</td>';} ?>
<?php {echo '<td align="center">SESSO</td>';} ?>
<?php {echo '<td align="center">INDIRIZZO</td>';} ?>
<?php {echo '<td align="center">CAP</td>';} ?>
<?php {echo '<td align="center">CITTA\'</td>';} ?>
<?php {echo '<td align="center">TELEFONO</td>';} ?>
<?php {echo '<td align="center">EMAIL</td>';} ?>
<?php {echo '<td align="center">PROFESSIONE</td>';} ?>
<?php {echo '<td align="center">COMPETENZA</td>';} ?>
<?php {echo '<td bgcolor="#d3cdfa" align="center">MENSA</td>';} ?>
<?php {echo '<td bgcolor="#d3cdfa" align="center">MO</td>';} ?>
<?php {echo '<td bgcolor="#d3cdfa" align="center">RF</td>';} ?>
<?php {echo '<td bgcolor="#d3cdfa" align="center">EM</td>';} ?>
<?php {echo '<td bgcolor="#d3cdfa" align="center">FR</td>';} ?>
<?php {echo '<td bgcolor="#d3cdfa" align="center">LUN</td>';} ?>
<?php {echo '<td bgcolor="#d3cdfa" align="center">MAR</td>';} ?>
<?php {echo '<td bgcolor="#d3cdfa" align="center">MER</td>';} ?>
<?php {echo '<td bgcolor="#d3cdfa" align="center">GIO</td>';} ?>
<?php {echo '<td bgcolor="#d3cdfa" align="center">VEN</td>';} ?>
<?php {echo '<td bgcolor="#d3cdfa" align="center">DOM</td>';} ?>

<?php {echo '<td bgcolor="#facdda" align="center">GUARDAROBA</td>';} ?>
<?php {echo '<td bgcolor="#facdda" align="center">MO</td>';} ?>
<?php {echo '<td bgcolor="#facdda" align="center">RF</td>';} ?>
<?php {echo '<td bgcolor="#facdda" align="center">EM</td>';} ?>
<?php {echo '<td bgcolor="#facdda" align="center">FR</td>';} ?>
<?php {echo '<td bgcolor="#facdda" align="center">LUN</td>';} ?>
<?php {echo '<td bgcolor="#facdda" align="center">MAR</td>';} ?>
<?php {echo '<td bgcolor="#facdda" align="center">MER</td>';} ?>
<?php {echo '<td bgcolor="#facdda" align="center">GIO</td>';} ?>
<?php {echo '<td bgcolor="#facdda" align="center">VEN</td>';} ?>
<?php {echo '<td bgcolor="#facdda" align="center">DOM</td>';} ?>

<?php {echo '<td bgcolor="#cdfae7" align="center">TESSERAMENTO</td>';} ?>
<?php {echo '<td bgcolor="#cdfae7" align="center">MO</td>';} ?>
<?php {echo '<td bgcolor="#cdfae7" align="center">RF</td>';} ?>
<?php {echo '<td bgcolor="#cdfae7" align="center">EM</td>';} ?>
<?php {echo '<td bgcolor="#cdfae7" align="center">FR</td>';} ?>
<?php {echo '<td bgcolor="#cdfae7" align="center">LUN</td>';} ?>
<?php {echo '<td bgcolor="#cdfae7" align="center">MAR</td>';} ?>
<?php {echo '<td bgcolor="#cdfae7" align="center">MER</td>';} ?>
<?php {echo '<td bgcolor="#cdfae7" align="center">GIO</td>';} ?>
<?php {echo '<td bgcolor="#cdfae7" align="center">VEN</td>';} ?>
<?php {echo '<td bgcolor="#cdfae7" align="center">DOM</td>';} ?>

<?php {echo '<td bgcolor="#f7facd" align="center">ASCOLTO</td>';} ?>
<?php {echo '<td bgcolor="#f7facd" align="center">MO</td>';} ?>
<?php {echo '<td bgcolor="#f7facd" align="center">RF</td>';} ?>
<?php {echo '<td bgcolor="#f7facd" align="center">EM</td>';} ?>
<?php {echo '<td bgcolor="#f7facd" align="center">FR</td>';} ?>
<?php {echo '<td bgcolor="#f7facd" align="center">LUN</td>';} ?>
<?php {echo '<td bgcolor="#f7facd" align="center">MAR</td>';} ?>
<?php {echo '<td bgcolor="#f7facd" align="center">MER</td>';} ?>
<?php {echo '<td bgcolor="#f7facd" align="center">GIO</td>';} ?>
<?php {echo '<td bgcolor="#f7facd" align="center">VEN</td>';} ?>
<?php {echo '<td bgcolor="#f7facd" align="center">DOM</td>';} ?>

<?php {echo '<td bgcolor="#fdd29a" align="center">SORVEGLIANZA</td>';} ?>
<?php {echo '<td bgcolor="#fdd29a" align="center">MO</td>';} ?>
<?php {echo '<td bgcolor="#fdd29a" align="center">RF</td>';} ?>
<?php {echo '<td bgcolor="#fdd29a" align="center">EM</td>';} ?>
<?php {echo '<td bgcolor="#fdd29a" align="center">FR</td>';} ?>
<?php {echo '<td bgcolor="#fdd29a" align="center">LUN</td>';} ?>
<?php {echo '<td bgcolor="#fdd29a" align="center">MAR</td>';} ?>
<?php {echo '<td bgcolor="#fdd29a" align="center">MER</td>';} ?>
<?php {echo '<td bgcolor="#fdd29a" align="center">GIO</td>';} ?>
<?php {echo '<td bgcolor="#fdd29a" align="center">VEN</td>';} ?>
<?php {echo '<td bgcolor="#fdd29a" align="center">DOM</td>';} ?>

<?php {echo '<td bgcolor="#fcd2fb" align="center">VARIE</td>';} ?>
<?php {echo '<td bgcolor="#fcd2fb" align="center">MO</td>';} ?>
<?php {echo '<td bgcolor="#fcd2fb" align="center">RF</td>';} ?>
<?php {echo '<td bgcolor="#fcd2fb" align="center">EM</td>';} ?>
<?php {echo '<td bgcolor="#fcd2fb" align="center">FR</td>';} ?>
<?php {echo '<td bgcolor="#fcd2fb" align="center">LUN</td>';} ?>
<?php {echo '<td bgcolor="#fcd2fb" align="center">MAR</td>';} ?>
<?php {echo '<td bgcolor="#fcd2fb" align="center">MER</td>';} ?>
<?php {echo '<td bgcolor="#fcd2fb" align="center">GIO</td>';} ?>
<?php {echo '<td bgcolor="#fcd2fb" align="center">VEN</td>';} ?>
<?php {echo '<td bgcolor="#fcd2fb" align="center">DOM</td>';} ?>

</tr>
		 
      

</table>
	<table border="1">
  <?php
$swprima=0; $swchi=0; 
if($swm==1){$prima=" and ("; $dopo=") ";$swprima=1;} else {$prima=" "; $dopo=" ";}
if($swg==1){if($swprima==0){$primag=" and ("; $dopog=") ";}else{$primag=" or ("; $dopog=") ";}$swprima=1;} else {$primag=" "; $dopog=" ";}
if($swt==1){if($swprima==0){$primat=" and ("; $dopot=") ";}else{$primat=" or ("; $dopot=") ";}$swprima=1;} else {$primat=" "; $dopot=" ";}
if($swa==1){if($swprima==0){$primaa=" and ("; $dopoa=") ";}else{$primaa=" or ("; $dopoa=") ";}$swprima=1;} else {$primaa=" "; $dopoa=" ";}
if($sws==1){if($swprima==0){$primas=" and ("; $dopos=") ";}else{$primas=" or ("; $dopos=") ";}$swprima=1;} else {$primas=" "; $dopos=" ";}
if($swv==1){if($swprima==0){$primav=" and ("; $dopov=") ";}else{$primav=" or ("; $dopov=") ";}$swprima=1;} else {$primav=" "; $dopov=" ";}
#echo "fre ".$swfrem.$swemem."<br>";
if($swfrem==1)
{ 
if($swprimam==0)
     {$primafrem=" and (";  $swprimam=1;}
    else
     {$primafrem=" or ";  }
      } 
    else 
     {$primafrem=" ";  }
   
if($swfreg==1)
{
if($swprimam==0)
     {$primafreg=" and (";  $swprimam=1;}
    else
     {$primafreg=" or ";  }
      } 
    else 
     {$primafreg=" ";  }


if($swfret==1)
{
if($swprimam==0)
     {$primafret=" and (";  $swprimam=1;}
    else
     {$primafret=" or ";  }
      } 
    else 
     {$primafret=" ";  }
     
if($swfrea==1)
{
if($swprimam==0)
     {$primafrea=" and (";  $swprimam=1;}
    else
     {$primafrea=" or ";  }
      } 
    else 
     {$primafrea=" ";  }     
     
if($swfres==1)
{
if($swprimam==0)
     {$primafres=" and (";  $swprimam=1;}
    else
     {$primafres=" or ";  }
      } 
    else 
     {$primafres=" ";  }     

if($swfrev==1)
{
if($swprimam==0)
     {$primafrev=" and (";  $swprimam=1;}
    else
     {$primafrev=" or ";  }
      } 
    else 
     {$primafrev=" ";  }
     
     
     
if($swemem==1)
{ 
if($swprimam==0)
     {$primaemem=" and (";  $swprimam=1;}
    else
     {$primaemem=" or ";  }
      } 
    else 
     {$primaemem=" ";  }
   
if($swemeg==1)
{
if($swprimam==0)
     {$primaemeg=" and (";  $swprimam=1;}
    else
     {$primaemeg=" or ";  }
      } 
    else 
     {$primaemeg=" ";  }


if($swemet==1)
{
if($swprimat==0)
     {$primaemem=" and (";  $swprimam=1;}
    else
     {$primaemet=" or ";  }
      } 
    else 
     {$primaemet=" ";  }
     
if($swemea==1)
{
if($swprimam==0)
     {$primaemea=" and (";  $swprimam=1;}
    else
     {$primaemea=" or ";  }
      } 
    else 
     {$primaemea=" ";  }     
     
if($swemes==1)
{
if($swprimam==0)
     {$primaemes=" and (";  $swprimam=1;}
    else
     {$primaemes=" or ";  }
      } 
    else 
     {$primaemes=" ";  }     

if($swemev==1)
{
if($swprimam==0)
     {$primaemev=" and (";  $swprimam=1;}
    else
     {$primaemev=" or ";  }
      } 
    else 
     {$primaemev=" ";  }
          
          




if($swrefm==1)
{
if($swprimam==0)
     {$primarefm=" and (";  $swprimam=1;}
    else
     {$primarefm=" or ";  }
      } 
    else 
     {$primarefm=" ";  }
   
if($swrefg==1)
{
if($swprimam==0)
     {$primarefg=" and (";  $swprimam=1;}
    else
     {$primarefg=" or ";  }
      } 
    else 
     {$primarefg=" ";  }


if($swreft==1)
{
if($swprimam==0)
     {$primareft=" and (";  $swprimam=1;}
    else
     {$primareft=" or ";  }
      } 
    else 
     {$primareft=" ";  }
     
if($swrefa==1)
{
if($swprimam==0)
     {$primarefa=" and (";  $swprimam=1;}
    else
     {$primarefa=" or ";  }
      } 
    else 
     {$primarefa=" ";  }     
     
if($swrefs==1)
{
if($swprimam==0)
     {$primarefs=" and (";  $swprimam=1;}
    else
     {$primarefs=" or ";  }
      } 
    else 
     {$primarefs=" ";  }     

if($swrefv==1)
{
if($swprimam==0)
     {$primarefv=" and (";  $swprimam=1;}
    else
     {$primarefv=" or ";  }
      } 
    else 
     {$primarefv=" ";  }




if($swmemm==1)
{
if($swprimam==0)
     {$primamemm=" and (";  $swprimam=1;}
    else
     {$primamemm=" or ";  }
      } 
    else 
     {$primamemm=" ";  }
   
if($swmemg==1)
{
if($swprimam==0)
     {$primamemg=" and (";  $swprimam=1;}
    else
     {$primamemg=" or ";  }
      } 
    else 
     {$primamemg=" ";  }


if($swmemt==1)
{
if($swprimam==0)
     {$primamemt=" and (";  $swprimam=1;}
    else
     {$primamemt=" or ";  }
      } 
    else 
     {$primamemt=" ";  }
     
if($swmema==1)
{
if($swprimam==0)
     {$primamema=" and (";  $swprimam=1;}
    else
     {$primamema=" or ";  }
      } 
    else 
     {$primamema=" ";  }     
     
if($swmems==1)
{
if($swprimam==0)
     {$primamems=" and (";  $swprimam=1;}
    else
     {$primamems=" or ";  }
      } 
    else 
     {$primamems=" ";  }     

if($swmemv==1)
{
if($swprimam==0)
     {$primamemv=" and (";  $swprimam=1;}
    else
     {$primamemv=" or ";  }
      } 
    else 
     {$primamemv=" ";  }
                                        
#if($swfreg==1){if($swprima==0){$primafreg=" and ("; $dopofreg=" ";}else{$primafreg=" or "; $dopofreg=") ";}$swprima=1;} else {$primafreg=" "; $dopofreg=" ";}



if($swfrem==1 or $swfreg==1 or $swfret==1 or $swfrea==1 or $swfres==1 or $swfrev==1 or
   $swmemm==1 or $swmemg==1 or $swmemt==1 or $swmema==1 or $swmems==1 or $swmemv==1 or
   $swrefm==1 or $swrefg==1 or $swreft==1 or $swrefa==1 or $swrefs==1 or $swrefv==1 or
   $swemem==1 or $swemeg==1 or $swemet==1 or $swemea==1 or $swemes==1 or $swemev==1 
){$parchiudi=") ";}else{$parchiudi=" ";}     

if ($tessera!="")
   {$sql = "SELECT *  FROM  socivolontari where  tessera = '$tessera' " .
        "order by cognome";   }
   else
    {$sql = "SELECT *  FROM  socivolontari where  (tessera != '') " 
        .  $selezionastatus  . $selezionacognome . $selezionanome .   
        $selezionamembro 
        
. $prima      
        . $selezionalunm 
        . $selezionamarm 
        . $selezionamerm 
        . $selezionagiom 
        . $selezionavenm 
        . $selezionadomm 
. $dopo 
. $primag       
        . $selezionalung 
        . $selezionamarg 
        . $selezionamerg 
        . $selezionagiog 
        . $selezionaveng 
        . $selezionadomg
. $dopog 
. $primat         
        . $selezionalunt 
        . $selezionamart 
        . $selezionamert 
        . $selezionagiot 
        . $selezionavent 
        . $selezionadomt
. $dopot 
. $primaa         
        . $selezionaluna 
        . $selezionamara 
        . $selezionamera 
        . $selezionagioa 
        . $selezionavena 
        . $selezionadoma
. $dopoa 
. $primas         
        . $selezionaluns 
        . $selezionamars 
        . $selezionamers 
        . $selezionagios 
        . $selezionavens 
        . $selezionadoms
. $dopos 
. $primav         
        . $selezionalunv 
        . $selezionamarv
        . $selezionamerv 
        . $selezionagiov 
        . $selezionavenv 
        . $selezionadomv    
. $dopov 

. $primafrem
        . $selezionafrequenzam
. $primafreg
        . $selezionafrequenzag
. $primafret        
        . $selezionafrequenzat
. $primafrea      
        . $selezionafrequenzaa
. $primafres        
        . $selezionafrequenzas
. $primafrev         
        . $selezionafrequenzav
 

. $primaemem     
        . $selezionaemergenzem
. $primaemeg         
        . $selezionaemergenzeg
. $primaemet        
        . $selezionaemergenzet
. $primaemes         
        . $selezionaemergenzes
. $primaemes         
        . $selezionaemergenzes
. $primaemev         
        . $selezionaemergenzev
   

. $primarefm        
        . $selezionareferentem
. $primarefg        
        . $selezionareferenteg
. $primareft        
        . $selezionareferentet
. $primarefa        
        . $selezionareferentea
. $primarefs        
        . $selezionareferentes
. $primarefv        
        . $selezionareferentev

. $primamemm         
        . $selezionamembrom
. $primamemg          
        . $selezionamembrog
. $primamemt          
        . $selezionamembrot
. $primamema         
        . $selezionamembroa
. $primamems          
        . $selezionamembros
. $primamemv          
        . $selezionamembrov
. $parchiudi               
        . $selezionamensa . $selezionaguardaroba .
        $selezionatesseramento . $selezionavarie. $selezionaascolto  . $selezionasorveglianza .
        "order by cognome"; }
#echo $sql;
$rCount = 1;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
	
	{  
      $tot++;
      $tessera = $macrogruppo["tessera"];
      $cognome = $macrogruppo["cognome"];
      $nome = $macrogruppo["nome"];
      $datanascita = $macrogruppo["data_nascita"];
      $natoa = $macrogruppo["luogo_nascita"];
      $provnatoa = $macrogruppo["provincia_nascita"];
      $indirizzores = $macrogruppo["indirizzo"];
      $residentecitta = $macrogruppo["localita_residenza"];
      $residenteprov= $macrogruppo["provincia"];
      $cap = $macrogruppo["cap"];
      $telefono = $macrogruppo["telefono"];
      $email = $macrogruppo["email"];
      $codfisc = $macrogruppo["codice_fiscale"];
      $oggi = $macrogruppo["data_iscrizione"];
      $accdati = $macrogruppo["ass"];
      $comunicazioni = $macrogruppo["altro"];	
      $nazionalita = $macrogruppo["nazionalita"];	
      $sesso = $macrogruppo["sesso"];	
      $tesseraold = $macrogruppo["tesseraold"];	
      $status = $macrogruppo["status"];
      
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
      $ascolto = $macrogruppo["ascolto"];
    
       $lun = $macrogruppo["lun"];
      $mar = $macrogruppo["mar"];
      $mer = $macrogruppo["mer"];
      $gio= $macrogruppo["gio"];
      $ven = $macrogruppo["ven"];
      $dom = $macrogruppo["dom"];
      
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
      
if($lun==0){$lun="";}else{$lun="SI";}      
if($mar==0){$mar="";}else{$mar="SI";}      
if($mer==0){$mer="";}else{$mer="SI";}
if($gio==0){$gio="";}else{$gio="SI";}
if($ven==0){$ven="";}else{$ven="SI";}
if($dom==0){$dom="";}else{$dom="SI";}
if($mensa==0){$mensa="";}else{$mensa="SI";}  
if($frequenza==0){$frequenza="";}else{$frequenza="SI";}
if($emergenze==0){$emergenze="";}else{$emergenze="SI";}
if($referente==0){$referente="";}else{$referente="SI";}
if($membro==0){$membro="";}else{$membro="SI";}

if($lung==0){$lung="";}else{$lung="SI";}      
if($marg==0){$marg="";}else{$marg="SI";}      
if($merg==0){$merg="";}else{$merg="SI";}
if($giog==0){$giog="";}else{$giog="SI";}
if($veng==0){$veng="";}else{$veng="SI";}
if($domg==0){$domg="";}else{$domg="SI";}
if($guardaroba==0){$guardaroba="";}else{$guardaroba="SI";}  
if($frequenzag==0){$frequenzag="";}else{$frequenzag="SI";}
if($emergenzeg==0){$emergenzeg="";}else{$emergenzeg="SI";}
if($referenteg==0){$referenteg="";}else{$referenteg="SI";}
if($membrog==0){$membrog="";}else{$membrog="SI";}

if($lunt==0){$lunt="";}else{$lunt="SI";}      
if($mart==0){$mart="";}else{$mart="SI";}      
if($mert==0){$mert="";}else{$mert="SI";}
if($giot==0){$giot="";}else{$giot="SI";}
if($vent==0){$vent="";}else{$vent="SI";}
if($domt==0){$domt="";}else{$domt="SI";}
if($tesseramento==0){$tesseramento="";}else{$tesseramento="SI";}  
if($frequenzat==0){$frequenzat="";}else{$frequenzat="SI";}
if($emergenzet==0){$emergenzet="";}else{$emergenzet="SI";}
if($referentet==0){$referentet="";}else{$referentet="SI";}
if($membrot==0){$membrot="";}else{$membrot="SI";}

if($luna==0){$luna="";}else{$luna="SI";}      
if($mara==0){$mara="";}else{$mara="SI";}      
if($mera==0){$mera="";}else{$mera="SI";}
if($gioa==0){$gioa="";}else{$gioa="SI";}
if($vena==0){$vena="";}else{$vena="SI";}
if($doma==0){$doma="";}else{$doma="SI";}
if($ascolto==0){$ascolto="";}else{$ascolto="SI";}  
if($frequenzaa==0){$frequenzaa="";}else{$frequenzaa="SI";}
if($emergenzea==0){$emergenzea="";}else{$emergenzea="SI";}
if($referentea==0){$referentea="";}else{$referentea="SI";}
if($membroa==0){$membroa="";}else{$membroa="SI";}

if($luns==0){$luns="";}else{$luns="SI";}      
if($mars==0){$mars="";}else{$mars="SI";}      
if($mers==0){$mers="";}else{$mers="SI";}
if($gios==0){$gios="";}else{$gios="SI";}
if($vens==0){$vens="";}else{$vens="SI";}
if($doms==0){$doms="";}else{$doms="SI";}
if($sorveglianza==0){$sorveglianza="";}else{$sorveglianza="SI";}  
if($frequenzas==0){$frequenzas="";}else{$frequenzas="SI";}
if($emergenzes==0){$emergenzes="";}else{$emergenzes="SI";}
if($referentes==0){$referentes="";}else{$referentes="SI";}
if($membros==0){$membros="";}else{$membros="SI";}

if($lunv==0){$lunv="";}else{$lunv="SI";}      
if($marv==0){$marv="";}else{$marv="SI";}      
if($merv==0){$merv="";}else{$merv="SI";}
if($giov==0){$giov="";}else{$giov="SI";}
if($venv==0){$venv="";}else{$venv="SI";}
if($domv==0){$domv="";}else{$domv="SI";}
if($varie==0){$varie="";}else{$varie="SI";}  
if($frequenzav==0){$frequenzav="";}else{$frequenzav="SI";}
if($emergenzev==0){$emergenzev="";}else{$emergenzev="SI";}
if($referentev==0){$referentev="";}else{$referentev="SI";}
if($membrov==0){$membrov="";}else{$membrov="SI";}

?>



      
      
	<tr >

      <td  ><font size="2" face="Arial"><?php echo $tessera; ?></td>
      <td  ><font size="2" face="Arial"><?php echo $status; ?></td>

       <td   ><font size="2" face="Arial"><?php echo $cognome; ?></td>
      <td   ><font size="2" face="Arial"><?php echo $nome; ?></td>
      <td   ><font size="2" face="Arial"><?php echo $datanascita; ?></td>
      <td  align="center" ><font  size="2" face="Arial"><?php echo $sesso; ?></td>
      

      
      
      
      <td   ><font size="2" face="Arial"><?php echo $indirizzores; ?></td>
      <td   ><font size="2" face="Arial"><?php echo $cap; ?></td>
      <td   ><font size="2" face="Arial"><?php echo $residentecitta; ?></td>
      <td   ><font size="2" face="Arial"><?php echo $telefono; ?></td> 
      <td   ><font size="2" face="Arial"><?php echo $email; ?></td>
      <td   ><font size="2" face="Arial"><?php echo $professione; ?></td>
      <td   ><font size="2" face="Arial"><?php echo $competenze; ?></td> 
      
      <td  align="center" ><font size="2" face="Arial"><?php echo $mensa; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $membro; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $referente; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $emergenze; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $frequenza; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $lun; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $mar; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $mer; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $gio; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $ven; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $dom; ?></td>
      
      <td  align="center" ><font size="2" face="Arial"><?php echo $guardaroba; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $membrog; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $referenteg; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $emergenzeg; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $frequenzag; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $lung; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $marg; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $merg; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $giog; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $veng; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $domg; ?></td>
 
      <td  align="center" ><font size="2" face="Arial"><?php echo $tesseramento; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $membrot; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $referentet; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $emergenzet; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $frequenzat; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $lunt; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $mart; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $mert; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $giot; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $vent; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $domt; ?></td>
      
      <td  align="center" ><font size="2" face="Arial"><?php echo $ascolto; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $membroa; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $referentea; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $emergenzea; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $frequenzaa; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $luna; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $mara; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $mera; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $gioa; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $vena; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $doma; ?></td>
      
      <td  align="center" ><font size="2" face="Arial"><?php echo $sorveglianza; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $membros; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $referentes; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $emergenzes; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $frequenzas; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $luns; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $mars; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $mers; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $gios; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $vens; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $doms; ?></td>
      
      <td  align="center" ><font size="2" face="Arial"><?php echo $varie; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $membrov; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $referentev; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $emergenzev; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $frequenzav; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $lunv; ?></td> 
      <td  align="center" ><font size="2" face="Arial"><?php echo $marv; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $merv; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $giov; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $venv; ?></td>
      <td  align="center" ><font size="2" face="Arial"><?php echo $domv; ?></td>
       
         </tr>	
<?php } }?>          
      
      
      
      
      
      
      
		</tr>

	</tbody>
	</table>

</body>
</html>