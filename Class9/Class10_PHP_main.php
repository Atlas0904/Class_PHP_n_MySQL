<?php

$link_ID= mysql_connect('localhost', 'root','');
mysql_select_db('bookstore');

$command = 'select * from books';
$result = mysql_query($command, $link_ID);

mysql_close($link_ID);
print_r()

?>