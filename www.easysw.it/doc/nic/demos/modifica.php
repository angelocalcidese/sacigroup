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
$tessera=$_REQUEST["tessera"];
$ingranaggio=$_REQUEST["ingranaggio"];
include "conf_DB.php";
if($ingranaggio==8){
$prg=$_REQUEST["prg"];
$sql = "
DELETE from intervistavolontari where prg = '$prg'";
if ($conn->query($sql) === FALSE)
  {echo "errxx=errore";exit;}
  else
  {}
}
if($ingranaggio==2){
$tessera=$_REQUEST["tessera"]; 
$datainter=$_REQUEST["datainter"]; 
$comodo=explode("/",$datainter);
$comodo1=$comodo[2].$comodo[1].$comodo[0];
$volontario1=$_REQUEST["volontario1"];
$volontario2=$_REQUEST["volontario2"];
$volontario3=$_REQUEST["volontario3"];
#echo $volontario2;
$comodo=explode(" - ",$volontario1);
$volontario1=$comodo[0];
$comodo=explode(" - ",$volontario2);
$volontario2=$comodo[0];
$comodo=explode(" - ",$volontario3);
$volontario3=$comodo[0];
$volontario4=$_REQUEST["volontario4"];
$comodo=explode(" - ",$volontario4);
$volontario4=$comodo[0];
$testo=$_REQUEST["testo"];
$testo=str_replace('"', '\"', $testo);   
$testo=str_replace("'", "\'", $testo); 
$oggetto=str_replace('"', '\"', $oggetto);   
$oggetto=str_replace("'", "\'", $oggetto); 
$classe=str_replace('"', '\"', $classe);   
$classe=str_replace("'", "\'", $classe);

$oggi=date("d/m/Y");   
$sql = "INSERT INTO 
    intervistavolontari (
    zona,
    tessera,
    data,
    volontario1,
    volontario2,
    volontario3,
    volontario4,
    testo,
    login,
    datasel,
    mittente

    ) VALUES (
     '$zona',
    '$tessera',
    '$datainter',
    '$volontario1',
    '$volontario2',
    '$volontario3',
    '$volontario4',
    '$testo',
    '$login',
    '$comodo1',
    '$login'
      
    )";
#echo $sql;  exit;   
    if ($conn->query($sql) === FALSE) 
        {        
        echo "ERRORE SCRITTURA NOTA";exit;
       } 
       else
       { } 
$ingranaggio="";
 }




