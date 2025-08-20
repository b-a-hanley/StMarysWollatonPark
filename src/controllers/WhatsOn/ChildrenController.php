<?php
namespace App\Controllers\WhatsOn;

class ChildrenController {

	public function __construct() {}

	public function index() {
        require_once('src/views/WhatsOn/Children.php');
    }

}