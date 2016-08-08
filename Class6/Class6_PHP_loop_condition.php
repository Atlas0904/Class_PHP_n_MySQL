<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class5 PHP and MySQL: HW 3-4</title>
</head>
<body>
   <?php
    
    $price= array(100, 200, 300, 400, 500);

    $word['dragon'] = "恐龍";
    $word['money'] = "錢可以買東西";
    $word['gun'] = "槍 攻擊武器";
    $word['car'] = "車, 交通工具";
    
    $i = 0;
    foreach ($word as $index => $value) {
        echo "Index:".$index." Value:".$value." price:".$price[$i++].'<br>';
    }
    
    while(list($index, $value) = each($word)) {
        echo "Number:".$index." Value:".$value.'<br>';
    }
    
    $email = array(
        "Atlas":"u920243@gmail.com"
        "Warhol":"hxzxh9@gmail.com"
        "Sandy":"r97451007@gmail.com"
    );
    
    echo "Name:".$_POST['name']." Mail:".$email[$_POST['name']].'<br>';
    
    ?>

</body>
</html>