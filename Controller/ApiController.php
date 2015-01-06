<?php
App::uses('AppController', 'Controller');
class ApiController extends AppController {

	public $uses = array(
		'BusinessType',
		'BusinessAssetType',
		'BusinessPermit',
		'BusinessPermitApplication',
		'TaxOrderPayment'
	);
	
	public $layout = null;
	public $autoRender = false;
	

	
	public function autofill(){
		$permitNumber = $this->request->query['permit'];
		$fill = $this->BusinessPermit->find('first', array(
			'contain'=>array(
				'BusinessPermitApplication'=>array(
					'BusinessOwner',
					'Business'
				)
			),
			'conditions'=>array(
				'BusinessPermit.permit_number'=>$permitNumber
			)
		));
		echo json_encode($fill);
	}
	
	public function business_types(){
		$types = $this->BusinessType->find('all', array(
			'conditions'=>array(
				'BusinessType.visible'=>true
			)
		));
		echo json_encode(array('types'=>$types));
	}
	
	public function business_asset_types(){
		$types = $this->BusinessAssetType->find('all', array(
			'conditions'=>array(
				'BusinessAssetType.visible'=>true
			)
		));
		echo json_encode(array('types'=>$types));
	}

	public function business_permit_applications(){
		$applications = $this->BusinessPermitApplication->find('all', array(
			'conditions'=>array(
				'BusinessPermitApplication.visible'=>true
			)
		));
		echo json_encode(array('applications'=>$applications));
		
	}
	
	public function assessments(){
		$assessments = $this->BusinessPermitApplication->find('all', array(
			'conditions'=>array(
				'BusinessPermitApplication.visible'=>true
			)
		));
		echo json_encode(array('assessments'=>$assessments));
	}
	
	public function payments(){
		$payments = $this->TaxOrderPayment->find('all', array(
			'contain'=>array(
				'BusinessPermitApplication'=>array(
					'Business',
					'BusinessOwner'
				),
				'TaxOrderPaymentFee'=>array(
					'conditions'=>array('TaxOrderPaymentFee.visible'=>true)
				)
			),
			'conditions'=>array(
				'TaxOrderPayment.visible'=>true
			)
		));
		echo json_encode(array('payments'=>$payments));
	}
	
	public function permits(){
		$permits = $this->BusinessPermit->find('all', array(
			'contain'=>array(
				'BusinessPermitApplication'=>array(
					'Business',
					'BusinessOwner'
				)
			),
			'conditions'=>array(
				'BusinessPermit.visible'=>true
			)
		));
		echo json_encode(array('permits'=>$permits));
	}
}