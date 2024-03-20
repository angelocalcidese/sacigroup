<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="inizio.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php
}
include "conf_DB.php";
$login=$_REQUEST["login"];
$ingranaggio=$_REQUEST["ingranaggio"];
$tessera=$_REQUEST["ticket"];
#echo $ingranaggio;
if($ingranaggio==2){
$descrizione=$_REQUEST["descrizione"];
$descrizione=str_replace("'", "\'", $descrizione);
$argomento=$_REQUEST["argomento"];
$argomento=str_replace("'", "\'", $argomento);  
$oggi=date("Y-m-d H:m:s");
   $sql = "INSERT INTO `ticketgest`(
   `codice`,
   argomento, 
   `descrizione`,
   dataora,
   login,
   allegato,
   tipomessaggio 
   ) 
   VALUES (
   '$tessera',
   '',  
   '$descrizione',
   '$oggi',
   '$login',
   '$newfile',
   'D')";
   #echo $sql; exit;
if ($conn->query($sql) === FALSE) 
    {
    $erroreriferimento="errore inserimento ticket";
    } 
    else
     {}
$ingranaggio="";
}
if($ingranaggio==5){
 
$oggi=date("Y-m-d H:m:s");
   $sql = "INSERT INTO `ticketgest`(
   `codice`,
   argomento, 
   `descrizione`,
   dataora,
   login,
   allegato,
   tipomessaggio 
   ) 
   VALUES (
   '$tessera',
   '',  
   'CHIUSO SEGNALAZIONE DA UTENTE',
   '$oggi',
   '$login',
   '$newfile',
   'C')";
   #echo $sql; exit;
if ($conn->query($sql) === FALSE) 
    {
    $erroreriferimento="errore inserimento ticket";
    } 
    else
     {}
$sql = "UPDATE ticket set 
stato= 'CHIUSO',
lavorazione = 'RISOLTO',
datachiusura = '$oggi'
where 
codice = '$tessera' 
";
#echo $sql; exit;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; }      
     
$ingranaggio="";
}
if($ingranaggio==6){
 
$oggi=date("Y-m-d H:m:s");
   $sql = "INSERT INTO `ticketgest`(
   `codice`,
   argomento, 
   `descrizione`,
   dataora,
   login,
   allegato,
   tipomessaggio 
   ) 
   VALUES (
   '$tessera',
   '',  
   'RIAPERTURA SEGNALAZIONE DA UTENTE',
   '$oggi',
   '$login',
   '$newfile',
   'P')";
   #echo $sql; exit;
if ($conn->query($sql) === FALSE) 
    {
    $erroreriferimento="errore inserimento ticket";
    } 
    else
     {}
$sql = "UPDATE ticket set 
stato= 'APERTO',
lavorazione = 'IN PROGRESS',
datachiusura = '$oggi'
where 
codice = '$tessera' and procedura = 'ALLGEST-T' 
";
#echo $sql; exit;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; }      
     
