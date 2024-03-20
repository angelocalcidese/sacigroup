<table class="expose-table" style="width:100%;">
  
  <tr>
    <th colspan="3"> 
      <label>Identificazione:</label>
    </th>
  </tr>
  <tr>
    <td colspan="1">
      <label style="color: #8e8b8b;" style="color: #8e8b8b;">Cliente:</label style="color: #8e8b8b;"><br>
      <span id="cliente"></span> 
    </td> <span id="numero"></span>
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Commessa:</label><br>
      <span id="commessa"></span>
    </td>            
  </tr>
  <tr>
    <td colspan="1">
      <label style="color: #8e8b8b;">Attività:</label><br>
      <span id="attivita"></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">N. Ticket Cliente:</label><br>
      <span id="ticket"></span>
    </td>
<?php $oggi=date("d/m/Y H:m:s");
if($datainizio==""){$datainizio=$oggi;} ?>           
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Data di aperura:</label><br>
      <span id="datainizio"></span>
		</td>            
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Tipo intervento:</label><br>
      <span id="tipointervento"></span>
    </td> 
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Apparato:</label><br>
      <span id="apparato"></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Seriale:</label><br>
      <span id="seriale"></span>
    </td>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Priorità alta:</label><br>      
      <i class="fa-solid fa-circle colorbase" id="ball-red" style="padding: 10px 40px;font-size: 27px;"></i>   
    </td> 
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Priorità media:</label style="color: #8e8b8b;"><br>
      <i class="fa-solid fa-circle colorbase" id="ball-yellow" style="padding: 10px 40px;font-size: 27px;"></i>
      </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Priorità Normale:</label style="color: #8e8b8b;"><br>
      <i class="fa-solid fa-circle colorbase" id="ball-green" style="padding: 10px 40px;font-size: 27px;"></i>
      </td>
  </tr>
  <tr>
    <th colspan="3"> 
      <label >Luogo intervento:</label> 
    </th>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Insegna:</label style="color: #8e8b8b;"><br>
      <span id="insegna"></span>
    </td>
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Ragione Sociale:</label style="color: #8e8b8b;"><br>
      <span id="ragsoc"></span>
    </td>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Indirizzo:</label style="color: #8e8b8b;"><br>
      <span id="indirizzo"></span>
    </td>
    <td colspan="1"> 
      <div style="width:49%; float:left">
        <label style="color: #8e8b8b;">Cap:</label style="color: #8e8b8b;"><br>
        <span id="cap"></span>
      </div>
      <div style="width:49%; float:right">
        <label style="color: #8e8b8b;">Prov:</label style="color: #8e8b8b;"><br>
        <span id="prov"></span>
      </div>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Città:</label style="color: #8e8b8b;"><br>
      <span id="citta"></span>
    </td>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Telefoni:</label><br>
      <span id="telefono"></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Note/Orari:</label><br>
      <span id="note"></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Contatto:</label><br>
      <span id="contatto"></span>
    </td>
  </tr>
  
  
  <tr>
    <th colspan="3"> 
      <label >Descrizione Attivita Intervento:</label> 
    </th>
  </tr>
  <tr>
    <td colspan="3"> 
      <label style="color: #8e8b8b;">Intervento:</label><br>
      <span id="intervento"></span>
    </td>
  </tr>


  
  <tr>
    <th colspan="3"> 
      <label >Segnalazione Parte da Sostituire:</label> 
    </th>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Numero Seriale:</label><br>
      <span id="serialeparte"></span>
    </td>
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Nome Parte:</label><br>
      <span id="nomeparte"></span>
    </td>
  </tr>
  <tr> 
    <td colspan="3"> 
      <label style="color: #8e8b8b;"<b>Nota per la spedizione parti di ricambio:</label style="color: #8e8b8b;"><br>
      <span id="spedizione"></span>
    </td>   
  </tr>
  
  <tr>       
    <th colspan="3"> 
      <label >Descrizione Note SLA:</label style="color: #8e8b8b;">
    </th>
  </tr>
  <tr> 
    <td colspan="3"> 
      <label style="color: #8e8b8b;"<b>SLA:</label style="color: #8e8b8b;"><br>
      <span id="notesla"></span>
  </tr>
  
  

  <tr>       
    <th colspan="3"> 
      <label >Appuntamento Intervento:</label style="color: #8e8b8b;">
    </th>
  </tr>
  <tr> 
    <td colspan="1"> 
      <label style="color: #8e8b8b;"<b>Data Ora:</label style="color: #8e8b8b;"><br>
      <span id="dataapp"></span>
    </td>
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Nota appuntamento: </label style="color: #8e8b8b;"><br>
      <span id="notaapp"></span>
    </td>
  </tr>
 
  
  
  <tr>
</table>

<style>
  .hidden {
    display:none !important;
  }
</style>

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