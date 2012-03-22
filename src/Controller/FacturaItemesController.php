<?php
App::uses('AppController', 'Controller');
/**
 * FacturaItemes Controller
 *
 * @property FacturaItem $FacturaItem
 */
class FacturaItemesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FacturaItem->recursive = 0;
		$this->set('facturaItemes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FacturaItem->id = $id;
		if (!$this->FacturaItem->exists()) {
			throw new NotFoundException(__('Invalid factura item'));
		}
		$this->set('facturaItem', $this->FacturaItem->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FacturaItem->create();
			if ($this->FacturaItem->save($this->request->data)) {
				$this->Session->setFlash(__('The factura item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The factura item could not be saved. Please, try again.'));
			}
		}
		$items = $this->FacturaItem->Item->find('list');
		$facturas = $this->FacturaItem->Factura->find('list');
		$this->set(compact('items', 'facturas'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->FacturaItem->id = $id;
		if (!$this->FacturaItem->exists()) {
			throw new NotFoundException(__('Invalid factura item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FacturaItem->save($this->request->data)) {
				$this->Session->setFlash(__('The factura item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The factura item could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FacturaItem->read(null, $id);
		}
		$items = $this->FacturaItem->Item->find('list');
		$facturas = $this->FacturaItem->Factura->find('list');
		$this->set(compact('items', 'facturas'));
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
		$this->FacturaItem->id = $id;
		if (!$this->FacturaItem->exists()) {
			throw new NotFoundException(__('Invalid factura item'));
		}
		if ($this->FacturaItem->delete()) {
			$this->Session->setFlash(__('Factura item deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Factura item was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->FacturaItem->recursive = 0;
		$this->set('facturaItemes', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->FacturaItem->id = $id;
		if (!$this->FacturaItem->exists()) {
			throw new NotFoundException(__('Invalid factura item'));
		}
		$this->set('facturaItem', $this->FacturaItem->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->FacturaItem->create();
			if ($this->FacturaItem->save($this->request->data)) {
				$this->Session->setFlash(__('The factura item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The factura item could not be saved. Please, try again.'));
			}
		}
		$items = $this->FacturaItem->Item->find('list');
		$facturas = $this->FacturaItem->Factura->find('list');
		$this->set(compact('items', 'facturas'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->FacturaItem->id = $id;
		if (!$this->FacturaItem->exists()) {
			throw new NotFoundException(__('Invalid factura item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FacturaItem->save($this->request->data)) {
				$this->Session->setFlash(__('The factura item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The factura item could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FacturaItem->read(null, $id);
		}
		$items = $this->FacturaItem->Item->find('list');
		$facturas = $this->FacturaItem->Factura->find('list');
		$this->set(compact('items', 'facturas'));
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
		$this->FacturaItem->id = $id;
		if (!$this->FacturaItem->exists()) {
			throw new NotFoundException(__('Invalid factura item'));
		}
		if ($this->FacturaItem->delete()) {
			$this->Session->setFlash(__('Factura item deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Factura item was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
