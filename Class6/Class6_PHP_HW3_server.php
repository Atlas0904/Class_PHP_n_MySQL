<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class6 PHP and MySQL: mail</title>
</head>
<body>
    <?php
        $en = $_POST['en'];
        $DICTIONARY['apple'] = '蘋果';
        $ch = $DICTIONARY[$en];
    ?>
    
    <?php
        if (!isset($DICTIONARY[$en])) echo "沒有".$en."這個字";
        else echo
    ?>
    
    <table border="2" width="200px">
    <tr>
        <td>英文</td><td>中文</td>
    </tr>
    <tr>
        <td><?=$en?></td><td><?=$ch?></td>
    </tr>
    </table>
</body>
</html>