<?php $ingranaggio=$_REQUEST["ingranaggio"]; ?>
<?php $login=$_REQUEST["login"]; ?>

<!--
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Portale rete La Calla</title>
  <script type="text/javascript" src="ajax.js"></script>
</head>
<body onLoad="location.href='index1.php?ingranaggio=<? echo $ingranaggio; ?>&login=<? echo $login; ?>&larg='+window.innerWidth+'&alt='+window.innerHeight;">

</body>
</html>
-->
<?php
function is_mobile(){

	// ritorna true se uno di questi browser mobile viene trovato

	$regex_match="/(nokia|iphone|android|motorola|^mot\-|softbank|foma|docomo|kddi|up\.browser|up\.link|";
	$regex_match.="htc|dopod|blazer|netfront|helio|hosin|huawei|novarra|CoolPad|webos|techfaith|palmsource|";
	$regex_match.="blackberry|alcatel|amoi|ktouch|nexian|samsung|^sam\-|s[cg]h|^lge|ericsson|philips|sagem|wellcom|bunjalloo|maui|";	
	$regex_match.="symbian|smartphone|midp|wap|phone|windows ce|iemobile|^spice|^bird|^zte\-|longcos|pantech|gionee|^sie\-|portalmmm|";
	$regex_match.="jig\s browser|hiptop|^ucweb|^benq|haier|^lct|opera\s*mobi|opera\*mini|320x320|240x320|176x220";
	$regex_match.=")/i";		
	return isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE']) or preg_match($regex_match, strtolower($_SERVER['HTTP_USER_AGENT']));
}
$width3="<script >document.write(window.innerWidth)</script>";
$height3="<script >document.write(window.innerHeight)</script>";
//Verifica che il dispositivo sia mobile
if(is_mobile()) {
	//E' un browser mobile, rimanda al sito mobile
	header("Location: http://www.rete.it/");
} else {
	//Non è un browser mobile
  ?>

 <body onLoad="location.href='index1.php?ingranaggio=<? echo $ingranaggio; ?>&login=<? echo $login; ?>&larg='+window.innerWidth+'&alt='+window.innerHeight;"> 
<?

	// oppure inserisci il codice html direttamente qui

}
?>