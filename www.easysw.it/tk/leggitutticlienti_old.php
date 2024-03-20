<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>inserimento documenti</title>
<link href="./css/jquery.dataTablesBrown.css" rel="stylesheet">

<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.fixedHeader.js"></script>

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
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,500;1,100&display=swap');
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
     
?>


<table align="left">
<tr>
<td align="left" width="50%">
<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data">
<table width="100%">
            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #cacdd1;background: #476b5d;font-family: Montserrat;" width="20%"><font face="Montserrat" color="#ffffff" style="font-size: 10pt;font-family: Montserrat;"><b>Codice Cliente</b></font>
            </td>
            <td colspan="1" align="left" style=" border: 1px solid #cacdd1;" width="20%"><font face="Montserrat" color="#cc0000" style="font-size: 14pt;font-family: Montserrat;"><b><?php echo $codice; ?></b></font>
            </td>
            </tr>
            
            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #cacdd1;" width="20%"><font face="Montserrat" color="#000000" style="font-size: 10pt;font-family: Montserrat;">Data Acquisizione</font>
            </td>
            <td style=" border: 1px solid #949699;font-family: Montserrat;" width="80%"><input maxlength="10" type="text" name="dataoperazione" value="<?php echo $dataoperazione; ?>" autocomplete="off" id="popupDatepicker1" size="10" style="background-color: #cac7c7; border: 0px; font-size: 10pt;"><font face="Montserrat" color="#000000"></font>
			</td>
            </tr>
            
            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #949699;background: #476b5d;font-family: Montserrat;" ><b><font face="Montserrat" color="#ffffff" style="font-size: 10pt;">Ragione Sociale</font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="ragsoc" value="<?php echo $ragsoc; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
            </tr>
            
			<tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Via: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="via" value="<?php echo $via; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
            </tr>
            
            <tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Città: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="citta" value="<?php echo $citta; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
            </tr>
            
            <tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Cap: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="cap" value="<?php echo $cap; ?>"maxlength="5"  size="10" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Provincia: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="prov" value="<?php echo $prov; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Regione: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="regione" value="<?php echo $regione; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">P.iva: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="iva" value="<?php echo $iva; ?>" maxlength="15" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">C. F.: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="codfisc" value="<?php echo $codfisc; ?>" maxlength="20" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Telefono: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="telefono" value="<?php echo $telefono; ?>" maxlength="30" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">PEC: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="pec" value="<?php echo $pec; ?>"maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Email: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="email" value="<?php echo $email; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">IBAN: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="iban" value="<?php echo $iban; ?>" maxlength="60" size="20" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
             <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">SDI: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="sdi" value="<?php echo $sdi; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
             <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Acronimo: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="acro" value="<?php echo $acro; ?>" maxlength="3" size="5" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            <tr>
            <td colspan="2" align="left" style=" border: 1px solid #949699;background: #476b5d;font-family: Montserrat;" ><b><font face="Montserrat" color="#ffffff"  style="font-size: 10pt;">Rif. Amministrativi</font></b>
            </td>
            
            </tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Cognome: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="cognomeamm" value="<?php echo $cognomeamm; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Nome: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="nomeamm" value="<?php echo $nomeamm; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
             <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Ruolo: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="ruoloamm" value="<?php echo $ruoloamm; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
             <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Email: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="emailamm" value="<?php echo $emailamm; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            
            <tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Via: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="viaamm" value="<?php echo $viaamm; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
            </tr>
            
            <tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Città: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="cittaamm" value="<?php echo $cittaamm; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
            </tr>
            
            <tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Cap: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="capamm" value="<?php echo $capamm; ?>" maxlength="5" size="10" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Provincia: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="provamm" value="<?php echo $provamm; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Regione: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="regioneamm" value="<?php echo $regioneamm; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Telefono: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="telefonoeamm" value="<?php echo $telefonoamm; ?>" maxlength="30" size="20" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">cellulare: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="cellamm" value="<?php echo $cellamm; ?>" maxlength="30" size="20" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
             <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Email: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="email1amm" value="<?php echo $email1amm; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            <tr>
            <td colspan="2" align="left" style=" border: 1px solid #949699;background: #476b5d;font-family: Montserrat;" ><b><font face="Montserrat" color="#ffffff"  style="font-size: 10pt;font-family: Montserrat;">Rif. Operativo</font></b>
            </td>
            
            </tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Cognome: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="cognomeop" value="<?php echo $cognomeop; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Nome: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="nomeop" value="<?php echo $nomeop; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
             <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Ruolo: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="ruoloop" value="<?php echo $ruoloop; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
             <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Email: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="emailop" value="<?php echo $emailop; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            
            <tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Via: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="viaop" value="<?php echo $viaop; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
            </tr>
            
            <tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Città: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="cittaop" value="<?php echo $cittaop; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
            </tr>
            
            <tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Cap: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="capop" value="<?php echo $capop; ?>" maxlength="5" size="10" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Provincia: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="provop" value="<?php echo $provop; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Regione: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="regioneop" value="<?php echo $regioneop; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Telefono: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="telefonoeop" value="<?php echo $telefonoop; ?>" maxlength="30" size="20" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">cellulare: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="cellop" value="<?php echo $cellop; ?>" maxlength="30" size="20" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
             <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Email: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="email1op" value="<?php echo $email1op; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            <tr>
            <td colspan="2" align="left" style=" border: 1px solid #949699;background: #476b5d;font-family: Montserrat;" ><b><font face="Montserrat" color="#ffffff" style="font-size: 10pt;font-family: Montserrat;">Rif. Logistita</font></b>
            </td>
            
            </tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Cognome: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="cognomelog" value="<?php echo $cognomelog; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Nome: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="nomelog" value="<?php echo $nomelog; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
             <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Ruolo: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="ruololog" value="<?php echo $ruololog; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
             <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Email: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="emaillog" value="<?php echo $emaillog; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            
            <tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Via: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="vialog" value="<?php echo $vialog; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
            </tr>
            
            <tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Città: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="cittalog" value="<?php echo $cittalog; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
            </tr>
            
            <tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Cap: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="caplog" value="<?php echo $caplog; ?>" maxlength="5" size="10" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Provincia: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="provlog" value="<?php echo $provlog; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Regione: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="regionelog" value="<?php echo $regionelog; ?>" maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Telefono: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="telefonolog" value="<?php echo $telefonolog; ?>" maxlength="30" size="20" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
            <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">cellulare: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="celllog" value="<?php echo $celllog; ?>" maxlength="60" size="20" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
            </td>
			</tr>
            
             <tr>
			<td style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" ><font face="Montserrat" color="#000000">Email: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="email1log" value="<?php echo $email1log; ?>"maxlength="60" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
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
                 <input type="submit" value="Modifica Cliente" style="height: 22px; background-color: #cc0000;border: 0px; color: #ffffff;font-family: Montserrat;" name="B3xxx"></td>               
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
<p align="center"><font face="Montserrat" size="4" color="#993300" style="font-family: Montserrat;">Documenti </font></b></p><div align="center">    

