<?php
#echo "post ". $_REQUEST["login"]."cook ". $_COOKIE['POMACLIENTLOGGED'];

if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="index.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php  } 
include "conf_DB.php";
$login=$_REQUEST["login"];
$login=$_REQUEST["login"];
$sql1 = "SELECT * FROM associazione  where login = '$login'";
#echo $sql1; 
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())
		{ 
      
      $logink = $macrogruppo["loginorig"];
      #echo $logink; exit;
      
			}  }
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Configurazione gestione documentale </title>
</head>
<script>

    var newImage = new Image();

function updateImage() {
    if(newImage.complete) {
           newImage.src = document.getElementById("img").src;
           var temp = newImage.src;
           document.getElementById("img").src = newImage.src;
           newImage = new Image();
           newImage.src = temp+"?" + new Date().getTime();

}
setTimeout(updateImage, 1000);
};
</script> 
<style>
div#container {
min-width:   870px;
  min-height:  500px;
  max-width:  600px;
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
border-spacing: 5px;
background: #ffffff;
color: #656665;
border: 16px solid #B2CAEA;
border-radius: 20px;
}
.table6 th {
font-size: 18px;
padding: 10px;
}
.table6 td {
background: #ffffff;
padding: 2px;
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
background: #fdefbe;
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
table, th, td {
  border-collapse: collapse;
}
input{ /* Stili per il campo di testo e per la textarea */
    background: #1C1C1C; /* Colore di sfondo */
    border: 0px solid #323232; /* Bordo */
    color: #000000; /* Colore del testo */
    height: 20px; /* Altezza */
    line-height: 20px; /* Altezza di riga */
    font-weight: bold;
    padding: 0 10px; /* Padding */
}
textarea{ /* Stili per il campo di testo e per la textarea */
    background: #1C1C1C; /* Colore di sfondo */
    border: 0px solid #323232; /* Bordo */
    color: #000000; /* Colore del testo */
    font-weight: bold;
    padding: 0 10px; /* Padding */
} 
select { /* Stili per il campo di testo e per la textarea */
    background: #1C1C1C; /* Colore di sfondo */
    border: 0px solid #323232; /* Bordo */
    color: #000000; /* Colore del testo */
    height: 20px; /* Altezza */
    line-height: 20px; /* Altezza di riga */
    font-weight: bold;
    padding: 0 10px; /* Padding */
}
input[type=submit] {
    padding:2px 30px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;  }

input[type=reset] {
    padding:2px 20px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;  }    
</style>
<<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;1,100&display=swap');
</style>
<script type="text/javascript">
		
		function controllo(){ 
            with(document.modulo) { 
        if(cognome.value=="") { 
            alert("Error: manca COGNOME"); 
            cognome.focus(); 
            return false; 
                            } 
        if(nome.value=="") { 
            alert("Error: manca NOME"); 
            nome.focus(); 
            return false; 
                            } 
        if(natoa.value=="") { 
            alert("Error: manca NATO A"); 
            natoa.focus(); 
            return false; 
                            } 
        if(provnatoa.value=="") { 
            alert("Error: manca PROVINCIA NASCITA"); 
            provnatoa.focus(); 
            return false; 
                            }                     

        if(datanascita.value=="") { 
            alert("Error: manca NATO IL"); 
            datanascita.focus(); 
            return false; 
                              } 
        if(residentecitta.value=="") { 
            alert("Error: manca CITTA' DI RESIDENZA"); 
            residentecitta.focus(); 
            return false; 
                              }                      
        if(residenteprov.value=="") { 
            alert("Error: manca PROVINCIA DI RESIDENZA"); 
            residenteprov.focus(); 
            return false; 
                              }                      
        if(indirizzores.value=="") { 
            alert("Error: manca INDIRIZZO DI RESIDENZA"); 
            indirizzores.focus(); 
            return false; 
                              }                        
                              
        if(cap.value=="") { 
            alert("Error: manca CAP"); 
            cap.focus(); 
            return false; 
                              } 
                              
         if(codfisc.value=="") { 
            alert("Errore: manca CODICE FISCALE"); 
            codfisc.focus(); 
            return false; 
                              } 
                              
         
					                                                            
                                                            
                                  } 
        } 
</script>
<?php 
$ingranaggio=$_REQUEST["ingranaggio"];
$tessera=$_REQUEST["tessera"];
#$tessera=968;


if  ($ingranaggio==1)
{
$logolunghezza=$_REQUEST["logolunghezza"];
$logoaltezza=$_REQUEST["logoaltezza"];
#echo "a".$logoaltezza;
$uploadOk = 1;
$nomefile=basename($_FILES["fileToUpload"]["name"]);
$lunghezza=strlen($nomefile);
$lunghezza=$lunghezza-4;
$estensione = substr($nomefile, $lunghezza, 4); 

if ($nomefile=="") {echo "<b><font color='#FF0000'> MANCA DOCUMENTO DA CARICARE OPPURE </font></b>"; $uploadOk = 0;}
$newimmaggine=$nomefile;
$target_dir = "";
$target_file = $target_dir . $newimmaggine;
$target_file = $target_dir . basename($newimmaggine);
$nomefile=basename($_FILES["fileToUpload"]["name"]);
#echo "file ".$nomefile; exit;

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
#echo  $target_file. " " . $imageFileType; exit;
// Check if image file is a actual image or fake image
/*
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
*/
// Check if file already exists
#if (file_exists($target_file)) {
#    echo "<b><font color='#FF0000'> IL DOCUMENTO E' GIA CARICATO OPPURE </font></b>";
#    $uploadOk = 0;
#}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000000000) {
    echo "ATTENZIONE FILE TROPPO GRANDE.</font></b>";
    $uploadOk = 0;
}
// Allow certain file formats
#if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "pdf" && $imageFileType != "docx"  && $imageFileType != "txt" && $imageFileType != "csv"   && $imageFileType != "xlsx"
#&& $imageFileType != "gif"   ) {
#    echo "<b><font color='#FF0000'> FILE NON DI TIPO   PNG QUINDI </font></b>";
#    $uploadOk = 0;
#}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<b><font color='#FF0000'> OPERAZIONE ABORTITA.</font></b>";
// if everything is ok, try to upload file
} else {
    $eccofile=$target_file;
    #echo  $eccofile; exit;
#$comodo=explode(".",$eccofile);
#$eccofile=$comodo[0];
    if (
   
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        #echo "The file ". basename( $_FILES["fileToUpload"]["name"], $target_file)). " has been uploaded.";  exit
$sw=0;
$sql1 = "SELECT * FROM logo  where login = '$login'";
#echo $sql1; 
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())
		{$sw=1; }}
