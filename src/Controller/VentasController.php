<?php
App::uses('AppController', 'Controller');
/**
 * Ventas Controller
 *
 * @property Venta $Venta
 */
class VentasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Venta->recursive = 0;
		$this->set('ventas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Venta->id = $id;
		if (!$this->Venta->exists()) {
			throw new NotFoundException(__('Invalid venta'));
		}
		$this->set('venta', $this->Venta->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Venta->create();
			if ($this->Venta->save($this->request->data)) {
				$this->Session->setFlash(__('The venta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The venta could not be saved. Please, try again.'));
			}
		}
		$clientes = $this->Venta->Cliente->find('list');
		$descuentos = $this->Venta->Descuento->find('list');
		$empleados = $this->Venta->Empleado->find('list');
		$this->set(compact('clientes', 'descuentos', 'empleados'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Venta->id = $id;
		if (!$this->Venta->exists()) {
			throw new NotFoundException(__('Invalid venta'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Venta->save($this->request->data)) {
				$this->Session->setFlash(__('The venta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The venta could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Venta->read(null, $id);
		}
		$clientes = $this->Venta->Cliente->find('list');
		$descuentos = $this->Venta->Descuento->find('list');
		$empleados = $this->Venta->Empleado->find('list');
		$this->set(compact('clientes', 'descuentos', 'empleados'));
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
		$this->Venta->id = $id;
		if (!$this->Venta->exists()) {
			throw new NotFoundException(__('Invalid venta'));
		}
		if ($this->Venta->delete()) {
			$this->Session->setFlash(__('Venta deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Venta was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Venta->recursive = 0;
		$this->set('ventas', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Venta->id = $id;
		if (!$this->Venta->exists()) {
			throw new NotFoundException(__('Invalid venta'));
		}
		$this->set('venta', $this->Venta->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Venta->create();
			if ($this->Venta->save($this->request->data)) {
				$this->Session->setFlash(__('The venta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The venta could not be saved. Please, try again.'));
			}
		}
		$clientes = $this->Venta->Cliente->find('list');
		$descuentos = $this->Venta->Descuento->find('list');
		$empleados = $this->Venta->Empleado->find('list');
		$this->set(compact('clientes', 'descuentos', 'empleados'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Venta->id = $id;
		if (!$this->Venta->exists()) {
			throw new NotFoundException(__('Invalid venta'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Venta->save($this->request->data)) {
				$this->Session->setFlash(__('The venta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The venta could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Venta->read(null, $id);
		}
		$clientes = $this->Venta->Cliente->find('list');
		$descuentos = $this->Venta->Descuento->find('list');
		$empleados = $this->Venta->Empleado->find('list');
		$this->set(compact('clientes', 'descuentos', 'empleados'));
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
		$this->Venta->id = $id;
		if (!$this->Venta->exists()) {
			throw new NotFoundException(__('Invalid venta'));
		}
		if ($this->Venta->delete()) {
			$this->Session->setFlash(__('Venta deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Venta was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
