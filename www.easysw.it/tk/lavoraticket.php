<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="inizio.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php  }
###################################  memorizza campi   ###########################################  
$login=$_REQUEST["login"];
#echo "login ".$login;
#if($login==""){}
#echo $login; exit;
include "conf_DB.php";
#echo "passo"; exit;
#include("mailer/PHPMailerAutoload.php");
$ingranaggio=$_REQUEST["ingranaggio"];
$ingranaggioxx=$_REQUEST["ingranaggioxx"];
$ingranaggio=6;
$ingranaggioy=$_REQUEST["ingranaggioy"];
$ingranaggiott=$_REQUEST["ingranaggiott"];
$ingranaggiohh=$_REQUEST["ingranaggiohh"];
$ingranaggiobb=$_REQUEST["ingranaggiobb"];
$ingranaggiogg=$_REQUEST["ingranaggiogg"]; 
$ingranaggiodocu=$_REQUEST["ingranaggiodocu"]; 
$ingranaggiovedi=$_REQUEST["ingranaggiovedi"];
$ingranaggiopian=$_REQUEST["ingranaggiopian"];
$ingranaggiochiudi=$_REQUEST["ingranaggiochiudi"]; 
$ingranaggiostato=$_REQUEST["ingranaggiostato"];
$ingranaggiocontabile=$_REQUEST["ingranaggiocontabile"];
$ingranaggioricalcola=$_REQUEST["ingranaggioricalcola"];
$ingranaggiochiudidef=$_REQUEST["ingranaggiochiudidef"]; 
$ingranaggiocontmodat=$_REQUEST["ingranaggiocontmodat"]; 
$ingranaggiocontmodatcat=$_REQUEST["ingranaggiocontmodatcat"];
$ingranaggiocontmodatxx=$_REQUEST["ingranaggiocontmodatxx"];
$ingranaggiocontmodatxxy=$_REQUEST["ingranaggiocontmodatxxy"];
$ingranaggioarticolo=$_REQUEST["ingranaggioarticolo"];
$ingranaggioarticolo1=$_REQUEST["ingranaggioarticolo1"];
$ingranaggiomagazzino=$_REQUEST["ingranaggiomagazzino"];
$ingranaggimodindspe=$_REQUEST["ingranaggimodindspe"];
$ingranaggioannric=$_REQUEST["ingranaggioannric"];
$ingranaggiomagazzino1=$_REQUEST["ingranaggiomagazzino1"];
$ingranaggiopartita=$_REQUEST["ingranaggiopartita"];
#echo "par ".$ingranaggiopartita;
$lettoarticolo=$_REQUEST["lettoarticolo"];
$lettomagazzino=$_REQUEST["lettomagazzino"];
$lettopartita=$_REQUEST["lettopartita"];
$scarica=$_REQUEST["scarica"];
$noser=$_REQUEST["noser"];
$serialecod=$_REQUEST["serialecod"];
$codicemag=$_REQUEST["codicemag"];
$codicearticolo=$_REQUEST["codicearticolo"];
$memorizzapartei=$_REQUEST["memorizzapartei"];
$memorizzaparter=$_REQUEST["memorizzaparter"];
$numerointerventox=$_REQUEST["numerointervento"];
$numerointerventoscelto=$_REQUEST["numerointerventoscelto"];
$numerointerventoy=$_REQUEST["numerointerventox"];
#echo "x ".$numerointerventox;
$numerointerventoz=$_REQUEST["numerointerventoy"];
#echo "y ".$numerointerventoy;
$numeroint=$_REQUEST["numeroint"];
#echo "pian ".$ingranaggiopian;
$ingranaggiocancelladoc=$_REQUEST["ingranaggiocancelladoc"];
$catscelto=$_REQUEST["catscelto"];

$numero=$_REQUEST["codice"];
#echo " a".$numero; exit;
#$stato=$_REQUEST["stato"];
#echo "num ".$numero;
$adate=$_REQUEST["adata"];
$fileh=$_REQUEST["fileh"];
$prgrx=$_REQUEST["prgrx"];
$prgry=$_REQUEST["prgry"];
#echo "prgry ".$prgry;
$statonuovo=$_REQUEST["statonuovo"];
$ingranaggiodaspedire=$_REQUEST["ingranaggiodaspedire"];
#echo  "da spedire ".$ingranaggiodaspedire;

if($ingranaggioannric==1){
$progrzann=$_REQUEST["progrzann"];
$segno=$_REQUEST["segno"];
if($segno=="on"){$mettosegno="";}else{$mettosegno="on";}
$sql = "UPDATE daspedire set                                   
segno='$mettosegno'
where 
progr = '$progrzann' ";
#echo $sql; exit;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; }
}

if($ingranaggimodindspe==1){
$viav=$_REQUEST["vianuova"];
$cittav=$_REQUEST["cittanuova"];
$provv=$_REQUEST["provnuova"];
$capv=$_REQUEST["capnuova"];
$prograssegnato=$_REQUEST["prograssegnato"];
#echo "id ".$prograssegnato; exit;

$sql = "UPDATE assegnato set                                   
  indirizzo='$viav',
  citta='$cittav',
  provincia='$provv',
  cap='$capv'
where 
id = '$prograssegnato' ";
#echo $sql; exit;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; }
$ingranaggimodindspe="";
}

#################################   scrittura articolo da spedire e articolo in impegno  ###########################
if($ingranaggiodaspedire==1001){
$dataoperazione=$_REQUEST["dataoperazione"];
$articolo=$_REQUEST["articolo"];
$quantita=$_REQUEST["quantita"];
$seriale=$_REQUEST["seriale"];
$mittente=$_REQUEST["mittente"];
$mittente=str_replace("'", "\'",$mittente);
$magazzino=$_REQUEST["magazzino"];
$magazzino=str_replace("'", "\'",$magazzino);
$ticket=$_REQUEST["ticket"];
$ticketcli=$_REQUEST["ticketcli"];
$notesped=$_REQUEST["notesped"];
$notesped=str_replace("'", "\'",$notesped);

$sql1 = "SELECT * FROM assegnato  where numero = '$numero' and ko = 'ok' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $ragsoc = $macrogruppo["ragsoc"];	
        $dataassegnof = $macrogruppo["dataassegno"];	
        $comodo=explode(" - ",$ragsoc);
        $catvero=$comodo[0];
        $comodo=explode(" ",$dataassegnof);
        $dataas=$comodo[0];
        } }
$sql1 = "SELECT * FROM progressivoaggancio  where progr = '1' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $tesseraww = $macrogruppo["numero"];	 
			} }
$tesseraww++;
$sql = "UPDATE progressivoaggancio set 
numero = '$tesseraww'
where 
progr = '1' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 


$oggiric=date("d/m/Y");
$sqluu = "INSERT INTO daspedire
        (dataoperazione,
articolo,
quantita,
seriale,
mittente,
magazzino,
ticket,
ticketcli,
login,
note,
datarichiesta,
catassegnato,
catassegnatodata,
aggancio) 
        VALUES ( 
        '$dataoperazione',
        '$articolo',
        '$quantita',
        '$seriale',
        '$mittente',
        '$magazzino',
        '$ticket',
        '$ticketcli',
        '$login',
        '$notesped',
        '$oggiric',
        '$catvero',
        '$dataas',
        '$tesseraww'
        )";
#echo $sqluu; exit;       
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd da spedire: " . $conn->error; exit;} 

$sqluu = "INSERT INTO `impegno`(

`dataoperazione`, 
`articolo`, 
`quantita`, 
`mittente`, 

`magazzino`, 
`note`, 
`login`, 
`ticket`, 
`ticketcli`, 
`seriale`,
aggancio) VALUES (

'$dataoperazione',
'$articolo',
'$quantita',
'$mittente',

'$magazzino',
'$notesped',
'$login',
'$ticket',
'$ticketcli',
'$seriale',
'$tesseraww'
        )";
#echo $sqluu; exit;       
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd impegno: " . $conn->error; exit;} 
$ingranaggiodaspedire="";
$scarica="";
$noser="";
$lettomagazzino="";
$lettopartita="";
$lettoarticolo="";
$ingranaggiomagazzino="";
}

########################################    modifico record passivo del cat  ######################
if($ingranaggiocontmodatcat==1){
$tipointervento=$_REQUEST["tipointervento"];
$clientexx=$_REQUEST["clientexx"];
$commessaxx=$_REQUEST["commessaxx"];
$numerointervento=$_REQUEST["numerointervento"];
$catcat=$_REQUEST["catcat"];
$tipofatta1x=$_REQUEST["tipofatta1x"];
$importocalx=$_REQUEST["importocalx"];
$impoexx=$_REQUEST["impoexx"];
$tempox=$_REQUEST["tempox"];
$noteclix=$_REQUEST["notecat"];
$datainiziointx=$_REQUEST["datainiziointx"];
$datafineintx=$_REQUEST["datafineintx"];
$autorizzatoxx=$_REQUEST["autorizzatoxx"];
$fatturatoxx=$_REQUEST["fatturatoxx"];
$totale=$importocalx+$impoexx;


if($autorizzatoclixx==" "){$autorizzatoclixx="off";}
$sql = "UPDATE contabile set                                   
  importocalcolato='$importocalx',
  importoextra='$impoexx',
  minuti='$tempox',
  note='$noteclix',
  inizio='$datainiziointx',
  fine='$datafineintx',
  autorizzato='$autorizzatoxx',
  totale='$totale'
where 
commessa = '$commessaxx' and cliente = '$clientexx' and tipointervento = '$tipointervento' and numerointervento = '$numerointervento' and cat = '$catcat' and ticket = '$numero'";
#echo $sql;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 
$dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$numero',
        '$dataoggi',
        'Modificato contabile passivo',
        '$login',
        '',
        '',
        '')";
#echo "tik ".$numero;        
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 



}
########################################    fine modifica passivo cat  ############################

#################################   modifico il record contabile attivo dopo avere accettato i dati attivo ########################
if($ingranaggiocontmodat==1){
$tipointervento=$_REQUEST["tipointervento"];
$clientexx=$_REQUEST["clientexx"];
$commessaxx=$_REQUEST["commessaxx"];
$numerointervento=$_REQUEST["numerointervento"];

$tipofatta1=$_REQUEST["tipofatta1"];
$importocal=$_REQUEST["importocal"];
if($importocal==""){$importocal=0;}
$impoex=$_REQUEST["impoex"];
$tempo=$_REQUEST["tempo"];
$notecli=$_REQUEST["notecli"];
#echo "note ".$notecli;
$datainizioint=$_REQUEST["datainizioint"];
$datafineint=$_REQUEST["datafineint"];
$autorizzatox=$_REQUEST["autorizzatox"];
#echo "aut ".$autorizzatox;
$fatturatox=$_REQUEST["fatturatox"];
$totale=$importocal+$impoex;
if($autorizzatocli==" "){$autorizzatocli="off";}
$sql = "UPDATE contabile set                                   
  importocalcolato='$importocal',
  importoextra='$impoex',
  minuti='$tempo',
  note='$notecli',
  inizio='$datainizioint',
  fine='$datafineint',
  autorizzato='$autorizzatox',
  totale='$totale'
where 
commessa = '$commessaxx' and cliente = '$clientexx' and tipointervento = '$tipointervento' and ticket = '$numero' and cat = 'NO'
";
#echo $sql;  exit;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 
$dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$numero',
        '$dataoggi',
        'Modificato contabile attivo',
        '$login',
        '',
        '',
        '')";
#echo "tik ".$numero;        
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 


}
###################################  fine modifica contabile   ###########################################




if($ingranaggiostato==1){
$sql = "UPDATE tk set 
        stato = '$statonuovo'
        where 
        numero = '$numero' 
        ";
        if ($conn->query($sql) === TRUE)
          {
          $storianuovostato="Modifica Stato a ".$statonuovo;
          $dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$numero',
        '$dataoggi',
        '$storianuovostato',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
           } 
          else { echo "Error inserted record: " . $conn->error; } 

}
if($ingranaggiochiudidef==1){
 $datachiusura="";         
$sql1g = "SELECT   a.numero, MAX(progr) AS progr FROM (select b.datafinint, b.numero, b.progr from chiusi b) a  where a.numero = '$numero' group by a.numero ";
#echo $sql1g;   exit;
$resultg = $conn->query($sql1g);
if ($resultg->num_rows > 0) {
  while($macrogruppog = $resultg->fetch_assoc())
		{ 
        $progr = $macrogruppog["progr"];
$sql1gx = "SELECT * from chiusi  where progr = '$progr'";
#echo $sql1gx;   exit;
$resultgx = $conn->query($sql1gx);
if ($resultgx->num_rows > 0) {
  while($macrogruppogx = $resultgx->fetch_assoc())                
        {  $datainint = $macrogruppogx["datafiint"];	
          $dx = $macrogruppogx["datafinintx"];
          #echo "chius ".$dx;   exit;
          $datachiusura=$datainint." ".$dx;  
          $esito = $macrogruppogx["esito"];        
          }}} }              

if($esito=="Chiuso"){
$dataint=$_REQUEST["dataint"];
#echo "chiudo".$ingranaggiochiudidef;
$sql = "UPDATE tk set 
        stato = 'Chiuso'
        where 
        numero = '$numero' 
        ";
        if ($conn->query($sql) === TRUE)
          {
          $dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$numero',
        '$dataoggi',
        'Memorizzato Stato in Chiuso',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
           } 
          else { echo "Error inserted record: " . $conn->error; } 
}
if($esito=="Attesa Parti"){
$dataint=$_REQUEST["dataint"];
#echo "chiudo".$ingranaggiochiudidef;
$sql = "UPDATE tk set 
        stato = 'Attesa Parti'
        where 
        numero = '$numero' 
        ";
        if ($conn->query($sql) === TRUE)
          {
          $dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$numero',
        '$dataoggi',
        'Memorizzato Stato Attesa Parti',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
           } 
          else { echo "Error inserted record: " . $conn->error; } 
}
if($esito=="Sospeso"){
$dataint=$_REQUEST["dataint"];
#echo "chiudo".$ingranaggiochiudidef;
$sql = "UPDATE tk set 
        stato = 'Sospeso'
        where 
        numero = '$numero' 
        ";
        if ($conn->query($sql) === TRUE)
          {
          $dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$numero',
        '$dataoggi',
        'Memorizzato Stato Sospeso',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
           } 
          else { echo "Error inserted record: " . $conn->error; } 
}

          
}
if($memorizzapartei==1){
$serialesost1=$_REQUEST["serialesost1"];
$descr1=$_REQUEST["descr1"];
  $sql = "INSERT INTO partei
( 
  numero,             
  serialesost1,
  descr1,
  numerointervento
  ) 
VALUES ( 
 '$numero',           
 '$serialesost1',
 '$descr1',
 '$numerointerventox'
              )";
  #echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        { 
        $dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$numero',
        '$dataoggi',
        'Memorizzato Parte Installata',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
        } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; }


}

if($memorizzaparter==1){
$serialesost1a=$_REQUEST["serialesost1a"];
$descr1a=$_REQUEST["descr1a"];
  $sql = "INSERT INTO parter
( 
  numero,             
  serialesost1,
  descr1,
  numerointervento
  ) 
VALUES ( 
 '$numero',           
 '$serialesost1a',
 '$descr1a',
 '$numerointerventox'
              )";
  #echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {
        $dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$numero',
        '$dataoggi',
        'Memorizzato Parte rimossa',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
         } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; }


}

if($ingranaggiochiudi==1){
$datainint=$_REQUEST["datainint"];
$datafinint=$_REQUEST["datafinint"]; 
$datafiint=$_REQUEST["datafiint"];
if($datafiint==""){$datafiint=$datainint;}
$datafinintx=$_REQUEST["datafinintx"];                        
$noteintervento=$_REQUEST["noteintervento"];
$noteluogo=$_REQUEST["noteluogo"];
$serialesost1=$_REQUEST["serialesost1"];
$descr1=$_REQUEST["descr1"];
$serialesost2=$_REQUEST["serialesost2"];
$descr2=$_REQUEST["descr2"];
$serialesost3=$_REQUEST["serialesost3"];
$descr3=$_REQUEST["descr3"];
$serialesost1a=$_REQUEST["serialesost1a"];
$descr1a=$_REQUEST["descr1a"];
$serialesost2a=$_REQUEST["serialesost2a"];
$descr2a=$_REQUEST["descr2a"];
$serialesost3a=$_REQUEST["serialesost3a"];
$descr3a=$_REQUEST["descr3a"];
$esito=$_REQUEST["esito"];
$noteesito=$_REQUEST["noteesito"];
$numero=$_REQUEST["numero"];
$trovato=0;
$sql1 = "SELECT * FROM chiusi  where numero = '$numero' and numerointervento = '$numerointerventoy' ";
#echo $sql1;  exit;
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $trovato=1;	 
			} }
$data=date("d/m/Y");            
if($trovato==0){
  $sql = "INSERT INTO chiusi
( 
  numero,             
  datainint,
  datafinint,                       
  noteintervento,
  noteluogo,
  serialesost1,
  descr1,
  serialesost2,
  descr2,
  serialesost3,
  descr3,
  serialesost1a,
  descr1a,
  serialesost2a,
  descr2a,
  serialesost3a,
  descr3a,
  esito,
  login,
  data,
  datafinintx,
  noteesito,
  datafiint,
  numerointervento
  ) 
VALUES ( 
 '$numero',           
 '$datainint',
 '$datafinint',                       
 '$noteintervento',
 '$noteluogo',
 '$serialesost1',
 '$descr1',
 '$serialesost2',
 '$descr2',
 '$serialesost3',
 '$descr3',
 '$serialesost1a',
 '$descr1a',
 '$serialesost2a',
 '$descr2a',
 '$serialesost3a',
 '$descr3a',
 '$esito',
 '$login',
 '$data',
 '$datafinintx',
 '$noteesito',
 '$datafiint',
 '$numerointerventox'
              )";
  #echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {
        $dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$numero',
        '$dataoggi',
        'Memorizzato chiuso intervento',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
         } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 
} else {
$sql = "UPDATE chiusi set 
  datainint='$datainint', 
  datafinint='$datafinint',                        
  noteintervento='$noteintervento', 
  noteluogo='$noteluogo', 
  serialesost1='$serialesost1', 
  descr1='$descr1', 
  serialesost2='$serialesost2', 
  descr2='$descr2', 
  serialesost3='$serialesost3', 
  descr3='$descr3', 
  serialesost1a='$serialesost1a', 
  descr1a='$descr1a', 
  serialesost2a='$serialesost2a', 
  descr2a='$descr2a', 
  serialesost3a='$serialesost3a', 
  descr3a='$descr3a', 
  esito='$esito', 
  noteesito='$noteesito', 
  login='$login', 
  data='$data',
  datafinintx='$datafinintx',
  datafiint='$datafiint',
  numerointervento='$numerointerventox'
where  numero = '$numero'  ";
if ($conn->query($sql) === TRUE) {
$dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$numero',
        '$dataoggi',
        'Memorizzato Richiesta di Chiusura',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
 } else { echo "Error inserted record: " . $conn->error; }
}

$sql = "UPDATE tk set 
        stato = 'Richiesta di Chiusura'
        where 
        numero = '$numero' 
        ";
        if ($conn->query($sql) === TRUE)
          {
          $dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$numero',
        '$dataoggi',
        'Memorizzato Stato Richiesta di Chiusura',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
           } 
          else { echo "Error inserted record: " . $conn->error; } 



}

if($ingranaggiopian==1){ 
$dataint=$_REQUEST["dataint"];
$oraint=$_REQUEST["oraint"];
$luogoint=$_REQUEST["luogoint"];
$tecnicoint=$_REQUEST["tecnicoint"];
if($tecnicoint==""){$tecnicoint="Generico";}
$noteint=$_REQUEST["noteint"];
$clientexxy=$_POST["codice"];
$sql = "SELECT *  FROM  tk where  numero = '$clientexxy' " ;  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
$numeropiano = $macrogruppo["numeropiano"];
}}
$numeropiano++;
$sql = "UPDATE tk set 
numeropiano = '$numeropiano'
where 
numero = '$clientexxy' 
";
if ($conn->query($sql) === TRUE)
    { 
    $dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$clientexxy',
        '$dataoggi',
        'Memorizza numero Piano',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
    } 
    else { echo "Error inserted record: " . $conn->error; }  



$sql = "INSERT INTO pianificato
( 
codice,
dataint,
oraint,
luogoint,
tecnicoint,
noteint,
numerointervento
) 
VALUES (
'$clientexxy',
'$dataint',
'$oraint',
'$luogoint',
'$tecnicoint',
'$noteint',
'$numeropiano' 
)";
  #echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {
        $dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$clientexxy',
        '$dataoggi',
        'Memorizzato Pianificazione',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
        $errore="Cliente Memorizzato Correttamente"; } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 
$sql = "UPDATE tk set 
        stato = 'Pianificato'
        where 
        numero = '$numero'  
        ";
        if ($conn->query($sql) === TRUE)
          {$dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$numero',
        '$dataoggi',
        'Memorizzato Stato in Pianificato',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;}  } 
          else { echo "Error inserted record: " . $conn->error; }         
}
if($ingranaggiocancelladoc==1){ 
$sql = "
DELETE from documenti where progr = '$prgrx'";
#echo $sql;  exit;
if ($conn->query($sql) === FALSE)
  {echo "errxx=errore";exit;}
  else
  {
  $dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$clientexxy',
        '$dataoggi',
        'Cancellato documento',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
  }
 } 
if ($ingranaggiodocu=="1")
{
$newdata=$_POST["newdata"];
$newdatasca=$_POST["newdatasca"];
$newoggetto=$_POST["newoggetto"];
$clientexxy=$_POST["codice"];
#echo "data ".$newdata." ogg ".$newoggetto." cli ".$clientexxy; 

$uploadOk = 1;
if ($newdata=="") {echo " <b><font color='#FF0000'>**missing document date** </font></b>"; $uploadOk = 0;}
if ($newoggetto=="") {echo "<b><font color='#FF0000'>MANCA OGGETTO DEL DOCUMENTO OPPURE </font></b>"; $uploadOk = 0;}
$cliente=$_SESSION["SPICLIENTLOGGED"];
$nomefile=basename($_FILES["fileToUpload"]["name"]);
if ($nomefile=="") {echo "<b><font color='#FF0000'> MANCA DOCUMENTO DA CARICARE OPPURE </font></b>"; $uploadOk = 0;}
$lunghezza=strlen($nomefile);
$lunghezza=$lunghezza-4;
$nomefileparz=substr($nomefile, 0, $lunghezza);
$errorefile=strpos($nomefileparz, ' ');




$pieces = explode("/", $newdata);
$newdata=$pieces[2]."-".$pieces[1]."-".$pieces[0];
if ($pieces[2]=="0000"){$newdata=$oggix;}
$target_dir = "documenti/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$nomefile=basename($_FILES["fileToUpload"]["name"]);
$nomefile1=basename($_FILES["fileToUpload1"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if ($_FILES["fileToUpload"]["size"] > 1000000000) {
    echo "ATTENZIONE FILE TROPPO GRANDE.</font></b>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "pdf" && $imageFileType != "docx"  && $imageFileType != "txt" && $imageFileType != "csv"   && $imageFileType != "xlsx"
&& $imageFileType != "gif" ) {
    echo "<b><font color='#FF0000'> FILE NON DI TIPO  JPG, PDF, PNG, GIF, DOCX, TXT, CSV, XLSX QUINDI </font></b>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<b><font color='#FF0000'> OPERAZIONE ABORTITA.</font></b>";
// if everything is ok, try to upload file
} else {

$sql1 = "SELECT * FROM progressivofile  where progr = '1' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $tesseraww = $macrogruppo["numero"];	 
			} }
$tesseraww++;
$sql = "UPDATE progressivofile set 
numero = '$tesseraww'
where 
progr = '1' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 
    $estensione=explode(".",$nomefile);
$newfile=$tessera."-".$tesseraww.".".$estensione[1];
$target_dire = "documenti/";

$target_filee = $target_dire . $newfile;


    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_filee)) {
        #echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
$comodo=explode("-",$newdata);
$newdata=$comodo[2]."/".$comodo[1]."/".$comodo[0];


$newoggetto=str_replace("'", "\'", $newoggetto); 
       $sql = "INSERT INTO documenti
              (               
              tipodoc, 
              datadoc, 
              oggetto, 
              file,
              datasca) 
            VALUES (            
              '$clientexxy',
              '$newdata', 
              '$newoggetto',
              '$newfile',
              '$newdatasca'
              )";
#echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        { 
        $dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$clientexxy',
        '$dataoggi',
        'Memorizzato nuovo Documento',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
        } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 

 } }
}



