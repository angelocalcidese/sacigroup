<?php
include "conf_DB.php";
$dataarrivo="01/04/2019";
$sql1 = "select * from camere where attiva = 'SI'  order by camera";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ 
      $camera = $macrogruppo["camera"];
$datainiziox="0000-00-00";
$datafinex="0000-00-00";      
$sql1x = "SELECT * FROM prenotazioni  where camera = '$camera' and dataannulla = '0000-00-00'";
echo $sql1x."<br>"; 
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
    if ($dataentrata!="0000-00-00") {$datainizio=$dataentrata;}
    if ($datauscita!="0000-00-00") {$datafine=$datauscita;}
   # $socio = $macrogruppox["socio"];  
    $datasc=explode("-",$datainizio);
    $datainiziox = strtotime(date($datasc[0]."-".$datasc[1]."-".$datasc[2]));
    
    $datasc=explode("-",$datafine); 
    $datafinex = strtotime(date($datasc[0]."-".$datasc[1]."-".$datasc[2]));
    
    $datasc=explode("/",$dataarrivo); 
    $dataarrivox = strtotime(date($datasc[2]."-".$datasc[1]."-".$datasc[0]));
}}      
    if (($dataarrivox==$datainiziox or  $dataarrivox > $datainiziox)and ($dataarrivox  < $datafinex)) {echo "no ".$camera." ".$numero." ".$dataarrivox." ".$datainiziox." ".$datafinex."<br>"; }
    else
    {echo "si ".$camera."<br>"; }
}} 




/*
 $datasc=explode("-","2019-04-02");
    $datainiziox = strtotime(date($datasc[0]."-".$datasc[1]."-".$datasc[2]));
echo $datainiziox."<br>";    
    $datasc=explode("-","2019-04-05"); 
    $datafinex = strtotime(date($datasc[0]."-".$datasc[1]."-".$datasc[2]));
echo $datafinex."<br>";      
    $datasc=explode("/","04/04/2019"); 
    $dataarrivox = strtotime(date($datasc[2]."-".$datasc[1]."-".$datasc[0]));
echo $dataarrivox."<br>";       
    if (($dataarrivox==$datainiziox or  $dataarrivox > $datainiziox)and ($dataarrivox < $datafinex)) {echo "si";}
    else  {echo "no";}
    */
?>