<?php
$login=$_REQUEST["login"];
#echo "login".$login;
$ingranaggio=$_REQUEST["ingranaggio"];
$selezionaragsoc=$_REQUEST["selezionaragsoc"];
$selezionacognome=$_REQUEST["selezionacognome"];
$selezionaiva=$_REQUEST["selezionaiva"];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
<style>
@font-face {
   font-family: 'Montserrat';
   src: url(Montserrat.eot);
   src: local('Montserrat'), url('Montserrat.ttf') format('truetype');
}
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 0px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 350px;
  height: 160;
  background-color: #c0bff8;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
    border: 10px solid #99cf8c;
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
</style>
<style>
div#container {
min-width:   650px;
  min-height:  500px;
  max-width:  700px;
  max-height: 1000px;
}
</style>
<style>
a 
{
    text-decoration: none; 
    font-weight: normal;
    color: #000000;
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
  
  </head>
  <body>

<div align="left">
<table id="thetable" style=" border: 0px solid black;" cellspacing="0" width="100%" >
	<thead>
		<tr style=" border: 1px solid black;">
		 
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="2" face="Montserrat" >Codice</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="2" face="Montserrat" >Data Acq.</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="2" face="Montserrat" >Rag. soc.</td>        
      	  <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="2" face="Montserrat" >telefono</td>
           <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="2" face="Montserrat" >email</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="2" face="Montserrat" >Iban</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="2" face="Montserrat" >iva</td>            
          <td  colspan="2" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="2" face="Montserrat" >Operazioni</td>
           </tr>       
	</thead>
	<tbody>
<?php    
$sql = "SELECT *  FROM  clienti where  progr != '' " 
        .  $selezionaragsoc  . $selezionacognome . $selezionaiva .
        " ORDER BY ragsoc";  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
     $progr = $macrogruppo["progr"];
     $ragsocx = $macrogruppo["ragsoc"];
     $dataoperazione = $macrogruppo["dataoperazione"];
     $codice = $macrogruppo["codice"];
     $ivaxx = $macrogruppo["iva"];
     $telefonox = $macrogruppo["telefono"];
     $emailx = $macrogruppo["email"];
     $ibanx = $macrogruppo["iban"];
?>     
	<tr class="first" style=" border: 1px solid black;">
        
      <td style=" border: 0px solid black;" align="center" ><font size="2" face="Montserrat"><?php echo $codice; ?></td>
      <td style=" border: 0px solid black;" align="center" ><font size="2" face="Montserrat"><?php echo $dataoperazione; ?></td>
      <td style=" border: 0px solid black;" align="left" ><font size="2" face="Montserrat"><?php echo $ragsocx; ?></td>
      <td style=" border: 0px solid black;" align="left" ><font size="2" face="Montserrat"><?php echo $telefonox; ?></td>
      <td style=" border: 0px solid black;" align="left" ><font size="2" face="Montserrat"><?php echo $emailx; ?></td>
      <td style=" border: 0px solid black;" align="left" ><font size="2" face="Montserrat"><?php echo $ibanx; ?></td>
      <td style=" border: 0px solid black;" align="center"><font size="2" face="Montserrat"><?php echo $ivaxx; ?></td>
      <td style=" border: 0px solid black;" align="center" ><a  href="leggicliente1.php?login=<?php echo $login; ?>&progr=<?php echo $progr; ?>&ingranaggio=10&cognome=<?php echo $cognome; ?>&ragsocx=<?php echo $ragsocx; ?>&ivax=<?php echo $ivax; ?>"  ><img border="0" background="btn1.gif" src="occhio.png" width="25" height="25"></a></td>
      <td style=" border: 0px solid black;" align="center" ><a  href="leggicliente1.php?login=<?php echo $login; ?>&progr=<?php echo $progr; ?>&ingranaggio=11&cognome=<?php echo $cognome; ?>&ragsocx=<?php echo $ragsocx; ?>&ivax=<?php echo $ivax; ?>"  ><img border="0" background="btn1.gif" src="pencil.png" width="25" height="25"></a></td>
     
     </tr>	     
<?php          
}
}
?>           
            </table>   
</div>
  </body>
</html>