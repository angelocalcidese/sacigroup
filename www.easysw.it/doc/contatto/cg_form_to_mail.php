<?php
/*Cg_form_to_mail script per inviare mail tramite form ad un indirizzo predefinito
   Copyright (C) 2005  Claudio Garau www.claudiogarau.it

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA*/
//in questa parte vengono stabiliti i valori delle variabili
$nome_mittente = $_POST['nome_mittente'];
$mail_mittente = $_POST['mail_mittente'];

//non dimenticate di modificare la mail del destinatario
$mail_destinatario = "domenico.calcidese@gmail.com";
$messaggio = $_POST['messaggio'];

//if ed elseif controllano che i campi vengano riempiti
//in caso contrario lanciano un messaggio di avvertimento
//i messaggi possono essere modificati a piacimento
if ($nome_mittente=="") 
echo "Devi inserire il tuo nome.";
elseif(!ereg("^[a-z0-9][_\.a-z0-9-]+@([a-z0-9][0-9a-z-]+\.)+([a-z]{2,4})",$mail_mittente)) 
echo "Devi inserire un formato di e-mail valido per il mittente.";
else if ($messaggio=="") 
echo "Hai dimenticato il messaggio.";
else
if(mail($mail_destinatario, "Richiesta di contatto, mittente: $nome_mittente", "Inviata da: $mail_mittente" ."\r\n".stripslashes($messaggio)))

//modificate il messaggio a vostro piacere
echo "Mail inviata con successo, le risponderemo nel più breve tempo possibile.";

//nel caso ci fossero problemi
else 
echo "Si è verificato un errore durante l'invio.";
?>