<?php
App::uses('BusinessPermit', 'Model');

/**
 * BusinessPermit Test Case
 *
 */
class BusinessPermitTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.business_permit',
		'app.business_permit_application',
		'app.business',
		'app.business_owner',
		'app.business_permit_application_requirement',
		'app.business_permit_requirement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BusinessPermit = ClassRegistry::init('BusinessPermit');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BusinessPermit);

		parent::tearDown();
	}

}
