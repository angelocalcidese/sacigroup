<?php

// richiamo classe users
require_once 'users.class.php';
// istanza classe users
$users = new userClass();
// inizializzo variabili per abilitazione submit
$u = $p = $r = false;
// se passata la stringa username 
if (isset($_REQUEST['username'])) {
    // se non è vuota
    if (!empty($_REQUEST['username'])) {
        // rimuovo l'eventuale classe assegnata 
        echo "$('#username').removeClass('valid');";
        // verifica username
        $checkUsername = $users->checkUsername($_REQUEST['username']);
        if ($checkUsername === true) {
            // username valida
            $u = true;
            echo "$('#username').addClass('valid');";
            echo "$('#username').html('V - valida');";
        } else {
            // username non valida mostro il messaggio
            echo "$('#username').html('$checkUsername');";
        }
    } else {
        // la username è vuota avviso
        echo "$('#username').html('! - campo obbligatorio');";
    }
}
// se passata la stringa password 
if (isset($_REQUEST['password'])) {
    // se non è vuota
    if (!empty($_REQUEST['password'])) {
        // // rimuovo l'eventuale classe assegnata 
        echo "$('#password').removeClass('valid');";
        $checkPassword = $users->checkPassword($_REQUEST['password']);
        if ($checkPassword === true) {
            // password valida
            $p = true;
            echo "$('#password').addClass('valid');";
            echo "$('#password').html('V - valida');";
        } else {
            // password non valida mostro il messaggio
            echo "$('#password').html('$checkPassword');";
        }
    } else {
        // la password è vuota avviso
        echo "$('#password').html('! - campo obbligatorio');";
    }
}

// se passata la stringa r_password 
if (isset($_REQUEST['r_password'])) {
    // se non è vuota
    if (!empty($_REQUEST['r_password'])) {
        // rimuovo l'eventuale classe assegnata 
        echo "$('#r_password').removeClass('valid');";
        if ($_REQUEST['r_password'] == $_REQUEST['password']) {
            // r_password valida
            $r = true;
            echo "$('#r_password').addClass('valid');";
            echo "$('#r_password').html('V - valida');";
        } else {
            // r_password non valida mostro il messaggio
            echo "$('#r_password').html('non corrispondono');";
        }
    } else {
        // la r_password è vuota avviso
        echo "$('#r_password').html('! - campo obbligatorio');";
    }
}

if ($u == true && $r == true && $p == true) {
    // abilito il submit
    echo "$('#submit').attr('disabled',false);";
} else {
    // disabilito il submit
    echo "$('#submit').attr('disabled',true);";
}
?>