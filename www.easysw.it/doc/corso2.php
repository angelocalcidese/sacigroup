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
<body >
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
      <td ><a href="menugenerale.php?login=<?php echo $login; ?>">Menu Generale</a>/Lista Corsi</td></tr>
</div>
</div>
<br>
<div align="center">   
<div id="container">
<p align="center"><b><font face="Arial" size="6" color="#993300">ELENCO CORSI</font></b></p> 
<p align="center"><b><font face="Arial" size="4" color="#993300">(<img border="0" background="btn1.gif" src="occhio.png" width="25" height="25"> vedi corso)  (<img border="0" background="btn1.gif" src="pencil.png" width="25" height="25">modifica corso)  (<img border="0" background="btn1.gif" src="associarsi.png" width="25" height="25">aggiungi partecipanti)  (<img border="0" background="btn1.gif" src="gruppo.png" width="25" height="25">elenco partecipanti)</font></b></p>
<div align="center">
<div id="container">
	<table id="thetable" cellspacing="0" width="100%">
	<thead>
		<tr>
		  <td background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">N.</td>
		  <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">N° Corso</td>
      <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">Nome Corso</td>
		  <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">Data inizio</td>
		  <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">Data Fine</td>
		  <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">Istruttore</td>
      <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">Luogo</td>      
		  <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">n° partec.</td> 
      <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">Importo</td>
      <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF"><img border="0" background="btn1.gif" src="occhio.png" width="25" height="25"></td>
	    <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF"><img border="0" background="btn1.gif" src="pencil.png" width="25" height="25"></td>
  
      <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF"><img border="0" background="btn1.gif" src="gruppo.png" width="25" height="25"></td>
   
    </tr>
	</thead>
	<tbody>

  <?php
  $tot=0;
    $sql = "SELECT *  FROM  corso order by datainizio";   
	  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())
	
	{ 
      $numerocorso = $macrogruppo["codicecorso"];
      $nomecorso = $macrogruppo["nomecorso"];
      $datainizio = $macrogruppo["datainizio"];
      $datafine = $macrogruppo["datafine"];
      $istruttore1 = $macrogruppo["istruttore1"];
      $luogo = $macrogruppo["luogo"];
      $costo = $macrogruppo["costo"];
      $tot++;
?>



      
      
	<tr class="first">
      <td align="center"><font size="3"><?php echo $tot; ?></td>
      <td  align="center"><font size="3"><?php echo $numerocorso; ?></td>
      <td  align="center"><font size="3"><?php echo $nomecorso; ?></td>
      <td  align="center"><font size="3"><?php echo $datainizio; ?></td>
      <td  align="center"><font size="3"><?php echo $datafine; ?></td>
      <td  align="center"><font size="3"><?php echo $istruttore1; ?></td>
      <td  align="center"><font size="3"><?php echo $luogo; ?></td>
      <td  align="center"><font size="3"></td>
      <td  align="center"><font size="3"><?php echo $costo; ?></td>
      <td  align="center"><a href="JavaScript:carica_consegnaA('vedicorso.php?codicecorso=<?php echo $numerocorso; ?>');" name="modulo" onSubmit="return controllo();"><img border="0" background="btn1.gif" src="occhio.png" width="25" height="25"></a></td>
      <td  align="center"><a href="JavaScript:carica_consegnaC('stampask2.php?tessera=<?php echo $tessera; ?>');" name="modulo" onSubmit="return controllo();"><img border="0" background="btn1.gif" src="pencil.png" width="25" height="25"></a></td>
      <td  align="center"><a href="JavaScript:carica_consegnaB('listapartecipanticorso.php?corso=<?php echo $numerocorso; ?>');" name="modulo" onSubmit="return controllo();"><img border="0" background="btn1.gif" src="gruppo.png" width="25" height="25"></a></td>
 
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
		window.open(url,'pdf','width=1000,height=650,left=150,top=150,location=0,directories=0,toolbar=0,scrollbars=yes,resizable=1')
    
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
</body>
</html>