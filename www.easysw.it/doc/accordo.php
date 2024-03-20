<html>
<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>accordo</title>
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
blink, .blink {
    -webkit-animation: blink 1s step-end infinite;
    -moz-animation: blink 1s step-end infinite;
    -o-animation: blink 1s step-end infinite;
    animation: blink 1s step-end infinite;
}
@-webkit-keyframes blink { 67% { opacity: 0 }}
@-moz-keyframes blink {  67% { opacity: 0 }}
@-o-keyframes blink {  67% { opacity: 0 }}
@keyframes blink {  67% { opacity: 0 }}          
</style>


<?php 
$ingranaggio=$_REQUEST["ingranaggio"];
$tessera=$_REQUEST["tessera"];
$login=$_REQUEST["login"];
#$tessera=968;
include "conf_DB.php";

if  ($ingranaggio==1 and $errore=="")
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
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "pdf" && $imageFileType != "docx"  && $imageFileType != "txt" && $imageFileType != "csv"   && $imageFileType != "xlsx"
&& $imageFileType != "gif"   ) {
    echo "<b><font color='#FF0000'> FILE NON DI TIPO   PNG QUINDI </font></b>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<b><font color='#FF0000'> OPERAZIONE ABORTITA.</font></b>";
// if everything is ok, try to upload file
} else {
    $eccofile=$target_file;
#$comodo=explode(".",$eccofile);
#$eccofile=$comodo[0];
    if (
   
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        #echo "The file ". basename( $_FILES["fileToUpload"]["name"], $target_file)). " has been uploaded.";  exit
$sw=0;
$sql1 = "SELECT * FROM logo  where login = '$login' ";
#echo $sql1; 
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())
		{ 
      $sw=1;	     
			}  }
if($sw==0){            
$sql = "insert into logo
 (
  login
 )
  values
 (    
  '$mail'  
   )
    ";
#echo $sql; exit;
    if ($conn->query($sql) === TRUE)
        { } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; }     
}    
$eccofilo="generico.png";    
$sqly = "UPDATE logo SET 
estensione='$estensione',
logolunghezza='$logolunghezza',
logoaltezza='$logoaltezza',
nomefile = '$eccofile'  
where login = '$email' "; 
#echo $sqly; 
   if ($conn->query($sqly) === FALSE) 
    {echo "errore logo".$sqly ; exit; } 
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
$cf=str_replace("'", "\'", $cf);
$runs=$_REQUEST["runs"];
$runs=str_replace("'", "\'", $runs);
$forma=$_REQUEST["forma"];
$form=str_replace("'", "\'", $forma);
$iva=$_REQUEST["iva"];
$iva=str_replace("'", "\'", $iva);
$bilancio=$_REQUEST["bilancio"];
$bilancio=str_replace("'", "\'", $bilancio);
$rappresentante=$_REQUEST["rappresentante"];
$rappresentante=str_replace("'", "\'", $rappresentante);
$rendi=$_REQUEST["rendi"];
$rendi=str_replace("'", "\'", $rendi);
$email=$_REQUEST["email"];
$email=str_replace("'", "\'", $email);
$sito=$_REQUEST["sito"];
$sito=str_replace("'", "\'", $sito);

$telefono=$_REQUEST["telefono"];
$telefono=str_replace("'", "\'", $telefono);

$fine=$_REQUEST["fine"];
$fine=str_replace("'", "\'", $fine);

$messa=$_REQUEST["messa"];
$messa=str_replace("'", "\'", $messa);

$titdati=$_REQUEST["titdati"];
$titdati=str_replace("'", "\'", $titdati);
$titdaticf=$_REQUEST["titdaticf"];
$titdaticf=str_replace("'", "\'", $titdaticf);
$errore="";
if(chkEmail($email)) {
  
}
else {
   $errore="La email non è valida";
}
if($errore==""){
$swerrore=0;
$sql1 = "SELECT * FROM associazione  where email = '$email' ";
#echo $sql1; 
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())
		{ 
      $swerrore=1;
			}  } 
if($swerrore==1){$errore="La email ha già utilizzata da altro utente";}
else{


 $sql = "insert into associazione
 (
  login
 )
  values
 (    
  '$email'  
   )
    "; 
#echo $sql; exit;
    if ($conn->query($sql) === TRUE)
        { } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; } 
$sql1 = "SELECT * FROM progressivocodice  where progr = '1' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $tessera = $macrogruppo["tessera"];	 
			} }
$tessera++;
$sql = "UPDATE progressivocodice set 
tessera = '$tessera'
where 
progr = '1' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 
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
codice = $tessera,
messa = '$messa',
sito = '$sito',
telefono = '$telefono',
fine = '$fine',
titdati='$titdati',
titdaticf='$titdaticf'
where 
login = '$email'
 
";
#echo $sql; exit;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "errore update " . $sql; } 
function rand_string( $length ) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$length);

}

$comodopas=rand_string(8); 

