<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="index.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php }
$login=$_REQUEST["login"];
?>
<?php 
$ingranaggio=$_REQUEST["ingranaggio"];
 include "conf_DB.php";
if ($ingranaggio==1)
{
 $passwordvecchia=$_REQUEST["passwordvecchia"];
 $passwordnuova=$_REQUEST["passwordnuova"];
 if ($passwordnuova=="")
 {$errore="Password Nuova non Accettata";}
 else
 {

 $trovato=0;
$sql1 = "SELECT * FROM utenti  where login = '$login' and password = '$passwordvecchia'";
#echo $sql1; 
  $result2 = $conn->query($sql1);
if ($result2->num_rows > 0) {
  while($macrogruppo = $result2->fetch_assoc())	
		{ $trovato=1;		 
			}  }
if ($trovato==1) 
{$sql = "UPDATE utenti set 
password = '$passwordnuova'
where 
login = '$login' 
";
if ($conn->query($sql) === FALSE)
    {
    echo "&errore1vcli=errore&";
    } 
    else
    {$errore="Password Cambiata";}
    }
    else
    {$errore="Password Vecchia Errata";}   
}
}
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>messa della carità</title>
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
border-spacing: 1px;
background: #ECE9E0;
color: #656665;
border: 16px solid #B2CAEA;
border-radius: 20px;

}
.table6 th {
font-size: 18px;
padding: 10px;
}
.table6 td {
background: #B3B3D0;
padding: 5px;
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

<div align="center">   
<div id="container">
<form method="POST" action="" name="modulo" onSubmit="return controllo();">
<p align="center"><b><font face="Montserrat" size="4" color="#993300">CAMBIO PASSWORD</font></b></p>
<p align="center"><b><font face="Montserrat" size="4" color="#993300">Inserisci Vecchia e Nuova Password</font></b></p> 
<p><b><font face="Montserrat" color="#FF0000"><?php echo $errore; ?></font></b></p>
<table border="0" width="760" bgcolor="#FFF4F7" class="table6" >
	<tr>
		<td><font face="Montserrat">Password da Cambiare</font></td>
		<td><font face="Montserrat">
		<input type="password" name="passwordvecchia" size="30"></font></td>
	</tr>
	<tr>
		<td><font face="Montserrat">Nuova Password</font></td>
		<td><font face="Montserrat">
		<input type="password" name="passwordnuova" size="30"></font></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
    <input type="hidden" name="ingranaggio" value="1" />
    <input type="hidden" name="login" value="<?php echo $login; ?>" />
		<td><input type="submit" style="height: 22px; background-color: #cc0000;border: 0px; color: #ffffff;" value="Cambio Password" name="B3"></td>
	</tr>
</table>

</form>
</div>
</div>
</body>

</html>