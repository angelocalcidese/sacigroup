<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="pomaindex.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php
}
$login=$_REQUEST["login"];
$importo=$_REQUEST["importo"];
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Tabella Donazioni</title> 
</head>
<style>
div#container {
min-width:   700px;
  min-height:  500px;
  max-width:  700px;
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
</style>
<script type="text/javascript">
		
		function controllo(){ 
            with(document.modulo) { 
        if(codice.value=="") { 
            alert("Error: manca CODICE"); 
            codice.focus(); 
            return false; 
                            } 
        if(descrizione.value=="") { 
            alert("Error: manca DESCIZIONE CODICE"); 
            nome.focus(); 
            return false; 
                            } 
                                                                   
					                                                                                                                    
                                  } 
        } 
</script>
<?php 
include "conf_DB.php";
$login=$_REQUEST["login"];
$ingranaggio=$_REQUEST["ingranaggio"];
$erroreriferimento="";
if ($ingranaggio==1)
   {
$codice=$_REQUEST["codice"];  
$descrizione=$_REQUEST["descrizione"];  
$oggi=date("Y-m-d H:m:s");
   $sql = "INSERT INTO `offerte`(
   `codice`, 
   `descrizione`,
   `datacreazione`, 
   `operatore`,
   `importo` 
   ) 
   VALUES (
   '$codice',
   '$descrizione',
   CURRENT_TIMESTAMP,
   '$login',
   '$importo')";
  # echo $sql; exit;
if ($conn->query($sql) === FALSE) 
    {
    $erroreriferimento="errore codice  gia' esistente";
    } 
    else
     {
  
     $url_pagina_chiamante="menugenerale.php?login=".$login;?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script> 
    <?php }
   }
   




?>
<body>
<div align="center" >
	<table border="0" width="760" height="140" bgcolor="#ffffff" class="table6x" >
		<tr > 
			<td >
      <div align="center">
			<img border="0" src="carlopoma.png" width="400" height="140">
      </div>
      </td>
      </tr>
   <tr> 
<td><font size="2"><a href="menugenerale.php?login=<?php echo $login; ?>">Menu Generale</a>/Tabella Offerte</td></font></tr>
	
</tr>     
	</table>       
</div> 
<div align="center">   
<div id="container">
<form method="POST" action="" name="modulo" onSubmit="return controllo();">
<h1>
<p align="center"><b><font face="Arial" size="5" color="#993300">INSERIMENTO 
CATEGORIA OFFERTA</font></b></p></h1><h2>
<p align="center"><b><font face="Arial" size="6" color="#FF0000"><?php echo $erroreriferimento; ?></font></b></p>
<div style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 20px;" >

<table border="1" width="100%" bgcolor="#FFF4F7" class="table6">
	<tr>
		<td>
		<table border="1" width="100%">
			<tr>
<td></td>		
<td style="color: #ffffff; font-size: 20px;" >Prestazioni gia' Inserite</td>
<td ><font face="Arial" color="#003300"></font></td>	
</tr>
<?php
$sql1 = "select * from offerte  order by descrizione";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($macrogruppo = $result1->fetch_assoc())
		{ 
      $descrizione = $macrogruppo["descrizione"];	
      $importo = $macrogruppo["importo"];	
      $codice = $macrogruppo["codice"];
      $tot++;
?>
<tr>
<td style="color: #FFFF00">(<? echo $codice; ?>)</td>	
<td style="color: #FFFF00"><? echo $descrizione; ?></td>
<td style="color: #FFFF00"><? echo $importo; ?></td>
</tr>
<?php } } ?>      
      <tr>
				<td width="237"><font face="Arial" color="#003300"></font></td>
				<td style="color: #ffffff; font-size: 20px;" >Inserimento Nuovi Codici</font></td>
        <td ><font face="Arial" color="#003300"></font></td>			
				</tr>      
			<tr>
				<td width="237"><font face="Arial" color="#003300">- CATEGORIA</font></td>
				<td>				
					<p>
					<input type="text" name="codice" value="" size="5" style="background-color: #C0C0C0" maxlength="3">
					<font face="Arial">3 posizioni</font></p>
				</td>
        <td ><font face="Arial" color="#003300"></font></td>			
				</tr>
      <tr>
				<td width="237"><font face="Arial" color="#003300">- DESCRIZIONE</font></td>
				<td>				
					<p>
					<input type="text" name="descrizione" value="" size="50" style="background-color: #C0C0C0" maxlength="70">
					</p>
				</td>	
        <td ><font face="Arial" color="#003300"></font></td>			
				</tr>  
		    <tr>
				<td width="237"><font face="Arial" color="#003300">- IMPORTO</font></td>
				<td>				
					<p>
					<input type="text" name="importo" value="" size="15" style="background-color: #C0C0C0" maxlength="70">
					</p>
				</td>
        <td ><font face="Arial" color="#003300"></font></td>				
				</tr>  
      
      
      
       <input type="hidden" name="ingranaggio" value="1" />
       <input type="hidden" name="login" value="<?php echo $login; ?>" />       
			<tr>
				<td width="237">&nbsp;</td>
				<td><input type="submit" value="Inserisci" name="B3"><input type="reset" value="Reset" name="B4"></td>
			  <td ><font face="Arial" color="#003300"></font></td>	
      </tr>
		</table>
		</td>
	</tr>
</table>
</form>
</div>
</div>

</body>

</html>