<?php

?>


<table  class="display" cellspacing="0" align="center" style="width:90%; position:relative;">         
             <thead class="intesta">
	<tr class="testa">
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Evidenzia</td>
         
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Prov.<br>Regione</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >N.Ticket<br>Ticket Cli.<br>Priorità</td>          
          
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Data Apertura<br>Data Chiusura</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Data Scadenza</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Pianificato</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Stato<br>T.P. Assegnato</td> 
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Cliente<br>Commessa</td>        
      	 
           <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Attività<br>Tipo Intervento </td>
         
<!--          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Apparato<br>Seriale</td>            
          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >N. Ticket Cliente</td> -->
          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Stato SLA</td>

          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Insegna -  Ragione sociale<br>Indirizzo<br>Contatto - Telefono</td>
           </tr>       
	</thead>
	<tbody>
<?php 

$tabella=array(); 
$tabellax=array(); 
$giro=0; 
$girox=1; 
#echo "passo"; 
$sql = "SELECT *  FROM  tk where numero = '$numero' ";  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
    $datainizioxx = $macrogruppo["datainizio"];
    $inizio=substr($datainizioxx, 0, 10);
    #echo "nn".$inizio; exit;
    $comodo=explode("/",$inizio);
    $inizio=$comodo[2]."/".$comodo[1]."/".$comodo[0];
    $comodo=explode("/",$dadata);
    $dadatax=$comodo[2]."/".$comodo[1]."/".$comodo[0];
    $comodo=explode("/",$adata);
    $adatax=$comodo[2]."/".$comodo[1]."/".$comodo[0];
    #echo $inizio.$dadatax.$adatax."<br>";
    
    {
    
    
     $serialexx = $macrogruppo["seriale"];
     $numeroxx = $macrogruppo["numero"];
     $clientexx = $macrogruppo["cliente"];
     $commessaxx = $macrogruppo["commessa"];
     $attivitaxx = $macrogruppo["attivita"];
     
     $tipointerventoxx = $macrogruppo["tipointervento"];
     $apparatoxx = $macrogruppo["apparato"];
     $statoxx = $macrogruppo["stato"];
     $priorita = $macrogruppo["priorita"];  
     $ticketcli = $macrogruppo["ticketcli"];
     #echo "t ".$ticketcli;
     $aggiornamento = $macrogruppo["aggiornamento"];
$sqlx = "SELECT *  FROM  tkluogo where  numero  = '$numeroxx' " ;  
#echo $sql;
$rCount = 1;
$resultx = $conn->query($sqlx);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc())	
	{   
     $ragsocxx = $macrogruppox["ragsoc"];
     $insegna = $macrogruppox["insegna"];
     $via = $macrogruppox["indirizzo"];
     $pap = $macrogruppox["cap"];
     $citta = $macrogruppox["citta"];
     $contatto = $macrogruppox["contatto"];
     $telefono = $macrogruppox["telefono"];
     $prov = $macrogruppox["prov"];
$regione="";
$sqlxj = "SELECT *  FROM  province where  sigla = '$prov' " ;  
#echo $sql;
$rCount = 1;
$resultxj = $conn->query($sqlxj);
if ($resultxj->num_rows > 0) {
  while($macrogruppoxj = $resultxj->fetch_assoc())	
	{ $regione = $macrogruppoxj["regione"]; }}         
     }}
$sqlx = "SELECT *  FROM  clienti where  codice  = '$clientexx' " ;  
#echo $sql;
$rCount = 1;
$resultx = $conn->query($sqlx);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc())	
	{   
     $ragsocclixx = $macrogruppox["ragsoc"];
     }}     
$sqlx = "SELECT *  FROM  commesse where  commessa  = '$commessaxx' " ;  
#echo $sql;
$rCount = 1;
$resultx = $conn->query($sqlx);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc())	
	{   
     $nomecommessaxx = $macrogruppox["nomecommessa"];
     }}  
$swce=0;
$sql1f = "SELECT * FROM assegnato  where numero = '$numeroxx' ";
#echo $sql1; 
$resultf = $conn->query($sql1f);
if ($resultf->num_rows > 0) {
  while($macrogruppof = $resultf->fetch_assoc())
		{ $ragsoc = $macrogruppof["ragsoc"];	
        $swce=1;} }
