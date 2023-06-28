<!DOCTYPE html>
<html>
<body style="background-color:aquamarine;">
</body>
</html>
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

// Retrieve image data from the database
$query = "SELECT img, naam FROM img";
$result = $db->query($query);
if ($result === false) {
    die("Error executing query: " . $db->error);
}

// Display images
while ($row = $result->fetch_assoc()) {
    $imageData = $row['img'];
    $naam = $row['naam'];

    // Generate HTML markup to display the image
    echo '<div>';
    echo '<img src="data:image/png;base64,' . base64_encode($imageData) . '" alt="' . $naam . '">';
    echo '<p>' . $naam . '</p>';
    echo '</div>';
}

// Close the result set
$result->close();

// Close the database connection
$db->close();
?>

