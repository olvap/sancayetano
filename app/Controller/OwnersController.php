<?php
App::uses('AppController', 'Controller');
/**
 * Owners Controller
 *
 * @property Owner $Owner
 * @property PaginatorComponent $Paginator
 */
class OwnersController extends AppController {

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
		$this->Owner->recursive = 0;
		$this->set('owners', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Owner->exists($id)) {
			throw new NotFoundException(__('Invalid owner'));
		}
		$options = array('conditions' => array('Owner.' . $this->Owner->primaryKey => $id));
		$this->set('owner', $this->Owner->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$owner = $this->request->data;
			$person['Person'] = $owner['Person'];

			$this->Owner->Person->create();
			if ($this->Owner->Person->save($person)) {
				$owner['Owner']['person_id'] = $this->Owner->Person->id;

				$this->Owner->create();
				if ($this->Owner->save($owner)) {
					$this->Session->setFlash(__('The owner has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The owner could not be saved. Please, try again.'));
				}
			}
		}
		$ivas = $this->Owner->Person->Iva->find('list');
		$this->set(compact('ivas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Owner->exists($id)) {
			throw new NotFoundException(__('Invalid owner'));
		}
		if ($this->request->is(array('post', 'put'))) {
			// debug($this->request->data, $showHtml = null, $showFrom = true);
			if ($this->Owner->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The owner has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The owner could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Owner.' . $this->Owner->primaryKey => $id));
			$this->request->data = $this->Owner->find('first', $options);
		}
		$ivas = $this->Owner->Person->Iva->find('list');
		$this->set(compact('ivas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Owner->id = $id;
		if (!$this->Owner->exists()) {
			throw new NotFoundException(__('Invalid owner'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Owner->delete()) {
			$this->Session->setFlash(__('The owner has been deleted.'));
		} else {
			$this->Session->setFlash(__('The owner could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
