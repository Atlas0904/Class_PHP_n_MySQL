<?php
$filename = "file_put_contents.txt";
$data = "This is a file put => get contents example";

if (file_put_contents($filename, $data)) {
    echo file_get_contents($filename, true);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class9 PHP and MySQL: File write</title>
</head>
<body>
</body>
</html>