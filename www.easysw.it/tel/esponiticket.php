<?
$sql = "SELECT *  FROM  tk where  numero  = '$numero' " ;  
  #echo $sql;
  $rCount = 1;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())	
    { 
      $progrxxy = $macrogruppo["progr"];
      $numeroxx = $macrogruppo["numero"];

      $clientexx = $macrogruppo["cliente"];
      $commessaxx = $macrogruppo["commessa"];
      $attivita = $macrogruppo["attivita"];

      $tipointervento = $macrogruppo["tipointervento"];
      $apparato = $macrogruppo["apparato"];
      $priorita = $macrogruppo["priorita"];


	  $spedizione = $macrogruppo["spedizione"];
	  $notesla = $macrogruppo["notesla"];
	  $nota = $macrogruppo["nota"];
	  $notaapp = $macrogruppo["notaapp"];
      $impatt = $macrogruppo["impatt"];
      $abbona = $macrogruppo["abbona"];
      $imppass = $macrogruppo["imppass"];
      $notaamm = $macrogruppo["notaamm"];
      
      $intervento = $macrogruppo["intervento"];
  $sqlx = "SELECT *  FROM  tkluogo where  numero  = '$numeroxx' " ;  
  #echo $sql;
  $rCount = 1;
  $resultx = $conn->query($sqlx);
  if ($resultx->num_rows > 0) {
    while($macrogruppox = $resultx->fetch_assoc())	
    {   
      $insegna = $macrogruppox["insegna"];
      $ragsoc = $macrogruppox["ragsoc"];
      $indirizzo = $macrogruppox["indirizzo"];
      $cap = $macrogruppox["cap"];
      $prov = $macrogruppox["prov"];
      $citta = $macrogruppox["citta"];
      $contatto = $macrogruppox["contatto"];
      $telefono = $macrogruppox["telefono"];
      $note = $macrogruppox["note"];
      }}
  $sqlx = "SELECT *  FROM  clienti where  codice  = '$clientexx' " ;  
  #echo $sql;
  $rCount = 1;
  $resultx = $conn->query($sqlx);
  if ($resultx->num_rows > 0) {
    while($macrogruppox = $resultx->fetch_assoc())	
    {   
      $ragsocclixx = $macrogruppox["ragsoc"];
      $codxx = $macrogruppox["codice"];
      $clienteintero=$codxx." - ".$ragsocclixx;
      }}     
  $sqlx = "SELECT *  FROM  commesse where  commessa  = '$commessaxx' " ;  
  #echo $sql;
  $rCount = 1;
  $resultx = $conn->query($sqlx);
  if ($resultx->num_rows > 0) {
    while($macrogruppox = $resultx->fetch_assoc())	
    {   
      $nomecommessaxx = $macrogruppox["nomecommessa"];
      $commessa=$commessaxx." - ".$nomecommessaxx;
      }}        
}}
?>
<table class="expose-table">
  <tr>
    <th colspan="3"> 
      <label>Identificazione:</label>
    </th>
  </tr>
   <tr>
    <td colspan="1">
      <label style="color: #8e8b8b;" style="color: #8e8b8b;">Cliente:</label style="color: #8e8b8b;"><br>
      <span> <?php echo $cliente; ?></span> 
    </td> 
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Commessa:</label><br>
      <span> <?php echo $commessa; ?></span>
    </td>            
  </tr>
  <tr>
    <td colspan="1">
      <label style="color: #8e8b8b;">Attività:</label><br>
      <span> <?php echo $attivita; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">N. Ticket Cliente:</label><br>
      <span> <?php echo $ticketcli; ?></span>
    </td>       
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Data di aperura:</label><br>
      <span> <?php echo $datainizio; ?></span>
		</td>            
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Tipo intervento:</label><br>
      <span> <?php echo $tipointervento; ?></span>
    </td> 
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Apparato:</label><br>
      <span> <?php echo $apparato; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Seriale:</label><br>
      <span> <?php echo $seriale; ?></span>
    </td>
  </tr>
  
  
  <? //if($priorita==""){$priorita="verde";} ?>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Priorità alta:</label><br>
      <?php if ($priorita=="rosso"){
        echo '<i class="fa-solid fa-circle" style="color:red;padding: 10px 40px;font-size: 27px;"></i>';
      } else {
        echo '<i class="fa-solid fa-circle" style="color:#E9E9E9;padding: 10px 40px;font-size: 27px;"></i>';
      } ?>
    </td> 
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Priorità media:</label><br>
      <?php if ($priorita=="giallo"){
        echo '<i class="fa-solid fa-circle" style="color:yellow;padding: 10px 40px;font-size: 27px;"></i>';
      } else {
        echo '<i class="fa-solid fa-circle" style="color:#E9E9E9;padding: 10px 40px;font-size: 27px;"></i>';
      } ?>
      </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Priorità Normale:</label><br>
      <?php if ($priorita=="verde"){
        echo '<i class="fa-solid fa-circle" style="color:green;padding: 10px 40px;font-size: 27px;"></i>';
      } else {
        echo '<i class="fa-solid fa-circle" style="color:#E9E9E9;padding: 10px 40px;font-size: 27px;"></i>';
      } ?>
      </td>
  </tr>
  
  
  
  <tr>
    <th colspan="3"> 
      <label>Luogo intervento: 
      
      
      </label> 
    </th>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Insegna:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $insegna; ?></span>
    </td>
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Ragione Sociale:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $ragsoc; ?></span>
    </td>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Indirizzo:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $indirizzo; ?></span>
    </td>
    <td colspan="1"> 
      <div style="width:49%; float:left">
        <label style="color: #8e8b8b;">Cap:</label style="color: #8e8b8b;"><br>
        <span ><?php echo $cap; ?></span>
      </div>
      <div style="width:49%; float:right">
        <label style="color: #8e8b8b;">Prov:</label style="color: #8e8b8b;"><br>
        <span ><?php echo $prov; ?></span>
      </div>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Città:</label style="color: #8e8b8b;"><br>
      <span ><?php echo $citta; ?></span>
    </td>
  </tr>
  <tr>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Telefoni:</label><br>
      <span ><?php echo $telefono; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Note/Orari:</label><br>
      <span ><?php echo $note; ?></span>
    </td>
    <td colspan="1"> 
      <label style="color: #8e8b8b;">Contatto:</label><br>
      <span ><?php echo $contatto; ?></span>
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
      <span> <?php echo $intervento; ?></span>
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
      <span> <?php echo $serialeparte; ?></span>
    </td>
    <td colspan="2"> 
      <label style="color: #8e8b8b;">Nome Parte:</label><br>
      <span> <?php echo $nomeparte; ?></span>
    </td>
  </tr>
  <tr> 
    <td colspan="3"> 
      <label style="color: #8e8b8b;"<b>Nota per la spedizione parti di ricambio:</label style="color: #8e8b8b;"><br>
      <span> <? echo $spedizione; ?></span>
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
      <span><?php echo $notesla; ?></span>
  </tr>
  
  

  
 
</table>
<br><br><br><br><br>