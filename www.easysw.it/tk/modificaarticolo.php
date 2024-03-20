<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="inizio.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php  }
include "conf_DB.php";
$login=$_REQUEST["login"];
$ingranaggio=$_REQUEST["ingranaggio"];
$codice=$_REQUEST["codice"];

#$importo=number_format($importo, 2);
$erroreriferimento="";
if ($ingranaggio==100)
   { 
$errore="";  
$dataoperazione=$_REQUEST["dataoperazione"];
$denominazione=$_REQUEST["denominazione"];
$ncliente=$_REQUEST["ncliente"];
$ncostruttore=$_REQUEST["ncostruttore"];
$cliprop=$_REQUEST["cliprop"];
$tipo=$_REQUEST["tipo"];
$gruppo=$_REQUEST["gruppo"];
$marca=$_REQUEST["marca"];
$modello=$_REQUEST["modello"];
$volume=$_REQUEST["volume"];
$peso=$_REQUEST["peso"];
$note=$_REQUEST["note"]; 
$comodocommessa=$_REQUEST["commessah"];
$denominazione=str_replace("'", "\'", $denominazione); 
$marca=str_replace("'", "\'", $marca);
$modello=str_replace("'", "\'", $modello);
$volume=str_replace("'", "\'", $volume);
$peso=str_replace("'", "\'", $peso);
$comodocommessa=str_replace("'", "\'", $comodocommessa);
#echo  $comodocommessa;   exit;


    
$sql = "Update articolo set                           
dataoperazione='$dataoperazione', 
denominazione='$denominazione', 
ncliente='$ncliente', 
ncostruttore='$ncostruttore',
cliprop='$cliprop', 
tipo='$tipo', 
gruppo='$gruppo', 
marca='$marca', 
modello='$modello', 
volume='$volume', 
peso='$peso', 
note='$note',
commessa='$comodocommessa' 
where codice = '$codice' ";
 # echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {$errore="Articolo Modificato Correttamente"; $ingranaggio="";} 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 
  
} 
?>

<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>inserimento documenti</title>
<?php include("risorsePrincipali.php"); ?>

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
	"lengthMenu": [ [ 10, -1, 25, 50 ], [ 10, "Tutti", 25, 50 ] ],
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
  @import url('https://fonts.googleapis.com/css2?family=Verdana:ital,wght@0,200;0,300;0,500;1,100&display=swap');
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


<?php 


#echo $ingranaggio;
if($ingranaggio==33 or $ingranaggio==100){
#echo "ivax ".$ivax;
if ($ragsocx!="")
   {$selezionaragsoc= " and ragsoc like '".$ragsocx."%"."' ";}
   else
   {$selezionaragsoc="";}
if ($cognome!="")
   {$selezionacognome= " and (cognomeamm like '".$cognome."%"."' or cognomeop like '".$cognome."%"."' or cognomelog like '".$cognome."%"."') ";}
   else
   {$selezionacognome="";}
if ($ivax!="")
   {$selezionaiva= " and iva = '".$ivax."' ";}
   else
   {$selezionaiva="";}



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
alert ("Il mese inserito non č valido");
}
// controllo il formato del giorno
if (giorno < 10) {
giorno = "0" + giorno;
}
// controllo sul valore del giorno
if (giorno > 31){
alert("Il giorno non č valido");
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
        
                    

        if(dataoperazione.value=="") { 
            alert("Error: manca DATA DEL DOCUMENTO"); 
            dataoperazione.focus(); 
            return false; 
                              } 
                              
         if(denominazione.value=="") { 
            alert("Error: manca DENOMINAZIONE ARTICOLO"); 
            denominazione.focus(); 
            return false; 
                              }  
         
                                              
                                                     
                                  } 
        } 

$(function(){
  $('#dateOp').datepicker({
    language: "it",
    autoclose: true,
    todayHighlight: true,
    dateFormat: 'dd/mm/yy'
  });
});
  </script>

<body text="#000000" onLoad="larghezza(); frame();"  >
<div align="center">   

