<?php
$login=$_REQUEST["login"];
$ingranaggio=$_REQUEST["ingranaggio"];

$ingranaggioz=$_REQUEST["ingranaggioz"];
$ingranaggioxx=$_REQUEST["ingranaggioxx"];
#echo "ingr ".$ingranaggio." xx ".$ingranaggioxx." z ".$ingranaggioz;
include "conf_DB.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Verdana:ital,wght@0,300;0,500;1,100&display=swap');
label {
	font-weight: 600;
}
</style>    
<style type="text/css">
    
#slidetabsmenu {
float:left;
width:1200;
font-size:90%;
line-height:normal;

}

* html #slidetabsmenu{ /*IE only. Add 1em spacing between menu and rest of content*/
margin-bottom: 1em;
}

#slidetabsmenu ul{
list-style-type: none;
margin:0;
margin-left: 10px;
padding:0;
}

#slidetabsmenu li{
display:inline;
margin:0;
padding:0;
}

#slidetabsmenu a {
float:left;
background:url(media/tab-left.gif) no-repeat left top;
margin:0;
padding:0 0 0 9px;
text-decoration:none;
}

#slidetabsmenu a span {
float:left;
display:block;
background:url(media/tab-right.gif) no-repeat right top;
padding:3px 14px 3px 5px;

color:#3B3B3B;
}

/* Commented Backslash Hack hides rule from IE5-Mac \*/
#slidetabsmenu a span {float:none;}
/* End IE5-Mac hack */

#slidetabsmenu a:hover span {
color: black;
}

#slidetabsmenu #current a {
background-position:0 -125px;
}

#slidetabsmenu #current a span {
background-position:100% -125px;
color: black;
}

#slidetabsmenu a:hover {
background-position:0% -125px;
}

#slidetabsmenu a:hover span {
background-position:100% -125px;
}

</style>  
  </head>
  <body>
<div id="slidetabsmenu" >
  <ul>
<?php if($ingranaggio==1){ ?>  

<li ><a href="stage.php?login=<? echo $login; ?>&ingranaggioz=A&ingranaggioxx=1&ingranaggio=1" title="Nuovo Cliente"><span><font face="Verdana" stile="font-size: 10pt;" size="3" color="<? if($ingranaggioxx==1){echo "#cc0000";}else{echo "#000000";} ?>">Nuovo Cliente</font>&nbsp;&nbsp;<img border="0" src="nuovocli.png" width="20" height="15"></span></a></li>
<li ><a href="stage.php?login=<? echo $login; ?>&ingranaggioz=B&ingranaggioxx=2&ingranaggio=1" title="Modifica Cliente"><span><font face="Verdana" size="3" color="<? if($ingranaggioxx==2){echo "#cc0000";}else{echo "#000000";} ?>">Ricerca/Modifica Cliente</font>&nbsp;&nbsp;<img border="0" src="view.png" width="15" height="15"></span></a></li>

<?php } ?>
<?php if($ingranaggio==2){ ?>  

<li ><a href="stage.php?login=<? echo $login; ?>&ingranaggioz=C&ingranaggioxx=1&ingranaggio=2" title="Nuova Commessa"><span><font face="Verdana" stile="font-size: 10pt;" size="3" color="<? if($ingranaggioxx==1){echo "#cc0000";}else{echo "#000000";} ?>">Nuova Commessa</font>&nbsp;&nbsp;<img border="0" src="nuovocli.png" width="20" height="15"></span></a></li>
<li ><a href="stage.php?login=<? echo $login; ?>&ingranaggioz=D&ingranaggioxx=2&ingranaggio=2" title="Modifica Commessa"><span><font face="Verdana" size="3" color="<? if($ingranaggioxx==2){echo "#cc0000";}else{echo "#000000";} ?>">Ricerca/Modifica Commessa</font>&nbsp;&nbsp;<img border="0" src="view.png" width="15" height="15"></span></a></li>

<?php } ?>

<?php if($ingranaggio==4){ ?>  

<li ><a href="stage.php?login=<? echo $login; ?>&ingranaggioz=G&ingranaggioxx=1&ingranaggio=4" title="tabella tipo attività"><span><font face="Verdana" stile="font-size: 10pt;" size="3" color="<? if($ingranaggioxx==1){echo "#cc0000";}else{echo "#000000";} ?>">Tabella Tipo Attivita</font>&nbsp;&nbsp;<img border="0" src="attivita.png" width="20" height="15"></span></a></li>
<li ><a href="stage.php?login=<? echo $login; ?>&ingranaggioz=H&ingranaggioxx=2&ingranaggio=4" title="tabella sla"><span><font face="Verdana" size="3" color="<? if($ingranaggioxx==2){echo "#cc0000";}else{echo "#000000";} ?>">Tabella SLA</font>&nbsp;&nbsp;<img border="0" src="sla.png" width="15" height="15"></span></a></li>

<?php } ?>

