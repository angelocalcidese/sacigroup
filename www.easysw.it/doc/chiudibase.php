<?php
include "conf_DB.php";
$dataarrivo=date("d/m/Y");
$oggi=date("d/m/Y");
$pass=$_REQUEST["dicipass"];
$passtes=$_REQUEST["dicitessera"];
$ingranaggio=$_REQUEST["ingranaggio"];
if ($ingranaggio==5 or $ingranaggio==6){ }else{
$ingranaggix=$_REQUEST["ingranaggix"];

if ($pass==00){$ingranaggio=0;} else {$pass = sprintf("%02d", $pass); }
if ($passtes==00){$ingranaggix=0;} else {$pass = sprintf("%02d", $pass); }


if ($ingranaggio==1){
// controllo che i pass e' stato distribuito
$ce=0;
$sql1 = "select * from pass where entrata = '' and uscita != '' and numeropass = '$pass' ";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ $ce=1;
      $numeropass = $macrogruppo["numeropass"];	
      $numeropass = sprintf("%02d", $numeropass); 
      $tessera = $macrogruppo["tessera"]; 
      $uscita = $macrogruppo["uscita"]; 
$sql = "SELECT *  FROM  soci where  tessera = '$tessera' " .
        "order by cognome";  
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
	
	{ 
      $tessera = $macrogruppo["tessera"];
      $cognome = $macrogruppo["cognome"];
      $nome = $macrogruppo["nome"];
      }} }}
// fine controllo
//
// memorizzo pass eseguito


$sql1 = "select * from storicopass where numeropass= '$pass' and entrata = '$oggi'  ";
#echo  $sql1;
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ $ce=2;}}
#echo $ce." ".$gia;

if($ce==1){

$sql = "insert into storicopass
 (
  numeropass,  
  entrata, 
  uscita, 
  tessera
 )
  values
 ( 
  '$pass',
  '$oggi',  
  '$uscita',  
  '$tessera' 
   )
    ";
#echo $sql; exit;
    if ($conn->query($sql) === TRUE)
        { } 
        else { echo "Error scrivi storicopass: " . $conn->error; }  

$sql = "UPDATE pass set 
uscita = '',
tessera = '0'
where 
numeropass = '$pass' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; }  
$sql = "UPDATE soci set 
assegnato = '0'
where 
tessera = '$tessera'              
";
#echo $sql;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; }          
}

}



#echo "inx ".$ingranaggix; 

if ($ingranaggix==1){
$pass=$passtes;

$ce=0;
$sql = "SELECT *  FROM  soci where  tesseraold = '$pass' " ;  
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
	
	{ 
      $tessera = $macrogruppo["tessera"];
      $cognome = $macrogruppo["cognome"];
      $nome = $macrogruppo["nome"];
      $ce=1;
$gia=0;
$sql1 = "select * from storicotessera where numerotessera = '$pass' and entrata = '$oggi'    ";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ $ingranaggix=1;
      $numeropass = $macrogruppo["numerotessera"];	
      $numeropass = sprintf("%03d", $numeropass); 
      $gia=1;
 }}
if($gia==0){

$sql = "insert into storicotessera
 (
  numerotessera,  
  entrata, 
  tessera
 )
  values
 ( 
  '$pass',
  '$oggi',  
  '$tessera' 
   )
    ";
#echo $sql; exit;
    if ($conn->query($sql) === TRUE)
        { } 
        else { echo "Error inserted recordx: " . $conn->error; }  }
           
}  }  }

}
?>
<html>
  <head>
  <title>leggi tessera in gresso in mensa</title>
<!-- META SPECIFICI PER DISPOSITIVI MOBILI -->
  <meta name="HandheldFriendly" content="true" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
  
  <!-- ICONE ANDROID -->
  <link rel="icon" sizes="192x192" href="/icona-android-hires.png" />
  <link rel="icon" sizes="128x128" href="/icona-android.png" />

  <!-- ICONE IOS -->
  <link rel="apple-touch-icon" size="57x57" href="/icona_57x57.png" />
  <link rel="apple-touch-icon" size="72x72" href="/icona_72x72.png" />
  <link rel="apple-touch-icon" size="76x76" href="/icona_76x76.png" />
  <link rel="apple-touch-icon" size="114x114" href="/icona_114x114.png" />
  <link rel="apple-touch-icon" size="120x120" href="/icona_120x120.png" />
  <link rel="apple-touch-icon" size="144x144" href="/icona_144x144.png" />
  <link rel="apple-touch-icon" size="152x152" href="/icona_152x152.png" />

  <!-- CSS -->
  <link rel="stylesheet" href="tes/foglio-di-stile2.css" type="text/css" />
  
  <!-- JQUERY -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>   

  <!-- NOSTRI SCRIPT -->
  <script src="tes/clientscript.js"></script>  
