-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Sty 2021, 01:34
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `anime-rating-website-db`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `anime`
--

CREATE TABLE `anime` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `rating` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `anime`
--

INSERT INTO `anime` (`id`, `title`, `categoryID`, `rating`) VALUES
(1, 'Sword Art Online', 1, 5),
(2, 'Hellsing Ultimate', 5, 5),
(3, 'Sirius the Jaeger', 1, 0),
(4, 'JoJo\'s Bizarre', 1, 0),
(5, 'Dragon\'s Dogma', 1, 0),
(6, 'Boku no Hero Academia', 1, 0),
(7, 'Castlevania', 1, 3),
(8, 'Fullmetal Alchemist: Brotherhood', 2, 0),
(9, 'Hunter x Hunter', 2, 0),
(10, 'Sword Art Online', 2, 0),
(11, 'Naruto', 2, 0),
(12, 'No Game No Life', 2, 0),
(13, 'Cromartie High School', 3, 0),
(14, 'Level e', 3, 2.5),
(15, 'Gintama', 3, 0),
(16, 'Tamako Market', 3, 0),
(17, 'The Disastrous Life of Saiki K.', 3, 0),
(18, 'Shingeki no Kyojin', 4, 0),
(19, 'Tokyo Ghoul', 4, 0),
(20, ' Kimi no Na wa.', 4, 0),
(21, 'Angel Beats!', 4, 0),
(22, 'Code Geass: Hangyaku no Lelouch', 4, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Akcja'),
(2, 'Bajka przygodowa'),
(3, 'Komedia'),
(4, 'Dramat'),
(5, 'Fantasy');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `listedanime`
--

CREATE TABLE `listedanime` (
  `userID` int(11) NOT NULL,
  `animeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `listedanime`
--

INSERT INTO `listedanime` (`userID`, `animeID`) VALUES
(14, 20),
(14, 22),
(14, 12),
(14, 15),
(14, 11);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ratedanime`
--

CREATE TABLE `ratedanime` (
  `id` int(11) NOT NULL,
  `animeID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `userRating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `ratedanime`
--

INSERT INTO `ratedanime` (`id`, `animeID`, `userID`, `userRating`) VALUES
(1, 22, 14, 4),
(2, 9, 14, 3.5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(13, 'alicjakwiecien@gmail.com', '$2y$10$yg/GaOWSOc.IS6ty9YYGXOoA8vN.TaSsKG5gQuXKvQJzbEjS0DuDS'),
(14, 'annanowak@gmail.com', '$2y$10$gbSO83AUHeSgeHafEdRzZelNdkIsVcPygu8cJjNo2WKVLmzm4WWZy'),
(15, 'jankowalski@gmail.com', '$2y$10$eWfJatZLFboXj/8aPtUdbeBrHe/KFA6BOSGvk8yF2/mUufp/vtBg2');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indeksy dla tabeli `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `listedanime`
--
ALTER TABLE `listedanime`
  ADD KEY `animeID` (`animeID`),
  ADD KEY `userID` (`userID`);

--
-- Indeksy dla tabeli `ratedanime`
--
ALTER TABLE `ratedanime`
  ADD PRIMARY KEY (`id`),
  ADD KEY `animeID` (`animeID`),
  ADD KEY `userID` (`userID`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT dla tabeli `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `ratedanime`
--
ALTER TABLE `ratedanime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `anime`
--
ALTER TABLE `anime`
  ADD CONSTRAINT `anime_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`id`);

--
-- Ograniczenia dla tabeli `listedanime`
--
ALTER TABLE `listedanime`
  ADD CONSTRAINT `listedanime_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `listedanime_ibfk_2` FOREIGN KEY (`animeID`) REFERENCES `anime` (`id`);

--
-- Ograniczenia dla tabeli `ratedanime`
--
ALTER TABLE `ratedanime`
  ADD CONSTRAINT `ratedanime_ibfk_1` FOREIGN KEY (`animeID`) REFERENCES `anime` (`id`),
  ADD CONSTRAINT `ratedanime_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
