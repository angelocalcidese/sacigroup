<?php  
session_start(); if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){ $larg= $_SESSION['screen_width'] ; $alt= $_SESSION['screen_height']; } else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) { $_SESSION['screen_width'] = $_REQUEST['width']; $_SESSION['screen_height'] = $_REQUEST['height']; header('Location: ' . $_SERVER['PHP_SELF']); } else { echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width+"&height="+screen.height;</script>'; } 
#echo "io"; exit;
include "conf_DB.php";                
$clientew=$_REQUEST["clientey"];
$commessaw=$_REQUEST["commessay"];
$slaw=$_REQUEST["slay"];
$attivitaw=$_REQUEST["attivitay"];
$attivew=$_REQUEST["attivey"];
$nomecommessax=$_REQUEST["nomecommessax"];
$ingranaggio=$_REQUEST["ingranaggio"];
$ingranaggiott=$_REQUEST["ingranaggiott"];
$ingranaggiodocu=$_REQUEST["ingranaggiodocu"];
$ingranaggiovedi=$_REQUEST["ingranaggiovedi"];
$BBAA=$_REQUEST["BBAA"];
$oggetto=$_REQUEST["oggetto"];
#echo "in ".$ingranaggio;
$login=$_REQUEST["login"];
$cerca=$_REQUEST["cerca"];
$commessa=$_REQUEST["commessa"];
$modificatipo=$_REQUEST["modificatipo"];
#echo $commessa;
$progr=$_REQUEST["progr"];
#echo "progr ".$progr;
$prgrx=$_REQUEST["prgrx"];
$prgry=$_REQUEST["prgry"];
#echo "prgrx".$prgrx;
$login=$_REQUEST["login"];
$cliente=$_REQUEST["cliente"];
#echo "cli dopo ".$cliente; 
$attivita=$_REQUEST["attivita"];
$rif=$_REQUEST["rif"];
$dal=$_REQUEST["dal"];
$al=$_REQUEST["al"];
$ordine=$_REQUEST["ordine"];
$notegen=$_REQUEST["notegen"];
$tipoattivita=$_REQUEST["tipoattivita"];
$sla=$_REQUEST["sla"];
$materiale=$_REQUEST["materiale"];
$copiecolore=$_REQUEST["copiecolore"];
$copieb=$_REQUEST["copieb"];
$noteatt=$_REQUEST["noteatt"];
$testo=$_REQUEST["testo"];
$tipofatta=$_REQUEST["tipofatta"];
$periodofatta=$_REQUEST["periodofatta"];
$siticketx=$_REQUEST["siticket"];
$fileh=$_REQUEST["fileh"];

$caricoa=$_REQUEST["caricoa"];
$importoa=$_REQUEST["importoa"];
$tipofattp=$_REQUEST["tipofattp"];
$periodofattp=$_REQUEST["periodofattp"];
$caricop=$_REQUEST["caricop"];
$importop=$_REQUEST["importop"];
$notefatt=$_REQUEST["notefatt"];

$tipointervento1=$_REQUEST["tipointervento1"];
$tipointervento=$_REQUEST["tipointervento"];
$materiale1=$_REQUEST["materiale1"];
$noteatt1=$_REQUEST["noteatt1"];
$tipofatta1=$_REQUEST["tipofatta1"];
$periodofatta1=$_REQUEST["periodofatta1"];
$caricoa1=$_REQUEST["caricoa1"];
$importoa1=$_REQUEST["importoa1"];
$giorno1=$_REQUEST["giorno1"];
$ora1=$_REQUEST["ora1"];
$numgiore1=$_REQUEST["numgiore1"];
$feriali1=$_REQUEST["feriali1"];
$daorafer1=$_REQUEST["daorafer1"];
$arafer1=$_REQUEST["arafer1"];
$sabato1=$_REQUEST["sabato1"];
$daorasab1=$_REQUEST["daorasab1"];
$arasab1=$_REQUEST["arasab1"];
$festivi1=$_REQUEST["festivi1"];
$daorafes1=$_REQUEST["daorafes1"];
$arafers1=$_REQUEST["arafers1"];





$nomecommessa=$_REQUEST["nomecommessa"];
$commerciale=$_REQUEST["commerciale"];
$pm=$_REQUEST["pm"];


$ingranaggiox=$_REQUEST["ingranaggiox"];
############################ scrivo documenti ###########################
if ($ingranaggiodocu=="1")
{
#echo "passo da docu".$ingranaggiodocu; exit;
$newdata=$_POST["newdata"];
$newdatasca=$_POST["newdatasca"];
$newoggetto=$_POST["newoggetto"];
#echo "data ".$newdata." ogg ".$newoggetto." cli ".$clientexxy; 

$uploadOk = 1;
if ($newdata=="") {echo " <b><font color='#FF0000'>**missing document date** </font></b>"; $uploadOk = 0;}
if ($newoggetto=="") {echo "<b><font color='#FF0000'>MANCA OGGETTO DEL DOCUMENTO OPPURE </font></b>"; $uploadOk = 0;}
#$cliente=$_SESSION["SPICLIENTLOGGED"];
$nomefile=basename($_FILES["fileToUpload"]["name"]);
if ($nomefile=="") {echo "<b><font color='#FF0000'> MANCA DOCUMENTO DA CARICARE OPPURE </font></b>"; $uploadOk = 0;}
$lunghezza=strlen($nomefile);
$lunghezza=$lunghezza-4;
$nomefileparz=substr($nomefile, 0, $lunghezza);
$errorefile=strpos($nomefileparz, ' ');




$pieces = explode("/", $newdata);
$newdata=$pieces[2]."-".$pieces[1]."-".$pieces[0];
if ($pieces[2]=="0000"){$newdata=$oggix;}
$target_dir = "documenti/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$nomefile=basename($_FILES["fileToUpload"]["name"]);
$nomefile1=basename($_FILES["fileToUpload1"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if ($_FILES["fileToUpload"]["size"] > 1000000000) {
    echo "ATTENZIONE FILE TROPPO GRANDE.</font></b>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "pdf" && $imageFileType != "docx"  && $imageFileType != "txt" && $imageFileType != "csv"   && $imageFileType != "xlsx"
&& $imageFileType != "gif" ) {
    echo "<b><font color='#FF0000'> FILE NON DI TIPO  JPG, PDF, PNG, GIF, DOCX, TXT, CSV, XLSX QUINDI </font></b>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<b><font color='#FF0000'> OPERAZIONE ABORTITA.</font></b>";
// if everything is ok, try to upload file
} else {

$sql1 = "SELECT * FROM progressivofile  where progr = '1' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $tesseraww = $macrogruppo["numero"];	 
			} }
$tesseraww++;
$sql = "UPDATE progressivofile set 
numero = '$tesseraww'
where 
progr = '1' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 
    $estensione=explode(".",$nomefile);
$newfile=$tessera."-".$tesseraww.".pdf";
$target_dire = "documenti/";

$target_filee = $target_dire . $newfile;


    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_filee)) {
        #echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
$comodo=explode("-",$newdata);
$newdata=$comodo[2]."/".$comodo[1]."/".$comodo[0];
$newoggetto=str_replace("'", "\'", $newoggetto); 
$comodo=explode(" - ",$clientex);
$clientexy=$comodo[0];
$comodo=explode(" - ",$commessa);
$commessay=$comodo[0];
#echo "cli ".$cliente;
       $sql = "INSERT INTO documenti
              (               
              tipodoc, 
              datadoc, 
              oggetto, 
              file,
              datasca,
              cliente,
              commessa,
              siticket) 
            VALUES (            
              '$tipointervento',
              '$newdata', 
              '$newoggetto',
              '$newfile',
              '$newdatasca',
              '$cliente',
              '$commessa',
              '$siticketx'
              )";
#echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        { } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 

 } }
#echo "passo1"; exit; 
$ingranaggiox=11;

}
#################################  fine scrivo documenti ###########################  
if($ingranaggio==2000){ 
#echo "reg ".$regione;
$progrw=$_REQUEST["progrw"];
$tipointervento1=$_REQUEST["tipointervento1"];
$materiale1=$_REQUEST["materiale1"];
$noteatt1=$_REQUEST["noteatt1"];
$tipofatta1=$_REQUEST["tipofatta1"];
$periodofatta1=$_REQUEST["periodofatta1"];
$caricoa1=$_REQUEST["caricoa1"];
$importoa1=$_REQUEST["importoa1"];
$giorno1=$_REQUEST["giorno1"];
$ora1=$_REQUEST["ora1"];
$numgiore1=$_REQUEST["numgiore1"];
$feriali1=$_REQUEST["feriali1"];
$daorafer1=$_REQUEST["daorafer1"];
$arafer1=$_REQUEST["arafer1"];
$sabato1=$_REQUEST["sabato1"];
$daorasab1=$_REQUEST["daorasab1"];
$arasab1=$_REQUEST["arasab1"];
$festivi1=$_REQUEST["festivi1"];
$daorafes1=$_REQUEST["daorafes1"];
$arafes1=$_REQUEST["arafes1"];
$numgior=$_REQUEST["numgior"];
$importogior=$_REQUEST["importogior"];
$importoa1=$_REQUEST["importoa1"];
$canone1=$_REQUEST["canone1"];
$da1a301=$_REQUEST["da1a301"];
$da31a601=$_REQUEST["da31a601"];
$da61a901=$_REQUEST["da61a901"];
$da91a1201=$_REQUEST["da91a1201"];
$da121a1501=$_REQUEST["da121a1501"];
$da151a1801=$_REQUEST["da151a1801"];
$da181a2101=$_REQUEST["da181a2101"];
$da211a2401=$_REQUEST["da211a2401"];
#echo "req ".$da211a2401;
$da241a2701=$_REQUEST["da241a2701"];
$da271a3001=$_REQUEST["da271a3001"];
$da301a3301=$_REQUEST["da301a3301"];
$da331a3601=$_REQUEST["da331a3601"];
$da361a3901=$_REQUEST["da361a3901"];
$da391a4201=$_REQUEST["da391a4201"];
$da421a4501=$_REQUEST["da421a4501"];
$da451a4801=$_REQUEST["da451a4801"];
  
#echo $commessa;  
$sql = "UPDATE tipointervento set 
tipointervento1='$tipointervento1',
materiale1='$materiale1',
noteatt1='$noteatt1',
tipofatta1='$tipofatta1',
periodofatta1='$periodofatta1',
caricoa1='$caricoa1',
importoa1='$importoa1',
giorno1='$giorno1',
ora1='$ora1',
numgiore1='$numgiore1',
feriali1='$feriali1',
daorafer1='$daorafer1',
arafer1='$arafer1',
sabato1='$sabato1',
daorasab1='$daorasab1',
arasab1='$arasab1',
festivi1='$festivi1',
daorafes1='$daorafes1',
arafes1='$arafes1',
numgior='$numgior',
importogior='$importogior',
importoa1='$importoa1',
canone1='$canone1',
da1a301='$da1a301',
da31a601='$da31a601',
da61a901='$da61a901',
da91a1201='$da91a1201',
da121a1501='$da121a1501',
da151a1801='$da151a1801',
da181a2101='$da181a2101',
da211a2401='$da211a2401',

da241a2701='$da241a2701',
da271a3001='$da271a3001',
da301a3301='$da301a3301',
da331a3601='$da331a3601',
da361a3901='$da361a3901',
da391a4201='$da391a4201',
da421a4501='$da421a4501',
da451a4801='$da451a4801'
where 
progr = '$progrw' ";
  #echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {$errore="Tipo InterventoMemorizzato Correttamente"; $ingranaggiox=2;} 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 
   

 $ingranaggio=11;   
 }  
 





