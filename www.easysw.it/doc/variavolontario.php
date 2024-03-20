<?php
$login=$_REQUEST["login"];
$zona=$_REQUEST["zona"];
$codice=$_REQUEST["codice"];
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Gruppi di Volontariato Vincenziano</title> 
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
<style>
.table4 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
background: #ECE9E0;
color: #656665;
border: 16px solid #5197FF;
border-radius: 20px;
}
.table4 th {
font-size: 18px;
padding: 10px;
}
.table4 td {
background: #B3B3D0;
padding: 5px;

}

.table5 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
background: #ECE9E0;
color: #656665;
border: 16px solid #9B9B9B;
border-radius: 20px;
}
.table5 th {
font-size: 18px;
padding: 10px;
}
.table5 td {
background: #8888B3;
padding: 5px;
}

.table6 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
background: #ECE9E0;
color: #656665;
border: 16px solid #B2CAEA;
border-radius: 20px;
}
.table6 th {
font-size: 18px;
padding: 10px;
}
.table6 td {
background: #B3B3D0;
padding: 5px;
}

.table7 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
background: #ECE9E0;
color: #656665;
border: 16px solid #FF9900;
border-radius: 20px;
}
.table7 th {
font-size: 18px;
padding: 10px;
}
.table7 td {
background: #FFD393;
padding: 5px;
}
.table8 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
background: #ECE9E0;
color: #656665;
border: 16px solid #006600;
border-radius: 20px;
}
.table8 th {
font-size: 18px;
padding: 10px;
}
.table8 td {
background: #97FF97;
padding: 5px;
}
.table9 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
background: #ECE9E0;
color: #656665;
border: 16px solid #0066FF;
border-radius: 20px;
}
.table9 th {
font-size: 18px;
padding: 10px;
}
.table9 td {
background: #AECEFF;
padding: 5px;
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
        if(codice.value=="") { 
            alert("Error: manca CODICE VOLONTARIO"); 
            codice.focus(); 
            return false; 
                            } 
        if(cellulare.value=="") { 
            alert("Error: manca TELEFONO CELLULARE"); 
            cellulare.focus(); 
            return false; 
                            }                     

                              
         
					                                                            
                                                            
                                  } 
        } 
</script>
<?php 
include "conf_DB.php";

$ingranaggio=$_REQUEST["ingranaggio"];
$erroreriferimento="";
if ($ingranaggio==1)
   {

$cognome=$_REQUEST["cognome"];
$nome=$_REQUEST["nome"];
$indirizzo=$_REQUEST["indirizzo"];
$cap=$_REQUEST["cap"];
$localita=$_REQUEST["localita"];
$provincia=$_REQUEST["provincia"];
$nazione=$_REQUEST["nazione"];
$nazione="ITALIA";
$citta=$_REQUEST["citta"];
$citta="MILANO";
$codice=$_REQUEST["codice"];
$cellulare=$_REQUEST["cellulare"];
$zonaform=$_REQUEST["zona"];
$fisso=$_REQUEST["fisso"];
$accesso=$_REQUEST["accesso"];
$password=$_REQUEST["password"];
$tipoutente=$_REQUEST["dio"];

$sql = "
DELETE from volontari where nazione = 'ITALIA' and citta = 'MILANO' and zona = '$zona' and codice = '$codice'";
if ($conn->query($sql) === FALSE)
  {echo "errxx=errore";exit;}
  else
  {echo "cancellato";}

$cognome=str_replace("'", "\'", $cognome);
$indirizzo=str_replace("'", "\'", $indirizzo);
$localita=str_replace("'", "\'", $localita);
$oggi=date("Y-m-d H:m:s");
   $sql = "INSERT INTO `volontari`(
   `nazione`, 
   `citta`, 
   `zona`, 
   `codice`, 
   `cognome`, 
   `nome`, 
   `indirizzo`, 
   `cap`, 
   `localita`, 
   `provincia`, 
   `cellulare`, 
   `telefono`,
   `datacreazione`, 
   `operatore`
   ) 
   VALUES (
   '$nazione',
   '$citta',
   '$zonaform',
   '$codice',
   '$cognome',
   '$nome',
   '$indirizzo',
   '$cap',
   '$localita',
   '$provincia',
   '$cellulare',
   '$fisso',
   CURRENT_TIMESTAMP,
   '$login')";
   #echo $sql; 
