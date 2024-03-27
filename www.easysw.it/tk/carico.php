<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"] == $_COOKIE['POMACLIENTLOGGED']) {
} else {
  $url_pagina_chiamante = "inizio.php";  ?>
  <script>
    top.window.location = '<? echo $url_pagina_chiamante; ?>';
  </script>
<?php  }

$login = $_REQUEST["login"];
include "conf_DB.php";
$anno = $_REQUEST["anno"];
#echo $login;
$ingranaggio = $_REQUEST["ingranaggio"];
$ingranaggiox = $_REQUEST["ingranaggiox"];
$progr = $_REQUEST["progr"];

if ($ingranaggio == 11) {
  $sql = "SELECT *  FROM  articolo where progr = '$progr'";
  #echo $sql;
  $rCount = 1;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($macrogruppo = $result->fetch_assoc()) {
      $progr = $macrogruppo["progr"];
      $denominazione = $macrogruppo["denominazione"];
      $dataoperazione = $macrogruppo["dataoperazione"];
      $codicexx = $macrogruppo["codice"];
      $ncliente = $macrogruppo["ncliente"];
      $ncostruttore = $macrogruppo["ncostruttore"];
      $cliprop = $macrogruppo["cliprop"];
      $tipo = $macrogruppo["tipo"];
      $gruppo = $macrogruppo["gruppo"];
      $marca = $macrogruppo["marca"];
      $modello = $macrogruppo["modello"];
      $volume = $macrogruppo["volume"];
      $peso = $macrogruppo["peso"];
      $note = $macrogruppo["note"];
    }
  }
  #$ingranaggio="";
}
#echo "progr. ".$progr;
?>

<head>
  <meta http-equiv="Content-Language" content="it">
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <title>inserimento documenti</title>
  <?php include("risorsePrincipali.php"); ?>

  <? #include('css_definitions_new.php'); 
  ?>


  <script>
    /*$(document).ready(function() {
    var table = $('#example').DataTable(
	{
	"paging": true,
	"order": [[ 0, "desc" ]],
	"lengthMenu": [ [-1, 10, 25, 50 ], ["Tutti i", 10, 25, 50 ] ],
	"language": {"search": "Cerca:", "lengthMenu": "Visualizza _MENU_ records per pagina",  "info": "Pagina _PAGE_ di _PAGES_",
				"paginate": {
				"first":      "Prima pagina",
				"last":       "Ultima pagina",
				"next":       "Prossima",
				"previous":   "Precedente"
    }}
	});
    new $.fn.dataTable.FixedHeader( table );
} );*/

    function frame() {
      var alt = $("#ingressiframe", window.parent.document).height() + 2000 + "px";
      var larg = $("#ingressiframe", window.parent.document).width() - 15 + "px";
      var table = $('#example').DataTable({

        "order": [
          [0, "desc"]
        ],
        "scrollCollapse": true,
        "paging": true,
        "lengthMenu": [
          [10, -1, 25, 50],
          [10, "Tutti", 25, 50]
        ],
        "language": {
          "search": "Cerca:",
          "lengthMenu": "Visualizza _MENU_ records per pagina",
          "info": "Pagina _PAGE_ di _PAGES_",
          "paginate": {
            "first": "Prima pagina",
            "last": "Ultima pagina",
            "next": "Prossima",
            "previous": "Precedente"
          }
        }
      });
      // new $.fn.dataTable.FixedHeader( table );
      //} );
    }

    function larghezza() {
      //var larg = $(window).width() - 350 + "px";
      var larg = $("#ingressiframe", window.parent.document).width() - 25 + "px";
      //var alt = $("#statiframe",  window.parent.document).height() - 100 + "px";
      //alert(alt);
      $(".statisti").css("width", larg);
      //$(".testa").css("width", larg);

    }
  </script>
  <style>
    .dataTables_filter {
      float: right !important;
    }
  </style>



  <SCRIPT type="text/javascript">
    function aggiorna(sel) {
      var f = document.form;
      f.sel_value.value = sel.options[sel.selectedIndex].value;
      f.sel_text.value = sel.options[sel.selectedIndex].text;
    }
  </SCRIPT>
  <script>
    $(function() {
      $('#popupDatepicker').datepick();
      $('#popupDatepicker1').datepick();
      $('#inlineDatepicker').datepick({
        onSelect: showDate
      });

    });

    function showDate(date) {
      alert('The date chosen is ' + date);
    }
  </script>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Verdana:ital,wght@0,200;0,300;0,500;1,100&display=swap');
