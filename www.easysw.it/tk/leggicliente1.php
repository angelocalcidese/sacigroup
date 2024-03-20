<?php
session_start(); if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){ $larg= $_SESSION['screen_width'] ; $alt= $_SESSION['screen_height']; } else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) { $_SESSION['screen_width'] = $_REQUEST['width']; $_SESSION['screen_height'] = $_REQUEST['height']; header('Location: ' . $_SERVER['PHP_SELF']); } else { echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width+"&height="+screen.height;</script>'; } 

include "conf_DB.php";
$cognome=$_REQUEST["cognome"];
$cognome=str_replace("'", "\'", $cognome);
$ragsocx=$_REQUEST["ragsocx"];
$ragsocx=str_replace("'", "\'", $ragsocx);
$ivax=$_REQUEST["ivax"];
 $oggetto=$_REQUEST["oggetto"];
$oggetto=str_replace("'", "\'", $oggetto); 
$ingranaggio=$_REQUEST["ingranaggio"];
$ingranaggiott=$_REQUEST["ingranaggiott"];
$progr=$_REQUEST["progr"];
$login=$_REQUEST["login"];
$dataoperazione=$_REQUEST["dataoperazione"];
$codicec=$_REQUEST["codice"];
$ragsoc=$_REQUEST["ragsoc"];
$ragsoc=str_replace("'", "\'", $ragsoc); 
$via=$_REQUEST["via"];
$via=str_replace("'", "\'", $via);
$citta=$_REQUEST["citta"];
$cap=$_REQUEST["cap"];
$prov=$_REQUEST["prov"];
$regione=$_REQUEST["regione"];
$iva=$_REQUEST["iva"];
$codfisc=$_REQUEST["codfisc"];
$telefono=$_REQUEST["telefono"];
$pec=$_REQUEST["pec"];
$email=$_REQUEST["email"];
$iban=$_REQUEST["iban"];
$sdi=$_REQUEST["sdi"];
$acro=$_REQUEST["acro"];
$sito=$_REQUEST["sito"];
$cognomeamm=$_REQUEST["cognomeamm"];
$cognomeamm=str_replace("'", "\'", $cognomeamm);
$nomeamm=$_REQUEST["nomeamm"];
$ruoloamm=$_REQUEST["ruoloamm"];
$emailamm=$_REQUEST["emailamm"];
$viaamm=$_REQUEST["viaamm"];
$cittaamm=$_REQUEST["cittaamm"];
$cittaamm=str_replace("'", "\'", $cittaamm);
$capamm=$_REQUEST["capamm"];
$provamm=$_REQUEST["provamm"];
$regioneamm=$_REQUEST["regioneamm"];
$telefonoamm=$_REQUEST["telefonoamm"];
$cellamm=$_REQUEST["cellamm"];
$email1amm=$_REQUEST["email1amm"];

$cognomeop=$_REQUEST["cognomeop"];
$cognomeop=str_replace("'", "\'", $cognomeop);
$nomeop=$_REQUEST["nomeop"];
$ruoloop=$_REQUEST["ruoloop"];
$emailop=$_REQUEST["emailop"];
$viaop=$_REQUEST["viaop"];
$cittaop=$_REQUEST["cittaop"];
$cittaop=str_replace("'", "\'", $cittaop);
$capop=$_REQUEST["capop"];
$provop=$_REQUEST["provop"];
$regioneop=$_REQUEST["regioneop"];
$telefonoop=$_REQUEST["telefonoop"];
$cellop=$_REQUEST["cellop"];
$email1op=$_REQUEST["email1op"];
$progr=$_REQUEST["progr"];
$prgrx=$_REQUEST["prgrx"];
$prgry=$_REQUEST["prgry"];
$cognomelog=$_REQUEST["cognomelog"];
$cognomelog=str_replace("'", "\'", $cognomelog);
$nomelog=$_REQUEST["nomelog"];
$ruololog=$_REQUEST["ruololog"];
$emaillog=$_REQUEST["emaillog"];
$vialog=$_REQUEST["vialog"];
$cittalog=$_REQUEST["cittalog"];
$cittalog=str_replace("'", "\'", $cittalog);
$caplog=$_REQUEST["caplog"];
$provlog=$_REQUEST["provlog"];
$regionelog=$_REQUEST["regionelog"];
$telefonolog=$_REQUEST["telefonolog"];
$celllog=$_REQUEST["celllog"];
$email1log=$_REQUEST["email1lo"];
$file=$_REQUEST["file"];
$fileh=$_REQUEST["fileh"];
#echo "file ".$file;
if ($ingranaggio=="7")
{
$newdata=$_POST["newdata"];
$newdatasca=$_POST["newdatasca"];
$newoggetto=$_POST["newoggetto"];
$clientexx=$_POST["cliente"];
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
#echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        { } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 

$ingranaggio=10; 
 } }
}







