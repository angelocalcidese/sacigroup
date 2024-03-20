<div align="center" >
	<table border="0" width="760" height="140" bgcolor="#ffffff"  >
		<tr > 
			<td colspan="2" style="border-radius: 20px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"">
      <div align="center">
			<img border="0" src="carlopoma.png" width="400" height="140"> <br>
      </div>
      </td>
      </tr>
   <tr> 

<td bgcolor="#FFFFFF" style="border: 0px ; "><a href="menugenerale.php?login=<?php echo $login; ?>&zona=<? echo $zona; ?>">Menu Generale</a>/Lista Volontari</td>             

	



<?php
$sql1 = "SELECT * FROM utenti  where login = '$login'  and nazione = 'ITALIA' and citta = 'MILANO' and zona = '$zona'";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{$codvolontario = $macrogruppo["codvolontario"];
     $dio = $macrogruppo["dio"];
    } }
if($dio=="1"){$dicidio="amm.";}else{$dicidio="utente";}
$sql1 = "SELECT * FROM volontari  where codice = '$codvolontario'  and nazione = 'ITALIA' and citta = 'MILANO' and zona = '$zona'";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{$cognomevol = $macrogruppo["cognome"];
     $nomevol = $macrogruppo["nome"];
    } }
?>           
      <td bgcolor="#FFFFFF" align="right" style="border: 0px ; "><? echo $codvolontario." - ".$cognomevol." ".$nomevol." - ".$dicidio; ?></td>         
     </tr>
     </table> 
     <table  style="width: 60em; border: 0px ; border-bottom: 0px;">
     <tr>
     <td bgcolor="#FFFFFF" align="center" style="border: 0px ; "><b><font face="Arial" size="3" color="#993300"><? echo $zona; ?></font></b></td>             
     </tr>
</tr>     
	</table>       
</div> 