<?php if($ingranaggio==5){ ?>  

<li ><a href="stage.php?login=<? echo $login; ?>&ingranaggioz=L&ingranaggioxx=1&ingranaggio=5" title="cat"><span><font face="Verdana" stile="font-size: 10pt;" size="3" color="<? if($ingranaggioxx==1){echo "#cc0000";}else{echo "#000000";} ?>">Nuovo C.A.T.</font>&nbsp;&nbsp;<img border="0" src="cat1.png" width="15" height="15"></span></a></li>
<li ><a href="stage.php?login=<? echo $login; ?>&ingranaggioz=M&ingranaggioxx=2&ingranaggio=5" title="Modifica cat"><span><font face="Verdana" size="3" color="<? if($ingranaggioxx==2){echo "#cc0000";}else{echo "#000000";} ?>">Ricerca/modifica C.A.T.</font>&nbsp;&nbsp;<img border="0" src="cat1.png" width="15" height="15"></span></a></li>

<?php } ?>
<?php if($ingranaggio==6){ ?>  

<li >
  <a href="stage.php?login=<? echo $login; ?>&ingranaggioz=N&ingranaggioxx=1&ingranaggio=6" title="Acquisizione Ticket singolo">
    <span>
      <font face="Verdana" stile="font-size: 10pt;" size="3" color="<? if($ingranaggioxx==1){echo "#cc0000";}else{echo "#000000";} ?>">Acquisizione Ticket Singolo</font>
      &nbsp;&nbsp;
      <img border="0" src="cat1.png" width="15" height="15">
    </span>
  </a>
</li>
<li ><a href="stage.php?login=<? echo $login; ?>&ingranaggioz=O&ingranaggioxx=2&ingranaggio=6" title="Acquisizione Ticket da Email"><span><font face="Verdana" size="3" color="<? if($ingranaggioxx==2){echo "#cc0000";}else{echo "#000000";} ?>">Acquisizione Ticket da Email</font>&nbsp;&nbsp;<img border="0" src="cat1.png" width="15" height="15"></span></a></li>
<li ><a href="stage.php?login=<? echo $login; ?>&ingranaggioz=P&ingranaggioxx=3&ingranaggio=6" title="Acquisizione Ticket Massivo"><span><font face="Verdana" size="3" color="<? if($ingranaggioxx==3){echo "#cc0000";}else{echo "#000000";} ?>">AcquisizioneTicket massivo</font>&nbsp;&nbsp;<img border="0" src="cat1.png" width="15" height="15"></span></a></li>
<li ><a href="stage.php?login=<? echo $login; ?>&ingranaggioz=Q&ingranaggioxx=4&ingranaggio=6" title="Gestione Tickets"><span><font face="Verdana" size="3" color="<? if($ingranaggioxx==4){echo "#cc0000";}else{echo "#000000";} ?>">Gestione Tickets</font>&nbsp;&nbsp;<img border="0" src="cat1.png" width="15" height="15"></span></a></li>


<?php } ?>
  </ul>
 
</div>

<div>

<?php if($ingranaggioz=="A"){ ?>
<iframe  align="right" frameborder="0" width="100%" height="100%"  src="nuovocliente1.php?login=<?php echo $login; ?>&ingranaggio=<?php echo $ingranaggio; ?>&ingranaggioxx=<?php echo $ingranaggioxx; ?>&ingranaggioz=<?php echo $ingranaggioz; ?>"></iframe> 
<?php } ?>
<?php if($ingranaggioz=="B"){ ?>
<iframe  align="right" frameborder="0" width="100%" height="100%"  src="leggicliente1.php?login=<?php echo $login; ?>&ingranaggio=<?php echo $ingranaggio; ?>&ingranaggioxx=<?php echo $ingranaggioxx; ?>&ingranaggioz=<?php echo $ingranaggioz; ?>"></iframe> 
<?php } ?>
 <?php if($ingranaggioz=="C"){ ?>
<iframe  align="right" frameborder="0" width="100%" height="100%"  src="nuovacommessa1.php?login=<?php echo $login; ?>&ingranaggio=<?php echo $ingranaggio; ?>&ingranaggioxx=<?php echo $ingranaggioxx; ?>&ingranaggioz=<?php echo $ingranaggioz; ?>"></iframe> 
<?php } ?>
<?php if($ingranaggioz=="D"){ ?>
<iframe  align="right" frameborder="0" width="100%" height="100%"  src="cercacommessa1.php?login=<?php echo $login; ?>&ingranaggio=<?php echo $ingranaggio; ?>&ingranaggioxx=<?php echo $ingranaggioxx; ?>&ingranaggioz=<?php echo $ingranaggioz; ?>"></iframe> 
<?php } ?>


