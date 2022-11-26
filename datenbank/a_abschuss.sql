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
-- Tabellenstruktur für Tabelle `a_abschuss`
--

CREATE TABLE `a_abschuss` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `animal` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int NOT NULL,
  `weight` int NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Daten für Tabelle `a_abschuss`
--

INSERT INTO `a_abschuss` (`id`, `name`, `type`, `animal`, `gender`, `age`, `weight`, `date`, `time`) VALUES
(21, 'Max', 'Abschuss', 'Muffelwild', '🔵', 1, 1, '2022-11-11', '10:05:00'),
(23, 'Max', 'Abschuss', 'Waschbär', '🟣', 2, 6, '2022-11-12', '07:05:00');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `a_abschuss`
--
ALTER TABLE `a_abschuss`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `a_abschuss`
--
ALTER TABLE `a_abschuss`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
