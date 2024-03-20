<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="inizio.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php  }
include "conf_DB.php";

$primavolta=$_REQUEST["primavolta"];
if($primavolta==1){
#echo "passo"; exit;
$ingranaggiox=2;
$ingranaggio=11;
$codice=$_REQUEST["codice"]; 
$clientew=$_REQUEST["codice"]; 
 $sql1 = "SELECT * FROM cat  where codice = '$codice' ";
            #echo $sql1; exit;
            $result = $conn->query($sql1);
            if ($result->num_rows > 0) {
            while($macrogruppo = $result->fetch_assoc())
                    { 	
                   # $tesseramento = $macrogruppo["tesseramento"]; 
                #$corsi= $macrogruppo["corsi"];
                #$contabilita = $macrogruppo["contabilita"]; 
                #$dio = $macrogruppo["dio"]; 
                $progr = $macrogruppo["id"];
                        }}
 #echo $ingranaggio; 
} else {$codice=$_REQUEST["codice"]; }   
#echo "cod ".$codice;  
$clientew=$_REQUEST["clientey"];
$commessaw=$_REQUEST["commessay"];
$slaw=$_REQUEST["slay"];
$attivitaw=$_REQUEST["attivitay"];
$attivew=$_REQUEST["attivey"];
$nomecommessax=$_REQUEST["nomecommessax"];

if($primavolta!=1){
$ingranaggio=$_REQUEST["ingranaggio"];  }
#echo $ingranaggio;
#echo $ingranaggio;
$ingranaggiott=$_REQUEST["ingranaggiott"];
$BBAA=$_REQUEST["BBAA"];
#echo "in ".$ingranaggio;

if($primavolta!=1){
$progr=$_REQUEST["progr"];  }

#echo "progr ".$progr;
$prgrx=$_REQUEST["prgrx"];
$prgry=$_REQUEST["prgry"];
#echo "prgrx".$prgrx;
$login=$_REQUEST["login"];

$fileh=$_REQUEST["fileh"];


$codice=$_REQUEST["codice"]; 
#echo $codice; exit;                  
$dataoperazione=$_REQUEST["dataoperazione"];           
$ragsoc=$_REQUEST["ragsoc"];           
$via=$_REQUEST["via"];           
$citta=$_REQUEST["citta"];           
$cap=$_REQUEST["cap"];           
$prov=$_REQUEST["prov"];           
$regione=$_REQUEST["regione"];           
$iva=$_REQUEST["iva"];           
$codfisc=$_REQUEST["codfisc"];           
$pec=$_REQUEST["pec"];            
$iban=$_REQUEST["iban"];           
$sdi=$_REQUEST["sdi"];            
$cognomeamm=$_REQUEST["cognomeamm"];           
$nomeamm=$_REQUEST["nomeamm"];           
$ruoloamm=$_REQUEST["ruoloamm"];           
$emailamm=$_REQUEST["emailamm"];           
$viaamm=$_REQUEST["viaamm"];           
$cittaamm=$_REQUEST["cittaamm"];           
$capamm=$_REQUEST["capamm"];           
$provamm=$_REQUEST["provamm"];           
$regioneamm=$_REQUEST["regioneamm"];           
$telefonoamm=$_REQUEST["telefonoamm"];           
$cellamm=$_REQUEST["cellamm"];            
$cognomeop=$_REQUEST["cognomeop"];           
$nomeop=$_REQUEST["nomeop"];           
$ruoloop=$_REQUEST["ruoloop"];           
$emailop=$_REQUEST["emailop"];           
$viaop=$_REQUEST["viaop"];           
$cittaop=$_REQUEST["cittaop"];           
$capop=$_REQUEST["capop"];           
$provop=$_REQUEST["provop"];           
$regioneop=$_REQUEST["regioneop"];           
$telefonoop=$_REQUEST["telefonoop"];           
$cellop=$_REQUEST["cellop"];

$loginaccessoop=$_REQUEST["loginaccessoop"];
$passaccessoop=$_REQUEST["passaccessoop"];
$loginaccessoamm=$_REQUEST["loginaccessoamm"];
$passaccessoamm=$_REQUEST["passaccessoamm"];
           
$ragsoclog=$_REQUEST["ragsoclog"]; 
$cognomelog=$_REQUEST["cognomelog"];
#echo "log ".$cognomelog;           
$nomelog=$_REQUEST["nomelog"];           
$ruololog=$_REQUEST["ruololog"];           
$emaillog=$_REQUEST["emaillog"];           
$vialog=$_REQUEST["vialog"];           
$cittalog=$_REQUEST["cittalog"];           
$caplog=$_REQUEST["caplog"];           
$provlog=$_REQUEST["provlog"];           
$regionelog=$_REQUEST["regionelog"];  
#echo "r ".$ragsoclog;         
$telefonolog=$_REQUEST["telefonolog"];           
$celllog=$_REQUEST["celllog"];        

