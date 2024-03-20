<?php
session_start(); if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){ $larg= $_SESSION['screen_width'] ; $alt= $_SESSION['screen_height']; } else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) { $_SESSION['screen_width'] = $_REQUEST['width']; $_SESSION['screen_height'] = $_REQUEST['height']; header('Location: ' . $_SERVER['PHP_SELF']); } else { echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width+"&height="+screen.height;</script>'; } 

include "conf_DB.php";
$ingranaggiox=$_REQUEST["ingranaggiox"];
$ingranaggioxxx=$_REQUEST["ingranaggioxxx"];
$ingranaggiodocu=$_REQUEST["ingranaggiodocu"];
$ingranaggiovedi=$_REQUEST["ingranaggiovedi"];
$tipointervento=$_REQUEST["tipointervento"];
$ingranaggiocancelladoc=$_REQUEST["ingranaggiocancelladoc"];
#echo  "doc ".$ingranaggiocancelladoc;
$login=$_REQUEST["login"];
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
$prgry=$_REQUEST["prgr"];
$progrx=$_REQUEST["progr"];
$fileh=$_REQUEST["fileh"];
$siticketx=$_REQUEST["siticket"];
#echo "tic ".$siticketx."<br>";

if($ingranaggiocancelladoc==1){ 
$sql = "
DELETE from documenti where progr = '$prgry'";
#echo $sql;  exit;
if ($conn->query($sql) === FALSE)
  {echo "errxx=errore";exit;}
  else
  {}
 } 

if($ingranaggiox==20){ 
#echo "reg ".$regione;

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
  
#echo $commessa;  
$sql = "UPDATE tipointervento set 
tipointervento1='$tipointervento1',
materiale1='$materiale1',
noteatt1='$noteatt1',
tipofatta1='$tipofatta1',
periodofatta1='$periodofatta1',
caricoa1='$caricoa1',
importoa1='$importoa1',
giorno1='$giorno1',
ora1='$ora1',
numgiore1='$numgiore1',
feriali1='$feriali1',
daorafer1='$daorafer1',
arafer1='$arafer1',
sabato1='$sabato1',
daorasab1='$daorasab1',
arasab1='$arasab1',
festivi1='$festivi1',
daorafes1='$daorafes1',
arafes1='$arafes1',
numgior='$numgior',
importogior='$importogior',
importoa1='$importoa1',
canone1='$canone1',
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
da451a4801='$da451a4801'
where 
progr = '$progrx' ";
  #echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {$errore="Tipo InterventoMemorizzato Correttamente"; $ingranaggiox=2;} 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 
   


    
 }  
 
############################ scrivo documenti ###########################
if ($ingranaggiodocu=="1")
{

$newdata=$_POST["newdata"];
$newdatasca=$_POST["newdatasca"];
$newoggetto=$_POST["newoggetto"];
#echo "data ".$newdata." ogg ".$newoggetto." cli ".$clientexxy; 

$uploadOk = 1;
if ($newdata=="") {echo " <b><font color='#FF0000'>**missing document date** </font></b>"; $uploadOk = 0;}
if ($newoggetto=="") {echo "<b><font color='#FF0000'>MANCA OGGETTO DEL DOCUMENTO OPPURE </font></b>"; $uploadOk = 0;}
$cliente=$_SESSION["SPICLIENTLOGGED"];
$nomefile=basename($_FILES["fileToUpload"]["name"]);
if ($nomefile=="") {echo "<b><font color='#FF0000'> MANCA DOCUMENTO DA CARICARE OPPURE </font></b>"; $uploadOk = 0;}
$lunghezza=strlen($nomefile);
$lunghezza=$lunghezza-4;
$nomefileparz=substr($nomefile, 0, $lunghezza);
$errorefile=strpos($nomefileparz, ' ');




$pieces = explode("/", $newdata);
$newdata=$pieces[2]."-".$pieces[1]."-".$pieces[0];
if ($pieces[2]=="0000"){$newdata=$oggix;}
$target_dir = "documenti/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$nomefile=basename($_FILES["fileToUpload"]["name"]);
$nomefile1=basename($_FILES["fileToUpload1"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if ($_FILES["fileToUpload"]["size"] > 1000000000) {
    echo "ATTENZIONE FILE TROPPO GRANDE.</font></b>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "pdf" && $imageFileType != "docx"  && $imageFileType != "txt" && $imageFileType != "csv"   && $imageFileType != "xlsx"
&& $imageFileType != "gif" ) {
    echo "<b><font color='#FF0000'> FILE NON DI TIPO  JPG, PDF, PNG, GIF, DOCX, TXT, CSV, XLSX QUINDI </font></b>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<b><font color='#FF0000'> OPERAZIONE ABORTITA.</font></b>";
// if everything is ok, try to upload file
} else {

$sql1 = "SELECT * FROM progressivofile  where progr = '1' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $tesseraww = $macrogruppo["numero"];	 
			} }
$tesseraww++;
$sql = "UPDATE progressivofile set 
numero = '$tesseraww'
where 
progr = '1' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 
    $estensione=explode(".",$nomefile);
$newfile=$tessera."-".$tesseraww.".pdf";
$target_dire = "documenti/";

$target_filee = $target_dire . $newfile;


    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_filee)) {
        #echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
$comodo=explode("-",$newdata);
$newdata=$comodo[2]."/".$comodo[1]."/".$comodo[0];
$newoggetto=str_replace("'", "\'", $newoggetto); 
$comodo=explode(" - ",$clientex);
$clientexy=$comodo[0];
$comodo=explode(" - ",$commessa);
$commessay=$comodo[0];

       $sql = "INSERT INTO documenti
              (               
              tipodoc, 
              datadoc, 
              oggetto, 
              file,
              datasca,
              cliente,
              commessa,
              siticket) 
            VALUES (            
              '$tipointervento',
              '$newdata', 
              '$newoggetto',
              '$newfile',
              '$newdatasca',
              '$clientexy',
              '$commessay',
              '$siticketx'
              )";
#echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        { } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 

 } }
