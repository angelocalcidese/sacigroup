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
$status=$_REQUEST["status"];
$tessera=$_REQUEST["tessera"];
$ntessera=$_REQUEST["ntessera"];
$etada=$_REQUEST["etada"];
$etaa=$_REQUEST["etaa"];
$liberox=$_REQUEST["libero"];

$semaforo=$_REQUEST["semaforo"];
$sesso=$_REQUEST["sesso"];
if($sesso=="TUTTI"){$sesso="";}
#echo $ntessera;
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
 if($liberox=="TT"){$selezionalibero ="  ";}
 if($liberox=="NO"){$selezionalibero = " and libero  = 'NO' ";}
 if($liberox=="SI"){$selezionalibero = " and libero  = 'SI' ";}
if ($semaforo!="TUTTI")
   {$selezionasemaforo= " and semaforo = '".$semaforo."'";}
   else
   {$selezionasemaforo="";}
   
if ($sesso!="")
   {$selezionasesso= " and sesso = '".$sesso."'";}
   else
   {$selezionasesso="";}


if ($cognome!="")
   {$selezionacognome= " and cognome like '".$cognome."%' ";}
   else
   {$selezionacognome="";}
   
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
#header('Content-Type: text/html; charset=utf-8'); 
?>

<html>
<head>

	<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
	<title>Esponi Assistiti</title>
	<link rel="stylesheet" type="text/css" href="jquery.tablescroll.css"/>
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
<td bgcolor="#FFFFFF" style="border: 0px ; "><a href="menugenerale.php?login=<?php echo $login; ?>">Menu Generale</a></td>             

 
   
	</table>  
      
</div> 
<div align="center">   
<div id="container">
<p align="center"><b><font face="Arial" size="5" color="#993300">ELENCO ANAGRAFICA 
 VOLONTARI</font></b></p>
<p align="center">
<b><font face="Arial" size="4" color="#993300">(<img border="0" background="btn1.gif" src="pencil.png" width="25" height="25">=Variazione Anagrafica Volontario) 

</font></b>




</p>
 
<div align="center">
<div id="container">
	<table id="thetable" cellspacing="0" width="100%">
	<thead>
		<tr>
		  <td background="back-barra-menuorrizontale.gif" align="center"><font size="3" face="Arial"  color="#ffffff">Progr.</td>
	<!--	  <td  background="back-barra-menuorrizontale.gif" align="center" style="width:10%;"><font size="3" face="Arial" color="#ffffff">Cod. Ospite</td>  -->
      		  <td  background="back-barra-menuorrizontale.gif" align="center"><font size="3" face="Arial" color="#ffffff">Codice</td>

		  
      <td  background="back-barra-menuorrizontale.gif" align="center"><font size="3" face="Arial" color="#ffffff">Cognome</td>
		  <td  background="back-barra-menuorrizontale.gif" align="center"><font size="3" face="Arial" color="#ffffff">Nome</td>
      <td  background="back-barra-menuorrizontale.gif" align="center"style="width:10%;" ><font size="3" face="Arial" color="#ffffff">Data Nascita</td>
      <td  background="back-barra-menuorrizontale.gif" align="center"style="width:10%;" ><font size="3" face="Arial" color="#ffffff">Eta'</td>      
      <td  background="back-barra-menuorrizontale.gif" align="center"><font size="3" face="Arial" color="#ffffff">Sesso</td>
      <td  background="back-barra-menuorrizontale.gif" align="center"style="width:15%;" ><font size="3" face="Arial" color="#ffffff">Status</td>
   

      <td  background="back-barra-menuorrizontale.gif" align="center"><font size="3" face="Arial" color="#ffffff">Telefono</td>
      <td  background="back-barra-menuorrizontale.gif" align="center"><font size="3" face="Arial" color="#ffffff">Lib.</td>
      <td  background="back-barra-menuorrizontale.gif" align="center"><font size="3" face="Arial" color="#ffffff">VR</td>
      <td  background="back-barra-menuorrizontale.gif" align="center"><font size="3" face="Arial" color="#ffffff">PR</td>
      <td  background="back-barra-menuorrizontale.gif" align="center"><font size="3" face="Arial" color="#ffffff">MAIL</td>
      <td  background="back-barra-menuorrizontale.gif" align="center"><font size="3" face="Arial" color="#ffffff">SEM</td>
