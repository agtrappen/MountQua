DROP DATABASE IF EXISTS MountQua;
CREATE DATABASE MountQua;
USE MountQua;



DROP TABLE IF EXISTS Bedrijf;

CREATE TABLE Bedrijf (
    
    Straat VARCHAR(20) PRIMARY KEY,
    Plaats VARCHAR(20) NOT NULL,
    Postcode VARCHAR(6) NOT NULL,
    Beschrijving VARCHAR(100) NOT NULL,
    Telefoonnummer VARCHAR(10) NOT NULL,
    Email VARCHAR(20) NOT NULL

);




DROP TABLE IF EXISTS Rol;

CREATE TABLE Rol (

    Voornaam VARCHAR(20)NOT NULL PRIMARY KEY,
    ID INT
    
);

DROP TABLE IF EXISTS Gebruiker;

CREATE TABLE Gebruiker (

    GebruikerID INT AUTO_INCREMENT PRIMARY KEY,
    Voornaam VARCHAR (20) NOT NULL,
    Achternaam VARCHAR (20) NOT NULL,
    Geboortedatum DATE NOT NULL,
    Straat VARCHAR (20) NOT NULL,
    Postcode VARCHAR (6) NOT NULL,
    Woonplaats VARCHAR (20) NOT NULL,
    Wachtwoord VARCHAR (20) NOT NULL,
    Email VARCHAR(20) NOT NULL,
    Telefoon VARCHAR (20) NOT NULL,
    Aanmaakdatum DATE NOT NULL,
    CONSTRAINT FK_Gebruiker_Rol
    FOREIGN KEY (Voornaam) REFERENCES Rol (Voornaam)
        ON UPDATE CASCADE
        ON DELETE CASCADE
    
);


DROP TABLE IF EXISTS Artikel;

CREATE TABLE Artikel (
    
    ArtikelID INT AUTO_INCREMENT PRIMARY KEY,
    Naam VARCHAR (20) NOT NULL,
    Omschrijving VARCHAR (100) NOT NULL,
    Prijs DECIMAL (5,2) NOT NULL,
    Voorraad INT NOT NULL
    
    
);



DROP TABLE IF EXISTS Bestelling; 

CREATE TABLE Bestelling (

    Bestelnummer INT AUTO_INCREMENT PRIMARY KEY,
    GebruikerID INT,
    ArtikelID INT,
    Aantal INT NOT NULL,
    Datum DATE NOT NULL,
    CONSTRAINT FK_Bestelling_Gebruiker
    FOREIGN KEY (GebruikerID) REFERENCES Gebruiker (GebruikerID)
        ON UPDATE CASCADE
        ON DELETE RESTRICT,
    CONSTRAINT FK_Bestelling_Artikel
    FOREIGN KEY (ArtikelID) REFERENCES Artikel (ArtikelID)
        ON UPDATE CASCADE
        ON DELETE CASCADE

);



DROP TABLE IF EXISTS Betaling;

CREATE TABLE Betaling (

    Factuurnummer VARCHAR(20) PRIMARY KEY,
    Bestelnummer INT,
    GebruikerID INT,
    Bedrag DECIMAL,
    Datum DATE,
    CONSTRAINT FK_Betaling_Bestelling
    FOREIGN KEY (Bestelnummer) REFERENCES Bestelling (Bestelnummer)
        ON UPDATE CASCADE
        ON DELETE RESTRICT,
    CONSTRAINT FK_Betaling_Gebruiker
    FOREIGN KEY (GebruikerID) REFERENCES Gebruiker (GebruikerID)
        ON UPDATE CASCADE
        ON DELETE RESTRICT

);



DROP TABLE IF EXISTS Factuur;

CREATE TABLE Factuur (

    Bestelnummer INT PRIMARY KEY,
    Factuurnummer VARCHAR(20),
    BestelStatus BOOL NOT NULL,
    Datum DATE NOT NULL,
    CONSTRAINT FK_Factuur_Betaling
    FOREIGN KEY (Factuurnummer) REFERENCES Betaling (Factuurnummer)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
    

);




#Stored Procedure

DELIMITER $$

CREATE PROCEDURE GetAllProducts()
BEGIN
    SELECT * FROM Artikel
    WHERE Voorraad > 65;
END $$

DELIMITER ;





#Bedrijf
INSERT INTO Bedrijf VALUES ("Hogeschoollaan 1", "Breda", "1234AB", "MountQua is gevestigd in Breda", "076-12345", "MountQua@avans.nl");

#Rol
INSERT INTO Rol VALUES ("Qui","1");

#gebruiker
INSERT INTO Gebruiker VALUES ("","Qui","Nguyen","1989-10-04","Nieuwe Dieststraat 34","4811VE","Breda","1234","vqnguyen1@avans.nl","06123456789","2019-12-23");
/*INSERT INTO Gebruiker VALUES ();
INSERT INTO Gebruiker VALUES ();
INSERT INTO Gebruiker VALUES ();
INSERT INTO Gebruiker VALUES ();*/


#artikelen
INSERT INTO Artikel VALUES ("","MountQua Clear", "Natuurlijk bronwater", "1,00", 100);
INSERT INTO Artikel VALUES ("","MountQua Fruity", "Natuurlijk bronwater met fruitsmaak", "1,50", 80);
INSERT INTO Artikel VALUES ("","MountQua Bubbly", "Bruizend bronwater", "1,50", 60);









