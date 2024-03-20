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
?>
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
            alert("Error: manca ESERCIZIO"); 
            anno.focus(); 
            return false; 
                            } 
        if(causale.value=="") { 
            alert("Error: manca CAUSALE 1"); 
            causale.focus(); 
            return false; 
                            } 
        if(causale1.value=="") { 
            alert("Error: manca CAUSALE 2"); 
            causale1.focus(); 
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
$segno=$_REQUEST["segno"];
$causale=substr($causale, 0, 2);

$causale1=$_REQUEST["causale1"];
$causale1=substr($causale1, 0, 2);

$ingranaggio=$_REQUEST["ingranaggio"];
$erroreriferimento="";
if ($ingranaggio==1)
   {
$oggi=date("Y-m-d H:m:s");
   $sql = "INSERT INTO 
corre (
esercizio,
causale, 
causale1,
segno
) VALUES (
'$anno', 
'$causale', 
'$causale1',
'$segno'
)";
#echo $sql; exit;
if ($conn->query($sql) === FALSE)
    {
    $erroreriferimento="errore movimento già esistente";exit;
    } 
    else
    {$url_pagina_chiamante="corre.php?login=$login";  ?>
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
			<img border="0" src="carlopoma.png" width="954" height="140"></td>
		</tr>
    <tr>
      <td><a href="menugenerale.php?login=<?php echo $login; ?>">Menu Generale</a>/<a href="menutabelle.php?login=<?php echo $login; ?>">Menu Tabelle</a>/Inserimento 
		Correlazione</td></tr>
		</tr>
	</table>
	<p>&nbsp;</p> 
  </div>
<div align="center">   
<div id="container">
<form method="POST" action="" name="modulo" onSubmit="return controllo();">
<p align="center"><b><font face="Arial" size="6" color="#993300">INSERIMENTO 
TABELLA </font></b></p>
<p align="center"><b><font face="Arial" size="5" color="#993300">CORRELAZIONI DI CAUSALI</font></b></p>
<p align="center"><b><font face="Arial" size="6" color="#FF0000"><?php echo $erroreriferimento; ?></font></b></p>
<table border="1" width="100%" bgcolor="#CC6699" bordercolorlight="#993300" bordercolordark="#CC6600">
	<tr>
		<td>
		<table border="1" width="100%">
			<tr>
				<td width="237"><font face="Arial" color="#FFFFFF">VOCI</font></td>
				
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFFFFF">- ESERCIZIO</font></td>
					<td>				
					<p>
					<font color="#FFFFFF">
          <select size="1" name="anno" style="font-size: 12pt; background-color: #C0C0C0">
					<option >2017</option>
					<option>2018</option>
					<option selected>2019</option>
					<option>2020</option>
					</select>
					<font face="Arial">Anno di Competenza (es. 2016)</font></font></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFFFFF">- CODICE 
				CAUSALE</font></td>
				<td>				
					<p>
					<select size="1" name="causale" style="background-color: #C0C0C0">
<?php
$sql = "SELECT *  FROM  causale order by codice "; 
	$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
	
	{    $anno = $macrogruppo["esercizio"];
      $codice = $macrogruppo["codice"];
      $descrizione = $macrogruppo["descrizione"];
      $mastro = $macrogruppo["mastro"];
      $sottomastro = $macrogruppo["sottomastro"];
      $conto = $macrogruppo["conto"];
	?>				<option><?php echo $codice." ".$descrizione; ?></option>
				<?php } }?>
					</select><font color="#FFFFFF">
          </font></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFFFFF">- ENTRATA/USC.</font></td>
				<td>				
					<p>
					<select size="1" name="causale1" style="background-color: #C0C0C0">
<?php          
$sql = "SELECT *  FROM  causale order by codice "; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
	
	{    $anno = $macrogruppo["esercizio"];
      $codice = $macrogruppo["codice"];
      $descrizione = $macrogruppo["descrizione"];
      $mastro = $macrogruppo["mastro"];
      $sottomastro = $macrogruppo["sottomastro"];
      $conto = $macrogruppo["conto"];
	?>				<option><?php echo $codice." ".$descrizione; ?></option>
				<?php } }?>
					</select><font color="#FFFFFF">
          </font></p>
				</td>	
        
	<tr>
				<td width="237"><font face="Arial" color="#FFFFFF">- SEGNO </font></td>
				<td>				
					<input type="text" name="segno" value="+" size="3" style="background-color: #C0C0C0" maxlength="1">&nbsp;<font face="Arial" color="ffffff">+ = SOMMA &nbsp;&nbsp; /&nbsp;&nbsp;  - = SOTTRAI</font></td>
			</tr>        
        
        		
				</tr>
       <input type="hidden" name="ingranaggio" value="1" />
       <input type="hidden" name="login" value="<?php echo $login; ?>" />
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