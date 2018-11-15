<?php
/* ==================================================================================
   MySQL Connection information and site wide constants
   PDO - PHP Data Objects
   ------------------------------------------------------------------------------- */
#
# Set database constants
define('DB_USER', 'admincis');
define('DB_PASSWORD', 'live7heCod3');
#
#  Begin the session
session_start();
#
#  Connect to the database
$db_name = "musicdb";
$username = DB_USER;
$password = DB_PASSWORD;
try {
    /* PDO Syntax
     * new PDO( dsn, username, password )
     * dsn = Data Source Name ... for MySQL:
     *     "mysql:dbname=name;host=localhost"
     *     where "name" is the name of the database
     */
    $dsn = "mysql:" . "dbname=" . $db_name . ";" . "host=localhost";
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}



