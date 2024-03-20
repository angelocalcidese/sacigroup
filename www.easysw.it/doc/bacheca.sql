-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 89.46.111.195:3306
-- Creato il: Gen 04, 2022 alle 15:00
-- Versione del server: 5.7.32-35-log
-- Versione PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Sql1435090_2`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `bacheca`
--

CREATE TABLE `bacheca` (
  `testo` varchar(20000) NOT NULL,
  `progr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `bacheca`
--

INSERT INTO `bacheca` (`testo`, `progr`) VALUES
('<center style=\"text-align: center; text-decoration-line: underline;\"><b><font size=\"4\" style=\"background-color: rgb(255, 0, 0);\" color=\"#cc66cc\"><br></font></b></center><center style=\"text-align: center;\"><b style=\"\"><font size=\"4\" style=\"background-color: rgb(0, 255, 102);\" color=\"#cc66cc\">GRANDI PULIZIE IN REFETTORIO</font></b></center><center style=\"text-align: left;\"><br></center><center style=\"text-align: left;\"><font size=\"4\">Work in progress</font></center><center style=\"text-align: center; text-decoration-line: underline;\"><b><font size=\"4\" color=\"#ffffff\" style=\"background-color: rgb(255, 0, 0);\"><br></font></b></center><center style=\"text-align: center; text-decoration-line: underline;\"><b><font size=\"4\" color=\"#ffffff\" style=\"background-color: rgb(255, 0, 0);\">INIZIATIVA \"DOLCE NATALE\"</font></b></center><center style=\"text-align: center;\"><p style=\"text-align: left;\"><span style=\"font-family: arial;\"><font size=\"4\">L\'iniziativa Ã¨ stata molto apprezzata dagli ospiti.</font></span></p><p style=\"text-align: left;\"><span style=\"font-family: arial;\"><font size=\"4\">Abbiamo distribuito 85 \"Dolce Natale\" nelle borse donateci da MD.</font></span></p><p style=\"text-align: left;\"><font face=\"arial\" size=\"4\">Il Dolce Natale n. 86 Ã¨ stato donato ai ragazzi della Banda Civica che il giorno 24 ci hanno allietato con le musiche natalizie della Piva</font><font face=\"arial\" size=\"5\">.</font></p><p style=\"text-align: left;\"><font face=\"arial\" size=\"4\">Grazie a tutti i generosi volontari.</font></p><p style=\"text-align: left;\"><font face=\"arial\" size=\"4\"><br></font></p></center><center style=\"text-align: center;\"><div style=\"text-align: start; -webkit-text-size-adjust: auto; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-family: UICTFontTextStyleBody; font-size: 23px;\"><center style=\"font-size: medium; font-weight: bold; text-decoration-line: underline;\"><b style=\"caret-color: rgb(33, 37, 41); background-color: rgb(0, 255, 102); color: rgb(33, 37, 41); font-family: verdana;\"><u>GREEN PASS</u></b></center><center><font color=\"#212529\" size=\"3\" face=\"verdana\"><span style=\"caret-color: rgb(33, 37, 41); background-color: rgb(0, 255, 102);\"><b><u><br></u></b></span></font></center><center><div style=\"text-align: start;\">Come ben noto dal 15 ottobre Ã¨ in vigore la normativa per l\'accesso dei volontari alla struttura condizionato al possesso del Green Pass in corso di validitÃ  o in alternativa l\'esito negativo di un tampone effettuato entro le 48 h dal servizio.</div><div><br></div></center></div><div style=\"text-align: start; -webkit-text-size-adjust: auto; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-family: UICTFontTextStyleBody; font-size: 23px;\">Non appena cambieranno le modalitÃ  e/o normative sarÃ  nostra cura informarvi.</div></center><center style=\"text-align: center;\"><br></center>', 1);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `bacheca`
--
ALTER TABLE `bacheca`
  ADD PRIMARY KEY (`progr`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `bacheca`
--
ALTER TABLE `bacheca`
  MODIFY `progr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
