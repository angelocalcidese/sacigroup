<?php
include "conf_DB.php";
$ingranaggio=$_REQUEST["ingranaggio"];
$ingranaggioxx=$_REQUEST["ingranaggioxx"];
$ingranaggio=6;
$ingranaggioy=$_REQUEST["ingranaggioy"];
$ingranaggiott=$_REQUEST["ingranaggiott"];
$ingranaggiohh=$_REQUEST["ingranaggiohh"];
$ingranaggiobb=$_REQUEST["ingranaggiobb"];
$ingranaggiogg=$_REQUEST["ingranaggiogg"]; 
$ingranaggiodocu=$_REQUEST["ingranaggiodocu"]; 
$ingranaggiovedi=$_REQUEST["ingranaggiovedi"];
$ingranaggiopian=$_REQUEST["ingranaggiopian"];
$ingranaggiochiudi=$_REQUEST["ingranaggiochiudi"]; 
$ingranaggiochiudidef=$_REQUEST["ingranaggiochiudidef"]; 
$memorizzapartei=$_REQUEST["memorizzapartei"];
$memorizzaparter=$_REQUEST["memorizzaparter"];
$numerointerventox=$_REQUEST["numerointervento"];
$numerointerventoy=$_REQUEST["numerointerventox"];
#echo "x ".$numerointerventox;
$numerointerventoz=$_REQUEST["numerointerventoy"];
#echo "y ".$numerointerventoy;
$numeroint=$_REQUEST["numeroint"];
#echo "pian ".$ingranaggiopian;
$ingranaggiocancelladoc=$_REQUEST["ingranaggiocancelladoc"];
$login=$_REQUEST["login"];
$catscelto=$_REQUEST["catscelto"];
$sql = "SELECT *  FROM  cat  where oplogin = '$login' ";  
#echo $sql;
$newobj = array();
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
     //$progr = $macrogruppo["progr"];
     //$codicemediatorex = $macrogruppo["codicemediatore"]; 
     $cognomex= $macrogruppo["ragsoc"];
     #echo $cognomex;
     $codice= $macrogruppo["codice"];
     $cognomenome=$codice." - ".$cognomex;       
            //$ind=0;            
            //$array[$ind]['cognome'] = $cognomex;
            //$ind++;  
			array_push($newobj, $cognomenome);
                                 
 }}  
$catscelto=$cognomex;
$numero=$_REQUEST["codice"];
#$stato=$_REQUEST["stato"];
#echo "num ".$numero;
$adate=$_REQUEST["adata"];
$fileh=$_REQUEST["fileh"];
$prgrx=$_REQUEST["prgrx"];
$prgry=$_REQUEST["prgry"];
#echo "prgry ".$prgry;
if($ingranaggiochiudidef==1){
$dataint=$_REQUEST["dataint"];
#echo "chiudo".$ingranaggiochiudidef;
$sql = "UPDATE tk set 
        stato = 'Richiesta di Chiusura'
        where 
        numero = '$numero' 
        ";
        if ($conn->query($sql) === TRUE)
          { 
         $dicichi="Memorizzato Stato Richiesta di Chiusura ".$catscelto;
     $dataoggi=date("Ymd H.m.s");
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
        '$dicichi',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
          
          } 
          else { echo "Error inserted record: " . $conn->error; } 
}
if($memorizzapartei==1){
$serialesost1=$_REQUEST["serialesost1"];
$descr1=$_REQUEST["descr1"];
  $sql = "INSERT INTO partei
( 
  numero,             
  serialesost1,
  descr1,
  numerointervento
  ) 
VALUES ( 
 '$numero',           
 '$serialesost1',
 '$descr1',
 '$numerointerventox'
              )";
  #echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {
         $dicichi="Memorizzato Parte di ricambio installato ".$catscelto;
     $dataoggi=date("Ymd H.m.s");
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
        '$dicichi',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
         } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; }


}

if($memorizzaparter==1){
$serialesost1a=$_REQUEST["serialesost1a"];
$descr1a=$_REQUEST["descr1a"];
  $sql = "INSERT INTO parter
( 
  numero,             
  serialesost1,
  descr1,
  numerointervento
  ) 
VALUES ( 
 '$numero',           
 '$serialesost1a',
 '$descr1a',
 '$numerointerventox'
              )";
  #echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {
         $dicichi="Memorizzato Parte di ricambio Sostituito ".$catscelto;
     $dataoggi=date("Ymd H.m.s");
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
        '$dicichi',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
         } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; }


}

if($ingranaggiochiudi==1){
$datainint=$_REQUEST["datainint"];
$datafinint=$_REQUEST["datafinint"]; 
$datafiint=$_REQUEST["datafiint"];
if($datafiint==""){$datafiint=$datainint;}
$datafinintx=$_REQUEST["datafinintx"];                        
$noteintervento=$_REQUEST["noteintervento"];
$noteluogo=$_REQUEST["noteluogo"];
$serialesost1=$_REQUEST["serialesost1"];
$descr1=$_REQUEST["descr1"];
$serialesost2=$_REQUEST["serialesost2"];
$descr2=$_REQUEST["descr2"];
$serialesost3=$_REQUEST["serialesost3"];
$descr3=$_REQUEST["descr3"];
$serialesost1a=$_REQUEST["serialesost1a"];
$descr1a=$_REQUEST["descr1a"];
$serialesost2a=$_REQUEST["serialesost2a"];
$descr2a=$_REQUEST["descr2a"];
$serialesost3a=$_REQUEST["serialesost3a"];
$descr3a=$_REQUEST["descr3a"];
$esito=$_REQUEST["esito"];
$noteesito=$_REQUEST["noteesito"];
$numero=$_REQUEST["numero"];
$trovato=0;
$sql1 = "SELECT * FROM chiusi  where numero = '$numero' and numerointervento = '$numerointerventoy' ";
#echo $sql1;  exit;
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $trovato=1;	 
			} }
$data=date("d/m/Y");            
if($trovato==0){
  $sql = "INSERT INTO chiusi
( 
  numero,             
  datainint,
  datafinint,                       
  noteintervento,
  noteluogo,
  serialesost1,
  descr1,
  serialesost2,
  descr2,
  serialesost3,
  descr3,
  serialesost1a,
  descr1a,
  serialesost2a,
  descr2a,
  serialesost3a,
  descr3a,
  esito,
  login,
  data,
  datafinintx,
  noteesito,
  datafiint,
  numerointervento
  ) 
VALUES ( 
 '$numero',           
 '$datainint',
 '$datafinint',                       
 '$noteintervento',
 '$noteluogo',
 '$serialesost1',
 '$descr1',
 '$serialesost2',
 '$descr2',
 '$serialesost3',
 '$descr3',
 '$serialesost1a',
 '$descr1a',
 '$serialesost2a',
 '$descr2a',
 '$serialesost3a',
 '$descr3a',
 '$esito',
 '$login',
 '$data',
 '$datafinintx',
 '$noteesito',
 '$datafiint',
 '$numerointerventox'
              )";
  #echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {
        $dicichi="Memorizzato Richiesta di Chiusura ".$catscelto;
     $dataoggi=date("Ymd H.m.s");
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
        '$dicichi',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
         } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 
} else {
$sql = "UPDATE chiusi set 
  datainint='$datainint', 
  datafinint='$datafinint',                        
  noteintervento='$noteintervento', 
  noteluogo='$noteluogo', 
  serialesost1='$serialesost1', 
  descr1='$descr1', 
  serialesost2='$serialesost2', 
  descr2='$descr2', 
  serialesost3='$serialesost3', 
  descr3='$descr3', 
  serialesost1a='$serialesost1a', 
  descr1a='$descr1a', 
  serialesost2a='$serialesost2a', 
  descr2a='$descr2a', 
  serialesost3a='$serialesost3a', 
  descr3a='$descr3a', 
  esito='$esito', 
  noteesito='$noteesito', 
  login='$login', 
  data='$data',
  datafinintx='$datafinintx',
  datafiint='$datafiint',
  numerointervento='$numerointerventox'
where  numero = '$numero'  ";
if ($conn->query($sql) === TRUE) {
$dicichi="Memorizzato Richiesta di Chiusura ".$catscelto;
     $dataoggi=date("Ymd H.m.s");
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
        '$dicichi',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
 } else { echo "Error inserted record: " . $conn->error; }
}

$sql = "UPDATE tk set 
        stato = 'Richiesta di Chiusura'
        where 
        numero = '$numero' 
        ";
        if ($conn->query($sql) === TRUE)
          {
          $dicichi="Memorizzato Stato Richiesta di Chiusura ".$catscelto;
     $dataoggi=date("Ymd H.m.s");
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
        '$dicichi',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
           } 
          else { echo "Error inserted record: " . $conn->error; } 



}

if($ingranaggiopian==1){ 
$dataint=$_REQUEST["dataint"];
$oraint=$_REQUEST["oraint"];
$luogoint=$_REQUEST["luogoint"];
$tecnicoint=$_REQUEST["tecnicoint"];
if($tecnicoint==""){$tecnicoint="Generico";}
$noteint=$_REQUEST["noteint"];
$clientexxy=$_POST["codice"];
$sql = "SELECT *  FROM  tk where  numero = '$clientexxy' " ;  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
$numeropiano = $macrogruppo["numeropiano"];
}}
$numeropiano++;
$sql = "UPDATE tk set 
numeropiano = '$numeropiano'
where 
numero = '$clientexxy' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; }  



$sql = "INSERT INTO pianificato
( 
codice,
dataint,
oraint,
luogoint,
tecnicoint,
noteint,
numerointervento,
login
) 
VALUES (
'$clientexxy',
'$dataint',
'$oraint',
'$luogoint',
'$tecnicoint',
'$noteint',
'$numeropiano',
'$login' 
)";
  #echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {
        $dicichi="Memorizzato Pianificato ".$catscelto;
     $dataoggi=date("Ymd H.m.s");
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
        '$dicichi',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
        $errore="Cliente Memorizzato Correttamente"; } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 
$sql = "UPDATE tk set 
        stato = 'Pianificato'
        where 
        numero = '$numero'  
        ";
        if ($conn->query($sql) === TRUE)
          {
          $dicichi="Memorizzato Stato Pianificato ".$catscelto;
     $dataoggi=date("Ymd H.m.s");
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
        '$dicichi',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
           } 
          else { echo "Error inserted record: " . $conn->error; }         
}
if($ingranaggiocancelladoc==1){ 
$sql = "
DELETE from documenti where progr = '$prgrx'";
#echo $sql;  exit;
if ($conn->query($sql) === FALSE)
  {echo "errxx=errore";exit;}
  else
  {}
 } 
if ($ingranaggiodocu=="1")
{
$newdata=$_POST["newdata"];
$newdatasca=$_POST["newdatasca"];
$newoggetto=$_POST["newoggetto"];
$clientexxy=$_POST["codice"];
#echo "data ".$newdata." ogg ".$newoggetto." cli ".$clientexxy; 

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
              '$clientexxy',
              '$newdata', 
              '$newoggetto',
              '$newfile',
              '$newdatasca'
              )";
#echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {
        $dicichi="Memorizzato Documento ".$newoggetto." ".$catscelto;
     $dataoggi=date("Ymd H.m.s");
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
        '$dicichi',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
         } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 

 } }
}



if($ingranaggioxx==300){
$errore=$_REQUEST["errore"];
$numero=$_REQUEST["numero"];
#echo "num ".$numero;
$cliente=$_REQUEST["cliente"];
$comodo=explode(" - ",$cliente);
$cliente=$comodo[0];
$clienteintero=$_REQUEST["clienteintero"];
$commessa=$_REQUEST["commessa"];
$comodo=explode(" - ",$commessa);
$commessa=$comodo[0];
$attivita=$_REQUEST["attivita"];
$attivita=str_replace("'", "\'", $attivita);
#echo "att ".$attivita;
$ticketcli=$_REQUEST["ticketcli"];
$datainizio=$_REQUEST["datainizio"];
#$orainizio=$_REQUEST["orainizio"];
$tipointervento=$_REQUEST["tipointervento"];
$tipointervento=str_replace("'", "\'", $tipointervento);
#echo "ti ".$tipointervento;
$apparato=$_REQUEST["apparato"];
$seriale=$_REQUEST["seriale"];
$insegna=$_REQUEST["insegna"];
$insegna=str_replace("'", "\'", $insegna);
$ragsoc=$_REQUEST["ragsoc"];
$ragsoc=str_replace("'", "\'", $ragsoc);
$indirizzo=$_REQUEST["indirizzo"];
$indirizzo=str_replace("'", "\'", $indirizzo);
$cap=$_REQUEST["cap"];
$prov=$_REQUEST["prov"];
$citta=$_REQUEST["citta"];
$citta=str_replace("'", "\'", $citta);
$telefono=$_REQUEST["telefono"];
$contatto=$_REQUEST["contatto"];
$contatto=str_replace("'", "\'", $contatto);
$intervento=$_REQUEST["intervento"];
$intervento=str_replace("'", "\'", $intervento);
$serialeparte=$_REQUEST["serialeparte"];
$serialeparte=str_replace("'", "\'", $serialeparte);
$nomeparte=$_REQUEST["nomeparte"];
$nomeparte=str_replace("'", "\'", $nomeparte);
$spedizione=$_REQUEST["spedizione"];
$spedizione=str_replace("'", "\'", $spedizione);
$notesla=$_REQUEST["notesla"];
$notesla=str_replace("'", "\'", $notesla);
$nota=$_REQUEST["nota"];
$nota=str_replace("'", "\'", $nota);
$dataapp=$_REQUEST["dataapp"];
$notaapp=$_REQUEST["notaapp"];
$notaapp=str_replace("'", "\'", $notaapp);
$id=$_REQUEST["id"];
$progrnew=$_REQUEST["progrnew"];
$priorita=$_REQUEST["priorita"];
$note=$_REQUEST["note"];
$note=str_replace("'", "\'", $note);
$impatt=$_REQUEST["impatt"];
$abbona=$_REQUEST["abbona"];
$imppass=$_REQUEST["imppass"];
$notaamm=$_REQUEST["notaamm"];
$notaamm=str_replace("'", "\'", $notaamm);
$sql = "UPDATE tk set 
cliente='$cliente',
commessa='$commessa',
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
    $dicichi="Modificato Ticket ".$numero." ".$catscelto;
     $dataoggi=date("Ymd H.m.s");
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
        '$dicichi',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
    $errore=" Modificato Correttamente "; } 
    else { echo "Error inserted record: " . $conn->error; exit;}
    
