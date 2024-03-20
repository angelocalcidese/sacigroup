<?php
include "conf_DB.php";
$numero=$_REQUEST["numero"]; 
$login=$_REQUEST["login"];
$ragsoc=$_REQUEST["ragsoc"];  
$adesso=date("d/m/Y H.m.s");
 $sql = "INSERT INTO assegnatotec
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
  if ($conn->query($sql) === TRUE)
        { 
        $sql = "UPDATE tk set 
        stato = 'Assegnato'
        where 
        numero = '$numero' 
        ";
if ($conn->query($sql) === TRUE)
    {
    $dicichi="Memorizzato nuovo Assegnamento a tecnico ".$ragsoc;
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
     } 
    else { echo "Error inserted record: " . $conn->error; } 
        
        
        echo true; } 
        else { 
    echo $sql."Errore inserimento recoerd: " . $conn->error; } 
?>