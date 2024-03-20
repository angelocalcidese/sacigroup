<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="index.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php
}
$login=$_REQUEST["login"];
$zona=$_REQUEST["zona"];
?>
<?php 
$ingranaggio=$_REQUEST["ingranaggio"];
include "conf_DB.php";
$oggi=date("d/m/Y");
if ($ingranaggio==1)
{

$cognome=$_REQUEST["cognome"];
$cognome=str_replace("'", "\'", $cognome);
$cognome=str_replace("à", "a\'", $cognome);
$cognome=str_replace("è", "e\'", $cognome);
$cognome=str_replace("ì", "i\'", $cognome);
$cognome=str_replace("ò", "o\'", $cognome);
$cognome=str_replace("ù", "u\'", $cognome);
$cognome=strtoupper($cognome);


$nome=$_REQUEST["nome"];
$nome=str_replace("'", "\'", $nome);
$nome=str_replace("à", "a\'", $nome);
$nome=str_replace("è", "e\'", $nome);
$nome=str_replace("ì", "i\'", $nome);
$nome=str_replace("ò", "o\'", $nome);
$nome=str_replace("ù", "u\'", $nome);
$nome=strtoupper($nome);

$resvia=$_REQUEST["resvia"];
$resvia=str_replace("'", "\'", $resvia);
$resvia=str_replace("à", "a\'", $resvia);
$resvia=str_replace("è", "e\'", $resvia);
$resvia=str_replace("ì", "i\'", $resvia);
$resvia=str_replace("ò", "o\'", $resvia);
$resvia=str_replace("ù", "u\'", $resvia);
$resvia=strtoupper($resvia);

$datanascita=$_REQUEST["datanascita"];
$datask=$_REQUEST["datask"];

$sesso=$_REQUEST["sesso"];
$lun=$_REQUEST["lun"];
$mar=$_REQUEST["mar"];
$mer=$_REQUEST["mer"];
$gio=$_REQUEST["gio"];
$ven=$_REQUEST["ven"];
$dom=$_REQUEST["dom"];
$rescap=$_REQUEST["cap"];
$rescap=strtoupper($rescap);

$professione=$_REQUEST["professione"];
$professione=str_replace("'", "\'", $professione);
$professione=str_replace("à", "a\'", $professione);
$professione=str_replace("è", "e\'", $professione);
$professione=str_replace("ì", "i\'", $professione);
$professione=str_replace("ò", "o\'", $professione);
$professione=str_replace("ù", "u\'", $professione);
$professione=strtoupper($professione);
$competenze=$_REQUEST["competenze"];
$competenze=str_replace("'", "\'", $competenze);
$competenze=str_replace("à", "a\'", $competenze);
$competenze=str_replace("è", "e\'", $competenze);
$competenze=str_replace("ì", "i\'", $competenze);
$competenze=str_replace("ò", "o\'", $competenze);
$competenze=str_replace("ù", "u\'", $competenze);
$competenze=strtoupper($competenze);
$frequenza=$_REQUEST["frequenza"];
$emergenze=$_REQUEST["emergenze"];
$referente=$_REQUEST["referente"];
$membro=$_REQUEST["membro"];
$mensa=$_REQUEST["mensa"];
$guardaroba=$_REQUEST["guardaroba"];
$tesseramento=$_REQUEST["tesseramento"];
$ascolto=$_REQUEST["ascolto"];
$varie=$_REQUEST["varie"];
$saputo=$_REQUEST["saputo"];
$saputo=str_replace("à", "a\'", $saputo);
$saputo=str_replace("è", "e\'", $saputo);
$saputo=str_replace("ì", "i\'", $saputo);
$saputo=str_replace("ò", "o\'", $saputo);
$saputo=str_replace("ù", "u\'", $saputo);
$rescitta=$_REQUEST["rescitta"];
$rescitta=str_replace("'", "\'", $rescitta);
$rescitta=str_replace("à", "a\'", $rescitta);
$rescitta=str_replace("è", "e\'", $rescitta);
$rescitta=str_replace("ì", "i\'", $rescitta);
$rescitta=str_replace("ò", "o\'", $rescitta);
$rescitta=str_replace("ù", "u\'", $rescitta);
$rescitta=strtoupper($rescitta);

$domvia=$_REQUEST["domvia"];
$domvia=str_replace("'", "\'", $domvia);
$domvia=str_replace("à", "a\'", $domvia);
$domvia=str_replace("è", "e\'", $domvia);
$domvia=str_replace("ì", "i\'", $domvia);
$domvia=str_replace("ò", "o\'", $domvia);
$domvia=str_replace("ù", "u\'", $domvia);
$domvia=strtoupper($domvia);


$telefono=$_REQUEST["telefono"];
$email=$_REQUEST["email"];

if($lun==""){$lun=0;}
if($mar==""){$mar=0;}
if($mer==""){$mer=0;}
if($gio==""){$gio=0;}
if($ven==""){$ven=0;}
if($dom==""){$dom=0;}
if($frequenza==""){$frequenza=0;}
if($emergenze==""){$emergenze=0;}
if($referente==""){$referente=0;}
if($membro==""){$membro=0;}
if($mensa==""){$mensa=0;}
if($guardaroba==""){$guardaroba=0;}
if($tesseramento==""){$tesseramento=0;}
if($varie==""){$varie=0;}
if($ascolto==""){$ascolto=0;}
if($datask==""){$datask=$oggi;}


$sql1 = "SELECT * FROM tesseravol  where progr = '1' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $tessera = $macrogruppo["tessera"];	 
			} }
