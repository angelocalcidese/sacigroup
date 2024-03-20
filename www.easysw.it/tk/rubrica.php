
<form name="form_upl" action="rubrica.php" method="post" target="_top">
<input type= "text" name="email" value="<?php echo $email; ?>">>

<input type= "submit" name= "submit" value= "Invia" onclick= "aggiorna()">
<script language="javascript">
function aggiorna()
{
opener.location.reload(true);
window.close();
}
