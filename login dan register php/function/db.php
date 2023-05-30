<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'tutorial';

$link = mysqli_connect($host, $user, $password, $db) or die(mysqli_error($link));
?>