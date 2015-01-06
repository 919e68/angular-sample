<?php
App::uses('AppController', 'Controller');
class FrontController extends AppController {

	public $uses = array('TaxOrderPayment', 'BusinessPermitApplication', 'BusinessPermit', 'User');
	public $components = array('Paginator');
	public $layout = null;
	
	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('login', 'logout');	
	}
	
	public function test(){

	}

	public function index(){
		
	}
	
	public function login(){
		$this->layout = null;
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect(array('controller'=>'front', 'action'=>'index'));
			}
			$this->request->data['User']['password'] = null;
		} else {
			if ($this->Auth->loggedIn()) {
				return $this->redirect(array('controller'=>'front', 'action'=>'dashboard'));
			}
		}
	}
	
	public function logout(){
		$this->Session->destroy();
		$this->Session->delete('Auth');
		return $this->redirect($this->Auth->logout());	
	}
	
	public function print_permit($id = null){
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
	
	public function print_ambulant($id = null){
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
}