if($ingranaggiox==20){ 
#echo "reg ".$regione;
$clientex=$_REQUEST["cliente"];
#echo "cli ".$cliente;
$commessa=$_REQUEST["commessa"];

$cat=$_REQUEST["cat"];
$comodo=explode(" - ",$clientex);
$codicecliente=$comodo[0];
#echo $codicecliente;
$comodo=explode(" - ",$commessa);
$codicecommessa=$comodo[0];
$comodo=explode(" - ",$cat);
$codicecat=$comodo[0];

$tipointervento1=$_REQUEST["tipointervento1"];
$materiale1=$_REQUEST["materiale1"];
$noteatt1=$_REQUEST["noteatt1"];
$tipofatta1=$_REQUEST["tipofatta1"];
$periodofatta1=$_REQUEST["periodofatta1"];
$caricoa1=$_REQUEST["caricoa1"];
$importoa1=$_REQUEST["importoa1"];
$giorno1=$_REQUEST["giorno1"];
$ora1=$_REQUEST["ora1"];
$numgiore1=$_REQUEST["numgiore1"];
$feriali1=$_REQUEST["feriali1"];
$daorafer1=$_REQUEST["daorafer1"];
$arafer1=$_REQUEST["arafer1"];
$sabato1=$_REQUEST["sabato1"];
$daorasab1=$_REQUEST["daorasab1"];
$arasab1=$_REQUEST["arasab1"];
$festivi1=$_REQUEST["festivi1"];
$daorafes1=$_REQUEST["daorafes1"];
$arafes1=$_REQUEST["arafes1"];
$numgior=$_REQUEST["numgior"];
$importogior=$_REQUEST["importogior"];
$importoa1=$_REQUEST["importoa1"];
$canone1=$_REQUEST["canone1"];
$da1a301=$_REQUEST["da1a301"];
$da31a601=$_REQUEST["da31a601"];
$da61a901=$_REQUEST["da61a901"];
$da91a1201=$_REQUEST["da91a1201"];
$da121a1501=$_REQUEST["da121a1501"];
$da151a1801=$_REQUEST["da151a1801"];
$da181a2101=$_REQUEST["da181a2101"];
$da211a2401=$_REQUEST["da211a2401"];
#echo "req ".$da211a2401;
$da241a2701=$_REQUEST["da241a2701"];
$da271a3001=$_REQUEST["da271a3001"];
$da301a3301=$_REQUEST["da301a3301"];
$da331a3601=$_REQUEST["da331a3601"];
$da361a3901=$_REQUEST["da361a3901"];
$da391a4201=$_REQUEST["da391a4201"];
$da421a4501=$_REQUEST["da421a4501"];
$da451a4801=$_REQUEST["da451a4801"];

$sql1 = "SELECT * FROM commesse  where commessa = '$codicecommessa' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $numero = $macrogruppo["progressivotipo"]; 
			} }
$numero++;
$sql = "UPDATE commesse set 
progressivotipo = '$numero'
where 
commessa = '$codicecommessa' 
";
#echo $sql;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 
      
$anno=date("y");
#echo $anno;
$numero=substr(str_repeat(0, 3).$numero, - 3);
  
#echo $commessa;  
$sql = "INSERT INTO tipointervento
( 
tipointervento,
commessa,
cliente,

login,

tipointervento1,
materiale1,
noteatt1,
tipofatta1,
periodofatta1,
caricoa1,
importoa1,
giorno1,
ora1,
numgiore1,
feriali1,
daorafer1,
arafer1,
sabato1,
daorasab1,
arasab1,
festivi1,
daorafes1,
arafes1,

canone1,
da1a301,
da31a601,
da61a901,
da91a1201,
da121a1501,
da151a1801,
da181a2101,
da211a2401,
da241a2701,
da271a3001,
da301a3301,
da331a3601,
da361a3901,
da391a4201,
da421a4501,
da451a4801,
numgior,
importogior

) 
VALUES ( 
'$numero',
'$codicecommessa',
'$codicecliente',

'$login',

'$tipointervento1',
'$materiale1',
'$noteatt1',
'$tipofatta1',
'$periodofatta1',
'$caricoa1',
'$importoa1',
'$giorno1',
'$ora1',
'$numgiore1',
'$feriali1',
'$daorafer1',
'$arafer1',
'$sabato1',
'$daorasab1',
'$arasab1',
'$festivi1',
'$daorafes1',
'$arafes1',

'$canone1',
'$da1a301',
'$da31a601',
'$da61a901',
'$da91a1201',
'$da121a1501',
'$da151a1801',
'$da181a2101',
'$da211a2401',
'$da241a2701',
'$da271a3001',
'$da301a3301',   
'$da331a3601',
'$da361a3901',
'$da391a4201',
'$da421a4501',
'$da451a4801',
'$numgior',
'$importogior'

)";
 # echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {$errore="Commessa ".$commessa." Memorizzata Correttamente";$ingranaggio=101; } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 
   

$ingranaggio=11;
  
 } 

if ($ingranaggio=="7")
{
$newdata=$_POST["newdata"];
$newdatasca=$_POST["newdatasca"];
$newoggetto=$_POST["newoggetto"];
$clientexx=$_POST["commessa"];
#echo "data ".$newdata." ogg ".$newoggetto." cli ".$clientexx; 

$uploadOk = 1;
if ($newdata=="") {echo " <b><font color='#FF0000'>**missing document date** </font></b>"; $uploadOk = 0;}
if ($newoggetto=="") {echo "<b><font color='#FF0000'>MANCA OGGETTO DEL DOCUMENTO OPPURE </font></b>"; $uploadOk = 0;}
$cliente=$_SESSION["SPICLIENTLOGGED"];
$nomefile=basename($_FILES["fileToUpload"]["name"]);
if ($nomefile=="") {echo "<b><font color='#FF0000'> MANCA DOCUMENTO DA CARICARE OPPURE </font></b>"; $uploadOk = 0;}
$lunghezza=strlen($nomefile);
$lunghezza=$lunghezza-4;
$nomefileparz=substr($nomefile, 0, $lunghezza);
$errorefile=strpos($nomefileparz, ' ');




$pieces = explode("/", $newdata);
$newdata=$pieces[2]."-".$pieces[1]."-".$pieces[0];
if ($pieces[2]=="0000"){$newdata=$oggix;}
$target_dir = "documenti/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$nomefile=basename($_FILES["fileToUpload"]["name"]);
$nomefile1=basename($_FILES["fileToUpload1"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if ($_FILES["fileToUpload"]["size"] > 1000000000) {
    echo "ATTENZIONE FILE TROPPO GRANDE.</font></b>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "pdf" && $imageFileType != "docx"  && $imageFileType != "txt" && $imageFileType != "csv"   && $imageFileType != "xlsx"
&& $imageFileType != "gif" ) {
    echo "<b><font color='#FF0000'> FILE NON DI TIPO  JPG, PDF, PNG, GIF, DOCX, TXT, CSV, XLSX QUINDI </font></b>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<b><font color='#FF0000'> OPERAZIONE ABORTITA.</font></b>";
// if everything is ok, try to upload file
} else {

$sql1 = "SELECT * FROM progressivofile  where progr = '1' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $tesseraww = $macrogruppo["numero"];	 
			} }
$tesseraww++;
$sql = "UPDATE progressivofile set 
numero = '$tesseraww'
where 
progr = '1' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 
    $estensione=explode(".",$nomefile);
$newfile=$tessera."-".$tesseraww.".".$estensione[1];
$target_dire = "documenti/";

$target_filee = $target_dire . $newfile;


    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_filee)) {
        #echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
$comodo=explode("-",$newdata);
$newdata=$comodo[2]."/".$comodo[1]."/".$comodo[0];


$newoggetto=str_replace("'", "\'", $newoggetto); 
       $sql = "INSERT INTO documenti
              (               
              tipodoc, 
              datadoc, 
              oggetto, 
              file,
              datasca) 
            VALUES (            
              '$clientexx',
              '$newdata', 
              '$newoggetto',
              '$newfile',
              '$newdatasca'
              )";
#echo  $sql;
  if ($conn->query($sql) === TRUE)
        { } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 

$ingranaggio=10; 
$modificatipo="";
 } }
}



#$importo=number_format($importo, 2);
$erroreriferimento="";
if ($ingranaggio==100)
   { 
$errore="";      
$sql = "Update commesse set                           
cliente='$cliente', 
attivita='$attivita', 
rif='$rif', 
dal='$dal', 
al='$al', 
ordine='$ordine', 
notegen='$notegen', 
sla='$sla', 
materiale='$materiale', 
copiecolore='$copiecolore', 
copieb='$copieb', 
noteatt='$noteatt', 
testo='$testo', 
tipofatta='$tipofatta', 
periodofatta='$periodofatta', 
caricoa='$caricoa', 
importoa='$importoa', 
tipofattp='$tipofattp', 
periodofattp='$periodofattp', 
caricop='$caricop', 
importop='$importop', 
login='$login',
nomecommessa='$nomecommessa',
commerciale='$commerciale',
pm='$pm'
where progr = '$progr' ";
#echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {$errore="Cliente Modificato Correttamente"; } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 
$clientew="Tutti";
$commessaw="";
$attivitaw="Tutte";
$ingranaggio=11;    
} 


?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>inserimento documenti</title>
<?php include("risorsePrincipali.php"); ?>
   
  
<script>
/*$(document).ready(function() {
    var table = $('#example').DataTable(
	{
	"paging": true,
	"order": [[ 0, "desc" ]],
	"lengthMenu": [ [-1, 10, 25, 50 ], ["Tutti i", 10, 25, 50 ] ],
	"language": {"search": "Cerca:", "lengthMenu": "Visualizza _MENU_ records per pagina",  "info": "Pagina _PAGE_ di _PAGES_",
				"paginate": {
				"first":      "Prima pagina",
				"last":       "Ultima pagina",
				"next":       "Prossima",
				"previous":   "Precedente"
    }}
	});
    new $.fn.dataTable.FixedHeader( table );
} );*/

