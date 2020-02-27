-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 07:53 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `Voorraad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `bestelling_artikel` (
  `ID` int(11) NOT NULL,
  `ArtikelID` int(11) DEFAULT NULL,
  `Bestelnummer` int(11) DEFAULT NULL,
  `Aantal` INT(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bedrijf`
--

CREATE TABLE `bedrijf` (
  `BedrijfID` int(11) NOT NULL,
  `Plaats` varchar(255) DEFAULT NULL,
  `Postcode` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Telefoon` varchar(255) DEFAULT NULL,
  `Bedrijfsnaam` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bedrijf`
--

INSERT INTO `bedrijf` (`BedrijfID`, `Plaats`, `Postcode`, `Email`, `Telefoon`, `Bedrijfsnaam`) VALUES
(1, 'rotterdam', '2545fg', 'k.aylee@hotmail.nl', '02315456652', 'HTS');

-- --------------------------------------------------------

--
-- Table structure for table `bestelling`
--

CREATE TABLE `bestelling` (
  `Bestelnummer` int(11) NOT NULL,
  `GebruikerID` int(11) DEFAULT NULL,
  `Datum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `factuur`
--

CREATE TABLE `factuur` (
  `FactuurID` int(11) NOT NULL,
  `Bestelnummer` int(11) DEFAULT NULL,
  `Betaald` boolean DEFAULT NULL,
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

ALTER TABLE `bestelling_artikel`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bedrijf`
--
ALTER TABLE `bedrijf`
  ADD PRIMARY KEY (`BedrijfID`);

--
-- Indexes for table `bestelling`
--
ALTER TABLE `bestelling`
  ADD PRIMARY KEY (`Bestelnummer`);

--
-- Indexes for table `factuur`
--
ALTER TABLE `factuur`
  ADD PRIMARY KEY (`FactuurID`);

--
-- Indexes for table `gebruiker`
--
ALTER TABLE `gebruiker`
  ADD PRIMARY KEY (`GebruikerID`);

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
  MODIFY `ArtikelID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bedrijf`
--
ALTER TABLE `bedrijf`
  MODIFY `BedrijfID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bestelling`
--
ALTER TABLE `bestelling`
  MODIFY `Bestelnummer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `factuur`
--
ALTER TABLE `factuur`
  MODIFY `FactuurID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gebruiker`
--
ALTER TABLE `gebruiker`
  MODIFY `GebruikerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bestelling`
--

ALTER TABLE `bestelling_artikel`
  ADD CONSTRAINT `bestelling_artikel_ibfk_1` FOREIGN KEY (`Bestelnummer`) REFERENCES `bestelling` (`Bestelnummer`),
  ADD CONSTRAINT `bestelling_artikel_ibfk_2` FOREIGN KEY (`ArtikelID`) REFERENCES `artikel` (`ArtikelID`);

ALTER TABLE `bestelling`
  ADD CONSTRAINT `bestelling_ibfk_1` FOREIGN KEY (`GebruikerID`) REFERENCES `gebruiker` (`GebruikerID`);
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
COMMIT;


INSERT INTO `gebruiker` (
    `GebruikerID`, 
    `BedrijfID`, 
    `RolID`, 
    `Voornaam`, 
    `Achternaam`, 
    `Geboortedatum`, 
    `Straat`, 
    `Postcode`, 
    `Woonplaats`, 
    `Wachtwoord`, 
    `Email`, 
    `Telefoon`, 
    `Aanmaakdatum`
    ) VALUES (
        1, 
        1, 
        1, 
        'Alexander', 
        'Trappenberg', 
        '1998-10-18', 
        'Korenbloem', 
        '3144ep', 
        'Nederland', 
        'test', 
        'testovich@gmail.com', 
        '0632243234234', 
        '2020-08-02'
    );
+
INSERT INTO `artikel` (`ArtikelID`, `Naam`, `Omschrijving`, `Prijs`, `Voorraad`) VALUES
(1, 'Qua rood', 'water met een rood kleurtje', '3', 4),
(2, 'Qua Bruisend', 'bruisend water', '4', 33);

INSERT INTO `bestelling` (`Bestelnummer`, `GebruikerID`, `Datum`) VALUES
(2, 1, '2020-02-08');

INSERT INTO `bestelling_artikel` (`ID`, `ArtikelID`, `Bestelnummer`, `Aantal`) VALUES
(2, 2, 1, 3);

SELECT bestelling.Bestelnummer, bestelling.GebruikerID, bestelling.Datum, 
bestelling_artikel.ArtikelID, bestelling_artikel.Aantal
FROM bestelling INNER JOIN bestelling_artikel ON bestelling.Bestelnummer = bestelling_artikel.Bestelnummer
WHERE bestelling_artikel.ID = 2;