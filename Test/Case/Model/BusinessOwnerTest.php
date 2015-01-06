<?php
App::uses('BusinessOwner', 'Model');

/**
 * BusinessOwner Test Case
 *
 */
class BusinessOwnerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.business_owner',
		'app.business_permit_application',
		'app.business'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BusinessOwner = ClassRegistry::init('BusinessOwner');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BusinessOwner);

		parent::tearDown();
	}

}
