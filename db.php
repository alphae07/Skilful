<?php
$host = 'localhost';
$user = 'root';
$passwer = '';

$db_name = 'skill';
 $con = mysqli_connect($host, $user, $passwer, $db_name);

 if(!$con){
    echo 'Connection failed!';
 }
?>