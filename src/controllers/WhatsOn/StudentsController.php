<?php
namespace App\Controllers\WhatsOn;

class StudentsController {

	public function __construct() {}

	public function index() {
        require_once('src/views/WhatsOn/Students.php');
    }

} 