<?php
$ingranaggio=$_REQUEST["ingranaggio"];
$numcanc=$_REQUEST["numero"];
$login=$_REQUEST["login"];
$confermato=$_REQUEST["confermato"];
if ($ingranaggio==1)
{
include "conf_DB.php";
#$sql = "DELETE from prenotazioni where numero = '$numcanc' ";
$sql = "UPDATE prenotazioni set 
confermato = '$confermato'
where numero = '$numcanc'";
#echo  $sql; exit;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 
$sql = "DELETE from prenotagruppo where prenotazione = '$numcanc' ";
#echo  $sql; exit;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 
}



function ShowCalendar($m,$y)
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
  if($lunedi==0) $lunedi = 7; 
  echo '<div align="center">';
   echo "<tr>\n <font face=\"Arial\" size=\"5\" color=\"#993300\">
  <td colspan=\"".$cols."\">
  <a href=\"?d=" . $precedente . "\"><img src=\"sinistro.png\" width=\"45\" height=\"40\"></a>
  " . "<font face=\"Arial\" size=\"6\" color=\"#993300\">".$nomi_mesi[$m-1] . " " . $y ."</font>". " 
  <a href=\"?d=" . $successivo . "\"><img src=\"destro.png\" width=\"45\" height=\"40\"></a></td></font></tr></div>";
  ?>
  <div align="center">
  (<img src="rosso.png" width="30" height="10"> = Prenotazione NON Confermata) - 
  (<img src="verde.png" width="30" height="10"> = Prenotazione Confermata) - 
  (<img src="giallo.png" width="30" height="10"> = Soggiorno in Corso) - 
  (<img src="blu.png" width="30" height="10"> = Soggiorno Finito) 
  </div>
  <?
  echo '<div align="center">';
  echo "<table border=\"0\"   >\n"; 
  echo "<tr bgcolor=\"#f2f1fd\">";
  echo "<td>CAM</td>";
  foreach($nomi_giorni as $v)
  {
    echo "<td style=\"border-radius: 0px;\"><b>".$v."</b></td>\n";
  }
  echo "</tr>";
  echo "<td><img src=\"letto.png\" width=\"45\" height=\"30\"></td>";
  for($j = 1; $j<$days+$lunedi; $j++)
  {
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
  echo "</tr>";
  
  
include "conf_DB.php";
$sql1 = "SELECT * FROM camere    order by camera";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{ $camera = $macrogruppo["camera"]; 

echo "<td>$camera</td>";  
for($j = 1; $j<$days+$lunedi; $j++)
  {
    if($j%$cols+1==0)
    {
      echo "<tr >\n";
    }

    if($j<$lunedi)
    {
      echo "<td style=\"border: 1px solid #7f7f7f;
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

$sql1x = "SELECT * FROM prenotazioni  where camera = '$camera' and dataannulla = '0000-00-00'";
#echo $sql1x;  exit;
$resultx = $conn->query($sql1x);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc()) 
		{$confermato = $macrogruppox["confermato"];  
    $dataentrata = $macrogruppox["dataentrata"];
    
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
     
    if (($data==$datainiziox or  $data > $datainiziox)and ($data < $datafinex)) 
    {$sw=1;
    $sql1xx = "SELECT * FROM soci  where tessera = '$socio'";
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
        $blu="#2a2ffa";
        $viola="#c19bdf";
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
        if($socio==9999 or $socio==9998) {$colore=$viola;}          
      
        
        
        
       
         
      ?>
      <?
      $swlungo=0;$giornitot=0;  
      $sql1xhh = "SELECT * FROM prenotazioni  where numero = '$numerox'";
      #echo $sql1xhh;  exit;
      $resultxhh = $conn->query($sql1xhh);
      if ($resultxhh->num_rows > 0) {
      while($macrogruppoxhh = $resultxhh->fetch_assoc()) 
  		{ 
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
       if  ($nomi_mesi[$m-1]=="Gennaio"){$meseora=01;}
       if  ($nomi_mesi[$m-1]=="Febbraio"){$meseora=02;}
       if  ($nomi_mesi[$m-1]=="Marzo"){$meseora=03;}
       if  ($nomi_mesi[$m-1]=="Aprile"){$meseora=04;}
       if  ($nomi_mesi[$m-1]=="Maggio"){$meseora=05;}
       if  ($nomi_mesi[$m-1]=="Giugno"){$meseora=06;} 
       if  ($nomi_mesi[$m-1]=="Luglio"){$meseora=07;}
       if  ($nomi_mesi[$m-1]=="Agosto"){$meseora=08;}
       if  ($nomi_mesi[$m-1]=="Settembre"){$meseora=09;}
       if  ($nomi_mesi[$m-1]=="Ottobre"){$meseora=10;}
       if  ($nomi_mesi[$m-1]=="Novembre"){$meseora=11;}
       if  ($nomi_mesi[$m-1]=="Dicembre"){$meseora=12;}
       
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
       #echo "g.".$giornitot; exit;
       $datetime1 = new DateTime($datainiziokk);
       $datetime2 = new DateTime($datafinekk);
       $interval = $datetime1->diff($datetime2);
       $giornitot= $interval->format('%a ');
       if ($datainizioxx==$data) {$swlungo=1;} 
       
       }}
      
      ?>
      <? if ($swlungo==1) { if($sw!=1){$swlungo=0;$giornitot=0;}  ?>
      <td colspan="<? echo $giornitot; ?>" bgcolor="<? echo $colore; ?>">
      <a href="JavaScript:carica_consegnaA('../../stampasknew1.php?tessera=<?php echo $numerox; ?>');">
      <? echo $sw2; 
      if ($colore=="#2a2ffa"){$colorescritta="#ffffff";}
      if ($colore=="#07e837"){$colorescritta="#000000";}
      if ($colore=="#f61f24"){$colorescritta="#ffffff";}
      if ($colore=="#faf82a"){$colorescritta="#000000";}
       if ($colore=="#c19bdf"){$colorescritta="#ffffff";}
      
      ?>
      <font color="<? echo $colorescritta; ?>" style="font-size: 14pt;"><div class="tooltip">     
      <? echo $cognome; ?>
     
      </font></a></font>
      <span class="tooltiptext"><font color="#000000" style="font-size: 18pt;"><b><? 
      $sql1xhhs = "SELECT * FROM prenotazioni  where numero = '$numerox'";
      #echo $sql1xhh;  exit;
      $resultxhhs = $conn->query($sql1xhhs);
      if ($resultxhhs->num_rows > 0) {
      while($macrogruppoxhhs = $resultxhhs->fetch_assoc()) 
  		{ 
       $datainiziokks= $macrogruppoxhhs["datainizio"];
       $datafinekks = $macrogruppoxhhs["datafine"];
       $dataentratakks= $macrogruppoxhhs["dataentrata"];       
       $datauscitakks= $macrogruppoxhhs["datauscita"];
        if ($dataentratakks!="0000-00-00") {$datainiziokks=$dataentratakks;}
        if ($datauscitakks!="0000-00-00") {$datafinekks=$datauscitakks;}
       
       $datasc=explode("-",$datainiziokks);
       $dataentrataee= ($datasc[2]."/".$datasc[1]."/".$datasc[0]);
       
       $datasc=explode("-",$datafinekks);
       $datafinexxyys = ($datasc[2]."/".$datasc[1]."/".$datasc[0]);
       }}      
      echo $cognome." "
      .$nome."<br> ";?></b>
      </font>
      <font color="#000000" style="font-size: 14pt;">
      <? echo $indirizzores."<br>"
      .$cap." ".$residentecitta." ".$residenteprov."<br> Telefono: ".$telefono 
      ."<br>Prenotato da: ".$dataentrataee." a: ".$datafinexxyys     
      ;?></font>
      <? if ($colore== "#f61f24"  or $colore== "#07e837"){ ?>
      <br>
       <form method="POST" action="" name="modulo">
       <br>
       <font face="Arial" color="#000000"><b>PRENOTAZIONE CONFERMATA?</b></font>
								
					<select size="1" name="confermato" style="background-color: #C0C0C0">
					<option <? if($confermato=="SI"){echo "selected";}?>>SI</option>
					<option <? if($confermato=="NO"){echo "selected";}?>>NO</option>
					</select>
      <input type="hidden" name="ingranaggio" value="1" />
      <input type="hidden" name="numero" value="<? echo $numero; ?>" />
      <input type="submit" value="MODIFICA" name="B3z" style="font-size:10pt;color:white;background-color:red;border:2px solid #336600;padding:3px">
      </form>
      <? } ?>
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
box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.0), 0 0px 0px 0 rgba(0, 0, 0, 0.0); "><font color="#000000">
      <?echo $sw2; ?>
       </font></font></td><?
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
<title>Casa Accoglienza</title>
<link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico">
<link rel="stylesheet" type="text/css" href="bubble.css"> 
<style type="text/css">
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
  width: 350px;
  height: 400;
  background-color: #c0bff8;
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

.tooltip:hover .tooltiptext {
  visibility: visible;
}      
</style>

</head>
<body>
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

ShowCalendar(date("m"),date("Y")); 
?>
<!-- <div align="center">
  (M = MALATO,  A = ACCOMPAGNATORE)
  </div>  -->
 
</body>
</html>
<script>
function carica_consegnaA(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=600,height=800,left=150,top=150,location=0,directories=0,toolbar=0,scrollbars=yes,resizable=1')
    
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>