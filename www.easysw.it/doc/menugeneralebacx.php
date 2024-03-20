<?php
include "conf_DB.php";
$login=$_REQUEST["login"];
$zona=$_REQUEST["zona"];
#echo $zona;
$testo=$_REQUEST["testo"];
$testo=str_replace("'","\'",$testo);
$ingranaggio=$_REQUEST["ingranaggio"];
if($ingranaggio==1){  
$sql = "update bacheca    SET     testo='$testo'   where progr = 1
    ";
#echo $sql; exit;
    if ($conn->query($sql) === TRUE)
        { } 
        else { echo "Error inserted record: " . $conn->error.$sql; } 
    }


 
?>

<html>
<head>

	<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
	<title>gestione bacheca</title>
	<link rel="stylesheet" type="text/css" href="jquery.tablescroll.css"/>
  
  
<script language="javascript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script>
// barra delle pagine che segue lo scroll	
$(function() {
$(window).scroll(function() {
if ($(window).scrollTop()>0){//indichi quando far partire il menu, >0 significa che parte appena scendi di 1 px con la pagina, il menu comincia a seguirti
muovi=$(window).scrollTop(); //il div segure la pagina agganciandosi al top, se vuoi che sia più in basso o più in alto aggiungi o sottrai il valore
}else{
muovi=0; //posizione iniziale, quando con lo scroll torni ad inizio pagina
}
$('#prova').stop(true, true).
animate({
top: muovi 
},'linear');
});	

});
</script>




  
<style>
div#container {
min-width:   1000px;
  min-height:  500px;
  max-width:  600px;
  max-height: 1000px;
}
 div#containerxx {
min-width:   1000px;
  min-height:  500px;
  max-width:  600px;
  max-height: 1000px;
  background: #ECE9E0;
  border: 1px solid #ffffff;
  border-radius: 10px;

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
border-spacing: 0px;
background: #ffffff;
color: #656665;
border: 16px solid #B2CAEA;
border-radius: 20px;
}
.table6 th {
font-size: 18px;
padding: 10px;
}
.table6 td {
background: #ffffff;
padding: 2px;
}

.table7 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 0px;
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
background: #fdefbe;
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
table, th, td {
  border-collapse: collapse;
}
input{ /* Stili per il campo di testo e per la textarea */
    background: #1C1C1C; /* Colore di sfondo */
    border: 0px solid #323232; /* Bordo */
    color: #000000; /* Colore del testo */
    height: 20px; /* Altezza */
    line-height: 20px; /* Altezza di riga */
    font-weight: bold;
    padding: 0 10px; /* Padding */
}
textarea{ /* Stili per il campo di testo e per la textarea */
    background: #1C1C1C; /* Colore di sfondo */
    border: 0px solid #323232; /* Bordo */
    color: #000000; /* Colore del testo */
    font-weight: bold;
    padding: 0 10px; /* Padding */
} 
select { /* Stili per il campo di testo e per la textarea */
    background: #1C1C1C; /* Colore di sfondo */
    border: 0px solid #323232; /* Bordo */
    color: #000000; /* Colore del testo */
    height: 20px; /* Altezza */
    line-height: 20px; /* Altezza di riga */
    font-weight: bold;
    padding: 0 10px; /* Padding */
}
input[type=submit] {
    padding:2px 30px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;  }
input[type=reset] {
    padding:2px 20px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;  }    
</style>
<style type="text/css">
    
#slidetabsmenu {
float:left;
width:1000;
font-size:90%;
line-height:normal;

}

* html #slidetabsmenu{ /*IE only. Add 1em spacing between menu and rest of content*/
margin-bottom: 1em;
}

#slidetabsmenu ul{
list-style-type: none;
margin:0;
margin-left: 10px;
padding:0;
}

#slidetabsmenu li{
display:inline;
margin:0;
padding:0;
}

#slidetabsmenu a {
float:left;
background:url(media/tab-left.gif) no-repeat left top;
margin:0;
padding:0 0 0 9px;
text-decoration:none;
}

#slidetabsmenu a span {
float:left;
display:block;
background:url(media/tab-right.gif) no-repeat right top;
padding:3px 14px 3px 5px;
font-weight:bold;
color:#3B3B3B;
}

/* Commented Backslash Hack hides rule from IE5-Mac \*/
#slidetabsmenu a span {float:none;}
/* End IE5-Mac hack */

#slidetabsmenu a:hover span {
color: black;
}

#slidetabsmenu #current a {
background-position:0 -125px;
}

#slidetabsmenu #current a span {
background-position:100% -125px;
color: black;
}

#slidetabsmenu a:hover {
background-position:0% -125px;
}

#slidetabsmenu a:hover span {
background-position:100% -125px;
}

</style>
  
