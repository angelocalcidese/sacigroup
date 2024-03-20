<html>
<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>autorizzazione</title>
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
$patt=$_REQUEST["patt"];

#$tessera=968;
include "conf_DB.php";

$sql1 = "SELECT * FROM utenti  where password = '$patt'  ";
#echo $sql1;
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{$codvolontario = $macrogruppo["codvolontario"];
     $dio = $macrogruppo["dio"];
     $login = $macrogruppo["login"];
     $email = $macrogruppo["email"];
     $intesta1 = $macrogruppo["cognome"];
     $intesta2 = $macrogruppo["nome"];
     $codice = $macrogruppo["codvolontario"];
    } }
$sql1 = "SELECT * FROM associazione  where codice = '$codice'  ";
#echo $sql1;
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{
     $indirizzo = $macrogruppo["indirizzo"];
     $localita = $macrogruppo["localita"];
     $cf = $macrogruppo["cf"];
     $runs = $macrogruppo["runs"];
     $rappresentante = $macrogruppo["rappresentante"];
     $iva = $macrogruppo["iva"];
     $forma = $macrogruppo["forma"];
     $bilancio = $macrogruppo["bilancio"];
     $rendi = $macrogruppo["rendi"];
     $autorizzato = $macrogruppo["autorizzato"];
     $fine = $macrogruppo["fine"];
     $messa = $macrogruppo["messa"];
     $sito = $macrogruppo["sito"];
     $telefono = $macrogruppo["telefono"];
    } }

if($ingranaggio==1){
if($autorizzato=="NO"){
$annoapertura=date("Y");
/*
$sql1 = "SELECT * FROM causalebase  ";
#echo $sql1;
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{
      $annobase = $macrogruppo["esercizio"];
      $codicebase = $macrogruppo["codice"];
      $descrizionebase = $macrogruppo["descrizione"];
      $descrizionebase=str_replace("'", "\'", $descrizionebase);
      $mastrobase = $macrogruppo["mastro"];
      $e_ubase = $macrogruppo["e_u"];
      $loginbase = $macrogruppo["login"];
      $modifica = $macrogruppo["modifica"];
$annoggi=date("Y");      
$sqlgg = "INSERT INTO 
causale (
esercizio, 
codice, 
e_u,
mastro,
sottomastro,
conto, 
descrizione,
login,
modifica
) VALUES (
'$annoapertura', 
'$codicebase', 
'$e_ubase',
'$mastrobase',
'1',
'1', 
'$descrizionebase',
'$login',
'$modifica'
)";
#echo $sqlgg; exit;
if ($conn->query($sqlgg) === TRUE)
         {$url_pagina_chiamante="tabelle.php?login=$login";}
*/         
$sql = "INSERT INTO esercizio
              (              
              login,
              esercizio, 
              stato) 
            VALUES (            
              '$login', 
              '$annoapertura',
              'A'
              )";         
    
 #   } }
include("mailer/PHPMailerAutoload.php"); 
$oggetto="Richiesta utilizzo GESTIONE DOCUMENTALE";       
$aggiunta="	<font face='Arial' size='4' color='black' >Spett.le Associazione ".$intesta1." ".$intesta2." ".$indirizzo." ".$localita." email ".$email.", siete autorizzate ad utilizzare la Gestione Documentale"."<br>";
$message = $aggiunta."Il link:"."<br>".
"https://www.abacuscalla.it"."<br><br>".
"Username=".$login."<br>".
"Password=".$patt."<br><br>".
"Cordiali saluti.<br><br><br><br></font><font face='Arial' size='3' color='black' >La SACI GROUP SRL<br>CF ????????<br>Web: www.sacigroup.it<br>Email: info@sacigroup.it<br>La presente e-mail e` stata generata automaticamente da un indirizzo di posta elettronica di solo invio; si chiede pertanto di non rispondere al messaggio.";
$mittente="info@lacallaodv.it";
#$email="domenico.calcidese@gmail.com";
#$nomefilex = "./allegati/".$nomefile;
$mail = new PHPMailer();
$mail->From     = ($mittente);
$mail->FromName = "GESTIONE DOCUMENTALE";
$mail->AddAddress($email);
$mail->IsHTML(true);
$mail->AddBCC($indirizzibcc);
$mail->Subject  =  $oggetto;
$mail->Body     =  $message;
$mail->AltBody  =  "";
if(!$mail->Send()){
#echo "ERRORE1 non riesco a inviare la Email"; 
}else{#echo "EMAIL1 inviata con successo!!!";
}        
$sql = "UPDATE associazione set 
autorizzato = 'SI',
primavolta = 'SI'
where 
codice = '$codice'
 
";
#echo $sql; exit;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "errore update " . $sql; }         
        
$ingranaggio=2; 
} else {$errore="L'associazione è già stata autorizzata";}            
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
            alert("Error: manca RAGIONE SOCIALE 1"); 
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
       
                              
         
					                                                            
                                                            
                                  } 
        } 
