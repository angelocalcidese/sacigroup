<!--<script src="jquery-3.4.1.min.js"></script>
<script src="query-ui.min.js"></script>
<link rel="stylesheet" href="query-ui.css">
<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="./bootstrap/js/bootstrap.min.js"></script>-->
<center>
<table width="80%">

<tr>
           
            <td colspan="3"   align="left" style="  border: 1px solid #949699;background: #476b5d;color: ffffff;" > <font face="Verdana"  style="font-size: 10pt;">Identificazione:</font></b>
            </td>
            </tr>
<tr align="center">
            <td   colspan="1"   align="left" style="  border: 0px solid #949699;background: #cbcccd;" ><font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Cliente:</b>
            <br></font></b>
             <font face="Verdana" color="#ffffff" style="font-size: 12pt;"><?php echo $clienteintero; ?></font>  
            </td>
            
            <td colspan="2"   align="left" style="  border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Commessa:</b><br></font></b>
             <font face="Verdana" color="#ffffff" style="font-size: 12pt;"><?php echo $commessa; ?></font>
            </td>            
            </tr>
            <tr align="left">
            <td   colspan="1"  align="left" style="  border: 0px solid #949699;background: #cbcccd;" ><font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Attività :</b><br></font></b>
             <font face="Verdana" color="#ffffff" style="font-size: 12pt;"><?php echo $attivita; ?></font>
            </td>
            
            <td colspan="1"   align="left" style="  border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>N. Ticket Cliente:</b><br></font></b>
             <font face="Verdana" color="#ffffff" style="font-size: 12pt;"><?php echo $ticketcli; ?></font>
            </td>