function frame() {
var alt = $("#ingressiframe",  window.parent.document).height() + 2000 + "px";
var larg = $("#ingressiframe",  window.parent.document).width() - 15 + "px";
    var table = $('#tableFooter').DataTable(
	{
	
	"order": [[ 0, "desc" ]],
	"scrollCollapse": true,
	"paging": true,
	"lengthMenu": [ [ 25, -1,  10, 50 ], [25, "Tutti",  10, 50 ] ],
	"language": {"search": "Cerca:", "lengthMenu": "Visualizza _MENU_ records per pagina",  "info": "Pagina _PAGE_ di _PAGES_",
				"paginate": {
				"first":      "Prima pagina",
				"last":       "Ultima pagina",
				"next":       "Prossima",
				"previous":   "Precedente"
    }}
	});
   // new $.fn.dataTable.FixedHeader( table );
//} );
}

function framexx() {
var alt = $("#ingressiframexx",  window.parent.document).height() + 2000 + "px";
var larg = $("#ingressiframexx",  window.parent.document).width() - 15 + "px";
    var table = $('#tableFooterxx').DataTable(
	{
	
	"order": [[ 0, "asc" ]],
	"scrollCollapse": true,
	"paging": true,
	"lengthMenu": [ [ 25, -1,  10, 50 ], [25, "Tutti",  10, 50 ] ],
	"language": {"search": "Cerca:", "lengthMenu": "Visualizza _MENU_ records per pagina",  "info": "Pagina _PAGE_ di _PAGES_",
				"paginate": {
				"first":      "Prima pagina",
				"last":       "Ultima pagina",
				"next":       "Prossima",
				"previous":   "Precedente"
    }}
	});
   // new $.fn.dataTable.FixedHeader( table );
//} );
}

function larghezza() {
//var larg = $(window).width() - 350 + "px";
var larg = $("#ingressiframe",  window.parent.document).width() - 50 + "px";
//var alt = $("#statiframe",  window.parent.document).height() - 100 + "px";
//alert(alt);
$(".statisti").css("width", larg);
//$(".testa").css("width", larg);

}
function larghezzaxx() {
//var larg = $(window).width() - 350 + "px";
var larg = $("#ingressiframexx",  window.parent.document).width() - 50 + "px";
//var alt = $("#statiframe",  window.parent.document).height() - 100 + "px";
//alert(alt);
$(".statistixx").css("width", larg);
//$(".testa").css("width", larg);

}
</script>
<style>
.dataTables_filter {float:right !important;}

</style>  

</head>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Verdana:ital,wght@0,200;0,300;0,500;1,100&display=swap');
</style>
<style>
body {
  background-color: #e5e5e5;
}
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 0px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 350px;
  height: 160;
  background-color: #c0bff8;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
    border: 10px solid #99cf8c;
 box-shadow: 5px 10px 18px #1b5633;
  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
} 


.tooltipx {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltipx .tooltiptext {
  visibility: hidden;
  width: 400px;
  height: 700;
  background-color: #feaaaa;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  border: 3px solid #b0adad;
 box-shadow: 5px 10px 18px #1b5633;
  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltipx:hover .tooltiptext {
  visibility: visible;
}  
</style>
<style>
div#container {
min-width:   650px;
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
    color: #000000;
}
 
a:hover
{
    color: #0080FF;
}
.table6 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
background: #ffffff;
color: #656665;
border: 16px solid #B2CAEA;
border-radius: 20px;
}
.table6 th {
font-size: 18px;
padding: 10px;
}


</style>


<?php 


#echo $ingranaggio;
if($ingranaggio==33 or $ingranaggio==100){
#echo "ivax ".$ivax;

if ($clientew!="Tutti")
   {$selezionacliente= " and (cliente like '".$clientew."%"."'".") ";}
   else
   {$selezionacliente="";}




}
?>
<script language="javascript">

function xyz() {
var dataRilascio = document.form.dataoperazione.value;
var oggi = new Date();
var giorno = oggi.getDate();
var mese = oggi.getMonth() + 1;
var anno = oggi.getYear();
var datacompleta = giorno + "/" + mese + "/" + anno;

//controllo formato del mese
if (mese < 10) {
mese = "0" + mese;
}
// controllo sul valore del mese
if (mese > 12){
alert ("Il mese inserito non Ã„Â valido");
}
// controllo il formato del giorno
if (giorno < 10) {
giorno = "0" + giorno;
}
// controllo sul valore del giorno
if (giorno > 31){
alert("Il giorno non Ã„Â valido");
}

if (dataRilascio > datacompleta) {

let confirmAction = confirm("ATTENZIONE la data ha un valore maggiore del " +
datacompleta);
        if (confirmAction === true) {
        alert("Hai premuto OK");
         
        } else {
        dataoperazione.focus(); 
            return false; 
        }
}
}
</script>
<script type="text/javascript">
		
		function controllo(){ 
            with(document.modulo) { 
        
        if(nomecommessa.value=="") { 
            alert("Error: manca IL NOME DELLA COMMESSA"); 
            nomecommessa.focus(); 
            return false; 
                              }             

        if(dataoperazione.value=="") { 
            alert("Error: manca DATA DEL DOCUMENTO"); 
            dataoperazione.focus(); 
            return false; 
                              } 
                              
         if(ragsoc.value=="") { 
            alert("Error: manca RAGIONE SOCIALE"); 
            ragsoc.focus(); 
            return false; 
                              }  
         if(via.value=="") { 
            alert("Error: manca VIA"); 
            via.focus(); 
            return false; 
                              }  
         if(citta.value=="") { 
            alert("Error: manca CITTA'"); 
            citta.focus(); 
            return false; 
                              }               
          if(cap.value=="") { 
            alert("Error: manca CAP"); 
            cap.focus(); 
            return false; 
                              }                      
                              
          if(prov.value=="") { 
            alert("Error: manca PROVINCIA"); 
            prov.focus(); 
            return false; 
                              }                                                                                                   
          if(regione.value=="") { 
            alert("Error: manca REGIONE"); 
            regione.focus(); 
            return false; 
                              } 
          if(iva.value=="") { 
            alert("Error: manca IVA"); 
            iva.focus(); 
            return false; 
                              } 
                              
          if(acro.value=="") { 
            alert("Error: manca ACRONICO"); 
            acro.focus(); 
            return false; 
                              }                                         
                                                     
                                  } 
        } 
</script>

<body text="#000000" onLoad="larghezza(); frame(); larghezzaxx(); framexx(); "  >
<div align="center">   

<?php 
if($ingranaggiott==202){ 
$sql = "
DELETE from documenti where progr = '$prgrx'";
#echo $sql;
if ($conn->query($sql) === FALSE)
  {echo "errxx=errore";exit;}
  else
  {}
 } 


if($ingranaggio==10 or $ingranaggio==11){ 

#echo "ragsocxx ".$ragsocx;
#echo "ivax ".$ivax;
$sql = "SELECT *  FROM  commesse where  progr = '$progr' ";  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
     $progr = $macrogruppo["progr"];
     #echo "progrx ".$progr;
     $cliente = $macrogruppo["cliente"];
     $attivita = $macrogruppo["attivita"];
     $rif = $macrogruppo["rif"];
     $dal = $macrogruppo["dal"];
     $al = $macrogruppo["al"];
     
     $ordine = $macrogruppo["ordine"];
     $notegen = $macrogruppo["notegen"];
     $tipoattivita = $macrogruppo["tipoattivita"];
     $sla = $macrogruppo["sla"];
     $materiale = $macrogruppo["materiale"];
     
     $copiecolore = $macrogruppo["copiecolore"];
     $copieb = $macrogruppo["copieb"];
     $noteatt = $macrogruppo["noteatt"];
     $testo = $macrogruppo["testo"];
     $tipofatta = $macrogruppo["tipofatta"];
     
     $periodofatta = $macrogruppo["periodofatta"];
     $caricoa = $macrogruppo["caricoa"];
     $importoa = $macrogruppo["importoa"];
     $tipofattp = $macrogruppo["tipofattp"];
     $periodofattp = $macrogruppo["periodofattp"];
     
     $caricop = $macrogruppo["caricop"];
     $importop = $macrogruppo["importop"];
     $notefatt = $macrogruppo["notefatt"];
          
$nomecommessa = $macrogruppo["nomecommessa"]; 
$commerciale = $macrogruppo["commerciale"];
$pm = $macrogruppo["pm"];
$commessa = $macrogruppo["commessa"]; 

?>
<br>
<table align="center">
<tr>
<td align="left" width="50%" valign="top">                                                                          
<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data">
<table class="table-form "  style="text-align:left;">
              <tr>
            <td colspan="2" align="center" style=" border: 0x solid #949699;" ><font face="Verdana" color="#cc0000"  style="font-size: 14pt;font-family: Verdana;">Commessa <?php echo $commessa; ?></font></b>
            </td>            
            </tr> 
              <tr>
                <td colspan="2" align="center" style=" border: 1px solid #949699;background: #476b5d;"  ><font face="Verdana" color="#ffffff" style="font-size: 12pt;"><b>Riferimenti Generici &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>
               <font face="Verdana" color="#ffffff" style="font-size: 10pt;">(<i class="fa-solid fa-magnifying-glass" data-bs-toggle="modal" data-bs-target="#tipoInt" style="cursor:pointer"></i> Vedi Tipi di Intervento di questa Commessa) </font>
            </td>            
            </tr>
            
             <tr>
            <td colspan="1" width="43%" align="left" style=" border: 1px solid #949699;background: #476b5d;" ><font face="Verdana" color="#ffffff" style="font-size: 12pt;">Nome Commessa:</font>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="nomecommessa" value="<?php echo $nomecommessa; ?>" maxlength="60" size="56" style="background-color: #cac7c7; border: 0px; font-size: 12pt;">
            </td>
            </tr>
            
            <tr>
            <td colspan="1" align="left" width="220" style=" border: 1px solid #949699;" ><b><font face="Verdana" color="#000000" style="font-size: 10pt;">Cliente</font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <select size="1" name="cliente" style="background-color: #ececee">         
<?php
$sql = "SELECT *  FROM  clienti where codice = '$cliente' order by ragsoc ";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($macrogruppo = $result->fetch_assoc())	
	{       $ragsoc = $macrogruppo["ragsoc"];
            $codice = $macrogruppo["codice"];     
?>                 		
            <option value="<?php echo $codice; ?>"><?php echo $ragsoc; ?></option>          
<?php  }} ?>
            </select>
            </td>
            </tr>
            
			<tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt;" ><font face="Verdana" color="#000000">Attività : </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <select size="1" name="attivita" style="background-color: #ececee">          
