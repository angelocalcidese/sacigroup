<? 
include "conf_DB.php";
$ingranaggio=$_REQUEST["ingranaggio"];
$progr=$_REQUEST["progr"];
$pass=$_REQUEST["pass"];
if($ingranaggio==1){

$sql = "UPDATE mediatore SET                       
fatto='1',
pass='$pass'
where progr = '$progr'
";
  #echo $sql; 
  if ($conn->query($sql) === TRUE)
        { } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
  </head>
  <body>
<?php
$sql = "SELECT *  FROM  mediatore where fatto = '0' ";
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
     $progr = $macrogruppo["progr"];    
     $pass = $macrogruppo["pass"]; 
     $fatto = $macrogruppo["fatto"];
?>
<form method="POST" action="" name="modulo" enctype="multipart/form-data">
<input  type="text"   name="progr"  id="progr" maxlength="200" >       
<input  type="text"   name="pass"  id="pass" maxlength="200" >
<input type="hidden" name="ingranaggio" value="1" />           
<button  type="submit" type="button" >vai</button>
</form> 
<? }} ?>
  </body>
</html>