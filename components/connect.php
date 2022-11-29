<?php

$db_name = 'mysql:host=localhost;dbname=shop_db';
$user_name = 'root';
$user_password = '';

// $host = 'remotemysql.com';
// $db_name = 'GBvR8CEHSQ';
// $user_name = 'GBvR8CEHSQ';
// $user_password = 'veSO5LGyZ2';
// $dsn = 'mysql:host=$host;dbname= $db_name';

$conn = new PDO( $db_name, $user_name , $user_password);
// $conn = new PDO($dsn, $user_name , $user_password);
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING ); 
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); 
?>