$tessera++;
$sql = "UPDATE tesseravol set 
tessera = '$tessera'
where 
progr = '1' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 
    
 $sql = "insert into socivolontari
 (
  tessera, 
  cognome, 
  nome, 
  data_nascita, 
  indirizzo,
  localita_residenza,
  cap, 
  telefono, 
  email, 
  data_iscrizione, 
  sesso, 
  lun,
  mar,
  mer,
  gio,
  ven,
  dom,
  professione,
  competenze,
  frequenza,
  emergenze,
  referente,
  membro,
  mensa,
  guardaroba,
  tesseramento,
  varie,
  saputo,
  ascolto    
 )
  values
 (    
  '$tessera',  
  '$cognome',  
  '$nome',  
  '$datanascita',      
  '$resvia',    
  '$rescitta',  
  '$rescap', 
  '$telefono',  
  '$email',  
  '$datask',    
  '$sesso',
  '0',
  '0',
  '0',
  '0',
  '0',
  '0',
  '$professione',
  '',
  '0',
  '0',
  '0',
  '0',
  '0',
  '0',
  '0',
  '0',
  '',
  '0' 
   )
    ";
#echo $sql; exit;
    if ($conn->query($sql) === TRUE)
        {
        
/*
//********
#$data="2016-07-03";//domenica
if ($mensa==1){$orainizio=9;$orafine=13;$camera="Mensa";} 
if ($guardaroba==1){$orainizio=14;$orafine=16;$camera="Guardaroba";}  
if ($tesseramento==1){$orainizio=10;$orafine=12;$camera="Tesseramento";} 
if ($varie==1){$orainizio=9;$orafine=17;$camera="Varie";}  
$comodo=explode("/",$datask);
$datask=$comodo[2]."-".$comodo[1]."-".$comodo[0];
$dataskcom=$datask;
#echo $datask; exit; 
$giornoset=giorno($datask);//output domenica   
#echo  $giornoset;

if ($frequenza==1){

  if ($lun==1) {$dicigiorno="lunedì";
$datask=$dataskcom;    
    if ($giornoset==$dicigiorno) {
        for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
 creapresenza($datask,$tessera,$orainizio,$orafine,$camera);       
        }
                              }
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera);}
                              }
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera);}
                              }                          
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera); }
                              }    
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera); }
                              }                          
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera);}
                              }                          
                                                    
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera); }
                              }                          
                              
                     }         
           
 if ($mar==1) {$dicigiorno="martedì";
$datask=$dataskcom;  
$giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
        for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));     
 creapresenza($datask,$tessera,$orainizio,$orafine,$camera);       
        }
                              }
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera);}
                              }
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera);}
                              }                          
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera); }
                              }    
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera); }
                              }                          
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera);}
                              }                          
                                                    
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera); }
                              }                          
                              
                     }         
           
 if ($mer==1) {$dicigiorno="mercoledì";
 $datask=$dataskcom; 
 $giornoset=giorno($datask); 
    if ($giornoset==$dicigiorno) {
        for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
 creapresenza($datask,$tessera,$orainizio,$orafine,$camera);       
        }
                              }
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera);}
                              }
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera);}
                              }                          
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera); }
                              }    
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera); }
                              }                          
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera);}
                              }                          
                                                    
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera); }
                              }                          
                              
                     }         
           
 if ($gio==1) {$dicigiorno="giovedì";
 $datask=$dataskcom; 
 $giornoset=giorno($datask); 
    if ($giornoset==$dicigiorno) {
        for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
 creapresenza($datask,$tessera,$orainizio,$orafine,$camera);       
        }
                              }
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera);}
                              }
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera);}
                              }                          
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera); }
                              }    
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera); }
                              }                          
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera);}
                              }                          
                                                    
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera); }
                              }                          
                              
                     }         
           
 if ($ven==1) {$dicigiorno="venerdì";
  $datask=$dataskcom; 
  $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
        for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
 creapresenza($datask,$tessera,$orainizio,$orafine,$camera);       
        }
                              }
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera);}
                              }
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera);}
                              }                          
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera); }
                              }    
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera); }
                              }                          
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera);}
                              }                          
                                                    
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera); }
                              }                          
                              
                     }         
           
 if ($dom==1) {$dicigiorno="domenica";
 $datask=$dataskcom;
 $giornoset=giorno($datask);  
    if ($giornoset==$dicigiorno) {
        for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
 creapresenza($datask,$tessera,$orainizio,$orafine,$camera);       
        }
                              }
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera);}
                              }
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera);}
                              }                          
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera); }
                              }    
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera); }
                              }                          
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera);}
                              }                          
                                                    
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        creapresenza($datask,$tessera,$orainizio,$orafine,$camera); }
                              }                          
                              
                     }         
           


}         
*/        
         } 
        else { echo "ATTENZIONE Errore inserimento Volontario in DB chiamare Calcidese:  " . $sql; exit;} 
  
 
       
}    

