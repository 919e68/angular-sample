<?php
App::uses('BusinessPermitApplicationRequirement', 'Model');

/**
 * BusinessPermitApplicationRequirement Test Case
 *
 */
class BusinessPermitApplicationRequirementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.business_permit_application_requirement',
		'app.business_permit_application',
		'app.business_permit_requirement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BusinessPermitApplicationRequirement = ClassRegistry::init('BusinessPermitApplicationRequirement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BusinessPermitApplicationRequirement);

		parent::tearDown();
	}

}
