<?php
namespace App\Controllers\WhatsOn\Events;

class InstagramController {

	public function __construct() {}

	public function index() {
        require_once('src/views/WhatsOn/Events/Instagram.php');
    }

}