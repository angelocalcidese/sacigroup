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
$zona=$_REQUEST["zona"];
$tipo=$_REQUEST["tipo"];
$classe=$_REQUEST["classe"];
$classesic=$_REQUEST["classesic"];
$numero=$_REQUEST["numero"];
$protocollo=$_REQUEST["protocollo"];
$posizione=$_REQUEST["posizione"];
$oggetto=$_REQUEST["oggetto"];



if ($tipo!="TUTTI")
   {$selezionatipo= " and tipodoc = '".$tipo."'";}
   else
   {$selezionatipo="";}
   
if ($classe!="TUTTI")
   {$selezionaclasse= " and classe = '".$classe."'";}
   else
   {$selezionaclasse="";}

if ($classesic!="TUTTI")
   {$selezionaclassesic= " and classesic = '".$classesic."'";}
   else
   {$selezionaclassesic="";}
   
if ($numero!="")
   {$selezionanumero= " and iddoc = '".$numero."' ";}
   else
   {$selezionanumero="";}

if ($protocollo!="")
   {$selezionaprotocollo= " and protocollo = '".$protocollo."' ";}
   else
   {$selezionaprotocollo="";}
   
if ($posizione!="")
   {$selezionaposizione= " and fisico like '".$posizione."%' ";}
   else
   {$selezionaposizione="";}
 
if ($oggetto!="")
   {$selezionaoggetto= " and oggetto like '"."%".$oggetto."%' ";}
   else
   {$selezionaoggetto="";}
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
<td bgcolor="#FFFFFF" style="border: 0px ; "><a href="menugenerale.php?login=<?php echo $login; ?>&codice=1"><font face="Montserrat">Menù Generale/</a><a href="cerca1doc.php?login=<?php echo $login; ?>">Ricerca Documento</font></a></td>             
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
<p align="center"><b><font face="Montserrat" size="4" color="#993300">ELENCO DOCUMENTI RICHIESTI</font></b></p>
<p align="center">
<table   width="450" style=" border: 1px solid black;" cellspacing="0"  class="table6">	
	<tr>
		<td>
		<table border="1" width="100%">
            	<tr style="background-color: #4e6f9a;" style=" border: 1px solid black;">
				<td colspan="2" style=" border: 1px solid black;" align="center" ><font face="Montserrat" size="3" color="#ffffff"><b>SELEZIONE</b></font></td>
			</tr >
			<tr style=" border: 1px solid black;">
				<td colspan="1" style=" border: 1px solid black;" width="160"><font face="Montserrat" size="2" color="#000000">- TIPO DOCUMENTO:</font></td>				
				<td colspan="1" style=" border: 1px solid black;" align="left"><font face="Montserrat" size="2" color="#cc0000"><b><? echo $tipo; ?></font></td>
			</td>
			</tr>
            <tr style=" border: 1px solid black;">
				<td colspan="1" style=" border: 1px solid black;" width="160"><font face="Montserrat" size="2" color="#000000">- CLASSIFICAZIONE:</font></td>
			    <td colspan="1" style=" border: 1px solid black;" align="left"><font face="Montserrat" size="2" color="#cc0000"><b><? echo $classe; ?></font></td>
			</tr>
			<tr style=" border: 1px solid black;">
				<td colspan="1" style=" border: 1px solid black;" width="160"><font face="Montserrat" size="2" color="#000000">- CLASSE RISERV.:</font></td>
				<td colspan="1" style=" border: 1px solid black;"align="left"><font face="Montserrat" size="2" color="#cc0000"><b><? echo $classesic; ?></font></td>
			</tr>
			<tr style=" border: 1px solid black;">
				<td colspan="1" style=" border: 1px solid black;" width="160"><font face="Montserrat" size="2" color="#000000">- N. ID. DOCUMENTO:</font></td>
				<td colspan="1" style=" border: 1px solid black;" align="left"><font face="Montserrat" size="2" color="#cc0000"><b><? echo $numero; ?></font></td>
			</tr>    
       <tr style=" border: 1px solid black;">
				<td colspan="1" style=" border: 1px solid black;" style="background-color: #ffffff"><font face="Montserrat" size="2" color="#000000" style="background-color: #ffffff">- PROTOCLLO:</font></td>
                <td colspan="1" style=" border: 1px solid black;" align="left"><font face="Montserrat" size="2" color="#cc0000"><b><? echo $protocollo; ?></font></td>
        </tr> 
      
  

	<tr style=" border: 1px solid black;">
	   <td colspan="1" style=" border: 1px solid black;" style="background-color: #ffffff"><font face="Montserrat" size="2" color="#000000" style="background-color: #ffffff">- POSIZIONE FISICA:</font></td>
       <td colspan="1" style=" border: 1px solid black;" align="left"><font face="Montserrat" size="2" color="#cc0000"><b><? echo $posizione; ?></font></td>
    </tr> 		
    <tr style=" border: 1px solid black;">
	   <td colspan="1" style=" border: 1px solid black;" style="background-color: #ffffff"><font face="Montserrat" size="2" color="#000000" style="background-color: #ffffff">- RIC.PARZ.LE OGG.:</font></td>
       <td colspan="1" style=" border: 1px solid black;" align="left"><font face="Montserrat" size="2" color="#cc0000"><b><? echo $oggetto; ?></font></td>
    </tr> 	   
  </table>
  </td>
  </tr>
  </table>

