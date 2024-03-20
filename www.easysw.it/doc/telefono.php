<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
  </head>
  <body>
<?
	
$class="whatsapp";
$method="sendmessage";
$user="user";
$password="password";
$platformid=100;
$destination="393755575840";
$message="test+message";

$result = file_get_contents("https://www.afilnet.com/api/http/?class=".$class."&method=".$method."&user=".$user."&password=".$password."&platformid=".$platformid."&destination=".$destination."&message=".$message);
	
?>  </body>
</html>