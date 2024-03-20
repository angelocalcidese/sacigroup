<?php



/*
function differanza_data($prima,$seconda){
//funzia se il separatore è : altrimenti modificare
$p=explode(":", $prima);
$s=explode(":", $seconda);
$diff_sec=($p[0]*60 + $p[1])-($s[0]*60 + $s[1]);
$dif_minuti=(int)($diff_sec/60);
$dif_secondi=abs((int)($diff_sec%60));
$dif_minuti=($dif_minuti<10 ? "0" : "").$dif_minuti;
$dif_secondi=($dif_secondi<10 ? "0" : "").$dif_secondi;
return "$dif_minuti:$dif_secondi";
}
//test****
$primo = "16:49";
$secondo = "07:37";
echo "diferenza tra $primo e $secondo = ".differanza_data($primo,$secondo)."<br />";

$primo = "07:37";
$secondo = "16:49";
echo "diferenza tra $primo e $secondo = ".differanza_data($primo,$secondo)."<br />";
$primo = "15:37";
$secondo = "16:22";
echo "diferenza tra $primo e $secondo = ".differanza_data($primo,$secondo)."<br />";

$oggi=date("Y-m-d H:m:s");
$originalTime = new DateTimeImmutable("2023-12-16 11:40:00");
$targedTime = new DateTimeImmutable($oggi);
$interval = $originalTime->diff($targedTime);
echo $interval->format("%a %H:%I:%S"), "\n";



$datainizioxx="14/12/2023 10:00:00";
$comodo=explode(" ",$datainizioxx);

$comododata=$comodo[0];
$comododatax=explode("/",$comododata);
$comododata=$comododatax[2]."-".$comododatax[1]."-".$comododatax[0];

$comodotime=str_replace(',', ':', $comodo[1]); 
$datainizio=$comododata." ".$comodotime;
   
$oggi=date("Y-m-d H:m:s");
#echo $datainizio." ".$oggi; exit;
$originalTime = new DateTimeImmutable($datainizio);
$targedTime = new DateTimeImmutable($oggi);
$interval = $originalTime->diff($targedTime);
echo $interval->format("%a %H:%I:%S"), "\n";
$iniziox="2023-12-16 15:00:00";
$oggi=date("Y-m-d Y:m:s");
$to_time = strtotime($iniziox);
$from_time = strtotime($oggi);
$temporr = round(abs($to_time - $from_time) / 60,2);
$tempo=$tempo+$temporr;
echo "<br>".$tempo;
*/
include "conf_DB.php";
$sqlyh = "SELECT *  FROM  tipointervento  where commessa = 'FSW-23IMAC-013' and cliente = 'FSW-1003' and tipointervento1 = 'riparazione modem' ";  
#echo $sqlyh;  

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
#echo $giorno1; exit;
$ora1= $macrogruppoyh["ora1"];
#echo $ora1; exit;
$numgiore1= $macrogruppoyh["numgiore1"];
$feriali1= $macrogruppoyh["feriali1"];
#echo $feriali1;
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
#$sql = "SELECT *  FROM  tk ".$selezionastato.$selezionaticket."  order by numero " ;  
$sql = "SELECT *  FROM  tk   where numero = '1381' order by numero " ; 
echo $sql;
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
     $aggiornamento = $macrogruppo["aggiornamento"];}}        