<?php $oggi=date("d/m/Y H:m:s");
if($datainizio==""){$datainizio=$oggi;} ?>           
            <td colspan="1"   align="left" style="  border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Data di aperura:</b><br></font></b>
             <font face="Verdana" color="#ffffff" style="font-size: 12pt;"><?php echo $datainizio; ?></font>
			</td>            
            </tr>



             <tr>
            <td   colspan="1"   align="left" style="  border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Tipo intervento:</b><br></font></b>
             <font face="Verdana" color="#ffffff" style="font-size: 12pt;"><?php echo $tipointervento; ?></font>
              </select>
            </td> 
            <td colspan="1"   align="left" style="  border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Apparato:</b><br></font></b>
             <font face="Verdana" color="#ffffff" style="font-size: 12pt;"><?php echo $apparato; ?></font>
            </td>
            <td colspan="1"   align="left" style="  border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Seriale:</b><br></font></b>
             <font face="Verdana" color="#ffffff" style="font-size: 12pt;"><?php echo $seriale; ?></font>
            </td>
            </tr>
             <? if($priorita==""){$priorita="verde";} ?>
             <tr>
            <td   colspan="1"   align="left" style="  border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Priorità  alta:</b><br></font></b>
            <input type="radio" name="priorita" id="rosso" value="rosso" <?php if ($priorita=="rosso"){echo "checked";} ?> style="width: 25px;height: 25px;accent-color: red;">
            </td> 
            <td colspan="1"   align="left" style="  border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Priorità  media:</b><br></font></b>
            <input type="radio" name="priorita" id="giallo" value="giallo" <?php if ($priorita=="giallo"){echo "checked";} ?> " style=" width: 25px;height: 25px;accent-color: yellow;">
            </td>
            <td colspan="1"   align="left" style="  border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Priorità  Normle:</b><br></font></b>
            <input type="radio" name="priorita" id="verde" value="verde" <?php if ($priorita=="verde"){echo "checked"; } ?>   style="width: 25px;height: 25px;accent-color: green;border: 15px solid green;background-color: green;">
            </td>
            </tr>
            
             <tr>
           
            <td colspan="3"   align="left" style="  border: 0px solid #949699;background: #476b5d;color: ffffff;" > 
           
           <font face="Verdana"  style="font-size: 10pt;">Luogo intervento:</font> 
            
           
		   
            </td>
            </tr>
            
            <tr>
            <td   colspan="1"   align="left" style="  border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Insegna:</b><br></font></b>
             <font face="Verdana" color="#ffffff" style="font-size: 12pt;"><?php echo $insegna; ?></font>
            </td>
            <td  colspan="2"   align="left" style="  border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Ragione Sociale:</b><br></font></b>
             <font face="Verdana" color="#ffffff" style="font-size: 12pt;"><?php echo $ragsoc; ?></font>
            </td>
            </tr>
            <tr>
             <td colspan="1"  align="left" style="  border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Indirizzo:</b><br></font></b>
              <font face="Verdana" color="#ffffff" style="font-size: 12pt;"><?php echo $indirizzo; ?></font>
            </td>
             <td colspan="1"   align="left" style="  border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Cap: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; Prov:</b><br></font></b>
             <font face="Verdana" color="#ffffff" style="font-size: 12pt;"><?php echo $cap; ?></font> &nbsp; &nbsp; &nbsp; &nbsp;
             <font face="Verdana" color="#ffffff" style="font-size: 12pt;"><?php echo $prov; ?></font>
            
            </td>
             <td colspan="1"   align="left" style="  border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Città :</b><br></font></b>
             <font face="Verdana" color="#ffffff" style="font-size: 12pt;"><?php echo $citta; ?></font>
            </td>
            </tr>
            
             <tr>
            <td   colspan="1"   align="left" style="  border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Telefoni:</b><br></font></b>
             <font face="Verdana" color="#ffffff" style="font-size: 12pt;"><?php echo $telefono; ?></font>
            </td>
             <td colspan="2"   align="left" style="  border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Contatto:</b><br></font></b>
              <font face="Verdana" color="#ffffff" style="font-size: 12pt;"><?php echo $contatto; ?></font>
            </td>
            
            </tr>
            
            
            <tr>           
            <td colspan="3"   align="left" style="  border: 0px solid #949699;background: #476b5d;color: ffffff;" > <font face="Verdana"  style="font-size: 10pt;">Descrizione Attivita  Intervento:</font></b>
            </td>
            </tr>
            
            <tr> 
            <td  colspan="3"   align="left" style="  border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Descrizione: </b><br> </font></b>
            <font face="Verdana" color="#ffffff" style="font-size: 12pt;"><?php echo $intervento; ?></font></td>
            </tr> 
                               
          <tr>       
            <td colspan="3"   align="left" style="  border: 0px solid #949699;background: #476b5d;color: ffffff;" > <font face="Verdana"  style="font-size: 10pt;">Appuntamento Intervento:</font></b>
            </td>
            </tr>
          
            <tr> 
            <td colspan="1"  align="left" style="  border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Data Ora:</b><br></font></b>
            <font face="Verdana" color="#ffffff" style="font-size: 12pt;"><?php echo $dataapp; ?></font>
            </td>
            
            <td colspan="2"   align="left" style="  border: 0px solid #949699;background: #cbcccd;" > <font face="Verdana" color="#000000" style="font-size: 8pt;"><b>Nota appuntamento: </b><br> </font></b>
            <font face="Verdana" color="#ffffff" style="font-size: 12pt;"><?php echo $notaapp; ?></font></td>
            </tr>
            
          
            
       
 
</table> 
<style>
  .hidden {
    display:none !important;
  }