$sql = "insert into utenti
 (login, 
  password, 
  dio, 
  email, 
  cognome, 
  nome,
  codvolontario
 )
  values
 ( 
  '$email', 
  '$comodopas',  
  '1',  
  '$email',  
  '$intesta1',  
  '$intesta2',
  '$tessera' )
    ";
   if ($conn->query($sql) === TRUE)
        { } 
        else { echo $sql."Errore utenti" . $conn->error; exit; }
$sw=0;
$sql1 = "SELECT * FROM logo  where login = '$login' ";
#echo $sql1; 
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())
		{ 
      $sw=1;	     
			}  }
if($sw==0){            
$sql = "insert into logo
 (
  login
 )
  values
 (    
  '$email'  
   )
    ";
#echo $sql; exit;
    if ($conn->query($sql) === TRUE)
        { } 
        else { echo $sql."Errore inserimento recoerd: " . $conn->error; }     
}    
$eccofile="generico.png"; 
$logolunghezza=0;
$logoaltezza=0;
$estensione="png";   
$sqly = "UPDATE logo SET 
estensione='$estensione',
logolunghezza='$logolunghezza',
logoaltezza='$logoaltezza',
nomefile = '$eccofile'  
where login = '$email' "; 
#echo $sqly; 
   if ($conn->query($sqly) === FALSE) 
    {echo "errore logo".$sqly ; exit; }         
        
         
include("mailer/PHPMailerAutoload.php"); 
$oggetto="Richiesta utilizzo GESTIONE DOCUMENTALE";       
$aggiunta="	<font face='Arial' size='4' color='black' >L'associazione ".$intesta1." ".$intesta2." ".$indirizzo." ".$localita." email ".$email.", chiede di utilizzare LA GESTIONE DOCUMENTALE"."<br>";
$message = $aggiunta."Per autorizzare l'uilizzo cliccare il seguente link:"."<br>".
"https://www.abacuscalla.it/autorizza.php?patt=".$comodopas."<br>".
"Il sistema automatico della Gestione Documentale<br><br><br><br></font><font face='Arial' size='3' color='black' >La società .....<br>CF 93050770150<br>Web: www.??????<br>Email: info@???????.it<br>La presente e-mail e` stata generata automaticamente da un indirizzo di posta elettronica di solo invio; si chiede pertanto di non rispondere al messaggio.";
$mittente="domenico.calcidese@gmail.com";
$emailk="domenico.calcidese@gmail.com";
#$emailk="domenico.calcidese@gmail.com";
#$nomefilex = "./allegati/".$nomefile;
$mail = new PHPMailer();
$mail->From     = ($mittente);
$mail->FromName = "GESTIONE DOCUMENTALE";
$mail->AddAddress($emailk);
$mail->IsHTML(true);
$mail->AddBCC($indirizzibcc);
$mail->Subject  =  $oggetto;
$mail->Body     =  $message;
$mail->AltBody  =  "";
if(!$mail->Send()){
#echo "ERRORE1 non riesco a inviare la Email"; 
}else{#echo "EMAIL1 inviata con successo!!!";
}        
        
        
             
}  }


}
/*
$sql1 = "SELECT * FROM associazione  where login = '$login'";
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
			}  }
*/
?>
<script type="text/javascript">
		
		function controllo(){ 
            with(document.modulo) { 
             
        if(intesta1.value=="") { 
            alert("Error: manca RAGIONE SOCIALE"); 
            intesta1.focus(); 
            return false; 
                            } 
        if(indirizzo.value=="") { 
            alert("Error: manca INDIRIZZO"); 
            indirizzo.focus(); 
            return false; 
                            } 
        if(localita.value=="") { 
            alert("Error: manca LOCALITA'"); 
            localita.focus(); 
            return false; 
                            } 
        if(forma.value=="") { 
            alert("Error: mancaFORMA GIURIDICA"); 
            forma.focus(); 
            return false; 
                            }                     

        if(rappresentante.value=="") { 
            alert("Error: manca IL LEGALE RAPPRENTANTE"); 
            rappresentante.focus(); 
            return false; 
                              } 
        if(email.value=="") { 
            alert("Error: manca EMAIL"); 
            email.focus(); 
            return false; 
                              } 
         if(titdati.value=="") { 
            alert("Error: manca Responsabile dei dati dell'associazione"); 
            titdatifocus(); 
            return false; 
                              }                      
          if(titdaticf.value=="") { 
            alert("Error: manca C.F. del Responsabile dei dati dell'associazione"); 
            titdaticffocus(); 
            return false; 
                              }                                          
       
          if(accetta.value=="NO") { 
            alert("Se non accetti l'accordo non è possibile accettare l'iscrizione a ABACUSCALLA"); 
            accetta.focus(); 
            return false; 
                              }                      
         
					                                                            
                                                            
                                  } 
        } 
