<?php

?>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 10</title>
<script type=”text/javascript”>
function stampa(){
if (window.print) {
window.print() ;
} else {
var WebBrowser = ‘<OBJECT ID=”WebBrowser1? width=0 height=0 CLASSID=”CLSID:8856F961-340A-11D0-A96B-00C04FD705A2?></OBJECT>’; document.body.insertAdjacentHTML(‘beforeEnd’, WebBrowser); WebBrowser1.ExecWB(6, 2);
}
}
</script>
<script type=”text/javascript”>
var NS = (navigator.appName == “Netscape”);
var VERSION = parseInt(navigator.appVersion);
if (VERSION> 3) {
document.write(‘<form><input type=button value=”Stampa questa pagina” name=”Print” onClick=”stampa()”></form>’);
}
</script>
</head>

<body>
<a href="javascript:print();">immagine grafica o descrizione testuale</a>
</body>

</html>
