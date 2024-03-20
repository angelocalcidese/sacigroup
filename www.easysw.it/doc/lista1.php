<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="pomaindex.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php }
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
min-width:   800px;
  min-height:  500px;
  max-width:  800px;
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

<?php 


$cognome=$_REQUEST["cognome"];
$nome=$_REQUEST["nome"];
$natoa=$_REQUEST["natoa"];
$datanascita=$_REQUEST["datanascita"];
$residentecitta=$_REQUEST["residentecitta"];
$provnatoa=$_REQUEST["provnatoa"];

$indirizzores=$_REQUEST["indirizzores"];

$cap=$_REQUEST["cap"];
$email=$_REQUEST["email"];
$telefono=$_REQUEST["telefono"];
$cellulare=$_REQUEST["cellulare"];
$codfisc=$_REQUEST["codfisc"];
$residenteprov=$_REQUEST["residenteprov"];
$anno=$_REQUEST["annoassociato"];
$intestazione=$_REQUEST["intestazione"];
$ingranaggio=$_REQUEST["ingranaggio"];

$camposino=$_REQUEST["camposino"];
$camposino0=$_REQUEST["camposino0"];
$camposino1=$_REQUEST["camposino1"];
$camposino2=$_REQUEST["camposino2"];
$camposino3=$_REQUEST["camposino3"];
$camposino4=$_REQUEST["camposino4"];
$camposino5=$_REQUEST["camposino5"];
$camposino51=$_REQUEST["camposino51"];
$camposino6=$_REQUEST["camposino6"];
$camposino7=$_REQUEST["camposino7"];
$camposino8=$_REQUEST["camposino8"];
$camposino9=$_REQUEST["camposino9"];
$camposino10=$_REQUEST["camposino10"];
$camposino11=$_REQUEST["camposino11"];
$camposino12=$_REQUEST["camposino12"];
$camposino13=$_REQUEST["camposino13"];

$selezione=$_REQUEST["selezione"];
$selezione0=$_REQUEST["selezione0"];
$selezione1=$_REQUEST["selezione1"];
$selezione2=$_REQUEST["selezione2"];
$selezione3=$_REQUEST["selezione3"];
$selezione4=$_REQUEST["selezione4"];
$selezione51=$_REQUEST["selezione51"];
$selezione5=$_REQUEST["selezione5"];
$selezione6=$_REQUEST["selezione6"];
$selezione7=$_REQUEST["selezione7"];
$selezione8=$_REQUEST["selezione8"];
$selezione9=$_REQUEST["selezione9"];
$selezione10=$_REQUEST["selezione10"];
$selezione11=$_REQUEST["selezione11"];
$selezione12=$_REQUEST["selezione12"];





$totale=$cognome.
"ç" . $nome .
"ç" . $natoa .
"ç" . $provnatoa .
"ç" . $datanascita .
"ç" . $residentecitta .
"ç" . $residenteprov .
"ç" . $indirizzores .
"ç" . $cap .
"ç" . $anno .
"ç" . $intestazione;

$selezionex=$selezione .
"ç" . $selezione0 .
"ç" . $selezione1 .
"ç" . $selezione2 .
"ç" . $selezione3 .
"ç" . $selezione4 .
"ç" . $selezione5 .
"ç" . $selezione6 .
"ç" . $selezione7 .
"ç" . $selezione8 .
"ç" . $selezione9 .
"ç" . $selezione10 .
"ç" . $selezione11 .
"ç" . $selezione12;

$camposinox=$camposino .
"ç" . $camposino0 .
"ç" . $camposino1 .
"ç" . $camposino2 .
"ç" . $camposino3 .
"ç" . $camposino4 .
"ç" . $camposino5 .
"ç" . $camposino6 .
"ç" . $camposino7 .
"ç" . $camposino8 .
"ç" . $camposino9 .
"ç" . $camposino10 .
"ç" . $camposino11 .
"ç" . $camposino12 .
"ç" . $camposino13;




