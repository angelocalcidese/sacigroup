<?php
session_start(); if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){ $larg= $_SESSION['screen_width'] ; $alt= $_SESSION['screen_height']; } else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) { $_SESSION['screen_width'] = $_REQUEST['width']; $_SESSION['screen_height'] = $_REQUEST['height']; header('Location: ' . $_SERVER['PHP_SELF']); } else { echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width+"&height="+screen.height;</script>'; } 

include "conf_DB.php";
$ingranaggio=$_REQUEST["ingranaggio"];
$ingranaggioy=$_REQUEST["ingranaggioy"];
$ingranaggiott=$_REQUEST["ingranaggiott"];
$ingranaggiohh=$_REQUEST["ingranaggiohh"];
$ingranaggiosel=$_REQUEST["ingranaggiosel"];
$ingranaggiomappa=$_REQUEST["ingranaggiomappa"];
$assegnaselezionati=$_REQUEST["assegnaselezionati"];
#echo "sel ".$ingranaggiosel;
$ingranaggioabb=$_REQUEST["ingranaggioabb"];
$ingranaggiobb=$_REQUEST["ingranaggiobb"];
#echo "bb ".$ingranaggiobb;
$ingranaggioscrivi=$_REQUEST["ingranaggioscrivi"];
#echo "scrivi ".$ingranaggioscrivi;
$login=$_REQUEST["login"];
#echo "log ".$login;  
$dadata=$_REQUEST["dadata"];
$adate=$_REQUEST["adata"];
$catscelto=$_REQUEST["catscelto"];
$catcodice=$_REQUEST["catcodice"];
$cittamappa=$_REQUEST["cittamappa"];
$viamappa=$_REQUEST["viamappa"];
$ragsocmappa=$_REQUEST["ragsocmappa"];
if($ingranaggioscrivi=="A"){
$adesso=date("Y-m-d H:m:s"); 

$sql = "SELECT *  FROM  tk   order by numero " ;  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
    $numerotk = $macrogruppo["numero"];
$ce=0;    
$sqlyy = "SELECT *  FROM  selezionati where  numero  = '$numerotk' and login = '$login' " ;  
#  echo $sql;
  $rCount = 1;
  $resultyy = $conn->query($sqlyy);
  if ($resultyy->num_rows > 0) {
      while($macrogruppoyy = $resultyy->fetch_assoc())
		{  $ce=1; } } 
if($ce==1){
#echo "passo";
    
$sqlll = "UPDATE assegnato set 
        ko = 'ko'
        where 
        numero = '$numerotk' 
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
              '$numerotk',
              '$adesso', 
              '$catcomposto',
              '$login'
              )";
#echo $sqlr."<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; exit;
  if ($conn->query($sqlr) === TRUE) { }  else { echo $sqlr."Errore inserimento recoerd: " . $conn->error; } 
$sqlrt = "SELECT *  FROM  tk where  numero  = '$numerotk' " ;  
#  echo $sql."<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; exit;
  $rCount = 1;
  $resultrt = $conn->query($sqlrt);
  if ($resultrt->num_rows > 0) {
    while($macrogrupport = $resultrt->fetch_assoc())	
    { $statoww = $macrogrupport["stato"]; }} 
#echo $statoww."<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; exit;    
    
if($statoww=="Aperto"){   
$sqlll = "UPDATE tk set 
        stato = 'Assegnato'
        where 
        numero = '$numerotk' 
        ";
#echo $sqlll."<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; exit;        
        if ($conn->query($sqlll) === TRUE) { } else { echo "Error inserted record: " . $conn->error; } 
$sql = "DELETE FROM `selezionati` where numero  = '$numerotk' and login = '$login' ";
  #echo $sql; 
if ($conn->query($sql) === TRUE)
        {  } else { echo $sql."Errore inserimento recoerd: " . $conn->error; }         
$ingranaggioscrivi="";        
}  } }  }  }







?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>nuovo cat</title>
																
<?php include("risorsePrincipali.php"); ?>

