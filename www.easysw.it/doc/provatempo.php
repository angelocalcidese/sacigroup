<?php
// A two-week axis
require_once 'SVGGraph/autoloader.php';

$settings = [
  'auto_fit' => true,
  'back_colour' => '#eee',
  'back_stroke_width' => 0,
  'back_stroke_colour' => '#eee',
  'stroke_colour' => '#000',
  'axis_colour' => '#111',
  'axis_overlap' => 2,
  'grid_colour' => '#999',
  'label_colour' => '#000',
  'axis_font' => 'Verdana',
  'axis_font_size' => 10,
  'pad_right' => 10,
  'pad_left' => 10,
  'minimum_grid_spacing_h' => 40,
  'show_subdivisions' => true,
  'show_grid_subdivisions' => true,
  'grid_subdivision_colour' => '#ccc',
  'datetime_keys' => true,
  'structure' => ['key' => 0, 'value' => [1, 2], 'tooltip' => 3],
  'axis_text_angle_h' => 90,
  'grid_back_colour' => ['#fefece','#fefefe'],
  'figure' => [
    ['quake',
    ['circle', 'cx' => 0, 'cy' => 0, 'r' => 7, 'stroke' => 'red',
      'fill' => 'white', 'fill_opacity' => 0.3],
    ['circle', 'cx' => 0, 'cy' => 0, 'r' => 5, 'stroke' => 'red'],
    ['circle', 'cx' => 0, 'cy' => 0, 'r' => 3, 'stroke' => 'red'],
    ['circle', 'cx' => 0, 'cy' => 0, 'r' => 1, 'stroke' => 'red'],
    ],
    ['big_quake',
    ['figure', 'name' => 'quake', 'x' => 0, 'y' => 0, 'transform' => 'scale(2,2)'],
    ],
  ],
  'marker_type' => 'figure:big_quake',
  'axis_max_h' => '2001-01-14T00:00',
];

$values = [
  ['2001-01-01T06:57', 7.5, 0, 'Mindanao, Philippines'],
  ['2001-01-09T16:49', 7.1, 0, 'Vanuatu Islands'],
  ['2001-01-10T16:02', 7.0, 0, 'Kodiak Island region, Alaska, United States'],
  ['2001-01-13T17:33', 7.7, 944, 'El Salvador'],
  ['2001-01-26T03:16', 7.7, 20085, 'Western India'],
  ['2001-02-13T14:22', 6.6, 315, 'El Salvador'],
  ['2001-02-13T19:28', 7.4, 0, 'Southern Sumatra, Indonesia'],
  ['2001-02-17T20:25', 4.1, 1, 'El Salvador'],
  ['2001-02-23T07:23', 5.6, 3, 'Sichuan, China'],
  ['2001-02-24T07:23', 7.1, 0, 'Northern Molucca Sea'],
  ['2001-02-28T18:54', 6.8, 1, 'Washington, United States'],
  ['2001-03-24T06:27', 6.8, 2, 'Western Honshu, Japan'],
  ['2001-04-12T10:47', 5.6, 2, 'Yunnan, China'],
  ['2001-05-08T18:02', 5.7, 1, 'El Salvador'],
  ['2001-05-23T12:10', 5.5, 2, 'Sichuan, China'],
  ['2001-06-01T14:00', 5.0, 4, 'Hindu Kush region, Afghanistan'],
  ['2001-06-03T02:41', 7.2, 0, 'Kermadec Islands, New Zealand'],
  ['2001-06-21T19:55', 4.2, 1, 'Germany'],
  ['2001-06-23T20:33', 8.4, 138, 'Near coast of Peru'],
  ['2001-07-07T09:38', 7.6, 1, 'Near coast of Peru'],
  ['2001-07-17T15:06', 4.7, 4, 'Northern Italy'],
  ['2001-07-24T05:00', 6.4, 1, 'Northern Chile'],
  ['2001-08-09T02:06', 5.8, 4, 'Central Peru'],
  ['2001-08-21T06:52', 7.1, 0, 'East of North Island, New Zealand'],
  ['2001-10-12T15:02', 7.0, 0, 'South of Mariana Islands'],
  ['2001-10-19T03:28', 7.5, 0, 'Banda Sea'],
  ['2001-10-27T05:35', 5.6, 1, 'Yunnan, China'],
  ['2001-10-31T09:10', 7.0, 0, 'New Britian region, Papua New Guinea'],
  ['2001-11-14T09:26', 7.8, 0, 'Qinghai, China'],
  ['2001-12-04T05:57', 5.8, 2, 'Southern Peru'],
  ['2001-12-12T14:02', 7.1, 0, 'South of Australia'],
];

$type = 'ScatterGraph';
$width = 670;
$height = 200;

$graph = new Goat1000\SVGGraph\SVGGraph($width, $height, $settings);


$graph->values($values);
$graph->render($type);