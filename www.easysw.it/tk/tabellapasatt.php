<?php
session_start(); if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){ $larg= $_SESSION['screen_width'] ; $alt= $_SESSION['screen_height']; } else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) { $_SESSION['screen_width'] = $_REQUEST['width']; $_SESSION['screen_height'] = $_REQUEST['height']; header('Location: ' . $_SERVER['PHP_SELF']); } else { echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width+"&height="+screen.height;</script>'; } 

include "conf_DB.php";
$ingranaggiox=$_REQUEST["ingranaggiox"];
$login=$_REQUEST["login"];



$cliente=$_REQUEST["cliente"];
 
$commessa=$_REQUEST["commessa"];
$tipointervento=$_REQUEST["tipointervento"];
$cat=$_REQUEST["cat"];
$comodo=explode(" - ",$cliente);
$codicecliente=$comodo[0];
$comodo=explode(" - ",$commessa);
$codicecommessa=$comodo[0];
$comodo=explode(" - ",$cat);
$codicecat=$comodo[0];
$tipofatta1x=$_REQUEST["tipofatta1x"];
#echo "f ".$tipofatta1x;
if($ingranaggiox==8){ 
$cliente="";
$commessa="";
$cat="";
$tipointervento="";
$ingranaggiox="";
} 

if($ingranaggiox==2){ 
#echo "passo";
$cliente=$_REQUEST["cliente"];
#echo "cli ".$cliente;
$commessa=$_REQUEST["commessa"];
$tipointervento=$_REQUEST["tipointervento"];
$cat=$_REQUEST["cat"];
$comodo=explode(" - ",$cliente);
$codicecliente=$comodo[0];
$comodo=explode(" - ",$commessa);
$codicecommessa=$comodo[0];
$comodo=explode(" - ",$cat);
$codicecat=$comodo[0]; 
$numgior=$_REQUEST["numgior"];
$importogior=$_REQUEST["importogior"];
$importoa1=$_REQUEST["importoa1"];
$canonesino=$_REQUEST["canonesino"];
$da1a301=$_REQUEST["da1a301"];
#echo $da1a301;
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
#echo "cli ".$cliente;
 $ce=0;
$sql = "SELECT * FROM tipointerventopas  where cliente = '$codicecliente' and commessa = '$codicecommessa' and tipointervento = '$tipointervento' and cat = '$codicecat' ";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ $ce=1;}}
$oggi=date("Y-m-g H.m.s");  
if($ce==0){      
$sql = "INSERT INTO tipointerventopas
( 
tipointervento,
commessa,
cliente,
cat,
login,
importoa1,
canonesino,
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
importogior,
tipofatta1

) 
VALUES ( 
'$tipointervento',
'$codicecommessa',
'$codicecliente',
'$codicecat',
'$login',
'$importoa1',
'$canonesino',
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
'$importogior',
'$tipofatta1x'
)";
  #echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {$errore="Commessa ".$commessa." Memorizzata Correttamente";$ingranaggiox="1"; } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; }       
 } 
else 
{
$sql = "UPDATE tipointerventopas set 
login='$login',
importoa1='$importoa1',
canonesino='$canonesino',
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
da451a4801='$da451a4801',
numgior='$numgior',
importogior='$importogior',
tipofatta1='$tipofatta1x'
where cliente = '$codicecliente' and commessa = '$codicecommessa' and tipointervento = '$tipointervento' and cat = '$codicecat'
";
#echo $sql;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 
     }
 } 

$sql = "SELECT *  FROM  tipointerventopas  where cliente = '$codicecliente' and commessa = '$codicecommessa' and tipointervento = '$tipointervento' and cat = '$codicecat'";  
#echo $sql;  

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{
$progr= $macrogruppo["progr"];         
$tipointervento= $macrogruppo["tipointervento"];        
#echo $tipointervento1;
$importoa1= $macrogruppo["importoa1"];
$numgior= $macrogruppo["numgior"];
$importogior= $macrogruppo["importogior"];
$canonesino= $macrogruppo["canonesino"];
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
$tipofattax= $macrogruppo["tipofatta1"]; 
}}