$contaferiali=0;
echo $statoxx; $giorno1=$giorno1."#".$statoxx;
function giornilavorativi($dataInizio,$dataFine,$ore,$feriali1,$sabato1,$festivi1,$arafer1,$daorafer1,$arasab1,$daorasab1,$arafes1,$daorafes1,$ora1,$numgiore1,$giorno1)
{
echo "<br>stato ".$giorno1;
$comodo=explode("#",$giorno1);
$giorno1=$comodo[0];
$statoxx=$comodo[1];
echo "<br>ristato ".$statoxx;
#echo "data inizio ".$dataInizio." datafine ".$dataFine."<br>";  
    // Calcolo del giorno di Pasqua fino all'ultimo anno valido
    for ($i=2006; $i<=2037; $i++) {
    $pasqua = date("Y-m-d", easter_date($i));
    $array_pasqua[] = $pasqua;
    }

    // Calcolo le rispettive pasquette
    foreach($array_pasqua as $pasqua){
    list ($anno,$mese,$giorno) = explode("-",$pasqua);
    $pasquetta = mktime (0,0,0,date($mese),date($giorno)+1,date($anno));
    $array_pasquetta[] = $pasquetta;
    }
    
    // questi giorni son sempre festivi a prescindere dall'anno
    $giorniFestivi = array("01-01",
                           "01-06",
                           "04-25",
                           "05-01",
                           "06-02",
                           "08-15",
                           "11-01",
                           "12-08",
                           "12-25",
                           "12-26",
                           );

#echo $ora1; exit;
if($ora1=="on"){
#echo "<br>data inizio: ".$dataInizio." ".$ore."<br>";
$dataIniziox=$dataInizio." ".$ore;
$comodo=explode(":",$ore);
$ore=$comodo[0];
#echo $numgiore1; 
$orafine=$ore+$numgiore1;
#echo $orafine; exit;
$dataFine=$dataInizio." ".$orafine;
#echo "dataine ".$dataFine; exit;
$datafineparziale=$dataInizio;
#echo "datafineparz ".$datafineparziale."<br>";
#exit;
#echo "<br>data fine: ".$dataInizio." ".$orafine."<br>";  exit;
$giorno_data = date("w",$i); //verifico il giorno: da 0 (dom) a 6 (sab)
if(($feriali1=="on") and ($giorno_data==1 or $giorno_data==2 or $giorno_data==3 or $giorno_data==4 or $giorno_data==5))
{$maxora=$arafer1;$minora=$daorafer1;}
if(($sabato1=="on") and ($giorno_data==6 ))
{$maxora=$arasab1;$minora=$daorasab1;}
if(($festivi1=="no") and ($giorno_data==0 ))
{$maxora=$arafes1;$minora=$daorafes1;}
$comodo=explode(":",$orafine);
$orafine=$comodo[0];
#echo "orafine ".$orafine."<br>";
if($maxora <= $orafine){
#echo "datafineparziale ".$datafineparziale."<br>";
$newdate = strtotime ( '+1 day' , strtotime ( $datafineparziale ) ) ; // facciamo l'operazione
$datafineparziale = date ( 'Y-m-d' , $newdate ); //trasformiamo la data nel formato accettato dal db YYYY-MM-DD
$comodo=explode(":",$numgiore1);
$numgiore1=$comodo[0];
#echo "ore ".$numgiore1."<br>";
$minora=$minora+$numgiore1;
$datafinale=$datafineparziale." ".$minora; 
} else {$datafinale=$datafineparziale." ".$orafine;}
#echo "datafinale ".$datafinale."<br>";
#echo $giorno_data."<br>";
#echo $maxora."<br>";
#echo $minora."<br>";
}


#echo "giorno".$giorno1; exit;
if($giorno1=="on"){ 
$dataIniziox=$dataInizio;
for ($i = 1; $i <= $numgiore1; $i++)
{
$dataFine = date('Y-m-d',strtotime($dataIniziox . "+1 days")); 
$dataIniziox=$dataFine;
#echo "<br> inizio ".$dataInizio." datafine ".$dataFine;
$d_ex=explode("-", $dataFine);//attento al separatore
    $d_ts=mktime(0,0,0,$d_ex[1],$d_ex[2],$d_ex[0]);
     $giorno_data=(int)date("N",$d_ts);//1 (for Monday) through 7 (for Sunday)

#echo "<br> inizio ".$dataInizio." datafine ".$dataFine;
if($feriali1=="") {      
            if ($giorno_data == 1 or $giorno_data == 2 or $giorno_data == 3 or $giorno_data == 4 or $giorno_data == 5  )
            { $dataFine = date('Y-m-d',strtotime($dataIniziox . "+1 days")); $dataIniziox=$dataFine;} } 
if($sabato1=="")  { 
            if ($giorno_data == 6  ){ $dataFine = date('Y-m-d',strtotime($dataIniziox . "+1 days")); $dataIniziox=$dataFine;
            } }
if($festivi1=="") {
            if ($giorno_data == 0  ){ $dataFine = date('Y-m-d',strtotime($dataIniziox . "+1 days")); $dataIniziox=$dataFine;          
            } }
#echo "<br>". $giorno_data." ".$dataFine;   
// con la data restituisce true se festivo false se lavorativo

$res = festivita($dataFine);
if($res==1){ $dataFine = date('Y-m-d',strtotime($dataIniziox . "+1 days")); $dataIniziox=$dataFine;}
        
}
#echo "<br> datafin ".$res." ".$dataFine; 
}            

#exit;

if($giorno1=="on"){
$adesso=date("Y-m-d");
#echo $dataFine." adesso ".$adesso."<br>";
$origin = new DateTimeImmutable($dataFine);
$target = new DateTimeImmutable($adesso);
$interval = $origin->diff($target);
$giornisla=$interval->format('%R%a giorni');
}

if($ora1=="on"){
#$adesso=date("Y-m-d H:m:s");
#echo $datafinale; exit;
$datafinale=$datafinale.":00:00";
#echo $datafinale;
$dt = new DateTime($datafinale);
$lt = new DateTime();
$dd = ( $lt->getTimestamp() - $dt->getTimestamp() ) / 3600;
$comodo=explode(".",$dd);
$oresla=$comodo[0];
#echo "<br> orex ".$oresla;
}
/*
        $lavorativi = 0;
        $lavorativifer = 0;
        $lavorativisab = 0;
        $lavorativifes = 0;
        $ore=0;
        $orelavoro=24;
        #echo "i".$dataInizio."f".$dataFine;
        for($i = strtotime($dataInizio); $i<=strtotime($dataFine); $i = strtotime("+1 day",$i))
        {
           $giorno_data = date("w",$i); //verifico il giorno: da 0 (dom) a 6 (sab)
           $mese_giorno = date('m-d',$i); // confronto con gg sempre festivi
             // Infine verifico che il giorno non sia sabato,domenica,festivo fisso o festivo variabile (pasquetta); 
             #echo $feriali1;
               
                          
  if($feriali1=="on") {      
            if ($giorno_data == 1 or $giorno_data == 2 or $giorno_data == 3 or $giorno_data == 4 or $giorno_data == 5  )
            { 
            $lavorativifer++; 
            $orelavorofer=$arafer1-$daorafer1;
            }  
            }
  if($sabato1=="on")  { 
            if ($giorno_data == 6  ){
            $lavorativisab++;  
            $orelavorosab=$arasab1-$daorasab1;} 
            } 
  if($festivi1=="on") {
            if ($giorno_data == 0  ){
            $lavorativifes++;
            $orelavorofes=$arafes1-$daorafes1;}
            }
            
        }

$lavorativi=$lavorativifer+$lavorativisab+$lavorativifes;
$lavorativi=$lavorativi-1;
$orefer=$lavorativi*$orelavorofer;
$oresab=$lavorativi*$orelavorosab;
$orefes=$lavorativi*$orelavorofes;
$ore=$orefer+$oresab+$orefes;
#echo "<br> inizio ".$dataInizio." datafine ".$dataFine;
*/

return array($ore, $lavorativi,$dataFine,$datafinale,$dataIniziox,$giornisla,$oresla);

}



