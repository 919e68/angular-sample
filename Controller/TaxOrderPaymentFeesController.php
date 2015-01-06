<?php
App::uses('AppController', 'Controller');
/**
 * TaxOrderPaymentFees Controller
 *
 * @property TaxOrderPaymentFee $TaxOrderPaymentFee
 * @property PaginatorComponent $Paginator
 */
class TaxOrderPaymentFeesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TaxOrderPaymentFee->recursive = 0;
		$this->set('taxOrderPaymentFees', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TaxOrderPaymentFee->exists($id)) {
			throw new NotFoundException(__('Invalid tax order payment fee'));
		}
		$options = array('conditions' => array('TaxOrderPaymentFee.' . $this->TaxOrderPaymentFee->primaryKey => $id));
		$this->set('taxOrderPaymentFee', $this->TaxOrderPaymentFee->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TaxOrderPaymentFee->create();
			if ($this->TaxOrderPaymentFee->save($this->request->data)) {
				$this->Session->setFlash(__('The tax order payment fee has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tax order payment fee could not be saved. Please, try again.'));
			}
		}
		$taxOrderPayments = $this->TaxOrderPaymentFee->TaxOrderPayment->find('list');
		$this->set(compact('taxOrderPayments'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TaxOrderPaymentFee->exists($id)) {
			throw new NotFoundException(__('Invalid tax order payment fee'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TaxOrderPaymentFee->save($this->request->data)) {
				$this->Session->setFlash(__('The tax order payment fee has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tax order payment fee could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TaxOrderPaymentFee.' . $this->TaxOrderPaymentFee->primaryKey => $id));
			$this->request->data = $this->TaxOrderPaymentFee->find('first', $options);
		}
		$taxOrderPayments = $this->TaxOrderPaymentFee->TaxOrderPayment->find('list');
		$this->set(compact('taxOrderPayments'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TaxOrderPaymentFee->id = $id;
		if (!$this->TaxOrderPaymentFee->exists()) {
			throw new NotFoundException(__('Invalid tax order payment fee'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TaxOrderPaymentFee->delete()) {
			$this->Session->setFlash(__('The tax order payment fee has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tax order payment fee could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
