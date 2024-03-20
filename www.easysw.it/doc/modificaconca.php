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
$causale=$_REQUEST["causale"];
$causale1=$_REQUEST["causale1"];
#echo $codice; exit;
$ingranaggio=$_REQUEST["ingranaggio"];
$erroreriferimento="";
if ($ingranaggio==1)
   {
$oggi=date("Y-m-d H:m:s");
$causalenew=$_REQUEST["causalenew"];
$sw=0;
$sql = "SELECT *  FROM  causale where esercizio = '$anno' and codice = '$causalenew' "; 
#echo  $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
	
	{$sw=1;} }
if ($sw==1)
{$sql = "
DELETE from corre where esercizio = '$anno' and causale = '$causale' and causale1 = '$causale1' ";
if ($conn->query($sql) === FALSE)
  {$erroreriferimento="errore";echo $erroreriferimento; exit;}
  else
  {echo "";}


   $sql = "INSERT INTO 
corre (
esercizio,
causale, 
causale1
) VALUES (
'$anno',
'$causale',
'$causalenew'
)";
if ($conn->query($sql) === FALSE)
    { $erroreriferimento="errore movimento già esistente"; } 
    else
    {$erroreriferimento="Modifica Effettuata";}
   }
else
{$erroreriferimento="Causale Inesistente"; }   
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
CONCATENAZIONE</font><br><font face="Arial" size="6" color="#FF0000"><?php echo $erroreriferimento; ?></font></b></p>
<table border="1" width="100%" bgcolor="#CCFFFF" bordercolorlight="#993300" bordercolordark="#CC6600">
	<tr>
		<td>
		<table border="1" width="100%">
			<tr>
				<td width="258"><font face="Arial">VOCI</font></td>
				
			</tr>
			<tr>
				<td width="258"><font face="Arial" color="#003300">- ESERCIZIO</font></td>
			<td>				
					<p>
					<font color="#FFFFFF"><select size="1" name="anno" style="font-size: 12pt; background-color: #C0C0C0">
					<option <?php if ($anno=="2016") echo "selected";?> >2016 </option>
					<option <?php if ($anno=="2017") echo "selected";?>>2017</option>
					<option <?php if ($anno=="2018") echo "selected";?>>2018</option>
					<option <?php if ($anno=="2019") echo "selected";?>>2019</option>
					<option <?php if ($anno=="2020") echo "selected";?>>2020</option>
					</select>
					</font>
					<font face="Arial">Anno di Competenza (es. 2016)</font></p>
				</td>

			</tr>
			<tr>
				<td width="258"><font face="Arial" color="#003300">- CAUSALE</font></td>
				<td>				
					<font face="Arial"><?php echo $causale; ?></font></td>
			</tr>
			<tr>
				<td width="258"><font face="Arial" color="#003300">- CAUSALE 
				CONCATENATO</font></td>
				<td>				
					<font face="Arial"><?php echo $causale1; ?></font></td>
			</tr>
			<tr>
				<td width="258"><font face="Arial" color="#003300">- CAUSALE 
				CONCATENATO NEW</font></td>
				<td>				
					<input type="text" name="causalenew" value="<?php echo $causalenew; ?>" size="3" style="background-color: #C0C0C0">
					<font face="Arial">2 Posizioni</font></td>
			</tr>
       <input type="hidden" name="ingranaggio" value="1" />
       <input type="hidden" name="login" value="<?php echo $login; ?>" />
			<tr>
				<td width="258">&nbsp;</td>
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