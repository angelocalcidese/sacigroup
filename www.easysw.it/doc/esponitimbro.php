<?
$progr=$_GET["progr"];
include "conf_DB.php";
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
      $comodo1=explode(" ",$oggi); 
      $comodo=explode("-",$comodo1[0]);
      $oggi=$comodo[2]."/".$comodo[1]."/".$comodo[0];
      $oggi=$oggi." ".$comodo1[1];
      $loginx = $macrogruppo["login"]; 
      $correla = $macrogruppo["correla"];          
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
html::-webkit-scrollbar {
width: 10px;
}
html::-webkit-scrollbar-track {
background: #ccc;
box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.5);
}
html::-webkit-scrollbar-thumb {
background: #858785;
}
</style>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;1,100&display=swap');
</style>
<body style="background-color:#000000;"> 
<center>          
<table align="center" id="thetable" style=" border: 1px solid #68696a; background-color: #000000; cellspacing="0" width="270" class="table6">
            <tr>
            <td colspan="2" align="center" style=" border: 1px solid #68696a;" width="35%"><b><font face="Montserrat" color="#4ee546">DATI DOCUMENTO</font></b>
            </td>
            </tr>
            <tr>
			<td  align="left"style=" border: 0px solid #68696a;font-size: 9pt;background-color:#000000;" width="35%"><font face="Montserrat" color="#ffffff">INSERITO IL/DA: </font></b></td>
            </tr>
            <tr> 
            <td style=" border: 0px solid #68696a;font-size: 10pt;" width="65%"><font face="Montserrat" color="#de4d4d"><? echo $oggi; ?> da: </font><font face="Montserrat" color="#de4d4d" style="font-size: 8pt;"><? echo $loginx; ?></font></b></td>
			</tr>
			<tr>
			<td  align="left"style=" border: 0px solid #68696a;font-size: 9pt;background-color:#000000;" width="35%"><font face="Montserrat" color="#ffffff">DATA DOCUMENTO: </font></b></td>
            </tr>
            <tr> 
            <td style=" border: 0px solid #68696a;font-size: 10pt;" width="65%"><font face="Montserrat" color="#de4d4d"><? echo $datadoc; ?> </font></b></td>
			</tr>
            <tr>
			<td  align="left" style=" border: 0px solid #68696a;font-size: 9pt;background-color:#000000;" ><font face="Montserrat" color="#ffffff">TIPO DOCUMENTO: </font></b></td>
            </tr>
            <tr>
            <td style=" border: 0px solid #68696a;font-size: 10pt;" ><font face="Montserrat" color="#de4d4d"><? echo $tipo; ?></font></b></td>
			</tr>
            <tr>
			<td  align="left" style=" border: 0px solid #68696a;font-size: 9pt;background-color:#000000;" ><font face="Montserrat" color="#ffffff">CLASSIFICAZIONE: </font></b></td>
            </tr>
            <tr>
            <td style=" border: 0px solid #68696a;font-size: 10pt;" ><font face="Montserrat" color="#de4d4d"><? echo $classe; ?></font></b></td>
			</tr>
            <tr>
			<td  align="left" style=" border: 0px solid #68696a;font-size: 9pt;background-color:#000000;" ><font face="Montserrat" color="#ffffff">CLASSE RISERVATEZZA: </font></b></td>
            </tr>
            <tr>
            <td style=" border: 0px solid #68696a;font-size: 10pt;" ><font face="Montserrat" color="#de4d4d"><? echo $classesic; ?></font></b></td>
			</tr>
            <tr>
            <td  align="left" style=" border: 0px solid #68696a;font-size: 9pt;background-color:#000000;" ><font face="Montserrat" color="#ffffff">N. IDENTIFICATIVO DOC.: </font></b></td>
            </tr>
            <tr>
            <td style=" border: 0px solid #68696a;font-size: 10pt;" ><font face="Montserrat" color="#de4d4d"><? echo $numero; ?></font></b></td>
			</tr>
            
            <tr>
            <td  align="left" style=" border: 0px solid #68696a;font-size: 9pt;background-color:#000000;" ><font face="Montserrat" color="#ffffff">NUMERO PROTOCOLLO: </font></b></td>
            </tr>
            <tr>
            <td style=" border: 0px solid #68696a;font-size: 10pt;" ><font face="Montserrat" color="#de4d4d"><? echo $protocollo; ?></font></b></td>
			</tr>
            <tr>
            <td  align="left" style=" border: 0px solid #68696a;font-size: 9pt;background-color:#000000;" ><font face="Montserrat" color="#fffff">POSIZIONE FISICA DI ARC.: </font></b></td>
            </tr>
            <tr>
            <td style=" border: 0px solid #68696a;font-size: 10pt;" ><font face="Montserrat" color="#de4d4d"><? echo $posizione; ?></font></b></td>
			</tr>
            </table>
            <br>
