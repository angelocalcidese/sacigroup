<?php
include "conf_DB.php";
$login=$_REQUEST["login"];
$ingranaggio=$_REQUEST["ingranaggio"];

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
min-width:   650px;
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
            alert("Error: manca DESCRIZIONE PRESTAZIONE"); 
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
$oggi=date("Y-m-d H:m:s");
   $sql = "INSERT INTO `attivita`(
   codice,
   `descrizione`,
   `datacreazione`, 
   `operatore`
   ) 
   VALUES (
   '$codice',
   '$descrizione',
   CURRENT_TIMESTAMP,
   '$logink')";
#echo $sql; exit;
if ($conn->query($sql) === FALSE) 
    {
    $erroreriferimento="errore codice volontario già esistente";
    } 
    else
     {
  
     }
   }
   




?>
<body>

<br>
<div align="center">   
<div id="container">
 <p align="center">Tabella Tipo Attività</b></p>

<form method="POST" action="attivita1.php?login=<? echo $login; ?>" name="modulo" onSubmit="return controllo();">

<table class="table-form " >
<tr>		
<td colspan="2" align="center" style="color: #ffffff;background-color: #476b5d; font-size: 16px;" >Tipo Attività gia' Inseriti</td>
</tr>
<tr>
<td style="font-size: 16px;background-color: #afc81b;">codice Attività</font></td>
<td style="font-size: 16px;background-color: #afc81b;">Descrizione</font></td>
</tr>
<?php
$sql1 = "SELECT * FROM `attivita` where operatore = '$logink'  ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{  
      $codice = $macrogruppo["codice"];  
      $descrizione = $macrogruppo["descrizione"];
      #echo $descrizione;	
      $tot++;
?>
<tr>
<td style=" border: 0px solid black; color: #000000;"> <? echo $codice; ?></td>	
<td style=" border: 0px solid black; color: #000000;" ><? echo $descrizione; ?></td>
</tr>	
<?php } } ?>                                                 
<tr>
<td colspan="2">&nbsp;
</td>
</tr>
<tr>		
<td colspan="2" align="center" style="color: #ffffff;background-color: #476b5d; font-size: 16px;" >Inserimento Nuovo</b></td>
</tr>
<tr>
<td style="font-size: 16px;background-color: #afc81b;">codice Attività</td>
<td style="font-size: 16px;background-color: #afc81b;">Descrizione</td>
</tr>
<tr>
<td>								
<input type="text" size="25" name="codice"  maxlength="70">				
</td>
<td>				
<input type="text" name="descrizione"  size="48"  maxlength="400">
</td>			
</tr>      
<input type="hidden" name="ingranaggio" value="1" />
<input type="hidden" name="login" value="<?php echo $login; ?>" />       
<tr>
<td colspan="2" style="text-align: center; " > <button class="btn btn-primary" type="submit" type="button" >Inserisci</button></td>
</tr>
</table>                

</form>
</div>
</div>

</body>

</html>