<?php
$tessera=$_REQUEST["tessera"];
include "conf_DB.php";
$oggi=date("d/m/Y");

$anno=date("Y");

$art_smp = "";
#$tessera=56;

      $oggi=date("d/m/Y");
      $anno=date("Y");


$sql1x = "SELECT * FROM prenotazioni  where numero = '$tessera' ";
#echo $sql1x;  exit;
$resultx = $conn->query($sql1x);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc()) 
		{$confermato = $macrogruppox["confermato"];  
    $dataentrata = $macrogruppox["dataentrata"]; 
    
    $datauscita = $macrogruppox["datauscita"]; 
    $tipocliente = $macrogruppox["tipocliente"];
    $datainizio = $macrogruppox["datainizio"];
    $datafine = $macrogruppox["datafine"];
   
    $camera = $macrogruppox["camera"]; 
    $numero = $macrogruppox["numero"];
    $socio = $macrogruppox["socio"];

     
    $datasc=explode("-",$datainizio);
    $datainiziox = strtotime(date($datasc[0]."-".$datasc[1]."-".$datasc[2]));
    
    $datasc=explode("-",$datafine); 
    $datafinex = strtotime(date($datasc[0]."-".$datasc[1]."-".$datasc[2]));
    
    $datasc=explode("-",$datauscita); 
    $datauscitax = strtotime(date($datasc[0]."-".$datasc[1]."-".$datasc[2]));
    #echo "<br>".$data."  / ".$datainiziox."  / ".$datafinex."<br"; 
    $sql1xx = "SELECT * FROM soci  where tessera = '$socio'";
    #echo $sql1x; 
    $resultxx = $conn->query($sql1xx);
    if ($resultx->num_rows > 0) {
    while($macrogruppoxx = $resultxx->fetch_assoc()) 
		{
     $cognome = $macrogruppoxx["cognome"];
     $nome = $macrogruppoxx["nome"];
     
     $cognome = $macrogruppoxx["cognome"];
      $nome = $macrogruppoxx["nome"];
      $datanascita = $macrogruppoxx["data_nascita"];
      $natoa = $macrogruppoxx["luogo_nascita"];
      $provnatoa = $macrogruppoxx["provincia_nascita"];
      $indirizzores = $macrogruppoxx["indirizzo"];
      $residentecitta = $macrogruppoxx["localita_residenza"];
      $residenteprov= $macrogruppoxx["provincia"];
      $cap = $macrogruppoxx["cap"];
      $telefono = $macrogruppoxx["telefono"];
      $email = $macrogruppoxx["email"];
      $codfisc = $macrogruppoxx["codice_fiscale"];
      $oggi = $macrogruppoxx["data_iscrizione"];
      $accdati = $macrogruppoxx["ass"];
      
    }} 
    
    
		$sql1q = "SELECT * FROM prenotagruppo  where prenotazione = '$tessera' ";
    #echo $sql1; 
    $resultq = $conn->query($sql1q);
    if ($resultq->num_rows > 0) {
    while($macrogruppoq = $resultq->fetch_assoc())
		{ 
      $gruppo = $macrogruppoq["gruppo"];	
			}  }
     } } 
     #echo $art_smp; exit;  
if ($sommadareavere < 0){$esponicolore='<font color="#cc0000">'; } else {$esponicolore='<font color="#000000">'; }          
            
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">

<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
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
<table border="0" width="50%" cellspacing="0" cellpadding="0">
			<tr>
				<td style="text-align:center;  width:672;">				
				<img border="0" src="carlopoma.png" width="954" height="140">
        </td>
      </tr>			
			
			<tr>
				<td >Prenotazione n. $tessera</td>
        <td >Data Inizio Prenotazione $datainizio</td>
        <td >Data Fine Prenotazione $datainizio</td>
        <td >Camera / Letto $camera</td>
			</tr>
