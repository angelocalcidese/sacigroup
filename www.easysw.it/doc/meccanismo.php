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
            alert("Error: manca DESCRIZIONE DEL CONTO"); 
            descrizione.focus(); 
            return false; 
                              }                      
        if(sequenza.value=="") { 
            alert("Error: manca SEQUENZA DI ESPOSIZIONE IN LISTA"); 
            sequenza.focus(); 
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
$mastro1=$_REQUEST["mastro1"];
$sottomastro1=$_REQUEST["sottomastro1"];
$conto1=$_REQUEST["conto1"];
$op=$_REQUEST["op"];
$descrizione=$_REQUEST["descrizione"];
$sequenza=$_REQUEST["sequenza"];
$posizione=$_REQUEST["posizione"];
$ingranaggio=$_REQUEST["ingranaggio"];
$erroreriferimento="";
if ($ingranaggio==1)
   {
$oggi=date("Y-m-d H:m:s");
   $sql = "INSERT INTO 
maccanismo (
esercizio, 
mastro, 
sottomastro, 
conto,
operazione,
mastro1,
sottomastro1,
conto1
) VALUES (
'$anno', 
'$mastro', 
'$sottomastro', 
'$conto',
'$op',
'$mastro1',
'$sottomastro1',
'$conto1'
)";
if (!mysql_query($sql,$connessione))
    {
    $erroreriferimento="errore movimento gi� esistente";
    } 
    else
    {$url_pagina_chiamante="meccanismo.php?login=$login";  ?>
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
      <td><a href="menugenerale.php?login=<?php echo $login; ?>">Menu Generale</a>/Inserimento 
		Meccanisco</td></tr>
		</tr>
	</table>
	<p>&nbsp;</p> 
  </div>
<div align="center">   
<div id="container">
<form method="POST" action="" name="modulo" onSubmit="return controllo();">
<p align="center"><b><font face="Arial" size="6" color="#993300">INSERIMENTO 
MECCANISMO</font></b></p>
<p align="center"><b><font face="Arial" size="6" color="#FF0000"><?php echo $erroreriferimento; ?></font></b></p>
<table border="1" width="100%" bgcolor="#CC99FF" bordercolorlight="#993300" bordercolordark="#CC6600">
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
				<td width="237"><font face="Arial" color="#003300">- MASTRO</font></td>
				<td>				
					<p>
					<!--webbot bot="Validation" B-Value-Required="TRUE" I-Minimum-Length="4" I-Maximum-Length="4" -->
					<input type="text" name="mastro" value="<?php echo $mastro; ?>" size="5" style="background-color: #C0C0C0" maxlength="4">
					<font face="Arial">4 Posizioni</font></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#003300">- SOTTOMASTRO</font></td>
				<td>				
					<p>
					<!--webbot bot="Validation" B-Value-Required="TRUE" I-Minimum-Length="4" I-Maximum-Length="4" -->
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
				<td width="237"><font face="Arial" color="#003300">- OPERAZIONE</font></td>
				<td>				
					<p>
					<input type="text" name="op" value="<?php echo $op; ?>" size="4" style="background-color: #C0C0C0">
					<font face="Arial">1 Posizione P=PIU' M=MENO</font></p>
				</td>			
				</tr>
			<tr>
				<td width="237"><font face="Arial" color="#003300">- MASTRO</font></td>
				<td>				
					<p>
					<input type="text" name="mastro1" value="<?php echo $mastro1; ?>" size="5" style="background-color: #C0C0C0" maxlength="4">
					<font face="Arial">Operazione su MASTRO</font></p>
				</td>
			</tr>
      <tr>
				<td width="237"><font face="Arial" color="#003300">- SOTTOMASTRO</font></td>
				<td>				
					<p>
					<input type="text" name="sottomastro1" value="<?php echo $sottomastro1; ?>" size="5" style="background-color: #C0C0C0" maxlength="4">
					<font face="Arial">Operazione su SOTTOMASTRO</font></p>
				</td>
			</tr>
      <tr>
				<td width="237"><font face="Arial" color="#003300">- CONTO</font></td>
				<td>				
					<p>
					<input type="text" name="conto1" value="<?php echo $conto1; ?>" size="5" style="background-color: #C0C0C0" maxlength="4">
					<font face="Arial">Operazione su CONTO</font></p>
				</td>
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