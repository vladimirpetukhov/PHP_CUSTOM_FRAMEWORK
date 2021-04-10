<?php
include '../../php_mvc/App.php';

$app = \ServerApi\App::getInstance();

$config = \ServerApi\Config::getInstance();
$config->setConfigFolder('../config');

$app->run();

?>

<h1>Hello World!!!</h1>