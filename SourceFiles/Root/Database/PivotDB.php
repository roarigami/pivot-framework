<?php
ob_start();

$db->mysqli_query("CREATE DATABASE IF NOT EXISTS 'pivotdb'");

mysqli_select_db($db, 'pivotdb');
