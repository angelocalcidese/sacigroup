<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="index.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php  }
$login=$_REQUEST["login"];
$zona=$_REQUEST["zona"];
$ingranaggio=$_REQUEST["ingranaggio"];
include "conf_DB.php";

#header('Content-Type: text/html; charset=utf-8'); 
?>

<html>
<head>

	<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
	<title>Stampa DTT sospesi</title>
	<link rel="stylesheet" type="text/css" href="jquery.tablescroll.css"/>
<style>
div#container {
min-width:   1000px;
  min-height:  500px;
  max-width:  955px;
  max-height: 1000px;
}
div#containerx {
min-width:   955px;
  min-height:  5px;
  max-width:  955px;
  max-height: 5px;
}
div#sottocontainer {
min-width:   800px;
  min-height:  500px;
  max-width:  800px;
  max-height: 1000px;
}
</style>  
<style>
table, th, td {
    border: 0px solid black;    
}
</style>
<style>
tr {
  background-image: url("btn1.gif");
}
 
tr:hover {
    background-image: url("back-barra-menuorrizontale1.gif");
}
</style>
<style>
a:link, a:visited {
  text-decoration: none; 
    font-weight: normal;
    color: #000000
}

a:hover {
  color: black;
 
  text-decoration: none;
}
</style>
<style>
a 
{
    text-decoration: none; 
    font-weight: normal;
    color: #000000
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
<script>
window.onload = function() {
    var image = document.getElementById("img");

    function updateImage() {
        image.src = image.src.split("?")[0] + "?" + new Date().getTime();
    }

    setInterval(updateImage, 1000);
}
</script>
</head>
<body>
<?
$sqlx = "SELECT  a.*
FROM daspedire a where (a.ddt is null) and (a.catassegnato != '')  and (spunta = 'on') and (segno is null)
ORDER BY a.catassegnato DESC";  
#echo $sql;
$rCountx = 1;
$resultx = $conn->query($sqlx);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc())	
	{
     $catassegnato= $macrogruppox["catassegnato"]; 
     $contatore= $macrogruppox["contatore"];
     $pl = $macrogruppox["pl"];
     $pldata = $macrogruppox["pldata"];
     $datarichiesta = $macrogruppox["datarichiesta"];
     $quantitads = $macrogruppox["quantita"];
     $articolods = $macrogruppox["articolo"];
     $progrart = $macrogruppox["progr"];
     $serialeds = $macrogruppox["seriale"];
     $spunta = $macrogruppox["spunta"];
     $segno = $macrogruppox["segno"];
     #echo "s ".$segno;
     $ticket = $macrogruppox["ticket"];
     if($segno=="on"){$spunta="";}
$sqlk = "SELECT *  FROM  tk where numero = '$ticket' ";  
#echo $sql;
$rCountk = 1;
$resultk = $conn->query($sqlk);
if ($resultk->num_rows > 0) {
  while($macrogruppok = $resultk->fetch_assoc())	
	{      
     $clientexx = $macrogruppok["cliente"];
     $commessaxx = $macrogruppok["commessa"];     
    }} 
    
$sqlxe = "SELECT *  FROM  clienti where  codice  = '$clientexx' " ;  
#echo $sql;
$rCounte = 1;
$resultxe = $conn->query($sqlxe);
if ($resultxe->num_rows > 0) {
  while($macrogruppoxe = $resultxe->fetch_assoc())	
	{   
     $ragsocclixx = $macrogruppoxe["ragsoc"];
     }}     
$sqlxj = "SELECT *  FROM  commesse where  commessa  = '$commessaxx' " ;  
#echo $sql;
$rCountj = 1;
$resultxj = $conn->query($sqlxj);
if ($resultxj->num_rows > 0) {
  while($macrogruppoxj = $resultxj->fetch_assoc())	
	{   
     $nomecommessaxx = $macrogruppoxj["nomecommessa"];
     }}      
    
    
        
$sql = "SELECT *  FROM  cat where codice = '$catassegnato' ";  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
$progrtt= $macrogruppo["id"];    
$codice= $macrogruppo["codice"];                     
$dataoperazione= $macrogruppo["dataoperazione"];           
$ragsoc= $macrogruppo["ragsoc"];           
$via= $macrogruppo["via"];           
$citta= $macrogruppo["citta"];           
$cap= $macrogruppo["cap"];           
$prov= $macrogruppo["prov"];           
$regione= $macrogruppo["regione"];           
$iva= $macrogruppo["iva"];           
$codfisc= $macrogruppo["codfisc"];           
$pec= $macrogruppo["pec"];            
$iban= $macrogruppo["iban"];           
$sdi= $macrogruppo["sdi"];            
$cognomeamm= $macrogruppo["ammcognome"];           
$nomeamm= $macrogruppo["ammnome"];           
$ruoloamm= $macrogruppo["ammruolo"];           
$emailamm= $macrogruppo["annemail"];           
$viaamm= $macrogruppo["ammvia"];           
$cittaamm= $macrogruppo["ammcitta"];           
$capamm= $macrogruppo["ammcap"];           
$provamm= $macrogruppo["ammprov"];           
$regioneamm= $macrogruppo["ammregione"];           
$telefonoamm= $macrogruppo["ammtelefono"];           
$cellamm= $macrogruppo["ammcell"];            
$cognomeop= $macrogruppo["opcognome"];           
$nomeop= $macrogruppo["opnome"];           
$ruoloop= $macrogruppo["opruolo"];           
$emailop= $macrogruppo["opemail"];           
$viaop= $macrogruppo["opia"];           
$cittaop= $macrogruppo["opcitta"];           
$capop= $macrogruppo["opcap"];           
$provop= $macrogruppo["opprov"];           
$regioneop= $macrogruppo["opregione"];           
$telefonoop= $macrogruppo["optelefono"];           
$cellop= $macrogruppo["opcell"];           
$cognomelog= $macrogruppo["logcognome"];           
$nomelog= $macrogruppo["lognome"];           
$ruololog= $macrogruppo["logruolo"];           
$emaillog= $macrogruppo["logemail"];           
$vialog= $macrogruppo["logvia"];           
$cittalog= $macrogruppo["logcitta"];           
$caplog= $macrogruppo["logcap"];           
$provlog= $macrogruppo["logprov"];           
$regionelog= $macrogruppo["logregione"];           
$telefonolog= $macrogruppo["logtelefono"];           
$celllog= $macrogruppo["logcell"];
 }}
