<?php
include "conf_DB.php"; 
$trovaver=0;
$sqlpx = "SELECT * FROM verifica  where    codice = '1022' and tipodocumento = 'C.C.I.A.A. camerale aggiornata'  ";        
echo $sqlpx;  
$resultpx = $conn->query($sqlpx);
if ($resultpx->num_rows > 0) {
  while($macrogruppopx = $resultpx->fetch_assoc())	
	{ 
   $trovaver=1;  echo "passo"; 
   }}
echo "<br>".$trovaver;   
?>