<?php
    include "conf_DB.php";
    $arrayres = array();
    $sql1 = "SELECT * FROM luogo  order by prov";
    $result = $conn->query($sql1);
   
    if ($result->num_rows > 0) {
        while($macrogruppo = $result->fetch_assoc()) 
            {
                array_push($arrayres, $macrogruppo);
            }
    }

    
    echo json_encode($arrayres);
?>