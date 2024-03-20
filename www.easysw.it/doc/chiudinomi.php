<?php
include "conf_DB.php";
$dataarrivo=date("d/m/Y");
$oggi=date("d/m/Y");
$dicinome=$_REQUEST["dicinome"];
$passtes=$_REQUEST["dicitessera"];
$ingranaggio=$_REQUEST["ingranaggio"];
$assistito=$_REQUEST["assistito"];
echo "ass ".$assistito;
if ($ingranaggio==1){
$dicinomex=$dicinome."%";
}


if ($ingranaggio==2){
$codice=explode(" - ",$assistito);
$codicex=$codice[0];
$ce=0;
$sql = "SELECT *  FROM  soci where  tessera = '$codicex' " ;  
#echo  $sql; exit;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
	
	{ 
      $tesseraold = $macrogruppo["tesseraold"];
      $tessera = $macrogruppo["tessera"];
      $cognome = $macrogruppo["cognome"];
      $nome = $macrogruppo["nome"];
      $ce=1;
$gia=0;
$sql1 = "select * from storicotessera where tessera = '$codicex' and entrata = '$oggi'    ";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ $ingranaggix=1;
      $numeropass = $macrogruppo["numerotessera"];	
      $numeropass = sprintf("%03d", $numeropass); 
      $gia=1;
 }}
if($gia==0 and $gia==0){

$sql = "insert into storicotessera
 (
  numerotessera,  
  entrata, 
  tessera
 )
  values
 ( 
  '$tesseraold',
  '$oggi',  
  '$tessera' 
   )
    ";
#echo $sql; exit;
    if ($conn->query($sql) === TRUE)
        { } 
        else { echo "Error inserted recordx: " . $conn->error; }  }
           
}  }  }


?>
<html>
  <head>
  <title>leggi tessera in gresso in mensa</title>
<!-- META SPECIFICI PER DISPOSITIVI MOBILI -->
  <meta name="HandheldFriendly" content="true" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
  
  <!-- ICONE ANDROID -->
  <link rel="icon" sizes="192x192" href="/icona-android-hires.png" />
  <link rel="icon" sizes="128x128" href="/icona-android.png" />

  <!-- ICONE IOS -->
  <link rel="apple-touch-icon" size="57x57" href="/icona_57x57.png" />
  <link rel="apple-touch-icon" size="72x72" href="/icona_72x72.png" />
  <link rel="apple-touch-icon" size="76x76" href="/icona_76x76.png" />
  <link rel="apple-touch-icon" size="114x114" href="/icona_114x114.png" />
  <link rel="apple-touch-icon" size="120x120" href="/icona_120x120.png" />
  <link rel="apple-touch-icon" size="144x144" href="/icona_144x144.png" />
  <link rel="apple-touch-icon" size="152x152" href="/icona_152x152.png" />

  <!-- CSS -->
  <link rel="stylesheet" href="tes/foglio-di-stile2.css" type="text/css" />
  
  <!-- JQUERY -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>   

  <!-- NOSTRI SCRIPT -->
  <script src="tes/clientscript.js"></script>  