if ($ingranaggio=="7")
{

$obbligatorio=$_POST["obbligatorio"];
$tipodocumento=$_POST["tipodocumento"];
$newdata=$_POST["newdata"];
$newdatasca=$_POST["newdatasca"];
$newoggetto=$_POST["newoggetto"];
$clientexx=$_POST["commessa"];
#echo "data ".$newdata." ogg ".$newoggetto." cli ".$clientexx;  exit;

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
$target_dir = "../tk/documenti/";

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
$target_dire = "../tk/documenti/";

$target_filee = $target_dire . $newfile;


    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_filee)) {
        #echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
$comodo=explode("-",$newdata);
$newdata=$comodo[2]."/".$comodo[1]."/".$comodo[0];
$descrizioney=$_POST["tipodocumento"];

$trovato=0;

$sql1p = "SELECT * FROM `tipodoccatcat` where descrizione = '$descrizioney' and codicecat = '$codice' ";
#echo $sql1p;   exit;
$resultp = $conn->query($sql1p);
if ($resultp->num_rows > 0) {
  while($macrogruppop = $resultp->fetch_assoc())
		{    
      $descrizionerr = $macrogruppop["descrizione"];
      $obbligatoriot = $macrogruppop["obbligatorio"];
      $progrrr = $macrogruppop["progr"];
$trovato=1;
}}
#echo $trovato; exit;
if($trovato==1){$obbligatorior=$obbligatoriot;} else {$obbligatorior="NO";}

#echo  $obbligatoriot; exit;
$newoggetto=str_replace("'", "\'", $newoggetto); 
if($tipodocumento!="VARIO"){
$sql = "
DELETE from documenti where tipodocumento = '$tipodocumento'";
#echo $sql;
if ($conn->query($sql) === FALSE)
  {echo "errxx=errore";exit;}
  else
  {}
}
       $sql = "INSERT INTO documenti
              (               
              tipodoc, 
              datadoc, 
              oggetto, 
              file,
              datasca,
              obbligatorio,
              tipodocumento) 
            VALUES (            
              '$codice',
              '$newdata', 
              '$newoggetto',
              '$newfile',
              '$newdatasca',
              '$obbligatorior',
              '$tipodocumento'
              )";
#echo  $sql;   exit;
  if ($conn->query($sql) === TRUE)
        { } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 

$ingranaggio=11; 
#echo $ingranaggio;
 } }
}



