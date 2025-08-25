<?php
namespace App\Controllers\WhatsOn\Events;

class ChurchSuiteController {

	public function __construct() {}

	public function index() {
        require_once('src/views/WhatsOn/Events/ChurchSuite.php');
    }

}