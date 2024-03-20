<?
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="index.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php
}
$login=$_REQUEST["login"];
$ingranaggio=$_REQUEST["ingranaggio"];

include "conf_DB.php";
$oggi=date("d/m/Y");
if ($ingranaggio==1)
{
$pass=$_REQUEST["pass"];
$comodo = explode(" - ",$pass);
$passx=$comodo[0];
$tessera=$comodo[1];
if($pass!=""){
$sql1 = "select * from pass where numeropass = '$passx'    ";
#echo $sql1;
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ 
      $uscita = $macrogruppo["uscita"];	
      #echo "uscita ".$uscita;
    }}
$sql = "insert into storicopass
 (
  numeropass,  
  entrata, 
  uscita, 
  tessera
 )
  values
 ( 
  '$passx',
  '$oggi',  
  '$uscita',  
  '$tessera' 
   )
    ";
#echo $sql; exit;
    if ($conn->query($sql) === TRUE)
        { } 
        else { echo "Error inserted recordx: " . $conn->error; }  




$sql = "UPDATE pass set 
uscita = '',
tessera = '0'
where 
numeropass = '$passx' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; }  
$sql = "UPDATE soci set 
assegnato = '0'
where 
tessera = '$tessera' 
";
#echo $sql;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; }          
}
}   
   


?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Opera Messa della Carità</title>
  <link rel="stylesheet" href="css/style.css">
<style>
div#container {
min-width:   1000px;
  min-height:  500px;
  max-width:  1000px;
  max-height: 1000px;
}
</style>
<style>
a 
{
    text-decoration: none; 
    font-weight: normal;
    color: #000000
}
 
a:hover
{
    color: #0080FF;
}
</style>
<style>
a 
{
    text-decoration: none; 
    font-weight: normal;
    color: #000000
}
 
a:hover
{
    color: #0080FF;
}
</style>
<style>
.table4 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
background: #ECE9E0;
color: #656665;
border: 16px solid #5197FF;
border-radius: 20px;
}
.table4 th {
font-size: 18px;
padding: 10px;
}
.table4 td {
background: #B3B3D0;
padding: 5px;

}

.table5 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
background: #ECE9E0;
color: #656665;
border: 16px solid #9B9B9B;
border-radius: 20px;
}
.table5 th {
font-size: 18px;
padding: 10px;
}
.table5 td {
background: #8888B3;
padding: 5px;
}

.table6 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 1px;
background: #ECE9E0;
color: #656665;
border: 16px solid #B2CAEA;
border-radius: 20px;

}
.table6 th {
font-size: 18px;
padding: 10px;
}
.table6 td {
background: #B3B3D0;
padding: 5px;
}

.table7 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
background: #ECE9E0;
color: #656665;
border: 16px solid #FF9900;
border-radius: 20px;
}
.table7 th {
font-size: 18px;
padding: 10px;
}
.table7 td {
background: #FFD393;
padding: 5px;
}
.table8 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
background: #ECE9E0;
color: #656665;
border: 16px solid #006600;
border-radius: 20px;
}
.table8 th {
font-size: 18px;
padding: 10px;
}
.table8 td {
background: #97FF97;
padding: 5px;
}
.table9 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
background: #ECE9E0;
color: #656665;
border: 16px solid #0066FF;
border-radius: 20px;
}
.table9 th {
font-size: 18px;
padding: 10px;
}
.table9 td {
background: #AECEFF;
padding: 5px;
}
h1 {
  text-shadow: 2px 2px 4px #999999;
  filter:DropShadow(Color=#000000, OffX=2, OffY=2);
} 
h2 {
  text-shadow: 2px 2px 4px #000000;
  filter:DropShadow(Color=#000000, OffX=2, OffY=2);
}
div.polaroid {
  width: 954px;
  height: 140px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}

div.containerx {
  padding: 10px;
}
.table6x {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 0px;
background: #ECE9E0;
color: #656665;
border: 10px solid #b0adad;
border-radius: 20px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}
.table6x th {
font-size: 18px;
padding: 10px;
}
.table6x td {
background: #ffffff;
padding: 5px;
}   
</style>
<script type="text/javascript">
		
		function controllo(){ 
            with(document.modulo) { 
 
        if(cognome.value==""&&assistito.value=="NUOVO ASSISITO" ) { 
            alert("Error: manca COGNOME"); 
            cognome.focus(); 
            return false; 
                            } 
        if(nome.value==""&&assistito.value=="NUOVO ASSISTITO" ) { 
            alert("Error: manca NOME"); 
            nome.focus(); 
            return false; 
                            } 
        if(datanascita.value==""&&assistito.value=="NUOVO ASSISTITO" ) { 
            alert("Error: manca DATA DI NACITA"); 
            datanascita.focus(); 
            return false; 
                            }                     
         if(nazionalita.value==""&&assistito.value=="NUOVO ASSISTITO" ) { 
            alert("Error: manca NAZIONALITA'"); 
            nazionalita.focus(); 
            return false; 
                            }                     
                            
                                                       
                                                        
                                  } 
        } 

</script>
</head>

<body>

<div align="center" >
	<table border="0" width="760" height="140" bgcolor="#ffffff"  >
		<tr > 
			<td style="border-radius: 20px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"">
      <div align="center">
			<img border="0" src="carlopoma.png" width="200" height="90"> <br>
      </div>
      </td>
      </tr>
   <tr> 

	
</tr> 
<td bgcolor="#FFFFFF" style="border: 0px ; "><a href="menugenerale.php?login=<?php echo $login; ?>">Menu Generale</a></td>             

 
   
	</table>  
      
</div> 

<div align="center" >	

<div align="center">   
<div id="container">

<h1>
<p align="center"><b><font face="Arial" size="5" color="#993300">RESTITUZIONE PASS</font></b></p>
<table border="0"  width="760"  bgcolor="#FFF4F7" class="table6" >	
<form method="POST" action="" name="modulo" onSubmit="return controllo();">
	<tr >
				<td width="30%" ><font face="Arial" size="2" color="#ffffff">- OGGI:</font></td>
				<td>				
					<p>
          <? echo $oggi; ?>
					</p>
				</td>
			</tr> 


 <tr>
					<td ><font face="Arial" size="2" color="#fd071e"><b>- PASS: </font><font size="5" face="Arial" color="#fd071e"><? echo $personegiro; ?></font></b></td>
				<td>				
					 <select size="1" name="pass" id="pass" style="font-size: 12pt">
			   
<?php
$sql1 = "select * from pass where uscita != ''    order by numeropass";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ 
      $numeropass = $macrogruppo["numeropass"];	
      $tesserayy= $macrogruppo["tessera"]; 
$sql1x = "select * from soci  where tessera = '$tesserayy' ";
echo $sql1x;    
$result1x = $conn->query($sql1x);
if ($result1x->num_rows > 0) {
  while($macrogruppox = $result1x->fetch_assoc())
		{ 
      $cognomem = $macrogruppox["cognome"];
      $nomem = $macrogruppox["nome"];
      $tesseraxx = $macrogruppox["tessera"];	
      $data_nascita = $macrogruppox["data_nascita"];	
      $nazionalita = $macrogruppox["nazionalita"];	
      $telefono = $macrogruppxo["telefono"];	  
      }}     
      $numeropass = sprintf("%02d", $numeropass);  
      $malato=$numeropass. " - ".$tesseraxx." - ".$cognomem." ".$nomem." ".$data_nascita." ".$nazionalita." ".$telefono;    
?>		
			<option style="background-color: #ffffff"><?php echo $malato; ?></option>
<?php } } ?>		
			</select>   		
  </td> 

			</tr> 
	<tr>
				<td ><font face="Arial" size="2" color="#ffffff">- RICONSEGNA:</font></td>
				<td>	
        <input type="hidden" name="ingranaggio" value="1" />
        <input type="hidden" name="login" value="<?php echo $login; ?>" />
        <input type="hidden" name="tessera" value="<?php echo $tesseraxx; ?>" />
					<p><input type="submit" value="Riconsegna" name="B3"></p>
				</td>
			</tr>      		 
