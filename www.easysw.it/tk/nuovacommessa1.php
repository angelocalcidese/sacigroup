<?php
session_start(); if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){ $larg= $_SESSION['screen_width'] ; $alt= $_SESSION['screen_height']; } else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) { $_SESSION['screen_width'] = $_REQUEST['width']; $_SESSION['screen_height'] = $_REQUEST['height']; header('Location: ' . $_SERVER['PHP_SELF']); } else { echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width+"&height="+screen.height;</script>'; } 
#echo "io"; exit;
include "conf_DB.php";
$anno=$_REQUEST["anno"];
$login=$_REQUEST["login"];
if($login==""){
?>
<script>
window.open("inizio.php", "_blank");
</script>
<?
}
#echo "login".$login;
$ingranaggio=$_REQUEST["ingranaggio"];
#echo "<br>ingraww ".$ingranaggio;
$progr=$_REQUEST["progr"];
$ingranaggiox=$_REQUEST["ingranaggiox"];

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
   


 $ingranaggio=101;   
 } ?> 

<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>inserimento documenti</title>
<link href="./datapilcker3/jquery.datepick.css" rel="stylesheet">

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
function larghezza1() {
//var larg = $(window).width() - 350 + "px";
var larg = $("#ingressiframe1",  window.parent.document).width() - 25 + "px";
//var alt = $("#statiframe",  window.parent.document).height() - 100 + "px";
//alert(alt);
$(".statisti1").css("width", larg);
//$(".testa").css("width", larg);

}
 function aggiorna(sel){
  var f = document.form;
  f.sel_value.value = sel.options[sel.selectedIndex].value;
  f.sel_text.value = sel.options[sel.selectedIndex].text;
 }