</table>
<table style="text-align:center; font-weight:bold;" border="0" width="50%" cellspacing="0" cellpadding="0">
<tr> 
<p style="text-align:center; font-weight:bold;font-size:18px;">DATI DELLA PRENOTAZIONE </p>   
</tr>
</table>
</p>

		<table border="1" style="text-align:center;" cellspacing="0" cellpadding="0">
		
			<tr>
				<td style="width:35%;text-align:left;font-size:18px;font-weight:bold;">* COGNOME:</td>
				<td style="width:65%;text-align:left;font-size:18px;font-weight:bold;"> $cognome</td>
			</tr>
			<tr>
				<td style="text-align:left;font-size:18px;font-weight:bold;">* NOME:</td>
				<td style="text-align:left;font-size:18px;font-weight:bold;"> $nome</td>
			</tr>
			<tr>
				<td style="text-align:left;font-size:18px;font-weight:bold;">* NATO/A A:</td>
				<td style="text-align:left;font-size:18px;font-weight:bold;"> $natoa $provnatoa </td>
			</tr>
			<tr>
				<td style="text-align:left;font-size:18px;font-weight:bold;">* IL</td>
				<td style="text-align:left;font-size:18px;font-weight:bold;"> $datanascita</td>
			</tr>
			<tr>
				<td style="text-align:left;font-size:18px;font-weight:bold;">* RESIDENTE A:</td>
				<td style="text-align:left;font-size:18px;font-weight:bold;"> $residentecitta $residenteprov </td>
			</tr>
			<tr>
				<td style="text-align:left;font-size:18px;font-weight:bold;">* VIA/PIAZZA</td>
				<td style="text-align:left;font-size:18px;font-weight:bold;"> $indirizzores </td>
			</tr>
      
      <tr>
				<td style="text-align:left;font-size:18px;font-weight:bold;">* CAP:</td>
				<td style="text-align:left;font-size:18px;font-weight:bold;"> $cap </td>
			</tr>
			<tr>
				<td style="text-align:left;font-size:18px;font-weight:bold;">  EMAIL</td>
				<td style="text-align:left;font-size:18px;font-weight:bold;"> $email</td>
			</tr>
			<tr>
				<td style="text-align:left;font-size:18px;font-weight:bold;">  TELEFONO:</td>
				<td style="text-align:left;font-size:18px;font-weight:bold;"> $telefono </td>
			</tr>
			<tr>
				<td style="text-align:left;font-size:18px;font-weight:bold;">  CELLULARE</td>
				<td style="text-align:left;font-size:18px;font-weight:bold;"> $cellulare </td>
      </tr>
			<tr>
				<td style="text-align:left;font-size:18px;font-weight:bold;">* CODICE FISCALE</td>
				<td style="text-align:left;font-size:18px;font-weight:bold;"> $codfisc </td>
      </tr>            
		</table>
    </div>
    <div>
    
<br>
  
 <table border="1" style="text-align:center;">
	<tr>
		<td style="background-color:#0099FF;text-align:center;font-size:14px;font-weight:bold;">ENTRATA</td>
		<td style="background-color:#0099FF;text-align:center;font-size:14px;font-weight:bold;">USCITA</td>
    <td style="background-color:#0099FF;text-align:center;font-size:14px;font-weight:bold;">GIORNI</td>
		<td style="background-color:#0099FF;text-align:center;font-size:14px;font-weight:bold;">FIRMA</td>
	</tr>  
<tr>
		<td style="background-color:#0099FF;text-align:center;font-size:14px;font-weight:bold;">$dataentrata</td>
		<td style="background-color:#0099FF;text-align:center;font-size:14px;font-weight:bold;">$datauscita</td>
    <td style="background-color:#0099FF;text-align:center;font-size:14px;font-weight:bold;"></td>
		<td style="background-color:#0099FF;text-align:center;font-size:14px;font-weight:bold;"></td>
	</tr>   
$art_smp    
</table>    



</div>   
   
EOF;
require_once('../../tcpdf/tcpdf.php');
require_once('../..tcpdf/examples/config/tcpdf_config_alt1.php');

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
#echo $html;  exit;
$pdf->writeHTML($html, true, false, true, false, '');

$output_dest = 'F';
$oggi1=date("dmyhms");
$corpo=$tessera.$oggi1;

$filename = $corpo.'.pdf';


$pdf->Output('/area_riservata/pdf/'.$filename, $output_dest);

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