if ($ingranaggio==1)
{

$oggi=date("d/m/Y");
$cognome=$_REQUEST["cognome"];
$cognome=str_replace("'", "\'", $cognome);
$cognome=strtoupper($cognome);


$nome=$_REQUEST["nome"];
$nome=str_replace("'", "\'", $nome);
$nome=strtoupper($nome);

$resvia=$_REQUEST["resvia"];
$resvia=str_replace("'", "\'", $resvia);
$resvia=strtoupper($resvia);

$datanascita=$_REQUEST["datanascita"];
$semaforo=$_REQUEST["semaforo"];
$datask=$_REQUEST["datask"];

$sesso=$_REQUEST["sesso"];
$lun=$_REQUEST["lun"];
$mar=$_REQUEST["mar"];
$mer=$_REQUEST["mer"];
$gio=$_REQUEST["gio"];
$ven=$_REQUEST["ven"];
$dom=$_REQUEST["dom"];

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

$frequenzag=$_REQUEST["frequenzag"];
$emergenzeg=$_REQUEST["emergenzeg"];
$referenteg=$_REQUEST["referenteg"];
$membrog=$_REQUEST["membrog"];

$frequenzat=$_REQUEST["frequenzat"];
$emergenzet=$_REQUEST["emergenzet"];
$referentet=$_REQUEST["referentet"];
$membrot=$_REQUEST["membrot"];

$frequenzaa=$_REQUEST["frequenzaa"];
$emergenzea=$_REQUEST["emergenzea"];
$referentea=$_REQUEST["referentea"];
$membroa=$_REQUEST["membroa"];

$frequenzas=$_REQUEST["frequenzas"];
$emergenzes=$_REQUEST["emergenzes"];
$referentes=$_REQUEST["referentes"];
$membros=$_REQUEST["membros"];

$frequenzav=$_REQUEST["frequenzav"];
$emergenzev=$_REQUEST["emergenzev"];
$referentev=$_REQUEST["referentev"];
$membrov=$_REQUEST["membrov"];

$rescap=$_REQUEST["cap"];
$rescap=strtoupper($rescap);
$status=$_REQUEST["status"];
$professione=$_REQUEST["professione"];
$professione=str_replace("'", "\'", $professione);
$professione=strtoupper($professione);
$competenze=$_REQUEST["competenze"];
$competenze=str_replace("'", "\'", $competenze);
$competenze=strtoupper($competenze);
$frequenza=$_REQUEST["frequenza"];
$emergenze=$_REQUEST["emergenze"];
$referente=$_REQUEST["referente"];
$membro=$_REQUEST["membro"];
$mensa=$_REQUEST["mensa"];
$guardaroba=$_REQUEST["guardaroba"];
$tesseramento=$_REQUEST["tesseramento"];
$sorveglianza=$_REQUEST["sorveglianza"];
$varie=$_REQUEST["varie"];
$saputo=$_REQUEST["saputo"];
$ascolto=$_REQUEST["ascolto"];
$rescitta=$_REQUEST["rescitta"];
$rescitta=str_replace("'", "\'", $rescitta);
$rescitta=strtoupper($rescitta);

$domvia=$_REQUEST["domvia"];
$domvia=str_replace("'", "\'", $domvia);
$domvia=strtoupper($domvia);


$telefono=$_REQUEST["telefono"];
$email=$_REQUEST["email"];
$libero=$_REQUEST["libero"];
if($lun==""){$lun=0;}
if($mar==""){$mar=0;}
if($mer==""){$mer=0;}
if($gio==""){$gio=0;}
if($ven==""){$ven=0;}
if($dom==""){$dom=0;}

if($lung==""){$lung=0;}
if($marg==""){$marg=0;}
if($merg==""){$merg=0;}
if($giog==""){$giog=0;}
if($veng==""){$veng=0;}
if($domg==""){$domg=0;}

if($lunt==""){$lunt=0;}
if($mart==""){$mart=0;}
if($mert==""){$mert=0;}
if($giot==""){$giot=0;}
if($vent==""){$vent=0;}
if($domt==""){$domt=0;}

if($luna==""){$luna=0;}
if($mara==""){$mara=0;}
if($mera==""){$mera=0;}
if($gioa==""){$gioa=0;}
if($vena==""){$vena=0;}
if($doma==""){$doma=0;}

if($luns==""){$luns=0;}
if($mars==""){$mars=0;}
if($mers==""){$mers=0;}
if($gios==""){$gios=0;}
if($vens==""){$vens=0;}
if($doms==""){$doms=0;}

if($lunv==""){$lunv=0;}
if($marv==""){$marv=0;}
if($merv==""){$merv=0;}
if($giov==""){$giov=0;}
if($venv==""){$venv=0;}
if($domv==""){$domv=0;}


if($frequenza==""){$frequenza=0;}
if($emergenze==""){$emergenze=0;}
if($referente==""){$referente=0;}
if($membro==""){$membro=0;}

if($frequenzag==""){$frequenzag=0;}
if($emergenzeg==""){$emergenzeg=0;}
if($referenteg==""){$referenteg=0;}
if($membrog==""){$membrog=0;}

if($frequenzat==""){$frequenzat=0;}
if($emergenzet==""){$emergenzet=0;}
if($referentet==""){$referentet=0;}
if($membrot==""){$membrot=0;}

if($frequenzaa==""){$frequenzaa=0;}
if($emergenzea==""){$emergenzea=0;}
if($referentea==""){$referentea=0;}
if($membroa==""){$membroa=0;}

if($frequenzas==""){$frequenzas=0;}
if($emergenzes==""){$emergenzes=0;}
if($referentes==""){$referentes=0;}
if($membros==""){$membros=0;}

if($frequenzav==""){$frequenzav=0;}
if($emergenzev==""){$emergenzev=0;}
if($referentev==""){$referentev=0;}
if($membrov==""){$membrov=0;}

if($mensa==""){$mensa=0;}
if($guardaroba==""){$guardaroba=0;}
if($tesseramento==""){$tesseramento=0;}
if($varie==""){$varie=0;}
if($ascolto==""){$ascolto=0;}
if($sorveglianza==""){$sorveglianza=0;}

if($datask==""){$datask=$oggi;}


$sql = "
DELETE from socivolontari where tessera = '$tessera'";
if ($conn->query($sql) === FALSE)
  {echo "errxx=errore";exit;}
  else
  {}
    
 $sql = "insert into socivolontari
 (
  tessera, 
  cognome, 
  nome, 
  data_nascita, 
  indirizzo,
  localita_residenza,
  cap, 
  telefono, 
  email, 
  data_iscrizione, 
  sesso, 
  lun,
  mar,
  mer,
  gio,
  ven,
  dom,
  professione,
  competenze,
  frequenza,
  emergenze,
  referente,
  membro,
  mensa,
  guardaroba,
  tesseramento,
  varie,
  saputo,
  ascolto,
  status,
  
  lung,
  marg,
  merg,
  giog,
  veng,
  domg,
  
  lunt,
  mart,
  mert,
  giot,
  vent,
  domt,
  
  luna,
  mara,
  mera,
  gioa,
  vena,
  doma,
  
  luns,
  mars,
  mers,
  gios,
  vens,
  doms, 
  
  lunv,
  marv,
  merv,
  giov,
  venv,
  domv,
  
  frequenzag,
  emergenzeg,
  referenteg,
  membrog,
  
  frequenzat,
  emergenzet,
  referentet,
  membrot,
  
  frequenzaa,
  emergenzea,
  referentea,
  membroa,
  
  frequenzas,
  emergenzes,
  referentes,
  membros, 
  
  frequenzav,
  emergenzev,
  referentev,
  membrov,
  
  sorveglianza,
  semaforo,
  libero  
 )
  values
 (    
  '$tessera',  
  '$cognome',  
  '$nome',  
  '$datanascita',      
  '$resvia',    
  '$rescitta',  
  '$rescap', 
  '$telefono',  
  '$email',  
  '$datask',    
  '$sesso',
  '$lun',
  '$mar',
  '$mer',
  '$gio',
  '$ven',
  '$dom',
  '$professione',
  '$competenze',
  '$frequenza',
  '$emergenze',
  '$referente',
  '$membro',
  '$mensa',
  '$guardaroba',
  '$tesseramento',
  '$varie',
  '$saputo',
  '$ascolto',
  '$status',
  
  '$lung',
  '$marg',
  '$merg',
  '$giog',
  '$veng',
  '$domg',
  
  '$lunt',
  '$mart',
  '$mert',
  '$giot',
  '$vent',
  '$domt',
  
  '$luna',
  '$mara',
  '$mera',
  '$gioa',
  '$vena',
  '$doma',
   
  '$luns',
  '$mars',
  '$mers',
  '$gios',
  '$vens',
  '$doms',
  
  '$lunv',
  '$marv',
  '$merv',
  '$giov',
  '$venv',
  '$domv',
  
  '$frequenzag',
  '$emergenzeg',
  '$referenteg',
  '$membrog',
  
  '$frequenzat',
  '$emergenzet',
  '$referentet',
  '$membrot',
  
  '$frequenzaa',
  '$emergenzea',
  '$referentea',
  '$membroa',
  
  '$frequenzas',
  '$emergenzes',
  '$referentes',
  '$membros',
  
  '$frequenzav',
  '$emergenzev',
  '$referentev',
  '$membrov',
  
  '$sorveglianza',
  '$semaforo',
  '$libero'
   )
    ";
#echo $sql; exit;
    if ($conn->query($sql) === TRUE)
        { } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 
       $totaleordine1= $totaleordine1+$totaleriga;   
    }















