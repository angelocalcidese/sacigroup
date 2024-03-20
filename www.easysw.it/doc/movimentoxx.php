<?php

?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 4</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="calendar.js"></script>
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
                                                     
                                  } 
        } 
</script>
<?php 
include "conf_DB.php";
$login=$_REQUEST["login"];
$anno=$_REQUEST["anno"];
$eu=$_REQUEST["eu"];
$eu=$_REQUEST["eu"];
$datax=$_REQUEST["dataoperazione"];
$giorno=explode("/",$datax);
$datax=$giorno[2]."-".$giorno[1]."/".$giorno[0];

$note=$_REQUEST["note"];
$causale=$_REQUEST["causale"];
$causale=substr($causale, 0, 2);

$tipodocumento=$_REQUEST["tipodocumento"];
$numero=$_REQUEST["numero"];
$iva=$_REQUEST["iva"];
$importoiva=$_REQUEST["importoiva"];
$importo=$_REQUEST["importo"];
#$importo=number_format($importo, 2);
$ingranaggio=$_REQUEST["ingranaggio"];
$erroreriferimento="";
if ($ingranaggio==1)
   {
$sql = "SELECT *  FROM  causale where codice = '$causale' and esercizio = '$anno'"; 
	$query = mysql_query($sql,$connessione) or die("Err1. SQL: $sql");
	for ($i="1"; $macrogruppo = mysql_fetch_array($query); $i++)
	
	{   $anno = $macrogruppo["esercizio"];
      $eu = $macrogruppo["e_u"];
      $mastro = $macrogruppo["mastro"];  
      $sottomastro = $macrogruppo["sottomastro"];
      $conto = $macrogruppo["conto"];   
   }
   
   
$oggi=date("Y-m-d H:m:s");
   $sql = "INSERT INTO 
movimenticontabili (
esercizio, 
mastro, 
sottomastro, 
conto,
e_u,
causale,
importo,
data,
data_inserimento,
tipodocumento,
numdocumento,
note,
perciva,
iva,
login
) VALUES (
'$anno', 
'$mastro', 
'$sottomastro', 
'$conto',
'$eu',
'$causale',
'$importo',
'$datax',
'$oggi',
'$tipodocumento',
'$numero',
'$note',
'$iva',
'$importoiva',
'$login'
)";
#echo  $sql; exit;
if (!mysql_query($sql,$connessione))
    {
    $erroreriferimento="errore movimento già esistente";
    } 
    else
    {
if ($eu!="P")
{
$sql = "SELECT *  FROM  corre where causale = '$causale' and esercizio = '$anno'"; 
	$query = mysql_query($sql,$connessione) or die("Err1. SQL: $sql");
	for ($i="1"; $macrogruppo = mysql_fetch_array($query); $i++)
	
	{   $anno = $macrogruppo["esercizio"];
      $causale = $macrogruppo["causale"];
      $causale1 = $macrogruppo["causale1"];
      $segno = $macrogruppo["segno"];
      
  $sqlg = "SELECT *  FROM  causale where codice = '$causale1' and esercizio = '$anno'"; 
	$queryg = mysql_query($sqlg,$connessione) or die("Err1. SQL: $sqlg");
	for ($ig="1"; $macrogruppo = mysql_fetch_array($queryg); $ig++)
	
	{   $anno = $macrogruppo["esercizio"];
      $eu1 = $macrogruppo["e_u"];
      $mastro1 = $macrogruppo["mastro"];  
      $sottomastro1 = $macrogruppo["sottomastro"];
      $conto1 = $macrogruppo["conto"];
      
      #if ($eu1=="U") {$importo=$importo*-1;}
      if ($segno=="-") {$importox=$importo*-1;} else {$importox=$importo;}
      #if ($causale1=="TS")
      #{echo $causale. " ".$causale1." ".$segno ; exit;}
      #echo $causale1; exit;
      
$sql = "INSERT INTO 
movimenticontabili (
esercizio, 
mastro, 
sottomastro, 
conto,
e_u,
causale,
importo,
data,
data_inserimento,
tipodocumento,
numdocumento,
note,
perciva,
iva,
login
) VALUES (
'$anno', 
'$mastro1', 
'$sottomastro1', 
'$conto1',
'$eu',
'$causale1',
'$importox',
'$datax',
'$oggi',
'$tipodocumento',
'$numero',
'$note',
'$iva',
'$importoiva',
'$login'
)";
#echo  $sql; exit;
if (!mysql_query($sql,$connessione))
    {
    $erroreriferimento="errore movimento già esistente";
    } 
    else
    {  }
      
      
   } 
}    
    
    
    
    
    
    
    
}    
    
    $url_pagina_chiamante="movimento.php?login=$login";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script> 
    <?php }
   }