if($$sw==1){
$sqly = "UPDATE logo SET 
estensione='$estensione',
logolunghezza='0',
logoaltezza='0',
nomefile = '$eccofile'  
where login = '$login' "; 
#echo $sqly;  exit;
   if ($conn->query($sqly) === FALSE) 
    {echo "errore logo".$sqly ; exit; } 
}else{
$sql = "INSERT INTO 
    logo (
    estensione,
    logolunghezza,
    logoaltezza,
    nomefile,
    login
    ) VALUES (
     'jpg',
    '0',
    '0',
    '$eccofile',
    '$logink'
    )";
#echo $sql;  exit;   
    if ($conn->query($sql) === FALSE) 
        {        
        echo "ERRORE SCRITTURA logo";exit;
       } 
       else
       { } 

}    
}
}
}
if  ($ingranaggio==2)
{
#echo "passo";
$intesta1=$_REQUEST["intesta1"];
$intesta1=str_replace("'", "\'", $intesta1);
$intesta2=$_REQUEST["intesta2"];
$intesta2=str_replace("'", "\'", $intesta2);
$indirizzo=$_REQUEST["indirizzo"];
$indirizzo=str_replace("'", "\'", $indirizzo);
$localita=$_REQUEST["localita"];
$localita=str_replace("'", "\'", $localita);
$cf=$_REQUEST["cf"];
$runs=$_REQUEST["runs"];
$forma=$_REQUEST["forma"];
$iva=$_REQUEST["iva"];
$bilancio=$_REQUEST["bilancio"];
$rappresentante=$_REQUEST["rappresentante"];
$rappresentante=str_replace("'", "\'", $rappresentante);
$rendi=$_REQUEST["rendi"];
$email=$_REQUEST["email"];

$ut2a=$_REQUEST["ut2a"];
$ut2=$_REQUEST["ut2"];
$ut2=str_replace("'", "\'", $ut2);
$email2=$_REQUEST["email2"];

$ut3a=$_REQUEST["ut3a"];
$ut3=$_REQUEST["ut3"];
$ut3=str_replace("'", "\'", $ut3);
$email3=$_REQUEST["email3"];

$assistiti=$_REQUEST["assistiti"];
$soci=$_REQUEST["soci"];
$volontari=$_REQUEST["volontari"];
$medico=$_REQUEST["medico"];
$btempo=$_REQUEST["btempo"];
$donazioni=$_REQUEST["donazioni"];
$sql = "UPDATE associazione set 
intesta1 = '$intesta1',
intesta2 = '$intesta2',
indirizzo = '$indirizzo',
localita = '$localita',
cf = '$cf',
runs = '$runs',
forma='$forma',
iva='$iva',
rappresentante='$rappresentante',
email='$email',
bilancio='$bilancio',
rendi='$rendi',
assistiti='$assistiti',
soci='$soci',
volontari='$volontari',
medico='$medico',
btempo='$btempo',
donazioni='$donazioni',
ut2a='$ut2a',
ut3a='$ut3a',
ut2='$ut2',
ut3='$ut3',
email2='$email2',
email3='$email3'
where 
login = '$logink' 
";
#echo $sql; exit;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "errore update " . $sql; } 
}
$sql1 = "SELECT * FROM associazione  where login = '$logink'";
#echo $sql1; 
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())
		{ 
      $intesta1 = $macrogruppo["intesta1"];	
      $intesta2 =  $macrogruppo["intesta2"];
      $indirizzo = $macrogruppo["indirizzo"];
      $localita = $macrogruppo["localita"];
      $cf = $macrogruppo["cf"];
      $runs = $macrogruppo["runs"];
      $email = $macrogruppo["email"];
      $rappresentante = $macrogruppo["rappresentante"];
      $bilancio = $macrogruppo["bilancio"];
      $rendi = $macrogruppo["rendi"];
      $iva = $macrogruppo["iva"];
      $forma = $macrogruppo["forma"];
      
      $ut2a = $macrogruppo["ut2a"];
      $ut3a = $macrogruppo["ut3a"];
      $ut2 = $macrogruppo["ut2"];
      $ut3 = $macrogruppo["ut3"];
      $email2 = $macrogruppo["email2"];
      $email3 = $macrogruppo["email3"];
       
      $assistiti = $macrogruppo["assistiti"];  
      $soci = $macrogruppo["soci"]; 
      $volontari = $macrogruppo["volontari"]; 
      $medico = $macrogruppo["medico"]; 
      $btempo = $macrogruppo["btempo"];
      $donazioni = $macrogruppo["donazioni"]; 
       
			}  }
