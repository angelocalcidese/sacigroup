<?
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="index.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php
}
$login=$_REQUEST["login"];
$ingranaggio=$_REQUEST["ingranaggio"];

include "conf_DB.php";
$oggi=date("d/m/Y");
if ($ingranaggio==1)
{
$dataarrivo=$_REQUEST["dataarrivo"];
   
}

?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Opera Messa della Carita'</title>
  <link rel="stylesheet" href="css/style.css">
<meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="Content-Language" content="it" />
	<meta name="Robots" content="All" />
	<meta name="Description" content="HTML.it - il sito italiano sul Web publishing" />
	<meta name="Keywords" content="javascript" />
	<meta name="Owner" content="HTML.it srl" /> 
	<meta name="Author" content="HTML.it srl" />  
	<meta name="Copyright" content="HTML.it srl" /><link href="datapilcker3/jquery.datepick.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="datapilcker3/jquery.plugin.js"></script>
<script src="datapilcker3/jquery.datepick.js"></script>
<script type="text/javascript" src="datapilcker3/jquery.datepick-it.js" ></script>
<script>
$(function() {
	$('#popupDatepicker').datepick();
  $('#popupDatepicker1').datepick();
	$('#inlineDatepicker').datepick({onSelect: showDate});
  $.datepicker.setDefaults($.datepicker.regional['it']);
});

function showDate(date) {
	alert('The date chosen is ' + date);
}

$(function(){
                // Datepicker
                $('#datepicker').datepicker({
                    inline: true
                });        

                // Datepicker italian localization
                $.datepick.setDefaults($.datepicker.regional['it']);
            });

</script>  
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
<script type="text/javascript">
		
		function controllo(){ 
            with(document.modulo) { 
 
        if(cognome.value==""&&assistito.value=="NUOVO ASSISITO" ) { 
            alert("Error: manca COGNOME"); 
            cognome.focus(); 
            return false; 
                            } 
        if(nome.value==""&&assistito.value=="NUOVO ASSISTITO" ) { 
            alert("Error: manca NOME"); 
            nome.focus(); 
            return false; 
                            } 
        if(datanascita.value==""&&assistito.value=="NUOVO ASSISTITO" ) { 
            alert("Error: manca DATA DI NACITA"); 
            datanascita.focus(); 
            return false; 
                            }                     
         if(nazionalita.value==""&&assistito.value=="NUOVO ASSISTITO" ) { 
            alert("Error: manca NAZIONALITA'"); 
            nazionalita.focus(); 
            return false; 
                            }                     
                            
                                                       
                                                        
                                  } 
        } 

</script>
</head>

<body>

<div align="center" >
	<table border="0" width="760" height="140" bgcolor="#ffffff"  >
		<tr > 
			<td style="border-radius: 20px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"">
      <div align="center">
			<img border="0" src="carlopoma.png" width="200" height="90"> <br>
      </div>
      </td>
      </tr>
   <tr> 

	
</tr> 
<td bgcolor="#FFFFFF" style="border: 0px ; "><a href="menugenerale.php?login=<?php echo $login; ?>">Menu Generale</a></td>             

 
   
	</table>  
      
      <div align="center">   
<div id="container">

<h1>
<p align="center"><b><font face="Arial" size="5" color="#993300">SELEZIONA UNA DATA</font></b></p>

	
<table border="0" width="760" bgcolor="#FFF4F7" class="table7" >
<form method="POST" action="" >
<tr>
<td ><font face="Arial" size="2" color="#ffffff">SELEZIONA DATA</font></td>
<td align="center"><p><input type="text" name="dataarrivo" autocomplete="off"  id="popupDatepicker" value="<?php if ($ingranaggio==1){echo $dataarrivo;}else{echo $oggi;} ?>" size="10" style="background-color: #ffffff"></p> </td>

<input type="hidden" name="ingranaggio" value="1" />				
<td  align="center"><input type="submit" value="Seleziona" name="B3"></td>
</tr>
</form>	

</table>
		


