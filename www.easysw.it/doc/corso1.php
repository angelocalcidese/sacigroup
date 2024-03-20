<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="pomaindex.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php
}
$login=$_REQUEST["login"];
$ingranaggio=$_REQUEST["ingranaggio"];
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 4</title>
</head>
<style>
div#container {
min-width:   960px;
  min-height:  500px;
  max-width:  960px;
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
<script type="text/javascript">
		
		function controllo(){ 
            with(document.modulo) { 
        if(nomecorso.value=="") { 
            alert("Error: manca NOME CORSO"); 
            nomecorso.focus(); 
            return false; 
                            } 
        if(datainizio.value=="") { 
            alert("Error: manca DATA DI INIZIO DEL CORSO"); 
            datainizio.focus(); 
            return false; 
                            } 
        if(datafine.value=="") { 
            alert("Error: manca DATA FINE CORSO"); 
            datafine.focus(); 
            return false; 
                            } 
        if(istruttore1.value=="") { 
            alert("Error: manca ISTRUTTORE 1°"); 
            istruttore1.focus(); 
            return false; 
                            }                     

        if(argomento.value=="") { 
            alert("Error: manca ARGOMENTO DEL CORSO"); 
            argomento.focus(); 
            return false; 
                              } 
        if(luogo.value=="") { 
            alert("Error: manca LUOGO DOVI SI TERRA IL CORSO"); 
            luogo.focus(); 
            return false; 
                              }                      
        if(costo.value=="") { 
            alert("Error: manca IMPORTO DEL CORSO SE GRATIS DIGITA ZERO"); 
            costo.focus(); 
            return false; 				                                                                                                                       
                                  } 
        } 
        }
</script>
<?php 
if ($ingranaggio==1)
{$login=$_REQUEST["login"];
$nomecorso=$_REQUEST["nomecorso"];
$datainizio=$_REQUEST["datainizio"];
$datafine=$_REQUEST["datafine"];

$lunedida1=$_REQUEST["lunedida1"];
$lunedia1=$_REQUEST["lunedia1"];

$lunedida2=$_REQUEST["lunedida2"];
$lunedia2=$_REQUEST["lunedia2"];

$lunedida3=$_REQUEST["lunedida3"];
$lunedia3=$_REQUEST["lunedia3"];

$lunedida4=$_REQUEST["lunedida4"];
$lunedia4=$_REQUEST["lunedia4"];

$lunedida5=$_REQUEST["lunedida5"];
$lunedia5=$_REQUEST["lunedia5"];

$martedida1=$_REQUEST["martedida1"];
$martedia1=$_REQUEST["martedia1"];

$martedida2=$_REQUEST["martedida2"];
$martedia2=$_REQUEST["martedia2"];

$martedida3=$_REQUEST["martedida3"];
$martedia3=$_REQUEST["martedia3"];

$martedida4=$_REQUEST["martedida4"];
$martedia4=$_REQUEST["martedia4"];

$martedida5=$_REQUEST["martedida5"];
$martedia5=$_REQUEST["martedia5"];

$mercoledida1=$_REQUEST["mercoledida1"];
$mercoledia1=$_REQUEST["mercoledia1"];

$mercoledida2=$_REQUEST["mercoledida2"];
$mercoledia2=$_REQUEST["mercoledia2"];

$mercoledida3=$_REQUEST["mercoledida3"];
$mercoledia3=$_REQUEST["mercoledia3"];

$mercoledida4=$_REQUEST["mercoledida4"];
$mercoledia4=$_REQUEST["mercoledia4"];

$mercoledida5=$_REQUEST["mercoledida5"];
$mercoledia5=$_REQUEST["mercoledia5"];

$giovedida1=$_REQUEST["giovedida1"];
$giovedia1=$_REQUEST["giovedia1"];

$giovedida2=$_REQUEST["giovedida2"];
$giovedia2=$_REQUEST["giovedia2"];

$giovedida3=$_REQUEST["giovedida3"];
$giovedia3=$_REQUEST["giovedia3"];

$giovedida4=$_REQUEST["giovedida4"];
$giovedia4=$_REQUEST["giovedia4"];

$giovedida5=$_REQUEST["giovedida5"];
$giovedia5=$_REQUEST["giovedia5"];

$venerdida1=$_REQUEST["venerdida1"];
$venerdia1=$_REQUEST["venerdia1"];

$venerdida2=$_REQUEST["venerdida2"];
$venerdia2=$_REQUEST["venerdia2"];

$venerdida3=$_REQUEST["venerdida3"];
$venerdia3=$_REQUEST["venerdia3"];

$venerdida4=$_REQUEST["venerdida4"];
$venerdia4=$_REQUEST["venerdia4"];

$venerdida5=$_REQUEST["venerdida5"];
$venerdia5=$_REQUEST["venerdia5"];

$sabatoda1=$_REQUEST["sabatoda1"];
$sabatoa1=$_REQUEST["sabatoa1"];

$sabatoda2=$_REQUEST["sabatoda2"];
$sabatoa2=$_REQUEST["sabatoa2"];

$sabatoda3=$_REQUEST["sabatoda3"];
$sabatoa3=$_REQUEST["sabatoa3"];

$sabatoda4=$_REQUEST["sabatoda4"];
$sabatoa4=$_REQUEST["sabatoa4"];

$sabatoda5=$_REQUEST["sabatoda5"];
$sabatoa5=$_REQUEST["sabatoa5"];

$domenicada1=$_REQUEST["domenicada1"];
$domenicaa1=$_REQUEST["domenicaa1"];

$domenicada2=$_REQUEST["domenicada2"];
$domenicaa2=$_REQUEST["domenicaa2"];

$domenicada3=$_REQUEST["domenicada3"];
$domenicaa3=$_REQUEST["domenicaa3"];

$domenicada4=$_REQUEST["domenicada4"];
$domenicaa4=$_REQUEST["domenicaa4"];

$domenicada5=$_REQUEST["domenicada5"];
$domenicaa5=$_REQUEST["domenicaa5"];

$istruttore1=$_REQUEST["istruttore1"];
$istruttore2=$_REQUEST["istruttore2"];
$argomento=$_REQUEST["argomento"];
$luogo=$_REQUEST["luogo"];
$certificato=$_REQUEST["certificato"];
$costo=$_REQUEST["costo"];
$numerocorso=$_REQUEST["numerocorso"];
include "conf_DB.php";
if ($numerocorso==0)
{$sql1 = "SELECT * FROM progressivocorso  where progr = 1 ";
  $result = $conn->query($sql1);
  if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ 
    $numerocorso = $macrogruppo["numero"];	}}
