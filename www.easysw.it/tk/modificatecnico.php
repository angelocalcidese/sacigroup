<?php
include "conf_DB.php";
$login=$_REQUEST["login"];
$ingranaggio=$_REQUEST["ingranaggio"];
$codice=$_REQUEST["codice"];
if($ingranaggio==1){
$cognomey=$_REQUEST["cognomey"];
$nomey=$_REQUEST["nomey"];
$qualificay=$_REQUEST["qualificay"];
$sql = "UPDATE tecnico set 
cognome = '$cognomey',
nome = '$nomey',
ruolo = '$qualificay'
where 
codice = '$codice' 
";
#echo $sql;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 
$ingranaggio="";      
}
if($ingranaggio==100){
$sql1 = "SELECT * FROM `tecnico` where codice = '$codice' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{  
      $codicex = $macrogruppo["codice"];  
      $cognomex = $macrogruppo["cognome"];
      $nomex = $macrogruppo["nome"];
      $ruolox = $macrogruppo["ruolo"];
      }}
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

<body>

<br>
<div align="center">   
<div id="container">
 <p align="center" style="font-size: 20px;">Modifica Anagrafica Tecnici</b></p>

<form method="POST" action="?login=<? echo $login; ?>" name="modulo" onSubmit="return controllo();">

<table class="table-form " >
<tr>		
<td colspan="4" align="center" style="color: #ffffff;background-color: #476b5d; font-size: 20px;" >Tecnici già inseriti</td>
</tr>
<tr>
<td style="font-size: 20px;background-color: #afc81b;">codice </font></td>
<td style="font-size: 20px;background-color: #afc81b;">Cognome Nome</font></td>
<td style="font-size: 20px;background-color: #afc81b;">Qualifica</font></td>
<td style="font-size: 20px;background-color: #afc81b;"> </font></td>
</tr>
<?php
$sql1 = "SELECT * FROM `tecnico` order by cognome ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{  
      $codice = $macrogruppo["codice"];  
      $cognome = $macrogruppo["cognome"];
      $nome = $macrogruppo["nome"];
      $ruolo = $macrogruppo["ruolo"];
      #echo $descrizione;	
      $tot++;
?>
<tr>
<td style=" font-size: 20px;border: 0px solid black; color: #000000;"> <? echo $codice; ?></td>	
<td style=" font-size: 20px;border: 0px solid black; color: #000000;" ><? echo $cognome." ".$nome; ?></td>
<td style=" font-size: 20px;border: 0px solid black; color: #000000;" ><? echo $ruolo; ?></td>
<td style=" border: 0px solid black; color: #000000;" ><a  href="?login=<?php echo $login; ?>&codice=<?php echo $codice; ?>&ingranaggio=100"><img border="0" background="btn1.gif" src="pencil.png" width="20" height="20"></a></td>     
      
</tr>	
<?php } } ?>
<? if ($ingranaggio==100){ ?>                                                 
<tr>
<td colspan="4">&nbsp;
</td>
</tr>
<tr>		
<td colspan="4" align="center" style="color: #ffffff;background-color: #476b5d; font-size: 20px;" >Modifica anagrafica</b></td>
</tr>
<tr>
<td style="font-size: 20px;background-color: #afc81b;">codice</td>
<td style="font-size: 20px;background-color: #afc81b;">Cognome</td>
<td style="font-size: 20px;background-color: #afc81b;">Nome</td>
<td style="font-size: 20px;background-color: #afc81b;">Attività</td>
</tr>
<tr>
<td>								
<input type="text" size="25" name="codice" value="<? echo $codicex; ?>" maxlength="70">				
</td>
<td>				
<input type="text" name="cognomey"  value="<? echo $cognomex; ?>" size="48"  maxlength="400">
</td>
<td>				
<input type="text" name="nomey"  value="<? echo $nomex; ?>" size="48"  maxlength="400">
</td>
<td>				
<input type="text" name="qualificay"  value="<? echo $ruolox; ?>" size="48"  maxlength="400">
</td>			
</tr>      
<input type="hidden" name="ingranaggio" value="1" />
<input type="hidden" name="login" value="<?php echo $login; ?>" /> 
<input type="hidden" name="codice" value="<?php echo $codice; ?>" />      
<tr>
<td colspan="4" style="text-align: center; " > <button class="btn btn-primary" type="submit" type="button" >Modifica Anagrafica Tecnico</button></td>
</tr>
<? } ?>
</table>                

</form>
</div>
</div>

</body>

</html>