<style>
h1 {
  text-shadow: 2px 2px 4px #999999;
  filter:DropShadow(Color=#000000, OffX=2, OffY=2);
} 
h1 {
  text-shadow: 2px 2px 4px #999999;
  filter:DropShadow(Color=#000000, OffX=2, OffY=2);
} 
</style>
  </head>
  <BODY >

<div align="center">     
  <div id="header">
  
<div align="center" >
	<table border="0" width="300" height="50" bgcolor="#ffffff"  >
		<tr > 
			<td style="border-radius: 20px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"">
      <div align="center">
			<img border="0" src="carlopoma.png" width="120" height="50"> <br>
      </div>
      </td>
      </tr>
   <tr> 

	
</tr>     
	</table>       
</div>   
  
  </div>  
</div>   
 <br><br>
  <?

   if($ingranaggio==0) { 
   ?>
<div class="inner" style="background-color: #f4e9fc;">	
<hr>
<form method="POST" action="" name="modulo" >	
<p align="center"><font face="Verdana" size="4" color="#CC0000"><b>INGRESSO IN MENSA</b><br><br></font></b></h1>   
<font face="Verdana" size="4" color="#CC0000">DIGITA COGNOME </font></b></h1><br> 
<font face="Verdana" size="4" color="#CC0000">(anche parziale) </font></b></h1><br> <br>
<input type="text" name="dicinome"  placeholder="Cognome"  style="background-color: #C0C0C0; font-size: 20px;"> <br>
<input type="hidden" name="ingranaggio" value="1" />  <br>
<input type="submit"  value="Ricerca" name="B3" style="background-color: #79d969; font-size: 20px;"></p>
</form>
<? } 

if ($ingranaggio==1) { ?>
<div class="inner" style="background-color: #f4e9fc;">
<hr>	
<form method="POST" action="" name="modulo21" >	
<p align="center"><font face="Verdana" size="4" color="#CC0000"><b>INGRESSO IN MENSA</b><br></font></b></h1>   

<p align="center"><font face="Verdana" size="4" color="#CC0000">SELEZIONA COGNOME OSPITE</font></b></h1><br><br>

<select size="1" name="assistito" id="assistito" style="font-size: 15px">   
<?php
$sql1 = "select * from soci  where cognome like '$dicinomex'   order by cognome";
#echo $sql1; exit;
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ 
      $cognomem = $macrogruppo["cognome"];
      $nomem = $macrogruppo["nome"];
      $tesseram = $macrogruppo["tessera"];	
      $tesseraold = $macrogruppo["tesseraold"];                     
      $data_nascitam = $macrogruppo["data_nascita"];	
      $nazionalitam = $macrogruppo["nazionalita"];	
      $telefonom = $macrogruppo["telefono"];	
$nota=0;      
$sql1w = "select * from nota  where tessera = ". $tesseram;
#echo $sql1w;
$result1w = $conn->query($sql1w);
if ($result1w->num_rows > 0) {   
while($macrogruppow = $result1w->fetch_assoc()) 
	{   $natadici = $macrogruppow["nota"];
      $nota=1; 
  }}  
#echo $nota; 
if ($tesseraold==0)
{if ($nota==0){$colore="#ffffff";}else{$colore="#fda6d1";} }
else
{if ($nota==0){$colore="#caffcc";}else{$colore="#fda6d1";} }
 
      $malato=$tesseram. " - ".$cognomem." ".$nomem;
?>		
			<option style="background-color: <? echo $colore; ?>;" <? if ($tessera==$tesseram){echo "selected";} ?>><?php echo $malato; ?></option>
<?php } } ?>		
			</select>  <br> <br>
<input type="hidden" name="ingranaggio" value="2" />
<input type="submit"  value="REGISTRA INGRESSO" name="B5" style="background-color: #65e059; font-size: 20px;"></p>
</form>
<?  } ?>


<? if($ingranaggio==2) { ?>
<div class="inner" style="background-color: #f4e9fc;">
<hr>	
<form method="POST" action="" name="modulo21" >	
<p align="center"><font face="Verdana" size="4" color="#CC0000"><b>INGRESSO IN MENSA</b></font></b> <br>
<? if($gia==0) { ?>
<font face="Verdana" size="4" color="#CC0000"><br>REGISTRATO INGRESSO</font></b></h1><br><br>
<? } else { ?>
<font face="Verdana" size="4" color="#CC0000"><br>GIA' REGISTRATO IN MENSA</font></b></h1><br><br>
<? } ?>
<font face="Verdana" size="4" color="#000000"><? echo $cognome; ?><br><? echo $nome; ?></font></b></h1><br><br>
<?
$newfile="foto/".$tessera.".jpg";;
      $FileFound = file_exists($newfile);
      #echo $FileFound; exit;
      if ($FileFound==1)
      {$indirizzofoto="./foto/".$tessera.".jpg"; }
      else
      {$indirizzofoto="./foto/generico.jpg"; }
     
list($width, $height, $type, $attr) = getimagesize($indirizzofoto);//lego i dati
# echo $indirizzofoto; exit;
#echo $width."  ".$height."<br>";
#if ($height > $width)
{$proporzione=$height/$width;}
#else
#{$proporzione=$width/$height;}
#echo $proporzione."<br>";
$altezza=120*$proporzione;
?> 
<img border="0" src="<? echo $indirizzofoto; ?>" width="120" height="<? $altezza; ?>">  <br><br>
<input type="submit"  value="PROSEGUI" name="B5" style="background-color: #79d969; font-size: 20px;"></p>
</form>
<?  exit;}
?>

 
</div> 
 
 
 </table>


  </body>
</html>