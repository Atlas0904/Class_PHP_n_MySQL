<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    define('pi', 3.14);
    $r = 10;
    $circleArea = pi *$r *$r;
    ?>
    
    半徑: <?= $r ?>
    計算面積: <?= $circleArea ?>
    
    
</body>
</html>