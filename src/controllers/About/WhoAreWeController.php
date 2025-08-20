<?php
namespace App\Controllers;

class WhoAreWeController {

	public function __construct() {}

	public function index() {
        require_once('src/views/Error/Index.php');
    }

}