$sql = "UPDATE tkluogo set 
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
numero = '$numero' 
";
#echo $sql;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; exit;}    
    
    
$ingranaggioy=20;    
}
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>nuovo cat</title>
<script src="jquery-3.4.1.min.js"></script>
<script src="query-ui.min.js"></script>

<script type="text/javascript" src="./jquery-ui-1.13.2/scripts/jquery.ui.datepicker-it.js"></script>

<link rel="stylesheet" href="query-ui.css">
<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="./bootstrap/js/bootstrap.min.js"></script>			
<link href="./fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="./fontawesome/css/brands.css" rel="stylesheet">
  <link href="./fontawesome/css/solid.css" rel="stylesheet">
<link rel="stylesheet" href="./css/customers.css">

<script>


function frame() {
var alt = $("#ingressiframe",  window.parent.document).height() + 2000 + "px";
var larg = $("#ingressiframe",  window.parent.document).width() - 15 + "px";
    var table = $('#tableFooter').DataTable(
	{
	
	"order": [[ 1 , "<? if($ingranaggiobb=="A"){echo "asc";}else{echo "desc";} ?>" ]],
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

 function aggiorna(sel){
  var f = document.form;
  f.sel_value.value = sel.options[sel.selectedIndex].value;
  f.sel_text.value = sel.options[sel.selectedIndex].text;
 }

/*$(function() {
	$('#popupDatepicker').datepick();
  $('#popupDatepicker1').datepick();
	$('#inlineDatepicker').datepick({onSelect: showDate});

});*/

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
<script type="text/javascript">		
		function controlloxx(){ 
            with(document.moduloxx) { 
        if(datainint.value=="") { 
            alert("Error: manca DATA INTERVENTO"); 
            datainint.focus(); 
            return false; 
                              } 
                            
         if(datafinint.value=="") { 
            alert("Error: manca ORA INIZIO INTERVENTO"); 
            datafinint.focus(); 
            return false; 
                              }  
         if(datafinintx.value=="") { 
            alert("Error: manca ORA FINE INTERVENTO"); 
            datafinintx.focus(); 
            return false; 
                              }                       
         if(noteintervento.value=="") { 
            alert("Error: manca DESCRIZIONE INTERVENTO"); 
            noteintervento.focus(); 
            return false; 
                              }  
                                                            
                                                    
                                  } 
        } 
</script>
<script type="text/javascript">		
		function controllo11(){ 
            with(document.modulo11) { 
        if(datainint.value=="") { 
            alert("Error: manca DATA INIZIO INTERVENTO"); 
            datainint.focus(); 
            return false; 
                              } 
                             
                            
         if(datafinint.value=="") { 
            alert("Error: manca ORA INIZIO INTERVENTO"); 
            datafinint.focus(); 
            return false; 
                              }  
         if(datafinintx.value=="") { 
            alert("Error: manca ORA FINE INTERVENTO"); 
            datafinintx.focus(); 
            return false; 
                              }                       
         if(noteintervento.value=="") { 
            alert("Error: manca DESCRIZIONE INTERVENTO"); 
            noteintervento.focus(); 
            return false; 
                              }  
                                                            
                                                    
                                  } 
        } 
$(function(){
  $('#dateOp').datepicker({
    language: "it",
    autoclose: true,
    todayHighlight: true,
    dateFormat: 'dd/mm/yy'
  });
});  

$(function(){
  $('#dateOp1').datepicker({
    language: "it",
    autoclose: true,
    todayHighlight: true,
    dateFormat: 'dd/mm/yy'
  });
});  
 
$(function(){
  $('#datainint').datepicker({
    language: "it",
    autoclose: true,
    todayHighlight: true,
    dateFormat: 'dd/mm/yy'
  });
});       

$(function(){
  $('#datafiint').datepicker({
    language: "it",
    autoclose: true,
    todayHighlight: true,
    dateFormat: 'dd/mm/yy'
  });
});       
</script>
  
</head>
<body text="#000000" onLoad="larghezza(); frame();"  >

<br>
<?php
$sql = "SELECT *  FROM  tk where  numero = '$numero' " ;  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
$numero = $macrogruppo["numero"];
$cliente = $macrogruppo["cliente"];
#echo $cliente;
$commessa = $macrogruppo["commessa"];
$attivita = $macrogruppo["attivita"];
$ticketcli = $macrogruppo["ticketcli"];
$datainizio = $macrogruppo["datainizio"];
$tipointervento = $macrogruppo["tipointervento"];
$apparato = $macrogruppo["apparato"];
$seriale = $macrogruppo["seriale"];
$intervento = $macrogruppo["intervento"];
$serialeparte = $macrogruppo["serialeparte"];
$nomeparte = $macrogruppo["nomeparte"];
$spedizione = $macrogruppo["spedizione"];
$notesla = $macrogruppo["notesla"];
$nota = $macrogruppo["nota"];
$dataapp = $macrogruppo["dataapp"];
$notaapp = $macrogruppo["notaapp"];
$loging = $macrogruppo["login"];
$aggiornamento = $macrogruppo["aggiornamento"];
$priorita = $macrogruppo["priorita"];
$stato = $macrogruppo["stato"];
#echo "stat ".$stato;
$sqlx = "SELECT *  FROM  tkluogo where  numero  = '$numero' " ;  
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
     $citta = $macrogruppox["citta"];
     $prov = $macrogruppox["prov"];
     $contatto= $macrogruppox["contatto"];
     $telefono = $macrogruppox["telefono"];
     $note = $macrogruppox["note"];
     }}
 $sql2 = "SELECT *  FROM  clienti where  codice  = '$cliente' " ;  
  #echo $sql;
  $rCount = 1;
  $result2 = $conn->query($sql2);
  if ($result2->num_rows > 0) {
    while($macrogruppox = $result2->fetch_assoc())	
    {   
      $resp['ragsoc_cli'] = $macrogruppox["ragsoc"];
      $resp['codice_cli'] = $macrogruppox["codice"];
      $ragsocclixx = $macrogruppox["ragsoc"];
      $resp['clienteintero_cli'] =$clientex." - ".$ragsocclixx;       
      $cliente =$cliente." - ".$ragsocclixx;
      
      }
    }     

  $sql3 = "SELECT *  FROM  commesse where  commessa  = '$commessa' " ;  
  #echo $sql;
  $rCount = 1;
  $result3 = $conn->query($sql3);
  if ($result3->num_rows > 0) {
    while($macrogruppox = $result3->fetch_assoc())	
    {   
      $nomecommessaxx = $macrogruppox["nomecommessa"];
      $commessa=$commessa." - ".$nomecommessaxx;
      
      }}             
$regionetk="";
$sqlxj = "SELECT *  FROM  province where  sigla = '$prov' " ;  
#echo $sql;
$rCount = 1;
$resultxj = $conn->query($sqlxj);
if ($resultxj->num_rows > 0) {
  while($macrogruppoxj = $resultxj->fetch_assoc())	
	{ $regionetk = $macrogruppoxj["regione"]; }}      
     
     
}}
if($ingranaggioy==""){
?>     

<table class="expose-table">
  <tr>
    <th colspan="3"> 
        TICKET NUMERO <?php echo $numero; ?> STATO <?php echo $stato; ?>
    </th>
  </tr>
  <tr>
    <th colspan="3"> 
      <label>Identificazione:</label>
    </th>
  </tr>
   <tr>
    <td colspan="1">
      <label style="color: #8e8b8b;" style="color: #8e8b8b;">Cliente:</label style="color: #8e8b8b;"><br>
      <span> <?php echo $cliente; ?></span> 
    </td> 
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Commessa:</label><br>
      <span> <?php echo $commessa; ?></span>
    </td>            
  </tr>
  <tr>
    <td colspan="1">
      <label style="color: #8e8b8b;">Attività:</label><br>
      <span> <?php echo $attivita; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">N. Ticket Cliente:</label><br>
      <span> <?php echo $ticketcli; ?></span>
    </td>       
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Data di aperura:</label><br>
      <span> <?php echo $datainizio; ?></span>
		</td>            
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Tipo intervento:</label><br>
      <span> <?php echo $tipointervento; ?></span>
    </td> 
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Apparato:</label><br>
      <span> <?php echo $apparato; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Seriale:</label><br>
      <span> <?php echo $seriale; ?></span>
    </td>
  </tr>
  
  
  <? //if($priorita==""){$priorita="verde";} ?>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Priorità alta:</label><br>
      <?php if ($priorita=="rosso"){
        echo '<i class="fa-solid fa-circle" style="color:red;padding: 10px 40px;font-size: 27px;"></i>';
      } else {
        echo '<i class="fa-solid fa-circle" style="color:#E9E9E9;padding: 10px 40px;font-size: 27px;"></i>';
      } ?>
    </td> 
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Priorità media:</label><br>
      <?php if ($priorita=="giallo"){
        echo '<i class="fa-solid fa-circle" style="color:yellow;padding: 10px 40px;font-size: 27px;"></i>';
      } else {
        echo '<i class="fa-solid fa-circle" style="color:#E9E9E9;padding: 10px 40px;font-size: 27px;"></i>';
      } ?>
      </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Priorità Normale:</label><br>
      <?php if ($priorita=="verde"){
        echo '<i class="fa-solid fa-circle" style="color:green;padding: 10px 40px;font-size: 27px;"></i>';
      } else {
        echo '<i class="fa-solid fa-circle" style="color:#E9E9E9;padding: 10px 40px;font-size: 27px;"></i>';
      } ?>
      </td>
  </tr>
  
  
  
  <tr>
    <th colspan="3"> 
      <label>Luogo intervento: 
      <i class="fa-solid fa-map" data-bs-toggle="modal" data-bs-target="#exampleModalx" style="cursor:pointer"></i>
      
      </label> 
    </th>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Insegna:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $insegna; ?></span>
    </td>
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Ragione Sociale:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $ragsoc; ?></span>
    </td>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Indirizzo:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $indirizzo; ?></span>
    </td>
    <td colspan="1"> 
      <div style="width:49%; float:left">
        <label style="color: #8e8b8b;">Cap:</label style="color: #8e8b8b;"><br>
        <span ><?php echo $cap; ?></span>
      </div>
      <div style="width:49%; float:right">
        <label style="color: #8e8b8b;">Prov:</label style="color: #8e8b8b;"><br>
        <span ><?php echo $prov; ?></span>
      </div>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Città:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $citta; ?></span>
    </td>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Telefoni:</label><br>
      <span ><?php echo $telefono; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Note/Orari:</label><br>
      <span ><?php echo $note; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Contatto:</label><br>
      <span ><?php echo $contatto; ?></span>
    </td>
  </tr>
  
  
  
  <tr>
    <th colspan="3"> 
      <label >Descrizione Attivita Intervento:</label> 
    </th>
  </tr>
  <tr>
    <td colspan="3"> 
      <label style="color: #8e8b8b;">Intervento:</label><br>
      <span> <?php echo $intervento; ?></span>
    </td>
  </tr>


  
  <tr>
    <th colspan="3"> 
      <label >Segnalazione Parte da Sostituire:</label> 
    </th>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Numero Seriale:</label><br>
      <span> <?php echo $serialeparte; ?></span>
    </td>
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Nome Parte:</label><br>
      <span> <?php echo $nomeparte; ?></span>
    </td>
  </tr>
  <tr> 
    <td colspan="3"> 
      <label style="color: #8e8b8b;"<b>Nota per la spedizione parti di ricambio:</label style="color: #8e8b8b;"><br>
      <span> <? echo $spedizione; ?></span>
    </td>   
  </tr>
  
  <tr>       
    <th colspan="3"> 
      <label >Descrizione Note SLA:</label style="color: #8e8b8b;">
    </th>
  </tr>
  <tr> 
    <td colspan="3"> 
      <label style="color: #8e8b8b;"<b>SLA:</label style="color: #8e8b8b;"><br>
      <span><?php echo $notesla; ?></span>
  </tr>
  
  

  <tr>       
    <th colspan="3"> 
      <label >Appuntamento Intervento:</label style="color: #8e8b8b;">
    </th>
  </tr>
  <tr> 
    <td colspan="1"> 
      <label style="color: #8e8b8b;"<b>Data Ora:</label style="color: #8e8b8b;"><br>
      <span><?php echo $dataapp; ?></span>
    </td>
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Nota appuntamento: </label style="color: #8e8b8b;"><br>
      <span><?php echo $notaapp; ?></span>
    </td>
  </tr>
 
</table>
<? } ?>

<div align="center">
<hr style="width:90%;">
<font face="Arial" size="4" color="#476b5d">LISTA PARTI DI RICAMBIO NECESSARIE</font>

<table align="center" id="example" class="display" cellspacing="0" align="left" style="width:90%;background-color: #ebebe9; position:relative;">         
             <thead class="intesta">
	<tr class="testa">
		 
          <td  style=" border: 1px solid black;background-color: #afc81b; color: #ffffff; " align="center"><font size="4"   >Codice<br>Articolo</td>   
          
          <td  style=" border: 1px solid black;background-color: #afc81b; color: #ffffff; " align="center"><font size="4"   >Codice<br>Articolo Cliente</td>
          <td  style=" border: 1px solid black;background-color: #afc81b; color: #ffffff; " align="center"><font size="4"   >Descrizione Articolo Cliente</td>
          <td  style=" border: 1px solid black;background-color: #afc81b; color: #ffffff; " align="center"><font size="4"   >Seriale</td>
          

          <td  style=" border: 1px solid black;background-color: #afc81b; color: #ffffff; " align="center"><font size="4"   >Mittete Denominazione Magazzino</td>
          
          <td  style=" border: 1px solid black;background-color: #afc81b; color: #ffffff; " align="center"><font size="4"   >Quantità</td>
          <td  style=" border: 1px solid black;background-color: #afc81b; color: #ffffff; " align="center"><font size="4"   >DDT</td>
          <td  style=" border: 1px solid black;background-color: #afc81b; color: #ffffff; " align="center"><font size="4"   >Data DDT</td>
          <td  style=" border: 1px solid black;background-color: #afc81b; color: #ffffff; " align="center"><font size="4"   >Vettore</td>
          <td  style=" border: 1px solid black;background-color: #afc81b; color: #ffffff; " align="center"><font size="4"   >Note</td>                
            </tr>       
	</thead>
	<tbody>
<?php


 $sqlz = "SELECT *  FROM  daspedire where ticket = '$numero' order by articolo "; 

