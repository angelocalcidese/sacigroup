<?
if($codiceww!=""){
$sql1v = "SELECT * FROM cat  where codice = '$codiceww' ";
#echo $sql1v; 
$resultv = $conn->query($sql1v);
if ($resultv->num_rows > 0) {
   while($macrogruppov = $resultv->fetch_assoc())
		{
         $codiceww = $macrogruppov["codice"];
         $ragsocv = $macrogruppov["ragsoc"];
         $viav = $macrogruppov["via"];
         $cittav = $macrogruppov["citta"];
         $capv = $macrogruppov["cap"];
         $provv = $macrogruppov["prov"];
         $regionev = $macrogruppov["regione"];
         $ivav = $macrogruppov["iva"];
         $codfiscv = $macrogruppov["codfisc"];
         $pecv = $macrogruppov["pec"];
         $ibanv = $macrogruppov["iban"];
         $sdiv = $macrogruppov["sdi"];
         
         $ammcognome = $macrogruppov["ammcognome"];
         $ammnome = $macrogruppov["ammnome"];
         $ammvia = $macrogruppov["ammvia"];
         $ammruolo = $macrogruppov["ammruolo"];
         $ammcap = $macrogruppov["ammcap"];
         $ammcitta = $macrogruppov["ammcitta"];
         $ammcap = $macrogruppov["ammcap"];
         $ammprov = $macrogruppov["ammprov"];
         $ammregione = $macrogruppov["ammregione"];
         $ammtelefono = $macrogruppov["ammtelefono"];
         $ammcell = $macrogruppov["ammcell"];
         $ammlogin = $macrogruppov["ammlogin"];
         $ammpassword = $macrogruppov["ammpassword"];
         $ammprofilo1 = $macrogruppov["ammprofilo1"];
         $ammprofilo2 = $macrogruppov["ammprofilo2"];
         $ammprofilo3 = $macrogruppov["ammprofilo3"];
         
         $optelefono = $macrogruppov["optelefono"];
         $opemail = $macrogruppov["opemail"];
         $opcognome = $macrogruppov["opcognome"];
         $opnome = $macrogruppov["opnome"];
         $opcognomenome=$opcognome." ".$opnome; }}
?>
<table class="expose-table">
  <tr>
    <th colspan="5"> 
      <label>Identificazione:</label>
    </th>
  </tr>
   <tr>
    <td colspan="1">
      <label style="color: #8e8b8b;" style="color: #8e8b8b;">Ragione Sociale:</label style="color: #8e8b8b;"><br>
      <span> <?php echo $ragsocv; ?></span> 
    </td> 
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Indirizzo:</label><br>
      <span> <?php echo $viav ; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Cap:</label><br>
      <span> <?php echo $cap ; ?></span>
    </td>             
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Citta:</label><br>
      <span> <?php echo $citta ; ?></span>
    </td>   
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Provincia:</label><br>
      <span> <?php echo $provv ; ?></span>
    </td>            
  </tr>
  
  <tr>
    <td colspan="1">
      <label style="color: #8e8b8b;">Regione:</label><br>
      <span> <?php echo $regionev; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Iva:</label><br>
      <span> <?php echo $ivav; ?></span>
    </td>       
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Iban:</label><br>
      <span> <?php echo $ibanv ; ?></span>
		</td> 
     <td colspan="1"> 
      <label style="color: #8e8b8b;">Sdi:</label><br>
      <span> <?php echo $sdiv ; ?></span>
		</td> 
      <td colspan="1"> 
      <label style="color: #8e8b8b;">C.F.:</label><br>
      <span> <?php echo $codfiscv ; ?></span>
		</td>                            
  </tr>
  <tr>
    <td colspan="5"> 
      <label style="color: #8e8b8b;">Pec:</label><br>
      <span> <?php echo $pecv; ?></span>
    </td> 
  </tr>
  
  
  <? //if($priorita==""){$priorita="verde";} ?>
  
  
  
  
  <tr>
    <th colspan="5"> 
      <label>Riferimento Amministrazione:       
      </label> 
    </th>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Cognome Nome Responsabile:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $ammcognome." ".$ammnome; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Ruolo:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $ammruolo; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Indirizzo:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $ammvia; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Cap:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $ammcap; ?></span>
      </div>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Città:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $ammcitta; ?></span>
    </td>
  </tr>
  
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Provincia:</label><br>
      <span ><?php echo $ammprov; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Regione:</label><br>
      <span ><?php echo $regione; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Telefono:</label><br>
      <span ><?php echo $ammtelefono; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Cell.:</label><br>
      <span ><?php echo $ammcell; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Login:</label><br>
      <span ><?php echo $ammlogin; ?></span>
    </td>
  </tr>
  
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Password:</label><br>
      <span ><?php echo $ammpassword; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Profilo 1:</label><br>
      <span ><?php echo $ammprofilo1; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Profilo 2:</label><br>
      <span ><?php echo $ammprofilo2; ?></span>
    </td>
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Pofilo 3.:</label><br>
      <span ><?php echo $ammprofilo3; ?></span>
    </td>
  </tr>
  
   <tr>
    <th colspan="5"> 
      <label>Riferimento Operativo:      
      </label> 
    </th>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Cognome Nome Responsabile:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $opcognome." ".$opnome; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Ruolo:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $opruolo; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Indirizzo:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $opvia; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Cap:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $opcap; ?></span>
      </div>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Città:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $opcitta; ?></span>
    </td>
  </tr>
  
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Provincia:</label><br>
      <span ><?php echo $opprov; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Regione:</label><br>
      <span ><?php echo $regione; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Telefono:</label><br>
      <span ><?php echo $optelefono; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Cell.:</label><br>
      <span ><?php echo $opcell; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Login:</label><br>
      <span ><?php echo $oplogin; ?></span>
    </td>
  </tr>
  
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Password:</label><br>
      <span ><?php echo $oppassword; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Profilo 1:</label><br>
      <span ><?php echo $opprofilo1; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Profilo 2:</label><br>
      <span ><?php echo $opprofilo2; ?></span>
    </td>
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Pofilo 3.:</label><br>
      <span ><?php echo $opprofilo3; ?></span>
    </td>
  </tr>
  


  
</table>
<? } ?>

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