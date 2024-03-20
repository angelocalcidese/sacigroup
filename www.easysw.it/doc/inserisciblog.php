
<?php

if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {
}
else
{$url_pagina_chiamante="autenticanot.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php
}

$ingranaggio=$_REQUEST["ingranaggio"];
$testo=$_REQUEST["testo"];
$testoorig=$_REQUEST["testo"];
$oggetto=$_REQUEST["oggetto"];
$classe=$_REQUEST["classe"];
$login=$_REQUEST["login"];

if ($ingranaggio==2)
{
if ($oggetto!="")
{
if ($testo!="")
{$uploadOk = 1; 
$target_dir = "./notizie/";
 
$nomefile=basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . $nomefile; 
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
#echo "file ".$nomefile;
if ($nomefile!="") {
#echo $nomefile;
#echo $imageFileType; exit;
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "pdf" && $imageFileType != "docx"  && $imageFileType != "txt" && $imageFileType != "csv"   && $imageFileType != "xlsx"   && $imageFileType != "jpeg"  && $imageFileType != "JPEG"
&& $imageFileType != "gif" && $imageFileType != "JPG") {
    echo "<b><font color='#FF0000'> FILE NON DI TIPO  JPG, PDF, PNG, GIF, DOCX, TXT, CSV, XLSX QUINDI </font></b>";
    $uploadOk = 0;}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<b><font color='#FF0000'> OPERAZIONE ABORTITA.</font></b>";exit;} else 
    { 
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        #echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        

        
        
}

}
} else { $nomefile="generico.png"; }

include "conf_DB.php";  

$sql = "SELECT * FROM progressivonotizie  where progr = '1' ";
#echo $sql; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $tesseraxx = $macrogruppo["tessera"];	 
			}}
$tesseraxx++;
$sql = "UPDATE progressivonotizie set 
tessera = '$tesseraxx'
where 
progr = '1' 
";
if ($conn->query($sql) === TRUE)
    {  } 
    else
    {echo "&errore1vcli=errore&";} 

 
#$testo = addslashes(htmlentities($testo));
$testo=str_replace('"', '\"', $testo);   
$testo=str_replace("'", "\'", $testo); 
$oggetto=str_replace('"', '\"', $oggetto);   
$oggetto=str_replace("'", "\'", $oggetto); 
$classe=str_replace('"', '\"', $classe);   
$classe=str_replace("'", "\'", $classe);    
#echo $testo; exit;
$sql = "INSERT INTO 
    articolo (
    testo,
    numarticolo,
    immagine,
    oggetto,
    classe,
    quando,
    login
    ) VALUES (
    '$testo',
    '$tesseraxx',
    '$nomefile',
    '$oggetto',
    '$classe',
    CURRENT_TIMESTAMP,
    '$login'    
    )";
#echo $sql;     
    if ($conn->query($sql) === FALSE) 
        {        
        echo "ERRORE SCRITTURA ISCRIZIONE";exit;
       } 
       else
       { } 
#$sql1x = "SELECT * FROM articolo ";
     #echo $sql1x;
#	$resultx = $conn->query($sql1x);
#if ($resultx->num_rows > 0) {
#  while($macrogruppox = $resultx->fetch_assoc())
	
#	{ $testo1 = $macrogruppox["testo"]; 
  
 # $testo1=str_replace("\'", "'", $testo1);
#   echo $testo1."<br>";
#    } }      
#exit;          
$url_pagina_chiamante="listanotizie.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script> 
<?php
} else { echo "<script type='text/javascript'>alert('MANCA IL TESTO DELLA NOTIZIAL');</script>"; }
} else { echo "<script type='text/javascript'>alert('MANCA IL CAMPO OGGETTO ');</script>"; }



}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>banca del tempo carpe diem quinto romano chi siamo</title>
<style>
div.containerx {
  padding: 10px;
}
h1 {
  text-shadow: 2px 2px 4px #999999;
  filter:DropShadow(Color=#000000, OffX=2, OffY=2);
} 
h2 {
  text-shadow: 2px 2px 4px #000000;
  filter:DropShadow(Color=#000000, OffX=2, OffY=2);
}
div#container {
min-width:   1050px;
  min-height:  500px;
  max-width:  955px;
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

div.containerx {
  padding: 10px;
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

div.xcontainer{
  padding: 10px;
}
.table6 {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
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
input[type=radio] {
    border: 0px;
    width: 10%;
    height: 2em;
}
#menu ul {
width:1050px; /* Dimensioni della barra del menu */
padding:0;
margin:0 auto;
display:block;
list-style-type:none; /* Stile della lista */
}
#menu li {
display:inline; 
}
#menu a {
color:#fff; /* Colore del testo */
text-align:center; /* Testo allineato al centro */
text-decoration:none; /* Nessuna decorazione */
background:#909090; /* Colore dello sfondo */
padding:3px 15.5px; /* Distanza tra le singole voci */
border-right:2px solid #ffffff; 
font-family:  Verdana;
}
#menu a:hover {
background:#007fff; /* Colore dello sfondo */
}
div.polaroid {
  width: 954px;
  height: 140px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 350px;
  height: 265;
  background-color: #FFCC00;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  border: 13px solid #FFCC00;
 box-shadow: 5px 10px 18px #1b5633;
  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
} 


