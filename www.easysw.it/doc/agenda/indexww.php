<?php

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
    echo "<td><b>".$v."</b></td>\n";
  }
  echo "</tr>";
  echo "<td></td>";
  for($j = 1; $j<$days+$lunedi; $j++)
  {
    if($j%$cols+1==0)
    {
      echo "<tr >\n";
    }

    if($j<$lunedi)
    {
      echo "<td bgcolor=\"#ffffff\"> </td>\n";
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
            $day = "<a href=\"appuntamenti.php?mese=$mese&anno=$y&giorno=$day\">$day</a>";
          }
       # }
    #  }

      if($data != $oggi)
      {
        echo "<td  bgcolor=\"#696f68\" >".$day."</td>";
      }else{
        echo "<td  bgcolor=\"#f6c61f\"><b>".$day."</b></td>";
      }
    }

    if($j%$cols==0)
    {
      echo "</tr>";
    }
  }
  echo "</tr>";
  
  
include "conf_DB.php";
$sql1 = "SELECT * FROM camere  order by camera";
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
      echo "<td> </td>\n";
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
    
    $datauscita = $macrogruppox["datauscita"]; 
    $tipocliente = $macrogruppox["tipocliente"];
    $datainizio = $macrogruppox["datainizio"];
    $datafine = $macrogruppox["datafine"];
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
        $swgiallo=0;
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
        
        if($dataentrataw!="0000-00-00") {$colore=$giallo;$swgiallo=1;} 
        if($datauscitaw!="0000-00-00") {$colore=$blu;} 
                 
        } else {$cognome="";$numerox="";} 
      ?>
      <td bgcolor="<? echo $colore; ?>"><font color="#000000">
      
      <? echo $sw2; ?><? echo $cognome; ?></a><br>
      
      <? if ($colore=="#faf82a" ){ ?>
      <a href="../../partenza.php?tessera=<?php echo $numerox; ?>&login=<? echo $login; ?>"><? echo $numerox;?></font></a></font></td><?
     
      
    } }
    
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
<!--<meta http-equiv="refresh" content="10" /> -->
<style type="text/css">
table{
background: #ffffff;
border-collapse: collapse;
}
td{
border: 1px solid #7f7f7f;
padding: 5px;
text-align: center;
}
a { text-decoration: none; font-weight: bold; color: #000000} a:hover { color: #0080FF; }
.bordered:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
   }
   
</style>

</head>
<body>
<?

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
		window.open(url,'pdf','width=800,height=800,left=150,top=150,location=0,directories=0,toolbar=0,scrollbars=yes,resizable=1')
    
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>