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
$catscelto=$_REQUEST["catscelto"];
$login=$_REQUEST["login"];
$numero=$_REQUEST["codice"];
#echo "num ".$numero;
$adate=$_REQUEST["adata"];

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
    {$errore=" Modificato Correttamente "; } 
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
$login = $macrogruppo["login"];
$aggiornamento = $macrogruppo["aggiornamento"];
$priorita = $macrogruppo["priorita"];
$stato = $macrogruppo["stato"];
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
      <label >Note interne:</label style="color: #8e8b8b;">
    </th>
  </tr>
  <tr> 
    <td colspan="3"> 
      <label style="color: #8e8b8b;"<b>Note:</label style="color: #8e8b8b;"><br>
      <span><?php echo $nota; ?></span>
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
    <div class="tab-navigation" style="width:85%; margin:auto;">
      <ul class="nav nav-tabs">
    <?php if($ingranaggio==6){ ?>  
    <br>
    <li class="nav-item">
      <a class="nav-link <? if($ingranaggioy==20){echo "active"; } ?>" href="lavoraticket.php?login=<? echo $login; ?>&codice=<?php echo $numero; ?>&ingranaggioy=20" title="Modifica ticket">
      <i class="fa-solid fa-pen"></i> Modifica Ticket
      </a>
    </li>  
    <li class="nav-item">
      <a class="nav-link <? if($ingranaggioy==10){echo "active";} ?>" href="lavoraticket.php?login=<? echo $login; ?>&codice=<?php echo $numero; ?>&ingranaggioy=10" title="Assegna<ione">
      <span>
      <i class="fa-regular fa-square-plus"></i>  Assegnazione 
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <? if($ingranaggioxx==2){echo "active";} ?>" href="stage.php?login=<? echo $login; ?>&ingranaggioz=O&ingranaggioxx=2&ingranaggio=6" title="Pianifica Intervento"><span>
      Pianifica Intervento <i class="fa-solid fa-earth-americas"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <? if($ingranaggioxx==3){echo "active";} ?>" href="stage.php?login=<? echo $login; ?>&ingranaggioz=P&ingranaggioxx=3&ingranaggio=6" title="Documentazione">
      <i class="fa-solid fa-book"></i> Documentazione 
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <? if($ingranaggioy==30){echo "active";} ?>" href="lavoraticket.php?login=<? echo $login; ?>&codice=<?php echo $numero; ?>&ingranaggioy=30" title="Chiudi Ticket">
      <i class="fa-solid fa-folder-closed"></i> Chiusura Ticket 
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <? if($ingranaggioxx==3){echo "active";} ?>" href="stage.php?login=<? echo $login; ?>&ingranaggioz=P&ingranaggioxx=3&ingranaggio=6" title="SLA">
      <i class="fa-solid fa-shield-halved"></i> SLA 
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <? if($ingranaggioxx==4){echo "active";} ?>" href="stage.php?login=<? echo $login; ?>&ingranaggioz=Q&ingranaggioxx=4&ingranaggio=6" title="Storia">
      <i class="fa-regular fa-hard-drive"></i>  Storia 
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
<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data"> 
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
          Note Interne:
        </th>
    </tr>
    <tr>
        <td colspan="3" height="70"> 
          <label style="color: #8e8b8b;">Note:</label><br>
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
        <label style="color: #8e8b8b;">Data Ora:</label><br>
        <input type="text" name="dataapp" value="<?php echo $dataapp; ?>" maxlength="50" size="20">
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
      <label >Note interne:</label style="color: #8e8b8b;">
    </th>
  </tr>
  <tr> 
    <td colspan="3"> 
      <label style="color: #8e8b8b;"<b>Note:</label style="color: #8e8b8b;"><br>
      <span><?php echo $nota; ?></span>
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
<form method="POST" action="" name="modulo" enctype="multipart/form-data">
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
<form method="POST" action="" name="modulo"  enctype="multipart/form-data">
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
<form method="POST" action="" name="modulo"  enctype="multipart/form-data">    
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

$girox++;
$tabellax[$girox]="],"; 

if ($giro!=0) {
 ?> 
<center>
<iframe  align="right" frameborder="0" width="80%" height="180%"  src="multiplo.php?origine=<?php echo $origine; ?>&giro=<? echo $giro; ?>&tabella=<?  echo base64_encode(serialize($tabella)); ?>&tabellax=<? echo base64_encode(serialize($tabellax)); ?>&girox=<? echo $girox; ?>"></iframe> 
</center>  
</div>   
<?php }}  ?>
<?php }  ?>    
     





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
</body>
</html