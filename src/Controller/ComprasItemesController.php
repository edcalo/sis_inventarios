<?php
App::uses('AppController', 'Controller');
/**
 * ComprasItemes Controller
 *
 * @property ComprasItem $ComprasItem
 */
class ComprasItemesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ComprasItem->recursive = 0;
		$this->set('comprasItemes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ComprasItem->id = $id;
		if (!$this->ComprasItem->exists()) {
			throw new NotFoundException(__('Invalid compras item'));
		}
		$this->set('comprasItem', $this->ComprasItem->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ComprasItem->create();
			if ($this->ComprasItem->save($this->request->data)) {
				$this->Session->setFlash(__('The compras item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The compras item could not be saved. Please, try again.'));
			}
		}
		$items = $this->ComprasItem->Item->find('list');
		$compras = $this->ComprasItem->Compra->find('list');
		$this->set(compact('items', 'compras'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ComprasItem->id = $id;
		if (!$this->ComprasItem->exists()) {
			throw new NotFoundException(__('Invalid compras item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ComprasItem->save($this->request->data)) {
				$this->Session->setFlash(__('The compras item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The compras item could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ComprasItem->read(null, $id);
		}
		$items = $this->ComprasItem->Item->find('list');
		$compras = $this->ComprasItem->Compra->find('list');
		$this->set(compact('items', 'compras'));
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
		$this->ComprasItem->id = $id;
		if (!$this->ComprasItem->exists()) {
			throw new NotFoundException(__('Invalid compras item'));
		}
		if ($this->ComprasItem->delete()) {
			$this->Session->setFlash(__('Compras item deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Compras item was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ComprasItem->recursive = 0;
		$this->set('comprasItemes', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->ComprasItem->id = $id;
		if (!$this->ComprasItem->exists()) {
			throw new NotFoundException(__('Invalid compras item'));
		}
		$this->set('comprasItem', $this->ComprasItem->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ComprasItem->create();
			if ($this->ComprasItem->save($this->request->data)) {
				$this->Session->setFlash(__('The compras item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The compras item could not be saved. Please, try again.'));
			}
		}
		$items = $this->ComprasItem->Item->find('list');
		$compras = $this->ComprasItem->Compra->find('list');
		$this->set(compact('items', 'compras'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->ComprasItem->id = $id;
		if (!$this->ComprasItem->exists()) {
			throw new NotFoundException(__('Invalid compras item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ComprasItem->save($this->request->data)) {
				$this->Session->setFlash(__('The compras item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The compras item could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ComprasItem->read(null, $id);
		}
		$items = $this->ComprasItem->Item->find('list');
		$compras = $this->ComprasItem->Compra->find('list');
		$this->set(compact('items', 'compras'));
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
		$this->ComprasItem->id = $id;
		if (!$this->ComprasItem->exists()) {
			throw new NotFoundException(__('Invalid compras item'));
		}
		if ($this->ComprasItem->delete()) {
			$this->Session->setFlash(__('Compras item deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Compras item was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
