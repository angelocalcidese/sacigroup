<?php
echo "inizio";
include "conf_DB.php";
echo "superato"; 
#print "<table border=1 width=90% >";
 $fd= fopen ("soci1.txt", "r");
 $x=0;
 while (!feof ($fd))
 {
 $riga=fgets($fd, 4096);
 #echo $riga;
 $arr=split(';', $riga);
// echo $x . " " . $riga . $arr[4] . "<br>";
 #print "<tr>";
 //print "<td>".$arr[0]."</td>";
 //print "<td>".$arr[1]."</td>";
 //print "<td>".$arr[2]."</td>";
 
 $numero1 = $arr[0]; 
 $numero2 = $arr[1];  
 $numero3 = $arr[2];  
 $numero4 = $arr[3]; 
 $numero5 = $arr[4]; 
 $numero6 = $arr[5];  
 $numero7 = $arr[6];  
 $numero8 = $arr[7]; 
 $numero9 = $arr[8]; 
 $numero10 = $arr[9];  
 $numero11 = $arr[10]; 
 $numero12 = $arr[11];  
 $numero13 = $arr[12];
 $numero13=str_replace('"', '', $numero13); 
 $numero13=str_replace(';', ' ', $numero13); 
 $numero14 = $arr[13]; 
 $numero15 = $arr[14];  
 $numero16 = $arr[15];  
 $numero17 = $arr[16]; 
 $numero18 = $arr[17]; 
 
 $importo = $arr[18];  
 $rinnovo = $arr[17]; 
 #$progr = $arr[22];  
 echo $numero1."/".$numero2."/".$numero3; 
echo  "rinn. ".$rinnovo."<br>";

if ($rinnovo!="")   
{# print "</tr>";
 $x++;
# print "</table>";
 $sql = "insert into quote
 (
  tessera,
  anno, 
  importo,
  rinnovo_nuovo
 )
  values
 (
  '$numero2 ',
  '2011', 
  '10',
  'N' )
    ";
echo $sql."<br>";
    if (!mysql_query($sql,$connessione))
        {
        echo "&errorecliord=gia' presente&";
       } 
       else
       {echo "&errorecliord=inseritouno&";}   
       $totaleordine1= $totaleordine1+$totaleriga;   
    }

}


?>
