<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>img-upload</title>
    
</head>
<body>
<div class="content">
    <div class="contact">
        <form action="../php\backend\img_backend.php" method="post" enctype="multipart/form-data">
        
            <div class="text-contact"><label for="image">img:</label></div>
            <input type="file" name="img" id="img" required>
        
            <br>
            <div class="text-contact"><label for="naam">naam:</label></div>
            <input type="text" name="naam" id="naam" required><br>
        
            <input type="submit" value="Upload">
        </form>
    </div>
</div>
<?php include "../php/components/header/header.php" ?>
</body>
</html>