<?php
// Include your database connection file
include 'db.php'; // Ensure this path is correct based on your file structure

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Insert the contact information into the database
    $query = "INSERT INTO contacts (name, phone, email, message) VALUES ('$name', '$phone', '$email', '$message')";

    if (mysqli_query($conn, $query)) {
        // Respond with a success message
        echo "Yhteystiedot lähetetty onnistuneesti!";
    } else {
        // Optionally handle database error
        echo "Virhe: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