<? if($login=="paolo.bechini"){?>       
      <td  background="back-barra-menuorrizontale.gif" align="center"><font size="3" face="Arial" color="#ffffff">CANC</td>
<? } ?>      
       </tr>
	</thead>
	<tbody>

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
$annoggi=date("Y");
if ($tessera!="")
   {$sql = "SELECT *  FROM  socivolontari where  tessera = '$tessera' " .
        "order by cognome";   }
   else
    {$sql = "SELECT *  FROM  socivolontari where  (tessera != '') " 
        .  $selezionastatus  . $selezionacognome . $selezionanome . $selezionasemaforo . $selezionasesso . $selezionalibero .  
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
      
      $tessera = $macrogruppo["tessera"];
      $semaforo = $macrogruppo["semaforo"];
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
      $libero = $macrogruppo["libero"];
      if ($datanascita!=""){
      $datavv=explode("/",$datanascita);
        $datavv=$datavv[2];
        $diffe=$annoggi-$datavv;    
      #echo $sweta;         
        }
        else
        {$diffe="";}
        #echo $diffe."<br>";
      $sweta=0;
      if($etada=="00" and $etaa=="99"){$sweta=1;}
      else
      { 
      if ($datanascita!=""){ 
      if ($diffe>=$etada and $diffe<=$etaa){$sweta=1;} }
      else
      {$sweta=0;} 
      }  
      
if($sweta==1){ 
$tot++; 
?>



      
      
	<tr class="first">
      <td align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Arial"><?php echo $tot; ?></td>
<!--     <td  align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Arial"><?php echo $tessera; ?></td> -->
      <td  align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Arial"><?php echo $tessera; ?></td>
   

       <td  align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Arial"><?php echo $cognome; ?></td>
      <td  align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Arial"><?php echo $nome; ?></td>
      <td  align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Arial"><?php echo $datanascita; ?></td>
      <td  align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Arial"><?php echo $diffe; ?></td>
      <td  align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Arial"><?php echo $sesso; ?></td>
      <td  align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Arial"><?php echo $status; ?></td>
      <td  align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Arial"><?php echo $telefono; ?></td>
      <td  align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Arial"><?php echo $libero; ?></td>
 <!--      <td  align="center"><a href="./nic/demos/modifica.php?tessera=<?php echo $tessera; ?>&login=<?php echo $login; ?>" target="_blank" ><img border="0" background="btn1.gif" src="pencil.png" width="25" height="25"></a></td>   -->
      
      <td  align="center" ><a  onclick="myFunction('./nic/demos/modifica.php?login=<?php echo $login; ?>&tessera=<?php echo $tessera; ?>');" target="_blank" ><img border="0" background="btn1.gif" src="pencil.png" width="25" height="25"></a></td>

      
       <td  align="center"><a href="presenze.php?tessera=<?php echo $tessera; ?>&login=<?php echo $login; ?>" target="_blank" ><img border="0" background="btn1.gif" src="presenza.png" width="30" height="25"></a></td>  
       <td  align="center"><a href="./nic/demos/emailsingola.php?tessera=<?php echo $tessera; ?>&login=<?php echo $login; ?>" target="_blank" ><img border="0" background="btn1.gif" src="mail.png" width="25" height="25"></a></td>  
       <td  align="center">
       <? if($semaforo=="giallo"){echo '<img border="0" src="giallo.png" width="22" height="22"  style="vertical-align:middle;" >';}
    else                   
    {echo '<img border="0" src="verde.png" width="22" height="22" style="vertical-align:middle;" >';} 
?> 
       </td>  

<? if($login=="paolo.bechini"){?>       
       <td  align="center"><a href="./cancvolontario.php?tessera=<?php echo $tessera; ?>&login=<?php echo $login; ?>" target="_blank" ><img border="0" background="btn1.gif" src="x.png" width="25" height="25"></a></td>  
<? } ?>       
       
         </tr>	
<?php }} }?>          
      
      
      
      
      
      
      
		</tr>

	</tbody>
	</table>
</div>
</div>
	<br/>



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
		window.open(url,'pdf','width=900,height=900,left=150,top=150,location=0,directories=0,toolbar=0,scrollbars=yes,resizable=1')
    
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>
  <script>
function carica_consegnaB(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=1150,height=600,left=50,top=50,location=0,directories=0,toolbar=0')
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
<script>
function myFunction(url) {
 window.open(url);
}
</script>
<script>
function myFunctionx() {
  window.open("cerca2storico.php?tessera=<?php echo $tessera; ?>&login=<?php echo $login; ?>&zona=<?php echo $zona; ?>");
}
</script>
</body>
</html>