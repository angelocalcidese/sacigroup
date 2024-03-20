<?php
$filename="lista2new.xls";
header ("Content-Type: application/vnd.ms-excel");
header ("Content-Disposition: inline; filename=$filename");
?>
<?php
include "conf_DB.php";


#echo $formadocumento . "<br>";

$oggi=date("d/m/Y");
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
<p align="center"><b>RENDICONTO CONSUNTIVO <br>BILANCIO al <?php echo $oggi; ?> ASSOCIAZIONE CARLO POMA - Via Caio Mario n. 18 MILANO</p></b>
<td ><b><span style="background-color: #C0C0C0">Voci</td></span></b>
<td><b>Importi Totali</td>
<td><b>Importi Parziali</td></b>

</tr>



<?php
$sql = "SELECT *  FROM  pianoconti order by esercizio, sequenza "; 
	$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
	
	{  
  $esercizio = $macrogruppo["esercizio"];
  $mastro = $macrogruppo["mastro"];
  $sottomastro = $macrogruppo["sottomastro"];
  $conto = $macrogruppo["conto"];
  $eu = $macrogruppo["e_u"];
  $descrizione = $macrogruppo["descrizione"];
  $sequenza = $macrogruppo["sequenza"];
  $posizione = $macrogruppo["posizione"];
$importo=0;$importox=0;  
$sqlx = "SELECT *  FROM  movimenticontabili where esercizio = '$esercizio' and mastro = '$mastro' and sottomastro = '$sottomastro' and conto = '$conto'"; 
#echo $sqlx;	
  $result1 = $conn->query($sqlx);
if ($result1->num_rows > 0) {
  while($macrogruppox = $result1->fetch_assoc())
	
	{  


  $importo1 = $macrogruppox["importo"];
  $importo=$importo+$importo1;
  #$importo=replace(".",",",$importo);
  #$nombre_format_francais = number_format($importo, 2, ',', '.')*1;
  #$importo=number_format($importo, 2, ',', '.');
  #$importo = number_format($importo, 2, ',', ' ');
  
  #$importox=printf("%01.1f", $importo);
  #echo $importox; 
  #$importo=number_format( $importo, 2);
  }  }
#if ($conto=="0000")
    {
  $sqlxw = "SELECT *  FROM  maccanismo where esercizio = '$esercizio' and mastro = '$mastro' and sottomastro = '$sottomastro' and conto = '$conto'"; 
  #echo $sqlx;	
  $result2 = $conn->query($sqlxw);
if ($result2->num_rows > 0) {
  while($macrogruppoxw = $result2->fetch_assoc())	
	{ 
  
  $eserciziow = $macrogruppoxw["esercizio"];
  $mastrow = $macrogruppoxw["mastro1"];
  $sottomastrow = $macrogruppoxw["sottomastro1"];
  $contow = $macrogruppoxw["conto1"];
  $sqlxwe = "SELECT *  FROM  movimenticontabili where esercizio = '$eserciziow' and mastro = '$mastrow' and sottomastro = '$sottomastrow' and conto = '$contow'"; 
  #echo $sqlxwe;	
    $result2e = $conn->query($sqlxwe);
if ($result2e->num_rows > 0) {
  while($macrogruppoxwe = $result2e->fetch_assoc())	
	{ 
  #echo "passoxx";
   $importoe = $macrogruppoxwe["importo"];
   $importo=$importo+$importoe;
   $importox=$importo+$importoe;
   } }
    } }
    }

$importox=number_format($importo, 2, ',', '.');

if ($posizione==2)
{
?>  

	<tr>
<td><?php echo $descrizione; ?></td>
<td><?php echo "0"; ?></td>
<td><?php echo number_format($importo, 2, ',', '.'); ?></td>
	</tr>
<?php }
else
 { ?> 
<tr>
<td><?php echo $descrizione; ?></td>
<td><?php echo $importox; ?></td>  
<td><?php echo "0"; ?></td>  
	</tr>
<?php } ?>      
<?php      
   
      
    
}  }


function numdec($n,$d) {
return number_format($n, $d, ',', '.');
}   
?>
</table>
