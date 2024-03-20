<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="index.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php }
include "conf_DB.php";
$login=$_REQUEST["login"];
$sql1 = "SELECT * FROM associazione  where login = '$login'";
#echo $sql1; 
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())
		{ 
      
      $logink = $macrogruppo["intesta1"];
      $logink=str_replace("'", "\'", $logink); 
      $intesta2 = $macrogruppo["intesta2"];
      $intesta2=str_replace("'", "\'", $intesta2); 
      $indirizzo = $macrogruppo["indirizzo"];
      $indirizzo=str_replace("'", "\'", $indirizzo);
      $localita = $macrogruppo["localita"];
      $localita=str_replace("'", "\'", $localita);
			}  }
?>
<?php 
$progr=$_REQUEST["progr"];
$ingranaggio=$_REQUEST["ingranaggio"];
if ($ingranaggio==1)
{

 $passwordnuova=$_REQUEST["nuovapassword"];
 
$tipo=$_REQUEST["tipo"];
$classe=$_REQUEST["classe"]; 
$classesic=$_REQUEST["classesic"];
$cognome=$_REQUEST["cognome"];
$nome=$_REQUEST["nome"];

$visualizza=$_REQUEST["visualizza"];
$sql = "UPDATE utenti set 
cognome = '$cognome',
nome = '$nome',
password = '$passwordnuova',
tipo = '$tipo',
classe = '$classe',
classesic = '$classesic',
visualizza = '$visualizza'
where 
progr = '$progr' 
";
if ($conn->query($sql) === TRUE)
    {$errore="Modifica Utente con Successo"; } 
    else { echo "Error inserted record: " . $conn->error; exit; } 
}
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Gestione Documenti</title>
</head>
<style>
div#container {
min-width:   1000px;
  min-height:  500px;
  max-width:  1000px;
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
h1 {
  text-shadow: 2px 2px 4px #999999;
  filter:DropShadow(Color=#000000, OffX=2, OffY=2);
} 
h2 {
  text-shadow: 2px 2px 4px #000000;
  filter:DropShadow(Color=#000000, OffX=2, OffY=2);
}
div.polaroid {
  width: 954px;
  height: 140px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}

div.containerx {
  padding: 10px;
}
.table6x {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 0px;
background: #ECE9E0;
color: #656665;
border: 10px solid #b0adad;
border-radius: 20px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}
.table6x th {
font-size: 18px;
padding: 10px;
}
.table6x td {
background: #ffffff;
padding: 5px;
}   
</style>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;1,100&display=swap');
</style>
<?php 


?>
<body>
<div align="center" >
<table border="0" width="760" height="140" bgcolor="#ffffff"  >
<tr > 
<? include "mettilogo.php"; ?>
</tr> 
<tr> 
<td bgcolor="#FFFFFF" style="border: 0px ; "><a href="menugenerale.php?login=<?php echo $login; ?>&codice=3"><font face="Montserrat">Menù Generale</font></a></td>             
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
<? 
$sql1 = "SELECT * FROM utenti  where progr = '$progr'  ";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{$cognome = $macrogruppo["cognome"];
     $nome = $macrogruppo["nome"];
     $passwordr = $macrogruppo["password"];
     $visualizza = $macrogruppo["visualizza"];
     $tipo = $macrogruppo["tipo"];
     $classer = $macrogruppo["classe"];
     $classesicr = $macrogruppo["classesic"];
    } }
?>
<div align="center">   
<div id="container">
<form method="POST" action="" name="modulo" onSubmit="return controllo();">
<p align="center"><b><font face="Montserrat" size="4" color="#993300">MODIFICA UTENTE</font></b></p>

<p><b><font face="Montserrat" color="#FF0000"><?php echo $errore; ?></font></b></p>
<table id="thetable" style=" border: 1px solid black;" cellspacing="0" width="760" class="table6">

	
	
	<tr class="first" style=" border: 1px solid black;">
		<td style=" border: 1px solid black;" align="left"><font face="Montserrat">Inserisci nuova password</font></td>
		<td style=" border: 1px solid black;" align="left"><font face="Montserrat">
		<input type="text" value="<? echo $passwordr; ?>" name="nuovapassword" size="40" style="font-size: 14pt;"></font></td>
	</tr>

<tr class="first" style=" border: 1px solid black;">
		<td style=" border: 1px solid black;" align="left"><font face="Montserrat">Cognome</font></td>
		<td style=" border: 1px solid black;" align="left"><font face="Montserrat">
		<input  name="cognome" value="<? echo $cognome; ?>" size="40" style="font-size: 14pt;"></font></td>
	</tr>
   <tr class="first" style=" border: 1px solid black;">
		<td style=" border: 1px solid black;" align="left"><font face="Montserrat">Nome</font></td>
		<td style=" border: 1px solid black;" align="left"><font face="Montserrat">
		<input  name="nome" value="<? echo $nome; ?>" size="40" style="font-size: 14pt;"></font></td>
	</tr>
 
    <tr class="first" style=" border: 1px solid black;">
		<td style=" border: 1px solid black;" align="left"><font face="Montserrat">Solo Visualizzazione: </font></td>
		<td style=" border: 1px solid black;" align="left"><font face="Montserrat">
		<select size="1" name="visualizza" style="background-color: #e4dede; border: 0px; font-size: 12pt;" >
         <option <? if($visualizza=="NO"){echo "selected";}?>>NO</option>
         <option <? if($visualizza=="SI"){echo "selected";}?>>SI</option>
         </select>
    </td>     
	</tr>  
    <tr class="first" style=" border: 1px solid black;">
		<td style=" border: 1px solid black;" align="left"><font face="Montserrat">Solo Tipo Documento: </font></td>
		<td style=" border: 1px solid black;" align="left"><font face="Montserrat">
		 <select size="1" name="tipo" style="background-color: #e4dede; border: 0px; font-size: 12pt;" >
         <option <? if($tipo=="TUTTI"){echo "selected";}?>>TUTTI</option>
<?          
            $sql1 = "SELECT *  FROM  tipo where operatore = '$logink' order by descrizione "; 
	        $result = $conn->query($sql1);
            if ($result->num_rows > 0) {
            while($macrogruppo = $result->fetch_assoc()) 
        	{$descrizione = $macrogruppo["descrizione"];
?>			
            <option <? if($tipo==$descrizione){echo "selected";}?>><?php echo $descrizione; ?></option>
            <? }} ?>
			</select></td>
	</tr>  
    <tr class="first" style=" border: 1px solid black;">
		<td style=" border: 1px solid black;" align="left"><font face="Montserrat">Solo Classe: </font></td>
		<td style=" border: 1px solid black;" align="left" ><font face="Montserrat">
		<select size="1" name="classe" style="font-size: 12pt; background-color: #e4dede; border: 0px;" >
        <option <? if($classer=="TUTTE"){echo "selected";}?>>TUTTE</option>
<?          
            $sql1 = "SELECT *  FROM  classe where operatore = '$logink' order by descrizione "; 
	        $result = $conn->query($sql1);
            if ($result->num_rows > 0) {
            while($macrogruppo = $result->fetch_assoc()) 
        	{$descrizione = $macrogruppo["descrizione"];
?>			
            <option <? if($classer==$descrizione){echo "selected";}?>><?php echo $descrizione; ?></option>
            <? }} ?>
			</select>
			</td>
	</tr>      
   <tr class="first" style=" border: 1px solid black;">
		<td style=" border: 1px solid black;" align="left"><font face="Montserrat">Limite Riservatezza: </font></td>
		<td style=" border: 1px solid black;" align="left"><font face="Montserrat">
	    <select size="1" name="classesic" style="font-size: 12pt; background-color: #e4dede; border: 0px;" >
        <option <? if($classesic=="TUTTE"){echo "selected";}?>>TUTTE</option>
<?          
            $sql1 = "SELECT *  FROM  classesic where operatore = '$logink' order by descrizione "; 
	        $result = $conn->query($sql1);
            if ($result->num_rows > 0) {
            while($macrogruppo = $result->fetch_assoc()) 
        	{$descrizione = $macrogruppo["descrizione"];
?>			
            <option <? if($classesic==$descrizione){echo "selected";}?>><?php echo $descrizione; ?></option>
            <? }} ?>
			</select></td>
	</tr>
    
	<tr class="first" style=" border: 1px solid black;">
		<td style=" border: 1px solid black;" align="left">&nbsp;</td>
    <input type="hidden" name="ingranaggio" value="1" />
    <input type="hidden" name="login" value="<?php echo $login; ?>" />
    <input type="hidden" name="progr" value="<?php echo $progr; ?>" />
		<td style=" border: 1px solid black;" align="left"><input type="submit" value="Modifica Utente" name="B3"></td>
	</tr>
</table>

</form>
</div>
</div>
</body>

</html>