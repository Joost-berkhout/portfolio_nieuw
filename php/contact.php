<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
<div class="content">
    <div class="contact">
        <form action="../php/backend/contact_backend.php" method="POST">
            <div class="text-contact"><label>Naam</label></div>
            <input type="text" id="naam" name="naam" required placeholder="Naam..."><br><br>

            <div class="text-contact"><label>Email</label></div>
            <input type="text" id="email" name="email" required placeholder="Email..."><br><br>

            <div class="text-contact"><label>Onderwerp</label></div>
            <input type="text" id="onderwerp" name="onderwerp" required placeholder="Onderwerp..."><br><br>

            <div class="text-contact"><label>Bericht</label></div>
            <textarea id="bericht" name="bericht" required placeholder="Typ bericht..." style="height:150px"></textarea><br><br>

            <input type="submit" value="Submit">
        </form>
    </div>  
</div>

<?php include "../php/components/header/header.php"; ?>
</body>
</html>
