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
<p align="center"><b><font face="Arial" size="5" color="#993300">STATISTICA PER NAZIONI</font></b></p>

	
<?
$ingranaggio=$_REQUEST["ingranaggio"];
if ($ingranaggio==1){
$mese=$_REQUEST["mese"];
$anno=$_REQUEST["anno"];
$login=$_REQUEST["login"];
?>

<div align="center">   
<h1>
<p align="center"><b><font face="Arial" size="5" color="#993300">GRAFICO 
PER NAZIONI</font></b></p> 
<p align="center"><font face="Arial" size="3" color="#993300">ANNO  <? echo $anno; ?><br> 
MESE  <? echo $mese; ?><br><br>	</font></p> 

<div  style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 20px; width: 1150px;" >
<table border="1" width="1100px" height="400" bgcolor="#FFF4F7" class="table6" >	<tr>
		
			<tr>
			
				<td>
 <font face="Arial" size="3" color="#993300"><img src="rosso.png" width="20" height="20">Nazioni  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <img src="blu.png" width="20" height="20">Spese<br>	</font>        	
<iframe  align="right" frameborder="0" width="1100" height="400"  src="http://www.mensacarita.it/provagraficogg.php?anno=<?echo $anno; ?>&mese=<?echo $mese; ?>"></iframe>
</td>
</tr>
			
</table>
</div>
</div>
<? } else { $mese=date("m"); $anno=date("Y"); $mese = sprintf("%02d", $mese); ?>

<div align="center">   
<div id="container">
<h1>
<p align="center"><b><font face="Arial" size="5" color="#993300">GRAFICO 
PER NAZIONI</font></b></p></h1><h2> 
<form method="POST" action="" name="modulo" onSubmit="return controllo();">

<div style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 20px;" >
<table border="1" width="100%" bgcolor="#FFF4F7" class="table6">

<tr>
<td></td>		
<td style="color: #FF9248; font-size: 20px;" >PARAMETRI</td>

</tr>

     <tr>
				<td ><font face="Arial" color="#ffffff">- ANNO</font></td>
				<td>				
					<p>
					<input type="text" name="anno"  value="<? echo $anno; ?>" size="4" style="background-color: #C0C0C0" maxlength="4">
					</p>
				</td>
        			
				</tr> 
      <tr>
				<td ><font face="Arial" color="#ffffff">- Mese</font></td>
				<td>				
					<p>
					<input type="text" name="mese"  size="4" value="<? echo $mese; ?>" style="background-color: #C0C0C0" maxlength="2">
					</p>
				</td>	
        		
				</tr>  
		          
       <input type="hidden" name="ingranaggio" value="1" />
       <input type="hidden" name="login" value="<?php echo $login; ?>" />
       
			<tr>
				<td width="237">&nbsp;</td>
				<td><input type="submit" value="Vedi Grafici" name="B3"></td>
			
      </tr>
		</table>

</form>
</div>
</div></div>
<? } ?></body>

</html>