<?php
App::uses('TaxOrderPayment', 'Model');

/**
 * TaxOrderPayment Test Case
 *
 */
class TaxOrderPaymentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tax_order_payment',
		'app.tax_order_payment_fee'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TaxOrderPayment = ClassRegistry::init('TaxOrderPayment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TaxOrderPayment);

		parent::tearDown();
	}

}