#echo $sql;
$rCount = 1;
$resultz = $conn->query($sqlz);
if ($resultz->num_rows > 0) {
  while($macrogruppoz = $resultz->fetch_assoc())	
	{ 
      $progrz = $macrogruppoz["progr"];
     $magazzinoz = $macrogruppoz["magazzino"];
     $articoloz = $macrogruppoz["articolo"];
     $serialez = $macrogruppoz["seriale"];
     $codartcliz = $macrogruppoz["codartcli"];
     $quantitaz = $macrogruppoz["quantita"];
     #echo "qt".$quantitaz;
     $notez = $macrogruppoz["note"];
     $ddtz = $macrogruppoz["ddt"];
     $ddtdataz = $macrogruppoz["ddtdata"];
     $vettorez = $macrogruppoz["vettore"];
     if($ddtz==""){$ddtz="IN SPEDIZIONE";}
$sql = "SELECT *  FROM  articolo where codice = '$articoloz' "; 
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
      $progr = $macrogruppo["progr"];
     $denominazione = $macrogruppo["denominazione"];
     $dataoperazione = $macrogruppo["dataoperazione"];
     $codice = $macrogruppo["codice"];
     $ncliente = $macrogruppo["ncliente"];
     $ncostruttore = $macrogruppo["ncostruttore"];
     $cliprop = $macrogruppo["cliprop"];
     $tipo = $macrogruppo["tipo"];
     $gruppo= $macrogruppo["gruppo"];
     $marca = $macrogruppo["marca"];
     $modello = $macrogruppo["modello"];
     $volume = $macrogruppo["volume"];
     $peso = $macrogruppo["peso"];
     $note = $macrogruppo["note"]; 
      }}  
$sqlm = "SELECT *  FROM  magazzino where codice = '$magazzinoz'"; 
 
#echo $sqlm;
$rCount = 1;
$resultm = $conn->query($sqlm);
if ($resultm->num_rows > 0) {
  while($macrogruppom = $resultm->fetch_assoc())	
	{ 
     $progrmag = $macrogruppom["progr"];
     $denominazionemag = $macrogruppom["denominazione"];
     $dataoperazionemag = $macrogruppom["dataoperazione"];
     $codicemag = $macrogruppom["codice"];
     $tipomag = $macrogruppom["tipo"];
     $strutturamag = $macrogruppom["struttura"];
     $viamag= $macrogruppom["via"];
     $cittamag = $macrogruppom["citta"];
     $provmag = $macrogruppom["prov"];
     $regionemag = $macrogruppom["regione"];
     $responsabilemag = $macrogruppom["responsabile"];
     $tipomag = $macrogruppom["tipo"];
     $statomag = $macrogruppom["stato"];
     $caramag = $macrogruppom["cara"];
     $orgamag = $macrogruppom["orga"];
     $telefonomag = $macrogruppom["telefono"];
     $spazimag = $macrogruppom["spazi"];
     $notemag = $macrogruppom["note"];
     $capmag = $macrogruppom["cap"]; 
     $strutturamag = $macrogruppom["struttura"]; 
      }}

             

?>     
    <tr onmouseover="evidenziaRiga(this);" onmouseout="rimuoviEvidenziazione(this);">     
      <td style=" border: 1px solid #e4e3e3; " align="center" ><font size="4"  ><?php echo $articoloz; ?></td>

      <td style=" border: 1px solid #e4e3e3; " align="left" ><font size="4"  ><?php echo $ncostruttore; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="left" ><font size="4"  ><?php echo $denominazione; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="left" ><font size="4"  ><?php echo $serialez; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="left" ><font size="4"  ><?php echo $denominazionemag; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="center" ><font size="4"  ><?php echo $quantitaz; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="center" ><font size="4"  ><?php echo $ddtz; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="center" ><font size="4"  ><?php echo $ddtdataz; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="center" ><font size="4"  ><?php echo $vettorez; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="left" ><font size="4"  ><?php echo $notez; ?></td>       
      
     </tr>	
     
<?php          
}
}

?> 
           
</table> 
</div> 

    <div class="tab-navigation" style="width:85%; margin:auto;">
      <ul class="nav nav-tabs">

    <?php if($ingranaggio==6){  ?>  
    <br>
    <li class="nav-item">
      <a class="nav-link <? if($ingranaggioy==51){echo "active";} ?>" href="gestticket.php?login=<? echo $login; ?>&swprima=0" title="Pianifica Intervento"><span>
      <i class="fa-solid fa-bars"></i> Indietro 
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <? if($ingranaggioy==50){echo "active";} ?>" href="lavoraticket.php?login=<? echo $login; ?>&codice=<?php echo $numero; ?>&ingranaggioy=50" title="Pianifica Intervento"><span>
      <i class="fa-solid fa-earth-americas"></i> Pianifica Intervento 
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <? if($ingranaggioy==40){echo "active";} ?>" href="lavoraticket.php?login=<? echo $login; ?>&codice=<?php echo $numero; ?>&ingranaggioy=40" title="Documentazione">
      <i class="fa-solid fa-book"></i> Documentazione 
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <? if($ingranaggioy==30){echo "active";} ?>" href="lavoraticket.php?login=<? echo $login; ?>&codice=<?php echo $numero; ?>&ingranaggioy=30&stato=<? echo $stato; ?>" title="Richiesta di Chisura Ticket">
      <i class="fa-solid fa-folder-closed"></i> Richiesta di Chiusura Ticket 
      </a>
    </li>
   


    <?php } ?>
      </ul>
    
    </div>

<br>
<!--  #################     MODIFICA TICKET ###################### -->

<?php if($ingranaggioy==20){
$sql = "SELECT *  FROM  tk where  numero  = '$numero' " ;  
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
?>
<!--<p align="center"><font size="4" face="Verdana" color="cc0000">
  <?php echo $errore; ?></font>-->
  
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
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Modifica Ticket <?php echo $numero." Stato ".$stato." ".$errore; ?></font></b></p>
<?php } else { ?>
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Modifica Ticket <?php echo $numero." Stato ".$stato." ".$errore; ?> a: <?php echo $ragsoc; ?></font></b></p>
<?php } ?>   
<form method="POST" action=""  enctype="multipart/form-data"> 
<table class="table-form">
  <tr>
      <th colspan="3" class=" borted-top-table"> 
        Identificazione:
      </th>
  </tr>
  <tr>
    <td height="45" colspan="1">
      <label style="color: #8e8b8b;">Cliente:<i class="fa-solid fa-magnifying-glass" data-bs-toggle="modal" data-bs-target="#leggiclienti" style="cursor:pointer; margin-left:5px"></i>all</label>
      <br>
      <input class="required" type="text" id="cliente" onkeyup="ricercaAutocomplete()" name="cliente" value="<?php echo $cliente; ?>" maxlength="100" size="40" style="" >   
    </td>
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Commessa:</label><br>
      <input class="required" type="text" id="commessa" onkeyup="Ricerca1()" name="commessa" value="<?php echo $commessa; ?>" maxlength="200" size="60">
    </td>            
  </tr>
  <tr>
      <td height="45" colspan="1">
        <label style="color: #8e8b8b;">Attività:</label><br>
        <input class="required" type="text" name="attivita" id="attivita" value="<?php echo $attivita; ?>" maxlength="50" size="40" >
      </td> 
      <td colspan="1"> 
        <label style="color: #8e8b8b;">N. Ticket Cliente:</label><br>
      <input type="text" name="ticketcli" value="<?php echo $ticketcli; ?>" maxlength="60" size="30">
      </td>
<?php $oggi=date("d/m/Y H:m:s");
if($datainizio==""){$datainizio=$oggi;} ?>           
      <td colspan="1"> 
        <label style="color: #8e8b8b;">Data e ora di aperura:</label><br>
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
            <label style="color: #8e8b8b;">Tipo intervento:</label><br>
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
        <label style="color: #8e8b8b;">Apparato:</label><br>
<!--        <input class="required" type="text" name="apparato" id="apparato" onkeyup="ricercaAutocompleteApparato()" value="<?php echo $apparato; ?>" maxlength="200" size="30" > -->
        <select class="required" size="1" name="apparato" id="apparato" >
		<option <? if($pparato=="C"){echo "selected";}?>>PC</option>
		<option <? if($apparato=="Stampante"){echo "selected";}?>>Stampante</option>
        <option <? if($apparato=="Periferiche (scanner, VLT)"){echo "selected";}?>>Periferiche (scanner, VLT)</option> 
        <option <? if($apparato=="PDL"){echo "selected";}?>>PDL</option> 
        <option <? if($apparato=="Server/Switch"){echo "selected";}?>>Server/Switch</option>  
        <option <? if($apparato=="Movimentazione"){echo "selected";}?>>Movimentazione</option> 
        <option <? if($apparato=="Ritiro"){echo "selected";}?>>Ritiro</option>  
		</select>
      </td>
      
      <td colspan="1">
        <div style="width:49%; float:left;" >
          <label style="color: #8e8b8b;">Seriale1:</label><br>
          <input type="text" class="required" name="seriale" id="seriale" value="<?php echo $seriale; ?>" maxlength="200" size="12" >
        </div>
        <div style="width:49%; float:right;" >
          <label style="color: #8e8b8b;">Seriale 2:</label><br>
          <input type="text"  name="seriale2" id="seriale2" value="<?php echo $seriale2; ?>" maxlength="200" size="13" >
        </div>
      </td>
      
    </tr>
<? if($priorita==""){$priorita="verde";} ?>
    <tr>
      <td height="45" colspan="1"> 
        <label style="color: #8e8b8b;">Priorità alta:</label><br>
        <input type="radio" name="priorita" id="rosso" value="rosso" <?php if ($priorita=="rosso"){echo "checked";} ?> style="width: 35px;height: 35px;accent-color: red;">
      </td> 
      <td colspan="1"> 
        <label style="color: #8e8b8b;">Priorità media:</label><br>
        <input type="radio" name="priorita" id="giallo" value="giallo" <?php if ($priorita=="giallo"){echo "checked";} ?> " style="width: 35px;height: 35px;accent-color: yellow;">
      </td>
      <td colspan="1"> 
        <label style="color: #8e8b8b;">Priorità Normle:</label><br>
        <input type="radio" name="priorita" id="verde" value="verde" <?php if ($priorita=="verde"){echo "checked"; } ?>   style="width: 35px;height: 35px;accent-color: green;border: 15px solid green;background-color: green;">
      </td>
    </tr>
    <tr>
      <th colspan="3"> 
          Luogo intervento: 
          <i class="fa-solid fa-magnifying-glass" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor:pointer"></i>
          <i class="fa-solid fa-map" data-bs-toggle="modal" data-bs-target="#exampleModalx" style="cursor:pointer"></i>
          <span id="progrId" style="float:right; padding: 4px 0 0 0; color:yellow;"></span>
          <span id="annullaLuogo" onClick="pulisciLuogo()">&#x2715; Svuota Luogo</span>
          
      </th>
    </tr>
    <tr>
      <td height="45" colspan="1"> 
        <label style="color: #8e8b8b;">Insegna:</label><br>
        <input type="text" class="required" name="insegna" id="insegnaF" value="<?php echo $insegna; ?>" maxlength="200" size="40" >
      </td>
      <td  colspan="2"> 
        <label style="color: #8e8b8b;">Ragione Sociale:</label><br>
        <input type="text" class="required" name="ragsoc" id="ragsocF" value="<?php echo $ragsoc; ?>" maxlength="200" size="60" >
      </td>
    </tr>
    
    <tr>
      <td colspan="1"> 
        <label style="color: #8e8b8b;">Indirizzo:</label><br>
        <input type="text" class="required" name="indirizzo" id="indirizzoF" value="<?php echo $indirizzo; ?>" maxlength="200" size="40" >
      </td>
      <td colspan="1"> 
        <div style="width:49%; float:left;" >
          <label style="color: #8e8b8b;">Cap:</label><br>
          <input type="text" class="required" name="cap" id="capF" value="<?php echo $cap; ?>" maxlength="200" size="5" >
        </div>
        <div style="width:49%; float:right;" >
          <label style="color: #8e8b8b;">Prov:</label><br>
          <input type="text" class="required" name="prov" id="provF" value="<?php echo $prov; ?>" maxlength="50" size="5" >
        </div>
      </td>
      <td colspan="1"> 
        <label style="color: #8e8b8b;">Città:</label><br>
        <input type="text" class="required" name="citta" id="cittaF" value="<?php echo $citta; ?>" maxlength="200" size="25" >
      </td>
    </tr>
    
    <tr>
      <td height="45" colspan="1"> 
        <label style="color: #8e8b8b;">Telefono:</label><br>
        <input type="text" class="required" name="telefono" id="telefonoF" value="<?php echo $telefono; ?>" maxlength="200" size="40">
      </td>
      <td height="45" colspan="1"> 
        <label style="color: #8e8b8b;">Note/Orari:</label><br>
        <input type="text"  name="note" id="noteF" value="<?php echo $note; ?>" maxlength="200" size="40">
      </td>
      <td colspan="1"> 
        <label style="color: #8e8b8b;">Contatto:</label><br>
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
        <label style="color: #8e8b8b;">Descrizione: </label><br>
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
        <label style="color: #8e8b8b;">Numero seriale:</label><br>
        <input type="text" name="serialeparte" id="serialeparte" value="<?php echo $serialeparte ?>" maxlength="200" size="40">
      </td>
      <td height="45" colspan="2"> 
        <label style="color: #8e8b8b;">Nome parte:</label><br>
        <input type="text" name="nomeparte" value="<?php echo $nomeparte; ?>" maxlength="200" size="60" >
      </td>            
    </tr>
    <tr>
      <td height="40" colspan="3"> 
        <label style="color: #8e8b8b;">Nota per la spedizione parti di ricambio: </label><br>
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
        <label style="color: #8e8b8b;">SLA: </label><br>
        <textarea name="notesla"  cols="83" rows="1"><?php echo $notesla; ?></textarea>
      </td>
    </tr>
    
    <tr>
      <th colspan="3"> 
        Appuntamento Intervento:
      </th>
    </tr>
    <tr> 
      <td colspan="1" height="50"> 
        <label style="color: #8e8b8b;">Data Ora:</label><br>
        <input type="text" name="dataapp" id="dateOp" value="<?php echo $dataapp; ?>" maxlength="50" size="20">
      </td>
      <td colspan="2"> 
        <label style="color: #8e8b8b;">Nota appuntamento: </label><br>
        <textarea name="notaapp"  cols="40" rows="1"><?php echo $notaapp; ?></textarea>
      </td>
    </tr> 
    
<!--    
    
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
          <label>Abbonamento:</label><br>
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
-->    
    
    
    
    
    <tr>
      <td colspan="3"  align="center" style="text-align: center; background-color:#FFFFFF;" >       
           <input type="hidden" name="ingranaggioxx" value="300" />
           <input type="hidden" name="ingranaggiohh" value="1" />
             <input type="hidden" name="login" value="<?php echo $login; ?>" />
             <input type="hidden" name="id" value="<?php echo $progr; ?>" />
             <input type="hidden" name="numero" value="<?php echo $numero; ?>" />
             <input type="hidden" name="progrnew" id="progrnew"  value="<?php echo $progrnew; ?>"/>
             <br><br>
             <button autofocus type="submit" class="btn btn-warning">Modifica Ticket</button>
    </td>  
  </tr>         
