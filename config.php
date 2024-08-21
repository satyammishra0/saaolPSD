<?php


define('APPPATH', __DIR__);
$MODE = "PRO"; // SET "PRO" FROM PRODUCTION MODE


$ACTUAL_PATH_ARRAY = explode("/", (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");

$APP_PATH = APPPATH;

$APP_PATH = str_replace("\\", "/", $APP_PATH);



$APP_DIR_INDEX = array_search(explode("/", $APP_PATH)[count(explode("/", $APP_PATH)) - 1], $ACTUAL_PATH_ARRAY);


$APP_DOMAIN = "";

if ($APP_DIR_INDEX == 0) {
    $APP_DOMAIN =  (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/";
} else {

    for ($i = 0; $i < $APP_DIR_INDEX  + 1; $i++) {
        $APP_DOMAIN .= $ACTUAL_PATH_ARRAY[$i] . "/";
    }
}

if ($_SERVER['HTTP_HOST'] == "localhost") {
    define('mode', 0);
} else {
    define('mode', 1);
}
$APP_DOMAIN = preg_replace('#/$#', '', $APP_DOMAIN);
define('DOMAIN', 'http://localhost/saaol/website-live/psd/');
// define('DOMAIN', 'https://saaol.com/psd/');


if (mode == 1) {
    $Mdb_host = "localhost";
    $Mdb_password = "CAIZk.}&vW1X";
    $Mdb_username = "saaolwfghrtsd_appointment_user";
    $Mdb_name = "saaolwfghrtsd_appointment_form";
    $DB_Prefix = "tbl_";
} else {
    $Mdb_username = 'root';
    $Mdb_password = '';
    $Mdb_name = 'saaol-website-live';
    $Mdb_host = 'localhost';
    $DB_Prefix = "tbl_";
}

define('DB_DRIVER', 'mysql');
define("DB_HOST", $Mdb_host);
define("DB_USER", $Mdb_username);
define("DB_PASSWORD", $Mdb_password);
define("DB_DATABASE", $Mdb_name);
define("DB_PREFIX", $DB_Prefix);

// basic options for PDO 
$dboptions = array(
    PDO::ATTR_PERSISTENT => FALSE,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

//connect with the server
try {
    $DB = new PDO(DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_DATABASE, DB_USER, DB_PASSWORD, $dboptions);
} catch (Exception $ex) {
    echo ($ex->getMessage());
    die;
}

date_default_timezone_set("Asia/Kolkata");

ini_set('xdebug.max_nesting_level', 50000000000000);
ini_set('memory_limit', -1);
ini_set('max_execution_time', 4500000000); //300 seconds = 5 minutes
ini_set("pcre.backtrack_limit", "500000000000");
ini_set('upload_max_filesize', '150000M'); // For image upload
ini_set('post_max_size', '10000000M'); // For image upload
ini_set('max_input_time', 300000000); // For image upload
ini_set('innodb_log_file_size', '512M'); // For database
ini_set('max_allowed_packet', '16M');  // For database


$Site_Url =  'https://saaol.com/psd';

$Main_Site_Url =  $Site_Url;

$UrlMain = $_SERVER['REQUEST_URI']; // this gives you /folder1/folder2/THIS_ONE/file.php
$ArrayUrlMain = explode('/', $UrlMain); // splits folders in array
$FolderNameMainPage = end($ArrayUrlMain);
$FolderNameMain = prev($ArrayUrlMain);
