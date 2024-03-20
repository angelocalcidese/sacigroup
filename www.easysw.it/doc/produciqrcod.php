<?

$login=$_REQUEST["login"];
$ingranaggio=$_REQUEST["ingranaggio"];
$B7=$_REQUEST["B7"];
$numero=$_REQUEST["numero"];
$grandezza=$_REQUEST["grandezza"];
if ($grandezza==""){$alto=200;$largo=200;}
   else
   {
   $dicigra=explode(" - ",$grandezza);
   if($dicigra[0]==1){$alto=40;$largo=40;}
   if($dicigra[0]==2){$alto=80;$largo=80;}
   if($dicigra[0]==3){$alto=100;$largo=100;}
   if($dicigra[0]==4){$alto=120;$largo=120;}
   if($dicigra[0]==5){$alto=140;$largo=140;}
   #echo $alto." ".$largo;
   }
$tespas=$_REQUEST["tespas"];
if ($tespas=="TESSERA"){$comodo="chiudites.php?tes="; $numero = sprintf("%03d", $numero);} else{$comodo="chiudi.php?cli=";$numero = sprintf("%02d", $numero);}
#include "conf_DB.php";


$oggi=date("d/m/Y");
if ($ingranaggio==1 or $ingranaggio == 2)
{

// Usiamo la libreria 
require("qrlib.php");
 
// ECC Level, livello di correzione dell'errore (valori possibili in ordine crescente: L,M,Q,H - da low a high)
$errorCorrectionLevel = 'L';

// Matrix Point Size, dimensione dei punti della matrice (da 1 a 10)
$matrixPointSize = 4;

// I dati da codificare nel QRcode
$data = "http://www.mensacarita.it/".$comodo.$numero;

// Il File da salvare (deve essere salvato in una directory scrivibile dal web server)
$filename = 'timbri/qrcode'.$tespas.$numero.'.png';

// Generiamo il QRcode in formato immagine PNG
QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2);

}

?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Opera Messa della Carita'</title>
  <link rel="stylesheet" href="css/style.css">
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
#header, #nav, .noprint
{
display: none;
} 
</style>
<style type="text/css" media="print">
        @page 
        {
            size: auto;   /* auto is the current printer page size */
            margin: 0mm;  /* this affects the margin in the printer settings */
        }

        body 
        {
            background-color:#FFFFFF; 
            border: solid 1px black ;
            margin: 0px;  /* the margin on the content before printing */
       }
    </style>
<script type="text/javascript">
		
		function controllo(){ 
            with(document.modulo) { 
 
        if(numero.value=="" ) { 
            alert("Error: manca NUMERO DEL PASS O DELLA TESSERA"); 
            numero.focus(); 
            return false; 
                            }                   
                            
                                                       
                                                        
                                  } 
        } 

</script>
</head>

<body <? if($ingranaggio==2){echo 'onload="window.print();"';} ?>>
<? if($ingranaggio!=2){ ?>
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
<td bgcolor="#FFFFFF" style="border: 0px ; "><a href="../menugenerale.php?login=<?php echo $login; ?>">Menu Generale</a></td>             

 
   
	</table>  
      
</div> 

<div align="center" >	

<div align="center">   
<div id="container">

<h1>
<p align="center"><b><font face="Arial" size="5" color="#993300">CREAZIONE QRCODE</font></b></p>

<table border="0" width="870" bgcolor="#FFF4F7" class="table6" >	
<form method="POST" action=""   name="modulo" onSubmit="return controllo();" >
 <tr>
		<td>
 <form method="POST" action="" >          
<font face="Arial" size="2" color="#ffffff">- PER PASS O TESSERA: </font><font size="5" face="Arial" color="#fd071e"><? echo $personegiro; ?></font>
    </td>
		<td>				
					 <select size="1" name="tespas" id="tespas" style="font-size: 10pt">
			     <option >PASS</option> 
           <option >TESSERA</option>  
			</select>   
      </td>
      </tr>
<tr>
				<td ><font face="Arial" size="2" color="#ffffff">- NUMERO:</font></td>
				<td>				
					<p><input type="text" name="numero" autocomplete="numero" value="<? echo $nome; ?>" placeholder="-- inserisci numero --" size="10" style="background-color: #C0C0C0"></p>
				</td> 
</tr>
<tr>   
<td> 
</td>
<td> 	
        <input type="hidden" name="login" value="<? echo $login; ?>" />
        <input type="hidden" name="ingranaggio" value="1" />
				<input type="submit" value="Crea" name="B6">    
</td> 

</tr> 

</form>
</table>
<?
}
if ($ingranaggio==1 or $ingranaggio==2)
{
if ($tespas=="TESSERA"){$comodo1="TESSERA"; } else{$comodo1="PASS";}
if ($ingranaggio!=2){
?>
<div align="center">   
<div id="container">
<br>
<? } ?>
<font face="Arial" size="<? if($ingranaggio==2){echo 1;}else{echo 5;} ?> color="#993300">&emsp;&emsp;<? echo $comodo1." N. ".$numero;?></font></b>
<br>
&emsp;<img src="timbri/qrcode<? echo $tespas.$numero; ?>.png" width="<? echo $largo; ?>" height="<? echo $alto; ?>">
<? if($ingranaggio==1){ ?>
<form method="POST" target="_blank" action="" name="modulo" >
<table border="0" width="870" bgcolor="#FFF4F7" class="table6" >	
<tr>
				<td ><font face="Arial" size="2" color="#ffffff">- DIGITA LA GRANDEZZA DI STAMPA:</font></td>
				<td>				
							 <select size="1" name="grandezza" id="grandezza" style="font-size: 10pt">
			     <option >1 - 40X40</option> 
           <option selected>2 - 80X80</option>  
           <option >3 - 100X100</option>
           <option >4 - 120X120</option>
           <option >5 - 140X140</option>
			</select>   </td> 
</tr>
<tr>
				<td ><font face="Arial" size="2" color="#ffffff"></font></td>
				<td>
        <input type="hidden" name="ingranaggio" value="2" />
        <input type="hidden" name="login" value="<? echo $login; ?>" />
        <input type="hidden" name="tespas" value="<? echo $tespas; ?>" />
        <input type="hidden" name="numero" value="<? echo $numero; ?>" />
				<input type="submit" value="Stampa" name="B7">  
</td> 
</tr>
</table>         
<? } ?> 
</div>
</div>
<?
} ?>
</body>

</html>