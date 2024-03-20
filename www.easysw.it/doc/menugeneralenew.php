<?php
$ingranaggio=$_REQUEST["ingranaggio"];
if ($ingranaggio==9){
session_start();
$_SESSION = array();
session_destroy();
header('location: index.php');
exit();
}
#echo "post ". $_REQUEST["login"]."cook ". $_COOKIE['POMACLIENTLOGGED'];

if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {
include "conf_DB.php";
$loginora=$_REQUEST["login"];

#echo "zona ".$zona;
$sql1 = "SELECT * FROM utentivolotari  where login = '$loginora' ";
#echo $sql1; 
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())
		{ 	
    	$tesseramento = $macrogruppo["tesseramento"]; 
      $corsi= $macrogruppo["corsi"];
      $contabilita = $macrogruppo["contabilita"]; 
      $dio = $macrogruppo["dio"];  
			}}



}
else
{$url_pagina_chiamante="index.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php
}
$login=$_REQUEST["login"];
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Gestione Documenti</title>
	<link rel="stylesheet" href="slidedownmenu/slidedown-menu2.css">
  
	<script type="text/javascript" src="slidedownmenu/slidedown-menu2.js"></script>	
	<style type="text/css">
	html{
		height:100%;
	}
	body{
		font-family: Trebuchet MS, Lucida Sans Unicode, Arial, sans-serif;
		font-size:0.8em;
		margin:0px;
		padding:0px;

		background-color:#ffffff;
		height:100%;
		text-align:center;
	}
	.clear{
		clear:both;
	}

	#mainContainer{
		width:760px;
    height:500px;
		text-align:left;
		margin:0 auto;
		background-color: #FFF;
		border-left:1px solid #000;
		border-right:1px solid #000;
		height:100%;
	}

	#topBar{
		width:1060px;
		height:100px;
	}
	#leftMenu{
		width:200px;
		padding-left:10px;
		padding-right:10px;
		float:left;
	}
	#mainContent{
		width: 520px;
		padding-right:10px;
		float:left;
	}
	/*
	General rules
	*/
	/* 	Layout CSS */
	#dhtmlgoodies_slidedown_menu{

		visibility:hidden;
		border:0px solid #ffffff;
		padding:1px;
    border-radius: 10px;
    border-style: groove;
		width: 750px;	/* IE 5.x */
		width/* */:/**/750px;	/* Other browsers */
		width: /**/750px;

	}

	/* All A tags - i.e menu items. */
	#dhtmlgoodies_slidedown_menu a{
		color: #000;
		text-decoration:none;
		display:block;
		clear:both;
    text-shadow: 2px 2px 4px #999999;
  filter:DropShadow(Color=#000000, OffX=2, OffY=2);
		padding-left:2px;

		width: 182px;	/* IE 5.x */
		width/* */:/**/170px;	/* Other browsers */
		width: /**/170px;

	}

	img{
		border:0px;
	}

	/*
	A tags
	*/
	#dhtmlgoodies_slidedown_menu .slMenuItem_depth1{	/* Main menu items */
		margin-top:1px;
		font-weight:bold;
		background-color:#046f97;
		color:#fff;
		background-image:url('btn1_active.gif');
		height:30px;
    width:740px;
		line-height:30px;
		vertical-align:middle;
		padding-left:10px;
		border-left:0px solid #000;
		border-right:0px solid #000;
    border-radius: 10px;
	}
