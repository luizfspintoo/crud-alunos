<?php

define('DEBUG', true);
define('SERVERNAME', "mysql");
define('USERNAME', "root");
define('PASSWORD', "root");
define('DBNAME', "testeluiz");

require_once './autoload.php';

$conn = new DatabaseConnection(SERVERNAME, DBNAME, USERNAME, PASSWORD);
$router = new Router($conn);