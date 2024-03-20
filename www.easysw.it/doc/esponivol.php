<?php

$login=$_REQUEST["login"];
$zona=$_REQUEST["zona"];
$ingranaggio=$_REQUEST["ingranaggio"];
$numero=$_REQUEST["numero"];
$datainv=$_REQUEST["datainv"];
$data=$_REQUEST["data"];
#$data="2019-09-12";
$comodo=explode('-',$data);
$datainv=$comodo[2]."/".$comodo[1]."/".$comodo[0];
$camera=$_REQUEST["camera"];
$tesseram=$_REQUEST["volontario"];
$tesserav=explode(" - ",$tesseram);
$tesseran=$tesserav[0];
#$camera="Guardaroba";
$orainiziox=$_REQUEST["orainiziox"];
$orafinex=$_REQUEST["orafinex"];
$oggi=date("Y-m-d");
include "conf_DB.php";

if ($ingranaggio==2)
{
$sql1 = "SELECT * FROM progprenovol  where progr = '1' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $tesserask = $macrogruppo["tessera"];	 
			} }
$tesserask++;
$sql = "UPDATE progprenovol set 
tessera = '$tesserask'
where 
progr = '1' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; exit;}      

#$date = "04-15-2013";
$comodo=explode("/",$datainv);
$data2=$comodo[1]."-".$comodo[0]."-".$comodo[2];
$date1 = str_replace('-', '/', $data2);
$datafine = date('Y-m-d',strtotime($date1 . "+1 days"));

    
$comodo=explode("/",$datainv);
$datainizio=$comodo[2]."-".$comodo[1]."-".$comodo[0];




 $sql = "insert into prenotazionivol
 (
  numero,
  datainizio,
  datafine,
  camera,
  confermato,
  dataentrata,
  datauscita,
  socio,
  dataannulla,
  orainizio,
  orafine
     
 )
  values
 ( 
   '$tesserask',
   '$datainizio',
   '$datafine',
   '$camera',
   'SI',
   '$datainizio',
   '$datafine',
   '$tesseran',
   '$datainizio',
   '$orainiziox',
   '$orafinex'
   )
    ";
#echo $sql; exit;
    if ($conn->query($sql) === TRUE)
        { } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 
    
}

if($ingranaggio==1){
$sql = "
DELETE from prenotazionivol where numero = '$numero'";
if ($conn->query($sql) === FALSE)
  {echo "errxx=errore";exit;}
  else
  {}
$ingranaggio="";
}
#header('Content-Type: text/html; charset=utf-8'); 
?>

<html>
<head>

	<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
	<title>Esponi Assistiti</title>
	<link rel="stylesheet" type="text/css" href="jquery.tablescroll.css"/>
<style>
div#container {
min-width:   700px;
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
<body onunload="javascript:window.opener.location.reload ();">
<div align="center" >
	<table style=" border: 0px solid black;" width="760" height="140" bgcolor="#ffffff"  >
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
	</table>  
      
</div> 
<div align="center">   
<div id="container">
<p align="center"><b><font face="Arial" size="5" color="#993300">PRESENZE DEL <? echo $datainv; ?> AL <? echo $camera; ?></font></b></p>
<p align="center">

</font></b>




</p>
 
<div align="center">
<div id="container">
	<table id="thetable" cellspacing="0" width="100%">
	<thead>
		<tr>
		  <td background="back-barra-menuorrizontale.gif" align="center"><font size="3" face="Arial"  color="#ffffff">Progr.</td>
	<!--	  <td  background="back-barra-menuorrizontale.gif" align="center" style="width:10%;"><font size="3" face="Arial" color="#ffffff">Cod. Ospite</td>  -->
      		  <td  background="back-barra-menuorrizontale.gif" align="center"><font size="3" face="Arial" color="#ffffff">Codice</td>

		  
      <td  background="back-barra-menuorrizontale.gif" align="center"><font size="3" face="Arial" color="#ffffff">Cognome</td>
		  <td  background="back-barra-menuorrizontale.gif" align="center"><font size="3" face="Arial" color="#ffffff">Nome</td>
<!--      <td  background="back-barra-menuorrizontale.gif" align="center"style="width:10%;" ><font size="3" face="Arial" color="#ffffff">Ore da</td>
      <td  background="back-barra-menuorrizontale.gif" align="center"><font size="3" face="Arial" color="#ffffff">Ore a</td> -->
      <td  background="back-barra-menuorrizontale.gif" align="center"><font size="3" face="Arial" color="#ffffff">Togli</td>
   

          
       </tr>
	</thead>
	<tbody>

  <?php
