<?php
define('DB_TYPE','mysql');
define('DB_NAME','mvc');
define('DB_USER','root');
define('DB_PASS','');
define('DB_HOST','localhost');

define('PROTOCAL','http');

$path = str_replace("\\", "/",PROTOCAL ."://" . $_SERVER['SERVER_NAME'] . __DIR__  . "/");
$path = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);

define('ROOT', str_replace("app/core", "public", $path));
define('ASSETS', str_replace("app/core", "public/assets", $path));