</script>
<body onload="updateImage();">      
<div align="center" >
<table border="0" width="760" height="140" bgcolor="#ffffff"  >
<tr > 
<td colspan="2" >
    <div align="center" style="border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
	<img border="0" src="carlopoma.png" width="530" height="150"> <br>

    <b><font face="Arial" size="3" color="#0051ba">SACIS GROUP Srl</font></b><br>
    <font face="Arial" size="2" color="#666666">info@??????.it www.?????.it</font>
    </div>
</td>
</tr> 
</table> 
     
<br>      
</div> 

<div align="center">   
<div id="container">
<p align="center"><blink><b><font face="Arial" size="4" color="#993300"><? echo $errore; ?></font></b></blink></p>
<p align="center"><b><font face="Arial" size="4" color="#000000">AUTORIZZAZIONE PER L'UTILIZZO ABACUSCALLA</font></b></p>
<!--<p align="center"><font face="Arial" size="3" color="#000000">L’applicazione gestionale (web app) viene fornita gratuitamente dall’associazione LA CALLA ODV - ETS alle associazioni no-profit che si occupano di servizi socio-assistenziali. È richiesto unicamente un contributo alle spese per l’utilizzo del database di 15€ l’anno.</font></p>-->
<? if($ingranaggio==2){ ?>
<br><br> <br><br><br><br>
<p align="center"><font face="Arial" size="4" color="#000000"> è stata inviata una email contenente le credenziali dell'accesso all'utilizzo della Gesione Documentale.</font></p>
<?exit; } else {?>        
<form method="POST" action="" name="modulo" onSubmit="return controllo();"> 
<table  width="100%" bgcolor="#FFF4F7" class="table6">
	<tr>
		<td>
		<table border="1" width="100%">
        <tr>
	    <td colspan="2">
        <p  align="center"><b><font face="Arial" size="3" color="#993300">DATI ASSOCIAZIONE E INFORMAZIONI GENERALI</font></b></p>
        </td>
		</tr>			
        <tr>
		<td width="40%">
        <font face="Arial" color="#000000">- RAGIONE SOCIALE</font>
        </td>
		<td>				
		<p><input type="text" name="intesta1" value="<?php echo $intesta1; ?>"  size="60"  style="background-color: #ececee"></p>	
		</td>
		</tr>
        <tr>
		<td >
        <font face="Arial" color="#000000">- NUM. RUNTS:</font>
        </td>
		<td>				
		<p><input type="text" name="runs" value="<?php echo $runs; ?>"  size="60"  style="background-color: #ececee"></p>																													
		</td>
		</tr> 
        <tr>
		<td >
        <font face="Arial" color="#000000">- CODICE FISCALE:</font>
        </td>
		<td>				
		<p><input type="text" name="cf" value="<?php echo $cf; ?>"  size="60"  style="background-color: #ececee"></p>													
		</td>
		</tr> 
        <tr>
		<td >
        <font face="Arial" color="#000000">- PARTITA IVA:</font>
        </td>
		<td>				
		<p><input type="text" name="iva" value="<?php echo $iva; ?>"  size="60"  style="background-color: #ececee"></p>													
		</td>
		</tr>  
<!--        
		<tr>
		<td >
        <font face="Arial" color="#000000">- RAGIONE SOCIALE PARTE 2°:</font>
        </td>
		<td>				
		<p><input type="text" name="intesta2" value="<?php echo $intesta2; ?>"  size="60"  style="background-color: #ececee"></p>					
		</td>
		</tr>
-->        
		<tr>
		<td >
        <font face="Arial" color="#000000">- INDIRIZZO SEDE SOCIALE:</font>
        </td>
        <td>				
		<p><input type="text" name="indirizzo" value="<?php echo $indirizzo; ?>"  size="60"  style="background-color: #ececee"></p>									
		</td>			
		</tr>
		<tr>
		<td >
        <font face="Arial" color="#000000">- COMUNE:</font>
        </td>
		<td>									
		<p><input type="text" name="localita" value="<?php echo $localita; ?>"  size="60"  style="background-color: #ececee"></p>											
        </td>			
		</tr>
        <tr>
		<td >
        <font face="Arial" color="#000000">- TELEFONO:</font>
        </td>
		<td>									
		<p><input type="text" name="telefono" value="<?php echo $telefono; ?>"  size="60"  style="background-color: #ececee"></p>											
        </td>			
		</tr
        <tr>
		<td >
        <font face="Arial" color="#000000">- LEGALE RAPPRESENTANTE:</font>
        </td>
		<td>				
		<p><input type="text" name="rappresentante" value="<?php echo $rappresentante; ?>"  size="60"  style="background-color: #ececee"></p>													
		</td>
		</tr>  
        
        <tr>
		<td >
        <font face="Arial" color="#000000">- EMAIL:</font>
        </td>
		<td>				
		<p><input type="text" name="email" value="<?php echo $email; ?>"  size="60"  style="background-color: #ececee"></p>													
		</td>
		</tr> 
        <tr>
		<td >
        <font face="Arial" color="#000000">- SITO WEB:</font>
        </td>
		<td>				
		<p><input type="text" name="sito" value="<?php echo $sito; ?>"  size="60"  style="background-color: #ececee"></p>													
		</td>
		</tr> 
        <tr>
		<td >
        <font face="Arial" color="#000000">- FORMA GIURIDICA:</font>
        </td>
		<td>				
		<p><input type="text" name="forma" value="<?php echo $forma; ?>"  size="60"  style="background-color: #ececee"></p>													
		</td>
		</tr> 
        <!--
        <tr>
		<td >
        <font face="Arial" color="#000000">- BILANCIO ANNUALE AL.:</font>
        </td>
		<td>				
		<p><input type="text" name="bilancio" value="<?php echo $bilancio; ?>"  size="60"  style="background-color: #ececee"></p>													
		</td>
		</tr>  
        <tr>
		<td >
        <font face="Arial" color="#000000">- ANNO DI RENDICONTAZIONE DAL -AL:</font>
        </td>
		<td>				
		<p><input type="text" name="rendi" value="<?php echo $rendi; ?>"  size="60"  style="background-color: #ececee"></p>													
		</td>
		</tr> -->           
		<tr>
		<td >
        <font face="Arial" color="#000000">- FINALITA' DELL'ASSOCIAZIONE:</font>
        </td>
		<td>				
		<p><textarea style="background-color: #ececee" name="fine"  cols="60" rows="3"><?php echo $fine; ?></textarea></p>													
		</td>
		</tr>
        <tr>
		<td >
        <font face="Arial" color="#000000">- MESSAGGIO:</font>
        </td>
		<td>				
		<p><textarea style="background-color: #ececee" name="messa"  cols="60" rows="3"><?php echo $messa; ?></textarea></p>													
		</td>
		</tr>
       <input type="hidden" name="ingranaggio" value="1" /> 
       <input type="hidden" name="patt" value="<? echo $patt; ?>" />       
		<tr>
		<td width="237">&nbsp;</td>
		<td><input type="submit" value="Autorizza" name="B3"></td>
		</tr>
</table>
		</td>
	    </tr>
</table>


</form>
<!--<p align="center"><font face="Arial" size="3" color="#000000">La richiesta di iscrizione, una volta inviata verrà presa in carico da LA CALLA, successivamente verrà inviata una email contenente le credenziali dell'accesso all'utilizzo di ABACUSCALLA. </font></p>-->
<? } ?>
<!--
<form method="POST" action="" name="modulo1" enctype="multipart/form-data">
<table border="1" width="100%" bgcolor="#FFF4F7" class="table6">
	<tr>
		<td colspan="2"><p align="center"><b><font face="Arial" size="3" color="#993300">INSERIMENTO LOGO ASSOCIAZIONE </font></b></p></td>
	</tr>
	<tr>
		<td colspan="2">
        <input type="file" name="fileToUpload" id="fileToUpload" size="50" style="font-size: 12pt; font-weight: normal; background-color: #ffffff;"><font face="Arial" size="3" color="#993300"></font>
        </td>
	</tr>
    <tr>
		<td width="40%">
        <font face="Arial" color="#000000" size="2">- Laeghezza logo in PX:</font>
        </td>
		<td>				
		<p><input type="text" name="logolunghezza"   size="10"  style="background-color: #ececee"></p>	
		</td>
		</tr>
      <tr>
		<td width="40%">
        <font face="Arial" color="#000000" size="2">- Altezza logo inPX:</font>
        </td>
		<td>				
		<p><input type="text" name="logoaltezza" "  size="10"  style="background-color: #ececee"></p>	
		</td>
		</tr>
    
    
    <tr>
    <td align="center" colspan="2">
    <input type="hidden" name="ingranaggio" value="1" />  
    <input type="submit" value="Memorizza logo" name="B3">
    </td>
    </tr>
</table>
</form>
-->
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