<?php
$sql = "SELECT *  FROM  attivita  order by codice ";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($macrogruppo = $result->fetch_assoc())	
	{       $codice = $macrogruppo["codice"];
            $descrizione = $macrogruppo["descrizione"];     
?>                 		
            <option <? if($attivita==$codice){echo "selected";} ?>><?php echo $codice; ?></option>          
<?php  }} ?>
            </select>
            </td>
            </tr>
            
            <tr>
			<td align="left" valign="top" style=" border: 1px solid #949699;font-size: 10pt;" ><font face="Verdana" color="#000000">Riferimenti del Cliente: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <textarea style="background-color: #ececee" name="rif"  cols="57" rows="8"><?php echo $rif; ?></textarea></td>
            </tr>
            
            <tr>
            <td colspan="1" width="43%" align="left" style=" border: 1px solid #949699;" width="20%"><font face="Verdana" color="#000000" style="font-size: 10pt;">Contratto Dal:</font>
            </td>
            <td style=" border: 1px solid #949699;" ><input maxlength="10" type="text" name="dal" value="<?php echo $dal; ?>" autocomplete="off" id="popupDatepicker1" size="10" style="background-color: #cac7c7; border: 0px; font-size: 10pt;"><font face="Verdana" color="#000000"></font>
			</td>
            </tr>
            
             <tr>
            <td colspan="1" align="left" style=" border: 1px solid #949699;" ><font face="Verdana" color="#000000" style="font-size: 10pt;">Contratto Al:</font>
            </td>
            <td style=" border: 1px solid #949699;" ><input maxlength="10" type="text" name="al" value="<?php echo $al; ?>" autocomplete="off" id="popupDatepicker2" size="10" style="background-color: #cac7c7; border: 0px; font-size: 10pt;"><font face="Verdana" color="#000000"></font>
			</td>
            </tr>
            
            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #949699;" ><font face="Verdana" color="#000000" style="font-size: 10pt;">Ordine Cliente:</font>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="ordine" value="<?php echo $ordine; ?>" maxlength="60" size="56" style="background-color: #cac7c7; border: 0px; font-size: 12pt;">
            </td>
            </tr>
            
            <tr>
			<td align="left" valign="top" style=" border: 1px solid #949699;font-size: 10pt;" ><font face="Verdana" color="#000000">Note Generali: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <textarea style="background-color: #ececee" name="notegen"  cols="57" rows="8"><?php echo $notegen; ?></textarea></td>
            </tr>
            
            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #949699;" ><font face="Verdana" color="#000000" style="font-size: 10pt;">Commerciale SACI:</font>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="commerciale" value="<?php echo $commerciale; ?>" maxlength="60" size="56" style="background-color: #cac7c7; border: 0px; font-size: 12pt;">
            </td>
            </tr>
            
            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #949699;" ><font face="Verdana" color="#000000" style="font-size: 10pt;">PM SACI:</font>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="pm" value="<?php echo $pm; ?>" maxlength="60" size="56" style="background-color: #cac7c7; border: 0px; font-size: 12pt;">
            </td>
            </tr> 

                <?php if($ingranaggio==11){ ?>
                <tr>
				<td colspan="2" style="text-align: center; " >  
                
                 <input type="hidden" name="ingranaggio" value="100" />
                 <input type="hidden" name="login" value="<?php echo $login; ?>" />  
                 <input type="hidden" name="progr" value="<?php echo $progr; ?>" />                
                 <button  type="submit" class="btn btn-warning">Modifica Commessa</button>
                  </td>
                  </tr>
                  <?php } ?>
                                       
            </table>
</form>
    
</td>
<td align="right" valign="top" width="50%">
<p align="center"><font face="Verdana" size="4" color="#993300">Documenti Commessa</font></b></p><div align="center">    

<table class="table-form "  style="text-align:right;" width="100%">
		<tr>
		  
	  <td style="background-color:#476b5d;" width="15%" align="center"><font size="2" face="Verdana" color="#FFFFFF">DATA DOC.</td>
      <td style="background-color:#476b5d;" width="15%" align="center"><font size="2" face="Verdana" color="#FFFFFF">DATA SCAD.</td>
      <td style="background-color:#476b5d;" width="65%" align="center"><font size="2" face="Verdana" color="#FFFFFF">OGGETTO</td>
      <td colspan="2" style="background-color:#476b5d;" width="10%" align="center"><font size="2" face="Verdana" color="#FFFFFF">OPERAZIONI&nbsp;&nbsp;</td>
      </tr>   
<?
$sql = "SELECT * FROM documenti  where    tipodoc = '$commessa'";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
   $prgr = $macrogruppo["progr"];
   $data = $macrogruppo["datadoc"];
   $datasca = $macrogruppo["datasca"];
   $tipodoc = $macrogruppo["tipodoc"];
   $oggettox= $macrogruppo["oggetto"];
   #echo $oggettox.$oggetto;
   $file = $macrogruppo["file"];
?>
<tr onMouseOver="style.background='#c9cacb';" onMouseOut="style.background=''">

      
		<td  width="10%" align="center"><font size="2" face="Verdana" color="<?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>"><? echo $data; ?></td>
        <td  width="10%" align="center"><font size="2" face="Verdana" color="<?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>"><? echo $datasca; ?></td>
        
        <td style= width="57%" align="left"><font size="2" face="Verdana" color="<?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>"><? echo $oggettox; ?></td>
		<td style=" border: 0px solid black;" align="center" ><a  onclick="myFunction('?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&prgrx=<? echo $prgr; ?>&ingranaggio=10&ingranaggiott=201&prgry=<?php echo $prgr; ?>&progr=<?php echo $progr; ?>');"  ><img border="0" background="btn1.gif" src="occhio.png" width="25" height="25"></a></td>
        <td style=" border: 0px solid black;" align="center" >
<!--        <a  onclick="myFunction('?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&prgrx=<? echo $prgr; ?>&ingranaggio=10&ingranaggiott=202&oggetto=<?php echo $oggettox; ?>&progr=<?php echo $progr; ?>');"  ><img border="0" background="btn1.gif" src="x1.png" width="15" height="15"></a>   -->
        <a href="?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&prgrx=<? echo $prgr; ?>&ingranaggio=10&ingranaggiott=202&prgry=<?php echo $prgr; ?>&progr=<?php echo $progr; ?>"><button  onclick="return confirm('Sei sicuro di volere cancellare?')"><img border="0" src="x1.png" width="15" height="15"></button></a>
        </td>

        </tr>
<? }}
$oggiora=date("d/m/Y"); ?>
</table>

<p align="center"><font face="Verdana" size="4" color="#993300"><br><br>Inserimento Nuovo Documento Commessa</font></b></p><div align="center">    
<table class="table-form "  style="text-align:left;">
<form action="" method="post" enctype="multipart/form-data" >
		<tr>
        <td colspan="2">
        <table>
        <tr>
		<td colspan="1" align="left" width="25%" style=" border: 1px solid #949699;font-size: 10pt;" >
        <font face="Verdana" color="#000000" size="2" face="Verdana" color="#000000">Data Documento: &nbsp;</b></font>
		<font size="2" face="Verdana"> <input type="text" name="newdata" value="<?php echo $oggiora; ?>"  size="10"  style="background-color: #cac7c7; border: 0px; font-size: 12pt;"> </font></td>
        <td colspan="1" align="right" width="25%" style=" border: 1px solid #949699;font-size: 10pt;" >
        <font face="Verdana" color="#000000" size="2" face="Verdana" color="#000000">Data scadenza Documento: </b></font>
		<font size="2" face="Verdana"> <input type="text" name="newdatasca" value="31/12/9999"  size="10"  style="background-color: #cac7c7; border: 0px; font-size: 12pt;"> </font>        
        </td>
        </tr>
        </table>
        </td>
        </tr> 
        <tr>
		<td align="left" style=" border: 1px solid #949699;font-size: 10pt;"> <font size="2" face="Verdana" color="#000000">oggetto: </b></font>
		</td>
        <td><input type="text" name="newoggetto"   size="72"  placeholder="Inserisci qui' l'oggetto del documento che stai caricando(obbligatorio)" style="background-color: #cac7c7; border: 0px; font-size: 12pt;">
        </td>
        </tr>
	
		<tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt;">
       <font size="2" face="Verdana"><font color="#000000">Carica Documento:</b></font>
      </td>
	  <td align="left" ><font size="2" >
		 <input type="hidden" name="ingranaggio" value="7" />
         <input type="hidden" name="login" value="<? echo $login; ?>" />
         <input type="hidden" name="commessa" value="<? echo $commessa; ?>" />
         <input type="hidden" name="progr" value="<? echo $progr; ?>" />
		 <input type="file" name="fileToUpload" id="fileToUpload" size="150" style="font-size: 12pt; font-weight: normal; background-color: #cac7c7;font-family: Verdana;">
    </td>	
    </tr>
    <tr>
    <td> 
    <input type="submit" value="Memorizza" size="50" name="submit" style="font-size: 12pt; font-weight: normal; background-color: #cc0000; color: #ffffff;border: 0px;">
</form>
	</td>
<?php if($ingranaggiott==201){ ?>
	</tr>
    <tr>
    <td colspan="2" width="100%"><br>
<div>
<iframe  align="right" frameborder="0" width="100%" height="800" scrolling="yes" src="esponipdfffx.php?login=<?php echo $login; ?>&fl=<?php echo $fileh; ?>"></iframe> 
</div>    
    </td>
    </tr>
<?php } 

?>   
	</table> 
</td>
</tr>
<tr>
<td colspan="2" width="100%">              
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Tipo di Intervento di questa Commessa</font></b></p>

<div class="table-ticket-footer">
  <table id="tableFooterxx" class="display" cellspacing="0"  style="position:relative;">         
              <thead class="intesta">
    <tr class="testa">
      
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Codice</td>                              
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Tipo Intervento</td>
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Tipo fatturazione</td>        
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Periodicità Fatt.</td>
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >In Carico a</td>
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Modifica</td>
<!--            <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" ></td>		
            <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" ></td>	-->	
            </tr>                  
    </thead>
    <tbody>
