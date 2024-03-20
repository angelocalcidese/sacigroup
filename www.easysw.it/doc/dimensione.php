<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
  </head>
  <body>
<?php
$file="chisiamo/poma1.jpg"; //ricavo da db il nome dell'inmmagine e gli do il percorso
list($width, $height, $type, $attr) = getimagesize($file);//lego i dati
#echo $width."  ".$height."<br>";
#if ($height > $width)
{$proporzione=$height/$width;}
#else
#{$proporzione=$width/$height;}
#echo $proporzione."<br>";
$altezza=445*$proporzione;
#echo $altezza."<br>";
#if(isset($width)){//verifico la lettura (può capitare che non sia possibile)
#    if($width >= $height){
#        $max_w="60%";//fisso la larghezza
#        $max_h=round($height/$width*60,1)."%";//adatto il % dell'altezza per non deformarw
#    }else{
#        $max_h="60%";//fisso l'altezza
#        $max_h=round($width/$height*60,1)."%";//adatto il % di width
#    }
    $stile="width: 445px; height: $altezza;";//preparo lo style
#}else
#{//non leggo metto solo la width
#    $stile="width: 30%;";
#}
echo "<img src=\"$file\" style=\"$stile\" title=\"$autore\" alt=\"$autore\">";
?>

  </body>
</html>
