DROP DATABASE IF EXISTS MountQua;
CREATE DATABASE MountQua;
USE MountQua;


DROP TABLE IF EXISTS Gebruiker;

CREATE TABLE Gebruiker (

    GebruikerID INT AUTO_INCREMENT PRIMARY KEY,
    Rol INT NOT NULL,
    Voornaam VARCHAR (20) NOT NULL,
    Achternaam VARCHAR (20) NOT NULL,
    Geboortedatum DATE NOT NULL,
    Wachtwoord VARCHAR (20) NOT NULL,
    Straat VARCHAR (20) NOT NULL,
    Postcode VARCHAR (6) NOT NULL,
    Aanmaakdatum DATE NOT NULL
    
    

);

DROP TABLE IF EXISTS Admin;

CREATE TABLE Admin (

    AdminID INT AUTO_INCREMENT PRIMARY KEY
    

);

DROP TABLE IF EXISTS Klant;

CREATE TABLE Klant (

    KlantID INT AUTO_INCREMENT PRIMARY KEY
    

);



DROP TABLE IF EXISTS Artikelen;

CREATE TABLE Artikelen (
    
    ArtikelID INT AUTO_INCREMENT PRIMARY KEY,
    Naam VARCHAR (20) NOT NULL,
    Omschrijving VARCHAR (100) NOT NULL,
    Prijs DECIMAL (2,2) NOT NULL,
    Voorraad INT (6) NOT NULL
    
    

     

);

DROP TABLE IF EXISTS Bestelling; 

CREATE TABLE Bestelling (

    Bestelnummer INT AUTO_INCREMENT PRIMARY KEY,
    Klantnummer INT NOT NULL,
    Artikelnummer INT NOT NULL,
    Datum DATE NOT NULL,
    Aantal INT NOT NULL,
    FOREIGN KEY (Klantnummer) REFERENCES Klant (KlantID)
        ON UPDATE CASCADE
        ON DELETE RESTRICT,
    FOREIGN KEY (Artikelnummer) REFERENCES Artikelen (ArtikelID)
        ON UPDATE CASCADE
        ON DELETE CASCADE

  
);



DROP TABLE IF EXISTS Factuur;

CREATE TABLE Factuur (

    Factuurnummer VARCHAR(10) PRIMARY KEY,
    Bestelnummer INT NOT NULL,
    BestelStatus VARCHAR (20) NOT NULL,
    Datum DATE NOT NULL,
    CONSTRAINT FK_Factuur_Bestelling
    FOREIGN KEY (Bestelnummer) REFERENCES Bestelling (Bestelnummer)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
   
   
       

);





