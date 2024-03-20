<?php
$tessera=$_REQUEST["tessera"];
#$numero=$_REQUEST["numero"];
include "conf_DB.php";


#$tessera=916;
$sql1 = "SELECT * FROM soci  where tessera = '$tessera' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ 
      $tessera = $macrogruppo["tessera"];	
      $cognome = $macrogruppo["cognome"];
      $nome = $macrogruppo["nome"];
      $datanascita = $macrogruppo["data_nascita"];
      $natoa = $macrogruppo["luogo_nascita"];
      $provnatoa = $macrogruppo["provincia_nascita"];
      $indirizzores = $macrogruppo["indirizzo"];
      $residentecitta = $macrogruppo["localita_residenza"];
      $residenteprov= $macrogruppo["provincia"];
      $cap = $macrogruppo["cap"];
      $telefono = $macrogruppo["telefono"];
      $email = $macrogruppo["email"];
      $codfisc = $macrogruppo["codice_fiscale"];
      $oggi = $macrogruppo["data_iscrizione"];
      $accdati = $macrogruppo["ass"];
      $comunicazioni = $macrogruppo["altro"];	
      $deceduto = $macrogruppo["deceduto"];	
      $cellulare=""; 
			} }
      $oggi=date("d/m/Y");

      $anno=date("Y");
$sql1 = "SELECT * FROM ricevuta  where progr = '1' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{$numero = $macrogruppo["numero"];
$numero++; 
$numerox=$numero."/".$anno;   
$sqly = "UPDATE ricevuta set 
numero = '$numero'
where 
progr = 1
";
 if ($conn->query($sqly) === TRUE)
    { } 
    else
    {echo "&errore1vcli=errore&";}
    } }
$anno=date("Y");
$diciric="PER RINNOVO ASSOCIAZIONE CARLO POMA anno ".$anno;   
$dataricevuta=date("Y-m-d");
$sqlyy = "INSERT INTO 
ricevutepagamento (
numeroricevuta, 
dataricevuta, 
tessera, 
importo,
motivo,
utente
) VALUES (
'$numero', 
'$dataricevuta', 
'$tessera', 
'10',
'$diciric',
' '
)";
#echo  $sql; exit;
if ($conn->query($sqly) === TRUE)
    {  } 
    else
    {$erroreriferimento="errore srittura ricevuta pagamento";  }








    
	       
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>CSRC</title>
<style>
div#container {
min-width:   900px;
  min-height:  500px;
  max-width:  900px;
  max-height: 1000px;
}
div#sottocontainer {
min-width:   600px;
  min-height:  500px;
  max-width:  600px;
  max-height: 1000px;
}
</style>
<style>
.line
{
font-size:10px;
line-height:10px;
}
</style>

</head>

<body>
<p align="center">&nbsp;</p>   
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center"><b><font face="Arial" size="6" color="#800000">CREAZIONE PDF 
ATTENDI......</font></b></p>
<?php
$html =  <<<EOF
<!-- EXAMPLE OF CSS STYLE -->
<style>
body {	font-size:22px;	color:#666666;}
table, th, td { border-collapse: collapse;border-spacing: 0; font-size:22px;}
span{padding:5px;}
</style>
<div >

<table border="0" >
<table border="1" >
<table border="0" width="50%" cellspacing="0" cellpadding="0">
			<tr>
				<td style="text-align:center;  width:239;">
				
				<img border="0" src="comune.png" ></td>
				<td>
				
				<img border="0" src="albero.png" ></td>
				<td style="  width:406;">
				<table style="width:100%;  ">
					<tr>
           
						<td style="font-size:13px;">Centro Socio 
						Ricreativo e Culturale &quot;Carlo Poma&quot;</td>
					</tr>
					<tr>
						<td style="font-size:13px;">Zona 7 - via Caio 
						Mario, 18 - Milano 20153</td>
					</tr>
					<tr>
						<td style="font-size:13px;">C.F. 97591770157</td>
					</tr>
					<tr>
						<td style="font-size:13px;">Tel. 02 88 44 8465 - 
						Tel. e Fax 02 48205404</td>
					</tr>
					<tr>
						<td style="font-size:13px;">Email: csra.carlopoma@gmail.com</td>
					</tr>
				</table>
				</td>
			</tr>
			<tr>
				<td style="font-size:15px; text-align:center;">
				Settore Politiche Sociali</td>
				<td>&nbsp;</td>
				<td style="text-align:center;  width:508;">
				&nbsp;
        <table border="1" style="width:50%; ">
					<tr>
						<td >Tessera n. $tessera</td>
					</tr>
				</table>
				</td>
			</tr>
		</table> 
  </table> 
  <br><br> <br><br>
<table border="1" style="text-align:center;" cellspacing="0" cellpadding="0">
	<tr border="0">
		<td style="text-align:center;font-size:20px;font-weight:bold;"><br><br>RICEVUTA DI PAGAMENTO N. $numerox DATA $oggi <br></td>
	</tr>
	<tr border="0">
		<td style="text-align:left;font-size:16px;font-weight:bold;"><br><br>Ricevuti da $cognome $nome <br><br>EURO DIECI/00 <br><br>PER RINNOVO ALL'ASSOCIAZIONE 
		CARLO POMA annualita' 2017<br><br>
		TOTALE EURO 10,00<br><br></td> </tr>
    <tr border="0"> 
		<td style="text-align:right;font-size:16px;font-weight:bold;"><br><br>Firma ....................................................<br></td>
	</tr>
</table>
 
</div>   
   
EOF;
require_once('tcpdf/tcpdf.php');
require_once('tcpdf/examples/config/tcpdf_config_alt1.php');

// convert TTF font to TCPDF format and store it on the fonts folder
//$fontname = TCPDF_FONTS::addTTFfont('tcpdf/fonts/arial/ArialNarrowBold.ttf', 'Arial', '', 10);

// Include the main TCPDF library (search the library on the following directories).
$tcpdf_include_dirs = array(
	realpath('tcpdf/tcpdf.php'),
	'/usr/share/php/tcpdf/tcpdf.php',
	'/usr/share/tcpdf/tcpdf.php',
	'/usr/share/php-tcpdf/tcpdf.php',
	'/var/www/tcpdf/tcpdf.php',
	'/var/www/html/tcpdf/tcpdf.php',
	'/usr/local/apache2/htdocs/tcpdf/tcpdf.php'
);
foreach ($tcpdf_include_dirs as $tcpdf_include_path) {
	if (@file_exists($tcpdf_include_path)) {
		require_once($tcpdf_include_path);
		break;
	}
}
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Spi');
$pdf->SetTitle('Scheda Socio');
$pdf->SetSubject('Scheda Socio');
$pdf->SetKeywords('Scheda Socia');
$pdf->SetPrintHeader(false);
$pdf->SetPrintFooter(false);
// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
//$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);


// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);



// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/ita.php')) {
	require_once(dirname(__FILE__).'/lang/ita.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helveticaB', '', 14);
// use the font
//$pdf->SetFont($fontname, '', 5, '', false);

// add a page
$pdf->AddPage();
// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

$output_dest = 'F';
$oggi1=date("dmyhms");
$corpo=$tessera.$oggi1;

$filename = $corpo.'.pdf';


$pdf->Output('/poma/pdf/'.$filename, $output_dest);

//echo '<a href="http://www.spi.it/rootprova/pdf_preventivi/'.$filename.'">Link sul server</a>';
//============================================================+
// END OF FILE
//============================================================+
?>
<script>
window.location.href = 'esponiordine.php?fl=<?php echo $filename; ?>';
</script>

</body>

</html>