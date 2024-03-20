<?php

?>
<script>
var italianTeams = [];

function autoComplete(){
         $("#cliente").autocomplete({
			source: italianTeams
		 });
          $("#commessa").autocomplete({
			source: italianTeams
		 });
}

function Ricercacliente(){
	var valore = $('#cliente').val();
    console.log("valore:",valore);
	if(valore.length >= 1){
	 
	 $.ajax({
	         url: 'leggiunsolocliente.php',
	         type: 'POST',
	         dataType: 'json',
	         data: {"valore": valore},
	         success: function(risposta){
	         console.log("clienti:",risposta);   
	         },
	         error: function(error){
				console.log("ERRORE CHIAMATA");
	         }
	});
	
  }       
}
</script>
