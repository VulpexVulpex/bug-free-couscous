<?php
$store_name ="..:: Tienda FrancoBikers ::..";
$store_version ="1.0";
$anio = date("Y");
$store_email ="darkstudios23@gmail.com";

// definitions of Paths
if (!defined('ROOTPATH')) 	define('ROOTPATH', 'http://localhost:8888/francobikers2018');
if (!defined('CSSPATH')) 	define('CSSPATH', ROOTPATH.'/css/');
if (!defined('JSSPATH')) 	define('JSSPATH', ROOTPATH.'/js/');
if (!defined('IMGPATH')) 	define('IMGPATH', ROOTPATH.'/img/');
if (!defined('INCPATH')) 	define('INCPATH', ROOTPATH.'/include/');
if (!defined('PAGPATH')) 	define('PAGPATH', ROOTPATH.'/pages/');


// mysql conection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "francobikers";

// Create connection

$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) 
{
	die("Connection failed: " . $conn->connect_error);
}
$conection = 'Conexi&oacute;n correcta';

// my sql conection
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
define('DB_DRIVER', 'mysql');
define('DB_PREFIX', 'em_');
define("DB_HOST", $servername);
define("DB_USER", $username);
define("DB_PASSWORD", $password);
define("DB_DATABASE", $dbname);

try {
	$DB = new PDO(DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_DATABASE, DB_USER, DB_PASSWORD, $dboptions);
} catch (Exception $ex) {
	echo $ex->getMessage();
	die;
}
