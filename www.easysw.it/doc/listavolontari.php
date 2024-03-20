<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="index.php";  ?>
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
tr {
  background-image: url("btn1.gif");
}
 
tr:hover {
    background-image: url("back-barra-menuorrizontale1.gif");
}
</style>
<style>
	html{
		height:100%;
	}
	body{
		font-family: Trebuchet MS, Lucida Sans Unicode, Arial, sans-serif;
		font-size:0.8em;
		margin:0px;
		padding:0px;

		background-color:#ffffff;
		height:100%;
		text-align:center;
	}
	.clear{
		clear:both;
	}

	#mainContainer{
		width:760px;
    height:500px;
		text-align:left;
		margin:0 auto;
		background-color: #FFF;
		border-left:1px solid #000;
		border-right:1px solid #000;
		height:100%;
	}

	#topBar{
		width:1060px;
		height:100px;
	}
	#leftMenu{
		width:200px;
		padding-left:10px;
		padding-right:10px;
		float:left;
	}
	#mainContent{
		width: 520px;
		padding-right:10px;
		float:left;
	}
	/*
	General rules
	*/
	/* 	Layout CSS */
	#dhtmlgoodies_slidedown_menu{

		visibility:hidden;
		border:0px solid #ffffff;
		padding:1px;
    border-radius: 10px;
    border-style: groove;
		width: 750px;	/* IE 5.x */
		width/* */:/**/750px;	/* Other browsers */
		width: /**/750px;

	}

	/* All A tags - i.e menu items. */
	#dhtmlgoodies_slidedown_menu a{
		color: #000;
		text-decoration:none;
		display:block;
		clear:both;
    text-shadow: 2px 2px 4px #999999;
  filter:DropShadow(Color=#000000, OffX=2, OffY=2);
		padding-left:2px;

		width: 182px;	/* IE 5.x */
		width/* */:/**/170px;	/* Other browsers */
		width: /**/170px;

	}

	img{
		border:0px;
	}

	/*
	A tags
	*/
	#dhtmlgoodies_slidedown_menu .slMenuItem_depth1{	/* Main menu items */
		margin-top:1px;
		font-weight:bold;
		background-color:#0051ba;
		color:#fff;
		background-image:url('btn1_active.gif');
		height:30px;
    width:740px;
		line-height:30px;
		vertical-align:middle;
		padding-left:10px;
		border-left:0px solid #000;
		border-right:0px solid #000;
    border-radius: 10px;
	}
