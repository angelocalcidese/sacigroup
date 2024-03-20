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
$zona=$_REQUEST["zona"];
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 4</title>
</head>
<style>
div#container {
min-width:   900px;
  min-height:  500px;
  max-width:  600px;
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
    
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 350px;
  height: 265;
  background-color: #FFCC00;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  border: 13px solid #FFCC00;
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
input[type=submit] {
    padding:2px 20px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;  }   
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
<script type="text/javascript">
		
		function controllo(){ 
            with(document.modulo) { 
        if(importoass.value=="") { 
            alert("Error: manca IMPORTO ASSOCIATIVO"); 
            importoass.focus(); 
            return false; 
                            } 
					                                                            
                                                            
                                  } 
        } 
</script>
<?php 
$ingranaggio=$_REQUEST["ingranaggio"];
include "conf_DB.php";

if ($ingranaggio==1)
{
$volontario=$_REQUEST["volontario"];
#echo "vol".$volontario; exit;
$cognome=$_REQUEST["cognome"];
$cognome=str_replace("'", "\'", $cognome);
$cognome=strtoupper($cognome);


$nome=$_REQUEST["nome"];
$ome=str_replace("'", "\'", $nome);
$nome=strtoupper($nome);

$datanascita=$_REQUEST["datanascita"];
$provnatoa=$_REQUEST["provnatoa"];
$provnatoa=strtoupper($provnatoa);

$nazionalita=$_REQUEST["nazionalita"];
$nazionalita=str_replace("'", "\'", $nazionalita);
$nazionalita=strtoupper($nazionalita);

$sesso=$_REQUEST["sesso"];
$codfisc=$_REQUEST["codfisc"];
$codfisc=strtoupper($codfisc);

$cittadinanza=$_REQUEST["cittadinanza"];
$cittadinanza=str_replace("'", "\'", $cittadinanza);
$cittadinanza=strtoupper($cittadinanza);

$statocivile=$_REQUEST["statocivile"];

$situazionesc=$_REQUEST["situazionesc"];

$catpersonamem=$_REQUEST["catpersona"];
$comodo=explode(" - ",$catpersonamem);
$catpersonamem=$comodo[0];

$figlicarico=$_REQUEST["figlicarico"];
$soggiorno=$_REQUEST["soggiorno"];
$privacy=$_REQUEST["privacy"];
$isee=$_REQUEST["isee"];
$resvia=$_REQUEST["resvia"];
$resvia=str_replace("'", "\'", $resvia);
$resvia=strtoupper($resvia);


$rescap=$_REQUEST["rescap"];
$rescap=strtoupper($rescap);

$rescitta=$_REQUEST["rescitta"];
$rescitta=str_replace("'", "\'", $rescitta);
$rescitta=strtoupper($rescitta);

$domvia=$_REQUEST["domvia"];
$domvia=str_replace("'", "\'", $domvia);
$domvia=strtoupper($domvia);

$domcap=$_REQUEST["domcap"];
$domcap=strtoupper($domcap);

$domcitta=$_REQUEST["domcitta"];
$domcitta=str_replace("'", "\'", $domcitta);
$domcitta=strtoupper($domcitta);

$telefono=$_REQUEST["telefono"];
$email=$_REQUEST["email"];
$vive=$_REQUEST["vive"];
$vive=strtoupper($vive);
$fissadimora=$_REQUEST["fissadimora"];
$casapropria=$_REQUEST["casapropria"];
$affitto=$_REQUEST["affitto"];
$postoletto=$_REQUEST["postoletto"];
$linguait=$_REQUEST["linguait"];
$linguaaltra=$_REQUEST["linguaaltra"];
$patente=$_REQUEST["patente"];
$italiada=$_REQUEST["italiada"];
$parrocchia=$_REQUEST["parrocchia"];
$parrocchia=str_replace("'", "\'", $parrocchia);
$parrocchia=strtoupper($parrocchia);
$segnalatoda=$_REQUEST["segnalatoda"];
$segnalatoda=str_replace("'", "\'", $segnalatoda);
$segnalatoda=strtoupper($segnalatoda);
$titolostudio=$_REQUEST["titolostudio"];

$nome1=$_REQUEST["nome1"];
$nome1=str_replace("'", "\'", $nome1);
$nome1=strtoupper($nome1);
$data1=$_REQUEST["data1"];
$sesso1=$_REQUEST["sesso1"];
$grado1=$_REQUEST["grado1"];
$grado1=strtoupper($grado1);
$nome2=$_REQUEST["nome2"];
$nome2=str_replace("'", "\'", $nome2);
$nome2=strtoupper($nome2);
$data2=$_REQUEST["data2"];
$sesso2=$_REQUEST["sesso2"];
$grado2=$_REQUEST["grado2"];
$grado2=strtoupper($grado2);
$nome3=$_REQUEST["nome3"];
$nome3=str_replace("'", "\'", $nome3);
$nome3=strtoupper($nome3);
$data3=$_REQUEST["data3"];
$sesso3=$_REQUEST["sesso3"];
$grado3=$_REQUEST["grado3"];
$grado3=strtoupper($grado3);
$nome4=$_REQUEST["nome4"];
$nome4=str_replace("'", "\'", $nome4);
$nome4=strtoupper($nome4);
$data4=$_REQUEST["data4"];
$sesso4=$_REQUEST["sesso4"];
$grado4=$_REQUEST["grado4"];
$grado4=strtoupper($grado4);
$nome5=$_REQUEST["nome5"];
$nome5=str_replace("'", "\'", $nome5);
$nome5=strtoupper($nome5);
$data5=$_REQUEST["data5"];
$sesso5=$_REQUEST["sesso5"];
$grado5=$_REQUEST["grado5"];
$grado5=strtoupper($grado5);
$nome6=$_REQUEST["nome6"];
$nome6=str_replace("'", "\'", $nome6);
$nome6=strtoupper($nome6);
$data6=$_REQUEST["data6"];
$sesso6=$_REQUEST["sesso6"];
$grado6=$_REQUEST["grado6"];
$grado6=strtoupper($grado6);
$nome7=$_REQUEST["nome7"];
$nome7=str_replace("'", "\'", $nome7);
$nome7=strtoupper($nome7);
$data7=$_REQUEST["data7"];
$sesso7=$_REQUEST["sesso7"];
$grado7=$_REQUEST["grado7"];
$grado7=strtoupper($grado7);

$bisognomem=$_REQUEST["bisogno"];
$comodo=explode(" - ",$bisognomem);
$bisognomem=$comodo[0];

$bisognodici=$_REQUEST["bisognodici"];
$bisognodici=str_replace("'", "\'", $bisognodici);
$economicomem=$_REQUEST["economico"];
$comodo=explode(" - ",$economicomem);
$economicomem=$comodo[0];

$economicodici=$_REQUEST["economicodici"];
$economicodici=str_replace("'", "\'", $economicodici);
$lavoratori=$_REQUEST["lavoratori"];
$lavoratoridici=$_REQUEST["lavoratoridici"];
$lavoratoridici=str_replace("'", "\'", $lavoratoridici);
$esperienzaitalia=$_REQUEST["esperienzaitalia"];
$esperienzaitalia=str_replace("'", "\'", $esperienzaitalia);
$esperienzaestero=$_REQUEST["esperienzaestero"];
$esperienzaestero=str_replace("'", "\'", $esperienzaestero);
$referenze=$_REQUEST["referenze"];
$referenze=str_replace("'", "\'", $referenze);
$progetto=$_REQUEST["progetto"];
$progetto=str_replace("'", "\'", $progetto);

$noteaffitto=$_REQUEST["noteaffitto"];
$noteaffitto=str_replace("'", "\'", $noteaffitto);

$sesso=$_REQUEST["sesso"];
$lavoratoridici=$_REQUEST["lavoratoridici"];




$oggi=date("d/m/Y");

$errore=0;
$sql1 = "SELECT * FROM soci  where cognome = '$cognome' and nome = '$nome' and luogo_nascita = '$provnatoa' and data_nascita = '$datanascita'";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $errore=1;	 
			} }

 if ($errore==1)
    { ?>
 <div align="center">

<table border="1" width="40%">
	<tr>
		<td>
		<form method="POST" action="sksocio.php?login=<?php echo $login; ?>&zona=<?echo $zona;?>">		
			<p><b><font face="Arial" color="#FF0000">ASSISTITO GIA' PRESENTE IN DATA BASE</font></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" value="indietro" name="B1"></p>
		
		</td>
	</tr>
</table>
</div>
</form>
<?php   
    
    exit;}