</table> 
</form> 


<?php }  ?>


<!-- ##############  ASSEGNAZIONE  ################  -->
<a name="destinazione"></a>
<?php if($ingranaggioy==10){ ?>
 <iframe  align="right" frameborder="0" width="0" height="0" scrolling="no" src="distanza100x.php?codice=<? echo $numero; ?>"></iframe> 
<?
if($ingranaggiogg=="A"){
$adesso=date("Y-m-d H:m:s"); 

$sqlll = "UPDATE assegnato set 
        ko = 'ko'
        where 
        numero = '$numero' 
        ";
#echo $sqlll."<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; exit;        
        if ($conn->query($sqlll) === TRUE) { } else { echo "Error inserted record: " . $conn->error; } 

$sql1vr = "SELECT * FROM cat  where codice = '$catscelto' ";
#echo $sql1vr."<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";  
$resultvr = $conn->query($sql1vr);
if ($resultvr->num_rows > 0) {
   while($macrogruppovr = $resultvr->fetch_assoc())
		{
         $codicevx = $macrogruppovr["codice"];
         $ragsocvx = $macrogruppovr["ragsoc"];
         }}
$catcomposto=$catscelto." - ".$ragsocvx;         
$sqlr = "INSERT INTO assegnato
              (       
              numero, 
              dataassegno, 
              ragsoc, 
              login) 
            VALUES (            
              '$numero',
              '$adesso', 
              '$catcomposto',
              '$login'
              )";
#echo $sqlr."<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; exit;
  if ($conn->query($sqlr) === TRUE) { }  else { echo $sqlr."Errore inserimento recoerd: " . $conn->error; } 
$sql = "SELECT *  FROM  tk where  numero  = '$numero' " ;  
#  echo $sql."<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; exit;
  $rCount = 1;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())	
    { $statoww = $macrogruppo["stato"]; }} 
#echo $statoww."<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; exit;    
    
if($statoww=="Aperto"){   
$sqlll = "UPDATE tk set 
        stato = 'Assegnato'
        where 
        numero = '$numero' 
        ";
#echo $sqlll."<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; exit;        
        if ($conn->query($sqlll) === TRUE) { } else { echo "Error inserted record: " . $conn->error; } 
$ingranaggiogg="";        
}  }


#echo "passo ".$ingranaggiogg"<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
$sql = "SELECT *  FROM  tk where  numero  = '$numero' " ;  
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
      $stato = $macrogruppo["stato"];
      
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
?>
<!--<p align="center"><font size="4" face="Verdana" color="cc0000">
  <?php echo $errore; ?></font>-->
  
<?php

$swcecat=0;
$swcetec=0;
$sql1 = "SELECT * FROM assegnato  where numero = '$numero'  ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $ragsoc = $macrogruppo["ragsoc"];	
        $swcecat=1;} }
$sql1 = "SELECT * FROM assegnatotec  where numero = '$numero' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $ragsoc = $macrogruppo["ragsoc"];	
        $swcetec=1;} }
?>
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Assegnazione a Terza Parte Ticket <?php echo $numero." Stato ".$stato; ?></font></b></p>


<!--    #################  INIZIO ESPOSIZIONE   TICKET   ################# -->

<table class="expose-table">
  <tr>
    <th colspan="3"> 
      <label>Identificazione:</label>
    </th>
  </tr>
   <tr>
    <td colspan="1">
      <label style="color: #8e8b8b;" style="color: #8e8b8b;">Cliente:</label style="color: #8e8b8b;"><br>
      <span> <?php echo $cliente; ?></span> 
    </td> 
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Commessa:</label><br>
      <span> <?php echo $commessa; ?></span>
    </td>            
  </tr>
  <tr>
    <td colspan="1">
      <label style="color: #8e8b8b;">Attività:</label><br>
      <span> <?php echo $attivita; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">N. Ticket Cliente:</label><br>
      <span> <?php echo $ticketcli; ?></span>
    </td>       
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Data di aperura:</label><br>
      <span> <?php echo $datainizio; ?></span>
		</td>            
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Tipo intervento:</label><br>
      <span> <?php echo $tipointervento; ?></span>
    </td> 
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Apparato:</label><br>
      <span> <?php echo $apparato; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Seriale:</label><br>
      <span> <?php echo $seriale; ?></span>
    </td>
  </tr>
  
  
  <? //if($priorita==""){$priorita="verde";} ?>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Priorità alta:</label><br>
      <?php if ($priorita=="rosso"){
        echo '<i class="fa-solid fa-circle" style="color:red;padding: 10px 40px;font-size: 27px;"></i>';
      } else {
        echo '<i class="fa-solid fa-circle" style="color:#E9E9E9;padding: 10px 40px;font-size: 27px;"></i>';
      } ?>
    </td> 
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Priorità media:</label><br>
      <?php if ($priorita=="giallo"){
        echo '<i class="fa-solid fa-circle" style="color:yellow;padding: 10px 40px;font-size: 27px;"></i>';
      } else {
        echo '<i class="fa-solid fa-circle" style="color:#E9E9E9;padding: 10px 40px;font-size: 27px;"></i>';
      } ?>
      </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Priorità Normale:</label><br>
      <?php if ($priorita=="verde"){
        echo '<i class="fa-solid fa-circle" style="color:green;padding: 10px 40px;font-size: 27px;"></i>';
      } else {
        echo '<i class="fa-solid fa-circle" style="color:#E9E9E9;padding: 10px 40px;font-size: 27px;"></i>';
      } ?>
      </td>
  </tr>
  
  
  
  <tr>
    <th colspan="3"> 
      <label>Luogo intervento: 
      <i class="fa-solid fa-map" data-bs-toggle="modal" data-bs-target="#exampleModalx" style="cursor:pointer"></i>
      
      </label> 
    </th>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Insegna:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $insegna; ?></span>
    </td>
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Ragione Sociale:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $ragsoc; ?></span>
    </td>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Indirizzo:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $indirizzo; ?></span>
    </td>
    <td colspan="1"> 
      <div style="width:49%; float:left">
        <label style="color: #8e8b8b;">Cap:</label style="color: #8e8b8b;"><br>
        <span ><?php echo $cap; ?></span>
      </div>
      <div style="width:49%; float:right">
        <label style="color: #8e8b8b;">Prov:</label style="color: #8e8b8b;"><br>
        <span ><?php echo $prov; ?></span>
      </div>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Città:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $citta; ?></span>
    </td>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Telefoni:</label><br>
      <span ><?php echo $telefono; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Note/Orari:</label><br>
      <span ><?php echo $note; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Contatto:</label><br>
      <span ><?php echo $contatto; ?></span>
    </td>
  </tr>
  
  
  
  <tr>
    <th colspan="3"> 
      <label >Descrizione Attivita Intervento:</label> 
    </th>
  </tr>
  <tr>
    <td colspan="3"> 
      <label style="color: #8e8b8b;">Intervento:</label><br>
      <span> <?php echo $intervento; ?></span>
    </td>
  </tr>


  
  <tr>
    <th colspan="3"> 
      <label >Segnalazione Parte da Sostituire:</label> 
    </th>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Numero Seriale:</label><br>
      <span> <?php echo $serialeparte; ?></span>
    </td>
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Nome Parte:</label><br>
      <span> <?php echo $nomeparte; ?></span>
    </td>
  </tr>
  <tr> 
    <td colspan="3"> 
      <label style="color: #8e8b8b;"<b>Nota per la spedizione parti di ricambio:</label style="color: #8e8b8b;"><br>
      <span> <? echo $spedizione; ?></span>
    </td>   
  </tr>
  
  <tr>       
    <th colspan="3"> 
      <label >Descrizione Note SLA:</label style="color: #8e8b8b;">
    </th>
  </tr>
  <tr> 
    <td colspan="3"> 
      <label style="color: #8e8b8b;"<b>SLA:</label style="color: #8e8b8b;"><br>
      <span><?php echo $notesla; ?></span>
  </tr>
  
  

  <tr>       
    <th colspan="3"> 
      <label >Appuntamento Intervento:</label style="color: #8e8b8b;">
    </th>
  </tr>
  <tr> 
    <td colspan="1"> 
      <label style="color: #8e8b8b;"<b>Data Ora:</label style="color: #8e8b8b;"><br>
      <span><?php echo $dataapp; ?></span>
    </td>
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Nota appuntamento: </label style="color: #8e8b8b;"><br>
      <span><?php echo $notaapp; ?></span>
    </td>
  </tr>
 
</table>

<!--    #################  FINE ESPOSIZIONE  ################# -->
<br>

<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Assegnazione</font></b></p>

<table class="table-form">
  <tr>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;" >Codice 
      <i class="fa-solid fa-magnifying-glass" data-bs-toggle="modal" data-bs-target="#cat" style="cursor:pointer"></i>
      </th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">distanza Km</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Ragione sociale</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Indirizzo</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Resp. Operativo</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Telefono</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Email</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Provincia</th>
  </tr>
<?php
if($swcecat==1){
$sql1 = "SELECT * FROM assegnato  where numero = '$numero' and ko = 'ok' order by dataassegno";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $ragsoc = $macrogruppo["ragsoc"];	
        $dataassegno = $macrogruppo["dataassegno"];
        $comodo=explode(" ",$dataassegno);
        $comododata=$comodo[0];
        $comododatax=explode("-",$comododata);
        $dataassegnox=$comododatax[2]."/".$comododatax[1]."/".$comododatax[0];
        $dataassegno=$dataassegnox." ".$comodo[1];
        #echo "data ".$dataassegno;
        $swce=1;
        $comodo=explode(" - ",$ragsoc);
        $codicetp=$comodo[0]; 
$sql1v = "SELECT * FROM cat  where codice = '$codicetp' ";
#echo $sql1v; 
$resultv = $conn->query($sql1v);
if ($resultv->num_rows > 0) {
   while($macrogruppov = $resultv->fetch_assoc())
		{
         $codiceww = $macrogruppov["codice"];
         $ragsocv = $macrogruppov["ragsoc"];
         $viav = $macrogruppov["via"];
         $cittav = $macrogruppov["citta"];
         $capv = $macrogruppov["cap"];
         $provv = $macrogruppov["prov"];
         $regionev = $macrogruppov["regione"];
         $ivav = $macrogruppov["iva"];
         $ibanv = $macrogruppov["iban"];
         $sdiv = $macrogruppov["sdi"];
         $ammcognome = $macrogruppov["ammcognome"];
         $ammnome = $macrogruppov["ammnome"];
         $optelefono = $macrogruppov["optelefono"];
         $opemail = $macrogruppov["opemail"];
         $opcognome = $macrogruppov["opcognome"];
         $opnome = $macrogruppov["opnome"];
         $opcognomenome=$opcognome." ".$opnome;
$indirizzor=$viav." - ".$capv." ".$cittav; 
$sql1q = "SELECT * FROM distanza  where codicetk = '$numero' and codice = '$codiceww' ";
#echo $sql1q."<br>";
$resultq = $conn->query($sql1q);
if ($resultq->num_rows > 0) {
  while($macrogruppoq = $resultq->fetch_assoc()) 
		{$kmv = $macrogruppoq["km"];}}   
$kmv = ltrim($kmv, "0");                
?>         
<tr>
    <td colspan="1"> 
      <span ><?php echo $codiceww ; ?></span>
    </td>

    <td colspan="1" > 
    <center>
      <span ><?php echo $kmv; ?></span>
      </center>
    </td>
    
    <td colspan="1"> 
      <span ><?php echo $ragsocv; ?></span>
    </td>
    
    <td colspan="1"> 
      <span ><?php echo $indirizzor; ?></span>
    </td>
    
    <td colspan="1"> 
      <span ><?php echo $opcognomenome; ?></span>
    </td>
    
    <td colspan="1"> 
      <span ><?php echo $optelefono; ?></span>
    </td>
    
    <td colspan="1"> 
      <span ><?php echo $opemail; ?></span>
    </td>
    
    <td colspan="1"> 
      <span ><?php echo $provv; ?></span>
    </td>
</tr>
<? 
}
}} }}
if($swcetec==1){
$sql1 = "SELECT * FROM assegnatotec  where numero = '$numero' and ko = 'ok' order by dataassegno";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $ragsoccat = $macrogruppo["ragsoc"];	
        $dataassegnocat = $macrogruppo["dataassegno"];
        $comodo=explode(" ",$dataassegno);
        $comododata=$comodo[0];
        $comododatax=explode("-",$comododata);
        $dataassegnox=$comododatax[2]."/".$comododatax[1]."/".$comododatax[0];
        $dataassegno=$dataassegnox." ".$comodo[1];
        #echo "data ".$dataassegno;
        $swce=1;
        $comodo=explode(" - ",$ragsoc);
        $codicetp=$comodo[0]; 
#echo  $sql1;    
?>         
<tr>
    <td colspan="1"> 
      <span > </span>
    </td>

    <td colspan="1"> 
      <span >0 Km</span>
    </td>

    <td colspan="1"> 
      <span ><?php echo $ragsoccat; ?></span>
    </td>
    
    <td colspan="1"> 
      <span ></span>
    </td>
    
    <td colspan="1"> 
      <span ><?php echo $ragsoccat; ?></span>
    </td>
    
    <td colspan="1"> 
      <span ></span>
    </td>
    
    <td colspan="1"> 
      <span ></span>
    </td>
    
    <td colspan="1"> 
      <span ></span>
    </td>
</tr>
<? 
}
}} 
 ?>
</table>
<br>

<div align="center" >
<table align="center" >
<tr align="center">
<td width="50%" align="center">
<form method="POST" action=""  enctype="multipart/form-data">
        <input type="hidden" name="ingranaggioxx" value="" />
        <input type="hidden" name="ingranaggioy" value="10" />
        <input type="hidden" name="ingranaggiobb" value="A" />
        <input type="hidden" name="login" value="<?php echo $login; ?>" />
        <input type="hidden" name="id" value="<?php echo $progr; ?>" />
        <input type="hidden" name="codice" value="<?php echo $numero; ?>" />
        <input type="hidden" name="progrnew" id="progrnew"  value="<?php echo $progrnew; ?>"/>
    <button class="btn btn-primary" type="submit" type="button" >Assegnazione a terze parti</button>
