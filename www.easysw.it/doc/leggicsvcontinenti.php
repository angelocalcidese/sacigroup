<?php
echo "inizio";
include "conf_DB.php";
#mysql_set_charset("utf8");
#echo "superato"; 
#print "<table border=1 width=90% >";
 $fd= fopen ("continenti.txt", "r");
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
 #echo $riga;    exit;
 $arr=explode(';', $riga);
// echo $x . " " . $riga . $arr[4] . "<br>";
 #print "<tr>";
 //print "<td>".$arr[0]."</td>";
 //print "<td>".$arr[1]."</td>";
 //print "<td>".$arr[2]."</td>";
 
 

 $continente = $arr[2]; 
 $nazione= $arr[6]; 
 #echo "cont. ".$nazione;    exit;
# print "</tr>";
 $x++;
# print "</table>";

$sql = "insert into continenti
 (
  continente,  
  nazione    
 )
  values
 ( 
  '$continente',
  '$nazione'
   )
    ";
#echo $sql; exit;
    if ($conn->query($sql) === TRUE)
        { } 
        else { echo "Error inserted recordx: " . $conn->error; }  
         
    }





?>
