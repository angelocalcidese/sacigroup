<?php

/*
 * CONNESSIONE AL SERVER ON-LINE
 *
 */  
  $server = "sql.spi.it.cloud.seeweb.it:3306";
	$utente = "admin";
	$db_pass = "eshoZa4d"; 
	$datab = "test_db";

/*
  $server = "localhost";
	$utente = "root";
	$db_pass = ""; 
	$datab = "spi_db_STAGE";
*/

	$connessione = @mysql_connect($server, $utente, $db_pass) or die("Errore connessione generale.");
	$db = mysql_select_db($datab, $connessione) or die("Errore connessione database SPI.");
 	mysql_set_charset("utf8");
  
$sql = "SELECT *  FROM  chisiamo where  progr = '1' "; 
	$query = mysql_query($sql,$connessione) or die("Err1. SQL: $sql");
	for ($i="1"; $macrogruppo = mysql_fetch_array($query); $i++)	
	{  $immagine = $macrogruppo["immagine"];}  
  echo  $immagine;
?>