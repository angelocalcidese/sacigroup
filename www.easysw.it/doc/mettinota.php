<?php
$tessera=$_REQUEST["tessera"];
$nota=$_REQUEST["nota"];
$ingranaggio=$_REQUEST["ingranaggio"];
include "conf_DB.php";

if ($ingranaggio==1){
$sql = "DELETE from nota
where 
tessera = '$tessera' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "errore cancellazione: " . $conn->error; } 
if ($nota!="") {
 $sql = "INSERT INTO nota
              (              
              tessera, 
              nota 
             ) 
            VALUES (            
              '$tessera', 
              '$nota'
              )";
              #echo $sql;
  if ($conn->query($sql) === TRUE)
        { } 
        else { echo $sql."Errore inserimento nota: " . $conn->error; } 

}
}

$art_smp = "";
#$tessera=56;
$sql1 = "SELECT * FROM soci  where tessera = '$tessera' ";
#
#echo $sql1; exit;
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ 
      $tessera = $macrogruppo["tessera"];	
      $cognome = $macrogruppo["cognome"];
      $nome = $macrogruppo["nome"];
      $datanascita = $macrogruppo["data_nascita"];
      $nazionalita = $macrogruppo["nazionalita"];
      $natoa = $macrogruppo["luogo_nascita"];
      $provnatoa = $macrogruppo["provincia_nascita"];
      $indirizzores = $macrogruppo["indirizzo"];
      $residentecitta = $macrogruppo["localita_residenza"];
      $residenteprov= $macrogruppo["provincia"];
      $cap = $macrogruppo["cap"];
      $telefono = $macrogruppo["telefono"];
      $email = $macrogruppo["email"];
      $codfisc = $macrogruppo["codice_fiscale"];
      $oggi = $macrogruppo["data_iscrizione"];
      $accdati = $macrogruppo["ass"];
      $telefono = $macrogruppo["telefono"];	
      $sesso= $macrogruppo["sesso"];	
      $foto = $macrogruppo["foto"];	
      
      $cellulare=""; 
      
			} }
      $oggi=date("d/m/Y");
$notaletta="";      
$sql1w = "select * from nota  where tessera = ". $tessera;
#echo $sql1w;
$result1w = $conn->query($sql1w);
if ($result1w->num_rows > 0) {   
while($macrogruppow = $result1w->fetch_assoc()) 
	{   $notaletta = $macrogruppow["nota"];
  }} 
  #echo $indirizzofoto; exit;

?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">

<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>CSRC</title>
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
border-spacing: 0px;
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
border-radius: 20px;
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
input[type=submit] {
    padding:2px 30px; 
    background:#0adc6d; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;  } 
input{ /* Stili per il campo di testo e per la textarea */
    background: #1C1C1C; /* Colore di sfondo */
    border: 0px solid #323232; /* Bordo */
    color: #000000; /* Colore del testo */
    height: 20px; /* Altezza */
    line-height: 20px; /* Altezza di riga */
    font-weight: bold;
    padding: 0 10px; /* Padding */
}    
</style>

</head>

<body>

<div align="center" >
	<table style=" border: 0px solid black;" width="760" height="140" bgcolor="#ffffff"  >
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

 
   
	</table>  
      
</div>

<?
$newfile="foto/".$tessera.".jpg";;
      $FileFound = file_exists($newfile);
      #echo $FileFound; exit;
      if ($FileFound==1)
      {$indirizzofoto="./foto/".$tessera.".jpg"; }
      else
      {$indirizzofoto="./foto/generico.jpg"; }
     
list($width, $height, $type, $attr) = getimagesize($indirizzofoto);//lego i dati
# echo $indirizzofoto; exit;
#echo $width."  ".$height."<br>";
#if ($height > $width)
{$proporzione=$height/$width;}
#else
#{$proporzione=$width/$height;}
#echo $proporzione."<br>";
$altezza=120*$proporzione;
?>   

<div align="center">   
<div id="container">
<p align="center"><b><font face="Arial" size="5" color="#993300">INSERIMENTO NOTA A OSPITE</font></b></p>
<table  width="100%"  class="table6">
	<tr>
		<td>
		<table border="1" width="100%">
   <tr> 
   <td align="center">
   <img border="0" src="<? echo $indirizzofoto; ?>" width="120" height="<? $altezza; ?>"> 
   </td>
   <td colspan="3" >
   	<table border="0" width="100%">
    <form method="POST" action="" ">
    <tr>
    <td  align="center"><p><textarea style="background-color: #ececee" name="nota"  cols="85" rows="5"><?php echo $notaletta; ?></textarea></td>	            
      
    </tr>
    <tr>
       <input type="hidden" name="ingranaggio" value="1" />
       <input type="hidden" name="login" value="<?php echo $login; ?>" />
       <input type="hidden" name="tessera" value="<?php echo $tessera; ?>" />				
			<td  align="center"><input type="submit" value="Inserisci Nota" name="B3"></td>
    </tr>
    </table>   
   </td> 
   </tr>
    
				
      <tr> 
				<td colspan="2" ><font face="Arial" size="1" color="#000000" >- COGNOME:</font></td>
        <td colspan="2" ><font face="Arial" size="1" color="#000000" >- NOME:</font></td>  
        </tr>
        <tr>
				<td colspan="2" ><p><input type="text" style="background: #e5e1e1; color: red;" name="cognome" value="<?php echo $cognome; ?>" size="67" style="background-color: #ececee"></p></td>				
				<td colspan="2"><p><input type="text" style="background: #e5e1e1; color: red;" name="nome" value="<?php echo $nome; ?>" size="46" style="background-color: #ececee"></p></td>
			</tr>
      
      
			<tr>
				<td ><font face="Arial" size="1" color="#000000">- NATO/A IL:</font></td>
        <td ><font face="Arial" size="1" color="#000000">- LUOGO DI NASCITA:</font></td>
        <td ><font face="Arial" size="1" color="#000000">- NAZIONALITA':</font></td>
        <td ><font face="Arial" size="1" color="#000000">- SESSO:</font></td>
        <tr>
				<td><p><input type="text" name="datanascita" value="<?php echo $datanascita; ?>" size="10" style="background-color: #ececee"></p></td>			
				<td><p><input type="text" name="provnatoa" value="<?php echo $natoa; ?>" size="30" style="background-color: #ececee"></p></td>	
        <td ><p><input type="text" name="nazionalita" value="<?php echo $nazionalita; ?>"  size="30" style="background-color: #ececee"></p></td>
        <td ><p><input type="text" name="nazionalita" value="<?php echo $sesso; ?>"  size="2" style="background-color: #ececee"></p></td>
        
        </tr>
</table>         

</body>

</html>