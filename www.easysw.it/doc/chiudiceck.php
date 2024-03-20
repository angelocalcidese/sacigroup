<?php
include "conf_DB.php";
$oggi=date("d/m/Y");
$ggo=date("d");
$mmo=date("m");
$aao=date("Y");
$tessera=$_REQUEST["tessera"];
$pass=$_REQUEST["dicipass"];
$passtes=$_REQUEST["dicitessera"];
$ingranaggio=$_REQUEST["ingranaggio"];
$gg=$_REQUEST["gg"];
$gg = sprintf("%02d", $gg);
$mm=$_REQUEST["mm"];
$mm = sprintf("%02d", $mm);
$aa=$_REQUEST["aa"];
if($aa<2000){$aa=$aa+2000;}
$aa = sprintf("%04d", $aa);
$dataarrivo=$gg."/".$mm."/".$aa;
echo $ingranaggio;
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
.table7 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
background: #ECE9E0;
color: #656665;
border: 5px solid #FF9900;
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
border: 5px solid #1ad64b;
border-radius: 20px;
}
.table8 th {
font-size: 18px;
padding: 10px;
}
.table8 td {
background: #d2fbdc;
padding: 5px;
}
h1 {
  text-shadow: 2px 2px 4px #999999;
  filter:DropShadow(Color=#000000, OffX=2, OffY=2);
} 
h1 {
  text-shadow: 2px 2px 4px #999999;
  filter:DropShadow(Color=#000000, OffX=2, OffY=2);
} 
input[type=submit] {
    padding:2px 10px; 
    background:#17fbf8; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;  }
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
<? if($ingranaggio==0){ ?>
<br><br>
  <br>
<div align="center">
<p align="center">
<p align="center"><b><font face="Arial" size="4" color="#993300">SELEZIONA UNA DATA</font></b></p>

	
<table border="1"  bgcolor="#FFF4F7" class="table7" >
<form method="POST" action="" >
<tr>

<td align="center"><p><input type="number" size="1" name="gg"  min="1" max="99"  value="<?php if ($ingranaggio==10){echo $gg;}else{echo $ggo;} ?>"  style="background-color: #ffffff">
<input type="number" size="1" name="mm"  min="1" max="99"  value="<?php if ($ingranaggio==10){echo $mm;}else{echo $mmo;} ?>"  style="background-color: #ffffff">
<input type="number" size="1" name="aa"  min="1" max="9999"  value="<?php if ($ingranaggio==10){echo $aa;}else{echo $aao;} ?>"  style="background-color: #ffffff">
</p> </td>

<input type="hidden" name="ingranaggio" value="10" />				
<td  align="center"><input type="submit" value="Seleziona" name="B3"></td>
</tr>
</form>	

</table>


<? } 
if ($ingranaggio==11){  ?>
 <br><br>
<div align="center">
<p align="center">
<form method="POST" action="" >
<input type="hidden" name="ingranaggio" value="10" />	
<input type="hidden" name="gg" value="<? echo $gg; ?>" />	
<input type="hidden" name="mm" value="<? echo $mm; ?>" />	
<input type="hidden" name="aa" value="<? echo $aa; ?>" />					
<td  align="center"><input type="submit" value="INDIETRO" name="B3x"></td><br><br>
<td align="center"><b><font face="Arial" size="3" color="#993300">PRESENZE IN MENSA DI </font></b><br> </p>
<table  border="1"  bgcolor="#FFF4F7" class="table8" >

<tr>
<?	
		
$newfile="foto/".$tessera.".jpg";;
      $FileFound = file_exists($newfile);
      #echo $FileFound; exit;
      if ($FileFound==1)
      {$indirizzofoto="./foto/".$tessera.".jpg"; }
      else
      {$indirizzofoto="./foto/generico.jpg"; }
$sql1 = "select * from soci  where tessera = '$tessera'";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ 
      $cognome = $macrogruppo["cognome"];
      $tesseraold = $macrogruppo["tesseraold"];
      $nome = $macrogruppo["nome"];
      $tessera = $macrogruppo["tessera"];	
      $datanascita = $macrogruppo["data_nascita"];	
      $nazionalita = $macrogruppo["nazionalita"];	
      $telefono = $macrogruppo["telefono"];	
      $sesso = $macrogruppo["sesso"];	
      }}
      #echo $tesseraold;
if($tesseraold==0){$pastes="PASS";}else{$pastes=$tesseraold;}     
list($width, $height, $type, $attr) = getimagesize($indirizzofoto);//lego i dati
# echo $indirizzofoto; exit;
#echo $width."  ".$height."<br>";
#if ($height > $width)
{$proporzione=$height/$width;}
#else
#{$proporzione=$width/$height;}
#echo $proporzione."<br>";
$altezza=150*$proporzione;
?>          
				<td colspan="2" align="center">				
					<p style="size="20" style="background-color: #C0C0C0"><img border="0" src="<? echo $indirizzofoto; ?>" width="150" height="<? $altezza; ?>"> </p>
				</td>
			</tr>   

<tr>
<td><font face="Arial" size="2" color="##000000">COGNOME: </td>
<td><font face="Arial" size="2" color="#000000"><b><? echo $cognome; ?> </font></b></td>
</tr>
<tr>
<td><font face="Arial" size="2" color="#000000">NOME: </td>
<td><font face="Arial" size="2" color="#000000"><b><? echo $nome; ?> </font></b></td>
</tr>
<tr>
<td><font face="Arial" size="2" color="#000000">NATO IL: </td>
<td><font face="Arial" size="2" color="#000000"><b><? echo $datanascita; ?> </font></b></td>
</tr>
<tr>
<td><font face="Arial" size="2" color="#000000">NAZIONALITA: </td>
<td><font face="Arial" size="2" color="#000000"><b><? echo $nazionalita; ?> </font></b></td>
</tr>
<tr>
<td><font face="Arial" size="2" color="#000000">SESSO: </td>
<td><font face="Arial" size="2" color="#000000"><b><? echo $sesso; ?> </font></b></td>
</tr>
<tr>
<td><font face="Arial" size="2" color="#000000">TELEFONO: </td>
<td><font face="Arial" size="2" color="#000000"><b><? echo $telefono; ?> </font></b></td>
</tr>
<tr>
<td><font face="Arial" size="2" color="#000000">TESSERA: </td>
<td><font face="Arial" size="2" color="#000000"><b><? echo $pastes; ?> </font></b>
</td>
</tr>
</table>
<h1>
<table border="1" bgcolor="#FFF4F7" class="table7" >	<tr>

	<tr>
  <? if($pastes=="PASS"){?>
				<td align="center"><font face="Arial" size="2" color="#000000">NUM. PASS</font></td>
        <td align="center"><font face="Arial" size="2" color="#000000">RILASCIO PASS</font></td>
        <td align="center"><font face="Arial" size="2" color="#000000">INGRESSO MENSA</font></td>
  <? } else
  {  ?>
        <td align="center"><font face="Arial" size="2" color="#000000">NUM. TESSERA</font></td>        
        <td align="center"><font face="Arial" size="2" color="#000000">INGRESSO MENSA</font></td>
<?  }  ?>      
			</tr> 
<?php
if($pastes=="PASS")
{$sql1 = "select * from storicopass where tessera = '$tessera'  order by uscita";
#echo $sql1;
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ 
      $numeropass = $macrogruppo["numeropass"];
      $numeropass = sprintf("%02d", $numeropass);
      $tessera = $macrogruppo["tessera"];
      
      $entrata= $macrogruppo["entrata"];
      $uscita= $macrogruppo["uscita"];

?>		      
<tr>      
    <td align="center"><font face="Arial" size="2" color="#ffffff"><font color="red"><? echo $numeropass; ?></font></font></td>
    <td align="center"><font face="Arial" size="2" color="red"><? echo $entrata; ?></font></td>
    <td align="center"><font face="Arial" size="2" color="red"><? echo $uscita; ?></font></td>
        
			</tr>   
<? }}}else
{
$sql1 = "select * from storicotessera where tessera = '$tessera'  order by uscita";
#echo $sql1;
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ 
      $numerotessera = $macrogruppo["numerotessera"];
      $numerotessera = sprintf("%03d", $numerotessera);
      $tessera = $macrogruppo["tessera"];
      $entrata= $macrogruppo["entrata"];
      $uscita= $macrogruppo["uscita"];

?>		      
<tr>      
    <td align="center"><font face="Arial" size="2" color="#ffffff"><font color="red"><? echo $numerotessera; ?></font></font></td>   
    <td align="center"><font face="Arial" size="2" color="red"><? echo $entrata; ?></font></td>
        
			</tr>   
<? }}
} ?>      
 <tr>
 </table>
