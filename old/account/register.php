<?php
//include_once 'database.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mountqua";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($conn){
    echo"connection";
}
// check if any required company values are provided
if (isset($_POST['plaats']) || isset($_POST['bedrijfsnaam'])) {
    // Check if all required company fields are filled in
    if (true) {
        // Create Company
        if(isset($_POST['save']))
        {
            $plaats = $_POST['plaats'];
            $postcode_bedrijf = $_POST['postcode_bedrijf'];
            $email_bedrijf = $_POST['email_bedrijf'];
            $telefoon_bedrijf = $_POST['telefoon_bedrijf'];
            $bedrijfsnaam = $_POST['bedrijfsnaam'];
            $sql = "INSERT INTO bedrijf (Plaats, Postcode, Email, Telefoon, Bedrijfsnaam)
            VALUES ('$plaats','$postcode_bedrijf','$email_bedrijf','$telefoon_bedrijf', '$bedrijfsnaam')";
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully !";
            } else {
                echo "Error: " . $sql . "
            " . mysqli_error($conn);
            }
        if(isset($_POST['save']))
            $voornaam = $_POST['voornaam'];
            $achternaam = $_POST['achternaam'];
            $geboortedatum = $_POST['geboortedatum'];
            $email = $_POST['email'];
            $postcode = $_POST['postcode];
            $straatnaam = $_POST['straatnaam'];
            $woonplaats = $_POST['woonplaats'];
            $telefoon = $_POST['telefoon'];
            $wachtwoord = $_POST['wachtwoord'];
            $sql = "INSERT INTO gebruiker (voornaam, achternaam, geboortedatum, email, postcode, straatnaam, woonplaats, telefoon, wachtwoord)
            VALUES ('$voornaam','$achternaam','$geboortedatum','$email', '$postcode', '$straatnaam', '$woonplaats', '$telefoon', '$wachtwoord')";
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully !";
            } else {
                echo "Error: " . $sql . "
            " . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
        // Create User
    } else {
        // Dont create anything, give error message
        echo "Please provide all required company data";
    }
} else {
    // Create User
}
include 'register.html';
?>
