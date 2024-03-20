<?php

$login=$_REQUEST["login"];
$tessera=$_REQUEST["tessera"];
$importo=$_REQUEST["importoass"];
$ingranaggio=$_REQUEST["ingranaggio"];      
#echo "tessera ". $tessera; exit;
include "conf_DB.php";
$anno=date("Y");
$oggi=date("d/m/Y");
$sql = "insert into quote
 ( 
  tessera, 
  anno, 
  importo,
  data,
  rinnovo_nuovo
 )
  values
 ( 
  '$tessera',  
  '$anno',  
  '$importo',
  '$oggi',
  'R' )
    ";
    if ($conn->query($sql) === TRUE)
        { } 
       else
       {echo "ERRORE gia' presente&";}   

      
$sql1 = "SELECT * FROM soci  where tessera = '$tessera' ";
#echo $sql1; 
$$result = $conn->query($sql1);
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
      
$mastro="0002";
$sottomastro="0001";
$conto="0002";
$eu="E";
$causale="EA";
$datax=date("Y-m-d");
$adesso=date("Y-m-d H:m:s");
$anno=date("Y");
$tipodocumento="GEN";
$numero=$tessera;
$note="Rinnovo annuale Tessera n. ".$tessera;
$iva=0;
$importoiva=0;      
   $sql = "INSERT INTO 
movimenticontabili (
esercizio, 
mastro, 
sottomastro, 
conto,
e_u,
causale,
importo,
data,
data_inserimento,
tipodocumento,
numdocumento,
note,
perciva,
iva,
login
) VALUES (
'$anno', 
'$mastro', 
'$sottomastro', 
'$conto',
'$eu',
'$causale',
'$importo',
'$datax',
'$adesso',
'$tipodocumento',
'$numero',
'$note',
'$iva',
'$importoiva',
'$login'
)";
#echo  $sql; exit;
if ($conn->query($sql) === TRUE)
   
    {
if ($eu!="P")
{
$sql = "SELECT *  FROM  corre where causale = '$causale' and esercizio = '$anno'"; 
	$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
	
	{   $anno = $macrogruppo["esercizio"];
      $causale = $macrogruppo["causale"];
      $causale1 = $macrogruppo["causale1"];
      $segno = $macrogruppo["segno"];
      
  $sqlg = "SELECT *  FROM  causale where codice = '$causale1' and esercizio = '$anno'"; 
	$result1 = $conn->query($sqlg);
  if ($result1->num_rows > 0) {
  while($macrogruppo1 = $resul1t->fetch_assoc())
	
	{   $anno = $macrogruppo1["esercizio"];
      $eu1 = $macrogruppo1["e_u"];
      $mastro1 = $macrogruppo1["mastro"];  
      $sottomastro1 = $macrogruppo1["sottomastro"];
      $conto1 = $macrogruppo1["conto"];
      
      #if ($eu1=="U") {$importo=$importo*-1;}
      if ($segno=="-") {$importo=$importo*-1;}
      #echo $causale1; exit;
      
$sql = "INSERT INTO 
movimenticontabili (
esercizio, 
mastro, 
sottomastro, 
conto,
e_u,
causale,
importo,
data,
data_inserimento,
tipodocumento,
numdocumento,
note,
perciva,
iva,
login
) VALUES (
'$anno', 
'$mastro1', 
'$sottomastro1', 
'$conto1',
'$eu',
'$causale1',
'$importo',
'$datax',
'$oggi',
'$tipodocumento',
'$numero',
'$note',
'$iva',
'$importoiva',
'$login'
)";
#echo  $sql; exit;
if ($conn->query($sql) === TRUE)
    { } 
    else
    {$erroreriferimento="errore movimento già esistente";  }
      
   } }
} }          
       
}       
              
    }      
    else       
 {
    $erroreriferimento="errore movimento già esistente";
    } 
     
      
      
			} }
      
      
      
      
      
?>

<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 4</title>

<style>
div#container {
min-width:   800px;
  min-height:  500px;
  max-width:  800px;
  max-height: 1000px;
}
div#sottocontainer {
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

</head>
<body>



<?php $url_pagina_chiamante="stamparicevuta.php?tessera=".$tessera;  ?>

    <script>
		popupWindow =
		window.open('<?php echo $url_pagina_chiamante; ?>','pdf','width=700,height=800,left=150,top=150,location=0,directories=0,toolbar=0,scrollbars=yes,resizable=1')
    
	  </script>
    
</body>
<script>
function carica_consegnaA(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0,scrollbars=yes,resizable=1')
    
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>