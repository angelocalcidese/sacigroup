<?php
$pass=$_REQUEST["dicitessera"];
$pass = sprintf("%03d", $pass); 
$ingranaggio=$_REQUEST["ingranaggio"];
if ($pass==000){$ingranaggio=0;}
include "conf_DB.php";
$oggi=date("d/m/Y");
if ($ingranaggio==1){
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
		{ $ingranaggio=1;
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
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
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
  </div>  <? if($ingranaggio==0) { ?>
<div class="inner">	
<form method="POST" action="" name="modulo" >	
<p align="center"><font face="Verdana" size="5" color="#CC0000">REGISTRAZIONE <br>INGRESSO IN MENSA<br></font></b></h1><br>
<font face="Verdana" size="5" color="#CC0000">NUMERO DELLA TESSERA<br></font></b></h1><br>
<input type="text" name="dicitessera"  size="1" style="background-color: #C0C0C0; font-size: 40px;"> <br><br>
<input type="hidden" name="ingranaggio" value="1" />
<input type="submit"  value="Registra" name="B3" style="background-color: #79d969; font-size: 40px;"></p>
</form>
<? } else { ?>
<div class="inner">
<p align="center"><font face="Verdana" size="5" color="#CC0000">REGISTRAZIONE <br>INGRESSO IN MENSA<br></font></b></h1><br>
<? if ($ce==0) { ?>
<form method="POST" action="" name="modulo11" >	
<p align="center"><font face="Verdana" size="5" color="#CC0000">TESSERA <? echo $pass; ?> MAI EMESSA</font></b></h1><br><br>
<input type="submit"  value="ESCI" name="B4" style="background-color: #cc0000; font-size: 40px;"></p>
</form>
<?  exit;} 
if ($gia==1) { ?>
<form method="POST" action="" name="modulo21" >	
<p align="center"><font face="Verdana" size="5" color="#CC0000">TESSERA <? echo $pass; ?><br> GIA' REGISTRATA <br>IN INGRESSO</font></b></h1><br><br>
<font face="Verdana" size="5" color="#000000"><? echo $cognome; ?><br><? echo $nome; ?></font></b></h1><br><br>
<input type="submit"  value="ESCI" name="B5" style="background-color: #cc0000; font-size: 40px;"></p>
</form>
<?  exit;} ?>

<form method="POST" action="" name="modulo21" >	
<p align="center"><font face="Verdana" size="5" color="#CC0000">TESSERA <? echo $pass." "; ?>REGISTRATO INGRESSO</font></b></h1><br><br>
<font face="Verdana" size="5" color="#000000"><? echo $cognome; ?><br><? echo $nome; ?></font></b></h1><br><br>
<input type="submit"  value="PROSEGUI" name="B5" style="background-color: #79d969; font-size: 40px;"></p>
</form>
<?  exit;}
?>
  </body>
</html>