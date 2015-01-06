<?php
App::uses('BusinessPermitApplication', 'Model');

/**
 * BusinessPermitApplication Test Case
 *
 */
class BusinessPermitApplicationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.business_permit_application',
		'app.business',
		'app.business_owner',
		'app.business_permit_application_requirement',
		'app.business_permit_requirement',
		'app.business_permit'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BusinessPermitApplication = ClassRegistry::init('BusinessPermitApplication');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BusinessPermitApplication);

		parent::tearDown();
	}

}
