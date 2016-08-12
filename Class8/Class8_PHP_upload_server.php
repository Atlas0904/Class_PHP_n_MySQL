<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    if(isset($_FILES['filename']['name'])) {
        
        $path = '/Applications/XAMPP/xamppfiles/htdocs/Class_PHP_n_MySQL/Class_PHP_n_MySQL/Class8/Upload/';
        $short_path = 'Upload/';
        $url = 'http://localhost:8888/Class_PHP_n_MySQL/Class_PHP_n_MySQL/Class8/Upload/"';
        
        echo '$path: '.$path.'<br>';
        
        $tmp = $_FILES['filename']['name'];
        echo 'tmp: '.$tmp.'<br>';
        
        $fb = basename($_FILES['filename']['name']);
        echo '$fb: '.$fb.'<br>';
        
        echo 'getcwd'.getcwd().'<br>';
            
        $to = $path.$fb;
        echo 'TO: '.$to.'<br>';
        
        echo move_uploaded_file($tmp, $to).'<br>';
        if (!move_uploaded_file($tmp, $to)) {
            echo "Upload failed";
            exit;
        } else {
            echo "Success!";
        }
    }
    ?>
   
    
</body>
</html>