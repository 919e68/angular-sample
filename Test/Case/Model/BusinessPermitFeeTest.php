<?php
App::uses('BusinessPermitFee', 'Model');

/**
 * BusinessPermitFee Test Case
 *
 */
class BusinessPermitFeeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.business_permit_fee'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BusinessPermitFee = ClassRegistry::init('BusinessPermitFee');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BusinessPermitFee);

		parent::tearDown();
	}

}
