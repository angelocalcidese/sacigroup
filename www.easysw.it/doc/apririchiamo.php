<?php
$preventivo=$_GET["tessera"];
#$pieces = explode(" ", $preventivo);

$file = 'http://www.spi.it/poma/richiami/'.$preventivo;
#$file = './pdf_preventivi/00214-2016.pdf';
#echo $file; exit;
$filename = 'Custom file name for the.pdf'; /* Note: Always use .pdf at the end. */

header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($file));
header('Accept-Ranges: bytes');

@readfile($file)
?>