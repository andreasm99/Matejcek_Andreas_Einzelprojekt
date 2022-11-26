-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Erstellungszeit: 26. Nov 2022 um 17:30
-- Server-Version: 8.0.31
-- PHP-Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `revierplan`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `a_user`
--

CREATE TABLE `a_user` (
  `id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `vorname` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `nachname` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastLogin` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Daten für Tabelle `a_user`
--

INSERT INTO `a_user` (`id`, `username`, `vorname`, `nachname`, `password`, `email`, `createdAt`, `lastLogin`) VALUES
(1, 'admin', 'Max', 'Bustermann', '$2y$10$IdL6pJl3H/kf.MgdRYwFV.fmEQm3aGiMGBv5lLyoI/9ePf3ALDC/q', 'test@test.com', '2022-11-18 09:36:22', '2022-11-25 15:40:46'),
(11, 'janmichels', 'Jan', 'Michels', '$2y$10$lJ1dt.3PuNWofxpIdnSUBuEhjeANFHbTkKFdI5fNyA0OcuEwiIPhS', 'jan@michels.de', '2022-11-26 17:05:23', '0000-00-00 00:00:00'),
(12, 'janmichels', 'Jan', 'Michels', '$2y$10$ZbBuDhx3nx2/JxDjOEMAg.wW6wc78iVaIzFM.nz02mi8WFro4B1TO', 'jan@michels.de', '2022-11-26 17:05:56', '0000-00-00 00:00:00');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `a_user`
--
ALTER TABLE `a_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `a_user`
--
ALTER TABLE `a_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
