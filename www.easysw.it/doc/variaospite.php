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
$tessera=$_REQUEST["tessera"];
$ingranaggio=$_REQUEST["ingranaggio"];

include "conf_DB.php";
if($ingranaggio==1) {
$cognome=$_REQUEST["cognome"];
$cognome=strtoupper($cognome);
$nome=$_REQUEST["nome"];
$nome=strtoupper($nome);
$datanascita=$_REQUEST["datanascita"];
$nazionalita=$_REQUEST["nazionalita"];
$nazionalita=strtoupper($nazionalita);
$tesseraold=$_REQUEST["pastes"];
$sesso=$_REQUEST["sesso"];
$telefono=$_REQUEST["telefono"];



if ($tesseraold=='PASS' or $tesseraold==''){$tesseraold=0;}
$sql = "UPDATE soci set 
cognome = '$cognome',
nome='$nome',
nazionalita='$nazionalita',
luogo_nascita='$nazionalita',
data_nascita='$datanascita',
sesso='$sesso',
telefono='$telefono',
tesseraold=$tesseraold
where 
tessera = '$tessera' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted recorda: " . $conn->error; }    



}

$sql1 = "select * from soci  where tessera = '$tessera'";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ 
      $cognome = $macrogruppo["cognome"];
      $tesseraold = $macrogruppo["tesseraold"];
      $nome = $macrogruppo["nome"];
      $tessera = $macrogruppo["tessera"];	
      $datanascita = $macrogruppo["data_nascita"];	
      $nazionalita = $macrogruppo["nazionalita"];	
      $telefono = $macrogruppo["telefono"];	
      $sesso = $macrogruppo["sesso"];	
      }}
      #echo $tesseraold;
if($tesseraold==0){$pastes="PASS";}else{$pastes=$tesseraold;}
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Opera Messa della Carità</title>
  <link rel="stylesheet" href="css/style.css">
<style>
div#container {
min-width:   800px;
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
border-spacing: 1px;
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
<script type="text/javascript">
		
		function controllo(){ 
            with(document.modulo) { 
 
        if(cognome.value=="" ) { 
            alert("Error: manca COGNOME"); 
            cognome.focus(); 
            return false; 
                            } 
        if(nome.value=="" ) { 
            alert("Error: manca NOME"); 
            nome.focus(); 
            return false; 
                            } 
        if(datanascita.value=="" ) { 
            alert("Error: manca DATA DI NASCITA"); 
            datanascita.focus(); 
            return false; 
                            }                     
         if(nazionalita.value=="" ) { 
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
	</table>  
      
</div> 

<div align="center" >	

<div align="center">   
<div id="container">


<td align="center"><b><font face="Arial" size="5" color="#993300">VARIAZIONE ANAGRAFICA DI </font></b><br> </p>
<table  border="0" width="500" bgcolor="#FFF4F7" class="table7" >

<tr>
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
$altezza=200*$proporzione;
?>          
				<td colspan="2" align="center">				
					<p style="size="20" style="background-color: #C0C0C0"><img border="0" src="<? echo $indirizzofoto; ?>" width="200" height="<? $altezza; ?>"> </p>
				</td>
			</tr>   
<form method="POST" action="" name="modulo" onSubmit="return controllo();">
<tr>
<td><font face="Arial" size="3" color="##000000">COGNOME: </td>
<td>
<input type="text" name="cognome"  value="<? echo $cognome; ?>"  size="50" style="background-color: #C0C0C0">
</td>
</tr>
<tr>
<td><font face="Arial" size="3" color="#000000">NOME: </td>
<td><input type="text" name="nome"  value="<? echo $nome; ?>"  size="50" style="background-color: #C0C0C0"></td>
</tr>
<tr>
<td><font face="Arial" size="3" color="#000000">NATO IL: </td>
<td><input type="text" name="datanascita"  value="<? echo $datanascita; ?>"  size="10" style="background-color: #C0C0C0"></td>
</tr>
<tr>
<td><font face="Arial" size="3" color="#000000">NAZIONALITA: </td>
<td><input type="text" name="nazionalita"  value="<? echo $nazionalita; ?>"  size="50" style="background-color: #C0C0C0"></td>
</tr>
<tr>
        <td ><font face="Arial" size="3" color="#000000">SESSO:</font></td>		
				<td><select size="1" name="sesso" style="background-color: #ececee">
					<option <? if($sesso=="M"){echo "selected";} ?>>M</option>
          <option <? if($sesso=="F"){echo "selected";} ?>>F</option>
					</select></td> 
      </tr>
<tr>
<td><font face="Arial" size="3" color="#000000">TELEFONO: </td>
<td><input type="text" name="telefono"  value="<? echo $telefono; ?>"  size="50" style="background-color: #C0C0C0"></td>
</tr>
<tr>
<td><font face="Arial" size="3" color="#000000">TESSERA: </td>
<td><input type="text" name="pastes"  value="<? echo $pastes; ?>"  size="50" style="background-color: #C0C0C0"></b>
</td>
</tr>
        <input type="hidden" name="ingranaggio" value="1" />
       <input type="hidden" name="tessera" value="<?php echo $tessera; ?>" />
			<tr>
				<td width="237">&nbsp;</td>
				<td><input type="submit" value="Varia Anagrafica" name="B3"></td>
			</tr>
</table>
<h1>
</form>
</div>
</div> </div>
</body>

</html>