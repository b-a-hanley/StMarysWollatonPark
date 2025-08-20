<?php
namespace App\Controllers\About;

class OurStoryController {

	public function __construct() {}

	public function index() {
        require_once('src/views/About/Index.php');
    }

}