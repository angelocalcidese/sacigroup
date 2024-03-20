<?php
session_start(); if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){ $larg= $_SESSION['screen_width'] ; $alt= $_SESSION['screen_height']; } else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) { $_SESSION['screen_width'] = $_REQUEST['width']; $_SESSION['screen_height'] = $_REQUEST['height']; header('Location: ' . $_SERVER['PHP_SELF']); } else { echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width+"&height="+screen.height;</script>'; } 

include "conf_DB.php";
$ingranaggio=$_REQUEST["ingranaggio"];
if($ingranaggio==""){$ingranaggio=400;}
$ingranaggioy=$_REQUEST["ingranaggioy"];
$ingranaggiott=$_REQUEST["ingranaggiott"];
$ingranaggiohh=$_REQUEST["ingranaggiohh"];
$login=$_REQUEST["login"];
#echo "l ".$login;
$fileh=$_REQUEST["fileh"];
$progrx=$_REQUEST["progrx"];



/*
$swce=0;
$comodoprogr="";
$sql = "SELECT * FROM loginluogo  where    login = '$login'";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
   $comodoprogr = $macrogruppo["comodoprogr"];
   $swce=1;
   }}
if($swce==0){
 $sql = "INSERT INTO loginluogo 
        (login) 
        VALUES ( 
        '$login')";
             if ($conn->query($sql) === TRUE)
             {  }
             else { echo $sql."Errore inserimento recoerd: " . $conn->error; exit;}
}  
*/ 
$errore=$_REQUEST["errore"];
$numero=$_REQUEST["numero"];
#echo "num ".$numero;
$cliente=$_REQUEST["cliente"];
$clienteintero=$_REQUEST["clienteintero"];
$commessa=$_REQUEST["commessa"];
$attivita=$_REQUEST["attivita"];
#echo "att ".$attivita;
$ticketcli=$_REQUEST["ticketcli"];
$datainizio=$_REQUEST["datainizio"];
#$orainizio=$_REQUEST["orainizio"];
$tipointervento=$_REQUEST["tipointervento"];
#echo "ti ".$tipointervento;
$apparato=$_REQUEST["apparato"];
$seriale=$_REQUEST["seriale"];
$insegna=$_REQUEST["insegna"];
$ragsoc=$_REQUEST["ragsoc"];
$indirizzo=$_REQUEST["indirizzo"];
$cap=$_REQUEST["cap"];
$prov=$_REQUEST["prov"];
$citta=$_REQUEST["citta"];
$telefono=$_REQUEST["telefono"];
$contatto=$_REQUEST["contatto"];
$intervento=$_REQUEST["intervento"];
$serialeparte=$_REQUEST["serialeparte"];
$nomeparte=$_REQUEST["nomeparte"];
$spedizione=$_REQUEST["spedizione"];
$notesla=$_REQUEST["notesla"];
$nota=$_REQUEST["nota"];
$dataapp=$_REQUEST["dataapp"];
$notaapp=$_REQUEST["notaapp"];
$id=$_REQUEST["id"];
$progrnew=$_REQUEST["progrnew"];
$priorita=$_REQUEST["priorita"];
$note=$_REQUEST["note"];
$impatt=$_REQUEST["impatt"];
$abbona=$_REQUEST["abbona"];
$imppass=$_REQUEST["imppass"];
$notaamm=$_REQUEST["notaamm"];




if($ingranaggio==400){
$copia=$_REQUEST["copia"];
$copia="1323";
$duplicato=$copia;
$sql = "SELECT *  FROM  tk where  numero  = '$copia' " ;  
#  echo $sql;
  $rCount = 1;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())	
    { 
      $progrxxy = $macrogruppo["progr"];
      $numeroxx = $macrogruppo["numero"];

      $clientexx = $macrogruppo["cliente"];
      $commessaxx = $macrogruppo["commessa"];
      $attivita = $macrogruppo["attivita"];

      $tipointervento = $macrogruppo["tipointervento"];
      $apparato = $macrogruppo["apparato"];
      $priorita = $macrogruppo["priorita"];


	  $spedizione = $macrogruppo["spedizione"];
	  $notesla = $macrogruppo["notesla"];
	  $nota = $macrogruppo["nota"];
	  $notaapp = $macrogruppo["notaapp"];
      $impatt = $macrogruppo["impatt"];
      $abbona = $macrogruppo["abbona"];
      $imppass = $macrogruppo["imppass"];
      $notaamm = $macrogruppo["notaamm"];
      
      $intervento = $macrogruppo["intervento"];
  $sqlx = "SELECT *  FROM  tkluogo where  numero  = '$numeroxx' " ;  
  #echo $sql;
  $rCount = 1;
  $resultx = $conn->query($sqlx);
  if ($resultx->num_rows > 0) {
    while($macrogruppox = $resultx->fetch_assoc())	
    {   
      $insegna = $macrogruppox["insegna"];
      $ragsoc = $macrogruppox["ragsoc"];
      $indirizzo = $macrogruppox["indirizzo"];
      $cap = $macrogruppox["cap"];
      $prov = $macrogruppox["prov"];
      $citta = $macrogruppox["citta"];
      $contatto = $macrogruppox["contatto"];
      $telefono = $macrogruppox["telefono"];
      $note = $macrogruppox["note"];
      }}
  $sqlx = "SELECT *  FROM  clienti where  codice  = '$clientexx' " ;  
  #echo $sql;
  $rCount = 1;
  $resultx = $conn->query($sqlx);
  if ($resultx->num_rows > 0) {
    while($macrogruppox = $resultx->fetch_assoc())	
    {   
      $ragsocclixx = $macrogruppox["ragsoc"];
      $codxx = $macrogruppox["codice"];
      $clienteintero=$codxx." - ".$ragsocclixx;
      }}     
  $sqlx = "SELECT *  FROM  commesse where  commessa  = '$commessaxx' " ;  
  #echo $sql;
  $rCount = 1;
  $resultx = $conn->query($sqlx);
  if ($resultx->num_rows > 0) {
    while($macrogruppox = $resultx->fetch_assoc())	
    {   
      $nomecommessaxx = $macrogruppox["nomecommessa"];
      $commessa=$commessaxx." - ".$nomecommessaxx;
      }}        
}}






#echo "copia ".$copia; exit;
}

if($ingranaggio==100){
$clientex=$_REQUEST["cliente"];
}
if($ingranaggio==200){
$clientex=$_REQUEST["cliente"];
$commessax=$_REQUEST["commessasel"];
}

$erroreFileMessage = '<div class="alert alert-danger d-flex align-items-center" role="alert" style="width: 85%; margin: auto;">
<i class="fa-solid fa-triangle-exclamation"></i>
<div>
<ul>';
$fileNumError = 0;

