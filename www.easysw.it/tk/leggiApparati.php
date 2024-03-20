<?php
include "conf_DB.php";
 
$sql = "SELECT *  FROM  apparati ORDER BY nome";  
#echo $sql;
$newobj = array();
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
     //$progr = $macrogruppo["progr"];
     //$codicemediatorex = $macrogruppo["codicemediatore"]; 
     $cognomenome= $macrogruppo["nome"]; 
            //$ind=0;            
            //$array[$ind]['cognome'] = $cognomex;
            //$ind++;  
			array_push($newobj, $cognomenome);
                                 
 }}       
//print_r($newobj);
echo json_encode($newobj);
?>