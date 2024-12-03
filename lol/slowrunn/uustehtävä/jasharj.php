<?php

$servername = "localhost";      
$username = "root";
$password = "";                 
$database = "eza";            


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT Etunimi, Sukunimi, Postitoimipaikka FROM jasenet WHERE Postitoimipaikka = 'TURKU' ORDER BY Sukunimi";
$result = $conn->query($sql);

echo "<h2>Turkulaiset Jäsenet</h2>";
echo "<table border='1'>
<tr>
    <th>Etunimi</th>
    <th>Sukunimi</th>
    <th>Postitoimipaikka</th>
</tr>";


if ($result) {
    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row["Etunimi"] . "</td>
                <td>" . $row["Sukunimi"] . "</td>
                <td>" . $row["Postitoimipaikka"] . "</td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='3'>Ei turkulaisia jäseniä löytynyt.</td></tr>";
    }
} else {
    echo "<tr><td colspan='3'>Error in query: " . $conn->error . "</td></tr>";
}
echo "</table>";


$conn->close();
?>
