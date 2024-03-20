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
min-width:   800px;
  min-height:  500px;
  max-width:  800px;
  max-height: 1000px;
}
div#sottocontainer {
min-width:   800px;
  min-height:  500px;
  max-width:  800px;
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
        if(importoass.value=="") { 
            alert("Error: manca IMPORTO ASSOCIATIVO"); 
            importoass.focus(); 
            return false; 
                            } 
					                                                            
                                                            
                                  } 
        } 
</script>
<?php 
$ingranaggio=$_REQUEST["ingranaggio"];
include "conf_DB.php";

#if ($ingranaggio==1)
{$cognome=$_REQUEST["cognome"];
$cognome=strtoupper($cognome);

$nome=$_REQUEST["nome"];
$nome=strtoupper($nome);

$natoa=$_REQUEST["natoa"];
$natoa=strtoupper($natoa);

$datanascita=$_REQUEST["datanascita"];

$residentecitta=$_REQUEST["residentecitta"];
$residentecitta=strtoupper($residentecitta);

$provnatoa=$_REQUEST["provnatoa"];
$provnatoa=strtoupper($provnatoa);

$indirizzores=$_REQUEST["indirizzores"];
$indirizzores=strtoupper($indirizzores);

$cap=$_REQUEST["cap"];

$email=$_REQUEST["email"];

$telefono=$_REQUEST["telefono"];

$cellulare=$_REQUEST["cellulare"];

$codfisc=$_REQUEST["codfisc"];
$codfisc=strtoupper($codfisc);

$residenteprov=$_REQUEST["residenteprov"];
$residenteprov=strtoupper($residenteprov);

$accdati=$_REQUEST["accdati"];

$comunicazioni=$_REQUEST["comunicazioni"];

$telefono=$telefono." Cell. ".$cellulare;
$oggi=date("d/m/Y");
$tessera=$_REQUEST["tessera"];
/*
$sql1 = "SELECT * FROM tessera  where progr = '1' ";
#echo $sql1; 
$query = mysql_query($sql1,$connessione) or die("Err1. SQL: $sql1");
		for ($nc="0"; $macrogruppo = mysql_fetch_array($query); $nc++)
		{ $tessera = $macrogruppo["tessera"];	 
			}
$tessera++;
$sql = "UPDATE tessera set 
tessera = '$tessera'
where 
progr = '1' 
";
if (!mysql_query($sql,$connessione))
    {
    echo "&errore1vcli=errore&";
    } 
    else
    {}      
 $sql = "insert into soci
 (deceduto, 
  tessera, 
  cognome, 
  nome, 
  data_nascita, 
  luogo_nascita, 
  provincia_nascita, 
  indirizzo,
  localita_residenza, 
  provincia, 
  cap, 
  telefono, 
  email, 
  codice_fiscale, 
  data_iscrizione, 
  ass,
  altro,
  login 
 )
  values
 ( 
  '', 
  '$tessera',  
  '$cognome',  
  '$nome',  
  '$datanascita',  
  '$natoa', 
  '$provnatoa',  
  '$indirizzores', 
  '$residentecitta',  
  '$residenteprov',  
  '$cap',  
  '$telefono',  
  '$email',  
  '$codfisc', 
  '$oggi',  
  '$accdati', 
  '$comunicazioni',
  '$login' )
    ";
    if (!mysql_query($sql,$connessione))
        {
        echo "ERRORE gia' presente&";
       } 
       else
       {}   
       $totaleordine1= $totaleordine1+$totaleriga; 
*/         
    }
$anno=date("Y");

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
$asociato=0;
$sql1 = "SELECT * FROM quote  where tessera = '$tessera' and anno = '$anno'";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $asociato=1;  }}
?>
<body>


<div align="center">   
<div id="container">

