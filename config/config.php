<?php
define('DEV', true);
//define("DOC_ROOT", '/jlrenewables/public/');
//define("ROOT_FOLDER", 'public');

//Database settings
$type = 'pgsql';
$server = 'localhost';
$db = 'postgres';
$port = 5432;
#$charset = 'utf8mb4';
$username = 'mtcars_user';
$password = 'mtcars_user';
#$dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset";
$dsn = "$type:host=$server;dbname=$db;port=$port";