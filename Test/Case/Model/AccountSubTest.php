<?php
App::uses('AccountSub', 'Model');

/**
 * AccountSub Test Case
 *
 */
class AccountSubTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.account_sub',
		'app.account',
		'app.account_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AccountSub = ClassRegistry::init('AccountSub');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AccountSub);

		parent::tearDown();
	}

}
