<?php
//include_once 'database.php';
include 'contact.html';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($conn){
    echo"connection";
}
if(isset($_POST['save']))
{
    $aanhef = $_POST['optradio'];
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $straatnaam = $_POST['straatnaam'];
    $huisnummer = $_POST['huisnummer'];
    $toevoeging = $_POST['toevoeging'];
    $postcode = $_POST['postcode'];
    $woonplaats = $_POST['woonplaats'];
    $telefoon = $_POST['telefoon'];
    $bericht = $_POST['bericht'];
    $sql = "INSERT INTO contactform (aanhef, voornaam, achternaam, email, straatnaam, huisnummer, toevoeging, postcode, woonplaats, telefoon, bericht)
    VALUES ('$aanhef','$voornaam','$achternaam','$email', '$straatnaam', '$huisnummer', '$toevoeging', '$postcode', '$woonplaats', '$telefoon', '$bericht')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully !";
    } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>