</form> 
</td>
<td width="50%" align="center">
<form method="POST" action=""   enctype="multipart/form-data">
        <input type="hidden" name="ingranaggioxx" value="" />
        <input type="hidden" name="ingranaggioy" value="10" />
        <input type="hidden" name="ingranaggiobb" value="B" />
        <input type="hidden" name="login" value="<?php echo $login; ?>" />
        <input type="hidden" name="id" value="<?php echo $progr; ?>" />
        <input type="hidden" name="codice" value="<?php echo $numero; ?>" />
        <input type="hidden" name="progrnew" id="progrnew"  value="<?php echo $progrnew; ?>"/>   
    <button class="btn btn-primary" type="submit" type="button" >Assegnazione a tecnico interno</button>
</form>  
</td>
</tr>
</table>  
</div>
<? if($ingranaggiobb=="A"){ ?>

<div class="table-ticket-footer">
  <table id="tableFooter" class="display" cellspacing="0"  style="position:relative;">         
              <thead class="intesta">
    <tr class="testa">
      
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Codice</td>          
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Distanza Km
<!--            <i class="fa-solid fa-map" data-bs-toggle="modal" data-bs-target="#multiplo" style="cursor:pointer"></i>  -->
            </td>          
            
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Ragione sociale</td>
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >indirizzo</td>        
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Provincia</td>
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Regione</td>
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Resp. Operativo</td>            
            <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Telefono</td>
            <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Email</td>
			<td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" ></td>		
            </tr>       
    </thead>
    <tbody>
<?php  
$tabella=array(); 
$tabellax=array(); 
$giro=0; 
$girox=1;
$sql1v = "SELECT * FROM cat  order by ragsoc ";
#echo $sql1v; 
$resultv = $conn->query($sql1v);
if ($resultv->num_rows > 0) {
   while($macrogruppov = $resultv->fetch_assoc())
		{
         $codicev = $macrogruppov["codice"];
         $ragsocv = $macrogruppov["ragsoc"];
         $viav = $macrogruppov["via"];
         $cittav = $macrogruppov["citta"];
         $capv = $macrogruppov["cap"];
         $provv = $macrogruppov["prov"];
         $regionev = $macrogruppov["regione"];
         $ivav = $macrogruppov["iva"];
         $ibanv = $macrogruppov["iban"];
         $sdiv = $macrogruppov["sdi"];
         $ammcognome = $macrogruppov["ammcognome"];
         $ammnome = $macrogruppov["ammnome"];
         $optelefono = $macrogruppov["optelefono"];
         $opemail = $macrogruppov["opemail"];
         $opcognome = $macrogruppov["opcognome"];
         $opnome = $macrogruppov["opnome"];
         $opcognomenome=$opcognome." ".$opnome;
         $indirizzot=$viav." - ".$capv." ".$cittav;  
$sql1q = "SELECT * FROM distanza  where codicetk = '$numero' and codice = '$codicev' ";
#echo $sql1q."<br>";
$resultq = $conn->query($sql1q);
if ($resultq->num_rows > 0) {
  while($macrogruppoq = $resultq->fetch_assoc()) 
		{$km = $macrogruppoq["km"];}}  

$regionecat="";
$sqlxj = "SELECT *  FROM  province where  sigla = '$provv' " ;  
#echo $sql;
$rCount = 1;
$resultxj = $conn->query($sqlxj);
if ($resultxj->num_rows > 0) {
  while($macrogruppoxj = $resultxj->fetch_assoc())	
	{ $regionecat = $macrogruppoxj["regione"]; }} 
    
if($regionecat==$regionetk){     
  
$tabella[$giro]=" const TP".$codicev." = '".$cittav." ".$viav."'; "; 

$tabellax[0]="destinations: ["; 

$tabellax[$girox]="TP".$codicev.",";  
$girox++; 
$giro++;   
} 


?>   
  
      <tr >    
        <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $codicev; ?></font></td>
        <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $km; ?></font></td>
        
        <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $ragsocv; ?></font></td>
        <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $indirizzot; ?></font></td>
        <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $provv; ?></font></td>
        <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $regionecat; ?></font></td>
        <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $opcognomenome; ?></font></td>
        <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $optelefono; ?></font></td>
        <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $opemail; ?></font></td>
<form method="POST" action=""   enctype="multipart/form-data">    
		<td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" >		
        <input type="hidden" name="ingranaggioxx" value="" />
        <input type="hidden" name="ingranaggioy" value="10" />
        <input type="hidden" name="ingranaggiobb" value="A" />
        <input type="hidden" name="ingranaggiogg" value="A" />
        <input type="hidden" name="login" value="<?php echo $login; ?>" />
        <input type="hidden" name="id" value="<?php echo $progr; ?>" />
        <input type="hidden" name="codice" value="<?php echo $numero; ?>" />  
        <input type="hidden" name="catscelto" value="<?php echo $codicev; ?>" />        
        <input type="hidden" name="progrnew" id="progrnew"  value="<?php echo $progrnew; ?>"/>   
    <button class="btn btn-primary" type="submit" type="button" >Assegna</button>
  </td>
</form>
      </tr>	
      
<?php }}  ?>                    
  </table>
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Posizione delle T.P. e posizione del Ticket <?php echo $numero; ?> nella regione <? echo $regionetk; ?></font></b></p>
<? $origine=$citta." ".$indirizzo; 
#echo $origine;
$girox++;
$tabellax[$girox]="],"; 
#echo $giro;
if ($giro!=0) {

 ?> 
<center>
<iframe  align="right" frameborder="0" width="80%" height="180%"  src="multiplo.php?origine=<?php echo $origine; ?>&giro=<? echo $giro; ?>&tabella=<?  echo base64_encode(serialize($tabella)); ?>&tabellax=<? echo base64_encode(serialize($tabellax)); ?>&girox=<? echo $girox; ?>"></iframe> 
</center>  
</div>   
<?php }}  ?>
<?php }  ?>    

     
<!--   ###########################   DOCUMENTAZIONE  ###############   -->
<?php if($ingranaggioy==40){ ?>
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Documentazione Ticket <?php echo $numero." Stato ".$stato; ?></font></b></p>


<!--    #################  INIZIO ESPOSIZIONE   TICKET   ################# -->

<table class="expose-table">
  <tr>
    <th colspan="3"> 
      <label>Identificazione:</label>
    </th>
  </tr>
   <tr>
    <td colspan="1">
      <label style="color: #8e8b8b;" style="color: #8e8b8b;">Cliente:</label style="color: #8e8b8b;"><br>
      <span> <?php echo $cliente; ?></span> 
    </td> 
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Commessa:</label><br>
      <span> <?php echo $commessa; ?></span>
    </td>            
  </tr>
  <tr>
    <td colspan="1">
      <label style="color: #8e8b8b;">Attività:</label><br>
      <span> <?php echo $attivita; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">N. Ticket Cliente:</label><br>
      <span> <?php echo $ticketcli; ?></span>
    </td>       
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Data di aperura:</label><br>
      <span> <?php echo $datainizio; ?></span>
		</td>            
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Tipo intervento:</label><br>
      <span> <?php echo $tipointervento; ?></span>
    </td> 
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Apparato:</label><br>
      <span> <?php echo $apparato; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Seriale:</label><br>
      <span> <?php echo $seriale; ?></span>
    </td>
  </tr>
  
  
  <? //if($priorita==""){$priorita="verde";} ?>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Priorità alta:</label><br>
      <?php if ($priorita=="rosso"){
        echo '<i class="fa-solid fa-circle" style="color:red;padding: 10px 40px;font-size: 27px;"></i>';
      } else {
        echo '<i class="fa-solid fa-circle" style="color:#E9E9E9;padding: 10px 40px;font-size: 27px;"></i>';
      } ?>
    </td> 
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Priorità media:</label><br>
      <?php if ($priorita=="giallo"){
        echo '<i class="fa-solid fa-circle" style="color:yellow;padding: 10px 40px;font-size: 27px;"></i>';
      } else {
        echo '<i class="fa-solid fa-circle" style="color:#E9E9E9;padding: 10px 40px;font-size: 27px;"></i>';
      } ?>
      </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Priorità Normale:</label><br>
      <?php if ($priorita=="verde"){
        echo '<i class="fa-solid fa-circle" style="color:green;padding: 10px 40px;font-size: 27px;"></i>';
      } else {
        echo '<i class="fa-solid fa-circle" style="color:#E9E9E9;padding: 10px 40px;font-size: 27px;"></i>';
      } ?>
      </td>
  </tr>
  
  
  
  <tr>
    <th colspan="3"> 
      <label>Luogo intervento: 
      <i class="fa-solid fa-map" data-bs-toggle="modal" data-bs-target="#exampleModalx" style="cursor:pointer"></i>
      
      </label> 
    </th>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Insegna:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $insegna; ?></span>
    </td>
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Ragione Sociale:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $ragsoc; ?></span>
    </td>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Indirizzo:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $indirizzo; ?></span>
    </td>
    <td colspan="1"> 
      <div style="width:49%; float:left">
        <label style="color: #8e8b8b;">Cap:</label style="color: #8e8b8b;"><br>
        <span ><?php echo $cap; ?></span>
      </div>
      <div style="width:49%; float:right">
        <label style="color: #8e8b8b;">Prov:</label style="color: #8e8b8b;"><br>
        <span ><?php echo $prov; ?></span>
      </div>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Città:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $citta; ?></span>
    </td>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Telefoni:</label><br>
      <span ><?php echo $telefono; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Note/Orari:</label><br>
      <span ><?php echo $note; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Contatto:</label><br>
      <span ><?php echo $contatto; ?></span>
    </td>
  </tr>
  
  
  
  <tr>
    <th colspan="3"> 
      <label >Descrizione Attivita Intervento:</label> 
    </th>
  </tr>
  <tr>
    <td colspan="3"> 
      <label style="color: #8e8b8b;">Intervento:</label><br>
      <span> <?php echo $intervento; ?></span>
    </td>
  </tr>


  
  <tr>
    <th colspan="3"> 
      <label >Segnalazione Parte da Sostituire:</label> 
    </th>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Numero Seriale:</label><br>
      <span> <?php echo $serialeparte; ?></span>
    </td>
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Nome Parte:</label><br>
      <span> <?php echo $nomeparte; ?></span>
    </td>
  </tr>
  <tr> 
    <td colspan="3"> 
      <label style="color: #8e8b8b;"<b>Nota per la spedizione parti di ricambio:</label style="color: #8e8b8b;"><br>
      <span> <? echo $spedizione; ?></span>
    </td>   
  </tr>
  
  <tr>       
    <th colspan="3"> 
      <label >Descrizione Note SLA:</label style="color: #8e8b8b;">
    </th>
  </tr>
  <tr> 
    <td colspan="3"> 
      <label style="color: #8e8b8b;"<b>SLA:</label style="color: #8e8b8b;"><br>
      <span><?php echo $notesla; ?></span>
  </tr>
  
  

  <tr>       
    <th colspan="3"> 
      <label >Appuntamento Intervento:</label style="color: #8e8b8b;">
    </th>
  </tr>
  <tr> 
    <td colspan="1"> 
      <label style="color: #8e8b8b;"<b>Data Ora:</label style="color: #8e8b8b;"><br>
      <span><?php echo $dataapp; ?></span>
    </td>
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Nota appuntamento: </label style="color: #8e8b8b;"><br>
      <span><?php echo $notaapp; ?></span>
    </td>
  </tr>
 
</table>

<!--    #################  FINE ESPOSIZIONE  ################# -->
<br>
<? $oggiora=date("d/m/Y"); 
$numerodoc=$numero;
?>
<p align="center"><font face="Verdana" size="4" style="font-family: Verdana;" color="#993300">Inserimento Nuovo Documento </font></b></p><div align="center">    
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
         <input type="hidden" name="codice" value="<?php echo $numero; ?>" />
         
		 <input class="required" type="file" name="fileToUpload" id="fileToUpload" size="150" >
         </td>	
         </tr>
         <tr>
         <td colspan="2" style="text-align:center;">           
         <input type="hidden" name="ingranaggioy" value="40" />
         <input type="hidden" name="login" value="<?php echo $login; ?>" />    
         <input type="hidden" name="codice" value="<?php echo $numero; ?>" />
         <input type="hidden" name="ingranaggio" value="34" />  
         <input type="hidden" name="ingranaggiodocu" value="1" />                            
         <button class="btn btn-primary" type="submit" type="button" >Memorizza Documento</button>                  
     	 </td>
        </form>
        </tr>
        </table>
        <br>
<p align="center"><font face="Verdana" size="4" style="font-family: Verdana;" color="#993300">Lista Documenti Caricati </font></b></p>   

<table class="table-form">        
        <tr>
		<th colspan="1" class=" borted-top-table" width="10%"> 
        Data Doc.
        </th>
        <th colspan="1" class=" borted-top-table" width="10%"> 
        Scad. Doc.
        </th>
        <th colspan="1" class=" borted-top-table" width="70%"> 
        Oggetto
        </th>
        <th colspan="2" class=" borted-top-table" width="10%" style="text-align:center;"> 
        Operazioni
        </th>
        </tr> 
        
<?
$sql = "SELECT * FROM documenti  where    tipodoc = '$numero'";        
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
   $file = $macrogruppo["file"];
#echo $prgr;
?>
<tr>
<tr onMouseOver="style.background='#c9cacb';" onMouseOut="style.background=''">

    
		<td  style="color: <?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>;"><? echo $data; ?></td>
        <td  style="color: <?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>;"><? echo $datasca; ?></td>
        
        <td  style="color: <?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>;"><? echo $oggettox; ?></td>
		<td style="text-align:center;">
        <a href="?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&codice=<?php echo $numero; ?>&prgrx=<? echo $prgr; ?>&ingranaggioy=40&ingranaggiovedi=201&prgry=<?php echo $prgr; ?>" >
        <button type="button" class="btn btn-success" ><i class="fa-solid fa-plus"></i></button></a>
        </td>
        <td style="text-align:center;" >
<!--        <a  onclick="myFunction('?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&prgrx=<? echo $prgr; ?>&ingranaggio=10&ingranaggiott=202&oggetto=<?php echo $oggettox; ?>&progr=<?php echo $progr; ?>');" ><img border="0" background="btn1.gif" src="x1.png" width="15" height="15"></a>   -->
        <a href="?fileh=<?php echo $file; ?>&ingranaggiocancelladoc=1&login=<?php echo $login; ?>&codice=<?php echo $numero; ?>&prgrx=<? echo $prgr; ?>&ingranaggioy=40&prgry=<?php echo $prgr; ?>&progr=<?php echo $progr; ?>" >
        <button type="button" class="btn btn-success" onclick="return confirm('Sei sicuro di volere cancellare?')"><i class="fa-solid fa-minus"></i></button></a>

</td>

     
        </tr>        
        
<? }} ?>        
        
        
</table>               
<?php if($ingranaggiovedi==201){ ?>

    <tr>
    <td colspan="5" ><br>
<div>
<iframe  align="center" frameborder="0" width="85%" height="800" scrolling="yes" src="esponipdfffxx.php?login=<?php echo $login; ?>&fl=<?php echo $fileh; ?>"></iframe> 
</div>    
    </td>
    </tr>
<?php } 