<p align="center"><b><font face="Arial" size="6" color="#993300">PAGAMENTO QUOTA ASSOCIAZIONE <?php echo $anno; ?></font></b></p>
<p align="center"><b><font face="Arial" size="6" color="#993300">TESSERA N°: <?php echo $tessera; ?> <?php if ($asociato==1) {echo "GIA' ASSOCIATO";} ?></font></b></p>
<table border="1" width="100%" bgcolor="#FFCC66" bordercolorlight="#993300" bordercolordark="#CC6600">
	<tr>
		<td>
		<table border="1" width="100%">
			<tr>
				<td width="237"><font face="Arial">IL SOCIO:</font></td>
				
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- DECEDUTO:</font></td>
				<td>				
					<p>
          <b><font size="4" face="Arial"><?php echo $deceduto; ?></font></b></p>
				</td>
			</tr>
      <tr>
				<td width="237"><font face="Arial" color="#FF0000">- COGNOME:</font></td>
				<td>				
					<p>
					<b><font size="4" face="Arial"><?php echo $cognome; ?></font></b></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- NOME:</font></td>
				<td>				
					<b><font size="4" face="Arial"><?php echo $nome; ?></font></b>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- NATO/A A:</font></td>
				<td>				
					<b><font size="4" face="Arial"><?php echo $natoa; ?></font></b>
				</td>			
				</tr>
      <tr>
				<td width="237"><font face="Arial" color="#FF0000">- PROVINCIA NASCITA:</font></td>
				<td>				
					<b><font size="4" face="Arial"><?php echo $provnatoa; ?></font></b>
				</td>			
				</tr>  
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- IL:</font></td>
				<td>				
					<b><font size="4" face="Arial"><?php echo $datanascita; ?></font></b>
				</td>			
				</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- RESIDENTE A:</font></td>
				<td>				
					<b><font size="4" face="Arial"><?php echo $residentecitta; ?></font></b>
				</td>
			</tr>
      <tr>
				<td width="237"><font face="Arial" color="#FF0000">- PROVINCIA RESIDENZA:</font></td>
				<td>				
					<b><font size="4" face="Arial"><?php echo $residenteprov; ?></font></b>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- VIA/PIAZZA:</font></td>
				<td>				
					<b><font size="4" face="Arial"><?php echo $indirizzores; ?></font></b>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- CAP:</font></td>
				<td>				
					<b><font size="4" face="Arial"><?php echo $cap; ?></font></b>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" >- EMAIL:</font></td>
				<td>				
					<b><font size="4" face="Arial"><?php echo $email; ?></font></b>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial">- TELEFONO:</font></td>
				<td>				
					<b><font size="4" face="Arial"><?php echo $telefono; ?></font></b>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- CODICE FISCALE:</font></td>
				<td>				
					<b><font size="4" face="Arial"><?php echo $codfisc; ?></font></b>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- CONSENSO TRATT. DATI</font></td>
				<td>				
					<b><font size="4" face="Arial"><?php echo $accdati; ?></font></b>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- CONSENSO COMUNICAZIONI</font></td>
				<td>				
					<b><font size="4" face="Arial"><?php echo $comunicazioni; ?></font></b>
			</tr>
		</table>
		</td>
	</tr>
</table>

</div>
</div>
<?php if ($asociato==0)   { ?>
<div align="center">
<p align="center"><b><font face="Arial" size="6" color="#993300">VERSAMENTO QUOTA ASSOCIAZIONE</font></b></p>
<div id="sottocontainer">
<form method="POST" action="associarsi1.php" name="modulo" onSubmit="return controllo();">
<table border="1" width="100%" bgcolor="#FFCC66" bordercolorlight="#993300" bordercolordark="#CC6600">
	<tr>
		<td>
		<table border="1" width="100%">
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- 
				QUOTA: <?php echo $anno; ?></font></td>
				<td>				
					<p>
          <b><font size="4" face="Arial"><input type="text" name="importoass"  value="10.00" size="50" style="background-color: #C0C0C0"></font></b></p>
				</td>
			</tr>
			<tr>
				<td width="237">&nbsp;</td>
       <input type="hidden" name="ingranaggio" value="2" />
       <input type="hidden" name="tessera" value="<?php echo $tessera; ?>" />	
       <input type="hidden" name="login" value="<?php echo $login; ?>" />				
				<td>
       	
					<input type="submit" value="Incassa quota" name="B3"></td>
			</tr>
      	</table>
		</td>
	</tr>
</table>
	</form>
</div>
</div>
<?php } ?>
</body>

</html>