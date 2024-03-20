<?
$testo = "TEST DEL TESTO";
$html =  <<<EOF
<!-- EXAMPLE OF CSS STYLE -->
<style>
body {	font-size:22px;	color:#666666;}
table, th, td { border-collapse: collapse;border-spacing: 0; font-size:22px;}
.logo {width:500px; margin:auto;text-align:center;}
span{padding:5px;}
</style>
<div class="logo" style="margin-left:650px"><img src="http://www.spi.it/rootprova/images/logo_spi_new.png" alt="" border="0" width="500"></div>


<div style="">
<table style="width:100%; margin:auto;border:2px solid #666666;padding:0;background-color:#FEF1E8;" cellpadding="4"  >
<tr>
<td style="border:2px solid #666666; " rowspan="6">
<table cellpadding="8"><tr><td style="font-weight:bold; text-align:center;font-size:40px;text-transform:uppercase;background-color:#FEF1E8;">$societa</td></tr></table>
</td>
</tr>
</table>
</div>

<div style="">
<table style="width:100%; margin:auto;border:2px solid #666666;padding:0;background-color:#FEF1E8;" cellpadding="4"  >
<tr>
<td style="border:2px solid #666666; " rowspan="5">
<table cellpadding="8"><tr><td style="font-weight:bold; text-align:center;font-size:24px;text-transform:uppercase;background-color:#FEF1E8;">$iva $indirizzo</td></tr></table>
</td>
</tr>
</table>
</div>

<div style="">
<table style="width:100%; margin:auto;border:2px solid #666666;padding:0;background-color:#FEF1E8;" cellpadding="4"  >
<tr>
<td style="border:2px solid #666666; width:20%;" rowspan="6">
<table cellpadding="8"><tr><td>VS. RIFERIMENTO N. $ricoff</td></tr></table>
</td>
<td style="border:2px solid #666666;width:10%;" rowspan="6"><table cellpadding="8"><tr><td>del $data</td></tr></table></td>
<td style="width:70%;border:2px solid #666666;" rowspan="6"><table cellpadding="8"><tr><td>$indi</td></tr></table></td>
</tr>
</table>
</div>

<div>
<table style="width:100%;border:2px solid #666666; margin:10px 0 0 0;" cellpadding="4">
<tr>
<td style="width:50%; height:120px; background-color:#E8F6FF;  border:2px solid #666666;  padding-left:10px; font-weight:bold;">
<table cellpadding="5">
<tr>
<td style="font-size:22px;">
Spett.le<br><br>

SPI ENGINEERING SRL<br>
VIA AURELIO SAFFI, 17<br>
Oscar Carmelli<br>
</td>
</tr>
</table>
</td>
<td style="width:25%;padding:0;border:2px solid #666666;" cellpadding="0">
<table cellpadding="8" >
		<tr><td cellpadding="4" style="height:32px;font-weight:bold;border-bottom:2px solid #666666;font-weight:bold;text-align:center;">Pagamento:</td></tr>
		<tr><td cellpadding="4" style="height:32px;font-weight:bold;border-bottom:2px solid #666666;"></td></tr>
		<tr><td cellpadding="4" style="height:32px;font-weight:bold;border-bottom:2px solid #666666;"></td></tr>
		<tr><td cellpadding="4" style="height:32px;font-weight:bold;border-bottom:2px solid #666666;"></td></tr>
		<tr><td cellpadding="4" style="height:32px;font-weight:bold;"></td></tr>
		</table>
</td>
<td style="width:25%;padding:0;background-color:#FEF1E8;border:2px solid #666666;" cellpadding="0">
		<table cellpadding="8" style="">
		<tr><td cellpadding="4" style="height:32px;font-weight:bold;border-bottom:2px solid #666666;font-weight:bold;text-align:center;">Consegna:</td></tr>
		<tr><td cellpadding="4" style="height:32px;border-bottom:2px solid #666666;">$tipo_c</td></tr>
		<tr><td cellpadding="4" style="height:32px;border-bottom:2px solid #666666;">$indirizzo_c</td></tr>
		<tr><td cellpadding="4" style="height:32px;border-bottom:2px solid #666666;">$telefono_c</td></tr>
		<tr><td cellpadding="4" style="height:32px;">$cap_c</td></tr>
		</table>
</td>
</tr>
</table>
<table style="width:100%; margin:auto;border-right:2px solid #666666;border-left:2px solid #666666;border-bottom:2px solid #666666;" cellpadding="4">
<tr>
<td style="border-right:2px solid #666666; height:50px;width:20%; padding:0;">
	<table cellpadding="8" >
		<tr><td cellpadding="4" style="height:32px;border-bottom:2px solid #666666;">Ufficio Emittente:</td></tr>
		<tr><td cellpadding="4" style="height:32px;">Responsabile:</td></tr>
	</table>	
</td>
<td style="border-right:2px solid #666666; height:50px;width:30%;padding:0;">
	<table cellpadding="8" >
		<tr><td cellpadding="4" style="height:32px;border-bottom:2px solid #666666;"></td></tr>
		<tr><td cellpadding="4" style="height:32px;"></td></tr>
	</table>
</td>
<td style="padding:2px;width:50%; background-color:#FEF1E8; border:2px solid #666666;">
<table cellpadding="8">
<tr>
<td>
Note: $note
</td>
</tr>
</table>
</td>
</tr>
</table>
</div>
<div>
<table style="width:100%; margin:auto;border:2px solid #666666;margin-top:10px;">
<tr>
<td style="border:2px solid #666666;background-color: #E8F6FF; width:20%">

<table cellpadding="8" style="font-weight:bold;">
		<tr style=""><td style="height:32px;padding:3px;font-weight:bold; font-size:20px; " >RICHIESTA OFFERTA</td></tr>
		<tr><td cellpadding="4" style="height:32px;font-weight:bold;font-size:20px; ">$riofferta</td></tr>
		</table>
</td>
	<td style="border:2px solid #666666;background-color: #E8F6FF;padding:0;width:10%">
	<table cellpadding="8" >
		<tr style=""><td style="height:32px;border-bottom:2px solid #666666; padding:3px; text-align:center; font-weight:bold;" >Data:</td></tr>
		<tr><td cellpadding="4" style="height:32px;text-align:center;border-bottom:2px solid #666666;">$data</td></tr>
		</table>
		
	</td>
	<td style="border:2px solid #666666;background-color: #E8F6FF;padding:0;width:10%">
	<table cellpadding="8" >
		<tr style=""><td style="height:32px;border-bottom:2px solid #666666; padding:3px;text-align:center; font-weight:bold;" >Fornitore</td></tr>
		<tr><td cellpadding="4" style="height:32px;text-align:center;border-bottom:2px solid #666666;">Cod. Spi</td></tr>
		</table>

</td>
	<td style="border:2px solid #666666;background-color: #E8F6FF;padding:0;width:10%">
<table cellpadding="8" >
		<tr style=""><td style="height:32px;border-bottom:2px solid #666666; padding:3px;text-align:center; font-weight:bold;" >Valuta</td></tr>
		<tr><td cellpadding="4" style="height:32px;text-align:center;border-bottom:2px solid #666666;">euro</td></tr>
		</table>

</td >
	<td style="border:2px solid #666666;width:25%; padding:0;" cellpadding="0">
		<table cellpadding="8" style="background-color:#FEF1E8;">
		<tr style=""><td style="height:32px;border-bottom:2px solid #666666; border-top:2px solid #666666; padding:3px;text-align:center; font-weight:bold;" >Destinazione della Merce in Pos. (A)</td></tr>
		<tr><td cellpadding="4" style="height:32px;border-bottom:2px solid #666666;">$dest1</td></tr>
		</table>
</td>
	<td style="width:25%; border:2px solid #666666; padding:0;">
		<table cellpadding="8" style="background-color:#FEF1E8;">
		<tr style=""><td style="height:32px;border-bottom:2px solid #666666;border-top:2px solid #666666; padding:3px;text-align:center; font-weight:bold;" >Destinazione della Merce in Pos. (B)</td></tr>
		<tr><td cellpadding="4" style="height:32px;border-bottom:2px solid #666666;">$desti_cli</td></tr>
		</table>
		
	</td>
</tr>
</table>

<table style="width:100%; margin:auto;border-bottom:2px solid #666666;border-left:2px solid #666666;border-right:2px solid #666666;">
<tr>
<td style="border:2px solid #666666;background-color: #E8F6FF;width:50%"></td>
<td style="bordert:2px solid #666666;width:25%;padding:0;">
	<table cellpadding="8"  style="background-color:#FEF1E8;">
		<tr style=""><td style="height:32px;border-bottom:2px solid #666666; padding:3px;" >$dest2</td></tr>
		<tr><td cellpadding="4" style="height:32px;border-bottom:2px solid #666666;">$dest3</td></tr>
		</table>

</td>
<td style="border:2px solid #666666;width:25%;padding:0;">
		<table cellpadding="8"  style="background-color:#FEF1E8;">
		<tr style=""><td style="height:32px;border-bottom:2px solid #666666; padding:3px; " >$indi_cli</td></tr>
		<tr><td cellpadding="4" style="height:32px;border-bottom:2px solid #666666;">$cap_cli</td></tr>
		</table>
	</td>
</tr>
</table>
</div>



<div>
<table style="width:100%; margin:auto;margin-top:10px;">

<tr style="border:2px solid #666666;">
<td style="border:2px solid #666666;text-align:center;font-weight:bold;width:3%;"><table cellpadding="14"><tr><td>POS.</td></tr></table></td>
<td style="border:2px solid #666666;padding:0;text-align:center;width:15%;">
	<table cellpadding="4" >
		<tr><td style="border-bottom:2px solid #666666; padding:3px;text-align:center; font-weight:bold;" >Articolo SPI</td></tr>
		<tr><td cellpadding="4" style="text-align:center; background-color:#FEF1E8;">Art. Cliente</td></tr>
	</table>
</td>
<td style="border:2px solid #666666;text-align:center;font-weight:bold;padding:0;width:16%;background-color:#E8F6FF;"><table cellpadding="12"><tr><td>Descrizione</td></tr></table></td>
<td style="border:2px solid #666666;padding:0;width:15%">
<table cellpadding="4" >
		<tr><td style="border-bottom:2px solid #666666; padding:3px;text-align:center; font-weight:bold;" >Disegno SPI</td></tr>
		<tr><td cellpadding="4" style="text-align:center;background-color:#FEF1E8;">Dis. Cliente</td></tr>
	</table>
</td>
<td style="border:2px solid #666666;text-align:center;font-weight:bold;width:5%;background-color:#E8F6FF;"><table cellpadding="14"><tr><td>REV</td></tr></table></td>
<td style="border:2px solid #666666;text-align:center;font-weight:bold;width:5%;background-color:#E8F6FF;"><table cellpadding="14"><tr><td>UM</td></tr></table></td>
<td style="border:2px solid #666666;text-align:center;font-weight:bold;width:5%;background-color:#E8F6FF;"><table cellpadding="14"><tr><td>Quantit&agrave;</td></tr></table></td>
<td style="border:2px solid #666666;text-align:center;font-weight:bold;width:8%;background-color:#E8F6FF;"><table cellpadding="14"><tr><td>Data consegna</td></tr></table></td>
<td style="border:2px solid #666666;text-align:center;font-weight:bold;width:8%;background-color:#E8F6FF;"><table cellpadding="14"><tr><td>Prezzo unitario</td></tr></table></td>
<td style="border:2px solid #666666;text-align:center;font-weight:bold;width:10%;background-color:#FEF1E8;"><table cellpadding="14"><tr><td>Commessa</td></tr></table></td>
<td style="border:2px solid #666666;text-align:center;font-weight:bold;width:10%;background-color:#FEF1E8;"><table cellpadding="14"><tr><td>Destinazione</td></tr></table></td>
</tr>
</table>
</div>
<div>
<table style="width:100%; margin:auto;margin-top:10px;">
<tr style="border:2px solid #666666;">
<td style="border:2px solid #666666;text-align:center;font-weight:bold;width:3%;"><table cellpadding="14"><tr><td>1</td></tr></table></td>
<td style="border:2px solid #666666;padding:0;text-align:center;width:15%;">
	<table cellpadding="4" >
		<tr><td style="border-bottom:2px solid #666666; padding:3px;text-align:center; font-weight:bold;" >10.101</td></tr>
		<tr><td cellpadding="4" style="text-align:center; background-color:#FEF1E8;">ND</td></tr>
	</table>
</td>
<td style="border:2px solid #666666;text-align:center;font-weight:bold;padding:0;width:16%;"><table cellpadding="12"><tr><td>M00125 17 X=142</td></tr></table></td>
<td style="border:2px solid #666666;padding:0;width:15%">
<table cellpadding="4" >
		<tr><td style="border-bottom:2px solid #666666; padding:3px;text-align:center; font-weight:bold;" >10.101.01</td></tr>
		<tr><td cellpadding="4" style="text-align:center;background-color:#FEF1E8;">ND</td></tr>
	</table>
</td>
<td style="border:2px solid #666666;text-align:center;font-weight:bold;width:5%;"><table cellpadding="14"><tr><td></td></tr></table></td>
<td style="border:2px solid #666666;text-align:center;font-weight:bold;width:5%;"><table cellpadding="14"><tr><td>n.</td></tr></table></td>
<td style="border:2px solid #666666;text-align:center;font-weight:bold;width:5%;"><table cellpadding="14"><tr><td>1</td></tr></table></td>
<td style="border:2px solid #666666;text-align:center;font-weight:bold;width:8%;"><table cellpadding="14"><tr><td>00/00/0000</td></tr></table></td>
<td style="border:2px solid #666666;text-align:center;font-weight:bold;width:8%;"><table cellpadding="14"><tr><td></td></tr></table></td>
<td style="border:2px solid #666666;text-align:center;font-weight:bold;width:10%;"><table cellpadding="14"><tr><td>AAAAA</td></tr></table></td>
<td style="border:2px solid #666666;text-align:center;font-weight:bold;width:10%;"><table cellpadding="14"><tr><td>CCCCCCC</td></tr></table></td>
</tr>

</table>
</div>
<div style="">
<table style="width:100%; margin:auto;border:2px solid #666666;padding:0;background-color:#FEF1E8;" cellpadding="4"  >
<tr>
<td style="border:2px solid #666666; width:59%;" rowspan="6">
	<table cellpadding="8"><tr><td style="text-align:right; font-weight:bold; ">Totale Ordine:</td></tr></table>
</td>
<td style="border:2px solid #666666; width:5%;" rowspan="6">
	<table cellpadding="8"><tr><td style="text-align:right; text-align:center;">6</td></tr></table>
</td>
<td style="border:2px solid #666666;width:16%;" rowspan="6"><table cellpadding="8"><tr><td >&euro;</td></tr></table></td>
<td style="width:20%;border:2px solid #666666;" rowspan="6"><table cellpadding="8"><tr><td></td></tr></table></td>
</tr>
</table>
</div>
<div style="">
<table style="width:100%; margin:auto;border:2px solid #666666;padding:0;background-color:#FEF1E8;" cellpadding="4"  >
<tr>
<td style="border:2px solid #666666; " rowspan="6">
<table cellpadding="8"><tr><td style="font-weight:bold; text-align:center;font-size:14px;text-transform:uppercase;background-color:#E8F6FF;">SPI ENGINEERING SRL - VIA AURELIO SAFFI,17 MILANO ITALIA - CODICE FISCALE E P.IVA 07921970153</td></tr></table>
</td>
</tr>
</table>
</div>
EOF;

?>