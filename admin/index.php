<?php
session_start();
define('BASEPATH',true);
if (!isset($_SESSION['user_admin'])) {
	header('location: login.php');
}
include_once('../config.php');
include_once('core/Database.php');
include_once('core/load.php');
loadTemplate('layout');
 ?>