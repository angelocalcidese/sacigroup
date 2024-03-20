<?php
$tessera=$_REQUEST["tessera"];
$numero=$_REQUEST["numero"];
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
			}  }
      $oggi=date("d/m/Y");
/*
      $anno=date("Y");
$sql1 = "SELECT * FROM ricevuta  where progr = '1' ";
#echo $sql1; 
$query = mysql_query($sql1,$connessione) or die("Err1. SQL: $sql1");
		for ($nc="0"; $macrogruppo = mysql_fetch_array($query); $nc++)
		{$numero = $macrogruppo["numero"];
$numero++; 
$numerox=$numero."/".$anno;   
$sqly = "UPDATE ricevuta set 
numero = '$numero'
where 
progr = 1
";
if (!mysql_query($sqly,$connessione))
    {
    echo "&errore1vcli=errore&";
    } 
    else
    {}
    }
*/    
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
'PER ISCRIZIONE ASSOCIAZIONE CARLO POMA anno 2017',
' '
)";
#echo  $sql; exit;
if ($conn->query($sqlyy) === TRUE)
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

<table style="text-align:center; font-weight:bold;" border="0" width="50%" cellspacing="0" cellpadding="0">
<tr> 
<p style="text-align:center; font-weight:bold;font-size:22px;">
MODULO DI ISCRIZIONE </p>
<p style="text-align:center; font-weight:bold;font-size:14px;">
Al Centro Socio Ricreativo e Culturale<br>
CARLO POMA<br>
ATTENZIONE: I DATI SEGNATI CON * SONO OBBLIGATORI
</p>
</tr>
</table>
</div>
<div>

		<table border="1" style="text-align:center;" cellspacing="0" cellpadding="0">
			<tr>
				<td style="text-align:left;font-size:18px;font-weight:bold;">* IL SOTTOSCRITTO:</td>
				<td style="text-align:left;font-size:18px;font-weight:bold;"></td>
			</tr>
			<tr>
				<td style="text-align:left;font-size:18px;font-weight:bold;">* COGNOME:</td>
				<td style="text-align:left;font-size:18px;font-weight:bold;"> $cognome</td>
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
	  <table border="1" style="text-align:center;" cellspacing="0" cellpadding="0">
	<tr>
		<td style="text-align:left;font-size:17px;font-weight:bold;">CHIEDE DI ISCRIVERSI ALL ASSOCIAZIONE - CENTRO 
		SOCIO RICREATIVO E CULTURALE &quot;CARLO POMA&quot; - E DI ACCETTARE LE CONDIZIONI 
		CHE NE REGOLANO L ATTIVITA PREVISTE DALLO STATUTO.</td>
	</tr>
	<tr>
		<td style="text-align:left;font-size:17px;font-weight:bold;">DICHIARA INOLTRE DI NON ESSERE ISCRITTO A 
		NESSUNA ALTRA ASSOCIAZIONE FACENTE PARTE DEI CENTRI SOCI RICREATIVI DEL 
		COMUNE DI MILANO</td>
	</tr>
</table>
</div>		
<div>
<table border="1" style="text-align:center;" cellspacing="0" cellpadding="0">  
<table border="0" style="text-align:center;" cellspacing="0" cellpadding="0">  
  <tr border="0">
    <td style="text-align:left;font-size:17px;font-weight:bold;"></td>
    <td style="text-align:left;font-size:17px;font-weight:bold;"></td>
	</tr>
	<tr border="0">
		<td style="text-align:left;font-size:17px;font-weight:bold;">Firma: ________________________</td>
    <td style="text-align:left;font-size:17px;font-weight:bold;"></td>
	</tr>
	<br>
  <tr border="0">
		<td style="text-align:right;font-size:17px;font-weight:bold;"></td>
    <td style="text-align:right;font-size:17px;font-weight:bold;">Associazione &quot;Carlo Poma&quot;</td>
	</tr>
	<tr border="0">
    <td style="text-align:left;font-size:17px;font-weight:bold;"></td>
		<td style="text-align:right;font-size:17px;font-weight:bold;">Il Presidente&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr border="0">
		<td style="text-align:left;font-size:17px;font-weight:bold;"> Milano, $oggi</td>
    <td style="text-align:left;font-size:17px;font-weight:bold;"></td>
	</tr>
