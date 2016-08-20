<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    ?>    
    <form method="POST" action="Class8_PHP_upload_server.php" enctype="multipart/form-data">
        <input type="file" name="filename">
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>