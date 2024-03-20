<?php
session_start(); if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){ $larg= $_SESSION['screen_width'] ; $alt= $_SESSION['screen_height']; } else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) { $_SESSION['screen_width'] = $_REQUEST['width']; $_SESSION['screen_height'] = $_REQUEST['height']; header('Location: ' . $_SERVER['PHP_SELF']); } else { echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width+"&height="+screen.height;</script>'; } 
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
$dataoperazione=$_REQUEST["dataoperazione"];
$ragsoc=$_REQUEST["ragsoc"];
$via=$_REQUEST["via"];
$citta=$_REQUEST["citta"];
$cap=$_REQUEST["cap"];
$prov=$_REQUEST["prov"];
$regione=$_REQUEST["regione"];
$iva=$_REQUEST["iva"];
$codfisc=$_REQUEST["codfisc"];
$telefono=$_REQUEST["telefono"];
$pec=$_REQUEST["pec"];
$email=$_REQUEST["email"];
#echo "em ".$email;
$iban=$_REQUEST["iban"];
$sdi=$_REQUEST["sdi"];
$acro=$_REQUEST["acro"];
$sito=$_REQUEST["sito"];
$cognomeamm=$_REQUEST["cognomeamm"];
$nomeamm=$_REQUEST["nomeamm"];
$ruoloamm=$_REQUEST["ruoloamm"];
$emailamm=$_REQUEST["emailamm"];
$viaamm=$_REQUEST["viaamm"];
$cittaamm=$_REQUEST["cittaamm"];
$capamm=$_REQUEST["capamm"];
$provamm=$_REQUEST["provamm"];
$regioneamm=$_REQUEST["regioneamm"];
$telefonoamm=$_REQUEST["telefonoamm"];
$cellamm=$_REQUEST["cellamm"];
$email1amm=$_REQUEST["email1amm"];

$cognomeop=$_REQUEST["cognomeop"];
$nomeop=$_REQUEST["nomeop"];
$ruoloop=$_REQUEST["ruoloop"];
$emailop=$_REQUEST["emailop"];
$viaop=$_REQUEST["viaop"];
$cittaop=$_REQUEST["cittaop"];
$capop=$_REQUEST["capop"];
$provop=$_REQUEST["provop"];
$regioneop=$_REQUEST["regioneop"];
$telefonoop=$_REQUEST["telefonoop"];
$cellop=$_REQUEST["cellop"];
$email1op=$_REQUEST["email1op"];

$cognomelog=$_REQUEST["cognomelog"];
$nomelog=$_REQUEST["nomelog"];
$ruololog=$_REQUEST["ruololog"];
$emaillog=$_REQUEST["emaillog"];
$vialog=$_REQUEST["vialog"];
$cittalog=$_REQUEST["cittalog"];
$caplog=$_REQUEST["caplog"];
$provlog=$_REQUEST["provlog"];
$regionelog=$_REQUEST["regionelog"];
$telefonolog=$_REQUEST["telefonolog"];
$celllog=$_REQUEST["celllog"];
$email1log=$_REQUEST["email1lo"];

$cognome=str_replace("'", "\'", $cognome);
$ragsoc=str_replace("'", "\'", $ragsoc); 
$via=str_replace("'", "\'", $via);
$citta=str_replace("'", "\'", $citta);
$cognomeamm=str_replace("'", "\'", $cognomeamm);
$cittaamm=str_replace("'", "\'", $cittaamm);
$cognomeop=str_replace("'", "\'", $cognomeop);
$cittaop=str_replace("'", "\'", $cittaop);
$cognomelog=str_replace("'", "\'", $cognomelog);
$cittalog=str_replace("'", "\'", $cittalog);

#$importo=number_format($importo, 2);
$erroreriferimento="";
if ($ingranaggio==100)
   { 
$errore="";   
$sql1 = "SELECT * FROM progressivocliente  where progr = '1' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $numero = $macrogruppo["numero"];	 
			} }
