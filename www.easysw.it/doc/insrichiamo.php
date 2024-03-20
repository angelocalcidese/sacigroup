<?php

?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 4</title>
</head>
<style>
div#container {
min-width:   800px;
  min-height:  500px;
  max-width:  800px;
  max-height: 1000px;
}
div#sottocontainer {
min-width:   800px;
  min-height:  500px;
  max-width:  800px;
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
if ($datarichiamo1==0) {echo " <b><font color='#FF0000'>**missing document date** </font></b>"; $uploadOk = 0;}
if ($tiporichiamo=="") {echo "<b><font color='#FF0000'>MANCA TIPO DOCUMENTO OPPURE </font></b>"; $uploadOk = 0;}
$nomefile=basename($_FILES["fileToUpload"]["name"]);
#echo "file ".$nomefile; exit;
if ($nomefile=="") {echo "<b><font color='#FF0000'> MANCA DOCUMENTO DA CARICARE OPPURE </font></b>"; $uploadOk = 0;}

$target_dir = "./richiami/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
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
if (file_exists($target_file)) {
    echo "<b><font color='#FF0000'> IL DOCUMENTO E' GIA CARICATO OPPURE </font></b>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000000000) {
    echo "ATTENZIONE FILE TROPPO GRANDE.</font></b>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "pdf" && $imageFileType != "docx"  && $imageFileType != "txt" && $imageFileType != "csv"   && $imageFileType != "xlsx"
&& $imageFileType != "gif" ) {
    echo "<b><font color='#FF0000'> FILE NON DI TIPO  JPG, PDF, PNG, GIF, DOCX, TXT, CSV, XLSX QUINDI </font></b>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<b><font color='#FF0000'> OPERAZIONE ABORTITA.</font></b>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        #echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";






$sql = "insert into richiami
 ( 
  ric_tessera, 
  data_richiamo, 
  motivo_richiamo,
  documento_richiamo
 )
  values
 ( 
  '$tessera',  
  '$datarichiamo1',  
  '$tiporichiamo',
  '$nomefile' )
    ";
    if ($conn->query($sql) === FALSE) 
        {
        echo "ERRORE RICHIAMO gia' presente";
       } 
       else
       {}  
  } else {
        echo "<b><font color='#FF0000'>ATTENZIONE SI E' VERIFICATO UN ERRORE NEL CARICAMENTO.</font></b>";
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
      $comunicazioni = $macrogruppo["altro"];	
      $deceduto = $macrogruppo["deceduto"];	
      $cellulare=""; 
			} }
?>
<body>
<div align="center">   
<div id="container">
<form method="POST" action="" name="modulo" enctype="multipart/form-data">
<table border="0" width="100%">
	<tr>
		<td><p align="center"><b><font face="Arial" size="6" color="#993300">INSERIMENTO RICHIAMO AL SOCIO</font></b></p></td>
	</tr>
	<tr>
		<td><p align="center"><b><font face="Arial" size="6" color="#993300">TESSERA N°: <?php echo $tessera; ?></font><font face="Arial" size="6" color="#ff0000">
<?php if($ingranaggio==2) {echo " richiamo inserito";} ?>
</font></b></p></td>
	</tr>
</table>


<table border="1" width="100%" bgcolor="#FFCC66" bordercolorlight="#993300" bordercolordark="#CC6600">
	<tr>
		<td>
		<table border="1" width="100%">
			<tr>
				<td width="237"><font face="Arial">DATI DELLA SKEDA:</font></td>
				
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- DECEDUTO:</font></td>
				<td>				
					<p>
					 <?php echo $deceduto; ?> </p>
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
				<td width="237"><font face="Arial" color="#FF0000">- NATO/A A:</font></td>
				<td>				
					<?php echo $natoa; ?></p>
				</td>			
				</tr>
      <tr>
				<td width="237"><font face="Arial" color="#FF0000">- PROVINCIA NASCITA:</font></td>
				<td>				
					<p><?php echo $provnatoa; ?></p>
				</td>			
				</tr>  
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- IL:</font></td>
				<td>				
					<p><?php echo $datanascita; ?></p>
				</td>			
				</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- RESIDENTE A:</font></td>
				<td>				
					<p><?php echo $residentecitta; ?></p>
				</td>
			</tr>
      <tr>
				<td width="237"><font face="Arial" color="#FF0000">- PROVINCIA RESIDENZA:</font></td>
				<td>				
					<p><?php echo $residenteprov; ?></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- VIA/PIAZZA:</font></td>
				<td>				
					<p><?php echo $indirizzores; ?></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- CAP:</font></td>
				<td>				
					<p><?php echo $cap; ?></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" >- EMAIL:</font></td>
				<td>				
					<p><?php echo $email; ?></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial">- TELEFONO:</font></td>
				<td>				
					<p><?php echo $telefono; ?></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial">- CELLULARE:</font></td>
				<td>				
					<p><?php echo $cellulare; ?></p>
				</td>
			</tr>
			<tr>
				<td width="237"><font face="Arial" color="#FF0000">- CODICE FISCALE:</font></td>
				<td>				
					<p><?php echo $codfisc; ?></p>
				</td>
			</tr>
		
      	<tr>
				<td width="237"><font face="Arial" color="#000000">- DATA RICHIAMO</font></td>
				<td>
        <?php
        $conta=0; 
        $sql1 = "SELECT * FROM richiami where ric_tessera = '$tessera'";
        $result = $conn->query($sql1);
        if ($result->num_rows > 0) {
        while($macrogruppo = $result->fetch_assoc())
	     	{
	   		 $conta++; 
        }	 }
         ?>			
						<p><input type="text" name="datarichiamo" value="<?php echo $datarichiamo; ?>" size="10" style="background-color: #C0C0C0">     Numero richiami gia' presenti: <?php echo $conta; ?> </p>
			</tr>
      	<tr>
				<td width="237"><font face="Arial" color="#000000">- TIPO RICHIAMO</font></td>
				<td>				
						<p><input type="text" name="tiporichiamo" value="<?php echo $tiporichiamo; ?>" size="50" style="background-color: #C0C0C0"></p>
			</tr>
      
      <tr>
				<td width="237"><font face="Arial" color="#000000">- DOCUMENTO</font></td>
				<td>
        <input type="file" name="fileToUpload" id="fileToUpload" size="50" style="font-size: 12pt; font-weight: bold"><font color="#000000">
       	</tr>
      
       <input type="hidden" name="ingranaggio" value="2" />
       <input type="hidden" name="tessera" value="<?php echo $tessera; ?>" />
			<tr>
				<td width="237">&nbsp;</td>
				<td><input type="submit" value="Inserisci richiamo" name="B3"></td>
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