$sql = "SELECT *  FROM  tipointervento  where cliente = '$codicecliente' and commessa = '$codicecommessa' and tipointervento1 = '$tipointervento' ";  
#echo $sql;  

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{
$progr= $macrogruppo["progr"];         
$tipointerventox= $macrogruppo["tipointervento"];   
$tipofatta1= $macrogruppo["tipofatta1"];     
#echo $tipointervento1;
$importoa1x= $macrogruppo["importoa1"];
$numgiorx= $macrogruppo["numgior"];
$importogiorx= $macrogruppo["importogior"];
$canone1x= $macrogruppo["canone1"];
if($canone1x!=""){$canonesino="SI";}
$da1a301x= $macrogruppo["da1a301"];
$da31a601x= $macrogruppo["da31a601"];
$da61a901x= $macrogruppo["da61a901"];
$da91a1201x= $macrogruppo["da91a1201"];
$da121a1501x= $macrogruppo["da121a1501"];
$da151a1801x= $macrogruppo["da151a1801"];
$da181a2101x= $macrogruppo["da181a2101"];
$da211a2401x= $macrogruppo["da211a2401"];
#echo "req ".$da211a2401;
$da241a2701x= $macrogruppo["da241a2701"];
$da271a3001x= $macrogruppo["da271a3001"];
$da301a3301x= $macrogruppo["da301a3301"];
$da331a3601x= $macrogruppo["da331a3601"];
$da361a3901x= $macrogruppo["da361a3901"];
$da391a4201x= $macrogruppo["da391a4201"];
$da421a4501x= $macrogruppo["da421a4501"];
$da451a4801x = $macrogruppo["da451a4801"]; 
}}

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
</script>

<?php 





#$importo=number_format($importo, 2);

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
<body text="#000000" onLoad="frame(); larghezza1(); larghezza1(); frame1();" >
<?php if ($fileNumError > 0) { echo $erroreFileMessage; } 
if($ingranaggiox==""){  ?>
<script>
$("#cat").val("");
</script>
<? } 

?>

<br>
<div>   
<br>
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Gestione tabella importi Attivi/passivi</font></b></p>

<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data"> 
<table class="table-form "  style="text-align:left;">
 <tr>

     <td colspan="1" style="width: 33%;"> 
     <label>Cliente:<i class="fa-solid fa-magnifying-glass" data-bs-toggle="modal" data-bs-target="#leggiclienti" style="cursor:pointer; margin-left:5px"></i>all</label>
     <br>   
     <input class="required" type="text" id="cliente" onkeyup="ricercaAutocomplete()" name="cliente" value="<?php echo $cliente; ?>" maxlength="100" >       
     </td>  
        
    <td colspan="1" style="width: 33%;"> 
    <label>Commessa:</label><br>
    <input class="required" type="text" id="commessa" onkeyup="Ricerca1()" name="commessa" value="<?php echo $commessa; ?>" maxlength="120">
    </td>  
              
    <td  colspan="1" style="width: 33%;"> 
    <label>Tipo intervento:</label><br>
    <select
        name="tipointervento"
        id="tipointervento"
        style="width:99%"
        class="required">
    <option><?php echo $tipointervento; ?></option>
    </select>
    </td>
    
    </tr> 
    <tr>  
    
    <td  colspan="1">
      <label>T.P:<i class="fa-solid fa-magnifying-glass" data-bs-toggle="modal" data-bs-target="#leggicat" style="cursor:pointer; margin-left:5px"></i>all</label>
      <br>
      <input class="required" type="text" id="cat" onkeyup="ricercaAutocompletecat()" name="cat" value="<?php echo $cat; ?>" maxlength="100" >   
      </td>
<? if($ingranaggiox==""){ ?>   
      <td colspan="3" style="text-align: center; " >       

             <input type="hidden" name="ingranaggiox" value="1" />
             <input type="hidden" name="login" value="<?php echo $login; ?>" />
             <button autofocus type="submit" class="btn btn-warning">Esponi Tabella</button>
    </td> 
<? } else { ?>  
 <td colspan="3" style="text-align: center; " >       

             <input type="hidden" name="ingranaggiox" value="8" />
             <input type="hidden" name="login" value="<?php echo $login; ?>" />
             <button class="btn btn-primary" type="submit" type="button" >Altra Tabella</button>
    </td> 
<? } ?>   
  </tr>         
</table> 
</form> 
<? if($ingranaggiox==1 or $ingranaggiox==2){ ?>
<br>
<form method="POST" action=""  enctype="multipart/form-data"> 
<table class="table-form "  style="text-align:left;"> 
<tr>
<td colspan="2">
<label>Tipo Fatturazione:</label>
<select class="required" size="1" name="tipofatta1x" id="tipofatta1x" >
<?
$sql = "SELECT * FROM tipofattura  order by descrizione";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ $descrizione = $macrogruppo["descrizione"]; ?>
      <option <? if($descrizione==$tipofatta1x){echo "selected";}?>><? echo $descrizione; ?></option>
<? }} ?>           
</select>
</td>
</tr>
<tr>
<td style="text-align:left;width: 50%;" valign="top"> 

