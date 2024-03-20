<?php
include "conf_DB.php"; 
$sql = "SELECT *  FROM  cat  ORDER BY ragsoc";  
#echo $sql;
$newobj = array();
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
     //$progr = $macrogruppo["progr"];
     //$codicemediatorex = $macrogruppo["codicemediatore"]; 
     $cognomex= $macrogruppo["ragsoc"];
     #echo $cognomex;
     $codice= $macrogruppo["codice"];
     $cognomenome=$codice." - ".$cognomex;       
            //$ind=0;            
            //$array[$ind]['cognome'] = $cognomex;
            //$ind++;  
			array_push($newobj, $cognomenome);
                                 
 }}       
//print_r($newobj);
echo json_encode($newobj);
?>