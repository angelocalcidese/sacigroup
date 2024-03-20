<?php
include "conf_DB.php";
# il campo $numero contiene il numero di ticket da scrivere nella tabella selezionati
$numero = $_REQUEST["numero"];
$login = $_REQUEST["login"];
$cliente = $_REQUEST["cliente"];
$commessa = $_REQUEST["commessa"];
$tipointervento = $_REQUEST["tipointervento"];
#$numero= "10";
#$login = "mimmo";
#$cliente = $_REQUEST["cliente"];
#$commessa = $_REQUEST["commessa"];
$resp = array();
$ce=0;
$sql = "SELECT *  FROM  selezionaticat where  numero  = '$numero' and login = '$login' and cliente = '$cliente' and commessa = '$commessa' and tipointervento = '$tipointervento' " ;  
#  echo $sql;
  $rCount = 1;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      while($macrogruppo = $result->fetch_assoc())
		{  $ce=1; } }
if ($ce==1){
$sql = "DELETE FROM `selezionaticat` where numero  = '$numero' and login = '$login' and cliente = '$cliente' and commessa = '$commessa' and tipointervento = '$tipointervento' ";
  #echo $sql; 
if ($conn->query($sql) === TRUE)
        {  } else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 
}
else
{  
 $sql = "insert into selezionaticat
 (   numero,
     login,
     cliente,
     commessa,
     tipointervento 
 )
  values
 (      
  '$numero',
  '$login',
  '$cliente',
  '$commessa',
  '$tipointervento'
   )
    ";
#echo $sql; exit;
    if ($conn->query($sql) === TRUE) { } else { echo $sql."Errore inserimento recoerd: " . $conn->error; }   
}   
  echo json_encode($resp);
?>