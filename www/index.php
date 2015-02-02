<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/system/application.php');

$app = new Application();

$app->setRoute($_GET['route']);

echo $app->render();

?>