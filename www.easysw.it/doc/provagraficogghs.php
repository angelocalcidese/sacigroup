<?php

include "conf_DB.php";
$sql1 = "SELECT a.sesso, b.continente, COUNT( b.continente ) AS numero
FROM soci a
JOIN continenti b ON a.luogo_nascita = b.nazione
GROUP BY a.sesso, b.continente";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{$nazione = $macrogruppo["continente"];
     $numero = $macrogruppo["numero"];
     $sesso = $macrogruppo["sesso"];
     if ($sesso=="F"){
    $values[1][$nazione]=$numero; }
    else
    {
    $values[0][$nazione]=$numero; }
    } }

require_once 'SVGGraph/autoloader.php';

$settings = array(
  'back_colour' => '#eee',
  'stroke_colour' => '#000',
  'back_stroke_width' => 0,
  'back_stroke_colour' => '#eee',
  'axis_colour' => '#333',
  'axis_overlap' => 2,
  'axis_font' => 'Georgia',
  'axis_font_size' => 10,
  'grid_colour' => '#666',
  'label_colour' => '#000',
  'pad_right' => 20,
  'pad_left' => 20,
  'link_base' => '/',
  'link_target' => '_top',
  'project_angle' => 45,
  'minimum_grid_spacing' => 20,
  'label_h' => "ROSSO Donne / GIALLO uomini",
  'label_font_size' => 15
);


#$s2=43;
#$values=$valuesx;

#$values = array( 
# array(
# 'Inc.Pizzeria' => $a1, 'Inc.Ristorante' => $a2, 'Spese' => $a3
 
#  )
#);
#echo '<pre>'.print_r( $values, true ).'</pre>'; exit;

$colours = array(
  array('red'), array('yellow')
);
$links = array(
  'Dough' => 'jpegsaver.php', 'Ray' => 'crcdropper.php',
  'Me' => 'svggraph.php'
);

$graph = new Goat1000\SVGGraph\SVGGraph(700, 400, $settings);

$graph->colours($colours);
$graph->values($values);
$graph->links($links);
$graph->render('StackedBar3DGraph');

?>