</head>
<body>
<? if ($ingranaggio==4) { ?>
<!-- <div id="prova" style="position: absolute; left: 10px; top: 0px; width: 101px; height: 55px; z-index: 1; color: #F00; font-family: Verdana, Geneva, sans-serif; font-size: 14px;"><? echo $cognome." ".$nome; ?></div> -->
<? } ?>
<div align="center" >


	
	    <div align="center" style="width: 60em;">
			<td style="border: 0px ; ">
			<img border="0" src="carlopoma.png" width="200" height="90"></td>
		  </div>
      <div align="left" style="width: 60em;">
      <hr align=”center” size=”1? width=”380? color=”blue” noshade>
      <table  style="width: 60em; border: 0px ; border-bottom: 0px;">
      <tr>
             
 </tr>
     </table>
     
      </div>
</div> 

<div align="center"> 
 



</table>
<br> <br>
<!--<hr width=100% size=4 color=2445b1> -->
<script type="text/javascript" src="./nic/nicEdit.js"></script>
<script type="text/javascript">
	   bkLib.onDomLoaded(function() {
          var myNicEditor = new nicEditor();
          myNicEditor.setPanel('myNicPanel');
          myNicEditor.addInstance('testo');
          myNicEditor.addInstance('testo1');
          myNicEditor.addInstance('testo2');
          myNicEditor.addInstance('testo3');
          myNicEditor.addInstance('testo4');
          myNicEditor.addInstance('testo5');
          myNicEditor.addInstance('testo6');
          myNicEditor.addInstance('testo7');
          myNicEditor.addInstance('testo8');
          myNicEditor.addInstance('testo9');
          myNicEditor.addInstance('testo10');
          myNicEditor.addInstance('testo11');
          myNicEditor.addInstance('testo12');
          myNicEditor.addInstance('testo13');
          myNicEditor.addInstance('testo14');
          myNicEditor.addInstance('testo15');
          myNicEditor.addInstance('testo16');
          myNicEditor.addInstance('testo17');
          myNicEditor.addInstance('testo18');
          myNicEditor.addInstance('testo19');
          myNicEditor.addInstance('testo20');
          myNicEditor.addInstance('testo21');
          myNicEditor.addInstance('testo22');
          myNicEditor.addInstance('testo23');
          myNicEditor.addInstance('testo24');
          myNicEditor.addInstance('testo25');
          myNicEditor.addInstance('testo26');
          myNicEditor.addInstance('testo27');
          myNicEditor.addInstance('testo28');
          myNicEditor.addInstance('testo29');
          myNicEditor.addInstance('testo30');
          myNicEditor.addInstance('testo31');
          myNicEditor.addInstance('testo32');
          myNicEditor.addInstance('testo33');
          myNicEditor.addInstance('testo34');
      
          myNicEditor.addInstance('testo35');
          myNicEditor.addInstance('testo36');
          myNicEditor.addInstance('testo37');
          myNicEditor.addInstance('testo38');
          myNicEditor.addInstance('testo39');
          myNicEditor.addInstance('testo40');
            myNicEditor.addInstance('testo41');
          myNicEditor.addInstance('testo42');
          myNicEditor.addInstance('testo43');
          myNicEditor.addInstance('testo44');
          myNicEditor.addInstance('testo45');
          myNicEditor.addInstance('testo46');
          myNicEditor.addInstance('testo47');
          myNicEditor.addInstance('testo48');
          myNicEditor.addInstance('testo49');
          myNicEditor.addInstance('testo50');
          myNicEditor.addInstance('testo51');
          myNicEditor.addInstance('testo52');
          myNicEditor.addInstance('testo53');
          myNicEditor.addInstance('testo54');
          myNicEditor.addInstance('testo55');
          myNicEditor.addInstance('testo56');
          myNicEditor.addInstance('testo57');
          myNicEditor.addInstance('testo58');
          myNicEditor.addInstance('testo59');
          myNicEditor.addInstance('testo60');
          myNicEditor.addInstance('testo61');
          myNicEditor.addInstance('testo62');
          myNicEditor.addInstance('testo63');
          myNicEditor.addInstance('testo64');
          myNicEditor.addInstance('testo65');
          myNicEditor.addInstance('testo66');
          myNicEditor.addInstance('testo67');
          myNicEditor.addInstance('testo68');
          myNicEditor.addInstance('testo69');
          myNicEditor.addInstance('testo70');
          myNicEditor.addInstance('testo71');
          myNicEditor.addInstance('testo72');
          myNicEditor.addInstance('testo73');
          myNicEditor.addInstance('testo74');
          myNicEditor.addInstance('testo75');
         
          myNicEditor.addInstance('testo76');
          myNicEditor.addInstance('testo77');
          myNicEditor.addInstance('testo78');
          myNicEditor.addInstance('testo79');
          myNicEditor.addInstance('testo80');          
          myNicEditor.addInstance('myInstance2');
          myNicEditor.addInstance('myInstance3');     
     });