</form>
</table>
<h1>
<p align="center"><b><font face="Arial" size="5" color="#993300">PASS DISTRIBUITI</font></b></p>
<table border="0"  width="760" bgcolor="#FFF4F7" class="table6" >	<tr>

	<tr>
				<td ><font face="Arial" size="2" color="#000000">PASS</font></td>
        <td ><font face="Arial" size="2" color="#000000">IL</font></td>
        <td ><font face="Arial" size="2" color="#000000">COGNOME</font></td>
        <td ><font face="Arial" size="2" color="#000000">NOME</font></td>
        <td ><font face="Arial" size="2" color="#000000">SESSO</font></td>
        <td ><font face="Arial" size="2" color="#000000">DATA NASCITA</font></td>
        <td ><font face="Arial" size="2" color="#000000">NAZIONALITA'</font></td>
        <td ><font face="Arial" size="2" color="#000000">TELEFONO</font></td>
			</tr> 
<?php
$sql1 = "select * from pass where uscita != ''  and entrata = ''  order by numeropass";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ 
      $numeropass = $macrogruppo["numeropass"];
      $tessera = $macrogruppo["tessera"];
      $entrata= $macrogruppo["entrata"];
      $uscita= $macrogruppo["uscita"];
$sql1x = "select * from soci where tessera = '$tessera'   order by cognome";
$result1x = $conn->query($sql1x);
if ($result1x->num_rows > 0) {
  while($macrogruppox = $result1x->fetch_assoc())
		{ 
      $cognomemx = $macrogruppox["cognome"];
      $nomemx = $macrogruppox["nome"];
      $tesserax = $macrogruppox["tessera"];	
      $data_nascitax = $macrogruppox["data_nascita"];	
      $nazionalitax = $macrogruppox["nazionalita"];	
      $telefonox = $macrogruppox["telefono"];
      $data_iscrizione = $macrogruppox["data_iscrizione"];
      $sesso = $macrogruppox["sesso"];   
      $numeropassx = sprintf("%02d", $numeropass);   
?>		      
<tr>      
    <td align="center"><font face="Arial" size="3" color="#ffffff"><font color="red"><? echo $numeropassx; ?></font></font></td>
    <td ><font face="Arial" size="2" color="#ffffff"><? echo $uscita; ?></font></td>
        <td ><font face="Arial" size="2" color="#ffffff"><? echo $cognomemx; ?></font></td>
        <td ><font face="Arial" size="2" color="#ffffff"><? echo $nomemx; ?></font></td>
        <td ><font face="Arial" size="2" color="#ffffff"><? echo $sesso; ?></font></td>
        <td ><font face="Arial" size="2" color="#ffffff"><? echo $data_nascitax; ?></font></td>
        <td ><font face="Arial" size="2" color="#ffffff"><? echo $nazionalitax; ?></font></td>
        <td ><font face="Arial" size="2" color="#ffffff"><? echo $telefonox; ?></font></td>
			</tr>   
<? }}}} ?>      
 <tr>
 </table>
</div>
</div> </div>
<p align=center ><b><font color="#FF0000" face="Arial"><?php if ($trovato=="0") {echo "Login o Password Errate". "&nbsp;"; }else {?>&nbsp;<?php } ?></font></b></p>
</body>

</html>