<?php if($ingranaggioz=="G"){ ?>
<iframe  align="right" frameborder="0" width="100%" height="100%"  src="attivita1.php?login=<?php echo $login; ?>&ingranaggio=<?php echo $ingranaggio; ?>&ingranaggioxx=<?php echo $ingranaggioxx; ?>&ingranaggioz=<?php echo $ingranaggioz; ?>"></iframe> 
<?php } ?>
<?php if($ingranaggioz=="H"){ ?>
<iframe  align="right" frameborder="0" width="100%" height="100%"  src="sla1.php?login=<?php echo $login; ?>&ingranaggio=<?php echo $ingranaggio; ?>&ingranaggioxx=<?php echo $ingranaggioxx; ?>&ingranaggioz=<?php echo $ingranaggioz; ?>"></iframe> 
<?php } ?>
<?php if($ingranaggioz=="L"){ ?>
<iframe  align="right" frameborder="0" width="100%" height="100%"  src="nuovocat.php?login=<?php echo $login; ?>&ingranaggio=<?php echo $ingranaggio; ?>&ingranaggioxx=<?php echo $ingranaggioxx; ?>&ingranaggioz=<?php echo $ingranaggioz; ?>"></iframe> 
<?php } ?>
<?php if($ingranaggioz=="M"){ ?>
<iframe  align="right" frameborder="0" width="100%" height="100%"  src="cercacat.php?login=<?php echo $login; ?>&ingranaggio=<?php echo $ingranaggio; ?>&ingranaggioxx=<?php echo $ingranaggioxx; ?>&ingranaggioz=<?php echo $ingranaggioz; ?>"></iframe> 
<?php } ?>
<?php if($ingranaggioz=="N"){ ?>
<?php 
/*
$sql = "UPDATE loginluogo set 
comodoprogr = ''
where 
login = '$login' ";
#echo  $sql;
if ($conn->query($sql) === TRUE)
    { } 
    else { echo "Error inserted record: " . $conn->error; } 
    */
?>
<iframe  align="right" frameborder="0" width="100%" height="100%"  src="nuovoticketsing.php?login=<?php echo $login; ?>&ingranaggio=<?php echo $ingranaggio; ?>&ingranaggioxx=<?php echo $ingranaggioxx; ?>&ingranaggioz=<?php echo $ingranaggioz; ?>"></iframe> 
<?php } ?>
<?php if($ingranaggioz=="O"){ ?>
<iframe  align="right" frameborder="0" width="100%" height="100%"  src="ticketemail.php?login=<?php echo $login; ?>&ingranaggio=<?php echo $ingranaggio; ?>&ingranaggioxx=<?php echo $ingranaggioxx; ?>&ingranaggioz=<?php echo $ingranaggioz; ?>"></iframe> 
<?php } ?>
<?php if($ingranaggioz=="P"){ ?>
<iframe  align="right" frameborder="0" width="100%" height="100%"  src="ticketmass.php?login=<?php echo $login; ?>&ingranaggio=<?php echo $ingranaggio; ?>&ingranaggioxx=<?php echo $ingranaggioxx; ?>&ingranaggioz=<?php echo $ingranaggioz; ?>"></iframe> 
<?php } ?>
<?php if($ingranaggioz=="Q"){ ?>
<iframe  align="right" frameborder="0" width="100%" height="100%"  src="gestticket.php?login=<?php echo $login; ?>&ingranaggio=<?php echo $ingranaggio; ?>&ingranaggioxx=<?php echo $ingranaggioxx; ?>&ingranaggioz=<?php echo $ingranaggioz; ?>"></iframe> 
<?php } ?>
</div>
  </body>
</html>