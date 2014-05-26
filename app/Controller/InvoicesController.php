<?php
App::uses('AppController', 'Controller');
/**
 * Invoices Controller
 *
 * @property Invoice $Invoice
 * @property PaginatorComponent $Paginator
 */
class InvoicesController extends AppController {

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
		$this->Invoice->recursive = 0;
		$this->set('invoices', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Invoice->exists($id)) {
			throw new NotFoundException(__('Invalid invoice'));
		}
		$options = array('conditions' => array('Invoice.' . $this->Invoice->primaryKey => $id));
		$this->set('invoice', $this->Invoice->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Invoice->create();
			if ($this->Invoice->save($this->request->data)) {
				$this->Session->setFlash(__('The invoice has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The invoice could not be saved. Please, try again.'));
			}
		}
		$estates = $this->Invoice->Estate->find('list');
		$this->set(compact('estates'));
	}

/**
 * nueva method
 *
 * @return void
 */
	public function nueva($id = null) {
		if ($this->request->is('post')) {
			$this->Invoice->create();
			if ($this->Invoice->saveAll($this->request->data)) {
				// $this->Session->setFlash(__('The invoice has been saved.'));
				return $this->redirect(array('action' => 'index'));
				// return $this->redirect(array('action' => 'printPDF', $this->Invoice->id));
			} else {
				$this->Session->setFlash(__('The invoice could not be saved. Please, try again.'));
			}
		}
		if(!$id) {
			$this->redirect('/');
		}
		$this->Invoice->Estate->Behaviors->load('Containable');
		$this->Invoice->Estate->recursive = -1;
		$options['conditions'] = array('Estate.id' => $id);
		$options['contain'] = array('Company' => array('fields' => array('id', 'name')));
		$estate = $this->Invoice->Estate->find('first', $options);
		// debug($estate, $showHtml = null, $showFrom = true);
		
		$this->request->data['Estate'] = $estate['Estate'];
		$this->request->data['Company'] = $estate['Company'];
		$this->request->data['Invoice']['ficha'] = $estate['Estate']['ficha'];
		$this->request->data['Invoice']['name'] = $estate['Estate']['renter_name'];
		$this->request->data['Invoice']['address'] = $estate['Estate']['address'];
		$this->request->data['Invoice']['cuit'] = $estate['Estate']['renter_cuit'];
		$this->request->data['Invoice']['type'] = $estate['Estate']['renter_ivaId'] == 1 ? 'A' : 'B';
		$this->request->data['Invoice']['price'] = $estate['Estate']['price'] * 1; // Cast to number
		$this->request->data['Invoice']['insurance'] = $estate['Estate']['insurance'] * 1; // Cast to number
		$this->request->data['Invoice']['iva'] = $estate['Estate']['price'] * 0.21;
		$this->request->data['Invoice']['subtotal'] = ($this->request->data['Invoice']['insurance'] + $this->request->data['Invoice']['price']) * 1.21;
		
		$this->set(compact('estates'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Invoice->exists($id)) {
			throw new NotFoundException(__('Invalid invoice'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Invoice->save($this->request->data)) {
				$this->Session->setFlash(__('The invoice has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The invoice could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Invoice.' . $this->Invoice->primaryKey => $id));
			$this->request->data = $this->Invoice->find('first', $options);
		}
		$estates = $this->Invoice->Estate->find('list');
		$this->set(compact('estates'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Invoice->id = $id;
		if (!$this->Invoice->exists()) {
			throw new NotFoundException(__('Invalid invoice'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Invoice->delete()) {
			$this->Session->setFlash(__('The invoice has been deleted.'));
		} else {
			$this->Session->setFlash(__('The invoice could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Invoice->recursive = 0;
		$this->set('invoices', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Invoice->exists($id)) {
			throw new NotFoundException(__('Invalid invoice'));
		}
		$options = array('conditions' => array('Invoice.' . $this->Invoice->primaryKey => $id));
		$this->set('invoice', $this->Invoice->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Invoice->create();
			if ($this->Invoice->save($this->request->data)) {
				$this->Session->setFlash(__('The invoice has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The invoice could not be saved. Please, try again.'));
			}
		}
		$estates = $this->Invoice->Estate->find('list');
		$this->set(compact('estates'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Invoice->exists($id)) {
			throw new NotFoundException(__('Invalid invoice'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Invoice->save($this->request->data)) {
				$this->Session->setFlash(__('The invoice has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The invoice could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Invoice.' . $this->Invoice->primaryKey => $id));
			$this->request->data = $this->Invoice->find('first', $options);
		}
		$estates = $this->Invoice->Estate->find('list');
		$this->set(compact('estates'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Invoice->id = $id;
		if (!$this->Invoice->exists()) {
			throw new NotFoundException(__('Invalid invoice'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Invoice->delete()) {
			$this->Session->setFlash(__('The invoice has been deleted.'));
		} else {
			$this->Session->setFlash(__('The invoice could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


	public function printPDF($id = null) {
		if(!$id) {
			$this->redirect('/');
		}

		$this -> response -> type("pdf");
		$this -> layout = 'ajax';

		$invoice = $this->Invoice->findById($id);

		$this->set(compact('invoice'));
		$this->render('printpdf');
	}

}