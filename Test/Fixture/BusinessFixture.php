<?php
/**
 * BusinessFixture
 *
 */
class BusinessFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'description' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2500, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'location' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'business_owner_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'line_of_business' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'business_type_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'capital_investment' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'last_year_declared_gross_sales' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'number_of_employees' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'data' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2500, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'name' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet',
			'location' => 1,
			'business_owner_id' => 1,
			'line_of_business' => 'Lorem ipsum dolor sit amet',
			'business_type_id' => 1,
			'capital_investment' => 1,
			'last_year_declared_gross_sales' => 1,
			'number_of_employees' => 1,
			'data' => 'Lorem ipsum dolor sit amet',
			'visible' => 1,
			'created' => '2014-10-13 13:31:39',
			'modified' => '2014-10-13 13:31:39'
		),
	);

}
