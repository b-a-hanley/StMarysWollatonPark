<?php
namespace App\Controllers;

use App\Models\Media;

class MediaController {

	public function __construct() {}

	public function index() {
        require_once('src/views/Media/Index.php');
    }

} 