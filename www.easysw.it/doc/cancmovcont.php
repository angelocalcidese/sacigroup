<?php

?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 4</title>
</head>
<style>
div#container {
min-width:   700px;
  min-height:  500px;
  max-width:  700px;
  max-height: 1000px;
}
</style>
<style>
a 
{
    text-decoration: none; 
    font-weight: normal;
    color: #000000
}
 
a:hover
{
    color: #0080FF;
}
</style>
<script type="text/javascript">
		
		function controllo(){ 
            with(document.modulo) { 
        if(anno.value=="") { 
            alert("Error: manca ANNO DI COMPETENZA"); 
            anno.focus(); 
            return false; 
                            } 
        if(mastro.value=="") { 
            alert("Error: manca MASTRO"); 
            mastro.focus(); 
            return false; 
                            } 
        if(sottomastro.value=="") { 
            alert("Error: manca SOTTOMASTRO"); 
            sottomastro.focus(); 
            return false; 
                            } 
        if(conto.value=="") { 
            alert("Error: manca CONTO"); 
            conto.focus(); 
            return false; 
                            }                     

        if(eu.value=="") { 
            alert("Error: manca ENTRATA/USCITA"); 
            eu.focus(); 
            return false; 
                              } 
                                                     
                                  } 
        } 
</script>
<?php 
include "conf_DB.php";
$codice=$_REQUEST["codice"];
$zona=$_REQUEST["zona"];
#$progr=1;
$login=$_REQUEST["login"];
$ingranaggio=$_REQUEST["ingranaggio"];
if ($ingranaggio==1)
{$sql = "
DELETE from movimenticontabili where progr = '$progr'";
if ($conn->query($sql) === FALSE)
  {echo "errxx=errore";exit;}
  else
  {echo "cancellato";}
?>
<script>
    window.onload = closeWindow();
</script>    
<?php    
}    
$sql = "SELECT *  FROM  volontari where nazione = 'ITALIA' and citta = 'MILANO and zona = '$zona' and codice = '$codice'"; 
#echo $sql;
	$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
	{  
      
      $cognome= $macrogruppo["cognome"];
      $nome = $macrogruppo["nome"];
      $indirizzo = $macrogruppo["indirizzo"];
      $cap = $macrogruppo["cap"];
      $localita = $macrogruppo["localita"];
      $provincia = $macrogruppo["provincia"];
      $indirizzo = $macrogruppo["indirizzo"];      
      $cellulare = $macrogruppo["cellulare"];
      $fisso = $macrogruppo["fisso"];
   }  } 
    
    
    
  
    


?>
<body>

<div align="center">
<form method="POST" action="">
	<table border="1" width="100%" bgcolor="#9999FF">
		<tr>
			<td>
			<p align="center"><font face="Arial" color="#ffffff"><b>
			CANCELLAZIONE VOLONTARIO</b></font>
      <p align="center"><font face="Arial" color="#ffffff"><b>
			<? echo $zona; ?></b></font>
			<table border="1" width="100%" bgcolor="#99CCFF">
				<tr>
					<td><font face="Arial">CODICE</font></td>
					<td><font face="Arial"><?php echo $codice; ?></font></td>
				</tr>
				<tr>
					<td><font face="Arial">COGNOME</font></td>
					<td><font face="Arial"><?php echo $cognome; ?></font></td>
				</tr>
				<tr>
					<td><font face="Arial">NOME</font></td>
					<td><font face="Arial"><?php echo $nome; ?></font></td>
				</tr>
				<tr>
					<td><font face="Arial">INDIRIZZO</font></td>
					<td><font face="Arial"><?php echo $indirizzo; ?></font></td>
				</tr>
				<tr>
					<td><font face="Arial">CAP</font></td>
					<td><font face="Arial"><?php echo $cap; ?></font></td>
				</tr>
				<tr>
					<td><font face="Arial">LOCALITA'</font></td>
					<td><font face="Arial"><?php echo $localita; ?></font></td>
				</tr>
				<tr>
					<td><font face="Arial">PROVINCIA</font></td>
					<td><font face="Arial"><?php echo $provincia; ?></font></td>
				</tr>
        	<tr>
					<td><font face="Arial">CELLULARE</font></td>
					<td><font face="Arial"><?php echo $cellulare; ?></font></td>
				</tr>
        	<tr>
					<td><font face="Arial">FISSO</font></td>
					<td><font face="Arial"><?php echo $fisso; ?></font></td>
				</tr>
			</table>
			<p align="center"><b><font face="Arial">CONFERMA ELIMINAZIONE 
			MOVIMENTO CONTABILE?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font></b>
      <input type="hidden" name="ingranaggio" value="1" />
			<input type="submit" value="CONFERMO" name="B2" style="color: #FF0000; font-weight: bold; background-color: #FFFF00"></td>
		</tr>
	</table>
</form>



</div>


</body>

</html>