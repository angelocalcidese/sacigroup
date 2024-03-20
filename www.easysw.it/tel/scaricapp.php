<?php
$ingranaggio=$_REQUEST["ingranaggio"]; 
$pass=$_REQUEST["pass"];
{
$trovato=0;
if($pass=="mimmo"){$trovato=1;}
/*
$sql1 = "SELECT * FROM utenti  where login = 'marco' and password = '$pass' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{ $trovato=1;}}
*/        
}
function OMC() {  
#echo "passo";
 $file = 'OMC_bacheca.apk'; //not public folder
  if (file_exists($file)) {
     header('Content-Description: File Transfer');
     header('Content-Type: application/vnd.android.package-archive');
     header('Content-Disposition: attachment; filename='.basename($file));
     header('Content-Transfer-Encoding: binary');
     header('Expires: 0');
     header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
     header('Pragma: public');
     header('Content-Length: ' . filesize($file));
     ob_clean();
     flush();
     readfile($file);
     exit;
 }
else
{
echo 'No File Found';
}  
}
function OMCadd() {  
#echo "passo";
 $file = 'Sacis_CAT.apk'; //not public folder
  if (file_exists($file)) {
     header('Content-Description: File Transfer');
     header('Content-Type: application/vnd.android.package-archive');
     header('Content-Disposition: attachment; filename='.basename($file));
     header('Content-Transfer-Encoding: binary');
     header('Expires: 0');
     header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
     header('Pragma: public');
     header('Content-Length: ' . filesize($file));
     ob_clean();
     flush();
     readfile($file);
     exit;
 }
else
{
echo 'No File Found';
}  
}

function GUARDA() {  
#echo "passo";
 $file = 'ingresso_guardaroba.apk'; //not public folder
  if (file_exists($file)) {
     header('Content-Description: File Transfer');
     header('Content-Type: application/vnd.android.package-archive');
     header('Content-Disposition: attachment; filename='.basename($file));
     header('Content-Transfer-Encoding: binary');
     header('Expires: 0');
     header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
     header('Pragma: public');
     header('Content-Length: ' . filesize($file));
     ob_clean();
     flush();
     readfile($file);
     exit;
 }
else
{
echo 'No File Found';
}  
}
if ($ingranaggio==820 ) {

    OMC();
 
  } 
if ($ingranaggio==82 ) {

    OMCadd();
 
  }  
if ($ingranaggio==920 and $trovato==1) {

    GUARDA();
 
  }              
$trovato=0;$ingranaggio==0;    
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html> 
<head>
  <title>play store mimmo</title>
  
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
br {
    line-height: 1px
}
</style>  
</head>
<body>
 
 <center>
<p align="center"><b><font face="Arial" size="5" color="#666666">SACI GROOP</font></b></p>



   <div id="contenuto" >
    
   
    <div class="inner">

 
<p align="center"><font face="Arial" size="3" color="#000000">PLAY STORE APP ANDROID</font></a></p>
<table style="border-spacing: 5px;border-color: #000000;" width="100%" >	

<tr>
<td bgcolor="#dcf8dc" style="text-align:center;">
<p align="center"><font face="Arial" size="3" color="#993300"><b>SACI GROOP</b></font><br><br>
<font face="Arial" size="2" color="#993300">scarica Gestione CAT</font><br><br>

</p>
</td>           
<td valign="top" bgcolor="#dcf8dc" style="text-align:center;">            

<form method="POST" action="scaricapp.php?ingranaggio=82" name="modulo" >

<input  type="image" src="OMC-Icona.png"  width="60" height="60" name="B4vv"><br>
<font face="Arial" size="1" color="#993300"><b>click download</font>

</form>

</td>
</tr>
<!--
<tr>
<td bgcolor="#dcf8dc" style="text-align:center;">
<p align="center"><font face="Arial" size="3" color="#993300"><b>OPERA MESSA DELLA CARITA'</b></font><br><br>
<font face="Arial" size="2" color="#993300">scarica APP BACHECA per aggiornamento</font><br><br>

</p>
</td>           
<td valign="top" bgcolor="#dcf8dc" style="text-align:center;">            

<form method="POST" action="index.php?ingranaggio=92" name="modulo" >

<input  type="image" src="OMC-Iconax.png"  width="60" height="60" name="B4vv"><br>
 <font face="Arial" size="2" color="#993300">Password: </font><input type="password" name="pass"  size="10" style="background-color: #C0C0C0"><br>
 <font face="Arial" size="1" color="#993300"><b>click download</font>
</form>

</td>
</tr>


<tr>
<td bgcolor="#dcf8dc" style="text-align:center;">
<p align="center"><font face="Arial" size="3" color="#993300"><b>OPERA MESSA DELLA CARITA'</b></font><br><br>
<font face="Arial" size="2" color="#993300">scarica APP GUARDAROBA</font><br><br>

</p>
</td>           
<td valign="top" bgcolor="#dcf8dc" style="text-align:center;">            

<form method="POST" action="index.php?ingranaggio=920" name="modulo" >

<input  type="image" src="guarda.png"  width="60" height="60" name="B4vv"><br>
 <font face="Arial" size="2" color="#993300">Password: </font><input type="password" name="pass"  size="10" style="background-color: #C0C0C0"><br>
 <font face="Arial" size="1" color="#993300"><b>click download</font>
</form>

</td>
</tr>
-->
</table>
  </body>
</html>