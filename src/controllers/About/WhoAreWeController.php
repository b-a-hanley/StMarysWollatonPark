<?php
namespace App\Controllers\About;

class WhoAreWeController {

	public function __construct() {}

	public function index() {
        require_once('src/views/About/WhoAreWe.php');
    }

}