if($ingranaggioxx==300){
$errore=$_REQUEST["errore"];
$numero=$_REQUEST["numero"];
#echo "num ".$numero;
$cliente=$_REQUEST["cliente"];
$comodo=explode(" - ",$cliente);
$cliente=$comodo[0];
$clienteintero=$_REQUEST["clienteintero"];
$commessa=$_REQUEST["commessa"];
$comodo=explode(" - ",$commessa);
$commessa=$comodo[0];
$attivita=$_REQUEST["attivita"];
$attivita=str_replace("'", "\'", $attivita);
#echo "att ".$attivita;
$ticketcli=$_REQUEST["ticketcli"];
$datainizio=$_REQUEST["datainizio"];
#$orainizio=$_REQUEST["orainizio"];
$tipointervento=$_REQUEST["tipointervento"];
$tipointervento=str_replace("'", "\'", $tipointervento);
#echo "ti ".$tipointervento;
$apparato=$_REQUEST["apparato"];
$seriale=$_REQUEST["seriale"];
$insegna=$_REQUEST["insegna"];
$insegna=str_replace("'", "\'", $insegna);
$ragsoc=$_REQUEST["ragsoc"];
$ragsoc=str_replace("'", "\'", $ragsoc);
$indirizzo=$_REQUEST["indirizzo"];
$indirizzo=str_replace("'", "\'", $indirizzo);
$cap=$_REQUEST["cap"];
$prov=$_REQUEST["prov"];
$citta=$_REQUEST["citta"];
$citta=str_replace("'", "\'", $citta);
$telefono=$_REQUEST["telefono"];
$contatto=$_REQUEST["contatto"];
$contatto=str_replace("'", "\'", $contatto);
$intervento=$_REQUEST["intervento"];
$intervento=str_replace("'", "\'", $intervento);
$serialeparte=$_REQUEST["serialeparte"];
$serialeparte=str_replace("'", "\'", $serialeparte);
$nomeparte=$_REQUEST["nomeparte"];
$nomeparte=str_replace("'", "\'", $nomeparte);
$spedizione=$_REQUEST["spedizione"];
$spedizione=str_replace("'", "\'", $spedizione);
$notesla=$_REQUEST["notesla"];
$notesla=str_replace("'", "\'", $notesla);
$nota=$_REQUEST["nota"];
$nota=str_replace("'", "\'", $nota);
$dataapp=$_REQUEST["dataapp"];
$notaapp=$_REQUEST["notaapp"];
$notaapp=str_replace("'", "\'", $notaapp);
$id=$_REQUEST["id"];
$progrnew=$_REQUEST["progrnew"];
$priorita=$_REQUEST["priorita"];
$note=$_REQUEST["note"];
$note=str_replace("'", "\'", $note);
$impatt=$_REQUEST["impatt"];
$abbona=$_REQUEST["abbona"];
$imppass=$_REQUEST["imppass"];
$notaamm=$_REQUEST["notaamm"];
$notaamm=str_replace("'", "\'", $notaamm);
$sql = "UPDATE tk set 
cliente='$cliente',
commessa='$commessa',
attivita='$attivita',
ticketcli='$ticketcli',
datainizio='$datainizio',
tipointervento='$tipointervento',
apparato='$apparato',
seriale='$seriale',
intervento='$intervento',
serialeparte='$serialeparte',
nomeparte='$nomeparte',
spedizione='$spedizione',
notesla='$notesla',
nota='$nota',
dataapp='$dataapp',
notaapp='$notaapp',
login='$login',
aggiornamento='$adesso',
priorita='$priorita',
impatt='$impatt',
abbona='$abbona',
imppass='$imppass',
notaamm='$notaamm'
where 
numero = '$numero' 
";
#echo $sql;
if ($conn->query($sql) === TRUE)
    {
    $dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$numero',
        '$dataoggi',
        'Modifica Ticket',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;}  
    $errore=" Modificato Correttamente "; } 
    else { echo "Error inserted record: " . $conn->error; exit;}
    
$sql = "UPDATE tkluogo set 
insegna = '$insegna',
ragsoc='$ragsoc',
indirizzo='$indirizzo',
cap='$cap',
prov='$prov',
citta='$citta',
contatto='$contatto',
telefono='$telefono',
note='$note'
where 
numero = '$numero' 
";
#echo $sql;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; exit;}    
    
    
$ingranaggioy=20;    
}
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>nuovo cat</title>
<script src="jquery-3.4.1.min.js"></script>
<script src="query-ui.min.js"></script>

<script type="text/javascript" src="./jquery-ui-1.13.2/scripts/jquery.ui.datepicker-it.js"></script>

<link rel="stylesheet" href="query-ui.css">
<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="./bootstrap/js/bootstrap.min.js"></script>			
<link href="./fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="./fontawesome/css/brands.css" rel="stylesheet">
  <link href="./fontawesome/css/solid.css" rel="stylesheet">
<link rel="stylesheet" href="./css/customers.css">

<script>
function frame1() {
var alt = $("#ingressiframe1",  window.parent.document).height() + 2000 + "px";
var larg = $("#ingressiframe1",  window.parent.document).width() - 15 + "px";
    var table = $('#tableFooter1').DataTable(
	{
	
	"order": [[ 0, "desc" ]],
	"scrollCollapse": true,
	"paging": true,
	"lengthMenu": [ [ 25, -1,  10, 50 ], [25, "Tutti",  10, 50 ] ],
	"language": {"search": "Cerca:", "lengthMenu": "Visualizza _MENU_ records per pagina",  "info": "Pagina _PAGE_ di _PAGES_",
				"paginate": {
				"first":      "Prima pagina",
				"last":       "Ultima pagina",
				"next":       "Prossima",
				"previous":   "Precedente"
    }}
	});
   // new $.fn.dataTable.FixedHeader( table );
//} );
}

function larghezza1() {
//var larg = $(window).width() - 350 + "px";
var larg = $("#ingressiframe1",  window.parent.document).width() - 25 + "px";
//var alt = $("#statiframe",  window.parent.document).height() - 100 + "px";
//alert(alt);
$(".statisti1").css("width", larg);
//$(".testa").css("width", larg);

}

function frame() {
var alt = $("#ingressiframe",  window.parent.document).height() + 2000 + "px";
var larg = $("#ingressiframe",  window.parent.document).width() - 15 + "px";
    var table = $('#tableFooter').DataTable(
	{
	
	"order": [[ 1 , "<? if($ingranaggiobb=="A"){echo "asc";}else{echo "desc";} ?>" ]],
	"scrollCollapse": true,
	"paging": true,
	"lengthMenu": [ [ 25, -1,  10, 50 ], [25, "Tutti",  10, 50 ] ],
	"language": {"search": "Cerca:", "lengthMenu": "Visualizza _MENU_ records per pagina",  "info": "Pagina _PAGE_ di _PAGES_",
				"paginate": {
				"first":      "Prima pagina",
				"last":       "Ultima pagina",
				"next":       "Prossima",
				"previous":   "Precedente"
    }}
	});
   // new $.fn.dataTable.FixedHeader( table );
//} );
}
function larghezza() {
//var larg = $(window).width() - 350 + "px";
var larg = $("#ingressiframe",  window.parent.document).width() - 50 + "px";
//var alt = $("#statiframe",  window.parent.document).height() - 100 + "px";
//alert(alt);
$(".statisti").css("width", larg);
//$(".testa").css("width", larg);

}

 function aggiorna(sel){
  var f = document.form;
  f.sel_value.value = sel.options[sel.selectedIndex].value;
  f.sel_text.value = sel.options[sel.selectedIndex].text;
 }

