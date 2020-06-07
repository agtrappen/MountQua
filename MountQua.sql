-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2020 at 07:05 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mountqua`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `ArtikelID` int(11) NOT NULL,
  `Naam` varchar(255) DEFAULT NULL,
  `Omschrijving` varchar(255) DEFAULT NULL,
  `Prijs` decimal(10,0) DEFAULT NULL,
  `Voorraad` int(11) DEFAULT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`ArtikelID`, `Naam`, `Omschrijving`, `Prijs`, `Voorraad`, `Image`) VALUES
(1, 'Qua rood', 'water met een rood kleurtje', '3', 4, 'public/img/rood.jpg'),
(2, 'Qua Bruisend', 'bruisend water', '4', 33, 'public/img/bruisend.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bedrijf`
--

CREATE TABLE `bedrijf` (
  `BedrijfID` int(11) NOT NULL,
  `Plaats` varchar(255) DEFAULT NULL,
  `Postcode` varchar(255) DEFAULT NULL,
  `Land` varchar(255) NOT NULL,
  `Btw` varchar(255) NOT NULL,
  `Kvk` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Telefoon` varchar(255) DEFAULT NULL,
  `Bedrijfsnaam` varchar(255) DEFAULT NULL,
  `Titel` varchar(255) NOT NULL,
  `Subtitel` varchar(255) NOT NULL,
  `Content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bedrijf`
--

INSERT INTO `bedrijf` (`BedrijfID`, `Plaats`, `Postcode`, `Land`, `Btw`, `Kvk`, `Email`, `Telefoon`, `Bedrijfsnaam`, `Titel`, `Subtitel`, `Content`) VALUES
(1, 'Hogeschoollaan ', '4818 CR', 'Nederland', 'NL808852218B012', '411044081', 'test@gmail.com', '02315456652', 'MountQua B.V.', 'Vanaf de top gezuiverd!', 'De bron is belangrijker dan het flesje', 'In alles wat we doen staat respect voor de natuur op nummer 1. <br>Vanaf de bron van ons water tot de manier waarop we de flessen maken en ermee omgaan.');

-- --------------------------------------------------------

--
-- Table structure for table `bestelling`
--

CREATE TABLE `bestelling` (
  `Bestelnummer` int(11) NOT NULL,
  `GebruikerID` int(11) DEFAULT NULL,
  `Datum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bestelling`
--

INSERT INTO `bestelling` (`Bestelnummer`, `GebruikerID`, `Datum`) VALUES
(1, 1, '2020-02-08'),
(2, 1, '2020-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `bestelling_artikel`
--

CREATE TABLE `bestelling_artikel` (
  `ID` int(11) NOT NULL,
  `ArtikelID` int(11) DEFAULT NULL,
  `Bestelnummer` int(11) DEFAULT NULL,
  `Aantal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bestelling_artikel`
--

INSERT INTO `bestelling_artikel` (`ID`, `ArtikelID`, `Bestelnummer`, `Aantal`) VALUES
(1, 2, 1, 3),
(2, 2, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `factuur`
--

CREATE TABLE `factuur` (
  `FactuurID` int(11) NOT NULL,
  `Bestelnummer` int(11) DEFAULT NULL,
  `Betaald` tinyint(1) DEFAULT NULL,
  `Datum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gebruiker`
--

CREATE TABLE `gebruiker` (
  `GebruikerID` int(11) NOT NULL,
  `BedrijfID` int(11) DEFAULT NULL,
  `RolID` int(11) NOT NULL,
  `Voornaam` varchar(255) DEFAULT NULL,
  `Achternaam` varchar(255) DEFAULT NULL,
  `Geboortedatum` date DEFAULT NULL,
  `Straat` varchar(255) DEFAULT NULL,
  `Postcode` varchar(255) DEFAULT NULL,
  `Woonplaats` varchar(255) DEFAULT NULL,
  `Wachtwoord` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Telefoon` varchar(255) DEFAULT NULL,
  `Aanmaakdatum` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `languages` (
	`id` int(11) PRIMARY KEY NOT NULL,
    `titel` varchar(255) NOT NULL,
    `content_nl` varchar(255) NOT NULL,
    `content_en` varchar(255) NOT NULL
    
);

INSERT INTO `Languages` (`id`,`titel`,`content_nl`,`content_en`)
VALUES 
(1,"home","Home","Home"),
(2,"onzeProducten","Onze Producten","Our Products"),
(3,"overOns","Over Ons","About Us"),
(4,"contact","Contact","Contact");




--
-- Dumping data for table `gebruiker`
--

INSERT INTO `gebruiker` (`GebruikerID`, `BedrijfID`, `RolID`, `Voornaam`, `Achternaam`, `Geboortedatum`, `Straat`, `Postcode`, `Woonplaats`, `Wachtwoord`, `Email`, `Telefoon`, `Aanmaakdatum`) VALUES
(1, 1, 2, 'Alexander', 'Trappenberg', '1998-10-18', 'Korenbloem', '3144ep', 'Nederland', '$2y$10$EgkTm.VH8AkMKObhI290s..oPHZGjw/FPj/F9pB8.SuMa15sA3lLG', 'testovich@gmail.com', '0632243234234', '2020-08-02'),
(3, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$IBOu9Pt2QuPkOD6YIP6vhejogC7VFJ96N9n1K9MuX4J1L6/TdTvZ6', 'test@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `RolID` int(1) NOT NULL,
  `Role_Name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`RolID`, `Role_Name`) VALUES
(1, 'admin'),
(2, 'read_only'),
(3, 'edit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`ArtikelID`);

--
-- Indexes for table `bedrijf`
--
ALTER TABLE `bedrijf`
  ADD PRIMARY KEY (`BedrijfID`);

--
-- Indexes for table `bestelling`
--
ALTER TABLE `bestelling`
  ADD PRIMARY KEY (`Bestelnummer`),
  ADD KEY `bestelling_ibfk_1` (`GebruikerID`);

--
-- Indexes for table `bestelling_artikel`
--
ALTER TABLE `bestelling_artikel`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `bestelling_artikel_ibfk_1` (`Bestelnummer`),
  ADD KEY `bestelling_artikel_ibfk_2` (`ArtikelID`);

--
-- Indexes for table `factuur`
--
ALTER TABLE `factuur`
  ADD PRIMARY KEY (`FactuurID`),
  ADD KEY `factuur_ibfk_1` (`Bestelnummer`);

--
-- Indexes for table `gebruiker`
--
ALTER TABLE `gebruiker`
  ADD PRIMARY KEY (`GebruikerID`),
  ADD KEY `gebruiker_ibfk_1` (`BedrijfID`),
  ADD KEY `gebruiker_ibfk_2` (`RolID`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`RolID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `ArtikelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bedrijf`
--
ALTER TABLE `bedrijf`
  MODIFY `BedrijfID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bestelling`
--
ALTER TABLE `bestelling`
  MODIFY `Bestelnummer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `factuur`
--
ALTER TABLE `factuur`
  MODIFY `FactuurID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gebruiker`
--
ALTER TABLE `gebruiker`
  MODIFY `GebruikerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bestelling`
--
ALTER TABLE `bestelling`
  ADD CONSTRAINT `bestelling_ibfk_1` FOREIGN KEY (`GebruikerID`) REFERENCES `gebruiker` (`GebruikerID`);

--
-- Constraints for table `bestelling_artikel`
--
ALTER TABLE `bestelling_artikel`
  ADD CONSTRAINT `bestelling_artikel_ibfk_1` FOREIGN KEY (`Bestelnummer`) REFERENCES `bestelling` (`Bestelnummer`),
  ADD CONSTRAINT `bestelling_artikel_ibfk_2` FOREIGN KEY (`ArtikelID`) REFERENCES `artikel` (`ArtikelID`);

--
-- Constraints for table `factuur`
--
ALTER TABLE `factuur`
  ADD CONSTRAINT `factuur_ibfk_1` FOREIGN KEY (`Bestelnummer`) REFERENCES `bestelling` (`Bestelnummer`);

--
-- Constraints for table `gebruiker`
--
ALTER TABLE `gebruiker`
  ADD CONSTRAINT `gebruiker_ibfk_1` FOREIGN KEY (`BedrijfID`) REFERENCES `bedrijf` (`BedrijfID`),
  ADD CONSTRAINT `gebruiker_ibfk_2` FOREIGN KEY (`RolID`) REFERENCES `rol` (`RolID`);
  

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
