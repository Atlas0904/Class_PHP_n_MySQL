<?php
$filename = "filename.txt";
$data = "This is a test string for file test.";

$fp = fopen($filename, 'r');
fseek($fp, 0);

$content = fread($fp, filesize($filename));
echo "read done"." Content:".$content;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class9 PHP and MySQL: File Read</title>
</head>
<body>

</body>
</html>