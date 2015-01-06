<?php
/**
 * BusinessPermitFixture
 *
 */
class BusinessPermitFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'business_permit_application_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'permit_number' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'date_released' => array('type' => 'date', 'null' => true, 'default' => null),
		'visible' => array('type' => 'boolean', 'null' => true, 'default' => '1'),
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
			'permit_number' => 'Lorem ipsum dolor sit amet',
			'date_released' => '2014-10-13',
			'visible' => 1,
			'created' => '2014-10-13 13:31:34',
			'modified' => '2014-10-13 13:31:34'
		),
	);

}
