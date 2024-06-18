<?php
//Pivot System Index
session_start();

define('ROOT_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR);
define('ENCRYPTION_SALT', 'G6dg*&fdFS%6sD%JS87s0bs*77s');

require_once ROOT_PATH . 'Config/config.php';

//Manually Set timezone
date_default_timezone_set('America/Toronto');