#echo "passo1"; exit; 
$ingranaggiox=11;
}
#################################  fine scrivo documenti ###########################  
#echo $ingranaggiox;
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

function frame2() {
var alt = $("#ingressiframe2",  window.parent.document).height() + 2000 + "px";
var larg = $("#ingressiframe2",  window.parent.document).width() - 15 + "px";
    var table = $('#tableFooter2').DataTable(
	{
	
	"order": [[ 2, "desc" ]],
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
function larghezza2() {
//var larg = $(window).width() - 350 + "px";
var larg = $("#ingressiframe2",  window.parent.document).width() - 25 + "px";
//var alt = $("#statiframe",  window.parent.document).height() - 100 + "px";
//alert(alt);
$(".statisti1").css("width", larg);
//$(".testa").css("width", larg);

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
<body text="#000000" onLoad="frame(); larghezza1(); larghezza1(); frame1(); larghezza2(); frame2();" >

<?php if ($fileNumError > 0) { echo $erroreFileMessage; } ?>
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


<br>
<div>   
<br>
<? if($ingranaggiox=="" or $ingranaggiox=="2" or $ingranaggiox=="10" or $ingranaggiox=="11"){ ?>
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Visualizzazione/modifica Tipo di Intervento</font></b></p>
<? if($ingranaggiox=="" or $ingranaggiox=="2"){ ?>
<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data"> 
<? } ?>
<table class="table-form "  style="text-align:left;">
 <tr>

     <td colspan="1" style="width: 33%;"> 
     <label>Cliente:<i class="fa-solid fa-magnifying-glass" data-bs-toggle="modal" data-bs-target="#leggiclienti" style="cursor:pointer; margin-left:5px"></i>all</label>
     <br>
     <input autofocus class="required" type="text" id="cliente" onkeyup="ricercaAutocomplete()" name="cliente" value="<?php echo $clientex; ?>" maxlength="100" >       
     </td>  
        
    <td colspan="1" style="width: 33%;"> 
    <label>Commessa:</label><br>
    <input class="required" type="text" id="commessa" onkeyup="Ricerca1()" name="commessa" value="<?php echo $commessa; ?>" maxlength="120">
    </td>  
  </tr> 
<? if($ingranaggiox=="" or $ingranaggiox=="2"){ ?>  
   <tr>       
    <td colspan="3" style="text-align: center; " >       
    <input type="hidden" name="ingranaggiox" value="2" />
     <input type="hidden" name="ingranaggioxx" value="1" />
    <input type="hidden" name="login" value="<?php echo $login; ?>" /> 
    <input type="hidden" name="ingranaggioxxx" value="1" />            
    <button  type="submit" class="btn btn-warning">ricerca</button>
    </td> 
</form>
<? } ?>
  </tr> 
</table>


<? 
#echo "xx ".$ingranaggioxxx;
if($ingranaggioxxx==""){ ?>
<div class="table-ticket-footer">
  <table id="tableFooter2" class="display" cellspacing="0"  style="position:relative;">         
              <thead class="intesta">
    <tr class="testa">
      
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana; width: 5%;" align="center"><font size="2" face="Verdana" >Codice</td>                              
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;width: 25%;" align="center"><font size="2" face="Verdana" >Tipo Intervento</td>
                   
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;width: 25%;" align="center"><font size="2" face="Verdana" >Cliente</td> 
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;width: 25%;" align="center"><font size="2" face="Verdana" >Commessa</td>             
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;width: 10%;" align="center"><font size="2" face="Verdana" >Tipo fatturazione</td> 
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;width: 10%;" align="center"><font size="2" face="Verdana" >Periodicità Fatt.</td>
<!--            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >In Carico a</td> -->
<!--            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Modifica</td>  -->
<!--            <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" ></td>		
            <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" ></td>	-->	
            </tr>                  
    </thead>
    <tbody>
<? 
$sql = "SELECT *  FROM  tipointervento  ";  
#echo $sql;  

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{
$progry= $macrogruppo["progr"]; 
$commessay= $macrogruppo["commessa"]; 
$clientey= $macrogruppo["cliente"];       
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

$sqlll = "SELECT *  FROM  clienti where codice =  '$clientey' ";  
#echo $sql;  

$resultll = $conn->query($sqlll);
if ($resultll->num_rows > 0) {
  while($macrogruppoll = $resultll->fetch_assoc())
		{
  $progrll= $macrogruppoll["progr"];
     $ragsocxll= $macrogruppoll["ragsoc"];
     $dataoperazionell = $macrogruppoll["dataoperazione"];
     $codicell = $macrogruppoll["codice"];
     $ivaxxll = $macrogruppoll["iva"];
     $telefonoxll = $macrogruppoll["telefono"];
     $emailxll = $macrogruppoll["email"];
     $ibanxll = $macrogruppoll["iban"]; }}
$tuttocliente=$ragsocxll;
$sqlk = "SELECT *  FROM  commesse where  progr != '' " 
        .$selezionacliente.
        " ORDER BY cliente";  
#echo $sql;
$rCountk = 1;
$resultk = $conn->query($sqlk);
if ($resultk->num_rows > 0) {
  while($macrogruppok = $resultk->fetch_assoc())	
	{ 
    $progrk = $macrogruppok["progr"];
     $commessaqk = $macrogruppok["commessa"];
     $clienteqk = $macrogruppok["cliente"];    
     $nomecommessak = $macrogruppok["nomecommessa"];     
  }}
$tuttocommessa=$nomecommessak;



if($tipointervento==$tipointerventoyy){$colorepp = "#fd0101";}else{$colorepp = "#000000";}
#echo $tipointervento.$tipointerventoyy;
?>    
	<tr >       
      <td   style="color: <? echo $colorepp; ?>;" align="left" bgcolor="<? echo $colore; ?>"><?php echo $tipointervento; ?></td>
      <td   style="color: <? echo $colorepp; ?>;" align="left" bgcolor="<? echo $colore; ?>"><?php echo $tipointervento1; ?></td>
      <td   style="color: <? echo $colorepp; ?>;" align="left" bgcolor="<? echo $colore; ?>"><?php echo $tuttocliente; ?></td>
      <td   style="color: <? echo $colorepp; ?>;" align="left" bgcolor="<? echo $colore; ?>"><?php echo $tuttocommessa; ?></td>
      <td   style="color: <? echo $colorepp; ?>;" align="left" bgcolor="<? echo $colore; ?>"><?php echo $tipofatta1; ?></td>
      <td   style="color: <? echo $colorepp; ?>;" align="left" bgcolor="<? echo $colore; ?>"><?php echo $periodofatta1; ?></td>
<!--      <td   style="color: <? echo $colorepp; ?>;"align="left" bgcolor="<? echo $colore; ?>"><?php echo $caricoa1; ?></td> -->
<!--      <td   align="center" ><a  href="?login=<?php echo $login; ?>&ingranaggiox=10&progr=<?php echo $progr; ?>&commessa=<? echo $commessa; ?>&cliente=<? echo $clientex; ?>"  ><img border="0" background="btn1.gif" src="occhio.png" width="20" height="20"></a></td> -->
<!-- <td   align="center" ><a  href="?login=<?php echo $login; ?>&ingranaggio=11&modificatipo=1&progr=<?php echo $progr; ?>&cerca=<? echo $progry; ?>&commessa=<? echo $commessa; ?>&cliente=<? echo $cliente; ?>&tipointerventoyy=<?echo $tipointervento; ?>"  ><img border="0" background="btn1.gif" src="pencil.png" width="20" height="20"></a></td>  -->          
     </tr>	       
<? }}  ?>
</table>
<? ########################################  FINE ELENCO TIPI DI INTERVENTO  #################################  ?>

<? } ?>


<? } 
if($ingranaggiox=="2" ) {  ?>
<div class="table-ticket-footer">
  <table id="tableFooter" class="display" cellspacing="0"  style="position:relative;">         
              <thead class="intesta">
    <tr class="testa">
      
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Codice</td>                              
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Tipo Intervento</td>
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Tipo fatturazione</td>        
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >PeriodicitÃ  Fatt.</td>
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >In Carico a</td>
            <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" ></td>		
            <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" ></td>		
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
      <td   align="left" bgcolor="<? echo $colore; ?>"><?php echo $tipointervento; ?></td>
      <td   align="left" bgcolor="<? echo $colore; ?>"><?php echo $tipointervento1; ?></td>
      <td   align="left" bgcolor="<? echo $colore; ?>"><?php echo $tipofatta1; ?></td>
      <td   align="left" bgcolor="<? echo $colore; ?>"><?php echo $periodofatta1; ?></td>
      <td   align="left" bgcolor="<? echo $colore; ?>"><?php echo $caricoa1; ?></td> 
      <td   align="center" ><a  href="?login=<?php echo $login; ?>&ingranaggiox=10&progr=<?php echo $progr; ?>&commessa=<? echo $commessa; ?>&cliente=<? echo $clientex; ?>&ingranaggioxxx=1"  ><img border="0" background="btn1.gif" src="occhio.png" width="20" height="20"></a></td>
      <td   align="center" ><a  href="?login=<?php echo $login; ?>&ingranaggiox=11&progr=<?php echo $progr; ?>&commessa=<? echo $commessa; ?>&cliente=<? echo $clientex; ?>&ingranaggioxxx=1"  ><img border="0" background="btn1.gif" src="pencil.png" width="20" height="20"></a></td>     
     </tr>	       
<? }}  ?>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<? }     
    
if($ingranaggiox==10 or $ingranaggiox==11) {  ?> 
<?
$sql = "SELECT *  FROM  tipointervento  where progr = '$progrx'";  
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
}}
?>    
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
      <input class="required" type="text" name="tipointervento1" id="tipointervento1" value="<?php echo $tipointervento1; ?>" maxlength="80" >            
      </td>
     
      <td colspan="1" >
      <label>Forniture Spare:</label>
      <br>
      <input type="text" name="materiale1" value="<?php echo $materiale1; ?>" maxlength="200" >
      </td>
