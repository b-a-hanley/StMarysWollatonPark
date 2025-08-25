<?php

// Autoload classes using Composer (assuming you have a PSR-4 autoloader set up)
require_once 'vendor/autoload.php';
// Namespace declaration

use App\Controllers;
use App\Routes;

$request_uri = $_SERVER['REQUEST_URI'];
$base_uri = str_replace('/index.php', '', $_SERVER['SCRIPT_NAME']);
$uri = substr($request_uri, strlen($base_uri));
if (strpos($uri, '/st-marys') === 0) {
    $uri = substr($uri, strlen('/st-marys'));
}

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
	case '/our-team':
		$controller = new Controllers\About\OurTeamController();
		$controller->index();
		break;
	case '/our-beliefs':
		$controller = new Controllers\About\OurBeliefsController();
		$controller->index();
		break;
	case '/sundays':
		$controller = new Controllers\WhatsOn\SundaysController();
		$controller->index();
		break;
	case '/midweek':
		$controller = new Controllers\WhatsOn\MidweekController();
		$controller->index();
		break;
	case '/students':
		$controller = new Controllers\WhatsOn\StudentsController();
		$controller->index();
		break;
	case '/children':
		$controller = new Controllers\WhatsOn\ChildrenController();
		$controller->index();
		break;
	case '/events/instagram':
		$controller = new Routes\Events();
		$controller->routes($uri);
		break;
	case '/events/manual':
		$controller = new Routes\Events();
		$controller->routes($uri);
		break;
	case '/events/churchsuite':
		$controller = new Routes\Events();
		$controller->routes($uri);
		break;
	case '/christenings':
		$controller = new Controllers\LifeEvents\ChristeningsController();
		$controller->index();
		break;
	case '/baptisms':
		$controller = new Controllers\LifeEvents\BaptismsController();
		$controller->index();
		break;
	case '/weddings':
		$controller = new Controllers\LifeEvents\WeddingsController();
		$controller->index();
		break;
	case '/funerals':
		$controller = new Controllers\LifeEvents\FuneralsController();
		$controller->index();
		break;
	case '/bookings':
		$controller = new Controllers\BookingsController();
		$controller->index();
		break;
	case '/giving':
		$controller = new Controllers\GivingController();
		$controller->index();
		break;
	case '/contact-us':
		$controller = new Controllers\ContactUsController();
		$controller->index();
		break;
	default:
		$controller = new Controllers\ErrorController();
		$controller->index();
		break;
}
