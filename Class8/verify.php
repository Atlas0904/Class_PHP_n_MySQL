<?php

    function isLegalUser($name, $pwd) {
        require('user.php');
        if ($userData[$name]['pwd'] == $pwd)  return true;
        return false;
    }
    function getUserEmail($name) {
        require('user.php');
        return $userData[$name]['email'];
    }
?>