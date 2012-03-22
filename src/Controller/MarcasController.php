<?php
App::uses('AppController', 'Controller');
/**
 * Marcas Controller
 *
 * @property Marca $Marca
 */
class MarcasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Marca->recursive = 0;
		$this->set('marcas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Marca->id = $id;
		if (!$this->Marca->exists()) {
			throw new NotFoundException(__('Invalid marca'));
		}
		$this->set('marca', $this->Marca->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Marca->create();
			if ($this->Marca->save($this->request->data)) {
				$this->Session->setFlash(__('The marca has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The marca could not be saved. Please, try again.'));
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
		$this->Marca->id = $id;
		if (!$this->Marca->exists()) {
			throw new NotFoundException(__('Invalid marca'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Marca->save($this->request->data)) {
				$this->Session->setFlash(__('The marca has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The marca could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Marca->read(null, $id);
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
		$this->Marca->id = $id;
		if (!$this->Marca->exists()) {
			throw new NotFoundException(__('Invalid marca'));
		}
		if ($this->Marca->delete()) {
			$this->Session->setFlash(__('Marca deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Marca was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Marca->recursive = 0;
		$this->set('marcas', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Marca->id = $id;
		if (!$this->Marca->exists()) {
			throw new NotFoundException(__('Invalid marca'));
		}
		$this->set('marca', $this->Marca->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Marca->create();
			if ($this->Marca->save($this->request->data)) {
				$this->Session->setFlash(__('The marca has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The marca could not be saved. Please, try again.'));
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
		$this->Marca->id = $id;
		if (!$this->Marca->exists()) {
			throw new NotFoundException(__('Invalid marca'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Marca->save($this->request->data)) {
				$this->Session->setFlash(__('The marca has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The marca could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Marca->read(null, $id);
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
		$this->Marca->id = $id;
		if (!$this->Marca->exists()) {
			throw new NotFoundException(__('Invalid marca'));
		}
		if ($this->Marca->delete()) {
			$this->Session->setFlash(__('Marca deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Marca was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