$datask="";
?>

<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>inserimento schede volontari</title>
</head>
<style>
div#container {
min-width:   900px;
  min-height:  500px;
  max-width:  600px;
  max-height: 1000px;
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
</style>
<style>
.table4 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
background: #ECE9E0;
color: #656665;
border: 16px solid #5197FF;
border-radius: 20px;
}
.table4 th {
font-size: 18px;
padding: 10px;
}
.table4 td {
background: #B3B3D0;
padding: 5px;

}

.table5 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
background: #ECE9E0;
color: #656665;
border: 16px solid #9B9B9B;
border-radius: 20px;
}
.table5 th {
font-size: 18px;
padding: 10px;
}
.table5 td {
background: #8888B3;
padding: 5px;
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
.table6 td {
background: #ffffff;
padding: 2px;
}

.table7 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
background: #ECE9E0;
color: #656665;
border: 16px solid #FF9900;
border-radius: 20px;
}
.table7 th {
font-size: 18px;
padding: 10px;
}
.table7 td {
background: #FFD393;
padding: 5px;
}
.table8 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
background: #ECE9E0;
color: #656665;
border: 16px solid #006600;
border-radius: 20px;
}
.table8 th {
font-size: 18px;
padding: 10px;
}
.table8 td {
background: #97FF97;
padding: 5px;
}
.table9 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
background: #ECE9E0;
color: #656665;
border: 16px solid #0066FF;
border-radius: 20px;
}
.table9 th {
font-size: 18px;
padding: 10px;
}
.table9 td {
background: #AECEFF;
padding: 5px;
}
table, th, td {
  border-collapse: collapse;
}
input{ /* Stili per il campo di testo e per la textarea */
    background: #1C1C1C; /* Colore di sfondo */
    border: 0px solid #323232; /* Bordo */
    color: #000000; /* Colore del testo */
    height: 20px; /* Altezza */
    line-height: 20px; /* Altezza di riga */
    font-weight: bold;
    padding: 0 10px; /* Padding */
}
textarea{ /* Stili per il campo di testo e per la textarea */
    background: #1C1C1C; /* Colore di sfondo */
    border: 0px solid #323232; /* Bordo */
    color: #000000; /* Colore del testo */
    font-weight: bold;
    padding: 0 10px; /* Padding */
} 
select { /* Stili per il campo di testo e per la textarea */
    background: #1C1C1C; /* Colore di sfondo */
    border: 0px solid #323232; /* Bordo */
    color: #000000; /* Colore del testo */
    height: 20px; /* Altezza */
    line-height: 20px; /* Altezza di riga */
    font-weight: bold;
    padding: 0 10px; /* Padding */
}
input[type=submit] {
    padding:2px 20px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;  }
