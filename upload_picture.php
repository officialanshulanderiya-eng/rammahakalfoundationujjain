<!DOCTYPE html>
<html>
<head>
    <title>Upload Profile Picture</title>
</head>
<body>
    <h1>Upload Profile Picture</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="profile_picture" accept="image/*">
        <input type="submit" value="Upload">
    </form>
</body>
</html>
