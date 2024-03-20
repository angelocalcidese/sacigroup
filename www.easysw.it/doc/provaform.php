<?php

$indirizzores=$_REQUEST["ind"];

$ingranaggio=$_REQUEST["ingranaggio"];
if ($ingranaggio==1)  {echo $indirizzores; exit;}
?>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 9</title>
</head>

<body>
<form method="POST" action="" name="modulo" >
<p align="center"><b><font face="Arial" size="6" color="#993300">CREAZIONE LISTA</font></b></p>
<p align="center"><b><font face="Arial" size="4" color="#993300">Inserisci i Parametri</font></b></p>
<table border="1" width="100%" bgcolor="#999999" bordercolorlight="#993300" bordercolordark="#CC6600">
	<tr>
		<td>
		<table border="1" width="100%">
			<tr>
				<td width="237" align="center">
				<font face="Arial" color="#0000FF"><b>TIPO CAMPO</b></font></td>
				<td align="center">				
					<font face="Arial" color="#0000FF"><b>SELEZIONA CAMPO</b></font></td>
				<td align="center">				
					<font face="Arial" color="#0000FF"><b>IN STAMPA</b></font></td>
				<td align="center">				
					<font face="Arial" color="#0000FF"><b>ORDINE</b></font></td>
			</tr>
      	<tr>
				<td width="237"><font face="Arial" color="#FFffff">- INTESTAZIONE:</font></td>
				<td>				
					<p>
					<input type="text" name="intestazione"  size="50" style="background-color: #C0C0C0"></p>
				</td>
				<td>				
				</td>
				<td>				
				</td>
			</tr>
			<tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFffff">- TESSERA:</font></td>
				<td>				
					
				<td>				
					<select size="1" name="camposino">
					<option>NO</option>
					<option selected>SI</option>
					</select></td>
				<td>				
					<input type="text" name="selezione" size="3" value="0" style="font-family: Arial"></td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFffff">- COGNOME:</font></td>
				<td>				
					<p>
					<input type="text" name="cognome"  size="50" style="background-color: #C0C0C0"></p>
				</td>
				<td>				
					<select size="1" name="camposino0">
					<option>NO</option>
					<option selected>SI</option>
					</select></td>
				<td>				
					<input type="text" name="selezione0" size="3" value="0" style="font-family: Arial"></td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFffff">- NOME:</font></td>
				<td>				
					<p><input type="text" name="nome"  size="50" style="background-color: #C0C0C0"></p>
				</td>
				<td>				
					<select size="1" name="camposino1">
					<option selected>NO</option>
					<option>SI</option>
					</select></td>
				<td>				
					<input type="text" name="selezione1" size="3" value="0" style="font-family: Arial"></td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFffff">- NATO/A A:</font></td>
				<td>				
					<p><input type="text" name="natoa"  size="50" style="background-color: #C0C0C0"></p>
				</td>			
				<td>				
					<select size="1" name="camposino2">
					<option selected>NO</option>
					<option>SI</option>
					</select></td>			
				<td>				
					<input type="text" name="selezione2" size="3" value="0" style="font-family: Arial"></td>			
				</tr>
      <tr>
				<td width="237"><font face="Arial" color="#FFffff">- POVINCIA NASCITA:</font></td>
				<td>				
					<p><input type="text" name="provnatoa" size="50" style="background-color: #C0C0C0"></p>
				</td>			
				<td>				
					<select size="1" name="camposino3">
					<option selected>NO</option>
					<option>SI</option>
					</select></td>			
				<td>				
					<input type="text" name="selezione3" size="3" value="0" style="font-family: Arial"></td>			
				</tr>  
			<tr>
				<td width="237"><font face="Arial" color="#FFffff">- IL:</font></td>
				<td>				
					<p><input type="text" name="datanascita" size="20" style="background-color: #C0C0C0"></p>
				</td>			
				<td>				
					<select size="1" name="camposino4">
					<option selected>NO</option>
					<option>SI</option>
					</select></td>			
				<td>				
					<input type="text" name="selezione4" size="3" value="0" style="font-family: Arial"></td>			
				</tr>
        
      <tr>
				<td width="237"><font face="Arial" color="#FFffff">- INDIRIZZO RES.:</font></td>
				<td>				
					<p><input type="text" name="ind"  size="50" style="background-color: #C0C0C0"></p>
				</td>
				<td>				
					<select size="1" name="camposino51">
					<option selected>NO</option>
					<option>SI</option>
					</select></td>
				<td>				
					<input type="text" name="selezione51" size="3" value="0" style="font-family: Arial"></td>
			</tr>  
      
      
			<tr>
				<td width="237"><font face="Arial" color="#FFffff">- RESIDENTE A:</font></td>
				<td>				
					<p><input type="text" name="residentecitta"  size="50" style="background-color: #C0C0C0"></p>
				</td>
				<td>				
					<select size="1" name="camposino5">
					<option selected>NO</option>
					<option>SI</option>
					</select></td>
				<td>				
					<input type="text" name="selezione5" size="3" value="0" style="font-family: Arial"></td>
			</tr>
      <tr>
				<td width="237"><font face="Arial" color="#FFffff">- PROVINCIA RESIDENZA:</font></td>
				<td>				
					<p><input type="text" name="residenteprov" " size="50" style="background-color: #C0C0C0"></p>
				</td>
				<td>				
					<select size="1" name="camposino6">
					<option selected>NO</option>
					<option>SI</option>
					</select></td>
				<td>				
					<input type="text" name="selezione6" size="3" value="0" style="font-family: Arial"></td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFffff">- VIA/PIAZZA:</font></td>
				<td>				
					<p><input type="text" name="indirizzores"  size="50" style="background-color: #C0C0C0"></p>
				</td>
				<td>				
					<select size="1" name="camposino7">
					<option selected>NO</option>
					<option>SI</option>
					</select></td>
				<td>				
					<input type="text" name="selezione7" size="3" value="0" style="font-family: Arial"></td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFffff">- CAP:</font></td>
				<td>				
					<p><input type="text" name="cap"  size="20" style="background-color: #C0C0C0"></p>
				</td>
				<td>				
					<select size="1" name="camposino8">
					<option selected>NO</option>
					<option>SI</option>
					</select></td>
				<td>				
					<input type="text" name="selezione8" size="3" value="0" style="font-family: Arial"></td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFffff">- EMAIL:</font></td>
				<td>				
					
				</td>
				<td>				
					<select size="1" name="camposino9">
					<option selected>NO</option>
					<option>SI</option>
					</select></td>
				<td>				
					<input type="text" name="selezione9" size="3" value="0" style="font-family: Arial"></td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFffff">- ANNO ASSOCIATO:</font></td>
				<td>				
					<p><input type="text" name="annoassociato"  size="50" style="background-color: #C0C0C0"></p>
				</td>
				<td>				
					<select size="1" name="camposino10">
					<option selected>NO</option>
					<option>SI</option>
					</select></td>
				<td>				
					<input type="text" name="selezione10" size="3" value="0" style="font-family: Arial"></td>
			</tr>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFffff">- CODICE FISCALE:</font></td>
				<td>				
					
				</td>
				<td>				
					<select size="1" name="camposino11">
					<option selected>NO</option>
					<option>SI</option>
					</select></td>
				<td>				
					<input type="text" name="selezione11" size="3" value="0" style="font-family: Arial"></td>
			</tr>
       <input type="hidden" name="ingranaggio" value="1" />
       <input type="hidden" name="login" value="<?php echo $login; ?>" />
			
			<tr>
				<td width="237">&nbsp;</td>
				<td><input type="submit" value="Crea Lista" name="B3"><input type="reset" value="Reset" name="B4"></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
		</table>
		</td>
	</tr>
</table> </body>

</html>