#dhtmlgoodies_slidedown_menu .slMenuItem_depth1:hover {
 transform: scale(1, 1);/* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
 background-image:url('barra_contatti.gif');
 color:#fff;
   }
	#dhtmlgoodies_slidedown_menu .slMenuItem_depth2{	/* Sub menu items */
		margin-top:1px;
		text-align:center;
		font-weight:bold;
	}
	#dhtmlgoodies_slidedown_menu .slMenuItem_depth3{	/* Sub menu items */
		margin-top:1px;
		font-style:italic;
		color:blue;
	}
	#dhtmlgoodies_slidedown_menu .slMenuItem_depth4{	/* Sub menu items */
		margin-top:1px;
		color:red;
	}
	#dhtmlgoodies_slidedown_menu .slMenuItem_depth5{	/* Sub menu items */
		margin-top:1px;
	}

	/* UL tags, i.e group of menu utems.
	It's important to add style to the UL if you're specifying margins. If not, assign the style directly
	to the parent DIV, i.e.

	#dhtmlgoodies_slidedown_menu .slideMenuDiv1

	instead of

	#dhtmlgoodies_slidedown_menu .slideMenuDiv1 ul
	*/

	#dhtmlgoodies_slidedown_menu .slideMenuDiv1 ul{
		padding:1px;
	}
	#dhtmlgoodies_slidedown_menu .slideMenuDiv2 ul{
  padding:1px;
	}
	#dhtmlgoodies_slidedown_menu .slideMenuDiv3 ul{
		margin-left:10px;
		padding:1px;
	}
	#dhtmlgoodies_slidedown_menu .slMenuItem_depth4 ul{
		margin-left:15px;
		padding:1px;
	}  
  .bordered {
    width: 170px;
    height: 140px;
    padding: 20px;

    border-radius: 8px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
.bordered:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
   }
  .bordered1 {
    width: 726px;
    height: 400px;
    padding: 20px;

    border-radius: 8px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
.bordered1:hover {
  transform: scale(1.0); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
   }   
h1 {
  text-shadow: 2px 2px 4px #999999;
  filter:DropShadow(Color=#000000, OffX=2, OffY=2);
}  
div.polaroid {
  width: 400px;
  height: 140px;
  border-radius: 8px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}

div.containerx {
  padding: 10px;
}
.table6 {
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
.table6 th {
font-size: 18px;
padding: 10px;
}
.table6 td {
background: #ffffff;
padding: 5px;
}
</style>
</head>
<body>
<div align="center" >
	<table border="0" width="760" height="140" bgcolor="#ffffff"  >
		<tr > 
			<td colspan="2" style="border-radius: 20px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"">
      <div align="center">
			<img border="0" src="carlopoma.png" width="400" height="140"> <br>
      </div>
      </td>
      </tr>
   <tr> 

<td bgcolor="#FFFFFF" style="border: 0px ; "><a href="menugenerale.php?login=<?php echo $login; ?>&zona=<? echo $zona; ?>">Menu Generale</a>/Lista Volontari</td>             

	



<?php
$sql1 = "SELECT * FROM utenti  where login = '$login'  and nazione = 'ITALIA' and citta = 'MILANO' and zona = '$zona'";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{$codvolontario = $macrogruppo["codvolontario"];
     $dio = $macrogruppo["dio"];
    } }
if($dio=="1"){$dicidio="amm.";}else{$dicidio="utente";}
$sql1 = "SELECT * FROM volontari  where codice = '$codvolontario'  and nazione = 'ITALIA' and citta = 'MILANO' and zona = '$zona'";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{$cognomevol = $macrogruppo["cognome"];
     $nomevol = $macrogruppo["nome"];
    } }
?>           
      <td bgcolor="#FFFFFF" align="right" style="border: 0px ; "><? echo $codvolontario." - ".$cognomevol." ".$nomevol." - ".$dicidio; ?></td>         
     </tr>
     </table> 
     <table  style="width: 60em; border: 0px ; border-bottom: 0px;">
     <tr>
     <td bgcolor="#FFFFFF" align="center" style="border: 0px ; "><b><font face="Arial" size="3" color="#993300"><br><? echo $zona; ?></font></b></td>             
     </tr>
</tr>     
	</table>       
</div>    







<div align="center">   
<div id="container">
<p align="center"><b><font face="Arial" size="6" color="#993300">ELENCO VOLONTARI</font></b></p>

<b> (<img border="0" background="btn1.gif" src="pencil.png" width="25" height="25">modifica Volontario) </font></b>
<b> (<img border="0" background="btn1.gif" src="occhio.png" width="25" height="25">Vedi Volontario) </font></b></p>
 
<div align="center">
<div id="container">
	<table id="thetable" border="1" cellspacing="0" width="100%" ">
	<thead>
		<tr>
		  <td background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">N.</td>
       <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">Codice</td>
        <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">Cognome</td>
		  <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">Nome</td>
      <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">Cellulare</td>
		       
      <!-- <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF"><img border="0" background="btn1.gif" ></td>    --> 
	    <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF"><img border="0" background="btn1.gif" ></td>
<? if($dio=="1"){?>    
      <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF"><img border="0" background="btn1.gif" ></td>
<? } ?>      
    </tr>
	</thead>
	<tbody>

  <?php
$totale=0;
$sql = "SELECT *  FROM  volontari  
where nazione = 'ITALIA' and citta = 'MILANO' and zona = '$zona' ORDER BY COGNOME"; 
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
      
      
<!--      <td  align="center"><a href="JavaScript:carica_consegnaA('modmavcont.php?tessera=<?php echo $codice; ?>');" name="modulo" onSubmit="return controllo();"><img border="0" background="btn1.gif" src="pencil.png" width="25" height="25"></a></td>    -->
      <td  align="center"><a href="JavaScript:carica_consegnaC('cancvolontario.php?codice=<?php echo $codice; ?>&zona=<? echo $zona; ?>');" name="modulo" onSubmit="return controllo();"><img border="0" background="btn1.gif" src="occhio.png" width="25" height="25"></a></td>
      
      
<? if($dio=="1"){?>      
      <td  align="center"><a href="JavaScript:carica_consegnaA('variavolontario.php?codice=<?php echo $codice; ?>&zona=<? echo $zona; ?>&login=<? echo $login; ?>');" name="modulo" onSubmit="return controllo();"><img border="0" background="btn1.gif" src="pencil.png" width="25" height="25"></a></td>
<? } ?>    
    </tr>	
<?php } }?>          
      
      

      
      
      
      
		</tr>

	</tbody>
	</table>
</div>
</div>




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
		window.open(url,'pdf','width=750,height=700,left=150,top=150,location=0,directories=0,toolbar=0,scrollbars=yes,resizable=1')
    
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>
  <script>
function carica_consegnaB(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=1300,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script> 
  <script>
function carica_consegnaC(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=900,height=500,left=150,top=150,location=0,directories=0,toolbar=0')
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