input[type=reset] {
    padding:2px 20px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;  }    
</style>
<script type="text/javascript">
		
		function controllo(){ 
            with(document.modulo) { 
        if(cognome.value=="") { 
            alert("Error: manca COGNOME"); 
            cognome.focus(); 
            return false; 
                            } 
        if(nome.value=="") { 
            alert("Error: manca NOME"); 
            nome.focus(); 
            return false; 
                            } 
        if(natoa.value=="") { 
            alert("Error: manca NATO A"); 
            natoa.focus(); 
            return false; 
                            } 
                      

        if(datanascita.value=="") { 
            alert("Error: manca NATO IL"); 
            datanascita.focus(); 
            return false; 
                              } 
        if(residentecitta.value=="") { 
            alert("Error: manca CITTA' DI RESIDENZA"); 
            residentecitta.focus(); 
            return false; 
                              }                      
                    
        if(indirizzores.value=="") { 
            alert("Error: manca INDIRIZZO DI RESIDENZA"); 
            indirizzores.focus(); 
            return false; 
                              }                        
                              
        if(cap.value=="") { 
            alert("Error: manca CAP"); 
            cap.focus(); 
            return false; 
                              } 
                              
         
         
					                                                            
                                                            
                                  } 
        } 
</script>
<?php 
include "conf_DB.php";
?>
<body>

<div align="center" >
	<table border="0" width="760" height="140" bgcolor="#ffffff"  >
		<tr > 
			<td style="border-radius: 20px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"">
      <div align="center">
			<img border="0" src="carlopoma.png" width="200" height="90"> <br>
      </div>
      </td>
      </tr>
   <tr> 

	
</tr> 
<td bgcolor="#FFFFFF" style="border: 0px ; "><a href="menugenerale.php?login=<?php echo $login; ?>">Menu Generale</a></td>             

 
   
	</table>  
      
