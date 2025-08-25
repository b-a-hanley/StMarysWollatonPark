<?php
namespace App\Controllers\WhatsOn\Events;

class ManualController {

	public function __construct() {}

	public function index() {
        require_once('src/views/WhatsOn/Events/Manual.php');
    }

}