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
    $score_sum = $score_ch + $score_math + $score_en;
    $score_avg = $score_sum/3;
    ?>
    
    國文成績: <?php echo $score_ch ?> 分;
    數學成績: <?php echo $score_math ?> 分;
    英文成績: <?php echo $score_en ?> 分;
    總成績: <?php echo $score_sum ?> 分;
    平均成績: <?php echo $score_avg ?> 分;
    
</body>
</html>