
DA:
<table class="expose-table">
  <tr>
    <th colspan="3"> 
        TICKET NUMERO <?php echo $numero; ?> STATO <?php echo $stato; ?>
    </th>
  </tr>
<tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Insegna:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $insegna; ?></span>
    </td>
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Ragione Sociale:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $ragsoc; ?></span>
    </td>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Indirizzo:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $indirizzo; ?></span>
    </td>
    <td colspan="1"> 
      <div style="width:49%; float:left">
        <label style="color: #8e8b8b;">Cap:</label style="color: #8e8b8b;"><br>
        <span ><?php echo $cap; ?></span>
      </div>
      <div style="width:49%; float:right">
        <label style="color: #8e8b8b;">Prov:</label style="color: #8e8b8b;"><br>
        <span ><?php echo $prov; ?></span>
      </div>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Città:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $citta; ?></span>
    </td>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Telefoni:</label><br>
      <span ><?php echo $telefono; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Note/Orari:</label><br>
      <span ><?php echo $note; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Contatto:</label><br>
      <span ><?php echo $contatto; ?></span>
    </td>
  </tr>
</table>
<br>
<?
$sql1v = "SELECT * FROM cat  order by citta ";
#echo $sql1v; 
$resultv = $conn->query($sql1v);
if ($resultv->num_rows > 0) {
   while($macrogruppov = $resultv->fetch_assoc())
		{
         $codicev = $macrogruppov["codice"];
         $ragsocv = $macrogruppov["ragsoc"];
         $viav = $macrogruppov["via"];
         $cittav = $macrogruppov["citta"];
         $capv = $macrogruppov["cap"];
         $provv = $macrogruppov["prov"];
         $regionev = $macrogruppov["regione"];
         $ivav = $macrogruppov["iva"];
         $ibanv = $macrogruppov["iban"];
         $sdiv = $macrogruppov["sdi"];
         $ammcognome = $macrogruppov["ammcognome"];
         $ammnome = $macrogruppov["ammnome"];
         $optelefono = $macrogruppov["optelefono"];
         $opemail = $macrogruppov["opemail"];
         $opcognome = $macrogruppov["opcognome"];
         $opnome = $macrogruppov["opnome"];
         $opcognomenome=$opcognome." ".$opnome;
         ?>
A:
<table class="expose-table"> 
<tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Ragione Sociale:</label style="color: #8e8b8b;"><br>
      <span style="color: #cc0000;font-size: 16pt;"><?php echo $ragsocv; ?></span>
    </td>
  
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Indirizzo:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $viav; ?></span>
    </td>
    <td colspan="1"> 
      <div style="width:49%; float:left">
        <label style="color: #8e8b8b;">Cap:</label style="color: #8e8b8b;"><br>
        <span ><?php echo $capv; ?></span>
      </div>
      <div style="width:49%; float:right">
        <label style="color: #8e8b8b;">Prov:</label style="color: #8e8b8b;"><br>
        <span ><?php echo $provv; ?></span>
      </div>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Città:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $cittav; ?></span>
    </td>
  
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Telefono:</label><br>
      <span ><?php echo $optelefono; ?></span>
    </td>
    
  </tr>
</table>
<?php 
$partenza=$indirizzo."  ".$citta;
$arrivo=$viav." ".$cittav;
#echo $partenza." ".$arrivo."<br>";
?>
<iframe  align="right" frameborder="0" width="100%" height="70" scrolling="no" src="distanza100.php?indda=<? echo $partenza; ?>&inda=<? echo $arrivo; ?>"></iframe> 

<? }} ?>
<?php 
$partenza=$indirizzo."  ".$citta;
$arrivo=$viav." ".$cittav;
#echo $partenza." ".$arrivo."<br>";
?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>