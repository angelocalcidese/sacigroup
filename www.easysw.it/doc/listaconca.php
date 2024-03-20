<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="pomaindex.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php  }
$login=$_REQUEST["login"];

include "conf_DB.php";


$oggi=date("Y-m-d");
#header('Content-Type: text/html; charset=utf-8'); 
?>

<html>
<head>

	<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
	<title>Esponi Socio</title>
	<link rel="stylesheet" type="text/css" href="jquery.tablescroll.css"/>
<style>
div#container {
min-width:   955px;
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
    border: 1px solid black;    
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
</style>
</head>
<body>
<div align="center">
	<table border="0" width="30%">
		<tr>
			<td>
			<img border="0" src="carlopoma.png" width="954" height="140"></td>
		</tr>
</table> 
  </div>
  <div align="center">
<div id="containerx" align="left"> 
      <td ><a href="menugenerale.php?login=<?php echo $login; ?>">Menu Generale</a>/<a href="menutabelle.php?login=<?php echo $login; ?>">Menu' Tabelle</a>/Lista Concatenazioni</td></tr>
</div>
</div>
<br>
<div align="center">   
<div id="container">
<p align="center"><b><font face="Arial" size="6" color="#993300">CONCATENAZIONI</font></b></p>
<p align="center"><b><font face="Arial" size="4" color="#993300">(<img border="0" background="btn1.gif" src="pencil.png" width="25" height="25">modifica sk concatenazione)  </font></b></p>
 
<div align="center">
<div id="container">
	<table id="thetable" cellspacing="0" width="100%">
	<thead>
		<tr>
		  <td background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">Esercizio</td>
      <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">Causale Base</td>
      <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">Descrizione</td>
		  <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">Causale concatenato</td>
      <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">Descrizione</td>         
		  <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF"><img border="0" background="btn1.gif" ></td>
      </tr>
	</thead>
	<tbody>

  <?php
$sql = "SELECT *  FROM  corre order by causale "; 
       
#echo $sql;
$rCount = 1;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
	
	{ 
      $anno = $macrogruppo["esercizio"];
      $causale = $macrogruppo["causale"];
      $causale1 = $macrogruppo["causale1"];
      
$sqlx = "SELECT *  FROM  causale where esercizio = '$anno' and codice = '$causale' "; 
$result1 = $conn->query($sqlx);
if ($result1->num_rows > 0) {
  while($macrogruppo1 = $result1->fetch_assoc())
	{  $descrizione = $macrogruppo1["descrizione"]; } }  
   
$sqlx = "SELECT *  FROM  causale where esercizio = '$anno' and codice = '$causale1' "; 
	$resultx = $conn->query($sqlx);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc())
	{  $descrizione1 = $macrogruppox["descrizione"]; } }        
?>



      
      
	<tr class="first">
      <td align="center"><font size="3"><?php echo $anno; ?></td>
      <td  align="center"><font size="3"><?php echo $causale; ?></td>
      <td  align="center"><font size="3"><?php echo $descrizione; ?></td>
      <td  align="center"><font size="3"><?php echo $causale1; ?></td>
      <td  align="center"><font size="3"><?php echo $descrizione1; ?></td>
      <td  align="center"><a href="JavaScript:carica_consegnaA('modificaconca.php?anno=<?php echo $anno; ?>&causale=<?php echo $causale; ?>&causale1=<?php echo $causale1; ?>');" ><img border="0" background="btn1.gif" src="pencil.png" width="25" height="25"></a></td>
      
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
		window.open(url,'pdf','width=800,height=600,left=150,top=150,location=0,directories=0,toolbar=0,scrollbars=yes,resizable=1')
    
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>
  <script>
function carica_consegnaB(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
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
</body>
</html>