$sqlg = "SELECT *  FROM  articolo where codice = '$articolods' ";  
#echo $sql;
$rCountg = 1;
$resultg = $conn->query($sqlg);
if ($resultg->num_rows > 0) {
  while($macrogruppog = $resultg->fetch_assoc())	
	{ 
     $progr = $macrogruppog["progr"];
     $denominazione = $macrogruppog["denominazione"];
     $dataoperazione = $macrogruppog["dataoperazione"];
     $codiceart = $macrogruppog["codice"];
     $ncliente = $macrogruppog["ncliente"];
     $ncostruttore = $macrogruppog["ncostruttore"];
     $cliprop = $macrogruppog["cliprop"];
     #echo $cliprop;
     $tipo = $macrogruppog["tipo"];
     $gruppo= $macrogruppog["gruppo"];
     $marca = $macrogruppog["marca"];
     $modello = $macrogruppog["modello"];
     $volume = $macrogruppog["volume"];
     $peso = $macrogruppog["peso"];
     $note = $macrogruppog["note"]; }} 
$sqlyu = "UPDATE daspedire set 
cliente = '$clientexx'
where 
progr = '$progrart' 
";
if ($conn->query($sqlyu) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 
}}

exit; 
?>


<br>
<? if($ingranaggio==16000){ ?>
<? $comodocat=""; ?>
<h3><font style=" color: #cc0000;">SPEDIZIONI DA EFFETTUARE</font></h3>   

<table id="tableFooteryyw" class="display" cellspacing="0" align="center" style="width:98%; position:relative;">         
             <thead class="intesta">
	<tr class="testa">
		   <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="4"  >Data Richiesta</td>
		  <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="4"  >Codice Mittente</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="4"  >Cliente</td>                              
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="4"  >Commessa</td>     
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="4"  >Ticket</td>                              
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="4"  >Cod. Art.</td>
           <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="4"  >Descrizione Articolo</td>         
          
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="4"  >QT</td>                              
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="4"  >Seriale</td> 
          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;" align="center"><font size="4"  >Lavorato</td>                   
          
         </tr>       
	</thead>
	<tbody>
<?php 

$sqlx = "SELECT  a.*
FROM daspedire a where (a.ddt is null) and (a.catassegnato != '')
ORDER BY a.catassegnato DESC";  
#echo $sql;
$rCountx = 1;
$resultx = $conn->query($sqlx);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc())	
	{
     $catassegnato= $macrogruppox["catassegnato"]; 
     $contatore= $macrogruppox["contatore"];
     $pl = $macrogruppox["pl"];
     $pldata = $macrogruppox["pldata"];
     $datarichiesta = $macrogruppox["datarichiesta"];
     $quantitads = $macrogruppox["quantita"];
     $articolods = $macrogruppox["articolo"];
     $progrart = $macrogruppox["progr"];
     $serialeds = $macrogruppox["seriale"];
     $spunta = $macrogruppox["spunta"];
     $segno = $macrogruppox["segno"];
     #echo "s ".$segno;
     $ticket = $macrogruppox["ticket"];
     if($segno=="on"){$spunta="";}
$sqlk = "SELECT *  FROM  tk where numero = '$ticket' ";  
#echo $sql;
$rCountk = 1;
$resultk = $conn->query($sqlk);
if ($resultk->num_rows > 0) {
  while($macrogruppok = $resultk->fetch_assoc())	
	{      
     $clientexx = $macrogruppok["cliente"];
     $commessaxx = $macrogruppok["commessa"];     
    }} 
    
$sqlxe = "SELECT *  FROM  clienti where  codice  = '$clientexx' " ;  
#echo $sql;
$rCounte = 1;
$resultxe = $conn->query($sqlxe);
if ($resultxe->num_rows > 0) {
  while($macrogruppoxe = $resultxe->fetch_assoc())	
	{   
     $ragsocclixx = $macrogruppoxe["ragsoc"];
     }}     
$sqlxj = "SELECT *  FROM  commesse where  commessa  = '$commessaxx' " ;  
#echo $sql;
$rCountj = 1;
$resultxj = $conn->query($sqlxj);
if ($resultxj->num_rows > 0) {
  while($macrogruppoxj = $resultxj->fetch_assoc())	
	{   
     $nomecommessaxx = $macrogruppoxj["nomecommessa"];
     }}      
    
    
        
$sql = "SELECT *  FROM  cat where codice = '$catassegnato' ";  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
$progrtt= $macrogruppo["id"];    
$codice= $macrogruppo["codice"];                     
$dataoperazione= $macrogruppo["dataoperazione"];           
$ragsoc= $macrogruppo["ragsoc"];           
$via= $macrogruppo["via"];           
$citta= $macrogruppo["citta"];           
$cap= $macrogruppo["cap"];           
$prov= $macrogruppo["prov"];           
$regione= $macrogruppo["regione"];           
$iva= $macrogruppo["iva"];           
$codfisc= $macrogruppo["codfisc"];           
$pec= $macrogruppo["pec"];            
$iban= $macrogruppo["iban"];           
$sdi= $macrogruppo["sdi"];            
$cognomeamm= $macrogruppo["ammcognome"];           
$nomeamm= $macrogruppo["ammnome"];           
$ruoloamm= $macrogruppo["ammruolo"];           
$emailamm= $macrogruppo["annemail"];           
$viaamm= $macrogruppo["ammvia"];           
$cittaamm= $macrogruppo["ammcitta"];           
$capamm= $macrogruppo["ammcap"];           
$provamm= $macrogruppo["ammprov"];           
$regioneamm= $macrogruppo["ammregione"];           
$telefonoamm= $macrogruppo["ammtelefono"];           
$cellamm= $macrogruppo["ammcell"];            
$cognomeop= $macrogruppo["opcognome"];           
$nomeop= $macrogruppo["opnome"];           
$ruoloop= $macrogruppo["opruolo"];           
$emailop= $macrogruppo["opemail"];           
$viaop= $macrogruppo["opia"];           
$cittaop= $macrogruppo["opcitta"];           
$capop= $macrogruppo["opcap"];           
$provop= $macrogruppo["opprov"];           
$regioneop= $macrogruppo["opregione"];           
$telefonoop= $macrogruppo["optelefono"];           
$cellop= $macrogruppo["opcell"];           
$cognomelog= $macrogruppo["logcognome"];           
$nomelog= $macrogruppo["lognome"];           
$ruololog= $macrogruppo["logruolo"];           
$emaillog= $macrogruppo["logemail"];           
$vialog= $macrogruppo["logvia"];           
$cittalog= $macrogruppo["logcitta"];           
$caplog= $macrogruppo["logcap"];           
$provlog= $macrogruppo["logprov"];           
$regionelog= $macrogruppo["logregione"];           
$telefonolog= $macrogruppo["logtelefono"];           
$celllog= $macrogruppo["logcell"];
 }}
