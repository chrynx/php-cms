<?php

$db['db_host'] = 'localhost';
$db['db_name'] = 'cms';
$db['db_username'] = 'admin';
$db['db_password'] = 'very-hard-password';

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}

try {
    $DB = new PDO("mysql:host=DB_HOST;dbname=DB_NAME",DB_USERNAME,DB_PASSWORD);
} catch(PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}