<?php
include "conf_DB.php";
$login=$_REQUEST["login"];
$ingranaggio=$_REQUEST["ingranaggio"];
#echo $ingranaggio;
$progr=$_REQUEST["progr"];
if ($ingranaggio==10)
   {
$sql = "DELETE from `modelloarticolo` where progr = '$progr'";
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
<?php include("risorsePrincipalix.php"); ?>
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
            alert("Error: manca MODELLO ARTICOLO"); 
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
   $sql = "INSERT INTO `modelloarticolo`(
   `descrizione`
  
   ) 
   VALUES (
   '$descrizione'
  )";
#echo $sql; exit;
if ($conn->query($sql) === FALSE) 
    {
    $erroreriferimento="errore codice modello articolo già esistente";
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
<p align="center"><b><font face="Arial" size="5" color="#993300">TABELLA MODELLO ARTICOLO</font></b></p>

<form method="POST" action="" name="modulo" onSubmit="return controllo();">

<table class="table-form " >
<tr>		
<td colspan="2" align="center" style="color: #ffffff;background-color: #476b5d; font-size: 16px;" >Modelli Articoli già inseriti</td>
</tr>
<tr>
<td style="font-size: 16px;background-color: #afc81b; width: 90%;">Descrizione</font></td>
<td style="font-size: 16px;background-color: #afc81b; width: 10%;">Cancella</font></td>

</tr>
<?php
$sql1 = "SELECT * FROM `modelloarticolo`  ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{    
      $descrizione = $macrogruppo["descrizione"];
      $progr = $macrogruppo["progr"];
      #echo $descrizione;	
      $tot++;
?>
<tr onMouseOver="style.background='#cc0000';" >
<td style=" border: 0px solid black; color: #000000;" ><? echo $descrizione; ?></td>
<td style="text-align: center; "><a href="?login=<php echo $login; ?>&progr=<? echo $progr; ?>&ingranaggio=10" onclick="return confirm('Sei sicuro di volere cancellare?')"><img border="0" src="x1.png" width="15" height="15"></button></a> </td>      
</tr>	
<?php } } ?>                                                 
<tr>
<td colspan="2">&nbsp;
</td>
</tr>
<tr>		
<td colspan="2" align="center" style="color: #ffffff;background-color: #476b5d; font-size: 16px;" >Inserimento Nuovo</td>
</tr>
<tr>
<td colspan="2" style="font-size: 16px;background-color: #afc81b;">Descrizione</td>

</tr>
<tr>
<td colspan="2">				
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
<br><br><br><br> <br><br><br><br><br> <br><br><br><br>
</body>

</html>