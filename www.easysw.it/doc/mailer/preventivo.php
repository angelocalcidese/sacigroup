<?php
ini_set("session.gc_maxlifetime", "18000");
session_start();

require_once("auth.php");

//require("../conf_EXTERNAL.php");
require_once("../conf_DB.php");
require("funzioni.php");
require("lenguage.php");

echo $styleSheets[$_COOKIE["STYLE"]]["sheet"];

echo '<link href="style.css" rel="stylesheet" type="text/css" />';
include('css_definitions_new.php');

$lingua = $_COOKIE['LINGUA'];
if ((!isset($lingua)) || ($lingua==""))
{$ling = "it";
$id_lingua="it";
} else {
$ling = $lingua;
$id_lingua = $lingua;}

$tavola = $_GET["type"];
$tavola_id = $_GET["type_id"];
$tav_id = $_GET["tav_id"];
//echo $tavola_id;

//variabili change
$desc = $_GET["desc"];
$canc = $_GET["canc"];

$comm = $_GET["comm"];
$data_new = $_GET["data"];
$dest = $_GET["dest"];
$totale = 0;
//echo "commessa=".$comm."<br>data=".$data."<br>Destinazione".$dest;

$data = date('d')."/".date('m')."/".date('Y');
$cli_id = strtolower($_SESSION["SPICLIENTLOGGED"]);

$sql2a = "select * from testacarrello where cod_id='".$cli_id."' and aperto='1'";
	
	
$ch = $_GET["ch"];

if(!empty($ch))
{
	
	$querySeta = mysql_query($sql2a, $connessione);
	$res_prev = mysql_fetch_assoc($querySeta);
	$cod_prev = $res_prev["id"];
	
	
	$sql_edit = "UPDATE testacarrello SET ricoff='".$_GET["rioff"]."', indirizzo='".$_GET["indirizzo"]."', destinazione_1='".$_GET["destinazione_1"]."', destinazione_2='".$_GET["destinazione_2"]."', 
				destinazione_3='".$_GET["destinazione_3"]."', tipo_consegna='".$_GET["tipo_consegna"]."', indirizzo_corriere='".$_GET["indirizzo_corriere"]."', telefono_corriere='".$_GET["telefono_corriere"]."', cap_citta='".$_GET["cap_citta"]."', 
				destinazione_cli='".$_GET["destinazione_cli"]."', indirizzo_cli='".$_GET["indirizzo_cli"]."', cap_citta_cli='".$_GET["cap_citta_cli"]."', note='".$_GET["note"]."', rioff='".$riofferta."' WHERE id=$cod_prev";
	 
	if (mysql_query($sql_edit, $connessione) === TRUE) {
    echo "<center>Preventivo modificato</center>";
		} else {
    echo "<center>Error: " . $sql_edit . "</center><br>" . $connessione->error;
	
}
}


$sql2 = "select * from cliente where cli_id='".strtolower($_SESSION["SPICLIENTLOGGED"])."' and (cli_producer = 4)";
	$querySet = mysql_query($sql2, $connessione);
	$res_cliente = mysql_fetch_assoc($querySet);
	$societa = $res_cliente["cli_ragione_sociale"];
	$email =$res_cliente["cli_email"];
	$indirizzo = $res_cliente["cli_indirizzo"];
	$iva = $res_cliente["cli_iva"];
$quanti = 0;	
$data_consegna = "00/00/0000";



$querySeta = mysql_query($sql2a, $connessione);
$num_testa = mysql_num_rows($querySeta);
$res_prev = mysql_fetch_assoc($querySeta);
$cod_prev = $res_prev["id"];

$ricoff = $res_prev["ricoff"];
$indi = $res_prev["indirizzo"];
$note = $res_prev["note"];
$dest1 = $res_prev["destinazione_1"];
$dest2 = $res_prev["destinazione_2"];
$dest3 = $res_prev["destinazione_3"];
$tipo_c = $res_prev["tipo_consegna"];
$indirizzo_c = $res_prev["indirizzo_corriere"];
$telefono_c = $res_prev["telefono_corriere"];
$cap_c = $res_prev["cap_citta"];
$desti_cli = $res_prev["destinazione_cli"];
$indi_cli = $res_prev["indirizzo_cli"];
$cap_cli = $res_prev["cap_citta_cli"];
//$note_cli = $res_prev["note"];

$zeropadded = sprintf("%05d", $cod_prev);

$riofferta = $zeropadded.'-'.date("Y");

//echo $num_testa;

?>
<html>
	<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/datepiker.js"></script>
	
	 <link rel="stylesheet" href="js/jquery-ui.css" type="text/css" />