?>
<body onload="updateImage();">
<div align="center" >
<table border="0" width="760" height="140" bgcolor="#ffffff"  >
<tr > 
<? include "mettilogo.php"; ?>
</tr> 
<tr> 
<td bgcolor="#FFFFFF" style="border: 0px ; "><a href="menugenerale.php?login=<?php echo $login; ?>&codice=3"><font face="Montserrat">Menù Generale</font></a></td>             
<?php
$sql1 = "SELECT * FROM associazione  where login = '$login'";
#echo $sql1; 
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())
		{ 
      
      $btempo = $macrogruppo["btempo"];
			}  }

$sql1 = "SELECT * FROM utenti  where login = '$login'  ";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{$codvolontario = $macrogruppo["codvolontario"];
     $dio = $macrogruppo["dio"];
     $cognomevol = $macrogruppo["cognome"];
     $nomevol = $macrogruppo["nome"];
    } }
if($dio=="1"){$dicidio="amm.";}else{$dicidio="utente";}
?>           
<td bgcolor="#FFFFFF" align="right" style="border: 0px ; "><font face="Montserrat"><? echo $codvolontario." - ".$cognomevol." ".$nomevol." - ".$dicidio; ?></font></td>         
</tr>
</table> 
     
<br>      
</div> 
<div align="center">   
<div id="container">
<p align="center"><b><font face="Montserrat" size="4" color="#993300"><b>MODIFICA ACCOUNT</font></b></p>
<form method="POST" action="" name="modulo" enctype="multipart/form-data">
<table border="1" width="100%" bgcolor="#FFF4F7" class="table6">
	<tr>
		<td colspan="2"><p align="center"><b><font face="Montserrat" size="3" color="#993300">INSERIMENTO LOGO SOCIETA' </font></b></p></td>
	</tr>
	<tr>
		<td colspan="2">
        <input type="file" name="fileToUpload" id="fileToUpload" size="50" style="font-size: 12pt; font-weight: normal; background-color: #ffffff;font-family: Montserrat;"><font face="Montserrat" size="3" color="#993300"></font>
        </td>
	</tr>