?>
<body id="main_body" >

	<div id="form_container">
	<table border="0" width="30%">
		<tr>
			<td>
			<img border="0" src="carlopoma.png" width="954" height="140"></td>
		</tr>
    <tr>
      <td><a href="menugenerale.php?login=<?php echo $login; ?>">Menu Generale</a>/Inserimento Movimento Contabile</td></tr>
		</tr>
	</table>
	<p>&nbsp;</p> 
  </div>
<div align="center">   
<div id="container">
<form method="POST" action="" name="modulo" onSubmit="return controllo();">
<p align="center"><b><font face="Arial" size="6" color="#993300">INSERIMENTO MOVIMENTO CONTABILE</font></b></p>
<p align="center"><b><font face="Arial" size="6" color="#FF0000"><?php echo $erroreriferimento; ?></font></b></p>
<table border="1" width="100%" bgcolor="#666699" bordercolorlight="#993300" bordercolordark="#CC6600">
	<tr>
		<td>
		<table border="1" width="100%">
			<tr>
				<td width="237"><b><font face="Arial" color="#800000">VOCI</font></b></td>
				
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFFFFF">- ESERCIZIO</font></td>
					<td>				
					<p>
					<font color="#FFFFFF"><select size="1" name="anno" style="font-size: 12pt; background-color: #C0C0C0">
					<option selected>2017</option>
					<option>2018</option>
					<option>2019</option>
					<option>2020</option>
					</select>
					<font face="Arial">Anno di Competenza (es. 2016)</font></font></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFFFFF">- 
				ENTRATA/USCITA</font></td>
				<td>				
											<p><select size="1" name="eu" style="font-size: 12pt; background-color: #C0C0C0">
											<option>P</option>
											<option selected>E</option>
											<option>U</option>
											</select>&nbsp;<font face="Arial" color="#FFFFFF"> E=Entrate U=uscite P=NO 
					Entrate NO uscite</font></td>			
				</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFFFFF">- CAUSALE</font></td>
				<td>				
					<select size="1" name="causale" style="font-size: 12pt; background-color: #C0C0C0">
<?php 
$sql = "SELECT *  FROM  causale order by codice "; 
	$query = mysql_query($sql,$connessione) or die("Err1. SQL: $sql");
	for ($i="1"; $macrogruppo = mysql_fetch_array($query); $i++)
	
	{    $anno = $macrogruppo["esercizio"];
      $codice = $macrogruppo["codice"];
      $descrizione = $macrogruppo["descrizione"];
      $mastro = $macrogruppo["mastro"];
      $sottomastro = $macrogruppo["sottomastro"];
      $conto = $macrogruppo["conto"];
	?>				<option><?php echo $codice." ".$descrizione; ?></option>
				<?php } ?>
					</select>
					</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFFFFF">- DATA 
				OPERAZIONE</font></td>
				<td>				
					<input type="text" name="dataoperazione" value="<?php echo $dataoperazione; ?>" size="15" style="background-color: #C0C0C0"></td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFFFFF">- TIPO 
				DOCUMENTO</font></td>
				<td>				
					<select size="1" name="tipodocumento" style="font-size: 12pt; background-color: #C0C0C0">
					<option>GEN</option>
					<option>LET</option>
          <option>FAT</option>
					<option>RIC</option>
					</select></td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFFFFF">- IDENTF. 
				DOCUMENTO</font></td>
				<td>				
					<input type="text" name="numero" value="<?php echo $numero; ?>" size="25" style="background-color: #C0C0C0"></td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFFFFF">- NOTE 
				DOCUMENTO</font></td>
				<td>				
					<input type="text" name="note" value="<?php echo $note; ?>" size="70" style="background-color: #C0C0C0"></td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFFFFF">- IMPORTO 
				TOTALE</font></td>
				<td>				
					<p>
					<input type="text" name="importo" value="<?php echo $importo; ?>" size="15" style="background-color: #C0C0C0"></p>
				</td>
			</tr>
       <input type="hidden" name="ingranaggio" value="1" />
       <input type="hidden" name="login" value="<?php echo $login; ?>" />
       <input type="hidden" name="mastro" value="<?php echo $mastro; ?>" />
       <input type="hidden" name="sottomastro" value="<?php echo $sottomastro; ?>" />
       <input type="hidden" name="conto" value="<?php echo $conto; ?>" />
			<tr>
				<td width="237"><font face="Arial" color="#FFFFFF">- % IVA</font></td>
				<td>				
					<select size="1" name="iva" style="font-size: 12pt; background-color: #C0C0C0">
					<option>22</option>
					<option>03</option>
					</select></td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFFFFF">- IMPORTO IVA</font></td>
				<td>				
					<input type="text" name="importoiva" value="<?php echo $importoiva; ?>" size="15" style="background-color: #C0C0C0"></td>
			</tr>
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