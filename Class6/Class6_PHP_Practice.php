<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
   <form method="POST" action="Class6_PHP_Practice_Server.php">
    <p>
    Please enter the achievements of the first user:<br>
    1st <input type="text" name="bonusA1" value="100"><br>
    2nd <input type="text" name="bonusA2" value="100"><br>
    3nd <input type="text" name="bonusA3" value="100"><br>
    </p>
    
    <p>
    Please enter the achievements of the second user:<br>
    1st <input type="text" name="bonusB1" value="130"><br>
    2nd <input type="text" name="bonusB2" value="10"><br>
    3nd <input type="text" name="bonusB3" value="200"><br>
    </p>
    <input type="submit" name="Submit">
    </form>
    
    <?php
    $salary['阿寶'] = array(10, 20, 30);
    $salary['阿花'] = array(10, 20, 30);
    $total = array();
    foreach ($salary as $name => $theSalary){
        foreach($theSalary as $value) {
            if (isset($total[$name]))
                $total[$name] += $value;
        }
    }
    ?>
    
</body>
</html>