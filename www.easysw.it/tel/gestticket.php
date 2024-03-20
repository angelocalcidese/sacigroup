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
#echo "log ".$login;   exit;
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
	          url: 'leggitk.php',
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
<body text="#000000" onLoad="frame(); larghezza1(); larghezza1(); frame1();" style=" font-family: Verdana;">

<br>



<div class="table-ticket-footer" style="width:98%">
<table id="tableFooter" class="display" cellspacing="0" align="left" style="width:100%; position:relative;">         
             <thead class="intesta">
	<tr class="testa">
              
                    <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; font-size: 12px;" align="center">N.Ticket<br>Ticket Cli.<br>Priorità</td>          
          


          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; font-size: 12px;" align="center">Pianificata<br>Cliente<br>Commessa</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-size: 12px; " align="center">Stato<br>Tipo Intervento <br>Attività<br>Esito Intervento</td> 
      
      	 

         
<!--          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="2"   >Apparato<br>Seriale</td>            
          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="2"   >N. Ticket Cliente</td> -->


          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff; font-size: 12px;" align="center">Insegna -  Ragione sociale<br>Indirizzo<br>Contatto - Telefono</td>
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
                     
                        
                        
$sql = "SELECT *  FROM  tk   order by progr desc " ;  
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
   
    {
    
    
     $serialexx = $macrogruppo["seriale"];
     
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
$esito="";        
$datachiusura="";       

$sql1gx = "SELECT datafinintx, datafiint, esito, datainint, numero FROM chiusi  where numero = '$numeroxx' order by STR_TO_DATE(datainint, '%d/%m/%Y') desc limit 1";
#echo $sql1gx;   
$resultgx = $conn->query($sql1gx);
if ($resultgx->num_rows > 0) {
  while($macrogruppogx = $resultgx->fetch_assoc())                
        {  $datainint = $macrogruppogx["datafiint"];	
          $dx = $macrogruppogx["datafinintx"];
          #echo "chius ".$dx;   exit;
          $datachiusura=$datainint." ".$dx;  
          $esito = $macrogruppogx["esito"];        
          }}

#exit;          
          
                      
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
}           
if($ingranaggiosel==1){ 
   if($ce==1){      
$tabella[$giro]=" const ticket".$numeroxx." = '".$citta." ".$via."'; "; 

$tabellax[0]="destinations: ["; 

$tabellax[$girox]="ticket".$numeroxx.",";  
$girox++; 
$giro++;               
?>     

      
     
     
<?php          
} } 
else
{
?>     
    <tr >
     
     
      
      <td style=" border: 1px solid #e4e3e3; width: 120px;font-size: 12px;" align="center" alignv="top" >
      <a href="lavoraticket.php?login=<?php echo $login; ?>&codice=<?php echo $numeroxx; ?>" >
      <font size="3" color="#cc0000"  ><?php echo $numeroxx; ?></a><br>  
      <font style="font-size: 12px;" color="#000000"  ><?php echo $ticketcli; ?></font>   
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
     
         
      <td valign="top" style=" border: 1px solid #e4e3e3;font-size: 12px; " align="center" ><?php echo $datapian; ?><br><br><?php echo $ragsocclixx."<br><br>".$nomecommessaxx; ?></font></td>
      
      <td valign="top" style=" border: 1px solid #e4e3e3; font-size: 12px;" align="left" ><font color="#cc0000"  ><?php echo $statoxx; ?><br><br></font><font color="#000000"  ><?php echo $attivitaxx."<br><br>".$tipointerventoxx; ?>

<br><br></font><font size="2" color="#000000" ><?php echo $esito; ?> </font> 
  
      </font></td>



      
<!--      <td valign="top" style=" border: 1px solid #e4e3e3; " align="left"><font size="2"  ><?php echo $apparatoxx; ?><br><br><?php echo $serialexx; ?></font></td>
      <td valign="top"style=" border: 1px solid #e4e3e3; " align="center" ><font size="2"  ><?php echo $ticketcli; ?></font></td> -->
      

      <td valign="top" style=" border: 1px solid #e4e3e3; font-size: 12px;" align="left" ><?php echo $insegna." - ".$ragsocxx."<br><br>".$via." - ".$citta." (".$prov.")<br>".$contatto." - ".$telefono; ?></font></td>
     
     </tr>	
     
<?php          
}




 } }
} }         
?>                    
            </table>
<br><br>  <br><br>  <br><br>
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
</body>
</html