</script>




 
 
 

<div width="100%">
<p align="center"><b><font face="Arial" size="5" color="#993300">GESTIONE BACHECA </font></b></p><div align="center">   




<? 
$sql = "SELECT *  FROM  bacheca where progr = 1 ";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
      $testomemw = $macrogruppo["testo"];
    }}


?>





 <form method="POST" action="" enctype="multipart/form-data">   
<table border="1" width="100%" bgcolor="#FFF4F7" class="table7">







 <tr >

<td style="font-size: 13px;background-color: #ffffff;"  align="center">
<div id="myNicPanel" style="width: 650px;"></div>
<?php

//Controlla il tipo di browser
function GetBrowser()
{
$browser = array(
'Lynx'      => 'Lynx',
'Opera'     => 'Opera',
'WebTV'     => 'WebTV',
'Konqueror' => 'Konqueror',
'bot'       => 'Bot',
'Google'    => 'Bot', 
'Chrome'     => 'Chrome',
'slurp'     => 'Bot',
'scooter'   => 'Bot',
'spider'    => 'Bot',
'infoseek'  => 'Bot',
'MSIE'      => 'Internet Explorer',
'Firefox'   => 'FireFox',
'Nav'       => 'Netscape',
'Gold'      => 'Netscape',
'x11'       => 'Netscape',
'Netscape'  => 'Netscape'
);
foreach($browser as $chiave => $valore)
{
if(strpos($_SERVER['HTTP_USER_AGENT'], $chiave ))
{
return $valore;
}
}
return 'Altro';
}
//esempio applicato
$browser=GetBrowser();
if ($browser == "Chrome")
{$lungo=650;}else{$lungo=724;}

?>
<!--<textarea style="font-size: 20px;" name="testo"  id="testo" rows="20" cols="60"><? echo $testo;?></textarea>   -->
<textarea id="testo" rows="15" name="testo" style=" background-color: #ffffff;  width: 100%;"><? echo $testomemw; ?></textarea>

    </td>
</tr>
<tr>     
         <input type="hidden" name="ingranaggio" value="1" />
         <input type="hidden" name="login" value="<? echo $login; ?>" />
         <input type="hidden" name="zona" value="<? echo $zona; ?>" />
		    
		  <td colspan="4" align="center"><input type="submit" value="Memorizza" name="B3"></td>        
</tr>
   </table>
</form> 
<br>  


</div>
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
function close_window() {
  if (confirm("Sei sicuro di volere chiudere la pagina? (clicca su OK) \nhai fatto delle modifiche alla scheda assistito? \nse SI ti sei ricordato di cliccare sul tasto MODIFICA (in fondo alla pagina)? \nse non lo hai fatto clicca su ANNULLA e fallo.")) {
      close();
  }
}
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
<script>
function carica_consegnaF(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=1000,height=300,left=150,top=150,location=0,directories=0,toolbar=0,scrollbars=yes,resizable=1')
    
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>  

<script type="text/javascript">
<!-- 
/*
Floating Menu script-  Roy Whittle (http://www.javascript-fx.com/)
Script featured on/available at http://www.dynamicdrive.com/
This notice must stay intact for use

Prelevato e illustrato su http://www.web-link.it
*/

//Enter "frombottom" or "fromtop"
var verticalpos="frombottom"

function JSFX_FloatTopDiv()
{
	var startX = 5,
	startY = 680;
	var ns = (navigator.appName.indexOf("Netscape") != -1);
	var d = document;
	function ml(id)
	{
		var el=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
		if(d.layers)el.style=el;
		el.sP=function(x,y){this.style.left=x;this.style.top=y;};
		el.x = startX;
		if (verticalpos=="fromtop")
		el.y = startY;
		else{
		el.y = ns ? pageYOffset + innerHeight : document.body.scrollTop + document.body.clientHeight;
		el.y -= startY;
		}
		return el;
	}
	window.stayTopLeft=function()
	{
		if (verticalpos=="fromtop"){
		var pY = ns ? pageYOffset : document.body.scrollTop;
		ftlObj.y += (pY + startY - ftlObj.y)/8;
		}
		else{
		var pY = ns ? pageYOffset + innerHeight : document.body.scrollTop + document.body.clientHeight;
		ftlObj.y += (pY - startY - ftlObj.y)/8;
		}
		ftlObj.sP(ftlObj.x, ftlObj.y);
		setTimeout("stayTopLeft()", 10);
	}
	ftlObj = ml("divStayTopLeft");
	stayTopLeft();
}
JSFX_FloatTopDiv();
// end  -->
</script>
</body>
</html>