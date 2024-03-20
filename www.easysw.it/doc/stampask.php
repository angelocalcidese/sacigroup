<?php
$tessera=$_REQUEST["tessera"];
include "conf_DB.php";
#$tessera=916;
$sql1 = "SELECT * FROM soci  where tessera = '$tessera' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ 
      $tessera = $macrogruppo["tessera"];	
      $cognome = $macrogruppo["cognome"];
      $nome = $macrogruppo["nome"];
      $datanascita = $macrogruppo["data_nascita"];
      $natoa = $macrogruppo["luogo_nascita"];
      $provnatoa = $macrogruppo["provincia_nascita"];
      $indirizzores = $macrogruppo["indirizzo"];
      $residentecitta = $macrogruppo["localita_residenza"];
      $residenteprov= $macrogruppo["provincia"];
      $cap = $macrogruppo["cap"];
      $telefono = $macrogruppo["telefono"];
      $email = $macrogruppo["email"];
      $codfisc = $macrogruppo["codice_fiscale"];
      $oggi = $macrogruppo["data_iscrizione"];
      $accdati = $macrogruppo["ass"];
      $comunicazioni = $macrogruppo["altro"];	
      $deceduto = $macrogruppo["deceduto"];	
      $cellulare=""; 
			} }
      $oggi=date("d/m/Y");
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>CSRC</title>
<style>
div#container {
min-width:   900px;
  min-height:  500px;
  max-width:  900px;
  max-height: 1000px;
}
div#sottocontainer {
min-width:   600px;
  min-height:  500px;
  max-width:  600px;
  max-height: 1000px;
}
</style>
<style>
.line
{
font-size:10px;
line-height:10px;
}
</style>

</head>

<body>
<div align="center">
<div>
<a href="javascript:print();">stampa</a>
</div>
<div id="container">
<table border="1" width="100%">
	<tr>
		<td>
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td width="239">
				<p align="center">
				<img border="0" src="comune.png" width="176" height="88"></td>
				<td>
				<p align="center">
				<img border="0" src="albero.png" width="99" height="91"></td>
				<td width="508">
				<table border="0" width="100%" cellspacing="0" cellpadding="0">
					<tr>
						<td><b><font face="Arial" size="4">Centro Socio 
						Ricreativo e Culturale &quot;Carlo Poma&quot;</font></b></td>
					</tr>
					<tr>
						<td><b><font face="Arial" size="4">Zona 7 - via Caio 
						Mario, 18 - Milano 20153</font></b></td>
					</tr>
					<tr>
						<td><b><font face="Arial" size="4">C.F. 97591770157</font></b></td>
					</tr>
					<tr>
						<td><b><font face="Arial" size="4">Tel. 02 88 44 8465 - 
						Tel. e Fax 02 48205404</font></b></td>
					</tr>
					<tr>
						<td><b><font face="Arial" size="4">Email: csra.carlopoma@gmail.com</font></b></td>
					</tr>
				</table>
				</td>
			</tr>
			<tr>
				<td width="239">
				<p align="center"><b><font face="Arial">Settore Servizi per Anziani</font></b></td>
				<td>&nbsp;</td>
				<td width="508" align="center">
				&nbsp;<table border="1" width="44%">
					<tr>
						<td><b><font face="Arial" size="5">Tessera n. <?php echo $tessera; ?></font></b></td>
					</tr>
				</table>
				</td>
			</tr>
		</table>
		</td>
	</tr>