</tr>
<tr>
	  <td colspan="2" > 
      <label>Note: </label> 
      <br>    
      <textarea style="background-color: #ececee" name="noteatt1"  cols="57" rows="4"><?php echo $noteatt1; ?></textarea></td>
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
            <label>PeriodicitÃ Â Fatt.:</label>
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
            <input type="text" name="caricoa1" value="<?php echo $caricoa1; ?>" maxlength="200" >
            </td>

            <td colspan="1" >
            <label>Importo singolo ticket:</label>
            <input type="text" name="importoa1" value="<?php echo $importoa1; ?>" maxlength="200" >
            </td>
</tr>
<tr>
            <td colspan="2" >
            <label>Importo in canone:</label>
            <input type="text" name="canone1" value="<?php echo $canone1; ?>" maxlength="200" >
            </td>
</tr>
<tr>
            <td colspan="1" >
            <label>Num. Giornate:</label>
            <input type="text" name="numgior" value="<?php echo $numgior; ?>" maxlength="3" >
            </td>

            <td colspan="1" >
            <label>Importo Giornaliero:</label>
            <input type="text" name="importogior" value="<?php echo $importogior; ?>" maxlength="10" >
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
            <input style="width: 20px;  height: 20px;" type="checkbox" <?php if($giorno1=="on"){echo "checked";} ?>  name="giorno1" size="1" maxlength="">&nbsp;Giorno&nbsp;&nbsp;&nbsp;&nbsp;
            <input style="width: 20px;  height: 20px;" type="checkbox" <?php if($ora1=="on"){echo "checked";} ?>  name="ora1" size="1" maxlength="">&nbsp;Ora  
            </td>
