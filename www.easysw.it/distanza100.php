<?
$indda=$_REQUEST["indda"];
$inda=$_REQUEST["inda"];
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
<form method="POST"  action="https://www.retelacalla.it/distanza.php?indda=<? echo $indda; ?>&inda=<? echo $inda; ?>"  >    
<button class="btn btn-primary" type="submit"   type="button" >Calcola la distanza</button>
</center>
<script>
document.addEventListener('DOMContentLoaded', () => {
  document.querySelector('form').submit();
});
</script>
</body>
</html> 