</style>
<style>
  .tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 0px dotted black;
  }

  .tooltip .tooltiptext {
    visibility: hidden;
    width: 350px;
    height: 160;
    background-color: #c0bff8;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    border: 10px solid #99cf8c;
    box-shadow: 5px 10px 18px #1b5633;
    /* Position the tooltip */
    position: absolute;
    z-index: 1;
  }

  .tooltip:hover .tooltiptext {
    visibility: visible;
  }


  .tooltipx {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
  }

  .tooltipx .tooltiptext {
    visibility: hidden;
    width: 400px;
    height: 700;
    background-color: #feaaaa;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    border: 3px solid #b0adad;
    box-shadow: 5px 10px 18px #1b5633;
    /* Position the tooltip */
    position: absolute;
    z-index: 1;
  }

  .tooltipx:hover .tooltiptext {
    visibility: visible;
  }
</style>
<style>
  div#container {
    min-width: 650px;
    min-height: 500px;
    max-width: 700px;
    max-height: 1000px;
  }
</style>
<style>
  a {
    text-decoration: none;
    font-weight: normal;
    color: #000000;
  }

  a:hover {
    color: #0080FF;
  }

  .table6 {
    font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    text-align: left;
    border-collapse: separate;
    border-spacing: 5px;
    background: #ffffff;
    color: #656665;
    border: 16px solid #B2CAEA;
    border-radius: 20px;
  }

  .table6 th {
    font-size: 18px;
    padding: 10px;
  }
</style>



<script language="javascript">
  function xyz() {
    var dataRilascio = document.form.dataoperazione.value;
    var oggi = new Date();
    var giorno = oggi.getDate();
    var mese = oggi.getMonth() + 1;
    var anno = oggi.getYear();
    var datacompleta = giorno + "/" + mese + "/" + anno;

    //controllo formato del mese
    if (mese < 10) {
      mese = "0" + mese;
    }
    // controllo sul valore del mese
    if (mese > 12) {
      alert("Il mese inserito non č valido");
    }
    // controllo il formato del giorno
    if (giorno < 10) {
      giorno = "0" + giorno;
    }
    // controllo sul valore del giorno
    if (giorno > 31) {
      alert("Il giorno non č valido");
    }

    if (dataRilascio > datacompleta) {

      let confirmAction = confirm("ATTENZIONE la data ha un valore maggiore del " +
        datacompleta);
      if (confirmAction === true) {
        alert("Hai premuto OK");

      } else {
        dataoperazione.focus();
        return false;
      }
    }
  }
</script>
</head>

<?php

$login = $_REQUEST["login"];