#dhtmlgoodies_slidedown_menu .slMenuItem_depth1:hover {
 transform: scale(1, 1);/* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
 background-image:url('barra_contatti.gif');
 color:#fff;
   }
	#dhtmlgoodies_slidedown_menu .slMenuItem_depth2{	/* Sub menu items */
		margin-top:1px;
		text-align:center;
		font-weight:bold;
	}
	#dhtmlgoodies_slidedown_menu .slMenuItem_depth3{	/* Sub menu items */
		margin-top:1px;
		font-style:italic;
		color:blue;
	}
	#dhtmlgoodies_slidedown_menu .slMenuItem_depth4{	/* Sub menu items */
		margin-top:1px;
		color:red;
	}
	#dhtmlgoodies_slidedown_menu .slMenuItem_depth5{	/* Sub menu items */
		margin-top:1px;
	}

	/* UL tags, i.e group of menu utems.
	It's important to add style to the UL if you're specifying margins. If not, assign the style directly
	to the parent DIV, i.e.

	#dhtmlgoodies_slidedown_menu .slideMenuDiv1

	instead of

	#dhtmlgoodies_slidedown_menu .slideMenuDiv1 ul
	*/

	#dhtmlgoodies_slidedown_menu .slideMenuDiv1 ul{
		padding:1px;
	}
	#dhtmlgoodies_slidedown_menu .slideMenuDiv2 ul{
  padding:1px;
	}
	#dhtmlgoodies_slidedown_menu .slideMenuDiv3 ul{
		margin-left:10px;
		padding:1px;
	}
	#dhtmlgoodies_slidedown_menu .slMenuItem_depth4 ul{
		margin-left:15px;
		padding:1px;
	}  
  .bordered {
    width: 170px;
    height: 140px;
    padding: 20px;

    border-radius: 8px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
.bordered:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
   }
  .bordered1 {
    width: 726px;
    height: 400px;
    padding: 20px;

    border-radius: 8px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
.bordered1:hover {
  transform: scale(1.0); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
   }  
 .borderedx {
    width: 170px;
    height: 140px;
    padding: 20px;

    border-radius: 8px;
    box-shadow: 0 4px 8px 0 red, 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
.borderedx:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
   }
  .bordered1x {
    width: 726px;
    height: 400px;
    padding: 20px;

    border-radius: 8px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
.bordered1x:hover {
  transform: scale(1.0); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
   }  
   
 .borderedy {
    width: 170px;
    height: 140px;
    padding: 20px;

    border-radius: 8px;
    box-shadow: 0 4px 8px 0 green, 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
.borderedy:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
   }
  .bordered1y {
    width: 726px;
    height: 400px;
    padding: 20px;

    border-radius: 8px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
.bordered1y:hover {
  transform: scale(1.0); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
   }        
   
 .borderedz {
    width: 170px;
    height: 140px;
    padding: 20px;

    border-radius: 8px;
    box-shadow: 0 4px 8px 0 yellow, 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
.borderedz:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
   }
  .bordered1z {
    width: 726px;
    height: 400px;
    padding: 20px;

    border-radius: 8px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
.bordered1z:hover {
  transform: scale(1.0); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
   }        
   
 .borderedt {
    width: 170px;
    height: 140px;
    padding: 20px;

    border-radius: 8px;
    box-shadow: 0 4px 8px 0 blue, 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
.borderedt:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
   }
  .bordered1t {
    width: 726px;
    height: 400px;
    padding: 20px;

    border-radius: 8px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
.bordered1t:hover {
  transform: scale(1.0); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
   }             
h1 {
  text-shadow: 2px 2px 4px #999999;
  filter:DropShadow(Color=#000000, OffX=2, OffY=2);
}  
div.polaroid {
  width: 400px;
  height: 140px;
  border-radius: 8px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}

div.containerx {
  padding: 10px;
}
.table6 {
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
.table6 th {
font-size: 18px;
padding: 10px;
}
.table6 td {
background: #ffffff;
padding: 5px;
}
	</style>
</head>
<body>
<div align="center" >
	<table border="0" width="760" height="140" bgcolor="#ffffff"  >
		<tr > 
			<td colspan="2" style="border-radius: 20px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"">
      <div align="center">
			<img border="0" src="carlopoma.png" width="370" height="110"> <br>
      </div>
      </td>
      </tr>
   <tr> 

<td align="left" bgcolor="#FFFFFF" style="border: 0px ; "><a href="menugenerale.php?login=<?php echo $login; ?>&ingranaggio=9">LOGOUT</a></td>             

<?php
$sql1 = "SELECT * FROM utenti  where login = '$login'  ";
#echo $sql1;
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{$codvolontario = $macrogruppo["codvolontario"];
     $dio = $macrogruppo["dio"];
     $cognomevol = $macrogruppo["cognome"];
     $nomevol = $macrogruppo["nome"];
    } }
if($dio=="1"){$dicidio="amm.";}else{$dicidio="utente";}
?>           
<td bgcolor="#FFFFFF" align="right" style="border: 0px ; "><? echo $cognomevol." ".$nomevol." - ".$dicidio; ?></td>         
</tr>
</table>     
</div> 








	<div align="center">
		<p align="center"><b><font face="Arial" size="5" color="#666666">MENU' GENERALE GESTIONE DOCUMENTI</font></b></p>
    
</div>
    <div align="center">
		<!-- START OF MENU -->
		<div id="dhtmlgoodies_slidedown_menu" >
			<ul>
   
				<li>
 
        
        <a  href="#"><font face="Arial" size="3" color="#ffffff">Documenti</font></a>
					<ul>
<!-- inizio tesseramento -->       
<?php if($tesseramento=="SI")  {  ?>            
						<li align="center">
            
          
            <table border="0" width="100%" >
	<tr >
		<td >
		<div class="bordered">			
						<p align="center" >
					
						<a href="caricadoc.php?login=<?php echo $login."&zona=".$zona; ?>"> <br>
							<img src="documento.png" width="80" height="80"><br><b>
						Inserimento nuovo Documento</b></a></p></td>
    </div>        
		<td>
		<div class="bordered">				
						<p align="center">
					
				<a href="cerca1doc.php?login=<?php echo $login."&zona=".$zona; ?>"> <br>
							<img src="cercadoc.png" width="70" height="90"><br><b>
							Ricerca Documenti</b></a></p></td>

		<td>
    </div>
		<div class="bordered">				
						<p align="center">
<!--					
						<a href="presenzetot.php?login=<?php echo $login."&zona=".$zona; ?>"> <br>
							<img src="presenza.png" width="100" height="80"><br><b>
						Situazione Presenze</b></a>
-->                        
                        </p>   
            
            </td>
		<td>
    </div>
		<div class="bordered">					
						<p align="center">
<!--				
	<a href="extraexcel.php?login=<?php echo $login."&zona=".$zona; ?>"> <br>
							<img src="excel.png" width="90" height="90"><br><b>
						Estrazioni in Excell</b></a>
-->                        
                        </p>
           
            </td>        
              </td>
       </div>       
        </tr>
</li>

	<li>
            
</table>          
 
					
<?php } ?>          
<!-- fine tesseramento -->						
					</ul>
          

				</li>
			
        
        
        
        
        
        
        
				<li><a href="#"><font face="Arial" size="3" color="#ffffff">Tabelle e codifica</font></a>
					<ul>
         
					

            	<li><table border="0" width="100%">
	<tr >
		<td >
		<div class="bordered">			
						<p align="center" >
					
						<a href="creatipo.php?login=<?php echo $login."&zona=".$zona; ?>"> <br>
							<img src="tipodoc.png" width="100" height="80"><br><b>
						Tabella Tipo Documento</b></a></p></td>
    </div>        
		<td>
		<div class="bordered">				
						<p align="center">
					
				<a href="creaclasse.php?login=<?php echo $login."&zona=".$zona; ?>"> <br>
							<img src="classexx.png" width="100" height="80"><br><b>
							Tabella Classe Documento</b></a>
             
              </p></td>

		<td>
    </div>
		<div class="bordered">				
						<p align="center">
					
						<a href="creaclassesic.php?login=<?php echo $login."&zona=".$zona; ?>"> <br>
							<img src="classesic.png" width="100" height="80"><br><b>
						Tabella Classe Riservatezza Documento</b></a>
            
            </p></td>
		<td>
    </div>
		<div class="bordered">					
						<p align="center">
<? if($dio==3 ){ ?>
					
					<a href="bacheca.php?login=<?php echo $login."&zona=".$zona; ?>">  <br>
							<img src="bacheca.png" width="90" height="90"><br>
						<font face="Arial" size="2" color="black" ><b>Aggiorna Bacheca</b></font></a>
                       
<? } else { ?> 
<!--					
					<a href="creavolontario.php?login=<?php echo $login."&zona=".$zona; ?>">  <br>
							<img src="nuovoutente.jpg" width="80" height="80"><br>
						Inserimento Nuovo Volontario</a>
                        -->
<? } ?>           
            </p></td>        
              </td>
       </div>       
        </tr>
</table></li> 
   

					</ul>
          

                  
        
        
        
        
        
			
 




         
	
          
          

				<li><a href="#"><font face="Arial" size="3" color="#ffffff">Gestione Profili</font></a>
					<ul>
        
						<li><table border="0" width="100%">
	<tr>
		<td>
			<div class="bordered">			
						<p align="center" >
					
						<a href="password1.php?login=<?php echo $login; ?>"><br>
							<img src="cambiopass.jpg" width="80" height="80"><br>
						Cambio Password</a>
    </div>        
		<td>
		<div class="bordered">			
						<p align="center" >
					
						<a href="password2.php?login=<?php echo $login; ?>"><br>
							<img src="nuovoutente.jpg" width="80" height="80"><br>
							inserimento Nuovo Utente</a>
    </div>        
		<td>
					
	<div class="bordered">			
						<p align="center" >
					
					<a href="listaaccessi.php?login=<?php echo $login; ?>"><br>
							<img src="listapiano.png"><br>
						Lista Accessi</a>
    </div>        
	<td>
					
		<div class="bordered">			
						<p align="center" >
<? if($dio==1 ){ ?>
<!--					
					<a href="bacheca.php?login=<?php echo $login."&zona=".$zona; ?>">  <br>
							<img src="bacheca.png" width="90" height="90"><br>
						<font face="Arial" size="2" color="black" ><b>Aggiorna Bacheca</b></font></a>
-->                       
<? } else { ?> 
<!--					
					<a href="creavolontario.php?login=<?php echo $login."&zona=".$zona; ?>">  <br>
							<img src="nuovoutente.jpg" width="80" height="80"><br>
						Inserimento Nuovo Volontario</a>
                        -->
<? } ?>   
</p>
    </div>        		
</table>

</li>
					
					</ul>
				</li>
			</ul>
		</div>
		<!-- END OF MENU -->
		<script type="text/javascript">
		expandFirstItemAutomatically = 1;
		expandMenuItemByUrl = false;
		initSlideDownMenu();
		</script>
	</div>
	</div>

</body>
</html>