<? 
$sql = "SELECT *  FROM  tipointervento  where commessa = '$commessa' and cliente = '$cliente'";  
#echo $sql;  

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{
$progry= $macrogruppo["progr"]; 
$commessay= $macrogruppo["commessa"]; 
$clientey= $macrogruppo["cliente"];       
$tipointervento= $macrogruppo["tipointervento"];        
$tipointervento1= $macrogruppo["tipointervento1"];
#echo $tipointervento1;
$materiale1= $macrogruppo["materiale1"];
$noteatt1= $macrogruppo["noteatt1"];
$tipofatta1= $macrogruppo["tipofatta1"];
$periodofatta1= $macrogruppo["periodofatta1"];
$caricoa1= $macrogruppo["caricoa1"];
$importoa1= $macrogruppo["importoa1"];
$giorno1= $macrogruppo["giorno1"];
$ora1= $macrogruppo["ora1"];
$numgiore1= $macrogruppo["numgiore1"];
$feriali1= $macrogruppo["feriali1"];
$daorafer1= $macrogruppo["daorafer1"];
$arafer1= $macrogruppo["arafer1"];
$sabato1= $macrogruppo["sabato1"];
$daorasab1= $macrogruppo["daorasab1"];
$arasab1= $macrogruppo["arasab1"];
$festivi1= $macrogruppo["festivi1"];
$daorafes1= $macrogruppo["daorafes1"];
$arafes1= $macrogruppo["arafes1"];
$numgior= $macrogruppo["numgior"];
$importogior= $macrogruppo["importogior"];
$importoa1= $macrogruppo["importoa1"];
$canone1= $macrogruppo["canone1"];
$da1a301= $macrogruppo["da1a301"];
$da31a601= $macrogruppo["da31a601"];
$da61a901= $macrogruppo["da61a901"];
$da91a1201= $macrogruppo["da91a1201"];
$da121a1501= $macrogruppo["da121a1501"];
$da151a1801= $macrogruppo["da151a1801"];
$da181a2101= $macrogruppo["da181a2101"];
$da211a2401= $macrogruppo["da211a2401"];
#echo "req ".$da211a2401;
$da241a2701= $macrogruppo["da241a2701"];
$da271a3001= $macrogruppo["da271a3001"];
$da301a3301= $macrogruppo["da301a3301"];
$da331a3601= $macrogruppo["da331a3601"];
$da361a3901= $macrogruppo["da361a3901"];
$da391a4201= $macrogruppo["da391a4201"];
$da421a4501= $macrogruppo["da421a4501"];
$da451a4801= $macrogruppo["da451a4801"];
?>    
	<tr >       
      <td   align="left" bgcolor="<? echo $colore; ?>"><?php echo $tipointervento; ?></td>
      <td   align="left" bgcolor="<? echo $colore; ?>"><?php echo $tipointervento1; ?></td>
      <td   align="left" bgcolor="<? echo $colore; ?>"><?php echo $tipofatta1; ?></td>
      <td   align="left" bgcolor="<? echo $colore; ?>"><?php echo $periodofatta1; ?></td>
      <td   align="left" bgcolor="<? echo $colore; ?>"><?php echo $caricoa1; ?></td> 
<!--      <td   align="center" ><a  href="?login=<?php echo $login; ?>&ingranaggiox=10&progr=<?php echo $progr; ?>&commessa=<? echo $commessa; ?>&cliente=<? echo $clientex; ?>"  ><img border="0" background="btn1.gif" src="occhio.png" width="20" height="20"></a></td> -->
<td   align="center" ><a  href="?login=<?php echo $login; ?>&ingranaggio=11&modificatipo=1&progr=<?php echo $progr; ?>&cerca=<? echo $progry; ?>&commessa=<? echo $commessa; ?>&cliente=<? echo $cliente; ?>"  ><img border="0" background="btn1.gif" src="pencil.png" width="20" height="20"></a></td>            
     </tr>	       
<? }}  ?>
</table>
<? 
#echo "mod ".$modificatipo;
if($modificatipo==1){
$sql = "SELECT *  FROM  tipointervento  where progr = '$cerca' ";  
#echo $sql;  
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{
$progry= $macrogruppo["progr"]; 
$commessay= $macrogruppo["commessa"]; 
$clientey= $macrogruppo["cliente"];       
$tipointervento= $macrogruppo["tipointervento"];        
$tipointervento1= $macrogruppo["tipointervento1"];
#echo $tipointervento1;
$materiale1= $macrogruppo["materiale1"];
$noteatt1= $macrogruppo["noteatt1"];
$tipofatta1= $macrogruppo["tipofatta1"];
$periodofatta1= $macrogruppo["periodofatta1"];
$caricoa1= $macrogruppo["caricoa1"];
$importoa1= $macrogruppo["importoa1"];
$giorno1= $macrogruppo["giorno1"];
$ora1= $macrogruppo["ora1"];
$numgiore1= $macrogruppo["numgiore1"];
$feriali1= $macrogruppo["feriali1"];
$daorafer1= $macrogruppo["daorafer1"];
$arafer1= $macrogruppo["arafer1"];
$sabato1= $macrogruppo["sabato1"];
$daorasab1= $macrogruppo["daorasab1"];
$arasab1= $macrogruppo["arasab1"];
$festivi1= $macrogruppo["festivi1"];
$daorafes1= $macrogruppo["daorafes1"];
$arafes1= $macrogruppo["arafes1"];
$numgior= $macrogruppo["numgior"];
$importogior= $macrogruppo["importogior"];
$importoa1= $macrogruppo["importoa1"];
$canone1= $macrogruppo["canone1"];
$da1a301= $macrogruppo["da1a301"];
$da31a601= $macrogruppo["da31a601"];
$da61a901= $macrogruppo["da61a901"];
$da91a1201= $macrogruppo["da91a1201"];
$da121a1501= $macrogruppo["da121a1501"];
$da151a1801= $macrogruppo["da151a1801"];
$da181a2101= $macrogruppo["da181a2101"];
$da211a2401= $macrogruppo["da211a2401"];
#echo "req ".$da211a2401;
$da241a2701= $macrogruppo["da241a2701"];
$da271a3001= $macrogruppo["da271a3001"];
$da301a3301= $macrogruppo["da301a3301"];
$da331a3601= $macrogruppo["da331a3601"];
$da361a3901= $macrogruppo["da361a3901"];
$da391a4201= $macrogruppo["da391a4201"];
$da421a4501= $macrogruppo["da421a4501"];
$da451a4801= $macrogruppo["da451a4801"];  
}} }
else
{
$tipointervento= "";        
$tipointervento1= "";
$materiale1= "";
$noteatt1= "";
$tipofatta1= "";
$periodofatta1= "";
$caricoa1= "";
$importoa1= "";;
$giorno1= "";
$ora1= "";
$numgiore1= "";
$feriali1= "";
$daorafer1= "";
$arafer1= "";
$sabato1= "";
$daorasab1= "";
$arasab1= "";
$festivi1= "";
$daorafes1= "";
$arafes1= "";
$numgior= "";
$importogior= "";
$importoa1= "";
$canone1= "";
$da1a301= "";
$da31a601= "";
$da61a901= "";
$da91a1201= "";
$da121a1501= "";
$da151a1801= "";
$da181a2101= "";
$da211a2401= "";
$da241a2701= "";
$da271a3001= "";
$da301a3301= "";
$da331a3601= "";
$da361a3901= "";
$da391a4201= "";
$da421a4501= "";
$da451a4801= ""; 
}
?>
<br>
<table align="center">
<tr>
<td align="left" width="50%" valign="top">                           
<table class="table-form "  style="text-align:left;">
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;"><? if($modificatipo==1){echo "Modifica Nuovo Intervento";} else {echo "Inserisci Nuovo Intervento";} ?></font></b></p>

<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data">   
<tr>
        <th colspan="2" class=" borted-top-table"> 
        Tipo Intervento:
        </th>          
</tr>

<tr>
      <td colspan="1" >
      <label>Denominazione:</label>
      <br>
      <input class="required" type="text" name="tipointervento1" id="tipointervento1" value="<?php echo $tipointervento1; ?>" maxlength="80" >            
      </td>
     
      <td colspan="1" >
      <label>Forniture Spare:</label>
      <br>
      <input type="text" name="materiale1" value="<?php echo $materiale1; ?>" maxlength="200" >
      </td>
</tr>
<tr>
	  <td colspan="2" > 
      <label>Note: </label> 
      <br>    
      <textarea style="background-color: #ececee" name="noteatt1"  cols="57" rows="4"><?php echo $noteatt1; ?></textarea></td>
      </td>
</tr>
<tr>
        <th colspan="2" class=" borted-top-table"> 
        Fatturazione Attiva:
        </th>          
</tr>            
<tr>
            <td colspan="1"> 
            <label>Tipo Fatturazione: </label>
            <br>
            <select class="required" size="1" name="tipofatta1" id="tipofatta1" >
<?
$sql = "SELECT * FROM tipofattura  order by descrizione";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ $descrizione = $macrogruppo["descrizione"]; ?>
      <option <? if($descrizione==$tipofatta1){echo "selected";}?>><? echo $descrizione; ?></option>
<? }} ?>            
            </td>

            <td colspan="1" >
            <label>Periodicità Fatt.:</label>
            <br>
            <select class="required" size="1" name="periodofatta1" id="periodofatta1" >
<?
$sql = "SELECT * FROM periodofat  order by descrizione";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ $descrizione = $macrogruppo["descrizione"]; ?>
      <option <? if($descrizione==$periodofatta1){echo "selected";}?>><? echo $descrizione; ?></option>
<? }} ?>                 
            </td>
</tr>           
<tr>
            <td colspan="1" >
            <label>In Carico a:</label>
            <input type="text" name="caricoa1" value="<?php echo $caricoa1; ?>" maxlength="200" >
            </td>

            <td colspan="1" >
            <label>Importo singolo ticket:</label>
            <input type="text" name="importoa1" value="<?php echo $importoa1; ?>" maxlength="200" >
            </td>
</tr>
<tr>
            <td colspan="2" >
            <label>Importo in canone:</label>
            <input type="text" name="canone1" value="<?php echo $canone1; ?>" maxlength="200" >
            </td>
</tr>
<tr>
            <td colspan="1" >
            <label>Num. Giornate:</label>
            <input type="text" name="numgior" value="<?php echo $numgior; ?>" maxlength="3" >
            </td>

            <td colspan="1" >
            <label>Importo Giornaliero:</label>
            <input type="text" name="importogior" value="<?php echo $importogior; ?>" maxlength="10" >
            </td>
</tr>
<tr>
            <th colspan="2" class=" borted-top-table"> 
            Determinazione Importi Attivi:
            </th> 
</tr>
</table>
                          
<table class="table-form "  style="text-align:left;">
<tr>
            <td colspan="2" align="center">TIME(minuti)</td>
            <td colspan="1" align="center">Tot.</td>
            <td colspan="2" align="center">Importo Ticket</td> 
                        
</tr>
<tr>            
            <td width="15%" align="center">1</td>
            <td width="15%" align="center">30</td>
            <td>Totale: <span id="tot-somma0"></span></td>
            <td><input type="number" name="da1a301"  id="da1a301" value="<?php echo $da1a301; ?>" onKeyup="total()" onClick="total()" maxlength="10" ></td>
            
</tr>
<tr>
            <td width="15%" align="center">31</td>
            <td width="15%" align="center">60</td>
            <td>Totale: <span id="tot-somma1"></span></td>
            <td><input type="number" name="da31a601" id="da31a601" value="<?php echo $da31a601; ?>"  onKeyup="total()" onClick="total()" maxlength="10" ></td>
           
</tr>
<tr>
            <td width="15%" align="center">61</td>
            <td width="15%" align="center">90</td>
            <td>Totale: <span id="tot-somma2"></span></td>
            <td><input type="number" name="da61a901" id="da61a901" value="<?php echo $da61a901; ?>"  onKeyup="total()" onClick="total()" maxlength="10" ></td>
          
