<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
#echo "passo"; exit;
#session_start();
#require_once("../../area_riservata/auth.php");
#require_once("auth.php");
#require_once("../conf_DB.php");

//echo("[[[".$_SESSION["SPICLIENTLOGGED"]."]]]");
//die();

$fl=$_GET["fl"];
$new_filename="http://www.carlopoma.com/poma/pdf/".$fl;
//per check
//$user = $_REQUEST["io"];
//$password = $_REQUEST["pass"];

//echo $user;
//echo $password;





    
#$tmp2 = explode("/", $url_pdf_da_caricare);
#$new_filename = $dir_tavole."/".$tmp2[count($tmp2) - 1];
#echo($new_filename);
#die();
$tmp=$fl;
//taken from: http://stackoverflow.com/questions/11518576/php-send-word-document-file-to-download
$tmp = explode(".", $url_pdf_da_caricare);
#echo  $url_pdf_da_caricare; exit;
switch ($tmp[count($tmp) - 1]) {
    case "pdf": $ctype = "application/pdf";
        break;
#    case "exe": $ctype = "application/octet-stream";
    case "exe": $ctype = "not/allowed";
        break;
    case "zip": $ctype = "application/zip";
        break;
    case "docx":
    case "doc": $ctype = "application/msword";
        break;
    case "csv":
    case "xls":
    case "xlsx": $ctype = "application/vnd.ms-excel";
        break;
    case "ppt": $ctype = "application/vnd.ms-powerpoint";
        break;
    case "gif": $ctype = "image/gif";
        break;
    case "png": $ctype = "image/png";
        break;
    case "jpeg":
    case "jpg": $ctype = "image/jpg";
        break;
    case "tif":
    case "tiff": $ctype = "image/tiff";
        break;
    case "psd": $ctype = "image/psd";
        break;
    case "bmp": $ctype = "image/bmp";
        break;
    case "ico": $ctype = "image/vnd.microsoft.icon";
        break;
    default: $ctype = "application/force-download";
}
$ctype = "application/pdf";
header("Pragma: public"); // required
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private", false); // required for certain browsers
header("Content-Type: $ctype");
#header("Content-Disposition: attachment; filename=\"" . $filename . "\";");
header("Content-Transfer-Encoding: binary");
#header("Content-Length: " . $fsize);
ob_clean();
flush();
readfile($new_filename);

if($passaggioAuth==TRUE){$_SESSION["SPICLIENTLOGGED"]=NULL;};

?>
