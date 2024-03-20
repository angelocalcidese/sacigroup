<?php
include "conf_DB.php";
$ingranaggio=$_REQUEST["ingranaggio"];
$nomemodulo=$_REQUEST["nomemodulo"];
if($ingranaggio==1){
$sql = "SELECT *  FROM  bacheca where modulo = '$nomemodulo' ";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
      $testo = $macrogruppo["testo"];
    }}
}    
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
<link href="./datapilcker3/jquery.datepick.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="./datapilcker3/jquery.plugin.js"></script>
<script src="./datapilcker3/jquery.datepick.js"></script>
<script type="text/javascript" src="./datapilcker3/jquery.datepick-it.js" ></script>
<script>
$(function() {
	$('#popupDatepicker').datepick();
  $('#popupDatepicker1').datepick();
	$('#inlineDatepicker').datepick({onSelect: showDate});

});

function showDate(date) {
	alert('The date chosen is ' + date);
}


</script> 
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;1,100&display=swap');
</style>   
<style>
body {
 background-image: url(carlobase.jpg);
 background-repeat: no-repeat;
 background-position: center;
 } 

</style> 
<style>
div#container {
min-width:   1000px;
  min-height:  500px;
  max-width:  700px;
  max-height: 1000px;
}
</style>  
  </head>
  <body >
<?php if($ingranaggio==""){ ?>
  <form action="" method="POST">
  <input type="text" name="nomemodulo" size="30" style="background-color: #e4dede; border: 0px; font-size: 12pt;">
  <input type="hidden" name="ingranaggio" value="1" />
  <input type="submit" value="Richiama Modulo" name="B3">
</form> 
<?php } else { ?>   
<div align="center">   
<div id="container"> 
<form action="altroprogramma.php" method="POST"> 
<?php echo $testo; ?>
<input type="submit" value="Memorizza Modulo" name="B3">
</form>
<?php } ?>
  </body>
</html>