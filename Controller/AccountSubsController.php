<?php
App::uses('AppController', 'Controller');
/**
 * AccountSubs Controller
 *
 * @property AccountSub $AccountSub
 * @property PaginatorComponent $Paginator
 */
class AccountSubsController extends AppController {

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
		$this->AccountSub->recursive = 0;
		$this->set('accountSubs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AccountSub->exists($id)) {
			throw new NotFoundException(__('Invalid account sub'));
		}
		$options = array('conditions' => array('AccountSub.' . $this->AccountSub->primaryKey => $id));
		$this->set('accountSub', $this->AccountSub->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AccountSub->create();
			if ($this->AccountSub->save($this->request->data)) {
				$this->Session->setFlash(__('The account sub has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account sub could not be saved. Please, try again.'));
			}
		}
		$accounts = $this->AccountSub->Account->find('list');
		$this->set(compact('accounts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AccountSub->exists($id)) {
			throw new NotFoundException(__('Invalid account sub'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AccountSub->save($this->request->data)) {
				$this->Session->setFlash(__('The account sub has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account sub could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AccountSub.' . $this->AccountSub->primaryKey => $id));
			$this->request->data = $this->AccountSub->find('first', $options);
		}
		$accounts = $this->AccountSub->Account->find('list');
		$this->set(compact('accounts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AccountSub->id = $id;
		if (!$this->AccountSub->exists()) {
			throw new NotFoundException(__('Invalid account sub'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AccountSub->delete()) {
			$this->Session->setFlash(__('The account sub has been deleted.'));
		} else {
			$this->Session->setFlash(__('The account sub could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
