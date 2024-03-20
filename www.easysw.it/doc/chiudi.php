<?php
$pass=$_REQUEST["cli"];
$ingranaggio=$_REQUEST["ingranaggio"];
include "conf_DB.php";
$oggi=date("d/m/Y");
$sw=0;
$sql1 = "select * from pass where uscita != ''  and numeropass = '$pass'  ";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ $sw=1;
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
if ($ingranaggio==1)
{
$passx=$_REQUEST["pass"];
$tessera=$_REQUEST["tessera"];

if($pass!=""){
$sql1 = "select * from pass where numeropass = '$passx'    ";
#echo $sql1;
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ 
      $uscita = $macrogruppo["uscita"];	
      #echo "uscita ".$uscita;
    }}
$sql = "insert into storicopass
 (
  numeropass,  
  entrata, 
  uscita, 
  tessera
 )
  values
 ( 
  '$passx',
  '$oggi',  
  '$uscita',  
  '$tessera' 
   )
    ";
#echo $sql; exit;
    if ($conn->query($sql) === TRUE)
        { } 
        else { echo "Error inserted recordx: " . $conn->error; }  


$sql = "insert into storicopassx
 (
  ora,
  numeropass,  
  entrata, 
  uscita, 
  tessera
 )
  values
 ( 
  CURRENT_TIMESTAMP,
  '$passx',
  '$oggi',  
  '$uscita',  
  '$tessera' 
   )
    ";
#echo $sql; exit;
    if ($conn->query($sql) === TRUE)
        { } 
        else { echo "Error inserted recordx: " . $conn->error; }  

$sql = "UPDATE pass set 
uscita = '',
tessera = '0'
where 
numeropass = '$passx' 
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
?>
<div class="inner">		<br><h1><p align="center"><font face="Verdana" size="5" color="#000000">ATTENZIONE <br> PASS <?echo $pass; ?> <br>  MEMORIZZATA LA RESTITUZIONE<br>clicca <-- in alto a sinistra</font></b></h1></p>
<? exit;
}         
  ?>
<div align="center">     
  <div id="header">
    <img src="carlopoma.png" width="160" height="70" />
  </div>
  </div>  
<form method="POST" action="" name="modulo" name="flash">
<?
if ($sw==0) {
?>
<div class="inner">		<br><h1><p align="center"><font face="Verdana" size="5" color="#cc0000">ATTENZIONE <br> PASS <?echo $pass; ?> <br>  NON DISTRIBUITO<br><br></font><font face="Verdana" size="5" color="#000000"> clicca <-- in alto a sinistra</font></b></h1></p>

<?
#echo '<div align="center">ATTENZIONE <br> PASS '.$pass.' <br>  NON DISTRIBUITO </div>';

}
else
{ ?>
<div class="inner">		<br><h1><p align="center"><font face="Verdana" size="5" color="#000000"> PASS </font><font face="Verdana" size="5" color="#cc0000"><?echo $pass; ?></font> <font face="Verdana" size="5" color="#000000"><br>  CONSEGNATO A: <br> <font face="Verdana" size="6" color="#cc0000"><?echo $cognome." " .$nome; ?></font><font face="Verdana" size="5" color="#000000"><br> IL:<br> <? echo $uscita;?></font></b></h1></p>

<?
}
if ($sw==1){
?>
        <input type="hidden" name="ingranaggio" value="1" />
        <input type="hidden" name="pass" value="<?php echo $pass; ?>" />
        <input type="hidden" name="tessera" value="<?php echo $tessera; ?>" />
<p align="center"><input type="submit" value="Memorizza Restituzione PASS" size="80" name="submit" style="font-size: 18pt; font-weight: normal; background-color: green; color: white;" >  </p> 
<? } ?>
</div>
</form>
  </body>
</html>