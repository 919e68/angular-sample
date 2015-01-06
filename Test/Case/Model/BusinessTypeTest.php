<?php
App::uses('BusinessType', 'Model');

/**
 * BusinessType Test Case
 *
 */
class BusinessTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.business_type',
		'app.business'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BusinessType = ClassRegistry::init('BusinessType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BusinessType);

		parent::tearDown();
	}

}