$sqlg = "SELECT *  FROM  articolo where codice = '$articolods' ";  
#echo $sql;
$rCountg = 1;
$resultg = $conn->query($sqlg);
if ($resultg->num_rows > 0) {
  while($macrogruppog = $resultg->fetch_assoc())	
	{ 
     $progr = $macrogruppog["progr"];
     $denominazione = $macrogruppog["denominazione"];
     $dataoperazione = $macrogruppog["dataoperazione"];
     $codiceart = $macrogruppog["codice"];
     $ncliente = $macrogruppog["ncliente"];
     $ncostruttore = $macrogruppog["ncostruttore"];
     $cliprop = $macrogruppog["cliprop"];
     #echo $cliprop;
     $tipo = $macrogruppog["tipo"];
     $gruppo= $macrogruppog["gruppo"];
     $marca = $macrogruppog["marca"];
     $modello = $macrogruppog["modello"];
     $volume = $macrogruppog["volume"];
     $peso = $macrogruppog["peso"];
     $note = $macrogruppog["note"]; }} 
########################  controllo per la rottura  ########################     
if($comodocat!=$catassegnato){  
if($comodocat==""){  ?>
<?

$sqlm = "SELECT *  FROM  cat where codice = '$catassegnato' ";  
#cho $sqlm;
$rCountm = 1;
$resultm = $conn->query($sqlm);
if ($resultm->num_rows > 0) {
  while($macrogruppom = $resultm->fetch_assoc())	
	{ 
$progrttm= $macrogruppom["id"];    
$codicem= $macrogruppom["codice"];  
#echo  $codicem;                  
$dataoperazionem= $macrogruppom["dataoperazione"];           
$ragsocm= $macrogruppom["ragsoc"]; 
$viam= $macrogruppom["via"];           
$cittam= $macrogruppom["citta"];           
$capm= $macrogruppom["cap"];           
$provm= $macrogruppom["prov"];           
$regionem= $macrogruppom["regione"];  
}} 
         
?>
<tr>
<td style="background: #afc81b;" colspan="12" style="color: <? echo $colorepp; ?>;" align="left" bgcolor="<? echo $colore; ?>" ><font style="font-size: 20px;color: #476b5d;"><? echo $codicem." - ".$ragsocm." ".$viam." ".$capm." - ".$capm." ".$cittam." ".$regionem; ?></font></td>
</tr>
<? $comodocat=$catassegnato; $totalepezzi=0;}else{ ?>
<tr>
<td colspan="4" style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"></td>
<td colspan="1" style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"><font style="font-size: 20px;color: #476b5d;">TOTALE PEZZI</font></td>
<td style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"><?php echo $totalepezzi; ?></td>

<td style="color: <? echo $colorepp; ?>;" align="left" bgcolor="<? echo $colore; ?>">
  <input type="hidden" name="ingranaggio" value="16000" />             
             <input type="hidden" name="login" value="<?php echo $login; ?>" />             
             <button  type="submit" class="btn btn-warning" style="height: 30px; vertical-align: top;background: #afc81b;color: #ffffff;" >Elabora DDT</button>  
             <input type="hidden" name="ingranaggio" value="16000" />             
             <input type="hidden" name="login" value="<?php echo $login; ?>" />             
             <button  type="submit" class="btn btn-warning" style="height: 30px; vertical-align: top;background: #476b5d;color: #ffffff;" >Simula DDT</button>
</td>
<td colspan="1" style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"></td>  
</tr>
 
<? 
$sqlm = "SELECT *  FROM  cat where codice = '$catassegnato' ";  
#echo $sqlm;
$rCountm = 1;
$resultm = $conn->query($sqlm);
if ($resultm->num_rows > 0) {
  while($macrogruppom = $resultm->fetch_assoc())	
	{ 
$progrttm= $macrogruppom["id"];    
$codicem= $macrogruppom["codice"];  
#echo  $codicem;                  
$dataoperazionem= $macrogruppom["dataoperazione"];           
$ragsocm= $macrogruppom["ragsoc"]; 
$viam= $macrogruppom["via"];           
$cittam= $macrogruppom["citta"];           
$capm= $macrogruppom["cap"];           
$provm= $macrogruppom["prov"];           
$regionem= $macrogruppom["regione"];  
}} 
        
?>
<tr>
<td style="background: #afc81b;" colspan="12" style="color: <? echo $colorepp; ?>;" align="left" bgcolor="<? echo $colore; ?>" ><font style="font-size: 20px;color: #476b5d;"><? echo $codicem." - ".$ragsocm." ".$viam." ".$capm." - ".$capm." ".$cittam." ".$regionem; ?></font></td>
</tr>
<? $comodocat=$catassegnato; $totalepezzi=0;} }
########################### fine controllo per la rottura #########################################
?>  
  
	  <tr <? if($segno=="on"){echo "style='background-color: #f6bac4;'";} ?>> 
      <td style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"><?php echo $datarichiesta; ?></td>   
      
      <td style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"><?php echo $catassegnato; ?></td>
      
      
      
      <td style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"><?php echo $ragsocclixx; ?></td> 
      <td style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"><?php echo $nomecommessaxx; ?></td>
      <td style="color: <? echo $colorepp; ?>;" align="left" bgcolor="<? echo $colore; ?>"><?php echo $ticket; ?></td>
      <td style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"><?php echo $articolods; ?></td>
       <td style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"><?php echo $denominazione; ?></td>     
     <td style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"><?php echo $quantitads; ?></td> 
     <? $totalepezzi=$totalepezzi+$quantitads; ?>
