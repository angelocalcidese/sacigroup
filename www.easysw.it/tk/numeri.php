<?php
$distance="45.78";
$comodo=explode('Km',$distance);
$distance=$comodo[0];
$distance=str_pad($distance,7,"0", STR_PAD_LEFT);
echo "km ".$distance;
?>