$ingranaggio="";
}
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>stato ticket</title> 
</head>
<style>
div#container {
min-width:   1150px;
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
    font-family: "Arial", "Lucida Grande", Sans-Serif;    
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
a 
{
    text-decoration: none; 
    font-weight: normal;
    color: #fdf401;
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
<script type="text/javascript">
		
		function controllo(){ 
            with(document.modulo) { 

        if(descrizione.value=="") { 
            alert("Error: manca DESCRIZIONE PRESTAZIONE"); 
            descrizione.focus(); 
            return false; 
                            } 
                                                                   
					                                                                                                                    
                                  } 
        } 
</script>


<body>
<br>
<div align="center">   
<div id="container">

<p align="center"><b><font face="Arial" size="5" color="#993300">STORICO RICHIESTE CHIUSE</font></b></p></h1><h2> 

<table border="1" width="100%" bgcolor="#FFF4F7" class="table6">
<tr>
<td style="color: #000000; font-size: 20px;" >Num.</td>		
<td style="color: #000000; font-size: 20px;" >Data</td>
<td style="color: #000000; font-size: 20px;" >Argomento</td>
<td style="color: #000000; font-size: 20px;" >Descrizione ticket</td>
<td style="color: #000000; font-size: 20px;" >Allegato</td>
<td style="color: #000000; font-size: 20px;" >Stato</td>
<td style="color: #000000; font-size: 20px;" >Lavorazione</td>
<td style="color: #000000; font-size: 20px;" >Rispondi</td>
<td style="color: #000000; font-size: 20px;" >Chiudi</td>
</tr>
<?php
$sql1 = "select * from ticket  where stato = 'CHIUSO' and login = '$login' and procedura = 'ALLGEST-T' order by codice, dataora";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ 
      $dataora = $macrogruppo["dataora"];
      $argomento = $macrogruppo["argomento"];
      $descrizione = $macrogruppo["descrizione"];
      $stato = $macrogruppo["stato"];
      $lavorazione = $macrogruppo["lavorazione"];	
      $codice = $macrogruppo["codice"];
      $allegato = $macrogruppo["allegato"];	
      $tot++;
?>
<tr>
<td valign="top" style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" ><? echo $codice; ?></td>	
<td valign="top" width=100 style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" >(<? echo $dataora; ?>)</td>	
<td valign="top" style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" ><? echo $argomento; ?></td>
<td valign="top" style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" ><? echo $descrizione; ?></td>
<? if($allegato!=""){?>
<? $comodo=explode(".",$allegato);
if($comodo[1] == "pdf"){ ?>
<td  valign="top" style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;"><a style="color: #ffffff;" href="JavaScript:carica_consegnaB('esponipdfff.php?fl=<?php echo $allegato; ?>&login=<?php echo $login; ?>');" >SI</a></td>  
<? } else { ?>
<td  valign="top" style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;"><a href="JavaScript:carica_consegnaB('esponiimage.php?fl=<?php echo $allegato; ?>&login=<?php echo $login; ?>');" >SI</a></td>  
<?}?>

<? } else { ?>
<td valign="top" style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" >NO</td>
<? } ?>
<td valign="top" style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" ><? echo $stato; ?></td>
<td valign="top" style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" ><? echo $lavorazione; ?></td>
<td  valign="top" style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;"><a href="statotic1.php?fl=<?php echo $allegato; ?>&login=<?php echo $login; ?>&ticket="<? echo $codice; ?> ></a></td>  


<td valign="top" style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;" ></td>
</tr>
<?
$sql1w = "select * from ticketgest  where  login = '$login' and codice = '$codice' order by progr";
#echo $sql1w;
$result1w = $conn->query($sql1w);
if ($result1w->num_rows > 0) {
  while($macrogruppow = $result1w->fetch_assoc())
		{ 
      $progr = $macrogruppow["progr"];  
      $dataoraw = $macrogruppow["dataora"];
      $argomentow = $macrogruppow["argomento"];
      $descrizionew = $macrogruppow["descrizione"];
      $statow = $macrogruppow["stato"];
      $lavorazionew = $macrogruppow["lavorazione"];	
      $codicew = $macrogruppow["codice"];
      $tipomessaggio = $macrogruppow["tipomessaggio"];
      $allegatow = $macrogruppow["allegato"];  ?>
<tr>
<td valign="top" style=" border: 1px solid black;background-color: #<? if($tipomessaggio=="R"){echo "afc81b";}else{echo "476b5d";} ?>; color: #ffffff;" ><? echo $codicew; ?></td>	
<td valign="top" width=100 style=" border: 1px solid black;background-color: #<? if($tipomessaggio=="R"){echo "afc81b";}else{echo "476b5d";} ?>; color: #ffffff;" >(<? echo $dataoraw; ?>)</td>	
<td valign="top" style=" border: 1px solid black;background-color: #<? if($tipomessaggio=="R"){echo "afc81b";}else{echo "476b5d";} ?>; color: #ffffff;" ></td>
<td valign="top" style=" border: 1px solid black;background-color: #<? if($tipomessaggio=="R"){echo "afc81b";}else{echo "476b5d";} ?>; color: #<?if($tipomessaggio=="C" or $tipomessaggio == "P"){echo "fbf820";}else{echo "ffffff";}?>;" ><? echo $descrizionew; ?></td>
<? if($allegatow!=""){?>
<? $comodo=explode(".",$allegatow);
if($comodo[1] == "pdf"){ ?>
<td  valign="top" style=" border: 1px solid black;background-color: #<? if($tipomessaggio=="R"){echo "afc81b";}else{echo "476b5d";} ?>; color: #ffffff;"><a href="JavaScript:carica_consegnaB('esponipdfff.php?fl=<?php echo $allegatow; ?>&login=<?php echo $login; ?>');" >SI</a></td>  
<? } else { ?>
<td  valign="top" style=" border: 1px solid black;background-color: #<? if($tipomessaggio=="R"){echo "afc81b";}else{echo "476b5d";} ?>; color: #ffffff;"><a href="JavaScript:carica_consegnaB('esponiimage.php?fl=<?php echo $allegatow; ?>&login=<?php echo $login; ?>');" >SI</a></td>  
<?}?>

<? } else { ?>
<td valign="top" style=" border: 1px solid black;background-color: #<? if($tipomessaggio=="R"){echo "afc81b";}else{echo "476b5d";} ?>; color: #ffffff;" >NO</td>
<? } ?>
<td valign="top" style=" border: 1px solid black;background-color: #<? if($tipomessaggio=="R"){echo "afc81b";}else{echo "476b5d";} ?>; color: #ffffff;" ></td>
<td valign="top" style=" border: 1px solid black;background-color: #<? if($tipomessaggio=="R"){echo "afc81b";}else{echo "476b5d";} ?>; color: #ffffff;" ></td>
<td  valign="top" style=" border: 1px solid black;background-color: #<? if($tipomessaggio=="R"){echo "afc81b";}else{echo "476b5d";} ?>; color: #ffffff;"><? if($tipomessaggio=="D"){echo "";}else{echo "";}?></a></td>  


<td valign="top" style=" border: 1px solid black;background-color: #<? if($tipomessaggio=="R"){echo "afc81b";}else{echo "476b5d";} ?>; color: #ffffff;" ><? if($tipomessaggio=="C"){echo "<a href='?login=$login&ticket=$codicew&ingranaggio=6' >Riapri TK</a>";}?></td>
</tr>
	
<?php } 
}  ?>
<? if($ingranaggio==1){?>
<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data">
<tr>
<td valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" ></td>	
<td valign="top" width=100 style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" ></td>	
<td valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" ></td>
<td valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" ><textarea width="100%" style="background-color: #ececee" name="descrizione"  cols="70" rows="5"></textarea>
<br>
<input type="hidden" name="ingranaggio" value="2" />
<input type="hidden" name="login" value="<?php echo $login; ?>" />
<input type="hidden" name="ticket" value="<?php echo $codicew; ?>" />
<input type="submit" value="Invia Risposta" name="B3">				
</td>
<td  valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;"></td>  
<td valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" >NO</td>
<td valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" ></td>
<td valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" ></td>
<td  valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;"></td>  
<td valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" ></td>
</tr>


<? } ?>
<tr>
<td valign="top" style=" border: 0px solid black;background-color: #ffffff; color: #ffffff;" ></td>	
<td valign="top" width=100 style=" border: 0px solid black;background-color: #ffffff; color: #ffffff;" ></td>	
<td valign="top" style=" border: 0px solid black;background-color: #ffffff; color: #ffffff;" ></td>
<td valign="top" style=" border: 0px solid black;background-color: #ffffff; color: #ffffff;" ></td>
<td  valign="top" style=" border: 0px solid black;background-color: #ffffff; color: #ffffff;"></td>  
<td valign="top" style=" border: 0px solid black;background-color: #ffffff; color: #ffffff;" >NO</td>
<td valign="top" style=" border: 0px solid black;background-color: #ffffff; color: #ffffff;" ></td>
<td valign="top" style=" border: 0px solid black;background-color: #ffffff; color: #ffffff;" ></td>
<td  valign="top" style=" border: 0px solid black;background-color: #ffffff; color: #ffffff;"></td>  


<td valign="top" style=" border: 1px solid black;background-color: #ffffff; color: #ffffff;" ></td>
</tr>
</form>
<? } }?>


		</table>

<br><br> <br><br><br><br> <br><br><br><br> <br><br>
</div>
</div>
  <script>
function carica_consegnaB(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=900,height=400,left=150,top=150,location=0,directories=0,toolbar=0')
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script> 
</body>

</html>