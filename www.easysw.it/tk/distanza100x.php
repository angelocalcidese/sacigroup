<?
$indda=$_REQUEST["indda"];
$inda=$_REQUEST["inda"];  
$codice=$_REQUEST["codice"];
$cat=$_REQUEST["codicev"];
#$codice="1325";
#echo "cod ".$codice; exit;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
<link rel="stylesheet" href="query-ui.css">
<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">  
  </head>
  <body>
  
  <br>
  <center>
<form method="POST"  action="https://www.retelacalla.it/distanzax.php?indda=<? echo $indda; ?>&inda=<? echo $inda; ?>&codice=<? echo $codice; ?>&cat=<? echo $cat; ?>"  >    
<button class="btn btn-primary" type="submit"   type="button" >Calcola la distanza</button>
</center>
<script>
document.addEventListener('DOMContentLoaded', () => {
  document.querySelector('form').submit();
});
</script>
<script>
jQuery('body').on( 'added_to_cart', function(event, fragments, cart_hash) {
 //show product info after added
 jQuery('.atc-notice-wrapper').fadeIn();
 // add setTimeout to autoclose it after 5 seconds
 setTimeout(function(){
   jQuery('.atc-notice-wrapper').fadeOut();
 }, 5000);
});
</script>
</body>
</html> 
