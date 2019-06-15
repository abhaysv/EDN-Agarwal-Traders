<?php 

//Note: This file should be included first in every php page.

define('BASE_PATH', dirname(dirname(__FILE__)));
define('APP_FOLDER','simpleadmin');
define('CURRENT_PAGE', basename($_SERVER['REQUEST_URI']));


require_once BASE_PATH.'/lib/MysqliDb.php';

/*
|--------------------------------------------------------------------------
| DATABASE CONFIGURATION
|--------------------------------------------------------------------------
*/

define('DB_HOST', "136.0.111.24");
define('DB_USER', "agrawalt_website");
define('DB_PASSWORD', "wW2U#tXxYL}9");
define('DB_NAME', "agrawalt_website");

/**
* Get instance of DB object
*/
function getDbInstance()
{
	return new MysqliDb(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME); 
}