.tooltipx {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltipx .tooltiptext {
  visibility: hidden;
  width: 400px;
  height: 700;
  background-color: #feaaaa;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  border: 3px solid #b0adad;
 box-shadow: 5px 10px 18px #1b5633;
  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltipx:hover .tooltiptext {
  visibility: visible;
}  
</style>   
</head>

<body >

<div align="center">
	<table border="0" width="30%">
		<tr>
			<td >
      <div class="polaroid">
			<img border="0" src="carlopoma.png" width="954" height="140">
      
      </div>
      </td>  
		</tr>
	</table>
  </div>
  
<div align="center">
  <h1>
		<p  align="center"><font face="Elephant" size="5" color="#ffffff">CARPE DIEM</font></p>   
   </h1>
</div>  
  </div> 
  


<br>
	 
<? include "menuverticale.php"; ?>


<div align="center">   
<div id="container">

	<p align="center"><font face="Verdana" size="5" color="#000000">INSERIMENTO DATI PER LA PUBBLICAZIONE</font></b></p> 
 <form method="POST" action="inserisciblog.php?login=<? echo $login; ?>" enctype="multipart/form-data">   
<table border="1" width="100%" bgcolor="#FFF4F7" class="table6" >	
   </tr>
	<tr>
				<td width="237"><font size="3" face="Arial" color="#FFFFFF">- Argomento  &nbsp;&nbsp;&nbsp; </font>
        <div class="tooltip">
    <img src="domanda.png" width="20" height="20">
    
  <span class="tooltiptext"><font color="#000000" style="font-size: 12pt;">
  La scelta dell'argomento e' importante per la ricerca specifica. 
  
  
  
  
  </span>
  </div>
        </font></td>
				<td>				
					<select  name="classe">
					<option selected>Varie</option>
					<option>Cucina</option>
          <option>Poesie</option>
          <option>Scienza</option>
          <option>Curiosita'</option>
          <option>Clima</option>
					</select></td>
			</tr>   
   <tr>
	
    <input type="hidden" name="login" value="<?php echo $login; ?>" />
       
   
				<td ><font size="3" face="Arial" color="#FFFFFF">- Carica Immagine Notizia&nbsp;&nbsp;&nbsp; </font>
        <div class="tooltip">
    <img src="domanda.png" width="20" height="20">    
  <span class="tooltiptext"><font color="#000000" style="font-size: 12pt;">
  L'immagine da caricare deve essere gia' presente sul tuo computer e deve essere coerente con l'argomento della notizia.
  Facendo la scelta verra' caricato l'indirizzo dell'immagine, quendo cliccherai il tasto <font style="color: red;">Pubblica la Notizia</font> verra' veramente caricata dal tuo computer sul sito.  
  <br><b>L'immagine non e' obbligatoria.</b>
  <br><b>Nel nome dell'immagine non devono apparire caratteri speciali.</b>
  </span>
  </div>        
        </td>
				<td> 
        <input type="file"   name="fileToUpload" id="fileToUpload" size="50" style="font-size: 12pt; font-weight: bold" ></td>
       	</tr>
			
	<tr>
		<td><font size="3" face="Arial" color="#FFFFFF">Oggetto per indice <br>(max 2.000 caratteri)&nbsp;&nbsp; </font>
        <div class="tooltip">
    <img src="domanda.png" width="20" height="20">    
  <span class="tooltiptext"><font color="#000000" style="font-size: 12pt;">
  L'oggetto deve essere una sintesi dell'articolo e verra' esposto nell'indice delle notizie.<br>
  Il formato e lo stile del testo e' controllato dal sito e quindi normalizzato.   
  <br><b>L'ogetto e' obbligatorio max 2.000 caratteri.</b>
  </span>
  </div>        </font>   </td>
    <td><input style="font-size: 15px;" name="oggetto"  size="85" </td>
   </tr>
  <tr >

    <td><font size="3" face="Arial" color="#FFFFFF">Inserisci testo della notizia <br>(max 20.000 caratteri)&nbsp;&nbsp;&nbsp; </font>
        <div class="tooltip">
    <img src="domanda.png" width="20" height="20">    
  <span class="tooltiptext"><font color="#000000" style="font-size: 12pt;">
 
 Il testo della notizia puo' essere formattato dall'utente attraverso le funzioni di questa finestra, se il testo e' copiato e incollato deve essere riformattato (esempio: se e' un testo incollato ha una formattazione centrata deve essere riselezionato e nuovamente formattato centrato con gli strumenti di questa finestra). <br>
 <br><b>Il testo e' obbligatorio max 20.000 caratteri.</b>
  </span>
  </div>        </font>   </td>
<script type="text/javascript" src="./nic/nicEdit.js"></script>
<script type="text/javascript">
	   bkLib.onDomLoaded(function() {
          var myNicEditor = new nicEditor();
          myNicEditor.setPanel('myNicPanel');
          myNicEditor.addInstance('testo');
          myNicEditor.addInstance('myInstance2');
          myNicEditor.addInstance('myInstance3');
     });
</script>
<td style="font-size: 13px;background-color: #ffffff;"  align="center">
<div id="myNicPanel" style="width: 700px;"></div>
<?php

//Controlla il tipo di browser
function GetBrowser()
{
$browser = array(
'Lynx'      => 'Lynx',
'Opera'     => 'Opera',
'WebTV'     => 'WebTV',
'Konqueror' => 'Konqueror',
'bot'       => 'Bot',
'Google'    => 'Bot', 
'Chrome'     => 'Chrome',
'slurp'     => 'Bot',
'scooter'   => 'Bot',
'spider'    => 'Bot',
'infoseek'  => 'Bot',
'MSIE'      => 'Internet Explorer',
'Firefox'   => 'FireFox',
'Nav'       => 'Netscape',
'Gold'      => 'Netscape',
'x11'       => 'Netscape',
'Netscape'  => 'Netscape'
);
foreach($browser as $chiave => $valore)
{
if(strpos($_SERVER['HTTP_USER_AGENT'], $chiave ))
{
return $valore;
}
}
return 'Altro';
}
//esempio applicato
$browser=GetBrowser();
if ($browser == "Chrome")
{$lungo=700;}else{$lungo=724;}

?>
<!--<textarea style="font-size: 20px;" name="testo"  id="testo" rows="20" cols="60"><? echo $testo;?></textarea>   -->
<textarea id="testo" rows="16" name="testo" style=" background-color: #ffffff;  width: <? echo $lungo;?>;"></textarea>

    </td>
</tr>

<tr>     <input type="hidden" name="ingranaggio" value="2" />
         <input type="hidden" name="login" value="<? echo $login; ?>" />
				<td ><font size="3" face="Arial" color="#FF0000">- Pubblica la Notizia
        &nbsp;&nbsp;&nbsp; </font>
        <div class="tooltip">
    <img src="domanda.png" width="20" height="20">    
  <span class="tooltiptext"><font color="#000000" style="font-size: 12pt;">
 Clicca su Pubblica la Notiza dopo aver controllato e riletto tutti i campi.<br>
 Nel caso di una pubblicazione errata chiama Lucia che come amministratore puo' intervenire per cancellarla.<br>
 <b>SONO VIETATE LE PUBBLICAZIONI DI CARATTERE POLITICO O RELIGIOSO</b> <br>
 Tutte le pubblicazione vengono insidacabilmente approvate dall'amministratore che ha la facolta' di accettare o scartarla.

  </span>
  </div>     
        </font></td>      
				<td><input type="image" name="B3"  src="mail.png" width="50" height="50"></td> 
        
			</tr>
   </table>
</form>   
<br>
 

	<tbody>

 



      




	</tbody>
	</table>
  <br>

</div>
</div>
</div>



<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery.tablescroll.js"></script>

<script>
/*<![CDATA[*/

jQuery(document).ready(function($)
{
	$('#thetable').tableScroll({height:750});

	$('#thetable2').tableScroll();
});

/*]]>*/
</script>
<script>
function carica_consegnaA(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=600,height=800,left=150,top=150,location=0,directories=0,toolbar=0,scrollbars=yes,resizable=1')
    
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>
  <script>
function carica_consegnaB(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script> 
  <script>
function carica_consegnaC(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=800,height=700,left=150,top=150,location=0,directories=0,toolbar=0')
    //location.href = 'http://www.spi.it/root/provascroll/provalistatestata.php';
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>  
  <script>
function carica_consegnaD(url){
	<!-- intestazione -->	
    //popupWindow =
	//	window.open(url,'pdf','width=800,height=700,left=150,top=150,location=0,directories=0,toolbar=0')
    location.href = url;
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>  
<script>
function carica_consegnaF(url){
	<!-- intestazione -->	
    popupWindow =
		window.open(url,'pdf','width=1000,height=300,left=150,top=150,location=0,directories=0,toolbar=0,scrollbars=yes,resizable=1')
    
    //	window.open('esponipdf1x.php?offerta='+offerta,'offerta','width=1200,height=800,left=150,top=150,location=0,directories=0,toolbar=0')
		//return false;

}
</script>
</body>
</html>
<?php
#include ("footer.php");
?>