<html>
<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>ricerca luogo</title>
<link href="./datapilcker3/jquery.datepick.css" rel="stylesheet">
<link href="./css/jquery.dataTablesBrown.css" rel="stylesheet">
<link href="./css/esponiluogo.css" rel="stylesheet">


<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.fixedHeader.js"></script>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
</head>
<script type="text/javascript">
		
		function writeLocation(){ 
      var insegna = $("#insegna").val();
      var ragsoc = $("#ragsoc").val();
      var indirizzo = $("#indirizzo").val();
      var cap = $("#cap").val();
      var prov = $("#prov").val();
      var citta = $("#citta").val();
      var contatto = $("#contatto").val();
      var telefono = $("#tel").val();
      var login = $("#login").val();
      var note = $("#note").val();

     // table.row.add(([prov,insegna,prov,ragsoc, indirizzo, cap, citta, telefono]).draw();

      if(insegna != "" || ragsoc != ""){
        $.ajax({
          url : "scriviLuogo.php",
          type: 'POST',
          dataType: 'json',
          data: {insegna, ragsoc, indirizzo, cap, prov, citta, contatto, telefono, note},
            success : function (result) {
                console.log("ho scritto il nuovo luogo");
                readLocation();
                closeAddLocation();
            },
            error : function (errori) {
                alert("E' evvenuto un errore. Il stato della chiamata: ");
            }
        });
      } else {
        alert("inserire i campi richiesti");
      }
      
    } 
    
    var table=undefined;
    function paginationAjax(result){

      table = $('#example1').DataTable({
                data: result,
                columns: [
                    { data: 'prov' },
                    { data: 'insegna' },
                    { data: 'ragsoc' },
                    { data: 'indirizzo' },
                    { data: 'cap' },
                    { data: 'citta' },
                    { data: 'contatto' },
                    { data: 'telefono' },
                    { data: 'note' },
                    { data: null, 
                      title: 'Action', 
                      wrap: true, 
                      "render": function () { return '<div class="btn-group"> <button type="button"  onclick=" rowDataGet (this.id) " class="btn btn-light">Sel</button></div>' } },
             
             ]
         }).data;
      
         return table
     }
      
     function rowDataGet () {
            temp=undefined;
        
            //for row data
          
            $('#example1 tbody').on( 'click', 'tr', function () {
            temp= $('#example1').DataTable().row( this ).data() ;
            console.log( "TEMP:", temp );
        
            $("#insegnaF").val(temp.insegna);
            $("#cittaF").val(temp.citta);
            $("#contattoF").val(temp.contatto);
            $("#ragsocF").val(temp.ragsoc);
            $("#indirizzoF").val(temp.indirizzo);
            $("#capF").val(temp.cap);
            $("#telefonoF").val(temp.telefono);
            $("#noteF").val(temp.note);
            $("#provF").val(temp.prov);
			      $("#progrnew").val(temp.progr);
			      $("#progrId").text("#" + temp.progr);
        } );

        $('#exampleModal').modal('toggle');
     }
     

    function readLocation(){
      $.ajax({
        url : "leggiLuogo.php",
        type: 'GET',
	      dataType: 'json',
          success : function (result) {
              for(var a=0; a < result.length; a++){
                result[a].id = a;
              }
              console.log(result);
              $('#example1').DataTable().destroy();
              paginationAjax(result);
          },
          error : function (errori) {
              console.log("Chiamata lettura luoghi non è andata a buon fine");
          }
      });
    }
    
    function actionRow(){
      console.log(table.row( $(this).parents('tr')[0]));
      //alert("test");
    }

    $( document ).ready(function() {
      readLocation();
    });

   function addLocationForm(){
      $(".formAddLoc").show();
      $(".butAdd").hide();
   }
   function azzeraCampiLoc(){
      $("#insegna").val("");
      $("#citta").val("");
      $("#contatto").val("");
      $("#ragsoc").val("");
      $("#indirizzo").val("");
      $("#cap").val("");
      $("#tel").val("");
      $("#prov").val("");
   }
   function closeAddLocation(){
      $(".formAddLoc").hide();
      $(".butAdd").show();
      azzeraCampiLoc();
   }
</script>

<body text="#000000">
<button type="button" class="btn btn-info butAdd center mb-10" onClick="addLocationForm()"> + Aggiungi Luogo</button>

<div align="center" class="formAddLoc" style="display:none">
<h3>Aggiungi Luogo</h3>

<form method="POST" name="modulo"  enctype="multipart/form-data">
    <table  class="table modulo-add"> 
          <tr>
            <td colspan="1">
              <label>Insegna:</label><br>
              <input type="text" name="insegna"  id="insegna" maxlength="200">
            </td>
            <td colspan="1">
                <label>Ragione Sociale:</label><br>
                <input type="text" name="ragsoc"  id="ragsoc" maxlength="200">
            </td>
            <td colspan="1">
              <label>Indirizzo:</label><br>
              <input type="text" name="indirizzo"  id="indirizzo" maxlength="200">
            </td>
          </tr>
          <tr>
            <td colspan="1">
              <label>Cap:</label><br>
              <input type="text" name="cap"  id="cap" maxlength="5">
            </td>
            <td colspan="1">
              <label> Provincia:</label><br>
              <input type="text" name="prov" id="prov" maxlength="50">
              
            </td>
            <td colspan="1">
              <label>Città:</label><br>
              <input type="text" name="citta"  id="citta" maxlength="200">
            </td>
          </tr>
          <tr>
            <td colspan="1">
              <label>Contatto:</label><br>
              <input type="text" name="contatto"  id="contatto" maxlength="200">
            </td>
            <td colspan="1">
              <label>Telefono:</label><br>
              <input type="text" name="telefono" id="tel" maxlength="200">
            </td>
            <td colspan="1">
              <label>Note/Orari:</label><br>
              <input type="text" name="note" id="tel" maxlength="200">
            </td>
          </tr>
    </table>     
 <input type="hidden" name="login" value="<?php echo $login; ?>" />
  <button type="button" onClick="writeLocation()" class="btn btn-primary">Memorizza nuovo luogo intervento</button> 
  <button type="button" onClick="closeAddLocation()" class="btn btn-secondary">Annulla</button>      
</div>              
</form>                      

<table id="example1" class="display" style="width:100%">
        <thead>
            <tr style="background-color: #476b5d; color: #FFF; ">
                <th>Prov.</th>
                <th>Insegna</th>
                <th>Rag.Soc</th>
                <th>Indirizzo</th>
                <th>Cap</th>
                <th>Città</th>
                <th>Contatto</th>
                <th>Telefono</th>
                <th>Note/Orari</th>
                <th>Sel</th>
            </tr>
        </thead>
        
    </table>
 
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>      
</div>

<script>
function myFunction(url) {
window.open(url, '_blank');
}
</script>
<script>
function myFunctiony(url) {
window.open(url, '_self');
}

/*$( "tbody tr" ).on( "click", function() {
      alert( "Handler for `click` called." );
    } );*/

   
</script>

</body>

</html>