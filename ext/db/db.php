<?php

require_once('ext/db/medoo.min.php');

$connectstr_dbhost = '';
$connectstr_dbname = '';
$connectstr_dbusername = '';
$connectstr_dbpassword = '';

foreach ($_SERVER as $key => $value) {
    if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
        continue;
    }
    
    $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DBNAME', $connectstr_dbname);

/** MySQL database username */
define('DBUSER', $connectstr_dbusername);

/** MySQL database password */
define('DBPASS', $connectstr_dbpassword);

/** MySQL hostname : this contains the port number in this format host:port . Port is not 3306 when using this feature*/
define('DBSERVER', $connectstr_dbhost);

echo getenv("DBSERVER")

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
    
}
catch(Exception $e){
    echo $database->database_name;
    echo ("Exception DB");
}
?>
