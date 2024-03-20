<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>banca del tempo carpe diem quinto romano chi siamo</title>
  <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Elastic Image Slideshow with Thumbnail Preview" />
        <meta name="keywords" content="jquery, css3, responsive, image, slider, slideshow, thumbnails, preview, elastic" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="../css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
		<noscript>
			<link rel="stylesheet" type="text/css" href="../css/noscript.css" />
		</noscript>
    
<script>

    var newImage = new Image();

function updateImage() {
    if(newImage.complete) {
           newImage.src = document.getElementById("img").src;
           var temp = newImage.src;
           document.getElementById("img").src = newImage.src;
           newImage = new Image();
           newImage.src = temp+"?" + new Date().getTime();

}
setTimeout(updateImage, 1000);
};
</script>    
<style>
#menu ul {
width:1050px; /* Dimensioni della barra del menu */
padding:0;
margin:0 auto;
display:block;
list-style-type:none; /* Stile della lista */
}
#menu li {
display:inline; 
}
#menu a {
color:#fff; /* Colore del testo */
text-align:center; /* Testo allineato al centro */
text-decoration:none; /* Nessuna decorazione */
background:#909090; /* Colore dello sfondo */
padding:3px 29.5px; /* Distanza tra le singole voci */
border-right:2px solid #ffffff; 
font-family:  Verdana;
}
#menu a:hover {
background:#007fff; /* Colore dello sfondo */
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


</style>


</head>
<body onload="updateImage();">
 <br>     
<div align="center">
	<table border="0" width="30%">
		<tr>
			<td >
      <div class="polaroid">
			<img border="0" src="../carlopoma.png" width="954" height="140">
      <div class="containerx">
      </div>
      </div>
      </td>  
		</tr>
	</table>
  </div>


 
	<div align="center">
  <h1>
		<p  align="center"><font face="Elephant" size="5" color="#ffffff">CARPE DIEM</font></p>   
   </h1>
</div>  
  </div> 
  


  
<div id="menu" align="center">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="chisiamo.php">Chi Siamo</a></li>
<li><a href="attivita.php">Attivita'</a></li>
<li><a href="eventi.php">Eventi</a></li>
<li><a href="corsi.php">Giornalino</a></li>
<li><a href="gite.php">Escursioni</a></li>
<li><a href="dovesiamo.php">Dove Siamo</a></li>
<li><a href="contatti.php">Contatti</a></li>
</ul>
</div> 
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<div align="center">
<table>
<tr>

</tr> 
</table>
</div>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
	<div align="center">
		<p align="center"><font face="Verdana" size="5" color="#000000">INSERIMENTO NOTIZIA</font></b></p>
<br></div>  
  </div>   




<div align="center">   
<div id="container">
 <form method="POST" action="cerca2email.php?login=<?php echo $login; ?>" enctype="multipart/form-data">   
<table border="1" width="100%" bgcolor="#FFF4F7" class="table6" >	
	<tr>
		<td><font size="5" face="Arial" color="#FFFFFF">Oggetto: </font>   </td>
    <td><input style="font-size: 20px;" name="oggetto della notizia"  size="63" value="<? echo $oggetto;?>"></td>
   </tr>
  <tr >

    <td><font size="5" face="Arial" color="#FFFFFF">Inserisci testo della notizia </font>   </td>
<script type="text/javascript" src="nic/nicEdit.js"></script>
<script type="text/javascript">
	   bkLib.onDomLoaded(function() {
          var myNicEditor = new nicEditor();
          myNicEditor.setPanel('myNicPanel');
          myNicEditor.addInstance('testo');
          myNicEditor.addInstance('myInstance2');
          myNicEditor.addInstance('myInstance3');
     });
</script>
<td style="font-size: 13px;background-color: #ffffff;"  align="center">
<div id="myNicPanel" style="width: 700px;"></div>
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
{$lungo=700;}else{$lungo=724;}