$numero++;
$sql = "UPDATE progressivocliente set 
numero = '$numero'
where 
progr = '1' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; }   
$codice=$acro."-".$numero;      
$sql = "INSERT INTO clienti
( 
codice,                           
dataoperazione, 
ragsoc, 
via, 
citta, 
cap, 
prov, 
regione, 
iva, 
codfisc, 
telefono, 
pec, 
email, 
iban, 
sdi, 
acro, 
cognomeamm, 
nomeamm, 
ruoloamm, 
emailamm, 
viaamm, 
cittaamm, 
capamm, 
provamm, 
regioneamm, 
telefonoamm, 
cellamm, 
email1amm, 
cognomeop, 
nomeop, 
ruoloop, 
emailop, 
viaop, 
cittaop, 
capop, 
provop, 
regioneop, 
telefonoop, 
cellop, 
email1op, 
cognomelog, 
nomelog, 
ruololog, 
emaillog, 
vialog, 
cittalog, 
caplog, 
provlog, 
regionelog, 
telefonolog, 
celllog, 
email1log,
login,
sito) 
VALUES ( 
'$codice',           
'$dataoperazione', 
'$ragsoc', 
'$via', 
'$citta', 
'$cap', 
'$prov', 
'$regione', 
'$iva', 
'$codfisc', 
'$telefono', 
'$pec', 
'$email', 
'$iban', 
'$sdi', 
'$acro', 
'$cognomeamm', 
'$nomeamm', 
'$ruoloamm', 
'$emailamm', 
'$viaamm', 
'$cittaamm', 
'$capamm', 
'$provamm', 
'$regioneamm', 
'$telefonoamm', 
'$cellamm', 
'$email1amm', 
'$cognomeop', 
'$nomeop', 
'$ruoloop', 
'$emailop', 
'$viaop', 
'$cittaop', 
'$capop', 
'$provop', 
'$regioneop', 
'$telefonoop', 
'$cellop', 
'$email1op', 
'$cognomelog', 
'$nomelog', 
'$ruololog', 
'$emaillog', 
'$vialog', 
'$cittalog', 
'$caplog', 
'$provlog', 
'$regionelog', 
'$telefonolog', 
'$celllog', 
'$email1lo',
'$login',
'$sito' 
)";
  #echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {$errore="Cliente Memorizzato Correttamente";$ingranaggio=101; } 
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
<div style="margin:30px 0;">   


<table class="table-form">

