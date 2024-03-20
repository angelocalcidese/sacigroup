<?php

include "conf_DB.php";
$sql1 = "SELECT count( distinct (luogo_nascita)) FROM soci ";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc()) 
		{$nazionalita = $macrogruppo["luogo_nascita"];
     
#     if ($acqspe=="A"){${'a'.$giorno}=$importo; }
#     if ($acqspe=="S"){${'s'.$giorno}=$importo; }
     
     
     if ($giorno==1 and $acqspe=="A"){$a1=$importo+$a1;} 
     if ($giorno==2 and $acqspe=="A"){$a2=$importo+$a2;} 
     if ($giorno==3 and $acqspe=="A"){$a3=$importo+$a3;}
     if ($giorno==4 and $acqspe=="A"){$a4=$importo+$a4;} 
     if ($giorno==5 and $acqspe=="A"){$a5=$importo+$a5;} 
     if ($giorno==6 and $acqspe=="A"){$a6=$importo+$a6;} 
     if ($giorno==7 and $acqspe=="A"){$a7=$importo+$a7;} 
     if ($giorno==8 and $acqspe=="A"){$a8=$importo+$a8;} 
     if ($giorno==9 and $acqspe=="A"){$a9=$importo+$a9;} 
     if ($giorno==10 and $acqspe=="A"){$a10=$importo+$a10;} 
     if ($giorno==11 and $acqspe=="A"){$a11=$importo+$a11;} 
     if ($giorno==12 and $acqspe=="A"){$a12=$importo+$a12;}
     if ($giorno==13 and $acqspe=="A"){$a13=$importo+$a13;} 
     if ($giorno==14 and $acqspe=="A"){$a14=$importo+$a14;} 
     if ($giorno==15 and $acqspe=="A"){$a15=$importo+$a15;} 
     if ($giorno==16 and $acqspe=="A"){$a16=$importo+$a16;} 
     if ($giorno==17 and $acqspe=="A"){$a17=$importo+$a17;} 
     if ($giorno==18 and $acqspe=="A"){$a18=$importo+$a18;} 
     if ($giorno==19 and $acqspe=="A"){$a19=$importo+$a19;}
     if ($giorno==20 and $acqspe=="A"){$a20=$importo+$a20;} 
     if ($giorno==21 and $acqspe=="A"){$a21=$importo+$a21;} 
     if ($giorno==22 and $acqspe=="A"){$a22=$importo+$a22;} 
     if ($giorno==23 and $acqspe=="A"){$a23=$importo+$a23;} 
     if ($giorno==24 and $acqspe=="A"){$a24=$importo+$a24;} 
     if ($giorno==25 and $acqspe=="A"){$a25=$importo+$a25;} 
     if ($giorno==26 and $acqspe=="A"){$a26=$importo+$a26;} 
     if ($giorno==27 and $acqspe=="A"){$a27=$importo+$a27;} 
     if ($giorno==28 and $acqspe=="A"){$a28=$importo+$a28;} 
     if ($giorno==29 and $acqspe=="A"){$a29=$importo+$a29;} 
     if ($giorno==30 and $acqspe=="A"){$a30=$importo+$a30;} 
     if ($giorno==31 and $acqspe=="A"){$a31=$importo+$a31;} 
     
     if ($giorno==1 and $acqspe=="S"){$s1=$importo+$s1;} 
     if ($giorno==2 and $acqspe=="S"){$s2=$importo+$s2;} 
     if ($giorno==3 and $acqspe=="S"){$s3=$importo+$s3;}
     if ($giorno==4 and $acqspe=="S"){$s4=$importo+$s4;} 
     if ($giorno==5 and $acqspe=="S"){$s5=$importo+$s5;} 
     if ($giorno==6 and $acqspe=="S"){$s6=$importo+$s6;} 
     if ($giorno==7 and $acqspe=="S"){$s7=$importo+$s7;} 
     if ($giorno==8 and $acqspe=="S"){$s8=$importo+$s8;} 
     if ($giorno==9 and $acqspe=="S"){$s9=$importo+$s9;} 
     if ($giorno==10 and $acqspe=="S"){$s10=$importo+$s10;} 
     if ($giorno==11 and $acqspe=="S"){$s11=$importo+$s11;} 
     if ($giorno==12 and $acqspe=="S"){$s12=$importo+$s12;}
     if ($giorno==13 and $acqspe=="S"){$s13=$importo+$s13;} 
     if ($giorno==14 and $acqspe=="S"){$s14=$importo+$s14;} 
     if ($giorno==15 and $acqspe=="S"){$s15=$importo+$s15;} 
     if ($giorno==16 and $acqspe=="S"){$s16=$importo+$s16;} 
     if ($giorno==17 and $acqspe=="S"){$s17=$importo+$s17;} 
     if ($giorno==18 and $acqspe=="S"){$s18=$importo+$s18;} 
     if ($giorno==19 and $acqspe=="S"){$s19=$importo+$s19;}
     if ($giorno==20 and $acqspe=="S"){$s20=$importo+$s20;} 
     if ($giorno==21 and $acqspe=="S"){$s21=$importo+$s21;} 
     if ($giorno==22 and $acqspe=="S"){$s22=$importo+$s22;} 
     if ($giorno==23 and $acqspe=="S"){$s23=$importo+$s23;} 
     if ($giorno==24 and $acqspe=="S"){$s24=$importo+$s24;} 
     if ($giorno==25 and $acqspe=="S"){$s25=$importo+$s25;} 
     if ($giorno==26 and $acqspe=="S"){$s26=$importo+$s26;} 
     if ($giorno==27 and $acqspe=="S"){$s27=$importo+$s27;} 
     if ($giorno==28 and $acqspe=="S"){$s28=$importo+$s28;} 
     if ($giorno==29 and $acqspe=="S"){$s29=$importo+$s29;} 
     if ($giorno==30 and $acqspe=="S"){$s30=$importo+$s30;} 
     if ($giorno==31 and $acqspe=="S"){$s31=$importo+$s31;}  
     
   
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
  'decimal_digits' => 2,
  'label_h' => "giorni", 
  'label_v' => "euro",
  'label_font_size' => 25,
  'label_font' => "arial",
  'axis_font_size' => 12
);


