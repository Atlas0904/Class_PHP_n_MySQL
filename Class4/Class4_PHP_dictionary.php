<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class4: PHP enter</title>
</head>
<body>
    
    <?php
    $input = 'dragon';

    $words['money'] = "Money is not omnipotent, but having no money makes one impotent";
    $words['dragon'] = "Chinese dragon";
    $words['car'] = "BMW";

    echo "使用者輸入:".$input."<br>";
    echo "查詢得到的結果:".$words[$input]."<br>";
    ?>
    
</body>
</html>