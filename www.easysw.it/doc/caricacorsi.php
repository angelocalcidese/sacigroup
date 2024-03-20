<html>
<head>

	<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
	<title>Esponi Socio</title>
	<link rel="stylesheet" type="text/css" href="jquery.tablescroll.css"/>
<script type="text/javascript">

function changeimg(){
    document.getElementById('img1').src='https://www.spi.it/poma/corsi/poma1.jpg';
    setTimeout("changeimg()",140);
}

</script>   
<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="pomaindex.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php  }
$login=$_REQUEST["login"];
$ingranaggio=$_REQUEST["ingranaggio"];
#echo "ingranaggio = ".$ingranaggio;
include "conf_DB.php";


if  ($ingranaggio==2)
{

$uploadOk = 1;

$file_da_cancellare = './corsi/poma1.jpg';  
unlink($file_da_cancellare);  
$nomefile=basename($_FILES["fileToUpload"]["name"]);

#echo "file ".$nomefile; exit;
if ($nomefile=="") {echo "<b><font color='#FF0000'> MANCA DOCUMENTO DA CARICARE OPPURE </font></b>"; $uploadOk = 0;}

$target_dir = "./corsi/";

$target_file = $target_dir . "poma1.jpg";
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

// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000000000) {
    echo "ATTENZIONE FILE TROPPO GRANDE.</font></b>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "pdf" && $imageFileType != "docx"  && $imageFileType != "txt" && $imageFileType != "csv"   && $imageFileType != "xlsx"   && $imageFileType != "jpeg"  && $imageFileType != "JPEG"
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

}
}
?>
<script>
window.location.href='caricacorsi.php?login=<? echo $login; ?>';
</script>
<?php
}





$oggi=date("Y-m-d");
#header('Content-Type: text/html; charset=utf-8'); 
?>


<style>
div#container {
min-width:   955px;
  min-height:  500px;
  max-width:  955px;
  max-height: 1000px;
}
div#containerx {
min-width:   955px;
  min-height:  5px;
  max-width:  955px;
  max-height: 5px;
}
div#sottocontainer {
min-width:   800px;
  min-height:  500px;
  max-width:  800px;
  max-height: 1000px;
}
</style>  
<style>
table, th, td {
    border: 1px solid black;    
}
</style>
<style>
tr {
  background-image: url("btn1.gif");
}
 
tr:hover {
    background-image: url("back-barra-menuorrizontale1.gif");
}
</style>
<style>
a:link, a:visited {
  text-decoration: none; 
    font-weight: normal;
    color: #000000
}

a:hover {
  color: black;
 
  text-decoration: none;
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
</head>
<body>
<div align="center">
	<table border="0" width="30%">
		<tr>
			<td>
			<img border="0" src="carlopoma.png" width="954" height="140"></td>
		</tr>
</table> 
  </div>
  <div align="center">
<div id="containerx" align="left"> 
      <td ><a href="menugenerale.php?login=<?php echo $login; ?>">Servizi</a>/Corsi(sito)</td></tr>
</div>
</div>
<br>
<div align="center">   
<div id="container">
<p align="center"><b><font face="Arial" size="6" color="#993300">CARICA CORSI IN SITO</font></b></p>
 
<div align="center">



</div>
<div>
<form method="POST" action="" name="modulo" enctype="multipart/form-data">
<table>
<tr>
				<td width="237"><font face="Arial" color="#000000">- SCEGLI IMMAGINE</font></td>
				<td>
        <input type="file" name="fileToUpload" id="fileToUpload" size="50" style="font-size: 12pt; font-weight: bold"><font color="#000000">
       	</tr>
      
       <input type="hidden" name="ingranaggio" value="2" />
       <input type="hidden" name="login" value="<?php echo $login; ?>" />
			<tr>
				<td width="237">&nbsp;</td>
				<td><input type="submit" value="Elabora Immagine" name="B3"></td>
			</tr>
</table>

</form>
<div align="center">
<?php
$file="corsi/poma1.jpg"; //ricavo da db il nome dell'inmmagine e gli do il percorso
list($width, $height, $type, $attr) = getimagesize($file);//lego i dati
#echo $width."  ".$height."<br>";
#if ($height > $width)
{$proporzione=$height/$width;}
#else
#{$proporzione=$width/$height;}
#echo $proporzione."<br>";
$altezza=700*$proporzione;
#echo $altezza."<br>";
#if(isset($width)){//verifico la lettura (può capitare che non sia possibile)
#    if($width >= $height){
#        $max_w="60%";//fisso la larghezza
#        $max_h=round($height/$width*60,1)."%";//adatto il % dell'altezza per non deformarw
#    }else{
#        $max_h="60%";//fisso l'altezza
#        $max_h=round($width/$height*60,1)."%";//adatto il % di width
#    }
    $stile="width: 700px; height: $altezza;";//preparo lo style
#}else
#{//non leggo metto solo la width
#    $stile="width: 30%;";
#}
echo "<img src=\"$file\"  style=\"$stile\" title=\"$autore\" alt=\"$autore\">";
?>
</div>
</div>




</body>
</html>