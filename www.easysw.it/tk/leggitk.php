<?php
include "conf_DB.php";
# lettura ticket
# il campo $numero contiene il numero di ticket da cercare
$numero = $_REQUEST["numero"];
$cliente = $_REQUEST["cliente"];
$commessa = $_REQUEST["commessa"];
$resp = array();
$sql = "SELECT *  FROM  tk where  numero  = '$numero' " ;  
#  echo $sql;
  $rCount = 1;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())	
    { 
      $resp['progr'] = $macrogruppo["progr"];
      $resp['numero'] = $macrogruppo["numero"];
      #$resp['cliente'] = $macrogruppo["cliente"];
      $clientex = $macrogruppo["cliente"];      
      #$resp['commessa'] = $macrogruppo["commessa"];
      $commessax = $macrogruppo["commessa"];      
      $resp['attivita'] = $macrogruppo["attivita"];
      $resp['tipointervento'] = $macrogruppo["tipointervento"];
      $resp['apparato'] = $macrogruppo["apparato"];
      $resp['priorita'] = $macrogruppo["priorita"];
      $resp['spedizione'] = $macrogruppo["spedizione"];
	    $resp['notesla'] = $macrogruppo["notesla"];
	    $resp['nota'] = $macrogruppo["nota"];
        $resp['dataapp'] = $macrogruppo["dataapp"];
	    $resp['notaapp'] = $macrogruppo["notaapp"];
      $resp['impatt'] = $macrogruppo["impatt"];
      $resp['abbona'] = $macrogruppo["abbona"];
      $resp['imppass'] = $macrogruppo["imppass"];
      $resp['notaamm'] = $macrogruppo["notaamm"];
      $resp['intervento'] = $macrogruppo["intervento"];
      $resp['stato'] = $macrogruppo["stato"];
      $resp['datainizio'] = $macrogruppo["datainizio"];
      $resp['serialeparte'] = $macrogruppo["serialeparte"];
      $resp['nomeparte'] = $macrogruppo["nomeparte"];
      $resp['ticket'] = $macrogruppo["ticketcli"];
      $resp['seriale'] = $macrogruppo["seriale"];
    }
  } 
  
  $sqlx = "SELECT *  FROM  tkluogo where  numero  = '$numero' " ;  
  #echo $sql;
  $rCount = 1;
  $resultx = $conn->query($sqlx);
  if ($resultx->num_rows > 0) {
    while($macrogruppox = $resultx->fetch_assoc())	
    {   
      $resp['insegna'] = $macrogruppox["insegna"];
      $resp['ragsoc'] = $macrogruppox["ragsoc"];
      $resp['indirizzo'] = $macrogruppox["indirizzo"];
      $resp['cap'] = $macrogruppox["cap"];
      $resp['prov'] = $macrogruppox["prov"];
      $resp['citta'] = $macrogruppox["citta"];
      $resp['contatto'] = $macrogruppox["contatto"];
      $resp['telefono'] = $macrogruppox["telefono"];
      $resp['note'] = $macrogruppox["note"];
      }
    }
    
  $sql2 = "SELECT *  FROM  clienti where  codice  = '$clientex' " ;  
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
      $cliente =$clientex." - ".$ragsocclixx;
      $resp['cliente'] = $cliente;
      }
    }     

  $sql3 = "SELECT *  FROM  commesse where  commessa  = '$commessax' " ;  
  #echo $sql;
  $rCount = 1;
  $result3 = $conn->query($sql3);
  if ($result3->num_rows > 0) {
    while($macrogruppox = $result3->fetch_assoc())	
    {   
      $nomecommessaxx = $macrogruppox["nomecommessa"];
      $commessa=$commessax." - ".$nomecommessaxx;
      $resp['commessa'] = $commessa;
      }}        
  
  echo json_encode($resp);
?>