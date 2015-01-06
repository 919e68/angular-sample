<?php
App::uses('BusinessTypesController', 'Controller');

/**
 * BusinessTypesController Test Case
 *
 */
class BusinessTypesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.business_type',
		'app.business',
		'app.business_owner',
		'app.business_permit_application',
		'app.business_permit_application_requirement',
		'app.business_permit_requirement',
		'app.business_permit'
	);

}