<table border="0" width="100%"  >

	  <tr>		  
      <td style="background-color:#476b5d;font-family: Montserrat;" width="15%" align="center"><font size="2" face="Montserrat" color="#FFFFFF">DATA DOC.</td>
      <td style="background-color:#476b5d;font-family: Montserrat;" width="15%" align="center"><font size="2" face="Montserrat" color="#FFFFFF">DATA SCAD.</td>
      <td style="background-color:#476b5d;font-family: Montserrat;" width="60%" align="center"><font size="2" face="Montserrat" color="#FFFFFF">OGGETTO</td>
      <td colspan="2" style="background-color:#476b5d;font-family: Montserrat;" width="10%" align="center"><font size="2" face="Montserrat" color="#FFFFFF">OPERAZIONI&nbsp;&nbsp;</td>
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

      
		<td  style="font-family: Montserrat;" align="center"><font size="2" face="Montserrat" color="<?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>"><? echo $data; ?></td>
        <td  style="font-family: Montserrat;" align="center"><font size="2" face="Montserrat" color="<?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>"><? echo $datasca; ?></td>
        
        <td  style="font-family: Montserrat;" align="left"><font size="2" face="Montserrat" color="<?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>"><? echo $oggettox; ?></td>
		<td style=" border: 0px solid black;font-family: Montserrat;" align="center" ><a  onclick="myFunction('?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&prgrx=<? echo $prgr; ?>&ingranaggio=10&ingranaggiott=201&prgry=<?php echo $prgr; ?>&progr=<?php echo $progr; ?>');" ><img border="0" background="btn1.gif" src="occhio.png" width="25" height="25"></a></td>
        <td style=" border: 0px solid black;font-family: Montserrat;" align="center" >
