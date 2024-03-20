<html>
<head>
	<title>Demo 3 : Add/Remove NicEditors</title>
</head>
<body>

<div id="menu"></div>

<div id="intro">
<p>The demo below shows toggling the display of NicEditors on both textarea and div elements.  NicEdit instances can be added and removed at any time</p>
</div>
<br />
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
<div id="sample">
<h4>Div Example</h4>
	<div id="myArea1" style="width: 600px; height: 400px; border: 1px solid #000;">
	<textarea id="testo" rows="15" name="testo" style=" background-color: #ffffff;  width: <? echo $lungo;?>;"><? echo $testomemw; ?></textarea>

	</div>
	<button onClick="toggleArea1();">Toggle DIV Editor</button>
<br /><br />


<script src="../nicEdit.js" type="text/javascript"></script>
<script>
var area1, area2;

function toggleArea1() {
	if(!area1) {
		area1 = new nicEditor({fullPanel : true}).panelInstance('myArea1',{hasPanel : true});
	} else {
		area1.removeInstance('myArea1');
		area1 = null;
	}
}

function addArea2() {
	area2 = new nicEditor({fullPanel : true}).panelInstance('myArea2');
}
function removeArea2() {
	area2.removeInstance('myArea2');
}

bkLib.onDomLoaded(function() { toggleArea1(); });
</script>	
</div>

</body>
</html>