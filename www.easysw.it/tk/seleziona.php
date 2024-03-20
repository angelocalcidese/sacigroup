<?php
include "conf_DB.php";
# il campo $numero contiene il numero di ticket da scrivere nella tabella selezionati
$numero = $_REQUEST["numero"];
$login = $_REQUEST["login"];
#$numero= "10";
#$login = "mimmo";
#$cliente = $_REQUEST["cliente"];
#$commessa = $_REQUEST["commessa"];
$resp = array();
$ce=0;
$sql = "SELECT *  FROM  selezionati where  numero  = '$numero' and login = '$login' " ;  
#  echo $sql;
  $rCount = 1;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      while($macrogruppo = $result->fetch_assoc())
		{  $ce=1; } }
if ($ce==1){
$sql = "DELETE FROM `selezionati` where numero  = '$numero' and login = '$login' ";
  #echo $sql; 
if ($conn->query($sql) === TRUE)
        {  } else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 
}
else
{  
 $sql = "insert into selezionati
 (   numero,
     login 
 )
  values
 (      
  '$numero',
  '$login'
   )
    ";
#echo $sql; exit;
    if ($conn->query($sql) === TRUE) { } else { echo $sql."Errore inserimento recoerd: " . $conn->error; }   
}   
  echo json_encode($resp);
?>