<?php if($ingranaggio==10 or $ingranaggio==11){ 

$sql = "SELECT *  FROM  articolo where codice = '$codice' ";  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
     $progr = $macrogruppo["progr"];
     $denominazione = $macrogruppo["denominazione"];
     $dataoperazione = $macrogruppo["dataoperazione"];
     $codice = $macrogruppo["codice"];
     $ncliente = $macrogruppo["ncliente"];
     $ncostruttore = $macrogruppo["ncostruttore"];
     $cliprop = $macrogruppo["cliprop"];
     #echo $cliprop;
     $tipo = $macrogruppo["tipo"];
     $gruppo= $macrogruppo["gruppo"];
     $marca = $macrogruppo["marca"];
     $modello = $macrogruppo["modello"];
     $volume = $macrogruppo["volume"];
     $peso = $macrogruppo["peso"];
     $note = $macrogruppo["note"];  
     $commessatt = $macrogruppo["commessa"];
     #echo  " xx ".$commessa; exit;
?>
<br>
<p align="center"><b><font face="Arial" size="5" color="#993300">MODIFICA ARTICOLO <? echo '<font face="Arial" size="5" color="#cc0000">'.$codice; ?></font></b></p>
<div style="margin:30px 0;">   
   
<div style="margin:30px 0;">   


<table class="table-form">

<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data">        
    <tr>
        <td  colspan="3"><b><font face="Arial" size="4" color="#993300">
        &nbsp;
        <?php echo $errore; 
        if($ingranaggio==101){ echo " - Codice assegnato ".$codice;} ?>
        </font>
        </td>            
    </tr>
    <tr>
    <? $dataoperazione=date("d/m/Y"); ?>
        <td colspan="1">
            <label>Data Acquisizione</label><br>
            <input class="required" maxlength="10" type="text" name="dataoperazione" id="dateOp" value="<?php echo $dataoperazione; ?>" size="10" >
            <!--<div class="input-group date" id="dateOp">
                <input type="text" class="form-control" id="date"/>
                <span class="input-group-append">
                <span class="input-group-text bg-light d-block">
                    <i class="fa fa-calendar"></i>
                </span>
                </span>
            </div>-->
		</td>
    
        <td colspan="1">
        <label>Descrizione</label><br>
        <input class="required" type="text" name="denominazione" value="<?php echo $denominazione; ?>" maxlength="200" size="60" >
        </td>
        <td colspan="1">
        <label>Parte N° Costruttore:</label><br>
            <input type="text" name="ncostruttore" value="<?php echo $ncostruttore; ?>" maxlength="400" size="60">
    </td>
    </tr>
    <tr>
		<td>
            <label>Parte N° Cliente:</label><br>
            <input  type="text" name="ncliente" value="<?php echo $ncliente; ?>" maxlength="400" size="60" >
        </td>
        <td>
            <label>Cliente Proprietario:</label><br>
            <input type="text" name="cliprop" value="<?php echo $cliprop; ?>"maxlength="400"  size="60">
        </td>
		

	    
	    <td> 
            <label>Tipologia Articolo:</label><br>
<select size="1" name="tipo" style="background-color: #ebf8fb">      
<?php
$sql = "SELECT *  FROM  tipoarticolo ";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
  { 
  $descriziones = $macrogruppo["descrizione"];
?>          
       		<option <?php  if($descriziones==$tipo){echo "selected";}?>><?php echo $descriziones; ?></option>       
<?php  }} ?>
            </select>
        </td>
        </tr>   
        <tr>         
        <td> 
            <label>Gruppo Articolo:</label><br>
<select size="1" name="gruppo" style="background-color: #ebf8fb">      
<?php
$sql = "SELECT *  FROM  gruppoarticolo ";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
  { 
  $descriziones = $macrogruppo["descrizione"];
?>          
       		<option <?php  if($descriziones==$gruppo){echo "selected";}?>><?php echo $descriziones; ?></option>       
<?php  }} ?>
            </select>
        </td>
        <td> 
            <label>Marca:</label><br>
<select size="1" name="marca" style="background-color: #ebf8fb">      
<?php
$sql = "SELECT *  FROM  marcaarticolo ";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
  { 
  $descriziones = $macrogruppo["descrizione"];
?>          
       		<option <?php  if($descriziones==$marca){echo "selected";}?>><?php echo $descriziones; ?></option>       
<?php  }} ?>
            </select>
        </td>
        <td>
  <label>Modello:</label><br>
<select size="1" name="modello" style="background-color: #ebf8fb">      
<?php
$sql = "SELECT *  FROM  modelloarticolo ";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
  { 
  $descriziones = $macrogruppo["descrizione"];
?>          
       		<option <?php  if($descriziones==$modello){echo "selected";}?>><?php echo $descriziones; ?></option>       
<?php  }} ?>
            </select>        
        </td>
</tr>
<tr>
        <td colspan="1">
        <label>Volume</label><br>
        <input  type="text" name="volume" value="<?php echo $volume; ?>" maxlength="200" size="60" >
        </td>
        <td colspan="1">
        <label>Peso:</label><br>
            <input type="text" name="peso" value="<?php echo $peso; ?>" maxlength="10" size="60">
    </td>
    <td>
     <label>Commessa</label><br>
        <select size="1" name="commessah" style="background-color: #ebf8fb">    
     <option >Generica</option>     
