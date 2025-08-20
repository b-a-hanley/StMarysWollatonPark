<?php
namespace App\Controllers;

class EventsController {

	public function __construct() {}

	public function index() {
        require_once('src/views/Media/Index.php');
    }

} 