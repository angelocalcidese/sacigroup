<?php
include "conf_DB.php";
$commessa=$_REQUEST["commessa"]; 
$comodo=explode(" - ", $commessa);
$commessa=$comodo[0];
#$commessa="FSW-23MANT-005";
$ind=0;
$sql = "SELECT *  FROM  tipointervento  where commessa = '$commessa' ";  
#echo $sql;  exit;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{
    $elemento=$macrogruppo["tipointervento1"];
    #echo $elemento."<br>";
    $intervento[$ind]=$elemento;
$ind++;    
    #$intervento = array($macrogruppo["tipointervento1"], 
    #                    $macrogruppo["tipointervento2"], 
    #                    $macrogruppo["tipointervento3"], 
    #                    $macrogruppo["tipointervento4"], 
    #                    $macrogruppo["tipointervento5"]);
  
}}    




   
//print_r($newobj);
echo json_encode($intervento);
?>