<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="pomaindex.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php }
$login=$_REQUEST["login"];
$zona=$_REQUEST["zona"];
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>messa della carità</title>
</head>
<style>
div#container {
min-width:   1000px;
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
    padding:2px 20px; 
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
    
   
</style>
<?php 


$cognome=$_REQUEST["cognome"];
$nome=$_REQUEST["nome"];
$natoa=$_REQUEST["natoa"];
$datanascita=$_REQUEST["datanascita"];
$residentecitta=$_REQUEST["residentecitta"];
$provnatoa=$_REQUEST["provnatoa"];
$indirizzores=$_REQUEST["indirizzores"];
$cap=$_REQUEST["cap"];
$email=$_REQUEST["email"];
$telefono=$_REQUEST["telefono"];
$cellulare=$_REQUEST["cellulare"];
$codfisc=$_REQUEST["codfisc"];
$residenteprov=$_REQUEST["residenteprov"];


?>
<?php 
include "conf_DB.php";
?>
<body>
<div align="center" >
	<table style=" border: 0px solid black;" width="760" height="140" bgcolor="#ffffff"  >
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
<td bgcolor="#FFFFFF" style="border: 0px ; "><a href="menugenerale.php?login=<?php echo $login; ?>">Menu Generale</a></td>             

 
   
	</table>  
      
</div> 
<div align="center">   
<div id="container">
<form method="POST" action="cerca2.php?login=<? echo $login; ?>" name="modulo" onSubmit="return controllo();">
<p align="center"><b><font face="Arial" size="5" color="#993300">RICERCA 
 VOLONTARIO</font></b></p>