$sql1 = "SELECT * FROM tessera  where progr = '1' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $tessera = $macrogruppo["tessera"];	 
			} }
$tessera++;
$sql = "UPDATE tessera set 
tessera = '$tessera'
where 
progr = '1' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 
    
 $sql = "insert into soci
 (
  zona,
  volontario,
  viadomicilio,
  capdomicilio,
  cittadomicilio,
  nazionalita,
  cittadinanza,
  statocivile1,
  statocivile2,
  figlicarico,
  soggiorno,
  privacy,
  isee,
  vive,
  casa,
  fissadimora,
  linguait,
  linguaaltro,
  affitto,
  postoletto,
  patente,
  italiada,
  parrocchia,
  segnalatoda,
  studio,
  
  tessera, 
  cognome, 
  nome, 
  data_nascita, 
  luogo_nascita,  
  indirizzo,
  localita_residenza,  
  cap, 
  telefono, 
  email, 
  codice_fiscale, 
  data_iscrizione, 
  login,
  
  par1,
  nascita1,
  sesso1,
  grado1,
  
  par2,
  nascita2,
  sesso2,
  grado2,
  
  par3,
  nascita3,
  sesso3,
  grado3,
  
  par4,
  nascita4,
  sesso4,
  grado4,
  
  par5,
  nascita5,
  sesso5,
  grado5,
  
  par6,
  nascita6,
  sesso6,
  grado6,
  
  par7,
  nascita7,
  sesso7,
  grado7,
  bisogno,
  bisognodici,
  lavoratori,
  esperienzait,
  esperienzaestero,
  referenze,
  progetto,
  economico,
  economicodici,
  catpersona,
  noteaffitto,
  sesso,
  lavoratoridici
     
 )
  values
 ( 
   '$zona',
   '$volontario',
   '$domvia',
   '$domcap',
   '$domcitta',
   '$nazionalita',
   '$cittadinanza',
   '$statocivile',
   '$situazionesc',
   '$figlicarico',
   '$soggiorno',
   '$privacy',
   '$isee',
   '$vive',
   '$casapropria',
   '$fissadimora',
   '$linguait',
   '$linguaaltra',
   '$affitto',
   '$postoletto',
   '$patente',
   '$italiada',
   '$parrocchia',
   '$segnalatoda',
   '$titolostudio',
   
   
   
   
   
  '$tessera',  
  '$cognome',  
  '$nome',  
  '$datanascita',  
  '$provnatoa', 
    
  '$resvia', 
   
  '$rescitta',  
  '$rescap', 
  '$telefono',  
  '$email',  
  '$codfisc', 
  '$oggi',  

  '$login',
  
  '$nome1',  
  '$data1',  
  '$sesso1', 
  '$grado1',
  
  '$nome2',  
  '$data2',  
  '$sesso2', 
  '$grado2',
  
  '$nome3',  
  '$data3',  
  '$sesso3', 
  '$grado3',
  
  '$nome4',  
  '$data4',  
  '$sesso4', 
  '$grado4',
  
  '$nome5',  
  '$data5',  
  '$sesso5', 
  '$grado5',
  
  '$nome6',  
  '$data6',  
  '$sesso6', 
  '$grado6',
  
  '$nome7',  
  '$data7',  
  '$sesso7', 
  '$grado7',
  
  '$bisognomem',
  '$bisognodici',
  '$lavoratori',
  '$esperienzaitalia',
  '$esperienzaestero',
  '$referenze',
  '$progetto',
  '$economicomem',
  '$economicodici',
  '$catpersonamem',
  '$noteaffitto',
  '$sesso',
  '$lavoratoridici'
   )
    ";
