<?php
App::uses('AppController', 'Controller');
/**
 * NotaDeVentas Controller
 *
 * @property NotaDeVenta $NotaDeVenta
 */
class NotaDeVentasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->NotaDeVenta->recursive = 0;
		$this->set('notaDeVentas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->NotaDeVenta->id = $id;
		if (!$this->NotaDeVenta->exists()) {
			throw new NotFoundException(__('Invalid nota de venta'));
		}
		$this->set('notaDeVenta', $this->NotaDeVenta->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->NotaDeVenta->create();
			if ($this->NotaDeVenta->save($this->request->data)) {
				$this->Session->setFlash(__('The nota de venta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nota de venta could not be saved. Please, try again.'));
			}
		}
		$ventas = $this->NotaDeVenta->Venta->find('list');
		$this->set(compact('ventas'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->NotaDeVenta->id = $id;
		if (!$this->NotaDeVenta->exists()) {
			throw new NotFoundException(__('Invalid nota de venta'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->NotaDeVenta->save($this->request->data)) {
				$this->Session->setFlash(__('The nota de venta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nota de venta could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->NotaDeVenta->read(null, $id);
		}
		$ventas = $this->NotaDeVenta->Venta->find('list');
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
		$this->NotaDeVenta->id = $id;
		if (!$this->NotaDeVenta->exists()) {
			throw new NotFoundException(__('Invalid nota de venta'));
		}
		if ($this->NotaDeVenta->delete()) {
			$this->Session->setFlash(__('Nota de venta deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Nota de venta was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->NotaDeVenta->recursive = 0;
		$this->set('notaDeVentas', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->NotaDeVenta->id = $id;
		if (!$this->NotaDeVenta->exists()) {
			throw new NotFoundException(__('Invalid nota de venta'));
		}
		$this->set('notaDeVenta', $this->NotaDeVenta->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->NotaDeVenta->create();
			if ($this->NotaDeVenta->save($this->request->data)) {
				$this->Session->setFlash(__('The nota de venta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nota de venta could not be saved. Please, try again.'));
			}
		}
		$ventas = $this->NotaDeVenta->Venta->find('list');
		$this->set(compact('ventas'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->NotaDeVenta->id = $id;
		if (!$this->NotaDeVenta->exists()) {
			throw new NotFoundException(__('Invalid nota de venta'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->NotaDeVenta->save($this->request->data)) {
				$this->Session->setFlash(__('The nota de venta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nota de venta could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->NotaDeVenta->read(null, $id);
		}
		$ventas = $this->NotaDeVenta->Venta->find('list');
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
		$this->NotaDeVenta->id = $id;
		if (!$this->NotaDeVenta->exists()) {
			throw new NotFoundException(__('Invalid nota de venta'));
		}
		if ($this->NotaDeVenta->delete()) {
			$this->Session->setFlash(__('Nota de venta deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Nota de venta was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
