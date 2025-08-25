<?php
namespace App\Routes;
use App\Controllers;

class Events {

	public function __construct() {}

	public function routes(String $uri) {
        switch ($uri) {
			case '/events/churchsuite':
				$controller = new Controllers\WhatsOn\Events\ChurchSuiteController();
				$controller->index();
				break;
			case '/events/instagram':
				$controller = new Controllers\WhatsOn\Events\InstagramController();
				$controller->index();
				break;
			case '/events/manual':
				$controller = new Controllers\WhatsOn\Events\ManualController();
				$controller->index();
				break;
			default:
				$controller = new Controllers\ErrorController();
				$controller->index();
				break;
		}
    }

} 