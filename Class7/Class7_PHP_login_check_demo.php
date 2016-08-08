<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class7 PHP and MySQL: Check user login</title>
</head>
<body>
    <?php
    $id = $_POST['id'];
    $pwd = $_POST['pwd'];
    
    
    function normalize($s) {
        return strtolower(trim($s));
    }
    
    $id = normalize($id);
    $pwd = normalize($pwd);
    
    $users['allan'] = 1234;
    $users['bill'] = 5678;
    
    if (!isset($users[$id])) echo '沒有這個使用者';
    else if ($users[$id] == $pwd) echo '登入成功';
    else echo '登入失敗';
    
    ?>
    
</body>
</html>