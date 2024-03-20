<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="pomaindex.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php
}
$login=$_REQUEST["login"];
$zona=$_REQUEST["zona"];
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
$login=$_REQUEST["login"];
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
$tipoutente=$_REQUEST["tipoutente"];
$dio=$_REQUEST["dio"];
$ingranaggio=$_REQUEST["ingranaggio"];
$erroreriferimento="";
if ($ingranaggio==1)
   {
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
   #echo $sql; exit;
if ($conn->query($sql) === FALSE) 
    {
    $erroreriferimento="errore codice volontario già esistente";
    } 
    else
     {
  if ($dio=="1")
   {   
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
     $url_pagina_chiamante="menugenerale.php?login=".$login."&zona=".$zona;?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script> 
    <?php }
   }
   




?>
<body>

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

<td bgcolor="#FFFFFF" style="border: 0px ; "><a href="menugenerale.php?login=<?php echo $login; ?>&zona=<? echo $zona; ?>">Menu Generale</a>/Inserimento Volontari</td>             



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
     <td bgcolor="#FFFFFF" align="center" style="border: 0px ; "><b><font face="Arial" size="3" color="#993300"><br><? echo $zona; ?></font></b></td>             
     </tr>
</tr>     
	</table>       
</div> 
<div align="center">   
<div id="container">
<form method="POST" action="" name="modulo" onSubmit="return controllo();">
<p align="center"><b><font face="Arial" size="5" color="#993300">INSERIMENTO VOLONTARIO </font></b></p>

<p align="center"><b><font face="Arial" size="6" color="#FF0000"><?php echo $erroreriferimento; ?></font></b></p>
<table border="1" width="100%" bgcolor="#FFF4F7" class="table6">
	<tr>
		<td>
		<table border="1" width="100%">
			<tr>
				<td width="350"><font face="Arial">VOCI</font></td>
				
			</tr>
<!--
			<tr>
				<td width="350"><font face="Arial" color="#003300">- NAZIONE</font></td>
				<td>				
					<p>
					<input type="text" name="nazione" value="ITALIA" size="60" style="background-color: #C0C0C0" maxlength="80">
					</p>
				</td>
			</tr>
      
      <tr>
				<td width="360"><font face="Arial" color="#003300">- CITTA'</font></td>
				<td>				
					<p>
					<input type="text" name="citta" value="MILANO" size="60" style="background-color: #C0C0C0" maxlength="80">
					</p>
				</td>
			</tr>
      
       <tr>
				<td width="360"><font face="Arial" color="#003300">- ZONA</font></td>
				<td>				
					<p>
					<input type="text" name="zonaform" value="<?php echo $zona; ?>" size="60" style="background-color: #C0C0C0" maxlength="80">
					</p>
				</td>
			</tr>
-->      
      
      
      
      
      
      
			<tr>
				<td width="360"><font face="Arial" color="#003300">- CODICE</font></td>
				<td>				
					<p>
					<input type="text" name="codice" value="<?php echo $codice; ?>" size="5" style="background-color: #C0C0C0" maxlength="5">
					<font face="Arial">5 posizioni</font></p>
				</td>			
				</tr>
      <tr>
				<td width="360"><font face="Arial" color="#003300">- COGNOME</font></td>
				<td>				
					<p>
					<input type="text" name="cognome" value="<?php echo $cognome; ?>" size="60" style="background-color: #C0C0C0" maxlength="60">
					</p>
				</td>			
				</tr>  
			<tr>
				<td width="360"><font face="Arial" color="#003300">- NOME</font></td>
				<td>				
					<p>
					<input type="text" name="nome" value="<?php echo $nome; ?>" size="60" style="background-color: #C0C0C0">
					</p>
				</td>			
				</tr>
			<tr>
				<td width="360"><font face="Arial" color="#003300">- INDIRIZZO</font></td>
				<td>				
					<p>
					<input type="text" name="indirizzo" value="<?php echo $indirizzo; ?>" size="60" style="background-color: #C0C0C0"></p>
				</td>
			</tr>
      <tr>
				<td width="360"><font face="Arial" color="#003300">- CAP</font></td>
				<td>				
					<p>
					<input type="text" name="cap" value="<?php echo $cap; ?>" size="5" style="background-color: #C0C0C0" maxlength="5">
					<font face="Arial">5 posizioni numerico</font></p>
				</td>
			</tr>
      <tr>
				<td width="360"><font face="Arial" color="#003300">- LOCALITA'</font></td>
				<td>				
					<p>
					<input type="text" name="localita"  value="<?php echo $localita; ?>" size="60" style="background-color: #C0C0C0">
					</p>
				</td>
			</tr>
      
       <tr>
				<td width="360"><font face="Arial" color="#003300">- PROVINCIA</font></td>
				<td>				
					<p>
					<input type="text" name="provincia"  value="<?php echo $provincia; ?>" size="60" style="background-color: #C0C0C0">
					</p>
				</td>
			</tr>
      
      <tr>
				<td width="360"><font face="Arial" color="#003300">- CELLULARE</font></td>
				<td>				
					<p>
					<input type="text" name="cellulare"  value="<?php echo $cellulare; ?>" size="30" style="background-color: #C0C0C0">
					</p>
				</td>
			</tr>
      
      <tr>
				<td width="360"><font face="Arial" color="#003300">- TEL. FISSO</font></td>
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
    if ($dio=="1")  {
    
$sql1x = "SELECT * FROM progressovol  where zona= '$zona' ";
#echo $sql1; 
$result1 = $conn->query($sql1x);
if ($result1->num_rows > 0) {
  while($macrogruppo1 = $result1->fetch_assoc()) 
		{$progressivo = $macrogruppo1["progressivo"];} }  
    
$progressivo++;  
  
$sqly = "UPDATE `progressovol` SET `progressivo`='$progressivo'  where zona= '$zona' ";  
   if ($conn->query($sqly) === FALSE) 
    {$erroreriferimento="errore progressivo"; exit; } 

$progressivo="volontario-".$progressivo;        
?>      
      <tr>
				<td width="360"><font face="Arial" color="#003300">- LOGIN ACCESSO</font></td>
				<td>
        	<p style="background-color: #C0C0C0" ><? echo $progressivo; ?> </p>			
					
				</td>
			</tr>      
      <tr>
				<td width="360"><font face="Arial" color="#003300">- PASSWORD</font></td>
				<td>				
					<p>
					<input type="text" name="password"  value="<?php echo $password; ?>" size="30" style="background-color: #C0C0C0">
					</p>
				</td>
			</tr>          
      <tr>
				<td width="360"><font face="Arial" color="#003300">- TIPO UTENTE</font></td>
				<td>				
					<p>
					<input type="text" name="tipoutente"  value="<?php echo $tipoutente; ?>" size="1" style="background-color: #C0C0C0">
					<font face="Arial">1=amministratore   0=utente</font></p>
          </p>
				</td>
			</tr>  
<?php
}}} ?>      
      
      
      
       <input type="hidden" name="ingranaggio" value="1" />
       <input type="hidden" name="login" value="<?php echo $login; ?>" />
       <input type="hidden" name="zona" value="<?php echo $zona; ?>" />
       <input type="hidden" name="dio" value="<?php echo $dio; ?>" />
       <input type="hidden" name="accesso" value="<?php echo $progressivo; ?>" />
			<tr>
				<td width="360">&nbsp;</td>
				<td><input type="submit" value="Inserisci" name="B3"><input type="reset" value="Reset" name="B4"></td>
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