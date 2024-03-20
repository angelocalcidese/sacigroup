-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 31.11.39.82:3306
-- Creato il: Gen 14, 2024 alle 09:31
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
-- Struttura della tabella `progressivoticket`
--

CREATE TABLE `progressivoticket` (
  `progr` int(11) NOT NULL,
  `tessera` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `progressivoticket`
--

INSERT INTO `progressivoticket` (`progr`, `tessera`) VALUES
(1, 357);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `progressivoticket`
--
ALTER TABLE `progressivoticket`
  ADD PRIMARY KEY (`progr`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `progressivoticket`
--
ALTER TABLE `progressivoticket`
  MODIFY `progr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
