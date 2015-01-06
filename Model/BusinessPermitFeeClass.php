<?php
App::uses('AppModel', 'Model');
class BusinessPermitFeeClass extends AppModel {

	public $hasMany = array(
		'BusinessPermitApplication',
		'BusinessPermitFeeClassSub'
	);

}