#echo $sql; exit;
    if ($conn->query($sql) === TRUE)
        { } 
        else { echo "Error inserted record: " . $conn->error; } 
       $totaleordine1= $totaleordine1+$totaleriga;   
    }

#exit;
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
      $nazionalita = $macrogruppo["nazionalita"];
			} }
?>
<body>

<div align="center" >
	
	    <div align="center" style="width: 60em;">
			<td style="border: 0px ; ">
			<img border="0" src="carlopoma.png" width="400" height="140"></td>
		  </div>
      <div align="left" style="width: 60em;">
      <hr align=”center” size=”1? width=”380? color=”blue” noshade>
      <table  style="width: 60em; border: 0px ; border-bottom: 0px;">
      <tr>
      <td bgcolor="#FFFFFF" style="border: 0px ; "><a href="menugenerale.php?login=<?php echo $login; ?>&zona=<? echo $zona; ?>">Menu Generale</a>/Inserimento Scheda Assistito</td>             
<?php
$sql1 = "SELECT * FROM utenti  where login = '$login'  and nazione = 'ITALIA' and citta = 'MILANO' and zona = '$zona'";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{$codvolontario = $macrogruppo["codvolontario"];
     $dio = $macrogruppo["dio"];
    } }
if($dio=="1"){$dicidio="amm.";}else{$dicidio="utente";}
$sql1 = "SELECT * FROM volontari  where codice = '$codvolontario'  and nazione = 'ITALIA' and citta = 'MILANO' and zona = '$zona'";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{$cognomevol = $macrogruppo["cognome"];
     $nomevol = $macrogruppo["nome"];
    } }
