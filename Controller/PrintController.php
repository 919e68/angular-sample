<?php
App::uses('AppController', 'Controller');
class PrintController extends AppController {
	
	public $uses = array('BusinessPermit', 'TaxOrderPayment', 'BusinessPermitApplication');
	public $layout = null;
	public function quarterly(){
		
	}
	public function monthly(){
		
	}
	public function agency(){
		
	}
	public function all(){
		
	}
	public function bpls() {

	}
	public function permit($id = null){
		$this->layout = null;
		$permit = $this->BusinessPermit->find('first', array(
			'contain'=>array(
				'BusinessPermitApplication'=>array(
					'Business',
					'BusinessOwner'
				)
			),
			'conditions'=>array(
				'BusinessPermit.id'=>$id
			)
		));
		$this->set(compact('permit'));
	}
	
	public function taxorderpayment($id = null) {
		$data = $this->BusinessPermitApplication->find('first', array(
			'contain'=>array(
				'Business'=>array(
					'BusinessType'
				),
				'BusinessOwner',
				'TaxOrderPayment'=>array(
					'TaxOrderPaymentFee'=>array(
						'BusinessPermitFee',
						'conditions'=>array(
							'TaxOrderPaymentFee.visible'=>true
						)
					)
				)
			),
			'conditions'=>array(
				'BusinessPermitApplication.id'=>$id
			)
		));
		$this->set(compact('data'));
	}
	
	public function ambulant(){
		
	}
}
