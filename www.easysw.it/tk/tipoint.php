<?php
session_start(); if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){ $larg= $_SESSION['screen_width'] ; $alt= $_SESSION['screen_height']; } else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) { $_SESSION['screen_width'] = $_REQUEST['width']; $_SESSION['screen_height'] = $_REQUEST['height']; header('Location: ' . $_SERVER['PHP_SELF']); } else { echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width+"&height="+screen.height;</script>'; } 

include "conf_DB.php";


#echo "comm ".$commessa;
$cat=$_REQUEST["cat"];
$comodo=explode(" - ",$cliente);
$codicecliente=$comodo[0];
#echo $codicecliente;
$comodo=explode(" - ",$commessa);
$codicecommessa=$comodo[0];
$comodo=explode(" - ",$cat);
$codicecat=$comodo[0];
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
          
         else if(tipointervento1.value=="") { 
            alert("Error: manca TIPO DI INTERVENTO"); 
            tipointervento1.focus(); 
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

<?php if ($fileNumError > 0) { echo $erroreFileMessage; } ?>


<br>
<div>   
<br>




<div class="table-ticket-footer">
  <table id="tableFooter" class="display" cellspacing="0"  style="position:relative;">         
              <thead class="intesta">
    <tr class="testa">
      
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Codice</td>                              
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Tipo Intervento</td>
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Tipo fatturazione</td>        
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Periodicità Fatt.</td>
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >In Carico a</td>
                        </tr>                  
    </thead>
    <tbody>
<? 
$sql = "SELECT *  FROM  tipointervento  where commessa = '$codicecommessa' and cliente = '$codicecliente'";  
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
      <td   align="left" bgcolor="<? echo $colore; ?>"><font size="2" face="Verdana"><?php echo $tipointervento; ?></td>
      <td   align="left" bgcolor="<? echo $colore; ?>"><font size="2" face="Verdana"><?php echo $tipointervento1; ?></td>
      <td   align="left" bgcolor="<? echo $colore; ?>"><font size="2" face="Verdana"><?php echo $tipofatta1; ?></td>
      <td   align="left" bgcolor="<? echo $colore; ?>"><font size="2" face="Verdana"><?php echo $periodofatta1; ?></td>
      <td   align="left" bgcolor="<? echo $colore; ?>"><font size="2" face="Verdana"><?php echo $caricoa1; ?></td> 
          </tr>	       
<? }}  ?>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</div>
</div>
</div>
</div>
<br>


</div>      

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

 ricercaAutocomplete();
 ricercaAutocompleteApparato();
 tableInit();
</script>

</body>

</html>