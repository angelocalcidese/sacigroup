<?php  
session_start(); if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){ $larg= $_SESSION['screen_width'] ; $alt= $_SESSION['screen_height']; } else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) { $_SESSION['screen_width'] = $_REQUEST['width']; $_SESSION['screen_height'] = $_REQUEST['height']; header('Location: ' . $_SERVER['PHP_SELF']); } else { echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width+"&height="+screen.height;</script>'; } 
#echo "io"; exit;
include "conf_DB.php"; 
$login=$_REQUEST["login"];
$plcomodo=$_REQUEST["plcomodo"];
$pldatacomodo=$_REQUEST["pldatacomodo"];
if($login==""){
?>
<script>
window.open("inizio.php", "_blank");


</script>
<?
}
$ingranaggio=$_REQUEST["ingranaggio"];
$ingranaggioseriale=$_REQUEST["ingranaggioseriale"];
$ingranaggiospunta=$_REQUEST["ingranaggiospunta"];
$ingranaggiodocumento=$_REQUEST["ingranaggiodocumento"];  
$ingranaggiocancellaparte=$_REQUEST["ingranaggiocancellaparte"];
$codicelavoro=$_REQUEST["codicelavoro"];
$ingranaggio=$_REQUEST["ingranaggio"];
$spunta=$_REQUEST["spunta"]; 
$catdapassare=$_REQUEST["catdapassare"];
#echo " s ".$spunta;
#echo "ingr ".$ingranaggio; $progrart
if($ingranaggiocancellaparte==1){
$progrart=$_REQUEST["progrart"];
$progrartcom=$_REQUEST["progrart"];
$sqlx = "SELECT  a.* FROM daspedire a where progr =  '$progrart' ";  
#echo $sqlx; exit;
$rCountx = 1;
$resultx = $conn->query($sqlx);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc())	
	{
     $aggancio= $macrogruppox["aggancio"]; 
     }}
     #echo "agg ".$aggancio; exit;
$sql = "DELETE from daspedire where aggancio = '$aggancio' ";
#echo $sql;  exit;
if ($conn->query($sql) === FALSE)
  {echo "errxx=errore";exit;}
  else
  { }
$sql = "DELETE from impegno where aggancio = '$aggancio' ";
#echo $sql;  exit;
if ($conn->query($sql) === FALSE)
  {echo "errxx=errore";exit;}
  else
  { }
}
if($ingranaggioseriale==1){
$progrart=$_REQUEST["progrart"];
$progrartcom=$_REQUEST["progrart"];
$serialenew=$_REQUEST["serialenew"];
$sql = "UPDATE daspedire set                                   
  seriale='$serialenew',
  spunta='$spunta'
where 
progr = '$progrart' ";
#echo $sql; exit;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; }
}    
if($ingranaggiospunta==1){
$progrart=$_REQUEST["progrart"];
$serialenew=$_REQUEST["serialenew"];
$sql = "UPDATE daspedire set                                   
  spunta ='$spunta'
where 
progr = '$progrart' ";
#echo $sql; exit;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; }
}    
if($ingranaggiodocumento==1){
$corriere=$_REQUEST["corriere"];
$tipoimballo=$_REQUEST["tipoimballo"];
$qty=$_REQUEST["qty"];
$lung=$_REQUEST["lung"];
$larg=$_REQUEST["larg"];
$alt=$_REQUEST["alt"];
$peso=$_REQUEST["peso"];
$contenuto=$_REQUEST["contenuto"];
$causale=$_REQUEST["causale"];
$assicurazione=$_REQUEST["assicurazione"];
$swtrovato=0;
$sql = "SELECT *  FROM  preddt where pl = '$plcomodo' ";  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
    $swtrovato=1;
    }}
if($swtrovato==1){
$sql = "UPDATE preddt set                                   
corriere='$corriere',
 tipoimballo='$tipoimballo',
qty='$qty',
lung='$lung',
larg='$larg',
alt='$alt',
peso='$peso',
contenuto='$contenuto',
causale='$causale',
assicurazione='$assicurazione'
where 
pl = '$plcomodo' ";
#echo $sql; exit;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; }
}else
{
$sqluu = "INSERT INTO preddt
(pl,
corriere,
login,
tipoimballo,
qty,
lung,
larg,
alt,
peso,
contenuto,
causale,
assicurazione
) 
VALUES ( 
        '$plcomodo',
        '$corriere',
        '$login',
        '$tipoimballo',
'$qty',
'$lung',
'$larg',
'$alt',
'$peso',
'$contenuto',
'$causale',
'$assicurazione'
        )";
#echo $sqluu; exit;       
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd da spedire: " . $conn->error; exit;} 
}
}

?>             


<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<? if($ingranaggio==16000){echo "<meta http-equiv='refresh' content='100'>";} ?>
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