</tr>            
<tr>
            <td colspan="1" align="left">
            <label>Numero Giornate/ore:</label>
            <td>
            <input type="text" name="numgiore1" value="<?php echo $numgiore1; ?>" maxlength="2">
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
            <input style="width: 20px;  height: 20px;" type="checkbox" <?php if($feriali1=="on"){echo "checked";} ?>  name="feriali1" size="1" maxlength="">&nbsp;&nbsp;Feriali 
            </td>
            <td colspan="1" style="width: 33%;">
            da ora:
            <input type="text" name="daorafer1" value="<?php echo $daorafer1; ?>" maxlength="5" >
            </td>
            <td colspan="1" style="width: 33%;">
            a ora: 
            <input type="text" name="arafer1" value="<?php echo $arafer1; ?>" maxlength="5" >
            </td>
</tr>

<tr>            
            <td colspan="1" align="left" style="width: 33%;">
            <input style="width: 20px;  height: 20px;" type="checkbox" <?php if($sabato1=="on"){echo "checked";} ?>  name="sabato1" size="1" maxlength="">&nbsp;&nbsp;Sabato 
            </td>
            <td colspan="1" style="width: 33%;">
            da ora:
            <input type="text" name="daorasab1" value="<?php echo $daorasab1; ?>" maxlength="5" >
            </td>
            <td colspan="1" style="width: 33%;">
            a ora: 
            <input type="text" name="arasab1" value="<?php echo $arasab1; ?>" maxlength="5" >
            </td>
