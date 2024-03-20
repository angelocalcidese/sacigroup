<?php
if (isset($_COOKIE['POMACLIENTLOGGED']) and $_REQUEST["login"]==$_COOKIE['POMACLIENTLOGGED']) {}
else
{$url_pagina_chiamante="pomaindex.php";  ?>
    <script>
		top.window.location='<? echo $url_pagina_chiamante; ?>';
		</script>
<?php
}
$login=$_REQUEST["login"];
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 4</title>
<script language="JavaScript">
<!--
function FP_preloadImgs() {//v1.0
 var d=document,a=arguments; if(!d.FP_imgs) d.FP_imgs=new Array();
 for(var i=0; i<a.length; i++) { d.FP_imgs[i]=new Image; d.FP_imgs[i].src=a[i]; }
}

function FP_swapImg() {//v1.0
 var doc=document,args=arguments,elm,n; doc.$imgSwaps=new Array(); for(n=2; n<args.length;
 n+=2) { elm=FP_getObjectByID(args[n]); if(elm) { doc.$imgSwaps[doc.$imgSwaps.length]=elm;
 elm.$src=elm.src; elm.src=args[n+1]; } }
}

function FP_getObjectByID(id,o) {//v1.0
 var c,el,els,f,m,n; if(!o)o=document; if(o.getElementById) el=o.getElementById(id);
 else if(o.layers) c=o.layers; else if(o.all) el=o.all[id]; if(el) return el;
 if(o.id==id || o.name==id) return o; if(o.childNodes) c=o.childNodes; if(c)
 for(n=0; n<c.length; n++) { el=FP_getObjectByID(id,c[n]); if(el) return el; }
 f=o.forms; if(f) for(n=0; n<f.length; n++) { els=f[n].elements;
 for(m=0; m<els.length; m++){ el=FP_getObjectByID(id,els[n]); if(el) return el; } }
 return null;
}
// -->
</script>

</head>
<style>
div#container {
min-width:   700px;
  min-height:  500px;
  max-width:  700px;
  max-height: 1000px;
}
</style>
<style>
a 
{
    text-decoration: none; 
    font-weight: normal;
    color: #000000
}
 
a:hover
{
    color: #0080FF;
}
</style>
<?php
$login=$_REQUEST["login"]; ?>

<body onload="FP_preloadImgs(/*url*/'button10.jpg', /*url*/'button11.jpg', /*url*/'button13.jpg', /*url*/'button14.jpg')">


<div align="center">
	<table border="0" width="30%">
		<tr>
			<td>
			<img border="0" src="carlopoma.png" width="954" height="140"></td>
		</tr>
    <tr>
      <td><a href="menugenerale.php?login=<?php echo $login; ?>">Menu Generale</a>/Menu' Tabelle</td></tr>
		</tr>
	</table>
	<p>&nbsp;</p> 
  </div>
<div align="center">   
<div id="container">
<p align="center"><b><font face="Arial" size="6" color="#993300">MENU' 
TABELLE</font></b></p>
<p align="center"><b><font face="Arial" size="6" color="#FF0000"><?php echo $erroreriferimento; ?></font></b></p>
<table border="1" width="100%">
	<tr>
		<td width="392"><font face="Arial">- TABELLA CAUSALI</font></td>
		<td>
		
		<p align="center"><font face="Arial"><a href="tabelle.php?login=<?php echo $login; ?>">
		<img border="0" id="img1" src="buttonF.jpg" height="20" width="100" alt="VAI" fp-style="fp-btn: Metal Rectangle 2" fp-title="VAI" onmouseover="FP_swapImg(1,0,/*id*/'img1',/*url*/'button10.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img1',/*url*/'buttonF.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img1',/*url*/'button11.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img1',/*url*/'button10.jpg')"></a></font></td>
	</tr>
	<tr>
		<td width="392"><font face="Arial">- TABELLA CONCATENAZIONI CAUSALI</font></td>
		<td>
		<p align="center"><font face="Arial"><a href="corre.php?login=<?php echo $login; ?>">
		<img border="0" id="img2" src="button12.jpg" height="20" width="100" alt="VAI" fp-style="fp-btn: Metal Rectangle 2" fp-title="VAI" onmouseover="FP_swapImg(1,0,/*id*/'img2',/*url*/'button13.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img2',/*url*/'button12.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img2',/*url*/'button14.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img2',/*url*/'button13.jpg')"></a></font></td>
	</tr>
	<tr>
		<td width="392"><font face="Arial">- LISTA CAUSALI</font></td>
		<td>
		<p align="center"><font face="Arial"><a href="listacausali.php?login=<?php echo $login; ?>">
		<img border="0" id="img3" src="button12.jpg" height="20" width="100" alt="VAI" fp-style="fp-btn: Metal Rectangle 2; fp-orig: 0" fp-title="VAI" onmouseover="FP_swapImg(1,0,/*id*/'img3',/*url*/'button13.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img3',/*url*/'button12.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img3',/*url*/'button14.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img3',/*url*/'button13.jpg')"></a></font></td>
	</tr>
	<tr>
		<td width="392"><font face="Arial">- LISTA CONCATENAZIONI</font></td>
		<td>
		<p align="center"><font face="Arial"><a href="listaconca.php?login=<?php echo $login; ?>">
		<img border="0" id="img4" src="button12.jpg" height="20" width="100" alt="VAI" fp-style="fp-btn: Metal Rectangle 2; fp-orig: 0" fp-title="VAI" onmouseover="FP_swapImg(1,0,/*id*/'img4',/*url*/'button13.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img4',/*url*/'button12.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img4',/*url*/'button14.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img4',/*url*/'button13.jpg')"></a></font></td>
	</tr>
</table>


</div>
</div>




</body>

</html>