if ($ingranaggio == 100) {

  $articolo = $_REQUEST["articolo"];
  $sql = "SELECT *  FROM  articolo where codice = '$articolo' ";
  #echo $sql; exit;
  $rCount = 1;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($macrogruppo = $result->fetch_assoc()) {
      $progrg = $macrogruppo["progr"];
      $denominazioneg = $macrogruppo["denominazione"];
      $dataoperazioneg = $macrogruppo["dataoperazione"];
      $codicexxg = $macrogruppo["codice"];
      $nclienteg = $macrogruppo["ncliente"];
      $ncostruttoreg = $macrogruppo["ncostruttore"];
      $clipropg = $macrogruppo["cliprop"];
      $tipog = $macrogruppo["tipo"];
      $gruppog = $macrogruppo["gruppo"];
      $marcag = $macrogruppo["marca"];
      $modellog = $macrogruppo["modello"];
      $volumeg = $macrogruppo["volume"];
      $pesog = $macrogruppo["peso"];
      $noteg = $macrogruppo["note"];
    }
  }

  $dataoperazione = $_REQUEST["dataoperazione"];
  $mittente = $_REQUEST["mittente"];
  $dataddt = $_REQUEST["dataddt"];
  $numddt = $_REQUEST["numddt"];
  $magazzino = $_REQUEST["magazzino"];
  $note = $_REQUEST["note"];
  $quantita = $_REQUEST["quantita"];
  $ticketcli = $_REQUEST["ticketcli"];
  $vettore = $_REQUEST["vettore"];
  $identrasp = $_REQUEST["identrasp"];
  $ticket = $_REQUEST["ticket"];
  $seriale = $_REQUEST["seriale"];
  $codartcli = $_REQUEST["codartcli"];
  $mittente = str_replace("'", "\'", $mittente);
  $note = str_replace("'", "\'", $note);
  $vettore = str_replace("'", "\'", $vettore);
  $identrasp = str_replace("'", "\'", $identrasp);
  $seriale = str_replace("'", "\'", $seriale);
  $codartcli = str_replace("'", "\'", $codartcli);
  $erroreriferimento = "";
  #echo $tipog; exit;

  if ($tipog != "Serializzato") {
    $errore = "";
    $sql1 = "SELECT * FROM progressivocarico  where progr = '1' ";
    #echo $sql1; 
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
      while ($macrogruppo = $result->fetch_assoc()) {
        $numero = $macrogruppo["numero"];
      }
    }
    $numero++;
    $sql = "UPDATE progressivocarico set 
numero = '$numero'
where 
progr = '1' 
";
    if ($conn->query($sql) === TRUE) {
    } else {
      echo "Error inserted record: " . $conn->error;
    }
    $codice = "MAG" . $numero;
    $sql = "INSERT INTO carico