function frame1() {
var alt = $("#ingressiframe1",  window.parent.document).height() + 2000 + "px";
var larg = $("#ingressiframe1",  window.parent.document).width() - 15 + "px";
    var table = $('#tableFooter1').DataTable(
	{
	
	"order": [[ 3, "desc" ]],
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

//-->
$(function(){
  $('#dateOp1').datepicker({
    language: "it",
    autoclose: true,
    todayHighlight: true,
    dateFormat: 'dd/mm/yy'
  });
});
</script>





<?php 

$login=$_REQUEST["login"];
$cliente=$_REQUEST["cliente"];
#echo "cli ".$cliente;
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
$caricoa=$_REQUEST["caricoa"];
$importoa=$_REQUEST["importoa"];
$tipofattp=$_REQUEST["tipofattp"];
$periodofattp=$_REQUEST["periodofattp"];
$caricop=$_REQUEST["caricop"];
$importop=$_REQUEST["importop"];
$notefatt=$_REQUEST["notefatt"];

$nomecommessa=$_REQUEST["nomecommessa"];
$commerciale=$_REQUEST["commerciale"];
$pm=$_REQUEST["pm"];
#$importo=number_format($importo, 2);
$erroreriferimento="";
if ($ingranaggio==100)
#if($B3xxx=="Memorizza Commessa")
   { 
   #echo "ingra".$ingranaggio;
$errore="";   
$sql1 = "SELECT * FROM clienti  where codice = '$cliente' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $numero = $macrogruppo["progressivocommessa"];
          $acro = $macrogruppo["acro"];	 
			} }
$numero++;
$sql = "UPDATE clienti set 
progressivocommessa = '$numero'
where 
codice = '$cliente' 
";
#echo $sql;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 
      
$anno=date("y");
#echo $anno;
$numero=substr(str_repeat(0, 3).$numero, - 3);
$commessa=$acro."-".$anno.$attivita."-".$numero;   
#echo $commessa;  
$sql = "INSERT INTO commesse
( 
commessa,
cliente,
attivita,
rif,
dal,
al,
ordine,
notegen,
tipoattivita,
sla,
materiale,
copiecolore,
copieb,
noteatt,
testo,
tipofatta,
periodofatta,
caricoa,
importoa,
tipofattp,
periodofattp,
caricop,
importop,
notefatt,
login,
nomecommessa,
commerciale,
pm
) 
VALUES ( 
'$commessa',
'$cliente',
'$attivita',
'$rif',
'$dal',
'$al',
'$ordine',
'$notegen',
'$tipoattivita',
'$sla',
'$materiale',
'$copiecolore',
'$copieb',
'$noteatt',
'$testo',
'$tipofatta',
'$periodofatta',
'$caricoa',
'$importoa',
'$tipofattp',
'$periodofattp',
'$caricop',
'$importop',
'$notefatt',
'$login',
'$nomecommessa',
'$commerciale',
'$pm'
)";
  #echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {$errore="Commessa ".$commessa." Memorizzata Correttamente";$ingranaggio=101; } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 
   
} 
?>

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

<body text="#000000" onLoad="frame(); larghezza1(); larghezza1(); frame1();" >
<br>
<div style="text-align: center; ">   


<table class="table-form "  style="text-align: center; ">
<tr>
<td style="text-align: center; " width="100%">
<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data">
<table class="table-form "  style="text-align:right;" width="100%">
             <tr>
            <td colspan="2" align="center" style=" border: 0x solid #949699;" ><b><font  color="#cc0000"  ><?php echo $errore; ?></font></b>
            </td>            
            </tr> 
            <tr>
            <td colspan="2" align="center" style=" border: 0x solid #949699;" ><b><font  color="#cc0000"  ></font></b>
            </td>            
            </tr>                                                
            <tr>
            <td colspan="2"  align="center" style=" border: 1px solid #949699;background: #476b5d;"  ><font  color="#ffffff" ><b>Riferimenti Generici</b></font>
            </td>            
            </tr>
            
            <tr>
            <td colspan="1" width="43%" align="left"  style=" border: 1px solid #949699;" ><b><font  color="#000000" >Cliente</font></b>
            </td>
            <td style=" border: 1px solid #949699;">
           <select size="1" name="cliente" style="background-color: #ececee">        
<?php
$sql = "SELECT *  FROM  clienti  order by ragsoc ";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($macrogruppo = $result->fetch_assoc())	
	{       $ragsoc = $macrogruppo["ragsoc"];
            $codice = $macrogruppo["codice"];     
?>                 		
            <option <? if($cliente==$codice){echo "selected"; }?> value="<? echo $codice; ?>"><?php echo $ragsoc; ?></option>          
<?php  }} ?>
            </select>
            </td>
            </tr>
            
			<tr>
			<td align="left" style=" border: 1px solid #949699;" ><font  color="#000000">Attività : </font></b>
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
            <option <?php if($attivita==$codice){echo "selected";} ?> value="<? echo $codice; ?>"><? echo $descrizione; ?></option>          
