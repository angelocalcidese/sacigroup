<?php
$campo1=$_REQUEST["campo-0"];
echo $campo1;
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form con Campi in Progress</title>
</head>
<body>

<h2>Memorizzazione Seriali</h2>

<form action="" method="POST" id="myForm">
  
  <div id="campi">
    <!-- Qui verranno aggiunti i campi -->
  </div>
  
  <button type="button" onclick="aggiungiCampo()" class="btn btn-success">+</button>
  <button type="button" onclick="rimuoviCampo()" class="btn btn-success">Rimuovi Seriale Battuto</button>
  
                <input type="hidden" name="ingranaggio" value="100" />
                <input type="hidden" name="ingranaggiox" value="1" />
                <input type="hidden" name="articolo" value="<? echo $articolo; ?>" />
                <input type="hidden" name="login" value="<?php echo $login; ?>" />
                <button type="submit" class="btn btn-success">Memorizza</button>  
</form>

<script>
var riga=0;
var max=10;


function aggiungiCampo() {
    var input = null;
    if(riga > 0){  
    var idInput = riga - 1;
        input = $("#seriale-" + idInput).val();
    }
    
    if((riga > 0) && !input){
        console.log("Non puoi inserire altri seriali se non inserisci l'ultimo");
    } else if(riga < max){
        var div = document.createElement("div");
        var num = riga + 1;
        div.innerHTML = num +' <input type="text" maxlength="200"  size="38" id="seriale-'+riga+'" name="campo-'+riga+'" value="" placeholder="Seriale">';
        document.getElementById("campi").appendChild(div);
        riga++;
    } else {
        console.log("Non puoi inserire altri campi, hai superato il massimo dei seriali inseribili");
    }
}

function rimuoviCampo() {
  var campi = document.getElementById("campi").children;
  if (campi.length > 0) {
    campi[campi.length - 1].remove();
    riga=riga-1;
  }
}
</script>
  
</body>
</html>