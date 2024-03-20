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
$codice=$_REQUEST["codice"];
$eu=$_REQUEST["e_u"];
$descrizione=$_REQUEST["descrizione"];
$mastro=$_REQUEST["mastro"];
$sottomastro=$_REQUEST["sottomastro"];
$conto=$_REQUEST["conto"];
$ingranaggio=$_REQUEST["ingranaggio"];
$erroreriferimento="";
if ($ingranaggio==1)
   {
$oggi=date("Y-m-d H:m:s");
   $sql = "INSERT INTO 
causale (
esercizio, 
codice, 
e_u,
mastro,
sottomastro,
conto, 
descrizione
) VALUES (
'$anno', 
'$codice', 
'$eu',
'$mastro',
'$sottomastro',
'$conto', 
'$descrizione'
)";
if ($conn->query($sql) === FALSE)
    {
    $erroreriferimento="errore movimento già esistente";
    } 
    else
    {$url_pagina_chiamante="tabelle.php?login=$login";  ?>
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
		Causali</td></tr>
		</tr>
	</table>
	<p>&nbsp;</p> 
  </div>
<div align="center">   
<div id="container">
<form method="POST" action="" name="modulo" onSubmit="return controllo();">
<p align="center"><b><font face="Arial" size="6" color="#993300">INSERIMENTO 
TABELLA CUSALI</font></b></p>
<p align="center"><b><font face="Arial" size="6" color="#FF0000"><?php echo $erroreriferimento; ?></font></b></p>
<table border="1" width="100%" bgcolor="#009900" bordercolorlight="#993300" bordercolordark="#CC6600">
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
					<option selected>2017</option>
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
					<font color="#FFFFFF">
          <input type="text" name="codice" value="<?php echo $codice; ?>" size="3" style="background-color: #C0C0C0" maxlength="2">
					<font face="Arial">2 Posizioni</font></font></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFFFFF">- ENTRATA/USC.</font></td>
				<td>				
					<p>
					<font color="#FFFFFF">
          <input type="text" name="e_u" value="<?php echo $eu; ?>" size="2" style="background-color: #C0C0C0" maxlength="1">
					<font face="Arial">1posizione E=ENTRATE U=USCITE</font></font></p>
				</td>			
				</tr>
      		<tr>
				<td width="237"><font face="Arial" color="#FFFFFF">- MASTRO</font></td>
				<td>				
					<input type="text" name="mastro" value="<?php echo $mastro; ?>" size="5" style="background-color: #C0C0C0" maxlength="4"><font color="#FFFFFF">
					<font face="Arial">4 Posizioni</font></font></td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFFFFF">- SOTTOMASTRO</font></td>
				<td>				
					<input type="text" name="sottomastro" value="<?php echo $sottomastro; ?>" size="5" style="background-color: #C0C0C0" maxlength="4">
					<font face="Arial" color="#FFFFFF">4 posizioni</font></td>			
				</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFFFFF">- CONTO</font></td>
				<td>				
					<input type="text" name="conto" value="<?php echo $conto; ?>" size="5" style="background-color: #C0C0C0" maxlength="4">
					<font face="Arial" color="#FFFFFF">4 Posizioni</font></td>			
				</tr>
      <tr>
				<td width="237"><font face="Arial" color="#FFFFFF">- DESCRIZIONE</font></td>
				<td>				
					<p>
					<font color="#FFFFFF">
					<input type="text" name="descrizione" value="<?php echo $descrizione; ?>" size="80" style="background-color: #C0C0C0">
					</font></p>
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