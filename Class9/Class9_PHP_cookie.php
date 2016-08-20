<!DOCTYPE html>
<?php
    if (isset($_COOKIE['user'])) {
        $response = '(Cookie) Hi how are you '.$_COOKIE['user'];
    } else {
        setCookie('user', 'Atlas', date('U') + 5);
        $response = 'First time to login';
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    Cookie demo example.<br>
    <?=$response?> 
</body>
</html>