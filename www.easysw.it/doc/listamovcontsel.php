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
	<title>movimenti contabili</title>
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
      <td ><a href="menugenerale.php?login=<?php echo $login; ?>">Menu Generale</a>/Seleziona movimenti contabili</td></tr>
</div>
</div>
<br>
<div align="center">   
<div id="container">
<p align="center"><b><font face="Arial" size="6" color="#993300">SELEZIONA MOVIMENTI CONTABILI PER VISUALIZZARLI</font></b></p>
 
<div align="center">
<div id="container">
<form method="POST" action="listamovcont.php?login=<?php echo $login; ?>">
<table border="1" width="100%" bgcolor="#6699FF">
	<tr>
		<td>
		
		
		
		<p><b><font face="Arial" color="#333333">ESERCIZIO</font></b></td>
		<td>
		
			<p><font face="Arial"><select size="1" name="esercizio">
			<option selected>TUTTI</option>
			<option>2017</option>
			<option>2018</option>
			<option>2019</option>
			<option>2020</option>
			</select>

&nbsp;</font></td>
	</tr>
	<tr>
<?php

?>
		<td><b><font face="Arial" color="#333333">MASTRO</font></b></td>
		<td><font face="Arial"><select size="1" name="mastro">
    <option selected>TUTTI</option>
    	<option>0000</option>
			<option>0001</option>
			<option>0002</option>
			<option>0003</option>
      <option>0004</option>
			<option>0005</option>
			<option>0006</option>
			<option>0007</option>
      <option>0008</option>
			<option>0009</option>
			<option>0010</option>
      </select></font></td>
	</tr>
	<tr>
		<td><b><font face="Arial" color="#333333">SOTTOMASTRO</font></b></td>
		<td><font face="Arial"><select size="1" name="sottomastro">
     <option selected>TUTTI</option>
    	<option>0000</option>
			<option>0001</option>
			<option>0002</option>
			<option>0003</option>
      <option>0004</option>
			<option>0005</option>
			<option>0006</option>
			<option>0007</option>
      <option>0008</option>
			<option>0009</option>
			<option>0010</option>
      </select></font></td>
    </select></font></td>
	</tr>
	<tr>
		<td><b><font face="Arial" color="#333333">CONTO</font></b></td>
		<td><font face="Arial"><select size="1" name="conto">
     <option selected>TUTTI</option>
    	<option>0000</option>
			<option>0001</option>
			<option>0002</option>
			<option>0003</option>
      <option>0004</option>
			<option>0005</option>
			<option>0006</option>
			<option>0007</option>
      <option>0008</option>
			<option>0009</option>
			<option>0010</option>
      </select></font></td>
    </select></font></td>
	</tr>
  
  
	<tr>

		<td><b><font face="Arial" color="#333333">CAUSALE</font></b></td>
		<td><font face="Arial"><select size="1" name="causale">
    <option selected>TUTTI</option>
<?php 
$sql = "SELECT *  FROM  causale order by codice"; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
	{   
      $codice = $macrogruppo["codice"];  
      $descrizione = $macrogruppo["descrizione"]; 
      $codicex=$codice." / ".$descrizione;
?>    
    <option><?php echo $codicex; ?></option>
<?php } }?>
    </select></font></td>
	</tr>
  
  
	<tr>
		<td><b><font face="Arial" color="#333333">DA DATA</font></b></td>
		<td><font face="Arial"><input type="text" name="da" value="01/01/0001" size="15"></font></td>
	</tr>
	<tr>
		<td><b><font face="Arial" color="#333333">A DATA</font></b></td>
		<td><font face="Arial"><input type="text" name="a" value="31/12/2020" size="15"></font></td>
	</tr>
	<tr>
		<td><b><font face="Arial" color="#333333">IMPORTO</font></b></td>
		<td><font face="Arial"><input type="text" name="importo" size="15"></font></td>
	</tr>
	<tr>
		<td><b><font face="Arial" color="#333333">TIPO DOCUMENTO</font></b></td>
		<td><font face="Arial"><select size="1" name="tipodocumento">
    <option selected>TUTTI</option>
    	<option>GEN</option>
			<option>LET</option>
      <option>FAT</option>
			<option>RIC</option>
    </select></font></td>
	</tr>
	<tr>
		<td><b><font face="Arial" color="#333333">NUMERO DOCUMENTO</font></b></td>
		<td><font face="Arial"><input type="text" name="numdocumento" size="15"></font></td>
	</tr>
	<tr>
		<td><b><font face="Arial" color="#333333">NOTE</font></b></td>
		<td><font face="Arial"><input type="text" name="note" size="60"></font></td>
	</tr>
	<tr>
		<td><b><font face="Arial" color="#333333">DATA INSERIMENTO</font></b></td>
		<td>
		
			<p><font face="Arial">
			<input type="text" name="datainserimento" size="15"></font></p></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><font face="Arial"><input type="submit" value="Seleziona" name="B1"><input type="reset" value="Reset" name="B2"></font></td>
		</form>
	</tr>
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
		window.open(url,'pdf','width=600,height=800,left=150,top=150,location=0,directories=0,toolbar=0,scrollbars=yes,resizable=1')
    
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