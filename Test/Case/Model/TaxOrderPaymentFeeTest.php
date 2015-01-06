<?php
App::uses('TaxOrderPaymentFee', 'Model');

/**
 * TaxOrderPaymentFee Test Case
 *
 */
class TaxOrderPaymentFeeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tax_order_payment_fee',
		'app.tax_order_payment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TaxOrderPaymentFee = ClassRegistry::init('TaxOrderPaymentFee');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TaxOrderPaymentFee);

		parent::tearDown();
	}

}
