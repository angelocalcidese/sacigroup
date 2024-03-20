
<?php
$dx=$_REQUEST["d"];
$zx=$_REQUEST["zx"];
$add=$_REQUEST["add"];

if ($zx==""){$zx=80;}
if ($add==""){$add=0;}
$zx=$zx+$add;
#echo $zx;
#include "conf_DB.php";

$ingranaggio=$_REQUEST["ingranaggio"];
$numcanc1=$_REQUEST["numero2"];
$numcanc=$_REQUEST["numero1"];
#echo "mod ".$numcanc1."<br>";
#echo "can ".$numcanc."<br>";
$login=$_REQUEST["login"];
$confermato=$_REQUEST["confermato"];


function ShowCalendar($m,$y,$zx)
{

  if ((!isset($_GET['d']))||($_GET['d'] == ""))
  {
    $m = date('n');
    $y = date('Y');
  }else{
    $m = (int)strftime( "%m" ,(int)$_GET['d']);
    $y = (int)strftime( "%Y" ,(int)$_GET['d']);
    $m = $m;
    $y = $y;
  }
  
  $precedente = mktime(0, 0, 0, $m -1, 1, $y);
  $successivo = mktime(0, 0, 0, $m +1, 1, $y);

  $nomi_mesi = array(
    "Gennaio",
    "Febbraio",
    "Marzo",
    "Aprile",
    "Maggio",
    "Giugno", 
    "Luglio",
    "Agosto",
    "Settembre",
    "Ottobre",
    "Novembre",
    "Dicembre"
  );
  $nomi_giorni = array(
    "Lun",
    "Mar",
    "Mer",
    "Gio",
    "Ven",
    "Sab",
    "Dom",
     "Lun",
    "Mar",
    "Mer",
    "Gio",
    "Ven",
    "Sab",
    "Dom",
     "Lun",
    "Mar",
    "Mer",
    "Gio",
    "Ven",
    "Sab",
    "Dom",
     "Lun",
    "Mar",
    "Mer",
    "Gio",
    "Ven",
    "Sab",
    "Dom",
     "Lun",
    "Mar",
    "Mer",
    "Gio",
    "Ven",
    "Sab",
    "Dom",
    "Lun",
    "Mar"
  );
  
  $cols = 38;
  $days = date("t",mktime(0, 0, 0, $m, 1, $y)); 
  $lunedi= date("w",mktime(0, 0, 0, $m, 1, $y));
  #echo $lunedi;
  if($lunedi==0) $lunedi = 7; 

  echo '<div align="center">';  
  include "conf_DB.php";
  $codice=$_REQUEST["codice"];
  #$codice=10;
  $sql1xx = "SELECT * FROM socivolontari  where tessera = '$codice'";
    #echo $sql1xx; 
    $resultxx = $conn->query($sql1xx);
    if ($resultxx->num_rows > 0) {
    while($macrogruppoxx = $resultxx->fetch_assoc()) 
		{
     $cognome = $macrogruppoxx["cognome"];
     #echo "ww ".$cognome;
     $nome = $macrogruppoxx["nome"];
    }}  
  ?>
  <div align="center"><font face="Arial" size="5" color="#16d812"><b>
  <? echo "Volontari ".$codice." ".$cognome." ".$nome; ?></b></font> </div><br><?
   echo "<tr>\n <font face=\"Arial\" size=\"5\" color=\"#993300\"> 
  <td colspan=\"".$cols."\">
  <a href=\"?d=" . $precedente 
  . "&zx="
  . $zx.
  "&add=0&codice=".$codice."\"><img src=\"sinistro.png\" width=\"45\" height=\"40\"></a>
  " . "<font face=\"Arial\" size=\"6\" color=\"#993300\">".$nomi_mesi[$m-1] . " " . $y ."</font>". " 
  <a href=\"?d=" . $successivo  
  . "&zx="
  . $zx.
  "&add=0&codice=".$codice."\"><img src=\"destro.png\" width=\"45\" height=\"40\"></a></td></font></tr></div>";
  
  
 

  echo '<div align="center">';
  echo "<table border=\"0\"   >\n"; 
  echo "<tr bgcolor=\"#f2f1fd\">";
  echo "<td>LUOGO</td>";
  foreach($nomi_giorni as $v)
  {
  $somma++;
  if ($somma<$lunedi or $sommavera >= $days){}else{ $sommavera++;
    echo "<td style=\"border-radius: 0px;\"><b>".$v."</b></td>\n"; }
  }
  echo "</tr>";
  echo "<td><img src=\"letto.png\" width=\"70\" height=\"30\"></td>";
  #echo $days." ".$lunedi;
  for($j = 1; $j<$days+$lunedi; $j++)
  {
 
if ($j<$lunedi ){}else{  
    if($j%$cols+1==0)
    {
      echo "<tr >\n";
    }

    if($j<$lunedi)
    {
      echo "<td bgcolor=\"#ffffff\" style=\"border: 1px solid #7f7f7f;
padding: 5px;
text-align: center;
border-radius: 0px;
box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.0), 0 0px 0px 0 rgba(0, 0, 0, 0.0); \"> </td>\n";
    }else{
      $day= $j-($lunedi-1);
      $data = strtotime(date($y."-".$m."-".$day));
      $oggi = strtotime(date("Y-m-d"));
     # include 'config.php';
      #$sql = "SELECT str_data FROM appuntamenti";
     # $result = mysql_query($sql) or die (mysql_error());
     # if(mysql_num_rows($result) > 0)
     # {
     #   while($fetch = mysql_fetch_array($result))
      #  {
       #   $str_data = $fetch['str_data'];
       #   if ($str_data == $data)
          {
            $mese=$nomi_mesi[$m-1];
            $day = "<a href=\"appuntamenti.php?mese=$mese&anno=$y&giorno=$day\"><font color=\"#ffffff\">$day</a>";
          }
       # }
    #  }
     #echo "data ".$data;
      if($data != $oggi)
      {
        echo "<td  bgcolor=\"#696f68\" style=\"border-radius: 0px;\">".$day."</font></td>";
      }else{
        echo "<td  bgcolor=\"#f6c61f\" style=\"border-radius: 0px;\"><b>".$day."</b></td>";
      }
    }

    if($j%$cols==0)
    {
      echo "</tr>";
    }
    
}    
  }
  echo "</tr>";
  
  