?>   
	</table> 
</td>
</tr>
</table>              
            <br>

<? } ?>
<!--            ################# FINE DOCUMENTAZIONE    -->


<!--            ################# PIANIFICA INTERVENTO    -->
<?php if($ingranaggioy==50){ 
if($stato!="Aperto"){
?>
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Pianificazione del  Ticket <?php echo $numero." Stato ".$stato; ?></font></b></p>
<center>
<button type="text" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ticket" style="cursor:pointer">Vedi Ticket</button>
</center>

<!--    #################  INIZIO ESPOSIZIONE   TICKET   ################# -->
<!--
<table class="expose-table">
  <tr>
    <th colspan="3"> 
      <label>Identificazione:</label>
    </th>
  </tr>
   <tr>
    <td colspan="1">
      <label style="color: #8e8b8b;" style="color: #8e8b8b;">Cliente:</label style="color: #8e8b8b;"><br>
      <span> <?php echo $cliente; ?></span> 
    </td> 
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Commessa:</label><br>
      <span> <?php echo $commessa; ?></span>
    </td>            
  </tr>
  <tr>
    <td colspan="1">
      <label style="color: #8e8b8b;">Attività:</label><br>
      <span> <?php echo $attivita; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">N. Ticket Cliente:</label><br>
      <span> <?php echo $ticketcli; ?></span>
    </td>       
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Data di aperura:</label><br>
      <span> <?php echo $datainizio; ?></span>
		</td>            
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Tipo intervento:</label><br>
      <span> <?php echo $tipointervento; ?></span>
    </td> 
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Apparato:</label><br>
      <span> <?php echo $apparato; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Seriale:</label><br>
      <span> <?php echo $seriale; ?></span>
    </td>
  </tr>
  
  
  <? //if($priorita==""){$priorita="verde";} ?>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Priorità alta:</label><br>
      <?php if ($priorita=="rosso"){
        echo '<i class="fa-solid fa-circle" style="color:red;padding: 10px 40px;font-size: 27px;"></i>';
      } else {
        echo '<i class="fa-solid fa-circle" style="color:#E9E9E9;padding: 10px 40px;font-size: 27px;"></i>';
      } ?>
    </td> 
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Priorità media:</label><br>
      <?php if ($priorita=="giallo"){
        echo '<i class="fa-solid fa-circle" style="color:yellow;padding: 10px 40px;font-size: 27px;"></i>';
      } else {
        echo '<i class="fa-solid fa-circle" style="color:#E9E9E9;padding: 10px 40px;font-size: 27px;"></i>';
      } ?>
      </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Priorità Normale:</label><br>
      <?php if ($priorita=="verde"){
        echo '<i class="fa-solid fa-circle" style="color:green;padding: 10px 40px;font-size: 27px;"></i>';
      } else {
        echo '<i class="fa-solid fa-circle" style="color:#E9E9E9;padding: 10px 40px;font-size: 27px;"></i>';
      } ?>
      </td>
  </tr>
  
  
  
  <tr>
    <th colspan="3"> 
      <label>Luogo intervento: 
      <i class="fa-solid fa-map" data-bs-toggle="modal" data-bs-target="#exampleModalx" style="cursor:pointer"></i>
      
      </label> 
    </th>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Insegna:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $insegna; ?></span>
    </td>
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Ragione Sociale:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $ragsoc; ?></span>
    </td>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Indirizzo:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $indirizzo; ?></span>
    </td>
    <td colspan="1"> 
      <div style="width:49%; float:left">
        <label style="color: #8e8b8b;">Cap:</label style="color: #8e8b8b;"><br>
        <span ><?php echo $cap; ?></span>
      </div>
      <div style="width:49%; float:right">
        <label style="color: #8e8b8b;">Prov:</label style="color: #8e8b8b;"><br>
        <span ><?php echo $prov; ?></span>
      </div>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Città:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $citta; ?></span>
    </td>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Telefoni:</label><br>
      <span ><?php echo $telefono; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Note/Orari:</label><br>
      <span ><?php echo $note; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Contatto:</label><br>
      <span ><?php echo $contatto; ?></span>
    </td>
  </tr>
  
  
  
  <tr>
    <th colspan="3"> 
      <label >Descrizione Attivita Intervento:</label> 
    </th>
  </tr>
  <tr>
    <td colspan="3"> 
      <label style="color: #8e8b8b;">Intervento:</label><br>
      <span> <?php echo $intervento; ?></span>
    </td>
  </tr>


  
  <tr>
    <th colspan="3"> 
      <label >Segnalazione Parte da Sostituire:</label> 
    </th>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Numero Seriale:</label><br>
      <span> <?php echo $serialeparte; ?></span>
    </td>
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Nome Parte:</label><br>
      <span> <?php echo $nomeparte; ?></span>
    </td>
  </tr>
  <tr> 
    <td colspan="3"> 
      <label style="color: #8e8b8b;"<b>Nota per la spedizione parti di ricambio:</label style="color: #8e8b8b;"><br>
      <span> <? echo $spedizione; ?></span>
    </td>   
  </tr>
  
  <tr>       
    <th colspan="3"> 
      <label >Descrizione Note SLA:</label style="color: #8e8b8b;">
    </th>
  </tr>
  <tr> 
    <td colspan="3"> 
      <label style="color: #8e8b8b;"<b>SLA:</label style="color: #8e8b8b;"><br>
      <span><?php echo $notesla; ?></span>
  </tr>
  
  

  <tr>       
    <th colspan="3"> 
      <label >Appuntamento Intervento:</label style="color: #8e8b8b;">
    </th>
  </tr>
  <tr> 
    <td colspan="1"> 
      <label style="color: #8e8b8b;"<b>Data Ora:</label style="color: #8e8b8b;"><br>
      <span><?php echo $dataapp; ?></span>
    </td>
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Nota appuntamento: </label style="color: #8e8b8b;"><br>
      <span><?php echo $notaapp; ?></span>
    </td>
  </tr>
 
</table>
-->
<!--    #################  FINE ESPOSIZIONE  ################# -->
<br>


<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Intervento Pianificato</font></b></p>

<table class="table-form">        
        <tr>
        <th colspan="1" class=" borted-top-table" width="10%"> 
        N.Int.
        </th>
		<th colspan="1" class=" borted-top-table" width="10%"> 
        Data
        </th>
        <th colspan="1" class=" borted-top-table" width="10%"> 
        Ora
        </th>
        <th colspan="1" class=" borted-top-table" width="30%"> 
        luogo
        </th>
        <th colspan="1" class=" borted-top-table" width="20%" > 
        Tecnico
        </th>
        <th colspan="1" class=" borted-top-table" width="30%" > 
        Note
        </th>
        </tr> 
        
<?
$sql = "SELECT * FROM pianificato  where    codice = '$numero'";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
   $prgr = $macrogruppo["progr"];
   $dataint = $macrogruppo["dataint"];
   $oraint = $macrogruppo["oraint"];
   $luogoint = $macrogruppo["luogoint"];
   $tecnicoint= $macrogruppo["tecnicoint"];
   $noteint = $macrogruppo["noteint"];
   $numerointervento = $macrogruppo["numerointervento"];
#echo $sql;
?>
<tr>
<tr onMouseOver="style.background='#c9cacb';" onMouseOut="style.background=''"> 
        <td   colspan="1" ><? echo $numerointervento; ?></td>
		<td   colspan="1" ><? echo $dataint; ?></td>
        <td   colspan="1" ><? echo $oraint; ?></td>        
        <td   colspan="1"><? echo $luogoint; ?></td>
        <td   colspan="1"><? echo $tecnicoint; ?></td>
        <td   colspan="1"><? echo $noteint; ?></td>  
        </tr>        
        
<? }}  ?>               
</table>             

<br>

<p align="center"><font face="Verdana" size="4" style="font-family: Verdana;" color="#993300">Inserimento Nuova Pianificazione </font></b></p><div align="center">    
<table class="table-form">
<form action="" method="post"  name="modulo" onSubmit="return controllo();">
<tr>
		<th colspan="2" class=" borted-top-table" width="10%"> 
        Pianifica Intervento
        </th>
</tr>        
<tr>
		<td colspan="1"> 
        <label style="color: #8e8b8b;">Data</label>
        <input class="required" type="text" id="dateOp"  name="dataint"  maxlength="10" value="<? echo $dataapp; ?>">
        </td>  
        <td colspan="1"> 
        <label style="color: #8e8b8b;">Ora</label>
        <input class="required" type="text"  name="oraint"  id="oraint" maxlength="10" >
        </td>
</tr>         
<tr>
       <td colspan="2"> 
        <label style="color: #8e8b8b;">luogo</label>
        <input class="required" type="text"   name="luogoint"  id="luogoint" maxlength="200" value="<? echo $indirizzo." ".$cap." ".$citta." ".$prov; ?>">
        </td> 
</tr>
<tr>
        <td colspan="1"> 
        <label style="color: #8e8b8b;">Tecnico</label>
        <input  type="text"   name="tecnicoint"  id="tecnicoint" maxlength="200" >
        </td>  
        <td colspan="1"> 
        <label style="color: #8e8b8b;">Note</label>
        <input  type="text"   name="noteint"  maxlength="500" >
        </td>
</tr>
<tr>
       <td colspan="2" style="text-align:center;"> 
        <input type="hidden" name="ingranaggio" value="6" />
       <input type="hidden" name="ingranaggioxx" value="" />
       <input type="hidden" name="ingranaggiopian" value="1" />    
       <input type="hidden" name="ingranaggioy" value="50" />
       <input type="hidden" name="codice" value="<?php echo $numero; ?>" />   
       <input type="hidden" name="login" value="<?php echo $login; ?>" />                
       <button type="submit" class="btn btn-success" >Memorizza</button>

       </td>
</tr>
</form>
</table>

<? } 
else
{  ?>
<br>
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Impossibile pianificare un intervento del Ticket <?php echo $numero; ?> prima di essere assegnato ad una T.P.</font></b></p>
<? } }?>