</tr>
<tr>            
            <td colspan="1" align="left" style="width: 33%;">
            <input style="width: 20px;  height: 20px;" type="checkbox" <?php if($festivi1=="on"){echo "checked";} ?>  name="festivi1" size="1" maxlength="">&nbsp;&nbsp;Festivi 
            </td>
            <td colspan="1" style="width: 33%;">
            da ora:
            <input type="text" name="daorafes1" value="<?php echo $daorafes1; ?>" maxlength="5" >
            </td>
            <td colspan="1" style="width: 33%;">
            a ora: 
            <input type="text" name="arafes1" value="<?php echo $arafes1; ?>" maxlength="5" >
            </td>
</tr>
            
            
           
<? if($ingranaggiox=="11"){ ?>
<tr>       
    <td colspan="3" style="text-align: center; " >       
    <input type="hidden" name="ingranaggiox" value="20" />
    <input type="hidden" name="login" value="<?php echo $login; ?>" /> 
    <input type="hidden" name="progr" value="<?php echo $progr; ?>" />
    <input type="hidden" name="cliente" value="<?php echo $clientex; ?>" /> 
    <input type="hidden" name="commessa" value="<?php echo $commessa; ?>" />  
    <input type="hidden" name="tipointervento" value="<?php echo $tipointervento; ?>" />
    <input type="hidden" name="ingranaggioxxx" value="1" />           
    <button  type="submit" class="btn btn-warning">Modifica</button>
    </td> 
</form>
  </tr> 
<? } ?> 
</table>