include "conf_DB.php";
$sql1 = "SELECT * FROM camerevol    order by camera";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{ $camera = $macrogruppo["camera"]; 

echo "<td><font face=\"Arial\" size=\"5\" color=\"#993300\">$camera</font></td>";  
for($j = 1; $j<$days+$lunedi; $j++)
  {

    if($j%$cols+1==0)
    {
      echo "<tr >\n";
    }

    if($j<$lunedi )
    {
      
    }else{
      $day= $j-($lunedi-1);
      $data = strtotime(date($y."-".$m."-".$day));
      $oggi = strtotime(date("Y-m-d"));
     # include 'config.php';
      #$sql = "SELECT str_data FROM appuntamenti";
     # $result = mysql_query($sql) or die (mysql_error());
     # if(mysql_num_rows($result) > 0)
     # {
     #   while($fetch = mysql_fetch_array($result))
      #  {
       #   $str_data = $fetch['str_data'];
       #   if ($str_data == $data)
       #   {
       #     $mese=$nomi_mesi[$m-1];
       #     $day = "<a href=\"appuntamenti.php?mese=$mese&anno=$y&giorno=$day\">$day</a>";
       #   }
       # }
    #  }

     # if($data != $oggi)
     # {
      #  echo "<td>".$day."</td>";
     # }else{
$sw=0; 

$sql1x = "SELECT * FROM prenotazionivol  where camera = '$camera' ";

$resultx = $conn->query($sql1x);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc()) 
		{$confermato = $macrogruppox["confermato"];  
    $dataentrata = $macrogruppox["dataentrata"];
    #if ($camera=="5c"){echo $dataentrata."<br>";  }
    $adesso=explode("-",$dataentrata );
    $dataentrataee=$adesso[2]."/".$adesso[1]."/".$adesso[0];
    
    $datauscita = $macrogruppox["datauscita"]; 
    
    $adesso=explode("-",$datauscita );
    $datauscitaee=$adesso[2]."/".$adesso[1]."/".$adesso[0];
    
    $tipocliente = $macrogruppox["tipocliente"]; 
    $datainizio = $macrogruppox["datainizio"];
    
    
    
    $datafine = $macrogruppox["datafine"];
    
    $adesso=explode("-",$datafine );
    $datafineee=$adesso[2]."/".$adesso[1]."/".$adesso[0];
    
    if ($dataentrata!="0000-00-00") {$datainizio=$dataentrata;}
    if ($datauscita!="0000-00-00") {$datafine=$datauscita;}
      
    $numero = $macrogruppox["numero"];
    $socio = $macrogruppox["socio"];

     
    $datasc=explode("-",$datainizio);
    $datainiziox = strtotime(date($datasc[0]."-".$datasc[1]."-".$datasc[2]));
    
    $datasc=explode("-",$datafine); 
    $datafinex = strtotime(date($datasc[0]."-".$datasc[1]."-".$datasc[2]));
    
    $datasc=explode("-",$datauscita); 
    $datauscitax = strtotime(date($datasc[0]."-".$datasc[1]."-".$datasc[2]));
    #echo "<br>".$data."  / ".$datainiziox."  / ".$datafinex."<br"; 
    #$dataxx = (date($y."-".$m."-".$day)); 
    #echo $dataxx."<br";
    if (($data==$datainiziox or  $data > $datainiziox)and ($data < $datafinex)) 
    {$sw=1; 
    $sql1xx = "SELECT * FROM socivolontari  where tessera = '$codice'";
    #echo $sql1x; 
    $resultxx = $conn->query($sql1xx);
    if ($resultx->num_rows > 0) {
    while($macrogruppoxx = $resultxx->fetch_assoc()) 
		{
     $cognome = $macrogruppoxx["cognome"];
     $nome = $macrogruppoxx["nome"];
     $indirizzores = $macrogruppoxx["indirizzo"];
     $residentecitta = $macrogruppoxx["localita_residenza"];
     $residenteprov= $macrogruppoxx["provincia"];
     $cap = $macrogruppoxx["cap"];
     $telefono = $macrogruppoxx["telefono"];
     
    }}
    $confermatox=$confermato;
    $dataentrataw = $macrogruppox["dataentrata"]; 
    $datauscitaw = $macrogruppox["datauscita"]; 
    $numerox = $macrogruppox["numero"];
    $sociow=$socio;
    #echo $socio." ".$dataentrata; exit;
    }   
     
    }}  
     $sw2="";
    #if($data==$datafinex) {$sw2='<marquee style="height:10;width:10" scrollamount="1" scrolldelay="1">';}
    $sw2='<font size="2">';
        $verde="#07e837";
        $rosso="#f61f24";
        $bianco="#ffffff";
        $colore="#ffffff";
        $giallo="#faf82a";
        $viola="#c19bdf";
        $blu="#2a2ffa";
       
        /*
        if($sw==1){       
        if($confermato=="SI")
        {?><td bgcolor="<? echo $rosso;?>" ><? echo $tipocliente; ?></td><?}  
        else
        {?><td bgcolor="<? echo $verde; ?>"><? echo $tipocliente; ?></td><?}
        
        } 
        else 
        {?><td bgcolor="<? echo $bianco; ?>"></td><?}
        */
        
        if($sw==1){ 
        if($confermatox=="SI") {$colore=$verde;}  
        if($confermatox=="NO") {$colore=$rosso;}  
        
        if($dataentrataw!="0000-00-00") {$colore=$giallo;} 
        if($datauscitaw!="0000-00-00") {$colore=$blu;} 
        if($sociow==9999 or $sociow==9998) {$colore=$viola;}        
        if($data >= $oggi){$colore=$verde;}  
      
        
        
        
       
         
      ?>
      <?
      $swlungo=0;$giornitot=0;  
      $sql1xhh = "SELECT * FROM prenotazionivol  where numero = '$numerox'";
      #echo $sql1xhh;  exit;
      $resultxhh = $conn->query($sql1xhh);
      if ($resultxhh->num_rows > 0) {
      while($macrogruppoxhh = $resultxhh->fetch_assoc()) 
  		{ 
       $messaggio = $macrogruppoxhh["messaggio"];
       $datafinekk = $macrogruppoxhh["datafine"];
       $datainiziokk= $macrogruppoxhh["datainizio"];
       $dataentratakk= $macrogruppoxhh["dataentrata"];
       
       $datasc=explode("-",$dataentratakk);
       $dataentrataee= ($datasc[2]."/".$datasc[1]."/".$datasc[0]);
       
       $datauscitakk= $macrogruppoxhh["datauscita"];
        if ($dataentratakk!="0000-00-00") {$datainiziokk=$dataentratakk;}
        if ($datauscitakk!="0000-00-00") {$datafinekk=$datauscitakk;}
       
       
       $datasc=explode("-",$datainiziokk);
       $datainizioxxyy = ($datasc[2]."/".$datasc[1]."/".$datasc[0]);
       
       
       $meseinizio=$datasc[1];
       $datainizioxx = strtotime(date($datasc[0]."-".$datasc[1]."-".$datasc[2]));
       $datasc=explode("-",$datafinekk);
       $mesefine=$datasc[1]; 
       
       if  ($nomi_mesi[$m-1]=="Gennaio"){$meseora="01";}
       if  ($nomi_mesi[$m-1]=="Febbraio"){$meseora="02";}
       if  ($nomi_mesi[$m-1]=="Marzo"){$meseora="03";}
       if  ($nomi_mesi[$m-1]=="Aprile"){$meseora="04";}
       if  ($nomi_mesi[$m-1]=="Maggio"){$meseora="05";}
       if  ($nomi_mesi[$m-1]=="Giugno"){$meseora="06";} 
       if  ($nomi_mesi[$m-1]=="Luglio"){$meseora="07";}
       if  ($nomi_mesi[$m-1]=="Agosto"){$meseora="08";}
       if  ($nomi_mesi[$m-1]=="Settembre"){$meseora="09";}
       if  ($nomi_mesi[$m-1]=="Ottobre"){$meseora="10";}
       if  ($nomi_mesi[$m-1]=="Novembre"){$meseora="11";}
       if  ($nomi_mesi[$m-1]=="Dicembre"){$meseora="12";}
       
       
       #echo "numerox ".$numerox." inizio ".$datainiziokk." fine ".$datafinekk." meseora=".$meseora." y=".$y;
       
       $number = cal_days_in_month(CAL_GREGORIAN, $meseora, $y);
       $numbertot=$y."-".$meseora."-".$number;
       $newdate = strtotime ( '+1 day' , strtotime ( $numbertot ) ) ; 
       $numbertot1 = date ( 'Y-m-d' , $newdate ); //trasformiamo la data nel formato accettato dal db YYYY-MM-DD

       #$numbertot2=explode("-",$numbertot1);
       #$numbertot3=$y."-".$numbertot2[1]."-".$numbertot2[0];
       
       $numbertotx=$y."-".$meseora."-01";
       if ($meseinizio < $mesefine){ 
       {if ($meseora  == $meseinizio)
       {$datafinekk=$numbertot1;}
       else 
       {$datainiziokk=$numbertotx;}
       } }
       $datasc=explode("-",$datafinekk); 
       $datafinexx = strtotime(date($datasc[0]."-".$datasc[1]."-".$datasc[2]));
       $datafinexxyy = ($datasc[2]."/".$datasc[1]."/".$datasc[0]);
       
       $datasc=explode("-",$datainiziokk);
       $datainizioxxyy = ($datasc[2]."/".$datasc[1]."/".$datasc[0]);
       $meseinizio=$datasc[1];
       $datainizioxx = strtotime(date($datasc[0]."-".$datasc[1]."-".$datasc[2]));
      
       #if($datafinekk > "2019-04-30" ){$datafinekk="2019-04-29";}
       
       
       
       $datafinexx=$datafinexx - 86400;
       $time = date("d/m/Y",$datafinexx);
       $time1 = date("d/m/Y",$data);  
       #echo  $time." ".$time1." ".$numerox; 
       #$giornitot=datediff("G", $datainizioxxyy, $datafinexxyy);
       $datetime1 = new DateTime($datainiziokk);
       $datetime2 = new DateTime($datafinekk);
       $interval = $datetime1->diff($datetime2);
       $giornitot= $interval->format('%a ');

       #echo "g.".$giornitot; exit;
       
       if ($datainizioxx==$data) {$swlungo=1;} 
       
       }}
      
      ?>
      <? if ($swlungo==1) { if($sw!=1){$swlungo=0;$giornitot=0;}  ?> 
      <td colspan="<? echo $giornitot; ?>" bgcolor="<? echo $colore; ?>">
      <? if ($colore== "#f61f24"  or $colore== "#07e837" or $colore== "#c19bdf"){ 
      $dateinv=date("Y-m-d", $data);   ?>
       <a href="JavaScript:carica_consegnaC('../esponivol.php?camera=<?php echo $camera; ?>&data=<? echo $dateinv; ?>');">
       <? }else { 
       if ($colore== "#faf82a"){  ?>
      <a href="JavaScript:carica_consegnaC('../../partenzaxx.php?tessera=<?php echo $numerox; ?>');">
      <? } else { $dateinv=date("Y-m-d", $data); ?>        
      <a href="JavaScript:carica_consegnaA('../esponivol.php?camera=<?php echo $camera; ?>&data=<? echo $dateinv; ?>');">
      <? } }echo $sw2; 
      if ($colore=="#2a2ffa"){$colorescritta="#ffffff";}
      if ($colore=="#07e837"){$colorescritta="#000000";}
      if ($colore=="#f61f24"){$colorescritta="#ffffff";}
      if ($colore=="#faf82a"){$colorescritta="#000000";}
      if ($colore=="#c19bdf"){$colorescritta="#ffffff";}
      
      ?>
      <font color="<? echo $colorescritta; ?>" style="font-size: 14pt;"><div class="<? if ($colore== "#f61f24"  or $colore== "#07e837" or $colore== "#c19bdf"){ echo "tooltipx";}else{echo "tooltip";} ?>">     
      <? if ($camera=="Mensa"){echo "M"; }?>
      <? if ($camera=="Guardaroba"){echo "G"; }?>
      <? if ($camera=="Tesseramento"){echo "T"; }?>
      <? if ($camera=="Ambulatorio"){echo "B"; }?>
      <? if ($camera=="Ascolto"){echo "A"; }?>
      </font></a></font>
      <span class="tooltiptext"><font color="#000000" style="font-size: 18pt;"><b><? 
      $sql1xhhs = "SELECT * FROM prenotazionivol  where numero = '$numerox'";
      #echo $sql1xhh;  exit;
      $resultxhhs = $conn->query($sql1xhhs);
      if ($resultxhhs->num_rows > 0) {
      while($macrogruppoxhhs = $resultxhhs->fetch_assoc()) 
  		{ 
      $confermatods= $macrogruppoxhhs["confermato"];
       $datainiziokks= $macrogruppoxhhs["datainizio"];
       $datafinekks = $macrogruppoxhhs["datafine"];
       $dataentratakks= $macrogruppoxhhs["dataentrata"];       
       $datauscitakks= $macrogruppoxhhs["datauscita"];
       $orainizio= $macrogruppoxhhs["orainizio"];
       $orafine= $macrogruppoxhhs["orafine"];
       
        if ($dataentratakks!="0000-00-00") {$datainiziokks=$dataentratakks;}
        if ($datauscitakks!="0000-00-00") {$datafinekks=$datauscitakks;}
       
       $datasc=explode("-",$datainiziokks);
       $dataentrataee= ($datasc[2]."/".$datasc[1]."/".$datasc[0]);
       
       $datasc=explode("-",$datafinekks);
       $datafinexxyys = ($datasc[2]."/".$datasc[1]."/".$datasc[0]);
       }}      
      #echo $cognome." "
      #.$nome."<br> ";?></b>
      </font>
      <font color="#000000" style="font-size: 14pt;">
      <? 
      $dateinv=date("Y-m-d", $data);
      $sql1m = "SELECT * FROM prenotazionivol  where datainizio = '$dateinv'and camera = '$camera'";
      #echo $sql1m;  exit;
      $resultm = $conn->query($sql1m);
      if ($resultm->num_rows > 0) {
      while($macrogruppom = $resultm->fetch_assoc()) 
  		{ $orainiziom= $macrogruppom["orainizio"];
       $orafinem= $macrogruppom["orafine"];
       $sociom= $macrogruppom["socio"];
       $sql1xx = "SELECT * FROM socivolontari  where tessera = '$sociom'";
    #echo $sql1xx; 
    $resultxx = $conn->query($sql1xx);
    if ($resultxx->num_rows > 0) {
    while($macrogruppoxx = $resultxx->fetch_assoc()) 
		{
     $cognome = $macrogruppoxx["cognome"];
     #echo "ww ".$cognome;
     $nome = $macrogruppoxx["nome"];
    }}  
    echo " - ".$cognome." ".$nome."<br>";
    }}  
      
      
     # echo "Presente dalle ore: ".$orainizio." alle ore: ".$orafine."<br>".
     # $messaggio    
      ?></font>
     
       
      <br>
      </span>
      </div>
      </td>
      <?
      } else
      { ?> 
      <? if ($data > $datafinexx) { ?>
       <td colspan="1" bgcolor="ffffff"><font color="#000000">
      <?  $time = date("d/m/Y",$data); echo $sw2." ".$time." ".$numerox;?>
       </font></font></td>
    <?  } } 
      } else {$cognome="";
    ?>  
       <td colspan="1" bgcolor="ffffff" style="border: 1px solid #7f7f7f;
        padding: 5px;
        text-align: center;
        border-radius: 0px;
        box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.0), 0 0px 0px 0 rgba(0, 0, 0, 0.0); " >
        
      <?echo $sw2; 
      


   $datarr = (date($day."/".$m."/".$y)); $dateinv=date("Y-m-d", $data); ?>
   <a href="JavaScript:carica_consegnaB('../esponivol.php?camera=<?php echo $camera; ?>&data=<? echo $dateinv; ?>');"><font color="#ffffff" >aa</font></a>
  



       
       
       
   </td>   
       <?
   $swlungo=0;$giornitot=0; }  
    }
    
    if($j%$cols==0)
    {
      echo "</tr>";
    } 
  }
  echo "</tr>";  
}}  
  
  echo "</table></div>";
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
        "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<title>Gestione volontari</title>