<style>
h1 {
  text-shadow: 2px 2px 4px #999999;
  filter:DropShadow(Color=#000000, OffX=2, OffY=2);
} 
h1 {
  text-shadow: 2px 2px 4px #999999;
  filter:DropShadow(Color=#000000, OffX=2, OffY=2);
} 
</style>
  </head>
  <BODY >

<div align="center">     
  <div id="header">
  
<div align="center" >
	<table border="0" width="300" height="50" bgcolor="#ffffff"  >
		<tr > 
			<td style="border-radius: 20px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"">
      <div align="center">
			<img border="0" src="carlopoma.png" width="120" height="50"> <br>
      </div>
      </td>
      </tr>
   <tr> 

	
</tr>     
	</table>       
</div>   
  
  </div>  
</div>   
 <br><br>
  <br>
  
<div align="center">
<p align="center">
<b><font face="Arial" size="3" color="#993300">OGGI <? echo $oggi; ?></font></b><br>
<b><font face="Arial" size="3" color="#993300">REGISTRATI ALLA MENSA</font></b>
<table border="1"  bgcolor="#FFF4F7"  >	<tr>

	<tr>
				<td bgcolor="#0db31c" align="center"><font face="Arial" size="1" color="#ffffff" >PRG</font></td>
        <td bgcolor="#0db31c" align="center"><font face="Arial" size="1" color="#ffffff" >TIPO</font></td>
        <td bgcolor="#0db31c" align="center"><font face="Arial" size="1" color="#ffffff" >NUM.</font></td>
        <td bgcolor="#0db31c" align="center"><font face="Arial" size="1" color="#ffffff" >COGNOME</font></td>
        <td bgcolor="#0db31c" align="center"><font face="Arial" size="1" color="#ffffff" >NOME</font></td>
        <td bgcolor="#0db31c" align="center"><font face="Arial" size="1" color="#ffffff" >X</font></td>
			</tr> 
<?php
$conta=0;
$sql1 = "select * from storicopass where  entrata = '$dataarrivo'  order by numeropass";
#echo $sql1; exit;
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ 
      $numeropass = $macrogruppo["numeropass"];
      $tessera = $macrogruppo["tessera"];
      $entrata= $macrogruppo["entrata"];
      $uscita= $macrogruppo["uscita"];
      $conta++;
      $sw=0;
$sql1xx = "select * from storicopassx where entrata = '$dataarrivo' and tessera = '$tessera'   ";
#echo  $sql1xx;
$result1xx = $conn->query($sql1xx);
if ($result1xx->num_rows > 0) {
  while($macrogruppoxx = $result1xx->fetch_assoc())
		{$sw=1; } }     
      
$sql1x = "select * from soci where tessera = '$tessera'   order by cognome";
$result1x = $conn->query($sql1x);
if ($result1x->num_rows > 0) {
  while($macrogruppox = $result1x->fetch_assoc())
		{ 
      $cognomemx = $macrogruppox["cognome"];
      $nomemx = $macrogruppox["nome"];
      $tesserax = $macrogruppox["tessera"];	
      $data_nascitax = $macrogruppox["data_nascita"];	
      $nazionalitax = $macrogruppox["nazionalita"];	
      $telefonox = $macrogruppox["telefono"];
      $data_iscrizione = $macrogruppox["data_iscrizione"];
      $sesso = $macrogruppox["sesso"];   
      $numeropassx = sprintf("%02d", $numeropass);   
?>		      
<tr> 
<form method="POST" action="chiudipasstess.php?numeropass=<? echo $numeropassx; ?>&ingranaggio=5&socio=<? echo $tesserax; ?>" name="modulo" ">
    <td align="center"><font face="Arial" size="1" color="#000000"><? echo $conta; ?></font></td> 
    <td align="center"><font face="Arial" size="1" color="#3b3fe1">PASS</font></td> 
    <td align="center"><font face="Arial" size="1" color="#cc0000"><font color="red"><? echo $numeropassx; ?></font></font></td>
        <td ><font face="Arial" size="1" color="#000000"><? echo $cognomemx; ?></font></td>
        <td ><font face="Arial" size="1" color="#000000"><? echo $nomemx; ?></font></td>  
        
        <td ><input  type="image" src="x.png"  width="20" height="20" name="B90"></td>
        </form>
      </tr>   
<? }}}} ?>      
 
<?php

$sql1 = "select * from storicotessera where  entrata = '$dataarrivo'  order by numerotessera";
#echo $sql1;
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ 
      $numeropass = $macrogruppo["numerotessera"];
      $tessera = $macrogruppo["tessera"];
      $entrata= $macrogruppo["entrata"];
      $conta++;
         
$sql1x = "select * from soci where tessera = '$tessera'   order by cognome";
#echo $sql1x;  exit;
$result1x = $conn->query($sql1x);
if ($result1x->num_rows > 0) {
  while($macrogruppox = $result1x->fetch_assoc())
		{ 
      $cognomemx = $macrogruppox["cognome"];
      $nomemx = $macrogruppox["nome"];
      $tesserax = $macrogruppox["tessera"];	
      $data_nascitax = $macrogruppox["data_nascita"];	
      $nazionalitax = $macrogruppox["nazionalita"];	
      $telefonox = $macrogruppox["telefono"];
      $data_iscrizione = $macrogruppox["data_iscrizione"];
      $sesso = $macrogruppox["sesso"];   
      $numeropassx = sprintf("%03d", $numeropass);   
?>		      
<tr> 
    <form method="POST" action="chiudipasstess.php?numerotessera=<? echo $numeropass; ?>&ingranaggio=6&socio=<? echo $tesserax; ?>" name="moduloerr" ">
    <td align="center"><font face="Arial" size="1" color="#000000"><? echo $conta; ?></font></td> 
    <td align="center"><font face="Arial" size="1" color="#9d620e"><b>TESS</b></font></td> 
    <td align="center"><font face="Arial" size="1" color="#000000"><font color="red"><? echo $numeropassx; ?></font></font></td>
        <td ><font face="Arial" size="1" color="#000000"><? echo $cognomemx; ?></font></td>
        <td ><font face="Arial" size="1" color="#000000"><? echo $nomemx; ?></font></td>
        <td ><input  type="image" src="x.png"  width="20" height="20" name="B91xx"></td>
        </form>
      </tr>   
<? }}}} 
?>

  </body>
</html>