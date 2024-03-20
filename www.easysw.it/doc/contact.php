<? 
/*
############################ Contact Form ###########################
### |-----------------------------------------------------------| ###
### |      WRITTEN 2005 by planetluc.com c/o Lukas Stalder      | ###
### |      THIS SMALL SCRIPT IS FREE AND MAY BE REDISTRIBUTED   | ###
### |-----------------------------------------------------------| ###
#####################################################################
*/ 



/*
// ################ INSTALLATION #################

1. open the .php file where you want to have the contact form in.
2. paste this whole code in there
3. adapt values in the config section below to your needs.
4. upload the file - that's it!

// ############## END INSTALLATION ###############
*/




// ################### CONFIG ###################

// CSS classes & styles
$class_txt = "text";
$class_inputbutton = "inputButton";
$class_inputline = "inputLine";
$class_inputfield = "inputField";
$style_inputline = "width:355px;";
$style_inputfield = "width:355px;";

// email
$target_address = "info@dott.com";
$email_subject = "Website Request";

// error messages
$err_name =	"Please enter a namen.";
$err_phone = "Please enter a phone number.";
$err_msg = "Please fill out the 'request' field.";
$err_email = "Please enter a valid email address.";

// misc text
$msg_date = "Date";
$msg_company = "Company";
$msg_name = "Name";
$msg_address = "Address";
$msg_city = "Zip/City";
$msg_phone = "Phone";
$msg_email = "Email";
$msg_answerby = "Reply by";
$txt_email = "Email";
$txt_phone = "Phone";
$txt_post = "Post";
$txt_send = "Send";
$txt_mandatory = "mandatory";
$msg_request = "Request";
$msg_indent = 11;

// messages
$txt_thankyou = "<div class='$class_txt'><h2>Thank you for getting in contact with us!</h2>Your request has been sent and you'll be contacted as soon as possible.</div>";
$txt_error = "<div style='color: #cc3300' class='$class_txt'><h2>Following errors occurred:</h2>{errors}</div>";	// {errors} is replaced by the errors that occurred



// ### GERMAN TRANSLATION ###

/*  

$email_subject = "Anfrage an Dott.com";

// error messages
$err_name =	"Bitte Namen angeben.";
$err_phone = "Bitte Telefon angeben.";
$err_msg = "Formulieren Sie bitte Ihr Anliegen.";
$err_email = "Geben Sie bitte eine g&uuml;ltige Email Adresse an.";

// misc text
$msg_date = "Datum";
$msg_company = "Firma";
$msg_name = "Name";
$msg_address = "Adresse";
$msg_city = "PLZ/Ort";
$msg_phone = "Fon";
$msg_email = "Email";
$msg_answerby = "Antwort per";
$txt_email = "Email";
$txt_phone = "Telefon";
$txt_post = "Post";
$txt_send = "Abschicken";
$txt_mandatory = "Pflichtfeld";
$msg_request = "Anfrage";

// messages
$txt_thankyou = "<div class='$class_txt'><h2>Danke f&uuml;r Ihr Interesse!</h2>Ihre Anfrage wurde verschickt und Sie werden baldm&ouml;glichst kontaktiert werden.</div>";
$txt_error = "<div style='color: #cc3300' class='$class_txt'><h2>Bitte beachten Sie folgendes:</h2>{errors}</div>";	// {errors} is replaced by the errors that occurred

*/


// ################ END  CONFIG #################




function spaces($num, $fill=" "){
	$foo="";
	for ($i=0; $i<$num; $i++) $foo.=$fill;
	return $foo;
}

function isValidEmail($addr){
	if(eregi("^[a-z0-9]+([_.-][a-z0-9]+)*@([a-z0-9]+([.-][a-z0-9]+)*)+\\.[a-z]{2,4}$", $addr))
		return true;
	else
		return false;
}


