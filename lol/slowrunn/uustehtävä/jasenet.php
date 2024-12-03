<?php 
@ini_set("display_errors", 1);
@ini_set("error_reporting", E_ALL);
// Otetaan yhteys tietokantapalvelimeen
include("yhteys.php");  // Sisällyttää aiemmin tehdyn yhteys.php-tiedoston tähän
// Taulun nimi on jasenet, ei esim Jäsenet tai Jasenet
// Listataan kaikki = *
$sql_lause =  "SELECT * FROM jasenet";
try {
  $kysely = $yhteys->prepare($sql_lause);
  $kysely->execute();
} 
 catch (PDOException $e) {
            die("VIRHE: " . $e->getMessage());
       }
$tulos = $kysely->fetchAll();
echo "Listataan testi-taulusta sukunimi, etunimi ja postitoimipaikka <br>";
foreach($tulos as $rivi) {     
 // Taulussa on oltava sarakenimet Sukunimi, Etunimi jne
 echo $rivi['Sukunimi'] . ", " . $rivi['Etunimi'] . ", " . $rivi['Sukupuoli'] . ", " . $rivi['Ika'] . ", " 
   . $rivi['Osoite'] . ", " . $rivi['Postinumero'] . ", " . $rivi['Postitoimipaikka'] . "<br>";       
} 
?>