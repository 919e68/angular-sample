<?php
/**
 * BusinessPermitFeeFixture
 *
 */
class BusinessPermitFeeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'amount' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'visible' => array('type' => 'boolean', 'null' => true, 'default' => null),
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
			'name' => 1,
			'amount' => 1,
			'visible' => 1,
			'created' => '2014-10-13 13:31:13',
			'modified' => '2014-10-13 13:31:13'
		),
	);

}