$sql1 = "SELECT * FROM socivolontari  where tessera = '$tessera' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ 
      $tessera = $macrogruppo["tessera"];	
      $cognome = $macrogruppo["cognome"];
      #echo " nome ".$nome;
      $nome = $macrogruppo["nome"];
      $datanascita = $macrogruppo["data_nascita"];
      $data_iscrizione = $macrogruppo["data_iscrizione"];
      #echo "data".$data_iscrizione;
     
      
      $resvia = $macrogruppo["indirizzo"];
      $rescitta = $macrogruppo["localita_residenza"];
      
      $cap = $macrogruppo["cap"];
      $telefono = $macrogruppo["telefono"];
      $email = $macrogruppo["email"];
     
      $data_iscrizione = $macrogruppo["data_iscrizione"];
     
      $sesso = $macrogruppo["sesso"];
      $lun = $macrogruppo["lun"];
      $mar = $macrogruppo["mar"];
      $mer = $macrogruppo["mer"];
      $gio= $macrogruppo["gio"];
      $ven = $macrogruppo["ven"];
      $dom = $macrogruppo["dom"];
      $professione = $macrogruppo["professione"];
      $semaforo = $macrogruppo["semaforo"];
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
      $status = $macrogruppo["status"];
      
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
      $libero = $macrogruppo["libero"];
     }} 

$oggi=date("Y-m-d");
#header('Content-Type: text/html; charset=utf-8'); 
?>

<html>
<head>

	<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
	<title>Modifica volontario</title>


