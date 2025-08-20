<?php
namespace App\Controllers;

class BookingsController {

	public function __construct() {}

	public function index() {
        require_once('src/views/Bookings.php');
    }

}