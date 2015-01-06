<?php
/**
 * BusinessPermitApplicationRequirementFixture
 *
 */
class BusinessPermitApplicationRequirementFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'business_permit_application_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'business_permit_requirement_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'certificate_number' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'date_issued' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'location_issued' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'data' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2500, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'status' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'visible' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'business_permit_application_id' => 1,
			'business_permit_requirement_id' => 1,
			'certificate_number' => 1,
			'date_issued' => 1,
			'location_issued' => 1,
			'data' => 'Lorem ipsum dolor sit amet',
			'status' => 1,
			'visible' => 1,
			'created' => '2014-10-13 13:31:01',
			'modified' => '2014-10-13 13:31:01'
		),
	);

}
