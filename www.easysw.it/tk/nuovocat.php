<?php
session_start(); if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){ $larg= $_SESSION['screen_width'] ; $alt= $_SESSION['screen_height']; } else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) { $_SESSION['screen_width'] = $_REQUEST['width']; $_SESSION['screen_height'] = $_REQUEST['height']; header('Location: ' . $_SERVER['PHP_SELF']); } else { echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width+"&height="+screen.height;</script>'; } 

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
<title>nuovo cat</title>
<?php include("risorsePrincipali.php"); ?>
<script>
$(function() {
	$('#popupDatepicker').datepick();
  $('#popupDatepicker1').datepick();
	$('#inlineDatepicker').datepick({onSelect: showDate});

});

function showDate(date) {
	alert('The date chosen is ' + date);
}

<style>
  @import url('https://fonts.googleapis.com/css2?family=Verdana:ital,wght@0,200;0,300;0,500;1,100&display=swap');
</style>
</script>

<style>
@font-face {
   font-family: 'Verdana';
   src: url(Verdana.eot);
   src: local('Verdana'), url('Verdana.ttf') format('truetype');
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
div#container {
min-width:   650px;
  min-height:  500px;
  max-width:  700px;
  max-height: 1000px;
}
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
$telefonoamm=$_REQUEST["telefonoamm"];
$pec=$_REQUEST["pec"];
$email=$_REQUEST["email"];
#echo "em ".$email;
$iban=$_REQUEST["iban"];
$sdi=$_REQUEST["sdi"];
$acro=$_REQUEST["acro"];

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
$ragsoclog=$_REQUEST["ragsoclog"];
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
$loginaccessoamm=$_REQUEST["loginaccessoamm"];
$passaccessoamm=$_REQUEST["passaccessoamm"];
$loginaccessoop=$_REQUEST["loginaccessoop"];
$passaccessoop=$_REQUEST["passaccessoop"];


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
$codice=$numero;      
$sql = "INSERT INTO cat
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
pec,  
iban, 
sdi, 
ammcognome, 
ammnome, 
ammruolo, 
ammemail, 
ammvia, 
ammcitta, 
ammcap, 
ammprov, 
ammregione, 
ammtelefono, 
ammcell, 
opcognome, 
opnome, 
opruolo, 
opemail, 
opvia, 
opcitta, 
opcap, 
opprov, 
opregione, 
optelefono, 
opcell, 
logragsoc,
logcognome, 
lognome, 
logruolo, 
logemail, 
logvia, 
logcitta, 
logcap, 
logprov, 
logregione, 
logtelefono, 
logcell, 
login,
ammlogin,
ammpassword,
oplogin,
oppassword
) 
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
'$pec',  
'$iban', 
'$sdi',  
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
'$ragsoclog', 
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
'$login',
'$loginaccessoamm',
'$passaccessoamm',
'$loginaccessoop',
'$passaccessoop' 
)";
  #echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {$errore="CAT Memorizzato Correttamente";$ingranaggio=101; } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 
   
} 
?>

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
          
          if(iva.value=="") { 
            alert("Error: manca IVA"); 
            iva.focus(); 
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
</head>
<body>
<div align="center"> 
<br>  
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Inserimento Nuovo C.A.T.</font></b></p>
<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data">
<table class="table-form "  style="text-align:left;"> 
            <tr>
            <td colspan="2" align="center" style=" border: 0x solid #949699;" ><b><font face="Verdana" color="#cc0000"  style="font-size: 10pt;"><?php echo $errore; ?></font></b>
            </td>            
            </tr>
            <tr>
            <td colspan="1" ><font face="Verdana" color="#000000" >Data Acquisizione</font>
            </td>
            <td ><input maxlength="10" class="required" type="text" name="dataoperazione" id="dateOp" value="<?php echo $dataoperazione; ?>"  size="10" ></font>
			</td>
            </tr>
            
            <tr>
            <td colspan="1"   ><font face="Verdana" color="#000000">Ragione Sociale</font>
            </td>
            <td >
            <input type="text" class="required" name="ragsoc" value="<?php echo $ragsoc; ?>" maxlength="60" size="60" >
            </td>
            </tr>
            
			<tr>
			<td  ><font face="Verdana" color="#000000">Via: </font></b>
            </td>
            <td >
            <input type="text" class="required" name="via" value="<?php echo $via; ?>" maxlength="60" size="60" >
            </td>
            </tr>       
            
            <tr>
			<td  ><font face="Verdana" color="#000000">Città: </font></b>
            </td>
            <td >
            <input type="text" class="required" name="citta" value="<?php echo $citta; ?>" maxlength="60" size="60" >
            </td>
            </tr>
            
            <tr>
			<td  ><font face="Verdana" color="#000000">Cap: </font></b>
            </td>
            <td >
            <input type="text" class="required" name="cap" value="<?php echo $cap; ?>"maxlength="5"  size="10" >
            </td>
			</tr>
            
            <tr>
			<td  ><font face="Verdana" color="#000000">Provincia: </font></b>
            </td>
            <td >
            <input type="text" class="required"name="prov" value="<?php echo $prov; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            <tr>
			<td  ><font face="Verdana" color="#000000">Regione: </font></b>
            </td>
            <td >
            <input type="text" name="regione" value="<?php echo $regione; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            <tr>
			<td  ><font face="Verdana" color="#000000">P.iva: </font></b>
            </td>
            <td >
            <input type="text" class="required" name="iva" value="<?php echo $iva; ?>" maxlength="15" size="60" >
            </td>
			</tr>
            
            <tr>
			<td ><font face="Verdana" color="#000000">C. F.: </font></b>
            </td>
            <td >
            <input type="text" name="codfisc" value="<?php echo $codfisc; ?>" maxlength="20" size="60" >
            </td>
			</tr>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <tr>
			<td ><font face="Verdana" color="#000000">PEC: </font></b>
            </td>
            <td >
            <input type="text" name="pec" value="<?php echo $pec; ?>"maxlength="60" size="60" >
            </td>
			</tr>
            
            
            
            <tr>
			<td  ><font face="Verdana" color="#000000">IBAN: </font></b>
            </td>
            <td>
            <input type="text" name="iban" value="<?php echo $iban; ?>" maxlength="60" size="20" >
            </td>
			</tr>
            
             <tr>
			<td  ><font face="Verdana" color="#000000">SDI: </font></b>
            </td>
            <td >
            <input type="text" name="sdi" value="<?php echo $sdi; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            

            
            <tr>
            <td colspan="2" align="left" style="background: #476b5d;" ><b><font face="Verdana" color="#ffffff"  style="font-size: 10pt;">Rif. Amministrativi</font></b>
            </td>
            
            </tr>
            
            <tr>
			<td ><font face="Verdana" color="#000000">Cognome: </font></b>
            </td>
            <td >
            <input type="text" name="cognomeamm" value="<?php echo $cognomeamm; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            <tr>
			<td  ><font face="Verdana" color="#000000">Nome: </font></b>
            </td>
            <td >
            <input type="text" name="nomeamm" value="<?php echo $nomeamm; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
             <tr>
			<td  ><font face="Verdana" color="#000000">Ruolo: </font></b>
            </td>
            <td >
            <input type="text" name="ruoloamm" value="<?php echo $ruoloamm; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
             <tr>
			<td  ><font face="Verdana" color="#000000">Email: </font></b>
            </td>
            <td >
            <input type="text" name="emailamm" id="emailamm" value="<?php echo $emailamm; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            
            <tr>
			<td ><font face="Verdana" color="#000000">Via: </font></b>
            </td>
            <td >
            <input type="text" name="viaamm" value="<?php echo $viaamm; ?>" maxlength="60" size="60" >
            </td>
            </tr>
            
            <tr>
			<td  ><font face="Verdana" color="#000000">Città: </font></b>
            </td>
            <td >
            <input type="text" name="cittaamm" value="<?php echo $cittaamm; ?>" maxlength="60" size="60" >
            </td>
            </tr>
            
            <tr>
			<td  ><font face="Verdana" color="#000000">Cap: </font></b>
            </td>
            <td >
            <input type="text" name="capamm" value="<?php echo $capamm; ?>" maxlength="5" size="10" >
            </td>
			</tr>
            
            <tr>
			<td ><font face="Verdana" color="#000000">Provincia: </font></b>
            </td>
            <td >
            <input type="text" name="provamm" value="<?php echo $provamm; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            <tr>
			<td  ><font face="Verdana" color="#000000">Regione: </font></b>
            </td>
            <td >
            <input type="text" name="regioneamm" value="<?php echo $regioneamm; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            <tr>
			<td  ><font face="Verdana" color="#000000">Telefono: </font></b>
            </td>
            <td >
            <input type="text" name="telefonoamm" id="telefonoamm" value="<?php echo $telefonoamm; ?>" maxlength="30" size="20" >
            </td>
			</tr>
            
            <tr>
			<td  ><font face="Verdana" color="#000000">cellulare: </font></b>
            </td>
            <td >
            <input type="text" name="cellamm" value="<?php echo $cellamm; ?>" maxlength="30" size="20" >
            </td>
			</tr>
            
            
            
             <tr>
			<td ><font face="Verdana" color="#000000">Login Accesso: </font></b>
            </td>
            <td >
            <input type="text" name="loginaccessoamm" id="loginaccessoamm" value="<?php echo $loginaccessammo; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            <tr>
			<td  ><font face="Verdana" color="#000000">Password Accesso: </font></b>
            </td>
            <td >
            <input type="text" name="passaccessoamm" id="passaccessoamm" value="<?php echo $passaccessammo; ?>" maxlength="60" size="60" >
            </td>
			</tr>
<!--            
            <tr>
			<td ><font face="Verdana" color="#000000">Profilo permessi: </font></b>
            </td>
            <td >
            <input style="width: 15px;  height: 15px;" type="checkbox" <?php if($permessiamm1=="on"){echo "checked";} ?>  name="permessiamm1" size="1" maxlength=""><font face="Verdana" color="#000000" style="font-size: 10pt;">Autorizzazione 1&nbsp;&nbsp;&nbsp;</font>
            <input style="width: 15px;  height: 15px;" type="checkbox" <?php if($permessiamm2=="on"){echo "checked";} ?>  name="permessiamm2" size="1" maxlength=""><font face="Verdana" color="#000000" style="font-size: 10pt;">Autorizzazione 2&nbsp;&nbsp;&nbsp;</font>  
            <input style="width: 15px;  height: 15px;" type="checkbox" <?php if($permessiamm3=="on"){echo "checked";} ?>  name="permessiamm3" size="1" maxlength=""><font face="Verdana" color="#000000" style="font-size: 10pt;">Autorizzazione 3</font>  
            
            </td>
			</tr>
-->            
            
            
            
            
            
            
            
            <tr>
            <td colspan="2"  align="left" style="background: #476b5d;" ><b><font face="Verdana" color="#ffffff"  style="font-size: 10pt;">Rif. Operativo</font></b>
            </td>
            
            </tr>
            
            <tr>
			<td ><font face="Verdana" color="#000000">Cognome: </font></b>
            </td>
            <td >
            <input type="text" name="cognomeop" value="<?php echo $cognomeop; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            <tr>
			<td  ><font face="Verdana" color="#000000">Nome: </font></b>
            </td>
            <td >
            <input type="text" name="nomeop" value="<?php echo $nomeop; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
             <tr>
			<td  ><font face="Verdana" color="#000000">Ruolo: </font></b>
            </td>
            <td >
            <input type="text" name="ruoloop" value="<?php echo $ruoloop; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
             <tr>
			<td ><font face="Verdana" color="#000000">Email: </font></b>
            </td>
            <td >
            <input type="text" name="emailop" id="emailop" value="<?php echo $emailop; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            
            <tr>
			<td  ><font face="Verdana" color="#000000">Via: </font></b>
            </td>
            <td >
            <input type="text" name="viaop" value="<?php echo $viaop; ?>" maxlength="60" size="60" >
            </td>
            </tr>
            
            <tr>
			<td  ><font face="Verdana" color="#000000">Città: </font></b>
            </td>
            <td >
            <input type="text" name="cittaop" value="<?php echo $cittaop; ?>" maxlength="60" size="60" >
            </td>
            </tr>
            
            <tr>
			<td  ><font face="Verdana" color="#000000">Cap: </font></b>
            </td>
            <td >
            <input type="text" name="capop" value="<?php echo $capop; ?>" maxlength="5" size="10" >
            </td>
			</tr>
            
            <tr>
			<td  ><font face="Verdana" color="#000000">Provincia: </font></b>
            </td>
            <td >
            <input type="text" name="provop" value="<?php echo $provop; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            <tr>
			<td  ><font face="Verdana" color="#000000">Regione: </font></b>
            </td>
            <td >
            <input type="text" name="regioneop" value="<?php echo $regioneop; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            <tr>
			<td  ><font face="Verdana" color="#000000">Telefono: </font></b>
            </td>
            <td >
            <input type="text" name="telefonoop" id="telefonoop" value="<?php echo $telefonoop; ?>" maxlength="30" size="20" >
            </td>
			</tr>
            
            <tr>
			<td ><font face="Verdana" color="#000000">cellulare: </font></b>
            </td>
            <td >
            <input type="text" name="cellop" id="cellop" value="<?php echo $cellop; ?>" maxlength="30" size="20" >
            </td>
			</tr>
            
            
            <tr>
			<td  ><font face="Verdana" color="#000000">Login Accesso: </font></b>
            </td>
            <td >
            <input type="text" name="loginaccessoop" id="loginaccessoop" value="<?php echo $loginaccessop; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            <tr>
			<td ><font face="Verdana" color="#000000">Password Accesso: </font></b>
            </td>
            <td >
            <input type="text" name="passaccessoop" id="passaccessoop" value="<?php echo $passaccessop; ?>" maxlength="60" size="60" >
            </td>
			</tr>
 <!--
            <tr>
			<td  ><font face="Verdana" color="#000000">Profilo permessi: </font></b>
            </td>
            <td >
            <input style="width: 15px;  height: 15px;" type="checkbox" <?php if($permessiop1=="on"){echo "checked";} ?>  name="permessiop1" size="1" maxlength=""><font face="Verdana" color="#000000" style="font-size: 10pt;">Autorizzazione 1&nbsp;&nbsp;&nbsp;</font>
            <input style="width: 15px;  height: 15px;" type="checkbox" <?php if($permessiop2=="on"){echo "checked";} ?>  name="permessiop2" size="1" maxlength=""><font face="Verdana" color="#000000" style="font-size: 10pt;">Autorizzazione 2&nbsp;&nbsp;&nbsp;</font>  
            <input style="width: 15px;  height: 15px;" type="checkbox" <?php if($permessiop3=="on"){echo "checked";} ?>  name="permessiop3" size="1" maxlength=""><font face="Verdana" color="#000000" style="font-size: 10pt;">Autorizzazione 3</font>  
            
            </td>
			</tr>
-->            
            
            
            
            
            
            
            
            
            
            
            
            
            <tr>
            <td colspan="2"  align="left" style="background: #476b5d;" ><b><font face="Verdana" color="#ffffff"  style="font-size: 10pt;">Rif. Logistica Sede 1</font></b>
            </td>
            
            </tr>
             <tr>
            <td colspan="1"  ><font face="Verdana" color="#000000" style="font-size: 10pt;">Ragione Sociale</font></b>
            </td>
            <td >
            <input type="text" name="ragsoclog" value="<?php echo $ragsoclog; ?>" maxlength="60" size="60" >
            </td>
            </tr>
            <tr>
			<td  ><font face="Verdana" color="#000000">Cognome: </font></b>
            </td>
            <td >
            <input type="text" name="cognomelog" value="<?php echo $cognomelog; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            <tr>
			<td ><font face="Verdana" color="#000000">Nome: </font></b>
            </td>
            <td >
            <input type="text" name="nomelog" value="<?php echo $nomelog; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
             <tr>
			<td  ><font face="Verdana" color="#000000">Ruolo: </font></b>
            </td>
            <td >
            <input type="text" name="ruololog" value="<?php echo $ruololog; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
             <tr>
			<td  ><font face="Verdana" color="#000000">Email: </font></b>
            </td>
            <td >
            <input type="text" name="emaillog" id="emaillog" value="<?php echo $emaillog; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            
            <tr>
			<td  ><font face="Verdana" color="#000000">Via: </font></b>
            </td>
            <td >
            <input type="text" name="vialog" value="<?php echo $vialog; ?>" maxlength="60" size="60" >
            </td>
            </tr>
            
            <tr>
			<td ><font face="Verdana" color="#000000">Città: </font></b>
            </td>
            <td >
            <input type="text" name="cittalog" value="<?php echo $cittalog; ?>" maxlength="60" size="60" >
            </td>
            </tr>
            
            <tr>
			<td  ><font face="Verdana" color="#000000">Cap: </font></b>
            </td>
            <td >
            <input type="text" name="caplog" value="<?php echo $caplog; ?>" maxlength="5" size="10" >
            </td>
			</tr>
            
            <tr>
			<td ><font face="Verdana" color="#000000">Provincia: </font></b>
            </td>
            <td >
            <input type="text" name="provlog" value="<?php echo $provlog; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            <tr>
			<td ><font face="Verdana" color="#000000">Regione: </font></b>
            </td>
            <td >
            <input type="text" name="regionelog" value="<?php echo $regionelog; ?>" maxlength="60" size="60" >
            </td>
			</tr>
            
            <tr>
			<td  ><font face="Verdana" color="#000000">Telefono: </font></b>
            </td>
            <td >
            <input type="text" name="telefonolog" id="telefonolog" value="<?php echo $telefonolog; ?>" maxlength="30" size="20" >
            </td>
			</tr>
            
            <tr>
			<td ><font face="Verdana" color="#000000">cellulare: </font></b>
            </td>
            <td >
            <input type="text" name="celllog" value="<?php echo $celllog; ?>" maxlength="60" size="20" >
            </td>
			</tr>
            
          
            <tr>
				
                <?php if($ingranaggio==101){} else{ ?>
				<td colspan="2" style="text-align: center; ">
                
                 <input type="hidden" name="ingranaggio" value="100" />
                 <input type="hidden" name="login" value="<?php echo $login; ?>" />
                 <button  type="submit" class="btn btn-warning">Memorizza C.A.T.</button>
                 </td>               
			<?php } ?>
            
            </tr>
            
            
            
            
            
            
            
            
            
            </table>
</form>    
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


</div>
</div>


</body>

</html>