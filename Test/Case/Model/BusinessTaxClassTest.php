<?php
App::uses('BusinessTaxClass', 'Model');

/**
 * BusinessTaxClass Test Case
 *
 */
class BusinessTaxClassTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.business_tax_class',
		'app.business_permit_application',
		'app.business',
		'app.business_owner',
		'app.business_type',
		'app.business_permit_application_requirement',
		'app.business_permit_requirement',
		'app.business_permit',
		'app.business_tax_class_sub'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BusinessTaxClass = ClassRegistry::init('BusinessTaxClass');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BusinessTaxClass);

		parent::tearDown();
	}

}
