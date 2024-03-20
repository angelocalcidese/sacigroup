<?php
include "conf_DB.php";
$cliente=$_REQUEST["cliente"];
#$cliente="FSW-1003 - FASTWEB";
$comodo=explode(" - ",$cliente);
$cliente=$comodo[0];
    $arrayres = array();
    $sql1 = "SELECT * FROM clienti where codice = '$cliente'  ";
    echo $sql1;
    $result = $conn->query($sql1);
   
    if ($result->num_rows > 0) {
        while($macrogruppo = $result->fetch_assoc()) 
            {
            #$ragsoc = $macrogruppo["ragsoc"]; 
            #echo $ragsoc;
                array_push($arrayres, $macrogruppo);
            }
    }

    
    echo json_encode($arrayres);
     
?>