if ($ingranaggio=="7") {
$newdata=$_POST["newdata"];
$newdatasca=$_POST["newdatasca"];
$newoggetto=$_POST["newoggetto"];
$clientexx=$_POST["numero"];
#echo "data ".$newdata." ogg ".$newoggetto." cli ".$clientexx; 

$uploadOk = 1;


if ($newdata=="") {
  //echo " <b><font color='#FF0000'>**missing document date** </font></b>"; $uploadOk = 0;
  $erroreFileMessage .= '<li>Non è stato caricato alcun documeto</li>';
  $fileNumError = $fileNumError + 1;
}
if ($newoggetto=="") {
  //echo "<b><font color='#FF0000'>MANCA OGGETTO DEL DOCUMENTO OPPURE </font></b>"; $uploadOk = 0;
  $erroreFileMessage .= '<li>Manca Oggetto nel documento</li>';
  $fileNumError = $fileNumError + 1;
}
$cliente=$_SESSION["SPICLIENTLOGGED"];
$nomefile=basename($_FILES["fileToUpload"]["name"]);
if ($nomefile=="") {
  //echo "<b><font color='#FF0000'> MANCA DOCUMENTO DA CARICARE OPPURE </font></b>"; $uploadOk = 0;
  $erroreFileMessage .= '<li>Nessun Documento caricato</li>';
  $fileNumError = $fileNumError + 1;
}
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
    //echo "ATTENZIONE FILE TROPPO GRANDE.</font></b>";
    $erroreFileMessage .= '<li>File Troppo grande</li>';
    $fileNumError = $fileNumError + 1;
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "pdf" && $imageFileType != "docx"  && $imageFileType != "txt" && $imageFileType != "csv"   && $imageFileType != "xlsx"
&& $imageFileType != "gif" ) {
    //echo "<b><font color='#FF0000'> FILE NON DI TIPO  JPG, PDF, PNG, GIF, DOCX, TXT, CSV, XLSX QUINDI </font></b>";
    $erroreFileMessage .= '<li>Formato file errato (accettati: .jpg, .pdf, .png, gif, .docx, .txt, .csv, .xlsx)</li>';
    $fileNumError = $fileNumError + 1;
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($fileNumError == 0) {

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
              '$numero',
              '$newdata', 
              '$newoggetto',
              '$newfile',
              '$newdatasca'
              )";
#echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {
        $dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$numero',
        '$dataoggi',
        'Memorizzato nuovo Documento',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
         } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 
