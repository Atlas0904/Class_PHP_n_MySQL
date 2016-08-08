<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    $score_ch = $_POST['score_ch'];
    $score_math = $_POST['score_math'];
    $score_en = $_POST['score_en'];
    $sum = $score_ch + $score_math + $score_en;
    $avg = $sum/3;
    ?>
    
    國文成績: <?=$score_ch?> <br>
    國文成績: <?=$score_math?> <br>
    國文成績: <?=$score_en?> <br>
    總成績:<?=$sum?> <br>
    平均:<?=$avg?> <br>
    
</body>
</html>