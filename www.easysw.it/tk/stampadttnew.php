<?php
#echo "post ". $_REQUEST["login"]."cook ". $_COOKIE['POMACLIENTLOGGED'];

if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="index.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php  } 
include "conf_DB.php";
$login=$_REQUEST["login"];
$ingranaggio=$_REQUEST["ingranaggio"]; 
$noin=$_REQUEST["noin"];
$passott=$_REQUEST["passott"];
#echo "passott ".$passott; 
$pass=$_REQUEST["pass"];
$sql = "SELECT *  FROM  intesta where pass = '$pass'";    
#echo $sql."<br>";
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
	
	{       
      $pass = $macrogruppo["pass"];
      $oggi = $macrogruppo["oggi"];
      $tesserasoci = $macrogruppo["tesserasoci"];
      #echo "tes ".$tesserasoci;
      $causale = $macrogruppo["causale"];
      $destinazione = $macrogruppo["destinazione"];
      }}
$sql = "SELECT *  FROM  mittenti where tesserasoci = '$tesserasoci'";    
#echo $sql."<br>";
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
	
	{  
      
      $tessera = $macrogruppo["tessera"];     
      $cognomex = $macrogruppo["cognome"];
      $nomex= $macrogruppo["nome"];    
      $indirizzores = $macrogruppo["indirizzo"];     
      $cap = $macrogruppo["cap"];     
      $codfisc = $macrogruppo["codicefiscale"]; 
      $localita_residenza= $macrogruppo["localita_residenza"]; 
      }}      
      
      
      
      $tot=1;
      /*
$totkg=0; $totcolli=0;     
$sql = "SELECT *  FROM  riga where dttpr = '$pass' order by descrizione";   
#echo $sql."<br>";
$rCount = 0;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
	
	{  
      $progr = $macrogruppo["progr"];
      $riga = $macrogruppo["riga"];
      $descrizionebeni = $macrogruppo["descrizione"];
      $kgx = $macrogruppo["kg"];
      $collix= $macrogruppo["colli"];
      if($kgx==""){$kgx=0;}
      if($collix==""){$collix=0;}
      echo $collix."<br>";
      $totkg=$totkg+$kgx;
      $totcolli=$totcolli+$collix; 
$tot++; 
#$beni[$tot]=$descrizionebeni;
#$kgy[$tot]=$kgx;
#$colliy[$tot]=$collix;      
#echo "ingr".$codice;
}}
*/
?>

<html>
<head>

	<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
	<title>Stampa DDT</title>
	<link rel="stylesheet" type="text/css" href="jquery.tablescroll.css"/>
   
<style>
div#container {
min-width:   440px;
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

<style>
.table6x {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 0px;
background: #ffffff;
color: #656665;
border: 0px solid #B2CAEA;
border-radius: 20px;
}
.table6x th {
font-size: 18px;
padding: 10px;
}
.table6x td {

padding: 2px;
}
#nav {
<? if($ingranaggio==1 or $ingranaggio==3){?> height: 615px; <?} else {?> height: 550px; <? } ?>

}
#nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
  width: 300px;
  
 
}

#nav ul li {
  position: relative;
  border-bottom: 0px solid black;
}

#nav li ul {
  position: absolute;
  left: 300px;
  top: 0;
  display: none;
   
}

#nav ul li a {
  display: block;
  text-decoration: none;
  color: red;
  background: #ffffff;
  padding: 5px;
}

#nav li:hover ul {
  display: block;
}

#nav li:hover a {
  color: #fff;
  background: lightgrey;
}

#nav li:hover ul a:hover {
  color: white;
  background: darkgrey;
}
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 350px;
  height: 250;
  background-color: #c0bff8;
  color: #000;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  border: 3px solid #b0adad;
 box-shadow: 5px 3px 5px #1b5633;
  /* Position the tooltip */
  position: absolute;
  z-index: 1;}

.tooltip:hover .tooltiptext {
  visibility: visible;
}