#$importo=number_format($importo, 2);
$erroreriferimento="";
if ($ingranaggio==100)
   { 
$errore="";  



    
$sql = "Update clienti set                           
dataoperazione='$dataoperazione', 
ragsoc='$ragsoc', 
via='$via', 
citta='$citta', 
cap='$cap', 
prov='$prov', 
regione='$regione', 
iva='$iva', 
codfisc='$codfisc', 
telefono='$telefono', 
pec='$pec', 
email='$email', 
iban='$iban', 
sdi='$sdi', 
acro='$acro', 

cognomeamm='$cognomeamm', 
nomeamm='$nomeamm', 
ruoloamm='$ruolo', 
emailamm='$emailamm', 
viaamm='$viaamm', 
cittaamm='$cittaamm', 
capamm='$capamm', 
provamm='$provamm', 
regioneamm='$regioneamm', 
telefonoamm='$telefonoamm', 
cellamm='$cellamm', 
email1amm='$email1amm',

cognomeop='$cognomeop', 
nomeop='$nomeop', 
ruoloop='$ruolo', 
emailop='$emailop', 
viaop='$viaop', 
cittaop='$cittaop', 
capop='$capop', 
provop='$provop', 
regioneop='$regioneop', 
telefonoop='$telefonoop', 
cellop='$cellop', 
email1op='$email1op',

cognomelog='$cognomelog', 
nomelog='$nomelog', 
ruololog='$ruolo', 
emaillog='$emaillog', 
vialog='$vialog', 
cittalog='$cittalog', 
caplog='$caplog', 
provlog='$provlog', 
regionelog='$regionelog', 
telefonolog='$telefonolog', 
celllog='$celllog', 
email1log='$email1log',
login='$login',
sito='$sito'
where progr = '$progr' ";
  #echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {$errore="Cliente Modificato Correttamente"; } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 
  
} 
?>