<form method="POST" action=""  enctype="multipart/form-data"> 
<? if($tipo=="Serializzato"){ ?>

<td >

<input class="required" type="text" value="<? echo $serialeds; ?>" name="serialenew"  maxlength="60" size="30" >            
           


</td>
<? }else{ ?> <td></td> <? } ?>
<td align="center" ><input class="custom-checkbox"  type="checkbox" id="spunta" name="spunta" <? if($spunta=="on"){echo "checked"; }?> >
    
<? if($segno==""){ ?> 
             <input type="hidden" name="ingranaggio" value="16000" />
             <input type="hidden" name="ingranaggioseriale" value="1" />
             <input type="hidden" name="login" value="<?php echo $login; ?>" />             
             <input type="hidden" name="progrart" value="<? echo $progrart; ?>" />
             <button  type="submit" class="btn btn-warning" style="height: 30px; vertical-align: top;" >Mem.</button>  
<? } else { ?>  
             <input type="hidden" name="ingranaggio" value="16000" />
             <input type="hidden" name="ingranaggiocancellaparte" value="1" />
             <input type="hidden" name="login" value="<?php echo $login; ?>" />             
             <input type="hidden" name="progrart" value="<? echo $progrart; ?>" />
             <button  type="submit" class="btn btn-warning" style="background-color: red; color: #ffffff; height: 30px; vertical-align: top;" >Canc.</button>  
<? } ?>          
      </td>  
       </tr>
