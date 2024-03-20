<?php
include "conf_DB.php";
$ind=0;
$sql1 = "SELECT b.continente, COUNT( b.continente ) AS numero
FROM soci a
JOIN continenti b ON a.luogo_nascita = b.nazione
GROUP BY b.continente";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{$nazione = $macrogruppo["continente"];
     $numero = $macrogruppo["numero"];
    $values[0][$nazione]=$numero;
    } }
  

echo '<pre>'.print_r( $values, true ).'</pre>';
#echo json_encode($values); 

#foreach ($values[0] as $item){
#  echo $item . '<br>';
#foreach($v as $k=>$variable_name) { echo "<p> This is index of $k. value is $variable_name <br/></p>";} 
#echo $values[0]; 

?>