?>           
      <td bgcolor="#FFFFFF" align="right" style="border: 0px ; "><? echo $codvolontario." - ".$cognomevol." ".$nomevol." - ".$dicidio; ?></td>         
     </tr>
     </table>
     <table  style="width: 60em; border: 0px ; border-bottom: 0px;">
     <tr>
     <td bgcolor="#FFFFFF" align="center" style="border: 0px ; "><b><font face="Arial" size="3" color="#993300"><? echo $zona; ?></font></b></td>             
     </tr>
     </table>
      </div>
</div> 
<? if ($ingranaggio!=2) { ?>
<div align="center">   
<div id="container">

<p align="center"><b><font face="Arial" size="5" color="#993300">INSERIMENTO 
NUOVO ASSISTITO </font></b></p>
<p align="center"><b><font face="Arial" size="3" color="#993300">IDENTIFICATIVO ASSEGNATOGLI N. </font><font face="Arial" size="4" color="#ff0000"><?php echo $tessera; ?></font></b></p>
<table border="1" width="100%" bgcolor="#FFF4F7" class="table6">	<tr>	<tr>
		<td>
		<table border="1" width="100%">
			
      <tr>
				<td width="237"><font size="2" face="Arial" color="#000000">- COGNOME:</font></td>
				<td>				
					<p>
					<b><font size="3" face="Arial"><?php echo $cognome; ?></font></b></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font size="2" face="Arial" color="#000000">- NOME:</font></td>
				<td>				
					<b><font size="3" face="Arial"><?php echo $nome; ?></font></b>
				</td>
			</tr>
			<tr>
				<td width="237"><font size="2" face="Arial" color="#000000">- NATO/A A:</font></td>
				<td>				
					<b><font size="3" face="Arial"><?php echo $natoa; ?></font></b>
				</td>			
				</tr>  
			<tr>
				<td width="237"><font size="2" face="Arial" color="#000000">- IL:</font></td>
				<td>				
					<b><font size="3" face="Arial"><?php echo $datanascita; ?></font></b>
				</td>			
				</tr>
			<tr>
				<td width="237"><font size="2" face="Arial" color="#000000">- RESIDENTE A:</font></td>
				<td>				
					<b><font size="3" face="Arial"><?php echo $residentecitta; ?></font></b>
				</td>
			</tr>
      
			</tr>
			<tr>
				<td width="237"><font size="2" face="Arial" color="#000000">- VIA/PIAZZA:</font></td>
				<td>				
					<b><font size="3" face="Arial"><?php echo $indirizzores; ?></font></b>
				</td>
			</tr>
      <tr>
				<td width="237"><font size="2" face="Arial" color="#000000">- NAZIONALITA':</font></td>
				<td>				
					<b><font size="3" face="Arial"><?php echo $nazionalita; ?></font></b>
				</td>
			</tr>
			
			<tr>
				<td width="237"><font size="2" face="Arial" color="#000000">- CODICE FISCALE:</font></td>
				<td>				
					<b><font size="3" face="Arial"><?php echo $codfisc; ?></font></b>
				</td>
			</tr>
			
		</table>
		</td>
	</tr>
</table>
<?php } $anno=date("Y"); ?>

