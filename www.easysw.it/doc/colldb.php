<?php
/*
  $server = "62.149.150.193";
	$utente = "Sql677633";
	$db_pass = "9a01ef5d"; 
	$datab = "Sql677633_2";

	$connessione = @mysql_connect($server, $utente, $db_pass) or die("Errore connessione generale.");
	$db = mysql_select_db($datab, $connessione) or die("Errore connessione database progetto.");
*/  
$servername = "62.149.150.193";
$username = "Sql677633";
$password = "9a01ef5d";
$dbname = "Sql677633_4";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}   
  
?>