<?php  }} ?>
            </select>
            </td>
            </tr>
            
            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #949699;background: #476b5d;" ><font  color="#ffffff" >Nome Commessa:</font>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="nomecommessa" value="<?php echo $nomecommessa; ?>" maxlength="60" size="56" style="background-color: #cac7c7; border: 0px;">
            </td>
            </tr>
            
            
            
            
            <tr>
			<td align="left" valign="top" style=" border: 1px solid #949699;" ><font  color="#000000">Riferimenti del Cliente: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <textarea style="background-color: #ececee" name="rif"  cols="57" rows="4"><?php echo $rif; ?></textarea></td>
            </tr>
            
            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #949699;" width="20%"><font  color="#000000" >Contratto Dal:</font>
            </td>
            <td style=" border: 1px solid #949699;" ><input maxlength="10" type="text" name="dal" value="<?php echo $dal; ?>" autocomplete="off" id="dateOp" size="10" style="background-color: #cac7c7; border: 0px; "><font  color="#000000"></font>
			</td>
            </tr>
            
             <tr>
            <td colspan="1" align="left" style=" border: 1px solid #949699;" ><font color="#000000" style="font-size: 10pt;">Contratto Al:</font>
            </td>
            <td style=" border: 1px solid #949699;" ><input maxlength="10" type="text" name="al" value="<?php echo $al; ?>" autocomplete="off" id="dateOp1" size="10" style="background-color: #cac7c7; border: 0px; "><font  color="#000000"></font>
			</td>
            </tr>
            
            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #949699;" ><font  color="#000000" >Ordine Cliente:</font>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="ordine" value="<?php echo $ordine; ?>" maxlength="60" size="56" style="background-color: #cac7c7; border: 0px; ">
            </td>
            </tr>
            
            <tr>
			<td align="left" valign="top" style=" border: 1px solid #949699;" ><font f color="#000000">Note Generali: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <textarea style="background-color: #ececee" name="notegen"  cols="57" rows="4"><?php echo $notegen; ?></textarea></td>
            </tr>
            
            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #949699;" ><font  color="#000000" >Commerciale SACI:</font>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="commerciale" value="<?php echo $commerciale; ?>" maxlength="60" size="56" style="background-color: #cac7c7; border: 0px; ">
            </td>
            </tr>
            
            <tr>
            <td colspan="1" align="left" style=" border: 1px solid #949699;" ><font  color="#000000" >PM SACI:</font>
            </td>
            <td style=" border: 1px solid #949699;">
            <input type="text" name="pm" value="<?php echo $pm; ?>" maxlength="60" size="56" style="background-color: #cac7c7; border: 0px; ">
            </td>
            </tr>
            
            
            
            
            
            
<? if($ingranaggio!=101){  ?>            
            <tr>			
			<td <td colspan="2" style="text-align: center; ">
            <input type="hidden" name="contatore1" value="<?php echo $contatore1; ?>" />
            <input type="hidden" name="ingranaggio" value="100" />
            <input type="hidden" name="login" value="<?php echo $login; ?>" />
            <button  type="submit" class="btn btn-warning">Memorizza Commessa</button>    
            </tr>
<? } ?>            
                    
            </table>
</form>    
</td>
<td align="right" valign="top" width="50%">
</td>
</tr>
</table>        
<? 
#echo "ingra ".$ingranaggio;
if($ingranaggio==101){ ?>
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Tipo di Intervento di questa Commessa</font></b></p>

<div class="table-ticket-footer">
  <table id="tableFooter" class="display" cellspacing="0"  style="position:relative;">         
              <thead class="intesta">
    <tr class="testa">
      
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Codice</td>                              
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Tipo Intervento</td>
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Tipo fatturazione</td>        
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Periodicità Fatt.</td>
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >In Carico a</td>
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
$progr= $macrogruppo["progr"];         
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
<!--      <td   align="center" ><a  href="?login=<?php echo $login; ?>&ingranaggiox=10&progr=<?php echo $progr; ?>&commessa=<? echo $commessa; ?>&cliente=<? echo $clientex; ?>"  ><img border="0" background="btn1.gif" src="occhio.png" width="20" height="20"></a></td>
      <td   align="center" ><a  href="?login=<?php echo $login; ?>&ingranaggiox=11&progr=<?php echo $progr; ?>&commessa=<? echo $commessa; ?>&cliente=<? echo $clientex; ?>"  ><img border="0" background="btn1.gif" src="pencil.png" width="20" height="20"></a></td>    --> 
     </tr>	       
<? }}  ?>
</table>





<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Memorizza Nuovo Intervento</font></b></p>


 <form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data"> 
<table class="table-form "  style="text-align:left;">

  
<tr>
        <th colspan="2" class=" borted-top-table"> 
        Tipo Intervento:
        </th>          
</tr>

<tr>
      <td colspan="1" >
      <label>Denominazione:</label>
      <br>
      <input class="required" type="text" name="tipointervento1" id="tipointervento1"  maxlength="80" >
      </td>
     
      <td colspan="1" >
      <label>Forniture Spare:</label>
      <br>
      <input type="text" name="materiale1"  maxlength="200" >
      </td>
