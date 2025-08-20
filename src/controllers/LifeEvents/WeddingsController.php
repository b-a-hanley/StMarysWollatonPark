<?php
namespace App\Controllers\LifeEvents;

class WeddingsController {

	public function __construct() {}

	public function index() {
        require_once('src/views/LifeEvents/Weddings.php');
    }

}