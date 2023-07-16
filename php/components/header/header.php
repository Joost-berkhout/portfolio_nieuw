<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, 
    maximum-scale=1.0, user-scalable=no" />>
</head>
<body>

<nav class="navbar">
    <!--logo-->
    <div class="logo-container">
        <a href="../php/home.php">
            <img class="logo-img" src="..\img\logo-small.png">
        </a>
    </div>
    <!--links-->
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="../php/werk.php">WERK</a></li>
        <li class="nav-item"><a class="nav-link" href="../php/home.php">HOME</a></li>
        <li class="nav-item"><a class="nav-link" href="../php/skill.php">SKILL</a></li>
    </ul>
    <!--logo--> 
    <div class="logo-container">
        <a href="../php/home.php">
            <img class="logo-img" src="..\img\logo-small.png">
        </a>
    </div>
</nav>
<!--include footer/javascript/style-->
<?php include __DIR__ . "/../footer/footer.php"; ?>
<script src="../js/main.js"></script>
<style><?php include "../css/main.css" ?></style>
</body>
</html>
