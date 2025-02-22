<?php
//Pivot System Bootstrap
define('ROOT_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR);
define('VIEW_PATH', ROOT_PATH . 'GameSport' . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR);
define('MODULE_PATH', ROOT_PATH . 'GameSport' . DIRECTORY_SEPARATOR . 'Module' . DIRECTORY_SEPARATOR);

define('ENCRYPTION_SALT', '&*87ds8*&87&*&*&Sg8sg8ygsug%#54');

require_once '../Config/config.php';
require_once '../Pivot/App/init.php';
