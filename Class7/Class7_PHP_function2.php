<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

    <?php

    function discountBooks($prices) {        
        $books = array();
        foreach($prices as $name => $price) {
            $books[$name] = $price * 0.8;
        }
        return $books;
    }
    
    $priceBooks = array(
        "Plato" => 500,
        "War and Peace" => 100,
        "Secret" => 200
    );
    
    print_r(discountBooks($priceBooks));

    ?>
    
</body>
</html>