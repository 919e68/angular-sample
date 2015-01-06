<?php
App::uses('AppModel', 'Model');
class BusinessTaxClass extends AppModel {

	public $hasMany = array(
		'BusinessPermitApplication',
		'BusinessTaxClassSub'
	);

}
