<?php
App::uses('Business', 'Model');

/**
 * Business Test Case
 *
 */
class BusinessTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.business',
		'app.business_owner',
		'app.business_permit_application',
		'app.business_permit_application_requirement',
		'app.business_permit_requirement',
		'app.business_permit',
		'app.business_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Business = ClassRegistry::init('Business');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Business);

		parent::tearDown();
	}

}
