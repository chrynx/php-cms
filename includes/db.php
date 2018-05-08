<?php

$db_host = 'localhost';
$db_name = 'cms';
$db_username = 'admin';
$db_password = 'very-hard-password';

try {
    $DB = new PDO("mysql:host=$db_host;dbname=$db_name",$db_username,$db_password);
} catch(PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}