<style>
div#container {
min-width:   1280px;
  min-height:  500px;
  max-width:  600px;
  max-height: 1000px;
}
div#containerx {
min-width:   760px;
  min-height:  20px;
  max-width:  600px;
  max-height: 20px;
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
border-spacing: 5px;
background: #ECE9E0;
color: #656665;
border: 16px solid #FF9900;
border-radius: 20px;
}
.table7 th {
font-size: 18px;
padding: 10px;
}
.table7 td {
background: #FFD393;
padding: 5px;
}
.table8 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
background: #ECE9E0;
color: #656665;
border: 16px solid #006600;
border-radius: 20px;
}
.table8 th {
font-size: 18px;
padding: 10px;
}
.table8 td {
background: #97FF97;
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
input{ /* Stili per il campo di testo e per la textarea */
    background: #1C1C1C; /* Colore di sfondo */
    border: 0px solid #323232; /* Bordo */
    color: #000000; /* Colore del testo */
    height: 20px; /* Altezza */
    line-height: 20px; /* Altezza di riga */
    font-weight: bold;
    padding: 0 10px; /* Padding */
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
</style>
</head>
<body>
<div align="center" >
	<table border="0" width="760" height="140" bgcolor="#ffffff"  >
		<tr > 
			<td width="200" height="90" style="border-radius: 20px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"">
      <div align="center">
			<img border="0" src="carlopoma.png" width="200" height="90"> <br>
      </div> 
      </td>
      </tr>
      </table>
      <br>
      <br>

<div id="containerx">
<table align="left">  
<tr> 
<td >
<a href="javascript:close_window();"><b><font face="Arial" size="4" color="#cc0000">EXIT</font></b></a> 
</td>
</tr>
</table>
</div>
      
</div> 
<div align="center">   
<div id="container">
<form method="POST" action="" name="modulo" onSubmit="return controllo();"> 
<p align="center"><b><font face="Arial" size="5" color="#993300">MODIFICA SCHEDA VOLONTARIO</font></b></p>
<table  width="100%" bgcolor="#FFF4F7" class="table6">
	<tr>
		<td>
		<table border="1" width="100%">
     <tr>
				<td colspan="6"><font face="Arial" size="1" color="#000000">- DATA SKEDA:</font></td>
    
        </tr>  
			<tr>
      <td colspan="6"><p><input type="text" name="datask" value="<?php echo $data_iscrizione; ?>"  size="10"  style="background-color: #ececee"></p></td>
		  </tr>
      <tr>
				<td colspan="3" style="background-color: #B2CAEA"><font face="Arial" size="2" color="#ffffff" style="background-color: #B2CAEA"><b>- STATUS:</b></font></td>
       <td colspan="3" style="background-color: #B2CAEA"><select size="1" name="status"  style="background-color: #ececee; color: red">
					<option <? if($status=="ATTIVO"){echo "selected";}?>>ATTIVO</option>
          <option <? if($status=="LISTA DI ATTESA"){echo "selected";}?>>LISTA DI ATTESA</option>         
          <option <? if($status=="RISERVA"){echo "selected";}?>>RISERVA</option>
          <option <? if($status=="RITIRATO"){echo "selected";}?>>RITIRATO</option>
					</select></td> 
        </tr> 
     
      
			<tr> 
				<td colspan="3" ><font face="Arial" size="1" color="#000000" >- COGNOME:</font></td>
        <td colspan="3" ><font face="Arial" size="1" color="#000000" >- NOME:</font></td>  
        </tr>
        <tr>
				<td colspan="3" ><p><input type="text" name="cognome" value="<?php echo $cognome; ?>" size="60" style="background-color: #ececee"></p></td>				
				<td colspan="3"><p><input type="text" name="nome" value="<?php echo $nome; ?>" size="60" style="background-color: #ececee"></p></td>
			</tr>
      
      
			<tr>
		<td ><font face="Arial" size="1" color="#000000">- NATO/A IL:</font></td>
        <td colspan="1"><font face="Arial" size="1" color="#000000">- SESSO:</font></td>
        <td colspan="1"><font face="Arial" size="1" color="#000000">- LIBERATORIA:</font></td>
        <td colspan="3"><font face="Arial" size="1" color="#000000">- INDIRIZZO:</font></td>
        <tr>
		<td><p><input type="text" name="datanascita" value="<?php echo $datanascita; ?>" size="10" style="background-color: #ececee"></p></td>			
		
        <td colspan="1"><select size="1" name="sesso" style="background-color: #ececee">
		<option <? if($sesso=="M"){echo "selected";}?>>M</option>
		<option <? if($sesso=="F"){echo "selected";}?>>F</option>
		</select></td>
        
    	<td colspan="1"><select size="1" name="libero" style="background-color: #ececee">
		<option <? if($libero=="NO"){echo "selected";}?>>NO</option>
		<option <? if($libero=="SI"){echo "selected";}?>>SI</option>
		</select></td> 
                   
        <td colspan=3"><p><input type="text" name="resvia" value="<?php echo $resvia; ?>" size="50" style="background-color: #ececee"></p></td>			
				</tr>
        
      <tr>
				<td colspan="3"><font face="Arial" size="1" color="#000000">- CITTA':</font></td>
        <td colspan="1"><font face="Arial" size="1" color="#000000">- CAP:</font></td>
        <td colspan="2"><font face="Arial" size="1" color="#000000">- TELEFONO:</font></td>
        </tr>  
			<tr>
      <td colspan="3"><p><input type="text" name="rescitta" value="<?php echo $rescitta; ?>"  size="60"  style="background-color: #ececee"></p></td>
		  <td colspan="1"><p><input type="text" name="cap" value="<?php echo $cap; ?>"  size="10"  style="background-color: #ececee"></p></td>	  
      <td colspan="2"><p><input type="text" name="telefono" value="<?php echo $telefono; ?>" size="20" style="background-color: #ececee"></p></td>	
			</tr>
      
     <tr>
				<td colspan="3"><font face="Arial" size="1" color="#000000">- EMAIL:</font></td>
        <td colspan="3"><font face="Arial" size="1" color="#000000">- PROFESSIONE:</font></td>
        </tr>  
			<tr>
      <td colspan="3"><p><input type="text" name="email" value="<?php echo $email; ?>"  size="60"  style="background-color: #ececee"></p></td>
		  <td colspan="3"><p><input type="text" name="professione" value="<?php echo $professione; ?>" size="30" style="background-color: #ececee"></p></td>	
			</tr>  
     
        <tr>
				<td colspan="3"><font face="Arial" size="1" color="#000000">- COMPETENZE:</font></td>
                <td colspan="3"><font face="Arial" size="1" color="#000000">- SEMAFORO:</font></td>
        </tr>  
			<tr>
      <td colspan="3"><p><input type="text" name="competenze" value="<?php echo $competenze; ?>"  size="60"  style="background-color: #ececee"></p></td>
	  <td colspan="3"><p style="text-align: justify;"><select size="1" name="semaforo" style="background-color: #ececee">
					<option <? if($semaforo=="giallo"){echo "selected";}?>>giallo</option>
					<option <? if($semaforo=="verde"){echo "selected";}?>>verde</option>
					</select>
 <? if($semaforo=="giallo"){echo '<img border="0" src="giallo.png" width="22" height="22"  style="vertical-align:middle;" >';}
    else                   
    {echo '<img border="0" src="verde.png" width="22" height="22" style="vertical-align:middle;" >';} 
?>                   
                  </p>  </td>	  
      </tr>  
      
      <tr>
				<td colspan="5"><font face="Arial" size="1" color="#000000">- SERVIZIO ASSEGNATO:</font></td>
 <!--       <td colspan="3"><font face="Arial" size="1" color="#000000">- GIORNO:</font></td> -->
        </tr> 
         
			<tr>
      <td colspan="1"><p><input type="checkbox" name="mensa" value="1" <? if($mensa==1){echo "checked";} ?>><b> Mensa</b><br></p></td>	      
			<td colspan="1"><p><input type="checkbox" name="membro" value="1" <? if($membro==1){echo "checked";} ?>> Membro ordinario<br></p></td>	
      <td colspan="1"><p><input type="checkbox" name="referente" value="1" <? if($referente==1){echo "checked";} ?>> Referente<br></p></td>	
      <td colspan="1"><p><input type="checkbox" name="emergenze" value="1" <? if($emergenze==1){echo "checked";} ?>> Emergenze<br></p></td>	
			<td colspan="1"><p><input type="checkbox" name="frequenza" value="1" <? if($frequenza==1){echo "checked";} ?>> Frequenza regolare<br></p></td>				
      <td><p><input type="checkbox" name="lun" value="1" <? if($lun==1){echo "checked";} ?>> Lun |
      <input type="checkbox" name="mar" value="1" <? if($mar==1){echo "checked";} ?>> Mar |
      <input type="checkbox" name="mer" value="1" <? if($mer==1){echo "checked";} ?>> Mer |
      <input type="checkbox" name="gio" value="1" <? if($gio==1){echo "checked";} ?>> Gio |
      <input type="checkbox" name="ven" value="1" <? if($ven==1){echo "checked";} ?> > Ven |
      <input type="checkbox" name="dom" value="1" <? if($dom==1){echo "checked";} ?> > Dom |
      </p>
      </td>			
      </tr>
       
      <tr>
      <td colspan="1"><p><input type="checkbox" name="guardaroba" value="1" <? if($guardaroba==1){echo "checked";} ?>><b> Guardaroba</b><br></p></td>					
      <td colspan="1"><p><input type="checkbox" name="membrog" value="1" <? if($membrog==1){echo "checked";} ?>> Membro ordinario<br></p></td>	
      <td colspan="1"><p><input type="checkbox" name="referenteg" value="1" <? if($referenteg==1){echo "checked";} ?>> Referente<br></p></td>	
      <td colspan="1"><p><input type="checkbox" name="emergenzeg" value="1" <? if($emergenzeg==1){echo "checked";} ?>> Emergenze<br></p></td>	
			<td colspan="1"><p><input type="checkbox" name="frequenzag" value="1" <? if($frequenzag==1){echo "checked";} ?>> Frequenza regolare<br></p></td>				
      <td>
      <p><input type="checkbox" name="lung" value="1" <? if($lung==1){echo "checked";} ?>> Lun |
      <input type="checkbox" name="marg" value="1" <? if($marg==1){echo "checked";} ?>> Mar |
      <input type="checkbox" name="merg" value="1" <? if($merg==1){echo "checked";} ?>> Mer |
      <input type="checkbox" name="giog" value="1" <? if($giog==1){echo "checked";} ?>> Gio |
      <input type="checkbox" name="veng" value="1" <? if($veng==1){echo "checked";} ?> > Ven |
      <input type="checkbox" name="domg" value="1" <? if($domg==1){echo "checked";} ?> > Dom |
      </p>
      </td>			
      </tr> 
      
      <tr>
      <td colspan="1"><p><input type="checkbox" name="tesseramento" value="1" <? if($tesseramento==1){echo "checked";} ?>><b> Registrazione</b><br></p></td>	
			<td colspan="1"><p><input type="checkbox" name="membrot" value="1" <? if($membrot==1){echo "checked";} ?>> Membro ordinario<br></p></td>	
      <td colspan="1"><p><input type="checkbox" name="referentet" value="1" <? if($referentet==1){echo "checked";} ?>> Referente<br></p></td>	
      <td colspan="1"><p><input type="checkbox" name="emergenzet" value="1" <? if($emergenzet==1){echo "checked";} ?>> Emergenze<br></p></td>	
			<td colspan="1"><p><input type="checkbox" name="frequenzat" value="1" <? if($frequenzat==1){echo "checked";} ?>> Frequenza regolare<br></p></td>				
      <td>
      <p><input type="checkbox" name="lunt" value="1" <? if($lunt==1){echo "checked";} ?>> Lun |
      <input type="checkbox" name="mart" value="1" <? if($mart==1){echo "checked";} ?>> Mar |
      <input type="checkbox" name="mert" value="1" <? if($mert==1){echo "checked";} ?>> Mer |
      <input type="checkbox" name="giot" value="1" <? if($giot==1){echo "checked";} ?>> Gio |
      <input type="checkbox" name="vent" value="1" <? if($vent==1){echo "checked";} ?> > Ven |
      <input type="checkbox" name="domt" value="1" <? if($domt==1){echo "checked";} ?> > Dom |
      </p>
      </td>			
      </tr> 
      
      <tr>
      <td colspan="1"><p><input type="checkbox" name="ascolto" value="1" <? if($ascolto==1){echo "checked";} ?>><b> Ascolto</b><br></p></td>	
			<td colspan="1"><p><input type="checkbox" name="membroa" value="1" <? if($membroa==1){echo "checked";} ?>> Membro ordinario<br></p></td>	
      <td colspan="1"><p><input type="checkbox" name="referentea" value="1" <? if($referentea==1){echo "checked";} ?>> Referente<br></p></td>	
      <td colspan="1"><p><input type="checkbox" name="emergenzea" value="1" <? if($emergenzea==1){echo "checked";} ?>> Emergenze<br></p></td>	
			<td colspan="1"><p><input type="checkbox" name="frequenzaa" value="1" <? if($frequenzaa==1){echo "checked";} ?>> Frequenza regolare<br></p></td>				
      <td>
      <p><input type="checkbox" name="luna" value="1" <? if($luna==1){echo "checked";} ?>> Lun |
      <input type="checkbox" name="mara" value="1" <? if($mara==1){echo "checked";} ?>> Mar |
      <input type="checkbox" name="mera" value="1" <? if($mera==1){echo "checked";} ?>> Mer |
      <input type="checkbox" name="gioa" value="1" <? if($gioa==1){echo "checked";} ?>> Gio |
      <input type="checkbox" name="vena" value="1" <? if($vena==1){echo "checked";} ?> > Ven |
      <input type="checkbox" name="doma" value="1" <? if($doma==1){echo "checked";} ?> > Dom |
      </p>
      </td>			
      </tr> 
      
      <tr>
      <td colspan="1"><p><input type="checkbox" name="sorveglianza" value="1" <? if($sorveglianza==1){echo "checked";} ?>><b> Sorveglianza</b><br></p></td>	
			<td colspan="1"><p><input type="checkbox" name="membros" value="1" <? if($membros==1){echo "checked";} ?>> Membro ordinario<br></p></td>	
      <td colspan="1"><p><input type="checkbox" name="referentes" value="1" <? if($referentes==1){echo "checked";} ?>> Referente<br></p></td>	
      <td colspan="1"><p><input type="checkbox" name="emergenzes" value="1" <? if($emergenzes==1){echo "checked";} ?>> Emergenze<br></p></td>	
			<td colspan="1"><p><input type="checkbox" name="frequenzas" value="1" <? if($frequenzas==1){echo "checked";} ?>> Frequenza regolare<br></p></td>				
      <td>
      <p><input type="checkbox" name="luns" value="1" <? if($luns==1){echo "checked";} ?>> Lun |
      <input type="checkbox" name="mars" value="1" <? if($mars==1){echo "checked";} ?>> Mar |
      <input type="checkbox" name="mers" value="1" <? if($mers==1){echo "checked";} ?>> Mer |
      <input type="checkbox" name="gios" value="1" <? if($gios==1){echo "checked";} ?>> Gio |
      <input type="checkbox" name="vens" value="1" <? if($vens==1){echo "checked";} ?> > Ven |
      <input type="checkbox" name="doms" value="1" <? if($doms==1){echo "checked";} ?> > Dom |
      </p>
      </td>			
      </tr> 
      
      <tr>
      <td colspan="1"><p><input type="checkbox" name="varie" value="1" <? if($varie==1){echo "checked";} ?>><b> Ambulatorio</b><br></p></td>	
      <td colspan="1"><p><input type="checkbox" name="membrov" value="1" <? if($membrov==1){echo "checked";} ?>> Membro ordinario<br></p></td>	
      <td colspan="1"><p><input type="checkbox" name="referentev" value="1" <? if($referentev==1){echo "checked";} ?>> Referente<br></p></td>	
      <td colspan="1"><p><input type="checkbox" name="emergenzev" value="1" <? if($emergenzev==1){echo "checked";} ?>> Emergenze<br></p></td>	
			<td colspan="1"><p><input type="checkbox" name="frequenzav" value="1" <? if($frequenzav==1){echo "checked";} ?>> Frequenza regolare<br></p></td>				
      <td>
      <p><input type="checkbox" name="lunv" value="1" <? if($lunv==1){echo "checked";} ?>> Lun |
      <input type="checkbox" name="marv" value="1" <? if($marv==1){echo "checked";} ?>> Mar |
      <input type="checkbox" name="merv" value="1" <? if($merv==1){echo "checked";} ?>> Mer |
      <input type="checkbox" name="giov" value="1" <? if($giov==1){echo "checked";} ?>> Gio |
      <input type="checkbox" name="venv" value="1" <? if($venv==1){echo "checked";} ?> > Ven |
      <input type="checkbox" name="domv" value="1" <? if($domv==1){echo "checked";} ?> > Dom |
      </p>
      </td>			
      </tr> 
      
        
      
				<td colspan="6"><font face="Arial" size="1" color="#000000">- COME SAPUTO DI NOI:</font></td>
        
        </tr>  
			<tr>
      <td colspan="6"><p><input type="text" name="saputo" value="<?php echo $saputo; ?>"  size="120"  style="background-color: #ececee"></p></td>
		  </tr>  
      <input type="hidden" name="ingranaggio" value="1" />
       <input type="hidden" name="login" value="<?php echo $login; ?>" />
       
			<tr>
				
				<td colspan="6" align="center"><input type="submit" value="Modifica" name="B3"></td>
			</tr> 
     
		</table>
		</td>
	</tr>
</table>
<p>&nbsp;</p>
</form>
</div>
</div>
<script type="text/javascript" src="../nicEdit.js"></script>
<script type="text/javascript">
	   bkLib.onDomLoaded(function() {
          var myNicEditor = new nicEditor();
          myNicEditor.setPanel('myNicPanel');
          myNicEditor.addInstance('testo');
          myNicEditor.addInstance('testo1');
          myNicEditor.addInstance('testo2');
          myNicEditor.addInstance('testo3');
          myNicEditor.addInstance('testo4');
          myNicEditor.addInstance('testo5');
          myNicEditor.addInstance('testo6');
          myNicEditor.addInstance('testo7');
          myNicEditor.addInstance('testo8');
          myNicEditor.addInstance('testo9');
          myNicEditor.addInstance('testo10');
          myNicEditor.addInstance('testo11');
          myNicEditor.addInstance('testo12');
          myNicEditor.addInstance('testo13');
          myNicEditor.addInstance('testo14');
          myNicEditor.addInstance('testo15');
          myNicEditor.addInstance('testo16');
          myNicEditor.addInstance('testo17');
          myNicEditor.addInstance('testo18');
          myNicEditor.addInstance('testo19');
          myNicEditor.addInstance('testo20');
          myNicEditor.addInstance('testo21');
          myNicEditor.addInstance('testo22');
          myNicEditor.addInstance('testo23');
          myNicEditor.addInstance('testo24');
          myNicEditor.addInstance('testo25');
          myNicEditor.addInstance('testo26');
          myNicEditor.addInstance('testo27');
          myNicEditor.addInstance('testo28');
          myNicEditor.addInstance('testo29');
          myNicEditor.addInstance('testo30');
          myNicEditor.addInstance('testo31');
          myNicEditor.addInstance('testo32');
          myNicEditor.addInstance('testo33');
          myNicEditor.addInstance('testo34');
          myNicEditor.addInstance('testo34');
          myNicEditor.addInstance('testo35');
          myNicEditor.addInstance('testo36');
          myNicEditor.addInstance('testo37');
          myNicEditor.addInstance('testo38');
          myNicEditor.addInstance('testo39');
          myNicEditor.addInstance('testo40');
                    
          myNicEditor.addInstance('myInstance2');
          myNicEditor.addInstance('myInstance3');
     });
</script>
<p align="center"><b><font face="Arial" size="5" color="#993300">NOTE VOLONTARIO </font></b></p><div align="center">   
<div id="container">

<table  width="100%" bgcolor="#FFF4F7" class="table6">

<?
$somma=0;
$sql = "SELECT *  FROM  intervistavolontari where  tessera = '$tessera' order by datasel  ";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
      $vol1 = $macrogruppo["volontario1"];
      $vol2 = $macrogruppo["volontario2"]; 
      $vol3 = $macrogruppo["volontario3"];
      $vol4 = $macrogruppo["volontario4"];
      $testomem = $macrogruppo["testo"];
      $datamem = $macrogruppo["data"];
      $prg = $macrogruppo["prg"];
      $mittente = $macrogruppo["mittente"];
?>
<tr>
<td><font size="2" face="Arial" ><b>DataNota </b></font>
             </font>   </td>
<td>
<form method="POST" action="" enctype="multipart/form-data"> 
<font size="3" face="Arial" color="#f61212"><b><? echo $datamem; ?> redatta da: <? echo " ".$mittente; ?></b></font>
             </font>  
</td>
</tr>

<tr>
<td><font size="2" face="Arial" >TOGLI</font>
             </font>
<input type="hidden" name="ingranaggio" value="8" />
         <input type="hidden" name="login" value="<? echo $login; ?>" />         
         <input type="hidden" name="prg" value="<? echo $prg; ?>" />
         
		<button type="submit"><img border="0" src="x.png" width="20" height="20"></button></font>             
             
</form>             
             
                </td>
 <td ><p>
 <? 
 {$lungo=820;}
 $somma++;
 $uno="testo".$somma;
 ?>
 <textarea id="<? echo $uno; ?>" rows="5" name="testo" style=" background-color: #ffffff; width: <? echo $lungo;?>; "><? echo $testomem;?></textarea>
</td>	            
</tr>

<? }} ?>
</table>
  












