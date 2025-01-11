<?php
define('APP_ROOT', dirname(__FILE__, 2));
require APP_ROOT.'/config/config.php';
spl_autoload_register(function($class){
	$path=APP_ROOT.'/src/classes/';
	require $path.$class.'.php';
});
if(DEV != true){
	set_exception_handler('handle_exception');
	set_error_handler('handle_error');
	register_shutdown_function('handle_shutdown');
}
$cms = new CMS($dsn, $username, $password);
unset($dsn, $username, $password);