</div> 
<div align="center">   
<div id="container">
<form method="POST" action="" name="modulo" onSubmit="return controllo();">
<p align="center"><b><font face="Arial" size="5" color="#993300">INSERIMENTO SCHEDA VOLONTARIO</font></b></p>
<table  width="100%" bgcolor="#FFF4F7" class="table6">
	<tr>
		<td>
		<table border="1" width="100%">
     <tr>
				<td colspan="5"><font face="Arial" size="1" color="#000000">- DATA SKEDA:</font></td>
    
        </tr>  
			<tr>
      <td colspan="5"><p><input type="text" name="datask" value="<?php echo $oggi; ?>"  size="10"  style="background-color: #ececee"><font color="red">&nbsp;&nbsp;IMPORTANTE il formato della data deve essere GG/MM/AAAA</font></p></td>
		  </tr>
			<tr> 
				<td colspan="2" ><font face="Arial" size="1" color="#000000" >- COGNOME:</font></td>
        <td colspan="3" ><font face="Arial" size="1" color="#000000" >- NOME:</font></td>  
        </tr>
        <tr>
				<td colspan="2" ><p><input type="text" name="cognome"  size="50" style="background-color: #ececee"></p></td>				
				<td colspan="3"><p><input type="text" name="nome"  size="50" style="background-color: #ececee"></p></td>
			</tr>
      
      
			<tr>
				<td ><font face="Arial" size="1" color="#000000">- NATO/A IL:</font></td>
        <td ><font face="Arial" size="1" color="#000000">- SESSO:</font></td>
        <td colspan="3"><font face="Arial" size="1" color="#000000">- INDIRIZZO:</font></td>
        <tr>
				<td><p><input type="text" name="datanascita"  size="10" style="background-color: #ececee"></p></td>			
				<td><select size="1" name="sesso" style="background-color: #ececee">
					<option <? if($sesso=="M"){echo "selected";}?>>M</option>
					<option <? if($sesso=="F"){echo "selected";}?>>F</option>
					</select></td>
        <td colspan="3"><p><input type="text" name="resvia" size="50" style="background-color: #ececee"></p></td>			
				</tr>
        
      <tr>
				<td colspan="2"><font face="Arial" size="1" color="#000000">- CITTA':</font></td>
        <td colspan="1"><font face="Arial" size="1" color="#000000">- CAP:</font></td>
        <td colspan="2"><font face="Arial" size="1" color="#000000">- TELEFONO:</font></td>
        </tr>  
			<tr>
      <td colspan="2"><p><input type="text" name="rescitta"  size="50"  style="background-color: #ececee"></p></td>
		  <td colspan="1"><p><input type="text" name="cap"   style="background-color: #ececee"></p></td>	  
      <td colspan="2"><p><input type="text" name="telefono"  size="18" style="background-color: #ececee"></p></td>	
			</tr>
      
     <tr>
				<td colspan="2"><font face="Arial" size="1" color="#000000">- EMAIL:</font></td>
        <td colspan="3"><font face="Arial" size="1" color="#000000">- PROFESSIONE:</font></td>
        </tr>  
			<tr>
      <td colspan="2"><p><input type="text" name="email"   size="50"  style="background-color: #ececee"></p></td>
		  <td colspan="3"><p><input type="text" name="professione"  size="49" style="background-color: #ececee"></p></td>	
			</tr>  
 <!--    
        <tr>
				<td colspan="2"><font face="Arial" size="1" color="#000000">- COMPETENZE:</font></td>
        <td colspan="3"><font face="Arial" size="1" color="#000000">- DISPONIBILITA':</font></td>
        </tr>  
			<tr>
      <td colspan="2"><p><input type="text" name="competenze"   size="50"  style="background-color: #ececee"></p></td>
		  <td colspan="1"><p><input type="checkbox" name="frequenza" value="1"> Frequenza regolare<br></p></td>	
			<td colspan="2"><p><input type="checkbox" name="emergenze" value="1"> Emergenze<br></p></td>	
			
      </tr>  
      
      <tr>
      -->
<!--				<td colspan="2"><font face="Arial" size="1" color="#000000">- SERVIZIO ASSEGNATO:</font></td>  
        <td colspan="5"><font face="Arial" size="1" color="#000000">- GIORNO:</font></td>
        </tr>  
			<tr>
