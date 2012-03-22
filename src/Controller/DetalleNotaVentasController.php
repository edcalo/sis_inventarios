<?php
App::uses('AppController', 'Controller');
/**
 * DetalleNotaVentas Controller
 *
 * @property DetalleNotaVenta $DetalleNotaVenta
 */
class DetalleNotaVentasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DetalleNotaVenta->recursive = 0;
		$this->set('detalleNotaVentas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->DetalleNotaVenta->id = $id;
		if (!$this->DetalleNotaVenta->exists()) {
			throw new NotFoundException(__('Invalid detalle nota venta'));
		}
		$this->set('detalleNotaVenta', $this->DetalleNotaVenta->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DetalleNotaVenta->create();
			if ($this->DetalleNotaVenta->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle nota venta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle nota venta could not be saved. Please, try again.'));
			}
		}
		$notaDeVentas = $this->DetalleNotaVenta->NotaDeVenta->find('list');
		$items = $this->DetalleNotaVenta->Item->find('list');
		$this->set(compact('notaDeVentas', 'items'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->DetalleNotaVenta->id = $id;
		if (!$this->DetalleNotaVenta->exists()) {
			throw new NotFoundException(__('Invalid detalle nota venta'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DetalleNotaVenta->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle nota venta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle nota venta could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->DetalleNotaVenta->read(null, $id);
		}
		$notaDeVentas = $this->DetalleNotaVenta->NotaDeVenta->find('list');
		$items = $this->DetalleNotaVenta->Item->find('list');
		$this->set(compact('notaDeVentas', 'items'));
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
		$this->DetalleNotaVenta->id = $id;
		if (!$this->DetalleNotaVenta->exists()) {
			throw new NotFoundException(__('Invalid detalle nota venta'));
		}
		if ($this->DetalleNotaVenta->delete()) {
			$this->Session->setFlash(__('Detalle nota venta deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Detalle nota venta was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->DetalleNotaVenta->recursive = 0;
		$this->set('detalleNotaVentas', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->DetalleNotaVenta->id = $id;
		if (!$this->DetalleNotaVenta->exists()) {
			throw new NotFoundException(__('Invalid detalle nota venta'));
		}
		$this->set('detalleNotaVenta', $this->DetalleNotaVenta->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->DetalleNotaVenta->create();
			if ($this->DetalleNotaVenta->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle nota venta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle nota venta could not be saved. Please, try again.'));
			}
		}
		$notaDeVentas = $this->DetalleNotaVenta->NotaDeVenta->find('list');
		$items = $this->DetalleNotaVenta->Item->find('list');
		$this->set(compact('notaDeVentas', 'items'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->DetalleNotaVenta->id = $id;
		if (!$this->DetalleNotaVenta->exists()) {
			throw new NotFoundException(__('Invalid detalle nota venta'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DetalleNotaVenta->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle nota venta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle nota venta could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->DetalleNotaVenta->read(null, $id);
		}
		$notaDeVentas = $this->DetalleNotaVenta->NotaDeVenta->find('list');
		$items = $this->DetalleNotaVenta->Item->find('list');
		$this->set(compact('notaDeVentas', 'items'));
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
		$this->DetalleNotaVenta->id = $id;
		if (!$this->DetalleNotaVenta->exists()) {
			throw new NotFoundException(__('Invalid detalle nota venta'));
		}
		if ($this->DetalleNotaVenta->delete()) {
			$this->Session->setFlash(__('Detalle nota venta deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Detalle nota venta was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