#$importo=number_format($importo, 2);
$erroreriferimento="";
if ($ingranaggio==100)
   { 
$errore="";      
$sql = "Update cat set                                                
dataoperazione='$dataoperazione',                      
via='$via',           
citta='$citta',           
cap='$cap',           
prov='$prov',           
regione='$regione',           
iva='$iva',           
codfisc='$codfisc',           
pec='$pec',            
iban='$iban',           
sdi='$sdi',            
ammcognome='$cognomeamm',           
ammnome='$nomeamm',           
ammruolo='$ruoloamm',           
ammemail='$emailamm',           
ammvia='$viaamm',           
ammcitta='$cittaamm',           
ammcap='$capamm',           
ammprov='$provamm',           
ammregione='$regioneamm',           
ammtelefono='$telefonoamm',           
ammcell='$cellamm',            
opcognome='$cognomeop',           
opnome='$nomeop',           
opruolo='$ruoloop',           
opemail='$emailop',           
opvia='$viaop',           
opcitta='$cittaop',           
opcap='$capop',           
opprov='$provop',           
opregione='$regioneop',           
optelefono='$telefonoop',           
opcell='$cellop',           
logragsoc='$ragsoclog', 
logcognome='$cognomelog',           
lognome='$nomelog',           
logruolo='$ruololog',           
logemail='$emaillog',           
logvia='$vialog',           
logcitta='$cittalog',           
logcap='$caplog',           
logprov='$provlog',           
logregione='$regionelog',           
logtelefono='$telefonolog',           
logcell='$celllog',
oplogin='$loginaccessoop',
oppassword='$passaccessoop',
ammlogin='$loginaccessoamm',
ammpassword='$passaccessoamm'     
where codice = '$codice' ";
#echo $sql; 
  if ($conn->query($sql) === TRUE)
        {$errore="CAT Modificato Correttamente"; } 
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

</script>
<style>
blink {
  animation: 1s linear infinite condemned_blink_effect;
}
@keyframes condemned_blink_effect {
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}      
.dataTables_filter {float:right !important;}

</style>  

</head>
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
   {$selezionacliente= " and (ragsoc like '".$clientew."%"."'".") ";}
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
          
          if(iva.value=="") { 
            alert("Error: manca IVA"); 
            iva.focus(); 
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
        
        
</script>

<body text="#000000" onLoad="larghezza(); frame();"  >
<div align="center">   
<?php if($ingranaggio==10 or $ingranaggio==11){ 
#echo "passo".$ingranaggio;
if($ingranaggiott==202){ 
$sql = "
DELETE from documenti where progr = '$prgrx'";
#echo $sql; exit;
if ($conn->query($sql) === FALSE)
  {echo "errxx=errore";exit;}
  else
  {}
 } 


#echo "ragsocxx ".$ragsocx;
#echo "ivax ".$ivax;
$sql = "SELECT *  FROM  cat where  codice = '$codice' ";  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
    $codice= $macrogruppo["codice"];                     
$dataoperazione= $macrogruppo["dataoperazione"];           
$ragsoc= $macrogruppo["ragsoc"];           
$via= $macrogruppo["via"];           
$citta= $macrogruppo["citta"];           
$cap= $macrogruppo["cap"];           
$prov= $macrogruppo["prov"];           
$regione= $macrogruppo["regione"];           
$iva= $macrogruppo["iva"];           
$codfisc= $macrogruppo["codfisc"];           
$pec= $macrogruppo["pec"];            
$iban= $macrogruppo["iban"];           
$sdi= $macrogruppo["sdi"];            
$cognomeamm= $macrogruppo["ammcognome"];           
$nomeamm= $macrogruppo["ammnome"];           
$ruoloamm= $macrogruppo["ammruolo"];           
$emailamm= $macrogruppo["ammemail"];           
$viaamm= $macrogruppo["ammvia"];           
$cittaamm= $macrogruppo["ammcitta"];           
$capamm= $macrogruppo["ammcap"];           
$provamm= $macrogruppo["ammprov"];           
$regioneamm= $macrogruppo["ammregione"];           
$telefonoamm= $macrogruppo["ammtelefono"];           
$cellamm= $macrogruppo["ammcell"];  
$loginaccessoamm= $macrogruppo["ammlogin"]; 
$passaccessoamm= $macrogruppo["ammpassword"];
          
$cognomeop= $macrogruppo["opcognome"];           
$nomeop= $macrogruppo["opnome"];           
$ruoloop= $macrogruppo["opruolo"];           
$emailop= $macrogruppo["opemail"];           
$viaop= $macrogruppo["opvia"];           
$cittaop= $macrogruppo["opcitta"];           
$capop= $macrogruppo["opcap"];           
$provop= $macrogruppo["opprov"];           
$regioneop= $macrogruppo["opregione"];           
$telefonoop= $macrogruppo["optelefono"];           
$cellop= $macrogruppo["opcell"];           
$ragsoclog= $macrogruppo["logragsoc"];  
$cognomelog= $macrogruppo["logcognome"];           
$nomelog= $macrogruppo["lognome"];           
$ruololog= $macrogruppo["logruolo"];           
$emaillog= $macrogruppo["logemail"];           
$vialog= $macrogruppo["logvia"];           
$cittalog= $macrogruppo["logcitta"];           
$caplog= $macrogruppo["logcap"];           
$provlog= $macrogruppo["logprov"];           
$regionelog= $macrogruppo["logregione"];           
$telefonolog= $macrogruppo["logtelefono"];           
$celllog= $macrogruppo["logcell"];    
$passaccessoop= $macrogruppo["oppassword"];  
$loginaccessoop= $macrogruppo["oplogin"];
$id= $macrogruppo["id"];
?>
<br>
<table align="center">
<tr>
<td align="left" width="50%" valign="top">                                                                          
<p align="center"><font face="Verdana" size="4" color="#993300"  >Modifica C.A.T. <? echo $codice."<br> Situazione Documenti "; ?></font></b>

<?
$si=0;
$sqlt = "SELECT * FROM tipodoccatcat where codicecat = '$codice'  ";        
#echo $sqlt;
$resultt = $conn->query($sqlt);
if ($resultt->num_rows > 0) {
  while($macrogruppot = $resultt->fetch_assoc())	
	{ 
   $obbligatorioy = $macrogruppot["obbligatorio"];
   if($obbligatorioy=="SI"){$si++;}
   }}
$rotto=0;
$sqlt = "SELECT * FROM tipodoccatcat  where codicecat = '$codice' ";        
#echo $sqlt;
$resultt = $conn->query($sqlt);
if ($resultt->num_rows > 0) {
  while($macrogruppot = $resultt->fetch_assoc())	
	{ 
   $prgr = $macrogruppot["progr"];
   $descrizioney = $macrogruppot["descrizione"];
   $obbligatorioy = $macrogruppot["obbligatorio"];
#echo  $descrizioney."<br>";
$trovato=0;

$sqlp = "SELECT * FROM documenti  where    tipodoc = '$codice' and tipodocumento = '$descrizioney' ";        
#echo $sqlp;  exit;
$resultp = $conn->query($sqlp);
if ($resultp->num_rows > 0) {
  while($macrogruppop = $resultp->fetch_assoc())	
	{ 
   $prgr = $macrogruppop["progr"];
   $data = $macrogruppop["datadoc"];
   $datasca = $macrogruppop["datasca"];
   $tipodoc = $macrogruppop["tipodoc"];
   $oggettox= $macrogruppop["oggetto"];
   #echo $oggettox.$oggetto;
   $file = $macrogruppop["file"];
   $obbligatorio = $macrogruppop["obbligatorio"];
   $tipodocumento = $macrogruppop["tipodocumento"];
$trovato=1; #echo "modifica";
$comodo=explode("/",$datasca);
$datafine=$comodo[2].$comodo[1].$comodo[0];
$datafinedocumento=$comodo[2]."-".$comodo[1]."-".$comodo[0];
$datafinex=date("Ymd");
$dataoggi=date("Y-m-d");
if($datafinex > $datafine){$trovato=0;}



// Data di partenza
$dataInizio = new DateTime($dataoggi);

// Data di fine
$dataFine = new DateTime($datafinedocumento);

// Calcola la differenza
$differenza = $dataFine->diff($dataInizio);

// Ottieni la differenza totale in giorni
$differenzaInGiorni = $differenza->days;

#echo "La differenza tra le due date è di $differenzaInGiorni giorni. $datafinedocumento $dataoggi $datafinex $datafine<br>";

if($differenzaInGiorni >= 0 and $differenzaInGiorni <= 20){$arancione=1;}



if($obbligatorioy=="SI"){
if($trovato==1){$rotto++;}}
}}
}}
if($rotto==$si){ 
echo '<img border="0" src="verde.png"  width="30" height="30">';
 } else {
echo  '<img border="0" src="rosso.png"  width="30" height="30">';
 }  ?>

</p>
<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data">
<table class="table-form "  style="text-align:left;"> 
            <tr>
            <td colspan="2" align="center" style=" border: 0x solid #949699;" ><b><font face="Verdana" color="#cc0000"  style="font-size: 10pt;"><?php echo $errore; ?></font></b>
            </td>            
            </tr>
            <tr>
            <td colspan="1" ><font face="Verdana" color="#000000" >Data Acquisizione</font>
            </td>
            <td ><input maxlength="10" class="required" type="text" name="dataoperazione" id="dateOp" value="<?php echo $dataoperazione; ?>"  size="10" ></font>
			</td>
            </tr>
            
            <tr>
            <td colspan="1"   ><font   color="#000000">Ragione Sociale</font>
            </td>
            <td >
            <font style="font-size: 14pt;" color="#CC0000"><?php echo $ragsoc; ?></font> 
            </td>
            </tr>
            
			<tr>
			<td  ><font   color="#000000">Via: </font></b>
            </td>
            <td >
            <input type="text" class="required" name="via" value="<?php echo $via; ?>" maxlength="60" size="60" >
            </td>
            </tr>       
            
            <tr>
			<td  ><font   color="#000000">Città: </font></b>
            </td>
            <td >
            <input type="text" class="required" name="citta" value="<?php echo $citta; ?>" maxlength="60" size="60" >
            </td>
            </tr>
            
            <tr>
			<td  ><font   color="#000000">Cap: </font></b>
            </td>
            <td >
            <input type="text" class="required" name="cap" value="<?php echo $cap; ?>"maxlength="5"  size="10" >
            </td>
			</tr>
            
            <tr>
			<td  ><font   color="#000000">Provincia: </font></b>
            </td>
            <td >
            <input type="text" class="required"name="prov" value="<?php echo $prov; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            <tr>
			<td  ><font   color="#000000">Regione: </font></b>
            </td>
            <td >
            <input type="text" name="regione" value="<?php echo $regione; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            <tr>
			<td  ><font   color="#000000">P.iva: </font></b>
            </td>
            <td >
            <input type="text" class="required" name="iva" id="iva" value="<?php echo $iva; ?>" maxlength="15" size="60" >
            </td>
			</tr>
            
            <tr>
			<td ><font   color="#000000">C. F.: </font></b>
            </td>
            <td >
            <input type="text" name="codfisc" value="<?php echo $codfisc; ?>" maxlength="20" size="60" >
            </td>
			</tr>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <tr>
			<td ><font   color="#000000">PEC: </font></b>
            </td>
            <td >
            <input type="text" name="pec" value="<?php echo $pec; ?>"maxlength="60" size="60" >
            </td>
			</tr>
            
            
            
            <tr>
			<td  ><font   color="#000000">IBAN: </font></b>
            </td>
            <td>
            <input type="text" name="iban" value="<?php echo $iban; ?>" maxlength="60" size="20" >
            </td>
			</tr>
            
             <tr>
			<td  ><font   color="#000000">SDI: </font></b>
            </td>
            <td >
            <input type="text" name="sdi" value="<?php echo $sdi; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            

            
            <tr>
            <td colspan="2" align="left" style="background: #476b5d;" ><b><font   color="#ffffff"  style="font-size: 10pt;">Rif. Amministrativi</font></b>
            </td>
            
            </tr>
            
            <tr>
			<td ><font   color="#000000">Cognome: </font></b>
            </td>
            <td >
            <input type="text" name="cognomeamm" value="<?php echo $cognomeamm; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            <tr>
			<td  ><font   color="#000000">Nome: </font></b>
            </td>
            <td >
            <input type="text" name="nomeamm" value="<?php echo $nomeamm; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
             <tr>
			<td  ><font   color="#000000">Ruolo: </font></b>
            </td>
            <td >
            <input type="text" name="ruoloamm" value="<?php echo $ruoloamm; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
             <tr>
			<td  ><font   color="#000000">Email: </font></b>
            </td>
            <td >
            <input type="text" name="emailamm" id="emailamm" value="<?php echo $emailamm; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            
            <tr>
			<td ><font   color="#000000">Via: </font></b>
            </td>
            <td >
            <input type="text" name="viaamm" value="<?php echo $viaamm; ?>" maxlength="60" size="60" >
            </td>
            </tr>
            
            <tr>
			<td  ><font   color="#000000">Città: </font></b>
            </td>
            <td >
            <input type="text" name="cittaamm" value="<?php echo $cittaamm; ?>" maxlength="60" size="60" >
            </td>
            </tr>
            
            <tr>
			<td  ><font   color="#000000">Cap: </font></b>
            </td>
            <td >
            <input type="text" name="capamm" value="<?php echo $capamm; ?>" maxlength="5" size="10" >
            </td>
			</tr>
            
            <tr>
			<td ><font   color="#000000">Provincia: </font></b>
            </td>
            <td >
            <input type="text" name="provamm" value="<?php echo $provamm; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            <tr>
			<td  ><font   color="#000000">Regione: </font></b>
            </td>
            <td >
            <input type="text" name="regioneamm" value="<?php echo $regioneamm; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            <tr>
			<td  ><font   color="#000000">Telefono: </font></b>
            </td>
            <td >
            <input type="text" name="telefonoamm" id="telefonoamm" value="<?php echo $telefonoamm; ?>" maxlength="30" size="20" >
            </td>
			</tr>
            
            <tr>
			<td  ><font   color="#000000">cellulare: </font></b>
            </td>
            <td >
            <input type="text" name="cellamm" value="<?php echo $cellamm; ?>" maxlength="30" size="20" >
            </td>
			</tr>
            
            
            
             <tr>
			<td ><font   color="#000000">Login Accesso: </font></b>
            </td>
            <td >
            <input type="text" name="loginaccessoamm" id="loginaccessoamm" value="<?php echo $loginaccessoamm; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            <tr>
			<td  ><font   color="#000000">Password Accesso: </font></b>
            </td>
            <td >
            <input type="password" name="passaccessoamm" id="passaccessoamm" value="<?php echo $passaccessoamm; ?>" maxlength="60" size="60" >
            </td>
			</tr>
<!--            
            <tr>
			<td ><font   color="#000000">Profilo permessi: </font></b>
            </td>
            <td >
            <input style="width: 15px;  height: 15px;" type="checkbox" <?php if($permessiamm1=="on"){echo "checked";} ?>  name="permessiamm1" size="1" maxlength=""><font   color="#000000" style="font-size: 10pt;">Autorizzazione 1&nbsp;&nbsp;&nbsp;</font>
            <input style="width: 15px;  height: 15px;" type="checkbox" <?php if($permessiamm2=="on"){echo "checked";} ?>  name="permessiamm2" size="1" maxlength=""><font   color="#000000" style="font-size: 10pt;">Autorizzazione 2&nbsp;&nbsp;&nbsp;</font>  
            <input style="width: 15px;  height: 15px;" type="checkbox" <?php if($permessiamm3=="on"){echo "checked";} ?>  name="permessiamm3" size="1" maxlength=""><font   color="#000000" style="font-size: 10pt;">Autorizzazione 3</font>  
            
            </td>
			</tr>
-->            
            
            
            
            
            
            
            <tr>
            <td colspan="2"  align="left" style="background: #476b5d;" ><b><font   color="#ffffff"  style="font-size: 10pt;">Rif. Operativo</font></b>
            </td>
            
            </tr>
            
            <tr>
			<td ><font   color="#000000">Cognome: </font></b>
            </td>
            <td >
            <input type="text" name="cognomeop" value="<?php echo $cognomeop; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            <tr>
			<td  ><font   color="#000000">Nome: </font></b>
            </td>
            <td >
            <input type="text" name="nomeop" value="<?php echo $nomeop; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
             <tr>
			<td  ><font   color="#000000">Ruolo: </font></b>
            </td>
            <td >
            <input type="text" name="ruoloop" value="<?php echo $ruoloop; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
             <tr>
			<td ><font   color="#000000">Email: </font></b>
            </td>
            <td >
            <input type="text" name="emailop" id="emailop" value="<?php echo $emailop; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            
            <tr>
			<td  ><font   color="#000000">Via: </font></b>
            </td>
            <td >
            <input type="text" name="viaop" value="<?php echo $viaop; ?>" maxlength="60" size="60" >
            </td>
            </tr>
            
            <tr>
			<td  ><font   color="#000000">Città: </font></b>
            </td>
            <td >
            <input type="text" name="cittaop" value="<?php echo $cittaop; ?>" maxlength="60" size="60" >
            </td>
            </tr>
            
            <tr>
			<td  ><font   color="#000000">Cap: </font></b>
            </td>
            <td >
            <input type="text" name="capop" value="<?php echo $capop; ?>" maxlength="5" size="10" >
            </td>
			</tr>
            
            <tr>
			<td  ><font   color="#000000">Provincia: </font></b>
            </td>
            <td >
            <input type="text" name="provop" value="<?php echo $provop; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            <tr>
			<td  ><font   color="#000000">Regione: </font></b>
            </td>
            <td >
            <input type="text" name="regioneop" value="<?php echo $regioneop; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            <tr>
			<td  ><font   color="#000000">Telefono: </font></b>
            </td>
            <td >
            <input type="text" name="telefonoop" id="telefonoop" value="<?php echo $telefonoop; ?>" maxlength="30" size="20" >
            </td>
			</tr>
            
            <tr>
			<td ><font   color="#000000">cellulare: </font></b>
            </td>
            <td >
            <input type="text" name="cellop" id="cellop" value="<?php echo $cellop; ?>" maxlength="30" size="20" >
            </td>
			</tr>
            
            
            <tr>
			<td  ><font   color="#000000">Login Accesso: </font></b>
            </td>
            <td >
            <input type="text" name="loginaccessoop" id="loginaccessoop" value="<?php echo $loginaccessoop; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            <tr>
			<td ><font   color="#000000">Password Accesso: </font></b>
            </td>
            <td >
            <input type="password" name="passaccessoop" id="passaccessoop" value="<?php echo $passaccessoop; ?>" maxlength="60" size="60" >
            </td>
			</tr>
<!--            
            <tr>
			<td  ><font   color="#000000">Profilo permessi: </font></b>
            </td>
            <td >
            <input style="width: 15px;  height: 15px;" type="checkbox" <?php if($permessiop1=="on"){echo "checked";} ?>  name="permessiop1" size="1" maxlength=""><font   color="#000000" style="font-size: 10pt;">Autorizzazione 1&nbsp;&nbsp;&nbsp;</font>
            <input style="width: 15px;  height: 15px;" type="checkbox" <?php if($permessiop2=="on"){echo "checked";} ?>  name="permessiop2" size="1" maxlength=""><font   color="#000000" style="font-size: 10pt;">Autorizzazione 2&nbsp;&nbsp;&nbsp;</font>  
            <input style="width: 15px;  height: 15px;" type="checkbox" <?php if($permessiop3=="on"){echo "checked";} ?>  name="permessiop3" size="1" maxlength=""><font   color="#000000" style="font-size: 10pt;">Autorizzazione 3</font>  
            
            </td>
			</tr>
-->            
            
            
            
            
            
            
            
            
            
            
            
            
            <tr>
            <td colspan="2"  align="left" style="background: #476b5d;" ><b><font   color="#ffffff"  style="font-size: 10pt;">Rif. Logistica Sede 1</font></b>
            </td>
            
            </tr>
             <tr>
            <td colspan="1"  ><font  color="#000000" >Ragione Sociale</font></b>
            </td>
            <td >
            <input type="text" name="ragsoclog" value="<?php echo $ragsoclog; ?>" maxlength="60" size="60" >
            </td>
            </tr>
            <tr>
			<td  ><font   color="#000000">Cognome: </font></b>
            </td>
            <td >
            <input type="text" name="cognomelog" value="<?php echo $cognomelog; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            <tr>
			<td ><font   color="#000000">Nome: </font></b>
            </td>
            <td >
            <input type="text" name="nomelog" value="<?php echo $nomelog; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
             <tr>
			<td  ><font   color="#000000">Ruolo: </font></b>
            </td>
            <td >
            <input type="text" name="ruololog" value="<?php echo $ruololog; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
             <tr>
			<td  ><font   color="#000000">Email: </font></b>
            </td>
            <td >
            <input type="text" name="emaillog" id="emaillog" value="<?php echo $emaillog; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            
            <tr>
			<td  ><font   color="#000000">Via: </font></b>
            </td>
            <td >
            <input type="text" name="vialog" value="<?php echo $vialog; ?>" maxlength="60" size="60" >
            </td>
            </tr>
            
            <tr>
			<td ><font   color="#000000">Città: </font></b>
            </td>
            <td >
            <input type="text" name="cittalog" value="<?php echo $cittalog; ?>" maxlength="60" size="60" >
            </td>
            </tr>
            
            <tr>
			<td  ><font   color="#000000">Cap: </font></b>
            </td>
            <td >
            <input type="text" name="caplog" value="<?php echo $caplog; ?>" maxlength="5" size="10" >
            </td>
			</tr>
            
            <tr>
			<td ><font   color="#000000">Provincia: </font></b>
            </td>
            <td >
            <input type="text" name="provlog" value="<?php echo $provlog; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            <tr>
			<td ><font   color="#000000">Regione: </font></b>
            </td>
            <td >
            <input type="text" name="regionelog" value="<?php echo $regionelog; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            <tr>
			<td  ><font   color="#000000">Telefono: </font></b>
            </td>
            <td >
            <input type="text" name="telefonolog" id="telefonolog" value="<?php echo $telefonolog; ?>" maxlength="30" size="20" >
            </td>
			</tr>
            
            <tr>
			<td ><font   color="#000000">cellulare: </font></b>
            </td>
            <td >
            <input type="text" name="celllog" value="<?php echo $celllog; ?>" maxlength="60" size="20" >
            </td>
			</tr>
            
          
            <tr>
				
               <?php if($ingranaggio==11){ ?>
				<td colspan="2" style="text-align: center; ">
               <input type="hidden" name="ingranaggio" value="100" />
                 <input type="hidden" name="login" value="<?php echo $login; ?>" />  
                 <input type="hidden" name="id" value="<?php echo $progr; ?>" /> 
                 <input type="hidden" name="codice" value="<?php echo $codice; ?>" />
                 <input type="hidden" name="primavolta" value="" />               
                 <button  type="submit" class="btn btn-warning">Modifica CAT</button>
                 </td>               
			<?php } ?>
            
            </tr>
            


           
                                       
            </table>
</form>
<br><br><br><br><br><br><br><br>    
</td>
<td align="right" valign="top" width="50%">
<p align="center"><font   size="4" color="#993300">Documenti Memorizzati</font></b></p><div align="center">    

<table class="table-form "  style="text-align:right;" width="100%">
		<tr>
	  <td style="background-color:#476b5d;" width="5%" align="center"><font size="2" color="#FFFFFF">OBBLIG..</td>	  
	  <td style="background-color:#476b5d;" width="15%" align="center"><font size="2" color="#FFFFFF">DATA DOC.</td>
      <td style="background-color:#476b5d;" width="15%" align="center"><font size="2" color="#FFFFFF">DATA SCAD.</td>
      <td style="background-color:#476b5d;" width="30%" align="center"><font size="2" color="#FFFFFF">TIPO DOC.</td>
      <td style="background-color:#476b5d;" width="30%" align="center"><font size="2" color="#FFFFFF">OGGETTO</td>
      <td colspan="2" style="background-color:#476b5d;" width="5%" align="center"><font size="2" color="#FFFFFF">OPERAZIONI&nbsp;&nbsp;</td>
      </tr>   
<?  
$scaduto=0;
$arancione=0;
$sql = "SELECT * FROM documenti  where    tipodoc = '$codice'";        
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
   $obbligatorio = $macrogruppo["obbligatorio"];
   $tipodocumento = $macrogruppo["tipodocumento"];
$comodo=explode("/",$datasca);
$datafine=$comodo[2].$comodo[1].$comodo[0];
$datafine20=$comodo[2].$comodo[1].$comodo[0];  
$datafinex=date("Ymd");
$datafinex20=date("Y-m-d");
if($datafinex > $datafine){$scaduto=1;} 




$datafinedocumento=$comodo[2]."-".$comodo[1]."-".$comodo[0];

$dataoggi=date("Y-m-d");
if($datafinex > $datafine){$trovato=0;}



// Data di partenza
$dataInizio = new DateTime($dataoggi);

// Data di fine
$dataFine = new DateTime($datafinedocumento);

// Calcola la differenza
$differenza = $dataFine->diff($dataInizio);

// Ottieni la differenza totale in giorni
$differenzaInGiorni = $differenza->days;

#echo "La differenza tra le due date è di $differenzaInGiorni giorni. $datafinedocumento $dataoggi $datafinex $datafine<br>";

if($differenzaInGiorni >= 0 and $differenzaInGiorni <= 20){$arancione=1;}




  
   
?>
<tr onMouseOver="style.background='#c9cacb';" onMouseOut="style.background=''">

        <td  width="10%" align="center"><font size="2"   color="<?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>"><? echo $obbligatorio; ?></td>
       
		<td  width="10%" align="center"><font size="2"   color="<?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>"><? echo $data; ?></td>
        <td  width="10%" align="center"><font size="2"   color="<?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>" <? if($arancione==1){ echo " style='background: #fdd8ad;' ";}   ?>  > <? if($scaduto==1){ echo "<blink>";} ?><? echo $datasca; ?><? echo "</blink>"; ?></td>
        <td  width="10%" align="center"><font size="2"   color="<?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>"><? echo $tipodocumento; ?></td>
       
        <td style= width="57%" align="left"><font size="2"   color="<?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>"><? echo $oggettox; ?></td>
		<td style=" border: 0px solid black;" align="center" ><a  onclick="myFunction('?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&prgrx=<? echo $prgr; ?>&ingranaggio=11&ingranaggiott=201&prgry=<?php echo $prgr; ?>&progr=<?php echo $progr; ?>&codice=<? echo $codice; ?>');"  ><img border="0" background="btn1.gif" src="occhio.png" width="25" height="25"></a></td>
        <td style=" border: 0px solid black;" align="center" >
<!--        <a  onclick="myFunction('?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&prgrx=<? echo $prgr; ?>&ingranaggio=10&ingranaggiott=202&oggetto=<?php echo $oggettox; ?>&progr=<?php echo $progr; ?>');"  ><img border="0" background="btn1.gif" src="x1.png" width="15" height="15"></a>   -->
        <a href="?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&prgrx=<? echo $prgr; ?>&ingranaggio=11&ingranaggiott=202&prgry=<?php echo $prgr; ?>&progr=<?php echo $progr; ?>&codice=<? echo $codice; ?>" onclick="return confirm('Sei sicuro di volere cancellare?')"><img border="0" src="x1.png" width="15" height="15"></a>
        </td>

        </tr>
<? }}
$oggiora=date("d/m/Y"); ?>
</table>

<p align="center"><font   size="4" color="#993300"><br><br>Inserimento Nuovo Documento </font></b></p><div align="center">    
<table class="table-form "  style="text-align:left;">
<form action="" method="post" enctype="multipart/form-data" >
		<tr>
        <td colspan="2">
        <table>
        <tr>
<!--        
        <td colspan="1" align="right" width="25%" style=" border: 1px solid #949699;font-size: 10pt;" >
        <font   color="#000000" size="2"   color="#000000">Obbligatorio: &nbsp;</b></font>
		<font size="2"  > <select size="1" name="obbligatorio" style="background-color: #ececee">
					<option <? if($obbligatorio=="NO"){echo "selected";}?>>NO</option>
					<option <? if($obbligatorio=="SI"){echo "selected";}?>>SI</option>
					</select> </font>       
        </td>
-->        
		<td colspan="1" align="right" width="25%" style=" border: 1px solid #949699;font-size: 10pt;" >
        <font   color="#000000" size="2"   color="#000000">Data Documento: &nbsp;</b></font>
		<font size="2"  > <input type="text" name="newdata" value="<?php echo $oggiora; ?>"  size="10"  style="background-color: #cac7c7; border: 0px; font-size: 12pt;"> </font>
        </td>
        
        <td colspan="1" align="right" width="25%" style=" border: 1px solid #949699;font-size: 10pt;" >
        <font   color="#000000" size="2"   color="#000000">Data scadenza Documento: </b></font>
		<font size="2"  > <input type="text" name="newdatasca" value="31/12/9999"  size="10"  style="background-color: #cac7c7; border: 0px; font-size: 12pt;"> </font>        
        </td>
        
        </tr>
        </table>
        </td>
        </tr> 
        
        <tr>
		<td align="left" style=" border: 0px solid #949699;font-size: 10pt;"> <font size="2"   color="#000000">Documento: </b></font>
		</td>
        <td>
         <select size="1" name="tipodocumento" style="background-color: #ebf8fb"> 
         <option >VARIO</option>     
  <?php
$sql1 = "SELECT * FROM `tipodoccatcat` where codicecat = '$codice'  ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{    
      $descrizione = $macrogruppo["descrizione"];
      $progr = $macrogruppo["progr"];
?>          
       		<option ><?php echo $descrizione; ?></option>       
<?php  }} ?>
    </select>
        </td>
        </tr>
        
        <tr>
		<td align="left" style=" border: 0px solid #949699;font-size: 10pt;"> <font size="2"   color="#000000">oggetto: </b></font>
		</td>
        <td><input type="text" name="newoggetto"   size="72"  placeholder="Inserisci qui' l'oggetto del documento che stai caricando(obbligatorio)" style="background-color: #cac7c7; border: 0px; font-size: 12pt;">
        </td>
        </tr>
	
		<tr>
			<td align="left" style=" border: 0px solid #949699;font-size: 10pt;">
       <font size="2"  ><font color="#000000">Carica Documento:</b></font>
      </td>
	  <td align="left" ><font size="2" >
		 <input type="hidden" name="ingranaggio" value="7" />
         <input type="hidden" name="login" value="<? echo $login; ?>" />
         <input type="hidden" name="codice" value="<? echo $codice; ?>" />
         <input type="hidden" name="id" value="<? echo $progr; ?>" />
         <input type="hidden" name="primavolta" value="" />
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
    <td colspan="2" width="100%"><br><br>
