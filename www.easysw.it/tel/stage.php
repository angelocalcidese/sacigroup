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
  <?php include("risorsePrincipali.php"); ?>
  
<style>
label {
	font-weight: 600;
}
</style>    
<style type="text/css">
  .nav-tabs {
      border-bottom: 1px solid #476b5d;
  }
  .nav-link{
    color: #476b5d;
  }
  .nav-link:hover {
    background-color:#edfcd9;
  }
  .nav-link.active {
    color: red !important;
    border-color: #476b5d #476b5d #fff !important;
  }

</style>  

  </head>
  <body style="background-color: #f7f9e8;">
<div class="tab-navigation">
  <ul class="nav nav-tabs">
<?php if($ingranaggio==1){ ?>  

<li class="nav-item">
  <a class="nav-link <? if($ingranaggioxx==1){echo "active";} ?>" href="stage.php?login=<? echo $login; ?>&ingranaggioz=A&ingranaggioxx=1&ingranaggio=1" title="Nuovo Cliente">
    <i class="fa-solid fa-user-plus"></i>&nbsp;&nbsp;Nuovo Cliente
  </a>
</li>
<li class="nav-item">
  <a class="nav-link <? if($ingranaggioxx==2){echo "active";} ?>" href="stage.php?login=<? echo $login; ?>&ingranaggioz=B&ingranaggioxx=2&ingranaggio=1" title="Modifica Cliente">
  <span>
    <i class="fa-solid fa-magnifying-glass"></i>&nbsp;&nbsp;Ricerca/Modifica Cliente
  </a>
</li>
<?php } ?>
<?php if($ingranaggio==2){ ?>  

<li class="nav-item">
  <a class="nav-link <? if($ingranaggioxx==1){echo "active";} ?>" href="stage.php?login=<? echo $login; ?>&ingranaggioz=C&ingranaggioxx=1&ingranaggio=2" title="Nuova Commessa">
    Nuova Commessa&nbsp;&nbsp;<img border="0" src="nuovocli.png" width="20" height="15">
  </a>
</li>
<li class="nav-item">
  <a class="nav-link <? if($ingranaggioxx==2){echo "active";} ?>" href="stage.php?login=<? echo $login; ?>&ingranaggioz=D&ingranaggioxx=2&ingranaggio=2" title="Modifica Commessa">
    Ricerca/Modifica Commessa&nbsp;&nbsp;<img border="0" src="view.png" width="15" height="15">
  </a>
</li>
<?php } ?>
<?php if($ingranaggio==4){ ?>  

<li class="nav-item">
  <a class="nav-link <? if($ingranaggioxx==1){echo "active";} ?>" href="stage.php?login=<? echo $login; ?>&ingranaggioz=G&ingranaggioxx=1&ingranaggio=4" title="tabella tipo attività">
  Tabella Tipo Attivita&nbsp;&nbsp;<img border="0" src="attivita.png" width="20" height="15">
  </a>
</li>
<li class="nav-item" >
  <a class="nav-link <? if($ingranaggioxx==2){echo "active";} ?>" href="stage.php?login=<? echo $login; ?>&ingranaggioz=H&ingranaggioxx=2&ingranaggio=4" title="tabella sla">
    Tabella SLA&nbsp;&nbsp;<img border="0" src="sla.png" width="15" height="15">
  </a>
</li>
<li class="nav-item" >
  <a class="nav-link <? if($ingranaggioxx==3){echo "active";} ?>" href="stage.php?login=<? echo $login; ?>&ingranaggioz=HX&ingranaggioxx=3&ingranaggio=4" title="tabella attivo/passivo">
    Tabella Attivo/Passivo&nbsp;&nbsp;<img border="0" src="pallo.png" width="15" height="15">
  </a>
</li>
<li class="nav-item" >
  <a class="nav-link <? if($ingranaggioxx==4){echo "active";} ?>" href="stage.php?login=<? echo $login; ?>&ingranaggioz=GG&ingranaggioxx=4&ingranaggio=4" title="Tabella tipo fattura">
    Tabella Tipo Fatturazione&nbsp;&nbsp;<img border="0" src="fattura.png" width="15" height="15">
  </a>
</li>

<li class="nav-item" >
  <a class="nav-link <? if($ingranaggioxx==5){echo "active";} ?>" href="stage.php?login=<? echo $login; ?>&ingranaggioz=GL&ingranaggioxx=5&ingranaggio=4" title="Tabella tipo peioticità fattura">
    Tabella Periodicità Fattura&nbsp;&nbsp;<img border="0" src="tempo.png" width="15" height="15">
  </a>
</li>
<?php } ?>


<?php if($ingranaggio==5){ ?>  
<li class="nav-item" >
  <a class="nav-link <? if($ingranaggioxx==1){echo "active";} ?>" href="stage.php?login=<? echo $login; ?>&ingranaggioz=L&ingranaggioxx=1&ingranaggio=5" title="cat">
    Nuovo C.A.T.&nbsp;&nbsp;<img border="0" src="cat1.png" width="15" height="15">
  </a>
</li>
<li class="nav-item">
  <a class="nav-link <? if($ingranaggioxx==2){echo "active";} ?>" href="stage.php?login=<? echo $login; ?>&ingranaggioz=M&ingranaggioxx=2&ingranaggio=5" title="Modifica cat">
    Ricerca/modifica C.A.T.</font>&nbsp;&nbsp;<img border="0" src="cat1.png" width="15" height="15">
  </a>
</li>
<?php } ?>
<?php if($ingranaggio==16){ ?>  
<li class="nav-item" >
  <a class="nav-link <? if($ingranaggioxx==1){echo "active";} ?>" href="stage.php?login=<? echo $login; ?>&ingranaggioz=LL&ingranaggioxx=1&ingranaggio=16" title="tipo intervento">
    Nuovo Tipo Intervento&nbsp;&nbsp;<img border="0" src="cat1.png" width="15" height="15">
  </a>
</li>
<li class="nav-item">
  <a class="nav-link <? if($ingranaggioxx==2){echo "active";} ?>" href="stage.php?login=<? echo $login; ?>&ingranaggioz=MM&ingranaggioxx=2&ingranaggio=16" title="Modifica tipo intervento">
    Ricerca/modifica Tipo Intervento</font>&nbsp;&nbsp;<img border="0" src="cat1.png" width="15" height="15">
  </a>
</li>
<?php } ?>