</div>
</div> </div>


<?
}
if ($ingranaggio==10) {?> 
 <br><br>
<? 
$tot=0;
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
      $tot++;
      }}
      
$sql1 = "select * from storicotessera where  entrata = '$dataarrivo'  order by numerotessera";
#echo $sql1;
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ 
      $numeropass = $macrogruppo["numerotessera"];
      $tessera = $macrogruppo["tessera"];
      $entrata= $macrogruppo["entrata"];
      $tot++; 
      }}     

?>  
<div align="center">
<p align="center">
<form method="POST" action="" >
<input type="hidden" name="ingranaggio" value="0" />				
<td  align="center"><input type="submit" value="INDIETRO" name="B3x"></td><br><br>
<b><font face="Arial" size="3" color="#993300">DATA <? echo $dataarrivo."<br>PRESENTI: "."<font face='Arial' size='5' color='#fb3717'>".$tot."</font>"; ?></font></b>
<b><font face="Arial" size="3" color="#993300">IN MENSA</font></b>
<table border="1"  bgcolor="#FFF4F7"  >	<tr>

	<tr>
				<td bgcolor="#0db31c" align="center"><font face="Arial" size="1" color="#ffffff" >PRG</font></td>
        <td bgcolor="#0db31c" align="center"><font face="Arial" size="1" color="#ffffff" >TIPO</font></td>
        <td bgcolor="#0db31c" align="center"><font face="Arial" size="1" color="#ffffff" >NUM.</font></td>
        <td bgcolor="#0db31c" align="center"><font face="Arial" size="1" color="#ffffff" >COGNOME</font></td>
        <td bgcolor="#0db31c" align="center"><font face="Arial" size="1" color="#ffffff" >NOME</font></td>
        <td bgcolor="#0db31c" align="center"><font face="Arial" size="1" color="#ffffff" >FOTO</font></td>
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
<form method="POST" action="chiudipasstess.php?numeropass=<? echo $numeropassx; ?>&ingranaggio=5&socio=<? echo $tesserax; ?>&gg=<? echo $gg; ?>&mm=<? echo $mm; ?>&aa=<? echo $aa; ?>" name="modulo" ">
    <td align="center"><font face="Arial" size="1" color="#000000"><? echo $conta; ?></font></td> 
    <td align="center"><font face="Arial" size="1" color="#3b3fe1">PASS</font></td> 
    <td align="center"><font face="Arial" size="1" color="#cc0000"><font color="red"><? echo $numeropassx; ?></font></font></td>
        <td ><font face="Arial" size="1" color="#000000"><? echo $cognomemx; ?></font></td>
        <td ><font face="Arial" size="1" color="#000000"><? echo $nomemx; ?></font></td>  
