<?php
session_start(); if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){ $larg= $_SESSION['screen_width'] ; $alt= $_SESSION['screen_height']; } else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) { $_SESSION['screen_width'] = $_REQUEST['width']; $_SESSION['screen_height'] = $_REQUEST['height']; header('Location: ' . $_SERVER['PHP_SELF']); } else { echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width+"&height="+screen.height;</script>'; } 

include "conf_DB.php";
$ingranaggio=$_REQUEST["ingranaggio"];
$ingranaggioy=$_REQUEST["ingranaggioy"];
$ingranaggiott=$_REQUEST["ingranaggiott"];
$ingranaggiohh=$_REQUEST["ingranaggiohh"];
$login=$_REQUEST["login"];
//echo "log ".$login;
$dadata=$_REQUEST["dadata"];
$adate=$_REQUEST["adata"];
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


function attivaclick(numero, cliente, commessa){
  /* pulisco la modale */ 
        
      
  /* chiamo il servizio per riempire i campi nella modale */ 
  $.ajax({
	          url: 'seleziona.php',
	         type: 'POST',
	         dataType: 'json',
	         data: {"numero": numero, "cliente": cliente, "commessa": commessa},
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
<body text="#000000" onLoad="frame();"  >
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
  <h3>Ricerca Ticket</h3>
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
			<td colspan="1">
        <label>N. Ticket:</label><br>
        <input type="text" name="nticket"  value="<?php echo $nticket; ?>" maxlength="60" size="10">
      </td>
			<td colspan="1">
        <label>Stato:</label> 
        <select size="1" name="statotic">
          <option <?php  if($statotic=="Tutti"){echo "selected";}?>>Tutti</option>  
          <option <?php  if($statotic=="Aperto"){echo "selected";}?>>Aperto</option>
		      <option <?php  if($statotic=="Assegnato"){echo "selected";}?>>Assegnato</option>
				</select> 
      </td>
		</tr>
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
        <button type="submit" class="btn btn-info">Ricerca ticket</button>
     </td>
    </form>  
    <form method="POST" action="" name="modulogh" > 
    <tr> 
    <td colspan="2" style="text-align:center;">    
        <input type="hidden" name="ingranaggio" value="34" />
        <input type="hidden" name="login" value="<?php echo $login; ?>" />
        <button type="submit" class="btn btn-info">&nbsp;&nbsp;Selezionati&nbsp;&nbsp;</button>
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
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Evidenzia</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Selez.</td>          
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Prov.<br>Regione</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >N.Ticket</td>          
          
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Data Apertura</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Data Scadenza</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Pianificata</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Stato<br>T.P. Assegnato</td> 
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Cliente<br>Commessa</td>        
      	 
           <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Attività<br>Tipo Intervento </td>
         
<!--          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Apparato<br>Seriale</td>            
          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >N. Ticket Cliente</td> -->
          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Stato SLA<br>Scadenza</td>

          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Insegna -  Ragione sociale<br>Indirizzo<br>Contatto - Telefono</td>
           </tr>       
	</thead>
	<tbody>
<?php    
$sql = "SELECT *  FROM  tk   order by numero " ;  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
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
$sql1f = "SELECT * FROM assegnato  where numero = '$numeroxx' ";
#echo $sql1; 
$resultf = $conn->query($sql1f);
if ($resultf->num_rows > 0) {
  while($macrogruppof = $resultf->fetch_assoc())
		{ $ragsoc = $macrogruppof["ragsoc"];	
        $swce=1;} }
$sql1g = "SELECT * FROM assegnatotec  where numero = '$numeroxx' ";
#echo $sql1; 
$resultg = $conn->query($sql1g);
if ($resultg->num_rows > 0) {
  while($macrogruppog = $resultg->fetch_assoc())
		{ $ragsoc = $macrogruppog["ragsoc"];	
        $swce=1;} }     
     
     
           
?>     
    <tr >
      <td style="text-align:center;">
        <button type="button" class="btn btn-success" onClick="evidenzia(<?php echo $numeroxx; ?>, '<?php echo $ragsocclixx; ?>', '<?php echo $nomecommessaxx; ?>' )"><i class="fa-solid fa-plus"></i></button>
      </td> 
      <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" >
<!--  qui mettere la lettura cecked  -->
      <input style="width: 20px;  height: 20px;" type="checkbox"   name="selezione" id="seleziona"  onClick="attivaclick(<?php echo $numeroxx; ?>)"   size="1" maxlength="">
<!-- fine -->
      </td> 
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana">(<?php echo $prov; ?>) <br> <?php echo $regione; ?>
      
      </td>  
      <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" alignv="top" >
      <a href="lavoraticket.php?login=<?php echo $login; ?>&codice=<?php echo $numeroxx; ?>" >
      <font size="3" color="#cc0000" face="Verdana"><?php echo $numeroxx; ?></a>     
      <br><br>
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
     
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $datainizioxx; ?></font></td>
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo " "; ?></font></td>
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo " "; ?></font></td>
      
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $statoxx; ?>
<?php if($swce==1 and $statoxx == "Assegnato"){ ?>
<br><?php echo $ragsoc; ?>  
<?php } ?>    
      </font></td>
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $ragsocclixx."<br>".$nomecommessaxx; ?></font></td>

      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $attivitaxx."<br>".$tipointerventoxx; ?></font></td>
      
<!--      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left"><font size="2" face="Verdana"><?php echo $apparatoxx; ?><br><?php echo $serialexx; ?></font></td>
      <td valign="top"style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $ticketcli; ?></font></td> -->
      <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana">
      <img border="0" src="verde.png" width="13" height="13" >
      <img border="0" src="bianco.png" width="14" height="14" >
      <img border="0" src="bianco.png" width="17" height="17" > <br> <?php echo " "; ?>    
      </td>

      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $insegna." - ".$ragsocxx."<br>".$via." - ".$citta." (".$prov.")<br>".$contatto." - ".$telefono; ?></font></td>
     
     </tr>	
     
<?php          
} }
}           
?>                    
            </table>
   
</div>      





<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html