</table>
</table>
<br><br><br>
<table border="1" style="text-align:center;" cellspacing="0" cellpadding="0">
	<tr border="0">
		<td style="text-align:center;font-size:14px;font-weight:bold;"><br>INFORMATIVA AI SENSI DELL'ART. 13 DEL D.Las. 
		196/2003<br>
		Ai sensi dell'art13 del D. Lgs. 30 giugno 2003, n. 196 (Codice in 
		materia di protezione del dati personali) si forniscono le seguenti 
		informazioni:</td>
	</tr> 
	<tr border="0">
		<td style="text-align:left;font-size:12px;font-weight:bold;">&nbsp;&nbsp;1)&nbsp;  FINALITA DEL TRATTAMENTO:<br>
		I dati sopra rortati sono raccolti esclusivamente ai fini 
		dell'iscrizione alla Associazione e per gli scopi previsti nello Statuto
		dell'Associazione stessa e verranno trattati con modalita' anche 
		automatizzate, solo per tale scopo e da soggetti espressamente
		incaricati dal trattamento.</td>
	</tr> 
	<tr border="0">
		<td style="text-align:left;font-size:12px;font-weight:bold;">&nbsp;&nbsp;2)&nbsp;  NATURA DEL TRATTAMENTO<br>
		L'iscrizione all&quotAssociazione e' consentita previo conferimenti 
		facoltativo o obbligatorio dei dati. Qualora sia previsto il 
		conferimento
		obbligatorio, l&quo;teventuale rifiuto di fornire i dati richiesti impedisce 
		di dare corso alle iscrizione e agli adempimenti connessi.</td>
	</tr>
	<tr border="0">
		<td style="text-align:left;font-size:12px;font-weight:bold;">&nbsp;&nbsp;3)&nbsp; MODALITA' DEL TRATTAMENTO:<br>
		I dati sono trattati secondo i principi di correttezza, liceita', 
		trasparenza e non eccedenza rispetto alle finatta' di
		raccolta e di successivo trattamento.<br>
		I dati sono trattati esclusivamente dai soggetti incaricati del 
		trattamento, anche mediante utilizzo di strumenti automatizzati idonei
		a garantire la sicurezza e la riservatezza degli stessi.</td>
	</tr>
	<tr border="0">
		<td style="text-align:left;font-size:12px;font-weight:bold;">&nbsp;&nbsp;4)&nbsp; COMUNICAZIONE E DIFFUSIONE:<br>
		I dati sono comunicati al Comune di Milano per lo svolgimento di 
		attivita' istituzionali.
		I dati possono essere comunicati ad altri soggetti pubblici e/o privati 
		previo consenso. I dati non saranno oggetto di diffusione.</td>
	</tr>
	<tr border="0">
		<td style="text-align:left;font-size:12px;font-weight:bold;">&nbsp;&nbsp;5)&nbsp; TITOLARI E RESPONSABILI DEL TRATTAMENTO:<br>
		Il Titolare dal trattamento dei dall'Associazione 'Centro Socio 
		Ricreativo e Culturale - ERCOLE RATTI'.
		Responsabile, dal trattamento e': (solo se designato) Il Presidente 
		dell'Associazione.<br>
		Assume la qualita' di Titolare del Trattamento Il Comune di Milano per i  
		dati ad esso conferiti, quando questi entrano
		nella sua disponibilita' e sotto Il suo diretto controllo. il Comune di  
		Milano trattera' i dati in suo possesso soltanto per 
		finalita' istituzionali e potra' comunicarli ad altri soggetti pubblici 
		secondo quanto previsto previsto da norme di legge e da 
		regolamenti.</td>
	</tr>
	<tr border="0">
		<td style="text-align:left;font-size:12px;font-weight:bold;">&nbsp;&nbsp;6)&nbsp; DIRITTI DELL'INTERESSATO:<br>
		L'interessato puo' esercitare i diritti previsti dell'art. 7 dei D. Lgs. 
		196/2003 ed in particolare ottenere la conferma dell'esistenza o 
		meno di dati personali che lo riguardano, dell'origine dei dati 
		personali, delle modalita' del trattamento, della logica applicata in 
		caso ci trattamento effettuato con l'ausilio di strumenti elettronici, 
		nonche' l'aggiornamento, in rettificazione ovvero quando vi ha 
		interessi, l'integrazione, la cancellazione, la trasformazione in forma 
		anonima dei dati.<br>
		L'interessato ha inoltre diritto di opporsi, in tutto o in parte, per 
		motivi legittimi al trattamento dei dati personali che lo riguardano, 
		ancorche' pertinenti allo scopo della raccolta. </td>
	</tr>
	<tr border="0">
		<td style="text-align:left;font-size:12px;font-weight:bold;"><br><br>Milano ....................<br>  
		<br>
		L'interessato ...................................................<br><br>
		Consenso per la comunicazione dei dati a soggetti terzi diversi del 
		Comune di Milano.<br></td>
	</tr>
	<tr border="0">
		<td style="text-align:left;font-size:12px;font-weight:bold;"><br><br>il/la Sottoscritto/la 
		&nbsp;$cognome &nbsp;$nome<br>
		in qualita' di interessato del trattamento, preso atto dell'informativa 
		sopra riportata,<br>
		per il trattamento e la comunicazione dei dati personali alla Compagnia 
		di Assicurazione al solo fine della esecuzione del contratto:<br>
		Da' il consenso (SI) e non Nega il consenso<br>
		<br>
		Firma: .................................................... 
		Firma: ...................................................<br><br>
		per l'eventuale comunicazione dei propri dati personali ad altri 
		soggetti pubblici e privati per solo fini istituzionali<br>
		<br>
		Da' il consenso (SI ) e non Nega il consenso<br>
		<br>
		Firma: ................................................... 
		Firma: .................................................</td>
	</tr>
	<tr border="0">
		<td style="text-align:center;font-size:13px;font-weight:bold;"><br><br>PARTE RISERVATA ALL'ASSOCIAZIONE <br></td>
	</tr>
	<tr border="0">
		<td style="text-align:left;font-size:12px;font-weight:bold;">Accettazione/Rifiuto dell'Associazione: <br>
		Delibera di ammissione in data ..............................(data del 
		verbale del Comitato di Gestione) <br>
		Delibera di NON AMMISSIONE in data ...........................(data del 
		verbale da Comitato di Gestione), in allegato si esplicitano le <br>
		motivazioni del rifiuto. </td>
	</tr>
</table>
<br><br>
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
		<td style="text-align:center;font-size:20px;font-weight:bold;"><br><br>RICEVUTA DI PAGAMENTO N. $numero DATA $oggi <br></td>
	</tr>
	<tr border="0">
		<td style="text-align:left;font-size:16px;font-weight:bold;"><br><br>Ricevuti da $cognome $nome <br><br>EURO DIECI/00 <br><br>PER ISCRIZIONE ALL'ASSOCIAZIONE 
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

//============================================================+
// END OF FILE
//============================================================+
?>
<script>
window.location.href = 'esponiordine.php?fl=<?php echo $filename; ?>';
</script>

</body>

</html>