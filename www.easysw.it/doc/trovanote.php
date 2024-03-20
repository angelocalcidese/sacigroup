<?php
include "conf_DB.php";
$notax=0;      
$sql1 = "SELECT * 
FROM  `nota` 
WHERE  `tessera` =1241";
echo $sql1;
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ 
      $cognomem = $macrogruppo["cognome"];
      $nomem = $macrogruppo["nome"];
      $tessera = $macrogruppo["tessera"];	
      $data_nascita = $macrogruppo["data_nascita"];	
      $nazionalita = $macrogruppo["nazionalita"];	
      $telefono = $macrogruppo["telefono"];	
      echo $tessera;
  }}  
 
?>