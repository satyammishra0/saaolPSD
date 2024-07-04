<?php

// ------------------------------- Include Files -------------------------------//

include_once "config.php";  // DB conn
include_once "includes/function.php"; //all functions related to data
include_once "includes/route.inc.php";  // routes of all fiels
include_once "includes/session.php"; //  storing and manging session


// auto include file for classes
spl_autoload_register(function ($className) {
    $dir = "../classes/";
    $extension = ".class.php";
    $path = $dir  . $className . $extension;

    if (!file_exists($path)) {
        return false;
    }

    include_once $path;
});


// Include ui DIR PATH
$include_ui_path = "../components/";


define("HEADER", $include_ui_path . "header.php");
define("HEAD_TOP", $include_ui_path . "head-main.php");
define("HEAD", $include_ui_path . "head.php");
define("FOOTER", $include_ui_path . "footer.php");
define("SCRIPT", $include_ui_path . "script.php");
define("RIGHT_SIDEBAR", $include_ui_path . "right-sidebar.php");
define("TOPBAR", $include_ui_path . "topbar.php");
define("NUMBER_SECTION", $include_ui_path . "numbers-section.php");
define("CARD", $include_ui_path . "card.php");


define("MENU", $include_ui_path . "menu.php");
