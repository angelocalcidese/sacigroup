<?
header('Content-Type: text/plain');

// Ottiene la stringa dal POST
$stringa = isset($_POST['stringa']) ? $_POST['stringa'] : '';

// Incrementa la stringa
#$stringa_incrementata = $stringa . '_incrementata';
$stringa++;
// Restituisce la stringa incrementata
echo $stringa;
 ?>           