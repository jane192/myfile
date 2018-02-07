<?php
$dblocation = 'localhost';//Всегда так, если сервер в другом месте
$dbname = 'myfile';
$dbuser = 'root';
$dbpassword = '';
$dbconnect = mysqli_connect( $dblocation, $dbuser, $dbpassword, $dbname);
if(!$dbconnect){
    exit('Error db');
}