<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>


<script src="../css/lib/jquery-latest.js"></script>
<script src="../css/lib/jquery.effects.core.js"></script>


<script type="text/javascript">
$(document).ready(function() {
$("#input_form").submit(function(event){ //quando avviene evento submit fai questa funzione
event.preventDefault();//blocco la propagazione del l'evento
var name = $("#nome").val();//preleva l'attributo value cioè quello che digita l'utente
var surname = $("#cognome").val();
$.post("ricavo_dati_da_form_ajax.php", //invio richiesta a questo file.php
{nome:name, cognome:surname}, //passandoci questi dati prelevati poco prima

/*questa funzione ci dice cosa vogliamo fare con la risposta che
ci ha inviato il server e che sarà contenuta in data*/ 
function(data){
$("div#result").html(data); //inserimeno nel div cpn id result
});
/*utilizziamo i form, dobbiamo sempre ricordare di
interrompere l’esecuzione del submit con return false*/ 
return false;
});//chiudo il metodo $.post



});//chiudo parentesi di script javascript
</script>


</head>
<body>


<form id="input_form" method="POST" action="/">
Inserisci il nome:<br>
<input type="text" name="nome" id="nome"><br>
Inserisci il cognome:<br>
<input type="text" name="cognome" id="cognome"/><br><br>
<input type="submit" value="invia">
</form>

<div id="result"></div> 
<!-- il punto in cui verranno inseriti i risultati dell’elaborazione
del server -->


</body>
</html>