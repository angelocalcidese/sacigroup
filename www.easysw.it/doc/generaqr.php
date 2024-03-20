<form action="index.php" method="post">
  testo o indirizzo <input type="text" name="cod" size="30"/>
  <input type="submit" value="crea" />
</form>
<?php
$codice=$_POST[cod];
$qrcode = new QRCode();
$qrcode->setData($codice);
$qrcode->setOutputEncoding(QRCode::$_ENCODING_UTF8);
$qrcode->setOutPutFormat(QRCode::$_OUTPUT_FORMAT_PNG);
echo $codice."<br/>";
echo '<img src="'.$qrcode->getUrlQuery().'">';
?>