$tot=0;
$sql1x = "SELECT * FROM prenotazionivol  where camera = '$camera' and datainizio = '$data'";
$resultx = $conn->query($sql1x);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc()) 
		{$confermato = $macrogruppox["confermato"];  
    $dataentrata = $macrogruppox["dataentrata"];    
    $datauscita = $macrogruppox["datauscita"];     
    $tipocliente = $macrogruppox["tipocliente"]; 
    $datainizio = $macrogruppox["datainizio"];    
    $datafine = $macrogruppox["datafine"];
    $numero = $macrogruppox["numero"];
    $socio = $macrogruppox["socio"];
    $orainizio = $macrogruppox["orainizio"];
    $orafine = $macrogruppox["orafine"];
    $sql1xx = "SELECT * FROM socivolontari  where tessera = '$socio'";
    #echo $sql1x; 
    $resultxx = $conn->query($sql1xx);
    if ($resultx->num_rows > 0) {
    while($macrogruppoxx = $resultxx->fetch_assoc()) 
		{
     $cognome = $macrogruppoxx["cognome"];
     $nome = $macrogruppoxx["nome"];
     $indirizzores = $macrogruppoxx["indirizzo"];
     $residentecitta = $macrogruppoxx["localita_residenza"];
     $residenteprov= $macrogruppoxx["provincia"];
     $cap = $macrogruppoxx["cap"];
     $telefono = $macrogruppoxx["telefono"];
     
    }}
$tot++;       
?>


      
      
	<tr class="first">
      <td align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Arial"><?php echo $tot; ?></td>

      <td  align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Arial"><?php echo $socio; ?></td>
   

      <td  align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Arial"><?php echo $cognome; ?></td>
      <td  align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Arial"><?php echo $nome; ?></td>
<!--      <td  align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Arial"><?php echo $orainizio; ?></td>
      <td  align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Arial"><?php echo $orafine; ?></td> -->
      <td  align="center"><a href="esponivol.php?&login=<?php echo $login; ?>&numero=<? echo $numero; ?>&ingranaggio=1&camera=<? echo $camera; ?>&data=<? echo $data; ?>"><img border="0" background="btn1.gif" src="presenzano.jpg" width="30" height="25"></a></td>  
       
         </tr>	
<?php } }?>          
      
      
      
      
      
      
      
		</tr>

	</tbody>
	</table>
  <br>
  	<table id="thetable" cellspacing="0" width="100%">
    <form action=""> 
     <tr>
		<td >
       
<font face="Arial" size="2" color="#fd071e"><b>- VOLONTARIO DA AGGIUNGERE:</b> </font>
    </td>
		<td>				
					 <select size="1" name="volontario" id="volontario" style="font-size: 10pt">
			      
<?php
$sql1 = "select * from socivolontari  order by cognome";

$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ 
      $cognomem = $macrogruppo["cognome"];
      $nomem = $macrogruppo["nome"];
      $tesseram = $macrogruppo["tessera"];
      $sw=0;	
$sql1x = "SELECT * FROM prenotazionivol  where camera = '$camera' and datainizio = '$data' and socio = '$tesseram'";
$resultx = $conn->query($sql1x);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc()) 
		{ $sw=1;}}     
if ($sw==0){
#echo $nota; 
 
      $malato=$tesseram. " - ".$cognomem." ".$nomem;
?>		
			<option ><?php echo $malato; ?></option>
<?php } } } ?>		
			</select> 

<!--        <font size="2" face="Arial" color="#000000">- ORA DA:</font>				
				<input type="text" name="orainiziox"  size="1"  style="background-color: #ececee">
				<font size="2" face="Arial" color="#000000">- ORA A:</font>			
				<input type="text" name="orafinex"  size="1"  style="background-color: #ececee">   -->
				&nbsp;&nbsp;&nbsp;
		  
      
      
      
        		
        <input type="hidden" name="ingranaggio" value="2" />
        <input type="hidden" name="login" value="<?php echo $login; ?>" />
         <input type="hidden" name="data" value="<?php echo $data; ?>" />
          <input type="hidden" name="camera" value="<?php echo $camera; ?>" />
          <input type="hidden" name="orainiziox" value="9" />
          <input type="hidden" name="orafinex" value="13" />
          <input type="hidden" name="datainv" value="<?php echo $datainv; ?>" />
				<input type="submit" value="Aggiungi" name="B6">  
  
  
  </td> 

			</tr> 
</form>
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
</body>
</html>