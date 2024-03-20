-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 31.11.39.82:3306
-- Creato il: Mag 10, 2023 alle 08:33
-- Versione del server: 5.7.36-39-log
-- Versione PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Sql1615711_3`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `ticket`
--

CREATE TABLE `ticket` (
  `progr` int(11) NOT NULL,
  `codice` int(11) DEFAULT '0',
  `argomento` varchar(5000) DEFAULT NULL,
  `descrizione` varchar(5000) DEFAULT NULL,
  `dataora` datetime DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `stato` varchar(20) DEFAULT 'APERTO',
  `lavorazione` varchar(20) DEFAULT 'PROGRESS',
  `datachiusura` datetime DEFAULT NULL,
  `allegato` varchar(50) DEFAULT NULL,
  `operatore` varchar(50) DEFAULT NULL,
  `procedura` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `ticket`
--

INSERT INTO `ticket` (`progr`, `codice`, `argomento`, `descrizione`, `dataora`, `login`, `stato`, `lavorazione`, `datachiusura`, `allegato`, `operatore`, `procedura`) VALUES
(11, 245, 'Gestione soci', 'Buonasera, ho inserito il rinnovo dei soci e va tutto bene.ogni anno cambia il numero della tessera e quando modifico il numero tessere esce l\'errore. Alvaro Pacheco fernandina nuovo numero tesser 160474\r\nCordiali saluti \r\nAldo Guenzani', '2023-02-09 21:02:17', 'tommyguenzani@gmail.com', 'CHIUSO', 'RISOLTO', '2023-02-10 23:52:38', NULL, NULL, 'abacuscalla'),
(13, 247, 'REGISTRAZIONE MOVIMENTI CASSA BANCA', 'Buongiorno, ho riportato i saldi cassa e banca 2022 nell\'anno 2023.Ora devo registrare 3 movimenti da cassa a banca (150,00 - 150,00 200,00) ma giÃ  alla prima operazione mi dice che il credito Ã¨ insufficiente. Dove sbaglio?\r\nSaluti Aldo', '2023-02-12 17:02:21', 'tommyguenzani@gmail.com', 'CHIUSO', 'RISOLTO', '2023-02-13 14:05:13', NULL, NULL, 'abacuscalla'),
(15, 249, 'Modello D', 'Buongiorno, ho stampato il modello D dell\'anno 2022 e ho visto in alto la scritta CF e Cod. Runts, questi dati devo inserirli? in caso affermativo come faccio?\r\ngrazie . Buona giornata.\r\nAldo', '2023-02-16 11:02:26', 'tommyguenzani@gmail.com', 'CHIUSO', 'RISOLTO', '2023-02-19 19:57:22', NULL, NULL, 'abacuscalla'),
(16, 250, 'errore: dopo l\'immissione della quota pagata, in presenza di semaforo verde (ma il pallino colorato non appare ancora) si ottiene una pagina di errore, come sotto riportata,tornando indietro e ridando la quota pagata viene registrata e appare il pallino/semaforo verde', 'ERRORE gia\' presente&ERRORE movimento contabileinsert into movimenticontabili ( esercizio, mastro, sottomastro, conto, e_u, causale, importo, data, data_inserimento, tipodocumento, numdocumento, note, perciva, iva, login, ricevutapagamento, bancacassa, progetto, intesta ) values ( \'2023\', \'EA01\', \'0\', \'0\', \'E\', \'143\', \'7,50\', \'2023-02-23\', \'2023-02-23\', \'CONTANTI\', \'\', \'Pagamento quota sociale di BRUNO EMMA anno 2023\', \'\', \'0\', \'garbagnatemonasteroebrongio.lecco@ana.it\', \' \' , \'CASSA PRINCIPALE\', \'\' , \'\' )', '2023-02-23 13:02:46', 'garbagnatemonasteroebrongio.lecco@ana.it', 'CHIUSO', 'RISOLTO', '2023-03-01 17:00:10', NULL, NULL, 'abacuscalla'),
(17, 251, 'Ticket 2023', 'Buongiorno ho aggiornato il saldo ore 2022 di tutti i soci, ora sono in pari con gli assegni.\r\nHo fatto delle prove con gli assegni 2023 , Ã¨ possibile cancellare i movimenti 2023? Grazie', '2023-03-02 16:03:59', 'tommyguenzani@gmail.com', 'CHIUSO', 'RISOLTO', '2023-03-03 18:37:43', NULL, NULL, 'abacuscalla'),
(18, 252, 'inserimento bonus a ogni tesseramento o rinnovo', 'Buongiorno Domenico, la bdT di Legnano a ogni tesseramento o rinnovo regala 5 ore al socio, se il socio durante l\'anno non \"spende\" nessun assegno il bonus viene recuperato tutto  oppure se non \"spende\"  tutte le 5 ore viene recuperato la rimanenza del bonus.Per quanto riguardo il recupero ho creato una voce apposita mentre per inserire il bonus posso usare la funzione \" inserimento debito ore al socio per inizio esercizio\"? mi confonde la parola debito mentre io vorrei inserire un credito. In attesa di un tuo riscontro , ti ringrazio . Ciao Aldo', '2023-03-03 14:03:22', 'tommyguenzani@gmail.com', 'CHIUSO', 'RISOLTO', '2023-03-03 18:37:02', NULL, NULL, 'abacuscalla'),
(19, 253, 'Inserimento Codice errato', 'Buonasera ho inserito un codice sbagliato nelle Prestazioni: G - 05- tesseramento Ã¨ possibile toglierlo? Grazie\r\n( il codice giusto inserito Ã¨ G05 - Tesseramento )', '2023-03-13 19:03:48', 'tommyguenzani@gmail.com', 'CHIUSO', 'RISOLTO', NULL, NULL, 'DOMENICO', 'abacuscalla'),
(72, 307, 'Aggiustamenti vari', 'alcuni appunti\r\n\r\n1)  in \"Elenco soci estrazione dati in Excel\" nell\'elenco completo non appare chi non risulta abbia pagato la quota; non dovrebbe essere cosÃ¬ perchÃ¨ per questo c\'Ã¨ giÃ  \"l\'estrazione rinnovi\"\r\n\r\n2) i movimenti tra cassa e Banca non funzionano ancora o sono io che sbaglio?\r\n\r\nCordiali saluti\r\n\r\nRiva Gerolamo \r\n(segretario Alpini di Garbagnate Monastero)\r\n338 3165285', '2023-04-14 12:04:28', 'garbagnatemonasteroebrongio.lecco@ana.it', 'CHIUSO', 'RISOLTO', '2023-05-06 13:05:27', '', 'DOMENICO', 'abacuscalla'),
(73, 308, 'Riscontrato anomalia tecnica cassabanca.php', ' INSERT INTO \nmovimenticontabilicb (\nesercizio, \nmastro, \nsottomastro, \nconto,\ne_u,\ncausale,\nimporto,\ndata,\ndata_inserimento,\ntipodocumento,\nnumdocumento,\nnote,\nperciva,\niva,\nlogin,\nbancacassa,\nbanca\n) VALUES (\n\'2023\', \n\'0\', \n\'0\', \n\'0\',\n\'U\',\n\'CB\',\n\'1.\'09\',\n\'2023-04-17\',\n\'2023-04-17 11:04:52\',\n\'DISTINTA\',\n\'1\',\n\'1\',\n\'\',\n\'0\',\n\'mimmo\',\n\'cassa mia\',\n\'BANCA DELLA PIAZZA\'\n)', '2023-04-17 11:04:52', 'mimmo', 'CHIUSO', 'RISOLTO', '2023-04-17 11:04:21', '', 'DOMENICO', 'abacuscalla'),
(75, 310, 'Lista Assegni ', 'Nella lista assegni l\'anagrafica Ã¨ multipla', '2023-04-19 15:04:18', 'tommyguenzani@gmail.com', 'CHIUSO', 'RISOLTO', '2023-05-09 18:05:59', '', 'DOMENICO', 'abacuscalla'),
(76, 311, 'estratto conto', 'nell\'estratto conto non viene riportato correttamente il codice del Socio', '2023-04-19 15:04:25', 'tommyguenzani@gmail.com', 'CHIUSO', 'RISOLTO', '2023-05-09 18:05:19', '', 'DOMENICO', 'abacuscalla'),
(77, 312, 'Riscontrato anomalia tecnica cassabanca.php', ' INSERT INTO \nmovimenticontabilicb (\nesercizio, \nmastro, \nsottomastro, \nconto,\ne_u,\ncausale,\nimporto,\ndata,\ndata_inserimento,\ntipodocumento,\nnumdocumento,\nnote,\nperciva,\niva,\nlogin,\nbancacassa,\nbanca\n) VALUES (\n\'2023\', \n\'0\', \n\'0\', \n\'0\',\n\'U\',\n\'BB\',\n\'900.00\',\n\'2023-03-14\',\n\'2023-04-21 13:04:49\',\n\'VERSAMENTO TRAMITE ATM\',\n\'01\',\n\'\',\n\'\',\n\'0\',\n\'garbagnatemonasteroebrongio.lecco@ana.it\',\n\'Intesa San Paolo\',\n\'Intesa San Paolo\'\n)', '2023-04-21 13:04:49', 'garbagnatemonasteroebrongio.lecco@ana.it', 'CHIUSO', 'RISOLTO', '2023-05-06 13:05:23', '', 'DOMENICO', 'abacuscalla'),
(80, 315, 'estratto conto', 'buonasera, quando apro l\'estratto conto di ogni socio appare la scritta 503 servizio non disponibile', '2023-04-27 17:04:56', 'tommyguenzani@gmail.com', 'APERTO', 'PROGRESS', NULL, '', 'DOMENICO', 'abacuscalla'),
(81, 316, 'risultati discordanti', 'Al momento ho tralasciato di proseguire negli inserimenti perchÃ¨ non mi riesce di capire  come mai \r\n- nei movimenti contabili ho 4283,9 in entrata e 1343 in uscita (diff. 2904,4) \r\n- in estratto conto  ho 3893 in entrata e 1125 in uscita (diff. 2797,8)\r\n- e sul cruscotto ho un saldo in banca per 2768,22 + in cassa 172,27 (tot.2940,49).\r\nNei diversi campi di conteggio alcune voci sono fuori, perchÃ¨?\r\n\r\nQuando ha 5 minuti ci possiamo sentire nei prossimi giorni, fra lunedÃ¬ e martedÃ¬ (o settimana successiva)  per capire queste differenze ed i relativi dettagli? grazie\r\nRiva Gerolamo  cell. 3383165285', '2023-05-06 13:05:17', 'garbagnatemonasteroebrongio.lecco@ana.it', 'APERTO', 'PROGRESS', NULL, '', 'AMMINISTRATORE', 'abacuscalla');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`progr`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `ticket`
--
ALTER TABLE `ticket`
  MODIFY `progr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