<!--        <a  onclick="myFunction('?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&prgrx=<? echo $prgr; ?>&ingranaggio=10&ingranaggiott=202&oggetto=<?php echo $oggettox; ?>&progr=<?php echo $progr; ?>');" ><img border="0" background="btn1.gif" src="x1.png" width="15" height="15"></a>   -->
<a href="?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&prgrx=<? echo $prgr; ?>&ingranaggio=10&ingranaggiott=202&prgry=<?php echo $prgr; ?>&progr=<?php echo $progr; ?>"><button  onclick="return confirm('Sei sicuro di volere cancellare?')"><img border="0" src="x1.png" width="15" height="15"></button></a>

</td>

     
        </tr>
<? }}
$oggiora=date("d/m/Y"); ?>
</table>

<p align="center"><font face="Montserrat" size="4" style="font-family: Montserrat;" color="#993300">Inserimento Nuovo Documento </font></b></p><div align="center">    
<table  width="100%" >
<form action="" method="post" enctype="multipart/form-data" >
		<tr>
        <td colspan="2">
        <table>
        <tr>
		<td colspan="1" align="left" width="25%" style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" >
        <font style="font-family: Montserrat;" face="Montserrat" color="#000000" size="2" face="Montserrat" color="#000000">Data Documento: &nbsp;</b></font>
		<font style="font-family: Montserrat;" size="2" face="Montserrat"> <input type="text" name="newdata" value="<?php echo $oggiora; ?>"  size="10"  style="background-color: #cac7c7; border: 0px; font-size: 12pt;"> </font></td>
        <td colspan="1" align="right" width="25%" style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;" >
        <font style="font-family: Montserrat;" face="Montserrat" color="#000000" size="2" face="Montserrat" color="#000000">Data scadenza Documento: </b></font>
		<font tyle="font-family: Montserrat;" size="2" face="Montserrat"> <input type="text" name="newdatasca" value="31/12/9999"  size="10"  style="background-color: #cac7c7; border: 0px; font-size: 12pt;"> </font>        
        </td>
        </tr>
        </table>
        </td>
        </tr> 
        <tr>
		<td align="left" width="130" style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;"> <font size="2" face="Montserrat" color="#000000">oggetto: </b></font>
		</td>
        <td><input type="text" name="newoggetto"   size="68"  placeholder="Inserisci qui l'oggetto del documento che stai caricando(obbligatorio)" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
        </td>
        </tr>
	
		<tr>
			<td align="left" style=" border: 1px solid #949699;font-size: 10pt;font-family: Montserrat;">
       <font size="2" face="Montserrat"><font color="#000000" style="font-family: Montserrat;">Carica Documento:</b></font>
      </td>
	  <td align="left" ><font size="2" face="Montserrat">
		 <input type="hidden" name="ingranaggio" value="7" />
         <input type="hidden" name="login" value="<? echo $login; ?>" />
         <input type="hidden" name="cliente" value="<? echo $commessa; ?>" />
         <input type="hidden" name="progr" value="<? echo $progr; ?>" />
         <input type="hidden" name="cliente" value="<? echo $codice; ?>" />
		 <input type="file" name="fileToUpload" id="fileToUpload" size="150" style="font-size: 12pt; font-weight: normal; background-color: #cac7c7;font-family: Montserrat;">
    </td>	
    </tr>
    <tr>
    <td> 
    <input type="submit" value="Memorizza" size="50" name="submit" style="font-size: 12pt; font-weight: normal; background-color: #cc0000; color: #ffffff;border: 0px;font-family: Montserrat;">
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
<table width="50%">	
			<tr>
            <td width="20%" style=" border: 1px solid #949699; font-size: 11pt;font-family: Montserrat;"><font face="Montserrat" color="#000000">Ragione Sociale: </td>
            <td width="80%" style=" border: 1px solid #949699;">
            <input type="text" name="ragsocx"   value="<?php echo $ragsocx; ?>" size="60" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
			</td>		
        </tr>
      
        <tr>
            <td width="20%" style=" border: 1px solid #949699; font-size: 11pt;font-family: Montserrat;"><font face="Montserrat" color="#000000">Iva: </td>
            <td width="80%" style=" border: 1px solid #949699;">
            <input type="text" name="ivax" value="<?php echo $ivax; ?>" size="15" style="background-color: #cac7c7; border: 0px; font-size: 12pt;font-family: Montserrat;">
			</td>		
        </tr>
        <tr>
        
        <td>        
                 <input type="hidden" name="ingranaggio" value="33" />
                 <input type="hidden" name="login" value="<?php echo $login; ?>" />
                
                 <input type="submit" value="Ricerca Cliente" style="height: 22px; background-color: #cc0000;border: 0px; color: #ffffff;font-family: Montserrat;" name="B3xxx"></td>               
         <td >&nbsp;</td>
            </tr>            
           </form> 
