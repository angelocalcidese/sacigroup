
  <?

$sqlx = "SELECT  catassegnato
FROM daspedire a where (a.ddt is null) and (a.catassegnato != '') and (a.pl is null or a.pl = '')
group by catassegnato";
#echo $sqlx; 
$resultf = $conn->query($sqlx);
if ($resultf->num_rows > 0) {
    // Array per memorizzare i dati
    $dati_array = array();
    while($row = $resultf->fetch_assoc()) {$dati_array[] = $row['catassegnato'];}} 
    else
    {}
$lunghezza = count($dati_array);
#echo $lunghezza; exit;
for ($i = 0; $i < $lunghezza; $i++) {
$catdacercare=$dati_array[$i];
$sql1 = "SELECT * FROM progressivopl  where progr = '1' ";
#echo $sql1;  exit;
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $tessera = $macrogruppo["tessera"]; }}
$tessera++;
$sql = "UPDATE progressivopl set 
tessera = '$tessera'
where 
progr = '1' ";
if ($conn->query($sql) === TRUE) { } else { echo "Error inserted record: " . $conn->error; } 
$sqlx = "SELECT  * FROM daspedire a where (a.ddt is null) and (a.catassegnato != '') and (a.pl is null or a.pl = '') and (catassegnato = '$catdacercare') ";
#echo $sqlx;
$rCountx = 1;
$resultx = $conn->query($sqlx);
if ($resultx->num_rows > 0) {
  while($macrogruppox = $resultx->fetch_assoc())	
	{
     $catassegnato= $macrogruppox["catassegnato"]; 
     $contatore= $macrogruppox["contatore"];
     $progrpl= $macrogruppox["progr"];
     $oggi=date("d/m/Y");
$sql = "UPDATE daspedire set 
pl = '$tessera',
pldata = '$oggi'
where 
progr = '$progrpl' ";
#echo $sql;
if ($conn->query($sql) === TRUE) { } else { echo "Error inserted record: " . $conn->error; }         
}}
}
?>