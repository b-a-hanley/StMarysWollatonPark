<?php
namespace App\Controllers;

use App\Models\AboutUs;

class AboutUsController {

	public function __construct() {}

	public function index() {
        require_once('src/views/AboutUs/Index.php');
    }

}