<!--    #################  CHIUSURA   TICKET   ################# -->
<?php if($ingranaggioy==30){ 
#echo "passo";
if($stato=="Assegnato" or $stato=="Pianificato" or $stato == 'Richiesta di Chiusura' or $stato == 'Chiuso'){
?>
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Richiesta di Chiusura del Ticket <?php echo $numero." Stato ".$stato; ?></font></b></p>


<!--    #################  INIZIO ESPOSIZIONE   TICKET   ################# -->





<table  class="display" cellspacing="0" align="center" style="width:90%; position:relative;">         
             <thead class="intesta">
	<tr class="testa">
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Evidenzia</td>
         
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Prov.<br>Regione</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >N.Ticket<br>Ticket Cli.<br>Priorità</td>          
          
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Data Apertura<br>Data Chiusura</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Data Scadenza</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Pianificata</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Stato<br>T.P. Assegnato</td> 
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Cliente<br>Commessa</td>        
      	 
           <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Attività<br>Tipo Intervento </td>
         
<!--          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Apparato<br>Seriale</td>            
          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >N. Ticket Cliente</td> -->
          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Stato SLA</td>

          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Insegna -  Ragione sociale<br>Indirizzo<br>Contatto - Telefono</td>
           </tr>       
	</thead>
	<tbody>
<?php 
$tabella=array(); 
$tabellax=array(); 
$giro=0; 
$girox=1; 
$sql = "SELECT *  FROM  tk where numero = '$numero' ";  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
    $datainizioxx = $macrogruppo["datainizio"];
    $inizio=substr($datainizioxx, 0, 10);
    #echo "nn".$inizio; exit;
    $comodo=explode("/",$inizio);
    $inizio=$comodo[2]."/".$comodo[1]."/".$comodo[0];
    $comodo=explode("/",$dadata);
    $dadatax=$comodo[2]."/".$comodo[1]."/".$comodo[0];
    $comodo=explode("/",$adata);
    $adatax=$comodo[2]."/".$comodo[1]."/".$comodo[0];
    #echo $inizio.$dadatax.$adatax."<br>";
    
    {
    
    
     $serialexx = $macrogruppo["seriale"];
     $numeroxx = $macrogruppo["numero"];
     $clientexx = $macrogruppo["cliente"];
     $commessaxx = $macrogruppo["commessa"];
     $attivitaxx = $macrogruppo["attivita"];
     
     $tipointerventoxx = $macrogruppo["tipointervento"];
     $apparatoxx = $macrogruppo["apparato"];
     $statoxx = $macrogruppo["stato"];
     $priorita = $macrogruppo["priorita"];  
     $ticketcli = $macrogruppo["ticketcli"];
     #echo "t ".$ticketcli;
     $aggiornamento = $macrogruppo["aggiornamento"];
$sqlx = "SELECT *  FROM  tkluogo where  numero  = '$numeroxx' " ;  
#echo $sql;
$rCount = 1;
$resultx = $conn->query($sqlx);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc())	
	{   
     $ragsocxx = $macrogruppox["ragsoc"];
     $insegna = $macrogruppox["insegna"];
     $via = $macrogruppox["indirizzo"];
     $pap = $macrogruppox["cap"];
     $citta = $macrogruppox["citta"];
     $contatto = $macrogruppox["contatto"];
     $telefono = $macrogruppox["telefono"];
     $prov = $macrogruppox["prov"];
$regione="";
$sqlxj = "SELECT *  FROM  province where  sigla = '$prov' " ;  
#echo $sql;
$rCount = 1;
$resultxj = $conn->query($sqlxj);
if ($resultxj->num_rows > 0) {
  while($macrogruppoxj = $resultxj->fetch_assoc())	
	{ $regione = $macrogruppoxj["regione"]; }}         
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
$swce=0;
$sql1f = "SELECT * FROM assegnato  where numero = '$numeroxx' ";
#echo $sql1; 
$resultf = $conn->query($sql1f);
if ($resultf->num_rows > 0) {
  while($macrogruppof = $resultf->fetch_assoc())
		{ $ragsoc = $macrogruppof["ragsoc"];	
        $swce=1;} }
$sql1g = "SELECT * FROM assegnatotec  where numero = '$numeroxx' ";
#echo $sql1; 
$resultg = $conn->query($sql1g);
if ($resultg->num_rows > 0) {
  while($macrogruppog = $resultg->fetch_assoc())
		{ $ragsoc = $macrogruppog["ragsoc"];	
        $swce=1;} }  
$datapian="";
$sql1g = "SELECT * FROM pianificato  where codice = '$numeroxx' ";
#echo $sql1g;   exit;
$resultg = $conn->query($sql1g);
if ($resultg->num_rows > 0) {
  while($macrogruppog = $resultg->fetch_assoc())
		{ $datapian = $macrogruppog["dataint"];	
          $orapian = $macrogruppog["oraint"];
        } }        
$datachiusura="";         
$sql1g = "SELECT * FROM chiusi  where numero = '$numeroxx' ";
#echo $sql1g;   exit;
$resultg = $conn->query($sql1g);
if ($resultg->num_rows > 0) {
  while($macrogruppog = $resultg->fetch_assoc())
		{ $datainint = $macrogruppog["datainint"];	
          $datafinintx = $macrogruppog["datafinintx"];
          $datachiusura=$datainint." ".$datafinintx;
          #echo "chius ".
        } }         
#echo "passo"; exit;           
$ce=0;
$sqlyy = "SELECT *  FROM  selezionati where  numero  = '$numeroxx' and login = '$login' " ;  
#  echo $sql;
  $rCount = 1;
  $resultyy = $conn->query($sqlyy);
  if ($resultyy->num_rows > 0) {
      while($macrogruppoyy = $resultyy->fetch_assoc())
		{  $ce=1; } }    
if($ingranaggiosel==1){
   if($ce==1){     
$tabella[$giro]=" const ticket".$numeroxx." = '".$citta." ".$via."'; "; 

$tabellax[0]="destinations: ["; 

$tabellax[$girox]="ticket".$numeroxx.",";  
$girox++; 
$giro++;               
?>     
    <tr >
      <td style="text-align:center;border: 1px solid #e4e3e3;">
        <button type="button" ><i class="fa-solid fa-plus" data-bs-toggle="modal" data-bs-target="#ticket" style="cursor:pointer; margin-left:5px"></i></button>
      </td> 
    
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana">(<?php echo $prov; ?>) <br> <?php echo $regione; ?>
      
      </td>  
      <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" alignv="top" >
      <font size="3" color="#cc0000" face="Verdana"><?php echo $numeroxx; ?> </font>        
      <br>
      <font size="2" color="#000000" face="Verdana"><?php echo $ticketcli; ?></font>
      <br>
    <?php if($priorita=="rosso"){ ?>
    <img border="0" src="rosso.png" width="25" height="25" >
    <?php } else { ?>
    <img border="0" src="bianco.png" width="25" height="25" >
    <?php } ?>
  
     <?php if($priorita=="giallo"){ ?>
    <img border="0" src="giallo.png" width="20" height="20" >
    <?php } else { ?>
    <img border="0" src="bianco.png" width="20" height="20" >
    <?php } ?>
  
     <?php if($priorita=="verde"){ ?>
    <img border="0" src="verde.png" width="18" height="18" >
    <?php } else { ?>
    <img border="0" src="bianco.png" width="18" height="18" >
    <?php } ?> 
    <br>
    
    
    <!--<label><i data-bs-toggle="modal" data-bs-target="#assegna"><font size="4" style="font-style: normal;">+</font></i></label>-->
    
    
    
      
     </td>
     
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $datainizioxx; ?><br><br><? echo $datachiusura; ?></font></td>
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo " "; ?></font></td>
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $datapian; ?></font></td>
      
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $statoxx; ?>
<?php if($swce==1 and $statoxx == "Assegnato"){ ?>
<br><?php echo $ragsoc; ?>  
<?php } ?>    
      </font></td>
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $ragsocclixx."<br>".$nomecommessaxx; ?></font></td>

      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $attivitaxx."<br>".$tipointerventoxx; ?></font></td>
      
<!--      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left"><font size="2" face="Verdana"><?php echo $apparatoxx; ?><br><?php echo $serialexx; ?></font></td>
      <td valign="top"style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $ticketcli; ?></font></td> -->
      <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana">
      <img border="0" src="verde.png" width="13" height="13" >
      <img border="0" src="bianco.png" width="14" height="14" >
      <img border="0" src="bianco.png" width="17" height="17" > <br> <?php echo " "; ?>    
      </td>

      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $insegna." - ".$ragsocxx."<br>".$via." - ".$citta." (".$prov.")<br>".$contatto." - ".$telefono; ?></font></td>
     
     </tr>	
     
<?php          
} }
else
{
?>     
    <tr >
      <td style="text-align:center;border: 1px solid #e4e3e3;">
        <button type="button" class="btn btn-success" ><i class="fa-solid fa-plus" data-bs-toggle="modal" data-bs-target="#ticket" style="cursor:pointer; margin-left:5px"></i></button>
           </td> 

      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana">(<?php echo $prov; ?>) <br> <?php echo $regione; ?>
      
      </td>  
      <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" alignv="top" >
      <a href="lavoraticket.php?login=<?php echo $login; ?>&codice=<?php echo $numeroxx; ?>" >
      <font size="3" color="#cc0000" face="Verdana"><?php echo $numeroxx; ?> </font>        
      <br>
      <font size="2" color="#000000" face="Verdana"><?php echo $ticketcli; ?></font>
      <br>
    <?php if($priorita=="rosso"){ ?>
    <img border="0" src="rosso.png" width="25" height="25" >
    <?php } else { ?>
    <img border="0" src="bianco.png" width="25" height="25" >
    <?php } ?>
  
     <?php if($priorita=="giallo"){ ?>
    <img border="0" src="giallo.png" width="20" height="20" >
    <?php } else { ?>
    <img border="0" src="bianco.png" width="20" height="20" >
    <?php } ?>
  
     <?php if($priorita=="verde"){ ?>
    <img border="0" src="verde.png" width="18" height="18" >
    <?php } else { ?>
    <img border="0" src="bianco.png" width="18" height="18" >
    <?php } ?> 
    <br>
    
    
    <!--<label><i data-bs-toggle="modal" data-bs-target="#assegna"><font size="4" style="font-style: normal;">+</font></i></label>-->
    
    
    
      
     </td>
     
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $datainizioxx; ?><br><br><? echo $datachiusura; ?></font></td>
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo " "; ?></font></td>
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $datapian; ?></font></td>
      
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $statoxx; ?>
<?php if($swce==1 and $statoxx == "Assegnato"){ ?>
<br><?php echo $ragsoc; ?>  
<?php } ?>    
      </font></td>
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $ragsocclixx."<br>".$nomecommessaxx; ?></font></td>

      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $attivitaxx."<br>".$tipointerventoxx; ?></font></td>
      
<!--      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left"><font size="2" face="Verdana"><?php echo $apparatoxx; ?><br><?php echo $serialexx; ?></font></td>
      <td valign="top"style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $ticketcli; ?></font></td> -->
      <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana">
      
      <button type="button" class="btn btn-success"> -5</button>      
       <br> <?php echo " "; ?>    
      </td>

      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $insegna." - ".$ragsocxx."<br>".$via." - ".$citta." (".$prov.")<br>".$contatto." - ".$telefono; ?></font></td>
     
     </tr>	
     
<?php          
}




 } }
}           
?>                    
            </table>
   
<br>
<center>
<hr style="width: 90%;">
</center>

<?php

$swcecat=0;
$swcetec=0;
$sql1 = "SELECT * FROM assegnato  where numero = '$numero'  ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $ragsoc = $macrogruppo["ragsoc"];	
        $swcecat=1;} }
$sql1 = "SELECT * FROM assegnatotec  where numero = '$numero' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $ragsoc = $macrogruppo["ragsoc"];	
        $swcetec=1;} }
?>



<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Ticket <?php echo $numero; ?> Interventi Pianificato</font></b></p>

<table class="table-form" style="width: 90%;">        
        <tr>
        <th style="text-align:center;" colspan="1" class=" borted-top-table" width="5%"> 
        N.Int.
        </th>
		<th colspan="1" class=" borted-top-table" width="10%"> 
        Data
        </th>
        <th colspan="1" class=" borted-top-table" width="10%"> 
        Ora
        </th>
        <th colspan="1" class=" borted-top-table" width="30%"> 
        luogo
        </th>
        <th colspan="1" class=" borted-top-table" width="20%" > 
        Tecnico
        </th>
        <th colspan="1" class=" borted-top-table" width="30%" > 
        Note
        </th>
        <th colspan="1" class=" borted-top-table" width="30%" > 
        Scelta
        </th>
        </tr> 
        
<?
$sql = "SELECT * FROM pianificato  where    codice = '$numero'";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
   $prgr = $macrogruppo["progr"];
   $dataint = $macrogruppo["dataint"];
   $oraint = $macrogruppo["oraint"];
   $luogoint = $macrogruppo["luogoint"];
   $tecnicoint= $macrogruppo["tecnicoint"];
   $noteint = $macrogruppo["noteint"];
   $numerointervento = $macrogruppo["numerointervento"];
#echo $sql;
?>
<tr>
<form method="POST" action=""  enctype="multipart/form-data">
        <td   style="text-align:center;" colspan="1" ><? echo $numerointervento; ?></td>
		<td   colspan="1" ><? echo $dataint; ?></td>
        <td   colspan="1" ><? echo $oraint; ?></td>        
        <td   colspan="1"><? echo $luogoint; ?></td>
        <td   colspan="1"><? echo $tecnicoint; ?></td>
        <td   colspan="1"><? echo $noteint; ?></td> 
       
        <td colspan="1" style="text-align:center;"> 
        <input type="hidden" name="ingranaggio" value="6" />
        <input type="hidden" name="ingranaggioxx" value="" />
        <input type="hidden" name="ingranaggiochiudi" value="" /> 
        <input type="hidden" name="ingranaggiochiudidef" value="" />  
        <input type="hidden" name="ingranaggioy" value="30" />
        <input type="hidden" name="codice" value="<?php echo $numero; ?>" />  
        <input type="hidden" name="numero" value="<?php echo $numero; ?>" />   
        <input type="hidden" name="login" value="<?php echo $login; ?>" />  
        <input type="hidden" name="numerointervento" value="<?php echo $numerointervento; ?>" />  
        <input type="hidden" name="numeroint" value="1" />              
        <button autofocus type="submit" class="btn btn-success" >Seleziona</button>
        </td> 
</form>
        </tr>        
       
<? }}  ?>               
</table> 
             
<br>

<? if($numeroint==1){ ?>
<p align="center"><font face="Verdana" size="4" style="font-family: Verdana;" color="#993300">Ticket <?php echo $numero; ?> Memorizzazione dati di avvenuto Intervento Num. <? echo $numerointerventox; ?></font></b></p>   
<? 
#$datainint="";
#$datafinintx="";
$swfatto=0;
$sql = "SELECT * FROM chiusi  where    numero = '$numero' and numerointervento = '$numerointerventox' ";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
  $swfatto=1; 
  $datainintw= $macrogruppo["datainint"]; 
  $datafinint= $macrogruppo["datafinint"]; 
  $datafiint= $macrogruppo["datafiint"];                        
  $noteintervento= $macrogruppo["noteintervento"]; 
  $noteluogo= $macrogruppo["noteluogo"]; 
  $serialesost1= $macrogruppo["serialesost1"]; 
  $descr1= $macrogruppo["descr1"]; 
  $serialesost2= $macrogruppo["serialesost2"]; 
  $descr2= $macrogruppo["descr2"]; 
  $serialesost3= $macrogruppo["serialesost3"]; 
  $descr3= $macrogruppo["descr3"]; 
  $serialesost1a= $macrogruppo["serialesost1a"]; 
  $descr1a= $macrogruppo["descr1a"]; 
  $serialesost2a= $macrogruppo["serialesost2a"]; 
  $descr2a= $macrogruppo["descr2a"]; 
  $serialesost3a= $macrogruppo["serialesost3a"]; 
  $descr3a= $macrogruppo["descr3a"]; 
  $esito= $macrogruppo["esito"];
  $noteesito= $macrogruppo["noteesito"];
  $datafinintxw= $macrogruppo["datafinintx"]; 
  #$numerointerventox= $macrogruppo["numerointervento"];
  }}
  
?>
<form method="POST" action=""  enctype="multipart/form-data" name="modulo11" onSubmit="return controllo11();"> 
<table class="table-form" style="width: 90%;">
  <tr>
      <th colspan="2" class=" borted-top-table"> 
        Intervento:
      </th>
  </tr>
  <tr>
      <td colspan="1" > 
      <label style="color: #8e8b8b;">Data Inizio Intervento:</label><br>
      <input class="required"  type="text" name="datainint" id="datainint" value="<?php echo $datainintw; ?>" maxlength="50">
      <label style="color: #8e8b8b;">Data Fine Intervento:</label><br>
      <input   type="text" name="datafiint" id="datafiint" value="<?php echo $datafiint; ?>" maxlength="50">
      </td> 
      <td colspan="1"> 
      <label style="color: #8e8b8b;">Ora Inizio Intervento:</label><br>
      <input class="required"  type="text" name="datafinint"  id="datafinint" value="<?php echo $datafinint; ?>" maxlength="50"> 
      <label style="color: #8e8b8b;">Ora Fine Intervento:</label><br>
      <input class="required"  type="text" name="datafinintx"  id="datafinintx" value="<?php echo $datafinintxw; ?>" maxlength="50">  
      </td>            
  </tr>
  <tr>
      <td colspan="2"> 
      <label style="color: #8e8b8b;">Luogo intervento: </label><br>
      <textarea name="noteluogo"  cols="83" rows="1"><?php echo $noteluogo; ?></textarea>
      </td>
    </tr>
  <tr>
      <td colspan="2"> 
      <label style="color: #8e8b8b;">Descrizione intervento: </label><br>
      <textarea class="required" name="noteintervento"  cols="83" rows="1"><?php echo $noteintervento; ?></textarea>
      </td>
    </tr>
    
  <tr>
      <td colspan="1"> 
        <label style="color: #8e8b8b;">Esito Intervento:</label><br>
