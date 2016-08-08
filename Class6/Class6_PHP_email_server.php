<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $email = array(
        "Atlas":"u920243@gmail.com"
        "Warhol":"hxzxh9@gmail.com"
        "Sandy":"r97451007@gmail.com"
        );

        echo "Name:".$_POST['name']." Mail:".$email[$_POST['name']].'<br>';
    ?>
</body>
</html>