<table class="table-form "  style="text-align:left;"> 
<tr>
        <th colspan="2" class=" borted-top-table"> 
        Importi Passivi:
        </th>          
</tr>          
<tr>
            <td colspan="2" >
            <label>Importo singolo ticket:</label>
            <input type="text" name="importoa1" value="<?php echo $importoa1; ?>" maxlength="200" >
            </td>
</tr>
<tr>
            <td colspan="2" >
            <label>Importo in canone:</label>            
            <select size="1" name="canonesino" style="background-color: #ececee">
			<option <?php  if($canonesino=="NO"){echo "selected";}?>>NO</option>
            <option <?php  if($canonesino=="SI"){echo "selected";}?>>SI</option>
			</select>           
            </td>
</tr>
<tr>
            
            <td colspan="2" >
            <label>Importo Giornaliero:</label>
            <input type="text" name="importogior" value="<?php echo $importogior; ?>" maxlength="10" >
            </td>
</tr>
<tr>
            <th colspan="3" class=" borted-top-table"> 
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
           

            
           

<tr>       
    <td colspan="4" style="text-align: center; " >       
    <input type="hidden" name="ingranaggiox" value="2" />
    <input type="hidden" name="login" value="<?php echo $login; ?>" />   
    <input type="hidden" name="cliente" value="<?php echo $cliente; ?>" /> 
     
    <input type="hidden" name="commessa" value="<?php echo $commessa; ?>" />  
    <input type="hidden" name="tipointervento" value="<?php echo $tipointervento; ?>" /> 
     <input type="hidden" name="cat" value="<?php echo $cat; ?>" />    
    <button  type="submit" class="btn btn-warning">Memorizza</button>
    </td> 
</form>
  </tr> 

</table>
</td>
<td style="text-align:left;width: 50%;" valign="top">
<table class="table-form "  style="text-align:left;" valign="top"> 
<tr>
        <th colspan="2" class=" borted-top-table"> 
        Importi Attivi (<? echo $codicecommessa." - ".$tipointervento; ?>):
        </th>          
</tr>          
<tr>
            <td colspan="2" >
            <label>Importo singolo ticket:</label>
            <input type="number" name="importoa1x" value="<?php echo $importoa1x; ?>" maxlength="200" >
            </td>
</tr>
<tr>
            <td colspan="2" >
            <label>Importo in canone:</label>
            <input type="number" name="canone1x" value="<?php echo $canone1x; ?>" maxlength="200" >
            </td>
</tr>
<tr>

            <td colspan="2" >
            <label>Importo Giornaliero:</label>
            <input type="number" name="importogiorx" value="<?php echo $importogiorx; ?>" maxlength="10" >
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
            <td colspan="2" align="center">Importo Ticket</td> 
                      
</tr>
<tr>            
            <td width="25%" align="center">1</td>
            <td width="25%" align="center">30</td>
            <td><input type="number" name="da1a301x"  id="p1" value="<?php echo $da1a301x; ?>" onKeyup="totalt()" onClick="totalt()" maxlength="15" ></td>
           
</tr>
<tr>
            <td width="25%" align="center">31</td>
            <td width="25%" align="center">60</td>
            <td><input type="number" name="da31a601x" id="p2" value="<?php echo $da31a601x; ?>" onKeyup="totalt()" onClick="totalt()" maxlength="15" ></td>
            
</tr>
<tr>
            <td width="25%" align="center">61</td>
            <td width="25%" align="center">90</td>
            <td><input type="number" name="da61a901x" id="p3" value="<?php echo $da61a901x; ?>" onKeyup="totalt()" onClick="totalt()" maxlength="15" ></td>
            
