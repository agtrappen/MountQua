#Als gebruiker wil ik MountQua Clear kunnen bekijken en een korte beschrijving hiervan zien (producteigenschappen, prijs etc).
SELECT * FROM Artikel WHERE ArtikelID = 1;

#Als gebruiker wil ik contact kunnen opnemen met MountQua. Hiervoor heb ik het email adres van MountQua nodig of een adres met telefoonnummer.
SELECT Telefoonnummer, Email FROM Bedrijf;



#Als gebruiker wil ik meer te weten kunnen komen over het bedrijf zodat ik weet wat voor  bedrijf het is. Een korte beschrijving over de oorsprong  en visie van MountQua.
SELECT Beschrijving FROM Bedrijf;

#Als gebruiker wil ik kunnen inloggen en mijn accountgegevens kunnen inzien.
SELECT * FROM Gebruiker WHERE GebruikerID = 1;

#Als gebruiker wil ik mijn adres gegevens kunnen aanpassen zodat mijn product niet op het verkeerde adres wordt geleverd.
UPDATE Gebruiker SET Straat="nieuwe straat" WHERE GebruikerID = 1;

#Als admin wil ik een product kunnen toevoegen zodat het assortiment up to date blijft.
INSERT INTO Artikel VALUES ("","Nieuw Artikel", "Korte omschrijving product", "1,00", 100);

#Als admin wil ik een product kunnen aanpassen zodat het product up to date blijft.
UPDATE Artikel SET Naam = "nieuwe naam", Omschrijving = "nieuwe omschrijving" WHERE ArtikelID = 1;

#Als admin wil ik een product kunnen verwijderen zodat het assortiment up to date blijft.
DELETE FROM Artikel WHERE ArtikelID = 1;

#Als admin wil ik met een functie alle artikelen kun aanroepen die in de artikel tabel staan waarvan de voorraad meer dan 65 is ( stored procedure ).

DELIMITER $$

CREATE PROCEDURE GetAllProducts()
BEGIN
    SELECT * FROM Artikel
    WHERE Voorraad > 65;
END$$

DELIMITER ;

CALL GetAllProducts();



