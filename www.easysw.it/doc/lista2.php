<?php
$totale=$_REQUEST["totale"];
$selezionex=$_REQUEST["selezione"];
$camposinox=$_REQUEST["camposino"];

#echo  $totale . "<br>";
#echo  $selezionex . "<br>";
#echo  $camposinox . "<br>";

$totalecampi=explode("ç",$totale);
$camposino=explode("ç",$camposinox);

#echo $camposino[13]. "<br>";

$cognome=$totalecampi[0];
$nome=$totalecampi[1];
$natoa=$totalecampi[2];
$provnatoa=$totalecampi[3];
$datanascita=$totalecampi[4];
$residentecitta=$totalecampi[5];
$residenteprov=$totalecampi[6];
$indirizzores=$totalecampi[7];
$cap=$totalecampi[8];
$annoassociato=$totalecampi[9];
$intestazione=$totalecampi[10];
#echo "cognome" . $cognome. "<br>";
#echo "nome" . $nome. "<br>";
#echo "nato a" . $natoa. "<br>";
#echo "prov nas" . $provnatoa. "<br>";
#echo "datanas" . $datanascita. "<br>";
#echo "cittares" . $residentecitta. "<br>";
#echo "prov res" . $residenteprov. "<br>";
#echo "ind" . $indirizzores. "<br>";
#echo "cap" . $cap. "<br>";
#echo "anno" . $annoassociato. "<br>";


include "conf_DB.php";
#echo "passo";exit;
if ($cognome!="")
   {$selzionedocumento= " and cognome like '".$cognome."%' ";}
   else
   {$selzionedocumento="";}
   
if ($nome!="")
   {$selezionecliente= " and nome like '".$nome."%' ";}
   else
   {$selezionecliente="";}
 
if ($natoa!="")
   {$selezionefornitore= " and luogo_nascita  like '%".$natoa."%' ";}
   else
   {$selezionefornitore="";}
   

if ($datanascita!="")
   {$selezionepreventivo=" and data_nascita like '%" . $datanascita . "%' ";}
   else
   {$selezionepreventivo="";} 

if ($provnatoa!="")
   {$selezioneofferta=" and provincia_nascita like '" . $provnatoa . "%' ";}
   else
   {$selezioneofferta="";} 
   
if ($indirizzores!="")
   {$selezioneordine=" and indirizzo like '%" . $indirizzores . "%' ";}
   else
   {$selezioneordine="";} 
   
if ($cap!="")
   {$selezionenum=" and cap like '%" . $cap . "%' ";}
   else
   {$selezionenum="";}    
   

if ($residentecitta!="")
   {$selzioneanno= " and localita_residenza like '".$residentecitta."%' ";}
   else
   {$selzioneanno="";}

if ($residenteprov!="")
   {$selezionaoggetto=" and provincia like '%" . $residenteprov . "%' ";}
   else
   {$selezionaoggetto="";}
   

   
if ($camposino[14]=="TUTTI")
   {$selezionarif="";}
   else
   {if ($camposino[14]=="NO") 
        {$selezionarif=" and deceduto = ''";}
        else
        {$selezionarif=" and deceduto = 'D'";}
   }
   

/*
if ($formadocumento!="")
   {$selzioneforma= " and anno= '".$formadocumento."' ";}
   else
   {$selzioneforma="";}
*/
#echo $tipodocumentox . "<br>";
#echo $annodocumentox . "<br>";
#echo $trovaoggetto . "<br>";
#echo $formadocumento . "<br>";

$oggi=date("Y-m-d");
#header('Content-Type: text/html; charset=utf-8'); 


?>

<html>
<head>

	<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
	<title>Esponi Socio</title>
	<link rel="stylesheet" type="text/css" href="jquery.tablescroll.css"/>
<style>
div#container {
min-width:   1050px;
  min-height:  500px;
  max-width:  1050px;
  max-height: 1000px;
}
div#sottocontainer {
min-width:   800px;
  min-height:  500px;
  max-width:  800px;
  max-height: 1000px;
}
</style>  
<script language="javascript">
 <!--
  function Stampa() {
     //Nasconde le celle indesiderate
        intestazione.style.display = "None";
        sinistro.style.display = "None";
        destro.style.display = "None";
     //Imposta la parte da stampare a tutto schermo
        stampa.style.width = "100%";
     //Lancia la funzione di stampa
        window.print();
     //Ripristina la parte da stampare alle dimensioni originali
        stampa.style.width = "450px";
     //Ripristina l'impostazione iniziale delle celle indesiderate
        intestazione.style.display = "";
        sinistro.style.display = "";
        destro.style.display = "";
  }
 //-->
</script>
<style>
a:link, a:visited {
  text-decoration: none; 
    font-weight: bold;
    color: #000000
}

a:hover {
  color: black;
 
  text-decoration: none;
}
</style>
</head>
<body>
<div align="left">   
<div id="container">
<p align="center"><b><font face="Arial" size="4"><a href="javascript:print();">STAMPA </a><?php echo $intestazione; ?></font></b></p>

