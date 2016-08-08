<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

    <?php

        function discount($price) {
            $price *= 0.8;
            return $price;
        }
    
        $price = 1000;
        $totalPrice = discount($price);
    
        echo $totalPrice
    ?>
    
</body>
</html>