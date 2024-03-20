<?php
#echo "inizio";
$conta=0;
include "conf_DB.php";
#echo "superato"; 
#print "<table border=1 width=90% >";
 $fd= fopen ("regioni.csv", "r");
 $x=0;
 while (!feof ($fd))
 {
 $riga=fgets($fd, 4096);
 echo "riga=".$riga."<br>";
 $arr=explode(',', $riga);
// echo $x . " " . $riga . $arr[4] . "<br>";
 #print "<tr>";
 //print "<td>".$arr[0]."</td>";
 //print "<td>".$arr[1]."</td>";
 //print "<td>".$arr[2]."</td>";
$conta++;
$sigla = $arr[0];
$regione = $arr[1];

$regione =strtoupper($regione);

$regione=str_replace("'", "\'", $regione);     
$sql = "INSERT INTO regioni
( 
regione
) 
VALUES ( 
'$regione'
)";
  #echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {$errore="Mediatore Memorizzato Correttamente";$ingranaggio=101; } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 
#exit;
}
?>
