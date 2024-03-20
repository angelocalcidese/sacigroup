<?php
include "conf_DB.php";
$login=$_REQUEST["login"];
$ingranaggio=$_REQUEST["ingranaggio"];

?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>sla</title> 
</head>
<style>
@font-face {
   font-family: 'Montserrat';
   src: url(Montserrat.eot);
   src: local('Montserrat'), url('Montserrat.ttf') format('truetype');
}
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
    font-family: "Arial", "Lucida Grande", Sans-Serif;    
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
<script type="text/javascript">
		
		function controllo(){ 
            with(document.modulo) { 

        if(descrizione.value=="") { 
            alert("Error: manca DESCRIZIONE PRESTAZIONE"); 
            descrizione.focus(); 
            return false; 
                            } 
                                                                   
					                                                                                                                    
                                  } 
        } 
</script>
<?php 


$erroreriferimento="";
if ($ingranaggio==1)
   {
$codice=$_REQUEST["codice"];  
$lav=$_REQUEST["lav"];
$glav=$_REQUEST["glav"];
$h24=$_REQUEST["h24"]; 
$sette=$_REQUEST["sette"]; 
$oresla=$_REQUEST["oresla"];
$oggi=date("Y-m-d H:m:s");
   $sql = "INSERT INTO `sla`(
   codice,
   oresla,
   `glav`,
   lav,
   h24,
   sette,
   `datacreazione`, 
   `operatore`
   ) 
   VALUES (
   '$codice',
   '$oresla',
   '$glav',
   '$lav',
   '$h24',
   '$sette',
   CURRENT_TIMESTAMP,
   '$logink')";
#echo $sql; exit;
if ($conn->query($sql) === FALSE) 
    {
    $erroreriferimento="errore codice volontario già esistente";
    } 
    else
     {
  
     }
   }
   




?>
<body>

<br>
<div align="left">   

<form method="POST" action="sla1.php?login=<? echo $login; ?>" name="modulo" onSubmit="return controllo();">

<table border="1" width="1100"  >
<tr>		
<td colspan="4" align="center" style="color: #ffffff;background-color: #476b5d; font-size: 16px;" ><font face="Montserrat">Tipo SLA gia' Inseriti</font></td>
</tr>
<tr>
<td style="color: #ffffff;background-color: #afc81b; font-size: 16px;"><font face="Montserrat" style="color: #ffffff;background-color: #afc81b; font-size: 16px;" color="#000000">codice SLA</font></td>
<td style="color: #ffffff;background-color: #afc81b; font-size: 16px;"><font face="Montserrat" style="color: #ffffff;background-color: #afc81b; font-size: 16px;" color="#000000">Ore di SLA</font></td>
<td style="color: #ffffff;background-color: #afc81b; font-size: 16px;"><font face="Montserrat" style="color: #ffffff;background-color: #afc81b; font-size: 16px;" color="#000000">Tempistica di Intervento</font></td>
<td style="color: #ffffff;background-color: #afc81b; font-size: 16px;"><font face="Montserrat" style="color: #ffffff;background-color: #afc81b; font-size: 16px;" color="#000000">Orari di Intervento</font></td>
</tr>
<?php
$sql1 = "SELECT * FROM `sla` where operatore = '$logink'  ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{  
      $codice = $macrogruppo["codice"];  
      $oresla = $macrogruppo["oresla"];
      $glav = $macrogruppo["glav"];
      $lav = $macrogruppo["lav"];
      $h24 = $macrogruppo["h24"];
      $sette = $macrogruppo["sette"];
      if($glav==""){$glav="NO";}else{$glav="SI";}
      if($lav==""){$lav="NO";}else{$lav="SI";}
      if($h24==""){$h24="NO";}else{$h24="SI";}
      if($sette==""){$sette="NO";}else{$sette="SI";}
      #echo $descrizione;	
      $tot++;
?>
<tr>
<td style=" border: 0px solid black; color: #000000;"> <font face="Montserrat"><? echo $codice; ?></font></td>	
<td style=" border: 0px solid black; color: #000000;" ><font  face="Montserrat">Ore di SLA <? echo $oresla; ?></font></td>

