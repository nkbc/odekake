<?php
App::uses('AppController', 'Controller');
/**
 * Spots Controller
 *
 * @property Spot $Spot
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SpotsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Spot->recursive = 0;
		$this->set('spots', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Spot->exists($id)) {
			throw new NotFoundException(__('Invalid spot'));
		}
		$options = array('conditions' => array('Spot.' . $this->Spot->primaryKey => $id));
		$this->set('spot', $this->Spot->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Spot->create();
			if ($this->Spot->save($this->request->data)) {
				$this->Session->setFlash(__('The spot has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The spot could not be saved. Please, try again'));
			}
		}
		$genres = $this->Spot->Genre->find('list');
		$this->set(compact('genres'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Spot->exists($id)) {
			throw new NotFoundException(__('Invalid spot'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Spot->save($this->request->data)) {
				$this->Session->setFlash(__('The spot has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The spot could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Spot.' . $this->Spot->primaryKey => $id));
			$this->request->data = $this->Spot->find('first', $options);
		}
		$genres = $this->Spot->Genre->find('list');
		$this->set(compact('genres'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Spot->id = $id;
		if (!$this->Spot->exists()) {
			throw new NotFoundException(__('Invalid spot'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Spot->delete()) {
			$this->Session->setFlash(__('The spot has been deleted.'));
		} else {
			$this->Session->setFlash(__('The spot could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
