<?php

use App\Banana;
use PHPUnit\Framework\TestCase;

class BananaTest extends TestCase {

	public function testTestMethod(): void {
		$banana = new Banana;

		$this->assertTrue($banana->test());
	}

}