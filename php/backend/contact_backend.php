<?php
    // Database configuration
    $dbHost     = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName     = "db-portfolio(nieuw)";

    // Create database connection
    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $naam = $_POST['naam'];
        $email = $_POST['email'];
        $onderwerp = $_POST['onderwerp'];
        $bericht = $_POST['bericht'];

        $sql = "INSERT INTO contact (`id`, `naam`, `email`, `onderwerp`, `bericht`) VALUES (NULL, '$naam', '$email', '$onderwerp', '$bericht')";

        if ($conn->query($sql) === true) {
            echo "Your message has been delivered";
            echo nl2br("\n$naam\n$email\n\n$onderwerp\n$bericht");
        } else {
            echo "ERROR: Sorry, there was an issue with sending your message: " . $conn->error;
        }

        $conn->close();
    }
?>