if ($conn->query($sql) === FALSE) 
    {
    $erroreriferimento="errore codice volontario gia' esistente"; exit;
    } 
    else
     {
  if ($tipoutente=="1")
   {  
   
$sql = "
DELETE from utenti where nazione = 'ITALIA' and citta = 'MILANO' and zona = '$zona' and codvolontario = '$codice' ";
if ($conn->query($sql) === FALSE)
  {echo "errxx=errore";exit;}
  else
  {echo "cancellato";}     
    
   $sqlx = "INSERT INTO `utenti`(
   `login`, 
   `password`, 
   `dio`, 
   `tesseramento`, 
   `corsi`, 
   `contabilita`, 
   `nazione`, 
   `citta`, 
   `zona`,
   `codvolontario`) 
   VALUES (
   '$accesso',
   '$password',
   '$tipoutente',
   'SI',
   'SI',
   'SI',
   'ITALIA',
   'MILANO',
   '$zona',
   '$codice')";
   #echo $sqlx; exit;
   if ($conn->query($sqlx) === FALSE) 
    { $erroreriferimento="errore scrittura utente"; }   
    }      
?>
<script>setTimeout('window.close()', 0100)</script>  
<?php  
}
   }
   


$sql = "SELECT *  FROM  volontari where nazione = 'ITALIA' and citta = 'MILANO' and zona = '$zona' and codice = '$codice'"; 
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
 <td bgcolor="#FFFFFF" align="center" style="border: 0px ; "><b><font face="Arial" size="3" color="#993300"><? echo $zona; ?></font></b></td>             
      
<div id="container">
<form method="POST" action="" name="modulo" onSubmit="return controllo();">


