<?php
App::uses('BusinessAssetType', 'Model');

/**
 * BusinessAssetType Test Case
 *
 */
class BusinessAssetTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.business_asset_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BusinessAssetType = ClassRegistry::init('BusinessAssetType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BusinessAssetType);

		parent::tearDown();
	}

}
