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
$zona=$_REQUEST["zona"];
#echo $zona;
$testo=$_REQUEST["myArea2"];
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

table, th, td {
  border-collapse: collapse;
}

 
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
      <td bgcolor="#FFFFFF" style="border: 0px ; "><a href="menugenerale.php?login=<?php echo $login; ?>&zona=<? echo $zona; ?>">Menu Generale</a></td>
             
<?php
$zona=$_REQUEST["zona"];
#echo $zona;
$sql1 = "SELECT * FROM utenti  where login = '$login'  ";
#echo $sql1;
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{$codvolontario = $macrogruppo["codvolontario"];
     $dio = $macrogruppo["dio"];
    } }
if($dio=="1"){$dicidio="amm.";}else{$dicidio="utente";}
$sql1 = "SELECT * FROM volontari  where codice = '$codvolontario'  ";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{$cognomevol = $macrogruppo["cognome"];
     $nomevol = $macrogruppo["nome"];
    } }
?>           
      <td bgcolor="#FFFFFF" align="right" style="border: 0px ; "><? $dottorechi=$cognomevol." ".$nomevol; echo $codvolontario." - ".$cognomevol." ".$nomevol." - ".$dicidio; ?></td>         
     </tr>
     </table>
     <table  style="width: 60em; border: 0px ; border-bottom: 0px;">
     
     </table>
      </div>
</div> 

<div align="center"> 
 



</table>
<br> <br>


<div id="containerxx">
<p align="center"><b><font face="Arial" size="5" color="#993300">GESTIONE BACHECA </font></b></p><div align="center">   
<br />
	


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
<table border="1" width="100%" bgcolor="#FFF4F7" class="table6">







 <tr >
    <td><font size="3" face="Arial" >Inserisci testo per bacheca <br>(max 20.000 caratteri)&nbsp;&nbsp;&nbsp; </font>
             </font>   </td>

<td style="font-size: 13px;background-color: #ffffff;"  align="center">
   <textarea name="myArea2" style="width: 800px; height: 300px;" id="myArea2"><? echo $testomemw; ?></textarea><br>
    </div>
  <div style="clear: both;"></div>
  <script type="text/javascript" src="//js.nicedit.com/nicEdit-latest.js"></script> 
  <script>
 
  var area1, area2;
 
  function toggleArea1() {
        if(!area1) {
                area1 = new nicEditor({fullPanel : true}).panelInstance('myArea1',{hasPanel : true});
        } else {
                area1.removeInstance('myArea1');
                area1 = null;
        }
  }
 
  function addArea2() {
        area2 = new nicEditor({fullPanel : true}).panelInstance('myArea2');
  }
  function removeArea2() {
        area2.removeInstance('myArea2');
  }
 
  bkLib.onDomLoaded(function() { toggleArea1(); });
  </script>

    </td>
</tr>
<tr>     
         <input type="hidden" name="ingranaggio" value="1" />
         <input type="hidden" name="login" value="<? echo $login; ?>" />
         <input type="hidden" name="zona" value="<? echo $zona; ?>" />
		 <td ><font size="3" face="Arial" color="#000000">- Memorizza  </font>      
         </font></td>      
		  <td colspan="4" align="center"><input type="submit" value="Memorizza" name="B3"></td>        
</tr>
   </table>
</form> 
<button onclick="addArea2();">Add Editor to TEXTAREA</button> <button onclick="removeArea2();">Remove Editor from TEXTAREA</button>
  


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