<p align="center"><b><font face="Arial" size="5" color="#993300">NUOVA NOTA </font></b></p><div align="center">   

 <form method="POST" action="" enctype="multipart/form-data">   
<table border="1" width="100%" bgcolor="#FFF4F7" class="table7">
<tr>
<td><font size="3" face="Arial" >Data Inserimento NOTA </font>
             </font>   </td>

<? $oggi=date("d/m/Y");?>
<td>
<input type="text" name="datainter" value="<?php echo $oggi; ?>" size="10" style="background-color: #ececee">


</td>
</tr>

 <tr >
    <td><font size="3" face="Arial" >Inserisci testo della NOTA <br>(max 20.000 caratteri)&nbsp;&nbsp;&nbsp; </font>
             </font>   </td>

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

?>
<!--<textarea style="font-size: 20px;" name="testo"  id="testo" rows="20" cols="60"><? echo $testo;?></textarea>   -->
<textarea id="testo" rows="16" name="testo" style=" background-color: #ffffff;  width: <? echo $lungo;?>;"></textarea>

    </td>
</tr>
<tr>     
         <input type="hidden" name="ingranaggio" value="2" />
         <input type="hidden" name="login" value="<? echo $login; ?>" />
         <input type="hidden" name="codvolontario" value="<? echo $codvolontario; ?>" />
         <input type="hidden" name="zona" value="<? echo $zona; ?>" />
         <input type="hidden" name="tessera" value="<? echo $tessera; ?>" />
				<td ><font size="3" face="Arial" color="#000000">- Memorizza  </font>
      
        </font></td>      
				<td colspan="4" align="center"><input type="submit" value="Memorizza" name="B3"></td>
        
			</tr>
   </table>
