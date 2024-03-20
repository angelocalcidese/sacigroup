<?php
$pass=$_REQUEST["tes"];
include "conf_DB.php";
$oggi=date("d/m/Y");
$sql = "SELECT *  FROM  soci where  tesseraold = '$pass' " ;  
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
	
	{ 
      $tessera = $macrogruppo["tessera"];
      $cognome = $macrogruppo["cognome"];
      $nome = $macrogruppo["nome"];

$ingranaggio=0;
$sql1 = "select * from storicotessera where numerotessera = '$pass' and entrata = '$oggi'    ";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ $ingranaggio=1;
      $numeropass = $macrogruppo["numerotessera"];	
      $numeropass = sprintf("%03d", $numeropass); 
      
 }}
$sql = "SELECT *  FROM  soci where  tesseraold = '$pass' " ;  
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
	
	{ 
      $tessera = $macrogruppo["tessera"];
      $cognome = $macrogruppo["cognome"];
      $nome = $macrogruppo["nome"];
      }} 
     # echo $sw;
     #      

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>leggi qrcode</title>
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
  <link rel="stylesheet" href="foglio-di-stile.css" type="text/css" />
  
  <!-- JQUERY -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>   

  <!-- NOSTRI SCRIPT -->
  <script src="clientscript.js"></script>  
<style>
h1 {
  text-shadow: 2px 2px 4px #999999;
  filter:DropShadow(Color=#000000, OffX=2, OffY=2);
} 
</style>
  </head>
  <BODY >
  <?
if ($ingranaggio==0)
{
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
        else { echo "Error inserted recordx: " . $conn->error; }  


?>
<div align="center">     
  <div id="header">
    <img src="carlopoma.png" width="160" height="70" />
  </div>
  </div>  
<div class="inner">		<br><h1><p align="center"><font face="Verdana" size="5" color="#000000">REGISTRATO INGRESSO TESSERA N.</font><font face="Verdana" size="5" color="#cc0000"> <?echo $pass; ?> <br>  <? echo $cognome." ".$nome; ?><br></font><font face="Verdana" size="5" color="#000000">clicca <-- in alto a sinistra</font></b></h1></p>
<? exit;      
}  else  {
?>
<div align="center">     
  <div id="header">
    <img src="carlopoma.png" width="160" height="70" />
  </div>
  </div>  
<div class="inner">		<br><h1><p align="center"><font face="Verdana" size="5" color="#CC0000">ATTENZIONE<br></font><font face="Verdana" size="5" color="#000000"> TESSERA N.</font><font face="Verdana" size="5" color="#CC0000"> <?echo $pass; ?> </font><br>  <font face="Verdana" size="5" color="#000000">GIA' REGISTRATA <br>IN INGRESSO OGGI<br>clicca <-- in alto a sinistra</font></b></h1></p>
<? exit;
}         
  
}}  
  ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>leggi qrcode</title>
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
  <link rel="stylesheet" href="foglio-di-stile.css" type="text/css" />
  
  <!-- JQUERY -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>   

  <!-- NOSTRI SCRIPT -->
  <script src="clientscript.js"></script>  
<style>
h1 {
  text-shadow: 2px 2px 4px #999999;
  filter:DropShadow(Color=#000000, OffX=2, OffY=2);
} 
</style>
  </head>
  <BODY >  
<div align="center">     
  <div id="header">
    <img src="carlopoma.png" width="160" height="70" />
  </div>
  </div>  
<div class="inner">		<br><h1><p align="center"><font face="Verdana" size="5" color="#CC0000">ATTENZIONE<br></font><font face="Verdana" size="5" color="#000000"> TESSERA N.</font><font face="Verdana" size="5" color="#CC0000"> <?echo $pass; ?> </font><br>  <font face="Verdana" size="5" color="#000000">NON E' MAI STATA EMESSA<br>clicca <-- in alto a sinistra</font></b></h1></p>
<? exit;?>
  </body>
</html>