<p align="center"><b><font face="Arial" size="4" color="#993300">Inserisci Parametro di Ricerca</font></b></p> 
<table border="1"  width="800" bgcolor="#FFF4F7" class="table6">	
	<tr>
		<td>
		<table border="1" width="100%">
			<tr>
				<td colspan="1" width="260"><font face="Arial" size="2" color="#000000">- CODICE VOLONTARIO:</font></td>
				<td colspan="1">				
					<input type="text" name="tessera"  size="50" style="background-color: #C0C0C0"></td>
			</tr>
			<tr>
				<td colspan="1" width="260"><font face="Arial" size="2" color="#000000">- COGNOME:</font></td>
				<td colspan="1">				
					<p>
					<input type="text" name="cognome"  size="50" style="background-color: #C0C0C0"></p>
				</td>
			</tr>
			<tr>
				<td colspan="1"width="260"><font face="Arial" size="2" color="#000000">- NOME:</font></td>
				<td colspan="1">				
					<p><input type="text" name="nome"  size="50" style="background-color: #C0C0C0"></p>
				</td>
			</tr>
      
       <tr>
				<td colspan="1" style="background-color: #ffffff"><font face="Arial" size="2" color="#000000" style="background-color: #ffffff">- STATUS:</font></td>
       <td  colspan="1" style="background-color: #ffffff"><select size="1" name="status"  style="background-color: #ececee; color: #000000">
					<option selected >TUTTI</option>
          <option >ATTIVO</option>
          <option >LISTA DI ATTESA</option>        
          <option >RISERVA</option>
          <option >RITIRATO</option>
					</select></td> 
        </tr> 
      
    <tr>
	   <td colspan="1" style="background-color: #ffffff"><font face="Arial" size="2" color="#000000" style="background-color: #ffffff">- SESSO:</font></td>
       <td  colspan="1" style="background-color: #ffffff">
            <select size="1" name="sesso"  style="background-color: #ececee; color: #000000">
					<option selected >TUTTI</option>
                   
                    <option >M</option>        
                    <option >F</option>
			</select>
        </td> 
    </tr>
    <tr>
	   <td colspan="1" style="background-color: #ffffff"><font face="Arial" size="2" color="#000000" style="background-color: #ffffff">- LIBERATORIA:</font></td>
       <td  colspan="1" style="background-color: #ffffff">
            <select size="1" name="libero"  style="background-color: #ececee; color: #000000">
					<option selected >TT</option>
                   
                    <option >NO</option>        
                    <option >SI</option>
			</select>
        </td> 
    </tr>
    <tr>
				<td colspan="1"width="260"><font face="Arial" size="2" color="#000000">- ETA' COMPRESA DA:</font></td>
				<td colspan="1">				
					<p><input type="text" name="etada"  value="00" size="5" style="background-color: #C0C0C0">
                    <font face="Arial" size="2" color="#000000"> A:</font>
                    <input type="text" name="etaa"  value="99" size="5" style="background-color: #C0C0C0">
                    </p>
				</td>
			</tr> 
	<tr>
	   <td colspan="1" style="background-color: #ffffff"><font face="Arial" size="2" color="#000000" style="background-color: #ffffff">- SEMAFORO:</font></td>
       <td  colspan="1" >
            <select  size="1" name="semaforo"  style="background-color: #ececee; color: #000000">
					<option selected >TUTTI</option>
                    <option >Giallo</option>        
                    <option >verde</option>
			</select>
        </td> 
    </tr> 		
       
         <tr bgcolor="#f6fcf6"> 
        	<td colspan="2" width="260">
          <font face="Arial" size="3" color="red" style="background-color: #ffff42"><b> MENSA</b></font>
          
          <font face="Arial" size="2" color="#000000">- FREQUENZA REGOLARE:</font>				
					<input type="checkbox" name="frequenzam" value="1">
         
          <font face="Arial" size="2" color="#000000">- EMERGENZE:</font>					
          <input type="checkbox" name="emergenzem" value="1">
          
				  <font face="Arial" size="2" color="#000000">- REFERENTE:</font>		
          <input type="checkbox" name="referentem" value="1">
          
          <font face="Arial" size="2" color="#000000">- MEMBRO ORDINARIO:</font>				
					<input type="checkbox" name="membrom" value="1">
          
        <br>
        <font face="Arial" size="2" color="#000000">- TUTTI GIORNI:	<input type="checkbox" name="mensa" value="1"><br><b>OPPURE:</b>&nbsp;&nbsp;&nbsp;&nbsp;</font>
        
        <font face="Arial" size="2" color="#000000">- LUNEDI':</font>
								
					<input type="checkbox" name="lunm" value="1">
				
        <font face="Arial" size="2" color="#000000">- MARTEDI':</font>
							
					<input type="checkbox" name="marm" value="1">
				
        <font face="Arial" size="2" color="#000000">- MERCOLEDI':</font>
								
					<input type="checkbox" name="merm" value="1">
				
        <font face="Arial" size="2" color="#000000">- GIOVEDI':</font>
								
				<input type="checkbox" name="giom" value="1">
				
        <font face="Arial" size="2" color="#000000">- VENERDI':</font>
								
					<input type="checkbox" name="venm" value="1">
				
        <font face="Arial" size="2" color="#000000">- DOMENICA:</font>
								
				<input type="checkbox" name="domm" value="1">
			
      </tr>
      
      	
        <tr bgcolor="#f6fcf6""> 
        
        <td colspan="2" width="260"><font face="Arial" size="3" color="red" style="background-color: #ffff42"><b> GUARDAROBA</b></font>
          <font face="Arial" size="2" color="#000000">- FREQUENZA REGOLARE:</font>				
					<input type="checkbox" name="frequenzag" value="1">
        
          <font face="Arial" size="2" color="#000000">- EMERGENZE:</font>					
          <input type="checkbox" name="emergenzeg" value="1">
         
				  <font face="Arial" size="2" color="#000000">- REFERENTE:</font>		
          <input type="checkbox" name="referenteg" value="1">
        
          <font face="Arial" size="2" color="#000000">- MEMBRO ORDINARIO:</font>				
					<input type="checkbox" name="membrog" value="1">
         
        
         <br>
        <font face="Arial" size="2" color="#000000">- TUTTI GIORNI:<input type="checkbox" name="guardaroba" value="1"><br><b>OPPURE:</b>&nbsp;&nbsp;&nbsp;&nbsp;</font>
        
        <font face="Arial" size="2" color="#000000">- LUNEDI':</font> 
								
					<input type="checkbox" name="lung" value="1"> 
				
        <font face="Arial" size="2" color="#000000">- MARTEDI':</font> 
								
					<input type="checkbox" name="marg" value="1"> 
				
        <font face="Arial" size="2" color="#000000">- MERCOLEDI':</font> 
								
					<input type="checkbox" name="merg" value="1"> 
				
        <font face="Arial" size="2" color="#000000">- GIOVEDI':</font> 
								
					<input type="checkbox" name="giog" value="1"> 
				
        <font face="Arial" size="2" color="#000000">- VENERDI':</font> 
								
					<input type="checkbox" name="veng" value="1"> 
				
       <font face="Arial" size="2" color="#000000">- DOMENICA:</font> 
								
				<input type="checkbox" name="domg" value="1"> 
			
        </td>
      </tr>
      
      	
			</tr>
        <tr bgcolor="#f6fcf6""> 
        <td colspan="2" width="260">
        <font face="Arial" size="3" color="red" style="background-color: #ffff42"><b> REGISTRAZIONE </b></font>
          <font face="Arial" size="2" color="#000000">- FREQUENZA REGOLARE:</font>				
					<input type="checkbox" name="frequenzat" value="1">
         
          <font face="Arial" size="2" color="#000000">- EMERGENZE:</font>					
          <input type="checkbox" name="emergenzet" value="1">
         
				  <font face="Arial" size="2" color="#000000">- REFERENTE:</font>		
          <input type="checkbox" name="referentet" value="1">
          
          <font face="Arial" size="2" color="#000000">- MEMBRO ORDINARIO:</font>				
					<input type="checkbox" name="membrot" value="1">
          <br>
        
        
        <font face="Arial" size="2" color="#000000">- TUTTI GIORNI:<input type="checkbox" name="tesseramento" value="1"><br><b>OPPURE:</b>&nbsp;&nbsp;&nbsp;&nbsp;</font>
         
         <font face="Arial" size="2" color="#000000">- LUNEDI':</font> 
				 				
					 <input type="checkbox" name="lunt" value="1"> 
				 
         <font face="Arial" size="2" color="#000000">- MARTEDI':</font> 
				 				
					<input type="checkbox" name="mart" value="1"> 
				 
         <font face="Arial" size="2" color="#000000">- MERCOLEDI':</font> 
				  				
					<input type="checkbox" name="mert" value="1"> 
				 
         <font face="Arial" size="2" color="#000000">- GIOVEDI':</font> 
				 				
					 <input type="checkbox" name="giot" value="1"> 
			 
         <font face="Arial" size="2" color="#000000">- VENERDI':</font> 
				  				
					 <input type="checkbox" name="vent" value="1"> 
				 
         <font face="Arial" size="2" color="#000000">- DOMENICA:</font> 
				 	 <input type="checkbox" name="domt" value="1"> 
			 
        </td>
      </tr>
       
     
        <tr bgcolor="#f6fcf6""> 
        <td colspan="2" width="260">
        <font face="Arial" size="3" color="red" style="background-color: #ffff42"><b> ASCOLTO </b></font> 
          <font face="Arial" size="2" color="#000000">- FREQUENZA REGOLARE:</font>				
					<input type="checkbox" name="frequenzaa" value="1">
           
          <font face="Arial" size="2" color="#000000">- EMERGENZE:</font>					
          <input type="checkbox" name="emergenzea" value="1">
           
				  <font face="Arial" size="2" color="#000000">- REFERENTE:</font>		
          <input type="checkbox" name="referentea" value="1">
          
          <font face="Arial" size="2" color="#000000">- MEMBRO ORDINARIO:</font>				
					<input type="checkbox" name="membroa" value="1">
          <br>
        
        <font face="Arial" size="2" color="#000000">- TUTTI GIORNI:<input type="checkbox" name="ascolto" value="1"><br><b>OPPURE:</b>&nbsp;&nbsp;&nbsp;&nbsp;</font>
        <font face="Arial" size="2" color="#000000">- LUNEDI':</font>
				 				
					<input type="checkbox" name="luna" value="1"> 
				 
         <font face="Arial" size="2" color="#000000">- MARTEDI':</font> 
				 				
					 <input type="checkbox" name="mara" value="1"> 
				 
         <font face="Arial" size="2" color="#000000">- MERCOLEDI':</font> 
				 				
					 <input type="checkbox" name="mera" value="1"> 
				 
         <font face="Arial" size="2" color="#000000">- GIOVEDI':</font> 
				 				
					 <input type="checkbox" name="gioa" value="1"> 
			 
         <font face="Arial" size="2" color="#000000">- VENERDI':</font> 
				 				
				 <input type="checkbox" name="vena" value="1"> 
				 
         <font face="Arial" size="2" color="#000000">- DOMENICA:</font> 
				 				
					 <input type="checkbox" name="doma" value="1"> 
			 
        </td>
      </tr>
      
      
        <tr bgcolor="#f6fcf6""> 
        <td colspan="2" width="260">
         <font face="Arial" size="3" color="red" style="background-color: #ffff42"><b> SORVEGLIANZA</b></font> 
          <font face="Arial" size="2" color="#000000">- FREQUENZA REGOLARE:</font>				
					<input type="checkbox" name="frequenzas" value="1">
           
          <font face="Arial" size="2" color="#000000">- EMERGENZE:</font>					
          <input type="checkbox" name="emergenzes" value="1">
           
				  <font face="Arial" size="2" color="#000000">- REFERENTE:</font>		
          <input type="checkbox" name="referentes" value="1">
           
          <font face="Arial" size="2" color="#000000">- MEMBRO ORDINARIO:</font>				
					<input type="checkbox" name="membros" value="1">
          <br>
        
        <font face="Arial" size="2" color="#000000">- TUTTI GIORNI:<input type="checkbox" name="sorveglianza" value="1"><br><b>OPPURE:</b>&nbsp;&nbsp;&nbsp;&nbsp;</font>
       
        <font face="Arial" size="2" color="#000000">- LUNEDI':</font> 
			  				
				<input type="checkbox" name="luns" value="1"> 
			 
        <font face="Arial" size="2" color="#000000">- MARTEDI':</font> 
				 				
					 <input type="checkbox" name="mars" value="1"> 
			 
         <font face="Arial" size="2" color="#000000">- MERCOLEDI':</font> 
				 				
				 <input type="checkbox" name="mers" value="1"> 
				 
         <font face="Arial" size="2" color="#000000">- GIOVEDI':</font> 
				 				
					 <input type="checkbox" name="gios" value="1"> 
				 
         <font face="Arial" size="2" color="#000000">- VENERDI':</font> 
				 				
					 <input type="checkbox" name="vens" value="1"> 
				 
         <font face="Arial" size="2" color="#000000">- DOMENICA:</font> 
				 				
					<input type="checkbox" name="doms" value="1"> 
				 
        </td>
      </tr>
      
      
        <tr bgcolor="#f6fcf6""> 
        <td colspan="2" width="260">
        <font face="Arial" size="3" color="red" style="background-color: #ffff42"><b> AMBULATORIO</b></font> 
          <font face="Arial" size="2" color="#000000">- FREQUENZA REGOLARE:</font>				
					<input type="checkbox" name="frequenzav" value="1">
       
          <font face="Arial" size="2" color="#000000">- EMERGENZE:</font>					
          <input type="checkbox" name="emergenzev" value="1">
       
				  <font face="Arial" size="2" color="#000000">- REFERENTE:</font>		
          <input type="checkbox" name="referentev" value="1">
       
          <font face="Arial" size="2" color="#000000">- MEMBRO ORDINARIO:</font>				
					<input type="checkbox" name="membrov" value="1">
          <br>
        
        <font face="Arial" size="2" color="#000000">- TUTTI GIORNI:<input type="checkbox" name="varie" value="1"><br><b>OPPURE:</b>&nbsp;&nbsp;&nbsp;&nbsp;</font>
        <font face="Arial" size="2" color="#000000">- LUNEDI':</font> 
			 				
				 <input type="checkbox" name="lunv" value="1"> 
			 
         <font face="Arial" size="2" color="#000000">- MARTEDI':</font> 
			 				
				 <input type="checkbox" name="marv" value="1"> 
				 
        <font face="Arial" size="2" color="#000000">- MERCOLEDI':</font>
				 				
					<input type="checkbox" name="merv" value="1"> 
				 
         <font face="Arial" size="2" color="#000000">- GIOVEDI':</font> 
				 				
					<input type="checkbox" name="giov" value="1"> 
				 
         <font face="Arial" size="2" color="#000000">- VENERDI':</font> 
				 				
					 <input type="checkbox" name="venv" value="1"> 
				 
         <font face="Arial" size="2" color="#000000">- DOMENICA:</font> 
				 			
					 <input type="checkbox" name="domv" value="1"> 
				 
        </td>
      </tr>
      
       <input type="hidden" name="ingranaggio" value="1" />
       <input type="hidden" name="login" value="<?php echo $login; ?>" />
       <input type="hidden" name="zona" value="<?php echo $zona; ?>" />
			<tr>
				<td width="260">&nbsp;</td>
				<td><input type="submit" value="Ricerca" name="B3"><input type="reset" value="Reset" name="B4"></td>
			</tr>
		</table>
		</td>
	</tr>
</table>
<p>&nbsp;</p>
</form>
</div>
</div>
</body>

</html>