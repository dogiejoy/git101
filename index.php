<?php

header('Content-Type: text/html; charset=utf-8');
if (!defined('APP_NAME')) {
    define('APP_NAME', "pcm");
}
if (!defined('APP_THEMEPATH')) {
    define('APP_THEMEPATH', "/".APP_NAME."/themes/bootstrap");
}
// Define theme path
if (!defined('_THEMEPATH_')) {
    define('_THEMEPATH_', dirname(__FILE__)."/themes/bootstrap");
}
// Set path to theme index
$themeIndex = _THEMEPATH_ . '/index.php';
//print_r($themeIndex);
// Initialize the theme
if (file_exists($themeIndex)) {
    include($themeIndex);
} else {
    die('ERROR: Failed to initialize theme');
}