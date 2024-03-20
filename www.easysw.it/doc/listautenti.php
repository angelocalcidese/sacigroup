<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="index.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php  }
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

 

$oggi=date("Y-m-d");
#header('Content-Type: text/html; charset=utf-8'); 
?>

<html>
<head>

	<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
	<title>Gestione Documenti</title>
<!-- 	<link rel="stylesheet" type="text/css" href="jquery.tablescroll.css"/>   -->

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
<script>
window.onload = function() {
    var image = document.getElementById("img");

    function updateImage() {
        image.src = image.src.split("?")[0] + "?" + new Date().getTime();
    }

    setInterval(updateImage, 1000);
}
</script>
</head>
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
<p align="center"><b><font face="Montserrat" size="4" color="#993300">ELENCO UTENTI</font></b></p>
<p align="center">


<div id="container">
	<table id="thetable" style=" border: 1px solid black;" cellspacing="0" width="100%" class="table6">
	<thead>
		<tr style=" border: 1px solid black;">
		  <td style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" align="center"><font size="3" face="Montserrat"  >Progr.</td>
          <td  style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" align="center"><font size="3" face="Montserrat" >COGNOME</td>
          <td  style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" align="center"><font size="3" face="Montserrat" >NOME</td>
        
      	  <td  style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" align="center"><font size="3" face="Montserrat" >LOGIN</td>
          <td  style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" align="center"><font size="3" face="Montserrat" >PASSWORD</td>
         
          
          <td  style="  border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" align="center"><font size="3" face="Montserrat" ><img border="0" background="btn1.gif" > </td>
      
       </tr>       
	</thead>
	<tbody>

  <?php
   
$annoggi=date("Y");
$sql = "SELECT *  FROM  utenti where  loginorig = '$login' order by cognome";  
#echo $sql;
$rCount = 1;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
	
	{  
      
      $cognome = $macrogruppo["cognome"];
      $nome = $macrogruppo["nome"];
      $loginb = $macrogruppo["login"];
      $password = $macrogruppo["password"];
      $progr = $macrogruppo["progr"];
     
$tot++; 
?>



      
      
	<tr class="first" style=" border: 1px solid black;">
      <td style=" border: 1px solid black;" align="center" bgcolor="<? echo $colore; ?>"><font size="3" face="Montserrat"><?php echo $tot; ?></td>   
      <td style=" border: 1px solid black;" align="center" bgcolor="<? echo $colore; ?>"><font size="3" face="Montserrat"><?php echo $cognome; ?></td>
      <td style=" border: 1px solid black;" align="center" bgcolor="<? echo $colore; ?>"><font size="3" face="Montserrat"><?php echo $nome; ?></td>
      <td style=" border: 1px solid black;" align="center" bgcolor="<? echo $colore; ?>"><font size="3" face="Montserrat"><?php echo $loginb; ?></td>
      <td style=" border: 1px solid black;" align="center" bgcolor="<? echo $colore; ?>"><font size="3" face="Montserrat"><?php echo $password; ?></td>
      
      <td style=" border: 1px solid black;" align="center" ><a  onclick="myFunction('modificautente.php?login=<?php echo $login; ?>&progr=<? echo $progr; ?>');"  ><img border="0" background="btn1.gif" src="pencil.png" width="25" height="25"></a></td>
     </tr>	
<?php }} ?>          
      
      
      
      
      
      
      
		</tr>

	</tbody>
	</table>
</div>
</div>
	<br/>



<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery.tablescroll.js"></script>

<script>
/*<![CDATA[*/

jQuery(document).ready(function($)
{
	$('#thetable').tableScroll({height:750});

	$('#thetable2').tableScroll();
});

/*]]>*/
</script>
<script>
function carica_consegnaA(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=900,height=900,left=150,top=150,location=0,directories=0,toolbar=0,scrollbars=yes,resizable=1')
    
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>
  <script>
function carica_consegnaB(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=1150,height=600,left=50,top=50,location=0,directories=0,toolbar=0')
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script> 
  <script>
function carica_consegnaC(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=800,height=700,left=150,top=150,location=0,directories=0,toolbar=0')
    //location.href = 'http://www.spi.it/root/provascroll/provalistatestata.php';
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>  
  <script>
function carica_consegnaD(url){
	<!-- intestazione -->	
    //popupWindow =
	//	window.open(url,'pdf','width=800,height=700,left=150,top=150,location=0,directories=0,toolbar=0')
    location.href = url;
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>  
<script>
function carica_consegnaF(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=1000,height=300,left=150,top=150,location=0,directories=0,toolbar=0,scrollbars=yes,resizable=1')
    
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>
<script>
function myFunction(url) {
window.open(url, '_self');
}
</script>
  <script>
function carica_consegnaFF(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=900,height=740,left=150,top=150,location=0,directories=0,toolbar=0')
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>
<script>
function myFunctionx() {
  window.open("cerca2storico.php?tessera=<?php echo $tessera; ?>&login=<?php echo $login; ?>&zona=<?php echo $zona; ?>");
}
</script>
</body>
</html>