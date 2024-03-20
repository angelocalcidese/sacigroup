<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="inizio.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php  }
$login=$_REQUEST["login"];
include "conf_DB.php";
$anno=$_REQUEST["anno"];
#echo $login;
$ingranaggio=$_REQUEST["ingranaggio"];
$progr=$_REQUEST["progr"];
#echo "progr. ".$progr;
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>inserimento documenti</title>
<?php include("risorsePrincipali.php"); ?>

<script type="text/javascript">
$(function(){
     $('tr').hover(function(){
           $(this).css('background','#dedede');
     }, function(){
           $(this).css('background','#efefef');
     });
});
function setCosto(sel){
var costo = String(document.form.tipodocumento.value); // prendo il valore della select
document.form.bancacassa.value = costo; // lo setto come valore della textfield } 
 var f = document.form;
  f.sel_value.value = sel.options[sel.selectedIndex].value;
  f.sel_textx.value = sel.options[sel.selectedIndex].text;
  
var op = document.getElementById("bancacassa").getElementsByTagName("option");

for (var i = 0; i < op.length; i++) {
//alert (costo);
//alert (op[i].value.toLowerCase());
if(costo == 2) {
op[i].disabled = false;
  if (op[i].value.toLowerCase() >= "51" && op[i].value.toLowerCase() <= "59") {    
    op[i].disabled = true;
  } 
  }
  
if(costo == 1) {
op[i].disabled = false;
  if (op[i].value.toLowerCase() >= "61" && op[i].value.toLowerCase() <= "69") {
    op[i].disabled = true;
  }
} 
}
}
</script>
</head>

<?php 

$login=$_REQUEST["login"];

if ($ingranaggio==100)
   { 
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
$commessa=$_REQUEST["commessa"]; 
$denominazione=str_replace("'", "\'", $denominazione); 
$marca=str_replace("'", "\'", $marca);
$modello=str_replace("'", "\'", $modello);
$volume=str_replace("'", "\'", $volume);
$peso=str_replace("'", "\'", $peso);
$note=str_replace("'", "\'", $note);
$commessa=str_replace("'", "\'", $commessa);
$erroreriferimento="";

$errore="";   
$sql1 = "SELECT * FROM progressivoarticolo  where progr = '1' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $numero = $macrogruppo["numero"];	 
			} }
$numero++;
$sql = "UPDATE progressivoarticolo set 
numero = '$numero'
where 
progr = '1' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; }   
$codice="ART".$numero;      
$sql = "INSERT INTO articolo
( 
codice,                           
dataoperazione, 
denominazione, 
ncliente,
ncostruttore, 
cliprop, 
tipo, 
gruppo, 
marca, 
modello,
volume,
peso,
note,
login,
commessa) 
VALUES ( 
'$codice',           
'$dataoperazione', 
'$denominazione', 
'$ncliente',
'$ncostruttore', 
'$cliprop', 
'$tipo', 
'$gruppo', 
'$marca', 
'$modello', 
'$volume', 
'$peso', 
'$note', 
'$login',
'$commessa')";
  #echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {$errore="Articolo Memorizzato Correttamente";$ingranaggio=101; } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 
   
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
            alert("Error: manca DESCRIZIONE ARTICOLO"); 
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
<body>
<br>
<p align="center"><b><font face="Arial" size="5" color="#993300">CREA NUOVO ARTICOLO</font></b></p>
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
            <input type="text" name="ncostruttore" value="<?php echo $ncostruttore; ?>" maxlength="60" size="60">
    </td>
    </tr>
    <tr>
		<td>
            <label>Parte N° Cliente:</label><br>
            <input  type="text" name="ncliente" value="<?php echo $ncliente; ?>" maxlength="60" size="60" >
        </td>
        <td>
            <label>Cliente Proprietario:</label><br>
            <input type="text" name="cliprop" value="<?php echo $cliprop; ?>"maxlength="5"  size="10">
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
     <td colspan="1">
        <label>Commessa</label><br>
        
       
        <select size="1" name="commessa" style="background-color: #ebf8fb">    
        <option >Generica</option>   
<?php
$sql = "SELECT *  FROM  commesse order by commessa ";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
  { 
  $commessa = $macrogruppo["commessa"];
  $nomecommessa = $macrogruppo["nomecommessa"];
?>          
       		<option value="<? echo $commessa; ?>" ><?php echo $commessa." - ".$nomecommessa; ?></option>       
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

<? if($ingranaggio!=101){ ?>    
<tr>
        <td colspan="3" style="text-align:center">            
                <input type="hidden" name="ingranaggio" value="100" />
                <input type="hidden" name="login" value="<?php echo $login; ?>" />
                <button type="submit" class="btn btn-success">Memorizza</button>        
</td>
<? } ?>        
       </tr>          
</form>    
</table>        

<br><br><br><br><br><br><br><br><br>

</div>
</body>

</html>