.table6 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 0px;
background: #ffffff;
color: #656665;
border: 0px solid #000000;
border-radius: 20px;
}
.table6 th {
font-size: 18px;
padding: 10px;
}
.table6 td {

padding: 2px;
}
.table7a {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 0px;
background: #ffffff;
color: #656665;
border: 0px solid #FF9900;
border-radius: 20px;
}
.table7a th {
font-size: 18px;
padding: 10px;
}
.table7a td {
background: #ffffff;
padding: 5px;
}
.table7 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 0px;
background: #ECE9E0;
color: #656665;
border: 0px solid #FF9900;
border-radius: 20px;
}
.table7 th {
font-size: 18px;
padding: 10px;
}
.table7 td {
background: #fdefbe;
padding: 5px;

	</style>

	</style>
<script type="text/javascript">
		
		function controllo(){ 
            with(document.modulo) { 
            
        if(importo.value=="") { 
            alert("Error: manca IMPORTO"); 
            importo.focus(); 
            return false; 
                            } 
       
          if(costo.value=="") { 
            alert("Error: manca COSTO DEL SUSSIDIO"); 
            costo.focus(); 
            return false; 
                            } 
                            
         if(durata.value=="") { 
            alert("Error: manca LA DURATA"); 
            durata.focus(); 
            return false; 
                            }  
                                                
        if(beneficiario.value=="") { 
            alert("Error: manca BENEFICIARIO"); 
            beneficiario.focus(); 
            return false; 
                            } 
        if(cfpi.value=="") { 
            alert("Error: manca CODICEFISCALE O PARTITA IVA BENEFICIARIO"); 
            cfpi.focus(); 
            return false; 
                            } 
                                                                   
		if(resede.value=="") { 
            alert("Error: manca RESIDENZA O SEDE BENEFICIARIO"); 
            resede.focus(); 
            return false; 
                            } 
        if(contraente.value=="") { 
            alert("Error: manca CONTRAENTE"); 
            contraente.focus(); 
            return false; 
                            } 
                            
        if(cfpix.value=="") { 
            alert("Error: manca CODICEFISCALE O PARTITA IVA CONTRAENTE"); 
            cfpix.focus(); 
            return false; 
                            } 
                            
        if(resedex.value=="") { 
            alert("Error: manca RESIDENZA O SEDE CONTRAENTE"); 
            resedex.focus(); 
            return false; 
                            }   
                            
          if(note.value=="") { 
            alert("Error: manca DESCRIZIONE GARANZIA"); 
            note.focus(); 
            return false; 
                            }
                                                                
           if(costo.value=="") { 
            alert("Error: manca COSTO"); 
            costo.focus(); 
            return false; 
                            }  
                                                              			                                                                                                                    
                                  }                         
        } 
</script>
</head>
<body  onload="window.print();">
<?
if($noin!=1){
$sql1 = "SELECT * FROM progressivodtt where progr = '1' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $passott = $macrogruppo["numero"];	 
			} }
            

$gia=0;
$sql = "SELECT *  FROM  intesta where pass = '$pass' and numerodtt != '0'";    
#echo $sql."<br>";
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
	
	{ echo '<center><font face="Arial" size="5" color="#cc0000">IL DTT '.$passott.' E\' GIA\' STATO STAMPATO';
?>
&nbsp;&nbsp;<a href="stampadtt.php?login=<?php echo $login; ?>"><img border="0" src="freccia.png" width="35" height="35"></a>   
<?     exit;}}

$passott++;
$sql = "UPDATE progressivodtt set 
numero = '$passott'
where 
progr = '1' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 
    
$dataoggi=date("Y-m-d");    
$sql = "UPDATE intesta set 
datastampa = '$dataoggi',
numerodtt=$passott
where pass = '$pass' 
";
#echo $sql;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $sql; }     
    
}
   
?>
<div align="center">
<div id="container">
<center>
<img border="0" src="carlopoma.png" width="350" height="45">

<p align="left"><a href="stampadtt.php?login=<?php echo $login; ?>"><img border="0" src="freccia.png" width="25" height="25"></a></p>
 
<p align="right"><a href="stampadttnew.php?login=<?php echo $login; ?>&pass=<? echo $pass; ?>&noin=1&passott=<? echo $passott; ?>"><font face="Arial" size="1" color="#afadad">stampa</font></a></p>
<table  cellspacing="0" width="790">
<tr>		  
	  <td  bgcolor="#000000"  width="790"><p align="center"><font size="3" face="Arial" color="#FFFFFF"><b>DOCUMENTO DI TRASPORTO</b> </p>      
      </td>      
</tr>
</table>
<br>
<table style="border: none;" cellspacing="0" width="790px">
<tr style="border: none;">
<td style="border: none;" valign="top">
<table  style="border: 1px solid #000000;" cellspacing="0" width="390px">
<tr style="border: none;">
<td style="border: none;" >
<p align="left"><font face="Arial" size="4" color="#000000">MITTENTE:</p><p align="center"><b>APS LA ROTONDA</b><br></font><font face="Arial" size="2" color="#000000">
via Fiume 2 - 20021 BARANZATE (MI)<br>
C.F. 97556510150 - P.IVA 087231100964<br>
Tel. 02 39543527 - Email segreteria@larotonda.org <br>
www.larotonda.org
<br> <br><br> </p>
</td>
</tr>
</table>
<br>
<table style="border: 1px solid #000000;"  cellspacing="0" width="390px">
<tr style="border: none;" valign="bottom">
<td <td style="border: none;">
<font face="Arial" size="2" color="#000000">CAUSALE DEL TRASPORTO:<BR>