<p align="center"><b><font face="Arial" size="3" color="#FF0000"><?php echo $erroreriferimento; ?></font></b></p>
<table border="1" width="100%" bgcolor="#FFF4F7" class="table6">
	<tr>
		<td>
		<table border="1" width="100%">
			<tr>
				<td width="237"><font face="Arial">VOCI</font></td>
				<td  align="center"style="background-color: #C0C0C0; color:white;" ><font face="Arial" size="4">VARAZIONE VOLONTARIO</font></td>
			</tr>
	
			<tr>
				<td width="237"><font face="Arial" color="#003300">- NAZIONE</font></td>
				<td>				
					<p style="background-color: #C0C0C0" >ITALIA </p>
				</td>
			</tr>
      
      <tr>
				<td width="237"><font face="Arial" color="#003300">- CITTA'</font></td>
				<td>				
					<p style="background-color: #C0C0C0" >MILANO</p>
				</td>
			</tr>
      
       <tr>
				<td width="237"><font face="Arial" color="#003300">- ZONA</font></td>
				<td>				
					<p style="background-color: #C0C0C0" ><?php echo $zona; ?>	</p>
				</td>
			</tr>
      
      
      
      
      
      
      
			<tr>
				<td width="237"><font face="Arial" color="#003300">- CODICE</font></td>
				<td>				
					<p size="5" style="background-color: #C0C0C0" ><?php echo $codice; ?></td>			
				</tr>
      <tr>
				<td width="237"><font face="Arial" color="#003300">- COGNOME</font></td>
				<td>				
					<p>
					<input type="text" name="cognome" value="<?php echo $cognome; ?>" size="60" style="background-color: #C0C0C0" maxlength="60">
					</p>
				</td>			
				</tr>  
			<tr>
				<td width="237"><font face="Arial" color="#003300">- NOME</font></td>
				<td>				
					<p>
					<input type="text" name="nome" value="<?php echo $nome; ?>" size="60" style="background-color: #C0C0C0">
					</p>
				</td>			
				</tr>
			<tr>
				<td width="237"><font face="Arial" color="#003300">- INDIRIZZO</font></td>
				<td>				
					<p>
					<input type="text" name="indirizzo" value="<?php echo $indirizzo; ?>" size="60" style="background-color: #C0C0C0"></p>
				</td>
			</tr>
      <tr>
				<td width="237"><font face="Arial" color="#003300">- CAP</font></td>
				<td>				
					<p>
					<input type="text" name="cap" value="<?php echo $cap; ?>" size="5" style="background-color: #C0C0C0" maxlength="5">
					<font face="Arial">5 posizioni numerico</font></p>
				</td>
			</tr>
      <tr>
				<td width="237"><font face="Arial" color="#003300">- LOCALITA'</font></td>
				<td>				
					<p>
					<input type="text" name="localita"  value="<?php echo $localita; ?>" size="60" style="background-color: #C0C0C0">
					</p>
				</td>
			</tr>
      
       <tr>
				<td width="237"><font face="Arial" color="#003300">- PROVINCIA</font></td>
				<td>				
					<p>
					<input type="text" name="provincia"  value="<?php echo $provincia; ?>" size="60" style="background-color: #C0C0C0">
					</p>
				</td>
			</tr>
      
      <tr>
				<td width="237"><font face="Arial" color="#003300">- CELLULARE</font></td>
				<td>				
					<p>
					<input type="text" name="cellulare"  value="<?php echo $cellulare; ?>" size="30" style="background-color: #C0C0C0">
					</p>
				</td>
			</tr>
      
      <tr>
				<td width="237"><font face="Arial" color="#003300">- TEL. FISSO</font></td>
				<td>				
					<p>
					<input type="text" name="fisso"  value="<?php echo $fisso; ?>" size="30" style="background-color: #C0C0C0">
					</p>
				</td>
			</tr>
<?php
$sql1 = "SELECT * FROM utenti  where login = '$login' and nazione = 'ITALIA' and citta = 'MILANO' and zona = '$zona'";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{  $dio = $macrogruppo["dio"];
$sql1x = "SELECT * FROM utenti  where codvolontario = '$codice' and nazione = 'ITALIA' and citta = 'MILANO' and zona = '$zona'";
#echo $sql1; 
$resultx = $conn->query($sql1x);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc()) 
		{$loginvar = $macrogruppox["login"];
     $password = $macrogruppox["password"];
       }}
    if ($dio=="1")  {
?>      
      <tr>
				<td width="237"><font face="Arial" color="#003300">- LOGIN ACCESSO</font></td>
				<td>				
					<p>
					<input type="text" name="accesso"  value="<?php echo $loginvar ; ?>" size="30" style="background-color: #C0C0C0">
					</p>
				</td>
			</tr>      
      <tr>
				<td width="237"><font face="Arial" color="#003300">- PASSWORD</font></td>
				<td>				
					<p>
					<input type="text" name="password"  value="<?php echo $password; ?>" size="30" style="background-color: #C0C0C0">
					</p>
				</td>
			</tr>          
      <tr>
				<td width="237"><font face="Arial" color="#003300">- TIPO UTENTE</font></td>
				<td>				
					<p>
					<input type="text" name="dio"  value="<?php echo $dio; ?>" size="1" style="background-color: #C0C0C0">
					<font face="Arial">1=amministratore   0=utente</font></p>
          </p>
				</td>
			</tr>  
<?php
}}} ?>      
      
      
      
       <input type="hidden" name="ingranaggio" value="1" />
       <input type="hidden" name="login" value="<?php echo $login; ?>" />
       <input type="hidden" name="zona" value="<?php echo $zona; ?>" />
       <input type="hidden" name="codice" value="<?php echo $codice; ?>" />
			<tr>
				<td width="237">&nbsp;</td>
				<td><input type="submit" value="Modifica" name="B3"></td>
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