</tr>
            
             <tr>
            <td width="15%" align="center">91</td>
            <td width="15%" align="center">120</td>
            <td>Totale: <span id="tot-somma3"></span></td>
            <td><input type="number" name="da91a1201" id="da91a1201" value="<?php echo $da91a1201; ?>"  onKeyup="total()" onClick="total()" maxlength="10"  ></td>
            
</tr>
            <tr>
            <td width="15%" align="center">121</td>
            <td width="15%" align="center">150</td>
            <td>Totale: <span id="tot-somma4"></span></td>
            <td><input type="number" name="da121a1501" id="da121a1501" value="<?php echo $da121a1501; ?>"  onKeyup="total()" onClick="total()" maxlength="10"  ></td>
          
            </tr>
            <tr>
            <td width="15%" align="center">151</td>
            <td width="15%" align="center">180</td>
            <td>Totale: <span id="tot-somma5"></span></td>
            <td><input type="number" name="da151a1801" id="da151a1801" value="<?php echo $da151a1801; ?>"  onKeyup="total()" onClick="total()" maxlength="10"  ></td>
            
</tr>
            
            
            <tr>
            <td width="15%" align="center">181</td>
            <td width="15%" align="center">210</td>
            <td>Totale: <span id="tot-somma6"></span></td>
            <td><input type="number" name="da181a2101" id="da181a2101" value="<?php echo $da181a2101; ?>"  onKeyup="total()" onClick="total()" maxlength="10"  ></td>
</tr>
            <tr>
            <td width="15%" align="center">211</td>
            <td width="15%" align="center">240</td>
            <td>Totale: <span id="tot-somma7"></span></td>
            <td><input type="number" name="da211a2401" id="da211a2401" value="<?php echo $da211a2401; ?>"  onKeyup="total()" onClick="total()"maxlength="10"  ></td>
          
</tr>
            <tr>
            <td width="15%" align="center">241</td>
            <td width="15%" align="center">270</td>
            <td>Totale: <span id="tot-somma8"></span></td>
            <td><input type="number" name="da241a2701" id="da241a2701" value="<?php echo $da241a2701; ?>"  onKeyup="total()" onClick="total()" maxlength="10"  ></td>
</tr>
            
             <tr>
            <td width="15%" align="center">271</td>
            <td width="15%" align="center">300</td>
            <td>Totale: <span id="tot-somma9"></span></td>
            <td><input type="number" name="da271a3001" id="da271a3001" value="<?php echo $da271a3001; ?>"  onKeyup="total()" onClick="total()" maxlength="10"  ></td>

</tr>
            <tr>
            <td width="15%" align="center">301</td>
            <td width="15%" align="center">330</td>
            <td>Totale: <span id="tot-somma10"></span></td>
            <td><input type="number" name="da301a3301" id="da301a3301" value="<?php echo $da301a3301; ?>"  onKeyup="total()" onClick="total()" maxlength="10"  ></td>
           
</tr>
            <tr>
            <td width="15%" align="center">331</td>
            <td width="15%" align="center">360</td>
            <td>Totale: <span id="tot-somma11"></span></td>
            <td><input type="number" name="da331a3601" id="da331a3601" value="<?php echo $da331a3601; ?>"  onKeyup="total()" onClick="total()" maxlength="10"  ></td>
            
</tr>
             <tr>
            <td width="15%" align="center">361</td>
            <td width="15%" align="center">390</td>
            <td>Totale: <span id="tot-somma12"></span></td>
            <td><input type="number" name="da361a3901" id="da361a3901" value="<?php echo $da361a3901; ?>"  onKeyup="total()" onClick="total()" maxlength="10" ></td>
           
</tr>
            
             <tr>
            <td width="15%" align="center">391</td>
            <td width="15%" align="center">420</td>
            <td>Totale: <span id="tot-somma13"></span></td>
            <td><input type="number" name="da391a4201" id="da391a4201" value="<?php echo $da391a4201; ?>"  onKeyup="total()" onClick="total()" maxlength="10"  ></td>
          
</tr>
            <tr>
            <td width="15%" align="center">421</td>
            <td width="15%" align="center">450</td>
            <td>Totale: <span id="tot-somma14"></span></td>
            <td><input type="number" name="da421a4501" id="da421a4501" value="<?php echo $da421a4501; ?>"  onKeyup="total()" onClick="total()" maxlength="10" ></td>
</tr>
            <tr>
            <td width="15%" align="center">451</td>
            <td width="15%" align="center">480</td>
            <td>Totale: <span id="tot-somma15"></span></td>
            <td><input type="number" name="da451a4801" id="da451a4801" value="<?php echo $da451a4801; ?>"  onKeyup="total()" onClick="total()" maxlength="10" ></td>
</tr>
           

            
           


            
</table>
<script>
tableInit();
 total();
 totalt();
</script>
<table class="table-form "  style="text-align:left;">            
<tr>
        <th colspan="2" class=" borted-top-table"> 
        SLA:
        </th>          
</tr>                
<tr>
            <td colspan="1" >
            <label>Giornate/Ore:</label>
            <td>
            <input style="width: 20px;  height: 20px;" type="checkbox" <?php if($giorno1=="on"){echo "checked";} ?>  name="giorno1" size="1" maxlength="">&nbsp;Giorno&nbsp;&nbsp;&nbsp;&nbsp;
            <input style="width: 20px;  height: 20px;" type="checkbox" <?php if($ora1=="on"){echo "checked";} ?>  name="ora1" size="1" maxlength="">&nbsp;Ora  
            </td>
</tr>            
<tr>
            <td colspan="1" align="left">
            <label>Numero Giornate/ore:</label>
            <td>
            <input type="text" name="numgiore1" value="<?php echo $numgiore1; ?>" maxlength="2">
            </td>
</tr>            
<tr>
            <td colspan="2" align="left"> 
            <label>Giornate:</label>
            </td>
</tr>  
</table>
<table class="table-form "  style="text-align:left;">           
<tr>            
            <td colspan="1" align="left" style="width: 33%;">
            <input style="width: 20px;  height: 20px;" type="checkbox" <?php if($feriali1=="on"){echo "checked";} ?>  name="feriali1" size="1" maxlength="">&nbsp;&nbsp;Feriali 
            </td>
            <td colspan="1" style="width: 33%;">
            da ora:
            <input type="text" name="daorafer1" value="<?php echo $daorafer1; ?>" maxlength="5" >
            </td>
            <td colspan="1" style="width: 33%;">
            a ora: 
            <input type="text" name="arafer1" value="<?php echo $arafer1; ?>" maxlength="5" >
            </td>
</tr>

<tr>            
            <td colspan="1" align="left" style="width: 33%;">
            <input style="width: 20px;  height: 20px;" type="checkbox" <?php if($sabato1=="on"){echo "checked";} ?>  name="sabato1" size="1" maxlength="">&nbsp;&nbsp;Sabato 
            </td>
            <td colspan="1" style="width: 33%;">
            da ora:
            <input type="text" name="daorasab1" value="<?php echo $daorasab1; ?>" maxlength="5" >
            </td>
            <td colspan="1" style="width: 33%;">
            a ora: 
            <input type="text" name="arasab1" value="<?php echo $arasab1; ?>" maxlength="5" >
            </td>
</tr>
<tr>            
            <td colspan="1" align="left" style="width: 33%;">
            <input style="width: 20px;  height: 20px;" type="checkbox" <?php if($festivi1=="on"){echo "checked";} ?>  name="festivi1" size="1" maxlength="">&nbsp;&nbsp;Festivi 
            </td>
            <td colspan="1" style="width: 33%;">
            da ora:
            <input type="text" name="daorafes1" value="<?php echo $daorafes1; ?>" maxlength="5" >
            </td>
            <td colspan="1" style="width: 33%;">
            a ora: 
            <input type="text" name="arafes1" value="<?php echo $arafes1; ?>" maxlength="5" >
            </td>
</tr>
            
            
           
<? if ($modificatipo==""){ ?>
<tr>       
    <td colspan="3" style="text-align: center; " >       
    <input type="hidden" name="ingranaggiox" value="20" />
    <input type="hidden" name="login" value="<?php echo $login; ?>" />  
    <input type="hidden" name="cliente" value="<?php echo $cliente; ?>" /> 
    <input type="hidden" name="commessa" value="<?php echo $commessa; ?>" />  
    <input type="hidden" name="nomecommessa" value="<?php echo $nomecommessa; ?>" /> 
    <input type="hidden" name="attivita" value="<?php echo $attivita; ?>" />  
    <input type="hidden" name="notegen" value="<?php echo $notegen; ?>" />
    <input type="hidden" name="commerciale" value="<?php echo $commerciale; ?>" />
    <input type="hidden" name="pm" value="<?php echo $pm; ?>" />
    <input type="hidden" name="ordine" value="<?php echo $ordine; ?>" />  
    <input type="hidden" name="rif" value="<?php echo $rif; ?>" />
    <input type="hidden" name="dal" value="<?php echo $dal; ?>" />
    <input type="hidden" name="al" value="<?php echo $al; ?>" />          
    <button  type="submit" class="btn btn-warning">Memorizza Tipo Intervento</button>
    </td> 
  </tr> 
<? } else { ?> 
<tr>       
    <td colspan="3" style="text-align: center; " >       
    <input type="hidden" name="ingranaggio" value="2000" />
    <input type="hidden" name="cerca" value="<?php echo $progry; ?>" /> 
    <input type="hidden" name="progr" value="<?php echo $progr; ?>" /> 
    <input type="hidden" name="login" value="<?php echo $login; ?>" /> 
    <input type="hidden" name="progrw" value="<?php echo $cerca; ?>" /> 
    <input type="hidden" name="cliente" value="<?php echo $cliente; ?>" /> 
    <input type="hidden" name="commessa" value="<?php echo $commessa; ?>" />  
    <input type="hidden" name="tipointervento" value="1" />        
    <button  type="submit" class="btn btn-warning">Modifica Tipo Intervento</button>
</tr>
<? } ?> 
</form>  
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</td>
<td align="left" width="50%" valign="top">

