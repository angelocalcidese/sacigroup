<?php

?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>carica documento 1</title>
</head>
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
include "conf_DB.php";

if  ($ingranaggio==2)
{
#echo "passo";
$tessera=$_REQUEST["tessera"];
$datarichiamo=$_REQUEST["datarichiamo"];
$oggi=explode("/",$datarichiamo);
$datarichiamo1=$oggi[2]."-".$oggi[1]."-".$oggi[0];
$tiporichiamo=$_REQUEST["tiporichiamo"];
$nomedocumento=$_REQUEST["nomedocumento"];


$uploadOk = 1;


$nomefile=basename($_FILES["fileToUpload"]["name"]);
$lunghezza=strlen($nomefile);
$lunghezza=$lunghezza-4;
$estensione = substr($nomefile, $lunghezza, 4); 
#echo "file ".$nomefile; exit;
if ($nomefile=="") {echo "<b><font color='#FF0000'> MANCA DOCUMENTO DA CARICARE OPPURE </font></b>"; $uploadOk = 0;}
$newimmaggine=$tessera.$estensione;

$target_dir = "./doc1/";
$target_file = $target_dir . $newimmaggine;
$target_file = $target_dir . basename($newimmaggine);
$nomefile=basename($_FILES["fileToUpload"]["name"]);


$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
#echo  $target_file. " " . $imageFileType;
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
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "pdf" && $imageFileType != "docx"  && $imageFileType != "txt" && $imageFileType != "csv"   && $imageFileType != "xlsx"  && $imageFileType != "JPG"
&& $imageFileType != "gif" ) {
    echo "<b><font color='#FF0000'> FILE NON DI TIPO  JPG, PDF, PNG, GIF, DOCX, TXT, CSV, XLSX QUINDI </font></b>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<b><font color='#FF0000'> OPERAZIONE ABORTITA.</font></b>";
// if everything is ok, try to upload file
} else { 
    if (   
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        #echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";







}
}
}
$sql1 = "SELECT * FROM soci  where tessera = '$tessera' ";
#echo $sql1; 
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())
		{ 
      $tessera = $macrogruppo["tessera"];	
      $cognome = $macrogruppo["cognome"];
      $nome = $macrogruppo["nome"];
      $datanascita = $macrogruppo["data_nascita"];
      $nazionalita = $macrogruppo["nazionalita"];
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
      $comunicazioni = $macrogruppo["altro"];	
      $deceduto = $macrogruppo["deceduto"];	
      $cellulare=""; 
      $filenew="doc1/".$tessera.".pdf";
			}  }
?>
<body>
<div align="center">   
<div id="container">
<form method="POST" action="" name="modulo" enctype="multipart/form-data">
<table border="0" width="100%">
	<tr>
		<td><p align="center"><b><font face="Arial" size="5" color="#993300">INSERIMENTO DOCUMENTO 1</font></b></p></td>
	</tr>
	<tr>
		<td><p align="center"><b><font face="Arial" size="5" color="#993300">PRATICA N. <?php echo $tessera; ?></font><font face="Arial" size="6" color="#ff0000">
<?php if($ingranaggio==2) {echo " documento 1 inserita";} ?>
</font></b></p></td>
	</tr>
</table>


<table  width="100%" bgcolor="#FFF4F7" class="table6">
	<tr>
		<td>
		<table border="1" width="100%">

</td>
			</tr>  		
			
      <tr>
				<td width="237"><font face="Arial" color="#FF0000">- COGNOME:</font></td>
				<td>				
					<p>
					<?php echo $cognome; ?></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- NOME:</font></td>
				<td>				
					<p><?php echo $nome; ?></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- NAZIONALITA':</font></td>
				<td>				
					<?php echo $nazionalita; ?>
				</td>			
				</tr>
      
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- IL:</font></td>
				<td>				
					<p><?php echo $datanascita; ?></p>
				</td>			
				</tr>
			
			
		
      	
      
      <tr>
				<td width="237"><font face="Arial" color="#000000">- DOCUMENTO 1</font></td>
				<td>
       <input type="file" name="fileToUpload" id="fileToUpload" size="50" style="font-size: 12pt; font-weight: normal; background-color: #ffffff;">
    		</tr>
      
       <input type="hidden" name="ingranaggio" value="2" />
       <input type="hidden" name="tessera" value="<?php echo $tessera; ?>" />
			<tr>
				<td width="237">&nbsp;</td>
				<td><input type="submit" value="Inserisci documento1" name="B3"></td>
			</tr>
		</table>
		</td>
	</tr>
</table>
 <iframe  align="right" frameborder="0" width="100%" height="100%"  src="http://www.mensacarita.it/esponipdf.php?fl=<? echo $filenew; ?>"></iframe>

<p>&nbsp;</p>
</form>
</div>
</div>




</body>

</html>