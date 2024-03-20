
<html>
<head>
	<title>Demo 4 : Inline NicEditors</title>
</head>
<body>

<div id="menu"></div>



<div id="sample">

<script src="../nicEdit.js" type="text/javascript"></script>
<script type="text/javascript">
     bkLib.onDomLoaded(function() {
          var myNicEditor = new nicEditor();
          myNicEditor.setPanel('myNicPanel');
          myNicEditor.addInstance('myInstance1');
          myNicEditor.addInstance('myInstance2');
          myNicEditor.addInstance('myInstance3');
     });
</script>


<div id="myNicPanel" style="width: 600px;"></div>

<?php

//Controlla il tipo di browser
function GetBrowser()
{
$browser = array(
'Lynx'      => 'Lynx',
'Opera'     => 'Opera',
'WebTV'     => 'WebTV',
'Konqueror' => 'Konqueror',
'bot'       => 'Bot',
'Google'    => 'Bot', 
'Chrome'     => 'Chrome',
'slurp'     => 'Bot',
'scooter'   => 'Bot',
'spider'    => 'Bot',
'infoseek'  => 'Bot',
'MSIE'      => 'Internet Explorer',
'Firefox'   => 'FireFox',
'Nav'       => 'Netscape',
'Gold'      => 'Netscape',
'x11'       => 'Netscape',
'Netscape'  => 'Netscape'
);

foreach($browser as $chiave => $valore)
{
if(strpos($_SERVER['HTTP_USER_AGENT'], $chiave ))
{
return $valore;
}
}

return 'Altro';
}

//esempio applicato
$browser=GetBrowser();
if ($browser == "Chrome")
{$lungo=600;}else{$lungo=633;}

#echo $lungo;exit;
?>
<textarea id="myInstance1" style="font-size: 16px; background-color: #ccc; padding: 3px; border: 5px solid #000; width: <? echo $lungo; ?>px;">

	Some Initial Content was in this textarea


</textarea>
</body>
</html>