<?php
$sql = "SELECT *  FROM  commesse order by commessa ";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
  { 
  $commessax = $macrogruppo["commessa"];
  $nomecommessa = $macrogruppo["nomecommessa"];
 # echo  "x".$comodocommessa;
?>           
       		<option value="<? echo $commessax; ?>" <? if($commessax==$commessatt){echo " selected";}?> ><?php echo $commessax." - ".$nomecommessa; ?></option>       
<?php  }} ?>
            </select> 
    
    
    </td>
    </tr>
<tr>
		<td  colspan="3">
            <label>Note:</label><br>
            <textarea  name="note"  cols="10" rows="5"><?php echo $note; ?></textarea>           
        </td>
</tr>

<? if($ingranaggio==11){ ?>    
<tr>
        <td colspan="3" style="text-align:center">            
                <input type="hidden" name="ingranaggio" value="100" />
                <input type="hidden" name="login" value="<?php echo $login; ?>" />
                <button type="submit" class="btn btn-success">Modifica</button>        
</td>
<? } ?>        
       </tr>          
</form>    
</table>        

<br><br><br><br><br><br><br><br><br><br>

            <br>

<?php }}} 
#echo "ing ".$ingranaggio;
?>

            

<?php if($ingranaggio==10 or $ingranaggio == 11){ } else {?>

<div align="center">
<br>
<p align="center"><b><font face="Arial" size="5" color="#993300">RICERCA/MODIFICA ARTICOLO</font></b></p>
<table align="center" id="example" class="display" cellspacing="0" align="left" style="width:99%; position:relative;">         
             <thead class="intesta">
	<tr class="testa">
		 
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Codice</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Data Acq.</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Descrizione Articolo</td>        
      	  <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Tipologia Articolo</td>
           <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Gruppo Articolo</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Marca</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Modello</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Part N° Costruttore</td>                                                                                                                            
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Part N° Cliente</td>          
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Cliente Proprietario</td>          
                       
          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Oper.</td>
          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Oper.</td>
           </tr>       
	</thead>
	<tbody>
<?php    
$sql = "SELECT *  FROM  articolo ORDER BY codice";  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
      $progr = $macrogruppo["progr"];
     $denominazione = $macrogruppo["denominazione"];
     $dataoperazione = $macrogruppo["dataoperazione"];
     $codice = $macrogruppo["codice"];
     $ncliente = $macrogruppo["ncliente"];
     $ncostruttore = $macrogruppo["ncostruttore"];
     $cliprop = $macrogruppo["cliprop"];
     $tipo = $macrogruppo["tipo"];
     $gruppo= $macrogruppo["gruppo"];
     $marca = $macrogruppo["marca"];
     $modello = $macrogruppo["modello"];
     $volume = $macrogruppo["volume"];
     $peso = $macrogruppo["peso"];
     $note = $macrogruppo["note"]; 
     $commessa = $macrogruppo["commessa"]; 
?>     
    <tr >    
      <td style=" border: 1px solid #e4e3e3; " align="center" ><font size="3"  ><?php echo $codice; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="center" ><font size="3"  ><?php echo $dataoperazione; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="left" ><font size="3"  ><?php echo $denominazione; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="left" ><font size="3"  ><?php echo $tipo; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="left" ><font size="3"  ><?php echo $gruppo; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="left" ><font size="3"  ><?php echo $marca; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="center"><font size="3"  ><?php echo $modello; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="center"><font size="3"  ><?php echo $ncostruttore; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="center"><font size="3"  ><?php echo $ncliente; ?></td> 
      <td style=" border: 1px solid #e4e3e3; " align="center"><font size="3"  ><?php echo $cliprop; ?></td>                 
      <td style=" border: 1px solid #e4e3e3; " align="center" ><a  href="?login=<?php echo $login; ?>&progr=<?php echo $progr; ?>&ingranaggio=10&codice=<?php echo $codice; ?>"  ><img border="0" background="btn1.gif" src="occhio.png" width="25" height="25"></a></td>
      <td style=" border: 1px solid #e4e3e3; " align="center" ><a  href="?login=<?php echo $login; ?>&progr=<?php echo $progr; ?>&ingranaggio=11&codice=<?php echo $codice; ?>"  ><img border="0" background="btn1.gif" src="pencil.png" width="25" height="25"></a></td>
     
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

</body>

</html>