</style>
<div class="row" style="width:50%">
  <div class="input-group mt-3 mb-3 hidden" id="terzepartiDiv">
    <input type="text" class="form-control" id="terzeparti" placeholder="Assegna a terze parti" aria-label="Assegna a terze parti" aria-describedby="button-addon2">
    <button class="btn btn-success" type="button" id="addTerzeParti">Assegna</button>
    <button class="btn btn-danger " type="button" onClick="annullaSerch()">Annulla</button>
  </div>
  <div class="input-group mt-3 mb-3 hidden" id="internoDiv">
    <input type="text" class="form-control" id="assegnaint" placeholder="Assegna a tecnico interno" aria-label="Assegna a tecnico interno" aria-describedby="button-addon2">
    <button class="btn btn-success" type="button" id="addTecnicoInt">Assegna</button>
    <button class="btn btn-danger " type="button" onClick="annullaSerch()">Annulla</button>
  </div>
  <div class="d-grid gap-2 d-md-block mt-4" id="buttonAssegna">
    <button class="btn btn-primary" type="button" onClick="openTerze()">Assegnazione a terze parti</button>
    <button class="btn btn-primary" type="button" onClick="openInterno()">Assegnazione a tecnico interno</button>
  </div>
</div>
</center>

 <br><br><br><br><br><br><br><br><br><br>
 <script>
function openTerze(){
  $("#terzepartiDiv").removeClass("hidden");
  $("#buttonAssegna").addClass("hidden");
}
function openInterno(){
  $("#internoDiv").removeClass("hidden");
  $("#buttonAssegna").addClass("hidden");
}
function annullaSerch(){
  $("#assegnaint").val("");
  $("#terzeparti").val("");
  $("#terzepartiDiv").addClass("hidden");
  $("#internoDiv").addClass("hidden");
  $("#buttonAssegna").removeClass("hidden");
}
var terze = [];
var interno = [];

function autoCompleteTerzePart(){
   $("#terzeparti").autocomplete({
			source: terze  
		 });
         
}
 function ricercaTerzePartAutocomplete(){
	
  $.ajax({
        url: 'leggicat.php',
        type: 'POST',
        dataType: 'json',
        data: {},
        success: function(risposta){
          terze = risposta;
           autoCompleteTerzePart();
        },
        error: function(error){
     console.log("ERRORE CHIAMATA");
        }
  });
 }
function autoCompleteInterno(){
     $("#assegnaint").autocomplete({
			source: interno
      
		 });
         
}
 function ricercaInterniAutocomplete(){
	
  $.ajax({
        url: 'leggitecnico.php',
        type: 'POST',
        dataType: 'json',
        data: {},
        success: function(risposta){
          interno = risposta;
          autoCompleteInterno();
        },
        error: function(error){
     console.log("ERRORE CHIAMATA");
        }
  });
 }
 $(document).ready(function() {
      ricercaTerzePartAutocomplete();
      ricercaInterniAutocomplete();
  });
function closeModalAss(){
  $('#assegna').modal('hide');
}

$("#addTerzeParti").on("click", function(){
  var valTerze = $("#terzeparti").val();
  if(valTerze != ""){
    /*mettere chiamata ajax per memorizzare */
var ticket = "<?php echo $numero; ?>";   
var login = "<?php echo $login; ?>";   
 $.ajax({
        url: 'scriviterze.php',
        type: 'POST',
        data: {"numero": ticket, "login": login, "ragsoc": valTerze},
        success: function(risposta){
          closeModalAss();
        },
        error: function(error){
     console.log("ERRORE CHIAMATA");
        }
  });    
    
    
    
 /*   alert(valTerze); */
    
  }
});

$("#addTecnicoInt").on("click", function(){

  var valInterno = $("#assegnaint").val();
  /*mettere chiamata ajax per memorizzare */
  if(valInterno  != ""){
var ticket = "<?php echo $numero; ?>";   
var login = "<?php echo $login; ?>";   
 $.ajax({
        url: 'scriviterzetec.php',
        type: 'POST',
        data: {"numero": ticket, "login": login, "ragsoc": valInterno},
        success: function(risposta){
          closeModalAss();
        },
        error: function(error){
     console.log("ERRORE CHIAMATA");
        }
  });      
    //alert(valInterno);
    
  }
  
});

</script>