<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>inserimento documenti</title>
<?php include("risorsePrincipali.php"); ?>

  <? #include('css_definitions_new.php'); 
  ?>
   
  
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
    var table = $('#example').DataTable(
	{
	
	"order": [[ 0, "desc" ]],
	"scrollCollapse": true,
	"paging": true,
	"lengthMenu": [ [ 10, -1, 25, 50 ], [ 10, "Tutti", 25, 50 ] ],
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
</script>
<style>
.dataTables_filter {float:right !important;}

</style>  



 <SCRIPT type="text/javascript">
 function aggiorna(sel){
  var f = document.form;
  f.sel_value.value = sel.options[sel.selectedIndex].value;
  f.sel_text.value = sel.options[sel.selectedIndex].text;
 }
</SCRIPT>
<script>
$(function() {
	$('#popupDatepicker').datepick();
  $('#popupDatepicker1').datepick();
	$('#inlineDatepicker').datepick({onSelect: showDate});

});

function showDate(date) {
	alert('The date chosen is ' + date);
}


</script>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Verdana:ital,wght@0,200;0,300;0,500;1,100&display=swap');
</style>
<style>

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
if ($ragsocx!="")
   {$selezionaragsoc= " and ragsoc like '".$ragsocx."%"."' ";}
   else
   {$selezionaragsoc="";}
if ($cognome!="")
   {$selezionacognome= " and (cognomeamm like '".$cognome."%"."' or cognomeop like '".$cognome."%"."' or cognomelog like '".$cognome."%"."') ";}
   else
   {$selezionacognome="";}
if ($ivax!="")
   {$selezionaiva= " and iva = '".$ivax."' ";}
   else
   {$selezionaiva="";}



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
alert ("Il mese inserito non č valido");
}
// controllo il formato del giorno
if (giorno < 10) {
giorno = "0" + giorno;
}
// controllo sul valore del giorno
if (giorno > 31){
alert("Il giorno non č valido");
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

<body text="#000000" onLoad="larghezza(); frame();"  >
<div align="center">   

<?php if($ingranaggio==10 or $ingranaggio==11){ 
if($ingranaggiott==202){ 
$sql = "
DELETE from documenti where progr = '$prgrx'";
#echo $sql;
if ($conn->query($sql) === FALSE)
  {echo "errxx=errore";exit;}
  else
  {}
 } 
#echo "ragsocxx ".$ragsocx;
#echo "ivax ".$ivax;
$sql = "SELECT *  FROM  clienti where  progr = '$progr' ";  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
     $progr = $macrogruppo["progr"];
     $codice = $macrogruppo["codice"];
     $dataoperazione= $macrogruppo["dataoperazione"];
     $ragsoc = $macrogruppo["ragsoc"];
     $via = $macrogruppo["via"];
     $citta = $macrogruppo["citta"];
     $cap = $macrogruppo["cap"];
     $prov = $macrogruppo["prov"];
     $regione = $macrogruppo["regione"];
     $iva = $macrogruppo["iva"];
     $codfisc = $macrogruppo["codfisc"];
     $telefono = $macrogruppo["telefono"];
     $pec = $macrogruppo["pec"];
     $email = $macrogruppo["email"];
     $iban = $macrogruppo["iban"];
     $sdi = $macrogruppo["sdi"];
     $acro = $macrogruppo["acro"];
     
     $cognomeamm = $macrogruppo["cognomeamm"];
     $nomeamm = $macrogruppo["nomeamm"];
     $ruoloamm = $macrogruppo["ruoloamm"];
     $emailamm = $macrogruppo["emailamm"];
     $viaamm = $macrogruppo["viaamm"];
     $cittaamm = $macrogruppo["cittaamm"];
     $capamm = $macrogruppo["capamm"];
     $provamm = $macrogruppo["provamm"];
     $regioneamm = $macrogruppo["regioneamm"];
     $telefonoamm = $macrogruppo["telefonoamm"];
     $cellamm = $macrogruppo["cellamm"];
     $email1amm = $macrogruppo["email1amm"];
     
     $cognomeop = $macrogruppo["cognomeop"];
     $nomeop = $macrogruppo["nomeop"];
     $ruoloop = $macrogruppo["ruoloop"];
     $emailop = $macrogruppo["emailop"];
     $viaop = $macrogruppo["viaop"];
     $cittaop = $macrogruppo["cittaop"];
     $capop = $macrogruppo["capop"];
     $provop = $macrogruppo["provop"];
     $regioneop = $macrogruppo["regioneop"];
     $telefonoop = $macrogruppo["telefonoop"];
     $cellop = $macrogruppo["cellop"];
     $email1op = $macrogruppo["email1op"];
     
     $cognomelog = $macrogruppo["cognomelog"];
     $nomelog = $macrogruppo["nomelog"];
     $ruololog = $macrogruppo["ruololog"];
     $emaillog = $macrogruppo["emaillog"];
     $vialog = $macrogruppo["vialog"];
     $cittalog = $macrogruppo["cittalog"];
     $caplog = $macrogruppo["caplog"];
     $provlog = $macrogruppo["provlog"];
     $regionelog = $macrogruppo["regionelog"];
     $telefonolog = $macrogruppo["telefonolog"];
     $celllog = $macrogruppo["celllog"];
     $email1log = $macrogruppo["email1log"];
     $sito = $macrogruppo["sito"];
?>

<br>
<table class="table-form " >
<tr>
<td align="left" width="50%">
<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data">
<table width="100%">
            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #cacdd1;background: #476b5d;" width="20%"><font   color="#ffffff" style="font-size: 10pt; "><b>Codice Cliente</b></font>
            </td>
            <td colspan="1" align="left" style=" border: 1px solid #cacdd1;" width="20%"><font  color="#cc0000" style="font-size: 14pt; "><b><?php echo $codice; ?></b></font>
            </td>
            </tr>
            
            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #cacdd1;" width="20%"><font  color="#000000" style="font-size: 10pt; ">Data Acquisizione</font>
            </td>
            <td style=" border: 1px solid #949699;" width="80%"><input maxlength="10" type="text" name="dataoperazione" value="<?php echo $dataoperazione; ?>" autocomplete="off" id="popupDatepicker1" size="10" style="background-color: #cac7c7; border: 0px; font-size: 10pt;"><font  color="#000000"></font>
			</td>
            </tr>
            
            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #949699;background: #476b5d; " ><b><font   color="#ffffff" style="font-size: 10pt;">Ragione Sociale</font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="ragsoc" value="<?php echo $ragsoc; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
            </tr>
            
			<tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Via: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="via" value="<?php echo $via; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
            </tr>
            
            <tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Città: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="citta" value="<?php echo $citta; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
            </tr>
            
            <tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Cap: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="cap" value="<?php echo $cap; ?>"maxlength="5"  size="10" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Provincia: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="prov" value="<?php echo $prov; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Nazione: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="regione" value="<?php echo $regione; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">P.iva: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="iva" value="<?php echo $iva; ?>" maxlength="15" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">C. F.: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="codfisc" value="<?php echo $codfisc; ?>" maxlength="20" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Telefono: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="telefono" value="<?php echo $telefono; ?>" maxlength="30" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">PEC: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="pec" value="<?php echo $pec; ?>"maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Email: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="email" value="<?php echo $email; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">IBAN: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="iban" value="<?php echo $iban; ?>" maxlength="60" size="20" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
             <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">SDI: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="sdi" value="<?php echo $sdi; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
             <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Acronimo: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="acro" value="<?php echo $acro; ?>" maxlength="3" size="5" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
             <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Sito: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="sito" value="<?php echo $sito; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
            <tr>
            <td colspan="2" align="left" style=" border: 1px solid #949699;background: #476b5d; " ><b><font   color="#ffffff"  style="font-size: 10pt;">Rif. Amministrativi</font></b>
            </td>
            
            </tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Cognome: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="cognomeamm" value="<?php echo $cognomeamm; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Nome: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="nomeamm" value="<?php echo $nomeamm; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
             <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Ruolo: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="ruoloamm" value="<?php echo $ruoloamm; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
            
            
            
            <tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Via: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="viaamm" value="<?php echo $viaamm; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
            </tr>
            
            <tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Città: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="cittaamm" value="<?php echo $cittaamm; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
            </tr>
            
            <tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Cap: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="capamm" value="<?php echo $capamm; ?>" maxlength="5" size="10" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Provincia: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="provamm" value="<?php echo $provamm; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Nazione: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="regioneamm" value="<?php echo $regioneamm; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Telefono: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="telefonoeamm" value="<?php echo $telefonoamm; ?>" maxlength="30" size="20" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">cellulare: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="cellamm" value="<?php echo $cellamm; ?>" maxlength="30" size="20" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
             <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Email: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="email1amm" value="<?php echo $email1amm; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
            <tr>
            <td colspan="2" align="left" style=" border: 1px solid #949699;background: #476b5d; " ><b><font   color="#ffffff"  style="font-size: 10pt; ">Rif. Operativo</font></b>
            </td>
            
            </tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Cognome: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="cognomeop" value="<?php echo $cognomeop; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Nome: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="nomeop" value="<?php echo $nomeop; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
             <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Ruolo: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="ruoloop" value="<?php echo $ruoloop; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
          
            
            
            <tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Via: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="viaop" value="<?php echo $viaop; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
            </tr>
            
            <tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Città: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="cittaop" value="<?php echo $cittaop; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
            </tr>
            
            <tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Cap: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="capop" value="<?php echo $capop; ?>" maxlength="5" size="10" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Provincia: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="provop" value="<?php echo $provop; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Nazione: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="regioneop" value="<?php echo $regioneop; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Telefono: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="telefonoeop" value="<?php echo $telefonoop; ?>" maxlength="30" size="20" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">cellulare: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="cellop" value="<?php echo $cellop; ?>" maxlength="30" size="20" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
             <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Email: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="email1op" value="<?php echo $email1op; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
            <tr>
            <td colspan="2" align="left" style=" border: 1px solid #949699;background: #476b5d; " ><b><font   color="#ffffff" style="font-size: 10pt; ">Rif. Logistica</font></b>
            </td>
            
            </tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Cognome: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="cognomelog" value="<?php echo $cognomelog; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Nome: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="nomelog" value="<?php echo $nomelog; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
             <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Ruolo: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="ruololog" value="<?php echo $ruololog; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
           
            
            
            <tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Via: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="vialog" value="<?php echo $vialog; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
            </tr>
            
            <tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Città: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="cittalog" value="<?php echo $cittalog; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
            </tr>
            
            <tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Cap: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="caplog" value="<?php echo $caplog; ?>" maxlength="5" size="10" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Provincia: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="provlog" value="<?php echo $provlog; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Nazione: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="regionelog" value="<?php echo $regionelog; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Telefono: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="telefonolog" value="<?php echo $telefonolog; ?>" maxlength="30" size="20" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">cellulare: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="celllog" value="<?php echo $celllog; ?>" maxlength="60" size="20" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            
             <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt; " ><font   color="#000000">Email: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="email1log" value="<?php echo $email1log; ?>"maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
            </td>
			</tr>
            <tr>
				<td >&nbsp;</td>
                <?php if($ingranaggio==11){ ?>
				<td>
                
                 <input type="hidden" name="ingranaggio" value="100" />
                 <input type="hidden" name="login" value="<?php echo $login; ?>" />
                  <input type="hidden" name="cognome" value="<?php echo $cognome; ?>" />
                 <input type="hidden" name="ragsocx" value="<?php echo $ragsocx; ?>" />
                 <input type="hidden" name="ivax" value="<?php echo $ivax; ?>" />
                 <button class="btn btn-primary" type="submit" type="button" >Modifica Cliente</button></td>               
			<?php } ?>
            </tr>
            <tr>
            <td>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </td>
            </tr>                   
            </table>
</form>    
</td>
<td align="center" valign="top" width="50%">
<p align="center"><font   size="4" color="#993300" style=" ">Documenti </font></b></p><div align="center">    

<table border="0" width="100%"  >

	  <tr>		  
      <td style="background-color:#476b5d; " width="15%" align="center"><font size="2"   color="#FFFFFF">DATA DOC.</td>
      <td style="background-color:#476b5d; " width="15%" align="center"><font size="2"   color="#FFFFFF">DATA SCAD.</td>
      <td style="background-color:#476b5d; " width="60%" align="center"><font size="2"   color="#FFFFFF">OGGETTO</td>
      <td colspan="2" style="background-color:#476b5d; " width="10%" align="center"><font size="2"   color="#FFFFFF">OPERAZIONI&nbsp;&nbsp;</td>
      </tr>
<?
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
   $file = $macrogruppo["file"];
?>
<tr>
<tr onMouseOver="style.background='#c9cacb';" onMouseOut="style.background=''">

      
		<td  style=" " align="center"><font size="2"   color="<?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>"><? echo $data; ?></td>
        <td  style=" " align="center"><font size="2"   color="<?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>"><? echo $datasca; ?></td>
        
        <td  style=" " align="left"><font size="2"   color="<?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>"><? echo $oggettox; ?></td>
		<td style=" border: 0px solid black; " align="center" ><a  onclick="myFunction('?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&prgrx=<? echo $prgr; ?>&ingranaggio=10&ingranaggiott=201&prgry=<?php echo $prgr; ?>&progr=<?php echo $progr; ?>');" ><img border="0" background="btn1.gif" src="occhio.png" width="25" height="25"></a></td>
        <td style=" border: 0px solid black; " align="center" >
<!--        <a  onclick="myFunction('?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&prgrx=<? echo $prgr; ?>&ingranaggio=10&ingranaggiott=202&oggetto=<?php echo $oggettox; ?>&progr=<?php echo $progr; ?>');" ><img border="0" background="btn1.gif" src="x1.png" width="15" height="15"></a>   -->
<a href="?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&prgrx=<? echo $prgr; ?>&ingranaggio=10&ingranaggiott=202&prgry=<?php echo $prgr; ?>&progr=<?php echo $progr; ?>" onclick="return confirm('Sei sicuro di volere cancellare?')"><img border="0" src="x1.png" width="15" height="15"></a>

</td>

     
        </tr>
<? }}
$oggiora=date("d/m/Y"); ?>
</table>

<p align="center"><font   size="4" style=" " color="#993300">Inserimento Nuovo Documento </font></b></p><div align="center">    
<table  width="100%" >
<form action="" method="post" enctype="multipart/form-data" >
		<tr>
        <td colspan="2">
        <table>
        <tr>
		<td colspan="1" align="left" width="25%" style=" border: 1px solid #949699;font-size: 10pt; " >
        <font style=" "   color="#000000" size="2"   color="#000000">Data Documento: &nbsp;</b></font>
		<font style=" " size="2"  > <input type="text" name="newdata" value="<?php echo $oggiora; ?>"  size="10"  style="background-color: #cac7c7; border: 0px; font-size: 12pt;"> </font></td>
        <td colspan="1" align="right" width="25%" style=" border: 1px solid #949699;font-size: 10pt; " >
        <font style=" "   color="#000000" size="2"   color="#000000">Data scadenza Documento: </b></font>
		<font tyle=" " size="2"  > <input type="text" name="newdatasca" value="31/12/9999"  size="10"  style="background-color: #cac7c7; border: 0px; font-size: 12pt;"> </font>        
        </td>
        </tr>
        </table>
        </td>
        </tr> 
        <tr>
		<td align="left" width="130" style=" border: 1px solid #949699;font-size: 10pt; "> <font size="2"   color="#000000">oggetto: </b></font>
		</td>
        <td><input type="text" name="newoggetto"   size="68"  placeholder="Inserisci qui l'oggetto del documento che stai caricando(obbligatorio)" style="background-color: #cac7c7; border: 0px; font-size: 12pt; ">
        </td>
        </tr>
	
		<tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt; ">
       <font size="2"  ><font color="#000000" style=" ">Carica Documento:</b></font>
      </td>
	  <td align="left" ><font size="2"  >
		 <input type="hidden" name="ingranaggio" value="7" />
         <input type="hidden" name="login" value="<? echo $login; ?>" />
         <input type="hidden" name="cliente" value="<? echo $commessa; ?>" />
         <input type="hidden" name="progr" value="<? echo $progr; ?>" />
         <input type="hidden" name="cliente" value="<? echo $codice; ?>" />
		 <input type="file" name="fileToUpload" id="fileToUpload" size="150" style="font-size: 12pt; font-weight: normal; background-color: #cac7c7; ">
    </td>	
    </tr>
    <tr>
    <td> 
    <input type="submit" value="Memorizza" size="50" name="submit" style="font-size: 12pt; font-weight: normal; background-color: #cc0000; color: #ffffff;border: 0px; ">
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
</table>              
            <br>

<?php }}} 
#echo "ing ".$ingranaggio;
?>
</div allign="left">
<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data">