<!--    
    <tr>
		<td width="40%">
        <font face="Montserrat" color="#000000" size="2">- Laeghezza logo in PX:</font>
        </td>
		<td>				
		<p><input type="text" name="logolunghezza"   size="10"  style="background-color: #ececee"></p>	
		</td>
		</tr>
      <tr>
		<td width="40%">
        <font face="Montserrat" color="#000000" size="2">- Altezza logo inPX:</font>
        </td>
		<td>				
		<p><input type="text" name="logoaltezza" "  size="10"  style="background-color: #ececee"></p>	
		</td>
		</tr>
-->    
    
    <tr>
    <td align="center" colspan="2">
    <input type="hidden" name="ingranaggio" value="1" />  
    <input type="submit" style="height: 22px; background-color: #cc0000;border: 0px; color: #ffffff;" style="font-family: Montserrat;" value="Aggiorna logo" name="B3">
    </td>
    </tr>
</table>
</form>
<form method="POST" action="" name="modulo" enctype="multipart/form-data">
<br>

<table  width="100%" bgcolor="#FFF4F7" class="table6">
	<tr>
		<td>
		<table border="1" width="100%">
        <tr>
	    <td colspan="2">
        <p  align="center"><b><font face="Montserrat" size="3" color="#993300"><b>ANAGRAFICA SOCIETA' - INFORMAZIONI GENERALI</font></b></p>
        </td>
		</tr>			
        <tr>
		<td width="40%">
        <font face="Montserrat" color="#000000">- RAGIONE SOCIALE PARTE 1°</font>
        </td>
		<td>				
		<p><input type="text" name="intesta1" value="<?php echo $intesta1; ?>"  size="60"  style="background-color: #ececee;font-family: Montserrat;"></p>	
		</td>
		</tr>
		<tr>
		<td >
        <font face="Montserrat" color="#000000">- RAGIONE SOCIALE PARTE 2°:</font>
        </td>
		<td>				
		<p><input type="text" name="intesta2" value="<?php echo $intesta2; ?>"  size="60"  style="background-color: #ececee;font-family: Montserrat;"></p>					
		</td>
		</tr>
		<tr>
		<td >
        <font face="Montserrat" color="#000000">- INDIRIZZO SEDE SOCIALE:</font>
        </td>
        <td>				
		<p><input type="text" name="indirizzo" value="<?php echo $indirizzo; ?>"  size="60"  style="background-color: #ececee;font-family: Montserrat;"></p>									
		</td>			
		</tr>
		<tr>
		<td >
        <font face="Montserrat" color="#000000">- LOCALITA':</font>
        </td>
		<td>									
		<p><input type="text" name="localita" value="<?php echo $localita; ?>"  size="60"  style="background-color: #ececee;font-family: Montserrat;"></p>											
        </td>			
		</tr
        <tr>
		<td >
        <font face="Montserrat" color="#000000">- LEGALE RAPPRESENTANTE:</font>
        </td>
		<td>				
		<p><input type="text" name="rappresentante" value="<?php echo $rappresentante; ?>"  size="60"  style="background-color: #ececee;font-family: Montserrat;"></p>													
		</td>
		</tr>  
        <tr>
		<td >
        <font face="Montserrat" color="#000000">- CODICE FISCALE:</font>
        </td>
		<td>				
		<p><input type="text" name="cf" value="<?php echo $cf; ?>"  size="60"  style="background-color: #ececee;font-family: Montserrat;"></p>													
		</td>
		</tr> 
        <tr>
		<td >
        <font face="Montserrat" color="#000000">- PARTITA IVA:</font>
        </td>
		<td>				
		<p><input type="text" name="iva" value="<?php echo $iva; ?>"  size="60"  style="background-color: #ececee;font-family: Montserrat;"></p>													
		</td>
		</tr> 
        <tr>
		<td >
        <font face="Montserrat" color="#000000">- EMAIL:</font>
        </td>
		<td>				
		<p><input type="text" name="email" value="<?php echo $email; ?>"  size="60"  style="background-color: #ececee;font-family: Montserrat;"></p>													
		</td>
		</tr> 
        <tr>
		<td >
        <font face="Montserrat" color="#000000">- FORMA GIURIDICA:</font>
        </td>
		<td>				
		<p><input type="text" name="forma" value="<?php echo $forma; ?>"  size="60"  style="background-color: #ececee"></p>													
		</td>
		</tr> 
        
       
       <input type="hidden" name="ingranaggio" value="2" />       
		<tr>
		<td width="237">&nbsp;</td>
		<td><input type="submit" style="height: 22px; background-color: #cc0000;border: 0px; color: #ffffff;" style="font-family: Montserrat;" value="Aggiorna account" name="B3"></td>
		</tr>
</table>
		</td>
	    </tr>
</table>
</form>
<br>
</div>
</div>
</body>

</html>