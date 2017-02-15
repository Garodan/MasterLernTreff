-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 15. Feb 2017 um 22:45
-- Server-Version: 10.1.16-MariaDB
-- PHP-Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `lerntreff_db`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `forumeintraege`
--

CREATE TABLE `forumeintraege` (
  `ID` int(11) NOT NULL,
  `thema_forum` text NOT NULL,
  `beitrag_forum` text NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `forumeintraege`
--

INSERT INTO `forumeintraege` (`ID`, `thema_forum`, `beitrag_forum`, `userID`) VALUES
(1, 'asd', 'asd', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `treffeneintraege`
--

CREATE TABLE `treffeneintraege` (
  `ID` int(11) NOT NULL,
  `ueberschrift_treff` text NOT NULL,
  `studiengang_treff` text NOT NULL,
  `semester_treff` text NOT NULL,
  `modul_treff` text NOT NULL,
  `ort_treff` text NOT NULL,
  `datum_treff` date NOT NULL,
  `zeit_treff` time NOT NULL,
  `beschreibung_treff` text NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `treffeneintraege`
--

INSERT INTO `treffeneintraege` (`ID`, `ueberschrift_treff`, `studiengang_treff`, `semester_treff`, `modul_treff`, `ort_treff`, `datum_treff`, `zeit_treff`, `beschreibung_treff`, `userID`) VALUES
(1, 'asd', 'Industrielle Elektrotechnik', '4. Semester', 'asdada', 'asdasda', '2017-02-10', '22:23:00', 'afdwhfdfgnjfg', 0);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `forumeintraege`
--
ALTER TABLE `forumeintraege`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `treffeneintraege`
--
ALTER TABLE `treffeneintraege`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `forumeintraege`
--
ALTER TABLE `forumeintraege`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `treffeneintraege`
--
ALTER TABLE `treffeneintraege`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
