<?php
namespace App\Controllers\WhatsOn;

class SundaysController {

	public function __construct() {}

	public function index() {
        require_once('src/views/WhatsOn/Sundays.php');
    }

} 