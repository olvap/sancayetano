<?php
App::uses('AppController', 'Controller');
/**
 * Ivas Controller
 *
 * @property Iva $Iva
 * @property PaginatorComponent $Paginator
 */
class IvasController extends AppController {

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
		$this->Iva->recursive = 0;
		$this->set('ivas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Iva->exists($id)) {
			throw new NotFoundException(__('Invalid iva'));
		}
		$options = array('conditions' => array('Iva.' . $this->Iva->primaryKey => $id));
		$this->set('iva', $this->Iva->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Iva->create();
			if ($this->Iva->save($this->request->data)) {
				$this->Session->setFlash(__('The iva has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The iva could not be saved. Please, try again.'));
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
		if (!$this->Iva->exists($id)) {
			throw new NotFoundException(__('Invalid iva'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Iva->save($this->request->data)) {
				$this->Session->setFlash(__('The iva has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The iva could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Iva.' . $this->Iva->primaryKey => $id));
			$this->request->data = $this->Iva->find('first', $options);
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
		$this->Iva->id = $id;
		if (!$this->Iva->exists()) {
			throw new NotFoundException(__('Invalid iva'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Iva->delete()) {
			$this->Session->setFlash(__('The iva has been deleted.'));
		} else {
			$this->Session->setFlash(__('The iva could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