</table>
<td>&nbsp;</td>
<td>&nbsp;</td>
<u><b><font face="Arial" size="6">MODULO DI ISCRIZIONE</font></b></u><p align="center"><b><font face="Arial" size="4">Al Centro Socio Ricreativo e 
Culturale</font></b></p>
<p align="center"><b><font face="Arial" size="6">&quot;CARLO POMA&quot;</font></b></p>
<p align="center"><b><font face="Arial" size="4">ATTENZIONE: I DATI SEGNATI CON 
L'* SONO OBBLIGATORI</font></b></p>
<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td>
		<table border="1" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td width="279" height="60"><b><font face="Arial" size="5">* IL SOTTOSCRITTO:</font></b></td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td width="279" height="60"><b><font face="Arial" size="5">
				* COGNOME:</font></b></td>
				<td><b><font face="Arial" color="#800000" size="4">&nbsp;&nbsp;<?php echo $cognome; ?></font></b></td>
			</tr>
			<tr>
				<td width="279" height="60"><b><font face="Arial" size="5">
				* NOME:</font></b></td>
				<td><b><font face="Arial" color="#800000" size="4">&nbsp;&nbsp;<?php echo $nome; ?></font></b></td>
			</tr>
			<tr>
				<td width="279" height="60"><b><font face="Arial" size="5">* NATO/A A:</font></b></td>
				<td><b><font face="Arial" color="#800000" size="4">&nbsp;&nbsp;<?php echo $natoa; ?> <?php echo $provnatoa; ?></font></b></td>
			</tr>
			<tr>
				<td width="279" height="60"><b><font face="Arial" size="5">* IL</font></b></td>
				<td><b><font face="Arial" color="#800000" size="4">&nbsp;&nbsp;<?php echo $datanascita; ?></font></b></td>
			</tr>
			<tr>
				<td width="279" height="60"><b><font face="Arial" size="5">* RESIDENTE A:</font></b></td>
				<td><b><font face="Arial" color="#800000" size="4">&nbsp;&nbsp;<?php echo $residentecitta; ?> <?php echo $residenteprov; ?></font></b></td>
			</tr>
			<tr>
				<td width="279" height="60"><b><font face="Arial" size="5">* VIA/PIAZZA</font></b></td>
				<td><b><font face="Arial" color="#800000" size="4">&nbsp;&nbsp;<?php echo $indirizzores; ?></font></b></td>
			</tr>
		</table>
		<table border="1" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td width="279" height="60"><b><font face="Arial" size="5">* CAP</font></b></td>
				<td width="114"><b><font face="Arial" color="#800000" size="4">&nbsp;&nbsp;<?php echo $cap; ?></font></b></td>
				<td width="83"><b><font face="Arial" size="5">EMAIL: </font></b></td>
				<td><b><font face="Arial" color="#800000" size="4">&nbsp;&nbsp;<?php echo $email; ?></font></b></td>
			</tr>
		</table>
		<table border="1" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td width="279" height="60"><b><font face="Arial" size="5">TELEFONO:</font></b></td>
				<td width="199"><b><font face="Arial" color="#800000" size="4">&nbsp;&nbsp;<?php echo $telefono; ?></font></b></td>
				<td width="131"><b><font face="Arial" size="5">CELLULARE:</font></b></td>
				<td><b><font face="Arial" color="#800000" size="4">&nbsp;&nbsp;<?php echo $cellulare; ?></font></b></td>
			</tr>
		</table>
		<table border="1" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td align="center" height="60"><b><font face="Arial" size="5">* CODICE FISCALE</font></b></td>
			</tr>
			<tr>
				<td align="center" height="60"><b>
				<font face="Arial" color="#800000" size="4"><?php echo $codfisc; ?></font></b></td>
			</tr>
		</table>
		</td>
	</tr>
</table>
<p>&nbsp;</p>
<table border="1" width="100%">
	<tr>
		<td height="40"><b><font face="Arial" size="4">CHIEDE DI ISCRIVERSI ALL'ASSOCIAZIONE - CENTRO 
		SOCIO RICREATIVO E CULTURALE &quot;CARLO POMA&quot; - E DI ACCETTARE LE CONDIZIONI 
		CHE NE REGOLANO L'ATTIVITA' PREVISTE DALLO STATUTO.</font></b></td>
	</tr>
	<tr>
		<td height="40"><b><font face="Arial" size="4">DICHIARA INOLTRE DI NON ESSERE ISCRITTO A 
		NESSUN'ALTRA ASSOCIAZIONE FACENTE PARTE DEI CENTRI SOCI RICREATIVI DEL 
		COMUNE DI MILANO</font></b></td>
	</tr>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td>&nbsp;<p>&nbsp;</td>
	</tr>
	<tr>
		<td><b><font face="Arial">Firma: 
		____________________________________________</font></b></td>
	</tr>
	<tr>
		<td align="right"><b><font face="Arial">Associazione &quot;Carlo Poma&quot;</font></b></td>
	</tr>
	<tr>
		<td align="right"><b><font face="Arial">Il Presidente&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</font></b></td>
	</tr>
	<tr>
		<td><b><font face="Arial">Milano, <?php echo $oggi; ?></font></b></td>
	</tr>
</table>
</div>
</div>
</div>

</body>

</html>