if($datachiusura==""){$oggi=date("Y-m-d H:m:s"); } else {
$comodo=explode(" ",$datachiusura);
$comododata=$comodo[0];
$comododatax=explode("/",$comododata);
$comododata=$comododatax[2]."-".$comododatax[1]."-".$comododatax[0];
$comodotime=str_replace(',', ':', $comodo[1]); 
$oggi=$comododata." ".$comodotime.":00:00";
}
$orainizio="11:11:37";
$dataInizio="11/11/2023";
$risultato= giornilavorativi($dataInizio,$oggi,$orainizio,$feriali1,$sabato1,$festivi1,$arafer1,$daorafer1,$arasab1,$daorasab1,$arafes1,$daorafes1,$ora1,$numgiore1,$giorno1,$dataFine,$statoxx); // 6 
#echo "<br> inizio ".$dataInizio." datafine ".$dataFine;
#echo "<br> ore ".$risultato[0];
#echo "<br> giorni ".$risultato[1];
if($giorno1=="on"){
$risultatooresla=$risultato[1]-$numgiore1;
#echo "<br> giorni ".$risultatooresla;
$risultatofine=$risultato[2];
############### $risultatofine scadenza giorni  ###############
echo "data inizio ".$dataInizio." datafine ".$risultatofine."<br>"; 
#################    $risultato[5] giorni sla  ###############
echo "<br> giorni sla ".$risultato[5]; 
}
#echo "or ".$ora1;
if($ora1=="on"){ 
$risultatooreslax=$risultato[0]-$numgiore1;
################   $risultato[6] ore sla ####################
echo "<br> ore ".$risultato[6];
$risultatooreslaxx=$risultato[3];
$risultatooreslaxxx=$risultato[4];
##################  $risultatooreslaxxx risultato scadenza ore #####################
echo "<br> inizio ".$risultatooreslaxxx." datafine ".$risultatooreslaxx; }

 

function festivita($data = false) {
    // creo un array con le festivita
    $array_festivita = array(
        "01-01" => "Mio compleanno",
        "01-06" => "Epifania",
        "04-25" => "Festa della liberazione",
        "05-01" => "Festa dei lavoratori",
        "06-02" => "Festa della repubblica",
        "08-15" => "Ferragosto",
        "11-01" => "Festa di tutti i santi",
        "12-08" => "Festa dell'immacolata",
        "12-25" => "Natale",
        "12-26" => "Giorno di Santo Stefano"
    );
    // se non ho la data come argomento restituisco l'array
    if (!$data) {
        return $array_festivita;
    }
    // creo un array con la data ricevuta
    $exp = explode('-', $data);
    // verifico la data
    if (!checkdate($exp[1], $exp[2], $exp[0])) {
        // data non valida esco
        return "Data non valida!";
    }
    // time della data
    $timestamp = mktime(0, 0, 0, $exp[1], $exp[2], $exp[0]);
    // verifico se il giorno della settimana è Domenica con date('w') (0->Dom 6->Sab)
    #if (date('w', $timestamp) == 0) {
        // Se = a 0 è festivo ! esco
   #     return true;
   #}
    // altrimenti creo una variabile per la ricerca nell array
    $mesegiorno = $exp[1] . "-" . $exp[2];
    // ciclo l'array delle festivita
    foreach ($array_festivita as $key => $value) {
        // se trovo corrispondenza 
        if ($key == $mesegiorno) {
            // è festivo esco
            $risultato="festivo";
            #echo $risultato;
            return TRUE;
        }
    }
    // non è festivo esco
    $risultato="nofestivo";
    return FALSE;
}
/*
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
    
    echo datediff("A", "11/12/2023", "16/12/2023");
?>