$numerocorso++;

$sqlx = "UPDATE progressivocorso set 
numero = '$numerocorso'
where 
progr = 1
";
#echo "&erroreutente=$sqlx&"; exit;
 if ($conn->query($sqlx) === FALSE)
    {
    echo "errore";
    } 
    else
    {}
}    
$sql = "DELETE from corso where codicecorso = '$numerocorso'";
 if ($conn->query($sql) === FALSE) {}   else   {}
  
$sql = "insert into corso
 ( 
  codicecorso, 
  nomecorso, 
  datainizio,
  datafine,
  istruttore1,
  istruttore2,
  argomento,
  luogo,
  certificato,
  costo
 )
  values
 ( 
  '$numerocorso',  
  '$nomecorso',  
  '$datainizio',
  '$datafine',
  '$istruttore1',
  '$istruttore2',
  '$argomento',
  '$luogo',
  '$certificato',
  '$costo' )
    ";
     if ($conn->query($sql) === FALSE)
        {
        echo "ERRORE gia' presente&";
       } 
       else
       {}   

$sql = "DELETE from corsoturno where codicecorso = '$numerocorso'";
 if ($conn->query($sql) === FALSE) {}   else   {}

if ($lunedida1!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','lunedi1','$lunedida1','$lunedia1')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($lunedida2!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','lunedi2','$lunedida2','$lunedia2')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($lunedida3!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','lunedi3','$lunedida3','$lunedia3')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($lunedida4!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','lunedi4','$lunedida4','$lunedia4')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($lunedida5!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','lunedi5','$lunedida5','$lunedia5')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($martedida1!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','martedi1','$martedida1','$martedia1')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($martedida2!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','martedi2','$martedida2','$martedia2')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($martedida3!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','martedi3','$martedida3','$martedia3')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($martedida4!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','martedi4','$martedida4','$martedia4')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($martedida5!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( 'martedi5','$martedida5','$martedia5')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($mercoledida1!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','mercoledi1','$mercoledida1','$mercoledia1')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($mercoledida2!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','mercoledi2','$mercoledida2','$mercoledia2')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($mercoledida3!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','mercoledi3','$mercoledida3','$mercoledia3')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($mercoledida4!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','mercoledi4','$mercoledida4','$mercoledia4')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($mercoledida5!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','mercoledi5','$mercoledida5','$mercoledia5')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($giovedida1!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','giovedi1','$giovedida1','$giovedia1')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($giovedida2!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','giovedi2','$giovedida2','$giovedia2')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($giovedida3!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','giovedi3','$giovedida3','$giovedia3')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($giovedida4!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( 'giovedi4','$giovedida4','$giovedia4')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($giovedida5!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','giovedi5','$giovedida5','$giovedia5')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($venerdida1!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','venerdi1','$venerdida1','$venerdia1')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($venerdida2!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','venerdi2','$venerdida2','$venerdia2')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($venerdida3!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','venerdi3','$venerdida3','$venerdia3')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($venerdida4!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','venerdi4','$venerdida4','$venerdia4')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($venerdida5!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','venerdi5','$venerdida5','$venerdia5')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($sabatoda1!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','sabato1','$sabatoda1','$sabatoa1')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($sabatoda2!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','sabato2','$sabatoda2','$sabatoa2')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($sabatoda3!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','sabato3','$sabatoda3','$sabatoa3')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($sabatoda4!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','sabato4','$sabatoda4','$sabatoa4')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($sabatoda5!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','sabato5','$sabatoda5','$sabatoa5')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($domenicada1!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','domenica1','$domenicada1','$domenicaa1')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($domenicada2!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','domenica2','$domenicada2','$domenicaa2')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($domenicada3!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','domenica3','$domenicada3','$domenicaa3')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($domenicada4!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','domenica4','$domenicada4','$domenicaa4')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