function frameyy() {
var alt = $("#ingressiframeyy",  window.parent.document).height() + 2000 + "px";
var larg = $("#ingressiframeyy",  window.parent.document).width() - 15 + "px";
    var table = $('#tableFooteryy').DataTable(
	{
	
	"order": [[ 1, "desc" ]],
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

function framezz() {
var alt = $("#ingressiframezz",  window.parent.document).height() + 2000 + "px";
var larg = $("#ingressiframezz",  window.parent.document).width() - 15 + "px";
    var table = $('#tableFooterzz').DataTable(
	{
	
	"order": [[ 1, "desc" ]],
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

function larghezzayy() {
//var larg = $(window).width() - 350 + "px";
var larg = $("#ingressiframeyy",  window.parent.document).width() - 50 + "px";
//var alt = $("#statiframe",  window.parent.document).height() - 100 + "px";
//alert(alt);
$(".statistiyy").css("width", larg);
//$(".testa").css("width", larg);

}

function attivaclick(numero, login, cliente, commessa, tipointervento){     
  /* chiamo il servizio per riempire i campi nella modale */ 
  $.ajax({
	          url: 'selezionacat.php',
	         type: 'POST',
	         dataType: 'json',
	         data: {"numero": numero, "login": login, "cliente": cliente, "commessa": commessa, "tipointervento": tipointervento},
	         success: function(risposta){
	           console.log("RISPOSTA", risposta);
	         },
	         error: function(error){
				    console.log("ERRORE CHIAMATA");
       // $("#commessa").prop( "disabled", false );
	         }
	});
}



function larghezzazz() {
//var larg = $(window).width() - 350 + "px";
var larg = $("#ingressiframezz",  window.parent.document).width() - 50 + "px";
//var alt = $("#statiframe",  window.parent.document).height() - 100 + "px";
//alert(alt);
$(".statistizz").css("width", larg);
//$(".testa").css("width", larg);

}
</script>
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
.custom-checkbox {
        width: 30px; /* Larghezza della casella di spunta */
        height: 30px; /* Altezza della casella di spunta */
        background-color: #476b5d;
        color:  #476b5d;
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

<body text="#000000" onLoad="larghezza(); frame(); larghezzaxx(); framexx(); larghezzayy(); frameyy(); larghezzazz(); framezz(); callTotal();"  >
<div align="center">   


<?
$sqlx = "SELECT  a.*
FROM daspedire a where (a.ddt is null ) and (a.catassegnato != '')  
ORDER BY a.catassegnato DESC";  
#echo $sqlx;    exit;
$rCountx = 1;
$resultx = $conn->query($sqlx);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc())	
	{
     $catassegnato= $macrogruppox["catassegnato"]; 
     $contatore= $macrogruppox["contatore"];
     $pl = $macrogruppox["pl"];
     $pldata = $macrogruppox["pldata"];
     $datarichiesta = $macrogruppox["datarichiesta"];
     $quantitads = $macrogruppox["quantita"];
     $articolods = $macrogruppox["articolo"];
     $progrart = $macrogruppox["progr"];
     $serialeds = $macrogruppox["seriale"];
     $spunta = $macrogruppox["spunta"];
     $segno = $macrogruppox["segno"];
     #echo "s ".$segno;
     $ticket = $macrogruppox["ticket"];
     if($segno=="on"){$spunta="";}

$sqlk = "SELECT *  FROM  tk where numero = '$ticket' ";  
#echo $sql;
$rCountk = 1;
$resultk = $conn->query($sqlk);
if ($resultk->num_rows > 0) {
  while($macrogruppok = $resultk->fetch_assoc())	
	{      
     $clientexx = $macrogruppok["cliente"];
     $commessaxx = $macrogruppok["commessa"];     
    }} 
 
$sqlxe = "SELECT *  FROM  clienti where  codice  = '$clientexx' " ;  
#echo $sqlxe;
$rCounte = 1;
$resultxe = $conn->query($sqlxe);
if ($resultxe->num_rows > 0) {
  while($macrogruppoxe = $resultxe->fetch_assoc())	
	{   
     $ragsocclixx = $macrogruppoxe["ragsoc"];
     }}     
$sqlxj = "SELECT *  FROM  commesse where  commessa  = '$commessaxx' " ;  
#echo $sql;
$rCountj = 1;
$resultxj = $conn->query($sqlxj);
if ($resultxj->num_rows > 0) {
  while($macrogruppoxj = $resultxj->fetch_assoc())	
	{   
     $nomecommessaxx = $macrogruppoxj["nomecommessa"];
     }}      
    
    
        
$sql = "SELECT *  FROM  cat where codice = '$catassegnato' ";  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
$progrtt= $macrogruppo["id"];    
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
 }}
$sqlg = "SELECT *  FROM  articolo where codice = '$articolods' ";  
#echo $sql;
$rCountg = 1;
$resultg = $conn->query($sqlg);
if ($resultg->num_rows > 0) {
  while($macrogruppog = $resultg->fetch_assoc())	
	{ 
     $progr = $macrogruppog["progr"];
     $denominazione = $macrogruppog["denominazione"];
     $dataoperazione = $macrogruppog["dataoperazione"];
     $codiceart = $macrogruppog["codice"];
     $ncliente = $macrogruppog["ncliente"];
     $ncostruttore = $macrogruppog["ncostruttore"];
     $cliprop = $macrogruppog["cliprop"];
     #echo $cliprop;
     $tipo = $macrogruppog["tipo"];
     $gruppo= $macrogruppog["gruppo"];
     $marca = $macrogruppog["marca"];
     $modello = $macrogruppog["modello"];
     $volume = $macrogruppog["volume"];
     $peso = $macrogruppog["peso"];
     $note = $macrogruppog["note"]; }} 
$sqlyu = "UPDATE daspedire set 
cliente = '$clientexx'
where 
progr = '$progrart' 
";
if ($conn->query($sqlyu) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 
}}

#exit; 
?>


<br>
<? if($ingranaggio==16000){ ?>
<? $comodocat=""; ?>
<h3><font style=" color: #cc0000;">SPEDIZIONI DA EFFETTUARE</font></h3>   

<table id="tableFooteryyw" class="display" cellspacing="0" align="center" style="width:98%; position:relative;">         
             <thead class="intesta">
	<tr class="testa">
		   <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="4"  >Data Richiesta</td>
		  <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="4"  >Codice Mittente</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="4"  >Cliente</td>                              
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="4"  >Commessa</td>     
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="4"  >Ticket</td>                              
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="4"  >Cod. Art.</td>
           <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="4"  >Descrizione Articolo</td>         
          
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="4"  >QT</td>                              
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="4"  >Seriale</td> 
          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="4"  >Lavorato</td>                   
          
         </tr>       
	</thead>
	<tbody>
<?php 

$sqlx = "SELECT  a.*
FROM daspedire a where (a.ddt is null) and (a.catassegnato != '')
ORDER BY a.catassegnato DESC";  
#echo $sql;
$rCountx = 1;
$resultx = $conn->query($sqlx);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc())	
	{
     $catassegnato= $macrogruppox["catassegnato"]; 
     $contatore= $macrogruppox["contatore"];
     $pl = $macrogruppox["pl"];
     $pldata = $macrogruppox["pldata"];
     $datarichiesta = $macrogruppox["datarichiesta"];
     $quantitads = $macrogruppox["quantita"];
     $articolods = $macrogruppox["articolo"];
     $progrart = $macrogruppox["progr"];
     $serialeds = $macrogruppox["seriale"];
     $spunta = $macrogruppox["spunta"];
     $segno = $macrogruppox["segno"];
     #echo "s ".$segno;
     $ticket = $macrogruppox["ticket"];
     if($segno=="on"){$spunta="";}
$sqlk = "SELECT *  FROM  tk where numero = '$ticket' ";  
#echo $sql;
$rCountk = 1;
$resultk = $conn->query($sqlk);
if ($resultk->num_rows > 0) {
  while($macrogruppok = $resultk->fetch_assoc())	
	{      
     $clientexx = $macrogruppok["cliente"];
     $commessaxx = $macrogruppok["commessa"];     
    }} 
    
$sqlxe = "SELECT *  FROM  clienti where  codice  = '$clientexx' " ;  
#echo $sql;
$rCounte = 1;
$resultxe = $conn->query($sqlxe);
if ($resultxe->num_rows > 0) {
  while($macrogruppoxe = $resultxe->fetch_assoc())	
	{   
     $ragsocclixx = $macrogruppoxe["ragsoc"];
     }}     
$sqlxj = "SELECT *  FROM  commesse where  commessa  = '$commessaxx' " ;  
#echo $sql;
$rCountj = 1;
$resultxj = $conn->query($sqlxj);
if ($resultxj->num_rows > 0) {
  while($macrogruppoxj = $resultxj->fetch_assoc())	
	{   
     $nomecommessaxx = $macrogruppoxj["nomecommessa"];
     }}      
    
    
        
$sql = "SELECT *  FROM  cat where codice = '$catassegnato' ";  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
$progrtt= $macrogruppo["id"];    
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
 }}
$sqlg = "SELECT *  FROM  articolo where codice = '$articolods' ";  
#echo $sql;
$rCountg = 1;
$resultg = $conn->query($sqlg);
if ($resultg->num_rows > 0) {
  while($macrogruppog = $resultg->fetch_assoc())	
	{ 
     $progr = $macrogruppog["progr"];
     $denominazione = $macrogruppog["denominazione"];
     $dataoperazione = $macrogruppog["dataoperazione"];
     $codiceart = $macrogruppog["codice"];
     $ncliente = $macrogruppog["ncliente"];
     $ncostruttore = $macrogruppog["ncostruttore"];
     $cliprop = $macrogruppog["cliprop"];
     #echo $cliprop;
     $tipo = $macrogruppog["tipo"];
     $gruppo= $macrogruppog["gruppo"];
     $marca = $macrogruppog["marca"];
     $modello = $macrogruppog["modello"];
     $volume = $macrogruppog["volume"];
     $peso = $macrogruppog["peso"];
     $note = $macrogruppog["note"]; }} 
########################  controllo per la rottura  ########################     
if($comodocat!=$catassegnato){  
if($comodocat==""){  ?>
<?

$sqlm = "SELECT *  FROM  cat where codice = '$catassegnato' ";  
#cho $sqlm;
$rCountm = 1;
$resultm = $conn->query($sqlm);
if ($resultm->num_rows > 0) {
  while($macrogruppom = $resultm->fetch_assoc())	
	{ 
$progrttm= $macrogruppom["id"];    
$codicem= $macrogruppom["codice"];  
#echo  $codicem;                  
$dataoperazionem= $macrogruppom["dataoperazione"];           
$ragsocm= $macrogruppom["ragsoc"]; 
$viam= $macrogruppom["via"];           
$cittam= $macrogruppom["citta"];           
$capm= $macrogruppom["cap"];           
$provm= $macrogruppom["prov"];           
$regionem= $macrogruppom["regione"];  
}} 
         
?>
<tr>
<td style="background: #afc81b;" colspan="12" style="color: <? echo $colorepp; ?>;" align="left" bgcolor="<? echo $colore; ?>" ><font style="font-size: 20px;color: #476b5d;"><? echo $codicem." - ".$ragsocm." ".$viam." ".$capm." - ".$capm." ".$cittam." ".$regionem; ?></font></td>
</tr>
<? $comodocat=$catassegnato; $totalepezzi=0;}else{ ?>
<tr>
<td colspan="4" style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"></td>
<td colspan="1" style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"><font style="font-size: 20px;color: #476b5d;">TOTALE PEZZI</font></td>
<td style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"><?php echo $totalepezzi; ?></td>
<form method="POST" action=""  enctype="multipart/form-data"> 
<td style="color: <? echo $colorepp; ?>;" align="left" bgcolor="<? echo $colore; ?>">
  <input type="hidden" name="ingranaggio" value="16001" />             
             <input type="hidden" name="login" value="<?php echo $login; ?>" /> 
             <input type="hidden" name="catdapassare" value="<? echo $catassegnato; ?>" />            
             <button  type="submit" class="btn btn-warning" style="height: 30px; vertical-align: top;background: #afc81b;color: #ffffff;" >Elabora DDT</button>  
             <input type="hidden" name="ingranaggio" value="16001" />             
             <input type="hidden" name="login" value="<?php echo $login; ?>" /> 
             <input type="hidden" name="catdapassare" value="<? echo $catassegnato; ?>" />            
             <button  type="submit" class="btn btn-warning" style="height: 30px; vertical-align: top;background: #476b5d;color: #ffffff;" >Simula DDT</button>
</td>
<td colspan="1" style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"></td>  
</tr>
</form> 
<? 
$sqlm = "SELECT *  FROM  cat where codice = '$catassegnato' ";  
#echo $sqlm;
$rCountm = 1;
$resultm = $conn->query($sqlm);
if ($resultm->num_rows > 0) {
  while($macrogruppom = $resultm->fetch_assoc())	
	{ 
$progrttm= $macrogruppom["id"];    
$codicem= $macrogruppom["codice"];  
#echo  $codicem;                  
$dataoperazionem= $macrogruppom["dataoperazione"];           
$ragsocm= $macrogruppom["ragsoc"]; 
$viam= $macrogruppom["via"];           
$cittam= $macrogruppom["citta"];           
$capm= $macrogruppom["cap"];           
$provm= $macrogruppom["prov"];           
$regionem= $macrogruppom["regione"];  
}} 
        
?>
<tr>
<td style="background: #afc81b;" colspan="12" style="color: <? echo $colorepp; ?>;" align="left" bgcolor="<? echo $colore; ?>" ><font style="font-size: 20px;color: #476b5d;"><? echo $codicem." - ".$ragsocm." ".$viam." ".$capm." - ".$capm." ".$cittam." ".$regionem; ?></font></td>
</tr>
<? $comodocat=$catassegnato; $totalepezzi=0;} }
########################### fine controllo per la rottura #########################################
?>  
  
	  <tr <? if($segno=="on"){echo "style='background-color: #f6bac4;'";} ?>> 
      <td style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"><?php echo $datarichiesta; ?></td>   
      
      <td style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"><?php echo $catassegnato; ?></td>
      
      
      
      <td style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"><?php echo $ragsocclixx; ?></td> 
      <td style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"><?php echo $nomecommessaxx; ?></td>
      <td style="color: <? echo $colorepp; ?>;" align="left" bgcolor="<? echo $colore; ?>"><?php echo $ticket; ?></td>
      <td style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"><?php echo $articolods; ?></td>
       <td style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"><?php echo $denominazione; ?></td>     
     <td style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"><?php echo $quantitads; ?></td> 
     <? $totalepezzi=$totalepezzi+$quantitads; ?>
<form method="POST" action=""  enctype="multipart/form-data"> 
<? if($tipo=="Serializzato"){ ?>

<td >

<input class="required" type="text" value="<? echo $serialeds; ?>" name="serialenew"  maxlength="60" size="30" >            
           


</td>
<? }else{ ?> <td></td> <? } ?>
<td align="center" ><input class="custom-checkbox"  type="checkbox" id="spunta" name="spunta" <? if($spunta=="on"){echo "checked"; }?> >
    
<? if($segno==""){ ?> 
             <input type="hidden" name="ingranaggio" value="16000" />
             <input type="hidden" name="ingranaggioseriale" value="1" />
             <input type="hidden" name="login" value="<?php echo $login; ?>" />             
             <input type="hidden" name="progrart" value="<? echo $progrart; ?>" />
             
             <button  type="submit" class="btn btn-warning" style="height: 30px; vertical-align: top;" >Mem.</button>  
<? } else { ?>  
             <input type="hidden" name="ingranaggio" value="16000" />
             <input type="hidden" name="ingranaggiocancellaparte" value="1" />
             <input type="hidden" name="login" value="<?php echo $login; ?>" />             
             <input type="hidden" name="progrart" value="<? echo $progrart; ?>" />
             
             <button  type="submit" class="btn btn-warning" style="background-color: red; color: #ffffff; height: 30px; vertical-align: top;" >Canc.</button>  
<? } ?>          
      </td>  
       </tr>
</form >      	     
<?php          
}
}

?>
<tr>
<td colspan="4" style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"></td>
<td colspan="1" style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"><font style="font-size: 20px;color: #476b5d;">TOTALE PEZZI</font></td>
<td style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"><?php echo $totalepezzi; ?></td>

<form method="POST" action=""  enctype="multipart/form-data"> 
<td style="color: <? echo $colorepp; ?>;" align="left" bgcolor="<? echo $colore; ?>">
  <input type="hidden" name="ingranaggio" value="16001" />             
             <input type="hidden" name="login" value="<?php echo $login; ?>" /> 
             <input type="hidden" name="catdapassare" value="<? echo $catassegnato; ?>" />            
             <button  type="submit" class="btn btn-warning" style="height: 30px; vertical-align: top;background: #afc81b;color: #ffffff;" >Elabora DDT</button>
            
             <input type="hidden" name="ingranaggio" value="16001" />             
             <input type="hidden" name="login" value="<?php echo $login; ?>" />  
             <input type="hidden" name="catdapassare" value="<? echo $catassegnato; ?>" />           
             <button  type="submit" class="btn btn-warning" style="height: 30px; vertical-align: top;background: #476b5d;color: #ffffff;" >Simula DDT</button>
<td colspan="1" style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"></td>  
</tr>
</form>
</table>
<? exit;  ?>           
<? } ?>