$sql1g = "SELECT * FROM assegnatotec  where numero = '$numeroxx' ";
#echo $sql1; 
$resultg = $conn->query($sql1g);
if ($resultg->num_rows > 0) {
  while($macrogruppog = $resultg->fetch_assoc())
		{ $ragsoc = $macrogruppog["ragsoc"];	
        $swce=1;} }  
$datapian="";
$sql1g = "SELECT * FROM pianificato  where codice = '$numeroxx' ";
#echo $sql1g;   exit;
$resultg = $conn->query($sql1g);
if ($resultg->num_rows > 0) {
  while($macrogruppog = $resultg->fetch_assoc())
		{ $datapian = $macrogruppog["dataint"];	
          $orapian = $macrogruppog["oraint"];
        } }        
$datachiusura="";         
$sql1g = "SELECT * FROM chiusi  where numero = '$numeroxx' ";
#echo $sql1g;   exit;
$resultg = $conn->query($sql1g);
if ($resultg->num_rows > 0) {
  while($macrogruppog = $resultg->fetch_assoc())
		{ $datainint = $macrogruppog["datainint"];	
          $datafinintx = $macrogruppog["datafinintx"];
          $datachiusura=$datainint." ".$datafinintx;
          #echo "chius ".
        } }         
#echo "passo"; exit;           
$ce=0;
$sqlyy = "SELECT *  FROM  selezionati where  numero  = '$numeroxx' and login = '$login' " ;  
#  echo $sql;
  $rCount = 1;
  $resultyy = $conn->query($sqlyy);
  if ($resultyy->num_rows > 0) {
      while($macrogruppoyy = $resultyy->fetch_assoc())
		{  $ce=1; } }  
        
$sqlyh = "SELECT *  FROM  tipointervento  where commessa = '$commessaxx' and cliente = '$clientexx' and tipointervento1 = '$tipointerventoxx'";  
#echo $sql;   exit;

$resultyh = $conn->query($sqlyh);
if ($resultyh->num_rows > 0) {
  while($macrogruppoyh = $resultyh->fetch_assoc())
		{
$progrtg= $macrogruppoyh["progr"];         
#$tipointervento= $macrogruppo["tipointervento"];        
$tipointervento1= $macrogruppoyh["tipointervento1"];
#echo $tipointervento1;
$materiale1= $macrogruppoyh["materiale1"];
$noteatt1= $macrogruppoyh["noteatt1"];
$tipofatta1= $macrogruppoyh["tipofatta1"];
$periodofatta1= $macrogruppoyh["periodofatta1"];
$caricoa1= $macrogruppoyh["caricoa1"];
$importoa1= $macrogruppoyh["importoa1"];
$giorno1= $macrogruppoyh["giorno1"];
$ora1= $macrogruppoyh["ora1"];
$numgiore1= $macrogruppoyh["numgiore1"];
$feriali1= $macrogruppoyh["feriali1"];
$daorafer1= $macrogruppoyh["daorafer1"];
$arafer1= $macrogruppoyh["arafer1"];
$sabato1= $macrogruppoyh["sabato1"];
$daorasab1= $macrogruppoyh["daorasab1"];
$arasab1= $macrogruppoyh["arasab1"];
$festivi1= $macrogruppoyh["festivi1"];
$daorafes1= $macrogruppoyh["daorafes1"];
$arafes1= $macrogruppoyh["arafes1"];
$numgior= $macrogruppoyh["numgior"];
}}
        
       
          
