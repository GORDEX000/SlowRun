<?php
// Include your database connection file
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $title = $_POST['title'];       // Title of the news
    $date = $_POST['date'];         // Date of the news
    $content = $_POST['content'];   // Content of the news
    $image = $_FILES['image'];      // Image file

    // Handle the file upload (for images)
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if the uploads directory exists
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true); // Create the directory if it doesn't exist
    }

    // Check if image file is a valid image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // Insert the news article into the database, using 'image_path' to store the image path
            $query = "INSERT INTO news (title, content, date, image_path) VALUES ('$title', '$content', '$date', '$target_file')";

            if (mysqli_query($conn, $query)) {
                echo "Uutinen lisätty onnistuneesti!";
            } else {
                echo "Virhe: " . mysqli_error($conn);
            }
        } else {
            echo "Virhe kuvan lataamisessa.";
        }
    } else {
        echo "Tiedosto ei ole kuva.";
    }
}
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lisää uutinen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        h1 {
            text-align: center;
            color: #05556F;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #05556F;
            margin-bottom: 5px;
            display: inline-block;
        }

        input[type="text"],
        input[type="date"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="text"]:focus,
        input[type="date"]:focus,
        textarea:focus {
            border-color: #05556F;
            outline: none;
        }

        button {
            background-color: #05556F;
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
        }

        button:hover {
            background-color: #003856;
        }
    </style>
</head>
<body>
    <form method="POST" action="add_news.php" enctype="multipart/form-data">
        <h1>Lisää uusi uutinen</h1>

        <label for="title">Otsikko:</label>
        <input type="text" name="title" id="title" required>

        <label for="date">Päivämäärä:</label>
        <input type="date" name="date" id="date" required>

        <label for="content">Sisältö:</label>
        <textarea name="content" id="content" rows="4" required></textarea>

        <label for="image">Kuva:</label>
        <input type="file" name="image" id="image" required>

        <button type="submit">Lisää uutinen</button>
    </form>
</body>
</html>
