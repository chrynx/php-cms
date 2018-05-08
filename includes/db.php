<?php

$db['db_host'] = 'localhost';
$db['db_name'] = 'cms';
$db['db_user'] = 'admin';
$db['db_pass'] = 'very-hard-password';

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}
echo DB_HOST;
try {
    $DB = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);
} catch(PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}