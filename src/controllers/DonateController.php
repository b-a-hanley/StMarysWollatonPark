<?php
namespace App\Controllers;

use App\Models\Donate;

class DonateController {

	public function __construct() {}

	public function index() {
        require_once('src/views/Donate/Index.php');
    }

} 