<div>
<iframe  align="right" frameborder="0" width="100%" height="800" scrolling="yes" src="esponipdfffx.php?login=<?php echo $login; ?>&fl=<?php echo $fileh; ?>"></iframe> 
</div>    
    </td>
    </tr>
<?php } 

?>   










	</table>  
    
    
    
    
    
<p align="center"><font   size="4" color="#993300">Documenti Obbligatori/non Obbligatori</font></b></p><div align="center">               
<table class="table-form "  style="text-align:left;">
	  <tr>
      <td style="background-color:#476b5d;" width="5%" align="center"><font size="2" color="#FFFFFF">OBB.</td>	  	  
      
      <td style="background-color:#476b5d;"  align="center"><font size="2" color="#FFFFFF">DOCUMENTO</td>
      <td colspan="2" style="background-color:#476b5d;" width="5%" align="center"><font size="2" color="#FFFFFF">SITUAZIONE&nbsp;&nbsp;</td>
      </tr>   
<?
$sqlt = "SELECT * FROM tipodoccatcat where codicecat = '$codice'  ";        
#echo $sqlt;
$resultt = $conn->query($sqlt);
if ($resultt->num_rows > 0) {
  while($macrogruppot = $resultt->fetch_assoc())	
	{ 
   $prgr = $macrogruppot["progr"];
   $descrizioney = $macrogruppot["descrizione"];
   $obbligatorioy = $macrogruppot["obbligatorio"];
#echo  $descrizioney."<br>";
$trovato=0;

$sqlp = "SELECT * FROM documenti  where    tipodoc = '$codice' and tipodocumento = '$descrizioney' ";        
#echo $sqlp;  exit;
$resultp = $conn->query($sqlp);
if ($resultp->num_rows > 0) {
  while($macrogruppop = $resultp->fetch_assoc())	
	{ 
   $prgr = $macrogruppop["progr"];
   $data = $macrogruppop["datadoc"];
   $datasca = $macrogruppop["datasca"];
   $tipodoc = $macrogruppop["tipodoc"];
   $oggettox= $macrogruppop["oggetto"];
   #echo $oggettox.$oggetto;
   $file = $macrogruppop["file"];
   $obbligatorio = $macrogruppop["obbligatorio"];
   $tipodocumento = $macrogruppop["tipodocumento"];
$trovato=1; #echo "modifica";
$comodo=explode("/",$datasca);
$datafine=$comodo[2].$comodo[1].$comodo[0];
$datafinex=date("Ymd");
if($datafinex > $datafine){$trovato=0;}
}}


/*
$sqly = "SELECT * FROM catdoc  ";        
#echo $sqly;
$resulty = $conn->query($sqly);
if ($resulty->num_rows > 0) {
  while($macrogruppoy = $resulty->fetch_assoc())	
	{
    $prgry = $macrogruppoy["progr"];
    $obbligatorioy = $macrogruppoy["obbiglatorio"];
    $descrizioneyy = $macrogruppoy["descrizione"];
    $scadenzay = $macrogruppoy["scadenza"];
    $trovato=1; }}
*/        
?>
<tr> 
<td   align="center"><font size="3"   >       
<? echo $obbligatorioy; ?></font>
</td>
<td><font size="3"   >
<? echo $descrizioney; ?> </font>
</td>             
<td colspan="1" style="text-align: center; " >         
</td> 
<td>
<? if($trovato==1){ ?>
<img border="0" src="verde.png"  width="30" height="30"">
<? } else { ?>
 <img border="0" src="rosso.png"  width="30" height="30"">
 <? } ?>
</td>
</tr>
<? }} ?>        
</tr>
</table>
            
    
    
