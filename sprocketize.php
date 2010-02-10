<?php require_once('lib/sprocket.php');
$filePath = preg_replace('/\?.*/', '', $_SERVER['REQUEST_URI']);
$sprocket = new Sprocket($filePath, array(
	'baseUri' => '/php-sprockets', 
	'autoRender' => true
)); ?>