<?php if($ingranaggio==6){ ?>
<li class="nav-item" >
  <a class="nav-link <? if($ingranaggioxx==1){echo "active";}?>" href="stage.php?login=<? echo $login; ?>&ingranaggioz=N&ingranaggioxx=1&ingranaggio=6" title="Acquisizione Ticket singolo">
  <i class="fa-solid fa-ticket"></i> Acquisizione Ticket singolo
  </a>
</li>
<li class="nav-item" >
  <a class="nav-link <? if($ingranaggioxx==2){echo "active";}?>" href="stage.php?login=<? echo $login; ?>&ingranaggioz=O&ingranaggioxx=2&ingranaggio=6" title="Acquisizione Ticket da Email">
  <i class="fa-solid fa-at"></i> Acquisizione Ticket da Email
</a>
</li>
<li class="nav-item" >
  <a class="nav-link <? if($ingranaggioxx==3){echo "active";}?>" href="stage.php?login=<? echo $login; ?>&ingranaggioz=P&ingranaggioxx=3&ingranaggio=6" title="Acquisizione Ticket Massivo">
  <i class="fa-solid fa-layer-group"></i> AcquisizioneTicket massivo
  </a>
</li>
<li class="nav-item" >
  <a class="nav-link <? if($ingranaggioxx==4){echo "active";}?>" href="stage.php?login=<? echo $login; ?>&ingranaggioz=Q&ingranaggioxx=4&ingranaggio=6" title="Gestione Tickets">
  <i class="fa-solid fa-toolbox"></i> Gestione Tickets 
  </a>
</li>
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
<?php if($ingranaggioz=="GG"){ ?>
<iframe  align="right" frameborder="0" width="100%" height="100%"  src="tabtipofatt.php?login=<?php echo $login; ?>&ingranaggio=<?php echo $ingranaggio; ?>&ingranaggioxx=<?php echo $ingranaggioxx; ?>&ingranaggioz=<?php echo $ingranaggioz; ?>"></iframe> 
<?php } ?>
<?php if($ingranaggioz=="GL"){ ?>
<iframe  align="right" frameborder="0" width="100%" height="100%"  src="tabperfatt.php?login=<?php echo $login; ?>&ingranaggio=<?php echo $ingranaggio; ?>&ingranaggioxx=<?php echo $ingranaggioxx; ?>&ingranaggioz=<?php echo $ingranaggioz; ?>"></iframe> 
<?php } ?>

<?php if($ingranaggioz=="H"){ ?>
<iframe  align="right" frameborder="0" width="100%" height="100%"  src="sla1.php?login=<?php echo $login; ?>&ingranaggio=<?php echo $ingranaggio; ?>&ingranaggioxx=<?php echo $ingranaggioxx; ?>&ingranaggioz=<?php echo $ingranaggioz; ?>"></iframe> 
<?php } ?>
 <?php if($ingranaggioz=="HX"){ ?>
<iframe  align="right" frameborder="0" width="100%" height="100%"  src="tabellapasatt.php?login=<?php echo $login; ?>&ingranaggio=<?php echo $ingranaggio; ?>&ingranaggioxx=<?php echo $ingranaggioxx; ?>&ingranaggioz=<?php echo $ingranaggioz; ?>"></iframe> 
<?php } ?>
<?php if($ingranaggioz=="L"){ ?>
<iframe  align="right" frameborder="0" width="100%" height="100%"  src="nuovocat.php?login=<?php echo $login; ?>&ingranaggio=<?php echo $ingranaggio; ?>&ingranaggioxx=<?php echo $ingranaggioxx; ?>&ingranaggioz=<?php echo $ingranaggioz; ?>"></iframe> 
<?php } ?>
<?php if($ingranaggioz=="LL"){ ?>
<iframe  align="right" frameborder="0" width="100%" height="100%"  src="tipointervento.php?login=<?php echo $login; ?>&ingranaggio=<?php echo $ingranaggio; ?>&ingranaggioxx=<?php echo $ingranaggioxx; ?>&ingranaggioz=<?php echo $ingranaggioz; ?>"></iframe> 
<?php } ?>
<?php if($ingranaggioz=="MM"){ ?>
<iframe  align="right" frameborder="0" width="100%" height="100%"  src="modificatipointervento.php?login=<?php echo $login; ?>&ingranaggio=<?php echo $ingranaggio; ?>&ingranaggioxx=<?php echo $ingranaggioxx; ?>&ingranaggioz=<?php echo $ingranaggioz; ?>"></iframe> 
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
<iframe  align="right" frameborder="0" width="100%" height="100%"  src="gestticket.php?login=<?php echo $login; ?>&ingranaggio=<?php echo $ingranaggio; ?>&ingranaggioxx=<?php echo $ingranaggioxx; ?>&ingranaggioz=<?php echo $ingranaggioz; ?>"></iframe> 

</div>
  </body>
</html>