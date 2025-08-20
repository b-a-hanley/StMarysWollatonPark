<?php
namespace App\Controllers\LifeEvents;

class BaptismsController {

	public function __construct() {}

	public function index() {
        require_once('src/views/LifeEvents/Baptisms.php');
    }

}