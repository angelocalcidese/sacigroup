<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="index.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php }
$login=$_REQUEST["login"];
$zona=$_REQUEST["zona"];
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Abacus ricerca Soci</title>
</head>
<style>
div#container {
min-width:   800px;
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

</style>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;1,100&display=swap');
</style>
<?php 


$cognome=$_REQUEST["cognome"];
$nome=$_REQUEST["nome"];
$natoa=$_REQUEST["natoa"];
$datanascita=$_REQUEST["datanascita"];
$residentecitta=$_REQUEST["residentecitta"];
$provnatoa=$_REQUEST["provnatoa"];
$indirizzores=$_REQUEST["indirizzores"];
$cap=$_REQUEST["cap"];
$email=$_REQUEST["email"];
$telefono=$_REQUEST["telefono"];
$cellulare=$_REQUEST["cellulare"];
$codfisc=$_REQUEST["codfisc"];
$residenteprov=$_REQUEST["residenteprov"];


?>
<?php 
include "conf_DB.php";
?>
<body>
<div align="center" >
<table border="0" width="760" height="140" bgcolor="#ffffff"  >
<tr > 
<? include "mettilogo.php"; ?>
</tr> 
<tr> 
<td bgcolor="#FFFFFF" style="border: 0px ; "><a href="menugenerale.php?login=<?php echo $login; ?>&codice=1"><font face="Montserrat">Menù Generale</font></a></td>             
<?php
$sql1 = "SELECT * FROM associazione  where login = '$login'";
#echo $sql1; 
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())
		{ 
      
      $btempo = $macrogruppo["btempo"];
			}  }

$sql1 = "SELECT * FROM utenti  where login = '$login'  ";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{$codvolontario = $macrogruppo["codvolontario"];
     $dio = $macrogruppo["dio"];
     $cognomevol = $macrogruppo["cognome"];
     $nomevol = $macrogruppo["nome"];
    } }
if($dio=="1"){$dicidio="amm.";}else{$dicidio="utente";}
?>           
<td bgcolor="#FFFFFF" align="right" style="border: 0px ; "><font face="Montserrat"><? echo $codvolontario." - ".$cognomevol." ".$nomevol." - ".$dicidio; ?></font></td>         
</tr>
</table> 
     
<br>      
</div> 

<div align="center">   
<div id="container">
<form method="POST" action="cerca2doc.php?login=<? echo $login; ?>&zona=<? echo $zona; ?>" name="modulo" onSubmit="return controllo();">
<p align="center"><b><font face="Montserrat" size="4" color="#993300">RICERCA 
 DOCUMENTI</font></b></p>
<p align="center"><b><font face="Montserrat" size="4" color="#993300">Inserisci Parametro di Ricerca</font></b></p> 
<table id="thetable" style=" border: 1px solid black;" cellspacing="0" width="100%" class="table6">	
	
			  <tr>
            <td width="40%" style=" border: 1px solid black; font-size: 11pt;"><font face="Montserrat" color="#000000">TIPO DOCUMENTO: </td>
            <td width="60%" style=" border: 1px solid black;">
            <font color="#FFFFFF">
            <select size="1" name="tipo" style="background-color: #e4dede; border: 0px; font-size: 11pt; color: #8b8f90;" >
            <option >TUTTI</option>
<?          
            $sql1 = "SELECT *  FROM  tipo  order by descrizione "; 
	        $result = $conn->query($sql1);
            if ($result->num_rows > 0) {
            while($macrogruppo = $result->fetch_assoc()) 
        	{$descrizione = $macrogruppo["descrizione"];
?>			
            <option ><?php echo $descrizione; ?></option>
            <? }} ?>
			</select>
			</td>
			</tr>
              <tr>
            <td style=" border: 1px solid black; font-size: 11pt;"><font face="Montserrat" color="#000000">CLASSIFICAZIONE: </td>
            <td style=" border: 1px solid black;">
            <font color="#FFFFFF">
            <select size="1" name="classe" style="font-size: 11pt; background-color: #e4dede; border: 0px; color: #8b8f90;" >
            <option >TUTTI</option>
<?          
            $sql1 = "SELECT *  FROM  classe  order by descrizione "; 
	        $result = $conn->query($sql1);
            if ($result->num_rows > 0) {
            while($macrogruppo = $result->fetch_assoc()) 
        	{$descrizione = $macrogruppo["descrizione"];
            
?>			
            <option ><?php echo $descrizione; ?></option>
            <? }} ?>
			</select>
			</td>
			</tr>
            <tr>
            <td style=" border: 1px solid black; font-size: 11pt;"><font face="Montserrat" color="#000000">CLASSE RISERVATEZZA: </td>
            <td style=" border: 1px solid black;">
            <font color="#FFFFFF">
            <select size="1" name="classesic" style="font-size: 11pt; background-color: #e4dede; border: 0px; color: #8b8f90;" >
            <option >TUTTI</option>
<?          
            $sql1 = "SELECT *  FROM  classesic  order by descrizione "; 
	        $result = $conn->query($sql1);
            if ($result->num_rows > 0) {
            while($macrogruppo = $result->fetch_assoc()) 
        	{$descrizione = $macrogruppo["descrizione"];
?>			
            <option ><?php echo $descrizione; ?></option>
            <? }} ?>
			</select>
			</td>
			</tr>
            <tr>
            <td style=" border: 1px solid black; font-size: 11pt;"><font face="Montserrat" color="#000000">N. IDENTIFICATIVO DOCUMENTO: </td>
            <td style=" border: 1px solid black;">
            <input type="text" name="numero"  size="30" style="background-color: #e4dede; border: 0px; font-size: 11pt; color: #8b8f90;">
			</td>
			</tr>
            <tr>
            <td style=" border: 1px solid black; font-size: 11pt;"><font face="Montserrat" color="#000000">NUMERO PROTOCOLLO: </td>
            <td style=" border: 1px solid black;">
            <input type="text" name="protocollo"  size="30" style="background-color: #e4dede; border: 0px; font-size: 11pt; color: #8b8f90;">
			</td>
			</tr>
            <tr>
            <td style=" border: 1px solid black; font-size: 11pt;"><font face="Montserrat" color="#000000">POSIZIONE FISICA DI ARCHIVIAZIONE: </td>
            <td style=" border: 1px solid black;">
            <input type="text" name="posizione"  size="30" style="background-color: #e4dede; border: 0px; font-size: 11pt; color: #8b8f90;">
			</td>
			</tr>
            <tr>
            <td style=" border: 1px solid black; font-size: 11pt;"><font face="Montserrat" color="#000000">RICERCA PARZIALE NELL'OGGETTO: </td>
            <td style=" border: 1px solid black;">
            <input type="text" name="oggetto"  size="55" style="background-color: #e4dede; border: 0px; font-size: 11pt; color: #8b8f90;">
			</td>
			</tr>
            <tr>
	   
      
       <input type="hidden" name="ingranaggio" value="1" />
       <input type="hidden" name="login" value="<?php echo $login; ?>" />
       <input type="hidden" name="zona" value="<?php echo $zona; ?>" />
			<tr>
				<td width="260">&nbsp;</td>
				<td><input type="submit" value="Ricerca" style="height: 22px; background-color: #cc0000;border: 0px; color: #ffffff;" name="B3"></td>
			</tr>
		</table>
	
<p>&nbsp;</p>
</form>
</div>
</div>
</body>

</html>