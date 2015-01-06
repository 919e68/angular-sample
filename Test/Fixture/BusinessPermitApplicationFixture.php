<?php
/**
 * BusinessPermitApplicationFixture
 *
 */
class BusinessPermitApplicationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'business_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'business_owner_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'permit_type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'approved' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'date_applied' => array('type' => 'date', 'null' => true, 'default' => null),
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
			'business_id' => 1,
			'business_owner_id' => 1,
			'permit_type' => 'Lorem ipsum dolor sit amet',
			'approved' => 1,
			'date_applied' => '2014-10-13',
			'visible' => 1,
			'created' => '2014-10-13 13:31:08',
			'modified' => '2014-10-13 13:31:08'
		),
	);

}
