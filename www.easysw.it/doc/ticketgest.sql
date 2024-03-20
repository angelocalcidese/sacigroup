-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 31.11.39.82:3306
-- Creato il: Mag 10, 2023 alle 08:17
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
-- Struttura della tabella `ticketgest`
--

CREATE TABLE `ticketgest` (
  `progr` int(11) NOT NULL,
  `codice` int(11) DEFAULT '0',
  `argomento` varchar(5000) DEFAULT NULL,
  `descrizione` varchar(5000) CHARACTER SET utf8 DEFAULT NULL,
  `dataora` datetime DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `stato` varchar(20) DEFAULT 'APERTO',
  `lavorazione` varchar(20) DEFAULT 'PROGRESS',
  `datachiusura` datetime DEFAULT NULL,
  `allegato` varchar(50) DEFAULT NULL,
  `tipomessaggio` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `ticketgest`
--

INSERT INTO `ticketgest` (`progr`, `codice`, `argomento`, `descrizione`, `dataora`, `login`, `stato`, `lavorazione`, `datachiusura`, `allegato`, `tipomessaggio`) VALUES
(191, 307, '', 'ricontrollato al punto 2)ora funziona solo che non bisogna inserire i decimali sennÃ² prende la quota inserita come se fosse senza virgola.', '2023-04-14 13:04:34', 'garbagnatemonasteroebrongio.lecco@ana.it', 'APERTO', 'PROGRESS', NULL, '', 'D'),
(192, 307, '', 'andrebbe previsto anche l\'inserimento come versamento al bancomat oltre che \"distinta\"', '2023-04-14 13:04:28', 'garbagnatemonasteroebrongio.lecco@ana.it', 'APERTO', 'PROGRESS', NULL, '', 'D'),
(193, 308, '', 'sistemato', '2023-04-17 11:04:19', 'mimmo', 'APERTO', 'PROGRESS', NULL, '', 'R'),
(194, 308, '', 'CHIUSO TIKET DA HELP DESK', '2023-04-17 11:04:21', 'mimmo', 'APERTO', 'PROGRESS', NULL, '', 'C'),
(195, 307, '', 'sistemato il punto 2 ora si possono mettere i decimali e sono memorizzati correttamente', '2023-04-17 11:04:29', 'garbagnatemonasteroebrongio.lecco@ana.it', 'APERTO', 'PROGRESS', NULL, '', 'R'),
(196, 307, '', 'ho aggiunto nella maschera movimenti cassa/banca/cassa anche la modalitÃ  VERSAMENTO TRAMITE ATM, mi confermi se Ã¨ corretto', '2023-04-17 11:04:34', 'garbagnatemonasteroebrongio.lecco@ana.it', 'APERTO', 'PROGRESS', NULL, '', 'R'),
(197, 307, '', 'Riguardo il punto 1 mi attivo per ottenere i risultati richiesti, intanto ringrazio delle segnalazioni molto utili a migliorare.', '2023-04-17 11:04:44', 'garbagnatemonasteroebrongio.lecco@ana.it', 'APERTO', 'PROGRESS', NULL, '', 'R'),
(198, 307, '', 'ho modificato come da punto 1, ma i soci inseriti sono tutti del 2023 ed hanno pagato la quota, quindi l\'estrazione non risulta diversa da quella di prima, negli anni prossimi risulteranno in rosso quelli che non hanno pagato la quota. Spero di avere capito bene, eventualmente aspetto delle delucidazioni. grazie', '2023-04-17 16:04:53', 'garbagnatemonasteroebrongio.lecco@ana.it', 'APERTO', 'PROGRESS', NULL, '', 'R'),
(199, 307, '', 'Si, prima avevo (per errore non inserito la quota di un socio e non risultava pagante) mentre all\'estrazione questo non appariva nell\'elenco. In seguito l\'ho poi corretto. Mi sembra tutto a posto Grazie', '2023-04-18 11:04:36', 'garbagnatemonasteroebrongio.lecco@ana.it', 'APERTO', 'PROGRESS', NULL, '', 'D'),
(200, 307, '', 'CHIUSO TIKET DA UTENTE', '2023-04-18 11:04:05', 'garbagnatemonasteroebrongio.lecco@ana.it', 'APERTO', 'PROGRESS', NULL, '', 'C'),
(204, 310, '', 'ok vedo e ti dico', '2023-04-19 15:04:44', 'tommyguenzani@gmail.com', 'APERTO', 'PROGRESS', NULL, '', 'R'),
(205, 310, '', 'dovrei averlo sistemato prova e nel caso di ok chiudi il ticket', '2023-04-20 16:04:04', 'tommyguenzani@gmail.com', 'APERTO', 'PROGRESS', NULL, '', 'R'),
(206, 311, '', 'dovrei averlo sistemato fai un controllo se Ã¨ ok chiudi il ticket', '2023-04-20 16:04:56', 'tommyguenzani@gmail.com', 'APERTO', 'PROGRESS', NULL, '', 'R'),
(207, 312, '', 'inserendo un movimento di 900,00 â‚¬ da casa a Banca tramite ATM la cifra viene modificata in modo strano, il tipo di versamento si cambia in \"distinta\" Ã¨viene dato errore. ', '2023-04-21 14:04:39', 'garbagnatemonasteroebrongio.lecco@ana.it', 'APERTO', 'PROGRESS', NULL, '312-151.jpg', 'D'),
(208, 312, '', 'inserendo un movimento di 900,00 â‚¬ da casa a Banca tramite ATM la cifra viene modificata in modo strano, il tipo di versamento si cambia in \"distinta\" Ã¨viene dato errore. ', '2023-04-21 14:04:22', 'garbagnatemonasteroebrongio.lecco@ana.it', 'APERTO', 'PROGRESS', NULL, '312-152.jpg', 'D'),
(221, 312, '', 'sistemata l\'anomalia e inserito il movimento se riscontra che Ã¨ tutto ok chiuda pure il ticket', '2023-04-21 15:04:42', 'garbagnatemonasteroebrongio.lecco@ana.it', 'APERTO', 'PROGRESS', NULL, '', 'R'),
(222, 312, '', 'Il problema rimane uguale. \r\nNei Movimenti contabili era prima inserito 900 â‚¬ come entrata bancaria. l\'ho Cancellato per inserire un nuovo movimento tramite versamento ATM ma no si riesce. Nella Stampa E/Conto \"Movimenti contabili Banca\" Ã¨ perÃ² presente. Mentre nell\'estratto conto non appare. Ci sono varie anomalie: 1)la cifra immessa 900,00 viene visualizzata in 900.\'00 - 2)viene visualizzato il messaggio che c\'Ã¨ un saldo insufficiente di 77.77 - 3) il testo sul \"Tipo di documento\" ATM diviene DISTINTA.', '2023-04-22 10:04:37', 'garbagnatemonasteroebrongio.lecco@ana.it', 'APERTO', 'PROGRESS', NULL, '', 'D'),
(223, 312, '', 'Ho provato un movimento di 200 â‚¬ e mi dÃ  un errore di 172,7 â‚¬', '2023-04-22 12:04:10', 'garbagnatemonasteroebrongio.lecco@ana.it', 'APERTO', 'PROGRESS', NULL, '312-153.jpg', 'D'),
(224, 312, '', 'quindi una mancanza di disponibilitÃ  di cassa maggiore nonostante la cifra piÃ¹ ridotta', '2023-04-22 12:04:44', 'garbagnatemonasteroebrongio.lecco@ana.it', 'APERTO', 'PROGRESS', NULL, '', 'D'),
(225, 312, '', 'ho sistemato l\'anomalia, ho provato ad inserire il movimento di 900,00 euro ed Ã¨ andato tutto bene c\'Ã¨ nei movimenti che nell\'estratto conto. poi l\'ho cancellato per fare in modo che l\'operazione provate a farla voi, ditemi se ok', '2023-04-22 17:04:04', 'garbagnatemonasteroebrongio.lecco@ana.it', 'APERTO', 'PROGRESS', NULL, '', 'R'),
(226, 312, '', '1) Il movimento di 900 â‚¬ Ã¨ cancellato dalla \"lista movimenti contabili\" ma resta inserito nei \"movimenti tra cassa e banca\" e nei \"movimenti contabili 2023 Banca intesa\".\r\nRiinserendo il versamento da Cassa a Banca di 900 â‚¬ dÃ  errore perchÃ¨ non ci sono sufficienti disponibilitÃ  di cassa come si vede nel Cruscotto \r\n esercizi aperti.\r\n2) Ho messo per prova un versamento di 10 â‚¬ e ha funzionato perÃ² nella lista movimenti contabili non appare (mentre appare nelle altre liste).\r\n3) Ho provato con un versamento di 100 â‚¬ e mi dÃ  errore (vedi file allegato) per insufficiente saldo disponibile anche se dal cruscotto esercizi aperti dovrei disporre ancora di 162,27 â‚¬.\r\n\r\ncordiali saluti\r\n\r\nGerolamo Riva', '2023-04-24 10:04:24', 'garbagnatemonasteroebrongio.lecco@ana.it', 'APERTO', 'PROGRESS', NULL, '312-154.jpg', 'D'),
(227, 312, '', 'ho verificato il movimento di 900,00 euro da cassa a banca Ã¨ correttamente inserito, anche quello di 10,00 euro, i movimenti da cassa/banca/cassa vengono  listati tramite la funzione \"lista movimenti da cassa a banca\" non appaiono nella funzione \"lista movimenti contabili\" per vederli se inseriti correttamente bisogna eseguire la funzione \"Stampa E/conto\" della banca e quello della cassa. il saldo cassa al 24/04/2023 Ã¨ di 162,27 e della banca Ã¨ di 2.778,22. non ho riscontrato anomalie nel caso in settimana ci sentiamo telefonicamente per confrontarci. saluti domenico', '2023-04-24 18:04:30', 'garbagnatemonasteroebrongio.lecco@ana.it', 'APERTO', 'PROGRESS', NULL, '', 'R'),
(228, 312, '', 'ok. Ci sentiamo alla prima occasione. Grazie di tutto', '2023-04-27 09:04:20', 'garbagnatemonasteroebrongio.lecco@ana.it', 'APERTO', 'PROGRESS', NULL, '', 'D'),
(229, 312, '', 'CHIUSO TIKET DA UTENTE', '2023-04-27 09:04:24', 'garbagnatemonasteroebrongio.lecco@ana.it', 'APERTO', 'PROGRESS', NULL, '', 'C'),
(230, 312, '', 'RIAPERTURA TIKET DA UTENTE', '2023-05-06 13:05:39', 'garbagnatemonasteroebrongio.lecco@ana.it', 'APERTO', 'PROGRESS', NULL, '', 'P'),
(231, 307, '', 'RIAPERTURA TIKET DA UTENTE', '2023-05-06 13:05:44', 'garbagnatemonasteroebrongio.lecco@ana.it', 'APERTO', 'PROGRESS', NULL, '', 'P'),
(232, 312, '', 'CHIUSO TIKET DA UTENTE', '2023-05-06 13:05:23', 'garbagnatemonasteroebrongio.lecco@ana.it', 'APERTO', 'PROGRESS', NULL, '', 'C'),
(233, 307, '', 'CHIUSO TIKET DA UTENTE', '2023-05-06 13:05:27', 'garbagnatemonasteroebrongio.lecco@ana.it', 'APERTO', 'PROGRESS', NULL, '', 'C'),
(234, 315, '', 'dovrei avere risolto controlla se ok chiudi il tiket', '2023-05-09 18:05:47', 'tommyguenzani@gmail.com', 'APERTO', 'PROGRESS', NULL, '', 'R'),
(235, 310, '', 'CHIUSO TIKET DA HELP DESK', '2023-05-09 18:05:59', 'tommyguenzani@gmail.com', 'APERTO', 'PROGRESS', NULL, '', 'C'),
(236, 311, '', 'CHIUSO TIKET DA HELP DESK', '2023-05-09 18:05:19', 'tommyguenzani@gmail.com', 'APERTO', 'PROGRESS', NULL, '', 'C');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `ticketgest`
--
ALTER TABLE `ticketgest`
  ADD PRIMARY KEY (`progr`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `ticketgest`
--
ALTER TABLE `ticketgest`
  MODIFY `progr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
