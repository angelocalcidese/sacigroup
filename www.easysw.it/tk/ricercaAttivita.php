<?php
include "conf_DB.php";
$commessa=$_REQUEST["commessa"]; 
$comodo=explode(" - ", $commessa);
$commessa=$comodo[0];
$sql = "SELECT *  FROM  commesse  where commessa = '$commessa' ORDER BY tipoattivita";  
#echo $sql;  exit;
//$newobj = array();
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $macrogruppo = $result->fetch_assoc();
    $attivita = $macrogruppo["attivita"];
}       
//print_r($newobj);
echo $attivita;
?>