<br>
<? ######################################################  stampa DDT #################################### ?>
<? if($ingranaggio==16001){ ?>
<? $comodocat="";  $tot=0;?>

<?php 
#echo "cat ".$catdapassare;
$sqlx = "SELECT  a.*
FROM daspedire a where (a.ddt is null ) and (a.catassegnato != '')  and (spunta = 'on') and (segno is null) and (catassegnato = '$catdapassare')
ORDER BY a.cliente DESC";  
#echo $sql;
$rCountx = 1;
$resultx = $conn->query($sqlx);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc())	
	{
     $catassegnato= $macrogruppox["catassegnato"]; 
     $contatore= $macrogruppox["contatore"];
     $pl = $macrogruppox["pl"];
     $pldata = $macrogruppox["pldata"];
     $datarichiesta = $macrogruppox["datarichiesta"];
     $quantitads = $macrogruppox["quantita"];
     $articolods = $macrogruppox["articolo"];
     $progrart = $macrogruppox["progr"];
     $serialeds = $macrogruppox["seriale"];
     $spunta = $macrogruppox["spunta"];
     $segno = $macrogruppox["segno"];
     #echo "s ".$segno;
     $ticket = $macrogruppox["ticket"];
     $cliente = $macrogruppox["cliente"];
     if($segno=="on"){$spunta="";}
$sqlk = "SELECT *  FROM  tk where numero = '$ticket' ";  
#echo $sql;
$rCountk = 1;
$resultk = $conn->query($sqlk);
if ($resultk->num_rows > 0) {
  while($macrogruppok = $resultk->fetch_assoc())	
	{      
     $clientexx = $macrogruppok["cliente"];
     $commessaxx = $macrogruppok["commessa"];     
    }} 
    
$sqlxe = "SELECT *  FROM  clienti where  codice  = '$clientexx' " ;  
#echo $sql;
$rCounte = 1;
$resultxe = $conn->query($sqlxe);
if ($resultxe->num_rows > 0) {
  while($macrogruppoxe = $resultxe->fetch_assoc())	
	{   
     $ragsocclixx = $macrogruppoxe["ragsoc"];
     }}     
$sqlxj = "SELECT *  FROM  commesse where  commessa  = '$commessaxx' " ;  
#echo $sql;
$rCountj = 1;
$resultxj = $conn->query($sqlxj);
if ($resultxj->num_rows > 0) {
  while($macrogruppoxj = $resultxj->fetch_assoc())	
	{   
     $nomecommessaxx = $macrogruppoxj["nomecommessa"];
     }}      
    
    
        
$sql = "SELECT *  FROM  cat where codice = '$catassegnato' ";  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
$progrtt= $macrogruppo["id"];    
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
 }}