</form>   
</div>
</div>
</div>
</div>

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
function close_window() {
/*  if (confirm("Sei sicuro di volere chiudere la pagina?")) {    */
    close();
/*  }   */
}
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
<script type="text/javascript">
<!-- 
/*
Floating Menu script-  Roy Whittle (http://www.javascript-fx.com/)
Script featured on/available at http://www.dynamicdrive.com/
This notice must stay intact for use

Prelevato e illustrato su http://www.web-link.it
*/

//Enter "frombottom" or "fromtop"
var verticalpos="frombottom"

function JSFX_FloatTopDiv()
{
	var startX = 5,
	startY = 382;
	var ns = (navigator.appName.indexOf("Netscape") != -1);
	var d = document;
	function ml(id)
	{
		var el=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
		if(d.layers)el.style=el;
		el.sP=function(x,y){this.style.left=x;this.style.top=y;};
		el.x = startX;
		if (verticalpos=="fromtop")
		el.y = startY;
		else{
		el.y = ns ? pageYOffset + innerHeight : document.body.scrollTop + document.body.clientHeight;
		el.y -= startY;
		}
		return el;
	}
	window.stayTopLeft=function()
	{
		if (verticalpos=="fromtop"){
		var pY = ns ? pageYOffset : document.body.scrollTop;
		ftlObj.y += (pY + startY - ftlObj.y)/8;
		}
		else{
		var pY = ns ? pageYOffset + innerHeight : document.body.scrollTop + document.body.clientHeight;
		ftlObj.y += (pY - startY - ftlObj.y)/8;
		}
		ftlObj.sP(ftlObj.x, ftlObj.y);
		setTimeout("stayTopLeft()", 10);
	}
	ftlObj = ml("divStayTopLeft");
	stayTopLeft();
}
JSFX_FloatTopDiv();
// end  -->
</script>
</body>
</html>