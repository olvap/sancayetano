<?php
App::uses('AppController', 'Controller');
/**
 * Estates Controller
 *
 * @property Estate $Estate
 * @property PaginatorComponent $Paginator
 */
class EstatesController extends AppController {

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
		// $this->Estate->Behaviors->load('Containable');
		// $this->Estate->recursive = -1;
		// debug($this->Estate->Owner->getVirtualField('name'));
		// $this->Estate->Owner->virtualFields['name'] = $this->Estate->Owner->getVirtualField('name');
		// // $this->Estate->contain(array('Owner'=>array('Person')));
		// $hola = $this->Estate->find('all', array('contain' => array('Owner'=>array('Person'))));
		// debug($hola);

		// $this->paginate['Estate'] = array(
		// 	'contain' => array('Owner'=>array('Person')),
		// );

		// debug($this->paginate('Estate'));

		$this->set('estates', $this->Paginator->paginate());
		// $this->set('estates', $this->paginate('Estate'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Estate->exists($id)) {
			throw new NotFoundException(__('Invalid estate'));
		}
		$options = array('conditions' => array('Estate.' . $this->Estate->primaryKey => $id));
		$this->set('estate', $this->Estate->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Estate->create();
			if ($this->Estate->save($this->request->data)) {
				$this->Session->setFlash(__('The estate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estate could not be saved. Please, try again.'));
			}
		}
		$owners = $this->Estate->Owner->find('list'
			, array('fields' => array('Owner.id', 'Owner.name')
				, 'recursive' => 1
			)
		);
		$renters = $this->Estate->Renter->find('list'
			, array('fields' => array('Renter.id', 'Renter.name')
				, 'recursive' => 1
			)
		);
		$this->set(compact('owners', 'renters'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Estate->exists($id)) {
			throw new NotFoundException(__('Invalid estate'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Estate->save($this->request->data)) {
				$this->Session->setFlash(__('The estate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estate could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Estate.' . $this->Estate->primaryKey => $id));
			$this->request->data = $this->Estate->find('first', $options);
		}
		$owners = $this->Estate->Owner->find('list');
		$renters = $this->Estate->Renter->find('list');
		$this->set(compact('owners', 'renters'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Estate->id = $id;
		if (!$this->Estate->exists()) {
			throw new NotFoundException(__('Invalid estate'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Estate->delete()) {
			$this->Session->setFlash(__('The estate has been deleted.'));
		} else {
			$this->Session->setFlash(__('The estate could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Estate->recursive = 0;
		$this->set('estates', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Estate->exists($id)) {
			throw new NotFoundException(__('Invalid estate'));
		}
		$options = array('conditions' => array('Estate.' . $this->Estate->primaryKey => $id));
		$this->set('estate', $this->Estate->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Estate->create();
			if ($this->Estate->save($this->request->data)) {
				$this->Session->setFlash(__('The estate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estate could not be saved. Please, try again.'));
			}
		}
		$owners = $this->Estate->Owner->find('list');
		$renters = $this->Estate->Renter->find('list');
		$this->set(compact('owners', 'renters'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Estate->exists($id)) {
			throw new NotFoundException(__('Invalid estate'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Estate->save($this->request->data)) {
				$this->Session->setFlash(__('The estate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estate could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Estate.' . $this->Estate->primaryKey => $id));
			$this->request->data = $this->Estate->find('first', $options);
		}
		$owners = $this->Estate->Owner->find('list');
		$renters = $this->Estate->Renter->find('list');
		$this->set(compact('owners', 'renters'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Estate->id = $id;
		if (!$this->Estate->exists()) {
			throw new NotFoundException(__('Invalid estate'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Estate->delete()) {
			$this->Session->setFlash(__('The estate has been deleted.'));
		} else {
			$this->Session->setFlash(__('The estate could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

 
}