<br>
<table class="table-form " >
	        <tr>
            <td colspan="2">
            </td>
            </tr>
			<tr>
            <td width="20%" style="  font-size: 11pt; "><font   color="#000000">Ragione Sociale: </td>
            <td width="80%" >
            <input type="text" name="ragsocx"   value="<?php echo $ragsocx; ?>" size="60" >
			</td>		
        </tr>
      
        <tr>
            <td width="20%" style="  font-size: 11pt; "><font   color="#000000">Iva: </td>
            <td width="80%" >
            <input type="text" name="ivax" value="<?php echo $ivax; ?>" size="15" >
			</td>		
        </tr>
        <tr>
        
        <td colspan="2" style="text-align: center; " >       
                 <input type="hidden" name="ingranaggio" value="33" />
                 <input type="hidden" name="login" value="<?php echo $login; ?>" />
                
                  <button class="btn btn-primary" type="submit" type="button" >Ricerca Cliente</button></td>
         
            </tr>            
           </form> 
</table>              
</div>              
            <br>
            

<?php if($ingranaggio==33 or $ingranaggio == 100){ ?>

<div align="center">
<table align="center" id="example" class="display" cellspacing="0" align="left" style="width:99%; position:relative;">         
             <thead class="intesta">
	<tr class="testa">
		 
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Codice</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Data Acq.</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Rag. soc.</td>        
      	  <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >telefono</td>
           <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >email</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Iban</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >iva</td>            
          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Oper.</td>
          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Oper.</td>
           </tr>       
	</thead>
	<tbody>
<?php    
$sql = "SELECT *  FROM  clienti where  progr != '' " 
        .  $selezionaragsoc  . $selezionacognome . $selezionaiva .
        " ORDER BY ragsoc";  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
     $progr = $macrogruppo["progr"];
     $ragsocx = $macrogruppo["ragsoc"];
     $dataoperazione = $macrogruppo["dataoperazione"];
     $codice = $macrogruppo["codice"];
     $ivaxx = $macrogruppo["iva"];
     $telefonox = $macrogruppo["telefono"];
     $emailx = $macrogruppo["email"];
     $ibanx = $macrogruppo["iban"];
?>     
    <tr >    
      <td style=" border: 1px solid #e4e3e3; " align="center" ><font size="3"  ><?php echo $codice; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="center" ><font size="3"  ><?php echo $dataoperazione; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="left" ><font size="3"  ><?php echo $ragsocx; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="left" ><font size="3"  ><?php echo $telefonox; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="left" ><font size="3"  ><?php echo $emailx; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="left" ><font size="3"  ><?php echo $ibanx; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="center"><font size="3"  ><?php echo $ivaxx; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="center" ><a  href="leggicliente1.php?login=<?php echo $login; ?>&progr=<?php echo $progr; ?>&ingranaggio=10&cognome=<?php echo $cognome; ?>&ragsocx=<?php echo $ragsocx; ?>&ivax=<?php echo $ivax; ?>"  ><img border="0" background="btn1.gif" src="occhio.png" width="25" height="25"></a></td>
      <td style=" border: 1px solid #e4e3e3; " align="center" ><a  href="leggicliente1.php?login=<?php echo $login; ?>&progr=<?php echo $progr; ?>&ingranaggio=11&cognome=<?php echo $cognome; ?>&ragsocx=<?php echo $ragsocx; ?>&ivax=<?php echo $ivax; ?>"  ><img border="0" background="btn1.gif" src="pencil.png" width="25" height="25"></a></td>
     
     </tr>	
     
<?php          
}
}
?>             
</table> 
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>              
</div>
<? } ?>

</div>
</div>
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

</body>

</html>