#$s2=43;
$values = array( 
 array(
 'g01' => $a1,
 'g02' => $a2,
 'g03' => $a3,
 'g04' => $a4,
 'g05' => $a5,
 'g06' => $a6,
 'g07' => $a7,
 'g08' => $a8,
 'g09' => $a9,
 'g10' => $a10,
 'g11' => $a11,
 'g12' => $a12,
 'g13' => $a13,
 'g14' => $a14,
 'g15' => $a15,
 'g16' => $a16,
 'g17' => $a17,
 'g18' => $a18,
 'g19' => $a19,
 'g20' => $a20,
 'g21' => $a21,
 'g22' => $a22,
 'g23' => $a23,
 'g24' => $a24,
 'g25' => $a25,
 'g26' => $a26,
 'g27' => $a27,
 'g28' => $a28,
 'g29' => $a28,
 'g30' => $a30,
 'g31' => $a31
  ),
 array( 
 'g01' => $s1,
 'g02' => $s2,
 'g03' => $s3,
 'g04' => $s4,
 'g05' => $s5,
 'g06' => $s6,
 'g07' => $s7,
 'g08' => $s8,
 'g09' => $s9,
 'g10' => $s10,
 'g11' => $s11,
 'g12' => $s12,
 'g13' => $s13,
 'g14' => $s14,
 'g15' => $s15,
 'g16' => $s16,
 'g17' => $s17,
 'g18' => $s18,
 'g19' => $s19,
 'g20' => $s20,
 'g21' => $s21,
 'g22' => $s22,
 'g23' => $s23,
 'g24' => $s24,
 'g25' => $s25,
 'g26' => $s26,
 'g27' => $s27,
 'g28' => $s28,
 'g29' => $s28,
 'g30' => $s30,
 'g31' => $s31 )
);


$colours = array(
  array('red'), array('blue'),array('green')
);
$links = array(
  'Dough' => 'jpegsaver.php', 'Ray' => 'crcdropper.php',
  'Me' => 'svggraph.php'
);

$graph = new Goat1000\SVGGraph\SVGGraph(1100, 400, $settings);

$graph->colours($colours);
$graph->values($values);
$graph->links($links);
$graph->render('MultiLineGraph');

?>