<?echo "<p align='center'><b>".$causale."</b></p>"; ?>

</td>
</tr>
</table>
</td>
<td style="border: none;">
<table style="border: 1px solid #000000;"  cellspacing="0" width="390px" valign="top">
<tr <td style="border: none;" >
<td <td style="border: none;">
<font face="Arial" size="2" color="#000000">DOCUMENTO DI TRASPORTO<BR>
<br>
N.<? echo "<font face='Arial' size='5' color='#cc0000'><b>&nbsp;&nbsp; ".$passott."</b></font>";?>   &nbsp;&nbsp;&nbsp;    DEL  <? echo $oggi; ?>

<br>
<br>
</td>
</td>
</tr>
</table>
<br>
<table style="border: 1px solid #000000;"  cellspacing="0" width="390px">
<tr <td style="border: none;">
<td <td style="border: none;">
<font face="Arial" size="2" color="#000000">DESTINATARIO:<BR>



<?echo "<p align='center'>"."<b>Spett.le ".$cognomex." ".$nomex."</b>"; ?><br>
<?echo $indirizzores; ?><br>
<?echo $cap." - ".$localita_residenza; ?><br>
<?echo "C.F. ".$codfisc."</p>"; ?><br>


</td>
</tr>
</table>
</td>
</tr>
<tr style="border: none;">
<td colspan="2" style="border: none;">
<font face="Arial" size="2" color="#000000"><br>
</td>
<tr>
<tr style="border: none;">
<td colspan="2" style="border: 1;">
<font face="Arial" size="2" color="#000000">LUOGO DI DESTINAZIONE:<br>
 
 <?echo "<p align='center'><b>".$destinazione."</b></p>"; ?>
 </td>
 </tr>
</table>
<br>
<table style="border: none;" cellspacing="0" width="790px">
<tr style="border: none;" >
<td style="border: none;">
</td>
</tr>
 </table>
<table style="border: none;" cellspacing="0" width="790px">
<tr style="border: none;" >
<td style="border: none;">
</td>
</tr>
<td  bgcolor="#000000" align="center" width="10%"><font size="3" face="Arial" color="#FFFFFF"><b>PRG</b></td>  
<td  bgcolor="#000000" align="center" ><font size="3" face="Arial" color="#FFFFFF"><b>DESCRIZIONE DEI BENI</b></td>      
<td  bgcolor="#000000" align="center" width="10%"><font size="3" face="Arial" color="#FFFFFF"><b>KG</b></td>      
<td  bgcolor="#000000" align="center" width="10%"><font size="3" face="Arial" color="#FFFFFF"><b>COLLI</b></td>      
</td>
</tr>     
 </table>
 <br> 
	<table id="thetable"  cellspacing="0" width="790" class="table6x">  
<?
$tot=0;
$sql = "SELECT *  FROM  riga where dttpr = '$pass' order by descrizione";   
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
	
	{  
      $progr = $macrogruppo["progr"];
      $riga = $macrogruppo["riga"];
      $descrizionebeni = $macrogruppo["descrizione"];
      $kgx = $macrogruppo["kg"];
      $collix= $macrogruppo["colli"];
      if($kgx==""){$kgx=0;}
      if($collix==""){$collix=0;}
      $totkg=$totkg+$kgx;
      $totcolli=$totcolli+$collix;
     
 

$tot++; 
?>



      
<? if($tot==1){?>
	<tr class="first" style=" border: 1px solid black;">
<? } else { ?>
    <tr class="first" style=" border: 0px solid black;">
<? } ?>    
      <td style=" border: 1px solid black;" width="10%" align="center" bgcolor="<? echo $colore; ?>"><font size="3" face="Arial"><b><?php echo $tot; ?></td>
      <td style=" border: 1px solid black;" align="left" bgcolor="<? echo $colore; ?>"><font size="3" face="Arial"><b><?php echo $descrizionebeni; ?></td>
      <td style=" border: 1px solid black;" width="10%" align="center" bgcolor="<? echo $colore; ?>"><font size="3" face="Arial"><b><?php echo $kgx; ?></td>            
      <td style=" border: 1px solid black;" width="10%"align="center" bgcolor="<? echo $colore; ?>"><font size="3" face="Arial"><b><?php echo $collix; ?></td>
    
    </tr>	
    <? }} 
