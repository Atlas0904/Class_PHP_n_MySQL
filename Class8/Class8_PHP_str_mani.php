<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class8: PHP_n_MySQL: Time</title>
</head>
<body>

    <?php
    date_default_timezone_set("Asia/Taipei");


    $y = date('Y');
    $M = date('g');
    $d = date('d');

    $h = date('h');
    $i = date('i');
    $s = date('s');

    $A = date('A');

    function getAMPM($A) {
        if ($A == 'AM')  return '早上';
        else return '晚上';
    }

    echo '今天是民國'.($y - 1911).'年'.$M.'月'.$d.'日'.'<br>';
    echo '現在是'.getAMPM($A).$h.'點'.$i.'分'.$s.'秒'.'<br>';


    echo date('Y/M/D H:i:s').'<br>';
    
    echo 'mktime([hour],[minute],[second],[month],[day],[year])';
    
    $moon = mktime(0,0,0,9,16,2016);
    $now = date('U');
    
    echo '中秋距離現在'.(($moon - $now) / (60 * 60 *24)).'天'.'<br>';
    
    ?>
    
</body>
</html>