<? if ($modificatipo!=""){ ?>
<? $oggiora=date("d/m/Y"); 
$numerodoc=$numero;
?>
<p align="center"><font face="Verdana" size="4" style="font-family: Verdana;" color="#993300">Inserimento Nuovo Documento Tipo Intervento</font></b></p><div align="center">    

<table class="table-form">
<form action="" method="post" enctype="multipart/form-data" >
		<tr>
        <th colspan="1" class=" borted-top-table"> 
        Data Documento:
        </th>
        <th colspan="1" class=" borted-top-table"> 
        Scadenza Documento:
        </th>   
        </tr> 
        
         <tr>
    <td  colspan="1">
      <input class="required" type="text" name="newdata" value="<?php echo $oggiora; ?>"  size="10"  >    
      <td colspan="1"> 
      <input class="required" type="text" name="newdatasca" value="31/12/9999"  size="10"  >    
    </td>            
  </tr>
</table>


<table class="table-form">        
        <tr>
		<td colspan="2"> 
        <label style="color: #8e8b8b;">Oggetto:</label>
        <input class="required" type="text" id="newoggetto"  name="newoggetto"  maxlength="200" >
        </td>  
        </tr>
	
		<tr>
		<td colspan="2"> 
        <label style="color: #8e8b8b;">Scegli Documento:</label>	    
		 <input type="hidden" name="ingranaggioy" value="40" />
         <input type="hidden" name="login" value="<? echo $login; ?>" />
         <input type="hidden" name="ingranaggio" value="34" />
         <input type="hidden" name="cliente" value="<?php echo $cliente; ?>" />
         <input type="hidden" name="commessa" value="<?php echo $commessa; ?>" />
         <input type="hidden" name="progr" value="<?php echo $progrx; ?>" />
         <input type="hidden" name="tipointervento" value="<?php echo $tipointervento; ?>" /> 
		 <input class="required" type="file" name="fileToUpload" id="fileToUpload" size="150" >
         </td>	
         </tr>
         
         <tr>
         <td colspan="2">
         <label>Da riportare per ogni Ticket:</label>
          <select class="required" size="1" name="siticket" id="siticket" >
          <option <? if($siticketx=="NO"){echo "selected";}?>>NO</option>
          <option <? if($siticketx=="NO"){echo "selected";}?>>SI</option>     
         </td>
         </tr>
         
         
         
         <tr>
         <td colspan="2" style="text-align:center;"> 
         
    <input type="hidden" name="ingranaggio" value="11" />

    
    
    <input type="hidden" name="cerca" value="<?php echo $progry; ?>" /> 
    <input type="hidden" name="progr" value="<?php echo $progr; ?>" /> 
    <input type="hidden" name="commessa" value="<?php echo $commessa; ?>" />  
    <input type="hidden" name="nomecommessa" value="<?php echo $nomecommessa; ?>" /> 
                                  
    <input type="hidden" name="login" value="<?php echo $login; ?>" />    
    <input type="hidden" name="cliente" value="<?php echo $cliente; ?>" />

    <input type="hidden" name="modificatipo" value="1" />
    <input type="hidden" name="ingranaggiodocu" value="1" />                            
    <button class="btn btn-primary" type="submit" type="button" >Memorizza Documento</button>                  
     	 </td>
        </form>
        </tr>
        </table>
        <br>
<p align="center"><font face="Verdana" size="4" style="font-family: Verdana;" color="#993300">Lista Documenti Caricati Tipo Intervento</font></b></p>   

<table class="table-form">        
        <tr>
		<th colspan="1" class=" borted-top-table" width="10%"> 
        Data Doc.
        </th>
        <th colspan="1" class=" borted-top-table" width="10%"> 
        Scad. Doc.
        </th>
        <th colspan="1" class=" borted-top-table" width="5%"> 
        Ticket
        </th>
        <th colspan="1" class=" borted-top-table" width="65%"> 
        Oggetto
        </th>
        <th colspan="2" class=" borted-top-table" width="10%" style="text-align:center;"> 
        Operazioni
        </th>
        </tr> 
        
<?
$sql = "SELECT * FROM documenti  where    tipodoc = '$tipointervento'";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
   $prgrt = $macrogruppo["progr"];
   $data = $macrogruppo["datadoc"];
   $datasca = $macrogruppo["datasca"];
   $tipodoc = $macrogruppo["tipodoc"];
   $oggettox= $macrogruppo["oggetto"];
   $file = $macrogruppo["file"];
   $siticket = $macrogruppo["siticket"];
#echo $prgr;
?>
<tr>
<tr onMouseOver="style.background='#c9cacb';" onMouseOut="style.background=''">

    
		<td  style="color: <?php if($prgrt==$prgry){echo "#cc0000";}else{echo "#000000";} ?>;"><? echo $data; ?></td>
        <td  style="color: <?php if($prgrt==$prgry){echo "#cc0000";}else{echo "#000000";} ?>;"><? echo $datasca; ?></td>
        <td  align="center" style="color: <?php if($prgrt==$prgry){echo "#cc0000";}else{echo "#000000";} ?>;"><? echo $siticket; ?></td>
        <td  style="color: <?php if($prgrt==$prgry){echo "#cc0000";}else{echo "#000000";} ?>;"><? echo $oggettox; ?></td>
		<td style="text-align:center;">
        <a href="?fileh=<?php echo $file; ?>&modificatipo=1&ingranaggiovedi=201&ingranaggio=11&cerca=<?php echo $progry; ?>&progr=<? echo $progr; ?>&commessa=<?php echo $commessa; ?>&login=<?php echo $login; ?>&cliente=<?php echo $cliente; ?>" >
     
        <button type="button" class="btn btn-success" ><i class="fa-solid fa-plus"></i></button></a>
        </td>
        <td style="text-align:center;" >
        <a href="?fileh=<?php echo $file; ?>&ingranaggiocancelladoc=1&login=<?php echo $login; ?>&cliente=<?php echo $clientex; ?>&commessa=<? echo $commessa; ?>&ingranaggio=34&ingranaggiox=11&ingranaggioy=40&progr=<?php echo $progrx; ?>&prgr=<? echo $prgr; ?>" >
        <button type="button" class="btn btn-success" onclick="return confirm('Sei sicuro di volere cancellare?')"><i class="fa-solid fa-minus"></i></button></a>

</td>

     
        </tr>        
        
<? }} ?>        
        
        
</tr>               
<?php 
#echo "vedi ".$ingranaggiovedi;
if($ingranaggiovedi==201){ 
#echo "file ".$fileh."<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; exit;
?>

    <tr>
    <td colspan="6" ><br>
<div>
<iframe  align="center" frameborder="0" width="100%" height="1000" scrolling="yes" src="esponipdfffxx.php?login=<?php echo $login; ?>&fl=<?php echo $fileh; ?>"></iframe> 
</div>    
    </td>
    </tr>
<?php } 

?>   
	</table> 
</td>
</tr>
</table>

<? } ?>             
            <br>

</div>      





<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php    }}} 
#echo "ing ".$ingranaggio;

#echo "ing ".$ingranaggio;
?>
</tr>
</tr>
</table> 
</div allign="center">
<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data">
<br>
<table class="table-form "  style="text-align:left;">		
			
        
        <tr>
            <td width="40%" >Cliente: </td>
            <td >
            <select size="1" name="clientey" > 
            <option>Tutti</option>         
<?php
$sql = "SELECT *  FROM  clienti  order by ragsoc ";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($macrogruppo = $result->fetch_assoc())	
	{       $ragsoc = $macrogruppo["ragsoc"];
            $codice = $macrogruppo["codice"];     
?>                 		
            <option value="<?php echo $codice; ?>"><?php echo $ragsoc; ?></option>          
<?php  }} ?>
            </select>
            </td>		
        </tr>

          
       
        
        <tr>       
    <td colspan="2" style="text-align: center; " >       
    <input type="hidden" name="ingranaggiox" value="2" />
    <input type="hidden" name="ingranaggio" value="33" />
    <input type="hidden" name="login" value="<?php echo $login; ?>" />             
    <button  type="submit" class="btn btn-warning">Ricerca Commessa</button>
    </td> 
</form>
  </tr> 
              
            </table>
</form>     
</div>       
            <br>

<?php if($ingranaggio==33 or $ingranaggio == 100){ ?>
<div allign="center">
<table id="tableFooter" class="display" cellspacing="0" align="center" style="width:98%; position:relative;">         
             <thead class="intesta">
	<tr class="testa">
		 
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="2" face="Verdana" >Codice Commessa</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="2" face="Verdana" >Nome Commessa</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="2" face="Verdana" >Cliente</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="2" face="Verdana" >Attività </td>        
 
           <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="2" face="Verdana" >Commerciale SACI</td>
           <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="2" face="Verdana" >PM SACI</td>
                
         
                
            
          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="2" face="Verdana" >Oper.</td>
                   
          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="2" face="Verdana" >Oper.</td>
         </tr>       
	</thead>
	<tbody>
<?php    
$sql = "SELECT *  FROM  commesse where  progr != '' " 
        .$selezionacliente.
        " ORDER BY cliente";  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
    $progr = $macrogruppo["progr"];
     $commessaq = $macrogruppo["commessa"];
     $clienteq = $macrogruppo["cliente"];
     $attivitaq = $macrogruppo["attivita"];
     $rifq = $macrogruppo["rif"];
     $dalq = $macrogruppo["dal"];
     $alq = $macrogruppo["al"];
     
     $ordineq = $macrogruppo["ordine"];
     $notegenq = $macrogruppo["notegen"];
     $tipoattivitaq = $macrogruppo["tipoattivita"];
     $slaq = $macrogruppo["sla"];
     $materialeq = $macrogruppo["materiale"];
     
     $copiecoloreq = $macrogruppo["copiecolore"];
     $copiebq = $macrogruppo["copieb"];
     $noteattq = $macrogruppo["noteatt"];
     $testoq = $macrogruppo["testo"];
     $tipofattaq = $macrogruppo["tipofatta"];
     
     $periodofattaq = $macrogruppo["periodofatta"];
     $caricoaq = $macrogruppo["caricoa"];
     $importoaq = $macrogruppo["importoa"];
     $tipofattpq = $macrogruppo["tipofattp"];
     $periodofattpq = $macrogruppo["periodofattp"];
     
     $caricopq = $macrogruppo["caricop"];
     $importopq = $macrogruppo["importop"];
     $notefattq = $macrogruppo["notefatt"];
     

          
$nomecommessa = $macrogruppo["nomecommessa"];     
$commerciale = $macrogruppo["commerciale"];     
$pm = $macrogruppo["pm"];     
          
$sqlh = "SELECT *  FROM  clienti  where codice = '$clienteq' ";        
#echo $sql;
$resulth = $conn->query($sqlh);
if ($resulth->num_rows > 0) {
while($macrogruppoh = $resulth->fetch_assoc())	
	{       $ragsock = $macrogruppoh["ragsoc"];
            $codicek = $macrogruppoh["codice"];       
     
    }} 
     
     
?>     
	<tr >
        
      <td   align="left" bgcolor="<? echo $colore; ?>"><?php echo $commessaq; ?></td>
      <td   align="left" bgcolor="<? echo $colore; ?>"><?php echo $nomecommessa; ?></td>
      <td   align="left" bgcolor="<? echo $colore; ?>"><?php echo $ragsock; ?></td>
      <td   align="left" bgcolor="<? echo $colore; ?>"><?php echo $attivitaq; ?></td>

      <td   align="left" bgcolor="<? echo $colore; ?>"<?php echo $commerciale; ?></td>
      <td  s align="left" bgcolor="<? echo $colore; ?>"><?php echo $pm; ?></td>
      
     
      <td  align="center" ><a  href="cercacommessa1.php?login=<?php echo $login; ?>&progr=<?php echo $progr; ?>&ingranaggio=10"  ><img border="0" background="btn1.gif" src="occhio.png" width="20" height="20"></a></td>
      <td  align="center" ><a  href="cercacommessa1.php?login=<?php echo $login; ?>&progr=<?php echo $progr; ?>&ingranaggio=11"  ><img border="0" background="btn1.gif" src="pencil.png" width="20" height="20"></a></td>
     
     </tr>	     
<?php          
}
}
?>

 
     
          
     


