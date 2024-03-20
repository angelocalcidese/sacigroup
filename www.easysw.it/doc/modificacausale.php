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
        if(descrizione.value=="") { 
            alert("Error: manca DESCRIZIONE CAUSALE"); 
            descrizione.focus(); 
            return false; 
                              }                      
        if(codice.value=="") { 
            alert("Error: manca CODICE CAUSALE"); 
            codice.focus(); 
            return false; 
                              }                      
        
                              
         
					                                                            
                                                            
                                  } 
        } 
</script>
<?php 
include "conf_DB.php";
$login=$_REQUEST["login"];
$anno=$_REQUEST["anno"];
$mastro=$_REQUEST["mastro"];
$sottomastro=$_REQUEST["sottomastro"];
$conto=$_REQUEST["conto"];
$codice=$_REQUEST["codice"];
#echo $codice; exit;
$ingranaggio=$_REQUEST["ingranaggio"];
if ($ingranaggio!=1)
   {
$sql = "SELECT *  FROM  causale where esercizio = '$anno' and mastro = '$mastro' and sottomastro = '$sottomastro' and conto = '$conto' and codice = '$codice' "; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())

	{  
  
  $eu = $macrogruppo["e_u"];
  $descrizione = $macrogruppo["descrizione"];
  $codice = $macrogruppo["codice"];
  }}
}





$ingranaggio=$_REQUEST["ingranaggio"];
$erroreriferimento="";
if ($ingranaggio==1)
   {
$eu=$_REQUEST["eu"];
$descrizione=$_REQUEST["descrizione"];
$sequenza=$_REQUEST["sequenza"];
$posizione=$_REQUEST["posizione"];
$oggi=date("Y-m-d H:m:s");

$sql = "
DELETE from causale where esercizio = '$anno' and mastro = '$mastro' and sottomastro = '$sottomastro' and conto = '$conto' and codice = '$codice'";
if ($conn->query($sql) === FALSE)
  {$erroreriferimento="errore";echo $erroreriferimento; exit;}
  else
  {echo "";}


   $sql = "INSERT INTO 
causale (
esercizio,
e_u, 
codice,
mastro, 
sottomastro, 
conto,
descrizione
) VALUES (
'$anno',
'$eu',
'$codice', 
'$mastro', 
'$sottomastro', 
'$conto',
'$descrizione'
)";
if ($conn->query($sql) === FALSE)
    { $erroreriferimento="errore movimento già esistente"; } 
    else
    {$erroreriferimento="Modifica Effettuata";}
   }





?>
<body>

<div align="center">
	
	<p>&nbsp;</p> 
  </div>
<div align="center">   
<div id="container">
<form method="POST" action="" name="modulo" onSubmit="return controllo();">
<p align="center"><b><font face="Arial" size="6" color="#993300">AGGIORNA 
CAUSALE</font><br><font face="Arial" size="6" color="#FF0000"><?php echo $erroreriferimento; ?></font></b></p>
<table border="1" width="100%" bgcolor="#99CC00" bordercolorlight="#993300" bordercolordark="#CC6600">
	<tr>
		<td>
		<table border="1" width="100%">
			<tr>
				<td width="237"><font face="Arial">VOCI</font></td>
				
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#003300">- ESERCIZIO</font></td>
			<td>				
					<p>
					<font color="#FFFFFF"><select size="1" name="anno" style="font-size: 12pt; background-color: #C0C0C0">
					<option selected>2016</option>
					<option>2017</option>
					<option>2018</option>
					<option>2019</option>
					<option>2020</option>
					</select>
					<font face="Arial">Anno di Competenza (es. 2016)</font></font></p>
				</td>

			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#003300">- CODICE</font></td>
				<td>				
					<input type="text" name="codice" value="<?php echo $codice; ?>" size="3" style="background-color: #C0C0C0">
					<font face="Arial">2 Posizioni</font></td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#003300">- 
				ENTRATA/USCITA</font></td>
				<td>				
					<input type="text" name="eu" value="<?php echo $eu; ?>" size="4" style="background-color: #C0C0C0">
					<font face="Arial">1 Posizione E=Entrate U=uscite P=NO 
					Entrate NO uscite</font></td>			
				</tr>
			<tr>
				<td width="237"><font face="Arial" color="#003300">- MASTRO</font></td>
				<td>				
					<p>
					<input type="text" name="mastro" value="<?php echo $mastro; ?>" size="5" style="background-color: #C0C0C0" maxlength="4">
					<font face="Arial">4 Posizioni</font></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#003300">- SOTTOMASTRO</font></td>
				<td>				
					<p>
					<input type="text" name="sottomastro" value="<?php echo $sottomastro; ?>" size="5" style="background-color: #C0C0C0" maxlength="4">
					<font face="Arial">4 posizioni</font></p>
				</td>			
				</tr>
      <tr>
				<td width="237"><font face="Arial" color="#003300">- CONTO</font></td>
				<td>				
					<p>
					<input type="text" name="conto" value="<?php echo $conto; ?>" size="5" style="background-color: #C0C0C0" maxlength="4">
					<font face="Arial">4 Posizioni</font></p>
				</td>			
				</tr>  
			<tr>
				<td width="237"><font face="Arial" color="#003300">- DESCRIZIONE</font></td>
				<td>				
					<p>
					<input type="text" name="descrizione" value="<?php echo $descrizione; ?>" size="80" style="background-color: #C0C0C0"></p>
				</td>
			</tr>
       <input type="hidden" name="ingranaggio" value="1" />
       <input type="hidden" name="login" value="<?php echo $login; ?>" />
			<tr>
				<td width="237">&nbsp;</td>
				<td><input type="submit" value="Aggiorna" name="B3"></td>
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