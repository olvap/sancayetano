<?php
App::uses('Estate', 'Model');

/**
 * Estate Test Case
 *
 */
class EstateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.estate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Estate = ClassRegistry::init('Estate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Estate);

		parent::tearDown();
	}

}
