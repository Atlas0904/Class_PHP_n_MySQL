<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

    <?php
        $dice = array_fill(0, 6, "0");
        $totalCount = 10000;
        for ($i = 0; $i < $totalCount; $i++) {
            $dice[rand(1, 6) - 1]++;
        }
    
        for ($i = 1; $i <= 6; $i++) {
            echo "點數:".$i."  次數:".$dice[$i-1]."  機率:".(($dice[$i-1]/$totalCount)*100)."%"."<br>";
        }
    ?>
    
</body>
</html>