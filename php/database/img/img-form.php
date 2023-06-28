<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    
</head>
<body>
    <h1>Image Upload Form</h1>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="image">Select Image:</label>
        <input type="file" name="img" id="img" required>
        <br>
        <label for="naam">Name:</label>
        <input type="text" name="naam" id="naam" required>
        <br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>