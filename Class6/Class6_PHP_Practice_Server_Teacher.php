<?php

$salary['阿寶'] = array($_POST['A1'],$_POST['A2'] ,$_POST['A3']);
$salary['阿花'] = array($_POST['B1'],$_POST['B2'] ,$_POST['B3']);

$total = array();
foreach ($salary as $name => $theSalary){
    foreach($theSalary as $value) {
        $total[$name] += $value;
    }
}

$winner = "阿寶";
foreach($total as $index => $value){
    if ($value > $total[$winner]){
        $winner = $index;
    }
}

echo $winner ."業績比較好";

?>