/*$(function() {
	$('#popupDatepicker').datepick();
  $('#popupDatepicker1').datepick();
	$('#inlineDatepicker').datepick({onSelect: showDate});

});*/

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
function MM_openBrWindow(theURL,winName,features) { //v2.0
let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
width=0,height=0,left=-1000,top=-1000`;
  window.open(theURL,winName,features,params);
}
//-->
$(function(){
  $('#dateOp').datepicker({
    language: "it",
    autoclose: true,
    todayHighlight: true,
    dateFormat: 'dd/mm/yy'
  });
});
</script>
<script type="text/javascript">		
		function controlloxx(){ 
            with(document.moduloxx) { 
        if(datainint.value=="") { 
            alert("Error: manca DATA INTERVENTO"); 
            datainint.focus(); 
            return false; 
                              } 
                            
         if(datafinint.value=="") { 
            alert("Error: manca ORA INIZIO INTERVENTO"); 
            datafinint.focus(); 
            return false; 
                              }  
         if(datafinintx.value=="") { 
            alert("Error: manca ORA FINE INTERVENTO"); 
            datafinintx.focus(); 
            return false; 
                              }                       
         if(noteintervento.value=="") { 
            alert("Error: manca DESCRIZIONE INTERVENTO"); 
            noteintervento.focus(); 
            return false; 
                              }  
                                                            
                                                    
                                  } 
        } 
</script>
<script type="text/javascript">		
		function controllo11(){ 
            with(document.modulo11) { 
        if(datainint.value=="") { 
            alert("Error: manca DATA INIZIO INTERVENTO"); 
            datainint.focus(); 
            return false; 
                              } 
                             
                            
         if(datafinint.value=="") { 
            alert("Error: manca ORA INIZIO INTERVENTO"); 
            datafinint.focus(); 
            return false; 
                              }  
         if(datafinintx.value=="") { 
            alert("Error: manca ORA FINE INTERVENTO"); 
            datafinintx.focus(); 
            return false; 
                              }                       
         if(noteintervento.value=="") { 
            alert("Error: manca DESCRIZIONE INTERVENTO"); 
            noteintervento.focus(); 
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

$(function(){
  $('#dateOp1').datepicker({
    language: "it",
    autoclose: true,
    todayHighlight: true,
    dateFormat: 'dd/mm/yy'
  });
});  
 
$(function(){
  $('#datainint').datepicker({
    language: "it",
    autoclose: true,
    todayHighlight: true,
    dateFormat: 'dd/mm/yy'
  });
});       

$(function(){
  $('#datafiint').datepicker({
    language: "it",
    autoclose: true,
    todayHighlight: true,
    dateFormat: 'dd/mm/yy'
  });
});       
</script>
 <style>
 blink {
  animation: 1s linear infinite condemned_blink_effect;
}
@keyframes condemned_blink_effect {
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}      

 </style> 
<style>
  /* Stile per evidenziare la riga */
  .riga-evidenziata {
    background-color: #c6c6c6;
  }
</style>
<script>
  // Funzione per evidenziare la riga al passaggio del mouse
  function evidenziaRiga(riga) {
    riga.classList.add("riga-evidenziata");
  }

  // Funzione per rimuovere l'evidenziazione al passaggio del mouse
  function rimuoviEvidenziazione(riga) {
    riga.classList.remove("riga-evidenziata");
  }
</script> 
</head>
<body text="#000000" onLoad="frame(); larghezza1(); larghezza1(); frame1();" >

<br>
<?php
$sql = "SELECT *  FROM  tk where  numero = '$numero' " ;  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
$numero = $macrogruppo["numero"];
$cliente = $macrogruppo["cliente"];
#echo $cliente;
$commessa = $macrogruppo["commessa"];
$attivita = $macrogruppo["attivita"];
$ticketcli = $macrogruppo["ticketcli"];
$datainizio = $macrogruppo["datainizio"];
$tipointervento = $macrogruppo["tipointervento"];
$apparato = $macrogruppo["apparato"];
$seriale = $macrogruppo["seriale"];
$intervento = $macrogruppo["intervento"];
$serialeparte = $macrogruppo["serialeparte"];
$nomeparte = $macrogruppo["nomeparte"];
$spedizione = $macrogruppo["spedizione"];
$notesla = $macrogruppo["notesla"];
$nota = $macrogruppo["nota"];
$dataapp = $macrogruppo["dataapp"];
$notaapp = $macrogruppo["notaapp"];
$loginu = $macrogruppo["login"];
$aggiornamento = $macrogruppo["aggiornamento"];
$priorita = $macrogruppo["priorita"];
$stato = $macrogruppo["stato"];
#echo "stat ".$stato;
$sqlx = "SELECT *  FROM  tkluogo where  numero  = '$numero' " ;  
#echo $sql;
$rCount = 1;
$resultx = $conn->query($sqlx);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc())	
	{ 
     $insegna = $macrogruppox["insegna"]; 
     $ragsoc = $macrogruppox["ragsoc"];
     $indirizzo = $macrogruppox["indirizzo"];
     $cap = $macrogruppox["cap"];
     $citta = $macrogruppox["citta"];
     $prov = $macrogruppox["prov"];
     $contatto= $macrogruppox["contatto"];
     $telefono = $macrogruppox["telefono"];
     $note = $macrogruppox["note"];
     }}
 $sql2 = "SELECT *  FROM  clienti where  codice  = '$cliente' " ;  
  #echo $sql;
  $rCount = 1;
  $result2 = $conn->query($sql2);
  if ($result2->num_rows > 0) {
    while($macrogruppox = $result2->fetch_assoc())	
    {   
      $resp['ragsoc_cli'] = $macrogruppox["ragsoc"];
      $resp['codice_cli'] = $macrogruppox["codice"];
      $ragsocclixx = $macrogruppox["ragsoc"];
      $resp['clienteintero_cli'] =$clientex." - ".$ragsocclixx;       
      $cliente =$cliente." - ".$ragsocclixx;
      
      }
    }     

  $sql3 = "SELECT *  FROM  commesse where  commessa  = '$commessa' " ;  
  #echo $sql;
  $rCount = 1;
  $result3 = $conn->query($sql3);
  if ($result3->num_rows > 0) {
    while($macrogruppox = $result3->fetch_assoc())	
    {   
      $nomecommessaxx = $macrogruppox["nomecommessa"];
      $commessa=$commessa." - ".$nomecommessaxx;
      
      }}             
$regionetk="";
$sqlxj = "SELECT *  FROM  province where  sigla = '$prov' " ;  
#echo $sqlxj;
$rCount = 1;
$resultxj = $conn->query($sqlxj);
if ($resultxj->num_rows > 0) {
  while($macrogruppoxj = $resultxj->fetch_assoc())	
	{ $regionetk = $macrogruppoxj["regione"]; }}      
     
     
}}
if($ingranaggioy==""){
?>     
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Ticket <?php echo $numero." Stato ".$stato." ".$errore; ?> a: <?php echo $ragsoc; ?></font></b></p>
<br>
<? include "esponiverticale.php"; ?>

<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Scegli una Funzione</font></b></p>

<? } ?>
    <div class="tab-navigation" style="width:90%; margin:auto;">
      <ul class="nav nav-tabs">

    <?php if($ingranaggio==6){  ?>  
    <br>
    <li class="nav-item">
      <a class="nav-link <? if($ingranaggioy==20){echo "active"; } ?>" href="lavoraticket.php?login=<? echo $login; ?>&codice=<?php echo $numero; ?>&ingranaggioy=20" title="Modifica ticket">
      <i class="fa-solid fa-pen"></i> Modifica Ticket
      </a>
    </li>  
    <li class="nav-item">
      <a class="nav-link <? if($ingranaggioy==21){echo "active"; } ?>" href="lavoraticket.php?login=<? echo $login; ?>&codice=<?php echo $numero; ?>&ingranaggioy=21" title="Gestione Parti di Ricambio">
      <i class="fa-solid fa-pen"></i> Gestione Parti di Ricambio
      </a>
    </li> 
    <li class="nav-item">
      <a class="nav-link <? if($ingranaggioy==10){echo "active";} ?>" href="lavoraticket.php?login=<? echo $login; ?>&codice=<?php echo $numero; ?>&ingranaggioy=10" title="Assegnazione">
      <span>
      <i class="fa-regular fa-square-plus"></i>  Assegnazione 
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <? if($ingranaggioy==50){echo "active";} ?>" href="lavoraticket.php?login=<? echo $login; ?>&codice=<?php echo $numero; ?>&ingranaggioy=50" title="Pianifica Intervento"><span>
      <i class="fa-solid fa-earth-americas"></i> Pianifica Intervento 
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <? if($ingranaggioy==40){echo "active";} ?>" href="lavoraticket.php?login=<? echo $login; ?>&codice=<?php echo $numero; ?>&ingranaggioy=40" title="Documentazione">
      <i class="fa-solid fa-book"></i> Documentazione 
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <? if($ingranaggioy==30){echo "active";} ?>" href="lavoraticket.php?login=<? echo $login; ?>&codice=<?php echo $numero; ?>&ingranaggioy=30&stato=<? echo $stato; ?>" title="Richiesta di Chisura Ticket">
      <i class="fa-solid fa-folder-closed"></i> Richiesta di Chiusura 
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <? if($ingranaggioy==60){echo "active";} ?>" href="lavoraticket.php?login=<? echo $login; ?>&codice=<?php echo $numero; ?>&ingranaggioy=60&stato=<? echo $stato; ?>" title="Cambio Stato TK">
      <i class="fa-solid fa-pencil"></i> Cambia Stato
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <? if($ingranaggioy==80){echo "active";} ?>" href="lavoraticket.php?login=<? echo $login; ?>&codice=<?php echo $numero; ?>&ingranaggioy=80&stato=<? echo $stato; ?>" title="Contabile">
      <i class="fa-solid fa-cube"></i> Contabile 
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <? if($ingranaggioy==70){echo "active";} ?>" href="lavoraticket.php?login=<? echo $login; ?>&codice=<?php echo $numero; ?>&ingranaggioy=70&stato=<? echo $stato; ?>" title="Storia">
      <i class="fa-regular fa-hard-drive"></i>  Storia 
      </a>
    </li>


    <?php } ?>
      </ul>
    
    </div>

<br>

<?php if($ingranaggioy==21){ 
#if($stato!="Aperto"){
?>
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Gestione Parti di Ricambio del Ticket <?php echo $numero." Stato ".$stato; ?></font></b></p>


<!--    #################  INIZIO ESPOSIZIONE   TICKET   ################# -->

<? include "esponiverticale.php"; ?>
<!--    #################  FINE ESPOSIZIONE  ################# -->

<div align="center" >
<hr style="width:90%;">
<? if($lettoarticolo==1){ ?>
<b><font face="Arial" size="4" color="#476b5d">ARTICOLO SELEZIONATO</font>
<? } else {  ?>
<b><font face="Arial" size="4" color="#993300">SELEZIONA ARTICOLO</font>
<? } ?>

<table align="center" 
<? if($lettoarticolo==1){}else{ ?> id="tableFooter1" <? } ?> 
class="display" cellspacing="0" align="left" style="width:90%; position:relative;">         
             <thead class="intesta">
	<tr class="testa">
		 
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Codice Art.</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Data Acq.</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Descrizione Articolo</td>        
      	  <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Tipologia Articolo</td>
           <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Gruppo Articolo</td>
           <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >G/C</td>
           
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Marca</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Modello</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Part N° Costruttore</td>                                                                                                                            
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Part N° Cliente</td>          
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Cliente Proprietario</td>          
                       
              <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Sel.</td>
           </tr>       
	</thead>
	<tbody>
<?php
if($lettoarticolo==1){$sql = "SELECT *  FROM  articolo where codice = '$codicearticolo' ";} else {$sql = "SELECT *  FROM  articolo where commessa= '$commessaxx' or commessa = 'Generica' ORDER BY codice"; }  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
      $progr = $macrogruppo["progr"];
     $denominazione = $macrogruppo["denominazione"];
     $dataoperazione = $macrogruppo["dataoperazione"];
     $codice = $macrogruppo["codice"];
     $ncliente = $macrogruppo["ncliente"];
     $ncostruttore = $macrogruppo["ncostruttore"];
     $cliprop = $macrogruppo["cliprop"];
     $tipo = $macrogruppo["tipo"];
     $gruppo= $macrogruppo["gruppo"];
     $marca = $macrogruppo["marca"];
     $modello = $macrogruppo["modello"];
     $volume = $macrogruppo["volume"];
     $peso = $macrogruppo["peso"];
     $note = $macrogruppo["note"];
     $commessahh = $macrogruppo["commessa"]; 
     if($commessa=="Generica"){$comodoGC="G";}else{$comodoGC="C";}
     #echo "numero ".$numero; exit; 
?>     
    <tr >   
      <td style=" border: 1px solid #e4e3e3; <? if($lettoarticolo==1){ ?>background: #c6c6c6 <? } ?>" align="center" ><font size="3"  ><?php echo $codice; ?></td>
      <td style=" border: 1px solid #e4e3e3; <? if($lettoarticolo==1){ ?>background: #c6c6c6 <? } ?>" align="center" ><font size="3"  ><?php echo $dataoperazione; ?></td>
      <td style=" border: 1px solid #e4e3e3; <? if($lettoarticolo==1){ ?>background: #c6c6c6 <? } ?>" align="left" ><font size="3"  ><?php echo $denominazione; ?></td>
      <td style=" border: 1px solid #e4e3e3; <? if($lettoarticolo==1){ ?>background: #c6c6c6 <? } ?>" align="left" ><font size="3"  ><?php echo $tipo; ?></td>
      <td style=" border: 1px solid #e4e3e3; <? if($lettoarticolo==1){ ?>background: #c6c6c6 <? } ?>" align="left" ><font size="3"  ><?php echo $gruppo; ?></td>
      <td style=" border: 1px solid #e4e3e3; <? if($lettoarticolo==1){ ?>background: #c6c6c6 <? } ?>" align="center" ><font size="3"  ><?php echo $comodoGC; ?></td>
      <td style=" border: 1px solid #e4e3e3; <? if($lettoarticolo==1){ ?>background: #c6c6c6 <? } ?>" align="left" ><font size="3"  ><?php echo $marca; ?></td>
      <td style=" border: 1px solid #e4e3e3; <? if($lettoarticolo==1){ ?>background: #c6c6c6 <? } ?>" align="center"><font size="3"  ><?php echo $modello; ?></td>
      <td style=" border: 1px solid #e4e3e3; <? if($lettoarticolo==1){ ?>background: #c6c6c6 <? } ?>" align="center"><font size="3"  ><?php echo $ncostruttore; ?></td>
      <td style=" border: 1px solid #e4e3e3; <? if($lettoarticolo==1){ ?>background: #c6c6c6 <? } ?>" align="center"><font size="3"  ><?php echo $ncliente; ?></td> 
      <td style=" border: 1px solid #e4e3e3; <? if($lettoarticolo==1){ ?>background: #c6c6c6 <? } ?>" align="center"><font size="3"  ><?php echo $cliprop; ?></td>                 
       <td style=" border: 1px solid #e4e3e3; <? if($lettoarticolo==1){ ?>background: #c6c6c6 <? } ?>" align="center" ><a  href="?login=<?php echo $login; ?>&lettoarticolo=1&ingranaggioy=21&ingranaggiomagazzino=1&codicearticolo=<?php echo $codice; ?>&codice=<? echo $numero; ?>&stato=<? echo $stato; ?>"  ><img border="0" background="btn1.gif" src="pencil.png" width="25" height="25"></a></td>
     
     </tr>	
     
<?php          
}
}
?>             
</table> 
<br>            

<? if($ingranaggiomagazzino==1){ ?>
<div align="center">
<? if($lettomagazzino==1){ ?>
<font face="Arial" size="4" color="#476b5d">MAGAZZINO SELEZIONATO</font>
<? } else {  ?>
<font face="Arial" size="4" color="#993300">SELEZIONA MAGAZZINO</font>
<? } ?>
<table align="center" id="example" class="display" cellspacing="0" align="left" style="width:90%; position:relative;">         
             <thead class="intesta">
	<tr class="testa">
		 
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Codice Mag.</td>
          
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Denominazione</td>        
      	  <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Tipologia</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Struttura</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Indirizzo</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Comune</td>  
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Giacenza</td>                          
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3"   >Impegnati</td>
          <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center"><font size="3">Sel.</td>
           </tr>       
	</thead>
	<tbody>
<?php
$contamagazzino=0;
if($lettomagazzino==1){$sqlm = "SELECT *  FROM  magazzino where codice = '$codicemag'";} else {$sqlm = "SELECT *  FROM  magazzino order by denominazione";}  
 
#echo $sqlm;
$rCount = 1;
$resultm = $conn->query($sqlm);
if ($resultm->num_rows > 0) {
  while($macrogruppom = $resultm->fetch_assoc())	
	{ 
     $progr = $macrogruppom["progr"];
     $denominazionemag = $macrogruppom["denominazione"];
     $dataoperazionemag = $macrogruppom["dataoperazione"];
     $codicemag = $macrogruppom["codice"];
     $tipomag = $macrogruppom["tipo"];
     $strutturamag = $macrogruppom["struttura"];
     $viamag= $macrogruppom["via"];
     $cittamag = $macrogruppom["citta"];
     $provmag = $macrogruppom["prov"];
     $regionemag = $macrogruppom["regione"];
     $responsabilemag = $macrogruppom["responsabile"];
     $tipomag = $macrogruppom["tipo"];
     $statomag = $macrogruppom["stato"];
     $caramag = $macrogruppom["cara"];
     $orgamag = $macrogruppom["orga"];
     $telefonomag = $macrogruppom["telefono"];
     $spazimag = $macrogruppom["spazi"];
     $notemag = $macrogruppom["note"];
     $capmag = $macrogruppom["cap"]; 
     $strutturamag = $macrogruppom["struttura"];  
$giacenza=0;
$impegno=0;
$sql = "SELECT *  FROM  carico where articolo = '$codicearticolo' and magazzino = '$codicemag' "; 
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
     $progrcarico = $macrogruppo["progr"];
     $denominazionecarico = $macrogruppo["denominazione"];
     $dataoperazione = $macrogruppo["dataoperazione"];     
     $ncliente = $macrogruppo["ncliente"];
     $mittente = $macrogruppo["mittente"];
     $dataddt = $macrogruppo["dataddt"];
     $numddt = $macrogruppo["numddt"];
     $quantita= $macrogruppo["quantita"];
     $giacenza=$giacenza+$quantita;
     }}
$sql = "SELECT *  FROM  scarico where articolo = '$codicearticolo' and magazzino = '$codicemag'"; 
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
     $quantita= $macrogruppo["quantita"];
     $giacenza=$giacenza-$quantita;
     }} 
$sql = "SELECT *  FROM  impegno where articolo = '$codicearticolo' and magazzino = '$codicemag'"; 
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
     $quantita= $macrogruppo["quantita"];
     $giacenza=$giacenza-$quantita;
     $impegno=$impegno+$quantita;
     }}        
if($giacenza!=0){  
$contamagazzino++;      
?>     
    <tr >    
     <td style=" border: 1px solid #e4e3e3; background: #c6c6c6;" align="center" ><font size="3"  ><?php echo $codicemag; ?></td>
      
      <td style=" border: 1px solid #e4e3e3; background: #c6c6c6 " align="left" ><font size="3"  ><?php echo $denominazionemag; ?></td>
      <td style=" border: 1px solid #e4e3e3; background: #c6c6c6 " align="left" ><font size="3"  ><?php echo $tipomag; ?></td>
      <td style=" border: 1px solid #e4e3e3; background: #c6c6c6 " align="left" ><font size="3"  ><?php echo $strutturamag; ?></td>
      <td style=" border: 1px solid #e4e3e3; background: #c6c6c6 " align="left" ><font size="3"  ><?php echo $viamag; ?></td>
      <td style=" border: 1px solid #e4e3e3; background: #c6c6c6 " align="center"><font size="3"  ><?php echo $cittamag; ?></td>
      <td style=" border: 1px solid #e4e3e3; background: #c6c6c6 " align="center"><font face="Arial" size="4" color="#993300"><b><?php echo $giacenza; ?></b></font></td>
      <td style=" border: 1px solid #e4e3e3; background: #c6c6c6 " align="center"><font face="Arial" size="4" color="#993300"><b><?php echo $impegno; ?></b></font></td>
      
<!--                            <td style=" border: 1px solid #e4e3e3;background: #c6c6c6 " align="center" ><a  href="?login=<?php echo $login; ?>&lettomagazzino=1&lettoarticolo=1&ingranaggioy=21&ingranaggiopartita=1&ingranaggiomagazzino=1&codicemag=<? echo $codicemag; ?>&codicearticolo=<?php echo $codice; ?>&codice=<? echo $numero; ?>&stato=<? echo $stato; ?>"  ><img border="0" background="btn1.gif" src="pencil.png" width="25" height="25"></a></td>  -->
<td style=" border: 1px solid #e4e3e3;background: #c6c6c6 " align="center" ><a  href="?login=<?php echo $login; ?>&scarica=1&noser=1&lettomagazzino=1&lettopartita=1&lettoarticolo=1&ingranaggioy=21&ingranaggiopartita=1&ingranaggiomagazzino=1&codicemag=<? echo $codicemag; ?>&codicearticolo=<?php echo $codice; ?>&codice=<? echo $numero; ?>&stato=<? echo $stato; ?>&serialecod=<? echo $seriale; ?>"  ><img border="0" background="btn1.gif" src="pencil.png" width="25" height="25"></a></td>
     
     
     
     </tr>	
     
<?php          
} }
}




if($contamagazzino==0){
echo '<tr><td align="center" colspan="9"><blink><font face="Arial" size="4" color="#993300">ARTICOLO NON PRESENTE NEI MAGAZZINI</font></blink></td></tr>';}
?>             
</table> 
<br>            
</div>
<? }


if($scarica==1){ ?>

<div align="center">
<font face="Arial" size="4" color="#993300"><br>ORDINE DI SPEDIZIONE</font>
<div style="margin:30px 0;">   


<table class="table-form">

<form method="POST" action="" name="modulox1" onSubmit="return controllo();" enctype="multipart/form-data">        
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
            <label>Spedire in Data</label><br>
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
    
        <td>
            <label>Articolo:</label><br>
            <input class="required" type="text" name="articolo" value="<?php echo $codicearticolo; ?>" maxlength="60" size="60" >
        </td>
        <td colspan="1">
        <label>Quantita:</label><br>
            <input class="required" type="number" name="quantita" value="1" maxlength="8" size="60">
    </td>
    </tr>
   
   
       
    <tr>
	   
	    <td> 
        <label>Magazzino in Uscita:</label><br>
        <input class="required" type="text" name="magazzino" value="<?php echo $codicemag; ?>" maxlength="60" size="60" >
        </td>
        <td> 
         <label>ticket Assegnato: </label><br>
         <input  type="text" name="ticket" value="<? echo $numero; ?>" maxlength="50" size="60">           
        </td>
        <td>
        <label>ticket Cliente: </label><br>
         <input  type="text" name="ticketcli"  maxlength="50" size="60">
        </td>
    </tr>

<tr>
		<td  colspan="3">
            <label>Note:</label><br>
            <textarea  name="notesped"  cols="10" rows="2"></textarea>           
        </td>
</tr>


<tr>
        <td colspan="3" style="text-align:center">            
                <input type="hidden" name="ingranaggiodaspedire" value="1001" />
                <input type="hidden" name="login" value="<?php echo $login; ?>" />
                <input type="hidden" name="ingranaggioy" value="21" />
                <input type="hidden" name="codice" value="<? echo $numero; ?>" />
                <input type="hidden" name="stato" value="<? echo $stato; ?>" />     
                <button type="submit" class="btn btn-success">Memorizza Ordine di Spedizione</button>        
</td>
      
       </tr>          
</form>    
</table>        
<? } ?>


</div>
</div>


<div align="center">
<hr style="width:90%;">
<font face="Arial" size="4" color="#476b5d">LISTA PARTI DI RICAMBIO DA SPEDIRE</font>

<table align="center" id="example" class="display" cellspacing="0" align="left" style="width:90%;background-color: #ebebe9; position:relative;">         
             <thead class="intesta">
	<tr class="testa">
		 
          <td  style=" border: 1px solid black;background-color: #afc81b; color: #ffffff; " align="center"><font size="4"   >Codice Articolo</td>   
          
          <td  style=" border: 1px solid black;background-color: #afc81b; color: #ffffff; " align="center"><font size="4"   >Codice Articolo Cliente</td>
          <td  style=" border: 1px solid black;background-color: #afc81b; color: #ffffff; " align="center"><font size="4"   >Descrizione Articolo Cliente</td>
          
          <td  style=" border: 1px solid black;background-color: #afc81b; color: #ffffff; " align="center"><font size="4"   >Denominazione Magazzino</td>
          <td  style=" border: 1px solid black;background-color: #afc81b; color: #ffffff; " align="center"><font size="4"   >DDT</td>
          <td  style=" border: 1px solid black;background-color: #afc81b; color: #ffffff; " align="center"><font size="4"   >Data DDT</td>
          <td  style=" border: 1px solid black;background-color: #afc81b; color: #ffffff; " align="center"><font size="4"   >Seriale</td>
          <td  style=" border: 1px solid black;background-color: #afc81b; color: #ffffff; " align="center"><font size="4"   >Stato</td>
         
          <td  style=" border: 1px solid black;background-color: #afc81b; color: #ffffff; " align="center"><font size="4"   >Quantità</td>
          <td  style=" border: 1px solid black;background-color: #afc81b; color: #ffffff; " align="center"><font size="4"   >Ann.</td>                
            </tr>       
	</thead>
	<tbody>
<?php


 $sqlz = "SELECT *  FROM  daspedire where ticket = '$numero' order by articolo "; 

#echo $sql;
$rCount = 1;
$resultz = $conn->query($sqlz);
if ($resultz->num_rows > 0) {
  while($macrogruppoz = $resultz->fetch_assoc())	
	{ 
     $progrz = $macrogruppoz["progr"];
     $magazzinoz = $macrogruppoz["magazzino"];
     $articoloz = $macrogruppoz["articolo"];
     $serialez = $macrogruppoz["seriale"];
     $codartcliz = $macrogruppoz["codartcli"];
     $quantitaz = $macrogruppoz["quantita"];
     #echo "qt".$quantitaz;
     $notez = $macrogruppoz["note"];
     $ddt = $macrogruppoz["ddt"];
     $ddtdata = $macrogruppoz["ddtdata"];
     $segno = $macrogruppoz["segno"];
     #echo "segno ".$segno.$serialez;
     $spunta = $macrogruppoz["spunta"];
     
     $serialeass = $macrogruppoz["seriale"];
     if($ddt==""){$stato="In Lavorazione";}else{$stato="In Spedizione";}
     
     if($spunta=="on"){$stato="Lavorato";}
     if($segno=="on"){$stato="Annullato"; }
     #echo "sp ".$spunta." ".$serialeass.$stato."<br>";
$sql = "SELECT *  FROM  articolo where codice = '$articoloz' "; 
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
      $progr = $macrogruppo["progr"];
     $denominazione = $macrogruppo["denominazione"];
     $dataoperazione = $macrogruppo["dataoperazione"];
     $codice = $macrogruppo["codice"];
     $ncliente = $macrogruppo["ncliente"];
     $ncostruttore = $macrogruppo["ncostruttore"];
     $cliprop = $macrogruppo["cliprop"];
     $tipo = $macrogruppo["tipo"];
     $gruppo= $macrogruppo["gruppo"];
     $marca = $macrogruppo["marca"];
     $modello = $macrogruppo["modello"];
     $volume = $macrogruppo["volume"];
     $peso = $macrogruppo["peso"];
     $note = $macrogruppo["note"]; 
      }}  
$sqlm = "SELECT *  FROM  magazzino where codice = '$magazzinoz'"; 
 
#echo $sqlm;
$rCount = 1;
$resultm = $conn->query($sqlm);
if ($resultm->num_rows > 0) {
  while($macrogruppom = $resultm->fetch_assoc())	
	{ 
     $progrmag = $macrogruppom["progr"];
     $denominazionemag = $macrogruppom["denominazione"];
     $dataoperazionemag = $macrogruppom["dataoperazione"];
     $codicemag = $macrogruppom["codice"];
     $tipomag = $macrogruppom["tipo"];
     $strutturamag = $macrogruppom["struttura"];
     $viamag= $macrogruppom["via"];
     $cittamag = $macrogruppom["citta"];
     $provmag = $macrogruppom["prov"];
     $regionemag = $macrogruppom["regione"];
     $responsabilemag = $macrogruppom["responsabile"];
     $tipomag = $macrogruppom["tipo"];
     $statomag = $macrogruppom["stato"];
     $caramag = $macrogruppom["cara"];
     $orgamag = $macrogruppom["orga"];
     $telefonomag = $macrogruppom["telefono"];
     $spazimag = $macrogruppom["spazi"];
     $notemag = $macrogruppom["note"];
     $capmag = $macrogruppom["cap"]; 
     $strutturamag = $macrogruppom["struttura"]; 
      }}

             

?>     
    <tr onmouseover="evidenziaRiga(this);" onmouseout="rimuoviEvidenziazione(this);">     
      <td style=" border: 1px solid #e4e3e3; " align="center" ><font size="4"  ><?php echo $articoloz; ?></td>

      <td style=" border: 1px solid #e4e3e3; " align="left" ><font size="4"  ><?php echo $ncostruttore; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="left" ><font size="4"  ><?php echo $denominazione; ?></td>
      
      <td style=" border: 1px solid #e4e3e3; " align="left" ><font size="4"  ><?php echo $denominazionemag; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="left" ><font size="4"  ><?php echo $ddt; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="left" ><font size="4"  ><?php echo $ddtdata; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="left" ><font size="4"  ><?php echo $serialeass; ?></td>
      
<? if($stato=="Annullato"){$colorebg="f6bac4";}else{$colorebg="ffffff";} ?>
      <td style=" border: 1px solid #e4e3e3;background-color: #<? echo $colorebg; ?>; " align="left" ><font size="4"  ><?php echo $stato; ?></td>
      <td style=" border: 1px solid #e4e3e3; " align="center" ><font size="4"  ><?php echo $quantitaz; ?></td>
<form method="POST" action="" name="modulox1x"  enctype="multipart/form-data">         
         <td colspan="3" style="text-align:center; ">            
<? if($ddt==""){ ?>                
                <input type="hidden" name="login" value="<?php echo $login; ?>" />
                <input type="hidden" name="ingranaggioannric" value="1" />
                <input type="hidden" name="ingranaggioy" value="21" />
                <input type="hidden" name="codice" value="<? echo $numero; ?>" />
                <input type="hidden" name="progrzann" value="<? echo $progrz; ?>" /> 
                <input type="hidden" name="segno" value="<? echo $segno; ?>" />     
                <button type="submit" class="btn btn-success" <? if($stato=="Annullato"){echo " style='background-color: red;' ";} ?>><font <? if($stato=="Annullato"){echo " style='background-color: red;' ";} ?> >X</font></button>        

<? } else { ?>
<input type="hidden" name="login" value="<?php echo $login; ?>" />
<!--                <input type="hidden" name="ingranaggioannric" value="1" />  _-->
                <input type="hidden" name="ingranaggioy" value="21" />
                <input type="hidden" name="codice" value="<? echo $numero; ?>" />
                <input type="hidden" name="progrzann" value="<? echo $progrz; ?>" /> 
                <input type="hidden" name="segno" value="<? echo $segno; ?>" />     
                <button type="submit" class="btn btn-success" style="background-color: blue"><font style="background-color: blue;">X</font></button>        


<? } ?>
</td>      
</form>      
     </tr>	
     
<?php          
}
}

?> 
           
</table> 
</div> 



<br><br><br><br><br><br><br><br><br>
<? } ?>


<!--  #################     MODIFICA TICKET ###################### -->

<?php if($ingranaggioy==20){
$sql = "SELECT *  FROM  tk where  numero  = '$numero' " ;  
#  echo $sql;
  $rCount = 1;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())	
    { 
      $progrxxy = $macrogruppo["progr"];
      $numeroxx = $macrogruppo["numero"];

      $clientexx = $macrogruppo["cliente"];
      $commessaxx = $macrogruppo["commessa"];
      $attivita = $macrogruppo["attivita"];

      $tipointervento = $macrogruppo["tipointervento"];
      $apparato = $macrogruppo["apparato"];
      $priorita = $macrogruppo["priorita"];


	  $spedizione = $macrogruppo["spedizione"];
	  $notesla = $macrogruppo["notesla"];
	  $nota = $macrogruppo["nota"];
	  $notaapp = $macrogruppo["notaapp"];
      $impatt = $macrogruppo["impatt"];
      $abbona = $macrogruppo["abbona"];
      $imppass = $macrogruppo["imppass"];
      $notaamm = $macrogruppo["notaamm"];
      
      $intervento = $macrogruppo["intervento"];
  $sqlx = "SELECT *  FROM  tkluogo where  numero  = '$numeroxx' " ;  
  #echo $sql;
  $rCount = 1;
  $resultx = $conn->query($sqlx);
  if ($resultx->num_rows > 0) {
    while($macrogruppox = $resultx->fetch_assoc())	
    {   
      $insegna = $macrogruppox["insegna"];
      $ragsoc = $macrogruppox["ragsoc"];
      $indirizzo = $macrogruppox["indirizzo"];
      $cap = $macrogruppox["cap"];
      $prov = $macrogruppox["prov"];
      $citta = $macrogruppox["citta"];
      $contatto = $macrogruppox["contatto"];
      $telefono = $macrogruppox["telefono"];
      $note = $macrogruppox["note"];
      }}
  $sqlx = "SELECT *  FROM  clienti where  codice  = '$clientexx' " ;  
  #echo $sql;
  $rCount = 1;
  $resultx = $conn->query($sqlx);
  if ($resultx->num_rows > 0) {
    while($macrogruppox = $resultx->fetch_assoc())	
    {   
      $ragsocclixx = $macrogruppox["ragsoc"];
      $codxx = $macrogruppox["codice"];
      $clienteintero=$codxx." - ".$ragsocclixx;
      }}     
  $sqlx = "SELECT *  FROM  commesse where  commessa  = '$commessaxx' " ;  
  #echo $sql;
  $rCount = 1;
  $resultx = $conn->query($sqlx);
  if ($resultx->num_rows > 0) {
    while($macrogruppox = $resultx->fetch_assoc())	
    {   
      $nomecommessaxx = $macrogruppox["nomecommessa"];
      $commessa=$commessaxx." - ".$nomecommessaxx;
      }}        
}}
?>
<!--<p align="center"><font size="4" face="Verdana" color="cc0000">
  <?php echo $errore; ?></font>-->
  
<?php
$swce=0;
$sql1 = "SELECT * FROM assegnato  where numero = '$numero' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $ragsoc = $macrogruppo["ragsoc"];	
        $swce=1;} }
$sql1 = "SELECT * FROM assegnatotec  where numero = '$numero' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $ragsoc = $macrogruppo["ragsoc"];	
        $swce=1;} }
if($swce==0){
?>
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Modifica Ticket <?php echo $numero." Stato ".$stato." ".$errore; ?></font></b></p>
<?php } else { ?>
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Modifica Ticket <?php echo $numero." Stato ".$stato." ".$errore; ?> a: <?php echo $ragsoc; ?></font></b></p>
<?php } ?>   
<form method="POST" action=""  enctype="multipart/form-data"> 
<table class="table-form">
  <tr>
      <th colspan="3" class=" borted-top-table"> 
        Identificazione:
      </th>
  </tr>
  <tr>
    <td height="45" colspan="1">
      <label style="color: #8e8b8b;">Cliente:<i class="fa-solid fa-magnifying-glass" data-bs-toggle="modal" data-bs-target="#leggiclienti" style="cursor:pointer; margin-left:5px"></i>all</label>
      <br>
      <input class="required" type="text" id="cliente" onkeyup="ricercaAutocomplete()" name="cliente" value="<?php echo $cliente; ?>" maxlength="100" size="40" style="" >   
    </td>
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Commessa:</label><br>
      <input class="required" type="text" id="commessa" onkeyup="Ricerca1()" name="commessa" value="<?php echo $commessa; ?>" maxlength="200" size="60">
    </td>            
  </tr>
  <tr>
      <td height="45" colspan="1">
        <label style="color: #8e8b8b;">Attività:</label><br>
        <input class="required" type="text" name="attivita" id="attivita" value="<?php echo $attivita; ?>" maxlength="50" size="40" >
      </td> 
      <td colspan="1"> 
        <label style="color: #8e8b8b;">N. Ticket Cliente:</label><br>
      <input type="text" name="ticketcli" value="<?php echo $ticketcli; ?>" maxlength="60" size="30">
      </td>
<?php $oggi=date("d/m/Y H:m:s");
if($datainizio==""){$datainizio=$oggi;} ?>           
      <td colspan="1"> 
        <label style="color: #8e8b8b;">Data e ora di aperura:</label><br>
        <input maxlength="20" 
        class="required"
        type="text" 
        name="datainizio" 
        value="<?php echo $datainizio; ?>" 
        autocomplete="off" 
        id="popupDatepicker" 
        size="25" 
       >
			</td>
    </tr>
    <tr>
      <td height="45" colspan="1"> 
            <label style="color: #8e8b8b;">Tipo intervento:</label><br>
              <select
                name="tipointervento"
                id="tipointervento"
                style="width:99%"
                class="required"
              >
                <option><?php echo $tipointervento; ?></option>
              </select>
      </td> 
      <td colspan="1"> 
        <label style="color: #8e8b8b;">Apparato:</label><br>
<!--        <input class="required" type="text" name="apparato" id="apparato" onkeyup="ricercaAutocompleteApparato()" value="<?php echo $apparato; ?>" maxlength="200" size="30" > -->
        <select class="required" size="1" name="apparato" id="apparato" >
		<option <? if($pparato=="C"){echo "selected";}?>>PC</option>
		<option <? if($apparato=="Stampante"){echo "selected";}?>>Stampante</option>
        <option <? if($apparato=="Periferiche (scanner, VLT)"){echo "selected";}?>>Periferiche (scanner, VLT)</option> 
        <option <? if($apparato=="PDL"){echo "selected";}?>>PDL</option> 
        <option <? if($apparato=="Server/Switch"){echo "selected";}?>>Server/Switch</option>  
        <option <? if($apparato=="Movimentazione"){echo "selected";}?>>Movimentazione</option> 
        <option <? if($apparato=="Ritiro"){echo "selected";}?>>Ritiro</option>  
		</select>
      </td>
      
      <td colspan="1">
        <div style="width:49%; float:left;" >
          <label style="color: #8e8b8b;">Seriale1:</label><br>
          <input type="text" class="required" name="seriale" id="seriale" value="<?php echo $seriale; ?>" maxlength="200" size="12" >
        </div>
        <div style="width:49%; float:right;" >
          <label style="color: #8e8b8b;">Seriale 2:</label><br>
          <input type="text"  name="seriale2" id="seriale2" value="<?php echo $seriale2; ?>" maxlength="200" size="13" >
        </div>
      </td>
      
    </tr>
<? if($priorita==""){$priorita="verde";} ?>
    <tr>
      <td height="45" colspan="1"> 
        <label style="color: #8e8b8b;">Priorità alta:</label><br>
        <input type="radio" name="priorita" id="rosso" value="rosso" <?php if ($priorita=="rosso"){echo "checked";} ?> style="width: 35px;height: 35px;accent-color: red;">
      </td> 
      <td colspan="1"> 
        <label style="color: #8e8b8b;">Priorità media:</label><br>
        <input type="radio" name="priorita" id="giallo" value="giallo" <?php if ($priorita=="giallo"){echo "checked";} ?> " style="width: 35px;height: 35px;accent-color: yellow;">
      </td>
      <td colspan="1"> 
        <label style="color: #8e8b8b;">Priorità Normle:</label><br>
        <input type="radio" name="priorita" id="verde" value="verde" <?php if ($priorita=="verde"){echo "checked"; } ?>   style="width: 35px;height: 35px;accent-color: green;border: 15px solid green;background-color: green;">
      </td>
    </tr>
    <tr>
      <th colspan="3"> 
          Luogo intervento: 
          <i class="fa-solid fa-magnifying-glass" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor:pointer"></i>
          <i class="fa-solid fa-map" data-bs-toggle="modal" data-bs-target="#exampleModalx" style="cursor:pointer"></i>
          <span id="progrId" style="float:right; padding: 4px 0 0 0; color:yellow;"></span>
          <span id="annullaLuogo" onClick="pulisciLuogo()">&#x2715; Svuota Luogo</span>
          
      </th>
    </tr>
    <tr>
      <td height="45" colspan="1"> 
        <label style="color: #8e8b8b;">Insegna:</label><br>
        <input type="text" class="required" name="insegna" id="insegnaF" value="<?php echo $insegna; ?>" maxlength="200" size="40" >
      </td>
      <td  colspan="2"> 
        <label style="color: #8e8b8b;">Ragione Sociale:</label><br>
        <input type="text" class="required" name="ragsoc" id="ragsocF" value="<?php echo $ragsoc; ?>" maxlength="200" size="60" >
      </td>
    </tr>
    
    <tr>
      <td colspan="1"> 
        <label style="color: #8e8b8b;">Indirizzo:</label><br>
        <input type="text" class="required" name="indirizzo" id="indirizzoF" value="<?php echo $indirizzo; ?>" maxlength="200" size="40" >
      </td>
      <td colspan="1"> 
        <div style="width:49%; float:left;" >
          <label style="color: #8e8b8b;">Cap:</label><br>
          <input type="text" class="required" name="cap" id="capF" value="<?php echo $cap; ?>" maxlength="200" size="5" >
        </div>
        <div style="width:49%; float:right;" >
          <label style="color: #8e8b8b;">Prov:</label><br>
          <input type="text" class="required" name="prov" id="provF" value="<?php echo $prov; ?>" maxlength="50" size="5" >
        </div>
      </td>
      <td colspan="1"> 
        <label style="color: #8e8b8b;">Città:</label><br>
        <input type="text" class="required" name="citta" id="cittaF" value="<?php echo $citta; ?>" maxlength="200" size="25" >
      </td>
    </tr>
    
    <tr>
      <td height="45" colspan="1"> 
        <label style="color: #8e8b8b;">Telefono:</label><br>
        <input type="text" class="required" name="telefono" id="telefonoF" value="<?php echo $telefono; ?>" maxlength="200" size="40">
      </td>
      <td height="45" colspan="1"> 
        <label style="color: #8e8b8b;">Note/Orari:</label><br>
        <input type="text"  name="note" id="noteF" value="<?php echo $note; ?>" maxlength="200" size="40">
      </td>
      <td colspan="1"> 
        <label style="color: #8e8b8b;">Contatto:</label><br>
        <input type="text" class="required" name="contatto" id="contattoF" value="<?php echo $contatto; ?>" maxlength="200" size="60">
      </td>
    </tr>
    <tr>           
      <th colspan="3"> 
        Descrizione Attivita Intervento:
      </th>
    </tr>
    <tr>
      <td height="40" colspan="3"> 
        <label style="color: #8e8b8b;">Descrizione: </label><br>
        <textarea  class="required" name="intervento"  id="intervento" cols="83" rows="1"><?php echo $intervento; ?></textarea>
      </td>
    </tr> 
    <tr>
      <th colspan="3"> 
        Segnalazione Parte da Sostituire:
      </th>
    </tr>
    <tr>
      <td height="45"colspan="1"> 
        <label style="color: #8e8b8b;">Numero seriale:</label><br>
        <input type="text" name="serialeparte" id="serialeparte" value="<?php echo $serialeparte ?>" maxlength="200" size="40">
      </td>
      <td height="45" colspan="2"> 
        <label style="color: #8e8b8b;">Nome parte:</label><br>
        <input type="text" name="nomeparte" value="<?php echo $nomeparte; ?>" maxlength="200" size="60" >
      </td>            
    </tr>
    <tr>
      <td height="40" colspan="3"> 
        <label style="color: #8e8b8b;">Nota per la spedizione parti di ricambio: </label><br>
        <textarea name="spedizione"  cols="83" rows="1"><?php echo $spedizione; ?></textarea>
        </td>
    </tr>
    <tr>          
      <th colspan="3"> 
        Descrizione Note SLA:
      </th>
    </tr>
    <tr>
      <td colspan="3" height="40"> 
        <label style="color: #8e8b8b;">SLA: </label><br>
        <textarea name="notesla"  cols="83" rows="1"><?php echo $notesla; ?></textarea>
      </td>
    </tr>
    <tr>          
        <th colspan="3"> 
          Note Interne:
        </th>
    </tr>
    <tr>
        <td colspan="3" height="70"> 
          <label style="color: #8e8b8b;">Note:</label><br>
          <textarea name="nota"  cols="83" rows="2"><?php echo $nota; ?></textarea>
        </td>
    </tr>
    <tr>
      <th colspan="3"> 
        Appuntamento Intervento:
      </th>
    </tr>
    <tr> 
      <td colspan="1" height="50"> 
        <label style="color: #8e8b8b;">Data Ora:</label><br>
        <input type="text" name="dataapp" id="dateOp" value="<?php echo $dataapp; ?>" maxlength="50" size="20">
      </td>
      <td colspan="2"> 
        <label style="color: #8e8b8b;">Nota appuntamento: </label><br>
        <textarea name="notaapp"  cols="40" rows="1"><?php echo $notaapp; ?></textarea>
      </td>
    </tr> 
    
<!--    
    
    <tr>
      <th colspan="3"> 
        Amministrativa:
      </th>
    </tr>
    <tr> 
      <td colspan="1" height="50"> 
        <div style="width:49%; float:left;" >
          <label>Importo Attivo:</label><br>
          <input type="text"  name="impatt" id="impatt" value="<?php echo $impatt; ?>" maxlength="10" size="12" >
        </div>
        <div style="width:49%; float:right;" >
          <label>Abbonamento:</label><br>
          <input type="text"  name="abbona" id="abbona" value="<?php echo $abbona; ?>" maxlength="10" size="13" >
        </div>
      </td>
      <td colspan="2"> 
        <div style="width:20%; float:left;" >
          <label>Importo passivo:</label><br>
          <input type="text"  name="imppass" id="imppass" value="<?php echo $imppass; ?>" maxlength="10" size="13" >
        </div>
        <div style="width:79%; float:right;" >
          <label>Note</label><br>
          <textarea name="notaamm"  maxlength="500" cols="40" rows="1"><?php echo $notaamm; ?></textarea>
        </div>
      </td>
    </tr> 
-->    
    
    
    
    
    <tr>
      <td colspan="3"  align="center" style="text-align: center; background-color:#FFFFFF;" >       
           <input type="hidden" name="ingranaggioxx" value="300" />
           <input type="hidden" name="ingranaggiohh" value="1" />
             <input type="hidden" name="login" value="<?php echo $login; ?>" />
             <input type="hidden" name="id" value="<?php echo $progr; ?>" />
             <input type="hidden" name="numero" value="<?php echo $numero; ?>" />
             <input type="hidden" name="progrnew" id="progrnew"  value="<?php echo $progrnew; ?>"/>
             <br><br>
             <button autofocus type="submit" class="btn btn-warning">Modifica Ticket</button>
    </td>  
  </tr>         
</table> 
</form> 


<?php }  ?>


<!-- ##############  ASSEGNAZIONE  ################  -->
<a name="destinazione"></a>
<?php if($ingranaggioy==10){ ?>
 <iframe  align="right" frameborder="0" width="0" height="0" scrolling="no" src="distanza100x.php?codice=<? echo $numero; ?>"></iframe> 
<?
if($ingranaggiogg=="A"){
$adesso=date("Y-m-d H:m:s"); 

$sqlll = "UPDATE assegnato set 
        ko = 'ko'
        where 
        numero = '$numero' 
        ";
#echo $sqlll."<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; exit;        
        if ($conn->query($sqlll) === TRUE) { } else { echo "Error inserted record: " . $conn->error; } 

$sql1vr = "SELECT * FROM cat  where codice = '$catscelto' ";
#echo $sql1vr."<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";  
$resultvr = $conn->query($sql1vr);
if ($resultvr->num_rows > 0) {
   while($macrogruppovr = $resultvr->fetch_assoc())
		{
         $codicevx = $macrogruppovr["codice"];
         $ragsocvx = $macrogruppovr["ragsoc"];
         $opemail = $macrogruppovr["opemail"];
         }}
$catcomposto=$catscelto." - ".$ragsocvx;         
$sqlr = "INSERT INTO assegnato
              (       
              numero, 
              dataassegno, 
              ragsoc, 
              login) 
            VALUES (            
              '$numero',
              '$adesso', 
              '$catcomposto',
              '$login'
              )";
#echo $sqlr."<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; exit;
  if ($conn->query($sqlr) === TRUE) {
  $dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$numero',
        '$dataoggi',
        'Memorizzato Assegnazione a 3PP',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;}  
  
  
   }  else { echo $sqlr."Errore inserimento recoerd: " . $conn->error; } 
#   
#   
#   
#################  memorizzo il cat sulle parti di ricambio scelte per questo ticket in daspedire################   
$sql1vr = "SELECT * FROM daspedire  where ticket = '$numero' ";
#echo $sql1vr."<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";  
$resultvr = $conn->query($sql1vr);
if ($resultvr->num_rows > 0) {
   while($macrogruppovr = $resultvr->fetch_assoc())
		{
         $progrdaspedire = $macrogruppovr["progr"];
         #echo "progr ".$progrdaspedire;
         $dataassegnato=date("d/m/Y");
$sqlll = "UPDATE daspedire set 
        catassegnato = '$catscelto',
        catassegnatodata = '$dataassegnato'
        where 
        progr = '$progrdaspedire' 
        ";
#echo $sqlll."<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; exit;        
        if ($conn->query($sqlll) === TRUE) { } else { echo "Error inserted record update daspedire: " . $conn->error; }          
         }}   
#################  memorizzo il cat sulle parti di ricambio scelte per questo ticket  in impegno################   
$sql1vr = "SELECT * FROM impegno  where ticket = '$numero' ";
#echo $sql1vr."<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";  
$resultvr = $conn->query($sql1vr);
if ($resultvr->num_rows > 0) {
   while($macrogruppovr = $resultvr->fetch_assoc())
		{
         $progrdaspedire = $macrogruppovr["progr"];
         #echo "progr ".$progrdaspedire;
         $dataassegnato=date("d/m/Y");
$sqlll = "UPDATE impegno set 
        catassegnato = '$catscelto',
        catassegnatodata = '$dataassegnato'
        where 
        progr = '$progrdaspedire' 
        ";
#echo $sqlll."<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; exit;        
        if ($conn->query($sqlll) === TRUE) { } else { echo "Error inserted record update daspedire: " . $conn->error; }          
         }}      
########################## fine assegnazione a daspedire e impegno  #####################   
#
#
#   
     
$sql = "SELECT *  FROM  tk where  numero  = '$numero' " ;  
#  echo $sql."<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; exit;
  $rCount = 1;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())	
    { $statoww = $macrogruppo["stato"]; }} 
    
$sqlx = "SELECT *  FROM  tkluogo where  numero  = '$numero' " ;  
#echo $sql;
$rCount = 1;
$resultx = $conn->query($sqlx);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc())	
	{   
     $ragsocxxs = $macrogruppox["ragsoc"];
     $insegnas = $macrogruppox["insegna"];
     $vias = $macrogruppox["indirizzo"];
     $paps = $macrogruppox["cap"];
     $cittas = $macrogruppox["citta"];
     $contattos = $macrogruppox["contatto"];
     $telefonos = $macrogruppox["telefono"];
     $provs = $macrogruppox["prov"];    
     }}
    
# invia email 


$emailwd=$opemail;            
 // definisco mittente e destinatario della mail 
$nome_mittente = "SACI GROUP";
$mail_mittente = "info@sacigroup.it";
$mail_destinatario = $emailwd;

// definisco il subject ed il body della mail
$mail_oggetto = "Assegnazione Ticket";
$aggiunta="Spett. ".$ragsocvx.",
 Vi abbiamo assegnato il ticket n: ".$numero." presso ".$insegnas." ".$ragsocxxs." ".$vias." ".$paps." ".$cittas." ".$provs." telefono: ".$telefonos." "." 
 Per Per accede al sistema:
 https://www.easysw.it/cat/inizio.php";
$mail_corpo = $aggiunta."\r\n Cordiali saluti SACI GROUP";



// aggiusto un po' le intestazioni della mail
// E' in questa sezione che deve essere definito il mittente (From)
// ed altri eventuali valori come Cc, Bcc, ReplyTo e X-Mailer
$mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
$mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
$mail_headers .= "X-Mailer: PHP/" . phpversion();


if (mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers))
{  #echo "Messaggio inviato con successo a " . $mail_destinatario; 

}
else
  { "Errore. Nessun messaggio inviato."; }

$dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$numero',
        '$dataoggi',
        'Inviati Email a3PP',
        '$login',
        'info@sacigroup.it',
        '$emailwd',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;}  



# fine invio email
#echo $statoww."<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; exit;    
    
#if($statoww=="Aperto"){   
$sqlll = "UPDATE tk set 
        stato = 'Assegnato'
        where 
        numero = '$numero' 
        ";
#echo $sqlll."<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; exit;        
        if ($conn->query($sqlll) === TRUE) {
$dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$numero',
        '$dataoggi',
        'Memorizzato Stato Assegnato',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;}          
         } else { echo "Error inserted record: " . $conn->error; } 
$ingranaggiogg="";        
#} 


}


#echo "passo ".$ingranaggiogg"<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
$sql = "SELECT *  FROM  tk where  numero  = '$numero' " ;  
#  echo $sql;
  $rCount = 1;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())	
    { 
      $progrxxy = $macrogruppo["progr"];
      $numeroxx = $macrogruppo["numero"];

      $clientexx = $macrogruppo["cliente"];
      $commessaxx = $macrogruppo["commessa"];
      $attivita = $macrogruppo["attivita"];

      $tipointervento = $macrogruppo["tipointervento"];
      $apparato = $macrogruppo["apparato"];
      $priorita = $macrogruppo["priorita"];


	  $spedizione = $macrogruppo["spedizione"];
	  $notesla = $macrogruppo["notesla"];
	  $nota = $macrogruppo["nota"];
	  $notaapp = $macrogruppo["notaapp"];
      $impatt = $macrogruppo["impatt"];
      $abbona = $macrogruppo["abbona"];
      $imppass = $macrogruppo["imppass"];
      $notaamm = $macrogruppo["notaamm"];
      $stato = $macrogruppo["stato"];
      
      $intervento = $macrogruppo["intervento"];
  $sqlx = "SELECT *  FROM  tkluogo where  numero  = '$numeroxx' " ;  
  #echo $sql;
  $rCount = 1;
  $resultx = $conn->query($sqlx);
  if ($resultx->num_rows > 0) {
    while($macrogruppox = $resultx->fetch_assoc())	
    {   
      $insegna = $macrogruppox["insegna"];
      $ragsoc = $macrogruppox["ragsoc"];
      $indirizzo = $macrogruppox["indirizzo"];
      $cap = $macrogruppox["cap"];
      $prov = $macrogruppox["prov"];
      $citta = $macrogruppox["citta"];
      $contatto = $macrogruppox["contatto"];
      $telefono = $macrogruppox["telefono"];
      $note = $macrogruppox["note"];
      }}
  $sqlx = "SELECT *  FROM  clienti where  codice  = '$clientexx' " ;  
  #echo $sql;
  $rCount = 1;
  $resultx = $conn->query($sqlx);
  if ($resultx->num_rows > 0) {
    while($macrogruppox = $resultx->fetch_assoc())	
    {   
      $ragsocclixx = $macrogruppox["ragsoc"];
      $codxx = $macrogruppox["codice"];
      $clienteintero=$codxx." - ".$ragsocclixx;
      }}     
  $sqlx = "SELECT *  FROM  commesse where  commessa  = '$commessaxx' " ;  
  #echo $sql;
  $rCount = 1;
  $resultx = $conn->query($sqlx);
  if ($resultx->num_rows > 0) {
    while($macrogruppox = $resultx->fetch_assoc())	
    {   
      $nomecommessaxx = $macrogruppox["nomecommessa"];
      $commessa=$commessaxx." - ".$nomecommessaxx;
      }}        
}}
?>
<!--<p align="center"><font size="4" face="Verdana" color="cc0000">
  <?php echo $errore; ?></font>-->
  
<?php

$swcecat=0;
$swcetec=0;
$sql1 = "SELECT * FROM assegnato  where numero = '$numero'  ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $ragsoc = $macrogruppo["ragsoc"];	
        $swcecat=1;} }
$sql1 = "SELECT * FROM assegnatotec  where numero = '$numero' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $ragsoc = $macrogruppo["ragsoc"];	
        $swcetec=1;} }
?>
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Assegnazione a Terza Parte Ticket <?php echo $numero." Stato ".$stato; ?></font></b></p>


<!--    #################  INIZIO ESPOSIZIONE   TICKET   ################# -->

<? include "esponiverticale.php"; ?>
<!--    #################  FINE ESPOSIZIONE  ################# -->
<br>

<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Assegnazione</font></b></p>

<table class="table-form" style="width: 90%;">
  <tr>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;" >Codice 
      <i class="fa-solid fa-magnifying-glass" data-bs-toggle="modal" data-bs-target="#cat" style="cursor:pointer"></i>
      </th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">distanza Km</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Ragione sociale</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Indirizzo</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Città</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Prov.</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Cap</th>

      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Resp. Operativo</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Telefono</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Email</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">New Ind.</th>
  </tr>
<?php
if($swcecat==1){
$sql1 = "SELECT * FROM assegnato  where numero = '$numero' and ko = 'ok' order by dataassegno";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $ragsoc = $macrogruppo["ragsoc"];	
        $prograssegnato = $macrogruppo["id"];
        #echo "id ".$prograssegnato;
        $dataassegno = $macrogruppo["dataassegno"];
        $indirizzon = $macrogruppo["indirizzo"];
        $cittan = $macrogruppo["citta"];
        $provincian = $macrogruppo["provincia"];
        
        $capn = $macrogruppo["cap"];
        $comodo=explode(" ",$dataassegno);
        $comododata=$comodo[0];
        $comododatax=explode("-",$comododata);
        $dataassegnox=$comododatax[2]."/".$comododatax[1]."/".$comododatax[0];
        $dataassegno=$dataassegnox." ".$comodo[1];
        
        #echo "data ".$dataassegno;
        $swce=1;
        $comodo=explode(" - ",$ragsoc);
        $codicetp=$comodo[0]; 
$sql1v = "SELECT * FROM cat  where codice = '$codicetp' ";
#echo $sql1v; 
$resultv = $conn->query($sql1v);
if ($resultv->num_rows > 0) {
   while($macrogruppov = $resultv->fetch_assoc())
		{
      
         $codiceww = $macrogruppov["codice"];
         $ragsocv = $macrogruppov["ragsoc"];
         $viav = $macrogruppov["via"];
         $cittav = $macrogruppov["citta"];
         $capv = $macrogruppov["cap"];
         $provv = $macrogruppov["prov"];
         $regionev = $macrogruppov["regione"];
         $ivav = $macrogruppov["iva"];
         $ibanv = $macrogruppov["iban"];
         $sdiv = $macrogruppov["sdi"];
         $ammcognome = $macrogruppov["ammcognome"];
         $ammnome = $macrogruppov["ammnome"];
         $optelefono = $macrogruppov["optelefono"];
         $opemail = $macrogruppov["opemail"];
         $opcognome = $macrogruppov["opcognome"];
         $opnome = $macrogruppov["opnome"];
         $opcognomenome=$opcognome." ".$opnome;
$indirizzor=$viav." - ".$capv." ".$cittav; 
$sql1q = "SELECT * FROM distanza  where codicetk = '$numero' and codice = '$codiceww' ";
#echo $sql1q."<br>";
$resultq = $conn->query($sql1q);
if ($resultq->num_rows > 0) {
  while($macrogruppoq = $resultq->fetch_assoc()) 
		{$kmv = $macrogruppoq["km"];}}   
$kmv = ltrim($kmv, "0"); 
if($indirizzon!=""){$viav=$indirizzon; $cittav=$cittan; $capv=$capn; $provv=$provincian;} 
#echo "prov ".$provincian;              
?>         
<tr>
    <td colspan="1"> 
      <span ><?php echo $codiceww ; ?></span>
    </td>

    <td colspan="1" > 
    <center>
      <span ><?php echo $kmv; ?></span>
      </center>
    </td>
    
    <td colspan="1"> 
      <span ><?php echo $ragsocv; ?></span>
    </td>
    <form method="POST" action=""  enctype="multipart/form-data">
    <td colspan="1"> 
      <span ><input  type="text"   name="vianuova" size="20" maxlength="400" value="<?php echo $viav; ?>">           
      </span>
    </td>
    <td colspan="1"> 
      <span ><input  type="text"   name="cittanuova" size="15" maxlength="400" value="<?php echo $cittav; ?>"></span>
    </td>
    <td colspan="1"> 
      <span ><input  type="text"   name="provnuova" size="8" maxlength="400" value="<?php echo $provv; ?>"></span>
    </td>
    <td colspan="1"> 
      <span ><input  type="text"   name="capnuova" size="3" maxlength="400" value="<?php echo $capv; ?>"></span>
    </td>
    
    <td colspan="1"> 
      <span ><?php echo $opcognomenome; ?></span>
    </td>
    
    <td colspan="1"> 
      <span ><?php echo $optelefono; ?></span>
    </td>
    
    <td colspan="1"> 
      <span ><?php echo $opemail; ?></span>
    </td>
    
    
    <td colspan="1"> 
      <span ><input type="hidden" name="ingranaggioxx" value="" />
        <input type="hidden" name="ingranaggioy" value="10" />
      <!--  <input type="hidden" name="ingranaggiobb" value="A" />  -->
        <input type="hidden" name="ingranaggimodindspe" value="1" />
        <input type="hidden" name="login" value="<?php echo $login; ?>" />
        <input type="hidden" name="id" value="<?php echo $progr; ?>" />
        <input type="hidden" name="codice" value="<?php echo $numero; ?>" />
        <input type="hidden" name="progrnew" id="progrnew"  value="<?php echo $progrnew; ?>"/>
        <input type="hidden" name="prograssegnato" id="prograssegnato"  value="<?php echo $prograssegnato; ?>"/>
    <button class="btn btn-primary" type="submit" type="button" >Mod.</button></span>
    </td>
</form>
</tr>
<? 
} 
}} }}
if($swcetec==1){
$sql1 = "SELECT * FROM assegnatotec  where numero = '$numero' and ko = 'ok' order by dataassegno";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $ragsoccat = $macrogruppo["ragsoc"];	
        $dataassegnocat = $macrogruppo["dataassegno"];
        $comodo=explode(" ",$dataassegno);
        $comododata=$comodo[0];
        $comododatax=explode("-",$comododata);
        $dataassegnox=$comododatax[2]."/".$comododatax[1]."/".$comododatax[0];
        $dataassegno=$dataassegnox." ".$comodo[1];
        #echo "data ".$dataassegno;
        $swce=1;
        $comodo=explode(" - ",$ragsoc);
        $codicetp=$comodo[0]; 
#echo  $sql1;    
?>         
<tr>
    <td colspan="1"> 
      <span > </span>
    </td>

    <td colspan="1"> 
      <span >0 Km</span>
    </td>

    <td colspan="1"> 
      <span ><?php echo $ragsoccat; ?></span>
    </td>
    
    <td colspan="1"> 
      <span ></span>
    </td>
    
    <td colspan="1"> 
      <span ><?php echo $ragsoccat; ?></span>
    </td>
    
    <td colspan="1"> 
      <span ></span>
    </td>
    
    <td colspan="1"> 
      <span ></span>
    </td>
    
    <td colspan="1"> 
      <span ></span>
    </td>
</tr>
<? 
}
}} 
 ?>
</table>
<br>

<div align="center" >
<table align="center" >
<tr align="center">
<td width="50%" align="center">
<form method="POST" action=""  enctype="multipart/form-data">
        <input type="hidden" name="ingranaggioxx" value="" />
        <input type="hidden" name="ingranaggioy" value="10" />
        <input type="hidden" name="ingranaggiobb" value="A" />
        <input type="hidden" name="login" value="<?php echo $login; ?>" />
        <input type="hidden" name="id" value="<?php echo $progr; ?>" />
        <input type="hidden" name="codice" value="<?php echo $numero; ?>" />
        <input type="hidden" name="progrnew" id="progrnew"  value="<?php echo $progrnew; ?>"/>
    <button class="btn btn-primary" type="submit" type="button" >Assegnazione a terze parti</button>
</form> 
</td>
<td width="50%" align="center">
<form method="POST" action=""   enctype="multipart/form-data">
        <input type="hidden" name="ingranaggioxx" value="" />
        <input type="hidden" name="ingranaggioy" value="10" />
        <input type="hidden" name="ingranaggiobb" value="B" />
        <input type="hidden" name="login" value="<?php echo $login; ?>" />
        <input type="hidden" name="id" value="<?php echo $progr; ?>" />
        <input type="hidden" name="codice" value="<?php echo $numero; ?>" />
        <input type="hidden" name="progrnew" id="progrnew"  value="<?php echo $progrnew; ?>"/>   
    <button class="btn btn-primary" type="submit" type="button" >Assegnazione a tecnico interno</button>
</form>  
</td>
</tr>
</table>  
</div>
<? if($ingranaggiobb=="A"){ ?>

<div class="table-ticket-footer">
  <table id="tableFooter" class="display" cellspacing="0"  style="position:relative;">         
              <thead class="intesta">
    <tr class="testa">
      
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Codice</td>          
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Distanza Km
<!--            <i class="fa-solid fa-map" data-bs-toggle="modal" data-bs-target="#multiplo" style="cursor:pointer"></i>  -->
            </td>          
            
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Ragione sociale</td>
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >indirizzo</td>        
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Provincia</td>
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Regione</td>
            <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Resp. Operativo</td>            
            <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Telefono</td>
            <td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" >Email</td>
			<td  colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Verdana;" align="center"><font size="2" face="Verdana" ></td>		
            </tr>       
    </thead>
    <tbody>
<?php  
$tabella=array(); 
$tabellax=array(); 
$giro=0; 
$girox=1;
$sql1v = "SELECT * FROM cat  order by ragsoc ";
#echo $sql1v; 
$resultv = $conn->query($sql1v);
if ($resultv->num_rows > 0) {
   while($macrogruppov = $resultv->fetch_assoc())
		{
        $codicev = $macrogruppov["codice"];
        $ce=0;
$comodo=explode(" - ",$cliente);
$clientemeta=$comodo[0]; 
$comodo=explode(" - ",$commessa);
$commessameta=$comodo[0];        
$sqlll = "SELECT * FROM tipointerventopas  where cliente = '$clientemeta' and commessa = '$commessameta' and tipointervento = '$tipointervento1' and cat = '$codicev' ";        

#echo "prova".$sqlll; 
#echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
#exit;

$resultll = $conn->query($sqlll);
if ($resultll->num_rows > 0) {
  while($macrogruppoll = $resultll->fetch_assoc())	
	{ $ce=1;}}
if($ce==1){  
         $codicev = $macrogruppov["codice"];
         $ragsocv = $macrogruppov["ragsoc"];
         $viav = $macrogruppov["via"];
         $cittav = $macrogruppov["citta"];
         $capv = $macrogruppov["cap"];
         $provv = $macrogruppov["prov"];
         $regionev = $macrogruppov["regione"];
         $ivav = $macrogruppov["iva"];
         $ibanv = $macrogruppov["iban"];
         $sdiv = $macrogruppov["sdi"];
         $ammcognome = $macrogruppov["ammcognome"];
         $ammnome = $macrogruppov["ammnome"];
         $optelefono = $macrogruppov["optelefono"];
         $opemail = $macrogruppov["opemail"];
         $opcognome = $macrogruppov["opcognome"];
         $opnome = $macrogruppov["opnome"];
         $opcognomenome=$opcognome." ".$opnome;
         $indirizzot=$viav." - ".$capv." ".$cittav;  
$sql1q = "SELECT * FROM distanza  where codicetk = '$numero' and codice = '$codicev' ";
#echo $sql1q."<br>";
$resultq = $conn->query($sql1q);
if ($resultq->num_rows > 0) {
  while($macrogruppoq = $resultq->fetch_assoc()) 
		{$km = $macrogruppoq["km"];}}  

$regionecat="";
$sqlxj = "SELECT *  FROM  province where  sigla = '$provv' " ;  
#echo $sqlxj;
$rCount = 1;
$resultxj = $conn->query($sqlxj);
if ($resultxj->num_rows > 0) {
  while($macrogruppoxj = $resultxj->fetch_assoc())	
	{ $regionecat = $macrogruppoxj["regione"]; }} 
#echo $regionecat."/ ".$regionetk;    
if($regionecat==$regionetk)
{     
  
$tabella[$giro]=" const TP".$codicev." = '".$cittav." ".$viav."'; "; 

$tabellax[0]="destinations: ["; 

$tabellax[$girox]="TP".$codicev.",";  
$girox++; 
$giro++;   
} 
#print_r($tabella);

?>   
  
      <tr >    
        <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $codicev; ?></font></td>
        <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $km; ?></font></td>
        
        <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" ><font size="2" face="Verdana"><?php echo $ragsocv; ?></font></td>
        <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $indirizzot; ?></font></td>
        <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $provv; ?></font></td>
        <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $regionecat; ?></font></td>
        <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $opcognomenome; ?></font></td>
        <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $optelefono; ?></font></td>
        <td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="left" ><font size="2" face="Verdana"><?php echo $opemail; ?></font></td>
<form method="POST" action=""   enctype="multipart/form-data">    
		<td style=" border: 1px solid #e4e3e3;font-family: Verdana;" align="center" >		
        <input type="hidden" name="ingranaggioxx" value="" />
        <input type="hidden" name="ingranaggioy" value="10" />
        <input type="hidden" name="ingranaggiobb" value="A" />
        <input type="hidden" name="ingranaggiogg" value="A" />
        <input type="hidden" name="login" value="<?php echo $login; ?>" />
        <input type="hidden" name="id" value="<?php echo $progr; ?>" />
        <input type="hidden" name="codice" value="<?php echo $numero; ?>" />  
        <input type="hidden" name="catscelto" value="<?php echo $codicev; ?>" />        
        <input type="hidden" name="progrnew" id="progrnew"  value="<?php echo $progrnew; ?>"/>   
    <button class="btn btn-primary" type="submit" type="button" >Assegna</button>
  </td>
</form>
      </tr>	
      
<?php }} } ?>                    
  </table>
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Posizione del CAT e posizione del Ticket <?php echo $numero; ?> nella regione <? echo $regionetk; ?></font></b></p>
<? $origine=$citta." ".$indirizzo; 
#echo $origine;
$girox++;
$tabellax[$girox]="],"; 
#echo $giro;
if ($giro!=0) 
{
#echo "passo";
 ?> 
<center>
<iframe  align="right" frameborder="0" width="80%" height="180%"  src="multiplo.php?origine=<?php echo $origine; ?>&giro=<? echo $giro; ?>&tabella=<?  echo base64_encode(serialize($tabella)); ?>&tabellax=<? echo base64_encode(serialize($tabellax)); ?>&girox=<? echo $girox; ?>"></iframe> 
</center>  
</div>   
<?php }}  ?>
<?php }  ?>    

     
<!--   ###########################   DOCUMENTAZIONE  ###############   -->
<?php if($ingranaggioy==40){ ?>
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Documentazione Ticket <?php echo $numero." Stato ".$stato; ?></font></b></p>


<!--    #################  INIZIO ESPOSIZIONE   TICKET   ################# -->

<? include "esponiverticale.php"; ?>
<!--    #################  FINE ESPOSIZIONE  ################# -->
<br>
<? $oggiora=date("d/m/Y"); 
$numerodoc=$numero;
?>
<p align="center"><font face="Verdana" size="4" style="font-family: Verdana;" color="#993300">Inserimento Nuovo Documento </font></b></p><div align="center">    
<table class="table-form">
<form action="" method="post" enctype="multipart/form-data" >
		<tr>
        <th colspan="1" class=" borted-top-table"> 
        Data Documento:
        </th>
        <th colspan="1" class=" borted-top-table"> 
        Scadenza Documento:
        </th>   
        </tr> 
        
         <tr>
    <td  colspan="1">
      <input class="required" type="text" name="newdata" value="<?php echo $oggiora; ?>"  size="10"  >    
      <td colspan="1"> 
      <input class="required" type="text" name="newdatasca" value="31/12/9999"  size="10"  >    
    </td>            
  </tr>
</table>


<table class="table-form">        
        <tr>
		<td colspan="2"> 
        <label style="color: #8e8b8b;">Oggetto:</label>
        <input class="required" type="text" id="newoggetto"  name="newoggetto"  maxlength="200" >
        </td>  
        </tr>
	
		<tr>
		<td colspan="2"> 
        <label style="color: #8e8b8b;">Scegli Documento:</label>	    
		 <input type="hidden" name="ingranaggioy" value="40" />
         <input type="hidden" name="login" value="<? echo $login; ?>" />
         <input type="hidden" name="ingranaggio" value="34" />
         <input type="hidden" name="codice" value="<?php echo $numero; ?>" />
         
		 <input class="required" type="file" name="fileToUpload" id="fileToUpload" size="150" >
         </td>	
         </tr>
         <tr>
         <td colspan="2" style="text-align:center;">           
         <input type="hidden" name="ingranaggioy" value="40" />
         <input type="hidden" name="login" value="<?php echo $login; ?>" />    
         <input type="hidden" name="codice" value="<?php echo $numero; ?>" />
         <input type="hidden" name="ingranaggio" value="34" />  
         <input type="hidden" name="ingranaggiodocu" value="1" />                            
         <button class="btn btn-primary" type="submit" type="button" >Memorizza Documento</button>                  
     	 </td>
        </form>
        </tr>
        </table>
        <br>
<p align="center"><font face="Verdana" size="4" style="font-family: Verdana;" color="#993300">Lista Documenti Caricati </font></b></p>   

<table class="table-form">        
        <tr>
		<th colspan="1" class=" borted-top-table" width="10%"> 
        Data Doc.
        </th>
        <th colspan="1" class=" borted-top-table" width="10%"> 
        Scad. Doc.
        </th>
        <th colspan="1" class=" borted-top-table" width="70%"> 
        Oggetto
        </th>
        <th colspan="2" class=" borted-top-table" width="10%" style="text-align:center;"> 
        Operazioni
        </th>
        </tr> 
        
<?
$sql = "SELECT * FROM documenti  where    tipodoc = '$numero'";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
   $prgr = $macrogruppo["progr"];
   $data = $macrogruppo["datadoc"];
   $datasca = $macrogruppo["datasca"];
   $tipodoc = $macrogruppo["tipodoc"];
   $oggettox= $macrogruppo["oggetto"];
   $file = $macrogruppo["file"];
#echo $prgr;
?>
<tr>
<tr onMouseOver="style.background='#c9cacb';" onMouseOut="style.background=''">

    
		<td  style="color: <?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>;"><? echo $data; ?></td>
        <td  style="color: <?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>;"><? echo $datasca; ?></td>
        
        <td  style="color: <?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>;"><? echo $oggettox; ?></td>
		<td style="text-align:center;">
        <a href="?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&codice=<?php echo $numero; ?>&prgrx=<? echo $prgr; ?>&ingranaggioy=40&ingranaggiovedi=201&prgry=<?php echo $prgr; ?>" >
        <button type="button" class="btn btn-success" ><i class="fa-solid fa-plus"></i></button></a>
        </td>
        <td style="text-align:center;" >
<!--        <a  onclick="myFunction('?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&prgrx=<? echo $prgr; ?>&ingranaggio=10&ingranaggiott=202&oggetto=<?php echo $oggettox; ?>&progr=<?php echo $progr; ?>');" ><img border="0" background="btn1.gif" src="x1.png" width="15" height="15"></a>   -->
        <a href="?fileh=<?php echo $file; ?>&ingranaggiocancelladoc=1&login=<?php echo $login; ?>&codice=<?php echo $numero; ?>&prgrx=<? echo $prgr; ?>&ingranaggioy=40&prgry=<?php echo $prgr; ?>&progr=<?php echo $progr; ?>" >
        <button type="button" class="btn btn-success" onclick="return confirm('Sei sicuro di volere cancellare?')"><i class="fa-solid fa-minus"></i></button></a>

</td>

     
        </tr>        
        
<? }} ?>        
        
        
</table>               
<?php if($ingranaggiovedi==201){ ?>

    <tr>
    <td colspan="5" ><br>
<div>
<iframe  align="center" frameborder="0" width="85%" height="800" scrolling="yes" src="esponipdfffxx.php?login=<?php echo $login; ?>&fl=<?php echo $fileh; ?>"></iframe> 
</div>    
    </td>
    </tr>
<?php } 

?>   
	</table> 
</td>
</tr>
</table>              
            <br>

<? } ?>
<!--            ################# FINE DOCUMENTAZIONE    -->


<!--            ################# PIANIFICA INTERVENTO    -->
<?php if($ingranaggioy==50){ 
if($stato!="Aperto"){
?>
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Pianificazione del  Ticket <?php echo $numero." Stato ".$stato; ?></font></b></p>


<!--    #################  INIZIO ESPOSIZIONE   TICKET   ################# -->

<? include "esponiverticale.php"; ?>
<!--    #################  FINE ESPOSIZIONE  ################# -->
<br>


<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Intervento Pianificato</font></b></p>

<table class="table-form">        
        <tr>
        <th colspan="1" class=" borted-top-table" width="10%"> 
        N.Int.
        </th>
		<th colspan="1" class=" borted-top-table" width="10%"> 
        Data
        </th>
        <th colspan="1" class=" borted-top-table" width="10%"> 
        Ora
        </th>
        <th colspan="1" class=" borted-top-table" width="30%"> 
        luogo
        </th>
        <th colspan="1" class=" borted-top-table" width="20%" > 
        Tecnico
        </th>
        <th colspan="1" class=" borted-top-table" width="30%" > 
        Note
        </th>
        </tr> 
        
<?
$sql = "SELECT * FROM pianificato  where    codice = '$numero'";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
   $prgr = $macrogruppo["progr"];
   $dataint = $macrogruppo["dataint"];
   $oraint = $macrogruppo["oraint"];
   $luogoint = $macrogruppo["luogoint"];
   $tecnicoint= $macrogruppo["tecnicoint"];
   $noteint = $macrogruppo["noteint"];
   $numerointervento = $macrogruppo["numerointervento"];
#echo $sql;
?>
<tr>
<tr onMouseOver="style.background='#c9cacb';" onMouseOut="style.background=''"> 
        <td   colspan="1" ><? echo $numerointervento; ?></td>
		<td   colspan="1" ><? echo $dataint; ?></td>
        <td   colspan="1" ><? echo $oraint; ?></td>        
        <td   colspan="1"><? echo $luogoint; ?></td>
        <td   colspan="1"><? echo $tecnicoint; ?></td>
        <td   colspan="1"><? echo $noteint; ?></td>  
        </tr>        
        
<? }}  ?>               
</table>             

<br>

<p align="center"><font face="Verdana" size="4" style="font-family: Verdana;" color="#993300">Inserimento Nuova Pianificazione </font></b></p><div align="center">    
<table class="table-form">
<form action="" method="post"  name="modulo" onSubmit="return controllo();">
<tr>
		<th colspan="2" class=" borted-top-table" width="10%"> 
        Pianifica Intervento
        </th>
</tr>        
<tr>
		<td colspan="1"> 
        <label style="color: #8e8b8b;">Data</label>
        <input class="required" type="text" id="dateOp"  name="dataint"  maxlength="10" value="<? echo $dataapp; ?>">
        </td>  
        <td colspan="1"> 
        <label style="color: #8e8b8b;">Ora</label>
        <input class="required" type="text"  name="oraint"  id="oraint" maxlength="10" >
        </td>
</tr>         
<tr>
       <td colspan="2"> 
        <label style="color: #8e8b8b;">luogo</label>
        <input class="required" type="text"   name="luogoint"  id="luogoint" maxlength="200" value="<? echo $indirizzo." ".$cap." ".$citta." ".$prov; ?>">
        </td> 
</tr>
<tr>
        <td colspan="1"> 
        <label style="color: #8e8b8b;">Tecnico</label>
        <input  type="text"   name="tecnicoint"  id="tecnicoint" maxlength="200" >
        </td>  
        <td colspan="1"> 
        <label style="color: #8e8b8b;">Note</label>
        <input  type="text"   name="noteint"  maxlength="500" >
        </td>
</tr>
<tr>
       <td colspan="2" style="text-align:center;"> 
        <input type="hidden" name="ingranaggio" value="6" />
       <input type="hidden" name="ingranaggioxx" value="" />
       <input type="hidden" name="ingranaggiopian" value="1" />    
       <input type="hidden" name="ingranaggioy" value="50" />
       <input type="hidden" name="codice" value="<?php echo $numero; ?>" />   
       <input type="hidden" name="login" value="<?php echo $login; ?>" />                
       <button type="submit" class="btn btn-success" >Memorizza</button>

       </td>
</tr>
</form>
</table>

<? } 
else
{  ?>
<br>
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Impossibile pianificare un intervento del Ticket <?php echo $numero; ?> prima di essere assegnato ad una T.P.</font></b></p>
<? } }?>


<!--    #################  CHIUSURA   TICKET   ################# -->
<?php if($ingranaggioy==30){ 
#echo "passo";
if($stato=="Assegnato" or $stato=="Pianificato" or $stato == 'Richiesta di Chiusura' or $stato == 'Chiuso'){
?>
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Richiesta di Chiusura del Ticket <?php echo $numero." Stato ".$stato; ?></font></b></p>


<!--    #################  INIZIO ESPOSIZIONE   TICKET   ################# -->
<? include "esponiverticale.php"; ?>
<center>
<hr style="width: 90%;">
</center>

<?php

$swcecat=0;
$swcetec=0;
$sql1 = "SELECT * FROM assegnato  where numero = '$numero'  ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $ragsoc = $macrogruppo["ragsoc"];	
        $swcecat=1;} }
$sql1 = "SELECT * FROM assegnatotec  where numero = '$numero' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $ragsoc = $macrogruppo["ragsoc"];	
        $swcetec=1;} }
?>
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Ticket <?php echo $numero; ?> Assegnazione</font></b></p>

<table class="table-form" style="width: 90%;">
  <tr>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;" >Codice 
      <i class="fa-solid fa-magnifying-glass" data-bs-toggle="modal" data-bs-target="#cat" style="cursor:pointer"></i>
      </th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">distanza Km</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Ragione sociale</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Indirizzo</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Città</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Prov.</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Cap</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Resp. Operativo</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Telefono</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Email</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Provincia</th>
  </tr>
<?php
if($swcecat==1){
$sql1 = "SELECT * FROM assegnato  where numero = '$numero' and ko = 'ok' order by dataassegno";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $ragsoc = $macrogruppo["ragsoc"];	
        $dataassegno = $macrogruppo["dataassegno"];
        $comodo=explode(" ",$dataassegno);
        $comododata=$comodo[0];
        $comododatax=explode("-",$comododata);
        $dataassegnox=$comododatax[2]."/".$comododatax[1]."/".$comododatax[0];
        $dataassegno=$dataassegnox." ".$comodo[1];
        #echo "data ".$dataassegno;
        $swce=1;
        $comodo=explode(" - ",$ragsoc);
        $codicetp=$comodo[0]; 
$sql1v = "SELECT * FROM cat  where codice = '$codicetp' ";
#echo $sql1v; 
$resultv = $conn->query($sql1v);
if ($resultv->num_rows > 0) {
   while($macrogruppov = $resultv->fetch_assoc())
		{
         $codiceww = $macrogruppov["codice"];
         $ragsocv = $macrogruppov["ragsoc"];
         $viav = $macrogruppov["via"];
         $cittav = $macrogruppov["citta"];
         $capv = $macrogruppov["cap"];
         $provv = $macrogruppov["prov"];
         $regionev = $macrogruppov["regione"];
         $ivav = $macrogruppov["iva"];
         $ibanv = $macrogruppov["iban"];
         $sdiv = $macrogruppov["sdi"];
         $ammcognome = $macrogruppov["ammcognome"];
         $ammnome = $macrogruppov["ammnome"];
         $optelefono = $macrogruppov["optelefono"];
         $opemail = $macrogruppov["opemail"];
         $opcognome = $macrogruppov["opcognome"];
         $opnome = $macrogruppov["opnome"];
         $opcognomenome=$opcognome." ".$opnome;
$indirizzor=$viav." - ".$capv." ".$cittav; 
$sql1q = "SELECT * FROM distanza  where codicetk = '$numero' and codice = '$codiceww' ";
#echo $sql1q."<br>";
$resultq = $conn->query($sql1q);
if ($resultq->num_rows > 0) {
  while($macrogruppoq = $resultq->fetch_assoc()) 
		{$kmv = $macrogruppoq["km"];}}   
$kmv = ltrim($kmv, "0");                
?>         
<tr>
    <td colspan="1"> 
      <span ><?php echo $codiceww ; ?></span>
    </td>

    <td colspan="1" > 
    <center>
      <span ><?php echo $kmv; ?></span>
      </center>
    </td>
    
    <td colspan="1"> 
      <span ><?php echo $ragsocv; ?></span>
    </td>
    
    <td colspan="1"> 
      <span ><?php echo $viav; ?></span>
    </td>
    <td colspan="1"> 
      <span ><?php echo $cittav; ?></span>
    </td>
    <td colspan="1"> 
      <span ><?php echo $provv; ?></span>
    </td>
    <td colspan="1"> 
      <span ><?php echo $capv; ?></span>
    </td>
    <td colspan="1"> 
      <span ><?php echo $opcognomenome; ?></span>
    </td>
    
    <td colspan="1"> 
      <span ><?php echo $optelefono; ?></span>
    </td>
    
    <td colspan="1"> 
      <span ><?php echo $opemail; ?></span>
    </td>
    
    <td colspan="1"> 
      <span ><?php echo $provv; ?></span>
    </td>
</tr>
<? 
}
}} }}
if($swcetec==1){
$sql1 = "SELECT * FROM assegnatotec  where numero = '$numero' and ko = 'ok' order by dataassegno";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $ragsoccat = $macrogruppo["ragsoc"];	
        $dataassegnocat = $macrogruppo["dataassegno"];
        $comodo=explode(" ",$dataassegno);
        $comododata=$comodo[0];
        $comododatax=explode("-",$comododata);
        $dataassegnox=$comododatax[2]."/".$comododatax[1]."/".$comododatax[0];
        $dataassegno=$dataassegnox." ".$comodo[1];
        #echo "data ".$dataassegno;
        $swce=1;
        $comodo=explode(" - ",$ragsoc);
        $codicetp=$comodo[0]; 
#echo  $sql1;    
?>         
<tr>
    <td colspan="1"> 
      <span > </span>
    </td>

    <td colspan="1"> 
      <span >0 Km</span>
    </td>

    <td colspan="1"> 
      <span ><?php echo $ragsoccat; ?></span>
    </td>
    
    <td colspan="1"> 
      <span ></span>
    </td>
    
    <td colspan="1"> 
      <span ><?php echo $ragsoccat; ?></span>
    </td>
    
    <td colspan="1"> 
      <span ></span>
    </td>
    
    <td colspan="1"> 
      <span ></span>
    </td>
    
    <td colspan="1"> 
      <span ></span>
    </td>
</tr>
<? 
}
}} 
 ?>
</table>
<br>

<center>
<hr style="width: 90%;">
</center>

<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Ticket <?php echo $numero; ?> Interventi Pianificati</font></b></p>

<table class="table-form" style="width: 90%;">        
        <tr>
        <th style="text-align:center;" colspan="1" class=" borted-top-table" width="5%"> 
        N.Int.
        </th>
		<th colspan="1" class=" borted-top-table" width="5%"> 
        Data
        </th>
        <th colspan="1" class=" borted-top-table" width="5%"> 
        Ora
        </th>
        <th colspan="1" class=" borted-top-table" width="25%"> 
        luogo
        </th>
        <th colspan="1" class=" borted-top-table" width="15%" > 
        Tecnico
        </th>
        <th colspan="1" class=" borted-top-table" width="10%" > 
        Esito
        </th>
        <th colspan="1" class=" borted-top-table" width="30%" > 
        Note
        </th>
        <th colspan="1" class=" borted-top-table" width="20%" > 
        Scelta
        </th>
        </tr> 
        
<?

$sql = "SELECT * FROM pianificato  where    codice = '$numero'";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
   $prgr = $macrogruppo["progr"];
   $dataint = $macrogruppo["dataint"];
   $oraint = $macrogruppo["oraint"];
   $luogoint = $macrogruppo["luogoint"];
   $tecnicoint= $macrogruppo["tecnicoint"];
   $noteint = $macrogruppo["noteint"];
   $numerointervento = $macrogruppo["numerointervento"];
#echo $sql;
$esitoh="";
$sqlh = "SELECT * FROM chiusi  where    numero = '$numero' and numerointervento = '$numerointervento' ";        
#echo $sql;
$resulth = $conn->query($sqlh);
if ($resulth->num_rows > 0) {
  while($macrogruppoh = $resulth->fetch_assoc())	
	{ 
   $esitoh= $macrogruppoh["esito"]; 
   $dataint= $macrogruppoh["datainint"];
   $oraint= $macrogruppoh["datafinint"];
   }}
?>
<tr>
<form method="POST" action=""  enctype="multipart/form-data">
<? if($numerointervento==$numerointerventoscelto){$colorescelto="cc0000";}else {$colorescelto="000000";} ?>
        <td   style="text-align:center; color: #<? echo $colorescelto; ?>;" colspan="1" ><? echo $numerointervento; ?></td>
		<td   colspan="1" style="color: #<? echo $colorescelto; ?>;"><? echo $dataint; ?></td>
        <td   colspan="1" style="color: #<? echo $colorescelto; ?>;"><? echo $oraint; ?></td>        
        <td   colspan="1" style="color: #<? echo $colorescelto; ?>;"><? echo $luogoint; ?></td>
        <td   colspan="1" style="color: #<? echo $colorescelto; ?>;"><? echo $tecnicoint; ?></td>
        <td   colspan="1" style="color: #<? echo $colorescelto; ?>;"><? echo $esitoh; ?></td>
        <td   colspan="1" style="color: #<? echo $colorescelto; ?>;"><? echo $noteint; ?></td> 
       
        <td colspan="1" style="text-align:center;"> 
        <input type="hidden" name="ingranaggio" value="6" />
        <input type="hidden" name="ingranaggioxx" value="" />
        <input type="hidden" name="ingranaggiochiudi" value="" /> 
        <input type="hidden" name="ingranaggiochiudidef" value="" />  
        <input type="hidden" name="ingranaggioy" value="30" />
        <input type="hidden" name="codice" value="<?php echo $numero; ?>" />  
        <input type="hidden" name="numero" value="<?php echo $numero; ?>" />   
        <input type="hidden" name="login" value="<?php echo $login; ?>" />  
        <input type="hidden" name="numerointervento" value="<?php echo $numerointervento; ?>" /> 
         <input type="hidden" name="numerointerventoscelto" value="<?php echo $numerointervento; ?>" /> 
        <input type="hidden" name="numeroint" value="1" />              
        <button autofocus type="submit" class="btn btn-success" >Seleziona</button>
        </td> 
</form>
        </tr>        
       
<? }}  ?>               
</table> 
             
<br>
<hr>
<? if($numeroint==1){ ?>
<p align="center"><font face="Verdana" size="4" style="font-family: Verdana;" color="#993300">Ticket <?php echo $numero; ?> Memorizzazione dati di avvenuto Intervento Num. <? echo $numerointerventox; ?></font></b></p>   
<? 
#$datainint="";
#$datafinintx="";
$swfatto=0;
$sql = "SELECT * FROM chiusi  where    numero = '$numero' and numerointervento = '$numerointerventox' ";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
  $swfatto=1; 
  $datainintw= $macrogruppo["datainint"]; 
  $datafinint= $macrogruppo["datafinint"]; 
  $datafiint= $macrogruppo["datafiint"];                        
  $noteintervento= $macrogruppo["noteintervento"]; 
  $noteluogo= $macrogruppo["noteluogo"]; 
  $serialesost1= $macrogruppo["serialesost1"]; 
  $descr1= $macrogruppo["descr1"]; 
  $serialesost2= $macrogruppo["serialesost2"]; 
  $descr2= $macrogruppo["descr2"]; 
  $serialesost3= $macrogruppo["serialesost3"]; 
  $descr3= $macrogruppo["descr3"]; 
  $serialesost1a= $macrogruppo["serialesost1a"]; 
  $descr1a= $macrogruppo["descr1a"]; 
  $serialesost2a= $macrogruppo["serialesost2a"]; 
  $descr2a= $macrogruppo["descr2a"]; 
  $serialesost3a= $macrogruppo["serialesost3a"]; 
  $descr3a= $macrogruppo["descr3a"]; 
  $esito= $macrogruppo["esito"];
  $noteesito= $macrogruppo["noteesito"];
  $datafinintxw= $macrogruppo["datafinintx"]; 
  #$numerointerventox= $macrogruppo["numerointervento"];
  }}
  
?>
<form method="POST" action=""  enctype="multipart/form-data" name="modulo11" onSubmit="return controllo11();"> 
<table class="table-form" style="width: 90%;">
  <tr>
      <th colspan="2" class=" borted-top-table"> 
        Intervento:
      </th>
  </tr>
  <tr>
      <td colspan="1" > 
      <label style="color: #8e8b8b;">Data Inizio Intervento:</label><br>
      <input class="required"  type="text" name="datainint" id="datainint" value="<?php echo $datainintw; ?>" maxlength="50">
      <label style="color: #8e8b8b;">Data Fine Intervento:</label><br>
      <input   type="text" name="datafiint" id="datafiint" value="<?php echo $datafiint; ?>" maxlength="50">
      </td> 
      <td colspan="1"> 
      <label style="color: #8e8b8b;">Ora Inizio Intervento:</label><br>
      <input class="required"  type="text" name="datafinint"  id="datafinint" value="<?php echo $datafinint; ?>" maxlength="50"> 
      <label style="color: #8e8b8b;">Ora Fine Intervento:</label><br>
      <input class="required"  type="text" name="datafinintx"  id="datafinintx" value="<?php echo $datafinintxw; ?>" maxlength="50">  
      </td>            
  </tr>
  <tr>
      <td colspan="2"> 
      <label style="color: #8e8b8b;">Luogo intervento: </label><br>
      <textarea name="noteluogo"  cols="83" rows="1"><?php echo $noteluogo; ?></textarea>
      </td>
    </tr>
  <tr>
      <td colspan="2"> 
      <label style="color: #8e8b8b;">Descrizione intervento: </label><br>
      <textarea class="required" name="noteintervento"  cols="83" rows="1"><?php echo $noteintervento; ?></textarea>
      </td>
    </tr>
    
  <tr>
      <td colspan="1"> 
        <label style="color: #8e8b8b;">Esito Intervento:</label><br>
<!--        <input class="required" type="text" name="apparato" id="apparato" onkeyup="ricercaAutocompleteApparato()" value="<?php echo $apparato; ?>" maxlength="200" size="30" > -->
        <select class="required" size="1" name="esito" id="apparato" >
		<option <? if($esito=="Chiuso"){echo "selected";}?>>Chiuso</option>
		<option <? if($esito=="Attesa Parti"){echo "selected";}?>>Attesa Parti</option>
        <option <? if($esito=="Non Risolto"){echo "selected";}?>>Non Risolto</option>  
		</select>
      </td>
      <td colspan="1"> 
      <label style="color: #8e8b8b;">Note Esito:</label><br>
      <input class="required" type="text" name="noteesito"  value="<?php echo $noteesito; ?>" maxlength="80">  
      </td> 
  </tr>
  <? if($stato!="Chiuso") { ?>  
  <tr>
       <td colspan="1" style="text-align:center;"> 
        <input type="hidden" name="ingranaggio" value="6" />
       <input type="hidden" name="ingranaggioxx" value="" />
       <input type="hidden" name="ingranaggiochiudi" value="1" /> 
       <input type="hidden" name="ingranaggiochiudidef" value="" />  
       <input type="hidden" name="ingranaggioy" value="30" />
       <input type="hidden" name="codice" value="<?php echo $numero; ?>" />  
       <input type="hidden" name="numero" value="<?php echo $numero; ?>" />   
       <input type="hidden" name="login" value="<?php echo $login; ?>" /> 
       <input type="hidden" name="numerointervento" value="<?php echo $numerointerventox; ?>" /> 
       <input type="hidden" name="numeroint" value="1" />               
       <button autofocus type="submit" class="btn btn-success" >Memorizza Intervento</button>
       </td>
       </form>
       <form method="POST" action=""  enctype="multipart/form-data" ">
       <td colspan="1" style="text-align:center;"> 
        <input type="hidden" name="ingranaggio" value="6" />
       <input type="hidden" name="ingranaggioxx" value="" />
       <input type="hidden" name="ingranaggiochiudi" value="" />  
       <input type="hidden" name="ingranaggiochiudidef" value="1" />   
       <input type="hidden" name="ingranaggioy" value="30" />
       <input type="hidden" name="codice" value="<?php echo $numero; ?>" />  
       <input type="hidden" name="numero" value="<?php echo $numero; ?>" />   
       <input type="hidden" name="login" value="<?php echo $login; ?>" /> 
       <input type="hidden" name="dataint" value="<?php echo $dataint; ?>" /> 
       <input type="hidden" name="numeroint" value="1" />
       <input type="hidden" name="numerointervento" value="<?php echo $numerointerventox; ?>" />                
       <button autofocus type="submit" class="btn btn-success" style="background: #cc0000;border: 0px;" onclick="return confirm('Sei sicuro di volere chiudere il ticket? ')">Chiusura Ticket</button>

       </td>
       </form>
</tr>
  <? } ?>
</table>

<br>
<? 
$sql = "SELECT *  FROM  tk where  numero  = '$numero' " ;  
#  echo $sql;
  $rCount = 1;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())	
    { 
      $statoconcluso = $macrogruppo["stato"]; }}
if($statoconcluso=="Richiesta di Chiusura" or $statoconcluso == "Chiuso"){
if($swfatto==1){
?>
<center>
<hr style="width: 90%;">
</center>
<p align="center"><font face="Verdana" size="4" style="font-family: Verdana;" color="#993300">Ticket <?php echo $numero; ?> Parti Installate Intervento Num. <? echo $numerointerventox; ?></font></b></p>   

<table class="table-form" style="width: 90%;">    
 
<tr>
      <th colspan="1" class=" borted-top-table" style="width: 30%; background: #afc81b;"> 
        Seriale
      </th>
      <th colspan="1" class=" borted-top-table" style="width: 70%; background: #afc81b;"> 
        Descrizione Parte
      </th>
  </tr>  
<? 
$sql = "SELECT *  FROM  partei where  numero  = '$numero' and numerointervento = '$numerointerventox' " ;  
  #echo $sql;
  $rCount = 1;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())	
    { 
      $serialesost1w = $macrogruppo["serialesost1"];
      $descr1w = $macrogruppo["descr1"];  ?> 
<tr>
    <td>
    <span> <?php echo $serialesost1w; ?></span>      
    </td> 
    <td>
    <span> <?php echo $descr1w; ?></span>
    </td>
</tr>            
<?  }}  ?> 
</table>
<br> 
<p align="center"><font face="Verdana" size="4" style="font-family: Verdana;" color="#993300">Ticket <?php echo $numero; ?> Parti Ritirate Intervento Num. <? echo $numerointerventox; ?></font></b></p>   

<table class="table-form" style="width: 90%;">    
 
<tr>
      <th colspan="1" class=" borted-top-table" style="width: 30%; background: #afc81b;"> 
        Seriale
      </th>
      <th colspan="1" class=" borted-top-table" style="width: 70%; background: #afc81b;" > 
        Descrizione Parte
      </th>
  </tr>  
<? 
$sql = "SELECT *  FROM  parter where  numero  = '$numero' and numerointervento = '$numerointerventox' " ;  
 #echo $sql;
  $rCount = 1;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())	
    { 
      $serialesost1aw = $macrogruppo["serialesost1"];
      $descr1aw = $macrogruppo["descr1"];  ?> 
<tr>
    <td>
    <span> <?php echo $serialesost1aw; ?></span>      
    </td> 
    <td>
    <span> <?php echo $descr1aw; ?></span>
    </td>
</tr>            
<?  }}  ?> 
</table> 
<br>
<? 
#echo "con ".$statoconcluso."stat ".$stato;
if($statoconcluso != "Chiuso") { ?>
<p align="center"><font face="Verdana" size="4" style="font-family: Verdana;" color="#993300">Ticket <?php echo $numero; ?> Memorizzazione Parti Installate/Ritirate Intervento Num. <? echo $numerointerventox; ?></font></b></p>   
 
 <form action="" method="post"  name="modulopartei" onSubmit="return controllopartei();">
<table class="table-form" style="width: 90%;">    
<tr>
      <th colspan="2" class=" borted-top-table"> 
        Parti installate:
      </th>
  </tr>
    <tr>
      <td colspan="1" > 
      <label style="color: #8e8b8b;">Seriale 1:</label><br>
      <input type="text" name="serialesost1"  value="<?php echo $serialesost1; ?>" maxlength="30">
      </td> 
      <td colspan="1"> 
      <label style="color: #8e8b8b;">Descrizione Parte 1:</label><br>
      <input type="text" name="descr1"  value="<?php echo $descr1; ?>" maxlength="80">  
      </td>            
  </tr>
   <tr>
       <td colspan="2" style="text-align:center;"> 
        <input type="hidden" name="ingranaggio" value="6" />
       <input type="hidden" name="ingranaggioxx" value="" />
       <input type="hidden" name="ingranaggiochiudi" value="" /> 
       <input type="hidden" name="memorizzapartei" value="1" />   
       <input type="hidden" name="ingranaggioy" value="30" />
       <input type="hidden" name="codice" value="<?php echo $numero; ?>" />  
       <input type="hidden" name="numero" value="<?php echo $numero; ?>" />   
       <input type="hidden" name="login" value="<?php echo $login; ?>" /> 
      
       <input type="hidden" name="numerointervento" value="<?php echo $numerointerventox; ?>" /> 
       <input type="hidden" name="numeroint" value="1" />                
       <button autofocus type="submit" class="btn btn-success" >Memorizza Parte Installata</button>

       </td>
       </tr>
</form>  
</table>
<form method="POST" action=""  enctype="multipart/form-data" name="modulor" onSubmit="return controllor();"> 
<table class="table-form" style="width: 90%;">  
  <tr>
      <th colspan="2" class=" borted-top-table"> 
        Parti Ritirate:
      </th>
  </tr>
    <tr>
      <td colspan="1" > 
      <label style="color: #8e8b8b;">Seriale 1:</label><br>
      <input type="text" name="serialesost1a"  value="<?php echo $serialesost1a; ?>" maxlength="30">
      </td> 
      <td colspan="1"> 
      <label style="color: #8e8b8b;">Descrizione Parte 1:</label><br>
      <input type="text" name="descr1a"  value="<?php echo $descr1a; ?>" maxlength="80">  
      </td>            
  </tr>
   <tr>
       <td colspan="2" style="text-align:center;"> 
        <input type="hidden" name="ingranaggio" value="6" />
       <input type="hidden" name="ingranaggioxx" value="" />
       <input type="hidden" name="ingranaggiochiudi" value="" /> 
       <input type="hidden" name="memorizzaparter" value="1" />   
       <input type="hidden" name="ingranaggioy" value="30" />
       <input type="hidden" name="codice" value="<?php echo $numero; ?>" />  
       <input type="hidden" name="numero" value="<?php echo $numero; ?>" />   
       <input type="hidden" name="login" value="<?php echo $login; ?>" />  
        
       <input type="hidden" name="numerointervento" value="<?php echo $numerointerventox; ?>" /> 
       <input type="hidden" name="numeroint" value="1" />                              
       <button autofocus type="submit" class="btn btn-success" >Memorizza Parte Ritirata</button>

       </td>
       </tr>
</form>  
</table> 
<? } }?>


<? } }?>
<center>
<hr style="width: 90%;">
</center>
<p align="center"><font face="Verdana" size="4" style="font-family: Verdana;" color="#993300">Ticket <?php echo $numero; ?> Lista Documenti Caricati </font></b></p>   

<table class="table-form" style="width: 90%;">        
        <tr>
		<th colspan="1" class=" borted-top-table" width="10%"> 
        Data Doc.
        </th>
        <th colspan="1" class=" borted-top-table" width="10%"> 
        Scad. Doc.
        </th>
        <th colspan="1" class=" borted-top-table" width="70%"> 
        Oggetto
        </th>
        <th colspan="2" class=" borted-top-table" width="10%" style="text-align:center;"> 
        Operazioni
        </th>
        </tr> 
        
<?
$sql = "SELECT * FROM documenti  where    tipodoc = '$numero'";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
   $prgr = $macrogruppo["progr"];
   $data = $macrogruppo["datadoc"];
   $datasca = $macrogruppo["datasca"];
   $tipodoc = $macrogruppo["tipodoc"];
   $oggettox= $macrogruppo["oggetto"];
   $file = $macrogruppo["file"];
#echo $prgr;
?>
<tr>
<tr onMouseOver="style.background='#c9cacb';" onMouseOut="style.background=''">

    
		<td  style="color: <?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>;"><? echo $data; ?></td>
        <td  style="color: <?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>;"><? echo $datasca; ?></td>
        
        <td  style="color: <?php if($prgr==$prgry){echo "#cc0000";}else{echo "#000000";} ?>;"><? echo $oggettox; ?></td>
		<td style="text-align:center;">
        <a href="?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&codice=<?php echo $numero; ?>&prgrx=<? echo $prgr; ?>&ingranaggioy=30&ingranaggiovedi=201&prgry=<?php echo $prgr; ?>" >
        <button type="button" class="btn btn-success" ><i class="fa-solid fa-plus"></i></button></a>
        </td>
        <td style="text-align:center;" >
<!--        <a  onclick="myFunction('?fileh=<?php echo $file; ?>&login=<?php echo $login; ?>&prgrx=<? echo $prgr; ?>&ingranaggio=10&ingranaggiott=202&oggetto=<?php echo $oggettox; ?>&progr=<?php echo $progr; ?>');" ><img border="0" background="btn1.gif" src="x1.png" width="15" height="15"></a>   -->
        <a href="?fileh=<?php echo $file; ?>&ingranaggiocancelladoc=1&login=<?php echo $login; ?>&codice=<?php echo $numero; ?>&prgrx=<? echo $prgr; ?>&ingranaggioy=30&prgry=<?php echo $prgr; ?>&progr=<?php echo $progr; ?>" >
        <button type="button" class="btn btn-success" onclick="return confirm('Sei sicuro di volere cancellare?')"><i class="fa-solid fa-minus"></i></button></a>

</td>

     
        </tr>        
        
<? }} ?>        
        
        
             
<?php if($ingranaggiovedi==201){ ?>

    <tr>
    <td colspan="5" align="center" ><br>
<div>
<iframe align="center" frameborder="0" width="100%" height="800" scrolling="yes" src="esponipdfffxx.php?login=<?php echo $login; ?>&fl=<?php echo $fileh; ?>"></iframe> 
</div>    
    </td>
    </tr>
<?php } 

?>   
	</table> 
</td>
</tr>
</table>              
            <br>
<? } else { ?>
<br>
<center>
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Impossibile chiudere il Ticket <?php echo $numero; ?> prima di essere assegnato ad una T.P.</font></b></p>
</center>
<? } } ?>

<!-- #####################################  Cambio Stato  #########################  -->
<? if($ingranaggioy==60){
?>



<? include "esponiverticale.php"; ?>


<form method="POST" action=""  enctype="multipart/form-data" name="modulo11" onSubmit="return controllo11();"> 
<table class="table-form" style="width: 90%;">
  <tr>
      <th colspan="2" class=" borted-top-table" style="background: #afc81b;"> 
        Modifica Stato:
      </th>
  </tr>
  <tr>
      <td colspan="1" width="50%"> 
      <label style="color: #000000; font-size: 16px;">Scelta Nuovo Stato:</label><br>
      </td> 
      <td colspan="1"> 
      <select
                name="statonuovo"
                id="statonuovo"
                class="required"
              >
                <option>Aperto</option>
                <option>Assegnato</option>
                <option>Pianificato</option>
                <option>Richiesta di Chiusura</option>
                <option>Chiuso</option>
                <option>Sospeso</option>
              </select>  
      </td>            
  </tr>
<tr>
       <td colspan="2" style="text-align:center;"> 
        <input type="hidden" name="ingranaggio" value="6" />
       <input type="hidden" name="ingranaggioxx" value="" />
       <input type="hidden" name="ingranaggiochiudi" value="" /> 
       <input type="hidden" name="ingranaggiostato" value="1" />
       <input type="hidden" name="ingranaggiochiudidef" value="" />  
       <input type="hidden" name="ingranaggioy" value="60" />
       <input type="hidden" name="codice" value="<?php echo $numero; ?>" />  
       <input type="hidden" name="numero" value="<?php echo $numero; ?>" />   
       <input type="hidden" name="login" value="<?php echo $login; ?>" /> 
       <input type="hidden" name="numerointervento" value="<?php echo $numerointerventox; ?>" /> 
       <input type="hidden" name="numeroint" value="1" />               
       <button autofocus type="submit" class="btn btn-success" >Cambia Stato</button>
       </td>
       </form>
</tr>
</table>





<?
}

#####################################  storia  #########################  
if($ingranaggioy==70){
include "esponiverticale.php"; ?>
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Storia Ticket <?php echo $numero; ?> </font></b></p>

<table class="table-form" style="width: 90%;">
  <tr>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;" >Progr. </th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Data</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Azione</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Chi</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Mittente</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Destinatario</th>
      <th align="center" colspan="1" class=" borted-top-table" style="background: #afc81b;">Note</th>
  </tr>
<?php

$sql1 = "SELECT * FROM storia  where ticket = '$numero' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ 
        $progr = $macrogruppo["progr"];	
        $dataazione = $macrogruppo["dataazione"];
        $tipo = $macrogruppo["tipo"];
        #echo "data ".$dataassegno;
         $chi = $macrogruppo["chi"];
         $mittente = $macrogruppo["mittente"];
         $destinatario = $macrogruppo["destinatario"];
         $note = $macrogruppo["note"];
       
?>         
<tr>
    <td colspan="1"> 
      <span ><?php echo $progr ; ?></span>
    </td>

    <td colspan="1" >     
      <span ><?php echo $dataazione; ?></span>
    </td>
    
    <td colspan="1" > 
      <span ><?php echo $tipo; ?></span>
    </td>
    
    <td colspan="1"> 
      <span ><?php echo $chi; ?></span>
    </td>
    
    <td colspan="1"> 
      <span ><?php echo $mittente; ?></span>
    </td>
    
    <td colspan="1"> 
      <span ><?php echo $destinatario; ?></span>
    </td>
    
    <td colspan="1"> 
      <span ><?php echo $note; ?></span>
    </td>
    
    
</tr>
<? } } ?>
</table>
<br>
<?
}
###################################### fine storia ####################################


#####################################  contabile  #########################  
if($ingranaggioy==80){
include "esponiverticale.php";
$importoattivo=0;
$importopassivo=0;
$prima=0;
?>
<p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Scheda contabileTicket <?php echo $numero; ?> </font></b></p>
<table class="table-form" style="width: 90%;">
<tr>
<td style="width: 50%;" valign="top">
<? 
$sql = "SELECT *  FROM  tk where  numero  = '$numero' " ;  
#  echo $sql;
  $rCount = 1;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())	
    { 
      $progrxxy = $macrogruppo["progr"];
      $numeroxx = $macrogruppo["numero"];

      $clientexx = $macrogruppo["cliente"];
      $commessaxx = $macrogruppo["commessa"];
      $attivita = $macrogruppo["attivita"];

      $tipointervento = $macrogruppo["tipointervento"];
      }}
#echo $clientexx." ".$commessaxx." ".$tipointervento; exit;      
$sql = "SELECT *  FROM  tipointervento  where commessa = '$commessaxx' and cliente = '$clientexx' and tipointervento1 = '$tipointervento'";  
#echo $sql;  

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{
$progr= $macrogruppo["progr"];         
#$tipointervento= $macrogruppo["tipointervento"];        
$tipointervento1= $macrogruppo["tipointervento1"];
#echo $tipointervento1;
$materiale1= $macrogruppo["materiale1"];
$noteatt1= $macrogruppo["noteatt1"];
$tipofatta1= $macrogruppo["tipofatta1"];
$periodofatta1= $macrogruppo["periodofatta1"];
$caricoa1= $macrogruppo["caricoa1"];
$importoa1= $macrogruppo["importoa1"];
$giorno1= $macrogruppo["giorno1"];
$ora1= $macrogruppo["ora1"];
$numgiore1= $macrogruppo["numgiore1"];
$feriali1= $macrogruppo["feriali1"];
$daorafer1= $macrogruppo["daorafer1"];
$arafer1= $macrogruppo["arafer1"];
$sabato1= $macrogruppo["sabato1"];
$daorasab1= $macrogruppo["daorasab1"];
$arasab1= $macrogruppo["arasab1"];
$festivi1= $macrogruppo["festivi1"];
$daorafes1= $macrogruppo["daorafes1"];
$arafes1= $macrogruppo["arafes1"];
$numgior= $macrogruppo["numgior"];
$importogior= $macrogruppo["importogior"];
$importoa1= $macrogruppo["importoa1"];
$canone1= $macrogruppo["canone1"];
$d30= $macrogruppo["da1a301"];
$d60= $macrogruppo["da31a601"];
$d90= $macrogruppo["da61a901"];
$d120= $macrogruppo["da91a1201"];
$d150= $macrogruppo["da121a1501"];
$d180= $macrogruppo["da151a1801"];
$d210= $macrogruppo["da181a2101"];
$d240= $macrogruppo["da211a2401"];
#echo "req ".$da211a2401;
$d270= $macrogruppo["da241a2701"];
$d300= $macrogruppo["da271a3001"];
$d330= $macrogruppo["da301a3301"];
$d360= $macrogruppo["da331a3601"];
$d390= $macrogruppo["da361a3901"];
$d420= $macrogruppo["da391a4201"];
$d450= $macrogruppo["da421a4501"];
$d480= $macrogruppo["da451a4801"];
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
 
$sql = "SELECT *  FROM  chiusi  where numero = '$numero'  order by numerointervento";  
#echo $sql;  

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{
$progr= $macrogruppo["progr"];         
#$tipointervento= $macrogruppo["tipointervento"];        
#$tipointervento1= $macrogruppo["tipointervento1"];
$numerointervento = $macrogruppo["numerointervento"];
if($numerointervento==1){$datainizioint = $macrogruppo["datainint"];}
#echo $datainizioint;
$orainizioint = $macrogruppo["datafinint"];
$datafineint = $macrogruppo["datafiint"];
$orafineint = $macrogruppo["datafinintx"];





if (strlen($orainizioint) == 2) {$orainizioint= $orainizioint.":00:00";}
if (strlen($orafineint) == 2) {$orafineint= $orafineint.":00:00";}

if (strlen($orainizioint) == 5) {$orainizioint= $orainizioint.":00";}
if (strlen($orafineint) == 5) {$orafineint= $orafineint.":00";}

$orainizioint=str_replace(',', ':', $orainizioint);
$orafineint=str_replace(',', ':', $orafineint);
if ($orainizioint==""){$orainizioint="00:00:00";}
if ($orafineint==""){$orafineint="00:00:00";}
#echo $prima;

$datainiziointx=$datainizioint." ".$orainizioint; $prima=1; 
#echo $datainiziointx." ".$prima."<br>";
$datafineintx=$datafineint." ".$orafineint;

if($tipofatta1=="a intervento"){$importo=$importoa1;}
if($tipofatta1=="canone"){$importo=0;}


$to_time = strtotime($orainizioint);
$from_time = strtotime($orafineint);
$temporr = round(abs($to_time - $from_time) / 60,2);
$tempo=$tempo+$temporr;
#echo $tempo." ";
}}
if($tipofatta1=="orario"){
$importo=0;
if($tempo >= 0 and $tempo <= 60){$importo=$importo+$d30;}
if($tempo >= 61 and $tempo <= 90){$importo=$importo+$d60+$d30;}
if($tempo >= 91 and $tempo <= 150){$importo=$importo+$d90+$d60+$d30;}

if($tempo >= 151 and $tempo <= 180){$importo=$importo+$d120+$d90+$d60+$d30;}
if($tempo >= 181 and $tempo <= 210){$importo=$importo+$d150+$d120+$d90+$d60+$d30;}
if($tempo >= 211 and $tempo <= 240){$importo=$importo+$d180+$d150+$d120+$d90+$d60+$d30;}
if($tempo >= 241 and $tempo <= 270){$importo=$importo+$d210+$d180+$d150+$d120+$d90+$d60+$d30;}
if($tempo >= 271 and $tempo <= 300){$importo=$importo+$d240+$d210+$d180+$d150+$d120+$d90+$d60+$d30;}
if($tempo >= 301 and $tempo <= 330){$importo=$importo+$d270+$d240+$d210+$d180+$d150+$d120+$d90+$d60+$d30;}
if($tempo >= 331 and $tempo <= 360){$importo=$importo+$d300+$d270+$d240+$d210+$d180+$d150+$d120+$d90+$d60+$d30;}
if($tempo >= 361 and $tempo <= 390){$importo=$importo+$d330+$d300+$d270+$d240+$d210+$d180+$d150+$d120+$d90+$d60+$d30;}
if($tempo >= 391 and $tempo <= 420){$importo=$importo+$d360+$d330+$d300+$d270+$d240+$d210+$d180+$d150+$d120+$d90+$d60+$d30;}
if($tempo >= 421 and $tempo <= 450){$importo=$importo+$d390+$d360+$d330+$d300+$d270+$d240+$d210+$d180+$d150+$d120+$d90+$d60+$d30;}
if($tempo >= 451 and $tempo <= 480){$importo=$importo+$d420+$d390+$d360+$d330+$d300+$d270+$d240+$d210+$d180+$d150+$d120+$d90+$d60+$d30;}
if($tempo >= 481 and $tempo <= 510){$importo=$importo+$d450+$d420+$d390+$d360+$d330+$d300+$d270+$d240+$d210+$d180+$d150+$d120+$d90+$d60+$d30;}
/*
if($tempo >= 511){$importo=$importo+$d480+$d450+$d420+$d390+$d360+$d330+$d300+$d270+$d240+$d210+$d180+$d150+$d120+$d90+$d60+$d30;}
*/
}
#echo("The difference in minutes is: $minutes minutes.");
if ($impoex==""){$impoex=0;}
?>

<!-- <p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Intervento numero <?php echo $numerointervento; ?> </font></b></p>  -->
<?
$importoparziale=$importo+$impoex;

#################################### ricalcolo  ######################
if($ingranaggiocontmodatxx==1){
$sql = "
DELETE from contabile where commessa = '$commessaxx' and cliente = '$clientexx' and tipointervento = '$tipointervento' and cat = 'no' and numerointervento = '$numerointervento' and ticket = '$numero' ";
#echo $sql;
if ($conn->query($sql) === FALSE)
  {echo "errxx=errore";exit;}
  else
  {}
 
}

################################### fine ricalcolo  ###################
if($tempo==""){$tempo=0; }
if($numerointervento==""){$numerointervento=1; }
$sinoce=0;
$sqlx = "SELECT *  FROM  contabile where 
commessa = '$commessaxx' and 
cliente = '$clientexx' and 
tipointervento = '$tipointervento' and 
cat = 'no' and numerointervento = '$numerointervento' and 
ticket = '$numero' " ; 
#echo $sql;
$rCount = 1;
$resultx = $conn->query($sqlx);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc())	
	{   
     $progrcli = $macrogruppox["progr"];
     $clientecli = $macrogruppox["cliente"]; 
     $commessacli = $macrogruppox["commessa"];
     $tipointerventocli = $macrogruppox["tipointervento"];
     $catcli = $macrogruppox["cat"];
     $ticketcli = $macrogruppox["ticket"];
     $numerointervento = $macrogruppox["numerointervento"];
     $tipofatturazionecli = $macrogruppox["tipofatturazione"];
     $importocalcolatocli = $macrogruppox["importocalcolato"];
     $importoextracli = $macrogruppox["importoextra"];
     $minuti = $macrogruppox["minuti"];
     $note = $macrogruppox["note"];
     $iniziocli = $macrogruppox["inizio"];
     $finecli = $macrogruppox["fine"];
     $autorizzatocli = $macrogruppox["autorizzato"];
     $fatturatocli = $macrogruppox["fatturato"];
     $totalecli = $macrogruppox["totale"];
     $sinoce=1;
     }} 
if($sinoce==0){
if($importo==""){$importo=0;}
$sql = "INSERT INTO contabile
( 
  cliente,             
  commessa,
  tipointervento,                       
  cat,
  ticket,
  numerointervento,
  tipofatturazione,
  importocalcolato,
  importoextra,
  minuti,
  note,
  inizio,
  fine,
  autorizzato,
  fatturato,
  totale
  ) 
VALUES (   
     '$clientexx',  
     '$commessaxx',   
     '$tipointervento', 
     'NO',  
     '$numero', 
     '$numerointervento', 
     '$tipofatta1', 
     '$importo', 
     '$impoex', 
     '$tempo', 
     '', 
     '$datainiziointx', 
     '$datafineintx', 
     '$autorizzatox', 
     '$fatturatox', 
     '$importoparziale'  
              )";
  #echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {
        $dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$ticketcli',
        '$dataoggi',
        'Memorizzato contabile attivo',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
         } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; }

}    
$sqlx = "SELECT *  FROM  contabile where 
commessa = '$commessaxx' and 
cliente = '$clientexx' and 
tipointervento = '$tipointervento' and 
cat = 'no' and numerointervento = '$numerointervento' and 
ticket = '$numero' " ;  
#echo $sqlx;
$rCount = 1;
$resultx = $conn->query($sqlx);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc())	
	{   
     $progrcli = $macrogruppox["progr"];
     $clientecli = $macrogruppox["cliente"]; 
     $commessacli = $macrogruppox["commessa"];
     $tipointerventocli = $macrogruppox["tipointervento"];
     $catcli = $macrogruppox["cat"];
     $ticketcli = $macrogruppox["ticket"];
     $numerointervento = $macrogruppox["numerointervento"];
     $tipofatturazionecli = $macrogruppox["tipofatturazione"];
     $importocalcolatocli = $macrogruppox["importocalcolato"];
     $importoextracli = $macrogruppox["importoextra"];
     $minuti = $macrogruppox["minuti"];
     $note = $macrogruppox["note"];
     $iniziocli = $macrogruppox["inizio"];
     $finecli = $macrogruppox["fine"];
     $autorizzatocli = $macrogruppox["autorizzato"];
     $fatturatocli = $macrogruppox["fatturato"];
     $totalecli = $macrogruppox["totale"];
     }} 
?>
<form method="POST" action=""  enctype="multipart/form-data" name="modulo11" onSubmit="return controllo11();"> 

<table class="table-form" style="width: 90%;" >
  <tr>
      <th colspan="2" class=" borted-top-table"> 
        Intervento Attivo <? echo " - ".$clientexx." ".$ragsocclixx." commessa ".$commessaxx; ?>
      </th>
  </tr>
  <tr>
      <td colspan="1" > 
      <label style="color: #8e8b8b;">Tipo Fatturazione:</label>
      <br><font size="3" face="Verdana" ><?php echo $tipofatturazionecli; ?></font>  
      </td>
      <td colspan="1">
      <label style="color: #8e8b8b;">Importo Calcolato:</label>
      <input   type="text" name="importocal" id="importocal" value="<?php echo $importocalcolatocli; ?>" >
      </td> 
      </tr>
      <tr>
      <td colspan="1" valign="top"> 
      <label style="color: #8e8b8b;">Importo Extra:</label>
      <input   type="text" name="impoex"  id="impoex" value="<?php echo $importoextracli; ?>" maxlength="50"> 
      </td>
      <td>
      <label style="color: #8e8b8b;">Durata Intervento minuti:</label>
      <input   type="text" name="tempo" id="tempo" value="<?php echo $minuti; ?>" maxlength="50">
      </td>
      </tr> 
      <tr>
      <td colspan="2" > 
      <label style="color: #8e8b8b;">Note:</label>
      <textarea  name="notecli"  id="notecli"  rows="2"><?php echo $note; ?></textarea>
      </td>
      </tr>
      <tr>
      <td colspan="1" valign="top"> 
      <label style="color: #8e8b8b;">Inizio Intervento:</label>
      <input   type="text" name="datainizioint"  id="datainizioint" value="<?php echo $iniziocli; ?>" maxlength="50"> 
      </td>
      <td>
      <label style="color: #8e8b8b;">Fine Intervento:</label>
      <input   type="text" name="datafineint" id="datafineint" value="<?php echo $finecli; ?>" maxlength="50">
      </td>
      </tr> 
      <tr>
      <td colspan="1" valign="top"> 
      <label style="color: #8e8b8b;">Autorizzato:</label>
      <input style="width: 20px;  height: 20px;" type="checkbox" <?php if($autorizzatocli=="on"){echo "checked";} ?>  name="autorizzatox" size="1" maxlength="">
      </td>
      <td>
      <label style="color: #8e8b8b;">Fatturato:</label>
      <input style="width: 20px;  height: 20px;" type="checkbox" <?php if($fatturatocli=="on"){echo "checked";} ?>  name="fatturatox" size="1" maxlength="">           
      </td>
  </tr>
  <?  $totale=$importocalcolatocli+$importoextracli; ?>
      <th colspan="2" class=" borted-top-table" style="background: #afc81b;"> 
        Importo Attivo Ticket: 
         <? echo $totale; ?> 
      </th> 
<? if($autorizzatocli!="on"){ ?>      
      <tr>  
      <td colspan="1" style="text-align:center;"> 
      <input type="hidden" name="ingranaggio" value="6" />
       <input type="hidden" name="ingranaggioxx" value="" />
       <input type="hidden" name="ingranaggiochiudi" value="" /> 
       <input type="hidden" name="ingranaggiostato" value="" />
       <input type="hidden" name="ingranaggiocontabile" value="1" />
       <input type="hidden" name="ingranaggiocontmodat" value="1" />  
       <input type="hidden" name="ingranaggioy" value="80" />
       <input type="hidden" name="codice" value="<?php echo $numero; ?>" />  
       <input type="hidden" name="numero" value="<?php echo $numero; ?>" />   
       <input type="hidden" name="login" value="<?php echo $login; ?>" /> 
       <input type="hidden" name="numerointervento" value="<?php echo $numerointerventox; ?>" /> 
       
       <input type="hidden" name="numerointervento" value="<?php echo $numerointervento; ?>" /> 
       <input type="hidden" name="commessaxx" value="<?php echo $commessaxx; ?>" /> 
       <input type="hidden" name="clientexx" value="<?php echo $clientexx; ?>" /> 
       <input type="hidden" name="tipointervento" value="<?php echo $tipointervento; ?>" /> 
       <input type="hidden" name="totale" value="<?php echo $totale; ?>" /> 
       <input type="hidden" name="numeroint" value="1" />               
       <button autofocus type="submit" class="btn btn-success" >Cambia Importi</button> 
      </td> 
      </form>
      <form method="POST" action=""  enctype="multipart/form-data" name="modulo11" onSubmit="return controllo11();">
      <td colspan="1" style="text-align:center;"> 
      <input type="hidden" name="ingranaggio" value="6" />
       <input type="hidden" name="ingranaggioxx" value="" />
       <input type="hidden" name="ingranaggiochiudi" value="" /> 
       <input type="hidden" name="ingranaggiostato" value="" />
       <input type="hidden" name="ingranaggiocontabile" value="1" />
       <input type="hidden" name="ingranaggiocontmodatxx" value="1" />  
       <input type="hidden" name="ingranaggioy" value="80" />
       <input type="hidden" name="codice" value="<?php echo $numero; ?>" />  
       <input type="hidden" name="numero" value="<?php echo $numero; ?>" />   
       <input type="hidden" name="login" value="<?php echo $login; ?>" /> 
       <input type="hidden" name="numerointervento" value="<?php echo $numerointerventox; ?>" /> 
       
       <input type="hidden" name="numerointervento" value="<?php echo $numerointervento; ?>" /> 
       <input type="hidden" name="commessaxx" value="<?php echo $commessaxx; ?>" /> 
       <input type="hidden" name="clientexx" value="<?php echo $clientexx; ?>" /> 
       <input type="hidden" name="tipointervento" value="<?php echo $tipointervento; ?>" /> 
       <input type="hidden" name="totale" value="<?php echo $totale; ?>" /> 
       <input type="hidden" name="numeroint" value="1" />                            
       <button autofocus type="submit" class="btn btn-success" >Ricalcola</button> 
      </td>                                               
  </tr>
  </form>
  <? } ?>
  <tr>
  <td>
  <br>
  </td>
  </tr>
</table>

<?
#$importoattivo=$importoattivo+$importo+$impoex;

#echo  $importoattivo;
?>
</td>
<td style="width: 50%;" valign="top">
<? #echo $tipointervento;

#################################### calcolo contabile passivo  #################################

$sql = "SELECT *  FROM  chiusi  where numero = '$numero'";  
#echo $sql;  

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{
$progr= $macrogruppo["progr"];         
#$tipointervento= $macrogruppo["tipointervento"];        
#$tipointervento1= $macrogruppo["tipointervento1"];
$numerointervento = $macrogruppo["numerointervento"];
$datainiziointcat = $macrogruppo["datainint"];
$orainiziointcat = $macrogruppo["datafinint"];
#echo  " ".$orainiziointcat." ";
$datafineintcat = $macrogruppo["datafiint"];
$orafineintcat = $macrogruppo["datafinintx"];

$sql1yy = "SELECT * FROM assegnato  where numero = '$numero' and ko = 'ok'";
#echo $sql1; 
$resultyy = $conn->query($sql1yy);
if ($result->num_rows > 0) {
  while($macrogruppoyy = $resultyy->fetch_assoc())
		{ $ragsoc = $macrogruppoyy["ragsoc"];
          $comodo=explode(" - ",$ragsoc);
          $catcat=$comodo[0];	
        } }
$sql1v = "SELECT * FROM cat  where codice = '$catcat' ";
#echo $sql1v; 
$resultv = $conn->query($sql1v);
if ($resultv->num_rows > 0) {
   while($macrogruppov = $resultv->fetch_assoc())
		{
         $codiceww = $macrogruppov["codice"];
         $ragsocvcat = $macrogruppov["ragsoc"];
         }}        
$sqltt = "SELECT *  FROM  tipointerventopas  where commessa = '$commessaxx' and cliente = '$clientexx' and tipointervento = '$tipointervento' and cat = '$catcat'";  
#echo $sqltt;  

$resulttt = $conn->query($sqltt);
if ($resulttt->num_rows > 0) {
  while($macrogruppott = $resulttt->fetch_assoc())
		{
$progrcat= $macrogruppott["progr"];         
$tipointerventocat= $macrogruppott["tipointervento"];        
#echo $tipointervento1;
$tipofatta1cat= $macrogruppott["tipofatta1"];

$periodofatta1cat= $macrogruppott["periodofatta1"];
$caricoa1cat= $macrogruppott["caricoa1"];
$importoa1cat= $macrogruppott["importoa1"];
$giorno1cat= $macrogruppott["giorno1"];
$ora1= $macrogruppott["ora1"];
$numgiore1cat= $macrogruppott["numgiore1"];
$feriali1cat= $macrogruppott["feriali1"];
$daorafer1cat= $macrogruppott["daorafer1"];
$arafer1cat= $macrogruppott["arafer1"];
$sabato1cat= $macrogruppott["sabato1"];
$daorasab1cat= $macrogruppott["daorasab1"];
$arasab1cat= $macrogruppott["arasab1"];
$festivi1cat= $macrogruppott["festivi1"];
$daorafes1cat= $macrogruppott["daorafes1"];
$arafes1cat= $macrogruppott["arafes1"];
$numgiorcat= $macrogruppott["numgior"];
$importogiorcat= $macrogruppott["importogior"];
$importoa1cat= $macrogruppott["importoa1"];
$canone1cat= $macrogruppott["canone1"];
$d30cat= $macrogruppott["da1a301"];
$d60cat= $macrogruppott["da31a601"];

$d90cat= $macrogruppott["da61a901"];
#echo $d90cat."<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; exit;
$d120cat= $macrogruppott["da91a1201"];
$d150cat= $macrogruppott["da121a1501"];
$d180cat= $macrogruppott["da151a1801"];
$d210cat= $macrogruppott["da181a2101"];
$d240cat= $macrogruppott["da211a2401"];
#echo "req ".$da211a2401;
$d270cat= $macrogruppott["da241a2701"];
$d300cat= $macrogruppott["da271a3001"];
$d330cat= $macrogruppott["da301a3301"];
$d360cat= $macrogruppott["da331a3601"];
$d390cat= $macrogruppott["da361a3901"];
$d420cat= $macrogruppott["da391a4201"];
$d450cat= $macrogruppott["da421a4501"];
$d480cat= $macrogruppott["da451a4801"];
}}

if (strlen($orainiziointcat) == 2) {$orainiziointcat= $orainiziointcat.":00:00";}
#echo "-".$orainiziointcat."-";
if (strlen($orafineintcat) == 2) {$orafineintcat= $orafineintcat.":00:00";}

if (strlen($orainiziointcat) == 5) {$orainiziointcat= $orainiziointcat.":00";}
#echo "-".$orainiziointcat."-";
if (strlen($orafineintcat) == 5) {$orafineintcat= $orafineintcat.":00";}

$orainiziointcat=str_replace(',', ':', $orainiziointcat);
$orafineintcat=str_replace(',', ':', $orafineintcat);
if ($orainiziointcat==""){$orainiziointcat="00:00:00";}
#echo "-".$orainiziointcat."-";
if ($orafineintcat==""){$orafineintcat="00:00:00";}
#echo "-".$orainiziointcat."-";
$datainiziointx=$datainiziointcat." ".$orainiziointcat;
$datafineintx=$datafineintcat." ".$orafineintcat;
#echo  $datainiziointx." ".$datafineintx;
if($tipofatta1cat=="a intervento"){$importo=$importoa1cat;}
if($tipofatta1cat=="canone"){$importo=0;}


$to_time = strtotime($orainiziointcat);
$from_time = strtotime($orafineintcat);
$tempo = round(abs($to_time - $from_time) / 60,2);
#echo "tempo ".$tempo; exit;
$importo=$importoa1cat;
if($tipofatta1cat=="orario"){
#echo "passo";
$importo=0;
if($tempo >= 0 and $tempo <= 60){$importo=$importo+$d30cat;}
if($tempo >= 61 and $tempo <= 90){$importo=$importo+$d60cat+$d30cat;}
if($tempo >= 91 and $tempo <= 150){$importo=$importo+$d90cat+$d60cat+$d30cat;}

if($tempo >= 151 and $tempo <= 180){$importo=$importo+$d120cat+$d90cat+$d60cat+$d30cat;}
if($tempo >= 181 and $tempo <= 210){$importo=$importo+$d150cat+$d120cat+$d90cat+$d60cat+$d30cat;}
if($tempo >= 211 and $tempo <= 240){$importo=$importo+$d180cat+$d150cat+$d120cat+$d90cat+$d60cat+$d30cat;}
if($tempo >= 241 and $tempo <= 270){$importo=$importo+$d210cat+$d180cat+$d150cat+$d120cat+$d90cat+$d60cat+$d30cat;}
if($tempo >= 271 and $tempo <= 300){$importo=$importo+$d240cat+$d210cat+$d180cat+$d150cat+$d120cat+$d90cat+$d60cat+$d30cat;}
if($tempo >= 301 and $tempo <= 330){$importo=$importo+$d270cat+$d240cat+$d210cat+$d180cat+$d150cat+$d120cat+$d90cat+$d60cat+$d30cat;}
if($tempo >= 331 and $tempo <= 360){$importo=$importo+$d300cat+$d270cat+$d240cat+$d210cat+$d180cat+$d150cat+$d120cat+$d90cat+$d60cat+$d30cat;}
if($tempo >= 361 and $tempo <= 390){$importo=$importo+$d330cat+$d300cat+$d270cat+$d240cat+$d210cat+$d180cat+$d150cat+$d120cat+$d90cat+$d60cat+$d30cat;}
if($tempo >= 391 and $tempo <= 420){$importo=$importo+$d360cat+$d330cat+$d300cat+$d270cat+$d240cat+$d210cat+$d180cat+$d150cat+$d120cat+$d90cat+$d60cat+$d30cat;}
if($tempo >= 421 and $tempo <= 450){$importo=$importo+$d390cat+$d360cat+$d330cat+$d300cat+$d270cat+$d240cat+$d210cat+$d180cat+$d150cat+$d120cat+$d90cat+$d60cat+$d30cat;}
if($tempo >= 451 and $tempo <= 480){$importo=$importo+$d420cat+$d390cat+$d360cat+$d330cat+$d300cat+$d270cat+$d240cat+$d210cat+$d180cat+$d150cat+$d120cat+$d90cat+$d60cat+$d30cat;}
if($tempo >= 481 and $tempo <= 510){$importo=$importo+$d450cat+$d420cat+$d390cat+$d360cat+$d330cat+$d300cat+$d270cat+$d240cat+$d210cat+$d180cat+$d150cat+$d120cat+$d90cat+$d60cat+$d30cat;}
#echo $importo."<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; exit;  
  /*
if($tempo >= 511){$importo=$importo+$d480+$d450+$d420+$d390+$d360+$d330+$d300+$d270+$d240+$d210+$d180+$d150+$d120+$d90+$d60+$d30;}
*/
}
if($ingranaggiocontmodatxxy==1){
$sql = "
DELETE from contabile where commessa = '$commessaxx' and cliente = '$clientexx' and tipointervento = '$tipointervento' and cat = '$catcat' and numerointervento = '$numerointervento' and ticket = '$numero' ";
#echo $sql;
if ($conn->query($sql) === FALSE)
  {echo "errxx=errore";exit;}
  else
  {}
 
}
#echo $importo."<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; exit; 
#echo("The difference in minutes is: $minutes minutes.");
if ($impoexx==""){$impoexx=0;}
$sinoce=0;
$sqlx = "SELECT *  FROM  contabile where commessa = '$commessaxx' and cliente = '$clientexx' and tipointervento = '$tipointervento'  and numerointervento = '$numerointervento' and cat = '$catcat' and ticket = '$numero'" ;  
#echo $sqlx; exit;
$rCount = 1;
$resultx = $conn->query($sqlx);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc())	
	{   
     $progrcat = $macrogruppox["progr"];
     $clientecat = $macrogruppox["cliente"]; 
     $commessacat = $macrogruppox["commessa"];
     $tipointerventocat = $macrogruppox["tipointervento"];
     $catcat = $macrogruppox["cat"];
     $ticketcat = $macrogruppox["ticket"];
     $numerointervento = $macrogruppox["numerointervento"];
     $tipofattura1cat = $macrogruppox["tipofatturazione"];
     $importocalcolatocat = $macrogruppox["importocalcolato"];
     $importoextracat = $macrogruppox["importoextra"];
     $minutix = $macrogruppox["minuti"];
     $notex = $macrogruppox["note"];
     $iniziocatx = $macrogruppox["inizio"];
     $fineclix = $macrogruppox["fine"];
     $autorizzatoclix = $macrogruppox["autorizzato"];
     $fatturatoclix = $macrogruppox["fatturato"];
     $totaleclix = $macrogruppox["totale"];
     $sinoce=1;
     }} 
if($sinoce==0){
if($importo==""){$importo=0;}
$sql = "INSERT INTO contabile
( 
  cliente,             
  commessa,
  tipointervento,                       
  cat,
  ticket,
  numerointervento,
  tipofatturazione,
  importocalcolato,
  importoextra,
  minuti,
  note,
  inizio,
  fine,
  autorizzato,
  fatturato,
  totale
  ) 
VALUES (   
     '$clientexx',  
     '$commessaxx',   
     '$tipointervento', 
     '$catcat',  
     '$numero', 
     '$numerointervento', 
     '$tipofatta1', 
     '$importo', 
     '$impoex', 
     '$tempo', 
     '', 
     '$datainiziointx', 
     '$datafineintx', 
     '$autorizzatox', 
     '$fatturatox', 
     '$importoparziale'  
              )";
  #echo $sql; exit;
  if ($conn->query($sql) === TRUE)
        {
        $dataoggi=date("d/m/Y H.m.s");
         $sqluu = "INSERT INTO storia
        (ticket,
        dataazione,
        tipo,
        chi,
        mittente,
        destinatario,
        note) 
        VALUES ( 
        '$ticketcli',
        '$dataoggi',
        'Memorizzato contabile passivo',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
         } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; }
}
?>
<? 
$sqlx = "SELECT *  FROM  contabile where commessa = '$commessaxx' and cliente = '$clientexx' and tipointervento = '$tipointervento'  and numerointervento = '$numerointervento' and cat = '$catcat' and ticket = '$numero'" ;  
#echo $sqlx; exit;
$rCount = 1;
$resultx = $conn->query($sqlx);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc())	
	{   
     $progrcat = $macrogruppox["progr"];
     $clientecat = $macrogruppox["cliente"]; 
     $commessacat = $macrogruppox["commessa"];
     $tipointerventocat = $macrogruppox["tipointervento"];
     $catcat = $macrogruppox["cat"];
     $ticketcat = $macrogruppox["ticket"];
     $numerointervento = $macrogruppox["numerointervento"];
     $tipofattura1cat = $macrogruppox["tipofatturazione"];
     $importocalcolatocat = $macrogruppox["importocalcolato"];
     $importoextracat = $macrogruppox["importoextra"];
     $minutix = $macrogruppox["minuti"];
     $notex = $macrogruppox["note"];
     $iniziocatx = $macrogruppox["inizio"];
     $fineclix = $macrogruppox["fine"];
     $autorizzatoclix = $macrogruppox["autorizzato"];
     $fatturatoclix = $macrogruppox["fatturato"];
     $totaleclix = $macrogruppox["totale"];
     $sinoce=1;
     }} 
?>
<!-- <p align="center"><font face="Verdana" size="4" color="#993300" style="font-family: Verdana;">Intervento numero <?php echo $numerointervento; ?> </font></b></p> -->
<form method="POST" action=""  enctype="multipart/form-data" name="modulo11" onSubmit="return controllo11();"> 
<table class="table-form" style="width: 90%;" >
  <tr>
      <th colspan="2" class=" borted-top-table"> 
        Passivo numero intervento <? echo $numerointervento." - ".$catcat." ".$ragsocvcat; ?> 
      </th>
  </tr>
  <tr>
      <td colspan="1" > 
      <label style="color: #8e8b8b;">Tipo Fatturazione:</label> 
      <br><font size="3" face="Verdana" ><?php echo $tipofatta1cat; ?></font> 
      </td>
      <td colspan="1">
      <label style="color: #8e8b8b;">Importo Calcolato:</label>
      
      <input   type="text" name="importocalx" id="importocalx" value="<?php echo $importocalcolatocat; ?>" >
      </td> 
      </tr>
      <tr>
      <td colspan="1" valign="top"> 
      <label style="color: #8e8b8b;">Importo Extra:</label>
      <input   type="text" name="impoexx"  id="impoex" value="<?php echo $importoextracat; ?>" maxlength="50"> 
      </td>
      <td>
      <label style="color: #8e8b8b;">Durata Intervento minuti:</label>
      <input   type="text" name="tempox" id="tempox" value="<?php echo $minutix; ?>" maxlength="50">
      </td>
      </tr>
      <tr>
      <td colspan="2" > 
      <label style="color: #8e8b8b;">Note:</label>
      <textarea  name="notecat"  id="notecat"  rows="2"><?php echo $notex; ?></textarea>
      </td>
      </tr> 
      <tr>
      <td colspan="1" valign="top"> 
      <label style="color: #8e8b8b;">Inizio Intervento:</label>
      <input   type="text" name="datainiziointx"  id="datainiziointx" value="<?php echo $iniziocatx; ?>" maxlength="50"> 
      </td>
      <td>
      <label style="color: #8e8b8b;">Fine Intervento:</label>
      <input   type="text" name="datafineintx" id="datafineintx" value="<?php echo $datafineintx; ?>" maxlength="50">
      </td>
      </tr> 
      <tr>
      <td colspan="1" valign="top"> 
      <label style="color: #8e8b8b;">Autorizzato:</label>
      <input style="width: 20px;  height: 20px;" type="checkbox" <?php if($autorizzatoclix=="on"){echo "checked";} ?>  name="autorizzatoxx" size="1" maxlength="">
      </td>
      <td>
      <label style="color: #8e8b8b;">Fatturato:</label>
      <input style="width: 20px;  height: 20px;" type="checkbox" <?php if($fatturatoclix=="on"){echo "checked";} ?>  name="fatturatoxx" size="1" maxlength="">           
      </td>
  </tr>
      <tr>
      <th colspan="2" class=" borted-top-table" style="background: #afc81b;"> 
        Importo Passivo Ticket:  <? 
        $importoparziale=$importo+$impoexx; echo $importoparziale; ?> 
      </th>
<? if($autorizzatoclix!="on"){ ?>      
      <tr>  
      <td colspan="1" style="text-align:center;"> 
      <input type="hidden" name="ingranaggio" value="6" />
       <input type="hidden" name="ingranaggioxx" value="" />
       <input type="hidden" name="ingranaggiochiudi" value="" /> 
       <input type="hidden" name="ingranaggiostato" value="" />
       <input type="hidden" name="ingranaggiocontabile" value="1" />
       <input type="hidden" name="ingranaggiocontmodatcat" value="1" />  
       <input type="hidden" name="ingranaggioy" value="80" />
       <input type="hidden" name="codice" value="<?php echo $numero; ?>" />  
       <input type="hidden" name="numero" value="<?php echo $numero; ?>" />   
       <input type="hidden" name="login" value="<?php echo $login; ?>" /> 
       <input type="hidden" name="numerointervento" value="<?php echo $numerointerventox; ?>" /> 
       
       <input type="hidden" name="numerointervento" value="<?php echo $numerointervento; ?>" /> 
       <input type="hidden" name="commessaxx" value="<?php echo $commessaxx; ?>" /> 
       <input type="hidden" name="clientexx" value="<?php echo $clientexx; ?>" /> 
       <input type="hidden" name="tipointervento" value="<?php echo $tipointervento; ?>" /> 
       <input type="hidden" name="totale" value="<?php echo $totale; ?>" />
         <input type="hidden" name="catcat" value="<?php echo $catcat; ?>" /> 
       <input type="hidden" name="numeroint" value="1" />               
       <button autofocus type="submit" class="btn btn-success" >Cambia Importi</button> 
      </td> 
      </form>
      <form method="POST" action=""  enctype="multipart/form-data" name="modulo11" onSubmit="return controllo11();">
      <td colspan="1" style="text-align:center;"> 
      <input type="hidden" name="ingranaggio" value="6" />
       <input type="hidden" name="ingranaggioxx" value="" />
       <input type="hidden" name="ingranaggiochiudi" value="" /> 
       <input type="hidden" name="ingranaggiostato" value="" />
       <input type="hidden" name="ingranaggiocontabile" value="1" />
       <input type="hidden" name="ingranaggiocontmodatxxy" value="1" />  
       <input type="hidden" name="ingranaggioy" value="80" />
       <input type="hidden" name="codice" value="<?php echo $numero; ?>" />  
       <input type="hidden" name="numero" value="<?php echo $numero; ?>" />   
       <input type="hidden" name="login" value="<?php echo $login; ?>" /> 
       <input type="hidden" name="numerointervento" value="<?php echo $numerointerventox; ?>" /> 
       
       <input type="hidden" name="numerointervento" value="<?php echo $numerointervento; ?>" /> 
       <input type="hidden" name="commessaxx" value="<?php echo $commessaxx; ?>" /> 
       <input type="hidden" name="clientexx" value="<?php echo $clientexx; ?>" /> 
       <input type="hidden" name="tipointervento" value="<?php echo $tipointervento; ?>" /> 
       <input type="hidden" name="totale" value="<?php echo $totale; ?>" /> 
       <input type="hidden" name="numeroint" value="1" />  
       <input type="hidden" name="catcat" value="<?php echo $catcat; ?>" />                          
       <button autofocus type="submit" class="btn btn-success" >Ricalcola</button> 
      </td>                                               
  
  <? } ?>
  </tr>
  </form>
  <td>
  <br>
  </td>
  </tr>  
</table>

<? 
$importopassivo=$importopassivo+$importo+$impoexx;
} } 
#echo  $importopassivo;
?>
</td>
</tr>
</table>
<?
}
###################################### fine contabile ####################################

?>




















</div>
<div>



</div>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- Modal -->
<div class="modal fade" id="multiplo" tabindex="-1" aria-labelledby="multiplo" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="multiplo">Anagrafica xxTerza parte cod. <? echo $codiceww; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php include("multiplox.php"); ?>
      </div>
     
    </div>
  </div>
</div>
<!-- FINE MODALE  -->
<!-- Modal -->
<div class="modal fade" id="cat" tabindex="-1" aria-labelledby="cat" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Anagrafica Terza parte cod. <? echo $codiceww; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php include("vedicat.php"); ?>
      </div>
     
    </div>
  </div>
</div>
<!-- FINE MODALE  -->
<!-- Modal -->
<div class="modal fade" id="distanza" tabindex="-1" aria-labelledby="distanza" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Distanza tra luogo di intervento del ticket e la terza parte assegnata</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php include("distanza10.php"); ?>
      </div>
     
    </div>
  </div>
</div>
<!-- FINE MODALE  -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inserimento nuovo luogo intervento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php include("esponiluogo.php"); ?>
      </div>
     
    </div>
  </div>
</div>
<!-- FINE MODALE  -->

<!-- Modal -->
<div class="modal fade" id="exampleModalx" tabindex="-1" aria-labelledby="exampleModalLabelx" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mappa Luogo <? echo $insegna." ".$ragsoc; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php include("lat.php"); ?>
      </div>
     
    </div>
  </div>
</div>
<!-- FINE MODALE  -->
<!-- Modal -->
<div class="modal fade" id="ticket" tabindex="-1" aria-labelledby="ticket" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ticket <? echo $numero; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php include("esponiticket.php"); ?>
      </div>
     
    </div>
  </div>
</div>
<!-- FINE MODALE  -->


<!-- Modal 1-->
<div class="modal fade" id="leggiclienti" tabindex="-1" aria-labelledby="leggiclientiLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="leggiclientiLabel">Clienti Tutti</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <?php include("leggitutticlienti.php"); ?>  
      </div>
     
    </div>
  </div>
</div>
<!-- FINE MODALE  1--> 
<!-- Modal 2-->
<div class="modal fade" id="assegna" tabindex="-1" aria-labelledby="assegnaLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="assegnaLabel">Assegnazione Ticket <?php echo $numero; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <?php include("assegna.php"); ?>  
      </div>
     
    </div>
  </div>
</div>
<!-- FINE MODALE 2-->



<script>
var italianTeams = [];
var italianTeams2 = [];
var apparatiArr = [];

function autoComplete(){
     $("#cliente").autocomplete({
			source: italianTeams
      
		 });
         
}
function autoComplete2(){
     $("#commessa").autocomplete({
			source: italianTeams2
		 });
}

function autoCompleteApparato(){
     $("#apparato").autocomplete({
			source: apparatiArr
		 });
}

function ricercaAutocomplete(){
	
     $.ajax({
	         url: 'leggiclienti.php',
	         type: 'POST',
	         dataType: 'json',
	         data: {},
	         success: function(risposta){
	            italianTeams = risposta;
				autoComplete();
	         },
	         error: function(error){
				console.log("ERRORE CHIAMATA");
	         }
	});
  
}
function ricercaAutocompleteApparato(){
	
  $.ajax({
        url: 'leggiApparati.php',
        type: 'POST',
        dataType: 'json',
        data: {},
        success: function(risposta){
          apparatiArr = risposta;
          autoCompleteApparato();
        },
        error: function(error){
     console.log("ERRORE CHIAMATA");
        }
});

}
function addAttivita(commessa){
  //var commessa = $('#commessa').val();
  $.ajax({
	          url: 'ricercaAttivita.php',
	         type: 'POST',
	         data: {"commessa": commessa},
	         success: function(responce){
	            //console.log("attività", responce)
              $("#attivita").val(responce);
	         },
	         error: function(error){
				console.log("ERRORE CHIAMATA");
	         }
	});

}
function Ricerca1(cliente){
  var valore = cliente;
  if(cliente == null){
    valore = $('#cliente').val();
  }
	 //$("#commessa").prop( "disabled", true );
	 $.ajax({
	          url: 'leggicommessa1.php',
	         type: 'POST',
	         dataType: 'json',
	         data: {"cliente": valore},
	         success: function(risposta1){
	            italianTeams2 = risposta1;
				autoComplete2();
        //$("#commessa").prop( "disabled", false );
	         },
	         error: function(error){
				console.log("ERRORE CHIAMATA");
       // $("#commessa").prop( "disabled", false );
	         }
	});
	
  
}
$( "#cliente" ).on( "autocompleteselect", function( event, ui ) {
  Ricerca1(ui.item.label);
} );

function addIntervento(commessa){
  $('#tipointervento').find('option').remove();
  $.ajax({
	          url: 'ricercaTipoint.php',
	         type: 'POST',
           dataType: 'json',
	         data: {"commessa": commessa},
	         success: function(responce){
            console.log("tipo intervento", responce);
	            for(var a=0; a < responce.length; a++){
                if(responce[a] != ""){
                  var html = "<option>" + responce[a] + "</option>"
                  $("#tipointervento").append(html);
                }
              }
	         },
	         error: function(error){
				console.log("ERRORE CHIAMATA");
	         }
	});
}

$( "#commessa" ).on( "autocompleteselect", function( event, ui ) {
  addAttivita(ui.item.label);
  addIntervento(ui.item.label);
} );

 ricercaAutocomplete();
 ricercaAutocompleteApparato();
 tableInit();
</script>
<?
function giornilavorativi($dataInizio,$dataFine,$ore,$feriali1,$sabato1,$festivi1,$arafer1,$daorafer1,$arasab1,$daorasab1,$arafes1,$daorafes1,$ora1,$numgiore1,$giorno1,$statoxx,$datachiusurax)
{
#echo "<br>ore ".$ore;
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

#echo "primaora ".$ore; 
$comodo=explode(" ",$dataInizio);
$veradatainizio=$comodo[0];
if($ora1=="on"){
#echo "<br>data inizio: ".$dataInizio."<br>";
$dataIniziox=$dataInizio;
$comodo=explode(" ",$dataIniziox);
$comodox=explode(":",$comodo[1]);
$ore=$comodox[0];
#echo "ore".$ore; 
$orafine=$ore+$numgiore1;
#echo $orafine; 
$dataFine=$comodo[0]." ".$orafine;
#echo "dataine ".$dataFine; 
$datafineparziale=$comodo[0];
#echo "datafineparz ".$datafineparziale."<br>";
#exit;
#echo "<br>data fine: ".$dataInizio." ".$orafine."<br>";  exit;
$giorno_data = date("w",$i); //verifico il giorno: da 0 (dom) a 6 (sab)
#echo $giorno_data;   
if($feriali1=="on") 
{ 
if ($giorno_data==1 or $giorno_data==2 or $giorno_data==3 or $giorno_data==4 or $giorno_data==5){
$maxora=$arafer1;$minora=$daorafer1;
#echo "max ".$maxora;
} } 
if(($sabato1=="on") and ($giorno_data==6 ))
{$maxora=$arasab1;$minora=$daorasab1;}  

if(($festivi1=="no") and ($giorno_data==0 ))
{$maxora=$arafes1;$minora=$daorafes1;} 

$comodo=explode(":",$orafine);
$orafine=$comodo[0];
#echo "orafine ".$orafine." maxora ".$maxora."<br>";
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
$dataIniziox=$veradatainizio;
#echo $dataIniziox;
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
#echo "stato ".$statoxx;
#echo "<br>datachiusrax ".$datachiusurax;
if($statoxx=="Richiesta di Chiusura" or $statoxx=="Chiuso")
{
$comodo=explode(" ",$datachiusurax);
$comodot=$comodo[0];
$comodox=explode("/",$comodot);
$adesso=$comodox[2]."-".$comodox[1]."-".$comodox[0]; 
$dataFiney=$veradatainizio;
#echo "data fine ".$dataFiney." adesso ".$adesso."<br>";
}
else
{$adesso=date("Y-m-d");   
$dataFiney=$dataFine;
#echo "data fine ".$dataFiney." adesso ".$adesso."<br>";
}


$origin = new DateTimeImmutable($dataFiney);
$target = new DateTimeImmutable($adesso);
#echo "da ".$origin." a ".$target;
#var_dump($origin);
#var_dump($target);
$interval = $origin->diff($target);
$giornislax=$interval->format('%R%a');
#echo "giorni ".$giornislax;
#echo "sla ".$numgiore1;
$giornisla=$giornislax;
}

if($ora1=="on"){
if($statoxx=="Richiesta di Chiusura" or $statoxx=="Chiuso")
{    
#echo $datachiusurax;
$comodo=explode(" ",$datachiusurax);
$comodot=$comodo[0];
$comodox=explode("/",$comodot);
$adesso=$comodox[2]."-".$comodox[1]."-".$comodox[0]." ".$comodo[1].":00:00"; 
#echo "<br>adesso ".$adesso."<br>";
#$adesso=$adesso." 00:00:00"; 
$dataFiney=$dataInizio;
$dt = new DateTime($dataFiney);
$lt = new DateTime($adesso); 
#echo "data finexx ".$dt." adesso ".$lt."<br>";
#var_dump($dt);
#var_dump($lt);
}
else
{
#$adesso=date("Y-m-d H:m:s");
#echo $datafinale; exit;
$datafinale=$datafinale.":00:00";
#echo $datafinale;
$dt = new DateTime($datafinale);
$lt = new DateTime(); }

#echo "data fine ".$dt." adesso ".$lt."<br>";
#var_dump($dt);
#var_dump($lt);
$dd = ( $lt->getTimestamp() - $dt->getTimestamp() ) / 3600;
#echo $dd;
$comodo=explode(".",$dd);
$oresla=$comodo[0];
$oreslax=$comodo[0];
if($statoxx=="Richiesta di Chiusura" or $statoxx=="Chiuso")
{ 
$oresla=$oresla-$numgiore1; }
#echo "<br> orex ".$oresla;
}
return array($ore,$lavorativi,$dataFine,$datafinale,$dataIniziox,$giornisla,$oresla,$giornislax);
}

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
?>
</body>
</html