</div>
</div>
</div>
</div>
</div>
<br>
<br>
<? $oggiora=date("d/m/Y"); 
$numerodoc=$numero;
?>
<p align="center"><font face="Verdana" size="4" style="font-family: Verdana;" color="#993300">Inserimento Nuovo Documento </font></b></p><div align="center">    
<table class="table-form">
<form action="" method="post" enctype="multipart/form-data" >
		<tr>
        <th colspan="1" class=" borted-top-table"> 
        Data Documento:
        </th>
        <th colspan="1" class=" borted-top-table"> 
        Scadenza Documento:
        </th>   
        </tr> 
        
         <tr>
    <td  colspan="1">
      <input class="required" type="text" name="newdata" value="<?php echo $oggiora; ?>"  size="10"  >    
      <td colspan="1"> 
      <input class="required" type="text" name="newdatasca" value="31/12/9999"  size="10"  >    
    </td>            
  </tr>
</table>


<table class="table-form">        
        <tr>
		<td colspan="2"> 
        <label style="color: #8e8b8b;">Oggetto:</label>
        <input class="required" type="text" id="newoggetto"  name="newoggetto"  maxlength="200" >
        </td>  
        </tr>
	
		<tr>
		<td colspan="2"> 
        <label style="color: #8e8b8b;">Scegli Documento:</label>	    
		 <input type="hidden" name="ingranaggioy" value="40" />
         <input type="hidden" name="login" value="<? echo $login; ?>" />
         <input type="hidden" name="ingranaggio" value="34" />
         <input type="hidden" name="cliente" value="<?php echo $clientex; ?>" />
         <input type="hidden" name="commessa" value="<?php echo $commessa; ?>" />
         <input type="hidden" name="progr" value="<?php echo $progrx; ?>" />
         <input type="hidden" name="tipointervento" value="<?php echo $tipointervento; ?>" /> 
		 <input class="required" type="file" name="fileToUpload" id="fileToUpload" size="150" >
         </td>	
         </tr>
         
         <tr>
         <td colspan="2">
         <label>Da riportare per ogni Ticket:</label>
          <select class="required" size="1" name="siticket" id="siticket" >
          <option <? if($siticketx=="NO"){echo "selected";}?>>NO</option>
          <option <? if($siticketx=="NO"){echo "selected";}?>>SI</option>     
         </td>
         </tr>
         
         
         
         <tr>
         <td colspan="2" style="text-align:center;">           
         <input type="hidden" name="ingranaggioy" value="40" />
         <input type="hidden" name="login" value="<?php echo $login; ?>" />    
         <input type="hidden" name="cliente" value="<?php echo $clientex; ?>" />
         <input type="hidden" name="commessa" value="<?php echo $commessa; ?>" />
         <input type="hidden" name="progr" value="<?php echo $progrx; ?>" />
         <input type="hidden" name="tipointervento" value="<?php echo $tipointervento; ?>" /> 
         <input type="hidden" name="ingranaggio" value="34" />  
         <input type="hidden" name="ingranaggiodocu" value="1" /> 
         <input type="hidden" name="ingranaggioxxx" value="1" />                           
         <button class="btn btn-primary" type="submit" type="button" >Memorizza Documento</button>                  
     	 </td>
        </form>
        </tr>
        </table>
        <br>
