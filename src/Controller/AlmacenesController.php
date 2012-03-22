<?php
App::uses('AppController', 'Controller');
/**
 * Almacenes Controller
 *
 * @property Almacen $Almacen
 */
class AlmacenesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Almacen->recursive = 0;
		$this->set('almacenes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Almacen->id = $id;
		if (!$this->Almacen->exists()) {
			throw new NotFoundException(__('Invalid almacen'));
		}
		$this->set('almacen', $this->Almacen->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Almacen->create();
			if ($this->Almacen->save($this->request->data)) {
				$this->Session->setFlash(__('The almacen has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The almacen could not be saved. Please, try again.'));
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
		$this->Almacen->id = $id;
		if (!$this->Almacen->exists()) {
			throw new NotFoundException(__('Invalid almacen'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Almacen->save($this->request->data)) {
				$this->Session->setFlash(__('The almacen has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The almacen could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Almacen->read(null, $id);
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
		$this->Almacen->id = $id;
		if (!$this->Almacen->exists()) {
			throw new NotFoundException(__('Invalid almacen'));
		}
		if ($this->Almacen->delete()) {
			$this->Session->setFlash(__('Almacen deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Almacen was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Almacen->recursive = 0;
		$this->set('almacenes', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Almacen->id = $id;
		if (!$this->Almacen->exists()) {
			throw new NotFoundException(__('Invalid almacen'));
		}
		$this->set('almacen', $this->Almacen->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Almacen->create();
			if ($this->Almacen->save($this->request->data)) {
				$this->Session->setFlash(__('The almacen has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The almacen could not be saved. Please, try again.'));
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
		$this->Almacen->id = $id;
		if (!$this->Almacen->exists()) {
			throw new NotFoundException(__('Invalid almacen'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Almacen->save($this->request->data)) {
				$this->Session->setFlash(__('The almacen has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The almacen could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Almacen->read(null, $id);
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
		$this->Almacen->id = $id;
		if (!$this->Almacen->exists()) {
			throw new NotFoundException(__('Invalid almacen'));
		}
		if ($this->Almacen->delete()) {
			$this->Session->setFlash(__('Almacen deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Almacen was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
