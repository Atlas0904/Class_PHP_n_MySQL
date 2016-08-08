<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

    <?php
        $word = "An apple a day keeps a doctor away.";
    
        $from = "apple";
        $to = "orange";
        echo str_replace($from, $to, $word);
        
    ?>
    
</body>
</html>