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
if(isset($_GET['login']))
{
    $email = $_GET['email'];
    $wachtwoord = hash('sha512', $_GET['wachtwoord']);
    $sql = "SELECT email, wachtwoord FROM gebruiker WHERE email = '$email' and wachtwoord = '$wachtwoord'";
    if (mysqli_query($conn, $sql)) {
        $url = "http://localhost:63344/MountQua2/welkom.html";
        if (!headers_sent())  header("Location: $url");
    } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
include 'login.html';
?>
