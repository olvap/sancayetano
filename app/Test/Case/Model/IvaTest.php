<?php
App::uses('Iva', 'Model');

/**
 * Iva Test Case
 *
 */
class IvaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.iva',
		'app.person',
		'app.owner',
		'app.estate',
		'app.renter'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Iva = ClassRegistry::init('Iva');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Iva);

		parent::tearDown();
	}

}
