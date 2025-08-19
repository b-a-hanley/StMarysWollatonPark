<?php
namespace App\Controllers;

use App\Models\Event;

class EventController {

	public function __construct() {}

	public function index() {
        require_once('src/views/Event/Index.php');
    }

} 