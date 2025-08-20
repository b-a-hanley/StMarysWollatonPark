<?php

// Autoload classes using Composer (assuming you have a PSR-4 autoloader set up)
require_once 'vendor/autoload.php';
// Namespace declaration

use App\Controllers;

$request_uri = $_SERVER['REQUEST_URI'];
$base_uri = str_replace('/index.php', '', $_SERVER['SCRIPT_NAME']);
$uri = substr($request_uri, strlen($base_uri));
$prefix = '/st-marys';
if (strpos($uri, $prefix) === 0) {
    $uri = substr($uri, strlen($prefix));
}

// use App\Controllers\HomeController;
// Route to the appropriate controller based on the URI
switch ($uri) {
	case '/':
		$controller = new Controllers\HomeController();
		$controller->index();
		break;
	case '/index.php':
		$controller = new Controllers\HomeController();
		$controller->index();
		break;
	case '/index':
		$controller = new Controllers\HomeController();
		$controller->index();
		break;
	case '/our-story':
		$controller = new Controllers\About\OurStoryController();
		$controller->index();
		break;
	case '/who-are-we':
		$controller = new Controllers\About\WhoAreWeController();
		$controller->index();
		break;
	case '/media':
		$controller = new Controllers\ErrorController();
		$controller->index();
		break;
	case '/events':
		$controller = new Controllers\ErrorController();
		$controller->index();
		break;
	case '/contact-us':
		$controller = new Controllers\ErrorController();
		$controller->index();
		break;
	case '/donate':
		$controller = new Controllers\ErrorController();
		$controller->index();
		break;
	default:
		$controller = new Controllers\ErrorController();
		$controller->index();
		break;
}
