<?php
$zona=$_REQUEST["zona"];
$ingranaggio=$_REQUEST["ingranaggio"];
if ($zona=="")   {exit;}
#echo "zona ".$zona;
#echo "ingranaggio ".$ingranaggio;
#echo "ingra ".$ingranaggio;
include "conf_DB.php";
$trovato="";
if ($ingranaggio==1)
{
$login=$_REQUEST["login"];
$passw=$_REQUEST["passw"];
$ip = $_SERVER['REMOTE_ADDR'];
#echo "pass ".$login; exit;
$trovato=0;
$sql1 = "SELECT * FROM utenti  where login = '$login' and password = '$passw' and nazione = 'ITALIA' and citta = 'MILANO' and zona = '$zona'";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{ $trovato=1;	
$sql = "INSERT INTO `accessi` 
(`prg`, 
  `dataaccesso`,
   `login`,
    `password`,
     `buono`,
      `ip` ) 
VALUES 
(NULL, 
  CURRENT_TIMESTAMP,
   '$login',
    '$passw',
     'SI',
      '$ip');";

if ($conn->query($sql) === TRUE)      
  {  echo "";   }     
			} }

if ($trovato==1)
    { 
    setcookie("POMACLIENTLOGGED",$login,time()+86400,"/");
    $url_pagina_chiamante="menugenerale.php?login=".$login."&zona=".$zona;  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
			 </script>
  <?php  }
else
{ $sql = "INSERT INTO `accessi` 
(`prg`, 
  `dataaccesso`,
   `login`,
    `password`,
     `buono`,
     `ip` ) 
VALUES 
(NULL, 
  CURRENT_TIMESTAMP,
   '$login',
    '$passw',
     'NO',
      '$ip');";
#echo  $sql; exit;
if ($conn->query($sql) === TRUE)
  {  echo "";   } 
}    
}
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Gruppi di Volontariato Vincenziano</title>
  <link rel="stylesheet" href="css/style.css">
<style>
body {
 background-image: url(carlobase.jpg);
 background-repeat: no-repeat;
 background-position: center;
 } 

</style>
<style>
div#container {
min-width:   800px;
  min-height:  500px;
  max-width:  1500px;
  max-height: 1000px;
}
div#sottocontainer {
min-width:   800px;
  min-height:  1500px;
  max-width:  800px;
  max-height: 1000px;
}
</style>
</head>

<body>

<div align="center" >
	<table border="0" width="760" height="140" bgcolor="#ffffff"  >
		<tr > 
			<td style="border-radius: 20px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"">
      <div align="center">
			<img border="0" src="carlopoma.png" width="400" height="140"> <br>
      </div>
      </td>
      </tr>
   <tr> 

	
</tr>     
	</table>       
</div> 
<div align="center" >	

	<p>&nbsp;</p>
 <form  method="POST" action="" >
  <div align="center"><font face="Verdana" size="3"><header>Gruppi di Volontariato Vincenziano <br>
  <?php echo $zona; ?></header></font></div>
  <div align="left"><label>Username <span>*</span></label></div>
  <div align="left"><input name="login" /></div>
  <div align="left"><label>Password <span>*</span></label></div>
  <div align="left"><input type="password" name="passw" id="passw" /></div>
  <input type="hidden" name="ingranaggio" value="1" /> 
  <div align="left"><button>Login</button></div>
</form>
</div>
</div> </div>
<p align=center ><b><font color="#FF0000" face="Arial"><?php if ($trovato=="0") {echo "Login o Password Errate". "&nbsp;"; }else {?>&nbsp;<?php } ?></font></b></p>
</body>

</html>