if ($ingranaggio==1)
{ ?>
<script>
 popupWindow =
		window.open("<? echo 'lista2new.php?totale='.$totale.'&selezione='.$selezionex.'&camposino='.$camposinox ; ?>",'pdf','width=1,height=1,left=1,top=1,location=0,directories=0,toolbar=0,scrollbars=yes,resizable=1')
    </script>
<?php    
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
      <td><a href="menugenerale.php?login=<?php echo $login; ?>">Menu Generale</a>/Creazione Lista</td></tr>
		</tr>
	</table>
	<p>&nbsp;</p> 
  </div>

<div align="center">   
<div id="container">
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
					<input type="text" name="intestazione"  value="<?php echo $intestazione; ?>" size="50" style="background-color: #C0C0C0"></p>
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
					</select>
          <font face="Arial" color="#FF0000"> <?php echo $camposino; ?></font>
          </td>
				<td>				
					<input type="text" name="selezione" size="3" value="<?php if ($selezione=="") { echo "0";} else {echo $selezione;} ?>" style="font-family: Arial"></td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFffff">- COGNOME:</font></td>
				<td>				
					<p>
					<input type="text" name="cognome"  value="<?php echo $cognome; ?>" size="50" style="background-color: #C0C0C0"></p>
				</td>
				<td>				
					<select size="1" name="camposino0" >
					<option>NO</option>
					<option selected>SI</option>
					</select>
          <font face="Arial" color="#FF0000"> <?php echo $camposino0; ?></font>
          </td>
				<td>				
					<input type="text" name="selezione0"  value="<?php if ($selezione0=="") { echo "0";} else {echo $selezione0;} ?>" size="3"  style="font-family: Arial"></td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFffff">- NOME:</font></td>
				<td>				
					<p><input type="text" name="nome"  value="<?php echo $nome; ?>" size="50" style="background-color: #C0C0C0"></p>
				</td>
				<td>				
					<select size="1" name="camposino1" >
					<option selected>NO</option>
					<option>SI</option> </select>
					<font face="Arial" color="#FF0000"> <?php echo $camposino1; ?></font>
          </td>
				<td>				
					<input type="text" name="selezione1" value="<?php if ($selezione1=="") { echo "0";} else {echo $selezione1;} ?>"  size="3"  style="font-family: Arial"></td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFffff">- NATO/A A:</font></td>
				<td>				
					<p><input type="text" name="natoa"  value="<?php echo $natoa; ?>" size="50" style="background-color: #C0C0C0"></p>
				</td>			
				<td>				
					<select size="1" name="camposino2" >
					<option selected>NO</option>
					<option>SI</option>
					</select>
          <font face="Arial" color="#FF0000"> <?php echo $camposino2; ?></font>
          </td>			
				<td>				
					<input type="text" name="selezione2" value="<?php if ($selezione2=="") { echo "0";} else {echo $selezione2;} ?>" size="3"  style="font-family: Arial"></td>			
				</tr>
      <tr>
				<td width="237"><font face="Arial" color="#FFffff">- POVINCIA NASCITA:</font></td>
				<td>				
					<p><input type="text" name="provnatoa" value="<?php echo $provnatoa; ?>" size="50" style="background-color: #C0C0C0"></p>
				</td>			
				<td>				
					<select size="1" name="camposino3">
					<option selected>NO</option>
					<option>SI</option>
					</select>
          <font face="Arial" color="#FF0000"> <?php echo $camposino3; ?></font>
          </td>			
				<td>				
					<input type="text" name="selezione3" size="3" value="<?php if ($selezione3=="") { echo "0";} else {echo $selezione3;} ?>" style="font-family: Arial"></td>			
				</tr>  
			<tr>
				<td width="237"><font face="Arial" color="#FFffff">- IL:</font></td>
				<td>				
					<p><input type="text" name="datanascita" value="<?php echo $datanascita; ?>" size="20" style="background-color: #C0C0C0"></p>
				</td>			
				<td>				
					<select size="1" name="camposino4">
					<option selected>NO</option>
					<option>SI</option>
					</select>
           <font face="Arial" color="#FF0000"> <?php echo $camposino4; ?></font>
          </td>			
				<td>				
					<input type="text" name="selezione4" size="3" value="<?php if ($selezione4=="") { echo "0";} else {echo $selezione4;} ?>" style="font-family: Arial"></td>			
				</tr>
        
      
			<tr>
				<td width="237"><font face="Arial" color="#FFffff">- RESIDENTE A:</font></td>
				<td>				
					<p><input type="text" name="residentecitta"  value="<?php echo $residentecitta; ?>" size="50" style="background-color: #C0C0C0"></p>
				</td>
				<td>				
					<select size="1" name="camposino5">
					<option selected>NO</option>
					<option>SI</option>
					</select>
           <font face="Arial" color="#FF0000"> <?php echo $camposino5; ?></font>
          </td>
				<td>				
					<input type="text" name="selezione5" size="3" value="<?php if ($selezione5=="") { echo "0";} else {echo $selezione5;} ?>" style="font-family: Arial"></td>
			</tr>
      <tr>
				<td width="237"><font face="Arial" color="#FFffff">- PROVINCIA RESIDENZA:</font></td>
				<td>				
					<p><input type="text" name="residenteprov" value="<?php echo $residenteprov; ?>" size="50" style="background-color: #C0C0C0"></p>
				</td>
				<td>				
					<select size="1" name="camposino6">
					<option selected>NO</option>
					<option>SI</option>
					</select>
           <font face="Arial" color="#FF0000"> <?php echo $camposino6; ?></font>
          </td>
				<td>				
					<input type="text" name="selezione6" size="3" value="<?php if ($selezione6=="") { echo "0";} else {echo $selezione6;} ?>" style="font-family: Arial"></td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFffff">- VIA/PIAZZA:</font></td>
				<td>				
					<p><input type="text" name="indirizzores"  value="<?php echo $indirizzores; ?>" size="50" style="background-color: #C0C0C0"></p>
				</td>
				<td>				
					<select size="1" name="camposino7">
					<option selected>NO</option>
					<option>SI</option>
					</select>
           <font face="Arial" color="#FF0000"> <?php echo $camposino7; ?></font>
          </td>
				<td>				
					<input type="text" name="selezione7" size="3" value="<?php if ($selezione7=="") { echo "0";} else {echo $selezione7;} ?>" style="font-family: Arial"></td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFffff">- CAP:</font></td>
				<td>				
					<p><input type="text" name="cap"  size="20"  value="<?php echo $cap; ?>" style="background-color: #C0C0C0"></p>
				</td>
				<td>				
					<select size="1" name="camposino8">
					<option selected>NO</option>
					<option>SI</option>
					</select>
          <font face="Arial" color="#FF0000"> <?php echo $camposino8; ?></font> 
          </td>
				<td>				
					<input type="text" name="selezione8" size="3" value="<?php if ($selezione8=="") { echo "0";} else {echo $selezione8;} ?>" style="font-family: Arial"></td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFffff">- EMAIL:</font></td>
				<td>				
					
				</td>
				<td>				
					<select size="1" name="camposino9">
					<option selected>NO</option>
					<option>SI</option>
					</select>
          <font face="Arial" color="#FF0000"> <?php echo $camposino9; ?></font>
          </td>
				<td>				
					<input type="text" name="selezione9" size="3" value="<?php if ($selezione9=="") { echo "0";} else {echo $selezione9;} ?>" style="font-family: Arial"></td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFffff">- ANNO ASSOCIATO:</font></td>
				<td>				
					<p><input type="text" name="annoassociato"   value="<?php echo $annoa; ?>" size="50" style="background-color: #C0C0C0"></p>
				</td>
				<td>				
					<select size="1" name="camposino10">
					<option selected>NO</option>
					<option>SI</option>
					</select>
          <font face="Arial" color="#FF0000"> <?php echo $camposino10; ?></font>
          </td>
				<td>				
					<input type="text" name="selezione10" size="3" value="<?php if ($selezione10=="") { echo "0";} else {echo $selezione10;} ?>" style="font-family: Arial"></td>
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
					</select>
          <font face="Arial" color="#FF0000"> <?php echo $camposino11; ?></font>
          </td>
				<td>				
					<input type="text" name="selezione11" size="3" value="<?php if ($selezione11=="") { echo "0";} else {echo $selezione11;} ?>" style="font-family: Arial"></td>
			</tr>
      </tr>
			<tr>
				<td width="237"><font face="Arial" color="#FFffff">- TELEFONO:</font></td>
				<td>				
					
				</td>
				<td>				
					<select size="1" name="camposino12">
					<option selected>NO</option>
					<option>SI</option>
					</select>
          <font face="Arial" color="#FF0000"> <?php echo $camposino12; ?></font>
          </td>
				<td>				
					<input type="text" name="selezione12" size="3" value="<?php if ($selezione12=="") { echo "0";} else {echo $selezione12;} ?>" style="font-family: Arial"></td>
			</tr>
      <tr>
				<td width="237"><font face="Arial" color="#FFffff">- DECEDUTI:</font></td>
				<td>				
					
				</td>
				<td>				
					<select size="1" name="camposino13">
          <option selected>TUTTI</option>
					<option>NO</option>
					<option>SI</option>
					</select>
          <font face="Arial" color="#FF0000"> <?php echo $camposino13; ?></font>
          </td>
				<td>				
				</td>
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
</table>
<p>&nbsp;</p>
</form>
</div>
</div>
<script>
function carica_consegnaA(){
//var cognome = $("#cognome").val();
//var url = "lista2.php?cognome=" + cognome; 
	<!-- intestazione -->	
    popupWindow =
		window.open("<? echo 'lista2.php'; ?>",'pdf','width=1300,height=800,left=150,top=150,location=0,directories=0,toolbar=0,scrollbars=yes,resizable=1')
    
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>
</body>

</html>