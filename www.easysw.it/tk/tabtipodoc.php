<?php
include "conf_DB.php";
$login=$_REQUEST["login"];
$ingranaggio=$_REQUEST["ingranaggio"];
#echo $ingranaggio;
$progr=$_REQUEST["progr"];
if ($ingranaggio==10)
   {
$descrizione=$_REQUEST["descrizione"];   
$sql = "DELETE from `tipodoccat` where progr = '$progr'";
#echo $sql;
if ($conn->query($sql) === FALSE)
  {echo "errxx=errore";exit;}
  else
  {} 
  
  
   
$sql = "DELETE from `tipodoccatcat` where descrizione = '$descrizione'";
#echo $sql;
if ($conn->query($sql) === FALSE)
  {echo "errxx=errore";exit;}
  else
  {}    
   }
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>sla</title> 
<?php include("risorsePrincipali.php"); ?>
</head>
<style>
@font-face {
   font-family: 'Montserrat';
   src: url(Montserrat.eot);
   src: local('Montserrat'), url('Montserrat.ttf') format('truetype');
}
div#container {
min-width:   850px;
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
    border: 0px solid black;
    font-family: "Arial", "Lucida Grande", Sans-Serif;    
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

</style>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;1,100&display=swap');
</style>
<script type="text/javascript">
		
		function controllo(){ 
            with(document.modulo) { 

        if(descrizione.value=="") { 
            alert("Error: manca TIPO FATTURAZIONE"); 
            descrizione.focus(); 
            return false; 
                            } 
                                                                   
					                                                                                                                    
                                  } 
        } 
</script>
<?php 


$erroreriferimento="";
if ($ingranaggio==1)
   {
$codice=$_REQUEST["codice"];  
$descrizione=$_REQUEST["descrizione"];  
$obbligatorio=$_REQUEST["obbligatorio"];
$oggi=date("Y-m-d H:m:s");
   $sql = "INSERT INTO `tipodoccat`(
   `descrizione`,
   obbligatorio  
   ) 
   VALUES (
   '$descrizione',
   '$obbligatorio'
  )";
#echo $sql; exit;
if ($conn->query($sql) === FALSE) 
    {$erroreriferimento="errore tipo documento già esistente";} 
    else
     {}
     
$sqlu = "SELECT *  FROM  cat ";  
#echo $sqlu;
$rCount = 1;
$resultu = $conn->query($sqlu);
if ($resultu->num_rows > 0) {
  while($macrogruppou = $resultu->fetch_assoc())	
	{ 
    $codice= $macrogruppou["codice"];                     
    #echo $codice; 
$sql = "INSERT INTO `tipodoccatcat`(
   `descrizione`,
   codicecat,
   obbligatorio  
   ) 
   VALUES (
   '$descrizione',
   '$codice',
   '$obbligatorio'
  )";
#echo $sql; exit;
if ($conn->query($sql) === FALSE) 
    {$erroreriferimento="errore tipo documento già esistente";} else {}   
     }}  
   }
   




?>
<body>

<br>
<div align="center">   
<div id="container">
 <p align="center">Tabella Tipi di Documenti del CAT (Matrice)</b></p>

<form method="POST" action="" name="modulo" onSubmit="return controllo();">

<table class="table-form " >
<tr>		
<td colspan="3" align="center" style="color: #ffffff;background-color: #476b5d; font-size: 16px;" >Tipi documenti già inseriti</td>
</tr>
<tr>
<td style="font-size: 16px;background-color: #afc81b; width: 5%;">Obb.</font></td>
<td style="font-size: 16px;background-color: #afc81b; width: 80%;">Descrizione</font></td>
<td style="font-size: 16px;background-color: #afc81b; width: 15%;">Cancella</font></td>

</tr>
<?php
$sql1 = "SELECT * FROM `tipodoccat`  ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{    
      $descrizione = $macrogruppo["descrizione"];
      $obbligatorio = $macrogruppo["obbligatorio"];
      $progr = $macrogruppo["progr"];
      #echo $descrizione;	
      $tot++;
?>
<tr onMouseOver="style.background='#cc0000';" >
<td style=" border: 0px solid black; color: #000000;" ><font style="font-size: 18px;"><? echo $obbligatorio; ?></font></td>
<td style=" border: 0px solid black; color: #000000;" ><font style="font-size: 18px;"><? echo $descrizione; ?></font></td>
<td style="text-align: center; "><a href="?login=<php echo $login; ?>&progr=<? echo $progr; ?>&ingranaggio=10&descrizione=<? echo $descrizione; ?>" onclick="return confirm('Sei sicuro di volere cancellare?')"><img border="0" src="x1.png" width="15" height="15"></button></a> </td>      
</tr>	
<?php } } ?>                                                 
<tr>
<td colspan="3">&nbsp;
</td>
</tr>
<tr>		
<td colspan="3" align="center" style="color: #ffffff;background-color: #476b5d; font-size: 16px;" >Inserimento Nuovo</td>
</tr>
<tr>
<td colspan="1" style="font-size: 16px;background-color: #afc81b;">Obb.</td>
<td colspan="2" style="font-size: 16px;background-color: #afc81b;">Descrizione</td>

</tr>
<tr>
<td colspan="1">				
<input type="text" name="obbligatorio"  size="48"  maxlength="400">
</td>
<td colspan="2">				
<input type="text" name="descrizione"  size="48"  maxlength="400">
</td>			
</tr>      
<input type="hidden" name="ingranaggio" value="1" />
<input type="hidden" name="login" value="<?php echo $login; ?>" />       
<tr>
 <td colspan="3" style="text-align: center; " > <button class="btn btn-primary" type="submit" type="button" >Inserisci</button></td>
</tr>
</table>

</form>
</div>
</div>
<br><br><br> <br><br><br> <br><br><br> <br><br><br>
</body>

</html>