$tot++;    
for ($i = $tot; $i <= 15; $i++) { ?>
<tr class="first" style=" border: 0px solid black;">
      <td style=" border: 1px solid black;" width="10%" align="center" bgcolor="<? echo $colore; ?>"><font size="3" face="Arial"><b><?php echo $i; ?></td>
      <td style=" border: 1px solid black;" align="left" bgcolor="<? echo $colore; ?>"><font size="3" face="Arial"><b><?php echo " "; ?></td>
      <td style=" border: 1px solid black;" width="10%" align="center" bgcolor="<? echo $colore; ?>"><font size="3" face="Arial"><b><?php echo " "; ?></td>            
      <td style=" border: 1px solid black;" width="10%"align="center" bgcolor="<? echo $colore; ?>"><font size="3" face="Arial"><b><?php echo " "; ?></td>    
    </tr>	
<?} ?>
<tr class="first" style=" border: 0px solid black;">
      <td style=" border: 1px solid black;" width="10%" align="center" bgcolor="<? echo $colore; ?>"><font size="3" face="Arial"><b><?php echo " "; ?></td>
      <td style=" border: 1px solid black;" align="right" bgcolor="<? echo $colore; ?>"><font size="3" face="Arial"><b><?php echo "TOTALE "; ?></td>
      <td style=" border: 1px solid black;" width="10%" align="center" bgcolor="<? echo $colore; ?>"><font size="3" face="Arial"><b><?php echo $totkg; ?></td>            
      <td style=" border: 1px solid black;" width="10%"align="center" bgcolor="<? echo $colore; ?>"><font size="3" face="Arial"><b><?php echo $totcolli; ?></td>    
    </tr>    
</table>
<br>
<table id="thetable"  cellspacing="10" width="790" class="table6x"> 
<tr class="first" style=" border: 0px solid black;">
<td style=" border: 1px solid black;" width="80%" align="left" bgcolor="<? echo $colore; ?>"><font size="2" face="Arial" color="#000000">TRASPORTO A MEZZO </font></td>
<td style=" border: 1px solid black;"  align="center" bgcolor="<? echo $colore; ?>"><font size="1" face="Arial" color="#000000">DATA RITIRO </font> </td>
</tr>
<tr class="first" style=" border: 0px solid black;" height="35">
<td style=" border: 1px solid black;" width="80%" align="left" bgcolor="<? echo $colore; ?>"><font size="1" face="Arial" color="#000000">O - Mittente&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          O - Vettore&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            O - Destinatario&nbsp;&nbsp;&nbsp;  </font></td>
<td style=" border: 1px solid black;"  align="center" bgcolor="<? echo $colore; ?>"></td>
</tr>
<tr height="45">
<td colspan="2" valign="top" style=" border: 1px solid black;" width="80%" align="left" bgcolor="<? echo $colore; ?>"><font size="1" face="Arial" color="#000000">VETTORE</font></td>
</tr>
<tr height="45">
<td colspan="2" valign="top" style=" border: 1px solid black;" width="80%" align="left" bgcolor="<? echo $colore; ?>"><font size="1" face="Arial" color="#000000">ANNOTAZIONI</font></td>
</tr>
<tr height="45">
<td colspan="2" valign="top" style=" border: 1px solid black;" width="80%" align="left" bgcolor="<? echo $colore; ?>"><font size="1" face="Arial" color="#000000">FIRMA MITTENTE</font></td>
</tr>
<tr height="45">
<td colspan="2" valign="top" style=" border: 1px solid black;" width="80%" align="left" bgcolor="<? echo $colore; ?>"><font size="1" face="Arial" color="#000000">FIRMA VETTORE</font></td>
</tr>
<tr height="45">
<td colspan="2" valign="top" style=" border: 1px solid black;" width="80%" align="left" bgcolor="<? echo $colore; ?>"><font size="1" face="Arial" color="#000000">FIRMA DESTINATARIO</font></td>
</tr>
</table>  
</div>
</div>
</body>
</html>

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
		window.open(url,'pdf','width=900,height=400,left=150,top=150,location=0,directories=0,toolbar=0')
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
 window.open(url);
}
</script>
<script>
function myFunctionx() {
  window.open("cerca2storico.php?tessera=<?php echo $tessera; ?>&login=<?php echo $login; ?>&zona=<?php echo $zona; ?>");
}
</script>
</body>
</html>