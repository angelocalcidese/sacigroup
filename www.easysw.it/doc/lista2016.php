<?php
include "conf_DB.php";
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 4</title>
</head>
<style>
div#container {
min-width:   800px;
  min-height:  500px;
  max-width:  800px;
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

<?php 
$sql = "SELECT *  FROM  quote where  anno = '2016'";  
#echo $sql ."<br>";
$rCount = 1;

	$query = mysql_query($sql,$connessione) or die("Err1. SQL: $sql");
	for ($i="1"; $macrogruppo = mysql_fetch_array($query); $i++)
	
	{  $tessera = $macrogruppo["tessera"];
$sw=0;  
$sqlff = "SELECT *  FROM  soci where  tessera = '$tessera'";  
#echo $sql ."<br>";
$rCount = 1;

	$queryff = mysql_query($sqlff,$connessione) or die("Err1. SQL: $sqlff");
	for ($iff="1"; $macrogruppo = mysql_fetch_array($queryff); $iff++)
	
	{ $sw=1;}
  if ($sw==0) {echo $tessera."<br>";}
}
?>
</body>

</html>