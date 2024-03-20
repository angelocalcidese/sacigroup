<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="inizio.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php  }
$larg=$_REQUEST["larg"];
#echo $larg;
$alt=$_REQUEST["alt"];
$login=$_REQUEST["login"];
$perczoom=$larg/1280;
$perczoom=$perczoom*80;

#echo $perczoom; 
$altezza="689px";$larghezza="1280px";
$ingranaggiox=$_REQUEST["ewsew"];
$emailnew=$_REQUEST["emailnew"];
$zona="Centro Ascolto";
$ingranaggio=$_REQUEST["ingranaggio"];
#echo $ingranaggio;
$opt=$_REQUEST["opt"];
#echo $ingranaggio;
#if ($zona=="")   {exit;}
#echo "zona ".$zona;
#echo "ingranaggio ".$ingranaggio;
#echo "ingra ".$ingranaggio;
include "conf_DB.php";
include("mailer/PHPMailerAutoload.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <script src="jquery-3.4.1.min.js"></script>
<script src="query-ui.min.js"></script>
<link rel="stylesheet" href="query-ui.css">
<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="./bootstrap/js/bootstrap.min.js"></script>			
<link href="./fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="./fontawesome/css/brands.css" rel="stylesheet">
  <link href="./fontawesome/css/solid.css" rel="stylesheet">
  <title>ticketing operation</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,500;1,100&display=swap');
</style>  

<style>
blink {
  animation: 1s linear infinite condemned_blink_effect;
}
@keyframes condemned_blink_effect {
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}      
.bordered {
   
  }
.bordered:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
   }
  .bordered1 {
   
  }
.bordered1:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
   }  
 .borderedx {
 
  }
.borderedx:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
   }

body {
 background-image: url(carlobase.jpg);
 background-repeat: no-repeat;
 background-position: center;
 } 
.table6 {
font-family: "Montserrat", "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
background: #ffffff;
color: #656665;
border: 16px solid #B2CAEA;
border-radius: 10px;
}
</style>
<style>
div#container {
min-width:   1200px;
  min-height:  500px;
  max-width:  1500px;
  max-height: 1000px;
}
div#sottocontainer {
min-width:   850px;
  min-height:  1500px;
  max-width:  800px;
  max-height: 1000px;
}
   .fixed-header, .fixed-footer{
        width: 100%;
        position: fixed;        
       
        padding: 18px 0;
        color: #fff;
    }
    .fixed-header{
        top: 10;
    }
    .fixed-footer{
        bottom: 0;
    }
    .container{
        width: 80%;
        margin: 0 auto; /* Center the DIV horizontally */
    }
    nav a{
        color: #fff;
        text-decoration: none;
        padding: 7px 25px;
        display: inline-block;
    }

