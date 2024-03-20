<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="pomaindex.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php
}
$login=$_REQUEST["login"];
$tessera=$_REQUEST["tessera"];
$importo=$_REQUEST["importoass"];
$ingranaggio=$_REQUEST["ingranaggio"];
#echo "tessera ". $tessera; exit;
include "conf_DB.php";
$anno=date("Y");
$oggi=date("d/m/Y");
$sql = "insert into quote
 ( 
  tessera, 
  anno, 
  importo,
  data,
  rinnovo_nuovo
 )
  values
 ( 
  '$tessera',  
  '$anno',  
  '$importo',
  '$oggi',
  'N' )
    ";
    if ($conn->query($sql) === TRUE)
        { } 
       else
       { echo "ERRORE gia' presente&";}   
$sql1 = "SELECT * FROM soci  where tessera = '$tessera' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ 
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
      $deceduto = $macrogruppo["deceduto"];	
      $cellulare=""; 

$anno=date("Y");
$sql1m = "SELECT * FROM ricevuta  where progr = '1' ";
#echo $sql1; 
$result = $conn->query($sql1m);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{$numeroz = $macrogruppo["numero"];
$numeroz++; 
$numerox=$numeroz."/".$anno;   
$sqly = "UPDATE ricevuta set 
numero = '$numeroz'
where 
progr = 1
";

if ($conn->query($sql) === TRUE)
    {    } 
    else
    { echo "Error inserted record: " . $conn->error; } 
} }      
$mastro="0002";
$sottomastro="0001";
$conto="0002";
$eu="E";
$causale="EA";
$datax=date("Y-m-d");
$adesso=date("Y-m-d H:m:s");
$anno=date("Y");
$tipodocumento="GEN";
$numero=$tessera;
$note="Ass. annuale Tessera n. ".$tessera;
$iva=0;
$importoiva=0;      
   $sql = "INSERT INTO 
movimenticontabili (
esercizio, 
mastro, 
sottomastro, 
conto,
e_u,
causale,
importo,
data,
data_inserimento,
tipodocumento,
numdocumento,
note,
perciva,
iva,
login,
ricevutapagamento
) VALUES (
'$anno', 
'$mastro', 
'$sottomastro', 
'$conto',
'$eu',
'$causale',
'$importo',
'$datax',
'$adesso',
'$tipodocumento',
'$numero',
'$note',
'$iva',
'$importoiva',
'$login',
'$numerox'
)";
#echo  $sql; exit;
if ($conn->query($sql) === TRUE)
    {
    
if ($eu!="P")
{
$sql = "SELECT *  FROM  corre where causale = '$causale' and esercizio = '$anno'"; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
	
	{   $anno = $macrogruppo["esercizio"];
      $causale = $macrogruppo["causale"];
      $causale1 = $macrogruppo["causale1"];
      $segno = $macrogruppo["segno"];
      
  $sqlg = "SELECT *  FROM  causale where codice = '$causale1' and esercizio = '$anno'"; 
	$result = $conn->query($sqlg);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
	
	{   $anno = $macrogruppo["esercizio"];
      $eu1 = $macrogruppo["e_u"];
      $mastro1 = $macrogruppo["mastro"];  
      $sottomastro1 = $macrogruppo["sottomastro"];
      $conto1 = $macrogruppo["conto"];
      
      #if ($eu1=="U") {$importo=$importo*-1;}
      if ($segno=="-") {$importo=$importo*-1;}
      #echo $causale1; exit;
      
$sql = "INSERT INTO 
movimenticontabili (
esercizio, 
mastro, 
sottomastro, 
conto,
e_u,
causale,
importo,
data,
data_inserimento,
tipodocumento,
numdocumento,
note,
perciva,
iva,
login,
ricevutapagamento
) VALUES (
'$anno', 
'$mastro1', 
'$sottomastro1', 
'$conto1',
'$eu',
'$causale1',
'$importo',
'$datax',
'$oggi',
'$tipodocumento',
'$numero',
'$note',
'$iva',
'$importoiva',
'$login',
'$numerox'
)";
#echo  $sql; exit;
if ($conn->query($sql) === TRUE)
    {    } 
    else
    { $erroreriferimento="errore movimento già esistente"; }
      
      
   } }
} }          
       
}       
       
       
       
       
       
    }      
      
      
      
      
			}  }
