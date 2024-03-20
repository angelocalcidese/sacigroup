<?php
#echo "inizio";
$conta=0;
include "conf_DB.php";
#echo "superato"; 
#print "<table border=1 width=90% >";
 $fd= fopen ("PROVINCIE.csv", "r");
 $x=0;
 while (!feof ($fd))
 {
 $riga=fgets($fd, 4096);
 echo "riga=".$riga."<br>";
 $arr=explode(';', $riga);
// echo $x . " " . $riga . $arr[4] . "<br>";
 #print "<tr>";
 //print "<td>".$arr[0]."</td>";
 //print "<td>".$arr[1]."</td>";
 //print "<td>".$arr[2]."</td>";
$conta++;
$sigla = $arr[0];
$nome = $arr[1];
$regione = $arr[2];
$sigla =strtoupper($sigla);
$nome =strtoupper($nome);
$regione =strtoupper($regione);

$regione=str_replace("'", "\'", $regione);
$nome=str_replace("'", "\'", $nome);      
$sql = "INSERT INTO province
( 
sigla,                           
nome,
regione
) 
VALUES ( 
'$sigla',           
'$nome',
'$regione'
)";
  #echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {$errore="Mediatore Memorizzato Correttamente";$ingranaggio=101; } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 
#exit;
}
?>