( 
articolo,
quantita,                           
dataoperazione, 
mittente, 
dataddt, 
numddt, 
magazzino, 
note,
login,
ticket,
ticketcli,
vettore,
identrasp,
seriale,
codartcli) 
VALUES ( 
'$articolo',
'$quantita',           
'$dataoperazione', 
'$mittente', 
'$dataddt', 
'$numddt', 
'$magazzino', 
'$note',
'$login',
'$ticket',
'$ticketcli',
'$vettore',
'$identrasp',
'$seriale',
'$codartcli'
)";
    #echo $sql; exit;
    if ($conn->query($sql) === TRUE) {
      $errore = "Carico Memorizzato Correttamente";
      $ingranaggio = 101;
    } else {
      echo $sql . "Errore inserimento recoerd: " . $conn->error;
    }
  } else {
    #echo "inx ".$ingranaggiox;
    if ($ingranaggiox != 1) {
?>
      <br>
      <div align="center">
        <b>
          <font face="Arial" size="4" color="#476b5d">ARTICOLO DA CARICARE <? echo $articolo; ?></font>
          <br>
          <table align="center" id="example" class="display" cellspacing="0" align="left" style="width:99%; position:relative;">
            <thead class="intesta">
              <tr class="testa">

                <td style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center">
                  <font size="3">Codice
                </td>
                <td style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center">
                  <font size="3">Data Acq.
                </td>
                <td style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center">
                  <font size="3">Descrizione Articolo
                </td>
                <td style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center">
                  <font size="3">Tipologia Articolo
                </td>
                <td style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center">
                  <font size="3">Gruppo Articolo
                </td>
                <td style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center">
                  <font size="3">Marca
                </td>
                <td style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center">
                  <font size="3">Modello
                </td>
                <td style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center">
                  <font size="3">Part N° Costruttore
                </td>
                <td style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center">
                  <font size="3">Part N° Cliente
                </td>
                <td style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center">
                  <font size="3">Cliente Proprietario
                </td>

                <td colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center">
                  <font size="3">Qt.
                </td>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql = "SELECT *  FROM  articolo where codice = '$articolo' ";
              #echo $sql;
              $rCount = 1;
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                while ($macrogruppo = $result->fetch_assoc()) {
                  $progr = $macrogruppo["progr"];
                  $denominazione = $macrogruppo["denominazione"];
                  $dataoperazione = $macrogruppo["dataoperazione"];
                  $codice = $macrogruppo["codice"];
                  $ncliente = $macrogruppo["ncliente"];
                  $ncostruttore = $macrogruppo["ncostruttore"];
                  $cliprop = $macrogruppo["cliprop"];
                  $tipo = $macrogruppo["tipo"];
                  $gruppo = $macrogruppo["gruppo"];
                  $marca = $macrogruppo["marca"];
                  $modello = $macrogruppo["modello"];
                  $volume = $macrogruppo["volume"];
                  $peso = $macrogruppo["peso"];
                  $note = $macrogruppo["note"];
              ?>
                  <tr>
                    <td style=" border: 1px solid #e4e3e3; " align="center">
                      <font size="3"><?php echo $codice; ?>
                    </td>
                    <td style=" border: 1px solid #e4e3e3; " align="center">
                      <font size="3"><?php echo $dataoperazione; ?>
                    </td>
                    <td style=" border: 1px solid #e4e3e3; " align="left">
                      <font size="3"><?php echo $denominazione; ?>
                    </td>
                    <td style=" border: 1px solid #e4e3e3; " align="left">
                      <font size="3"><?php echo $tipo; ?>
                    </td>
                    <td style=" border: 1px solid #e4e3e3; " align="left">
                      <font size="3"><?php echo $gruppo; ?>
                    </td>
                    <td style=" border: 1px solid #e4e3e3; " align="left">
                      <font size="3"><?php echo $marca; ?>
                    </td>
                    <td style=" border: 1px solid #e4e3e3; " align="center">
                      <font size="3"><?php echo $modello; ?>
                    </td>
                    <td style=" border: 1px solid #e4e3e3; " align="center">
                      <font size="3"><?php echo $ncostruttore; ?>
                    </td>
                    <td style=" border: 1px solid #e4e3e3; " align="center">
                      <font size="3"><?php echo $ncliente; ?>
                    </td>
                    <td style=" border: 1px solid #e4e3e3; " align="center">
                      <font size="3"><?php echo $cliprop; ?>
                    </td>
                    <td style=" border: 1px solid #e4e3e3; " align="center">
                      <font size="3"><?php echo $quantita ?>
                    </td>

                  </tr>

              <?php
                }
              }

              ?>
          </table>
          <br>
      </div>
      <div align="center">

        <p>
          <font face="Arial" size="4" color="#476b5d">Memorizzazione Seriali</font>
        </p>
        <form action="javascript:void(0);">

          <table class="table-form" style="width:50%;">
            <tr>
              <td>
                <div id="campi">
                  <!-- Qui verranno aggiunti i campi -->
                </div>

              <td align="center" valign="bottom">
                <div align="center">                  
                  <button type="submit" onclick="aggiungiCampo()" class="btn btn-success">+</button>
                  <button type="button" onclick="rimuoviCampo()" class="btn btn-success" style="background-color: #cc0000;">-</button>
                </div>
              </td>
            </tr>
            <tr>
              <td align="center">
                <div align="center">
                  <input type="hidden" name="ingranaggio" id="input-ingranaggio" value="100" />
                  <input type="hidden" name="ingranaggiox" id="input-ingranaggiox" value="1" />
                  <input type="hidden" name="articolo" id="input-articolo" value="<? echo $articolo; ?>" />
                  <input type="hidden" name="login" id="input-login" value="<?php echo $login; ?>" />
                  <input type="hidden" name="quantitaseriali" id="input-quantitaseriali" value="<?php echo $quantita; ?>" />
                  <button type="button" id="memButton" onClick="inviaValori()" class="btn btn-success disabled">Memorizza</button>
                </div>
              </td>
              <td>
              </td>
            </tr>
          </table>
        </form>
        <br><br><br><br> <br><br><br><br><br><br><br><br> <br><br><br><br> <br><br><br><br><br><br><br><br>
        <script>
          var riga = 0;
          var max = <? echo $quantita; ?>;

          function inviaValori() {
            var valori = [];
            var link = "?campi="
            for (var a = 0; a < riga; a++) {
              //valori[a] = $("#seriale-" + a).val();
              if (a == 0) {
                link = link + $("#seriale-" + a).val();
              } else {
                link = link + "§" + $("#seriale-" + a).val();
              }

            }
            var ingranaggio = $("#input-ingranaggio").val();
            var ingranaggiox = $("#input-ingranaggiox").val();
            var articolo = $("#input-articolo").val();
            var login = $("#input-login").val();
            var quantitaseriali = $("#input-quantitaseriali").val();
            link = link + "&ingranaggio=" + ingranaggio;
            link = link + "&ingranaggiox=" + ingranaggiox;
            link = link + "&articolo=" + articolo;
            link = link + "&login=" + login;
            link = link + "&quantitaseriali=" + quantitaseriali;
            console.log(link);
            window.open(link, "_parent");
          }

          function addRiga() {
            if (riga < max) {
              var div = document.createElement("div");
              var num = riga + 1;
              div.innerHTML = 'Seriale ' + num + ' <input type="text" maxlength="200"  size="38" class="rigaNew" id="seriale-' + riga + '"  oninput="attivaMem(' + riga + ')" name="campo-' + riga + '" value="" >';
              document.getElementById("campi").appendChild(div);
              $("#seriale-" + riga).focus();
              riga++;
            }
          }

          function aggiungiCampo() {
            var input = null;
            if (riga > 0) {
              var idInput = riga - 1;
              input = $("#seriale-" + idInput).val();

            }

            if ((riga > 0) && !input) {
              console.log("Non puoi inserire altri seriali se non inserisci l'ultimo");
            } else if (riga < max) {
              addRiga();
            } else {
              console.log("Non puoi inserire altri campi, hai superato il massimo dei seriali inseribili");
            }
          }

          aggiungiCampo();

          function attivaMem(id) {
            var idNew = id + 1;

            if (idNew == max) {
              var input = $("#seriale-" + id).val();

              if (input.length > 0) {
                $("#memButton").removeClass("disabled");
              } else {
                $("#memButton").addClass("disabled");
              }
            }
          }

          function rimuoviCampo() {
            var campi = document.getElementById("campi").children;
            if (campi.length > 0) {
              campi[campi.length - 1].remove();
              riga = riga - 1;
              $("#memButton").addClass("disabled");
            }
          }
        </script>

  <?    } else {
      #echo "articolo ".$articolo;
      $tabellaseriali = $_REQUEST["campi"];
      $tabellaserialix=explode("§",$tabellaseriali);
      $numser = $_REQUEST["quantitaseriali"];
      for ($i = 1; $i < $numser; $i++) {
    echo $tabellaserialix[$i]."<br>";
      }

      #print_r($tabellaseriali);
      exit;
    }
  }

  exit;
}    ?>











  <script type="text/javascript">
    function controllo() {
      with(document.modulo) {



        if (dataoperazione.value == "") {
          alert("Error: manca DATA DEL DOCUMENTO");
          dataoperazione.focus();
          return false;
        }

        if (articolo.value == "") {
          alert("Error: manca MANCA ARTICOLO");
          articolo.focus();
          return false;
        }
        if (mittente.value == "") {
          alert("Error: manca IL MITTENTE");
          mittente.focus();
          return false;
        }
        if (quantita.value == "0") {
          alert("Error: manca Quantita'");
          quantita.focus();
          return false;
        }

        if ((seriale.value != "") && (quantita.value != 1)) {
          alert("Error: incongruenza tra ATTENZIONE NON E' POSSIBILE AVERE PIU' PEZZI CON LO STESSO SERIALE");
          quantita.focus();
          return false;
        }

      }
    }

    $(function() {
      $('#dateOp').datepicker({
        language: "it",
        autoclose: true,
        todayHighlight: true,
        dateFormat: 'dd/mm/yy'
      });
    });
  </script>

  <body text="#000000" onLoad="larghezza(); frame();">
    <br>
    <p align="center"><b>
        <font face="Arial" size="5" color="#993300">MOVIMENTO CARICO MAGAZZINO</font>
      </b></p>
    <div align="center">
      <? if ($ingranaggio == 11) { ?>
        <b>
          <font face="Arial" size="4" color="#476b5d">ARTICOLO SELEZIONATO</font>
        <? } else {  ?>
          <b>
            <font face="Arial" size="4" color="#993300">SELEZIONA ARTICOLO</font>
          <? } ?>
          <table align="center" id="example" class="display" cellspacing="0" align="left" style="width:99%; position:relative;">
            <thead class="intesta">
              <tr class="testa">

                <td style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center">
                  <font size="3">Codice
                </td>
                <td style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center">
                  <font size="3">Data Acq.
                </td>
                <td style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center">
                  <font size="3">Descrizione Articolo
                </td>
                <td style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center">
                  <font size="3">Tipologia Articolo
                </td>
                <td style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center">
                  <font size="3">Gruppo Articolo
                </td>
                <td style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center">
                  <font size="3">Marca
                </td>
                <td style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center">
                  <font size="3">Modello
                </td>
                <td style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center">
                  <font size="3">Part N° Costruttore
                </td>
                <td style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center">
                  <font size="3">Part N° Cliente
                </td>
                <td style=" border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center">
                  <font size="3">Cliente Proprietario
                </td>

                <td colspan="1" style="  border: 1px solid black;background-color: #476b5d; color: #ffffff; " align="center">
                  <font size="3">Sel.
                </td>
              </tr>
            </thead>
            <tbody>
              <?php
              if ($ingranaggio == 11) {
                $sql = "SELECT *  FROM  articolo where codice = '$codicexx' ";
              } else {
                $sql = "SELECT *  FROM  articolo ORDER BY codice";
              }
              #echo $sql;
              $rCount = 1;
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                while ($macrogruppo = $result->fetch_assoc()) {
                  $progr = $macrogruppo["progr"];
                  $denominazione = $macrogruppo["denominazione"];
                  $dataoperazione = $macrogruppo["dataoperazione"];
                  $codice = $macrogruppo["codice"];
                  $ncliente = $macrogruppo["ncliente"];
                  $ncostruttore = $macrogruppo["ncostruttore"];
                  $cliprop = $macrogruppo["cliprop"];
                  $tipo = $macrogruppo["tipo"];
                  $gruppo = $macrogruppo["gruppo"];
                  $marca = $macrogruppo["marca"];
                  $modello = $macrogruppo["modello"];
                  $volume = $macrogruppo["volume"];
                  $peso = $macrogruppo["peso"];
                  $note = $macrogruppo["note"];
              ?>
                  <tr>
                    <td style=" border: 1px solid #e4e3e3; " align="center">
                      <font size="3"><?php echo $codice; ?>
                    </td>
                    <td style=" border: 1px solid #e4e3e3; " align="center">
                      <font size="3"><?php echo $dataoperazione; ?>
                    </td>
                    <td style=" border: 1px solid #e4e3e3; " align="left">
                      <font size="3"><?php echo $denominazione; ?>
                    </td>
                    <td style=" border: 1px solid #e4e3e3; " align="left">
                      <font size="3"><?php echo $tipo; ?>
                    </td>
                    <td style=" border: 1px solid #e4e3e3; " align="left">
                      <font size="3"><?php echo $gruppo; ?>
                    </td>
                    <td style=" border: 1px solid #e4e3e3; " align="left">
                      <font size="3"><?php echo $marca; ?>
                    </td>
                    <td style=" border: 1px solid #e4e3e3; " align="center">
                      <font size="3"><?php echo $modello; ?>
                    </td>
                    <td style=" border: 1px solid #e4e3e3; " align="center">
                      <font size="3"><?php echo $ncostruttore; ?>
                    </td>
                    <td style=" border: 1px solid #e4e3e3; " align="center">
                      <font size="3"><?php echo $ncliente; ?>
                    </td>
                    <td style=" border: 1px solid #e4e3e3; " align="center">
                      <font size="3"><?php echo $cliprop; ?>
                    </td>
                    <td style=" border: 1px solid #e4e3e3; " align="center"><a href="?login=<?php echo $login; ?>&progr=<?php echo $progr; ?>&ingranaggio=11&codice=<?php echo $codice; ?>"><img border="0" background="btn1.gif" src="pencil.png" width="25" height="25"></a></td>

                  </tr>

              <?php
                }
              }
              ?>
          </table>
          <br>


    </div>
    <? if ($ingranaggio == 11) { ?>
      <div style="margin:30px 0;">


        <table class="table-form">

          <form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data">
            <tr>
              <td colspan="3"><b>
                  <font face="Arial" size="4" color="#993300">
                    &nbsp;
                    <?php echo $errore;
                    if ($ingranaggio == 101) {
                      echo " - Codice assegnato " . $codice;
                    } ?>
                  </font>
              </td>
            </tr>
            <tr>
              <? $dataoperazione = date("d/m/Y"); ?>
              <td colspan="1">
                <label>Data Movimento</label><br>
                <input class="required" maxlength="10" type="text" name="dataoperazione" id="dateOp" value="<?php echo $dataoperazione; ?>" size="10">
                <!--<div class="input-group date" id="dateOp">
                <input type="text" class="form-control" id="date"/>
                <span class="input-group-append">
                <span class="input-group-text bg-light d-block">
                    <i class="fa fa-calendar"></i>
                </span>
                </span>
            </div>-->
              </td>

              <td>
                <label>Articolo:</label><br>
                <input class="required" type="text" name="articolo" value="<?php echo $codicexx; ?>" maxlength="60" size="60">
              </td>
              <td colspan="1">
                <label>Quantita:</label><br>
                <input class="required" type="number" name="quantita" value="1" maxlength="8" size="60">
              </td>
            </tr>
            <tr>
              <td>
                <label>Mittente:</label><br>
                <input class="required" type="text" name="mittente" maxlength="200" size="60">
              </td>
              <td>
                <label>Data DDT:</label><br>
                <input type="text" name="dataddt" maxlength="10" size="10">
              </td>
              <td>
                <label>Numero DDT: </label><br>
                <input type="text" name="numddt" maxlength="60" size="60">
              </td>
            </tr>

            <tr>
              <td>
                <label>Vettore:</label><br>
                <input type="text" name="vettore" maxlength="200" size="60">
              </td>
              <td>
                <label>Identificativo Trasporto:</label><br>
                <input type="text" name="identrasp" maxlength="100" size="60">
              </td>
              <td>
                <label>Codice Articolo Cliente:</label><br>
                <input type="text" name="codartcli" maxlength="100" size="60">
              </td>

            </tr>
            <tr>

              <td>
                <label>Magazzino in Ingresso:</label><br>
                <select size="1" name="magazzino" style="background-color: #ebf8fb">
                  <?php
                  $sql = "SELECT *  FROM  magazzino ";
                  #echo $sql;
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                    while ($macrogruppo = $result->fetch_assoc()) {
                      $denominazione = $macrogruppo["denominazione"];
                      $codicemag = $macrogruppo["codice"];
                  ?>
                      <option value="<? echo $codicemag; ?>"><?php echo $codicemag . " - " . $denominazione; ?></option>
                  <?php  }
                  } ?>
                </select>
              </td>

            </tr>

            <tr>
              <td colspan="3">
                <label>Note:</label><br>
                <textarea name="note" cols="10" rows="3"></textarea>
              </td>
            </tr>


            <tr>
              <td colspan="3" style="text-align:center">
                <input type="hidden" name="ingranaggio" value="100" />
                <input type="hidden" name="login" value="<?php echo $login; ?>" />
                <button type="submit" class="btn btn-success">Memorizza</button>
              </td>

            </tr>
          </form>
        </table>
      <? } ?>
      <br><br><br><br><br><br><br><br><br>

      </div>
  </body>

  </html>