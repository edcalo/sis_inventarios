<?php
App::uses('AppController', 'Controller');
/**
 * Creditos Controller
 *
 * @property Credito $Credito
 */
class CreditosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Credito->recursive = 0;
		$this->set('creditos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Credito->id = $id;
		if (!$this->Credito->exists()) {
			throw new NotFoundException(__('Invalid credito'));
		}
		$this->set('credito', $this->Credito->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Credito->create();
			if ($this->Credito->save($this->request->data)) {
				$this->Session->setFlash(__('The credito has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The credito could not be saved. Please, try again.'));
			}
		}
		$ventas = $this->Credito->Venta->find('list');
		$this->set(compact('ventas'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Credito->id = $id;
		if (!$this->Credito->exists()) {
			throw new NotFoundException(__('Invalid credito'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Credito->save($this->request->data)) {
				$this->Session->setFlash(__('The credito has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The credito could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Credito->read(null, $id);
		}
		$ventas = $this->Credito->Venta->find('list');
		$this->set(compact('ventas'));
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
		$this->Credito->id = $id;
		if (!$this->Credito->exists()) {
			throw new NotFoundException(__('Invalid credito'));
		}
		if ($this->Credito->delete()) {
			$this->Session->setFlash(__('Credito deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Credito was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Credito->recursive = 0;
		$this->set('creditos', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Credito->id = $id;
		if (!$this->Credito->exists()) {
			throw new NotFoundException(__('Invalid credito'));
		}
		$this->set('credito', $this->Credito->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Credito->create();
			if ($this->Credito->save($this->request->data)) {
				$this->Session->setFlash(__('The credito has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The credito could not be saved. Please, try again.'));
			}
		}
		$ventas = $this->Credito->Venta->find('list');
		$this->set(compact('ventas'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Credito->id = $id;
		if (!$this->Credito->exists()) {
			throw new NotFoundException(__('Invalid credito'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Credito->save($this->request->data)) {
				$this->Session->setFlash(__('The credito has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The credito could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Credito->read(null, $id);
		}
		$ventas = $this->Credito->Venta->find('list');
		$this->set(compact('ventas'));
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
		$this->Credito->id = $id;
		if (!$this->Credito->exists()) {
			throw new NotFoundException(__('Invalid credito'));
		}
		if ($this->Credito->delete()) {
			$this->Session->setFlash(__('Credito deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Credito was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
