<?php
App::uses('AppController', 'Controller');
/**
 * Renters Controller
 *
 * @property Renter $Renter
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class RentersController extends AppController {

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
		$this->Renter->recursive = 0;
		$this->set('renters', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Renter->exists($id)) {
			throw new NotFoundException(__('Invalid renter'));
		}
		$options = array('conditions' => array('Renter.' . $this->Renter->primaryKey => $id));
		$this->set('renter', $this->Renter->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Renter->create();
			if ($this->Renter->save($this->request->data)) {
				$this->Session->setFlash(__('The renter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The renter could not be saved. Please, try again.'));
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
		if (!$this->Renter->exists($id)) {
			throw new NotFoundException(__('Invalid renter'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Renter->save($this->request->data)) {
				$this->Session->setFlash(__('The renter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The renter could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Renter.' . $this->Renter->primaryKey => $id));
			$this->request->data = $this->Renter->find('first', $options);
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
		$this->Renter->id = $id;
		if (!$this->Renter->exists()) {
			throw new NotFoundException(__('Invalid renter'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Renter->delete()) {
			$this->Session->setFlash(__('The renter has been deleted.'));
		} else {
			$this->Session->setFlash(__('The renter could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
