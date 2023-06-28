<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>img-upload</title>
    <?php include "../php/components/header/header.php" ?>
</head>
<body>
    
    <form action="../php\backend\img_backend.php" method="post" enctype="multipart/form-data">
        <label for="image">img:</label>
        <input type="file" name="img" id="img" required>
        <br>
        <label for="naam">naam:</label>
        <input type="text" name="naam" id="naam" required>
        <br>
        <input type="submit" value="Upload">
    </form>
    
</body>
</html>