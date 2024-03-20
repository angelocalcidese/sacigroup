<?
$ingranaggio=$_REQUEST["ingranaggio"];
if ($ingranaggio==2){
$testo=$_REQUEST["testo"]; 
echo "testo ".$testo; exit;
}
 
?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>

  </head>
  <body>
<form method="POST" action="" enctype="multipart/form-data">
<table border="1" width="100%" bgcolor="#FFF4F7" class="table6" >	
   



 


  <tr >

    <td><font size="3" face="Arial" color="#000000">Inserisci testo da inviare </font>   </td>
<script type="text/javascript" src="./nic/nicEdit.js"></script>
<script type="text/javascript">
	   bkLib.onDomLoaded(function() {
          var myNicEditor = new nicEditor();
          myNicEditor.setPanel('myNicPanel');
          myNicEditor.addInstance('testo');
          myNicEditor.addInstance('myInstance2');
          myNicEditor.addInstance('myInstance3');
     });
</script>

<td style="font-size: 13px;background-color: #ffffff;"  align="center">
<div id="myNicPanel" style="width: 700px;"></div>
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
{$lungo=700;}else{$lungo=724;}

?>
<!--<textarea style="font-size: 20px;" name="testo"  id="testo" rows="20" cols="60"><? echo $testo1;?></textarea>   -->
<textarea id="testo" rows="8" name="testo" style=" background-color: #ffffff;  width: <? echo $lungo;?>;"><? echo $testo;?></textarea>

    </td>
   </tr>
<tr>     
 
       <td>  
			<input type="hidden" name="ingranaggio" value="2" />  
       <input type="image" name="B3"  src="mail.png" width="50" height="50">    
       </td> 
			</tr>
   </table>
</form>   

  </body>
</html>