if($ingranaggiosel==1){
   if($ce==1){     
$tabella[$giro]=" const ticket".$numeroxx." = '".$citta." ".$via."'; "; 

$tabellax[0]="destinations: ["; 

$tabellax[$girox]="ticket".$numeroxx.",";  
$girox++; 
$giro++;               
?>     
    <tr >
      <td style="text-align:center;border: 1px solid #e4e3e3;">
        <button type="button" ><i class="fa-solid fa-plus" data-bs-toggle="modal" data-bs-target="#ticket" style="cursor:pointer; margin-left:5px"></i></button>
      </td> 
    
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana">(<?php echo $prov; ?>) <br> <?php echo $regione; ?>
      
      </td>  
      <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" alignv="top" >
      <font size="3" color="#cc0000" face="Verdana"><?php echo $numeroxx; ?> </font>        
      <br>
      <font size="2" color="#000000" face="Verdana"><?php echo $ticketcli; ?></font>
      <br>
    <?php if($priorita=="rosso"){ ?>
    <img border="0" src="rosso.png" width="25" height="25" >
    <?php } else { ?>
    <img border="0" src="bianco.png" width="25" height="25" >
    <?php } ?>
  
     <?php if($priorita=="giallo"){ ?>
    <img border="0" src="giallo.png" width="20" height="20" >
    <?php } else { ?>
    <img border="0" src="bianco.png" width="20" height="20" >
    <?php } ?>
  
     <?php if($priorita=="verde"){ ?>
    <img border="0" src="verde.png" width="18" height="18" >
    <?php } else { ?>
    <img border="0" src="bianco.png" width="18" height="18" >
    <?php } ?> 
    <br>
    
    
    <!--<label><i data-bs-toggle="modal" data-bs-target="#assegna"><font size="4" style="font-style: normal;">+</font></i></label>-->
    
    
    
      
     </td>
     
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $datainizioxx; ?><br><br><? echo $datachiusura; ?></font></td>
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo " "; ?></font></td>
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $datapian; ?></font></td>
      
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $statoxx; ?>
<?php if($swce==1 and $statoxx == "Assegnato"){ ?>
<br><?php echo $ragsoc; ?>  
<?php } ?>    
      </font></td>
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $ragsocclixx."<br>".$nomecommessaxx; ?></font></td>

      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $attivitaxx."<br>".$tipointerventoxx; ?></font></td>
      
<!--      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left"><font size="2" face="Verdana"><?php echo $apparatoxx; ?><br><?php echo $serialexx; ?></font></td>
      <td valign="top"style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $ticketcli; ?></font></td> -->
      <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana">
      <img border="0" src="verde.png" width="13" height="13" >
      <img border="0" src="bianco.png" width="14" height="14" >
      <img border="0" src="bianco.png" width="17" height="17" > <br> <?php echo " "; ?>    
      </td>

      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $insegna." - ".$ragsocxx."<br>".$via." - ".$citta." (".$prov.")<br>".$contatto." - ".$telefono; ?></font></td>
     
     </tr>	
     
<?php          
} }
else
{
?>     
    <tr >
      <td style="text-align:center;border: 1px solid #e4e3e3;">
        <button type="button" class="btn btn-success" ><i class="fa-solid fa-plus" data-bs-toggle="modal" data-bs-target="#ticket" style="cursor:pointer; margin-left:5px"></i></button>
           </td> 

      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana">(<?php echo $prov; ?>) <br> <?php echo $regione; ?>
      
      </td>  
      <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" alignv="top" >
      <a href="lavoraticket.php?login=<?php echo $login; ?>&codice=<?php echo $numeroxx; ?>" >
      <font size="3" color="#cc0000" face="Verdana"><?php echo $numeroxx; ?> </font>        
      <br>
      <font size="2" color="#000000" face="Verdana"><?php echo $ticketcli; ?></font>
      <br>
    <?php if($priorita=="rosso"){ ?>
    <img border="0" src="rosso.png" width="25" height="25" >
    <?php } else { ?>
    <img border="0" src="bianco.png" width="25" height="25" >
    <?php } ?>
  
     <?php if($priorita=="giallo"){ ?>
    <img border="0" src="giallo.png" width="20" height="20" >
    <?php } else { ?>
    <img border="0" src="bianco.png" width="20" height="20" >
    <?php } ?>
  
     <?php if($priorita=="verde"){ ?>
    <img border="0" src="verde.png" width="18" height="18" >
    <?php } else { ?>
    <img border="0" src="bianco.png" width="18" height="18" >
    <?php } ?> 
    <br>
    
    
    <!--<label><i data-bs-toggle="modal" data-bs-target="#assegna"><font size="4" style="font-style: normal;">+</font></i></label>-->
    
    
    
      
     </td>
     
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $datainizioxx; ?><br><br><? echo $datachiusura; ?></font></td>
<?

$comodoi=explode(" ",$datainizioxx);

$comododata=$comodoi[0];
$comododatax=explode("/",$comododata);
$comododata=$comododatax[2]."-".$comododatax[1]."-".$comododatax[0];

$comodotime=str_replace(',', ':', $comodoi[1]); 
$datainizio=$comododata." ".$comodotime;
#echo "datainizio ".$datainizio;
$contaferiali=0;

if($datachiusura==""){$oggi=date("Y-m-d H:m:s"); } else {
$comodo=explode(" ",$datachiusura);
$comododata=$comodo[0];
$comododatax=explode("/",$comododata);
$comododata=$comododatax[2]."-".$comododatax[1]."-".$comododatax[0];
$comodotime=str_replace(',', ':', $comodo[1]); 
$oggi=$comododata." ".$comodotime.":00:00";
}
#$risultato= giornilavorativi($datainizio,$oggi,0,$feriali1,$sabato1,$festivi1,$arafer1,$daorafer1,$arasab1,$daorasab1,$arafes1,$daorafes1); // 6 
#echo "<br>stat ".$statoxx;
$risultato= giornilavorativi($datainizio,$oggi,$orainizio,$feriali1,$sabato1,$festivi1,$arafer1,$daorafer1,$arasab1,$daorasab1,$arafes1,$daorafes1,$ora1,$numgiore1,$giorno1,$statoxx,$datachiusura); // 6 

if($giorno1=="on"){
#$risultatooresla=$risultato[1]-$numgiore1;
#echo "<br> giorni ".$risultatooresla;
$risultatofine=$risultato[2];
############### $risultatofine scadenza giorni  ###############
#echo "data iniziox ".$dataInizio." datafinex ".$risultatofine."xx<br>"; 
$comodo=explode("-",$risultatofine);
$risultatofine=$comodo[2]."/".$comodo[1]."/".$comodo[0];
#################    $risultato[5] giorni sla  ###############
#echo "<br> giorni sla ".$risultato[5];
$risultatooresla=$risultato[5]; 
if($risultatooresla < 0){$colore="#0d8e1c";} else {$colore="#fd0101";}
}

#echo "or ".$ora1;
if($ora1=="on"){ 
$risultatooreslax=$risultato[6];
################   $risultato[6] ore sla ####################
$risultatooreslaxx=$risultato[3];
$comodo=explode(" ",$risultatooreslaxx);
$comodo1=$comodo[0];
$comodo2=explode("-",$comodo1);
$risultatooreslaxx1=$comodo2[2]."/".$comodo2[1]."/".$comodo2[0];
$risultatooreslaxx=$risultatooreslaxx1." ".$comodo[1];
$risultatooreslaxxx=$risultato[4];
##################  $risultatooreslaxxx risultato scadenza ore #####################
#echo "<br> inizio ".$risultatooreslaxxx." datafine ".$risultatooreslaxx; 
if($risultato[6] < 0){$colore="#0d8e1c";} else {$colore="#fd0101";}
 }


?>            
      
      <td valign="top" style=" border: 1px solid #e4e3e3; " align="center" ><font size="2"  ><?php if($ora1=="on"){ echo $risultatooreslaxx;} else { echo $risultatofine." ".$comodoi[1]; }?></font></td>
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $datapian; ?></font></td>
      
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $statoxx; ?>
<?php if($swce==1 and $statoxx == "Assegnato"){ ?>
<br><?php echo $ragsoc; ?>  
<?php } ?>    
      </font></td>
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $ragsocclixx."<br>".$nomecommessaxx; ?></font></td>

      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $attivitaxx."<br>".$tipointerventoxx; ?></font></td>
      
<!--      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left"><font size="2" face="Verdana"><?php echo $apparatoxx; ?><br><?php echo $serialexx; ?></font></td>
      <td valign="top"style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $ticketcli; ?></font></td> -->

      <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana">
      
      <button type="button" class="btn btn-success" style="background: <? echo $colore; ?>;">
<? 

if($giorno1=="on"){
echo "giorni ".$risultato[5];}
if($ora1=="on"){
echo "ore ".$risultatooreslax;}

?>
      </button>        
       <br> <?php echo " "; ?>    
      </td>

      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $insegna." - ".$ragsocxx."<br>".$via." - ".$citta." (".$prov.")<br>".$contatto." - ".$telefono; ?></font></td>
     
     </tr>	
     
<?php          
}




 } }
}           
?>                    
            </table>
   
<br>
<? ?>
