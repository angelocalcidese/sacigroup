<?php
$filename="lista2new.xls";
header ("Content-Type: application/vnd.ms-excel");
header ("Content-Disposition: inline; filename=$filename");
?>
<?php
$corso=$_REQUEST["corso"];

include "conf_DB.php";



$oggi=date("Y-m-d");
#header('Content-Type: text/html; charset=utf-8'); 


?>

<html>
<head>

	<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
	<title>Esponi Socio</title>
	
<style>
div#container {
min-width:   1050px;
  min-height:  500px;    
  max-width:  1050px;
  max-height: 1000px;
}
div#sottocontainer {
min-width:   800px;
  min-height:  500px;
  max-width:  800px;
  max-height: 1000px;
}
</style>  
<script language="javascript">
 <!--
  function Stampa() {
     //Nasconde le celle indesiderate
        intestazione.style.display = "None";
        sinistro.style.display = "None";
        destro.style.display = "None";
     //Imposta la parte da stampare a tutto schermo
        stampa.style.width = "100%";
     //Lancia la funzione di stampa
        window.print();
     //Ripristina la parte da stampare alle dimensioni originali
        stampa.style.width = "450px";
     //Ripristina l'impostazione iniziale delle celle indesiderate
        intestazione.style.display = "";
        sinistro.style.display = "";
        destro.style.display = "";
  }
 //-->
</script>
<style>
a:link, a:visited {
  text-decoration: none; 
    font-weight: bold;
    color: #000000
}

a:hover {
  color: black;
 
  text-decoration: none;
}
</style>

</head>
<body>

<?php
echo '<table border="1">';
 echo "<tr>";
?>
<p align="center"><?php echo "lista partecipanti corso n. "; ?></p>
<?php  echo '<td >TESSERA</td>'; ?>
<?php  echo '<td >COGNOME</td>'; ?>
<?php  echo '<td> NOME</td> ';  ?>
<?php  echo '<td>DATA ISCRIZIONE AL CORSO</td>';  ?>
<?php  echo '<td>TURNO 1</td>';  ?>
<?php  echo '<td>TURNO 2</td>';  ?>
<?php  echo '<td>TURNO 3</td>';  ?>
<?php  echo '<td>TURNO 4</td>';  ?>
<?php  echo '<td>IMPORTO PAGATO</td>';  ?>
<?php  echo '<td>CONSEGNATO CERTIFICATO MEDICO</td>';  ?>
</tr>
<?php
$numturno=0;
$sql="SELECT a.*, b.* FROM partecipanti a LEFT JOIN soci b ON a.tessera = b.tessera WHERE a.codicecorso =  '$corso' order by b.cognome, b.nome";       
#echo $sql ."<br>";
$rCount = 1;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())
	
	{ 
     $tessera = $macrogruppo["tessera"];
     $cognome = $macrogruppo["cognome"];
     $nome = $macrogruppo["nome"];
     $data_nascita = $macrogruppo["data_nascita"]; 
     $dataiscrizione = $macrogruppo["dataiscrizione"];
     $turno = $macrogruppo["turno"];
     $giorno = $macrogruppo["giorno"];
     $ricerca=$giorno.$turno;
      $sql1x = "SELECT * FROM corsoturno where codicecorso = '$corso' and giorno = '$ricerca'";     
      $result1 = $conn->query($sql1x);
      if ($result1->num_rows > 0) {
      while($macrogruppox = $result1->fetch_assoc())
		{ $numturno++; 
      $da = $macrogruppox["dalleore"];
      $a = $macrogruppox["alleore"];  
      if ($numturno==1) {$turno1=$giorno." dalle ".$da." alle ".$a;}
      if ($numturno==2) {$turno2=$giorno." dalle ".$da." alle ".$a;}
      if ($numturno==3) {$turno3=$giorno." dalle ".$da." alle ".$a;}
      if ($numturno==4) {$turno4=$giorno." dalle ".$da." alle ".$a;}
    } }
      $note="Iscrizione a corso n. ".$corso;
      $sql1xx = "SELECT * FROM movimenticontabili where causale = 'BL' and note = '$note' and numdocumento = '$tessera'";     
      $result2 = $conn->query($sql1xx);
      if ($result2->num_rows > 0) {
      while($macrogruppoxx = $result2->fetch_assoc())
		{ 
      $importo = $macrogruppoxx["importo"];
     
    } }
     


    

      
?>


	<tr>
<?php {echo '<td>'.$tessera.'</td>';} ?>
<?php {echo '<td>'.$cognome.'</td>';}?>
<?php {echo '<td>'.$nome.'</td>';}?>
<?php {echo '<td>'.$dataiscrizione.'</td>';}?>
<?php {echo '<td>'.$turno1.'</td>';}?>
<?php {echo '<td>'.$turno2.'</td>';}?>
<?php {echo '<td>'.$turno3.'</td>';}?>
<?php {echo '<td>'.$turno4.'</td>';}?>
<?php {echo '<td>'.$importo.'</td>';}?>
<?php {echo '<td>'.$turno4.'</td>';}?>
	</tr>

      
<?php      
      
      
    
}  }


?>
</table>