<link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico">
<link rel="stylesheet" type="text/css" href="bubble.css"> 
<style type="text/css">
button {
width: 10em;
padding: .5em;
color: #ffffff;
text-shadow: 1px 1px 1px #000;
border: solid thin #882d13;
-webkit-border-radius: .7em;
-moz-border-radius: .7em;
border-radius: .7em;
-webkit-box-shadow: 2px 2px 3px #999;
box-shadow: 2px 2px 2px #bbb;
background-color: #ce401c;
background-image: -webkit-gradient(linear, left top, left bottom,
 from(#e9ede8), to(#ce401c),color-stop(0.4, #8c1b0b));
}
#maintable {width: 800px; margin: 0 auto;}    
#maintable td.orange {color: #ff9933;}  
#maintable td.blue {color:#00F;} 
table{
background: #ffffff;
border-collapse: collapse;
}
td{
border: 1px solid #7f7f7f;
padding: 5px;
text-align: center;
border-radius: 10px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
a { text-decoration: none; font-weight: bold; color: #000000} a:hover { color: #0080FF; }
.bordered:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
   }
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 450px;
  height: 800;
  background-color: #c0bff8;
  color: #fff;
  text-align: left;
  border-radius: 6px;
  padding: 5px 0;
  border: 3px solid #b0adad;
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
  width: 450px;
  height: 800;
  background-color: #feaaaa;
  color: #fff;
  text-align: left;
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

#main{
margin:0 auto;
padding:0;
background-color:#f7f7f7;

/*consiglio sempre di specificare le dimensioni del main*/
width:960px;
height:100%;
}

#contenuto{ width:100%; height:100%; margin:15px;}
.testo{ margin:20px; width:90%;}

#logo{ background-image:url(images/logo.png); background-repeat:no-repeat; width:50%; height:120px; float:left; }
#torna{ float:right; width:50%; height:120px; font-size:24px; margin-top:30px; }

.titolo_box{ margin-left:20px;}
.testo-box{ margin:15px;}

.apri{ font-size:10px; font-family:Verdana, Geneva, sans-serif; float:center; color: #ffffff:}

.chiudi{ font-size:18px; color:#000; font-weight:bold; position:absolute; right:2%; top:0%;  cursor:pointer;}



.overlay{
    background:#000;
    position:fixed;
    top:0px;
    bottom:0px;
    left:0px;
    right:0px;
    z-index:100;
	cursor:pointer;
/*Trasperenza cross browser*/
opacity: .7; filter: alpha(opacity=70); 
-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=70)";	
	
}


#box{ width:600px; height:400px; background-color:#FFF; display:none; z-index:+300; position:absolute; left:30%; top:20%; -moz-border-radius: 15px;  -webkit-border-radius: 15px;
border-radius: 15px;}

hr {
    -moz-border-bottom-colors: none;
    -moz-border-image: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #CCCCCC;
    border-right: 0 solid #CCCCCC;
    border-style: solid;
    border-width: 1px 0 0; 
	width:60%}
</style>   
<script src="js/jquery.js" type="text/javascript"></script>

<!--Overlay by Targetweb ver 1.0-->

<script>
$(document).ready(function() {

	$(".apri").click(
	    function(){
			$('#overlay').fadeIn('fast');
			$('#box').fadeIn('slow');
		});
		
		$(".chiudi").click(
	    function(){
		$('#overlay').fadeOut('fast');
		$('#box').hide();
		});
		
		//chiusura emergenza 
		$("#overlay").click(
	    function(){
		$(this).fadeOut('fast');
		$('#box').hide();
		});
		
	
        
   });     
        
 </script>

</head>
<body>

<div style="position:absolute; left:50px; zoom: <? echo $zx; ?>%;">
<div class="overlay" id="overlay" style="display:none;"></div><!--Overlay non toccare!-->
<?
function datediff($tipo, $partenza, $fine)
    {
        switch ($tipo)
        {
            case "A" : $tipo = 365;
            break;
            case "M" : $tipo = (365 / 12);
            break;
            case "S" : $tipo = (365 / 52);
            break;
            case "G" : $tipo = 1;
            break;
        }
        $arr_partenza = explode("/", $partenza);
        $partenza_gg = $arr_partenza[0];
        $partenza_mm = $arr_partenza[1];
        $partenza_aa = $arr_partenza[2];
        $arr_fine = explode("/", $fine);
        $fine_gg = $arr_fine[0];
        $fine_mm = $arr_fine[1];
        $fine_aa = $arr_fine[2];
        $date_diff = mktime(12, 0, 0, $fine_mm, $fine_gg, $fine_aa) - mktime(12, 0, 0, $partenza_mm, $partenza_gg, $partenza_aa);
        $date_diff  = floor(($date_diff / 60 / 60 / 24) / $tipo);
        return $date_diff;
    } 

ShowCalendar(date("m"),date("Y"),$zx);  
?>

<div align="center">
<? $codice=$_REQUEST["codice"];  ?>
   <p><a href="?d=<? echo $dx; ?>&zx=<? echo $zx; ?>&add=10&codice=<? echo $codice; ?>"><font face="Arial" size="4" color="#993300">Zoom +&nbsp;&nbsp;&nbsp;</font></a>
      <a href="?d=<? echo $dx; ?>&zx=<? echo $zx; ?>&add=-10&codice=<? echo $codice; ?>"><font face="Arial" size="4" color="#993300">Zoom -</font></a>
      </p>
  </div>  
</div> 

</body>
</html>
<script>
function carica_consegnaA(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=900,height=600,left=150,top=150,location=0,directories=0,toolbar=0,scrollbars=yes,resizable=1')
    
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
function carica_consegnaC(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=900,height=600,left=150,top=150,location=0,directories=0,toolbar=0,scrollbars=yes,resizable=1')
    
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>
  <script>
function carica_consegnaB(url){
	<!-- intestazione -->	
    popupWindow =          
		window.open(url,'pdf','width=900,height=600,left=150,top=150,location=0,directories=0,toolbar=0,scrollbars=yes')
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script> 