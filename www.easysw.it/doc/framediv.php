<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="index.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php  }
$login=$_REQUEST["login"];
#$login="mimmo";
$zona=$_REQUEST["zona"];
$ingranaggio=$_REQUEST["ingranaggio"];
$progr=$_REQUEST["progr"];
$fl=$_REQUEST["fl"];
#echo "ingr ".$login;  exit;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//IT" "http://www.w3.org/TR/html4/frameset.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>gestione documenti</title>
<style>
/* width */
::-webkit-scrollbar {
  width: 5px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;1,100&display=swap');
</style>
</head>
<?php 
include "conf_DB.php";
$oggi=date("Y-m-d H:m:s");
   $sql = "INSERT INTO `uso`(
   `progressivo`,
   data, 
   `login` 
   ) 
   VALUES (
   '$progr',
   '$oggi',  
   '$login')";
  # echo $sql; exit;
if ($conn->query($sql) === FALSE) 
    {echo "errore: ".$sql; exit; } 
    else
     {}


?>
<frameset  rows="140px,100%"  noresize = "noresize" frameborder = "0">
<frame src="mettitimbro.php?login=<?echo $login; ?>&progr=<? echo $progr; ?>" name="marchio1" scrolling= "no">
<frameset  cols="303px,100%"  noresize = "noresize" frameborder = "0">
 <frame src="esponitimbro.php?login=<?echo $login; ?>&progr=<? echo $progr; ?>" name="marchio2" scrolling= "yes">
<frame src="esponipdfff.php?login=<?echo $login; ?>&fl=<? echo $fl; ?>" name="evidenza">


<noframes>					
<p>Qui può essere indicato il link a
<a href="senzaFrame.html"> una versione del sito</a>
che non utilizzi un layout a frame
</p>
</noframes>

</frameset>
</html>