<? if ($ingranaggio==1)  { ?>


<h1>
<p align="center"><b><font face="Arial" size="5" color="#993300">PARTECIPANTI ALLA MENSA IL <? echo $dataarrivo; ?></font></b></p>
<table border="0" width="760" bgcolor="#FFF4F7" class="table6" >	<tr>

	<tr>
				<td ><font face="Arial" size="2" color="#000000">PRG</font></td>
        <td ><font face="Arial" size="2" color="#000000">TIPO</font></td>
        <td ><font face="Arial" size="2" color="#000000">NUM.</font></td>
       
        <td ><font face="Arial" size="2" color="#000000">COGNOME</font></td>
        <td ><font face="Arial" size="2" color="#000000">NOME</font></td>
        <td ><font face="Arial" size="2" color="#000000">SESSO</font></td>
        <td ><font face="Arial" size="2" color="#000000">DATA NASCITA</font></td>
        <td ><font face="Arial" size="2" color="#000000">NAZIONALITA'</font></td>
        <td ><font face="Arial" size="2" color="#000000">TELEFONO</font></td>
        <td ><font face="Arial" size="2" color="#000000">TIPO REST.</font></td>
			</tr> 
<?php
$conta=0;
$sql1 = "select * from storicopass where  entrata = '$dataarrivo'  order by numeropass";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ 
      $numeropass = $macrogruppo["numeropass"];
      $tessera = $macrogruppo["tessera"];
      $entrata= $macrogruppo["entrata"];
      $uscita= $macrogruppo["uscita"];
      $conta++;
      $sw=0;
$sql1xx = "select * from storicopassx where entrata = '$dataarrivo' and tessera = '$tessera'   ";
#echo  $sql1xx;
$result1xx = $conn->query($sql1xx);
if ($result1xx->num_rows > 0) {
  while($macrogruppoxx = $result1xx->fetch_assoc())
		{$sw=1; } }     
      
$sql1x = "select * from soci where tessera = '$tessera'   order by cognome";
$result1x = $conn->query($sql1x);
if ($result1x->num_rows > 0) {
  while($macrogruppox = $result1x->fetch_assoc())
		{ 
      $cognomemx = $macrogruppox["cognome"];
      $nomemx = $macrogruppox["nome"];
      $tesserax = $macrogruppox["tessera"];	
      $data_nascitax = $macrogruppox["data_nascita"];	
      $nazionalitax = $macrogruppox["nazionalita"];	
      $telefonox = $macrogruppox["telefono"];
      $data_iscrizione = $macrogruppox["data_iscrizione"];
      $sesso = $macrogruppox["sesso"];   
      $numeropassx = sprintf("%02d", $numeropass);   
?>		      
<tr> 
    <td align="center"><font face="Arial" size="2" color="#ffffff"><? echo $conta; ?></font></td> 
    <td align="center"><font face="Arial" size="2" color="#fbf96f">PASS</font></td> 
    <td align="center"><font face="Arial" size="3" color="#ffffff"><font color="red"><? echo $numeropassx; ?></font></font></td>
   
        <td ><font face="Arial" size="2" color="#ffffff"><? echo $cognomemx; ?></font></td>
        <td ><font face="Arial" size="2" color="#ffffff"><? echo $nomemx; ?></font></td>
        <td ><font face="Arial" size="2" color="#ffffff"><? echo $sesso; ?></font></td>
        <td ><font face="Arial" size="2" color="#ffffff"><? echo $data_nascitax; ?></font></td>
        <td ><font face="Arial" size="2" color="#ffffff"><? echo $nazionalitax; ?></font></td>
        <td ><font face="Arial" size="2" color="#ffffff"><? echo $telefonox; ?></font></td>
<? if ($sw==1){ ?>        
        <td align="center"><font face="Arial" size="2" color="#ffffff">	<img src="qrcode.png" width="25" height="25"></font></td>
<? } else { ?>			
       <td align="center"><font face="Arial" size="2" color="#ffffff"><img src="mano.png" width="25" height="25"></font></td>
<? } ?>       
      
      </tr>   
<? }}}} ?>      
 
<?php

$sql1 = "select * from storicotessera where  entrata = '$dataarrivo'  order by numerotessera";
#echo $sql1;
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ 
      $numeropass = $macrogruppo["numerotessera"];
      $tessera = $macrogruppo["tessera"];
      $entrata= $macrogruppo["entrata"];
      $conta++;
         
$sql1x = "select * from soci where tessera = '$tessera'   order by cognome";
#echo $sql1x;
$result1x = $conn->query($sql1x);
if ($result1x->num_rows > 0) {
  while($macrogruppox = $result1x->fetch_assoc())
		{ 
      $cognomemx = $macrogruppox["cognome"];
      $nomemx = $macrogruppox["nome"];
      $tesserax = $macrogruppox["tessera"];	
      $data_nascitax = $macrogruppox["data_nascita"];	
      $nazionalitax = $macrogruppox["nazionalita"];	
      $telefonox = $macrogruppox["telefono"];
      $data_iscrizione = $macrogruppox["data_iscrizione"];
      $sesso = $macrogruppox["sesso"];   
      $numeropassx = sprintf("%03d", $numeropass);   
?>		      
<tr> 
    <td align="center"><font face="Arial" size="2" color="#ffffff"><? echo $conta; ?></font></td> 
    <td align="center"><font face="Arial" size="2" color="#ffffff">TESS</font></td> 
    <td align="center"><font face="Arial" size="3" color="#ffffff"><font color="red"><? echo $numeropassx; ?></font></font></td>

        <td ><font face="Arial" size="2" color="#ffffff"><? echo $cognomemx; ?></font></td>
        <td ><font face="Arial" size="2" color="#ffffff"><? echo $nomemx; ?></font></td>
        <td ><font face="Arial" size="2" color="#ffffff"><? echo $sesso; ?></font></td>
        <td ><font face="Arial" size="2" color="#ffffff"><? echo $data_nascitax; ?></font></td>
        <td ><font face="Arial" size="2" color="#ffffff"><? echo $nazionalitax; ?></font></td>
        <td ><font face="Arial" size="2" color="#ffffff"><? echo $telefonox; ?></font></td>      
        <td align="center"><font face="Arial" size="2" color="#ffffff">	<img src="qrcode.png" width="25" height="25"></font></td>   
      
      </tr>   
<? }}}} ?>       
 
 
 
 
 
 </table>
 <? } ?>
</div>
</div> </div>
<p align=center ><b><font color="#FF0000" face="Arial"><?php if ($trovato=="0") {echo "Login o Password Errate". "&nbsp;"; }else {?>&nbsp;<?php } ?></font></b></p>
</body>

</html>