</form >      	     
<?php          
}
}

?>
<tr>
<td colspan="4" style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"></td>
<td colspan="1" style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"><font style="font-size: 20px;color: #476b5d;">TOTALE PEZZI</font></td>
<td style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"><?php echo $totalepezzi; ?></td>
<td style="color: <? echo $colorepp; ?>;" align="left" bgcolor="<? echo $colore; ?>">
  <input type="hidden" name="ingranaggio" value="16000" />             
             <input type="hidden" name="login" value="<?php echo $login; ?>" />             
             <button  type="submit" class="btn btn-warning" style="height: 30px; vertical-align: top;background: #afc81b;color: #ffffff;" >Elabora DDT</button>
             <input type="hidden" name="ingranaggio" value="16000" />             
             <input type="hidden" name="login" value="<?php echo $login; ?>" />             
             <button  type="submit" class="btn btn-warning" style="height: 30px; vertical-align: top;background: #476b5d;color: #ffffff;" >Simula DDT</button>
<td colspan="1" style="color: <? echo $colorepp; ?>;" align="center" bgcolor="<? echo $colore; ?>"></td>  
</tr>
</table>
<? exit;  ?>           
<? } ?>






































<div align="center" >


<div align="center">   
<div id="container">
<p align="center"><b><font face="Arial" size="5" color="#993300">ELENCO DDT DA STAMPARE</font></b></p>
<p align="center">
</p>
<div align="center">
<div id="container">
	<table id="thetable" style=" border: 1px solid black;" cellspacing="0" width="100%" class="table6">
	<thead>
		<tr style=" border: 1px solid black;">
		  <td style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" align="center"><font size="3" face="Arial"  >Progr.</td>
          <td  style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" align="center"><font size="3" face="Arial" >DATA</td>
      	  <td  style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" align="center"><font size="3" face="Arial" >N.Provvisorio</td>
          <td  style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" align="center"><font size="3" face="Arial" >DESTINATARIO</td>
          <td  style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" align="center"><font size="3" face="Arial" >LUOGO DESTIN.</td>
          <td  style=" border: 1px solid black;background-color: #4e6f9a; color: #ffffff;" align="center"><font size="3" face="Arial" >STAMPA</td>
           </tr>
	</thead>
	<tbody>

  <?php
