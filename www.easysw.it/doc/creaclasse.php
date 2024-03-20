<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="pomaindex.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php
}
include "conf_DB.php";

$login=$_REQUEST["login"]; 
$sql1 = "SELECT * FROM associazione  where login = '$login'";
#echo $sql1; 
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())
		{ 
      
      $logink = $macrogruppo["loginorig"];
      #echo $logink; exit;
      
			}  }
$zona=$_REQUEST["zona"];
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Tipo documenti</title> 
</head>
<style>
div#container {
min-width:   1000px;
  min-height:  500px;
  max-width:  955px;
  max-height: 1000px;
}
div#containerx {
min-width:   955px;
  min-height:  5px;
  max-width:  955px;
  max-height: 5px;
}
div#sottocontainer {
min-width:   800px;
  min-height:  500px;
  max-width:  800px;
  max-height: 1000px;
}
</style>  
<style>
table, th, td {
    border: 0px solid black;
    font-family: "Montserrat", "Lucida Grande", Sans-Serif;    
}
</style>
<style>
tr {
  background-image: url("btn1.gif");
}
 
tr:hover {
    background-image: url("back-barra-menuorrizontale1.gif");
}
</style>
<style>
a:link, a:visited {
  text-decoration: none; 
    font-weight: normal;
    color: #000000
}

a:hover {
  color: black;
 
  text-decoration: none;
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

</style>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;1,100&display=swap');
</style>
<script type="text/javascript">
		
		function controllo(){ 
            with(document.modulo) { 

        if(descrizione.value=="") { 
            alert("Error: manca DESCRIZIONE PRESTAZIONE"); 
            descrizione.focus(); 
            return false; 
                            } 
                                                                   
					                                                                                                                    
                                  } 
        } 
</script>
<?php 

$login=$_REQUEST["login"];
$ingranaggio=$_REQUEST["ingranaggio"];
$erroreriferimento="";
if ($ingranaggio==1)
   {
$codice=$_REQUEST["codice"];  
$descrizione=$_REQUEST["descrizione"];  
$oggi=date("Y-m-d H:m:s");
   $sql = "INSERT INTO `classe`(

   `descrizione`,
   `datacreazione`, 
   `operatore`
   ) 
   VALUES (

   '$descrizione',
   CURRENT_TIMESTAMP,
   '$logink')";
   #echo $sql; exit;
if ($conn->query($sql) === FALSE) 
    {
    $erroreriferimento="errore codice volontario già esistente";
    } 
    else
     {
  
     $url_pagina_chiamante="creaclasse.php?login=".$login;?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script> 
    <?php }
   }
   




?>
<body>
<div align="center" >
<table border="0" width="760" height="140" bgcolor="#ffffff"  >
<tr > 
<? include "mettilogo.php"; ?>
</tr> 
<tr> 
<td bgcolor="#FFFFFF" style="border: 0px ; "><a href="menugenerale.php?login=<?php echo $login; ?>&codice=2">Menù Generale</a></td>             
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
<td bgcolor="#FFFFFF" align="right" style="border: 0px ; "><? echo $codvolontario." - ".$cognomevol." ".$nomevol." - ".$dicidio; ?></td>         
</tr>
</table> 
     
<br>      
</div> 

<div align="center">   
<div id="container">
<form method="POST" action="creaclasse.php?login=<? echo $login; ?>" name="modulo" onSubmit="return controllo();">
<h1>
<p align="center"><b><font face="Montserrat" size="4" color="#993300">INSERIMENTO 
TABELLA CLASSE DOCUMENTO</font></b></p></h1><h2> 
<div style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 20px;" >
<table border="1" width="100%" bgcolor="#FFF4F7" class="table6">
<tr>
<td></td>		
<td style="color: #000000; font-size: 20px;" ><font face="Montserrat">CLASSE DOCUMENTO gia' Inseriti</font></td>
</tr>
<?php
$sql1 = "SELECT * FROM `classe` where operatore = '$logink' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{  
      $descrizione = $macrogruppo["descrizione"];
      #echo $descrizione;	
      $tot++;
?>
<tr>
<td style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" >(<? echo $tot; ?>)</td>	
<td style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" ><? echo $descrizione; ?></td>
</tr>	
<?php } } ?>

<tr>
<td></td>		
<td style="color: #000000; font-size: 20px;" ><font face="Montserrat">Inserimento nuovo Classe Documento</font></td>
</tr>


      <tr>
				<td ><font face="Montserrat" color="#ffffff">- CLASSE DOCUMENTO</font></td>
				<td>				
					<p>
					<input type="text" name="descrizione"  size="60" style="background-color: #ececee;border:0 none;font-size: 20px;"" maxlength="70">
					</p>
				</td>			
				</tr>  
		





      
      
      
       <input type="hidden" name="ingranaggio" value="1" />
       <input type="hidden" name="login" value="<?php echo $login; ?>" />
       
			<tr>
				<td width="237">&nbsp;</td>
				<td><input type="submit" style="height: 22px; background-color: #cc0000;border: 0px; color: #ffffff;" value="Inserisci" name="B3"></td>
			</tr>
		</table>

</form>
</div>
</div>

</body>

</html>