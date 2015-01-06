<?php
App::uses('BusinessPermitFeeClass', 'Model');

/**
 * BusinessPermitFeeClass Test Case
 *
 */
class BusinessPermitFeeClassTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.business_permit_fee_class',
		'app.business_permit_application',
		'app.business',
		'app.business_owner',
		'app.business_type',
		'app.business_tax_class',
		'app.business_tax_class_sub',
		'app.business_permit_application_requirement',
		'app.business_permit_requirement',
		'app.business_permit',
		'app.business_permit_fee_class_sub'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BusinessPermitFeeClass = ClassRegistry::init('BusinessPermitFeeClass');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BusinessPermitFeeClass);

		parent::tearDown();
	}

}
