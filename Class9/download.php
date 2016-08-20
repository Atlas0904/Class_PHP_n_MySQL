<!DOCTYPE html>
<?php
if (isset($_COOKIE['ad_checked'])) {
    echo "You have clicked ad, start downloading";
} else {
    echo "Please click ad before download.<br>";
    echo "<a href='main.php'>回首頁</a>";
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
</body>
</html>