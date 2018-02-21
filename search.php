<?php
require_once ('templades/top.php');
if (isset($_GET['name'])){
    $name = $_GET['name'];
}
$query ="SELECT * FROM products WHERE name LIKE '%$name%' OR body LIKE'%$body%'";
$res = mysqli_query($dbconnect,$query);
if(!res){
    exit('error');
    
}
while ($tov = mysqli_fetch_array($res)){
    echo $tov['name'];
    echo $tov['body'];
}

require_once ('templades/bottom.php');