?>

<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 4</title>

<style>
div#container {
min-width:   800px;
  min-height:  500px;
  max-width:  800px;
  max-height: 1000px;
}
div#sottocontainer {
min-width:   800px;
  min-height:  500px;
  max-width:  800px;
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
<script language="JavaScript">
<!--
function FP_preloadImgs() {//v1.0
 var d=document,a=arguments; if(!d.FP_imgs) d.FP_imgs=new Array();
 for(var i=0; i<a.length; i++) { d.FP_imgs[i]=new Image; d.FP_imgs[i].src=a[i]; }
}

function FP_swapImg() {//v1.0
 var doc=document,args=arguments,elm,n; doc.$imgSwaps=new Array(); for(n=2; n<args.length;
 n+=2) { elm=FP_getObjectByID(args[n]); if(elm) { doc.$imgSwaps[doc.$imgSwaps.length]=elm;
 elm.$src=elm.src; elm.src=args[n+1]; } }
}

function FP_getObjectByID(id,o) {//v1.0
 var c,el,els,f,m,n; if(!o)o=document; if(o.getElementById) el=o.getElementById(id);
 else if(o.layers) c=o.layers; else if(o.all) el=o.all[id]; if(el) return el;
 if(o.id==id || o.name==id) return o; if(o.childNodes) c=o.childNodes; if(c)
 for(n=0; n<c.length; n++) { el=FP_getObjectByID(id,c[n]); if(el) return el; }
 f=o.forms; if(f) for(n=0; n<f.length; n++) { els=f[n].elements;
 for(m=0; m<els.length; m++){ el=FP_getObjectByID(id,els[n]); if(el) return el; } }
 return null;
}
// -->
</script>
</head>
<body onload="FP_preloadImgs(/*url*/'button28.jpg', /*url*/'file:///C:/Users/mimmo/AppData/Local/Microsoft/Windows/INetCache/FrontPageTempDir/button29.jpg')">


<div align="center">
	<table border="0" width="30%">
		<tr>
			<td>
			<img border="0" src="carlopoma.png" width="954" height="140"></td>
		</tr>
    <tr>
      <td><a href="menugenerale.php?login=<?php echo $login; ?>">Menu Generale</a>/Inserimento Socio</td></tr>
		</tr>
	</table>
  </div>
<div align="center">   
<div id="container">
<form method="POST" action="JavaScript:carica_consegnaA('stampask.php?tessera=<?php echo $tessera; ?>');" name="modulo" onSubmit="return controllo();">
<p align="center"><b><font face="Arial" size="6" color="#993300">INSERIMENTO 
NUOVO SOCIO</font></b></p>
<p align="center"><b><font face="Arial" size="6" color="#993300">TESSERA N°: <?php echo $tessera; ?> <?php echo $cognome; ?> <?php echo $nome; ?></font></b></p>
<br>
<img border="0" src="print.png" width="132" height="130"><br>
<p><a href="JavaScript:carica_consegnaA('stampasknew.php?tessera=<?php echo $tessera; ?>&numero=<?php echo $numerox; ?>');" name="modulo" onSubmit="return controllo();">
<img border="0" id="img1" src="button27.jpg" height="50" width="250" alt="SKEDA ADESIONE IN PDF PER STAMPA" fp-style="fp-btn: Border Bottom 3; fp-font-style: Bold; fp-font-size: 11; fp-font-color-normal: #800000" fp-title="SKEDA ADESIONE IN PDF PER STAMPA" onmouseover="FP_swapImg(1,0,/*id*/'img1',/*url*/'button28.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img1',/*url*/'button27.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img1',/*url*/'button29.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img1',/*url*/'button28.jpg')"></a></p>


</body>
<script>
function carica_consegnaA(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=600,height=800,left=150,top=150,location=0,directories=0,toolbar=0,scrollbars=yes,resizable=1')
    
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>