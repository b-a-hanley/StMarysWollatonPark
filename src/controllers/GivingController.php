<?php
namespace App\Controllers;

class GivingController {

	public function __construct() {}

	public function index() {
        require_once('src/views/Giving.php');
    }

} 