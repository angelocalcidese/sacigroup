<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="pomaindex.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php  }
$login=$_REQUEST["login"];
$zona=$_REQUEST["zona"];
include "conf_DB.php";
$esercizio=$_REQUEST["esercizio"];
$mastro=$_REQUEST["mastro"];
$sottomastro=$_REQUEST["sottomastro"];
$conto=$_REQUEST["conto"];
$causale=$_REQUEST["causale"];

$da=$_REQUEST["da"];
$giorno=explode("/",$da);
$da=$giorno[2]."-".$giorno[1]."-".$giorno[0];

$a=$_REQUEST["a"];
$giorno=explode("/",$a);
$a=$giorno[2]."-".$giorno[1]."-".$giorno[0];

$importo=$_REQUEST["importo"];
$tipodocumento=$_REQUEST["tipodocumento"];
#echo "tipo".$tipodocumento. "<br>";
$numdocumento=$_REQUEST["numdocumento"];
$note=$_REQUEST["note"];
if ($note!="")
   {$note=$note."%"; }
$datainserimento=$_REQUEST["datainserimento"];
if ($datainserimento!="")
   {
    $giorno=explode("/",$datainserimento);
    $datainserimento=$giorno[2]."-".$giorno[1]."-".$giorno[0];  
    $datainserimento=$datainserimento."%"; 
   }
$causale5=substr($causale, 0, 5);
if ($causale5!="TUTTI")
    {$causale=substr($causale, 0, 2); }

if ($esercizio=="TUTTI" or $esercizio=="" ){$selesercizio="";}else{$selesercizio="and esercizio = '$esercizio'";}
if ($mastro=="TUTTI" or $mastro=="" ){$selmastro="";}else{$selmastro="and mastro = '$mastro'";}
if ($sottomastro=="TUTTI" or $sottomastro=="" ){$selsottomastro="";}else{$selsottomastro="and sottomastro = '$sottomastro'";}
if ($conto=="TUTTI" or $conto=="" ){$selconto="";}else{$selconto="and conto = '$conto'";}
if ($causale5=="TUTTI" or $causale=="" ){$selcausale="";}else{$selcausale="and causale = '$causale'";}
if ($importo=="" ){$selimporto="";}else{$selimporto="and importo = '$importo'";}
if ($tipodocumento=="TUTTI" or $tipodocumento=="" ){$seltipodocumento="";}else{$seltipodocumento="and tipodocumento = '$tipodocumento'";}
if ($numdocumento=="" ){$selnumdocumento="";}else{$selnumdocumento="and numdocumento = '$numdocumento'";}
if ($note=="" ){$selnote="";}else{$selnote="and note like '$note'";}
if ($datainserimento=="" ){$datainserimento="";}else{$seldatainserimento="and data_inserimento like '$datainserimento'";}



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
      <td ><a href="menugenerale.php?login=<?php echo $login; ?>&zona=<? echo $zona; ?>">Menu Generale</a>/Elenco Volontari</td></tr>
</div>
</div>
<br>
<div align="center">   
<div id="container">
<p align="center"><b><font face="Arial" size="6" color="#993300">ELENCO VOLONTARI</font></b></p>
<p align="center"><b><font face="Arial" size="3" color="#993300"><? echo $zona; ?></font></b></p>
<p align="center"><b> (<img border="0" background="btn1.gif" src="x.png" width="25" height="25">Cancella Volontario) </font></b></p>
 
<div align="center">
<div id="container">
	<table id="thetable" cellspacing="0" width="100%">
	<thead>
		<tr>
		  <td background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">N.</td>
       <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">Codice</td>
        <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">Cognome</td>
		  <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">Nome</td>
      <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">Cellulare</td>
		       
      <!-- <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF"><img border="0" background="btn1.gif" ></td>    --> 
	    <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF"><img border="0" background="btn1.gif" ></td>
      <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF"><img border="0" background="pencil.png" ></td>
     
    </tr>
	</thead>
	<tbody>

  <?php
$totale=0;
$sql = "SELECT *  FROM  volontari  
where nazione = 'ITALIA' and citta = 'MILANO' and zona = '$zona'"; 
#echo $sql;
$rCount = 1;
	$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
	
	{  
  
   	
      $tot++;
      $progr = $macrogruppo["progr"];
      $codice = $macrogruppo["codice"];
      $cognome = $macrogruppo["cognome"];
      $nome = $macrogruppo["nome"];
      $cellulare = $macrogruppo["cellulare"];
      

?>



      
      
	<tr class="first">
      <td align="center"><font size="3"><?php echo $tot; ?></td>
      <td align="center"><font size="3"><?php echo $codice; ?></td>
      <td  align="center"><font size="3"><?php echo $cognome; ?></td>
      <td  align="center"><font size="3"><?php echo $nome; ?></td>
      <td  align="center"><font size="3"><?php echo $cellulare; ?></td>
      
      
<!--      <td  align="center"><a href="JavaScript:carica_consegnaA('modmavcont.php?tessera=<?php echo $progr; ?>');" name="modulo" onSubmit="return controllo();"><img border="0" background="btn1.gif" src="pencil.png" width="25" height="25"></a></td>    -->
      <td  align="center"><a href="JavaScript:carica_consegnaC('cancmovcont.php?tessera=<?php echo $progr; ?>');" name="modulo" onSubmit="return controllo();"><img border="0" background="btn1.gif" src="x.png" width="25" height="25"></a></td>
      <td  align="center"><a href="JavaScript:carica_consegnaC('cancmovcont.php?tessera=<?php echo $progr; ?>');" name="modulo" onSubmit="return controllo();"><img border="0" background="btn1.gif" src="x.png" width="25" height="25"></a></td>
    
    </tr>	
<?php } }?>          
      
      

      
      
      
      
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
		window.open(url,'pdf','width=800,height=300,left=150,top=150,location=0,directories=0,toolbar=0')
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