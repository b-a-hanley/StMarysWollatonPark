<?php
namespace App\Controllers\About;

class OurTeamController {

	public function __construct() {}

	public function index() {
        require_once('src/views/About/OurTeam.php');
    }

}