<td style=" border: 0px solid black; color: #000000;" >
<font  face="Montserrat"><? echo $glav; ?></font>
<font face="Montserrat" style="font-size: 16px;" color="#000000">&nbsp;Giorni Lavorativi&nbsp;&nbsp;&nbsp;</font>
<font  face="Montserrat"><? echo $sette; ?></font>
<font face="Montserrat" style="font-size: 16px;" color="#000000">&nbsp;Sette gg su Sette</font>				
</td>

<td style=" border: 0px solid black; color: #000000;" >
<font  face="Montserrat"><? echo $lav; ?></font>
<font face="Montserrat" style="font-size: 16px;" color="#000000">&nbsp;Orario lLavoro&nbsp;&nbsp;&nbsp;</font>
<font  face="Montserrat"><? echo $h24; ?></font>
<font face="Montserrat" style="font-size: 16px;" color="#000000">&nbsp;H24</font>				
</td>


</tr>	
<?php } } ?>                                                 
<tr>
<td colspan="2">&nbsp;
</td>
</tr>
<tr>		
<td colspan="4" align="center" style="color: #ffffff;background-color: #476b5d; font-size: 16px;" ><font face="Montserrat">Inserimento Nuovo</b></font></td>
</tr>
<tr>
<td style="color: #ffffff;background-color: #afc81b; font-size: 16px;"><font face="Montserrat" style="color: #ffffff;background-color: #afc81b; font-size: 16px;" color="#000000">codice SLA</font></td>
<td style="color: #ffffff;background-color: #afc81b; font-size: 16px;"><font face="Montserrat" style="color: #ffffff;background-color: #afc81b; font-size: 16px;" color="#000000">Ore di SLA</font></td>
<td style="color: #ffffff;background-color: #afc81b; font-size: 16px;"><font face="Montserrat" style="color: #ffffff;background-color: #afc81b; font-size: 16px;" color="#000000">Tempistica di Intervento</font></td>
<td style="color: #ffffff;background-color: #afc81b; font-size: 16px;"><font face="Montserrat" style="color: #ffffff;background-color: #afc81b; font-size: 16px;" color="#000000">Orari di Intervento</font></td>
</tr>
<tr>
<td>								
<input type="text" size="25" name="codice" style="background-color: #ececee;border:0 none;font-size: 16px;"" maxlength="70">				
</td>

<td>				
<input type="text" name="oresla"  size="5" style="background-color: #ececee;border:0 none;font-size: 16px;"" maxlength="2">
</td>



<td>
<input style="width: 14px;  height: 16px;" type="checkbox" name="glav" size="1" maxlength="">
<font face="Montserrat" style="font-size: 16px;" color="#000000">&nbsp;Giorni Lavorativi&nbsp;&nbsp;&nbsp;</font>
<input style="width: 14px;  height: 16px;" type="checkbox" name="sette" size="1" maxlength="">
<font face="Montserrat" style="font-size: 16px;" color="#000000">&nbsp;Sette gg su Sette</font>				
</td>

<td>
<input style="width: 14px;  height: 16px;" type="checkbox" name="lav" size="1" maxlength="">
<font face="Montserrat" style="font-size: 16px;" color="#000000">&nbsp;Orario lavorativo&nbsp;&nbsp;&nbsp;</font>
<input style="width: 14px;  height: 16px;" type="checkbox" name="h24" size="1" maxlength="">
<font face="Montserrat" style="font-size: 16px;" color="#000000">&nbsp;H24</font>				
</td>
			
</tr>      
<input type="hidden" name="ingranaggio" value="1" />
<input type="hidden" name="login" value="<?php echo $login; ?>" />       
<tr>
<td >&nbsp;</td>
<td><input type="submit" style="height: 22px; background-color: #cc0000;border: 0px; color: #ffffff;" value="Inserisci" name="B3"></td>
</tr>
</table>

</form>
</div>
</div>

</body>

</html>