</script>
<body onload="updateImage();">      
<div align="center" >
<table border="0" width="760" height="140" bgcolor="#ffffff"  >
<tr > 
<td colspan="2" >
    <div align="center" style="border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
	<img border="0" src="carlopoma.png" width="480" height="140"> <br>

    <b><font face="Arial" size="3" color="#0051ba">SACI GROUP SRL</font></b><br>
    <font face="Arial" size="2" color="#666666">info@sacigroup.it www.sacigroup.it</font>
    </div>
</td>
</tr>
<tr>
<td bgcolor="#FFFFFF" style="border: 0px ; "><a href="menugenerale.php?login=<?php echo $login; ?>&codice=1">Menu Generale</a></td>  
</tr> 
</table> 
     
<br>      
</div> 

<div align="center">   
<div id="container">

<p align="center"><blink><b><font face="Arial" size="4" color="#993300"><? echo $errore; ?></font></b></blink></p>
<p align="center"><b><font face="Arial" size="4" color="#000000">Accordo per utilizzo soluzioni informatiche de La SACI GROUP SRL</font></b></p>



<table  width="100%" bgcolor="#FFF4F7" class="table6">

        <tr>
        <td colspan="2">
<font face="Arial" color="#000000" align="left">        
La societa', con la richiesta di utilizzo delle soluzioni informatiche sviluppate da La
SACI GROUP SRL, accetta le seguenti condizioni:<br>
- I programmi sono stati sviluppati da SACI GROUP SRL che ne mantiene
l’esclusiva proprietà fisica ed intellettuale;<br>
- La SACI GROUP SRL concede a fronte di corrispettivo il diritto di utilizzare in modo non esclusivo
e senza sfruttamento economico i propri prodotti software WEB APP o APP
(Android);<br>
- La societa' individua al suo interno una o più figure di responsabili del corretto
utilizzo e dell’eventuale assegnazione di utenze e profili;<br>
- Ai fini del rispetto delle normative sulla privacy l’associazione dispone di un proprio
responsabile formalmente comunicato a SACI GROUP SRL.
Controllo dell’Informativa Privacy
La Societa' è tenuta a far firmare l’Informativa Privacy a tutti gli interessati prima di
raccogliere i loro dati e di registrarli nei moduli della Gestione Documentale.
L’Informativa privacy deve essere aggiornata alle più recenti disposizioni di legge.
Per la normativa vigente, rimandiamo al sito del Garante della Privacy:<br>
<a href="https://www.garanteprivacy.it/home">https://www.garanteprivacy.it/home</a><br>

I dati contenuti nella Gestione Documentale gestiti da SACI GROUP SRL sono di esclusiva proprietà della società utilizzatrice
dell’applicazione.<br><br>
La SACI GROUP SRL, nell’ambito delle normali attività di manutenzione della piattaforma,
interverrà esclusivamente sulla infrastruttura tecnica/applicativa senza alcuna possibilità di
accesso diretto ai dati, escludendo quindi la cessione di informazioni a terzi, anche a titolo
gratuito.<br>
La gestione “fisica” dei dati è affidata ad Aruba, che ne garantisce l’integrità e la
riservatezza attraverso le specifiche policies sottoscritte con l’accettazione del contratto di
servizio.<br>
Per tutti i dettagli relativi alla gestione della privacy da parte di Aruba si rimanda alla
pagina: <br>
<a href="https://www.aruba.it/gdpr-regolamento-europeo-privacy.aspx">https://www.aruba.it/gdpr-regolamento-europeo-privacy.aspx</a>  <br>

Accettazione delle condizioni di fornitura<br>
L’utilizzo delle soluzioni informatiche della SACI GROUP SRL implica l’accettazione di tutte le norme,
condizioni e vincoli sopra riportati: <br>
Associazione: Titolare del Trattamento dei Dati:
<input type="text" name="titdati" value="<?php echo $titdati; ?>"    style="background-color: #ececee">
C.F.  <input type="text" name="titdaticf" value="<?php echo $titdaticf; ?>"    style="background-color: #ececee"> <br>

        </td>
        </TR>
       
</table>
		</td>
	    </tr>
</table>




<br>
</div>
</div>
<? 
 function chkEmail($email)
{
   // elimino spazi, "a capo" e altro alle estremità della stringa
   $email = trim($email);

   // se la stringa è vuota sicuramente non è una mail
   if(!$email) {
       return false;
   }

   // controllo che ci sia una sola @ nella stringa
   $num_at = count(explode( '@', $email )) - 1;
   if($num_at != 1) {
       return false;
   }

   // controllo la presenza di ulteriori caratteri "pericolosi":
   if(strpos($email,';') || strpos($email,',') || strpos($email,' ')) {
       return false;
   }

   // la stringa rispetta il formato classico di una mail?
   if(!preg_match( '/^[\w\.\-]+@\w+[\w\.\-]*?\.\w{1,4}$/', $email)) {
       return false;
   }

   return true;
}

?>
</body>

</html>