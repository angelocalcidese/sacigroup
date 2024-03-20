<?php
$ingranaggio=$_REQUEST["ingranaggio"];

if ($ingranaggio==1)
{
$zona=$_REQUEST["zona"];
#echo $zona;
setcookie("POMACLIENTLOGGED",$login,time()+86400,"/");
    $url_pagina_chiamante="pomaindex.php?zona=".$zona;  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
			 </script>
<?php      
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
min-width:   1200px;
  min-height:  150px;
  max-width:  1200px;
  max-height: 150px;
  
}
div#sottocontainer {
min-width:   1200px;
  min-height:  1300px;
  max-width:  1200px;
  max-height: 1300px;
  
}
</style>
</head>

<body>
<div align="center" >
	
	    <div align="center" style="width: 60em;">
			<td style="border: 0px ; ">
			<img border="0" src="carlopoma.png" width="400" height="140"></td>
		  </div>
      <div align="left" style="width: 60em;">
      <hr align=”center” size=”1? width=”380? color=”blue” noshade>
      <table  style="width: 60em; border: 0px ; border-bottom: 0px;">
      <tr>
    </tr>
     </table>
      </div>
</div> 
<div align="center">
<div  id="sottocontainer">

<br>
 <form  method="POST" action="" >
  <div align="center"><font face="Verdana" size="2" ><header >Gruppi di Volontariato Vincenziano <br>
   AIC Italia <br><font color="#ffff00">
   Gestione Assistiti</font></header></font></div>
   <br>
<div align="center" >  
 <input type="hidden" name="ingranaggio" value="1" />
<input type="submit"  value="ZONA 1 - CENTRO VINCENZIANO ARIBERTO" name="zona" style="font-family: Tahoma; font-size: 10pt;background-color:#ccccff;">
<input type="submit"  value="ZONA 2 - GRUPPO GORLA CRESCENZAGO"    name="zona" style="font-family: Tahoma; font-size: 10pt;">

<input type="submit"  value="ZONA 4 - CASA DI ACCOGLIENZA"             name="zona" style="font-family: Tahoma; font-size: 10pt;background-color:#ccccff;">
<input type="submit"  value="ZONA 4 - CENTRO VINCENZIANO PONTE LAMBRO" name="zona" style="font-family: Tahoma; font-size: 10pt;">


<input type="submit"  value="ZONA 4 - CEDAG SPAZIO PONTE"  name="zona" style="font-family: Tahoma; font-size: 10pt;background-color:#ccccff;">
<input type="submit"  value="ZONA 4 - GRUPPO BUONCOMPAGNI" name="zona" style="font-family: Tahoma; font-size: 10pt;">

<input type="submit"  value="ZONA 5 - GRUPPO NEERA - MELOGRANO ROSSO" name="zona" style="font-family: Tahoma; font-size: 10pt;background-color:#ccccff;">
<input type="submit"  value="ZONA 6 - GRUPPO BUONCOMPAGNI"            name="zona" style="font-family: Tahoma; font-size: 10pt;">

<input type="submit"  value="ZONA 7 - CENTRO VINCENZIANO BAGGIO" name="zona" style="font-family: Tahoma; font-size: 10pt;background-color:#ccccff;">
<input type="submit"  value="ZONA 7 - CEDAG QR52"                name="zona" style="font-family: Tahoma; font-size: 10pt;">

<input type="submit"  value="ZONA 9 - CENTRO VINCENZIANO DANTE"  name="zona" style="font-family: Tahoma; font-size: 10pt;background-color:#ccccff;">

</div>              
<br>  
</form>
</div>
</div>
<p align=center ><b><font color="#FF0000" face="Arial"><?php if ($trovato=="0") {echo "Login o Password Errate". "&nbsp;"; }else {?>&nbsp;<?php } ?></font></b></p>
</body>

</html>