<script>
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
function frame() {
var alt = $("#ingressiframe",  window.parent.document).height() + 2000 + "px";
var larg = $("#ingressiframe",  window.parent.document).width() - 15 + "px";
    var table = $('#tableFooter').DataTable(
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



function showDate(date) {
	alert('The date chosen is ' + date);
}

function evidenzia(numero, cliente, commessa){
  /* pulisco la modale */ 
        
       $("#progr").text("");
        $("#apparato").text("");
        $("#attivita").text("");
        $("#cap").text("");
        $("#citta").text("");
        $("#cliente").text("");
        $("#commessa").text("");
        $("#contatto").text("");
        $("#indirizzo").text("");
        $("#insegna").text("");
        $("#intervento").text("");
        $("#tipointervento").text("");
        $("#nota").text("");
        $("#numero").text("");
        $("#prov").text("");
        $("#ragsoc").text("");
        $("#telefono").text("");
        $("#tipointervento").text("");
        $("#notaapp").text("");
        $("#ball-red").removeClass("colorred");
        $("#ball-yellow").removeClass("coloryellow");
        $("#ball-green").removeClass("colorgreen");
        $("#stato").text("");
        $("#serialeparte").text("");
        $("#nomeparte").text("");
        $("#ticket").text("");
        $("#seriale").text("");
        $("#dataapp").text("");
        $("#apedizione").text("");
        $("#notesla").text("");
  /* chiamo il servizio per riempire i campi nella modale */ 
  $.ajax({
	          url: '/tk/leggitk.php',
	         type: 'POST',
	         dataType: 'json',
	         data: {"numero": numero, "cliente": cliente, "commessa": commessa},
	         success: function(risposta){
	           console.log("RISPOSTA", risposta);
             if(risposta.progr){ $("#progr").text(risposta.progr);}
             if(risposta.apparato){ $("#apparato").text(risposta.apparato);}
             if(risposta.attivita){ $("#attivita").text(risposta.attivita);}
             if(risposta.cap){ $("#cap").text(risposta.cap);}
             if(risposta.citta){ $("#citta").text(risposta.citta);}
             if(risposta.cliente){ $("#cliente").text(risposta.cliente);}
             if(risposta.commessa){ $("#commessa").text(risposta.commessa);}
             if(risposta.contatto){ $("#contatto").text(risposta.contatto);}
             if(risposta.indirizzo){ $("#indirizzo").text(risposta.indirizzo);}
             if(risposta.insegna){ $("#insegna").text(risposta.insegna);}
             if(risposta.intervento){ $("#tipointervento").text(risposta.tipointervento);}
             if(risposta.tipointervento){ $("#intervento").text(risposta.intervento);}
             if(risposta.nota){ $("#nota").text(risposta.nota);}
             if(risposta.numero){ $("#numero").text(risposta.numero);}
             if(risposta.prov){ $("#prov").text(risposta.prov);}
             if(risposta.ragsoc){ $("#ragsoc").text(risposta.ragsoc);}
             if(risposta.telefono){ $("#telefono").text(risposta.telefono);}
             if(risposta.tipointervento){ $("#tipointervento").text(risposta.tipointervento);}
             if(risposta.notaapp){ $("#notaapp").text(risposta.notaapp);}
             if(risposta.stato){ $("#stato").text(risposta.stato);}
             if(risposta.datainizio){ $("#datainizio").text(risposta.datainizio);}
             if(risposta.serialeparte){ $("#serialeparte").text(risposta.serialeparte);}
             if(risposta.nomeparte){ $("#nomeparte").text(risposta.nomeparte);}
             if(risposta.ticket){ $("#ticket").text(risposta.ticket);}
             if(risposta.seriale){ $("#seriale").text(risposta.seriale);}
             if(risposta.dataapp){ $("#dataapp").text(risposta.dataapp);}
             if(risposta.spedizione){ $("#spedizione").text(risposta.spedizione);}
             if(risposta.notesla){ $("#notesla").text(risposta.notesla);}
             if(risposta.priorita == 'rosso'){
              $("#ball-red").addClass("colorred");
             } else if(risposta.priorita == 'giallo'){
              $("#ball-yellow").addClass("coloryellow");
             } else if(risposta.priorita == 'verde'){
              $("#ball-green").addClass("colorgreen");
             }
             
             $('#assegna').modal('show');
	         },
	         error: function(error){
				    console.log("ERRORE CHIAMATA");
       // $("#commessa").prop( "disabled", false );
	         }
	});
}

function attivaclick(numero, login){     
  /* chiamo il servizio per riempire i campi nella modale */ 
  $.ajax({
	          url: 'seleziona.php',
	         type: 'POST',
	         dataType: 'json',
	         data: {"numero": numero, "login": login},
	         success: function(risposta){
	           console.log("RISPOSTA", risposta);
	         },
	         error: function(error){
				    console.log("ERRORE CHIAMATA");
       // $("#commessa").prop( "disabled", false );
	         }
	});
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
<body text="#000000" onLoad="frame(); larghezza1(); larghezza1(); frame1();" >
<!-- Modal 2-->
<div class="modal fade" id="assegna" tabindex="-1" aria-labelledby="assegnaLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="assegnaLabel">Ticket <span id="numero"></span> <span id="stato"></span></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <?php include("veditk.php"); ?>  
      </div>
     
    </div>
  </div>
</div>
<!-- FINE MODALE 2-->
<br>
<div class="title-space">
  <h3>Ticket Assegnati</h3>
</div>
</div allign="left">
<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data">
<table class="table-form">	
<?php 
$date = date("Y-m-d");
$newdate = strtotime ( '-1 month' , strtotime ( $date ) ) ; // facciamo l'operazione
$newdate = date ( 'd/m/Y' , $newdate ); //trasformiamo la data nel formato accettato dal db YYYY-MM-DD
if($dadata==""){$dadata=$newdate;} 
?>
<?php if($adata==""){$adata=date("d/m/Y");} ?>        
    
    <tr>
			<td>
        <label>Da Data:</label><br>
        <input type="text" name="dadata"  value="<?php echo $dadata; ?>" maxlength="60" size="10">
      </td>
		
			<td>
        <label>A Data:</label><br>
        <input type="text" name="adata"  value="<?php echo $adata; ?>" maxlength="60" size="10">
      </td>
		</tr>
    <tr>
      <td colspan="2" style="text-align:center;">   
        <input type="hidden" name="ingranaggio" value="33" />
        <input type="hidden" name="login" value="<?php echo $login; ?>" />
        <button type="submit" class="btn btn-info" style=" width: 160;" >Seleziona Date</button>
     </td>
    </form>  

</tr>
</form>
<? if($ingranaggiosel==1){  ?>
</table>
<table class="table-form">
<form method="POST" action="" name="moduloghd" > 
    <tr> 
    <td colspan="2" style="text-align:center;">    
    <input type="hidden" name="ingranaggio" value="34" />
    <input type="hidden" name="ingranaggiosel" value="1" />
    <input type="hidden" name="ingranaggioabb" value="1" />
    <input type="hidden" name="login" value="<?php echo $login; ?>" />
    <? if($ingranaggioabb==1){ ?>        
        <input type="hidden" name="ingranaggioabb" value="" />
        <input type="hidden" name="assegnaselezionati" value="1" /> 
        <button type="submit" class="btn btn-info" style="background: #fb9790; width: 175;">Assegna Selezionati</button>
<? } else { ?> 
         <input type="hidden" name="ingranaggiosel" value="1" />
         <input type="hidden" name="assegnaselezionati" value="1" />
          <button type="submit" class="btn btn-info" style=" width: 175;">Assegna Selezionati</button>
<? } ?> 
    </td>
</form>
    
<form method="POST" action="" name="moduloghd" > 

    <td colspan="2" style="text-align:center;">    
    <input type="hidden" name="ingranaggio" value="34" />
    <input type="hidden" name="login" value="<?php echo $login; ?>" />
    <button type="submit" class="btn btn-info" style=" width: 175;">&nbsp;</button>
    </td>
</form>

<form method="POST" action="" name="moduloghd" > 

    <td colspan="2" style="text-align:center;">    
    <input type="hidden" name="ingranaggio" value="34" />
    <input type="hidden" name="login" value="<?php echo $login; ?>" />
    <button type="submit" class="btn btn-info" style=" width: 175;">&nbsp;</button>
    </td>
</form>

<form method="POST" action="" name="moduloghd" > 

    <td colspan="2" style="text-align:center;">    
    <input type="hidden" name="ingranaggio" value="34" />
    <input type="hidden" name="login" value="<?php echo $login; ?>" />
    <button type="submit" class="btn btn-info" style=" width: 175;">&nbsp;</button>
    </td>

</form>

<form method="POST" action="" name="moduloghd" > 

    <td colspan="2" style="text-align:center;">    
    <input type="hidden" name="ingranaggio" value="34" />
    <input type="hidden" name="login" value="<?php echo $login; ?>" />
    <button type="submit" class="btn btn-info" style=" width: 175;">&nbsp;</button>
    </td>
</form>    

<form method="POST" action="" name="moduloghd" > 

    <td colspan="2" style="text-align:center;">    
    <input type="hidden" name="ingranaggio" value="34" />
    <input type="hidden" name="login" value="<?php echo $login; ?>" />
    <button type="submit" class="btn btn-info" style=" width: 175;">&nbsp;</button>
    </td>
</form>    

<form method="POST" action="" name="moduloghd" > 

    <td colspan="2" style="text-align:center;">    
    <input type="hidden" name="ingranaggio" value="34" />
    <input type="hidden" name="login" value="<?php echo $login; ?>" />
    <button type="submit" class="btn btn-info" style=" width: 175;">&nbsp;</button>
    </td>
</form>    
</tr>
</table>   
<?    
}


?>         
        
       
      </td>
    </tr>            
    </form> 
</table>              
</div>              
            <br>
<br>
<div class="table-ticket-footer" style="width:98%">
<table id="tableFooter" class="display" cellspacing="0" align="left" style="width:100%; position:relative;">         
             <thead class="intesta">
	<tr class="testa">
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="2"   >Evidenzia</td>
         
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="2"   >Prov.<br>Regione</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="2"   >N.Ticket<br>Ticket Cli.<br>Priorità</td>          
          
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="2"   >Data Apertura<br>Data Chiusura</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="2"   >Data Scadenza</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="2"   >Pianificata</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="2"   >Stato<br>Esito Intervento<br>CAT Assegnato</td> 
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="2"   >Cliente<br>Commessa</td>        
      	 
           <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="2"   >Attività<br>Tipo Intervento </td>
         
<!--          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="2"   >Apparato<br>Seriale</td>            
          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="2"   >N. Ticket Cliente</td> -->
          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="2"   >Stato SLA</td>

          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="2"   >Insegna -  Ragione sociale<br>Indirizzo<br>Contatto - Telefono</td>
           </tr>       
	</thead>
	<tbody>
<?php 
$tabella=array(); 
$tabellax=array(); 
$giro=0; 
$girox=1;
            $sql1 = "SELECT * FROM cat  where oplogin = '$login' ";
            #echo $sql1; 
            $result = $conn->query($sql1);
            if ($result->num_rows > 0) {
            while($macrogruppo = $result->fetch_assoc())
                    { 	
                   # $tesseramento = $macrogruppo["tesseramento"]; 
                #$corsi= $macrogruppo["corsi"];
                #$contabilita = $macrogruppo["contabilita"]; 
                #$dio = $macrogruppo["dio"]; 
                $ragsocp = $macrogruppo["ragsoc"];
                $cognomep = $macrogruppo["opcognome"];
                $nomep = $macrogruppo["opnome"];
                $codicep = $macrogruppo["codice"];
                $nomecat=$codicep." - ".$ragsocp;
                        }} 


                        
$sql = "SELECT *  FROM  tk   order by progr desc  " ;  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
    $silui=0; 
$numeroxx = $macrogruppo["numero"];   
$sqlt = "SELECT *  FROM  assegnato where ragsoc = '$nomecat' and numero = '$numeroxx' and ko = 'ok'" ;  
#echo $sqlt;
$rCount = 1;
$resultt = $conn->query($sqlt);
if ($resultt->num_rows > 0) {                        
while($macrogruppot = $resultt->fetch_assoc())	
	{  $silui=1; } }  
    
if($silui==1){      
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
    if($inizio>=$dadatax and $inizio<=$adatax)
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
$sql1f = "SELECT * FROM assegnato  where numero = '$numeroxx' and ko = 'ok'";
#echo $sql1f;  exit;
$resultf = $conn->query($sql1f);
if ($resultf->num_rows > 0) {
  while($macrogruppof = $resultf->fetch_assoc())
		{ $ragsocass = $macrogruppof["ragsoc"];	
        $swce=1;} }
$sql1g = "SELECT * FROM assegnatotec  where numero = '$numeroxx' ";
#echo $sql1; 
$resultg = $conn->query($sql1g);
if ($resultg->num_rows > 0) {
  while($macrogruppog = $resultg->fetch_assoc())
		{ $ragsocass = $macrogruppog["ragsoc"];	
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
$sql1g = "SELECT   a.numero, MAX(progr) AS progr FROM (select b.datafinint, b.numero, b.progr from chiusi b) a  where a.numero = '$numeroxx' group by a.numero ";
#echo $sql1g;   exit;
$resultg = $conn->query($sql1g);
if ($resultg->num_rows > 0) {
  while($macrogruppog = $resultg->fetch_assoc())
		{ 
        $progr = $macrogruppog["progr"];
$sql1gx = "SELECT * from chiusi  where progr = '$progr'";
#echo $sql1gx;   exit;
$resultgx = $conn->query($sql1gx);
if ($resultgx->num_rows > 0) {
  while($macrogruppogx = $resultgx->fetch_assoc())                
        {  $datainint = $macrogruppogx["datafiint"];	
          $dx = $macrogruppogx["datafinintx"];
          #echo "chius ".$dx;   exit;
          $datachiusura=$datainint." ".$dx;  
          $esito = $macrogruppogx["esito"];        
          }}} }              
if($assegnaselezionati==1){
$ce=0;
$sqlyy = "SELECT a.numero,b.stato, a.login  FROM  selezionati a
INNER JOIN tk  b on a.numero = b.numero
where  (a.numero  = '$numeroxx') and (a.login = '$login') and (b.stato = 'Assegnato' or b.stato = 'Aperto' or b.stato = 'Pianificato') " ;  
  #echo $sqlyy;
  $rCount = 1;
  $resultyy = $conn->query($sqlyy);
  if ($resultyy->num_rows > 0) {
      while($macrogruppoyy = $resultyy->fetch_assoc())
		{  $ce=1; } }  
}  else {     
           
$ce=0;
$sqlyy = "SELECT *  FROM  selezionati where  (numero  = '$numeroxx') and (login = '$login')  " ;  
#  echo $sql;
  $rCount = 1;
  $resultyy = $conn->query($sqlyy);
  if ($resultyy->num_rows > 0) {
      while($macrogruppoyy = $resultyy->fetch_assoc())
		{  $ce=1; } } 
        
$sqlyh = "SELECT *  FROM  tipointervento  where commessa = '$commessaxx' and cliente = '$clientexx' and tipointervento1 = '$tipointerventoxx'";  
#echo $sqlyh;   exit;

$resultyh = $conn->query($sqlyh);
if ($resultyh->num_rows > 0) {
  while($macrogruppoyh = $resultyh->fetch_assoc())
		{
$progrtg= $macrogruppoyh["progr"];         
#$tipointervento= $macrogruppo["tipointervento"];        
$tipointervento1= $macrogruppoyh["tipointervento1"];
#echo $tipointervento1;
$materiale1= $macrogruppoyh["materiale1"];
$noteatt1= $macrogruppoyh["noteatt1"];
$tipofatta1= $macrogruppoyh["tipofatta1"];
$periodofatta1= $macrogruppoyh["periodofatta1"];
$caricoa1= $macrogruppoyh["caricoa1"];
$importoa1= $macrogruppoyh["importoa1"];
$giorno1= $macrogruppoyh["giorno1"];
$ora1= $macrogruppoyh["ora1"];
$numgiore1= $macrogruppoyh["numgiore1"];
$feriali1= $macrogruppoyh["feriali1"];
$daorafer1= $macrogruppoyh["daorafer1"];
$arafer1= $macrogruppoyh["arafer1"];
$sabato1= $macrogruppoyh["sabato1"];
$daorasab1= $macrogruppoyh["daorasab1"];
$arasab1= $macrogruppoyh["arasab1"];
$festivi1= $macrogruppoyh["festivi1"];
$daorafes1= $macrogruppoyh["daorafes1"];
$arafes1= $macrogruppoyh["arafes1"];
$numgior= $macrogruppoyh["numgior"];
}}
        
        
}
#echo $stato; exit;
if($statoxx=="Assegnato"){$esito="Da Pianificare";}  
if($statoxx=="Pianificato"){$esito="Da Intervenire";}          
if($ingranaggiosel==1){ 
   if($ce==1){      
$tabella[$giro]=" const ticket".$numeroxx." = '".$citta." ".$via."'; "; 

$tabellax[0]="destinations: ["; 

$tabellax[$girox]="ticket".$numeroxx.",";  
$girox++; 
$giro++;  
#echo $stato; exit;
if($statoxx=="Assegnato"){$esito="Da Pianificare";}              
?>     

     
<?php          
} } 
else
{
?>     
    <tr >
      <td style="text-align:center;">
        <button type="button" class="btn btn-success" onClick="evidenzia(<?php echo $numeroxx; ?>, '<?php echo $ragsocclixx; ?>', '<?php echo $nomecommessaxx; ?>' )"><i class="fa-solid fa-plus"></i></button>
      </td> 
     
      <td valign="top" style=" border: 1px solid #e4e3e3; " align="center" ><font size="2"  >(<?php echo $prov; ?>) <br> <?php echo $regione; ?>
      
      </td>  
      <td style=" border: 1px solid #e4e3e3; width: 120px;" align="center" alignv="top" >
      <a href="lavoraticket.php?login=<?php echo $login; ?>&codice=<?php echo $numeroxx; ?>" >
      <font size="3" color="#cc0000"  ><?php echo $numeroxx; ?></a><br>  
      <font size="2" color="#000000"  ><?php echo $ticketcli; ?></font>   
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
     
      <td valign="top" style=" border: 1px solid #e4e3e3; " align="center" ><font size="2"  ><?php echo $datainizioxx; ?><br><br><? echo $datachiusura; ?></font></td>
      <td valign="top" style=" border: 1px solid #e4e3e3; " align="center" ><font size="2"  ><?php echo " "; ?></font></td>
      <td valign="top" style=" border: 1px solid #e4e3e3; " align="center" ><font size="2"  ><?php echo $datapian; ?></font></td>
      
      <td valign="top" style=" border: 1px solid #e4e3e3; " align="left" ><font size="3" color="#cc0000"  ><?php echo $statoxx; ?>

<br><br></font><font size="2" color="#000000" ><?php echo $esito; ?> </font>
  
      </font></td>
      <td valign="top" style=" border: 1px solid #e4e3e3; " align="left" ><font size="2"  ><?php echo $ragsocclixx."<br><br>".$nomecommessaxx; ?></font></td>

      <td valign="top" style=" border: 1px solid #e4e3e3; " align="left" ><font size="2"  ><?php echo $attivitaxx."<br><br>".$tipointerventoxx; ?></font></td>
      
<!--      <td valign="top" style=" border: 1px solid #e4e3e3; " align="left"><font size="2"  ><?php echo $apparatoxx; ?><br><br><?php echo $serialexx; ?></font></td>
      <td valign="top"style=" border: 1px solid #e4e3e3; " align="center" ><font size="2"  ><?php echo $ticketcli; ?></font></td> -->
      <td style=" border: 1px solid #e4e3e3; " align="center" ><font size="2" >
<?

$comodo=explode(" ",$datainizioxx);

$comododata=$comodo[0];
$comododatax=explode("/",$comododata);
$comododata=$comododatax[2]."-".$comododatax[1]."-".$comododatax[0];

$comodotime=str_replace(',', ':', $comodo[1]); 
$datainizio=$comododata." ".$comodotime;

$contaferiali=0;

if($datachiusura==""){$oggi=date("Y-m-d H:m:s"); } else {
$comodo=explode(" ",$datachiusura);
$comododata=$comodo[0];
$comododatax=explode("/",$comododata);
$comododata=$comododatax[2]."-".$comododatax[1]."-".$comododatax[0];
$comodotime=str_replace(',', ':', $comodo[1]); 
$oggi=$comododata." ".$comodotime.":00:00";
}
$risultato= giornilavorativi($datainizio,$oggi,0,$feriali1,$sabato1,$festivi1,$arafer1,$daorafer1,$arasab1,$daorasab1,$arafes1,$daorafes1); // 6 
#echo "<br>".$numeroxx;
#echo "<br> ore ".$risultato[0];
#echo "<br> giorni ".$risultato[1];
if($giorno1=="on"){
$risultatooresla=$risultato[1]-$numgiore1;
#echo "<br> giorni ".$risultatooresla;
if($risultatooresla>=0){$colore="#cc0000";}else{$colore="476b5d";}
}
if($ora1=="on"){
$risultatooreslax=$risultato[0]-$numgiore1;
#echo "<br> ore ".$risultatooreslax;
if($risultatooreslax>=0){$colore="#cc0000";}else{$colore="476b5d";}
}

#if($risultatooresla>=0){$colore="#cc0000";}else{$colore="476b5d";}
#exit;
/*
if($datachiusura==""){$oggi=date("Y-m-d H:m:s"); } else {
$comodo=explode(" ",$datachiusura);
$comododata=$comodo[0];
$comododatax=explode("/",$comododata);
$comododata=$comododatax[2]."-".$comododatax[1]."-".$comododatax[0];
$comodotime=str_replace(',', ':', $comodo[1]); 
$oggi=$comododata." ".$comodotime.":00:00";
}
#echo $datainizio." ".$oggi; exit;
$originalTime = new DateTimeImmutable($datainizio);
$targedTime = new DateTimeImmutable($oggi);
$interval = $originalTime->diff($targedTime);
$differenza= $interval->format("%a %H:%I:%S"); 
if($differenza==""){$differenza = 0;}
$giornisla=explode(" ",$differenza);
$giornaslax=$giornisla[0];
$risultatooresla=$giornaslax-$numgiore1;
if($risultatooresla>=0){$colore="#cc0000";}else{$colore="476b5d";}
#echo $giornaslax." ".$numgiore1." ".$risultatooresla;
#echo " ".$risultatooresla; 
#echo $differenza; exit;
*/
?>      
            
      <button type="button" class="btn btn-success" style="background: <? echo $colore; ?>;">
<? 

if($giorno1=="on"){
$risultatooresla=$risultato[1]-$numgiore1;
echo "giorni ".$risultatooresla;}
if($ora1=="on"){
$risultatooreslax=$risultato[0]-$numgiore1;
echo "ore ".$risultatooreslax;}

?>
      </button>          
       <br> <?php echo " "; ?>    
      </td>

      <td valign="top" style=" border: 1px solid #e4e3e3; " align="left" ><font size="2"  ><?php echo $insegna." - ".$ragsocxx."<br><br>".$via." - ".$citta." (".$prov.")<br>".$contatto." - ".$telefono; ?></font></td>
     
     </tr>	
     
<?php          
}




 } }
} }         
?>                    
            </table>
   
</div>      

<? if($ingranaggioabb==1){ ?>
<br>

<p align="center"><font   size="4" color="#993300"  >Assegnazione Multipla</font></b></p>



<div align="center" >
<table align="center" >
<tr align="center">
<td width="50%" align="center">
<form method="POST" action="" name="modulo" enctype="multipart/form-data">
       
    <input type="hidden" name="ingranaggioxx" value="" />    
    <input type="hidden" name="ingranaggioy" value="10" />
    <input type="hidden" name="ingranaggiobb" value="A" />   
    <input type="hidden" name="ingranaggio" value="34" />
    <input type="hidden" name="ingranaggiosel" value="1" />
    <input type="hidden" name="ingranaggioabb" value="1" />
    <input type="hidden" name="login" value="<?php echo $login; ?>" />       
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

<div class="table-ticket-footer" style="width:98%">
<table id="tableFooter1" class="display" cellspacing="0" align="left" style="width:100%; position:relative;">         
             <thead class="intesta">
	<tr class="testa">
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="2"   >Codice</td>          
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="2"   ></td>
           
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="2"   >Ragione sociale</td>
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="2"   >indirizzo</td>        
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="2"   >Provincia</td>
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="2"   >Regione</td>
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="2"   >Resp. Operativo</td>            
            <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="2"   >Telefono</td>
            <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="2"   >Email</td>
			<td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="2"   ></td>		
            </tr>       
    </thead>
    <tbody>
<?php  
  
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

$regionecat="";
$sqlxj = "SELECT *  FROM  province where  sigla = '$provv' " ;  
#echo $sql;
$rCount = 1;
$resultxj = $conn->query($sqlxj);
if ($resultxj->num_rows > 0) {
  while($macrogruppoxj = $resultxj->fetch_assoc())	
	{ $regionecat = $macrogruppoxj["regione"]; }} 
    
 

 



?>   
  
      <tr >    
        <td style=" border: 1px solid #e4e3e3; " align="center" ><font size="2"  ><?php echo $codicev; ?></font></td>
        <td style="text-align:center;">
        <a href="?login=<?php echo $login; ?>&ingranaggioy=10&ingranaggiobb=A&ingranaggio=34&ingranaggiosel=1&ingranaggioabb=1&ingranaggiomappa=1&catcodice=<? echo $codicev; ?>&viamappa=<? echo $viav; ?>&cittamappa=<? echo $cittav; ?>&ragsocmappa=<? echo $ragsocv; ?>" ><button type="button" class="btn btn-success" <? if ($codicev==$catcodice){echo "style='background-color: #cc0000;'"; } ?>><i class="fa-solid fa-map"></i></button></a>
      </td>
        <td style=" border: 1px solid #e4e3e3; " align="center" ><font size="2"  ><?php echo $ragsocv; ?></font></td>
        <td style=" border: 1px solid #e4e3e3; " align="left" ><font size="2"  ><?php echo $indirizzot; ?></font></td>
        <td style=" border: 1px solid #e4e3e3; " align="left" ><font size="2"  ><?php echo $provv; ?></font></td>
        <td style=" border: 1px solid #e4e3e3; " align="left" ><font size="2"  ><?php echo $regionecat; ?></font></td>
        <td style=" border: 1px solid #e4e3e3; " align="left" ><font size="2"  ><?php echo $opcognomenome; ?></font></td>
        <td style=" border: 1px solid #e4e3e3; " align="left" ><font size="2"  ><?php echo $optelefono; ?></font></td>
        <td style=" border: 1px solid #e4e3e3; " align="left" ><font size="2"  ><?php echo $opemail; ?></font></td>
<form method="POST" action="" name="modulo"  enctype="multipart/form-data">    
		<td style=" border: 1px solid #e4e3e3; " align="center" >		
        <input type="hidden" name="ingranaggioxx" value="" />
        <input type="hidden" name="ingranaggioy" value="10" />
        <input type="hidden" name="ingranaggioscrivi" value="A" />                   
        <input type="hidden" name="ingranaggioy" value="10" /> 
        <input type="hidden" name="ingranaggio" value="34" />
      
       
                        
        <input type="hidden" name="login" value="<?php echo $login; ?>" />     
        <input type="hidden" name="catscelto" value="<?php echo $codicev; ?>" />         
    <button class="btn btn-primary" type="submit" type="button" >Assegna</button>
  </td>
</form>
      </tr>	
      
<?php }}  ?>                    
  </table>
<? if($ingranaggiomappa==1){ ?>
<p align="center"><font   size="4" color="#993300"  >Localizzazione del T.P. <? echo $catcodice." ".$ragsocmappa." ".$viamappa." ".$citta; ?> e posizionamento dei Ticket selezionati</font></b></p>
<? 
#echo $cittamappa." ".$viamappa; 
$origine=$cittamappa." ".$viamappa; 

$girox++;
$tabellax[$girox]="],"; 

if ($giro!=0) {
 ?> 
<center>
<iframe  align="right" frameborder="0" width="80%" height="180%"  src="multiploy.php?origine=<?php echo $origine; ?>&giro=<? echo $giro; ?>&tabella=<?  echo base64_encode(serialize($tabella)); ?>&tabellax=<? echo base64_encode(serialize($tabellax)); ?>&girox=<? echo $girox; ?>&sw=1"></iframe> 
</center>  
<? } ?>
</div>   
<?php } } ?>
 
     





</div>
<div>



</div>



<? } ?>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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