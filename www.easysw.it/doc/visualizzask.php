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
min-width:   600px;
  min-height:  500px;
  max-width:  600px;
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
        if(cognome.value=="") { 
            alert("Error: manca COGNOME"); 
            cognome.focus(); 
            return false; 
                            } 
        if(nome.value=="") { 
            alert("Error: manca NOME"); 
            nome.focus(); 
            return false; 
                            } 
        if(natoa.value=="") { 
            alert("Error: manca NATO A"); 
            natoa.focus(); 
            return false; 
                            } 
        if(provnatoa.value=="") { 
            alert("Error: manca PROVINCIA NASCITA"); 
            provnatoa.focus(); 
            return false; 
                            }                     

        if(datanascita.value=="") { 
            alert("Error: manca NATO IL"); 
            datanascita.focus(); 
            return false; 
                              } 
        if(residentecitta.value=="") { 
            alert("Error: manca CITTA' DI RESIDENZA"); 
            residentecitta.focus(); 
            return false; 
                              }                      
        if(residenteprov.value=="") { 
            alert("Error: manca PROVINCIA DI RESIDENZA"); 
            residenteprov.focus(); 
            return false; 
                              }                      
        if(indirizzores.value=="") { 
            alert("Error: manca INDIRIZZO DI RESIDENZA"); 
            indirizzores.focus(); 
            return false; 
                              }                        
                              
        if(cap.value=="") { 
            alert("Error: manca CAP"); 
            cap.focus(); 
            return false; 
                              } 
                              
         if(codfisc.value=="") { 
            alert("Errore: manca CODICE FISCALE"); 
            codfisc.focus(); 
            return false; 
                              } 
                              
         
					                                                            
                                                            
                                  } 
        } 
</script>
<?php 
$ingranaggio=$_REQUEST["ingranaggio"];
$tessera=$_REQUEST["tessera"];
$tessera=968;
include "conf_DB.php";

if ($ingranaggio==1)
{$cognome=$_REQUEST["cognome"];
$nome=$_REQUEST["nome"];
$natoa=$_REQUEST["natoa"];
$datanascita=$_REQUEST["datanascita"];
$residentecitta=$_REQUEST["residentecitta"];
$provnatoa=$_REQUEST["provnatoa"];
$indirizzores=$_REQUEST["indirizzores"];
$cap=$_REQUEST["cap"];
$email=$_REQUEST["email"];
$telefono=$_REQUEST["telefono"];
$cellulare=$_REQUEST["cellulare"];
$codfisc=$_REQUEST["codfisc"];
$residenteprov=$_REQUEST["residenteprov"];
$accdati=$_REQUEST["accdati"];
$comunicazioni=$_REQUEST["comunicazioni"];

$telefono=$telefono." ".$cellulare;
$oggi=date("d/m/Y");

$sql1 = "SELECT * FROM tessera  where progr = '1' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $tessera = $macrogruppo["tessera"];	 
			} }
$tessera++;
$sql = "UPDATE tessera set 
tessera = '$tessera'
where 
progr = '1' 
";
if ($conn->query($sql) === TRUE)
    {    } 
    else
    {echo "&errore1vcli=errore&";}      
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
  altro 
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
  '$comunicazioni' )
    ";
    if ($conn->query($sql) === TRUE)
        {   } 
       else
       {echo "ERRORE gia' presente&";}   
       $totaleordine1= $totaleordine1+$totaleriga;   
    }
if  ($ingranaggio==2)
{
$tessera=$_REQUEST["tessera"];
$cognome=$_REQUEST["cognome"];
$nome=$_REQUEST["nome"];
$natoa=$_REQUEST["natoa"];
$datanascita=$_REQUEST["datanascita"];
$residentecitta=$_REQUEST["residentecitta"];
$provnatoa=$_REQUEST["provnatoa"];
$indirizzores=$_REQUEST["indirizzores"];
$cap=$_REQUEST["cap"];
$email=$_REQUEST["email"];
$telefono=$_REQUEST["telefono"];
$cellulare=$_REQUEST["cellulare"];
$codfisc=$_REQUEST["codfisc"];
$residenteprov=$_REQUEST["residenteprov"];
$accdati=$_REQUEST["accdati"];
$comunicazioni=$_REQUEST["comunicazioni"];
$deceduto=$_REQUEST["deceduto"];
#echo $deceduto; exit;
$telefono=$telefono." ".$cellulare;
$oggi=date("d/m/Y");
$sql = "UPDATE soci set 
  deceduto='$deceduto',
  cognome='$cognome', 
  nome='$nome', 
  data_nascita='$datanascita', 
  luogo_nascita='$natoa', 
  provincia_nascita='$provnatoa', 
  indirizzo='$indirizzores',
  localita_residenza='$residentecitta', 
  provincia= '$residenteprov', 
  cap='$cap', 
  telefono='$telefono', 
  email='$email', 
  codice_fiscale='$codfisc', 
  data_iscrizione='$oggi', 
  ass= '$accdati',
  altro='$comunicazioni' 
where 
  tessera = '$tessera' ";
if ($conn->query($sql) === TRUE)
    {  } 
    else
    {echo "erroreUPDATE";}   
}

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
			}  }
