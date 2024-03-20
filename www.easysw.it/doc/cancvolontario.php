<?php

?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Gruppi di Volontariato Vincenziano</title>
</head>
<style>
div#container {
min-width:   1000px;
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
    border: 1px solid black;    
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
</style>
<script>
<script type="text/javascript">
		
		function controllo(){ 
            with(document.modulo) { 
        if(anno.value=="") { 
            alert("Error: manca ANNO DI COMPETENZA"); 
            anno.focus(); 
            return false; 
                            } 
        if(mastro.value=="") { 
            alert("Error: manca MASTRO"); 
            mastro.focus(); 
            return false; 
                            } 
        if(sottomastro.value=="") { 
            alert("Error: manca SOTTOMASTRO"); 
            sottomastro.focus(); 
            return false; 
                            } 
        if(conto.value=="") { 
            alert("Error: manca CONTO"); 
            conto.focus(); 
            return false; 
                            }                     

        if(eu.value=="") { 
            alert("Error: manca ENTRATA/USCITA"); 
            eu.focus(); 
            return false; 
                              } 
                                                     
                                  } 
        } 
</script>
<?php 
include "conf_DB.php";

#$progr=1;
$login=$_REQUEST["login"];
$ingranaggio=$_REQUEST["ingranaggio"];
$tessera=$_REQUEST["tessera"];
if ($ingranaggio==1)
{$sql = "
DELETE from socivolontari where tessera = '$tessera'";
if ($conn->query($sql) === FALSE)
  {echo "errxx=errore";exit;}
  else
  {echo "cancellato";}

?>
<script>
    window.onload = self.close();
</script>    
<?php    
}    
$sql = "SELECT *  FROM  socivolontari where tessera = '$tessera'"; 
#echo $sql;
	$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
	{  
      
      $cognome= $macrogruppo["cognome"];
      $nome = $macrogruppo["nome"];
     
   }  } 
    
    
    
  
    


?>
<body>

<div align="center">
<div id="container">
<form method="POST" action="">
	<table border="0" width="100%" bgcolor="#B2CAEA" class="table6">
		<tr>
			<td>
			<p align="center"><font face="Arial" size="5" color="#666666"><b>
			CANCELLAZIONE SCHEDA VOLONTARIO</b></font></p>
      <p align="center"><font face="Arial" color="#ffffff"><b>
			<? echo $zona; ?></b></font></p>
      
			<table border="1" width="100%" bgcolor="#ffffff" class="table6" >
				<tr>
					<td><font face="Arial">CODICE</font></td>
					<td><font size="4" face="Arial"><?php echo $tessera; ?></font></td>
				</tr>
				<tr>
					<td><font face="Arial">COGNOME</font></td>
					<td><font size="4" face="Arial"><?php echo $cognome; ?></font></td>
				</tr>
				<tr>
					<td><font face="Arial">NOME</font></td>
					<td><font size="4" face="Arial"><?php echo $nome; ?></font></td>
				</tr>
			
			</table>
			<p align="center"><b><font face="Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font></b>
      <input type="hidden" name="ingranaggio" value="1" />
      <input type="hidden" name="zona" value="<? echo $zona; ?>" />
      <input type="hidden" name="login" value="<? echo $login; ?>" />
      	<td align="center"><input type="submit" value="Conferma la cancellazione" name="B3"></td>
			</td>
		</tr>
	</table>
</form>



</div>


</body>

</html>