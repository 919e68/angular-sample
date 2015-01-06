<?php
App::uses('Helper', 'View');
class GlobalHelper extends Helper {

	public $components = array('Session');
	
	public function TotalArr($arrs = array(), $field = null){
		$total = 0;
		foreach($arrs as $arr){
			$total += $arr[$field];
		}
		return $total;
	}
	
	

}