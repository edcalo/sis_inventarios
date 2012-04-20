<?php
App::uses('AppController', 'Controller');
/**
 * Compras Controller
 *
 * @property Compra $Compra
 */
class ComprasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Compra->recursive = 0;
		$this->set('compras', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Compra->id = $id;
		if (!$this->Compra->exists()) {
			throw new NotFoundException(__('Invalid compra'));
		}
		$this->set('compra', $this->Compra->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Compra->create();
			if ($this->Compra->save($this->request->data)) {
				$this->Session->setFlash(__('The compra has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The compra could not be saved. Please, try again.'));
			}
		}
		$creditos = $this->Compra->Credito->find('list');
		$empleados = $this->Compra->Empleado->find('list');
		$proveedores = $this->Compra->Proveedor->find('list');
		$this->set(compact('creditos', 'empleados', 'proveedores'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Compra->id = $id;
		if (!$this->Compra->exists()) {
			throw new NotFoundException(__('Invalid compra'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Compra->save($this->request->data)) {
				$this->Session->setFlash(__('The compra has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The compra could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Compra->read(null, $id);
		}
		$creditos = $this->Compra->Credito->find('list');
		$empleados = $this->Compra->Empleado->find('list');
		$proveedores = $this->Compra->Proveedor->find('list');
		$this->set(compact('creditos', 'empleados', 'proveedores'));
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
		$this->Compra->id = $id;
		if (!$this->Compra->exists()) {
			throw new NotFoundException(__('Invalid compra'));
		}
		if ($this->Compra->delete()) {
			$this->Session->setFlash(__('Compra deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Compra was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
            $this->layout ='ajax';
		$this->Compra->recursive = 0;
		$this->set('compras', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Compra->id = $id;
		if (!$this->Compra->exists()) {
			throw new NotFoundException(__('Invalid compra'));
		}
		$this->set('compra', $this->Compra->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Compra->create();
			if ($this->Compra->save($this->request->data)) {
				$this->Session->setFlash(__('The compra has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The compra could not be saved. Please, try again.'));
			}
		}
		$creditos = $this->Compra->Credito->find('list');
		$empleados = $this->Compra->Empleado->find('list');
		$proveedores = $this->Compra->Proveedor->find('list');
		$this->set(compact('creditos', 'empleados', 'proveedores'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Compra->id = $id;
		if (!$this->Compra->exists()) {
			throw new NotFoundException(__('Invalid compra'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Compra->save($this->request->data)) {
				$this->Session->setFlash(__('The compra has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The compra could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Compra->read(null, $id);
		}
		$creditos = $this->Compra->Credito->find('list');
		$empleados = $this->Compra->Empleado->find('list');
		$proveedores = $this->Compra->Proveedor->find('list');
		$this->set(compact('creditos', 'empleados', 'proveedores'));
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
		$this->Compra->id = $id;
		if (!$this->Compra->exists()) {
			throw new NotFoundException(__('Invalid compra'));
		}
		if ($this->Compra->delete()) {
			$this->Session->setFlash(__('Compra deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Compra was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
