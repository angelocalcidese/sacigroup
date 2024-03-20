<?
$progr=$_GET["progr"];
$login=$_GET["login"];
$ingranaggio=$_GET["ingranaggio"];
$note=$_GET["note"];
include "conf_DB.php";
if($ingranaggio==100){
$sql = "UPDATE documenti set 
note = '$note'
where 
progr = '$progr' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 

}



$sql1 = "SELECT *  FROM  documenti where progr = '$progr'"; 
	        $result = $conn->query($sql1);
            if ($result->num_rows > 0) {
            while($macrogruppo = $result->fetch_assoc()) 
        	{$progr = $macrogruppo["progr"]; 
              $datadoc = $macrogruppo["datadoc"];
      $tipo = $macrogruppo["tipodoc"];
      $classe = $macrogruppo["classe"];
      $classesic = $macrogruppo["classesic"];
      $numero = $macrogruppo["iddoc"];
      $protocollo = $macrogruppo["protocollo"];
      $posizione = $macrogruppo["fisico"];
      $file = $macrogruppo["file"];
      $oggetto = $macrogruppo["oggetto"]; 
      $oggi = $macrogruppo["oggi"]; 
      $loginx = $macrogruppo["login"];
      $note = $macrogruppo["note"];          
            }}  
?> 
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
min-width:   1050px;
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
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;1,100&display=swap');
</style>
<body style="background-color:#000000;">  
<div align="left" style="background-color:#000000;">
<table border="0" width="100%" height="70" bgcolor="#000000">
<tr>
<td>
<table  align="left" >
<tr > 
<td>
<? include "mettilogo1.php"; ?>
 
<?php
$sql1 = "SELECT * FROM associazione  where login = '$login'";
#echo $sql1; 
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())
		{ 
      
      $btempo = $macrogruppo["btempo"];
			}  }

$sql1 = "SELECT * FROM utenti  where login = '$login'  ";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{$codvolontario = $macrogruppo["codvolontario"];
     $dio = $macrogruppo["dio"];
     $cognomevol = $macrogruppo["cognome"];
     $nomevol = $macrogruppo["nome"];
    } }

?>
</td>
<td align="center" width="100%" style="vertical-align: text-top;">
<form action="" target="marchio1">
<table align="center" id="thetable" style=" border: 1px solid #68696a; background-color: #000000; cellspacing="0" width="100%"  class="table6">
            <tr>
            <td colspan="2" align="center" style=" border: 1px solid #68696a;" ><b><font face="Montserrat" color="#cacdd1">AGGIORNA DATI DOCUMENTO</font></b>
            </td>
            </tr>
            <tr>
            <td width="180" style=" border: 1px solid #68696a;font-size: 9pt;" ><font face="Montserrat" color="#ffffff" >OGGETTO DEL DOC.: </font></b></td>
            <td style=" border: 1px solid #68696a;font-size: 9pt;" ><font face="Montserrat" color="#de4d4d"><? echo $oggetto; ?></font></b></td>
			</tr>
            <tr>
            <td width="180" style=" border: 1px solid #68696a;font-size: 9pt;" ><font face="Montserrat" color="#ffffff" >NOTE: </font></b></td>
            <td style=" border: 1px solid black;">
            <input type="text" name="note"  size="130" style="background-color: #959191; border: 0px; font-size: 12pt;" value="<? echo $note; ?>">
			</td></tr>
            <tr>
				<td >&nbsp;</td>
				<td>
                 <input type="hidden" name="ingranaggio" value="100" />
                 <input type="hidden" name="login" value="<?php echo $login; ?>" />
                 <input type="hidden" name="progr" value="<?php echo $progr; ?>" />
                 <input type="submit" value="Memorizza Note" style="height: 22px; background-color: #cc0000;border: 0px; color: #ffffff;" name="B3xxx"></td>               
			</tr>
</table>  
</form>          
</td>
</table> 
</td>
</tr>
</table>
     
<br>      
</div> 





         
