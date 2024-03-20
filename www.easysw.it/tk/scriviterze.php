<?php
include "conf_DB.php";
$numero=$_REQUEST["numero"]; 
$login=$_REQUEST["login"];
$ragsoc=$_REQUEST["ragsoc"];  
$adesso=date("d/m/Y H.m.s");
 $sql = "INSERT INTO assegnato
              (               
              numero, 
              ragsoc, 
              dataassegno, 
              login) 
            VALUES (            
              '$numero',
              '$ragsoc', 
              '$adesso',
              '$login'
              )";
#echo $sql; exit;

  if ($conn->query($sql) !== true){  
   
    //echo false; 
  } 
    $sqlx = "UPDATE tk set 
        stato = 'Assegnato'
        where 
        numero = '$numero' 
        ";
    if ($conn->query($sqlx) === true)
      {
      $dicichi="Memorizzato nuovo Assegnamento a ".$ragsoc;
      $dataoggi=date("Ymd H.m.s");
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
        '$dicichi',
        '$login',
        '',
        '',
        '')";
             if ($conn->query($sqluu) === TRUE)
             {  }
             else { echo $sqluu."Errore inserimento recoerd: " . $conn->error; exit;} 
        echo true; 
      } else { 
        echo false; 
      }    
?>