</tr>
            
             <tr>
            <td width="25%" align="center">91</td>
            <td width="25%" align="center">120</td>
            <td><input type="number" name="da91a1201x" id="p4" value="<?php echo $da91a1201x; ?>" onKeyup="totalt()" onClick="totalt()" maxlength="15"  ></td>
          
            </tr>
            <tr>
            <td width="25%" align="center">121</td>
            <td width="25%" align="center">150</td>
            <td><input type="number" name="da121a1501x" id="p5" value="<?php echo $da121a1501x; ?>"  onKeyup="totalt()" onClick="totalt()" maxlength="15"  ></td>
            
            </tr>
            <tr>
            <td width="25%" align="center">151</td>
            <td width="25%" align="center">180</td>
            <td><input type="number" name="da151a1801x" id="p6" value="<?php echo $da151a1801x; ?>" onKeyup="totalt()" onClick="totalt()" maxlength="15"  ></td>
            
            </tr>
            
            
            <tr>
            <td width="25%" align="center">181</td>
            <td width="25%" align="center">210</td>
            <td><input type="number" name="da181a2101x" id="p7" value="<?php echo $da181a2101x; ?>" onKeyup="totalt()" onClick="totalt()" maxlength="15"  ></td>
            
            </tr>
            <tr>
            <td width="25%" align="center">211</td>
            <td width="25%" align="center">240</td>
            <td><input type="number" name="da211a2401x" id="p8" value="<?php echo $da211a2401x; ?>" onKeyup="totalt()" onClick="totalt()" maxlength="15"  ></td>
            
            </tr>
            <tr>
            <td width="25%" align="center">241</td>
            <td width="25%" align="center">270</td>
            <td><input type="number" name="da241a2701x" id="p9" value="<?php echo $da241a2701x; ?>" onKeyup="totalt()" onClick="totalt()" maxlength="15"  ></td>
            
            </tr>
            
             <tr>
            <td width="25%" align="center">271</td>
            <td width="25%" align="center">300</td>
            <td><input type="number" name="da271a3001x" id="p10" value="<?php echo $da271a3001x; ?>" onKeyup="totalt()" onClick="totalt()" maxlength="15"  ></td>
           
            </tr>
            <tr>
            <td width="25%" align="center">301</td>
            <td width="25%" align="center">330</td>
            <td><input type="number" name="da301a3301x" id="p11" value="<?php echo $da301a3301x; ?>" onKeyup="totalt()" onClick="totalt()" maxlength="15"  ></td>
            
            </tr>
            <tr>
            <td width="25%" align="center">331</td>
            <td width="25%" align="center">360</td>
            <td><input type="number" name="da331a3601x" id="p12" value="<?php echo $da331a3601x; ?>" onKeyup="totalt()" onClick="totalt()" maxlength="15"  ></td>
            
            </tr>
             <tr>
            <td width="25%" align="center">361</td>
            <td width="25%" align="center">390</td>
            <td><input type="number" name="da361a3901x" id="p13" value="<?php echo $da361a3901x; ?>" onKeyup="totalt()" onClick="totalt()" maxlength="15" ></td>
         
            </tr>
            
             <tr>
            <td width="25%" align="center">391</td>
            <td width="25%" align="center">420</td>
            <td><input type="number" name="da391a4201x" id="p14" value="<?php echo $da391a4201x; ?>" onKeyup="totalt()" onClick="totalt()" maxlength="15"  ></td>
            
            </tr>
            <tr>
            <td width="25%" align="center">421</td>
            <td width="25%" align="center">450</td>
            <td><input type="number" name="da421a4501x" id="p15" value="<?php echo $da421a4501x; ?>" onKeyup="totalt()" onClick="totalt()" maxlength="15" ></td>
            
            </tr>
            <tr>
            <td width="25%" align="center">451</td>
            <td width="25%" align="center">480</td>
            <td><input type="number" name="da451a4801x" id="p16" value="<?php echo $da451a4801x; ?>" onKeyup="totalt()" onClick="totalt()" maxlength="15" ></td>
            
            </tr>

            <tr>
            <td></td>
            <td></td>
            <td>Totale: <span id="tot-sommat"></span></td>
            <td></td>
            </tr>
            
           
</table>

</td>
</tr>
</table>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

<? } ?>
</div>
</div>
</div>
</div>
</div>
<br>


</div>      





<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
<!-- Modal 0-->
<div class="modal fade" id="leggicat" tabindex="-1" aria-labelledby="leggicat" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="leggiclientiLabel">Lista tutti T.P.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <?php include("leggitutticat.php"); ?>  
      </div>
     
    </div>
  </div>
</div>
<!-- FINE MODALE  1--> 
<script>
var italianTeams = [];
var italianTeams2 = [];
var italianTeams3 = [];
var apparatiArr = [];

function autoComplete(){
     $("#cliente").autocomplete({
			source: italianTeams     
		 });
}
function autoCompletecat(){
     $("#cat").autocomplete({
			source: italianTeams3      
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

function ricercaAutocompletecat(){
	
     $.ajax({
	         url: 'leggicat.php',
	         type: 'POST',
	         dataType: 'json',
	         data: {},
	         success: function(risposta){
	            italianTeams3 = risposta;
				autoCompletecat();
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



 ricercaAutocomplete();
 ricercaAutocompleteApparato();
 ricercaAutocompletecat();
 tableInit();
 total();
 totalt();
</script>

</body>

</html>