<table border="1" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td width="35" align="center"><font face="Arial"><b>PRG</b></font></td>
<?php if ($camposino[14]=="TUTTI" or $camposino[14]=="SI") {echo '<td width="35" align="center"><font face="Arial"><b>DEC</b>';} ?></font></td>
<?php if ($camposino[0]=="SI"){echo '<td width="29" align="center"><font face="Arial"><b>TSS</b></font></td> ';} ?>
<?php if ($camposino[1]=="SI"){echo '<td align="center"><font face="Arial"><b>COGNOME</b></font></td>';} ?>		
<?php if ($camposino[2]=="SI"){echo '<td align="center"><font face="Arial"><b>NOME</b></font></td>';} ?>
<?php if ($camposino[3]=="SI"){echo '<td align="center"><font face="Arial"><b>NATO A</b></font></td>';} ?>
<?php if ($camposino[4]=="SI"){echo '<td  align="center"><font face="Arial"><b>PROV.</b></font></td>';} ?>
<?php if ($camposino[5]=="SI"){echo '<td align="center"><font face="Arial"><b>IL</b></font></td>';} ?>
<?php if ($camposino[6]=="SI"){echo '<td align="center"><font face="Arial"><b>INDIRIZZO</b></font></td>';} ?>
<?php if ($camposino[8]=="SI"){echo '<td align="center"><font face="Arial"><b>RESIDENZA</b></font></td>';} ?>
<?php if ($camposino[7]=="SI"){echo '<td  align="center"><font face="Arial"><b>PROV.RES.</b></font></td>';} ?>
<?php if ($camposino[9]=="SI"){echo '<td  align="center"><font face="Arial"><b>CAP</b></font></td>';} ?>
<?php if ($camposino[13]=="SI"){echo '<td align="center"><font face="Arial"><b>TELEFONO</b></font></td>';} ?>
<?php if ($camposino[10]=="SI"){echo '<td align="center"><font face="Arial"><b>EMAIL</b></font></td>';} ?>
<?php if ($camposino[12]=="SI"){echo '<td align="center"><font face="Arial"><b>COD.FISC.</b></font></td>';} ?>
<?php if ($camposino[11]=="SI"){echo '<td align="center"><font face="Arial"><b>ANNO</b></font></td>';} ?>
	</tr> 
<?php
$sql = "SELECT *  FROM  soci where  tessera != '' " 
        . $selzionedocumento . 
        $selzioneanno . 
        $selezionaoggetto . 
        $selezionecliente . 
        $selezionepreventivo . 
        $selezioneofferta . 
        $selezioneordine . 
        $selezionefornitore . 
        $selezionenum . 
        $selezionacodfisc .
        $selezionarif .
        "order by cognome";  
#echo $sql ."<br>";
$rCount = 1;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
	
	{  $tessera = $macrogruppo["tessera"];
  
  $sw=0;
   if ($annoassociato)
    {$sw=1;
     $sql1x = "SELECT * FROM quote where tessera = '$tessera' and anno = '$annoassociato'";
     
      $result = $conn->query($sql1x);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ $sw=0; } }
    }
    
if ($sw==0)    	
  {    $tot++;
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
      #echo $cognome."<br>";
      
?>
	<tr>
		<td width="35" align="center"><font face="Arial"><?php echo $tot; ?></font></td>
<?php if ($camposino[14]=="TUTTI" or $camposino[14]=="SI") {echo '<td width="35" align="center"><font face="Arial">'.$deceduto;} ?></font></td>
<?php if ($camposino[0]=="SI"){echo '<td width="29"><font face="Arial">'.$tessera.'</font></td>';}?>
<?php if ($camposino[1]=="SI"){echo '<td ><font face="Arial">'.$cognome.'</font></td>';}?>
<?php if ($camposino[2]=="SI"){echo '<td ><font face="Arial">'.$nome.'</font></td>';}?>
<?php if ($camposino[3]=="SI"){echo '<td ><font face="Arial">'.$natoa.'</font></td>';}?>
<?php if ($camposino[4]=="SI"){echo '<td  align="center"><font face="Arial">'.$provnatoa.'</font></td>';}?>
<?php if ($camposino[5]=="SI"){echo '<td ><font face="Arial">'.$datanascita.'</font></td>';}?>
<?php if ($camposino[6]=="SI"){echo '<td ><font face="Arial">'.$indirizzores.'</font></td>';}?>
<?php if ($camposino[8]=="SI"){echo '<td ><font face="Arial">'.$residentecitta.'</font></td>';}?>
<?php if ($camposino[7]=="SI"){echo '<td  align="center"><font face="Arial">'.$residenteprov.'</font></td>';}?>
<?php if ($camposino[9]=="SI"){echo '<td  align="center"><font face="Arial">'.$cap.'</font></td>';}?>
<?php if ($camposino[13]=="SI"){echo '<td ><font face="Arial">'.$telefono.'</font></td>';}?>
<?php if ($camposino[10]=="SI"){echo '<td ><font face="Arial">'.$email.'</font></td>';}?>
<?php if ($camposino[12]=="SI"){echo '<td><font face="Arial">'.$codfisc.'</font></td>';}?>
<?php if ($camposino[11]=="SI"){echo '<td align="center"><font face="Arial">'.$annoassociato.'</font></td>';}?>
	</tr>

      
<?php      
      
      
    
}
}  }


?>
</table>
</div>
</div>