h1 {
  text-shadow: 4px 4px 8px #000000;
  filter:DropShadow(Color=#000000, OffX=2, OffY=2);
}  
h2 {
  text-shadow: 4px 4px 8px #000000;
  filter:DropShadow(Color=#000000, OffX=2, OffY=2);
} 
a {text-decoration: none; } 
</style>
<style>
body {
  font-family: Montserrat,Montserrat,courier, serif;
}
div.absolute {
  position: absolute;
  top: 216;
  left:405;
}
</style>
</head>  
  <style>
  @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,700,800);

*,html,body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,label,fieldset,input,p,blockquote,th,td {
    margin: 0;
    padding: 0;
}

article,aside,figure,footer,header,hgroup,nav,section {
    display: block;
}

* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

html {
    -webkit-font-smoothing: antialiased;
}

a {
    color: #BA0707;
    text-decoration: none;
}

a:hover {
    color: #BA0707;
}

body {
    background: #e5e5e5;
    color: #374147;
    font: 12px "Montserrat",Helvetica,Arial,sans-serif;
    -webkit-font-smoothing: antialiased;
    line-height: 1;
    width: 100%;
}

nav {
    display: block;
    background: #374147;
}

.menu {
    display: block;
}

.menu li {
    display: inline-block;
    position: relative;
    z-index: 100;
}

.menu li:first-child {
    margin-left: 0;
}

.menu li a {
    font-weight: 600;
    text-decoration: none;
    padding: 20px 15px;
    display: block;
    color: #fff;
    transition: all 0.2s ease-in-out 0s;
}

.menu li a:hover,.menu li:hover>a {
    color: #fff;
    background: #afc81b;
}

.menu ul {
    visibility: hidden;
    opacity: 0;
    margin: 0;
    padding: 0;
    width: 170px;
    position: absolute;
    left: 0px;
    background: #fff;
    z-index: 99;
    transform: translate(0,20px);
    transition: all 0.2s ease-out;
}

.menu ul:after {
    bottom: 100%;
    left: 20%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: rgba(255, 255, 255, 0);
    border-bottom-color: #fff;
    border-width: 6px;
    margin-left: -6px;
}

.menu ul li {
    display: block;
    float: none;
    background: none;
    margin: 0;
    padding: 0;
}

.menu ul li a {
    font-size: 12px;
    font-weight: normal;
    display: block;
    color: #797979;
    background: #fff;
}

.menu ul li a:hover,.menu ul li:hover>a {
    background: #afc81b;
    color: #fff;
}

.menu li:hover>ul {
    visibility: visible;
    opacity: 1;
    transform: translate(0,0);
}

.menu ul ul {
    left: 169px;
    top: 0px;
    visibility: hidden;
    opacity: 0;
    transform: translate(20px,20px);
    transition: all 0.2s ease-out;
}

.menu ul ul:after {
    left: -6px;
    top: 10%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: rgba(255, 255, 255, 0);
    border-right-color: #fff;
    border-width: 6px;
    margin-top: -6px;
}

.menu li>ul ul:hover {
    visibility: visible;
    opacity: 1;
    transform: translate(0,0);
}

.responsive-menu {
    display: none;
    width: 100%;
    padding: 20px 15px;
    background: #374147;
    color: #fff;
    text-transform: uppercase;
    font-weight: 600;
}

.responsive-menu:hover {
    background: #374147;
    color: #fff;
    text-decoration: none;
}

a.homer {
    background: #afc81b;
}

@media (min-width: 768px) and (max-width: 979px) {
    .mainWrap {
        width: 768px;
    }

    .menu ul {
        top: 37px;
    }

    .menu li a {
        font-size: 12px;
    }

    a.homer {
        background: #374147;
    }
}

@media (max-width: 767px) {
    .mainWrap {
        width: auto;
        padding: 50px 20px;
    }

    .menu {
        display: none;
    }

    .responsive-menu {
        display: block;
    }

    nav {
        margin: 0;
        background: none;
    }

    .menu li {
        display: block;
        margin: 0;
    }

    .menu li a {
        background: #fff;
        color: #797979;
    }

    .menu li a:hover,.menu li:hover>a {
        background: #afc81b;
        color: #fff;
    }

    .menu ul {
        visibility: hidden;
        opacity: 0;
        top: 0;
        left: 0;
        width: 100%;
        transform: initial;
    }

    .menu li:hover>ul {
        visibility: visible;
        opacity: 1;
        position: relative;
        transform: initial;
    }

    .menu ul ul {
        left: 0;
        transform: initial;
    }

    .menu li>ul ul:hover {
        transform: initial;
    }
}

@media (max-width: 480px) {
}

@media (max-width: 320px) {
}
  </style>
  <script>
$(document).ready(function(){ 
	var touch 	= $('#resp-menu');
	var menu 	= $('.menu');
 
	$(touch).on('click', function(e) {
		e.preventDefault();
		menu.slideToggle();
	});
	
	$(window).resize(function(){
		var w = $(window).width();
		if(w > 767 && menu.is(':hidden')) {
			menu.removeAttr('style');
		}
	});
	
});  
  </script>
  <style>
    .navbar-top {
        clear:both;
        height:100px;
        margin:5px 0;
    }
    .navbar-top .navbar-logo{
        background-color: #afc81b;
        width: 100%;
        height: 100px;
    }
    .navbar-top .logout-header{
        float:right;
        font-size: 16px;
        color:#FFFFFF;
        font-weight: 400;
        margin-right: 45px 10px;
        padding: 10px;
    }
    .navbar-top .logout-header a{
        font-size: 16px;
        color:#FFFFFF;
        font-weight: 400;
    }
    .navbar-top .image-navbar{
        background-color:#FFFFFF;
        padding: 10px;
        float:left;
        width: 275px;
    }
  </style>
  </head>
  <body style="overflow: hidden;">
  
  
  
<?
$scaduto=0;
$arancione=0;
$sql1 = "SELECT * FROM cat  where oplogin = '$login' ";
            #echo $sql1; 
            $result = $conn->query($sql1);
            if ($result->num_rows > 0) {
            while($macrogruppo = $result->fetch_assoc())
                    { 	
                   # $tesseramento = $macrogruppo["tesseramento"]; 
                #$corsi= $macrogruppo["corsi"];
                #$contabilita = $macrogruppo["contabilita"]; 
                #$dio = $macrogruppo["dio"]; 
                $ragsoc = $macrogruppo["ragsoc"];
                $cognome = $macrogruppo["opcognome"];
                $nome = $macrogruppo["opnome"];
                $codice = $macrogruppo["codice"];
                        }}
$sql = "SELECT * FROM documenti  where    tipodoc = '$codice'";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
   $prgr = $macrogruppo["progr"];
   $data = $macrogruppo["datadoc"];
   $datasca = $macrogruppo["datasca"];
   $tipodoc = $macrogruppo["tipodoc"];
   $oggettox= $macrogruppo["oggetto"];
   #echo $oggettox.$oggetto;
   $file = $macrogruppo["file"];
   $obbligatorio = $macrogruppo["obbligatorio"];
   $tipodocumento = $macrogruppo["tipodocumento"];
$comodo=explode("/",$datasca);
$datafine=$comodo[2].$comodo[1].$comodo[0];
$datafine20=$comodo[2].$comodo[1].$comodo[0];  
$datafinex=date("Ymd");
$datafinex20=date("Y-m-d");
if($datafinex > $datafine){$scaduto=1;} 




$datafinedocumento=$comodo[2]."-".$comodo[1]."-".$comodo[0];

$dataoggi=date("Y-m-d");
if($datafinex > $datafine){$trovato=0;}



// Data di partenza
$dataInizio = new DateTime($dataoggi);

// Data di fine
$dataFine = new DateTime($datafinedocumento);

// Calcola la differenza
$differenza = $dataFine->diff($dataInizio);

// Ottieni la differenza totale in giorni
$differenzaInGiorni = $differenza->days;

#echo "La differenza tra le due date è di $differenzaInGiorni giorni. $datafinedocumento $dataoggi $datafinex $datafine<br>";

if($differenzaInGiorni >= 0 and $differenzaInGiorni <= 20){$arancione=1;}



}}
  
 ?>  
  
  
  
  
  
  
  
