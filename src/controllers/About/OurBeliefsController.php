<?php
namespace App\Controllers\About;

class OurBeliefsController {

	public function __construct() {}

	public function index() {
        require_once('src/views/About/OurBeliefs.php');
    }

}