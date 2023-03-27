<?php

const APP_NAME = "FRAMEWORK";
const APP_DESC = "A PHP framework is built on the open-source language PHP and offers built-in features to improve your software development lifecycle";
const APP_KEYWORD = "A PHP framework is built on the open-source language PHP and offers built-in features to improve your software development lifecycle";
const APP_URL = "https://kuyagep.github.io";

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