$sqlg = "SELECT *  FROM  articolo where codice = '$articolods' ";  
#echo $sql;
$rCountg = 1;
$resultg = $conn->query($sqlg);
if ($resultg->num_rows > 0) {
  while($macrogruppog = $resultg->fetch_assoc())	
	{ 
     $progr = $macrogruppog["progr"];
     $denominazione = $macrogruppog["denominazione"];
     $dataoperazione = $macrogruppog["dataoperazione"];
     $codiceart = $macrogruppog["codice"];
     $ncliente = $macrogruppog["ncliente"];
     $ncostruttore = $macrogruppog["ncostruttore"];
     $cliprop = $macrogruppog["cliprop"];
     #echo $cliprop;
     $tipo = $macrogruppog["tipo"];
     $gruppo= $macrogruppog["gruppo"];
     $marca = $macrogruppog["marca"];
     $modello = $macrogruppog["modello"];
     $volume = $macrogruppog["volume"];
     $peso = $macrogruppog["peso"];
     $note = $macrogruppog["note"]; }} 
########################  controllo per la rottura  ########################     
if($comodocat!=$cliente){ 
if($comodocat==""){  ?>
<tr>
<? #############################  i testazione DDT ######################## ?>
<center>
<img border="0" src="sacigroup.png" width="350" height="100">
<p align="right"><a href="stampadttnew.php?login=<?php echo $login; ?>&pass=<? echo $pass; ?>&noin=1&passott=<? echo $passott; ?>"><font face="Arial" size="1" color="#afadad">stampa</font></a></p>
<table  cellspacing="0" width="790">
<tr>		  
<td  bgcolor="#000000"  width="790"><p align="center"><font size="3" face="Arial" color="#FFFFFF"><b>DOCUMENTO DI TRASPORTO</b> </p>      </td>      
</tr>
</table>
<br>
<table style="border: none;" cellspacing="0" width="790px">
<tr style="border: none;">
<td style="border: none;" valign="top">
<table  style="border: 1px solid #000000;" cellspacing="0" width="390px">
<tr style="border: none;">
<td style="border: none;" align="left">
<p align="left"><font face="Arial" size="4" color="#000000">MITTENTE:</p><p align="center"><b>SACI GROUP S.r.L.</b><br></font><font face="Arial" size="2" color="#000000">
Via dei Castelli Romani, 52
00071 Pomezia (RM)<br>
C.F. 97556510150 - P.IVA 087231100964<br>
Tel. 06 86922029 - Email info@sacigroup.it <br>
www.sacigroup.it
<br> <br><br> </p>
</td>
</tr>
</table>
<br>
<table style="border: 1px solid #000000;"  cellspacing="0" width="390px">
<tr style="border: none;" valign="bottom">
<td <td style="border: none;">
<font face="Arial" size="2" color="#000000">CAUSALE DEL TRASPORTO:<BR>
<?echo "<p align='center'><b><br>"."CONSEGNA PER CONTO"."</b></p>"; ?>
</td>
</tr>
</table>
</td>
<td style="border: none;">
<table style="border: 1px solid #000000;"  cellspacing="0" width="390px" valign="top">
<tr <td style="border: none;" >
<td <td style="border: none;">
<font face="Arial" size="2" color="#000000">DOCUMENTO DI TRASPORTO<BR>
<br>
<? $oggi=date("d/m/Y"); 
$sql1 = "SELECT * FROM progressivoddt  where progr = '1' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $tesseraww = $macrogruppo["numero"];	 
			} }
$tesseraww++;
$sql = "UPDATE progressivoddt set 
numero = '$tesseraww'
where 
progr = '1' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 
?>
N.<? echo "<font face='Arial' size='5' color='#cc0000'><b>&nbsp;&nbsp; ".$tesseraww."</b></font>";?>   &nbsp;&nbsp;&nbsp;    DEL  <? echo $oggi."<br>"; ?>
<br>
<br>
</td>
</td>
</tr>
</table>
<br>
<table style="border: 1px solid #000000;"  cellspacing="0" width="390px">
<tr <td style="border: none;">
<td <td style="border: none;">
<font face="Arial" size="3" color="#000000">DESTINATARIO:<BR><br>

<?echo "<p align='center'>"."<b>Spett.le ".$ragsoc."</b>"; ?><br>
<?echo $via; ?><br>
<?echo $cap." - ".$citta." ".$prov; ?><br>
<?echo "C.F. ".$iva."</p>"; ?>
</td>
</tr>
</table>
</td>
</tr>
<tr style="border: none;">
<td colspan="2" style="border: none;">
<font face="Arial" size="2" color="#000000"><br>
</td>
<tr>
<tr style="border: none;">
<td colspan="2" style="border: 1;">
<font face="Arial" size="2" color="#000000">LUOGO DI DESTINAZIONE:<br>
 
 <?echo "<p align='center'><b>".$ragsoc." ".$via." ".$cap." - ".$citta." ".$prov."</b></p>"; ?>
 </td>
 </tr>
</table>
<br>
<table style="border: none;" cellspacing="0" width="790px">
<tr style="border: none;" >
<td style="border: none;">
</td>
</tr>
 </table>
<? ################################   fine intestazione   ####################### ?>
<table id="thetable"  cellspacing="0" width="790" class="table6x"> 
<td  bgcolor="#000000" align="center" width="10%"><font size="3" face="Arial" color="#FFFFFF"><b>PRG</b></td>  
<td  bgcolor="#000000" align="center" ><font size="3" face="Arial" color="#FFFFFF"><b>DESCRIZIONE DEI BENI</b></td>      
<td  bgcolor="#000000" align="center" width="10%"><font size="3" face="Arial" color="#FFFFFF"><b>QT</b></td>      
<td  bgcolor="#000000" align="center" width="10%"><font size="3" face="Arial" color="#FFFFFF"><b>COLLI</b></td>      
</td>
</tr>