<?
$newfile="foto/".$tesserax.".jpg";;
      $FileFound = file_exists($newfile);
      #echo $FileFound; exit;
      if ($FileFound==1)
      {$indirizzofoto="./foto/".$tessera.".jpg"; }
      else
      {$indirizzofoto="./foto/generico.jpg"; }
     
list($width, $height, $type, $attr) = getimagesize($indirizzofoto);//lego i dati
# echo $indirizzofoto; exit;
#echo $width."  ".$height."<br>";
#if ($height > $width)
#{$proporzione=$height/$width;}
#else
{$proporzione=$width/$height;}
#echo $proporzione."<br>";
$larghezza=25*$proporzione;
?>   
       <td  align="center" bgcolor="<? echo $colore; ?>"><a href="http://www.mensacarita.it/chiudiceck.php?tessera=<? echo $tesserax; ?>&ingranaggio=11&gg=<? echo $gg; ?>&mm=<? echo $mm; ?>&aa=<? echo $aa; ?>"><img border="0" src="<? echo $indirizzofoto; ?>" width="<? $larghezza; ?>" height="25"></a></td> 
         
        
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
    <form method="POST" action="chiudipasstess.php?numerotessera=<? echo $numeropassx; ?>&ingranaggio=6&socio=<? echo $tesserax; ?>" name="modulo" ">
    <td align="center"><font face="Arial" size="1" color="#000000"><? echo $conta; ?></font></td> 
    <td align="center"><font face="Arial" size="1" color="#9d620e"><b>TESS</b></font></td> 
    <td align="center"><font face="Arial" size="1" color="#000000"><font color="red"><? echo $numeropassx; ?></font></font></td>
        <td ><font face="Arial" size="1" color="#000000"><? echo $cognomemx; ?></font></td>
        <td ><font face="Arial" size="1" color="#000000"><? echo $nomemx; ?></font></td>
<?
$newfile="foto/".$tesserax.".jpg";;
      $FileFound = file_exists($newfile);
      #echo $FileFound; exit;
      if ($FileFound==1)
      {$indirizzofoto="./foto/".$tessera.".jpg"; }
      else
      {$indirizzofoto="./foto/generico.jpg"; }
     
list($width, $height, $type, $attr) = getimagesize($indirizzofoto);//lego i dati
# echo $indirizzofoto; exit;
#echo $width."  ".$height."<br>";
#if ($height > $width)
#{$proporzione=$height/$width;}
#else
{$proporzione=$width/$height;}
#echo $proporzione."<br>";
$larghezza=25*$proporzione;
?>   
       <td  align="center" bgcolor="<? echo $colore; ?>"><a href="http://www.mensacarita.it/chiudiceck.php?tessera=<? echo $tesserax; ?>&ingranaggio=11&gg=<? echo $gg; ?>&mm=<? echo $mm; ?>&aa=<? echo $aa; ?>"><img border="0" src="<? echo $indirizzofoto; ?>" width="<? $larghezza; ?>" height="25"></a></td> 
         
      </tr>   
<? }}}} 
?>
<? } ?>
  </body>
</html>