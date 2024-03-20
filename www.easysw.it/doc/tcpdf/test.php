<?
// include the TCPDF class
require_once(dirname(__FILE__).'/tcpdf.php');
// include PDF parser class
require_once(dirname(__FILE__).'/tcpdf_parser.php');
$fontname = $pdf->addTTFfont('http://www.spi.it/rootprova/tcpdf/fonts/ArialNarrowRegular.ttf', 'ArialNarrow', '', 32);
?>