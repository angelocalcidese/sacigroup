<?php
include "conf_DB.php";
# lettura ticket
# il campo $numero contiene il numero di ticket da cercare
$numero = $_REQUEST["numero"];
$resp = array();
$sql = "SELECT *  FROM  tk where  numero  = '$numero' " ;  
#  echo $sql;
  $rCount = 1;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())	
    { 
      
      $resp['numero1'] = $macrogruppo["numero"];
     
      $resp['stato1'] = $macrogruppo["stato"];
     
    }
  } 
  
 
  echo json_encode($resp);
?>