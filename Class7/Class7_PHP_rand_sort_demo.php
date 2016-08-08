<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

    <?php
//        http://php.net/manual/en/function.rand.php
        $score = array();
        $count = 10;
        for ($i = 0; $i < $count; $i++) {
            $score[$i] = rand(0, 100);        
        }
        echo "Original value by rand: <br>";
        print_r($score);
        echo "<br>After sort: <br>";
        sort($score);
        print_r($score);
    
        echo "<br><br> demo range(0, 100, 10) <br>";
        $array = range(0, 100, 10);
        print_r($array);
    
        echo "<br> 吃餃子老虎 <br>"
        $num[0] = rand(1, 7);
        $num[1] = rand(1, 7);
        $num[2] = rand(1, 7);
    
        if ($num[0]==$num[1] && $num[1]==$num[2]) {
            
        } else {
            echo "失敗<br>";
        }

    ?>
    
</body>
</html>