<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    
// Method A
//    $salarys = array(
//        'A' => array($_POST['bonusA1'], $_POST['bonusA2'], $_POST['bonusA3']),
//        'B' => array($_POST['bonusB1'], $_POST['bonusB2'], $_POST['bonusB3'])
//    );

// Method B
//    $salarys['A'] = array($_POST['bonusA1'], $_POST['bonusA2'], $_POST['bonusA3']);
//    $salarys['B'] = array($_POST['bonusB1'], $_POST['bonusB2'], $_POST['bonusB3']);
    
    error_reporting(0);
    
    $salarys = array(
        array($_POST['bonusA1'], $_POST['bonusA2'], $_POST['bonusA3']),
        array($_POST['bonusB1'], $_POST['bonusB2'], $_POST['bonusB3'])
    );
    
    
    $sum = array();
    foreach($salarys as $index => $salary) {
        foreach($salary as $value) {
            //if (isset($sum[$index]))
                $sum[$index] += $value;
        }
    }
    
    echo 'count: '.count($sum).'<br>';
    
    for ($i = 0; $i< count($sum); $i++) {
        echo 'User'.$i.' value='.$sum[$i].'<br>';
    }
    
    $max = isset($sum[0]) ? $sum[0] : 0;
    $mIndex = 0;
    for ($i = 0; $i< count($sum); $i++) {
        if (isset($sum[$i]) && $max < $sum[$i]) {
            $max = $sum[$i]; 
            $mIndex = $i;
        }
    }
    echo "Max index: ".$mIndex." value:".$max;
        
    ?>
    
</body>
</html>