</tr>
<tr>
	  <td colspan="2" > 
      <label>Note: </label> 
      <br>    
      <textarea style="background-color: #ececee" name="noteatt1"  cols="57" rows="4"></textarea></td>
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
            <input type="text" name="caricoa1"  maxlength="200" >
            </td>

            <td colspan="1" >
            <label>Importo singolo ticket:</label>
            <input type="text" name="importoa1"  maxlength="200" >
            </td>
</tr>
<tr>
            <td colspan="2" >
            <label>Importo in canone:</label>
            <input type="text" name="canone1"  maxlength="200" >
            </td>
</tr>
<tr>
            <td colspan="1" >
            <label>Num. Giornate:</label>
            <input type="text" name="numgior"  maxlength="3" >
            </td>

            <td colspan="1" >
            <label>Importo Giornaliero:</label>
            <input type="text" name="importogior"  maxlength="10" >
            </td>
</tr>
<tr>
            <th colspan="2" class=" borted-top-table"> 
            Determinazione Importi:
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
            <td><input type="number" name="da1a301"  id="da1a301"  onKeyup="total()" onClick="total()" maxlength="10" ></td>
            
</tr>
<tr>
            <td width="15%" align="center">31</td>
            <td width="15%" align="center">60</td>
            <td>Totale: <span id="tot-somma1"></span></td>
            <td><input type="number" name="da31a601" id="da31a601"   onKeyup="total()" onClick="total()" maxlength="10" ></td>
           
</tr>
<tr>
            <td width="15%" align="center">61</td>
            <td width="15%" align="center">90</td>
            <td>Totale: <span id="tot-somma2"></span></td>
            <td><input type="number" name="da61a901" id="da61a901"   onKeyup="total()" onClick="total()" maxlength="10" ></td>
          
</tr>
            
             <tr>
            <td width="15%" align="center">91</td>
            <td width="15%" align="center">120</td>
            <td>Totale: <span id="tot-somma3"></span></td>
            <td><input type="number" name="da91a1201" id="da91a1201"   onKeyup="total()" onClick="total()" maxlength="10"  ></td>
            
</tr>
            <tr>
            <td width="15%" align="center">121</td>
            <td width="15%" align="center">150</td>
            <td>Totale: <span id="tot-somma4"></span></td>
            <td><input type="number" name="da121a1501" id="da121a1501"   onKeyup="total()" onClick="total()" maxlength="10"  ></td>
          
            </tr>
            <tr>
            <td width="15%" align="center">151</td>
            <td width="15%" align="center">180</td>
            <td>Totale: <span id="tot-somma5"></span></td>
            <td><input type="number" name="da151a1801" id="da151a1801"   onKeyup="total()" onClick="total()" maxlength="10"  ></td>
            
</tr>
            
            
            <tr>
            <td width="15%" align="center">181</td>
            <td width="15%" align="center">210</td>
            <td>Totale: <span id="tot-somma6"></span></td>
            <td><input type="number" name="da181a2101" id="da181a2101"   onKeyup="total()" onClick="total()" maxlength="10"  ></td>
</tr>
            <tr>
            <td width="15%" align="center">211</td>
            <td width="15%" align="center">240</td>
            <td>Totale: <span id="tot-somma7"></span></td>
            <td><input type="number" name="da211a2401" id="da211a2401"   onKeyup="total()" onClick="total()"maxlength="10"  ></td>
          
</tr>
            <tr>
            <td width="15%" align="center">241</td>
            <td width="15%" align="center">270</td>
            <td>Totale: <span id="tot-somma8"></span></td>
            <td><input type="number" name="da241a2701" id="da241a2701"   onKeyup="total()" onClick="total()" maxlength="10"  ></td>
</tr>
            
             <tr>
            <td width="15%" align="center">271</td>
            <td width="15%" align="center">300</td>
            <td>Totale: <span id="tot-somma9"></span></td>
            <td><input type="number" name="da271a3001" id="da271a3001"   onKeyup="total()" onClick="total()" maxlength="10"  ></td>

