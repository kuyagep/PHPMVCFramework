<?php

const APP_NAME = "REDCODE";
const APP_DESC = "Sample Description";
const APP_KEYWORD = "Sample Keyword";
const APP_URL = "https://sample.com";

/** true means show errors **/
const DEBUG = true;

if($_SERVER['SERVER_NAME'] == 'localhost')
{
	/** database config **/
	define('DB_NAME', 'framework_db');
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_DRIVER', '');
	
	define('ROOT', 'http://localhost/mvc/public');

}else
{
	/** database config **/
	define('DBNAME', 'my_db');
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_DRIVER', '');

	define('ROOT', 'https://www.yourwebsite.com');

}


