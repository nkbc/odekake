<?php
App::uses('AppController', 'Controller');
/**
 * Plans Controller
 *
 * @property Plan $Plan
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TopsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

	public $uses = array('Plan');


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Plan->recursive = 0;
		$this->set('plans', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Plan->exists($id)) {
			throw new NotFoundException(__('Invalid plan'));
		}
		$this->Plan->recursive = 2;

		$options = array('conditions' => array('Plan.' . $this->Plan->primaryKey => $id));
		$plan =$this->Plan->find('first', $options);
		$this->log($plan,LOG_DEBUG);
		$this->set('plan', $plan);
		
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Plan->create();
			if ($this->Plan->save($this->request->data)) {
				$this->Session->setFlash(__('The plan has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plan could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Plan->exists($id)) {
			throw new NotFoundException(__('Invalid plan'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Plan->save($this->request->data)) {
				$this->Session->setFlash(__('The plan has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plan could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Plan.' . $this->Plan->primaryKey => $id));
			$this->request->data = $this->Plan->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Plan->id = $id;
		if (!$this->Plan->exists()) {
			throw new NotFoundException(__('Invalid plan'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Plan->delete()) {
			$this->Session->setFlash(__('The plan has been deleted.'));
		} else {
			$this->Session->setFlash(__('The plan could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}



/*	public function detail($id = null){
	
		if (!$this->Plan->exists($id)) {
			throw new NotFoundException(__('Invalid plan'));
		}
		$options = array('conditions' => array('Plan.' . $this->Plan->primaryKey => $id));
		$this->set('plan', $this->Plan->find('first', $options));
	
	}*/

}
