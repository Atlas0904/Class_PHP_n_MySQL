<?php
$filename = "example_write_file.txt";
$info = array("name", 100, 99, 80);


if (is_writable($filename)) {
    
    if ($fp = fopen($filename, 'w+')) {
        if (fwrite($fp, print_r($info, true))) {
            echo "fwrite() done";
        }
        fclose($fp);
    }
}

if (is_readable($filename)) {
    if ($fp = fopen($filename, "r")) {
        if ($content = fread($fp, filesize($filename))){
            echo $content;
        }
        fclose($fp);
    }
}
$rowData = file($filename);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class9 PHP and MySQL: File write</title>
    <br><br>
    foreach demo:<br>
    <?php foreach($rowData as $value) :?>
    <?= $value;?>
    <?php endforeach ?>
    
</head>
<body>

</body>
</html>