<? $comodocat=$cliente; $totalepezzi=0;
} else { ?>
<table id="thetable"  cellspacing="10" width="790" class="table6x"> 
<tr class="first" style=" border: 0px solid black;">
<td style=" border: 1px solid black;" width="80%" align="left" bgcolor="<? echo $colore; ?>"><font size="2" face="Arial" color="#000000">TRASPORTO A MEZZO </font></td>
<td style=" border: 1px solid black;"  align="center" bgcolor="<? echo $colore; ?>"><font size="1" face="Arial" color="#000000">DATA RITIRO </font> </td>
</tr>
<tr class="first" style=" border: 0px solid black;" height="35">
<td style=" border: 1px solid black;" width="80%" align="left" bgcolor="<? echo $colore; ?>"><font size="1" face="Arial" color="#000000">O - Mittente&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          O - Vettore&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            O - Destinatario&nbsp;&nbsp;&nbsp;  </font></td>
<td style=" border: 1px solid black;"  align="center" bgcolor="<? echo $colore; ?>"></td>
</tr>
<tr height="35">
<td colspan="2" valign="top" style=" border: 1px solid black;" width="80%" align="left" bgcolor="<? echo $colore; ?>"><font size="1" face="Arial" color="#000000">VETTORE</font></td>
</tr>
<tr height="35">
<td colspan="2" valign="top" style=" border: 1px solid black;" width="80%" align="left" bgcolor="<? echo $colore; ?>"><font size="1" face="Arial" color="#000000">ANNOTAZIONI</font></td>
</tr>
<tr height="35">
<td colspan="2" valign="top" style=" border: 1px solid black;" width="80%" align="left" bgcolor="<? echo $colore; ?>"><font size="1" face="Arial" color="#000000">FIRMA MITTENTE</font></td>
</tr>
<tr height="35">
<td colspan="2" valign="top" style=" border: 1px solid black;" width="80%" align="left" bgcolor="<? echo $colore; ?>"><font size="1" face="Arial" color="#000000">FIRMA VETTORE</font></td>
</tr>
<tr height="35">
<td colspan="2" valign="top" style=" border: 1px solid black;" width="80%" align="left" bgcolor="<? echo $colore; ?>"><font size="1" face="Arial" color="#000000">FIRMA DESTINATARIO</font></td>
</tr>
</table>
<br><br> <? #########spazio pagina############ ?>
<img border="0" src="sacigroup.png" width="350" height="100">
<p align="right"><a href="stampadttnew.php?login=<?php echo $login; ?>&pass=<? echo $pass; ?>&noin=1&passott=<? echo $passott; ?>"><font face="Arial" size="1" color="#afadad">stampa</font></a></p>
<table  cellspacing="0" width="790">     
<tr>
<? #############################  i testazione DDT ######################## ?>

<center>
<img border="0" src="sacigroup.png" width="350" height="100">
<p align="right"><a href="stampadttnew.php?login=<?php echo $login; ?>&pass=<? echo $pass; ?>&noin=1&passott=<? echo $passott; ?>"><font face="Arial" size="1" color="#afadad">stampa</font></a></p>
<table  cellspacing="0" width="790">
<tr>		  
<td  bgcolor="#000000"  width="790"><p align="center"><font size="3" face="Arial" color="#FFFFFF"><b>DOCUMENTO DI TRASPORTO</b> </p>      </td>      
</tr>
</table>
<br>
<table style="border: none;" cellspacing="0" width="790px">
<tr style="border: none;">
<td style="border: none;" valign="top">
<table  style="border: 1px solid #000000;" cellspacing="0" width="390px">
<tr style="border: none;">
<td style="border: none;" align="left">
<p align="left"><font face="Arial" size="4" color="#000000">MITTENTE:</p><p align="center"><b>SACI GROUP S.r.L.</b><br></font><font face="Arial" size="2" color="#000000">
Via dei Castelli Romani, 52
00071 Pomezia (RM)<br>
C.F. 97556510150 - P.IVA 087231100964<br>
Tel. 06 86922029 - Email info@sacigroup.it <br>
www.sacigroup.it
<br> <br><br> </p>
</td>
</tr>
</table>
<br>
<table style="border: 1px solid #000000;"  cellspacing="0" width="390px">
<tr style="border: none;" valign="bottom">
<td <td style="border: none;">
<font face="Arial" size="2" color="#000000">CAUSALE DEL TRASPORTO:<BR>
<?echo "<p align='center'><b><br>"."CONSEGNA PER CONTO"."</b></p>"; ?>
</td>
</tr>
</table>
</td>
<td style="border: none;">
<table style="border: 1px solid #000000;"  cellspacing="0" width="390px" valign="top">
<tr <td style="border: none;" >
<td <td style="border: none;">
<font face="Arial" size="2" color="#000000">DOCUMENTO DI TRASPORTO<BR>
<br>
<? $oggi=date("d/m/Y"); 
$sql1 = "SELECT * FROM progressivoddt  where progr = '1' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $tesseraww = $macrogruppo["numero"];	 
			} }
$tesseraww++;
$sql = "UPDATE progressivoddt set 
numero = '$tesseraww'
where 
progr = '1' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 
?>
N.<? echo "<font face='Arial' size='5' color='#cc0000'><b>&nbsp;&nbsp; ".$tesseraww."</b></font>";?>   &nbsp;&nbsp;&nbsp;    DEL  <? echo $oggi."<br>"; ?>
<br>
<br>
</td>
</td>
</tr>
</table>
<br>
<table style="border: 1px solid #000000;"  cellspacing="0" width="390px">
<tr <td style="border: none;">
<td <td style="border: none;">
<font face="Arial" size="3" color="#000000">DESTINATARIO:<BR><br>

<?echo "<p align='center'>"."<b>Spett.le ".$ragsoc."</b>"; ?><br>
<?echo $via; ?><br>
<?echo $cap." - ".$citta." ".$prov; ?><br>
<?echo "C.F. ".$iva."</p>"; ?>
</td>
</tr>
</table>
</td>
</tr>
<tr style="border: none;">
<td colspan="2" style="border: none;">
<font face="Arial" size="2" color="#000000"><br>
</td>
<tr>
<tr style="border: none;">
<td colspan="2" style="border: 1;">
<font face="Arial" size="2" color="#000000">LUOGO DI DESTINAZIONE:<br>
 
 <?echo "<p align='center'><b>".$ragsoc." ".$via." ".$cap." - ".$citta." ".$prov."</b></p>"; ?>
 </td>
 </tr>
</table>
<br>
<table style="border: none;" cellspacing="0" width="790px">
<tr style="border: none;" >
<td style="border: none;">
</td>
</tr>
 </table>
<? ################################   fine intestazione   ####################### ?>
<table id="thetable"  cellspacing="0" width="790" class="table6x"> 
<td  bgcolor="#000000" align="center" width="10%"><font size="3" face="Arial" color="#FFFFFF"><b>PRG</b></td>  
<td  bgcolor="#000000" align="center" ><font size="3" face="Arial" color="#FFFFFF"><b>DESCRIZIONE DEI BENI</b></td>      
<td  bgcolor="#000000" align="center" width="10%"><font size="3" face="Arial" color="#FFFFFF"><b>QT</b></td>      
<td  bgcolor="#000000" align="center" width="10%"><font size="3" face="Arial" color="#FFFFFF"><b>COLLI</b></td>      
</td>
</tr>

<? $comodocat=$cliente; $totalepezzi=0;} }

########################### stampa dettaglio ######################################### ?>


   
<?

$tot++; 
?>
      

	<tr class="first" style=" border: 1px solid black;"> 

  
      <td style=" border: 1px solid black;" width="10%" align="center" bgcolor="<? echo $colore; ?>"><font size="3" face="Arial"><b><?php echo $tot; ?></td>
      <td style=" border: 1px solid black;" align="left" bgcolor="<? echo $colore; ?>"><font size="3" face="Arial"><b><?php echo $articolods." ".$denominazione." Seriale: ".$serialeds; ?></td>
      <td style=" border: 1px solid black;" width="10%" align="center" bgcolor="<? echo $colore; ?>"><font size="3" face="Arial"><b><?php echo $quantitads; ?></td>            
      <td style=" border: 1px solid black;" width="10%"align="center" bgcolor="<? echo $colore; ?>"><font size="3" face="Arial"><b><?php echo $collix; ?></td>
<? $totalepezzi=$totalepezzi+$quantitads; 
$sql = "UPDATE daspedire set                                   
  ddt='$tesseraww',
  ddtdata='$oggi'
where 
progr = '$progrart' ";
#echo $sql; exit;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; }
?>    
    </tr>	
    




 
	  
   	     
<?php          
}
}  ?>

