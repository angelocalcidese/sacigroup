<?php
$filename="esempio.xls";
header ("Content-Type: application/vnd.ms-excel");
header ("Content-Disposition: inline; filename=$filename");
?>
<html>
<head><title>Utenti</title></head>
<body>   
<table border="1?> 
<tr>
  <th>Nome</th>
  <th>Cognome</th>
</tr>
<tr>
  <td>Mario</td>
  <td>Rossi</td>
</tr>
<tr>
  <td>Roberto</td>
  <td>Verdi</td>
</tr>
</table>
</body>
</html>