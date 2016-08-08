<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class6 PHP and MySQL: Loop & Condition</title>
</head>
<body>
    <?php
    $id = $_POST['id'];
    $pwd = $_POST['pwd'];
    
    $users['allan'] = 1234;
    $users['bill'] = 5678;
    
    if (!isset($users[$id])) echo '沒有這個使用者';
    else if ($users[$id] == $pwd) echo '登入成功';
    else echo '登入失敗';
    
    ?>
    
</body>
</html>