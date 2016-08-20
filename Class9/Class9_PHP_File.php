<?php
$filename = "filename.txt";
$data = "This is a test string for file test.";

$fp = fopen($filename, 'w');
fwrite($fp, $data);
fclose($fp);

echo "Write done";
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