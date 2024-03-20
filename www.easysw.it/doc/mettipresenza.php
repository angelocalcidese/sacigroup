
<?php

$login=$_REQUEST["login"];
$tessera=$_REQUEST["tessera"];
$camera=$_REQUEST["camera"];
$data=$_REQUEST["data"];

?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>cancella presenza volontario</title>
</head>
<style>
div#container {
min-width:   700px;
  min-height:  500px;
  max-width:  600px;
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
.table6 td {
background: #ffffff;
padding: 2px;
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
    padding:2px 20px; 
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
    
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 350px;
  height: 265;
  background-color: #FFCC00;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  border: 13px solid #FFCC00;
 box-shadow: 5px 10px 18px #1b5633;
  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
} 


.tooltipx {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltipx .tooltiptext {
  visibility: hidden;
  width: 400px;
  height: 700;
  background-color: #feaaaa;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  border: 3px solid #b0adad;
 box-shadow: 5px 10px 18px #1b5633;
  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltipx:hover .tooltiptext {
  visibility: visible;
}   
input[type=submit] {
    padding:2px 20px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;  }   
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
<script type="text/javascript">
		
		function controllo(){ 
            with(document.modulo) { 
        if(importoass.value=="") { 
            alert("Error: manca IMPORTO ASSOCIATIVO"); 
            importoass.focus(); 
            return false; 
                            } 
					                                                            
                                                            
                                  } 
        } 
</script>
<?php 
$ingranaggio=$_REQUEST["ingranaggio"];
$orainizio=$_REQUEST["orainizio"];
$orafine=$_REQUEST["orafine"];
include "conf_DB.php";

if ($ingranaggio==1)
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
$comodo=explode("/",$data);
$data2=$comodo[1]."-".$comodo[0]."-".$comodo[2];
$date1 = str_replace('-', '/', $data2);
$datafine = date('Y-m-d',strtotime($date1 . "+1 days"));

    
$comodo=explode("/",$data);
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
   '$tessera',
   '$datainizio',
   '9',
   '13'
   )
    ";
#echo $sql; exit;
    if ($conn->query($sql) === TRUE)
        { } 
        else { echo "ATTENZIONE Errore inserimento in DB della disponibilia' chiama Calcidese: ".$sql ; } 
    
?>
<script type="text/javascript">setTimeout("window.close();", 60);</script>  
<?  
}

#exit;
/*
$sql1 = "SELECT * FROM prenotazionivol  where numero = '$tessera' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ 
      $socio = $macrogruppo["socio"];	
      $datainizio = $macrogruppo["datainizio"];	
      $comodo=explode("-",$datainizio);
      $datainizio=$comodo[2]."/".$comodo[1]."/".$comodo[0];
      $orainizio = $macrogruppo["orainizio"];	
      $orafine = $macrogruppo["orafine"];	
      }}
      */
$sql1 = "SELECT * FROM socivolontari  where tessera = '$tessera' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{       
      $cognome = $macrogruppo["cognome"];
      $nome = $macrogruppo["nome"];
			} }
?>
<body onunload="javascript:window.opener.location.reload ();">

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
 
   
	</table>  
      
</div> 
<div align="center">   
<div id="container">

<p align="center"><b><font face="Arial" size="4" color="#993300">INSERIMENTO PRESENZA VOLONTARIO </font></b></p>
<table border="1" width="100%" bgcolor="#FFF4F7" class="table6">	<tr>	<tr>
<form method="POST" action="">		
    <td>
		<table border="1" width="100%">
			
      <tr>
				<td width="237"><font size="2" face="Arial" color="#000000">- COGNOME:</font></td>
				<td>				
					<p>
					<b><font size="3" face="Arial"><?php echo $cognome; ?></font></b></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font size="2" face="Arial" color="#000000">- NOME:</font></td>
				<td>				
					<b><font size="3" face="Arial"><?php echo $nome; ?></font></b>
				</td>
			</tr>
      <tr>
				<td width="237"><font size="2" face="Arial" color="#000000">- LUOGO:</font></td>
				<td>				
					<b><font size="3" face="Arial"><?php echo $camera; ?></font></b>
				</td>
			</tr>
		  	<tr>
				<td width="237"><font size="2" face="Arial" color="#000000">- DATA:</font></td>
				<td>				
					<b><font size="3" face="Arial"><?php echo $data; ?></font></b>
				</td>
			</tr>
<!--			<tr>
				<td width="237"><font size="2" face="Arial" color="#000000">- ORA DA:</font></td>
				<td>				
					<input type="text" name="orainizio" value="<?php echo $orainizio; ?>"  size="1"  style="background-color: #ececee">
				</td>
			</tr>	
      	<tr>
				<td width="237"><font size="2" face="Arial" color="#000000">- ORA A:</font></td>
				<td>				
				<input type="text" name="orafine" value="<?php echo $orafine; ?>"  size="1"  style="background-color: #ececee">
				
				</td>
			</tr>    -->
		</table>
		</td>
	</tr>
</table>
<br><br>

       <input type="hidden" name="ingranaggio" value="1" />
       <input type="hidden" name="login" value="<?php echo $login; ?>" />
       <input type="hidden" name="tessera" value="<?php echo $tessera; ?>" />	
       <input type="hidden" name="data" value="<?php echo $data; ?>" />	
       <input type="hidden" name="camera" value="<?php echo $camera; ?>" />	
				<td align="center"><input type="submit" value="Inserisci" name="B3"></td>
</form>
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