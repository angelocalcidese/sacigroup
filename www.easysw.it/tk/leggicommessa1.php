<?php
include "conf_DB.php";
$cliente=$_REQUEST["cliente"]; 
$comodo=explode(" - ", $cliente);
$cliente=$comodo[0];
$sql = "SELECT *  FROM  commesse  where cliente = '$cliente' ORDER BY tipoattivita";  
#echo $sql;  exit;
$newobj = array();
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
     //$progr = $macrogruppo["progr"];
     //$codicemediatorex = $macrogruppo["codicemediatore"]; 
     $cognomex= $macrogruppo["nomecommessa"];
     $attivita = $macrogruppo["attivita"];
     #echo $cognomex;
     $codice= $macrogruppo["commessa"];
     $cognomenome=$codice." - ".$cognomex;       
            //$ind=0;            
            //$array[$ind]['cognome'] = $cognomex;
            //$ind++;  
			array_push($newobj, $cognomenome);
                                 
 }}       
//print_r($newobj);
echo json_encode($newobj);
?>