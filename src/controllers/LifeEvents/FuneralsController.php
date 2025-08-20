<?php
namespace App\Controllers\LifeEvents;

class FuneralsController {

	public function __construct() {}

	public function index() {
        require_once('src/views/LifeEvents/Funerals.php');
    }

}