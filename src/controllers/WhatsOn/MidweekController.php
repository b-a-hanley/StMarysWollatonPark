<?php
namespace App\Controllers\WhatsOn;

class MidweekController {

	public function __construct() {}

	public function index() {
        require_once('src/views/WhatsOn/Midweek.php');
    }

} 