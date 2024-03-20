<?php
include "conf_DB.php";

$login=$_REQUEST["login"];
$insegna=$_REQUEST["insegna"];
$ragsoc=$_REQUEST["ragsoc"];
$indirizzo=$_REQUEST["indirizzo"];
$cap=$_REQUEST["cap"];
$citta=$_REQUEST["citta"];
$contatto=$_REQUEST["contatto"];
$telefono=$_REQUEST["telefono"];
$prov=$_REQUEST["prov"];
$note=$_REQUEST["note"];
 $sql = "INSERT INTO luogo
        (insegna,
        ragsoc,
        indirizzo,
        cap,
        citta,
        contatto,
        telefono,
        prov,
        note) 
        VALUES ( 
        '$insegna',
        '$ragsoc',
        '$indirizzo',
        '$cap',
        '$citta',
        '$contatto',
        '$telefono',
        '$prov',
        '$note')";
             if ($conn->query($sql) === TRUE)
             {  }
             else { echo $sql."Errore inserimento recoerd: " . $conn->error; exit;}
             

echo true;
?>