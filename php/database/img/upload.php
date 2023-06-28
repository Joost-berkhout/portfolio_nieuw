<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "db-portfolio(nieuw)";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Handle file upload
if (isset($_FILES['image']) && isset($_POST['naam'])) {
    $image = $_FILES['image']['tmp_name'];
    $naam = $_POST['naam'];

    // Check if the file is an image
    $imageType = exif_imagetype($image);
    if ($imageType !== false) {
        // Prepare and execute the database query
        $query = "INSERT INTO img (img, naam) VALUES (?, ?)";
        $stmt = $db->prepare($query);
        if ($stmt === false) {
            die("Error preparing query: " . $db->error);
        }

        // Bind the parameters and execute the query
        $stmt->bind_param("ss", $image, $naam);
        if (!$stmt->execute()) {
            die("Error executing query: " . $stmt->error);
        }

        // Close the statement
        $stmt->close();

        echo "Image uploaded and inserted into the database successfully.";
    } else {
        echo "Invalid file. Only image files are allowed.";
    }
}
?>