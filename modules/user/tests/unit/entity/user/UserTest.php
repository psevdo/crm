<?php

namespace modules\user\entity\user;


class UserTest extends \Codeception\Test\Unit {
	/**
	 * @var \modules\user\UnitTester
	 */
	protected $tester;

	protected function _before() {
	}

	protected function _after() {
	}

	// tests
	public function testSomeFeature() {
		$this->tester->assertEquals(1, 1);
	}
}