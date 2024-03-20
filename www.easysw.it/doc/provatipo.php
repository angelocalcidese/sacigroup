<?php
include "conf_DB.php";
$sql1 = "SELECT * FROM `prestazione` ";
echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{  
      $descrizione = $macrogruppo["descrizione"];
      echo $descrizione;	
      $tot++;}}
?>