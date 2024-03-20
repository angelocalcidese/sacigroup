<?php
$filename="lista2new.xls";
header ("Content-Type: application/vnd.ms-excel");
header ("Content-Disposition: inline; filename=$filename");
?>
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


/*
 * CONNESSIONE AL SERVER ON-LINE
 *
 */  
  $server = "sql.spi.it.cloud.seeweb.it:3306";
	$utente = "admin";
	$db_pass = "eshoZa4d"; 
	$datab = "test_db";

/*
  $server = "localhost";
	$utente = "root";
	$db_pass = ""; 
	$datab = "spi_db_STAGE";
*/

	$connessione = @mysql_connect($server, $utente, $db_pass) or die("Errore connessione generale.");
	$db = mysql_select_db($datab, $connessione) or die("Errore connessione database SPI.");
 	#mysql_set_charset("utf8");
  
  
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

<?php
echo '<table border="1">';
 echo "<tr>";
?>
<p align="center"><?php echo $intestazione; ?></p>
<?php if ($camposino[14]=="TUTTI" or $camposino[14]=="SI") {echo '<td >DEC</td>';}?>
<?php if ($camposino[0]=="SI"){echo '<td> TSS</td> ';} ?>
<?php if ($camposino[1]=="SI"){echo '<td>COGNOME</td>';} ?>		
<?php if ($camposino[2]=="SI"){echo '<td>NOME</td>';} ?>
<?php if ($camposino[3]=="SI"){echo '<td>NATO A</td>';} ?>
<?php if ($camposino[4]=="SI"){echo '<td>PROV.</td>';} ?>
<?php if ($camposino[5]=="SI"){echo '<td>IL</td>';} ?>
<?php if ($camposino[6]=="SI"){echo '<td>INDIRIZZO</td>';} ?>
<?php if ($camposino[8]=="SI"){echo '<td>RESIDENZA</td>';} ?>
<?php if ($camposino[7]=="SI"){echo '<td>PROV.RES.</td>';} ?>
<?php if ($camposino[9]=="SI"){echo '<td>CAP</td>';} ?>
<?php if ($camposino[13]=="SI"){echo '<td>TELEFONO</td>';} ?>
<?php if ($camposino[10]=="SI"){echo '<td>EMAIL</td>';} ?>
<?php if ($camposino[12]=="SI"){echo '<td>COD.FISC.</td>';} ?>
<?php if ($camposino[11]=="SI"){echo '<td>ANNO</td>';} ?>
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

	$query = mysql_query($sql,$connessione) or die("Err1. SQL: $sql");
	for ($i="1"; $macrogruppo = mysql_fetch_array($query); $i++)
	
	{  $tessera = $macrogruppo["tessera"];
  
  $sw=0;
   if ($annoassociato)
    {$sw=1;
     $sql1x = "SELECT * FROM quote where tessera = '$tessera' and anno = '$annoassociato'";
     
      $queryx = mysql_query($sql1x,$connessione) or die("Err1. SQL: $sql1");
		  for ($ncx="0"; $macrogruppox = mysql_fetch_array($queryx); $ncx++)
		{ $sw=0; }
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
<?php if ($camposino[14]=="TUTTI" or $camposino[14]=="SI") {echo '<td>'.$deceduto.'</td>'; ?>
<?php if ($camposino[0]=="SI"){echo '<td>'.$tessera.'</td>';}?>
<?php if ($camposino[1]=="SI"){echo '<td>'.$cognome.'</td>';}?>
<?php if ($camposino[2]=="SI"){echo '<td>'.$nome.'</td>';}?>
<?php if ($camposino[3]=="SI"){echo '<td>'.$natoa.'</td>';}?>
<?php if ($camposino[4]=="SI"){echo '<td>'.$provnatoa.'</td>';}?>
<?php if ($camposino[5]=="SI"){echo '<td>'.$datanascita.'</td>';}?>
<?php if ($camposino[6]=="SI"){echo '<td>'.$indirizzores.'</td>';}?>
<?php if ($camposino[8]=="SI"){echo '<td>'.$residentecitta.'</td>';}?>
<?php if ($camposino[7]=="SI"){echo '<td>'.$residenteprov.'</td>';}?>
<?php if ($camposino[9]=="SI"){echo '<td>'.$cap.'</td>';}?>
<?php if ($camposino[13]=="SI"){echo '<td>'.$telefono.'</td>';}?>
<?php if ($camposino[10]=="SI"){echo '<td>'.$email.'</td>';}?>
<?php if ($camposino[12]=="SI"){echo '<td>'.$codfisc.'</td>';}?>
<?php if ($camposino[11]=="SI"){echo '<td>'.$annoassociato.'</td>';}?>
	</tr>

      
<?php      
      
      
    
}
}
}

?>
</table>