<div class="navbar-top">
    <div class="navbar-logo">
		<div class="image-navbar">
            <img src="ticketing2.png"  height="80" >
        </div>
        <div class="logout-header"> 
            <?php
            $sql1 = "SELECT * FROM cat  where oplogin = '$login' ";
            #echo $sql1; 
            $result = $conn->query($sql1);
            if ($result->num_rows > 0) {
            while($macrogruppo = $result->fetch_assoc())
                    { 	
                   # $tesseramento = $macrogruppo["tesseramento"]; 
                #$corsi= $macrogruppo["corsi"];
                #$contabilita = $macrogruppo["contabilita"]; 
                #$dio = $macrogruppo["dio"]; 
                $ragsoc = $macrogruppo["ragsoc"];
                $cognome = $macrogruppo["opcognome"];
                $nome = $macrogruppo["opnome"];
                $codice = $macrogruppo["codice"];
                        }}
            #if($dio==1){$tipo="Amm.";}else{$tipo="Utente";}
            ?>            
            <?php echo "CAT: ".$codice." - ".$ragsoc." - Operatore: ".$nome." ".$cognome." ".$tipo." - "; 
            
            ?>                                                                                                
            <a href="inizio.php">
                <i class="fa-solid fa-right-from-bracket"></i>
            </a>   
         <? 
         if($scaduto==1 or $arancione==1){echo "<br><br><br><br> <blink><font color='#cc0000'>ATTENZIONE</font> ci sono dei documenti in scadenza o scaduti</blink>";}
         ?>   
        </div>   
    </div>  
</div>
  
  
 <nav style="margin-bottom:7px;">
<a id="resp-menu" class="responsive-menu" href="#"><i class="fa fa-reorder"></i> Menu</a>    
   <ul class="menu">
   <li><a class="homer" href="#" style="width:275px; text-align: center;"> &nbsp;&nbsp;</a>
   </li>
  <li><a href="?login=<?php echo $login; ?>&ingranaggio=2"><i class="fa-solid fa-boxes-stacked"></i>  &nbsp;&nbsp;Tickets</a></li>
  <li><a href="?login=<?php echo $login; ?>&ingranaggio=1"><i class="fa fa-user""></i>  &nbsp;&nbsp;Account</a></li>
  </ul>
  </nav>
<div>

<iframe  align="right" frameborder="0" width="100%" height="100%" scrolling="no" src="stage.php?login=<?php echo $login; ?>&ingranaggio=<?php echo $ingranaggio; ?>"></iframe> 


</div>  
  
  
  
  </body>
</html>