</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<? } ?>

</div>
</div>
<!-- Modal -->
<div class="modal fade" id="tipoInt" tabindex="-1" aria-labelledby="tipoInt" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tipi di interventi della commessa <? echo $commessa; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php include("tipoint.php"); ?>
      </div>
     
    </div>
  </div>
</div>
<!-- FINE MODALE  -->
<script>
function myFunction(url) {
window.open(url, '_self');
}
</script>
<script>
function myFunctiony(url) {
window.open(url, '_self');
}
</script>
 <script>
(function() {
	var content =
		"<p><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzC_Ho_08G0m7PyxJOPLpPujM9UTLxvaE-5nXewscnqa3GMWjGwg' alt='Image result for summernote.js'></p><h1>Summernote</h1>";
	var $sumNote = $("#ta-1")
		.summernote({
			callbacks: {
				onPaste: function(e,x,d) {
					$sumNote.code(($($sumNote.code()).find("font").remove()));
				}
			},

			dialogsInBody: true,
			dialogsFade: true,
			disableDragAndDrop: true,
			//                disableResizeEditor:true,
			height: "250px",
            width: "500px",
			tableClassName: function() {
				//alert("tbl");
				$(this)
					.addClass("table table-bordered")

					.attr("cellpadding", 0)
					.attr("cellspacing", 0)
					.attr("border", 1)
					.css("borderCollapse", "collapse")
					.css("table-layout", "fixed")
					.css("width", "100%");

				$(this)
					.find("td")
					.css("borderColor", "#ccc")
					.css("padding", "4px");
			}
		})
		.data("summernote");

	//get
	$("#btn-get-content").on("click", function() {
		var y =$($sumNote.code());
	
		console.log(y[0]);console.log(y.find("p> font"));
	var x = y.find("font").remove();		
		$("#content").text($("#ta-1").val());
	});
	//get text$($sumNote.code()).find("font").remove()$($sumNote.code()).find("font").remove()
	$("#btn-get-text").on("click", function() {
		$("#content").html($($sumNote.code()).text());
	});
	//set
	$("#btn-set-content").on("click", function() {
		$sumNote.code(content);
	}); //reset
	$("#btn-reset").on("click", function() {
		$sumNote.reset();
		$("#content").empty();
	});
})();
tableInit();
 total();
 totalt();
function total(){
  var tot0 = 0 + Number($("#da1a301").val()) 
    $("#tot-somma0").html(tot0);
  var tot1 = 0 + Number($("#da1a301").val()) 
    + Number($("#da31a601").val()) 
    $("#tot-somma1").html(tot1);
  var tot2 = 0 + Number($("#da1a301").val()) 
    + Number($("#da31a601").val()) 
    + Number($("#da61a901").val())
    $("#tot-somma2").html(tot2);  
  var tot3 = 0 + Number($("#da1a301").val()) 
    + Number($("#da31a601").val()) 
    + Number($("#da61a901").val())
    + Number($("#da91a1201").val())
    $("#tot-somma3").html(tot3);  
   var tot4 = 0 + Number($("#da1a301").val()) 
    + Number($("#da31a601").val()) 
    + Number($("#da61a901").val())
    + Number($("#da91a1201").val())
    + Number($("#da121a1501").val())
    $("#tot-somma4").html(tot4);  
    var tot5 = 0 + Number($("#da1a301").val()) 
    + Number($("#da31a601").val()) 
    + Number($("#da61a901").val())
    + Number($("#da91a1201").val())
    + Number($("#da121a1501").val())
    + Number($("#da151a1801").val())
    $("#tot-somma5").html(tot5);
     var tot6 = 0 + Number($("#da1a301").val()) 
    + Number($("#da31a601").val()) 
    + Number($("#da61a901").val())
    + Number($("#da91a1201").val())
    + Number($("#da121a1501").val())
    + Number($("#da151a1801").val())
    + Number($("#da181a2101").val())
    $("#tot-somma6").html(tot6);
     var tot7 = 0 + Number($("#da1a301").val()) 
    + Number($("#da31a601").val()) 
    + Number($("#da61a901").val())
    + Number($("#da91a1201").val())
    + Number($("#da121a1501").val())
    + Number($("#da151a1801").val())
    + Number($("#da181a2101").val())
    + Number($("#da211a2401").val()) 
    $("#tot-somma7").html(tot7);
     var tot8 = 0 + Number($("#da1a301").val()) 
    + Number($("#da31a601").val()) 
    + Number($("#da61a901").val())
    + Number($("#da91a1201").val())
    + Number($("#da121a1501").val())
    + Number($("#da151a1801").val())
    + Number($("#da181a2101").val())
    + Number($("#da211a2401").val())
    + Number($("#da241a2701").val()) 
    $("#tot-somma8").html(tot8);
     var tot9 = 0 + Number($("#da1a301").val()) 
    + Number($("#da31a601").val()) 
    + Number($("#da61a901").val())
    + Number($("#da91a1201").val())
    + Number($("#da121a1501").val())
    + Number($("#da151a1801").val())
    + Number($("#da181a2101").val())
    + Number($("#da211a2401").val())
    + Number($("#da241a2701").val()) 
    + Number($("#da271a3001").val()) 
    $("#tot-somma9").html(tot9);
    var tot10 = 0 + Number($("#da1a301").val()) 
    + Number($("#da31a601").val()) 
    + Number($("#da61a901").val())
    + Number($("#da91a1201").val())
    + Number($("#da121a1501").val())
    + Number($("#da151a1801").val())
    + Number($("#da181a2101").val())
    + Number($("#da211a2401").val())
    + Number($("#da241a2701").val()) 
    + Number($("#da271a3001").val()) 
    + Number($("#da301a3301").val())
    $("#tot-somma10").html(tot10);
    var tot11 = 0 + Number($("#da1a301").val()) 
    + Number($("#da31a601").val()) 
    + Number($("#da61a901").val())
    + Number($("#da91a1201").val())
    + Number($("#da121a1501").val())
    + Number($("#da151a1801").val())
    + Number($("#da181a2101").val())
    + Number($("#da211a2401").val())
    + Number($("#da241a2701").val()) 
    + Number($("#da271a3001").val()) 
    + Number($("#da301a3301").val())
    + Number($("#da331a3601").val())
    $("#tot-somma11").html(tot11);
    var tot12 = 0 + Number($("#da1a301").val()) 
    + Number($("#da31a601").val()) 
    + Number($("#da61a901").val())
    + Number($("#da91a1201").val())
    + Number($("#da121a1501").val())
    + Number($("#da151a1801").val())
    + Number($("#da181a2101").val())
    + Number($("#da211a2401").val())
    + Number($("#da241a2701").val()) 
    + Number($("#da271a3001").val()) 
    + Number($("#da301a3301").val())
    + Number($("#da331a3601").val())
    + Number($("#da361a3901").val()) 
    $("#tot-somma12").html(tot12);
    var tot13 = 0 + Number($("#da1a301").val()) 
    + Number($("#da31a601").val()) 
    + Number($("#da61a901").val())
    + Number($("#da91a1201").val())
    + Number($("#da121a1501").val())
    + Number($("#da151a1801").val())
    + Number($("#da181a2101").val())
    + Number($("#da211a2401").val())
    + Number($("#da241a2701").val()) 
    + Number($("#da271a3001").val()) 
    + Number($("#da301a3301").val())
    + Number($("#da331a3601").val())
    + Number($("#da361a3901").val())
    + Number($("#da391a4201").val()) 
    $("#tot-somma13").html(tot13);
    var tot14 = 0 + Number($("#da1a301").val()) 
    + Number($("#da31a601").val()) 
    + Number($("#da61a901").val())
    + Number($("#da91a1201").val())
    + Number($("#da121a1501").val())
    + Number($("#da151a1801").val())
    + Number($("#da181a2101").val())
    + Number($("#da211a2401").val())
    + Number($("#da241a2701").val()) 
    + Number($("#da271a3001").val()) 
    + Number($("#da301a3301").val())
    + Number($("#da331a3601").val())
    + Number($("#da361a3901").val())
    + Number($("#da391a4201").val()) 
    + Number($("#da421a4501").val())
    $("#tot-somma14").html(tot14);
    var tot15 = 0 + Number($("#da1a301").val()) 
    + Number($("#da31a601").val()) 
    + Number($("#da61a901").val())
    + Number($("#da91a1201").val())
    + Number($("#da121a1501").val())
    + Number($("#da151a1801").val())
    + Number($("#da181a2101").val())
    + Number($("#da211a2401").val())
    + Number($("#da241a2701").val()) 
    + Number($("#da271a3001").val()) 
    + Number($("#da301a3301").val())
    + Number($("#da331a3601").val())
    + Number($("#da361a3901").val())
    + Number($("#da391a4201").val()) 
    + Number($("#da421a4501").val())
    + Number($("#da451a4801").val());
    $("#tot-somma15").html(tot15); 
      
  var tot = 0 + Number($("#da1a301").val()) 
    + Number($("#da31a601").val()) 
    + Number($("#da61a901").val())
    + Number($("#da91a1201").val()) 
    + Number($("#da121a1501").val()) 
    + Number($("#da151a1801").val())
    + Number($("#da181a2101").val()) 
    + Number($("#da211a2401").val()) 
    + Number($("#da241a2701").val())
    + Number($("#da271a3001").val()) 
    + Number($("#da301a3301").val())
    + Number($("#da331a3601").val())
    + Number($("#da361a3901").val()) 
    + Number($("#da391a4201").val()) 
    + Number($("#da421a4501").val())
    + Number($("#da451a4801").val());
     console.log(tot);

  $("#tot-somma").html(tot);
}

function totalt(){
  var tott = 0 + Number($("#p1").val()) 
    + Number($("#p2").val()) 
    + Number($("#p3").val())
    + Number($("#p4").val()) 
    + Number($("#p5").val()) 
    + Number($("#p6").val())
    + Number($("#p7").val()) 
    + Number($("#p8").val()) 
    + Number($("#p9").val())
    + Number($("#p10").val()) 
    + Number($("#p11").val())
    + Number($("#p12").val())
    + Number($("#p13").val()) 
    + Number($("#p14").val()) 
    + Number($("#p15").val())
    + Number($("#p16").val());
     console.log(tott);

  $("#tot-sommat").html(tott);
}


</script>
</body>

</html>