// start form evaluation
$error="foo";
if ($_REQUEST['do']=="send"){
	$error=false;
	if ($_REQUEST['name']=="") $error.="&raquo; $err_name<br>"; 
	if ($_REQUEST['fon']=="") $error.="&raquo; $err_phone<br>"; 
	if ($_REQUEST['message']=="") $error.="&raquo; $err_msg<br>"; 
	if (!isValidEmail($_REQUEST['email'])) $error.="&raquo; $err_email<br>";
	if ($error===false){
	
		$message="$msg_date:".spaces($msg_indent-strlen($msg_date)).date("d M Y, H:i", time());
		if ($_REQUEST['firma']) $message.="\n$msg_company:".spaces($msg_indent-strlen($msg_company)).$_REQUEST['firma'];
		if ($_REQUEST['name']) $message.="\n$msg_name:".spaces($msg_indent-strlen($msg_name)).$_REQUEST['name'];
		if ($_REQUEST['adresse']) $message.="\n$msg_address:".spaces($msg_indent-strlen($msg_address)).$_REQUEST['adresse'];
		if ($_REQUEST['ort']) $message.="\n$msg_city:".spaces($msg_indent-strlen($msg_city)).$_REQUEST['ort'];
		if ($_REQUEST['fon']) $message.="\n$msg_phone:".spaces($msg_indent-strlen($msg_phone)).$_REQUEST['fon'];
		$message.="\n$msg_email:".spaces($msg_indent-strlen($msg_email))."mailto:".$_REQUEST['email'];
		$message.="\n\n".spaces(strlen("$msg_answerby ".$_REQUEST['kontakt'])+1, "=");
		$message.="\n$msg_answerby ".$_REQUEST['kontakt']."!\n";
		$message.=spaces(strlen("$msg_answerby ".$_REQUEST['kontakt'])+1, "=");
		$message.="\n\n$msg_request:\n\n".$_REQUEST['message'];
		
		mail($target_address, $email_subject, $message, "From: ".$_REQUEST['email']);
		echo $txt_thankyou;
		
	}else if ($error!==false) $error=str_replace("{errors}", $error, $txt_error);

}

if ($error!==false){

	if($error!="foo") echo $error;
	
	// form
	echo "<script language='JavaScript' type='text/JavaScript'>\n";
	echo "window.onload = function(){ document.form1.firma.focus(); }\n";
	echo "</script>\n";
	echo "<form name='form1' method='post' action=''>\n";
	echo "<table  border='0' cellpadding='1' cellspacing='0' class='txt'>\n";
	echo "<tr><td>&nbsp;</td>\n";
	echo "<td height='19'>&nbsp;</td></tr>\n";
	echo "<tr><td width='75' class='$class_txt'>$msg_company</td>\n";
	echo "<td height='19'><input name='firma' id='firma' type='text' class='$class_inputline' style='$style_inputline' value='".$_REQUEST['firma']."'>\n";
	echo "</td></tr>\n";
	echo "<tr><td width='75' class='$class_txt'>$msg_name*</td>\n";
	echo "<td height='19'><input name='name' type='text' class='$class_inputline' style='$style_inputline' value='".$_REQUEST['name']."'>\n";
	echo "</td></tr>\n";
	echo "<tr><td width='75' class='$class_txt'>$msg_address</td>\n";
	echo "<td height='19'><input name='adresse' type='text' class='$class_inputline' style='$style_inputline' value='".$_REQUEST['adresse']."'>\n";
	echo "</td></tr>\n";
	echo "<tr><td width='75' class='$class_txt'>$msg_city</td>\n";
	echo "<td height='19'><input name='ort' type='text' class='$class_inputline' style='$style_inputline' value='".$_REQUEST['ort']."'>\n";
	echo "</td></tr>\n";
	echo "<tr><td width='75' class='$class_txt'>$msg_phone*</td>\n";
	echo "<td height='19'><input name='fon' type='text' class='$class_inputline' style='$style_inputline' value='".$_REQUEST['fon']."'>\n";
	echo "</td></tr>\n";
	echo "<tr><td width='75' class='$class_txt'>$msg_email*</td>\n";
	echo "<td height='19'><input name='email' type='text' class='$class_inputline' style='$style_inputline' value='".$_REQUEST['email']."'>\n";
	echo "</td></tr>\n";
	echo "<tr><td width='75' class='$class_txt'>$msg_answerby*</td>\n";
	echo "<td height='19' class='$class_txt'><input name='kontakt' type='radio' value='$txt_email' checked> $txt_email&nbsp;&nbsp;\n";
	echo "<input name='kontakt' type='radio' value='$txt_phone'> $txt_phone&nbsp;&nbsp;\n";
	echo "<input name='kontakt' type='radio' value='$txt_post'> $txt_post\n";
	echo "</td></tr>\n";
	echo "<tr><td width='75' class='$class_txt'>$msg_request*</td>\n";
	echo "<td height='19'><textarea name='message' cols='45'style='$style_inputfield' rows='10' class='$class_inputfield'>".$_REQUEST['message']."</textarea></td></tr>\n";
	
	echo "<tr><td width='75' >&nbsp;</td>\n";
	echo "<td height='19' align='right'>* $txt_mandatory</td></tr>\n";

	echo "<tr><td width='75'>&nbsp;</td>\n";
	echo "<td height='19'><input name='Submit' type='Submit' class='$class_inputbutton' value='$txt_send'>\n";
	echo "<input name='do' type='hidden' id='do' value='send'></td>\n";
	echo "</tr></table>\n";
	echo "</form>\n";

}
/*
######################### END Contact Form ##########################
#####################################################################
*/  
?>
