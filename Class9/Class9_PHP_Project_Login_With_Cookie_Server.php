<!DOCTYPE html>
<?php
    $id = $_POST['id'];
    $pwd = $_POST['pwd'];
    
    $users['allan'] = 1234;
    $users['bill'] = 5678;

    if (isset($_COOKIE['isLegalUser'])) {
        $response = '(Cookie) Hi '.$id.' welcome back';
    } else {
        if (!isset($users[$id])) $response = '沒有這個使用者';
        else if ($users[$id] == $pwd) {
            $response = 'Hi '.$id.'登入成功';
            setcookie('isLegalUser', '1', date('U') + 10);
        }
        else $response = '登入失敗';
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class9 PHP and MySQL: Login Page</title>
</head>
<body>
    <?=$response;?>
    
</body>
</html>