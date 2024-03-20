<?php

include "conf_DB.php";
$sql1 = "SELECT a.hh, COUNT( a.hh ) AS numero FROM contabacheca a GROUP BY a.hh  order by a.hh
";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{
    $oggix = $macrogruppo["oggix"];
     $numero = $macrogruppo["numero"];
     $hh = $macrogruppo["hh"];
     $values[0][$hh]=$numero;
     
    } }


require_once 'SVGGraph/autoloader.php';

$settings = [
  'auto_fit' => true,
  'back_colour' => '#fff',
  'back_stroke_width' => 0,
  'back_stroke_colour' => '#000',
  'show_data_labels' => true,
  'data_label_type' => [
    'plain', 'box', 'bubble', 'line', 'circle', 'square', 'linecircle',
    'linebox', 'linesquare', 'line2'
  ],
  'data_label_space' => 10,
  'data_label_back_colour' => [
    '#ccc', null, null, null, null, null, null, null, null, null
  ],
  'marker_size' => 3,
  'bar_space' => 1,
  'group_space' => 0,
  'show_tooltips' => false,
  'axis_font_size' => 20,
  'axis_overlap' => 2,
  'bar_space' => 20,
  'group_space' => 20,
  'label_colour' => '#000',
  'axis_font' => 'Arial',
  'axis_font_size' => 15,
  'data_label_padding' => 5,
  'data_label_round' => 4,
  'data_label_tail_length' => "auto",
  'data_label_tail_width' => 5,
  'data_label_font_size' => 40, 
  'label_h' => "ACCESSI ALLA BACHECA PER ORARIO",
  'label_font_size' => 20,
  'label_v' => "visite",
  'data_label_fill' => [
    ['#ccc','#fff','#ccc','h'],
  ],
  'data_label_outline_thickness' => 2,
  'data_label_position' => 'above',
  'data_label_tail_end' => 'filled',
  'data_label_tail_end_width' => 16,
  'grid_colour' => '#000' 
];

#$s2=43;
#$values=$valuesx;

#$values = array( 
# array(
# 'Inc.Pizzeria' => $a1, 'Inc.Ristorante' => $a2, 'Spese' => $a3
 
#  )
#);
#echo '<pre>'.print_r( $values, true ).'</pre>'; exit;

$colours = [ ['red', 'yellow'], ['blue', 'white'] ];
$links = array(
  'Dough' => 'jpegsaver.php', 'Ray' => 'crcdropper.php',
  'Me' => 'svggraph.php'
);

$graph = new Goat1000\SVGGraph\SVGGraph(700, 400, $settings);

$graph->colours($colours);
$graph->values($values);
$graph->links($links);
$graph->render('CylinderGraph');

?>