#echo "passo"; exit;
$ingranaggio=300;
#echo "in ".$ingranaggio;
$ingranaggioy=1;  
 } }

 
}
$erroreFileMessage .= '</div></div>';
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>nuovo cat</title>
<?php include("risorsePrincipali.php"); ?>
<script>
function frame() {
var alt = $("#ingressiframe",  window.parent.document).height() + 2000 + "px";
var larg = $("#ingressiframe",  window.parent.document).width() - 15 + "px";
    var table = $('#tableFooter').DataTable(
	{
	
	"order": [[ 0, "desc" ]],
	"scrollCollapse": true,
	"paging": true,
	"lengthMenu": [ [ 10, -1,  25, 50 ], [10, "Tutti",  25, 50 ] ],
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
var larg = $("#ingressiframe",  window.parent.document).width() - 25 + "px";
//var alt = $("#statiframe",  window.parent.document).height() - 100 + "px";
//alert(alt);
$(".statisti").css("width", larg);
//$(".testa").css("width", larg);

}

 function aggiorna(sel){
  var f = document.form;
  f.sel_value.value = sel.options[sel.selectedIndex].value;
  f.sel_text.value = sel.options[sel.selectedIndex].text;
 }

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
function MM_openBrWindow(theURL,winName,features) { //v2.0
let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
width=0,height=0,left=-1000,top=-1000`;
  window.open(theURL,winName,features,params);
}
//-->
$(function(){
  $('#dateOp').datepicker({
    language: "it",
    autoclose: true,
    todayHighlight: true,
    dateFormat: 'dd/mm/yy'
  });
});
</script>

<?php 

$login=$_REQUEST["login"];



#$importo=number_format($importo, 2);
$erroreriferimento="";
if($ingranaggio==300 and $ingranaggioy==""){
$duplicato=$_REQUEST["duplicato"];
#echo $duplicato; exit;
$clienteintero=$_REQUEST["cliente"];
$clientex=$_REQUEST["cliente"];
$comodo=explode(" - ",$clientex);
$clientex=$comodo[0];
$commessax=$_REQUEST["commessa"];
$comodo=explode(" - ",$commessax);
$commessax=$comodo[0];

if($ingranaggiohh!=1){
$errore="";   
$sql1 = "SELECT * FROM progressivotk  where progr = '1' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $numero = $macrogruppo["numero"];	 
			} }
$numero++;
$sql = "UPDATE progressivotk set 
numero = '$numero'
where 
progr = '1' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; }   
$codice=$acro."-".$numero;  
$adesso=date("Y-m-d H:m:s");    
$sql = "INSERT INTO tk
( 
numero,
cliente,
commessa,
attivita,
ticketcli,
datainizio,
tipointervento,
apparato,
seriale,
intervento,
serialeparte,
nomeparte,
spedizione,
notesla,
nota,
dataapp,
notaapp,
login,
aggiornamento,
priorita,
impatt,
abbona,
imppass,
notaamm
) 
VALUES ( 
'$numero',
'$clientex',
'$commessax',
'$attivita',
'$ticketcli',
'$datainizio',
'$tipointervento',
'$apparato',
'$seriale',
'$intervento',
'$serialeparte',
'$nomeparte',
'$spedizione',
'$notesla',
'$nota',
'$dataapp',
'$notaapp',
'$login',
'$adesso',
'$priorita',
'$impatt',
'$abbona',
'$imppass',
'$notaamm' 
)";
  #echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {
        $dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$numero',
        '$dataoggi',
        'Memorizzato nuovo Ticket',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
        $errore="Ticket ".$numero." Memorizzato Correttamente "; } 
        else { echo $sql."Errore inserimento record: " . $conn->error; exit;}
$sql = "UPDATE tk set 
        stato = 'Aperto'
        where 
        numero = '$numero' 
        ";
        if ($conn->query($sql) === TRUE)
          { } 
          else { echo "Error inserted record: " . $conn->error; }                       
} else
{
#echo "comm".$commessa; exit;

$numero=$_REQUEST["numero"];
$adesso=date("Y-m-d H:m:s"); 
#echo "numeo".$numero; exit;
$sql = "UPDATE tk set 
cliente='$clientex',
commessa='$commessax',
attivita='$attivita',
ticketcli='$ticketcli',
datainizio='$datainizio',
tipointervento='$tipointervento',
apparato='$apparato',
seriale='$seriale',
intervento='$intervento',
serialeparte='$serialeparte',
nomeparte='$nomeparte',
spedizione='$spedizione',
notesla='$notesla',
nota='$nota',
dataapp='$dataapp',
notaapp='$notaapp',
login='$login',
aggiornamento='$adesso',
priorita='$priorita',
impatt='$impatt',
abbona='$abbona',
imppass='$imppass',
notaamm='$notaamm'
where 
numero = '$numero' 
";
#echo $sql;
if ($conn->query($sql) === TRUE)
    {
    $dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$numero',
        '$dataoggi',
        'Modifica Ticket',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
    $errore="Ticket ".$numero." Modificato Correttamente "; } 
    else { echo "Error inserted record: " . $conn->error; exit;}



}        

  
        
if($progrnew!=""){
$sql = "UPDATE luogo set 
insegna = '$insegna',
ragsoc='$ragsoc',
indirizzo='$indirizzo',
cap='$cap',
prov='$prov',
citta='$citta',
contatto='$contatto',
telefono='$telefono',
note='$note'
where 
progr = '$progrnew' 
";
#echo $sql;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; exit;}  }
else {
if($insegna=="" and $ragsoc=="" ){} else {
$swce=0;
$sql1 = "SELECT * FROM luogo where insegna = '$insegna' and ragsoc = '$ragsoc'  ";
#echo $sql1;
    $result = $conn->query($sql1);
   
    if ($result->num_rows > 0) {
        while($macrogruppo = $result->fetch_assoc()) 
            { $swce=1;} }
#echo "sw ".$swce;
if($swce==0){
 $sql = "INSERT INTO luogo
        (insegna,
        ragsoc,
        indirizzo,
        cap,
        citta,
        contatto,
        telefono,
        prov,
		note) 
        VALUES ( 
        '$insegna',
        '$ragsoc',
        '$indirizzo',
        '$cap',
        '$citta',
        '$contatto',
        '$telefono',
        '$prov',
		'$note')";
             if ($conn->query($sql) === TRUE)
             {  }
             else { echo $sql."Errore inserimento recoerd: " . $conn->error; exit;}
             
   
             
} }  } 
    
$sql = "INSERT INTO tkluogo
( 
numero,
insegna,
ragsoc,
indirizzo,
cap,
prov,
citta,
telefono,
contatto,
note) 
VALUES ( 
'$numero',
'$insegna',
'$ragsoc',
'$indirizzo',
'$cap',
'$prov',
'$citta',
'$telefono',
'$contatto',
'$note'
)";
  #echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {} 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; exit;} 
       
$swce=0;
$sql1 = "SELECT * FROM apparati where nome = '$apparato'   ";
#echo $sql1;
    $result = $conn->query($sql1);
   
    if ($result->num_rows > 0) {
        while($macrogruppo = $result->fetch_assoc()) 
            { $swce=1;} }
#echo "sw ".$swce;
if($swce==0){    
$adesso=date("Y-m-d H:m:s");         
$sql = "INSERT INTO apparati
        (nome,
        login,
        datainserimento) 
        VALUES ( 
        '$apparato',
        '$login',
        '$adesso')";
#echo $sql; exit;        
             if ($conn->query($sql) === TRUE)
             {  }
             else { echo $sql."Errore inserimento recoerd: " . $conn->error; exit;} 
            
             
} 
if($duplicato!=""){
$adesso=date("Y-m-d H:m:s"); 
$sql = "SELECT * FROM documenti  where    tipodoc = '$duplicato'";        
  #echo $sql;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())	
    { 
    $prgrrr = $macrogruppo["progr"];
    $data = $macrogruppo["datadoc"];
    $datasca = $macrogruppo["datasca"];
    $tipodoc = $macrogruppo["tipodoc"];
    $oggettox= $macrogruppo["oggetto"];
    $file = $macrogruppo["file"];            
$sqlr = "INSERT INTO documenti
              (               
              tipodoc, 
              datadoc, 
              oggetto, 
              file,
              datasca) 
            VALUES (            
              '$numero',
              '$data', 
              '$oggetto',
              '$file',
              '$datasca'
              )";
#echo $sql; exit;
  if ($conn->query($sqlr) === TRUE)
        {
        $dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$numero',
        '$dataoggi',
        'Memorizzato nuovo Documento',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
         } 
        else { echo $sqlr."Errore inserimento recoerd: " . $conn->error; }                         
}}
$sql = "SELECT *  FROM  tk where  numero  = '$duplicato' " ;  
#  echo $sql;
  $rCount = 1;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())	
    { 
      $statoff = $macrogruppo["stato"];
    }}
if($statoff!="Aperto"){
$assegnatooggi="";
$sql = "SELECT *  FROM  assegnato where  numero  = '$duplicato' " ;  
#  echo $sql;
  $rCount = 1;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())	
    { 
    $ragsocass = $macrogruppo["ragsoc"];
$sqlr = "INSERT INTO assegnato
              (       
              numero, 
              dataassegno, 
              ragsoc, 
              login) 
            VALUES (            
              '$numero',
              '$adesso', 
              '$ragsocass',
              '$login'
              )";
#echo $sql; exit;
  if ($conn->query($sqlr) === TRUE)
        {
        $dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$numero',
        '$dataoggi',
        'Memorizzato Assegnazione a 3PP',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
         } 
        else { echo $sqlr."Errore inserimento recoerd: " . $conn->error; } 
$assegnatooggi=1;             
    }}
$sql = "SELECT *  FROM  assegnatotec where  numero  = '$duplicato' " ;  
#  echo $sql;
  $rCount = 1;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())	
    { 
    $ragsocass = $macrogruppo["ragsoc"];
$sqlr = "INSERT INTO assegnatotec
              (       
              numero, 
              dataassegno, 
              ragsoc, 
              login) 
            VALUES (            
              '$numero',
              '$adesso', 
              '$ragsocass',
              '$login'
              )";
#echo $sql; exit;
  if ($conn->query($sqlr) === TRUE)
        {
        $dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$numero',
        '$dataoggi',
        'Memorizzato nuovo Assegnamento a Tecnico',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
         } 
        else { echo $sqlr."Errore inserimento recoerd: " . $conn->error; }  
$assegnatooggi=1;             
    }}
if($assegnatooggi==1){
$sql = "UPDATE tk set 
        stato = 'Assegnato'
        where 
        numero = '$numero' 
        ";
        if ($conn->query($sql) === TRUE)
          { } 
          else { echo "Error inserted record: " . $conn->error; } 
}
else
{
$sql = "UPDATE tk set 
        stato = 'Aperto'
        where 
        numero = '$numero' 
        ";
        if ($conn->query($sql) === TRUE)
          { } 
          else { echo "Error inserted record: " . $conn->error; } 
}
}
}
$duplicato="";           
} 
?>

<script>
		
		function controllo(){ 
      with(document.modulo) { 
       
       if(cliente.value=="") { 
            alert("Error: manca SCELTA CLIENTE"); 
            cliente.focus(); 
            return false; 
                              } 
         else if(commessa.value=="") { 
            alert("Error: manca SCELTA COMMESSA"); 
            commessa.focus(); 
            return false; 
                              } 
         else if(attivita.value=="") { 
            alert("Error: manca ATTIVITA'"); 
            attivita.focus(); 
            return false; 
                              }   
         else if(tipointervento.value=="") { 
            alert("Error: manca TIPO DI INTERVENTO"); 
            tipointervento.focus(); 
            return false; 
                              }
         else if(apparato.value=="") { 
            alert("Error: manca APPARATO"); 
            apparato.focus(); 
            return false; 
                              }   
 /*                                                                                                              
         else if(seriale.value=="") { 
            alert("Error: manca SERIALE"); 
            seriale.focus(); 
            return false; 
                              } 
*/
         else if(insegnaF.value=="") { 
            alert("Error: manca INSEGNA"); 
            insegnaF.focus(); 
            return false; 
                              }                                           
         if(ragsocF.value=="") { 
            alert("Error: manca RAGIONE SOCIALE"); 
            ragsoc.focus(); 
            return false; 
                              }  
         else if(indirizzoF.value=="") { 
            alert("Error: manca INDIRIZZO LUOGO INTERVENTO"); 
            indirizzo.focus(); 
            return false; 
                              }  
         else if(cittaF.value=="") { 
            alert("Error: manca CITTA' LUOGO INTERVENTO"); 
            citta.focus(); 
            return false; 
                              }               
          else if(intervento.value=="") { 
            alert("Error: manca DESCRIZIONE DELL'INTERVENTO"); 
            intervento.focus(); 
            return false; 
                              }                      
           /*else if(serialeparte.value=="") { 
            alert("Error: manca SERIALE DELLA PARTE GUASTA"); 
            serialeparte.focus(); 
            return false; 
                                 } */

              }
        } 
</script>
<script>
function pulisciLuogo(){
  $("#insegnaF").val("");
  $("#cittaF").val("");
  $("#contattoF").val("");
  $("#ragsocF").val("");
  $("#indirizzoF").val("");
  $("#capF").val("");
  $("#telefonoF").val("");
  $("#noteF").val("");
  $("#provF").val("");
	$("#progr").val("");
  $("#progrId").text("");
}
</script>
</head>
<body text="#000000" onLoad="larghezza(); frame();"  >
<?php if ($fileNumError > 0) { echo $erroreFileMessage; } ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inserimento nuovo luogo intervento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php include("esponiluogo.php"); ?>
      </div>
     
    </div>
  </div>
</div>
<!-- FINE MODALE  -->
<!-- Modal 1-->
<div class="modal fade" id="leggiclienti" tabindex="-1" aria-labelledby="leggiclientiLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="leggiclientiLabel">Clienti Tutti</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <?php include("leggitutticlienti.php"); ?>  
      </div>
     
    </div>
  </div>
</div>
<!-- FINE MODALE  1--> 
<!-- Modal 2-->
<div class="modal fade" id="assegna" tabindex="-1" aria-labelledby="assegnaLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="assegnaLabel">Assegnazione Ticket <?php echo $numero; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <?php include("assegna.php"); ?>  
      </div>
     
    </div>
  </div>
</div>
<!-- FINE MODALE 2-->
<?php

?>

<br>
<div>   
<br>
<p align="center"><font size="4" face="Verdana" color="cc0000">
  <?php echo $errore; ?></font>
<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data"> 
<table class="table-form">
  <tr>
      <th colspan="3" class=" borted-top-table"> 
        Identificazione:
      </th>
  </tr>
  <tr>
    <td height="45" colspan="1">
      <label>Cliente:<i class="fa-solid fa-magnifying-glass" data-bs-toggle="modal" data-bs-target="#leggiclienti" style="cursor:pointer; margin-left:5px"></i>all</label>
      <br>
      <input class="required" type="text" id="cliente" onkeyup="ricercaAutocomplete()" name="cliente" value="<?php echo $clienteintero; ?>" maxlength="100" size="40" style="">   
    </td>
    <td colspan="2"> 
      <label>Commessa:</label><br>
      <input class="required" type="text" id="commessa" onkeyup="Ricerca1()" name="commessa" value="<?php echo $commessa; ?>" maxlength="120" size="60">
    </td>            
  </tr>
  <tr>
      <td height="45" colspan="1">
        <label>Attività:</label><br>
        <input class="required" type="text" name="attivita" id="attivita" value="<?php echo $attivita; ?>" maxlength="50" size="40" >
      </td> 
      <td colspan="1"> 
        <label>N. Ticket Cliente:</label><br>
      <input type="text" name="ticketcli" value="<?php echo $ticketcli; ?>" maxlength="60" size="30">
      </td>
<?php $oggi=date("d/m/Y H:m:s");
if($datainizio==""){$datainizio=$oggi;} ?>           
      <td colspan="1"> 
        <label>Data e ora di aperura:</label><br>
        <input maxlength="20" 
        class="required"
        type="text" 
        name="datainizio" 
        value="<?php echo $datainizio; ?>" 
        autocomplete="off" 
        id="popupDatepicker" 
        size="25" 
       >
			</td>
    </tr>
    <tr>
      <td height="45" colspan="1"> 
            <label>Tipo intervento:</label><br>
              <select
                name="tipointervento"
                id="tipointervento"
                style="width:99%"
                class="required"
              >
                <option><?php echo $tipointervento; ?></option>
              </select>
      </td> 
      <td colspan="1"> 
        <label>Apparato:</label><br>
<!--        <input class="required" type="text" name="apparato" id="apparato" onkeyup="ricercaAutocompleteApparato()" value="<?php echo $apparato; ?>" maxlength="200" size="30" > -->
        <select class="required" size="1" name="apparato" id="apparato" >
		<option <? if($pparato=="C"){echo "selected";}?>>PC</option>
		<option <? if($apparato=="Stampante"){echo "selected";}?>>Stampante</option>
        <option <? if($apparato=="Periferiche (scanner, VLT)"){echo "selected";}?>>Periferiche (scanner, VLT)</option> 
        <option <? if($apparato=="PDL"){echo "selected";}?>>PDL</option> 
        <option <? if($apparato=="Server/Switch"){echo "selected";}?>>Server/Switch</option>  
        <option <? if($apparato=="Movimentazione"){echo "selected";}?>>Movimentazione</option> 
        <option <? if($apparato=="Ritiro"){echo "selected";}?>>Ritiro</option>  
        <option <? if($apparato=="Altro"){echo "selected";}?>>Altro</option> 
		</select>
      </td>
      
      <td colspan="1">
        <div style="width:49%; float:left;" >
          <label>Seriale1:</label><br>
          <input type="text" class="required" name="seriale" id="seriale" value="<?php echo $seriale; ?>" maxlength="200" size="12" >
        </div>
        <div style="width:49%; float:right;" >
          <label>Seriale 2:</label><br>
          <input type="text"  name="seriale2" id="seriale2" value="<?php echo $seriale2; ?>" maxlength="200" size="13" >
        </div>
      </td>
      
    </tr>
<? if($priorita==""){$priorita="verde";} ?>
    <tr>
      <td height="45" colspan="1"> 
        <label>Priorità alta:</label><br>
        <input type="radio" name="priorita" id="rosso" value="rosso" <?php if ($priorita=="rosso"){echo "checked";} ?> style="width: 35px;height: 35px;accent-color: red;">
      </td> 
      <td colspan="1"> 
        <label>Priorità media:</label><br>
        <input type="radio" name="priorita" id="giallo" value="giallo" <?php if ($priorita=="giallo"){echo "checked";} ?> " style="width: 35px;height: 35px;accent-color: yellow;">
      </td>
      <td colspan="1"> 
        <label>Priorità Normle:</label><br>
        <input type="radio" name="priorita" id="verde" value="verde" <?php if ($priorita=="verde"){echo "checked"; } ?>   style="width: 35px;height: 35px;accent-color: green;border: 15px solid green;background-color: green;">
      </td>
    </tr>
    <tr>
      <th colspan="3"> 
          Luogo intervento: 
          <i class="fa-solid fa-magnifying-glass" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor:pointer"></i>
          <span id="progrId" style="float:right; padding: 4px 0 0 0; color:yellow;"></span>
          <span id="annullaLuogo" onClick="pulisciLuogo()">&#x2715; Svuota Luogo</span>
          
      </th>
    </tr>
    <tr>
      <td height="45" colspan="1"> 
        <label>Insegna:</label><br>
        <input type="text" class="required" name="insegna" id="insegnaF" value="<?php echo $insegna; ?>" maxlength="200" size="40" >
      </td>
      <td  colspan="2"> 
        <label>Ragione Sociale:</label><br>
        <input type="text" class="required" name="ragsoc" id="ragsocF" value="<?php echo $ragsoc; ?>" maxlength="200" size="60" >
      </td>
    </tr>
    
    <tr>
      <td colspan="1"> 
        <label>Indirizzo:</label><br>
        <input type="text" class="required" name="indirizzo" id="indirizzoF" value="<?php echo $indirizzo; ?>" maxlength="200" size="40" >
      </td>
      <td colspan="1"> 
        <div style="width:49%; float:left;" >
          <label>Cap:</label><br>
          <input type="text" class="required" name="cap" id="capF" value="<?php echo $cap; ?>" maxlength="200" size="5" >
        </div>
        <div style="width:49%; float:right;" >
          <label>Prov:</label><br>
          <input type="text" class="required" name="prov" id="provF" value="<?php echo $prov; ?>" maxlength="50" size="5" >
        </div>
      </td>
      <td colspan="1"> 
        <label>Città:</label><br>
        <input type="text" class="required" name="citta" id="cittaF" value="<?php echo $citta; ?>" maxlength="200" size="25" >
      </td>
    </tr>
    
    <tr>
      <td height="45" colspan="1"> 
        <label>Telefono:</label><br>
        <input type="text" class="required" name="telefono" id="telefonoF" value="<?php echo $telefono; ?>" maxlength="200" size="40">
      </td>
      <td height="45" colspan="1"> 
        <label>Note/Orari:</label><br>
        <input type="text"  name="note" id="noteF" value="<?php echo $note; ?>" maxlength="200" size="40">
      </td>
      <td colspan="1"> 
        <label>Contatto:</label><br>
        <input type="text" class="required" name="contatto" id="contattoF" value="<?php echo $contatto; ?>" maxlength="200" size="60">
      </td>
    </tr>
    <tr>           
      <th colspan="3"> 
        Descrizione Attivita Intervento:
      </th>
    </tr>
    <tr>
      <td height="40" colspan="3"> 
        <label>Descrizione: </label><br>
        <textarea  class="required" name="intervento"  id="intervento" cols="83" rows="1"><?php echo $intervento; ?></textarea>
      </td>
    </tr> 
    <tr>
      <th colspan="3"> 
        Segnalazione Parte da Sostituire:
      </th>
    </tr>
    <tr>
      <td height="45"colspan="1"> 
        <label>Numero seriale:</label><br>
        <input type="text" name="serialeparte" id="serialeparte" value="<?php echo $serialeparte ?>" maxlength="200" size="40">
      </td>
      <td height="45" colspan="2"> 
        <label>Nome parte:</label><br>
        <input type="text" name="nomeparte" value="<?php echo $nomeparte; ?>" maxlength="200" size="60" >
      </td>            
    </tr>
    <tr>
      <td height="40" colspan="3"> 
        <label>Nota per la spedizione parti di ricambio: </label><br>
        <textarea name="spedizione"  cols="83" rows="1"><?php echo $spedizione; ?></textarea>
        </td>
    </tr>
    <tr>          
      <th colspan="3"> 
        Descrizione Note SLA:
      </th>
    </tr>
    <tr>
      <td colspan="3" height="40"> 
        <label>SLA: </label><br>
        <textarea name="notesla"  cols="83" rows="1"><?php echo $notesla; ?></textarea>
      </td>
    </tr>
    <tr>          
        <th colspan="3"> 
          Note Interne:
        </th>
    </tr>
    <tr>
        <td colspan="3" height="70"> 
          <label>Note:</label><br>
          <textarea name="nota"  cols="83" rows="2"><?php echo $nota; ?></textarea>
        </td>
    </tr>
    <tr>
      <th colspan="3"> 
        Appuntamento Intervento:
      </th>
    </tr>
    <tr> 
      <td colspan="1" height="50"> 
        <label>Data Ora:</label><br>
        <input type="text" name="dataapp" id="datrOp" value="<?php echo $dataapp; ?>" maxlength="50" size="20">
      </td>
      <td colspan="2"> 
        <label>Nota appuntamento: </label><br>
        <textarea name="notaapp"  cols="40" rows="1"><?php echo $notaapp; ?></textarea>
      </td>
    </tr> 
    
    
    
    <tr>
      <th colspan="3"> 
        Amministrativa:
      </th>
    </tr>
    <tr> 
      <td colspan="1" height="50"> 
        <div style="width:49%; float:left;" >
          <label>Importo Attivo:</label><br>
          <input type="text"  name="impatt" id="impatt" value="<?php echo $impatt; ?>" maxlength="10" size="12" >
        </div>
        <div style="width:49%; float:right;" >
          <label>Canone:</label><br>
          <input type="text"  name="abbona" id="abbona" value="<?php echo $abbona; ?>" maxlength="10" size="13" >
        </div>
      </td>
      <td colspan="2"> 
        <div style="width:20%; float:left;" >
          <label>Importo passivo:</label><br>
          <input type="text"  name="imppass" id="imppass" value="<?php echo $imppass; ?>" maxlength="10" size="13" >
        </div>
        <div style="width:79%; float:right;" >
          <label>Note</label><br>
          <textarea name="notaamm"  maxlength="500" cols="40" rows="1"><?php echo $notaamm; ?></textarea>
        </div>
      </td>
    </tr> 
    
    
    
    
    
    <tr>
      <td colspan="3"  align="center" style="text-align: center; background-color:#FFFFFF;" >       
<?php 
if($ingranaggio==7){$ingranaggio=300;}
if($ingranaggio==300 ){ ?>
           <input type="hidden" name="ingranaggio" value="300" />
           <input type="hidden" name="ingranaggiohh" value="1" />
             <input type="hidden" name="login" value="<?php echo $login; ?>" />
             <input type="hidden" name="id" value="<?php echo $progr; ?>" />
             <input type="hidden" name="numero" value="<?php echo $numero; ?>" />
             <input type="hidden" name="progrnew" id="progrnew"  value="<?php echo $progrnew; ?>"/>
             <br><br>
             <button autofocus type="submit" class="btn btn-warning">Modifica Ticket</button>
<? } else { ?>           
           
           <input type="hidden" name="ingranaggio" value="300" />
             <input type="hidden" name="login" value="<?php echo $login; ?>" />
             <input type="hidden" name="id" value="<?php echo $progr; ?>" />
             <input type="hidden" name="progrnew" id="progrnew"  value="<?php echo $progrnew; ?>"/>
             <input type="hidden" name="duplicato" id="progrnew"  value="<?php echo $duplicato; ?>"/>
             <br><br>
             <button type="submit" class="btn btn-info">Memorizza Ticket</button>
            
<?php } ?>  
    </td>  
  </tr>         
</table> 
</form> 
<?php if($ingranaggio==300){ ?> 
<hr>
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Documenti Allegati</font></p>


<table align="center" class="table-allegati">
<td >

  <table style="width:100%">
    <tr>		  
      <th>DATA DOC.</th>
      <th>DATA SCAD.</th>
      <th>OGGETTO</th>
      <th>OPERAZIONI&nbsp;&nbsp;</th>
      <th>&nbsp;&nbsp;</th>
    </tr>
  <?
  $sql = "SELECT * FROM documenti  where    tipodoc = '$numero'";        
  #echo $sql;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())	
    { 
    $prgrrr = $macrogruppo["progr"];
    $data = $macrogruppo["datadoc"];
    $datasca = $macrogruppo["datasca"];
    $tipodoc = $macrogruppo["tipodoc"];
    $oggettox= $macrogruppo["oggetto"];
    $file = $macrogruppo["file"];
  ?>
  <tr>
  <tr onMouseOver="style.background='#c9cacb';" onMouseOut="style.background=''">
    <td>
      <label size="2" face="Verdana" color="<?php if($prgrrr==$prgrx){echo "#cc0000";}else{echo "#000000";} ?>"><? echo $data; ?></label>
    </td>
    <td>
      <label color="<?php if($prgrrr==$prgrx){echo "#cc0000";}else{echo "#000000";} ?>"><? echo $datasca; ?></label>
    </td>
    <td>
      <label color="<?php if($prgrrr==$prgrx){echo "#cc0000";}else{echo "#000000";} ?>"><? echo $oggettox; ?></label>
    </td>
    <td>
      <a href="?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&progrx=<? echo $prgrrr; ?>&ingranaggio=300&ingranaggioy=1&ingranaggiott=201&numero=<? echo $numero; ?>&clienteintero=<? echo $clienteintero; ?>&commessa=<? echo $commessa; ?>&attivita=<? echo $attivita; ?>&ticketcli=<? echo $ticketcli; ?>&datainizio=<? echo $datainizio; ?>&tipointervento=<? echo $tipointervento; ?>&apparato=<? echo $apparato; ?>&seriale=<? echo $seriale; ?>&intervento=<? echo $intervento; ?>&serialeparte=<? echo $serialeparte; ?>&nomeparte=<? echo $nomeparte; ?>&spedizione=<? echo $spedizione; ?>&notesla=<? echo $notesla; ?>&nota=<? echo $nota; ?>&dataapp=<? echo $dataapp; ?>&notaapp=<? echo $notaapp; ?>&insegna=<? echo $insegna; ?>&ragsoc=<? echo $ragsoc; ?>&indirizzo=<? echo $indirizzo; ?>&cap=<? echo $cap; ?>&prov=<? echo $prov; ?>&citta=<? echo $citta; ?>&telefono=<? echo $telefono; ?>&contatto=<? echo $contatto; ?> &errore=<? echo $errore; ?>&priorita=<?php echo $priorita; ?>&impatt=<?php echo $impatt; ?>&abbona=<?php echo $abbona; ?>&imppass=<?php echo $imppass; ?>&notaamm=<?php echo $notaamm; ?>   " >
        <i class="fa-regular fa-eye"></i>
      </a>
    </td>
    <td style=" border: 0px solid black;font-family: Verdana;" align="left" >
      <!--        <a  onclick="myFunction('?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&prgrx=<? echo $prgr; ?>&ingranaggio=10&ingranaggiott=202&oggetto=<?php echo $oggettox; ?>&progr=<?php echo $progr; ?>');" ><img border="0" background="btn1.gif" src="x1.png" width="15" height="15"></a>   -->
      <a href="?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&prgrx=<? echo $prgrrr; ?>&ingranaggio=10&ingranaggiott=201&prgry=<?php echo $prgrrr; ?>&progr=<?php echo $progrrr; ?>">
        <button class="btn btn-danger" onclick="return confirm('Sei sicuro di volere cancellare?')">
          <i class="fa-regular fa-circle-xmark"></i>
        </button>
      </a>
    </td>
  </tr>
  <? }}
  $oggiora=date("d/m/Y"); ?>
  </table>

<p align="center"><font face="Verdana" size="4" style="font-family: Verdana;" color="#993300"><br>Inserimento Nuovo Documento </font></b></p>
<div align="left">    
<table  style="width:100%">
<form action="" method="post" enctype="multipart/form-data" >
		<tr>
      <td >
        <div style="float:left; width:49%">
          <label>Data Documento:</label><br>
          <input type="text" name="newdata" value="<?php echo $oggiora; ?>"  size="10" >
        </div>
        <div  style="float:right; width:49%">
          <label>Data scadenza Documento: </label><br>
          <input type="text" name="newdatasca" value="31/12/9999"  size="10">   
        </div>     
      </td>
    </tr>
    <tr>
      <td> 
        <label>Oggetto:</label><br>
        <input type="text" name="newoggetto" style="width: 100%;" placeholder="Inserisci qui l'oggetto del documento che stai caricando(obbligatorio)">
      </td>
    </tr>
		<tr>
			<td>
       <label>Carica Documento:</label><br>
		      <input type="hidden" name="ingranaggio" value="7" />
          <input type="hidden" name="login" value="<? echo $login; ?>" />
          <input type="hidden" name="progr" id="progr"  />
          <input type="hidden" name="cliente" value="<? echo $codice; ?>" />
          <input type="hidden" name="numero" value="<? echo $numero; ?>" />         
          <input type="hidden" name="clienteintero" value="<? echo $clienteintero; ?>" />
          <input type="hidden" name="commessa" value="<? echo $commessa; ?>" />
          <input type="hidden" name="attivita" value="<? echo $attivita; ?>" />
          <input type="hidden" name="ticketcli" value="<? echo $ticketcli; ?>" />
          <input type="hidden" name="datainizio" value="<? echo $datainizio; ?>" />
          <input type="hidden" name="tipointervento" value="<? echo $tipointervento; ?>" />
          <input type="hidden" name="apparato" value="<? echo $apparato; ?>" />
          <input type="hidden" name="seriale" value="<? echo $seriale; ?>" />
          <input type="hidden" name="intervento" value="<? echo $intervento; ?>" />
          <input type="hidden" name="serialeparte" value="<? echo $serialeparte; ?>" />
          <input type="hidden" name="nomeparte" value="<? echo $nomeparte; ?>" />
          <input type="hidden" name="spedizione" value="<? echo $spedizione; ?>" />
          <input type="hidden" name="notesla" value="<? echo $notesla; ?>" />
          <input type="hidden" name="nota" value="<? echo $nota; ?>" />
          <input type="hidden" name="dataapp" value="<? echo $dataapp; ?>" />
          <input type="hidden" name="notaapp" value="<? echo $notaapp; ?>" />
          <input type="hidden" name="insegna" value="<? echo $insegna; ?>" />
          <input type="hidden" name="ragsoc" value="<? echo $ragsoc; ?>" />
          <input type="hidden" name="indirizzo" value="<? echo $indirizzo; ?>" />
          <input type="hidden" name="cap" value="<? echo $cap; ?>" />
          <input type="hidden" name="prov" value="<? echo $prov; ?>" />
          <input type="hidden" name="citta" value="<? echo $citta; ?>" />
          <input type="hidden" name="telefono" value="<? echo $telefono; ?>" />
          <input type="hidden" name="contatto" value="<? echo $contatto; ?>" /> 
          <input type="hidden" name="errore" value="<? echo $errore; ?>" /> 
          <input type="hidden" name="priorita" value="<? echo $priorita; ?>" />   
          <input type="hidden" name="impatt" value="<? echo $impatt; ?>" /> 
          <input type="hidden" name="abbona" value="<? echo $abbona; ?>" /> 
          <input type="hidden" name="imppass" value="<? echo $imppass; ?>" /> 
          <input type="hidden" name="notaamm" value="<? echo $notaamm; ?>" />                 
		      <!--<input type="file" name="fileToUpload" id="fileToUpload" >-->
          <div class="input-group">
            <input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
          </div>
      </td>	
    </tr>
    <tr>
      <td style="text-align:center"> 
        <button autofocus type="submit" class="btn btn-primary">Memorizza</button>
	    </td>
    </form>
<?php if($ingranaggiott==201){ ?>
	</tr>
    <tr>
    <td>
    &nbsp;
    </td>
    </tr>
    <tr>
      <td style="background-color: #323639; padding: 10px;">
        <a style="float:right; color:#FFF; font-size: 21px;" href="?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&progrx=<? echo $prgrrr; ?>&ingranaggio=300&ingranaggioy=1&numero=<? echo $numero; ?>&clienteintero=<? echo $clienteintero; ?>&commessa=<? echo $commessa; ?>&attivita=<? echo $attivita; ?>&ticketcli=<? echo $ticketcli; ?>&datainizio=<? echo $datainizio; ?>&tipointervento=<? echo $tipointervento; ?>&apparato=<? echo $apparato; ?>&seriale=<? echo $seriale; ?>&intervento=<? echo $intervento; ?>&serialeparte=<? echo $serialeparte; ?>&nomeparte=<? echo $nomeparte; ?>&spedizione=<? echo $spedizione; ?>&notesla=<? echo $notesla; ?>&nota=<? echo $nota; ?>&dataapp=<? echo $dataapp; ?>&notaapp=<? echo $notaapp; ?>&insegna=<? echo $insegna; ?>&ragsoc=<? echo $ragsoc; ?>&indirizzo=<? echo $indirizzo; ?>&cap=<? echo $cap; ?>&prov=<? echo $prov; ?>&citta=<? echo $citta; ?>&telefono=<? echo $telefono; ?>&contatto=<? echo $contatto; ?> &errore=<? echo $errore; ?>&priorita=<?php echo $priorita; ?>&impatt=<?php echo $impatt; ?>&abbona=<?php echo $abbona; ?>&imppass=<?php echo $imppass; ?>&notaamm=<?php echo $notaamm; ?>  " >       
          <i class="fa-solid fa-circle-xmark"></i>
        </a>
      </td>
    </tr>
    <tr style="background-color: #323639;">
    <td colspan="2" width="100%" style="background-color: #323639;"><br>
<div>
<iframe  align="right" frameborder="0" width="100%" height="900" scrolling="yes" src="esponipdfffx.php?login=<?php echo $login; ?>&fl=<?php echo $fileh; ?>"></iframe> 
</div> <br>   
    </td>
    </tr>
<?php } ?>   
	</table>
    </td>
    </tr>
    </table>
    </div>
    <br>
<hr>
<?php
$swce=0;
$sql1 = "SELECT * FROM assegnato  where numero = '$numero' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $ragsoc = $macrogruppo["ragsoc"];	
        $swce=1;} }
$sql1 = "SELECT * FROM assegnatotec  where numero = '$numero' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $ragsoc = $macrogruppo["ragsoc"];	
        $swce=1;} }
if($swce==0){
?>
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Assegnazione Ticket <?php echo $numero; ?></font></b></p>
<?php } else { ?>
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Ticket <?php echo $numero; ?> assegnato a: <?php echo $ragsoc; ?></font></b></p>
<?php } ?>

    
<div class="disp-button">  
  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#assegna">Assegna Ticket</button>  
  <a href="?login=<?php echo $login; ?>"><button type="button" class="btn btn-success" >Inserisci Nuovo ticket</button> </a>   
</div> 
</center>   
<?php } ?>     

</div>
</div>
</div>
</div>
</div>
<br>

<hr>
 <p align="center"><font face="Verdana" size="4" style="font-family: Verdana;" color="#993300">Ultimi ticket inseriti</font></b></p>   

<div class="table-ticket-footer">
  <table id="tableFooter" class="display" cellspacing="0"  style="position:relative;">         
              <thead class="intesta">
    <tr class="testa">
      
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >N.Ticket</td>          
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Data</td>
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Stato</td> 
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Cliente</td>        
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Commessa</td>
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Attività </td>
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Tipo Intervento</td>
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Apparato</td>            
            <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Seriale.</td>
            <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Rag.Soc. Luogo.</td>
        <?php if($ingranaggio!=300 ){ ?>    
			<td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" ></td>
		<?php } ?>   
			</tr>       
    </thead>
    <tbody>
  <?php    
  $sql = "SELECT *  FROM  tk where  login  = '$login' order by numero desc " ;  
  #echo $sql;
  $rCount = 1;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())	
    { 
      $progrxx = $macrogruppo["progr"];
	  $serialexx = $macrogruppo["seriale"];
      $numeroxx = $macrogruppo["numero"];
      $clientexx = $macrogruppo["cliente"];
      $commessaxx = $macrogruppo["commessa"];
      $attivitaxx = $macrogruppo["attivita"];
      $datainizioxx = $macrogruppo["datainizio"];
      $tipointerventoxx = $macrogruppo["tipointervento"];
      $apparatoxx = $macrogruppo["apparato"];
      $statoxx = $macrogruppo["stato"];
	  $serialepartexx = $macrogruppo["serialeparte"];
	  $nomepartexx = $macrogruppo["nomeparte"];
	  $spedizionexx = $macrogruppo["spedizione"];
	  $noteslaxx = $macrogruppo["notesla"];
	  $notaxx = $macrogruppo["nota"];
	  $notaappxx = $macrogruppo["notaapp"];
  $sqlx = "SELECT *  FROM  tkluogo where  numero  = '$numeroxx' " ;  
  #echo $sql;
  $rCount = 1;
  $resultx = $conn->query($sqlx);
  if ($resultx->num_rows > 0) {
    while($macrogruppox = $resultx->fetch_assoc())	
    {   
      $ragsocxx = $macrogruppox["ragsoc"];
      }}
  $sqlx = "SELECT *  FROM  clienti where  codice  = '$clientexx' " ;  
  #echo $sql;
  $rCount = 1;
  $resultx = $conn->query($sqlx);
  if ($resultx->num_rows > 0) {
    while($macrogruppox = $resultx->fetch_assoc())	
    {   
      $ragsocclixx = $macrogruppox["ragsoc"];
      }}     
  $sqlx = "SELECT *  FROM  commesse where  commessa  = '$commessaxx' " ;  
  #echo $sql;
  $rCount = 1;
  $resultx = $conn->query($sqlx);
  if ($resultx->num_rows > 0) {
    while($macrogruppox = $resultx->fetch_assoc())	
    {   
      $nomecommessaxx = $macrogruppox["nomecommessa"];
      }}        
  ?>     
      <tr >    
        <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $numeroxx; ?></font></td>
        <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $datainizioxx; ?></font></td>
        <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $statoxx; ?></font></td>
        <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $ragsocclixx; ?></font></td>
        <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $nomecommessaxx; ?></font></td>
        <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $attivitaxx; ?></font></td>
        <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $tipointerventoxx; ?></font></td>
        <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center"><font size="2" face="Verdana"><?php echo $apparatoxx; ?></font></td>
        <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $serialexx; ?></font></td> 
		<td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $ragsocxx; ?></font></td>
    <?php if($ingranaggio!=300 ){ ?>       
		<td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" >
		<a style="float:right; color:#000; font-size: 21px;" href="?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&copia=<? echo $numeroxx; ?>&ingranaggio=400" >       
        <button type="button"  class="btn btn-secondary">Copia</button></a></td>
	<?php } ?>	
      </tr>	
      
  <?php          
  }
  }           
  ?>                    
  </table>
   
</div>      





<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<script>
var italianTeams = [];
var italianTeams2 = [];
var apparatiArr = [];

function autoComplete(){
     $("#cliente").autocomplete({
			source: italianTeams
      
		 });
         
}
function autoComplete2(){
     $("#commessa").autocomplete({
			source: italianTeams2
		 });
}

function autoCompleteApparato(){
     $("#apparato").autocomplete({
			source: apparatiArr
		 });
}

function ricercaAutocomplete(){
	
     $.ajax({
	         url: 'leggiclienti.php',
	         type: 'POST',
	         dataType: 'json',
	         data: {},
	         success: function(risposta){
	            italianTeams = risposta;
				autoComplete();
	         },
	         error: function(error){
				console.log("ERRORE CHIAMATA");
	         }
	});
  
}
function ricercaAutocompleteApparato(){
	
  $.ajax({
        url: 'leggiApparati.php',
        type: 'POST',
        dataType: 'json',
        data: {},
        success: function(risposta){
          apparatiArr = risposta;
          autoCompleteApparato();
        },
        error: function(error){
     console.log("ERRORE CHIAMATA");
        }
});

}
function addAttivita(commessa){
  //var commessa = $('#commessa').val();
  $.ajax({
	          url: 'ricercaAttivita.php',
	         type: 'POST',
	         data: {"commessa": commessa},
	         success: function(responce){
	            //console.log("attività", responce)
              $("#attivita").val(responce);
	         },
	         error: function(error){
				console.log("ERRORE CHIAMATA");
	         }
	});

}
function Ricerca1(cliente){
  var valore = cliente;
  if(cliente == null){
    valore = $('#cliente').val();
  }
	 //$("#commessa").prop( "disabled", true );
	 $.ajax({
	          url: 'leggicommessa1.php',
	         type: 'POST',
	         dataType: 'json',
	         data: {"cliente": valore},
	         success: function(risposta1){
	            italianTeams2 = risposta1;
				autoComplete2();
        //$("#commessa").prop( "disabled", false );
	         },
	         error: function(error){
				console.log("ERRORE CHIAMATA");
       // $("#commessa").prop( "disabled", false );
	         }
	});
	
  
}
$( "#cliente" ).on( "autocompleteselect", function( event, ui ) {
  Ricerca1(ui.item.label);
} );

function addIntervento(commessa){
  $('#tipointervento').find('option').remove();
  $.ajax({
	          url: 'ricercaTipoint.php',
	         type: 'POST',
           dataType: 'json',
	         data: {"commessa": commessa},
	         success: function(responce){
            console.log("tipo intervento", responce);
	            for(var a=0; a < responce.length; a++){
                if(responce[a] != ""){
                  var html = "<option>" + responce[a] + "</option>"
                  $("#tipointervento").append(html);
                }
              }
	         },
	         error: function(error){
				console.log("ERRORE CHIAMATA");
	         }
	});
}

$( "#commessa" ).on( "autocompleteselect", function( event, ui ) {
  addAttivita(ui.item.label);
  addIntervento(ui.item.label);
} );

 ricercaAutocomplete();
 ricercaAutocompleteApparato();
 tableInit();
</script>

</body>

</html>