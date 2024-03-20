-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 31.11.39.82:3306
-- Creato il: Apr 22, 2023 alle 07:45
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
-- Struttura della tabella `prestazione`
--

CREATE TABLE `prestazione` (
  `prg` int(11) NOT NULL,
  `descrizione` varchar(100) NOT NULL,
  `datacreazione` datetime NOT NULL,
  `operatore` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `prestazione`
--

INSERT INTO `prestazione` (`prg`, `descrizione`, `datacreazione`, `operatore`) VALUES
(1, 'B - Baby', '2023-02-24 12:36:13', 'tommyguenzani@gmail.com'),
(2, 'C - Giochi', '2023-02-24 12:36:28', 'tommyguenzani@gmail.com'),
(3, 'D - Taglia&Cuci', '2023-02-24 12:37:14', 'tommyguenzani@gmail.com'),
(4, 'E - Cucina', '2023-02-24 12:37:40', 'tommyguenzani@gmail.com'),
(5, 'G - Gestione BdT', '2023-02-24 12:37:46', 'tommyguenzani@gmail.com'),
(6, 'J - Benessere', '2023-02-24 12:38:06', 'tommyguenzani@gmail.com'),
(7, 'K - Cose', '2023-02-24 12:38:27', 'tommyguenzani@gmail.com'),
(8, 'L - Didattica', '2023-02-24 12:38:37', 'tommyguenzani@gmail.com'),
(9, 'M - Hobbistica', '2023-02-24 12:39:02', 'tommyguenzani@gmail.com'),
(10, 'P - AttivitÃ ', '2023-02-24 12:42:19', 'tommyguenzani@gmail.com'),
(11, 'N - Consulenza', '2023-02-24 12:46:01', 'tommyguenzani@gmail.com'),
(12, 'R - Pollice Verde', '2023-02-24 12:46:28', 'tommyguenzani@gmail.com'),
(13, 'U - Pratiche Varie', '2023-02-24 12:46:57', 'tommyguenzani@gmail.com'),
(14, 'Z - Riparazioni', '2023-02-24 12:47:18', 'tommyguenzani@gmail.com'),
(15, 'T - Cultura', '2023-02-24 12:47:37', 'tommyguenzani@gmail.com'),
(16, 'S - Sport', '2023-02-24 12:47:51', 'tommyguenzani@gmail.com'),
(24, 'F - Fattoria', '2023-04-06 14:01:47', 'tommyguenzani@gmail.com');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `prestazione`
--
ALTER TABLE `prestazione`
  ADD PRIMARY KEY (`prg`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `prestazione`
--
ALTER TABLE `prestazione`
  MODIFY `prg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