?>
<!--<textarea style="font-size: 20px;" name="testo"  id="testo" rows="20" cols="60"><? echo $testo;?></textarea>   -->
<textarea id="testo" rows="8" name="testo" style=" background-color: #ffffff;  width: <? echo $lungo;?>;"><? echo $testo;?></textarea>

    </td>
   </tr>
   <tr>
	
    <input type="hidden" name="login" value="<?php echo $login; ?>" />
       <input type="hidden" name="tessera" value="<?php echo $tesserax; ?>" />
       <input type="hidden" name="cognome" value="<?php echo $cognomex; ?>" />
       <input type="hidden" name="annoassociato" value="<?php echo $annoassociatox; ?>" />
       <input type="hidden" name="nome" value="<?php echo $nomex; ?>" />
       <input type="hidden" name="natoa" value="<?php echo $natoax; ?>" />    
       <input type="hidden" name="datanascita" value="<?php echo $datanascitax; ?>" />
       <input type="hidden" name="residentecitta" value="<?php echo $residentecittax; ?>" />
       <input type="hidden" name="provnatoa" value="<?php echo $provnatoax; ?>" />
       <input type="hidden" name="indirizzores" value="<?php echo $indirizzoresx; ?>" />
       <input type="hidden" name="cap" value="<?php echo $capx; ?>" />
       <input type="hidden" name="email" value="<?php echo $emailx; ?>" /       
       <input type="hidden" name="telefono" value="<?php echo $telefonox; ?>" />
       <input type="hidden" name="cellulare" value="<?php echo $cellularex; ?>" />
       <input type="hidden" name="codfisc" value="<?php echo $codfiscx; ?>" />
       <input type="hidden" name="residenteprov" value="<?php echo $residenteprovx; ?>" />
       <input type="hidden" name="accdati" value="<?php echo $accdatix; ?>" />
       <input type="hidden" name="comunicazioni" value="<?php echo $comunicazionix; ?>" />
   
				<td ><font size="5" face="Arial" color="#FFFFFF">- Carica Allegato</font></td>
				<td> 
        <input type="file"   name="fileToUpload" id="fileToUpload" size="50" style="font-size: 12pt; font-weight: bold" ></td>
       	</tr>
          <input type="hidden" name="ingranaggio" value="2" /> 
           
      	<tr>
				<td ><font size="5" face="Arial" color="#fbfd2e">- Invia EMAIL di prova </font></td>
				<td><fieldset>
        <font size="5" face="Arial" color="#fbfd2e">Email di Prova <input type="radio" name="linguaggio" value="prova" checked="checked" " /> </font>
        <font size="5" face="Arial" color="#fbfd2e">Email per tutta la lista<input type="radio" name="linguaggio" value="noprova"/> </font>
        </fieldset></td>
        </tr> 
       
			<tr>
				<td ><font size="5" face="Arial" color="#FF0000">- Invia EMAIL</font></td>      
				<td><input type="image" name="B3"  src="mail.png" width="50" height="50"></td> 
        
			</tr>
   </table>
</form>   
<br>
 
<div align="center">
<div id="container">
	<table id="thetable" cellspacing="0" width="100%">
	<thead>
		<tr>
		  <td background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">N.</td>
		  <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">Tessera</td>
		  <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">Cognome</td>
		  <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">Nome</td>
		  <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF">email</td>
      <td  background="back-barra-menuorrizontale.gif" align="center"><font size="4" face="Arial" color="#FFFFFF"><img border="0" background="btn1.gif" </td>
    </tr>
	</thead>
	<tbody>

 



      
  <form method="POST" action="cerca2email.php?login=<?php echo $login; ?>">    
	<tr class="first">
      <td align="center"><font size="3"><?php echo $tot; ?></td>
      <td  align="center"><font size="3"><?php echo $tessera; ?></td>
      <td  align="center"><font size="3"><?php echo $cognome; ?></td>
      <td  align="center"><font size="3"><?php echo $nome; ?></td>
      <td  align="center"><font size="3"><?php echo $emailx; ?></td>
      <td  align="center">

       <input type="hidden" name="login" value="<?php echo $login; ?>" />

       <input type="hidden" name="tessera" value="<?php echo $tesserax; ?>" />

       <input type="hidden" name="cognome" value="<?php echo $cognomex; ?>" />

       <input type="hidden" name="annoassociato" value="<?php echo $annoassociatox; ?>" />

       <input type="hidden" name="nome" value="<?php echo $nomex; ?>" />

       <input type="hidden" name="natoa" value="<?php echo $natoax; ?>" />
       
       <input type="hidden" name="datanascita" value="<?php echo $datanascitax; ?>" />

       <input type="hidden" name="residentecitta" value="<?php echo $residentecittax; ?>" />

       <input type="hidden" name="provnatoa" value="<?php echo $provnatoax; ?>" />

       <input type="hidden" name="indirizzores" value="<?php echo $indirizzoresx; ?>" />

       <input type="hidden" name="cap" value="<?php echo $capx; ?>" />

       <input type="hidden" name="email" value="<?php echo $emailx; ?>" />
       
       <input type="hidden" name="telefono" value="<?php echo $telefonox; ?>" />

       <input type="hidden" name="cellulare" value="<?php echo $cellularex; ?>" />

       <input type="hidden" name="codfisc" value="<?php echo $codfiscx; ?>" />

       <input type="hidden" name="residenteprov" value="<?php echo $residenteprovx; ?>" />

       <input type="hidden" name="accdati" value="<?php echo $accdatix; ?>" />
       
       <input type="hidden" name="comunicazioni" value="<?php echo $comunicazionix; ?>" />
        <input type="hidden" name="tesseray" value="<?php echo $tessera; ?>" />

      <input type="image" name="submit" src="x.png" width="20" height="20">
	
     
      </td>

    </tr>	
    </form>
     
		</tr>

	</tbody>
	</table>
  <br>

</div>
</div>
</div>


<?php
include ("../footer.php");
?>
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
<script>
function carica_consegnaF(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=1000,height=300,left=150,top=150,location=0,directories=0,toolbar=0,scrollbars=yes,resizable=1')
    
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>
</body>
</html>