</tr>
            <tr>
            <td width="15%" align="center">301</td>
            <td width="15%" align="center">330</td>
            <td>Totale: <span id="tot-somma10"></span></td>
            <td><input type="number" name="da301a3301" id="da301a3301"   onKeyup="total()" onClick="total()" maxlength="10"  ></td>
           
</tr>
            <tr>
            <td width="15%" align="center">331</td>
            <td width="15%" align="center">360</td>
            <td>Totale: <span id="tot-somma11"></span></td>
            <td><input type="number" name="da331a3601" id="da331a3601"   onKeyup="total()" onClick="total()" maxlength="10"  ></td>
            
</tr>
             <tr>
            <td width="15%" align="center">361</td>
            <td width="15%" align="center">390</td>
            <td>Totale: <span id="tot-somma12"></span></td>
            <td><input type="number" name="da361a3901" id="da361a3901"   onKeyup="total()" onClick="total()" maxlength="10" ></td>
           
</tr>            
             <tr>
            <td width="15%" align="center">391</td>
            <td width="15%" align="center">420</td>
            <td>Totale: <span id="tot-somma13"></span></td>
            <td><input type="number" name="da391a4201" id="da391a4201"   onKeyup="total()" onClick="total()" maxlength="10"  ></td>
          
</tr>
            <tr>
            <td width="15%" align="center">421</td>
            <td width="15%" align="center">450</td>
            <td>Totale: <span id="tot-somma14"></span></td>
            <td><input type="number" name="da421a4501" id="da421a4501"   onKeyup="total()" onClick="total()" maxlength="10" ></td>
</tr>
            <tr>
            <td width="15%" align="center">451</td>
            <td width="15%" align="center">480</td>
            <td>Totale: <span id="tot-somma15"></span></td>
            <td><input type="number" name="da451a4801" id="da451a4801"   onKeyup="total()" onClick="total()" maxlength="10" ></td>
</tr>            
</table>
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
            <input style="width: 20px;  height: 20px;" type="checkbox"  name="giorno1" size="1" maxlength="">&nbsp;Giorno&nbsp;&nbsp;&nbsp;&nbsp;
            <input style="width: 20px;  height: 20px;" type="checkbox"   name="ora1" size="1" maxlength="">&nbsp;Ora  
            </td>
</tr>            
<tr>
            <td colspan="1" align="left">
            <label>Numero Giornate/ore:</label>
            <td>
            <input type="text" name="numgiore1"  maxlength="2">
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
            <input style="width: 20px;  height: 20px;" type="checkbox"   name="feriali1" size="1" maxlength="">&nbsp;&nbsp;Feriali 
            </td>
            <td colspan="1" style="width: 33%;">
            da ora:
            <input type="text" name="daorafer1"  maxlength="5" >
            </td>
            <td colspan="1" style="width: 33%;">
            a ora: 
            <input type="text" name="arafer1"  maxlength="5" >
            </td>
</tr>

<tr>            
            <td colspan="1" align="left" style="width: 33%;">
            <input style="width: 20px;  height: 20px;" type="checkbox"   name="sabato1" size="1" maxlength="">&nbsp;&nbsp;Sabato 
            </td>
            <td colspan="1" style="width: 33%;">
            da ora:
            <input type="text" name="daorasab1"  maxlength="5" >
            </td>
            <td colspan="1" style="width: 33%;">
            a ora: 
            <input type="text" name="arasab1"  maxlength="5" >
            </td>
</tr>
<tr>            
            <td colspan="1" align="left" style="width: 33%;">
            <input style="width: 20px;  height: 20px;" type="checkbox"   name="festivi1" size="1" maxlength="">&nbsp;&nbsp;Festivi 
            </td>
            <td colspan="1" style="width: 33%;">
            da ora:
            <input type="text" name="daorafes1"  maxlength="5" >
            </td>
            <td colspan="1" style="width: 33%;">
            a ora: 
            <input type="text" name="arafes1"  maxlength="5" >
            </td>
</tr>          
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
</form>
  </tr> 
</table>
<? } ?>
</div>
</div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<script>
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
 total();
 totalt();
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