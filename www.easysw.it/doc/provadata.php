<?php
$data = "18/09/2019";
$comodo=explode("/",$data);
$data2=$comodo[1]."-".$comodo[0]."-".$comodo[2];
$date1 = str_replace('-', '/', $data2);
$datafine = date('Y-m-d',strtotime($date1 . "+1 days"));
echo $datafine
?>