<table align="center" id="thetable" style=" border: 1px solid #68696a; background-color: #000000; cellspacing="0" width="270" class="table6">
            <tr>
            <td colspan="2" align="center" style=" border: 1px solid #68696a;" width="35%"><b><font face="Montserrat" color="#4ee546">DOCUMENTI CORRELATI</font></b>
            </td>
            </tr> 
          
<?php 
#echo "progr".$progr;
$sql1 = "SELECT *  FROM  documenti where (correla = '$correla') and (correla != '') ORDER BY str_to_date(datadoc,'%d/%m/%Y')"; 
	        $result = $conn->query($sql1);
            if ($result->num_rows > 0) {
            while($macrogruppo = $result->fetch_assoc()) 
        	{ 
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
      $comodo1=explode(" ",$oggi); 
      $comodo=explode("-",$comodo1[0]);
      $oggi=$comodo[2]."/".$comodo[1]."/".$comodo[0];
      $oggi=$oggi." ".$comodo1[1];
      $loginx = $macrogruppo["login"]; 
      $progrx = $macrogruppo["progr"];          
?> 
<form action="esponipdfff.php" target="evidenza">                        
            <tr>
<?php  if($progr==$progrx){$colore="#4ee546";}else{$colore="#ffffff";}  ?>
			<td style=" border: 1px solid #68696a;font-size: 10pt;" ><font face="Montserrat" color="<?php echo $colore; ?>"><? echo $datadoc." ".$tipo; ?></font></b></td>
            <input type="hidden" name="progr" value="<?php echo $progrx; ?>" />
            <input type="hidden" name="correla" value="<?php echo $correla; ?>" />
            <input type="hidden" name="login" value="<?php echo $login; ?>" />
            <input type="hidden" name="fl" value="<?php echo $file; ?>" />
            <td align="right"><input  type="submit" value="Vedi" style="height: 17px; background-color: #cc0000;border: 0px; color: #ffffff;" name="B3xxx" onclick="window.open('esponitimbro.php?login=<?echo $login; ?>&progr=<? echo $progrx; ?>', 'marchio2'); window.open('mettitimbro.php?login=<?echo $login; ?>&progr=<? echo $progrx; ?>', 'marchio1')"
            "></td>               
			                                                                                                                                          
            </td>
            </tr>
</form>
<?php }} ?>
</table>
<br>
<table align="center" id="thetable" style=" border: 1px solid #68696a; background-color: #000000; cellspacing="0" width="270" class="table6">
            <tr>
            <td colspan="2" align="center" style=" border: 1px solid #68696a;" width="35%"><b><font face="Montserrat" color="#4ee546">ULTIME 10 VISITE</font></b>
            </td>
            </tr> 
<?php            
$sql1 = "SELECT *  FROM  uso where progressivo = '$progr' ORDER BY str_to_date(data,'%d/%m/%Y') desc limit 10"; 
	        $result = $conn->query($sql1);
            if ($result->num_rows > 0) {
            while($macrogruppo = $result->fetch_assoc()) 
        	{ 
      $data = $macrogruppo["data"];
      $comodo1=explode(" ",$data); 
      $comodo=explode("-",$comodo1[0]);
      $data=$comodo[2]."/".$comodo[1]."/".$comodo[0];
      $data=$data." ".$comodo1[1];            
      $loginxx = $macrogruppo["login"];      
?>
<tr>
<td style=" border: 1px solid #68696a;font-size: 10pt;" ><font face="Montserrat" color="#ffffff"><? echo $data." </font><font face='Montserrat' color='#ffffff' style='font-size: 8pt;'>".$loginxx; ?></font></b></td>
</tr>
<?php
}}                       
?> 
</table>                       
</center>