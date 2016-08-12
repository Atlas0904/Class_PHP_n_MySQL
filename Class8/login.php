<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    include_once('verify.php');
    
    $id = $_POST['id'];
    $pwd = $_POST['pwd'];
    
    echo isLegalUser($id, $pwd) ? 'Hi your email address is '.getUserEmail($id) : 'No such user';
    ?>  
</body>
</html>