</td>
</tr>
</table>              
            <br>

<?php    }}} 
#echo "ing ".$ingranaggio;

#echo "ing ".$ingranaggio;
?>
     
            <br>

<?php if($ingranaggio==33 or $ingranaggio == 100){ ?>
<div allign="center">
<table id="tableFooter" class="display" cellspacing="0" align="center" style="width:98%; position:relative;">         
             <thead class="intesta">
	<tr class="testa">
		 
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="2"  >Codice CAT</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="2"  >Nome CAT</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="2"  >Città</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="2"  >Regione</td>         
          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="2"  >Rif. Amm.</td>
          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="2"  >Rif. Operativo</td>                                                     
          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="2"  >Rif. Logistica</td>                   
          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="2"  >Vedi</td>                   
          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="2"  >Modifica</td>                   

         
         </tr>       
	</thead>
	<tbody>
<?php    
$sql = "SELECT *  FROM  cat where  id != '' " 
        .$selezionacliente.
        " ORDER BY ragsoc";  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
$progr= $macrogruppo["id"];    
$codice= $macrogruppo["codice"];                     
$dataoperazione= $macrogruppo["dataoperazione"];           
$ragsoc= $macrogruppo["ragsoc"];           
$via= $macrogruppo["via"];           
$citta= $macrogruppo["citta"];           
$cap= $macrogruppo["cap"];           
$prov= $macrogruppo["prov"];           
$regione= $macrogruppo["regione"];           
$iva= $macrogruppo["iva"];           
$codfisc= $macrogruppo["codfisc"];           
$pec= $macrogruppo["pec"];            
$iban= $macrogruppo["iban"];           
$sdi= $macrogruppo["sdi"];            
$cognomeamm= $macrogruppo["ammcognome"];           
$nomeamm= $macrogruppo["ammnome"];           
$ruoloamm= $macrogruppo["ammruolo"];           
$emailamm= $macrogruppo["annemail"];           
$viaamm= $macrogruppo["ammvia"];           
$cittaamm= $macrogruppo["ammcitta"];           
$capamm= $macrogruppo["ammcap"];           
$provamm= $macrogruppo["ammprov"];           
$regioneamm= $macrogruppo["ammregione"];           
$telefonoamm= $macrogruppo["ammtelefono"];           
$cellamm= $macrogruppo["ammcell"];            
$cognomeop= $macrogruppo["opcognome"];           
$nomeop= $macrogruppo["opnome"];           
$ruoloop= $macrogruppo["opruolo"];           
$emailop= $macrogruppo["opemail"];           
$viaop= $macrogruppo["opia"];           
$cittaop= $macrogruppo["opcitta"];           
$capop= $macrogruppo["opcap"];           
$provop= $macrogruppo["opprov"];           
$regioneop= $macrogruppo["opregione"];           
$telefonoop= $macrogruppo["optelefono"];           
$cellop= $macrogruppo["opcell"];           
 
$cognomelog= $macrogruppo["logcognome"];           
$nomelog= $macrogruppo["lognome"];           
$ruololog= $macrogruppo["logruolo"];           
$emaillog= $macrogruppo["logemail"];           
$vialog= $macrogruppo["logvia"];           
$cittalog= $macrogruppo["logcitta"];           
$caplog= $macrogruppo["logcap"];           
$provlog= $macrogruppo["logprov"];           
$regionelog= $macrogruppo["logregione"];           
$telefonolog= $macrogruppo["logtelefono"];           
$celllog= $macrogruppo["logcell"];
?>     
	<tr >
        
      <td   align="left" bgcolor="<? echo $colore; ?>"><?php echo $codice; ?></td>
      <td   align="left" bgcolor="<? echo $colore; ?>"><?php echo $ragsoc; ?></td>
      <td   align="left" bgcolor="<? echo $colore; ?>"><?php echo $citta; ?></td>
      <td   align="left" bgcolor="<? echo $colore; ?>"><?php echo $regione; ?></td>
      <td   align="left" bgcolor="<? echo $colore; ?>"><?php echo $cognomeamm; ?></td>
      <td  s align="left" bgcolor="<? echo $colore; ?>"><?php echo $cognomeop; ?></td>
      <td  s align="left" bgcolor="<? echo $colore; ?>"><?php echo $cognomelog; ?></td>    
      <td  align="center" ><a  href="cercacat.php?login=<?php echo $login; ?>&progr=<?php echo $progr; ?>&ingranaggio=10"  ><img border="0" background="btn1.gif" src="occhio.png" width="20" height="20"></a></td>
      <td  align="center" ><a  href="cercacat.php?login=<?php echo $login; ?>&progr=<?php echo $progr; ?>&ingranaggio=11"  ><img border="0" background="btn1.gif" src="pencil.png" width="20" height="20"></a></td>
     
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
</script>
</body>

</html>