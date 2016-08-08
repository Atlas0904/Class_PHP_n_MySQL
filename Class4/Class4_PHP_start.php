<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class4: PHP enter</title>
</head>
<body>
   <?php
    echo "Example 1";
    $pi = 3.14;
    echo $pi;
    
    $pi = 9.81."<br>";
    echo $pi;
    // output 3.149.81

//    define(pii, 9.81);
//    pii = 9.81;  // error
//    echo $pii;
    
    define('G', 9.8);
    echo G;
    
    $blood = array('A','B','AB', 'O');
    echo $blood[0].'<br>';
    echo $blood[1].'<br>';
    echo $blood[2].'<br>';

    
    $movies = array('A' => 'Spiderman',
                   'B' => 'Superman',
                   'C' => 'X man'
                  );
    
    echo $movies['A'];
    
    $TV = array();
    $TV[0] = '國家地理';
    $TV[11] = '華視';
    $TV[9] = '中視';
    echo $TV[9];
    
    $days = array();
    $days['Monday'] = "php";
    $days['Thusday'] = "Web";
    echo $days['Monday'];
    
    $guns[] = "AK47";
    $guns[] = "AK48";
    $guns[] = "AK49";
    
    echo $guns[2];

    
    ?>
   
</body>
</html>