if ($domenicada5!=""){ $sql = "insert into corsoturno ( codicecorso,giorno,dalleore,alleore) values 
   ( '$numerocorso','domenica5','$domenicada5','$domenicaa5')"; if ($conn->query($sql) === FALSE) {echo "ERRORE turno";} else{} }

}
?>
<body>

<div align="center">
	<table border="0" width="30%">
		<tr>
			<td>
			<img border="0" src="carlopoma.png" width="954" height="140"></td>
		</tr>
    <tr>
      <td><a href="menugenerale.php?login=<?php echo $login; ?>">Menu Generale</a>/Inserimento Corso</td></tr>
		</tr>
	</table>
	<p>&nbsp;</p> 
  </div>
<div align="center">   
<div id="container">
<form method="POST" action="" name="modulo" onSubmit="return controllo();">
<p align="center"><b><font face="Arial" size="6" color="#993300">INSERIMENTO 
NUOVO CORSO<?php if ($ingranaggio==1){ echo " ( Identificativo n° " . $numerocorso . ")";} ?></font></b></p>
<table border="1" width="100%" bgcolor="#FFCC66" bordercolorlight="#993300" bordercolordark="#CC6600">
	<tr>
		<td bgcolor="#FFFFFF">
		<table border="1" width="100%">
			<tr>
				<td width="237" bgcolor="#669900"><b>
				<font face="Arial" color="#FFFFFF">CORSO:</font></b></td>
				
			</tr>
			<tr>
				<td width="237"><b><font face="Arial" color="#008000">- NOME DEL 
				CORSO</font></b></td>
				<td>				
					<p>
					<font face="Arial">
					<input type="text" name="nomecorso"  value="<?php echo $nomecorso; ?>" size="100" style="background-color: #C0C0C0"></font></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial">- DATA INIZIO DEL CORSO</font></td>
				<td>				
					<p><font face="Arial">
					<input type="text" name="datainizio" value="<?php echo $datainizio; ?>" size="20" style="background-color: #C0C0C0"></font></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial">- DATA FINE DEL CORSO</font></td>
				<td>				
					<p><font face="Arial">
					<input type="text" name="datafine" value="<?php echo $datafine; ?>" size="20" style="background-color: #C0C0C0"></font></p>
				</td>			
				</tr>
      <tr>
				<td width="237" valign="bottom"><b>
				<font face="Arial" color="#FF0000">-&nbsp; LUNEDI' </font></b></td>
				<td>				
					<table border="0" width="39%" cellspacing="0" cellpadding="0">
						<tr>
							<td width="57" bgcolor="#FF6600" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">TURNO</font></b></td>
							<td width="57" bgcolor="#FF6600" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">1°</font></b></td>
							<td width="57" bgcolor="#CC0066" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">TURNO</font></b></td>
							<td width="57" bgcolor="#CC0066" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">2°</font></b></td>
							<td width="57" bgcolor="#FF9999" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">TURNO</font></b></td>
							<td width="57" bgcolor="#FF9999" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">3°</font></b></td>
							<td width="57" bgcolor="#CCCC00" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">TURNO</font></b></td>
							<td bgcolor="#CCCC00" width="57" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">4°</font></b></td>
							<td bgcolor="#993300" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">TURNO</font></b></td>
							<td bgcolor="#993300" align="center"><b>
							<font face="Arial" size="2" color="#FFFFFF">5°</font></b></td>
						</tr>
						<tr>
							<td width="57" bgcolor="#FF6600" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">DA:</font></b></td>
							<td width="57" bgcolor="#FF6600" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">A:</font></b></td>
							<td width="57" bgcolor="#CC0066" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">DA:</font></b></td>
							<td width="57" bgcolor="#CC0066" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">A:</font></b></td>
							<td width="57" bgcolor="#FF9999" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">DA:</font></b></td>
							<td width="57" bgcolor="#FF9999" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">A:</font></b></td>
							<td width="57" bgcolor="#CCCC00" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">DA:</font></b></td>
							<td bgcolor="#CCCC00" width="57" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">A:</font></b></td>
							<td bgcolor="#993300" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">DA:</font></b></td>
							<td bgcolor="#993300" align="center"><b>
							<font face="Arial" color="#FFFFFF" size="2">A:</font></b></td>
						</tr>
						<tr>
							<td width="57"><font face="Arial">
							<input type="text" name="lunedida1" value="<?php echo $lunedida1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="lunedia1" value="<?php echo $lunedia1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="lunedida2" value="<?php echo $lunedida2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="lunedia2" value="<?php echo $lunedia2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="lunedida3" value="<?php echo $lunedida3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="lunedia3" value="<?php echo $lunedia3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="lenedida4" value="<?php echo $lunedida4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="lunedia4" value="<?php echo $lunedia4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="lunedida5" value="<?php echo $lunedida5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="lunedia5" value="<?php echo $lunedia5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
						</tr>
					</table>
				</td>			
				</tr>  
			<tr>
				<td width="237"><b><font face="Arial" color="#FF0000">- MARTEDI' </font>
				</b></td>
				<td>				
					<table border="0" width="32%" cellspacing="0" cellpadding="0">
						<tr>
							<td width="57"><font face="Arial">
							<input type="text" name="martedida1" value="<?php echo $martedida1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="martedia1" value="<?php echo $martedia1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="martedida2" value="<?php echo $martedida2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="58"><font face="Arial">
							<input type="text" name="martedia2" value="<?php echo $martedia2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="martedida3" value="<?php echo $martedida3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="martedia3" value="<?php echo $martedia3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="martedida4" value="<?php echo $martedida4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="martedia4" value="<?php echo $martedia4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="martedida5" value="<?php echo $martedida5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="martedia5" value="<?php echo $martedia5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
						</tr>
					</table>
				</td>			
				</tr>
			<tr>
				<td width="237"><b><font face="Arial" color="#FF0000">- 
				MERCOLEDI' </font></b></td>
				<td>				
					<table border="0" width="30%" cellspacing="0" cellpadding="0">
						<tr>
							<td width="57"><font face="Arial">
							<input type="text" name="mercoledida1" value="<?php echo $mercoledida1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="mercoledia1" value="<?php echo $mercoledia1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="mercoledida2" value="<?php echo $mercoledida2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="mercoledia2" value="<?php echo $mercoledia2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="mercoledida3" value="<?php echo $mercoledida3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="mercoledia3" value="<?php echo $mercoledia3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="mercoldida4" value="<?php echo $mercoldida4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="mercoledia4" value="<?php echo $mercoledia4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="mercoledida5" value="<?php echo $mercoledida5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="mercoledia5" value="<?php echo $mercoledia5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							
							
					</table>
				</td>
			</tr>
      <tr>
				<td width="237"><b><font face="Arial" color="#FF0000">- GIOVEDI'</font></b></td>
				<td>				
					<table border="0" width="31%" cellspacing="0" cellpadding="0">
						<tr>
							<td width="57"><font face="Arial">
							<input type="text" name="giovedida1" value="<?php echo $giovedida1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="giovedia1" value="<?php echo $giovedia1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="giovedida2" value="<?php echo $giovedida2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="giovedia2" value="<?php echo $giovedia2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="giovedida3" value="<?php echo $giovedida3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="giovedia3" value="<?php echo $giovedia3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="giovedida4" value="<?php echo $giovedida4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="giovedia4" value="<?php echo $giovedia4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="giovedida5" value="<?php echo $giovedida5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="giovedia5" value="<?php echo $giovedia5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
						
							
					</table>
				</td>
			</tr>
			<tr>
				<td width="237"><b><font face="Arial" color="#FF0000">- VENERDI'</font></b></td>
				<td>				
					<table border="0" width="32%" cellspacing="0" cellpadding="0">
						<tr>
							<td width="57"><font face="Arial">
							<input type="text" name="venerdida1" value="<?php echo $venerdida1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="venerdia1" value="<?php echo $venerdia1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="venerdida2" value="<?php echo $venerdida2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="venerdia2" value="<?php echo $venerdia2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="venerdida3" value="<?php echo $venerdida3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="venerdida3" value="<?php echo $venerdida3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="venerdida4" value="<?php echo $venerdida4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="venerdia4" value="<?php echo $venerdia4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="venerdida5" value="<?php echo $venerdida5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="venerdia5" value="<?php echo $venerdia5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							
					</table>
				</td>
			</tr>
			<tr>
				<td width="237"><b><font face="Arial" color="#FF0000">- SABATO </font>
				</b></td>
				<td>				
					<table border="0" width="31%" cellspacing="0" cellpadding="0">
						<tr>
							<td width="57"><font face="Arial">
							<input type="text" name="sabatoda1" value="<?php echo $sabatoda1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="sabatoa1" value="<?php echo $sabatoa1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="sabatoda2" value="<?php echo $sabatoda2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="sabatoa2" value="<?php echo $sabatoa2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="sabatoda3" value="<?php echo $sabatoda3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="sabatoa3" value="<?php echo $sabatoa3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">                       
							<input type="text" name="sabatoda4" value="<?php echo $sabatoda4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="sabatoa4" value="<?php echo $sabatoa4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="sabatoda5" value="<?php echo $sabatoda5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="sabatoa5" value="<?php echo $sabatoa5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							
					</table>
				</td>
			</tr>
			<tr>
				<td width="237"><b><font face="Arial" color="#FF0000" >- 
				DOMENICA </font></b></td>
				<td>				
					<table border="0" width="28%" cellspacing="0" cellpadding="0">
						<tr>
							<td width="57"><font face="Arial">
							<input type="text" name="domenicada1" value="<?php echo $domenicada1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="domenicaa1" value="<?php echo $domenicaa1; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="domenicada2" value="<?php echo $domenicada2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="domenicaa2" value="<?php echo $domenicaa2; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="domenicada3" value="<?php echo $domenicada3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="domenicaa3" value="<?php echo $domenicaa3; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="domenicada4" value="<?php echo $domenicada4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="domenicaa4" value="<?php echo $domenicaa4; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td width="57"><font face="Arial">
							<input type="text" name="domenicada5" value="<?php echo $domenicada5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							<td><font face="Arial">
							<input type="text" name="domenicaa5" value="<?php echo $domenicaa5; ?>" size="7" style="background-color: #C0C0C0"></font></td>
							
					</table>
				</td>
			</tr>
			<tr>
				<td width="237" bgcolor="#669900">&nbsp;</td>
				<td>				
					&nbsp;</td>
			</tr>
			<tr>
				<td width="237"><b><font face="Arial" color="#993300">- 
				ISTRUTTORE 1</font></b></td>
				<td>				
					<p><font face="Arial">
					<input type="text" name="istruttore1" value="<?php echo $istruttore1; ?>" size="50" style="background-color: #C0C0C0"></font></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial">- ISTRUTTORE 2</font></td>
				<td>				
					<p><font face="Arial">
					<input type="text" name="istruttore2" value="<?php echo $istruttore2; ?>" size="50" style="background-color: #C0C0C0"></font></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial">- ARGOMENTO DEL CORSO</font></td>
				<td>				
					<p><font face="Arial">
					<input type="text" name="argomento" value="<?php echo $argomento; ?>" size="100" style="background-color: #C0C0C0"></font></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial">- LUOGO</font></td>
				<td>				
					<font face="Arial">
					<input type="text" name="luogo" value="<?php echo $luogo; ?>" size="50" style="background-color: #C0C0C0"></font></td>
			</tr>
			<tr>
				<td width="237"><font face="Arial">- CERTIFICATO MEDICO</font></td>
				<td>				
					<select size="1" name="certificato">
					<option selected>NO</option>
					<option>SI</option>
					</select></td>
			</tr>
			<tr>
				<td width="237"><font face="Arial">- COSTO X SOCIO</font></td>
				<td>				
					<font face="Arial">
					<input type="text" name="costo" value="<?php echo $costo; ?>" size="20" style="background-color: #C0C0C0"></font></td>
			</tr>
       <input type="hidden" name="ingranaggio" value="1" />
       <input type="hidden" name="login" value="<?php echo $login; ?>" />
       <input type="hidden" name="numerocorso" value="<?php echo $numerocorso; ?>" />
			<tr>
				<td width="237">&nbsp;</td>
				<td><input type="submit" value="Inserisci" name="B3"><input type="reset" value="Reset" name="B4"></td>
			</tr>
		</table>
		</td>
	</tr>
</table>
<p>&nbsp;</p>
</form>

</div>
</div>

</body>

</html>