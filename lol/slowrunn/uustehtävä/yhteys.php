<?php
$servername = "localhost";
$username = "root";  // Käyttäjän nimi ja samalla tietokanta-alueen nimi; korvaa omallasi
$password = "";     // Käyttäjän salasana; korvaa omallasi
$dbname = "eza"; // the name of your database
try {
       $yhteys = new PDO("mysql:host=$servername;dbname=$username", $username, $password);
       $yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Yhteys muodostettu<br>";
    }
catch(PDOException $e)
    {
    echo "Ei yhteyttä tietokantaan!<br> " . $e->getMessage();
    }
?>