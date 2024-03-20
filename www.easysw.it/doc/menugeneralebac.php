
<?
$zona=$_REQUEST["zona"];
$zona="Centro Ascolto";
$ingranaggio=$_REQUEST["ingranaggio"];
$notizia=$_REQUEST["notizia"];
#echo "notizia=".$notizia;
#if ($zona=="")   {exit;}
#echo "zona ".$zona;
#echo "ingranaggio ".$ingranaggio;
#echo "ingra ".$ingranaggio;
include "conf_DB.php";
$oggi=date("Y-m-d H.m.s");
$oggix=date("Y-m");
$hh=date("H");
 $sql = "INSERT INTO contabacheca
              (              
              oggi,
              oggix,
              hh) 
            VALUES (            
              '$oggi',
              '$oggix',
              '$hh'
              )";
  if ($conn->query($sql) === TRUE)
        { } 
        else { echo $sql."Errore inserimento recoerd: " . $sql; exit;} 

$trovato="";
$mezzo='<div class="mid" id="HiddenDiv" style="display: none;"><font face="Arial" size="+2" 
<center style="text-align: center;">';
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>BACHECA</title>
  <link rel="stylesheet" href="css/style.css">

<style>
    .show-read-more .more-text{
        display: none;
    }
</style>  
<style>
body {
 background-image: url(carlobase.jpg);
 background-repeat: no-repeat;
 background-position: center;
 } 

</style>
<style>
div#container {
min-width:   800px;
  min-height:  500px;
  max-width:  1500px;
  max-height: 1000px;
}
div#sottocontainer {
min-width:   800px;
  min-height:  1500px;
  max-width:  800px;
  max-height: 1000px;
}
</style>
</head>

<body style="background-color: #ffffff;">

<div align="center" >

	<table border="0" bgcolor="#ffffff"  width="90%">
		<tr > 
			<td  style="border-radius: 20px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"">
      <div align="center">
			<img border="0" src="carlopoma.png" width="150" height="80"> <br>
      </div>
      </td>
      </tr>
   <tr> 

	
</tr>     
	</table>       
</div> 
<center>
<p align="center"><b><font face="Arial" size="5" color="#666666">BACHECA</font></b></p>
    
<div align="center" >	
<table border="0" >
<?
$sql = "SELECT *  FROM  bacheca where  progr = 1  ";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
    $testomem = $macrogruppo["testo"];
    }} 

$conta_parole=substr_count($testomem, "stopnotizia"); 
$conta_parolex=$conta_parole; $conta_parolex++;    
#echo $conta_parole;
$testomemx=explode("stopnotizia",$testomem);

for ($mul = 0; $mul <= $conta_parole; ++$mul)
 {
?>
<tr>

<td width="90%" align="center" >
<form  method="POST" action="" style="width: 90%;">
<?
$color = sprintf("#%06x",rand(0,16777215));
?>
<div align="center"><font face="Verdana" size="3"><header style="padding: 10px 15px;background-color: <? echo $color; ?>;">Comunicazione n° <?  $mulx=$mul; $mulx++; echo $mulx." di ".$conta_parolex; ?> </header></font></div>
 

    <table>
    <tr >
    <td >
    <input type="text" id="fname" name="fname" style=" width: 0%;
  padding: 0px 0px;
  margin: 0px 0;
  box-sizing: border-box;
  border: 0px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;" <? if($notizia==$mul){echo "autofocus";}?>>
    <?
    $parte1=explode("spezzanotizia",$testomemx[$mul]);
    $testomemx[$mul]=str_replace("spezzanotizia","",$testomemx[$mul]);
    if($parte1[1]==""){echo $testomemx[$mul];}
    else
    { 
    if($ingranaggio==1){if($notizia==$mul){echo $testomemx[$mul];}else {echo $parte1[0];
    ?>
    <center>
    <form method="POST" action="" name="modulo" >
     <input type="hidden" name="ingranaggio" value="1" />
     <input type="hidden" name="notizia" value="<? echo $mul; ?>" />
     <input style="background:#ffffff;color: #cc0000; font-weight: bold;  border: 0px;font-style: italic;" size="5" type="submit" value="Leggila tutta......" name="B3">
	</form>	
    <?
    }}else{echo $parte1[0]; ?>
    <center>
    <form method="POST" action="" name="modulo" >
     <input type="hidden" name="ingranaggio" value="1" />
     <input type="hidden" name="notizia" value="<? echo $mul; ?>" />
     <input style="background:#ffffff;color: #cc0000; font-weight: bold;  border: 0px;font-style: italic;" size="5" type="submit" value="Leggila tutta......" name="B3">
	</form>	
    <? }       
    } ?>
    </td>
    </tr>
    </td>
    </table>
    
    </form>
</td>
</tr>
<? } ?>


    </table>


</center>
<script type="text/javascript">// <![CDATA[
function ShowHide(divId)
{
if(document.getElementById(divId).style.display == 'none')
{
document.getElementById(divId).style.display='block';
}
else
{
document.getElementById(divId).style.display = 'none';
}
}
// ]]></script>
</body>

</html>