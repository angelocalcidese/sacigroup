<?php

/**
 * Gestione utenti
 * 
 * CriRic 12 giugno 2013
 * Aggiunti metodi per il controllo della username e della password
 * Iniziato il metodo per la registrazione dei dati
 * 
 */
class userClass {

    var $sql;

    /**
     * Istanzia la classe mysqli 
     */
    public function __construct() {
        // connetto al database cambiare parametri di connessione
        $this->sql = new mysqli("localhost", "root", "", "database");
    }

    /**
     * Chiude la connessione al database
     */
    public function __destruct() {
        // disconnetto dal database
        $this->sql->close();
    }

    /**
     * Se la username rispetta i seguenti parametri
     * - da 6 a 12 caratteri alfanumerici 
     * - non deve essere gia presente nella tabella users
     * il metodo restituirà true, altrimenti una stringa contenente il messaggio di errore
     * @param type $username
     * @return type true or string
     */
    public function checkUsername($username) {
        // pulizia stringa
        $username = $this->protect($username);
        // verifico lunghezza username
        if (strlen($username) < 6) {
            // la username è minore di 6 caratteri
            return "! - min  6 chr";
        } else if (strlen($username) > 12) {
            // la username è maggiore di 12 caratteri
            return "! - max  12 chr";
        }
        // verifico caratteri alfanumerici
        if (!ctype_alnum($username)) {
            return "! - chr alfanumerici";
        }
        // query di ricerca username
        $query = "SELECT username FROM users WHERE username = '" . $username . "'";
        // esecuzione query
        $result = $this->sql->query($query);
        // verifico presenza username
        if (!$result || $result->num_rows > 0) {
            // la query non è andata a buon fine o la username è già presente
            return "! - non disponibile";
        }
        // username valida
        return true;
    }

    /**
     * Se la password rispetta i seguenti parametri
     * - da 8 a 12 caratteri
     * - almeno una lettera maiuscola
     * - almeno una lettera minuscola
     * - almeno un numero
     * il metodo restituirà true, altrimenti una stringa contenente il messaggio di errore
     * @param type $password
     * @return type true or string
     */
    public function checkPassword($password) {
        // pulizia stringa
        $password = $this->protect($password);
        // verifico lunghezza username
        if (strlen($password) < 8) {
            // la password è minore di 8 caratteri
            return "! - min  8 chr";
        } else if (strlen($password) > 12) {
            // la password è maggiore di 12 caratteri
            return "! - max  12 chr";
        }
        // espressione regolare
        if (!preg_match("/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/", $password)) {
            return "! - chr non validi";
        }
        // password valida
        return true;
    }

    /**
     * NON FINITO
     * Prende come parametro l'intero POST del submit
     * rielabora i dati ricevuti e prepara la registrazione dell'utente
     * se tutto va a buon fine il metodo restituisce true altrimenti una stringa contenente l'errore
     * @param type $post
     * @return type true or string
     */
    public function registrazione($post) {
        // ciclo del post
        foreach ($post as $key => $value) {
            // creazione variabile e pulizia stringa
            ${$key} = $this->protect($value);
        }
        // verifico username
        $checkUsername = $this->checkUsername($username);
        if ($checkUsername !== true) {
            return $checkUsername;
        }
        // verifico password
        $checkPassword = $this->checkPassword($password);
        if ($checkPassword !== true) {
            return $checkPassword;
        }
        // query di inserimento nuovo utente
        $query = "INSERT INTO users SET username = '$username', password = '" . md5($password) . "'";
        // restituzione elaborazione
        return $query . " <br/>Tutto OK <br/>Per ora mi fermo qui";
    }

    /**
     * Accetta una stringa elimina i tag HTML e restituisc l'escape
     * @param type $string
     * @return type $string
     */
    private function protect($string) {
        // pulizia tag html
        $string = strip_tags($string);
        // restituzione escape stringa
        return $this->sql->real_escape_string($string);
    }

}

?>
