<?php
require_once ('templades/top.php');
$query = "SELECT * FROM orders";
$res = mysqli_query($dbconnect,$query);
while($order = mysqli_fetch_array($res)) {
    echo $order['email'];
    $arr = unserialize($order['body']);
    print_r($arr);
    echo "<hr>";
}
require_once ('templades/bottom.php');
