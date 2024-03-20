<?php

$codicecorso=$_REQUEST["codicecorso"];
#$codicecorso=14;
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 4</title>
</head>
<style>
div#container {
min-width:   960px;
  min-height:  500px;
  max-width:  960px;
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

<?php 
include "conf_DB.php";
$sql1 = "SELECT * FROM corso where codicecorso = '$codicecorso' ";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{
		  $nomecorso= $macrogruppo["nomecorso"];
      $datainizio= $macrogruppo["datainizio"];
      $datafine= $macrogruppo["datafine"];
      $istruttore1= $macrogruppo["istruttore1"];
      $istruttore2= $macrogruppo["istruttore2"];
      $argomento= $macrogruppo["argomento"];
      $luogo= $macrogruppo["luogo"];
      $certificato= $macrogruppo["certificato"];
      $costo= $macrogruppo["costo"];




?>
<body bgcolor="#CCFFCC">

<div align="center">   
<div id="container">
<form method="POST" action="" name="modulo" onSubmit="return controllo();">
<p align="center"><b><font face="Arial" size="6" color="#993300">CORSO <?php  echo " ( Identificativo n° " . $codicecorso . ")"; ?></font></b></p>
<table border="1" width="100%" bgcolor="#FFCC66" bordercolorlight="#993300" bordercolordark="#CC6600">
	<tr>
		<td bgcolor="#FFFFFF">
		<table border="1" width="100%">
			<tr>
				<td width="237" bgcolor="#669900"><b>
				<font face="Arial" color="#FFFFFF">CORSO: <?php echo $codicecorso; ?></font></b></td>
				
			</tr>
			<tr>
				<td width="237"><b><font face="Arial" color="#008000">- NOME DEL 
				CORSO</font></b></td>
				<td>				
					<p>
					<font face="Arial">
					<input type="text" name="nomecorso"  value="<?php echo $nomecorso; ?>" size="100" style="background-color: #C0C0C0"></font></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial">- DATA INIZIO DEL CORSO</font></td>
				<td>				
					<p><font face="Arial">
					<input type="text" name="datainizio" value="<?php echo $datainizio; ?>" size="20" style="background-color: #C0C0C0"></font></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial">- DATA FINE DEL CORSO</font></td>
				<td>				
					<p><font face="Arial">
					<input type="text" name="datafine" value="<?php echo $datafine; ?>" size="20" style="background-color: #C0C0C0"></font></p>
				</td>			
				</tr>
      <tr>
				<td width="237" valign="bottom"><b>
				<font face="Arial" color="#FF0000">-&nbsp; LUNEDI' </font></b></td>
				<td>				
					<table border="0" width="39%" cellspacing="0" cellpadding="0">
						<tr>
							<td width="57" bgcolor="#FF6600" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">TURNO</font></b></td>
							<td width="57" bgcolor="#FF6600" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">1°</font></b></td>
							<td width="57" bgcolor="#CC0066" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">TURNO</font></b></td>
							<td width="57" bgcolor="#CC0066" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">2°</font></b></td>
							<td width="57" bgcolor="#FF9999" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">TURNO</font></b></td>
							<td width="57" bgcolor="#FF9999" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">3°</font></b></td>
							<td width="57" bgcolor="#CCCC00" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">TURNO</font></b></td>
							<td bgcolor="#CCCC00" width="57" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">4°</font></b></td>
							<td bgcolor="#993300" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">TURNO</font></b></td>
							<td bgcolor="#993300" align="center"><b>
							<font face="Arial" size="2" color="#FFFFFF">5°</font></b></td>
						</tr>
						<tr>
							<td width="57" bgcolor="#FF6600" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">DA:</font></b></td>
							<td width="57" bgcolor="#FF6600" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">A:</font></b></td>
							<td width="57" bgcolor="#CC0066" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">DA:</font></b></td>
							<td width="57" bgcolor="#CC0066" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">A:</font></b></td>
							<td width="57" bgcolor="#FF9999" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">DA:</font></b></td>
							<td width="57" bgcolor="#FF9999" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">A:</font></b></td>
							<td width="57" bgcolor="#CCCC00" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">DA:</font></b></td>
							<td bgcolor="#CCCC00" width="57" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">A:</font></b></td>
							<td bgcolor="#993300" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">DA:</font></b></td>
							<td bgcolor="#993300" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">A:</font></b></td>
						</tr>
<?php
$sql1x = "SELECT * FROM corsoturno where codicecorso = '$codicecorso' ";
$result1 = $conn->query($sql1x);
if ($result1->num_rows > 0) {
  while($macrogruppo1 = $result1->fetch_assoc())
		{
      $giorno = $macrogruppo1["giorno"];
      $dalleore = $macrogruppo1["dalleore"];
      $alleore = $macrogruppo1["alleore"];
      if ($giorno=="lunedi1"){$lunedida1=$dalleore;$lunedia1=$alleore;}
      if ($giorno=="lunedi2"){$lunedida2=$dalleore;$lunedia2=$alleore;}
      if ($giorno=="lunedi3"){$lunedida3=$dalleore;$lunedia3=$alleore;}
      if ($giorno=="lunedi4"){$lunedida4=$dalleore;$lunedia4=$alleore;}
      if ($giorno=="lunedi5"){$lunedida5=$dalleore;$lunedia5=$alleore;}
      
      if ($giorno=="martedi1"){$martedida1=$dalleore;$martedia1=$alleore;}
      if ($giorno=="martedi2"){$martedida2=$dalleore;$martedia2=$alleore;}
      if ($giorno=="martedi3"){$martedida3=$dalleore;$martedia3=$alleore;}
      if ($giorno=="martedi4"){$martedida4=$dalleore;$martedia4=$alleore;}
      if ($giorno=="martedi5"){$martedida5=$dalleore;$martedia5=$alleore;}
      
      if ($giorno=="mercoledi1"){$mercoledida1=$dalleore;$mercoledia1=$alleore;}
      if ($giorno=="mercoledi2"){$mercoledida2=$dalleore;$mercoledia2=$alleore;}
      if ($giorno=="mercoledi3"){$mercoledida3=$dalleore;$mercoledia3=$alleore;}
      if ($giorno=="mercoledi4"){$mercoledida4=$dalleore;$mercoledia4=$alleore;}
      if ($giorno=="mercoledi5"){$mercoledida5=$dalleore;$mercoledia5=$alleore;}
      
      if ($giorno=="giovedi1"){$giovedida1=$dalleore;$giovedia1=$alleore;}
      if ($giorno=="giovedi2"){$giovedida2=$dalleore;$giovedia2=$alleore;}
      if ($giorno=="giovedi3"){$giovedida3=$dalleore;$giovedia3=$alleore;}
      if ($giorno=="giovedi4"){$giovedida4=$dalleore;$giovedia4=$alleore;}
      if ($giorno=="giovedi5"){$giovedida5=$dalleore;$giovedia5=$alleore;}
      
      if ($giorno=="venerdi1"){$venerdida1=$dalleore;$venerdia1=$alleore;}
      if ($giorno=="venerdi2"){$venerdida2=$dalleore;$venerdia2=$alleore;}
      if ($giorno=="venerdi3"){$venerdida3=$dalleore;$venerdia3=$alleore;}
      if ($giorno=="venerdi4"){$venerdida4=$dalleore;$venerdia4=$alleore;}
      if ($giorno=="venerdi5"){$venerdida5=$dalleore;$venerdia5=$alleore;}
      
      if ($giorno=="sabato1"){$sabatoda1=$dalleore;$sabatoa1=$alleore;}
      if ($giorno=="sabato2"){$sabatoda2=$dalleore;$sabatoa2=$alleore;}
      if ($giorno=="sabato3"){$sabatoda3=$dalleore;$sabatoa3=$alleore;}
      if ($giorno=="sabato4"){$sabatoda4=$dalleore;$sabatoa4=$alleore;}
      if ($giorno=="sabato5"){$sabatoda5=$dalleore;$sabatoa5=$alleore;}
      
      if ($giorno=="domenica1"){$domenicada1=$dalleore;$domenicaa1=$alleore;}
      if ($giorno=="domenica2"){$domenicada2=$dalleore;$domenicaa2=$alleore;}
      if ($giorno=="domenica3"){$domenicada3=$dalleore;$domenicaa3=$alleore;}
      if ($giorno=="domenica4"){$domenicada4=$dalleore;$domenicaa4=$alleore;}
      if ($giorno=="domenica5"){$domenicada5=$dalleore;$domenicaa5=$alleore;}
      
    } } 
?>            
            
						<tr>
							<td width="57"><font face="Arial">
							<input type="text" name="lunedida1" value="<?php echo $lunedida1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="lunedia1" value="<?php echo $lunedia1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="lunedida2" value="<?php echo $lunedida2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="lunedia2" value="<?php echo $lunedia2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="lunedida3" value="<?php echo $lunedida3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="lunedia3" value="<?php echo $lunedia3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="lenedida4" value="<?php echo $lunedida4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="lunedia4" value="<?php echo $lunedia4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="lunedida5" value="<?php echo $lunedida5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="lunedia5" value="<?php echo $lunedia5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
						</tr>
					</table>
				</td>			
				</tr>  
			<tr>
				<td width="237"><b><font face="Arial" color="#FF0000">- MARTEDI' </font>
				</b></td>
				<td>				
					<table border="0" width="32%" cellspacing="0" cellpadding="0">
						<tr>
							<td width="57"><font face="Arial">
							<input type="text" name="martedida1" value="<?php echo $martedida1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="martedia1" value="<?php echo $martedia1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="martedida2" value="<?php echo $martedida2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="58"><font face="Arial">
							<input type="text" name="martedia2" value="<?php echo $martedia2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="martedida3" value="<?php echo $martedida3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="martedia3" value="<?php echo $martedia3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="martedida4" value="<?php echo $martedida4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="martedia4" value="<?php echo $martedia4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="martedida5" value="<?php echo $martedida5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="martedia5" value="<?php echo $martedia5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
						</tr>
					</table>
				</td>			
				</tr>
			<tr>
				<td width="237"><b><font face="Arial" color="#FF0000">- 
				MERCOLEDI' </font></b></td>
				<td>				
					<table border="0" width="30%" cellspacing="0" cellpadding="0">
						<tr>
							<td width="57"><font face="Arial">
							<input type="text" name="mercoledida1" value="<?php echo $mercoledida1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="mercoledia1" value="<?php echo $mercoledia1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="mercoledida2" value="<?php echo $mercoledida2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="mercoledia2" value="<?php echo $mercoledia2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="mercoledida3" value="<?php echo $mercoledida3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="mercoledia3" value="<?php echo $mercoledia3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="mercoldida4" value="<?php echo $mercoldida4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="mercoledia4" value="<?php echo $mercoledia4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="mercoledida5" value="<?php echo $mercoledida5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="mercoledia5" value="<?php echo $mercoledia5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							
							
					</table>
				</td>
			</tr>
      <tr>
				<td width="237"><b><font face="Arial" color="#FF0000">- GIOVEDI'</font></b></td>
				<td>				
					<table border="0" width="31%" cellspacing="0" cellpadding="0">
						<tr>
							<td width="57"><font face="Arial">
							<input type="text" name="giovedida1" value="<?php echo $giovedida1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="giovedia1" value="<?php echo $giovedia1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="giovedida2" value="<?php echo $giovedida2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="giovedia2" value="<?php echo $giovedia2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="giovedida3" value="<?php echo $giovedida3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="giovedia3" value="<?php echo $giovedia3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="giovedida4" value="<?php echo $giovedida4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="giovedia4" value="<?php echo $giovedia4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="giovedida5" value="<?php echo $giovedida5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="giovedia5" value="<?php echo $giovedia5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
						
							
					</table>
				</td>
			</tr>
			<tr>
				<td width="237"><b><font face="Arial" color="#FF0000">- VENERDI'</font></b></td>
				<td>				
					<table border="0" width="32%" cellspacing="0" cellpadding="0">
						<tr>
							<td width="57"><font face="Arial">
							<input type="text" name="venerdida1" value="<?php echo $venerdida1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="venerdia1" value="<?php echo $venerdia1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="venerdida2" value="<?php echo $venerdida2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="venerdia2" value="<?php echo $venerdia2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="venerdida3" value="<?php echo $venerdida3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="venerdida3" value="<?php echo $venerdida3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="venerdida4" value="<?php echo $venerdida4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="venerdia4" value="<?php echo $venerdia4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="venerdida5" value="<?php echo $venerdida5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="venerdia5" value="<?php echo $venerdia5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							
					</table>
				</td>
			</tr>
			<tr>
				<td width="237"><b><font face="Arial" color="#FF0000">- SABATO </font>
				</b></td>
				<td>				
					<table border="0" width="31%" cellspacing="0" cellpadding="0">
						<tr>
							<td width="57"><font face="Arial">
							<input type="text" name="sabatoda1" value="<?php echo $sabatoda1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="sabatoa1" value="<?php echo $sabatoa1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="sabatoda2" value="<?php echo $sabatoda2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="sabatoa2" value="<?php echo $sabatoa2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="sabatoda3" value="<?php echo $sabatoda3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="sabatoa3" value="<?php echo $sabatoa3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">                       
							<input type="text" name="sabatoda4" value="<?php echo $sabatoda4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="sabatoa4" value="<?php echo $sabatoa4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="sabatoda5" value="<?php echo $sabatoda5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="sabatoa5" value="<?php echo $sabatoa5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							
					</table>
				</td>
			</tr>
			<tr>
				<td width="237"><b><font face="Arial" color="#FF0000" >- 
				DOMENICA </font></b></td>
				<td>				
					<table border="0" width="28%" cellspacing="0" cellpadding="0">
						<tr>
							<td width="57"><font face="Arial">
							<input type="text" name="domenicada1" value="<?php echo $domenicada1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="domenicaa1" value="<?php echo $domenicaa1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="domenicada2" value="<?php echo $domenicada2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="domenicaa2" value="<?php echo $domenicaa2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="domenicada3" value="<?php echo $domenicada3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="domenicaa3" value="<?php echo $domenicaa3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="domenicada4" value="<?php echo $domenicada4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="domenicaa4" value="<?php echo $domenicaa4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="domenicada5" value="<?php echo $domenicada5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="domenicaa5" value="<?php echo $domenicaa5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							
					</table>
				</td>
			</tr>
			<tr>
				<td width="237" bgcolor="#669900">&nbsp;</td>
				<td>				
					&nbsp;</td>
			</tr>
			<tr>
				<td width="237"><b><font face="Arial" color="#993300">- 
				ISTRUTTORE 1</font></b></td>
				<td>				
					<p><font face="Arial">
					<input type="text" name="istruttore1" value="<?php echo $istruttore1; ?>" size="50" style="background-color: #C0C0C0"></font></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial">- ISTRUTTORE 2</font></td>
				<td>				
					<p><font face="Arial">
					<input type="text" name="istruttore2" value="<?php echo $istruttore2; ?>" size="50" style="background-color: #C0C0C0"></font></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial">- ARGOMENTO DEL CORSO</font></td>
				<td>				
					<p><font face="Arial">
					<input type="text" name="argomento" value="<?php echo $argomento; ?>" size="100" style="background-color: #C0C0C0"></font></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial">- LUOGO</font></td>
				<td>				
					<font face="Arial">
					<input type="text" name="luogo" value="<?php echo $luogo; ?>" size="50" style="background-color: #C0C0C0"></font></td>
			</tr>
			<tr>
				<td width="237"><font face="Arial">- CERTIFICATO MEDICO</font></td>
				<td>				
					<select size="1" name="certificato">
					<option selected>NO</option>
					<option>SI</option>
					</select></td>
			</tr>
			<tr>
				<td width="237"><font face="Arial">- COSTO X SOCIO</font></td>
				<td>				
					<font face="Arial">
					<input type="text" name="costo" value="<?php echo $costo; ?>" size="20" style="background-color: #C0C0C0"></font></td>
			</tr>
       <input type="hidden" name="ingranaggio" value="1" />
       <input type="hidden" name="login" value="<?php echo $login; ?>" />
       <input type="hidden" name="numerocorso" value="<?php echo $numerocorso; ?>" />
			
		</table>
		</td>
	</tr>
</table>
<p>&nbsp;</p>
</form>

</div>
</div>
<?php }} ?>
</body>

</html>