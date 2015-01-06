<?php
App::uses('AppModel', 'Model');
class BusinessOwner extends AppModel {

	public $recursive = -1;
	public $actsAs = array('Containable');
	
	public $hasMany = array(
		'BusinessPermitApplication',
		'Business'
	);
	
	public $virtualFields = array(
		'name' => 'CONCAT(BusinessOwner.first_name, " ", BusinessOwner.last_name)',
		'proper_name' => 'CONCAT(BusinessOwner.last_name, " ", BusinessOwner.first_name)',
		'full_name' => 'CONCAT(BusinessOwner.last_name, " ", BusinessOwner.first_name, ", ", IFNULL(BusinessOwner.middle_name, ""))',
		'img_path' => 'CONCAT("/uploads/business-owners/", BusinessOwner.id, "/", BusinessOwner.image)',
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