<?
$tot++;    
for ($i = $tot; $i <= 15; $i++) { ?>
<tr class="first" style=" border: 0px solid black;">
      <td style=" border: 1px solid black;" width="10%" align="center" bgcolor="<? echo $colore; ?>"><font size="3" face="Arial"><b><?php echo $i; ?></td>
      <td style=" border: 1px solid black;" align="left" bgcolor="<? echo $colore; ?>"><font size="3" face="Arial"><b><?php echo " "; ?></td>
      <td style=" border: 1px solid black;" width="10%" align="center" bgcolor="<? echo $colore; ?>"><font size="3" face="Arial"><b><?php echo " "; ?></td>            
      <td style=" border: 1px solid black;" width="10%"align="center" bgcolor="<? echo $colore; ?>"><font size="3" face="Arial"><b><?php echo " "; ?></td>    
    </tr>	
<?} ?>
<tr class="first" style=" border: 0px solid black;">
      <td style=" border: 1px solid black;" width="10%" align="center" bgcolor="<? echo $colore; ?>"><font size="3" face="Arial"><b><?php echo " "; ?></td>
      <td style=" border: 1px solid black;" align="right" bgcolor="<? echo $colore; ?>"><font size="3" face="Arial"><b><?php echo "TOTALE "; ?></td>
      <td style=" border: 1px solid black;" width="10%" align="center" bgcolor="<? echo $colore; ?>"><font size="3" face="Arial"><b><?php echo $totalepezzi; ?></td>            
      <td style=" border: 1px solid black;" width="10%"align="center" bgcolor="<? echo $colore; ?>"><font size="3" face="Arial"><b><?php echo $totcolli; ?></td>    
    </tr>
</table> 

<table id="thetable"  cellspacing="10" width="790" class="table6x"> 
<tr class="first" style=" border: 0px solid black;">
<td style=" border: 1px solid black;" width="80%" align="left" bgcolor="<? echo $colore; ?>"><font size="2" face="Arial" color="#000000">TRASPORTO A MEZZO </font></td>
<td style=" border: 1px solid black;"  align="center" bgcolor="<? echo $colore; ?>"><font size="1" face="Arial" color="#000000">DATA RITIRO </font> </td>
</tr>
<tr class="first" style=" border: 0px solid black;" height="35">
<td style=" border: 1px solid black;" width="80%" align="left" bgcolor="<? echo $colore; ?>"><font size="1" face="Arial" color="#000000">O - Mittente&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          O - Vettore&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            O - Destinatario&nbsp;&nbsp;&nbsp;  </font></td>
<td style=" border: 1px solid black;"  align="center" bgcolor="<? echo $colore; ?>"></td>
</tr>
<tr height="35">
<td colspan="2" valign="top" style=" border: 1px solid black;" width="80%" align="left" bgcolor="<? echo $colore; ?>"><font size="1" face="Arial" color="#000000">VETTORE</font></td>
</tr>
<tr height="35">
<td colspan="2" valign="top" style=" border: 1px solid black;" width="80%" align="left" bgcolor="<? echo $colore; ?>"><font size="1" face="Arial" color="#000000">ANNOTAZIONI</font></td>
</tr>
<tr height="35">
<td colspan="2" valign="top" style=" border: 1px solid black;" width="80%" align="left" bgcolor="<? echo $colore; ?>"><font size="1" face="Arial" color="#000000">FIRMA MITTENTE</font></td>
</tr>
<tr height="35">
<td colspan="2" valign="top" style=" border: 1px solid black;" width="80%" align="left" bgcolor="<? echo $colore; ?>"><font size="1" face="Arial" color="#000000">FIRMA VETTORE</font></td>
</tr>
<tr height="35">
<td colspan="2" valign="top" style=" border: 1px solid black;" width="80%" align="left" bgcolor="<? echo $colore; ?>"><font size="1" face="Arial" color="#000000">FIRMA DESTINATARIO</font></td>
</tr>
</table>     
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>            
<? } ?>
<? exit; ?>






















<? if($ingranaggio==11){  
$progressivo=0;
$sql = "SELECT *  FROM  cat where codice = '$codicelavoro' ";  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
$progrtt= $macrogruppo["id"];    
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


$sql1 = "SELECT * FROM assegnato  where numero = '$numero' and ko = 'ok' order by dataassegno";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $ragsoc = $macrogruppo["ragsoc"];	
        $prograssegnato = $macrogruppo["id"];
        #echo "id ".$prograssegnato;
        $dataassegno = $macrogruppo["dataassegno"];
        $indirizzon = $macrogruppo["indirizzo"];
        $cittan = $macrogruppo["citta"];
        $provincian = $macrogruppo["provincia"];
        
        $capn = $macrogruppo["cap"];
        $comodo=explode(" ",$dataassegno);
        $comododata=$comodo[0];
        $comododatax=explode("-",$comododata);
        $dataassegnox=$comododatax[2]."/".$comododatax[1]."/".$comododatax[0];
        $dataassegno=$dataassegnox." ".$comodo[1];
        
        #echo "data ".$dataassegno;
        $swce=1;
        $comodo=explode(" - ",$ragsoc);
        $codicetp=$comodo[0]; 
}}



 }}

?>
<h3><font style=" color: #cc0000;">SPEDIZIONI DA EFFETTUARE</font></h3>
<table class="table-form" style="width:50%;">
<tr>
<td>
<label>N° PL:</label><br>
<font style="color: #136b05;font-size: 26px;"><b><?php echo $plcomodo; ?></b></font>

</td>
</tr>
<tr>
<td>
<label>Data Richiesta:</label><br>
<font style="color: #136b05;font-size: 18px;"><b><?php echo $pldatacomodo; ?></b></font>

</td>
</tr>
</table>
<br>
<h3><font style=" color: #cc0000;">DESTINATARIO</font></h3>
<table class="table-form" style="width:50%;">
<tr>
<td>
<label>Codice:</label><br>
<font  style="color: #cc0000;font-size: 22px;"> <?php echo $codicelavoro; ?></font>
</td>
</tr>
<tr>
<td>
<label>Ragione Socilale:</label><br>
<font style="color: #cc0000;font-size: 22px;"><?php echo $ragsoc; ?></font>
</td>
</tr>
<tr>
<td>
<label>Indirizzo:</label><br>
<font style="color: #cc0000;font-size: 22px;"><?php echo $via; ?></font>
</td>
</tr>
<tr>
<td>
<label>Città:</label><br>
<font style="color: #cc0000;font-size: 22px;"><?php echo $cap." ".$citta; ?></font>
</td>
</tr>
<tr>
<td>
<label>Regione:</label><br>
<font style="color: #cc0000;font-size: 22px;"><?php echo $regione; ?></font>
</td>
</tr>
</table>

<br>
<h3><font style=" color: #cc0000;">ARTICOLI</font></h3>
<table class="table-form" style="width:95%;">

<tr>

<? 
$sqlx = "SELECT  *
FROM daspedire  where  catassegnato = '$codicelavoro'
ORDER BY articolo DESC";  
#echo $sqlx;
$rCountx = 1;
$resultx = $conn->query($sqlx);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc())	
	{
     $catassegnato= $macrogruppox["catassegnato"]; 
     $ticket= $macrogruppox["ticket"]; 
     $seriale= $macrogruppox["seriale"]; 
     $quantita= $macrogruppox["quantita"];
     $articolo= $macrogruppox["articolo"];
     $progrart= $macrogruppox["progr"];
     #echo "pr ".$progrart;
$sql = "SELECT *  FROM  cat where codice = '$catassegnato' ";  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
$progrtt= $macrogruppo["id"];    
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
 }}
$sqlg = "SELECT *  FROM  articolo where codice = '$articolo' ";  
#echo $sql;
$rCountg = 1;
$resultg = $conn->query($sqlg);
if ($resultg->num_rows > 0) {
  while($macrogruppog = $resultg->fetch_assoc())	
	{ 
     $progr = $macrogruppog["progr"];
     $denominazione = $macrogruppog["denominazione"];
     $dataoperazione = $macrogruppog["dataoperazione"];
     $codice = $macrogruppog["codice"];
     $ncliente = $macrogruppog["ncliente"];
     $ncostruttore = $macrogruppog["ncostruttore"];
     $cliprop = $macrogruppog["cliprop"];
     #echo $cliprop;
     $tipo = $macrogruppog["tipo"];
     $gruppo= $macrogruppog["gruppo"];
     $marca = $macrogruppog["marca"];
     $modello = $macrogruppog["modello"];
     $volume = $macrogruppog["volume"];
     $peso = $macrogruppog["peso"];
     $note = $macrogruppog["note"]; }} 
