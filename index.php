<?php
//session start
session_start();
// Include Config
require('config.php');

require("vendor/autoload.php");

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

if($controller){
	$controller->executeAction();
}
