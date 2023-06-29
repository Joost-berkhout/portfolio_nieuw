<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/header.js"></script>
    
</head>
<body>

    <nav class="navbar">
        <div class="logo-container">
            <?php
            include_once '../php/database/database.php';

            // Retrieve image data from the database
            $query = "SELECT img FROM img WHERE id = 1";
            $result = $db->query($query);
            if ($result === false) {
                die("Error executing query: " . $db->error);
            }

            // Display the image
            $row = $result->fetch_assoc();
            $imageData = $row['img'];

            echo '<div class="logo">';
            echo '<img class="logo-img" src="data:image/png;base64,' . base64_encode($imageData) . '" alt="ID1 Image">';
            echo '</div>';

            // Close the result set
            $result->close();

            // Close the database connection
            $db->close();
            ?>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="../php/werk.php">WERK</a></li>
            <li class="nav-item"><a class="nav-link" href="../php/home.php">HOME</a></li>
            <li class="nav-item"><a class="nav-link" href="../php/skill.php">SKILL</a></li>
        </ul>
        
        <div class="logo-container">
            <?php
            // Create a new database connection for the second logo
            $db2 = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

            // Check connection
            if ($db2->connect_error) {
                die("Connection failed: " . $db2->connect_error);
            }

            // Retrieve image data from the database for the second logo
            $query2 = "SELECT img FROM img WHERE id = 1"; // Assuming the second logo has an ID of 2
            $result2 = $db2->query($query2);
            if ($result2 === false) {
                die("Error executing query: " . $db2->error);
            }

            // Display the second logo
            $row2 = $result2->fetch_assoc();
            $imageData2 = $row2['img'];

            echo '<div class="logo">';
            echo '<img class="logo-img" src="data:image/png;base64,' . base64_encode($imageData2) . '" alt="ID1 Image">';
            echo '</div>';

            // Close the result set for the second logo
            $result2->close();

            // Close the database connection for the second logo
            $db2->close();
            ?>
        </div>
    </nav>

<?php include "../php/components/footer/footer.php" ?>
<style><?php include "../css/main.css" ?></style>
</body>
</html>