?>
<body>
<div align="center">   
<div id="container">
<form method="POST" action="visualizzask.php" name="modulo" onSubmit="return controllo();">
<table border="0" width="100%">
	<tr>
		<td><p align="center"><b><font face="Arial" size="6" color="#993300">MODIFICA SKEDA SOCIO</font></b></p></td>
	</tr>
	<tr>
		<td><p align="center"><b><font face="Arial" size="6" color="#993300">TESSERA N°: <?php echo $tessera; ?></font><font face="Arial" size="6" color="#ff0000">
<?php if($ingranaggio==2) {echo " modificato";} ?>
</font></b></p></td>
	</tr>
</table>


<table border="1" width="100%" bgcolor="#FFCC66" bordercolorlight="#993300" bordercolordark="#CC6600">
	<tr>
		<td>
		<table border="1" width="100%">
			<tr>
				<td width="237"><font face="Arial">IL SOTTOSCRITTO:</font></td>
				
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- DECEDUTO:</font></td>
				<td>				
					<p>
					<input type="text" name="deceduto" value="<?php echo $deceduto; ?>" size="50" style="background-color: #C0C0C0"></p>
				</td>
			</tr>
      <tr>
				<td width="237"><font face="Arial" color="#FF0000">- COGNOME:</font></td>
				<td>				
					<p>
					<input type="text" name="cognome" value="<?php echo $cognome; ?>" size="50" style="background-color: #C0C0C0"></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- NOME:</font></td>
				<td>				
					<p><input type="text" name="nome" value="<?php echo $nome; ?>" size="50" style="background-color: #C0C0C0"></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- NATO/A A:</font></td>
				<td>				
					<p><input type="text" name="natoa" value="<?php echo $natoa; ?>" size="50" style="background-color: #C0C0C0"></p>
				</td>			
				</tr>
      <tr>
				<td width="237"><font face="Arial" color="#FF0000">- POVINCIA NASCITA:</font></td>
				<td>				
					<p><input type="text" name="provnatoa" value="<?php echo $provnatoa; ?>" size="50" style="background-color: #C0C0C0"></p>
				</td>			
				</tr>  
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- IL:</font></td>
				<td>				
					<p><input type="text" name="datanascita" value="<?php echo $datanascita; ?>" size="20" style="background-color: #C0C0C0"></p>
				</td>			
				</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- RESIDENTE A:</font></td>
				<td>				
					<p><input type="text" name="residentecitta" value="<?php echo $residentecitta; ?>" size="50" style="background-color: #C0C0C0"></p>
				</td>
			</tr>
      <tr>
				<td width="237"><font face="Arial" color="#FF0000">- PROVINCIA RESIDENZA:</font></td>
				<td>				
					<p><input type="text" name="residenteprov" value="<?php echo $residenteprov; ?>" size="50" style="background-color: #C0C0C0"></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- VIA/PIAZZA:</font></td>
				<td>				
					<p><input type="text" name="indirizzores" value="<?php echo $indirizzores; ?>" size="50" style="background-color: #C0C0C0"></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- CAP:</font></td>
				<td>				
					<p><input type="text" name="cap" value="<?php echo $cap; ?>" size="20" style="background-color: #C0C0C0"></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" >- EMAIL:</font></td>
				<td>				
					<p><input type="text" name="email" value="<?php echo $email; ?>" size="50" style="background-color: #C0C0C0"></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial">- TELEFONO:</font></td>
				<td>				
					<p><input type="text" name="telefono" value="<?php echo $telefono; ?>" size="50" style="background-color: #C0C0C0"></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial">- CELLULARE:</font></td>
				<td>				
					<p><input type="text" name="cellulare" value="<?php echo $cellulare; ?>" size="50" style="background-color: #C0C0C0"></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- CODICE FISCALE:</font></td>
				<td>				
					<p><input type="text" name="codfisc" value="<?php echo $codfisc; ?>" size="50" style="background-color: #C0C0C0"></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- CONSENSO TRATT. DATI</font></td>
				<td>				
					<select size="1" name="accdati" style="background-color: #C0C0C0">
					<option selected>SI</option>
					<option>NO</option>
					</select></td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- CONSENSO COMUNICAZIONI</font></td>
				<td>				
					<select size="1" name="comunicazioni" style="background-color: #C0C0C0">
					<option selected>SI</option>
					<option>NO</option>
					</select></td>
			</tr>
       <input type="hidden" name="ingranaggio" value="2" />
       <input type="hidden" name="tessera" value="<?php echo $tessera; ?>" />
			<tr>
				<td width="237">&nbsp;</td>
				<td><input type="submit" value="Varia Dati" name="B3"><input type="reset" value="Reset" name="B4"></td>
			</tr>
		</table>
		</td>
	</tr>
</table>
<p>&nbsp;</p>
</form>
</div>
</div>
</body>

</html>