</table>              
</div>              
            <br>
            

<?php if($ingranaggio==33 or $ingranaggio == 100){ ?>

<div align="left">
<table id="example" class="display" cellspacing="0" align="left" style="width:99%; position:relative;">         
             <thead class="intesta">
	<tr class="testa">
		 
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Montserrat;" align="center"><font size="2" face="Montserrat" >Codice</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Montserrat;" align="center"><font size="2" face="Montserrat" >Data Acq.</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Montserrat;" align="center"><font size="2" face="Montserrat" >Rag. soc.</td>        
      	  <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Montserrat;" align="center"><font size="2" face="Montserrat" >telefono</td>
           <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Montserrat;" align="center"><font size="2" face="Montserrat" >email</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Montserrat;" align="center"><font size="2" face="Montserrat" >Iban</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Montserrat;" align="center"><font size="2" face="Montserrat" >iva</td>            
          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Montserrat;" align="center"><font size="2" face="Montserrat" >Oper.</td>
          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Montserrat;" align="center"><font size="2" face="Montserrat" >Oper.</td>
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
      <td style=" border: 1px solid #e4e3e3;font-family: Montserrat;" align="center" ><font size="2" face="Montserrat"><?php echo $codice; ?></td>
      <td style=" border: 1px solid #e4e3e3;font-family: Montserrat;" align="center" ><font size="2" face="Montserrat"><?php echo $dataoperazione; ?></td>
      <td style=" border: 1px solid #e4e3e3;font-family: Montserrat;" align="left" ><font size="2" face="Montserrat"><?php echo $ragsocx; ?></td>
      <td style=" border: 1px solid #e4e3e3;font-family: Montserrat;" align="left" ><font size="2" face="Montserrat"><?php echo $telefonox; ?></td>
      <td style=" border: 1px solid #e4e3e3;font-family: Montserrat;" align="left" ><font size="2" face="Montserrat"><?php echo $emailx; ?></td>
      <td style=" border: 1px solid #e4e3e3;font-family: Montserrat;" align="left" ><font size="2" face="Montserrat"><?php echo $ibanx; ?></td>
      <td style=" border: 1px solid #e4e3e3;font-family: Montserrat;" align="center"><font size="2" face="Montserrat"><?php echo $ivaxx; ?></td>
      <td style=" border: 1px solid #e4e3e3;font-family: Montserrat;" align="center" ><a  href="leggicliente1.php?login=<?php echo $login; ?>&progr=<?php echo $progr; ?>&ingranaggio=10&cognome=<?php echo $cognome; ?>&ragsocx=<?php echo $ragsocx; ?>&ivax=<?php echo $ivax; ?>"  ><img border="0" background="btn1.gif" src="occhio.png" width="25" height="25"></a></td>
      <td style=" border: 1px solid #e4e3e3;font-family: Montserrat;" align="center" ><a  href="leggicliente1.php?login=<?php echo $login; ?>&progr=<?php echo $progr; ?>&ingranaggio=11&cognome=<?php echo $cognome; ?>&ragsocx=<?php echo $ragsocx; ?>&ivax=<?php echo $ivax; ?>"  ><img border="0" background="btn1.gif" src="pencil.png" width="25" height="25"></a></td>
     
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
<?php

?>