<p align="center"><font face="Verdana" size="4" style="font-family: Verdana;" color="#993300">Lista Documenti Caricati </font></b></p>   

<table class="table-form">        
        <tr>
		<th colspan="1" class=" borted-top-table" width="10%"> 
        Data Doc.
        </th>
        <th colspan="1" class=" borted-top-table" width="10%"> 
        Scad. Doc.
        </th>
        <th colspan="1" class=" borted-top-table" width="5%"> 
        Ticket
        </th>
        <th colspan="1" class=" borted-top-table" width="65%"> 
        Oggetto
        </th>
        <th colspan="2" class=" borted-top-table" width="10%" style="text-align:center;"> 
        Operazioni
        </th>
        </tr> 
        
<?
$sql = "SELECT * FROM documenti  where    tipodoc = '$tipointervento'";        
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
   $siticket = $macrogruppo["siticket"];
#echo $prgr;
?>
<tr>
<tr onMouseOver="style.background='#c9cacb';" onMouseOut="style.background=''">

    
		<td  style="color: <?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>;"><? echo $data; ?></td>
        <td  style="color: <?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>;"><? echo $datasca; ?></td>
        <td  align="center" style="color: <?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>;"><? echo $siticket; ?></td>
        <td  style="color: <?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>;"><? echo $oggettox; ?></td>
		<td style="text-align:center;">
        <a href="?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&cliente=<?php echo $clientex; ?>&commessa=<? echo $commessa; ?>&ingranaggio=34&ingranaggiox=11&ingranaggioy=40&ingranaggiovedi=201&progr=<?php echo $progrx; ?>&prgr=<? echo $prgr; ?>" >
        <button type="button" class="btn btn-success" ><i class="fa-solid fa-plus"></i></button></a>
        </td>
        <td style="text-align:center;" >
        <a href="?fileh=<?php echo $file; ?>&ingranaggiocancelladoc=1&login=<?php echo $login; ?>&cliente=<?php echo $clientex; ?>&commessa=<? echo $commessa; ?>&ingranaggio=34&ingranaggiox=11&ingranaggioy=40&progr=<?php echo $progrx; ?>&prgr=<? echo $prgr; ?>" >
        <button type="button" class="btn btn-success" onclick="return confirm('Sei sicuro di volere cancellare?')"><i class="fa-solid fa-minus"></i></button></a>

</td>

     
        </tr>        
        
<? }} ?>        
        
        
</table>               
<?php if($ingranaggiovedi==201){ 
#echo "file ".$fileh."<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; exit;
?>

    <tr>
    <td colspan="5" ><br>
<div>
<iframe  align="center" frameborder="0" width="85%" height="800" scrolling="yes" src="esponipdfffxx.php?login=<?php echo $login; ?>&fl=<?php echo $fileh; ?>"></iframe> 
</div>    
    </td>
    </tr>
<?php } 

?>   
	</table> 
</td>
</tr>
</table> 
<? } ?>             
            <br>

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
	            //console.log("attivitÃ ", responce)
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
 total();
 totalt();
</script>

</body>

</html>