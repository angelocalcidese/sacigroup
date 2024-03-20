<?php
// Data e ora iniziali
$dataOraIniziale = new DateTime("2022-01-01 12:00:00");

// Data e ora attuali
$dataOraAttuale = new DateTime(); // Questo utilizza l'istante attuale

// Calcola la differenza
$differenza = $dataOraAttuale->diff($dataOraIniziale);

// Ottenere la differenza totale in minuti
$differenzaInMinuti = $differenza->days * 24 * 60 + $differenza->h * 60 + $differenza->i;

echo "Differenza totale in minuti: $differenzaInMinuti minuti";
?>
