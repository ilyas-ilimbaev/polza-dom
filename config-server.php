<?php
// session_start();

ini_set('default_charset', 'UTF-8');
mb_internal_encoding("UTF-8");

error_reporting(0);
error_reporting(E_ERROR | E_PARSE | E_NOTICE);

define('BASE_HOST', 'localhost');
define('BASE_NAME', '');
define('BASE_USER', '');
define('BASE_PASS', '');
define('CHARSET', 'utf8');
define('SITE_HOST', $_SERVER['HTTP_HOST']);

function add_error_log($message)
{
  $file = fopen('server_error/logs_errors.txt', 'a+');
  fwrite($file, date("Y-m-d H:i:s") . " (МСК) - " . $message . "\r\n");
  fclose($file);
}
