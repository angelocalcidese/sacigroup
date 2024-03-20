<?php
$pass=$_REQUEST["dicipass"];
$pass = sprintf("%02d", $pass); 
$ingranaggio=$_REQUEST["ingranaggio"];
$dataarrivo=date("d/m/Y");
if ($pass==00){$ingranaggio=0;}
include "conf_DB.php";
$oggi=date("d/m/Y");
if ($ingranaggio==1){
// controllo che i pass e' stato distribuito
$ce=0;
$sql1 = "select * from pass where entrata = '' and uscita != ''  ";
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
  <link rel="stylesheet" href="tes/foglio-di-stile1.css" type="text/css" />
  
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
  <BODY bgcolor="#fcece9">

<div align="center">     
  <div id="header">
  
<div align="center" >
	<table border="0" width="300" height="20" bgcolor="#ffffff"  >
		<tr style="border-radius: 20px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);""> 
			<td >
      <div align="right">
			<img border="0" src="carlopoma.png" width="60" height="25">
      </div>
      </td>
      		<td >
      <div align="left">
			
      <font face="Verdana" size="5" color="#CC0000"<h1><b>PASS</b></h1></font>
      </div>
      </td>
      </tr>
   <tr> 

	
</tr>     
	</table>       
</div>   
  
  </div>  
</div>   

 <br>
  <? if($ingranaggio==0) { ?>
<div class="inner">	
<form method="POST" action="" name="modulo" >	
<p align="center"><font face="Verdana" size="4" color="#CC0000">INGRESSO IN MENSA<br></font></b></h1>
<font face="Verdana" size="4" color="#CC0000">DIGITA NUMERO PASS<br></font></b></h1><br>
<input type="text" name="dicipass"  size="1" style="background-color: #C0C0C0; font-size: 40px;"> <br><br>
<input type="hidden" name="ingranaggio" value="1" />
<input type="submit"  value="Registra" name="B3" style="background-color: #79d969; font-size: 40px;"></p>
</form>
<? } else { ?>
<div class="inner">
<p align="center"><font face="Verdana" size="5" color="#CC0000">REGISTRAZIONE <br>INGRESSO IN MENSA<br></font></b></h1><br>
<? if ($ce==0) { ?>
<form method="POST" action="" name="modulo11" >	
<p align="center"><font face="Verdana" size="5" color="#CC0000">PASS <? echo $pass; ?> NON DISTRIBUITO</font></b></h1><br><br>
<input type="submit"  value="ESCI" name="B4" style="background-color: #cc0000; font-size: 40px;"></p>
</form>
<?  exit;} 
if ($ce==2) { ?>
<form method="POST" action="" name="modulo21" >	
<p align="center"><font face="Verdana" size="5" color="#CC0000">PASS <? echo $pass; ?><br> GIA' REGISTRATO <br>IN INGRESSO</font></b></h1><br><br>
<font face="Verdana" size="5" color="#000000"><? echo $cognome; ?><br><? echo $nome; ?></font></b></h1><br><br>
<input type="submit"  value="ESCI" name="B5" style="background-color: #cc0000; font-size: 40px;"></p>
</form>
<?  exit;} ?>

<form method="POST" action="" name="modulo21" >	
<p align="center"><font face="Verdana" size="5" color="#CC0000">PASS <? echo $pass." "; ?><br>REGISTRATO INGRESSO</font></b></h1><br><br>
<font face="Verdana" size="5" color="#000000"><? echo $cognome; ?><br><? echo $nome; ?></font></b></h1><br><br>
<input type="submit"  value="PROSEGUI" name="B5" style="background-color: #79d969; font-size: 40px;"></p>
</form>
<?  exit;}
?>


<div align="center">
<p align="center"><b><font face="Arial" size="3" color="#993300">PARTECIPANTI ALLA MENSA OGGI</font></b>
<table border="1"  bgcolor="#FFF4F7"  >	<tr>

	<tr>
				<td bgcolor="#0db31c" align="center"><font face="Arial" size="2" color="#ffffff" >PRG</font></td>
        <td bgcolor="#0db31c" align="center"><font face="Arial" size="2" color="#ffffff" >TIPO</font></td>
        <td bgcolor="#0db31c" align="center"><font face="Arial" size="2" color="#ffffff" >NUM.</font></td>
        <td bgcolor="#0db31c" align="center"><font face="Arial" size="2" color="#ffffff" >COGNOME</font></td>
        <td bgcolor="#0db31c" align="center"><font face="Arial" size="2" color="#ffffff" >NOME</font></td>
			</tr> 
<?php
$conta=0;
$sql1 = "select * from storicopass where  entrata = '$dataarrivo'  order by numeropass";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ 
      $numeropass = $macrogruppo["numeropass"];
      $tessera = $macrogruppo["tessera"];
      $entrata= $macrogruppo["entrata"];
      $uscita= $macrogruppo["uscita"];
      
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
      $conta++;
?>		      
<tr> 
    <td align="center"><font face="Arial" size="2" color="#000000"><? echo $conta; ?></font></td> 
    <td align="center"><font face="Arial" size="2" color="#3b3fe1">PASS</font></td> 
    <td align="center"><font face="Arial" size="2" color="#cc0000"><font color="red"><? echo $numeropassx; ?></font></font></td>
        <td ><font face="Arial" size="2" color="#000000"><? echo $cognomemx; ?></font></td>
        <td ><font face="Arial" size="2" color="#000000"><? echo $nomemx; ?></font></td>   
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
      
         
$sql1x = "select * from soci where tessera = '$tessera'   order by cognome";
#echo $sql1x;
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
      $conta++;  
?>		      
<tr> 
    <td align="center"><font face="Arial" size="2" color="#000000"><? echo $conta; ?></font></td> 
    <td align="center"><font face="Arial" size="2" color="#9d620e"><b>TESS</b></font></td> 
    <td align="center"><font face="Arial" size="3" color="#000000"><font color="red"><? echo $numeropassx; ?></font></font></td>
        <td ><font face="Arial" size="2" color="#000000"><? echo $cognomemx; ?></font></td>
        <td ><font face="Arial" size="2" color="#000000"><? echo $nomemx; ?></font></td>
      </tr>   
<? }}}} ?>       
 
 
</div> 
 
 
 </table>
  </body>
</html>