$sqlh = "SELECT *  FROM  tk where numero = '$ticket' " ;  
#$sql = "SELECT *  FROM  tk   where numero = '1380' order by numero " ; 
#echo $sql;
$rCounth = 1;
$resulth = $conn->query($sqlh);
if ($resulth->num_rows > 0) {
  while($macrogruppoh = $resulth->fetch_assoc())	
	{ 
    $datainizioxx = $macrogruppoh["datainizio"];
    $inizio=substr($datainizioxx, 0, 10);
    #echo "nn".$inizio; exit;
    $comodo=explode("/",$inizio);
    $inizio=$comodo[2]."/".$comodo[1]."/".$comodo[0];
    $comodo=explode("/",$dadata);
    $dadatax=$comodo[2]."/".$comodo[1]."/".$comodo[0];
    $comodo=explode("/",$adata);
    $adatax=$comodo[2]."/".$comodo[1]."/".$comodo[0];
    #echo $inizio.$dadatax.$adatax."<br>";
     $serialexx = $macrogruppoh["seriale"];
     $numeroxx = $macrogruppoh["numero"];
     $clientexx = $macrogruppoh["cliente"];
     $commessaxx = $macrogruppoh["commessa"];
     $attivitaxx = $macrogruppoh["attivita"];     
     $tipointerventoxx = $macrogruppoh["tipointervento"];
     $apparatoxx = $macrogruppoh["apparato"];
     $statoxx = $macrogruppoh["stato"];
     $priorita = $macrogruppoh["priorita"];
     $ticketcli = $macrogruppoh["ticketcli"];
     $aggiornamento = $macrogruppoh["aggiornamento"]; }}     
$progressivo++;  ?>
<td valign="top">
<label>Progr.</label><br>
<p ><font  style="color: #cc0000;font-size: 18px;"><?php echo $progressivo; ?></font></p>
</td>
<td valign="top">
<label>Ticket</label><br>
<font style="color: #cc0000;font-size: 18px;"><?php echo $ticket; ?></font>
</td>
<td valign="top">
<label>Quantità</label><br>
<font style="color: #cc0000;font-size: 18px;"><?php echo $quantita; ?></font>
</td>
<td valign="top">
<label>Codice Art.</label><br>
<font style="color: #cc0000;font-size: 18px;"><?php echo $articolo; ?></font> 
</td>
<td valign="top">
<label>Denominazione Art.</label><br>
<font style="color: #cc0000;font-size: 18px;"><?php echo $denominazione; ?></font>
</td>
<td valign="top">
<label>Commessa</label><br>
<font style="color: #cc0000;font-size: 18px;"><?php echo $commessaxx; ?></font>
</td>
 <td valign="top">

<? if($tipo=="Serializzato"){ ?>
<label>Seriale</label><br>
<form method="POST" action=""  enctype="multipart/form-data"> 
<input class="required" type="text" value="<? echo $seriale; ?>" name="serialenew"  maxlength="60" size="10" >

             <input type="hidden" name="codicelavoro" value="<?php echo $codicelavoro; ?>" />   
             <input type="hidden" name="ingranaggio" value="11" />
             <input type="hidden" name="ingranaggioseriale" value="1" />
             <input type="hidden" name="login" value="<?php echo $login; ?>" />
             <input type="hidden" name="plcomodo" value="<? echo $plcomodo; ?>" />
             <input type="hidden" name="pldatacomodo" value="<? echo $pldatacomodo; ?>;" />
             <input type="hidden" name="progrart" value="<? echo $progrart; ?>" />
             <button  type="submit" class="btn btn-warning">Memorizza Seriale</button>

</form>
<? } ?>
</td>
</tr>
<? }} ?>
</table>
<br>
<h3><font style=" color: #cc0000;">DETTAGLIO SPEDIZIONE</font></h3>
<?
$sqlx = "SELECT  *  FROM preddt  where  pl = '$plcomodo' ";  
#echo $sqlx;
$rCountx = 1;
$resultx = $conn->query($sqlx);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc())	
	{
     $corriere= $macrogruppox["corriere"];
     $tipoimballo= $macrogruppox["tipoimballo"];
$qty= $macrogruppox["qty"];
$lung= $macrogruppox["lung"];
$larg= $macrogruppox["larg"];
$alt= $macrogruppox["alt"];
$peso= $macrogruppox["peso"];
$corriere= $macrogruppox["peso"];
$causale= $macrogruppox["causale"];
$assicurazione= $macrogruppox["assicurazione"]; 
    }}
?>
 <form method="POST" action=""  enctype="multipart/form-data">
<table class="table-form" style="width:50%;">
<tr>
<td>
<label>N° Corriere:</label><br>
<input class="required" type="text" name="corriere" value="<? echo $corriere; ?>" maxlength="200" size="30" >
</td>
</tr>
<tr>
<td>
<label>Data Tipo Imballo:</label><br>
<input class="required" type="text" name="tipoimballo"  value="<? echo $tipoimballo; ?>"  maxlength="200" size="30" >
</td>
</tr>
<tr>
<td>
<label>Qty:</label><br>
<input class="required" type="text" name="qty" value="<? echo $qty; ?>"   maxlength="200" size="30" >
</td>
</tr>
<tr>
<td>
<label>Lung. cm:</label><br>
<input class="required" type="text" name="lung"  value="<? echo $lung; ?>"  maxlength="200" size="30" >
</td>
</tr>
<tr>
<td>
<label>Larg. cm:</label><br>
<input class="required" type="text" name="larg"  value="<? echo $larg; ?>"  maxlength="200" size="30" >
</td>
</tr>
<tr>
<td>
<label>Alt. cm:</label><br>
<input class="required" type="text" name="alt"  value="<? echo $alt; ?>"  maxlength="200" size="30" >
</td>
</tr>
<tr>
<td>
<label>Peso Totale Kg:</label><br>
<input class="required" type="text" name="peso"  value="<? echo $peso; ?>"  maxlength="200" size="30" >
</td>
</tr>
<tr>
<td>
<label>Contenuto:</label><br>
<input class="required" type="text" name="contenuto"  value="<? echo $contenuto; ?>"  maxlength="200" size="30 >
</td>
</tr>
<tr>
<td>
<label>Causale:</label><br>
<input class="required" type="text" name="causale"  value="<? echo $causale; ?>"  maxlength="200" size=30" >
</td>
</tr>
<tr>
<td>
<label>Assicurazione</label><br>
<input class="required" type="text" name="assicurazione"  value="<? echo $assicurazione; ?>"  maxlength="200" size=30" >
</td>
</tr>

</table>
<br>
<table class="table-form" style="width:50%;">
<tr>
<td >
<div align="center">
 
<input type="hidden" name="codicelavoro" value="<?php echo $codicelavoro; ?>" />   
             <input type="hidden" name="ingranaggio" value="11" />
             <input type="hidden" name="ingranaggiodocumento" value="1" />
             <input type="hidden" name="login" value="<?php echo $login; ?>" />
             <input type="hidden" name="plcomodo" value="<? echo $plcomodo; ?>" />
             <input type="hidden" name="pldatacomodo" value="<? echo $pldatacomodo; ?>;" />
             <input type="hidden" name="progrart" value="<? echo $progrart; ?>" />
             
             <button  type="submit" class="btn btn-warning">Memorizza Documento</button>
</form> 
</div>
</td> 
<form method="POST" action=""  enctype="multipart/form-data"> 
<td >
<div align="center">

<input type="hidden" name="codicelavoro" value="<?php echo $codicelavoro; ?>" />   
             <input type="hidden" name="ingranaggio" value="11" />
             <input type="hidden" name="ingranaggioseriale" value="1" />
             <input type="hidden" name="login" value="<?php echo $login; ?>" />
             <input type="hidden" name="plcomodo" value="<? echo $plcomodo; ?>" />
             <input type="hidden" name="pldatacomodo" value="<? echo $pldatacomodo; ?>;" />
             <input type="hidden" name="progrart" value="<? echo $progrart; ?>" />
             <button style="background: #cc0000;  color: #ffffff;" type="submit" class="btn btn-warning">Produci DDT</button>