<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data">        
    <tr>
        <td  colspan="3">
        &nbsp;<?php echo $errore; ?>&nbsp;
        </td>            
    </tr>
    <tr>
        <td colspan="1">
            <label>Data Acquisizione</label><br>
            <input maxlength="10" type="text" name="dataoperazione" id="dateOp" value="<?php echo $dataoperazione; ?>" size="10" >
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
        <label>Ragione Sociale</label><br>
        <input type="text" name="ragsoc" value="<?php echo $ragsoc; ?>" maxlength="60" size="60" >
        </td>
        <td colspan="1">
        <label>Via:</label><br>
            <input type="text" name="via" value="<?php echo $via; ?>" maxlength="60" size="60">
    </td>
    </tr>
    <tr>
		<td>
            <label>Città:</label><br>
            <input type="text" name="citta" value="<?php echo $citta; ?>" maxlength="60" size="60" >
        </td>
        <td>
            <label>Cap:</label><br>
            <input type="text" name="cap" value="<?php echo $cap; ?>"maxlength="5"  size="10">
        </td>
		<td>
            <label>Provincia: </label><br>
            <input type="text" name="prov" value="<?php echo $prov; ?>" maxlength="60" size="60">
        </td>
    </tr>
    <tr>
		<td>
            <label>Nazione:</label><br>
            <input type="text" name="regione" value="<?php echo $regione; ?>" maxlength="60" size="60">
        </td>
		<td>
            <label> P.iva:</label><br>
            <input type="text" name="iva" value="<?php echo $iva; ?>" maxlength="15" size="60">
        </td>
		<td>
            <label>C. F.:</label><br>
            <input type="text" name="codfisc" value="<?php echo $codfisc; ?>" maxlength="20" size="60">
        </td>
    </tr>
    <tr>
		<td>
            <label>Telefono: </label><br>
            <input type="text" name="telefono" id="telefono" value="<?php echo $telefono; ?>" maxlength="30" size="60" >
        </td>
        <td>
            <label>PEC:</label><br>
            <input type="text" name="pec" value="<?php echo $pec; ?>"maxlength="60" size="60"  >
        </td>
        <td > 
            <label>Email: </label><br>  
            <input type="text" name="email" id="email" value="<?php echo $email; ?>" maxlength="60" size="60"  >
        </td>
    </tr>
    <tr>
	    <td> 
            <label>IBAN:</label><br>
            <input type="text" name="iban" value="<?php echo $iban; ?>" maxlength="60" size="20"  >
        </td>
	    <td> 
            <label>SDI:</label><br>
            <input type="text" name="sdi" value="<?php echo $sdi; ?>" maxlength="60" size="60"  >
        </td>
        <td> 
            <label>Acronimo:</label><br>
            <input type="text" name="acro" value="<?php echo $acro; ?>" maxlength="3" size="5"  >
        </td>
    </tr>
    <tr>
        <td> 
            <label>Sito:</label><br>
            <input type="text" name="sito" value="<?php echo $sito; ?>" maxlength="60" size="60"  >
        </td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th colspan="3"> 
            Rif. Amministrativi
        </th>
    </tr>
    <tr>
		<td> 
            <label>Cognome:</label><br>
            <input type="text" name="cognomeamm" value="<?php echo $cognomeamm; ?>" maxlength="60" size="60"  >
        </td>
		<td> 
            <label>Nome:</label><br>   
           <input type="text" name="nomeamm" value="<?php echo $nomeamm; ?>" maxlength="60" size="60"  >
        </td>
		<td> <label>Ruolo:</label><br>
        <input type="text" name="ruoloamm" value="<?php echo $ruoloamm; ?>" maxlength="60" size="60"  >
        </td>
    </tr>
    <tr>
		<td> 
            <label>Via:</label><br>
            <input type="text" name="viaamm" value="<?php echo $viaamm; ?>" maxlength="60" size="60"  >
        </td>
        <td> 
            <label>Città:</label><br>
            <input type="text" name="cittaamm" value="<?php echo $cittaamm; ?>" maxlength="60" size="60"  >
        </td>
		<td> 
            <label>Cap:</label><br>
            <input type="text" name="capamm" value="<?php echo $capamm; ?>" maxlength="5" size="10"  >
        </td>
	</tr>
    <tr>
		<td> 
             <label>Provincia: </label><br>
            <input type="text" name="provamm" value="<?php echo $provamm; ?>" maxlength="60" size="60"  >
        </td>
		<td> 
            <label>Nazione:</label><br>
            <input type="text" name="regioneamm" value="<?php echo $regioneamm; ?>" maxlength="60" size="60"  >
        </td>
		<td> 
            <label>Telefono:</label><br>
            <input type="text" name="telefonoamm" id="telefonoamm" value="<?php echo $telefonoamm; ?>" maxlength="30" size="20"  >
        </td>
	</tr>
    <tr>
		<td> 
            <label>Cellulare:</label><br>
            <input type="text" name="cellamm" value="<?php echo $cellamm; ?>" maxlength="30" size="20"  >
        </td>
		<td> 
            <label>E-mail:</label><br>
            <input type="text" name="email1amm" id="email1amm" value="<?php echo $email1amm; ?>" maxlength="60" size="60"  >
        </td>
        <td></td>
    <tr>
        <th colspan="3"> 
            Rif. Operativo
        </th>
    </tr>
    <tr>
		<td> 
            <label>Cognome:</label><br>
            <input type="text" name="cognomeop" value="<?php echo $cognomeop; ?>" maxlength="60" size="60"  >
        </td>
		<td> 
            <label>Nome:</label><br>
            <input type="text" name="nomeop" value="<?php echo $nomeop; ?>" maxlength="60" size="60"  >
        </td>
		<td>
            <label>Ruolo:</label><br>
            <input type="text" name="ruoloop" value="<?php echo $ruoloop; ?>" maxlength="60" size="60"  >
        </td>
	</tr>
    <tr>
		<td> 
            <label>Via:</label><br>
            <input type="text" name="viaop" value="<?php echo $viaop; ?>" maxlength="60" size="60"  >
        </td>
		<td> 
            <label>Città:</label><br>
            <input type="text" name="cittaop" value="<?php echo $cittaop; ?>" maxlength="60" size="60"  >
        </td>
		<td> 
            <label>Cap:</label><br>
            <input type="text" name="capop" value="<?php echo $capop; ?>" maxlength="5" size="10"  >
        </td>
	</tr>
    <tr>
		<td> 
            <label>Provincia:</label><br>
            <input type="text" name="provop" value="<?php echo $provop; ?>" maxlength="60" size="60"  >
        </td>
		<td>
            <label>Nazione:</label><br>
            <input type="text" name="regioneop" value="<?php echo $regioneop; ?>" maxlength="60" size="60"  >
        </td>
		<td> 
            <label>Telefono:</label><br>
            <input type="text" name="telefonoop" id="telefonoop" value="<?php echo $telefonoop; ?>" maxlength="30" size="20"  >
        </td>
	</tr>
    <tr>
		<td>
            <label>Cellulare:</label><br>
            <input type="text" name="cellop" value="<?php echo $cellop; ?>" maxlength="30" size="20"  >
        </td>
		<td> 
            <label>E-mail:</label><br>
            <input type="text" name="email1op" id="email1op" value="<?php echo $email1op; ?>" maxlength="60" size="60"  >
        </td>
        <td></td>
	</tr>
    <tr>
        <th colspan="3"> 
            Rif. Logistica
        </th>
    </tr>
    <tr>
        <td> 
            <label>Cognome:</label><br>
            <input type="text" name="cognomelog" value="<?php echo $cognomelog; ?>" maxlength="60" size="60"  >
        </td>
        <td> 
            <label>Nome:</label><br>
            <input type="text" name="nomelog" value="<?php echo $nomelog; ?>" maxlength="60" size="60"  >
        </td>
		<td> 
            <label>Ruolo:</label><br>
            <input type="text" name="ruololog" value="<?php echo $ruololog; ?>" maxlength="60" size="60"  >
        </td>
	</tr>
    <tr>
		<td> 
            <label>Via:</label><br>
            <input type="text" name="vialog" value="<?php echo $vialog; ?>" maxlength="60" size="60"  >
        </td>
		<td> 
             <label>Città:</label><br>
            <input type="text" name="cittalog" value="<?php echo $cittalog; ?>" maxlength="60" size="60"  >
        </td>
		<td> 
            <label>Cap:</label><br>
            <input type="text" name="caplog" value="<?php echo $caplog; ?>" maxlength="5" size="10"  >
         </td>
	</tr>
    <tr>
		<td> 
            <label>Provincia:</label><br>
            <input type="text" name="provlog" value="<?php echo $provlog; ?>" maxlength="60" size="60"  >
        </td>
		<td> 
            <label>Nazione:</label><br>
            <input type="text" name="regionelog" value="<?php echo $regionelog; ?>" maxlength="60" size="60"  >
        </td>
		<td> 
            <label>Telefono:</label><br>
            <input type="text" name="telefonolog" id="telefonolog" value="<?php echo $telefonolog; ?>" maxlength="30" size="20"  >
        </td>
	</tr>
    <tr>
		<td> 
            <label>Cellulare:</label><br>
            <input type="text" name="celllog" value="<?php echo $celllog; ?>" maxlength="60" size="20"  >
        </td>
		<td>
            <label>E-mail:</label><br>
            <input type="text" name="email1log" id="email1log" value="<?php echo $email1log; ?>"maxlength="60" size="60"  >
        </td>
        <td></td>
    </tr>
    </tr>
        <td colspan="3" style="text-align:center">
            <?php if($ingranaggio==101){} else{ ?>
            
                <input type="hidden" name="ingranaggio" value="100" />
                <input type="hidden" name="login" value="<?php echo $login; ?>" />
                <button type="submit" class="btn btn-success">Salva Cliente</button>        
            <?php } ?>
        </td>
       </tr>          
</form>    
</table>        

<br><br><br><br><br><br><br><br><br>

</div>
</body>

</html>