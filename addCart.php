<?php
$id = (int)$_GET['id'];
if($_GET['count']){
$count = (int)$_GET['count'];
$time = time()+3600;
}else{
$count = '';
$time = time()-1;
}
setcookie($id,$count,$time);
header('location:cart.php');