<!--      <td colspan="1"><p><input type="checkbox" name="referente" value="1"> Referente<br></p></td>	
			<td colspan="1"><p><input type="checkbox" name="membro" value="1"> Membro ordinario<br></p></td>				
      <td colspan="5"><p>
      <p><input type="checkbox" name="lun" value="1"> Lun
      <input type="checkbox" name="mar" value="1"> Mar
      <input type="checkbox" name="mer" value="1"> Mer
      <input type="checkbox" name="gio" value="1"> Gio
      <input type="checkbox" name="ven" value="1"> Ven
      <input type="checkbox" name="dom" value="1"> Dom
      </p>
      </td>
		  
      </tr>  
      <tr>
				<td colspan="5"><font face="Arial" size="1" color="#000000">- SETTORE:</font></td>
        </tr>  
			<tr>
      <td colspan="1" ><p><input type="checkbox" name="mensa" value="1"> Mensa<br></p></td>	
			<td colspan="1" ><p><input type="checkbox" name="guardaroba" value="1"> Guardaroba<br></p></td>				
      <td colspan="1" ><p><input type="checkbox" name="tesseramento" value="1"> Tesseramento<br></p></td>	
      <td colspan="1" ><p><input type="checkbox" name="ascolto" value="1"> ascolto<br></p></td>
			<td colspan="1" ><p><input type="checkbox" name="varie" value="1"> Varie<br></p></td>	
      </tr>  
      
      <tr>
				<td colspan="5"><font face="Arial" size="1" color="#000000">- COME SAPUTO DI NOI:</font></td>
        
        </tr>  
			<tr>
      <td colspan="5"><p><input type="text" name="saputo"   size="110"  style="background-color: #ececee"></p></td>
		  </tr>  
      
       
			<tr>
-->			<input type="hidden" name="ingranaggio" value="1" />
       <input type="hidden" name="login" value="<?php echo $login; ?>" />	
				<td colspan="5" align="center"><input type="submit" value="Inserisci" name="B3"><input type="reset" value="Reset" name="B4"></td>
			</tr> 
     
		</table>
		</td>
	</tr>
</table>
<p>&nbsp;</p>
</form>
</div>
</div>
<?
function giorno($d){
 
    //attento la data deve essere nel formato yyyy-mm-gg
    //anche come separatori (se altri separatori devi modificare)
    $d_ex=explode("-", $d);//attento al separatore
    $d_ts=mktime(0,0,0,$d_ex[1],$d_ex[2],$d_ex[0]);
    $num_gg=(int)date("N",$d_ts);//1 (for Monday) through 7 (for Sunday)
    //per nomi in italiano
    $giorno=array('','lunedì','martedì','mercoledì','giovedì','venerdì','sabato','domenica');//0 vuoto
    return $giorno[$num_gg];
}

function creapresenza($datask,$tessera,$orainizio,$orafine,$camera){
include "conf_DB.php";
$sql1 = "SELECT * FROM progprenovol  where progr = '1' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $tesserask = $macrogruppo["tessera"];	 
			} }
$tesserask++;
$sql = "UPDATE progprenovol set 
tessera = '$tesserask'
where 
progr = '1' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; exit;}  

$datafine = date('Y-m-d',strtotime($datask . "+1 days"));
 $sql = "insert into prenotazionivol
 (
  numero,
  datainizio,
  datafine,
  camera,
  confermato,
  dataentrata,
  datauscita,
  socio,
  dataannulla,
  orainizio,
  orafine
     
 )
  values
 ( 
   '$tesserask',
   '$datask',
   '$datafine',
   '$camera',
   'SI',
   '$datask',
   '$datafine',
   '$tessera',
   '$datask',
   '$orainizio',
   '$orafine'
   )
    ";
#echo $sql; exit;
    if ($conn->query($sql) === TRUE)
        { } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 

}
?>
</body>

</html>