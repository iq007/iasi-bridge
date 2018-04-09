<?php

require_once('ext/db/medoo.min.php');

try{
    $database = new medoo([
        // required
        'database_type' => 'mysql',
        'database_name' => getenv("DBNAME") ? getenv("DBNAME") : 'bridgeiasi',
        'server' => getenv("DBSERVER") ? getenv("DBSERVER") : 'localhost',
        'username' => getenv("DBUSER") ? getenv("DBUSER") : 'root',
        'password' => getenv("DBPASS") ? getenv("DBPASS") : '',
        'charset' => 'utf8',

        // optional
        'port' => 3306,
        // driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
        'option' => [
            PDO::ATTR_CASE => PDO::CASE_NATURAL
        ]
    ]);
    echo $database->database_name
}
catch(Exception $e){
    echo ("Exception DB");
}
?>
