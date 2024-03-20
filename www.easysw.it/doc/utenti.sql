-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 31.11.39.82:3306
-- Creato il: Apr 29, 2023 alle 07:44
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
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `progr` int(11) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `dio` varchar(1) NOT NULL DEFAULT '0',
  `soci` varchar(2) NOT NULL DEFAULT 'SI',
  `donasioni` varchar(2) NOT NULL DEFAULT 'SI',
  `contabilita` varchar(2) NOT NULL DEFAULT 'SI',
  `nazione` varchar(50) DEFAULT NULL,
  `citta` varchar(50) NOT NULL DEFAULT 'MILANO',
  `zona` varchar(100) NOT NULL DEFAULT 'Centro Ascolto',
  `codvolontario` varchar(5) NOT NULL DEFAULT '',
  `email` varchar(70) DEFAULT NULL,
  `cognome` varchar(100) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `tessera` int(11) NOT NULL DEFAULT '1',
  `contasoci` int(11) NOT NULL DEFAULT '1',
  `numeroricevuta` int(11) DEFAULT '0',
  `numerovolontario` int(11) DEFAULT '0',
  `tesserask` int(11) DEFAULT '0',
  `contadonatore` int(11) DEFAULT NULL,
  `contassegni` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`progr`, `login`, `password`, `dio`, `soci`, `donasioni`, `contabilita`, `nazione`, `citta`, `zona`, `codvolontario`, `email`, `cognome`, `nome`, `telefono`, `tessera`, `contasoci`, `numeroricevuta`, `numerovolontario`, `tesserask`, `contadonatore`, `contassegni`) VALUES
(2, 'mimmo', 'mimmo', '1', 'SI', 'SI', 'SI', 'ITALIA', 'MILANO', '', '936', '', 'Calcidese', 'Domenico', '', 2, 34, 25, 1, 0, 2, 24),
(3, 'marco', 'marco', '1', 'SI', 'SI', 'SI', 'ITALIA', 'MILANO', '', '937', 'm52888232@gmail.com', 'Lattuada', 'Marco', '', 3, 20, 35, 23, 4, 4, NULL),
(31, 'arcamutua@gmail.com', 'o5aZkzMu', '1', 'SI', 'SI', 'SI', NULL, 'MILANO', 'Centro Ascolto', '221', 'arcamutua@gmail.com', 'ARCA MUTUA', '', NULL, 1, 1662, 0, 0, 0, NULL, NULL),
(32, 'lucia.ben1412@gmail.com', '2GIScEL0', '1', 'SI', 'SI', 'SI', NULL, 'MILANO', 'Centro Ascolto', '222', 'lucia.ben1412@gmail.com', 'Scuola Elementare Sociale', '', NULL, 1, 1, 0, 0, 0, NULL, NULL),
(27, 'calcidese.domenico@gmail.com', 'pippo', '1', 'SI', 'SI', 'SI', NULL, 'MILANO', 'Centro Ascolto', '217', 'calcidese.domenico@gmail.com', 'Banca del Tempo Carpe Diem ETS', '', NULL, 1, 10, 0, 0, 0, NULL, NULL),
(33, 'bancadeltempocarpediem@gmail.com', 'carpediem', '1', 'SI', 'SI', 'SI', NULL, 'MILANO', 'Centro Ascolto', '223', 'bancadeltempocarpediem@gmail.com', 'BANCA DEL TEMPO CARPEDIEM', '', NULL, 1, 1, 0, 0, 0, NULL, NULL),
(34, 'tommyguenzani@gmail.com', 'pquzm7tW', '1', 'SI', 'SI', 'SI', NULL, 'MILANO', 'Centro Ascolto', '225', 'tommyguenzani@gmail.com', 'La Banca del Tempo Auser Insieme di Legnano APS ETS', '', NULL, 1, 76, 41, 0, 0, NULL, 230),
(35, 'alessandro.bossi@uniter-arese.it', 'UbESdZ9N', '1', 'SI', 'SI', 'SI', NULL, 'MILANO', 'Centro Ascolto', '226', 'alessandro.bossi@uniter-arese.it', 'UNI TER Arese APS', '', NULL, 1, 1, 0, 0, 0, NULL, NULL),
(40, 'bdtcusago@gmx.com', 'Cusago23@', '1', 'SI', 'SI', 'SI', NULL, 'MILANO', 'Centro Ascolto', '232', 'bdtcusago@gmx.com', 'BANCA DEL TEMPO DI CUSAGO APS-ETS', '', NULL, 1, 3, 0, 0, 0, NULL, NULL),
(37, 'garbagnatemonasteroebrongio.lecco@ana.it', 'Alpini11', '1', 'SI', 'SI', 'SI', NULL, 'MILANO', 'Centro Ascolto', '228', 'garbagnatemonasteroebrongio.lecco@ana.it', 'Associazione Alpini di Garbagnate Monastero e Brongio APS', '', NULL, 1, 58, 0, 32, 0, NULL, NULL),
(38, 'p00006562@gmail.it', 'umOafYHc', '1', 'SI', 'SI', 'SI', NULL, 'MILANO', 'Centro Ascolto', '229', 'p00006562@gmail.it', 'associazione di prova ', '', NULL, 1, 1, 0, 0, 0, NULL, NULL),
(39, 'p00006562@gmail.com', 'nuovapassword', '1', 'SI', 'SI', 'SI', NULL, 'MILANO', 'Centro Ascolto', '230', 'p00006562@gmail.com', 'associazione di prova due', '', NULL, 1, 3, 0, 1, 0, NULL, NULL),
(41, 'sergio.amidani@gmail.com', 'j7U8rEAz', '1', 'SI', 'SI', 'SI', NULL, 'MILANO', 'Centro Ascolto', '233', 'sergio.amidani@gmail.com', 'SERGIO AMIDANI FANTASY', '', NULL, 1, 1, 0, 0, 0, NULL, NULL),
(42, 'info@zunelliassociati.it', 'neroverde', '1', 'SI', 'SI', 'SI', NULL, 'MILANO', 'Centro Ascolto', '234', 'NeVe@libero.it', 'NERO VERDI ODV', '', NULL, 1, 1, 0, 0, 0, NULL, NULL),
(48, 'utente-595', 'Romano', '1', 'SI', 'SI', 'SI', NULL, 'MILANO', 'Centro Ascolto', '234', 'romano.bert@gmail.com', 'BERTOZZI ROMANO', '', NULL, 1, 1, 0, 0, 0, NULL, NULL);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`progr`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `progr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
