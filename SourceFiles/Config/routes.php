<?php

$router->define([
  '' => ROOT_PATH . "Pivot/Controllers/home.php",
  'login' => ROOT_PATH . "Pivot/Controllers/login.php",
  'register' => ROOT_PATH . "Pivot/Controllers/register.php",
  'about' => ROOT_PATH . "Pivot/Controllers/about.php",
  'contact' => ROOT_PATH . "Pivot/Controllers/contact.php",
]);