<div align="center">
<div id="container">
	<table id="thetable" style=" border: 1px solid black;" cellspacing="0" width="100%" class="table6">
	<thead>
		<tr style=" border: 1px solid black;">
		  <td style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" align="center"><font size="3" face="Montserrat"  >Progr.</td>
          <td  style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" align="center"><font size="3" face="Montserrat" >DATA DOC.</td>
          <td  style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" align="center"><font size="3" face="Montserrat" >TIPO</td>
        
      	  <td  style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" align="center"><font size="3" face="Montserrat" >CLASSE</td>
          <td  style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" align="center"><font size="3" face="Montserrat" >CLASSE SIC.</td>
          <td  style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" align="center"><font size="3" face="Montserrat" >ID DOC.</td>
          <td  style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" align="center"><font size="3" face="Montserrat" >PROTOCOLLO</td>
		  <td  style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" align="center"><font size="3" face="Montserrat" >OGGETTO</td>
         
          <td  style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" align="center"style="width:10%;" ><font size="3" face="Montserrat" >POSIZIONE</td>      
          
          
          <td  style="  border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" align="center"><font size="3" face="Montserrat" ><img border="0" background="btn1.gif" > </td>
          <td  style="  border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" align="center"><font size="3" face="Montserrat" ><img border="0" background="btn1.gif" > </td>
      
       </tr>       
	</thead>
	<tbody>

  <?php
   
$annoggi=date("Y");
$sql = "SELECT *  FROM  documenti where  login = '$logink' " 
        .  $selezionatipo  . $selezionaclasse . $selezionaclassesic . $selezionanumero . $selezionaprotocollo . $selezionaposizione . $selezionaoggetto . 
        " ORDER BY STR_TO_DATE(datadoc, '%d/%m/%Y')";  
#echo $sql;
$rCount = 1;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
	
	{  
      
      $datadoc = $macrogruppo["datadoc"];
      $tipo = $macrogruppo["tipodoc"];
      $classe = $macrogruppo["classe"];
      $classesic = $macrogruppo["classesic"];
      $numero = $macrogruppo["iddoc"];
      $protocollo = $macrogruppo["protocollo"];
      $posizione = $macrogruppo["fisico"];
      $file = $macrogruppo["file"];
      $oggetto = $macrogruppo["oggetto"];
      $progr = $macrogruppo["progr"];
$tot++; 
?>



      
      
	<tr class="first" style=" border: 1px solid black;">
      <td style=" border: 1px solid black;" align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Montserrat"><?php echo $tot; ?></td>   
      <td style=" border: 1px solid black;" align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Montserrat"><?php echo $datadoc; ?></td>
      <td style=" border: 1px solid black;" align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Montserrat"><?php echo $tipo; ?></td>
      <td style=" border: 1px solid black;" align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Montserrat"><?php echo $classe; ?></td>
      <td style=" border: 1px solid black;" align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Montserrat"><?php echo $classesic; ?></td>
      <td style=" border: 1px solid black;" align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Montserrat"><?php echo $numero; ?></td>
      <td style=" border: 1px solid black;" align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Montserrat"><?php echo $protocollo; ?></td>              
      <td style=" border: 1px solid black;" align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Montserrat"><?php echo $oggetto; ?></td>
      <td style=" border: 1px solid black;" align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Montserrat"><?php echo $posizione; ?></td>
       <td style=" border: 1px solid black;" align="center" ><a  onclick="myFunction('framediv.php?fl=<?php echo $file; ?>&login=<?php echo $login; ?>&progr=<? echo $progr; ?>');"  ><img border="0" background="btn1.gif" src="occhio.png" width="25" height="25"></a></td>
       <td style=" border: 1px solid black;" align="center" ><a  onclick="myFunctiony('modificadoc.php?fl=<?php echo $file; ?>&login=<?php echo $login; ?>&progr=<? echo $progr; ?>');"  ><img border="0" background="btn1.gif" src="pencil.png" width="25" height="25"></a></td>
     
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
window.open(url, '_blank');
}
</script>
<script>
function myFunctiony(url) {
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