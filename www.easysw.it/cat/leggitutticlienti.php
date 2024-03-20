<?php
#include "conf_DB.php";
#$cliente=$_REQUEST["cliente"];
#$clientex = $_REQUEST['risposta'];
#echo "cli".$cliente; exit;
$ingranaggio=$_REQUEST["ingranaggio"];
$ingranaggiott=$_REQUEST["ingranaggiott"];
$progr=$_REQUEST["progr"];
$login=$_REQUEST["login"];
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>inserimento documenti</title>
  
<script>
function tableInit() {
  /*
  var table = $('#clientTable').DataTable(
    {
    
    "order": [[ 2, "asc" ]],
    "scrollCollapse": true,
    "paging": true,
    "lengthMenu": [ [ 25, -1,  10, 50 ], [25, "Tutti",  10, 50 ] ],
    "language": {"search": "Cerca:", "lengthMenu": "Visualizza _MENU_ records per pagina",  "info": "Pagina _PAGE_ di _PAGES_",
          "paginate": {
          "first":      "Prima pagina",
          "last":       "Ultima pagina",
          "next":       "Prossima",
          "previous":   "Precedente"
      }}
    });
   */
}

 function aggiorna(sel){
  var f = document.form;
  f.sel_value.value = sel.options[sel.selectedIndex].value;
  f.sel_text.value = sel.options[sel.selectedIndex].text;
 }
</SCRIPT>

</head>

<body text="#000000" >
<div align="center">   

</div>
<div align="left">
<table id="clientTable" class="display" cellspacing="0" align="left" style="width:99%; position:relative;">         
             <thead class="intesta">
	<tr class="testa">
		 
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Montserrat;" align="center"><font size="2" face="Montserrat" >Codice</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Montserrat;" align="center"><font size="2" face="Montserrat" >Data Acq.</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Montserrat;" align="center"><font size="2" face="Montserrat" >Rag. soc.</td>        
      	  <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Montserrat;" align="center"><font size="2" face="Montserrat" >telefono</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Montserrat;" align="center"><font size="2" face="Montserrat" >email</td>
          <td  style=" border: 1px solid black;background-color: #476b5d; color: #ffffff;font-family: Montserrat;" align="center"><font size="2" face="Montserrat" >commesse</td>
           
           </tr>       
	</thead>
	<tbody>
<?php    
$sql = "SELECT *  FROM  clienti where  progr != '' " 
        .  $selezionaragsoc  . $selezionacognome . $selezionaiva .
        " ORDER BY ragsoc";  
#echo $sql;
$rCount = 1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
     $progr = $macrogruppo["progr"];
     $ragsocx = $macrogruppo["ragsoc"];
     $dataoperazione = $macrogruppo["dataoperazione"];
     $codice = $macrogruppo["codice"];
     $ivaxx = $macrogruppo["iva"];
     $telefonox = $macrogruppo["telefono"];
     $emailx = $macrogruppo["email"];
     $ibanx = $macrogruppo["iban"];
?>     
    <tr >    
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Montserrat;" align="center" ><font size="2" face="Montserrat"><?php echo $codice; ?></td>
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Montserrat;" align="center" ><font size="2" face="Montserrat"><?php echo $dataoperazione; ?></td>
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Montserrat;" align="left" ><font size="2" face="Montserrat"><?php echo $ragsocx; ?></td>
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Montserrat;" align="left" ><font size="2" face="Montserrat"><?php echo $telefonox; ?></td>
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Montserrat;" align="left" ><font size="2" face="Montserrat"><?php echo $emailx; ?></td>
      <td valign="top" style=" border: 1px solid #e4e3e3;font-family: Montserrat;" align="left" ><font size="2" face="Montserrat">
<?php 
$sqlg = "SELECT *  FROM  commesse   where cliente = '$codice' ORDER BY nomecommessa";  
#echo $sql;  exit;
$newobj = array();
$rCount = 1;
$resultg = $conn->query($sqlg);
if ($resultg->num_rows > 0) {
  while($macrogruppog = $resultg->fetch_assoc())	
	{ 
     //$progr = $macrogruppo["progr"];
     //$codicemediatorex = $macrogruppo["codicemediatore"]; 
     $nomecommessa= $macrogruppog["nomecommessa"];
     echo $nomecommessa."<br>";                                 
 }}       
?>
</td>

      
     </tr>	
     
<?php          
}
}
?>             
</table> 
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>              
</div> 

<?php

?>