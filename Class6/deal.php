<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    $total = 0;
//    foreach($word as $index => $value)
    foreach($_POST as $value) {
        $total = $total + $value;
    }
    echo "Grades: ".$total." Avg: ".$total/count($_POST);
    ?>
    
    
</body>
</html>