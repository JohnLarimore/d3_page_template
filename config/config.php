<?php
define('DEV', true);
//define("DOC_ROOT", '/jlrenewables/public/');
//define("ROOT_FOLDER", 'public');

//Database settings
$type = 'mysql';
$server = 'localhost';
$db = 'test_db';
$port = 3306;
$charset = 'utf8mb4';
$username = 'testtable_admin';
$password = 'testtable_admin';
$dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset";