</form>
</div> 
</td>           
</tr>
</table>
<? } ?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


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


function totalq(){
  console.log("ATTIVO TOTAL Q")
  var tot0q = 0 + Number($("#da1a301q").val()) 
    $("#tot-somma0q").html(tot0q);
  var tot1q = 0 + Number($("#da1a301q").val()) 
    + Number($("#da31a601q").val()) 
    $("#tot-somma1q").html(tot1q);
  var tot2q = 0 + Number($("#da1a301q").val()) 
    + Number($("#da31a601q").val()) 
    + Number($("#da61a901q").val())
    $("#tot-somma2q").html(tot2q);  
  var tot3q = 0 + Number($("#da1a301q").val()) 
    + Number($("#da31a601q").val()) 
    + Number($("#da61a901q").val())
    + Number($("#da91a1201q").val())
    $("#tot-somma3q").html(tot3q);  
   var tot4q = 0 + Number($("#da1a301q").val()) 
    + Number($("#da31a601q").val()) 
    + Number($("#da61a901q").val())
    + Number($("#da91a1201q").val())
    + Number($("#da121a1501q").val())
    $("#tot-somma4q").html(tot4q);  
    var tot5q = 0 + Number($("#da1a301q").val()) 
    + Number($("#da31a601q").val()) 
    + Number($("#da61a901q").val())
    + Number($("#da91a1201q").val())
    + Number($("#da121a1501q").val())
    + Number($("#da151a1801q").val())
    $("#tot-somma5q").html(tot5q);
     var tot6q = 0 + Number($("#da1a301q").val()) 
    + Number($("#da31a601q").val()) 
    + Number($("#da61a901q").val())
    + Number($("#da91a1201q").val())
    + Number($("#da121a1501q").val())
    + Number($("#da151a1801q").val())
    + Number($("#da181a2101q").val())
    $("#tot-somma6q").html(tot6q);
     var tot7q = 0 + Number($("#da1a301q").val()) 
    + Number($("#da31a601q").val()) 
    + Number($("#da61a901q").val())
    + Number($("#da91a1201q").val())
    + Number($("#da121a1501q").val())
    + Number($("#da151a1801q").val())
    + Number($("#da181a2101q").val())
    + Number($("#da211a2401q").val()) 
    $("#tot-somma7q").html(tot7q);
     var tot8q = 0 + Number($("#da1a301q").val()) 
    + Number($("#da31a601q").val()) 
    + Number($("#da61a901q").val())
    + Number($("#da91a1201q").val())
    + Number($("#da121a1501q").val())
    + Number($("#da151a1801q").val())
    + Number($("#da181a2101q").val())
    + Number($("#da211a2401q").val())
    + Number($("#da241a2701q").val()) 
    $("#tot-somma8q").html(tot8q);
     var tot9q = 0 + Number($("#da1a301q").val()) 
    + Number($("#da31a601q").val()) 
    + Number($("#da61a901q").val())
    + Number($("#da91a1201q").val())
    + Number($("#da121a1501q").val())
    + Number($("#da151a1801q").val())
    + Number($("#da181a2101q").val())
    + Number($("#da211a2401q").val())
    + Number($("#da241a2701q").val()) 
    + Number($("#da271a3001q").val()) 
    $("#tot-somma9q").html(tot9q);
    var tot10q = 0 + Number($("#da1a301q").val()) 
    + Number($("#da31a601q").val()) 
    + Number($("#da61a901q").val())
    + Number($("#da91a1201q").val())
    + Number($("#da121a1501q").val())
    + Number($("#da151a1801q").val())
    + Number($("#da181a2101q").val())
    + Number($("#da211a2401q").val())
    + Number($("#da241a2701q").val()) 
    + Number($("#da271a3001q").val()) 
    + Number($("#da301a3301q").val())
    $("#tot-somma10q").html(tot10q);
    var tot11q = 0 + Number($("#da1a301q").val()) 
    + Number($("#da31a601q").val()) 
    + Number($("#da61a901q").val())
    + Number($("#da91a1201q").val())
    + Number($("#da121a1501q").val())
    + Number($("#da151a1801q").val())
    + Number($("#da181a2101q").val())
    + Number($("#da211a2401q").val())
    + Number($("#da241a2701q").val()) 
    + Number($("#da271a3001q").val()) 
    + Number($("#da301a3301q").val())
    + Number($("#da331a3601q").val())
    $("#tot-somma11q").html(tot11q);
    var tot12q = 0 + Number($("#da1a301q").val()) 
    + Number($("#da31a601q").val()) 
    + Number($("#da61a901q").val())
    + Number($("#da91a1201q").val())
    + Number($("#da121a1501q").val())
    + Number($("#da151a1801q").val())
    + Number($("#da181a2101q").val())
    + Number($("#da211a2401q").val())
    + Number($("#da241a2701q").val()) 
    + Number($("#da271a3001q").val()) 
    + Number($("#da301a3301q").val())
    + Number($("#da331a3601q").val())
    + Number($("#da361a3901q").val()) 
    $("#tot-somma12q").html(tot12q);
    var tot13q = 0 + Number($("#da1a301q").val()) 
    + Number($("#da31a601q").val()) 
    + Number($("#da61a901q").val())
    + Number($("#da91a1201q").val())
    + Number($("#da121a1501q").val())
    + Number($("#da151a1801q").val())
    + Number($("#da181a2101q").val())
    + Number($("#da211a2401q").val())
    + Number($("#da241a2701q").val()) 
    + Number($("#da271a3001q").val()) 
    + Number($("#da301a3301q").val())
    + Number($("#da331a3601q").val())
    + Number($("#da361a3901q").val())
    + Number($("#da391a4201q").val()) 
    $("#tot-somma13q").html(tot13q);
    var tot14q = 0 + Number($("#da1a301q").val()) 
    + Number($("#da31a601q").val()) 
    + Number($("#da61a901q").val())
    + Number($("#da91a1201q").val())
    + Number($("#da121a1501q").val())
    + Number($("#da151a1801q").val())
    + Number($("#da181a2101q").val())
    + Number($("#da211a2401q").val())
    + Number($("#da241a2701q").val()) 
    + Number($("#da271a3001q").val()) 
    + Number($("#da301a3301q").val())
    + Number($("#da331a3601q").val())
    + Number($("#da361a3901q").val())
    + Number($("#da391a4201q").val()) 
    + Number($("#da421a4501q").val())
    $("#tot-somma14q").html(tot14q);
    var tot15q = 0 + Number($("#da1a301q").val()) 
    + Number($("#da31a601q").val()) 
    + Number($("#da61a901q").val())
    + Number($("#da91a1201q").val())
    + Number($("#da121a1501q").val())
    + Number($("#da151a1801q").val())
    + Number($("#da181a2101q").val())
    + Number($("#da211a2401q").val())
    + Number($("#da241a2701q").val()) 
    + Number($("#da271a3001q").val()) 
    + Number($("#da301a3301q").val())
    + Number($("#da331a3601q").val())
    + Number($("#da361a3901q").val())
    + Number($("#da391a4201q").val()) 
    + Number($("#da421a4501q").val())
    + Number($("#da451a4801q").val());
    $("#tot-somma15q").html(tot15q); 
      
  var totq = 0 + Number($("#da1a301q").val()) 
    + Number($("#da31a601q").val()) 
    + Number($("#da61a901q").val())
    + Number($("#da91a1201").val()) 
    + Number($("#da121a1501q").val()) 
    + Number($("#da151a1801q").val())
    + Number($("#da181a2101q").val()) 
    + Number($("#da211a2401q").val()) 
    + Number($("#da241a2701q").val())
    + Number($("#da271a3001q").val()) 
    + Number($("#da301a3301q").val())
    + Number($("#da331a3601q").val())
    + Number($("#da361a3901q").val()) 
    + Number($("#da391a4201q").val()) 
    + Number($("#da421a4501q").val())
    + Number($("#da451a4801q").val());
     console.log(totq);

  $("#tot-sommaq").html(totq);
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

function callTotal(){
   totalq();
    totalt();
    total();
};
</script>
</body>

</html>