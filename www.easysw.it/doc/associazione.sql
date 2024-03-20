-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 31.11.39.82:3306
-- Creato il: Apr 29, 2023 alle 07:38
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
-- Struttura della tabella `associazione`
--

CREATE TABLE `associazione` (
  `progr` int(11) NOT NULL,
  `intesta1` varchar(150) DEFAULT NULL,
  `intesta2` varchar(150) DEFAULT NULL,
  `indirizzo` varchar(150) DEFAULT NULL,
  `localita` varchar(150) DEFAULT NULL,
  `cf` varchar(20) DEFAULT NULL,
  `runs` varchar(20) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `rappresentante` varchar(200) DEFAULT NULL,
  `iva` varchar(15) DEFAULT NULL,
  `forma` varchar(200) DEFAULT NULL,
  `bilancio` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `rendi` varchar(100) DEFAULT NULL,
  `codice` int(11) DEFAULT NULL,
  `autorizzato` varchar(2) DEFAULT 'NO',
  `fine` varchar(1000) DEFAULT NULL,
  `messa` varchar(1000) DEFAULT NULL,
  `sito` varchar(100) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `assistiti` varchar(2) NOT NULL DEFAULT 'NO',
  `soci` varchar(2) DEFAULT 'NO',
  `volontari` varchar(2) DEFAULT 'NO',
  `medico` varchar(2) DEFAULT 'NO',
  `donazioni` varchar(2) NOT NULL DEFAULT 'NO',
  `ut2a` varchar(2) DEFAULT 'NO',
  `ut2` varchar(100) DEFAULT NULL,
  `email2` varchar(70) DEFAULT NULL,
  `ut3a` varchar(2) DEFAULT 'NO',
  `ut3` varchar(100) DEFAULT NULL,
  `email3` varchar(70) DEFAULT NULL,
  `primavolta` varchar(2) DEFAULT 'NO',
  `btempo` varchar(2) DEFAULT 'NO',
  `ticket` varchar(1) DEFAULT '0',
  `titdati` varchar(100) DEFAULT NULL,
  `titdaticf` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `associazione`
--

INSERT INTO `associazione` (`progr`, `intesta1`, `intesta2`, `indirizzo`, `localita`, `cf`, `runs`, `login`, `rappresentante`, `iva`, `forma`, `bilancio`, `email`, `rendi`, `codice`, `autorizzato`, `fine`, `messa`, `sito`, `telefono`, `assistiti`, `soci`, `volontari`, `medico`, `donazioni`, `ut2a`, `ut2`, `email2`, `ut3a`, `ut3`, `email3`, `primavolta`, `btempo`, `ticket`, `titdati`, `titdaticf`) VALUES
(1, 'LA CALLA', 'ORGANIZZAZIONE DI VOLONTARIATO ODV ETS', 'VIA GENERALE GIOVANNI CLER 170', '20013 - MAGENTA (MI)', '12345', '12345', 'mimmo', 'Luigi rossi', '67890', 'ETS', '06/06', 'domenico.calcidese@gmail.com', 'da 01/01 a 31/12', 936, 'SI', NULL, NULL, NULL, NULL, 'SI', 'SI', 'SI', 'NO', 'SI', 'SI', 'pippo carlo', 'calcidese.domenico@gmail.com', 'NO', '', '', 'NO', 'SI', '0', NULL, NULL),
(2, 'LA CALLA', 'ORGANIZZAZIONE DI VOLONTARIATO - ETS', 'VIA GENERALE GIOVANNI CLER 170', '20013 - MAGENTA', '93050770150', '30773', 'marco', 'Marco Lattuada', '', '', '', 'm52888232@gmail.com', '', 937, 'SI', NULL, NULL, NULL, NULL, 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'mimmo', 'domenico.calcidese@gmail.com', 'SI', 'sergio amidani', 'sergio.amidani@gmail.com', 'NO', 'SI', '0', NULL, NULL),
(43, 'Banca del Tempo Carpe Diem ETS', '', 'piazza madonna della provvidenza 1', 'Milano', '1234567', '0', 'calcidese.domenico@gmail.com', 'Domenico Calcidese', '', 'ets', '', 'calcidese.domenico@gmail.com', '', 217, 'SI', '', '', '', '3755575840', 'SI', 'SI', 'SI', 'NO', 'SI', 'SI', 'mimmo', 'domenico.calcidese@gmail.com', 'SI', 'pippo2', 'pippo@pippo3.it', 'NO', 'NO', '0', NULL, NULL),
(47, 'ARCA MUTUA', '', 'VIA FILIPPO ARGELATI N. 10', 'MILANO', '', '', 'arcamutua@gmail.com', 'ARCA', '12044520968', 'ETS', 'MARZO ', 'arcamutua@gmail.com', '', 221, 'SI', '', '', '', '', 'NO', 'SI', 'NO', 'NO', 'NO', 'SI', 'mimmo', 'commerciale@arcamutua.it', 'SI', 'nessuno', 'calcidese.domenico@gmail.com', 'NO', 'NO', '0', NULL, NULL),
(48, 'Scuola Elementare Sociale', '', 'Via Nello', 'Marcallo', '000111222333', 'Pi Greco', 'lucia.ben1412@gmail.com', 'Marco', '333222111000', 'spa', '', 'lucia.ben1412@gmail.com', '', 222, 'SI', 'Prova di iscrizione', 'Sono rimasti i dati?', 'www.lacallaodv.it', '063131', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', NULL, NULL, 'NO', NULL, NULL, 'NO', 'NO', '0', NULL, NULL),
(49, 'BANCA DEL TEMPO CARPEDIEM', '', 'PIAZZA MADONNA DELLA PROVVIDENZA 1', 'MILANO QUINTO ROMANO', '97327020158', '', 'bancadeltempocarpediem@gmail.com', 'DOMENICO CALCIDESE', '', 'ets', '', 'bancadeltempocarpediem@gmail.com', '', 223, 'SI', 'associazione senza scopo di lucro', '', 'bdt-carpediem.it', '3755575840', 'NO', 'SI', 'NO', 'NO', 'NO', 'SI', 'mimmo', 'domenico.calcidese@gmail.com', 'NO', '', '', 'SI', 'SI', '0', NULL, NULL),
(51, 'La Banca del Tempo Auser Insieme di Legnano APS ETS', '', 'Via Ciro Menotti 76', 'Legnano', '92024490150', '94973', 'tommyguenzani@gmail.com', 'Aldo Guenzani', '', 'ETS', '', 'tommyguenzani@gmail.com', '', 225, 'SI', '', '', '', '3497131040', 'NO', 'SI', 'NO', 'NO', 'NO', 'SI', 'domenico calcidese', 'domenico.calcidese@gmail.com', 'NO', '', '', 'SI', 'SI', '0', NULL, NULL),
(52, 'UNI TER Arese APS', '', 'Viale dei Platani, 6', 'Arese', '93524240152', '519', 'alessandro.bossi@uniter-arese.it', 'Alessandro Bossi', '', 'Associazione di Promozione Sociale', '', 'alessandro.bossi@uniter-arese.it', '', 226, 'SI', 'Culturale e promozione sociale', '', 'www.uniter-arese.it', '0227019311', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', NULL, NULL, 'NO', NULL, NULL, 'NO', 'NO', '0', NULL, NULL),
(54, 'Associazione Alpini di Garbagnate Monastero e Brongio APS', '', 'Viale Brianza ,18 -', ' Garbagnate Monastero (LC)', '92075660131', '824', 'garbagnatemonasteroebrongio.lecco@ana.it', 'Lorenzo Bruno', 'no', 'Associazione non riconosciuta', '', 'garbagnatemonasteroebrongio.lecco@ana.it', '', 228, 'SI', 'Promozione Sociale', 'Buongiorno, come convenuto con il Sig. Marco Lattuada inoltriamo richiesta di accesso al software Abacus per uso associativo. CordialitÃ  - Riva Gerolamo (segretario)', 'no', '3383165285', 'NO', 'SI', 'SI', 'NO', 'SI', 'SI', 'Riva Gerolamo', 'rivager@gmail.com', 'SI', 'tecnico', 'domenico.calcidese@gmail.com', 'SI', 'NO', '0', NULL, NULL),
(55, 'associazione di prova ', '', 'via lunga 1', 'magenta', '10000000', '1', 'p00006562@gmail.it', 'io', '', 'no', '', 'p00006562@gmail.it', '', 229, 'SI', '', 'vai', '', '039930214', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', NULL, NULL, 'NO', NULL, NULL, 'SI', 'NO', '0', NULL, NULL),
(56, 'associazione di prova due', '', 'via lunga 1', 'magenta', '10000000', '2', 'p00006562@gmail.com', 'io', '', 'no', '', 'p00006562@gmail.com', '', 230, 'SI', 'sÃ¬', 'sms', '', '393', 'SI', 'SI', 'SI', 'NO', 'SI', 'SI', '', 'm52888232@gmail.com', 'SI', '', 'domenico.calcidese@gmail.com', 'SI', 'NO', '0', NULL, NULL),
(58, 'BANCA DEL TEMPO DI CUSAGO APS-ETS', '', 'VIA CARLO DOSSI, 3', 'CUSAGO', '97650550151', '84964', 'bdtcusago@gmx.com', 'GIOVANNI FRAGAPANE', '', 'Associazione di Promozione Sociale - Ente del Terzo Settore', '', 'bdtcusago@gmx.com', '', 232, 'SI', 'Associazione apartitica, apolitica e aconfesionaele L\'Associazione Ã¨ un centro permanente di vita associativa e democratico la cui attivitÃ  Ã¨ espressione di partecipazione, solidarietÃ  e pluralismo. Lâ€™Associazione svolge la sua attivitÃ  in osservanza del principio di utilitÃ  sociale e di interesse generale, ed ha come finalitÃ  quella di diffondere il valore della solidarietÃ  sotto forma della reciprocitÃ , nonchÃ© quella di favorire una nuova qualitÃ  delle relazioni interpersonali nel rispetto delle pari opportunitÃ  e per la conciliazione dei tempi di vita e di lavoro. ', 'Buna sera, a seguito di uno scambio telefonico con Domenico Calcidese chiediamo un vostro aiuto per la gestione soci, bilancio, scambio ore della nostra associazione Banca del Tempo con il vostro gestionale. Cordialmente MariÃ ngeles ExpÃ²sito', '', '347 7972898', 'NO', 'SI', 'NO', 'NO', 'NO', 'NO', '', '', 'NO', '', '', 'SI', 'SI', '0', NULL, NULL),
(59, 'SERGIO AMIDANI FANTASY', '', 'VIA DELLA PACE 8', 'Trecate', 'MDNSRG55E20F962J', '1717', 'sergio.amidani@gmail.com', 'AMIDANI SERGIO', '', 'ODV', '', 'sergio.amidani@gmail.com', '', 233, 'SI', 'Testare Abacuscalla', '', '', '3355784096', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', NULL, NULL, 'NO', NULL, NULL, 'SI', 'NO', '0', NULL, NULL),
(60, 'NERO VERDI ODV', '', 'Via Triestina 222', 'Pordenone', '01234567898', '121212', 'info@zunelliassociati.it', 'Pippo Laneve', '01234567898', 'ODV', '', 'info@zunelliassociati.it', '', 234, 'SI', 'Raccolta fondi per donazioni per il terzo mondo', 'ZF', 'www.NeVePn.calcio', '0434-123456789', 'SI', 'SI', 'SI', 'NO', 'SI', 'SI', '', 'domenico.calcidese@gmail.com', 'NO', '', '', 'SI', 'NO', '0', NULL, NULL),
(66, 'AUSERBORGO', NULL, NULL, NULL, NULL, NULL, 'utente-595', 'BERTAZZI ROMANO', NULL, NULL, NULL, 'romano.bert@gmail.com', NULL, NULL, 'NO', NULL, NULL, NULL, NULL, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', NULL, NULL, 'NO', NULL, NULL, 'NO', 'NO', '0', NULL, NULL);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `associazione`
--
ALTER TABLE `associazione`
  ADD PRIMARY KEY (`progr`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `associazione`
--
ALTER TABLE `associazione`
  MODIFY `progr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