<? if($ingranaggio==2){
$tessera=$_REQUEST["tessera"];
$codvolentario=$_REQUEST["codvolontario"];
$volontario2=$_REQUEST["volontario2"];
#echo $volontario2;
$comodo=explode(" - ",$volontario2);
$volontario2=$comodo[0];
$volontario3=$_REQUEST["volontario3"];
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
    intervista (
    zona,
    tessera,
    data,
    volontario1,
    volontario2,
    volontario3,
    volontario4,
    testo,
    login

    ) VALUES (
     '$zona',
    '$tessera',
    '$oggi',
    '$codvolontario',
    '$volontario2',
    '$volontario3',
    '$volontario4',
    '$testo',
    '$login'  
    )";
#echo $sql;  exit;   
    if ($conn->query($sql) === FALSE) 
        {        
        echo "ERRORE SCRITTURA INTERVISTA";exit;
       } 
       else
       { } 




?>
<p align="center"><b><font face="Arial" size="5" color="#993300">INSERIMENTO 
PRIMA INTERVISTA AVVENUTA CON SUCCESSO</font></b></p>
<? } else {?>
<p align="center"><b><font face="Arial" size="5" color="#993300">INSERIMENTO 
PRIMA INTERVISTA </font></b></p><div align="center">   
<div id="container">
 <form method="POST" action="" enctype="multipart/form-data">   
<table border="1" width="100%" bgcolor="#FFF4F7" class="table6">
<tr>
<td><font size="3" face="Arial" >Data Intervista </font>
             </font>   </td>

<? $oggi=date("d/m/Y");?>
<td><font size="3" face="Arial" ><? echo $oggi; ?></font>
             </font>   </td>
</td>
</tr>
 <tr >
<tr>
<td><font size="3" face="Arial" >Volontario presente 2</font>
             </font>   </td>

<td ><select size="1" name="volontario2" style="background-color: #ececee"> 
<option >NO</option>         
  <?php
$sql = "SELECT * FROM volontari  where  nazione = 'ITALIA' and citta = 'MILANO' and zona = '$zona'";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
      $cognome = $macrogruppo["cognome"];
      $nome = $macrogruppo["nome"];
      $codice = $macrogruppo["codice"];  
      $volotario2=$codice." - ".$cognome." ".$nome;   
?>          
       		<option ><?php echo $volotario2; ?></option>          
<? }} ?>
      </td>
      </tr>
      <tr>
<td><font size="3" face="Arial" >Volontario presente 3</font>
             </font>   </td>      
<td ><select size="1" name="volontario3" style="background-color: #ececee">  
<option >NO</option>         
  <?php
$sql = "SELECT * FROM volontari  where  nazione = 'ITALIA' and citta = 'MILANO' and zona = '$zona'";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
      $cognome = $macrogruppo["cognome"];
      $nome = $macrogruppo["nome"];
      $codice = $macrogruppo["codice"];  
      $volotario3=$codice." - ".$cognome." ".$nome;   
?>          
       		<option ><?php echo $volotario3; ?></option>          
<? }} ?>
      </td>      
</tr>
 <tr >
    <td><font size="3" face="Arial" >Inserisci testo dell'inervista <br>(max 20.000 caratteri)&nbsp;&nbsp;&nbsp; </font>
             </font>   </td>
<script type="text/javascript" src="./nic/nicEdit.js"></script>
<script type="text/javascript">
	   bkLib.onDomLoaded(function() {
          var myNicEditor = new nicEditor();
          myNicEditor.setPanel('myNicPanel');
          myNicEditor.addInstance('testo');
          myNicEditor.addInstance('myInstance2');
          myNicEditor.addInstance('myInstance3');
     });
</script>
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
<tr>     <input type="hidden" name="ingranaggio" value="2" />
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
<? } ?>
</body>

</html>
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