$sql = "SELECT *  FROM  intesta where numerodtt = 0 order by progr";    
#echo $sql;
$rCount = 1;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
	
	{  
      
      $pass = $macrogruppo["pass"];
      $oggi = $macrogruppo["oggi"];
      $tesserasoci = $macrogruppo["tesserasoci"];
      $causale = $macrogruppo["causale"];
      $destinazione = $macrogruppo["destinazione"];
      
  
$sqlrr = "SELECT *  FROM  mittenti where  tesserasoci = '$tesserasoci' ";   
#echo $sql;  exit;
$rCount = 1;
$resultrr = $conn->query($sqlrr);
if ($resultrr->num_rows > 0) {
  while($macrogrupporr = $resultrr->fetch_assoc())
	
	{ $cognome = $macrogrupporr["cognome"]; 
      $nome = $macrogrupporr["nome"];  
     }}  
   

$tot++; 
?>



      
      
<tr class="first" style=" border: 1px solid black;">
        <td style=" border: 1px solid black;" align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Arial"><?php echo $tot; ?></td>
        <td style=" border: 1px solid black;" align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Arial"><?php echo $oggi; ?></td>
        <td style=" border: 1px solid black;" align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Arial"><?php echo $pass; ?></td>
        <td style=" border: 1px solid black;" align="center" bgcolor="<? echo $colore; ?>"><font size="2" face="Arial"><?php echo $cognome." ".$nome; ?></td>
        <td style=" border: 1px solid black;" align="left" bgcolor="<? echo $colore; ?>"><font size="2" face="Arial"><?php echo $destinazione; ?></td>     
        <td style=" border: 1px solid black;" align="center"><a href="stampadttnew.php?login=<?php echo $login; ?>&ingranaggio=9&progr=<?php echo $progr ?>&pass=<?php echo $pass; ?>&destinazione=<?php echo $destinazione; ?>&mittente=<?php echo $tesserasoci; ?>&oggi=<?php echo $oggi; ?>"><img border="0" background="btn1.gif" src="stampa.jpg" width="25" height="25"></a></td>  
        
<? }} ?>	         
	</tbody>
	</table>
</div>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery.tablescroll.js"></script>

<script>
/*<![CDATA[*/

jQuery(document).ready(function($)
{
	$('#thetable').tableScroll({height:750});

	$('#thetable2').tableScroll();
});

/*]]>*/
</script>
<script>
function carica_consegnaA(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=900,height=900,left=150,top=150,location=0,directories=0,toolbar=0,scrollbars=yes,resizable=1')
    
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>
  <script>
function carica_consegnaB(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=1150,height=600,left=50,top=50,location=0,directories=0,toolbar=0')
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script> 
  <script>
function carica_consegnaC(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=800,height=700,left=150,top=150,location=0,directories=0,toolbar=0')
    //location.href = 'http://www.spi.it/root/provascroll/provalistatestata.php';
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>  
  <script>
function carica_consegnaD(url){
	<!-- intestazione -->	
    //popupWindow =
	//	window.open(url,'pdf','width=800,height=700,left=150,top=150,location=0,directories=0,toolbar=0')
    location.href = url;
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>  
<script>
function carica_consegnaF(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=1000,height=300,left=150,top=150,location=0,directories=0,toolbar=0,scrollbars=yes,resizable=1')
    
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>
<script>
function myFunction(url) {
 window.open(url);
}
</script>
  <script>
function carica_consegnaFF(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=900,height=740,left=150,top=150,location=0,directories=0,toolbar=0')
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>
<script>
function myFunctionx() {
  window.open("cerca2storico.php?tessera=<?php echo $tessera; ?>&login=<?php echo $login; ?>&zona=<?php echo $zona; ?>");
}
</script>
</body>
</html>