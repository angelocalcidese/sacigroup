<html>
<head>
	<title>Demo 2 : NicEdit Configuration</title>
</head>
<body>

<div id="menu"></div>



<div id="sample">
<script src="../nicEdit.js" type="text/javascript"></script>
<script type="text/javascript">
bkLib.onDomLoaded(function() {
	new nicEditor().panelInstance('area1');
	new nicEditor({fullPanel : true}).panelInstance('area2');
	new nicEditor({iconsPath : '../nicEditorIcons.gif'}).panelInstance('area3');
	new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('area4');
	new nicEditor({maxHeight : 100}).panelInstance('area5');
});
</script>
<?
include "conf_DB.php";
$sql = "SELECT *  FROM  bacheca where progr = 1 ";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
      $testomemw = $macrogruppo["testo"];
    }}
?>    
<textarea cols="100" id="area1"><? echo $testomemw; ?></textarea>


</div>



</body>
</html>