<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class5 PHP and MySQL: Contional </title>
</head>
<body>


    <?php
    $math = 50;
            $word = "fail";
            if ($math >= 60){
                $word = "pass";
            } 
            echo $word ;
            echo "<br>end";
    ?>

    <?php
    
        $math = 50;
    
        $level = "";
        if ($math >= 90){
            $level = "A";
        } else if (($math >= 80) && ($math < 90)){
            $level = "B";
        } else if (($math >= 70) && ($math < 80)){
            $level = "C";
        } else if (($math >= 60) && ($math < 70)){
            $level = "D";
        } else {
            $level = "E";
        }
        echo $level ;
        echo "<br>end";       
    ?>
    
    
</body>
</html>