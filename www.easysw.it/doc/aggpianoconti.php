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
$citta=$_REQUEST["citta"];

$codice=$_REQUEST["codice"];
$cellulare=$_REQUEST["cellulare"];
$zonaform=$_REQUEST["zonaform"];
$fisso=$_REQUEST["fisso"];


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
   `telefono`) 
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
   '$provincia,
   '$cellulare',
   '$fisso')";
if (!mysql_query($sql,$connessione))
    {
    $erroreriferimento="errore movimento già esistente";
    } 
    else
    {$url_pagina_chiamante="menugenerale.php?login=<?php echo $login.'&zona='.$zona;  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script> 
    <?php }
   }





?>
<body>

<div align="center">
	<table border="0" width="30%">
		<tr>
			<td>
			<img border="0" src="carlopoma.png" width="400" height="140"></td>
		</tr>
    <tr>
      <td><a href="menugenerale.php?login=<?php echo $login; ?>">Menu Generale</a>/Inserimento Volontario</td></tr>
		</tr>
	</table>
	<p>&nbsp;</p> 
  </div>
<div align="center">   
<div id="container">
<form method="POST" action="" name="modulo" onSubmit="return controllo();">
<p align="center"><b><font face="Arial" size="6" color="#993300">INSERIMENTO VOLONTARIO </font></b></p>
<p align="center"><b><font face="Arial" size="4" color="#993300"><? echo $zona; ?></font></b></p>
<p align="center"><b><font face="Arial" size="6" color="#FF0000"><?php echo $erroreriferimento; ?></font></b></p>
<table border="1" width="100%" bgcolor="#FFF4F7" class="table6">
	<tr>
		<td>
		<table border="1" width="100%">
			<tr>
				<td width="237"><font face="Arial">VOCI</font></td>
				
			</tr>
	
			<tr>
				<td width="237"><font face="Arial" color="#003300">- NAZIONE</font></td>
				<td>				
					<p>
					<input type="text" name="nazione" value="ITALIA" size="70" style="background-color: #C0C0C0" maxlength="80">
					</p>
				</td>
			</tr>
      
      <tr>
				<td width="237"><font face="Arial" color="#003300">- CITTA'</font></td>
				<td>				
					<p>
					<input type="text" name="citta" value="MILANO" size="70" style="background-color: #C0C0C0" maxlength="80">
					</p>
				</td>
			</tr>
      
       <tr>
				<td width="237"><font face="Arial" color="#003300">- ZONA</font></td>
				<td>				
					<p>
					<input type="text" name="zonaform" value="<?php echo $zona; ?>" size="70" style="background-color: #C0C0C0" maxlength="80">
					</p>
				</td>
			</tr>
      
      
      
      
      
      
      
			<tr>
				<td width="237"><font face="Arial" color="#003300">- CODICE</font></td>
				<td>				
					<p>
					<input type="text" name="codice" value="<?php echo $codice; ?>" size="5" style="background-color: #C0C0C0" maxlength="4">
					<font face="Arial">5 posizioni</font></p>
				</td>			
				</tr>
      <tr>
				<td width="237"><font face="Arial" color="#003300">- COGNOME</font></td>
				<td>				
					<p>
					<input type="text" name="cognome" value="<?php echo $cognome; ?>" size="70" style="background-color: #C0C0C0" maxlength="70">
					</p>
				</td>			
				</tr>  
			<tr>
				<td width="237"><font face="Arial" color="#003300">- NOME</font></td>
				<td>				
					<p>
					<input type="text" name="nome" value="<?php echo $eu; ?>" size="70" style="background-color: #C0C0C0">
					</p>
				</td>			
				</tr>
			<tr>
				<td width="237"><font face="Arial" color="#003300">- INDIRIZZO</font></td>
				<td>				
					<p>
					<input type="text" name="indirizzo" value="<?php echo $indirizzo; ?>" size="70" style="background-color: #C0C0C0"></p>
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
					<input type="text" name="localita"  size="70" style="background-color: #C0C0C0">
					</p>
				</td>
			</tr>
      
       <tr>
				<td width="237"><font face="Arial" color="#003300">- PROVINCIA</font></td>
				<td>				
					<p>
					<input type="text" name="provincia"  size="70" style="background-color: #C0C0C0">
					</p>
				</td>
			</tr>
      
      <tr>
				<td width="237"><font face="Arial" color="#003300">- CELLULARE</font></td>
				<td>				
					<p>
					<input type="text" name="cellulare"  size="30" style="background-color: #C0C0C0">
					</p>
				</td>
			</tr>
      
      <tr>
				<td width="237"><font face="Arial" color="#003300">- TEL. FISSO</font></td>
				<td>				
					<p>
					<input type="text" name="fisso"  size="30" style="background-color: #C0C0C0">
					</p>
				</td>
			</tr>
       <input type="hidden" name="ingranaggio" value="1" />
       <input type="hidden" name="login" value="<?php echo $login; ?>" />
       <input type="hidden" name="login" value="<?php echo $zona; ?>" />
			<tr>
				<td width="237">&nbsp;</td>
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