<head>
<style>
body {font-size:13px;font-family:Arial Narrow,'Oswald',Helvetica,Sans-Serif;overflow:auto;}
input {font-size:12px; height:17px; line-height: 15px; border:1px solid #666666;  padding:0 5px; text-transform: none; color:#666666;}
textarea {resize: none; color:#666666;}
.RicOff {float:left; border-right:2px solid #666666; border-bottom:2px solid #666666; padding:4px 5px 0 5px; width:406px; font-weight:bold; height:42px;}
.inteOff{float:left; border-right:2px solid #666666; border-bottom:2px solid #666666; padding:3px; width:820px; height:117px; background-color:#E8F6FF}
.tab_consegna {width:524px; text-align:center; padding:4px 2px 0 2px; border-bottom:2px solid #666666; height:19px;}
.ui-datepicker-trigger {margin-left:2px; float:left; cursor:pointer;}
/* hack firefox */
@-moz-document url-prefix() { 
  .RicOff {padding:4px 5px 2px 5px;}
  .inteOff{height:122px;}
  .tab_consegna {padding:4px 2px 1px 2px;}
}
</style>

</head>
<body>
<?
$ver_id = $_GET["type"]; 

require_once("prev_control2.php");

?>
<br>
<div style="margin-left:650px"><img src="images/logo_spi_new.png" alt="" border="0" width="500"></div><br><br>
<form action="preventivo.php" id="preve" onsubmit="return checkData();">
<div style="width: 1900px; margin:auto; background-color:#FFFFFF;">
<!-- INTESTAZIONE -->

<div style="margin:2px 2px 5px 2px;padding:3px;"><h3 style="text-align:center; font-size:24px;color:#666666;border:2px solid #666666; background-color:#FEF1E8;padding:3px 0;margin:5px 0;text-transform:uppercase;"><? echo $societa; ?></h3></div>
<div style="border:2px solid #666666;text-align: center;color:#666666; margin:0 5px; padding:3px;text-transform:uppercase; background-color:#FEF1E8;font-weight:bold; font-size:14px;"><?echo $iva;?> <?echo $indirizzo;?></div>

<div style="border:2px solid #666666; margin:10px 5px; color:#666666; background-color:#FEF1E8;">
		<div style="float:left; padding:4px 3px; width:140px; font-weight:bold">VS. RIFERIMENTO N. </div>
		<div style="float:left; border-right:2px solid #666666; padding:4px 3px; width:246px;"><input name="rioff" id="rioff" onchange="javascript:carica_testa();" placeholder="000000" value="<? echo $ricoff; ?>" /></div>
		<div style="float:left; border-right:2px solid #666666; padding:4px 3px; width:120px;" >del <? echo $data;?></div>
		<div style="float:left;padding:3px;">
		<input style="width:1339px;" type="text" name="indirizzo" id="indirizzo" placeholder="Partita IVA e Codice Fiscale" value="<? echo $indi; ?>" onchange="javascript:carica_testa();" /></div>
		
		<div style="clear:both;"></div>
</div>

<div style="border:2px solid #666666; margin:10px 5px 0 5px; color:#666666;">

<div class="inteOff" >
<br>Spett.le<br><br>
<b style="font-size:15px; margin-bottom:5px;">SPI ENGINEERING SRL</b><br>
VIA AURELIO SAFFI, 17<BR>
Oscar Carmelli<br>
</div>
<!-- DATI FATTURAZIONE -->
<div style="float:left; border-right:2px solid #666666; ">
	<div style="width:524px; text-align:center; padding:4px 2px; border-bottom:2px solid #666666;font-weight:bold;">Pagamento:</div>
	<div style="width:524px; text-align:center; padding:4px 2px; border-bottom:2px solid #666666"> - </div>
	<div style="width:524px; text-align:center; padding:4px 2px; border-bottom:2px solid #666666"> - </div>
	<div style="width:524px; text-align:center; padding:4px 2px; border-bottom:2px solid #666666"> - </div>
	<div style="width:524px; text-align:center; padding:4px 2px; border-bottom:2px solid #666666;"> - </div>
</div>
<div style="float:left; background-color:#FEF1E8;">
	<div style="width:524px; text-align:center; padding:4px 2px; border-bottom:2px solid #666666;font-weight:bold;">Consegna:</div>
	<div class="tab_consegna"><input type="text" name="tipo_consegna" id="tipo_consegna" placeholder="modalità consegna" value="<? echo $tipo_c; ?>" style="width:500px" onchange="javascript:carica_testa();"/></div>
	<div class="tab_consegna"><input type="text" name="indirizzo_corriere" id="indirizzo_corriere" placeholder="indirizzo corriere" value="<? echo $indirizzo_c; ?>" style="width:500px" onchange="javascript:carica_testa();"/></div>
	<div class="tab_consegna"><input type="text" name="telefono_corriere" id="telefono_corriere" placeholder="telefono corriere" value="<? echo $telefono_c; ?>" style="width:500px" onchange="javascript:carica_testa();"/></div>
	<div class="tab_consegna"><input type="text" name="cap_citta" id="cap_citta" placeholder="cap" maxlength="5" value="<? echo $cap_c; ?>" style="width:500px" onchange="javascript:carica_testa();"/></div>
</div>
<div style="clear:both;"></div>
<div style="float:left; border-right:2px solid #666666; width:826px; ">
	<div style="float:left; border-right:2px solid #666666; border-bottom:2px solid #666666; padding:3px; width:320px;">Ufficio Emittente:</div>
	<div style="float:left; padding:3px; width:492px; border-bottom:2px solid #666666;"> - </div>
	<div style="clear:both;"></div>
	<div style="float:left; border-right:2px solid #666666;padding:3px; width:320px;">Responsabile:</div>
	<div style="float:left; padding:3px; width:492px;"> - </div>
	<div style="clear:both;"></div>
</div>
<div style=" float:left; width:1052px; padding: 3px;background-color:#FEF1E8;height:38px;">
	<div style="float:left; height:30px; width: 80px;">NOTE:</div>
<div style="float:right; width:925px; height:30px;">
<textarea placeholder="Eventuali note del richiedente" style="width:915px; height:37px;" name="note" id="note" onchange="javascript:carica_testa();"><? echo $note; ?></textarea>
</div>
<div style="clear:both;"></div>
</div>

<div style="clear:both;"></div>
</div>
<!-- DATI SPEDIZIONE -->
<div style="border:2px solid #666666; margin:10px 5px 0 5px; color:#666666;">
<div style="float:left; border-right:2px solid #666666; width:826px; background-color:#E8F6FF;">
<div class="RicOff" >
	RICHIESTA OFFERTA<br> 
	<? echo $riofferta; ?>
</div>
<div style="float:left;  width:130px; border-right:2px solid #666666;border-bottom:2px solid #666666; text-align:center;">
<div style="width:125px; border-bottom:2px solid #666666;padding:3px;font-weight:bold;">Data</div>
<div style="width:125px;padding:4px;"><? echo $data;?></div>
<div style="clear:both;"></div>
</div>
<div style="float:left;  width:150px; border-right:2px solid #666666;border-bottom:2px solid #666666; text-align:center;">
<div style="width:145px; border-bottom:2px solid #666666;padding:3px;font-weight:bold;">Fornitore</div>
<div style="width:145px;padding:4px;">Cod. Spi</div>
<div style="clear:both;"></div>
</div>
<div style="float:left;  width:124px; border-bottom:2px solid #666666; text-align:center;">
<div style="width:119px; border-bottom:2px solid #666666;padding:3px;font-weight:bold;">Valuta</div>
<div style="width:119px;padding:4px;">euro</div>
<div style="clear:both;"></div>
</div>

<div style="clear:both;"></div>
<div style="float:left; padding:5px; width:816px; height:39px;">
<div style="float:left; height:30px; width: 120px;font-weight:bold;">COMUNICAZIONI:</div>
<div style="float:right; width:1493px; height:30px;">

</div>
<div style="clear:both;"></div>
</div>

</div>
<div style="float:left; width:528px; background-color:#FEF1E8; border-right:2px solid #666666;">
<div style="width:524px; text-align:center; padding:3px; border-bottom:2px solid #666666;  font-weight:bold;">Destinazione della Merce in Pos. (A) <span id="posi_1"></span></div>
	<div style="width:524px; text-align:center; padding:3px; border-bottom:2px solid #666666"><input type="text" name="destinazione_1" id="destinazione_1" placeholder="Indirizzo spedizione: cliente" value="<? echo $dest1; ?>" style="width:500px" onchange="javascript:carica_testa();"/> </div>
	<div style="width:524px; text-align:center; padding:3px; border-bottom:2px solid #666666"><input type="text" name="destinazione_2" id="destinazione_2" placeholder="Indirizzo" value="<? echo $dest2; ?>" style="width:500px" onchange="javascript:carica_testa();"/> </div>
	<div style="width:524px; text-align:center; padding:3px; "><input type="text" name="destinazione_3" id="destinazione_3" placeholder="cap" maxlength="5" value="<? echo $dest3; ?>" style="width:500px" onchange="javascript:carica_testa();"/> </div>
</div>
<div style="float:left; width:528px; background-color:#FEF1E8; ">
<div style="width:524px; text-align:center; padding:3px; border-bottom:2px solid #666666; font-weight:bold;">Destinazione della Merce in Pos. (B) <span id="posi_2"></span></div>
	<div style="width:524px; text-align:center; padding:3px; border-bottom:2px solid #666666"><input type="text" name="destinazione_cli" id="destinazione_cli" placeholder="Indirizzo spedizione: cliente" value="<? echo $desti_cli; ?>" style="width:500px" onchange="javascript:carica_testa();"/> </div>
	<div style="width:524px; text-align:center; padding:3px; border-bottom:2px solid #666666"> <input type="text" name="indirizzo_cli" id="indirizzo_cli" placeholder="indirizzo" value="<? echo $indi_cli;?>" style="width:500px" onchange="javascript:carica_testa();"/></div>
	<div style="width:524px; text-align:center; padding:3px; "><input type="text" name="cap_citta_cli" id="cap_citta_cli" placeholder="cap" maxlength="5" value="<? echo $cap_cli; ?>" style="width:500px" onchange="javascript:carica_testa();"/></div>
</div>
<div></div>
<div style="clear:both;"></div>
</div>
<div style="clear:both;"></div>
<!-- PRODOTTI -->
<div style="border:2px solid #666666; margin:10px 5px 0 5px; color:#666666;">
<div style="float:left;  width:28px; border-right:2px solid #666666; text-align:center; padding:10px 5px;font-weight:bold;">POS.</div>
<div style="float:left;  width:225px; border-right:2px solid #666666; text-align:center;">
<div style="border-bottom:2px solid #666666; text-align:center;;padding:1px;font-weight:bold;">Articolo SPI</div>
<div style="text-align:center;padding:1px;background-color:#F9EDED">Art. Cliente</div>
</div>
<div style="float:left;  width:343px; border-right:2px solid #666666; text-align:center;background-color:#E8F6FF;padding:10px 5px;font-weight:bold;">
Descrizione
</div>
<div style="float:left;  width:225px; border-right:2px solid #666666; text-align:center;">
<div style="border-bottom:2px solid #666666; text-align:center;padding:1px;font-weight:bold;">Disegno SPI</div>
<div style="text-align:center;padding:1px;background-color:#F9EDED;">Dis. Cliente</div>
</div>
<div style="float:left;  width:77px; border-right:2px solid #666666; text-align:center; padding:10px 5px 10px 2px; background-color:#E8F6FF;font-weight:bold;">REV.</div>
<div style="float:left;  width:70px; border-right:2px solid #666666; text-align:center; padding:10px 5px; background-color:#E8F6FF;font-weight:bold;">UM</div>
<div style="float:left;  width:100px; border-right:2px solid #666666; text-align:center; padding:10px 5px; background-color:#E8F6FF;font-weight:bold;">Quantità</div>
<div style="float:left;  width:155px; border-right:2px solid #666666; text-align:center; padding:10px 5px; background-color:#E8F6FF;font-weight:bold;">Data Consegna</div>
<div style="float:left;  width:100px; border-right:2px solid #666666; text-align:center; padding:10px 5px; background-color:#E8F6FF;font-weight:bold;">Prezzo Unitario</div>
<div style="float:left;  width:195px; border-right:2px solid #666666; text-align:center; padding:10px 5px 10px 2px; background-color:#F9EDED;font-weight:bold;">Commessa</div>
<div style="float:left;  width:195px; border-right:2px solid #666666; text-align:center; padding:10px 5px 10px 2px; background-color:#F9EDED;font-weight:bold;">Destinazione</div>
<div style="float:left;  width:66px;  text-align:center; padding:10px 2px;"><img src="images/delete_grey.png" title="cancella articolo" alt="cancella articolo" ></div>
<div style="clear:both;"></div>
</div>

<?
 
require_once("articolo.php");



	  
	  ?>
<!-- Totale -->

<div style="border:2px solid #666666; margin:50px 5px 0 5px; color:#666666; background-color:#F9EDED;">
<div style="float:left; text-align:right; width:1008px;padding:3px;border-right:2px solid #666666;">Totale Ordine:</div>
<div style="float:left;text-align:center; width:106px;padding:3px; border-right:2px solid #666666; font-weight:bold;"><? echo $totale; ?></div>
<div style="float:left;text-align:left; width:10px;padding:3px; font-weight:bold;">&euro;</div>
<div style="float:left;text-align:right; width:253px;padding:3px;border-right:2px solid #666666;">-</div>
<div style="float:left;text-align:right; width:50px;padding:3px;"></div>
<div style="clear:both;"></div>
</div>
<div style="border:2px solid #666666; margin:10px 5px 0 5px; color:#666666; background-color:#E8F6FF;text-align:center; padding:3px;font-weight:bold;">
SPI ENGINEERING SRL - VIA AURELIO SAFFI,17 MILANO ITALIA - CODICE FISCALE E P.IVA 07921970153
</div>
<div style="clear:both;"></div>
<input type="hidden" name="valido" value="1" />
<?
if ($totale > 0)
{echo '<input type="submit" value="Invia richiesta preventivo"  style="float:right;margin:10px 6px; padding:5px 5px 20px 5px;"/>';}
?>

<div style="clear:both;"></div>
</div>
</form>
</body>
<script>
$(function() {
	$.datepicker.setDefaults($.datepicker.regional['it']);
	$("input#datapiker1").datepicker({
		showOn: "button",
      buttonImage: "images/folder-calendar.png",
      buttonImageOnly: true,
      buttonText: "Select date",
	minDate: +2,
    maxDate: +90
  });
  $("input#datapiker2").datepicker({
		showOn: "button",
      buttonImage: "images/folder-calendar.png",
      buttonImageOnly: true,
      buttonText: "Select date",
	minDate: +2,
    maxDate: +90
  });
  $("input#datapiker3").datepicker({
		showOn: "button",
      buttonImage: "images/folder-calendar.png",
      buttonImageOnly: true,
      buttonText: "Select date",
	minDate: +2,
    maxDate: +90
  });
  $("input#datapiker4").datepicker({
		showOn: "button",
      buttonImage: "images/folder-calendar.png",
      buttonImageOnly: true,
      buttonText: "Select date",
	minDate: +2,
    maxDate: +90
  });
  $("input#datapiker5").datepicker({
		showOn: "button",
      buttonImage: "images/folder-calendar.png",
      buttonImageOnly: true,
      buttonText: "Select date",
	minDate: +2,
    maxDate: +90
  });
  $("input#datapiker6").datepicker({
		showOn: "button",
      buttonImage: "images/folder-calendar.png",
      buttonImageOnly: true,
      buttonText: "Select date",
	minDate: +2,
    maxDate: +90
  });
  $("input#datapiker7").datepicker({
		showOn: "button",
      buttonImage: "images/folder-calendar.png",
      buttonImageOnly: true,
      buttonText: "Select date",
	minDate: +2,
    maxDate: +90
  }); 
  $("input#datapiker8").datepicker({
		showOn: "button",
      buttonImage: "images/folder-calendar.png",
      buttonImageOnly: true,
      buttonText: "Select date",
	minDate: +2,
    maxDate: +90
  });
  $("input#datapiker9").datepicker({
		showOn: "button",
      buttonImage: "images/folder-calendar.png",
      buttonImageOnly: true,
      buttonText: "Select date",
	minDate: +2,
    maxDate: +90
  });
  $("input#datapiker10").datepicker({
		showOn: "button",
      buttonImage: "images/folder-calendar.png",
      buttonImageOnly: true,
      buttonText: "Select date",
	minDate: +2,
    maxDate: +90
  });
});
</script>
<script type="text/javascript">
    function checkData(){
       var errors = "";
       $("input").css("border-color", "#666666");
	   
       if (document.getElementById("rioff").value == '')
	   { errors += "Inserire Ric. Offerta.\n";
		$("input#rioff").css("border-color", "#D60005");}
	    if (document.getElementById("indirizzo").value == '')
		{  errors += "Inserire indirizzo e numero di telefono.\n";
		$("input#indirizzo").css("border-color", "#D60005");}
        if (document.getElementById("tipo_consegna").value == '')
		{ errors += "Inserire modalità consegna.\n";
			$("input#tipo_consegna").css("border-color", "#D60005");}
        if (document.getElementById("indirizzo_corriere").value == '')
		{ errors += "Inserire indirizzo corriere.\n";
		$("input#indirizzo_corriere").css("border-color", "#D60005");}
	   if (document.getElementById("telefono_corriere").value == '')
         {  errors += "Inserire telefono corriere.\n";
		$("input#telefono_corriere").css("border-color", "#D60005");}
	   if (document.getElementById("cap_citta").value == '')
         {  errors += "Inserire città e cap corriere.\n";
		$("input#cap_citta").css("border-color", "#D60005");}
	   if (document.getElementById("destinazione_cli").value == '')
         {  errors += "Inserire destinazione.\n";
	 $("input#destinazione_cli").css("border-color", "#D60005");}
	   if (document.getElementById("indirizzo_cli").value == '')
          { errors += "Inserire indirizzo di destinazione.\n";
	  $("input#indirizzo_cli").css("border-color", "#D60005");}
	   if (document.getElementById("destinazione_1").value == '')
         {  errors += "Inserire indirizzo di destinazione.\n";
		$("input#destinazione_1").css("border-color", "#D60005");}
	   if (document.getElementById("destinazione_2").value == '')
         {  errors += "Inserire indirizzo di destinazione.\n";
	 $("input#destinazione_2").css("border-color", "#D60005");}
	   if (document.getElementById("destinazione_3").value == '')
        {   errors += "Inserire indirizzo di destinazione.\n";
	$("input#destinazione_3").css("border-color", "#D60005");}
      if (document.getElementById("cap_citta_cli").value == '')
          { errors += "Inserire cap e città di destinazione.\n";
		$("input#cap_citta_cli").css("border-color", "#D60005");}
      
        if (errors == ""){
            document.forms["preve"].submit();
        }else{
            alert (errors);
			return false;
        }
    }

function carica_input(a) {
	var comm = $(".commessa-" + a).val();
	var page_url = "preventivo.php?tav_id=" + a + "&comm=" + comm;
	window.location = page_url;
}
function carica_input2(a) {
	var data = $(".data-" + a).val();
	var dest = $(".dest-" + a).val();
	
	var page_url = "preventivo.php?tav_id=" + a + "&dest=" + dest;
	window.location = page_url;
}
function carica_input3(a) {
	var data = $(".data-" + a).val();
	var page_url = "preventivo.php?tav_id=" + a + "&data=" + data;
	window.location = page_url;
}

function carica_testa() {
	var url = "preventivo.php?ch=1&";
	
	if (document.getElementById("rioff").value != '')
	   {  url += "rioff=" + $("#rioff").val() + "&";
			}
	if (document.getElementById("indirizzo").value != '')
	   {  url += "indirizzo=" + $("#indirizzo").val() + "&";
			}
	if (document.getElementById("note").value != '')
	   {  url += "note=" + $("#note").val() + "&";
			}
	if (document.getElementById("destinazione_1").value != '')
	   {  url += "destinazione_1=" + $("#destinazione_1").val() + "&";
			}
	if (document.getElementById("destinazione_2").value != '')
	   {  url += "destinazione_2=" + $("#destinazione_2").val() + "&";
			}
	if (document.getElementById("destinazione_3").value != '')
	   {  url += "destinazione_3=" + $("#destinazione_3").val() + "&";
			}
	if (document.getElementById("tipo_consegna").value != '')
	   {  url += "tipo_consegna=" + $("#tipo_consegna").val() + "&";
			}
	if (document.getElementById("indirizzo_corriere").value != '')
	   {  url += "indirizzo_corriere=" + $("#indirizzo_corriere").val() + "&";
			}
	if (document.getElementById("telefono_corriere").value != '')
	   {  url += "telefono_corriere=" + $("#telefono_corriere").val() + "&";
			}
	if (document.getElementById("cap_citta").value != '')
	   {  url += "cap_citta=" + $("#cap_citta").val() + "&";
			}
	if (document.getElementById("destinazione_cli").value != '')
	   {  url += "destinazione_cli=" + $("#destinazione_cli").val() + "&";
			}
	if (document.getElementById("indirizzo_cli").value != '')
	   {  url += "indirizzo_cli=" + $("#indirizzo_cli").val() + "&";
			}
	if (document.getElementById("cap_citta_cli").value != '')
	   {  url += "cap_citta_cli=" + $("#cap_citta_cli").val();
			}
	window.location = url;
	
}
</script>
</html>
<?
if($_REQUEST["valido"] == "1") {
$html =  <<<EOF
<!-- EXAMPLE OF CSS STYLE -->
<style>
body {font-family:Arial Narrow,Oswald,Helvetica,Sans-Serif;
	font-size:13px;
	color:#666666;}
table, th, td {
    
    border-collapse: collapse;
	border-spacing: 0;
	font-family:Arial Narrow,Oswald,Helvetica,Sans-Serif;
	font-size:14px;
	
}
.logo {width:500px; margin:auto;text-align:center;}
span{padding:5px;}
</style>
<div class="logo" style="margin-left:650px"><img src="http://www.spi.it/rootprova/images/logo_spi_new.png" alt="" border="0" width="500"></div>


<div style="">
<table style="width:100%; margin:auto;border:2px solid #666666;padding:0;background-color:#FEF1E8;" cellpadding="4"  >
<tr>
<td style="border:2px solid #666666; " rowspan="6">
<table cellpadding="8"><tr><td style="font-weight:bold; text-align:center;font-size:30px;text-transform:uppercase;background-color:#FEF1E8;">$societa</td></tr></table>
</td>
</tr>
</table>
</div>

<div style="">
<table style="width:100%; margin:auto;border:2px solid #666666;padding:0;background-color:#FEF1E8;" cellpadding="4"  >
<tr>
<td style="border:2px solid #666666; " rowspan="6">
<table cellpadding="8"><tr><td style="font-weight:bold; text-align:center;font-size:16px;text-transform:uppercase;background-color:#FEF1E8;">$iva $indirizzo</td></tr></table>
</td>
</tr>
</table>
</div>

<div style="">
<table style="width:100%; margin:auto;border:2px solid #666666;padding:0;background-color:#FEF1E8;" cellpadding="4"  >
<tr>
<td style="border:2px solid #666666; width:20%;" rowspan="6">
<table cellpadding="8"><tr><td>VS. RIFERIMENTO N. $ricoff</td></tr></table>
</td>
<td style="border:2px solid #666666;width:10%;" rowspan="6"><table cellpadding="8"><tr><td>del $data</td></tr></table></td>
<td style="width:70%;border:2px solid #666666;" rowspan="6"><table cellpadding="8"><tr><td>$indi</td></tr></table></td>
</tr>
</table>
</div>

<div>
<table style="width:100%;border:2px solid #666666; margin:10px 0 0 0;" cellpadding="4">
<tr>
<td style="width:50%; height:120px; background-color:#E8F6FF;  border:2px solid #666666;  padding-left:10px;">
<table cellpadding="8">
<tr>
<td>
Spett.le<br><br>

SPI ENGINEERING SRL<br>
VIA AURELIO SAFFI, 17<br>
Oscar Carmelli<br>
</td>
</tr>
</table>
</td>
<td style="width:25%;padding:0;border:2px solid #666666;" cellpadding="0">
<table cellpadding="8" >
		<tr><td cellpadding="4" style="height:32px;font-weight:bold;border-bottom:2px solid #666666;font-weight:bold;text-align:center;">Pagamento:</td></tr>
		<tr><td cellpadding="4" style="height:32px;font-weight:bold;border-bottom:2px solid #666666;"></td></tr>
		<tr><td cellpadding="4" style="height:32px;font-weight:bold;border-bottom:2px solid #666666;"></td></tr>
		<tr><td cellpadding="4" style="height:32px;font-weight:bold;border-bottom:2px solid #666666;"></td></tr>
		<tr><td cellpadding="4" style="height:32px;font-weight:bold;"></td></tr>
		</table>
</td>
<td style="width:25%;padding:0;background-color:#FEF1E8;border:2px solid #666666;" cellpadding="0">
		<table cellpadding="8" style="">
		<tr><td cellpadding="4" style="height:32px;font-weight:bold;border-bottom:2px solid #666666;font-weight:bold;text-align:center;">Consegna:</td></tr>
		<tr><td cellpadding="4" style="height:32px;font-weight:bold;border-bottom:2px solid #666666;">$tipo_c</td></tr>
		<tr><td cellpadding="4" style="height:32px;font-weight:bold;border-bottom:2px solid #666666;">$indirizzo_c</td></tr>
		<tr><td cellpadding="4" style="height:32px;font-weight:bold;border-bottom:2px solid #666666;">$telefono_c</td></tr>
		<tr><td cellpadding="4" style="height:32px;font-weight:bold;">$cap_c</td></tr>
		</table>
</td>
</tr>
</table>
<table style="width:100%; margin:auto;border-right:2px solid #666666;border-left:2px solid #666666;border-bottom:2px solid #666666;" cellpadding="4">
<tr>
<td style="border-right:2px solid #666666; height:50px;width:25%; padding:0;">
	<table cellpadding="8" >
		<tr><td cellpadding="4" style="height:32px;border-bottom:2px solid #666666;">Ufficio Emittente:</td></tr>
		<tr><td cellpadding="4" style="height:32px;">Responsabile:</td></tr>
	</table>	
</td>
<td style="border-right:2px solid #666666; height:50px;width:25%;padding:0;">
	<table cellpadding="8" >
		<tr><td cellpadding="4" style="height:32px;border-bottom:2px solid #666666;"></td></tr>
		<tr><td cellpadding="4" style="height:32px;"></td></tr>
	</table>
</td>
<td style="padding:2px;width:50%; background-color:#FEF1E8; border:2px solid #666666;">
<table cellpadding="8">
<tr>
<td>
Note: $note
</td>
</tr>
</table>
</td>
</tr>
</table>
</div>
<div>
<table style="width:100%; margin:auto;border:2px solid #666666;margin-top:10px;">
<tr>
<td style="border:2px solid #666666;background-color: #E8F6FF; width:20%">

<table cellpadding="8" >
		<tr style=""><td style="height:32px;padding:3px;font-weight:bold;" >RICHIESTA OFFERTA</td></tr>
		<tr><td cellpadding="4" style="height:32px;font-weight:bold;border-bottom:2px solid #666666;">$riofferta</td></tr>
		</table>
</td>
	<td style="border:2px solid #666666;background-color: #E8F6FF;padding:0;width:10%">
	<table cellpadding="8" >
		<tr style=""><td style="height:32px;border-bottom:2px solid #666666; padding:3px; text-align:center; font-weight:bold;" >Data:</td></tr>
		<tr><td cellpadding="4" style="height:32px;text-align:center;border-bottom:2px solid #666666;">$data</td></tr>
		</table>
		
	</td>
	<td style="border:2px solid #666666;background-color: #E8F6FF;padding:0;width:10%">
	<table cellpadding="8" >
		<tr style=""><td style="height:32px;border-bottom:2px solid #666666; padding:3px;text-align:center; font-weight:bold;" >Fornitore</td></tr>
		<tr><td cellpadding="4" style="height:32px;text-align:center;border-bottom:2px solid #666666;">Cod. Spi</td></tr>
		</table>

</td>
	<td style="border:2px solid #666666;background-color: #E8F6FF;padding:0;width:10%">
<table cellpadding="8" >
		<tr style=""><td style="height:32px;border-bottom:2px solid #666666; padding:3px;text-align:center; font-weight:bold;" >Valuta</td></tr>
		<tr><td cellpadding="4" style="height:32px;text-align:center;border-bottom:2px solid #666666;">euro</td></tr>
		</table>

</td >
	<td style="border:2px solid #666666;width:25%; padding:0;" cellpadding="0">
		<table cellpadding="8" >
		<tr style=""><td style="height:32px;border-bottom:2px solid #666666;  padding:3px;text-align:center; font-weight:bold;" >Destinazione della Merce in Pos. (A)</td></tr>
		<tr><td cellpadding="4" style="height:32px;text-align:center;">$dest1</td></tr>
		</table>
</td>
	<td style="width:25%; border:2px solid #666666; padding:0;">
		<table cellpadding="8" style="background-color:#FEF1E8;">
		<tr style=""><td style="height:32px;border-bottom:2px solid #666666; padding:3px;text-align:center; font-weight:bold;" >Destinazione della Merce in Pos. (B)</td></tr>
		<tr><td cellpadding="4" style="height:32px;text-align:center;border-bottom:2px solid #666666;">$desti_cli</td></tr>
		</table>
		
	</td>
</tr>
</table>

<table style="width:100%; margin:auto;border-bottom:2px solid #666666;border-left:2px solid #666666;border-right:2px solid #666666;">
<tr>
<td style="border:2px solid #666666;background-color: #E8F6FF;width:50%"></td>
<td style="bordert:2px solid #666666;width:25%;padding:0;">
	<table cellpadding="8" >
		<tr style=""><td style="height:32px;border-bottom:2px solid #666666; padding:3px;text-align:center; font-weight:bold;" >$dest2</td></tr>
		<tr><td cellpadding="4" style="height:32px;text-align:center;">$dest3</td></tr>
		</table>

</td>
<td style="border:2px solid #666666;width:25%;padding:0;">
		<table cellpadding="8"  style="background-color:#FEF1E8;">
		<tr style=""><td style="height:32px;border-bottom:2px solid #666666; padding:3px;text-align:center; font-weight:bold;" >$indi_cli</td></tr>
		<tr><td cellpadding="4" style="height:32px;text-align:center;border-bottom:2px solid #666666;">$cap_cli</td></tr>
		</table>
	</td>
</tr>
</table>
</div>


<div>
<table style="width:100%; margin:auto;margin-top:10px;">

<tr style="border:2px solid #666666;">
<td style="border:2px solid #666666;text-align:center;font-weight:bold;width:3%;"><table cellpadding="14"><tr><td>POS.</td></tr></table></td>
<td style="border:2px solid #666666;padding:0;text-align:center;width:15%;">
	<table cellpadding="4" >
		<tr><td style="border-bottom:2px solid #666666; padding:3px;text-align:center; font-weight:bold;" >Articolo SPI</td></tr>
		<tr><td cellpadding="4" style="text-align:center; background-color:#FEF1E8;">Art. Cliente</td></tr>
	</table>
</td>
<td style="border:2px solid #666666;text-align:center;font-weight:bold;padding:0;width:16%;background-color:#E8F6FF;"><table cellpadding="12"><tr><td>Descrizione</td></tr></table></td>
<td style="border:2px solid #666666;padding:0;width:15%">
<table cellpadding="4" >
		<tr><td style="border-bottom:2px solid #666666; padding:3px;text-align:center; font-weight:bold;" >Disegno SPI</td></tr>
		<tr><td cellpadding="4" style="text-align:center;background-color:#FEF1E8;">Dis. Cliente</td></tr>
	</table>
</td>
<td style="border:2px solid #666666;text-align:center;font-weight:bold;width:5%;background-color:#E8F6FF;"><table cellpadding="14"><tr><td>REV</td></tr></table></td>
<td style="border:2px solid #666666;text-align:center;font-weight:bold;width:5%;background-color:#E8F6FF;"><table cellpadding="14"><tr><td>UM</td></tr></table></td>
<td style="border:2px solid #666666;text-align:center;font-weight:bold;width:5%;background-color:#E8F6FF;"><table cellpadding="14"><tr><td>Quantit&agrave;</td></tr></table></td>
<td style="border:2px solid #666666;text-align:center;font-weight:bold;width:8%;background-color:#E8F6FF;"><table cellpadding="14"><tr><td>Data consegna</td></tr></table></td>
<td style="border:2px solid #666666;text-align:center;font-weight:bold;width:8%;background-color:#E8F6FF;"><table cellpadding="14"><tr><td>Prezzo unitario</td></tr></table></td>
<td style="border:2px solid #666666;text-align:center;font-weight:bold;width:10%;background-color:#FEF1E8;"><table cellpadding="14"><tr><td>Commessa</td></tr></table></td>
<td style="border:2px solid #666666;text-align:center;font-weight:bold;width:10%;background-color:#FEF1E8;"><table cellpadding="14"><tr><td>Destinazione</td></tr></table></td>
</tr>
</table>
</div>
$art_smp
<div style="">
<table style="width:100%; margin:auto;border:2px solid #666666;padding:0;background-color:#FEF1E8;" cellpadding="4"  >
<tr>
<td style="border:2px solid #666666; width:59%;" rowspan="6">
	<table cellpadding="8"><tr><td style="text-align:right; font-weight:bold; ">Totale Ordine:</td></tr></table>
</td>
<td style="border:2px solid #666666; width:5%;" rowspan="6">
	<table cellpadding="8"><tr><td style="text-align:right; text-align:center;">$totale</td></tr></table>
</td>
<td style="border:2px solid #666666;width:16%;" rowspan="6"><table cellpadding="8"><tr><td >&euro;</td></tr></table></td>
<td style="width:20%;border:2px solid #666666;" rowspan="6"><table cellpadding="8"><tr><td></td></tr></table></td>
</tr>
</table>
</div>
<div style="">
<table style="width:100%; margin:auto;border:2px solid #666666;padding:0;background-color:#FEF1E8;" cellpadding="4"  >
<tr>
<td style="border:2px solid #666666; " rowspan="6">
<table cellpadding="8"><tr><td style="font-weight:bold; text-align:center;font-size:14px;text-transform:uppercase;background-color:#E8F6FF;">SPI ENGINEERING SRL - VIA AURELIO SAFFI,17 MILANO ITALIA - CODICE FISCALE E P.IVA 07921970153</td></tr></table>
</td>
</tr>
</table>
</div>
EOF;
require_once('tcpdf/examples/config/tcpdf_config_alt.php');

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
$pdf->SetTitle('Preventivo SPI');
$pdf->SetSubject('Preventivo');
$pdf->SetKeywords('Preventivo');

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
$pdf->SetFont('helvetica', '', 10);

// add a page
$pdf->AddPage();
// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

$output_dest = 'F';
$filename = $riofferta.'.pdf';
$pdf->Output('/home/siti/www.spi.it/spi.it/htdocs/rootprova/pdf_preventivi/'.$filename, $output_dest);

echo '<a href="http://www.spi.it/rootprova/pdf_preventivi/'.$filename.'">Link sul server</a>';
//============================================================+
// END OF FILE
//============================================================+
/**
 * This example shows sending a message using a local sendmail binary.
 */
$allegato = '/home/siti/www.spi.it/spi.it/htdocs/rootprova/pdf_preventivi/'.$filename;
require 'mailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
// Set PHPMailer to use the sendmail transport
$mail->isSendmail();
//Set who the message is to be sent from
$mail->setFrom('bladebiella@gmail.com', 'First Last');
//Set an alternative reply-to address
$mail->addReplyTo('bladebiella@gmail.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('bladebiella@gmail.com', 'John Doe');
//Set the subject line
$mail->Subject = 'PHPMailer sendmail test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
$mail->addAttachment($allegato);

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
}
?>