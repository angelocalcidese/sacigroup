
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Slide down menu - demo 2</title>
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

		background-color:#E2EBED;
		height:100%;
		text-align:center;
	}
	.clear{
		clear:both;
	}

	#mainContainer{
		width:760px;
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
		border:1px solid #000;
		padding:1px;

		width: 412px;	/* IE 5.x */
		width/* */:/**/412px;	/* Other browsers */
		width: /**/412px;

	}

	/* All A tags - i.e menu items. */
	#dhtmlgoodies_slidedown_menu a{
		color: #000;
		text-decoration:none;
		display:block;
		clear:both;

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
		background-color:#C24D07;
		color:#FFF;
		background-image:url('bg.png');
		height:30px;
    width:400px;
		line-height:30px;
		vertical-align:middle;
		padding-left:10px;
		border-left:1px solid #000;
		border-right:1px solid #000;
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

	}
	#dhtmlgoodies_slidedown_menu .slideMenuDiv3 ul{
		margin-left:10px;
		padding:1px;
	}
	#dhtmlgoodies_slidedown_menu .slMenuItem_depth4 ul{
		margin-left:15px;
		padding:1px;
	}

	</style>
</head>
<body>


<div align="center">
	<table border="0" width="30%">
		<tr>
			<td>
			<img border="0" src="carlopoma.png" width="954" height="140"></td>
      <tr>
      <td>Menu Generale</td></tr>
		</tr>
	</table>
	<p>&nbsp;</p> 
  </div> 
	<div align="center">
		<p align="center"><b><font face="Arial" size="6" color="#666666">MENU' GENERALE</font></b></p>
<br></div>
    <div align="center">
		<!-- START OF MENU -->
		<div id="dhtmlgoodies_slidedown_menu" >
			<ul>
				<li><a  href="#">Gestione Anagrafica Soci</a>
					<ul>
						<li><table border="0" width="100%">
	<tr>
		<td>
					
						<p align="center">
					
						<a href="sksocio.php?login=<?php echo $login; ?>">
							<img src="nuovosocio.png"><br>
						Inserimento nuovo socio</a></td>
		<td>
					
						<p align="center">
					
				<a href="lista1.php?login=<?php echo $login; ?>">
							<img src="listasocix.png"><br>
							Elenco Soci</a></td>
</table>
</li>
						<li><a href="cerca1.php?login=<?php echo $login; ?>">
							<img src="cercasocio.png"><br>
							Ricerca e Modifica Socio</a></li>
						
					</ul>
				</li>
				<li><a href="#">Corsi e Attivitą</a>
					<ul>
						<li><table border="0" width="100%">
	<tr>
		<td>
					
						<p align="center">
					
					<a href="corso2.php?login=<?php echo $login; ?>">
							<img src="aula.png"><br>
						Corsi </a></td>
		<td>
					
						<p align="center">
					
		<a href="corso1.php?login=<?php echo $login; ?>">
							<img src="Lezione.png"><br>
							Apertura nuovo Corso</a></td>
</table></li>
						
					</ul>
				</li>
				<li><a href="#">Eventi e Gite</a>
					<ul>
						<li><table border="0" width="100%">
	<tr>
		<td>
					
						<p align="center">
					
						<a href="menugenerale.php?login=<?php echo $login; ?>">
							<img src="anipulmino.png"><br>
						Gite Giornaliere</a></td>
		<td>
					
						<p align="center">
					
			<a href="menugenerale.php?login=<?php echo $login; ?>">
							<img src="ferien500.png"><br>
							Permanenze</a></td>
</table></li>

            	<li><table border="0" width="100%">
	<tr>
		<td>
					
						<p align="center">
					
					<a href="menugenerale.php?login=<?php echo $login; ?>">
							<img src="musica.png"><br>
							Eventi musicali e Ballo</a></td>
		<td>
					
						<p align="center">
					
			<a href="menugenerale.php?login=<?php echo $login; ?>">
							<img src="cena.png"><br>
							Eventi Pranzi o cene</a></td>
</table></li> 
              
					</ul>
				</li>
				<li><a href="#">Contabilitą</a>
					<ul>
						<li><table border="0" width="100%">
	<tr>
		<td>
					
						<p align="center">
					
						<a href="menutabelle.php?login=<?php echo $login; ?>">
							<img src="tabella.png"><br>
						Gestione Tabelle</a></td>
		<td>
					
						<p align="center">
					
			<a href="aggpianoconti.php?login=<?php echo $login; ?>">
							<img src="pianoconti.png"><br>
						Aggiorna Piano dei Conti</a></td>
</table>
            </li>
            
					  
        <li><table border="0" width="100%">
	<tr>
		<td>
					
						<p align="center">
					
						<a href="listapianoconti.php?login=<?php echo $login; ?>">
							<img src="listapiano.png"><br>
						Lista Piano dei Conti</a></td>
		<td>
					
						<p align="center">
					
			<a href="movimento.php?login=<?php echo $login; ?>">
							<img src="inserisci.png"><br>
						Inserisci Movimento Contabile</a></td>
</table>
				</li>
        <li><table border="0" width="100%">
	<tr>
		<td>
					
						<p align="center">
					
						<a href="consuntivo.php?login=<?php echo $login; ?>">
							<img src="consuntivo.png"><br>
						Stampa Consuntivo</a></td>
		<td>
					
						<p align="center">
				
<!--		<a href="movimento.php?login=<?php echo $login; ?>">
							<img src="inserisci.png"><br>
						Inserisci Movimento Contabile</a></td>  --> 

</table></li>
				</li>
        </ul>
				<li><a href="#">Servizi</a>
					<ul>
						<li><table border="0" width="100%">
	<tr>
		<td>
					
						<p align="center">
					
					<a href="password1.php?login=<?php echo $login; ?>">
							<img src="slidedownmenu/images/cambio.png"><br>
						Cambio Password</a></td>
		<td>
					
						<p align="center">
					
			<a href="password2.php?login=<?php echo $login; ?>">
							<img src="slidedownmenu/images/nuovoutente.png"><br>
							inserimento Nuovo Utente</a></td>
</table></li>
						
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