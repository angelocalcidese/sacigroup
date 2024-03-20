<?php
echo "inizio";
include "conf_DB.php";
#mysql_set_charset("utf8");
echo "superato"; 
#print "<table border=1 width=90% >";
 $fd= fopen ("tessere.txt", "r");
 $x=0;
 while (!feof ($fd))
 {
 $riga=fgets($fd, 4096); 
 $riga = str_replace("'", "`", $riga); 
 $riga = str_replace("à", "a`", $riga); 
 $riga = str_replace("è", "e`", $riga);
 $riga = str_replace("ù", "u`", $riga); 
 $riga = str_replace("ì", "i`", $riga); 
 $riga = str_replace("ò", "o`", $riga);  
 $riga = str_replace("…", "a`", $riga);
 $riga = str_replace("Š", "e`", $riga);
 #echo $riga;
 $arr=explode(';', $riga);
// echo $x . " " . $riga . $arr[4] . "<br>";
 #print "<tr>";
 //print "<td>".$arr[0]."</td>";
 //print "<td>".$arr[1]."</td>";
 //print "<td>".$arr[2]."</td>";
 
 
 $cognome = $arr[0];  
 $nome = $arr[1];  
 $tesseraold = $arr[2]; 
 $sesso= $arr[3]; 
 $nazionalita = $arr[4];  
 $datanascita= $arr[5];  
 
if ($tesseraold != "") { 
# print "</tr>";
 $x++;
# print "</table>";
$sql1 = "SELECT * FROM tessera  where progr = '1' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $tessera = $macrogruppo["tessera"];	 
			} }
$tessera++;
$sql = "UPDATE tessera set 
tessera = '$tessera'
where 
progr = '1' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted recorda: " . $conn->error; }    
$sql = "insert into soci
 (
  nazionalita,  
  tessera, 
  cognome, 
  nome, 
  data_nascita,   
  telefono,
  luogo_nascita,
  data_iscrizione,
  sesso,
  tesseraold      
 )
  values
 ( 
  '$nazionalita',
  '$tessera',  
  '$cognome',  
  '$nome',  
  '$datanascita',    
  '',
  '$nazionalita',
  '$oggi',
  '$sesso',
  '$tesseraold'   
   )
    ";
#echo $sql; exit;
    if ($conn->query($sql) === TRUE)
        { } 
        else { echo "Error inserted recordx: " . $conn->error; }  
         
    }
}




?>