<!--        <input class="required" type="text" name="apparato" id="apparato" onkeyup="ricercaAutocompleteApparato()" value="<?php echo $apparato; ?>" maxlength="200" size="30" > -->
          <select class="required" size="1" name="esito" id="apparato" >
		<option <? if($esito=="Chiuso"){echo "selected";}?>>Chiuso</option>
		<option <? if($esito=="Attesa Parti"){echo "selected";}?>>Attesa Parti</option>
        <option <? if($esito=="Non Risolto"){echo "selected";}?>>Non Risolto</option>  
		</select>
      </td>
      <td colspan="1"> 
      <label style="color: #8e8b8b;">Note Esito:</label><br>
      <input class="required" type="text" name="noteesito"  value="<?php echo $noteesito; ?>" maxlength="80">  
      </td> 
  </tr>
  <? if($stato!="Chiuso") { ?>  
  <tr>
       <td colspan="2" style="text-align:center;"> 
        <input type="hidden" name="ingranaggio" value="6" />
       <input type="hidden" name="ingranaggioxx" value="" />
       <input type="hidden" name="ingranaggiochiudi" value="1" /> 
       <input type="hidden" name="ingranaggiochiudidef" value="" />  
       <input type="hidden" name="ingranaggioy" value="30" />
       <input type="hidden" name="codice" value="<?php echo $numero; ?>" />  
       <input type="hidden" name="numero" value="<?php echo $numero; ?>" />   
       <input type="hidden" name="login" value="<?php echo $login; ?>" /> 
       <input type="hidden" name="numerointervento" value="<?php echo $numerointerventox; ?>" /> 
       <input type="hidden" name="numeroint" value="1" />               
       <button autofocus type="submit" class="btn btn-success" >Memorizza Intervento</button>
       </td>
       </form>

</tr>
  <? } ?>
</table>

<br>
<? 
$sql = "SELECT *  FROM  tk where  numero  = '$numero' " ;  
#  echo $sql;
  $rCount = 1;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())	
    { 
      $statoconcluso = $macrogruppo["stato"]; }}
if($statoconcluso=="Richiesta di Chiusura" or $statoconcluso == "Chiuso"){
if($swfatto==1){
?>
<center>
<hr style="width: 90%;">
</center>
<p align="center"><font face="Verdana" size="4" style="font-family: Verdana;" color="#993300">Ticket <?php echo $numero; ?> Parti Installate Intervento Num. <? echo $numerointerventox; ?></font></b></p>   

<table class="table-form" style="width: 90%;">    
 
<tr>
      <th colspan="1" class=" borted-top-table" style="width: 30%; background: #afc81b;"> 
        Seriale
      </th>
      <th colspan="1" class=" borted-top-table" style="width: 70%; background: #afc81b;"> 
        Descrizione Parte
      </th>
  </tr>  
<? 
$sql = "SELECT *  FROM  partei where  numero  = '$numero' and numerointervento = '$numerointerventox' " ;  
  #echo $sql;
  $rCount = 1;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())	
    { 
      $serialesost1w = $macrogruppo["serialesost1"];
      $descr1w = $macrogruppo["descr1"];  ?> 
<tr>
    <td>
    <span> <?php echo $serialesost1w; ?></span>      
    </td> 
    <td>
    <span> <?php echo $descr1w; ?></span>
    </td>
</tr>            
<?  }}  ?> 
</table>
<br> 
<p align="center"><font face="Verdana" size="4" style="font-family: Verdana;" color="#993300">Ticket <?php echo $numero; ?> Parti Ritirate Intervento Num. <? echo $numerointerventox; ?></font></b></p>   

<table class="table-form" style="width: 90%;">    
 
<tr>
      <th colspan="1" class=" borted-top-table" style="width: 30%; background: #afc81b;"> 
        Seriale
      </th>
      <th colspan="1" class=" borted-top-table" style="width: 70%; background: #afc81b;" > 
        Descrizione Parte
      </th>
  </tr>  
<? 
$sql = "SELECT *  FROM  parter where  numero  = '$numero' and numerointervento = '$numerointerventox' " ;  
 #echo $sql;
  $rCount = 1;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())	
    { 
      $serialesost1aw = $macrogruppo["serialesost1"];
      $descr1aw = $macrogruppo["descr1"];  ?> 
<tr>
    <td>
    <span> <?php echo $serialesost1aw; ?></span>      
    </td> 
    <td>
    <span> <?php echo $descr1aw; ?></span>
    </td>
</tr>            
<?  }}  ?> 
</table> 
<br>
<? 
#echo "con ".$statoconcluso."stat ".$stato;
if($statoconcluso != "Chiuso") { ?>
<p align="center"><font face="Verdana" size="4" style="font-family: Verdana;" color="#993300">Ticket <?php echo $numero; ?> Memorizzazione Parti Installate/Ritirate Intervento Num. <? echo $numerointerventox; ?></font></b></p>   
 
 <form action="" method="post"  name="modulopartei" onSubmit="return controllopartei();">
<table class="table-form" style="width: 90%;">    
<tr>
      <th colspan="2" class=" borted-top-table"> 
        Parti installate:
      </th>
  </tr>
    <tr>
      <td colspan="1" > 
      <label style="color: #8e8b8b;">Seriale 1:</label><br>
      <input type="text" name="serialesost1"  value="<?php echo $serialesost1; ?>" maxlength="30">
      </td> 
      <td colspan="1"> 
      <label style="color: #8e8b8b;">Descrizione Parte 1:</label><br>
      <input type="text" name="descr1"  value="<?php echo $descr1; ?>" maxlength="80">  
      </td>            
  </tr>
   <tr>
       <td colspan="2" style="text-align:center;"> 
        <input type="hidden" name="ingranaggio" value="6" />
       <input type="hidden" name="ingranaggioxx" value="" />
       <input type="hidden" name="ingranaggiochiudi" value="" /> 
       <input type="hidden" name="memorizzapartei" value="1" />   
       <input type="hidden" name="ingranaggioy" value="30" />
       <input type="hidden" name="codice" value="<?php echo $numero; ?>" />  
       <input type="hidden" name="numero" value="<?php echo $numero; ?>" />   
       <input type="hidden" name="login" value="<?php echo $login; ?>" /> 
      
       <input type="hidden" name="numerointervento" value="<?php echo $numerointerventox; ?>" /> 
       <input type="hidden" name="numeroint" value="1" />                
       <button autofocus type="submit" class="btn btn-success" >Memorizza Parte Installata</button>

       </td>
       </tr>
</form>  
</table>
<form method="POST" action=""  enctype="multipart/form-data" name="modulor" onSubmit="return controllor();"> 
<table class="table-form" style="width: 90%;">  
  <tr>
      <th colspan="2" class=" borted-top-table"> 
        Parti Ritirate:
      </th>
  </tr>
    <tr>
      <td colspan="1" > 
      <label style="color: #8e8b8b;">Seriale 1:</label><br>
      <input type="text" name="serialesost1a"  value="<?php echo $serialesost1a; ?>" maxlength="30">
      </td> 
      <td colspan="1"> 
      <label style="color: #8e8b8b;">Descrizione Parte 1:</label><br>
      <input type="text" name="descr1a"  value="<?php echo $descr1a; ?>" maxlength="80">  
      </td>            
  </tr>
   <tr>
       <td colspan="2" style="text-align:center;"> 
        <input type="hidden" name="ingranaggio" value="6" />
       <input type="hidden" name="ingranaggioxx" value="" />
       <input type="hidden" name="ingranaggiochiudi" value="" /> 
       <input type="hidden" name="memorizzaparter" value="1" />   
       <input type="hidden" name="ingranaggioy" value="30" />
       <input type="hidden" name="codice" value="<?php echo $numero; ?>" />  
       <input type="hidden" name="numero" value="<?php echo $numero; ?>" />   
       <input type="hidden" name="login" value="<?php echo $login; ?>" />  
        
       <input type="hidden" name="numerointervento" value="<?php echo $numerointerventox; ?>" /> 
       <input type="hidden" name="numeroint" value="1" />                              
       <button autofocus type="submit" class="btn btn-success" >Memorizza Parte Ritirata</button>

       </td>
       </tr>
</form>  
</table> 
<? } }?>


<? } }?>
<center>
<hr style="width: 90%;">
</center>
<p align="center"><font face="Verdana" size="4" style="font-family: Verdana;" color="#993300">Ticket <?php echo $numero; ?> Lista Documenti Caricati </font></b></p>   

<table class="table-form" style="width: 90%;">        
        <tr>
		<th colspan="1" class=" borted-top-table" width="10%"> 
        Data Doc.
        </th>
        <th colspan="1" class=" borted-top-table" width="10%"> 
        Scad. Doc.
        </th>
        <th colspan="1" class=" borted-top-table" width="70%"> 
        Oggetto
        </th>
        <th colspan="2" class=" borted-top-table" width="10%" style="text-align:center;"> 
        Operazioni
        </th>
        </tr> 
        
<?
$sql = "SELECT * FROM documenti  where    tipodoc = '$numero'";        
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
   $file = $macrogruppo["file"];
#echo $prgr;
?>
<tr>
<tr onMouseOver="style.background='#c9cacb';" onMouseOut="style.background=''">

    
		<td  style="color: <?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>;"><? echo $data; ?></td>
        <td  style="color: <?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>;"><? echo $datasca; ?></td>
        
        <td  style="color: <?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>;"><? echo $oggettox; ?></td>
		<td style="text-align:center;">
        <a href="?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&codice=<?php echo $numero; ?>&prgrx=<? echo $prgr; ?>&ingranaggioy=30&ingranaggiovedi=201&prgry=<?php echo $prgr; ?>" >
        <button type="button" class="btn btn-success" ><i class="fa-solid fa-plus"></i></button></a>
        </td>
        <td style="text-align:center;" >
<!--        <a  onclick="myFunction('?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&prgrx=<? echo $prgr; ?>&ingranaggio=10&ingranaggiott=202&oggetto=<?php echo $oggettox; ?>&progr=<?php echo $progr; ?>');" ><img border="0" background="btn1.gif" src="x1.png" width="15" height="15"></a>   -->
        <a href="?fileh=<?php echo $file; ?>&ingranaggiocancelladoc=1&login=<?php echo $login; ?>&codice=<?php echo $numero; ?>&prgrx=<? echo $prgr; ?>&ingranaggioy=30&prgry=<?php echo $prgr; ?>&progr=<?php echo $progr; ?>" >
        <button type="button" class="btn btn-success" onclick="return confirm('Sei sicuro di volere cancellare?')"><i class="fa-solid fa-minus"></i></button></a>

</td>

     
        </tr>        
        
<? }} ?>        
        
        
             
<?php if($ingranaggiovedi==201){ ?>

    <tr>
    <td colspan="5" align="center" ><br>
<div>
<iframe align="center" frameborder="0" width="100%" height="800" scrolling="yes" src="esponipdfffxx.php?login=<?php echo $login; ?>&fl=<?php echo $fileh; ?>"></iframe> 
</div>    
    </td>
    </tr>
<?php } 

?>   
	</table> 
</td>
</tr>
</table>              
            <br>
<? } else { ?>
<br>
<center>
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Impossibile chiudere il Ticket <?php echo $numero; ?> prima di essere assegnato ad una T.P.</font></b></p>
</center>
<? } }?>
</div>
<div>



</div>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- Modal -->
<div class="modal fade" id="multiplo" tabindex="-1" aria-labelledby="multiplo" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="multiplo">Anagrafica xxTerza parte cod. <? echo $codiceww; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php include("multiplox.php"); ?>
      </div>
     
    </div>
  </div>
</div>
<!-- FINE MODALE  -->
<!-- Modal -->
<div class="modal fade" id="cat" tabindex="-1" aria-labelledby="cat" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Anagrafica Terza parte cod. <? echo $codiceww; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php include("vedicat.php"); ?>
      </div>
     
    </div>
  </div>
</div>
<!-- FINE MODALE  -->
<!-- Modal -->
<div class="modal fade" id="distanza" tabindex="-1" aria-labelledby="distanza" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Distanza tra luogo di intervento del ticket e la terza parte assegnata</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php include("distanza10.php"); ?>       
      </div>
     
    </div>
  </div>
</div>
<!-- FINE MODALE  -->
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

<!-- Modal -->
<div class="modal fade" id="exampleModalx" tabindex="-1" aria-labelledby="exampleModalLabelx" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mappa Luogo <? echo $insegna." ".$ragsoc; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php include("lat.php"); ?>
      </div>
     
    </div>
  </div>
</div>
<!-- FINE MODALE  -->
<!-- Modal -->
<div class="modal fade" id="ticket" tabindex="-1" aria-labelledby="ticket" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ticket <? echo $numero; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php include("esponiticket.php"); ?>
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
<?
function giornilavorativi($dataInizio,$dataFine,$ore,$feriali1,$sabato1,$festivi1,$arafer1,$daorafer1,$arasab1,$daorasab1,$arafes1,$daorafes1)
{
    // Calcolo del giorno di Pasqua fino all'ultimo anno valido
    for ($i=2006; $i<=2037; $i++) {
    $pasqua = date("Y-m-d", easter_date($i));
    $array_pasqua[] = $pasqua;
    }

    // Calcolo le rispettive pasquette
    foreach($array_pasqua as $pasqua){
    list ($anno,$mese,$giorno) = explode("-",$pasqua);
    $pasquetta = mktime (0,0,0,date($mese),date($giorno)+1,date($anno));
    $array_pasquetta[] = $pasquetta;
    }
    
    // questi giorni son sempre festivi a prescindere dall'anno
    $giorniFestivi = array("01-01",
                           "01-06",
                           "04-25",
                           "05-01",
                           "06-02",
                           "08-15",
                           "11-01",
                           "12-08",
                           "12-25",
                           "12-26",
                           );

        $lavorativi = 0;
        $lavorativifer = 0;
        $lavorativisab = 0;
        $lavorativifes = 0;
        $ore=0;
        $orelavoro=24;
        for($i = strtotime($dataInizio); $i<=strtotime($dataFine); $i = strtotime("+1 day",$i))
        {
           $giorno_data = date("w",$i); //verifico il giorno: da 0 (dom) a 6 (sab)
           $mese_giorno = date('m-d',$i); // confronto con gg sempre festivi
             // Infine verifico che il giorno non sia sabato,domenica,festivo fisso o festivo variabile (pasquetta); 
             #echo $feriali1;
               
                          
  if($feriali1=="on") {      
            if ($giorno_data == 1 or $giorno_data == 2 or $giorno_data == 3 or $giorno_data == 4 or $giorno_data == 5  )
            { 
            $lavorativifer++; 
            $orelavorofer=$arafer1-$daorafer1;
            }  
            }
  if($sabato1=="on")  { 
            if ($giorno_data == 6  ){
            $lavorativisab++;  
            $orelavorosab=$arasab1-$daorasab1;} 
            } 
  if($festivi1=="on") {
            if ($giorno_data == 0  ){
            $lavorativifes++;
            $orelavorofes=$arafes1-$daorafes1;}
            }
            
        }

$lavorativi=$lavorativifer+$lavorativisab+$lavorativifes;
$lavorativi=$lavorativi-1;
$orefer=$lavorativi*$orelavorofer;
$oresab=$lavorativi*$orelavorosab;
$orefes=$lavorativi*$orelavorofes;
$ore=$orefer+$oresab+$orefes;
return array($ore, $lavorativi);
}
?>
</body>
</html