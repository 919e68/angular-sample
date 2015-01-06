<?php
App::uses('AppModel', 'Model');
class TaxOrderPayment extends AppModel {

	public $recursive = -1;
	public $actsAs = array('Containable');
	
	public $belongsTo = array(
		'BusinessPermitApplication'
	);

	public $hasMany = array(
		'TaxOrderPaymentFee'
	);
	
	public $hasOne = array(
		'BusinessPermit'
	);

	public function visible($id = null, $value = true){
		$result = false; $this->id = $id;
		if ($this->save(array('visible'=>$value))){ $result = true; } else { $result = false; }
		return $result;
	}
	
	public function existing($arr = array()){
		$res = false; $this->recursive = -1; $data = $this->find('all', array('conditions'=>$arr));
		if(count($data) > 0) { $res = true; } else { $res = false; } return $res;
	}
}
