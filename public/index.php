<?php
require_once '../app/init.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (version_compare(phpversion(), '5.3.0', '<') == true) {
	die('PHP5.3 Only');
}

$app = new App;