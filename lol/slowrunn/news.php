<?php
// Include your database connection file
include 'db.php'; // Ensure this path is correct based on your file structure

// Fetch news from the 'news' table
$sql = "SELECT title, date, content, image_path FROM news ORDER BY date DESC";
$result = $conn->query($sql);

// Check if there are any results
if ($result && $result->num_rows > 0) {
    // Output each news article
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-md-6 mb-4">';
        echo '  <div class="card">';
        echo '      <img src="' . htmlspecialchars($row["image_path"]) . '" class="card-img-top" alt="' . htmlspecialchars($row["title"]) . '">';
        echo '      <div class="card-body">';
        echo '          <h5 class="card-title">' . htmlspecialchars($row["title"]) . '</h5>';
        echo '          <p class="card-text">Päivämäärä: ' . htmlspecialchars($row["date"]) . '</p>';
        echo '          <p>' . htmlspecialchars($row["content"]) . '</p>';
        echo '      </div>';
        echo '  </div>';
        echo '</div>';
    }
} else {
    echo "<p>Ei uutisia saatavilla tällä hetkellä.</p>";
}

// Close connection
$conn->close();
?>
