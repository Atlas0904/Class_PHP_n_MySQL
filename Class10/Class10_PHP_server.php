<?php


$customer = $_POST['customerName'];

$link_ID= mysql_connect('localhost', 'root','');
mysql_select_db('bookstore');


//select * from customers where customersName = '螞鷹酒'
$command = "select * from customers where customersName =".$customer;
$result = mysql_query($command, $link_ID);

mysql_close($link_ID);
$data = mysql_fetch_array($result);

echo "<p>".$data[0]."</p>";
echo "<p>".$data[1]."</p>";
echo "<p>".$data[2]."</p>";

?>