<?php
App::uses('AppController', 'Controller');
/**
 * Descuentos Controller
 *
 * @property Descuento $Descuento
 */
class DescuentosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Descuento->recursive = 0;
		$this->set('descuentos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Descuento->id = $id;
		if (!$this->Descuento->exists()) {
			throw new NotFoundException(__('Invalid descuento'));
		}
		$this->set('descuento', $this->Descuento->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Descuento->create();
			if ($this->Descuento->save($this->request->data)) {
				$this->Session->setFlash(__('The descuento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The descuento could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Descuento->id = $id;
		if (!$this->Descuento->exists()) {
			throw new NotFoundException(__('Invalid descuento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Descuento->save($this->request->data)) {
				$this->Session->setFlash(__('The descuento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The descuento could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Descuento->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Descuento->id = $id;
		if (!$this->Descuento->exists()) {
			throw new NotFoundException(__('Invalid descuento'));
		}
		if ($this->Descuento->delete()) {
			$this->Session->setFlash(__('Descuento deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Descuento was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Descuento->recursive = 0;
		$this->set('descuentos', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Descuento->id = $id;
		if (!$this->Descuento->exists()) {
			throw new NotFoundException(__('Invalid descuento'));
		}
		$this->set('descuento', $this->Descuento->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Descuento->create();
			if ($this->Descuento->save($this->request->data)) {
				$this->Session->setFlash(__('The descuento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The descuento could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Descuento->id = $id;
		if (!$this->Descuento->exists()) {
			throw new NotFoundException(__('Invalid descuento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Descuento->save($this->request->data)) {
				$this->Session->setFlash(__('The descuento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The descuento could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Descuento->read(null, $id);
		}
	}

/**
 * admin_delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Descuento->id = $id;
		if (!$this->Descuento->exists()) {
			throw new NotFoundException(__('Invalid descuento'));
		}
		if ($this->Descuento->delete()) {
			$this->Session->setFlash(__('Descuento deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Descuento was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
