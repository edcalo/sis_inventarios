<?php
App::uses('AppController', 'Controller');
/**
 * Piezas Controller
 *
 * @property Pieza $Pieza
 */
class PiezasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Pieza->recursive = 0;
		$this->set('piezas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Pieza->id = $id;
		if (!$this->Pieza->exists()) {
			throw new NotFoundException(__('Invalid pieza'));
		}
		$this->set('pieza', $this->Pieza->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pieza->create();
			if ($this->Pieza->save($this->request->data)) {
				$this->Session->setFlash(__('The pieza has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pieza could not be saved. Please, try again.'));
			}
		}
		$articulos = $this->Pieza->Articulo->find('list');
		$this->set(compact('articulos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Pieza->id = $id;
		if (!$this->Pieza->exists()) {
			throw new NotFoundException(__('Invalid pieza'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Pieza->save($this->request->data)) {
				$this->Session->setFlash(__('The pieza has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pieza could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Pieza->read(null, $id);
		}
		$articulos = $this->Pieza->Articulo->find('list');
		$this->set(compact('articulos'));
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
		$this->Pieza->id = $id;
		if (!$this->Pieza->exists()) {
			throw new NotFoundException(__('Invalid pieza'));
		}
		if ($this->Pieza->delete()) {
			$this->Session->setFlash(__('Pieza deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Pieza was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Pieza->recursive = 0;
		$this->set('piezas', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Pieza->id = $id;
		if (!$this->Pieza->exists()) {
			throw new NotFoundException(__('Invalid pieza'));
		}
		$this->set('pieza', $this->Pieza->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Pieza->create();
			if ($this->Pieza->save($this->request->data)) {
				$this->Session->setFlash(__('The pieza has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pieza could not be saved. Please, try again.'));
			}
		}
		$articulos = $this->Pieza->Articulo->find('list');
		$this->set(compact('articulos'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Pieza->id = $id;
		if (!$this->Pieza->exists()) {
			throw new NotFoundException(__('Invalid pieza'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Pieza->save($this->request->data)) {
				$this->Session->setFlash(__('The pieza has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pieza could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Pieza->read(null, $id);
		}
		$articulos = $this->Pieza->Articulo->find('list');
		$this->set(compact('articulos'));
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
		$this->Pieza->id = $id;
		if (!$this->Pieza->exists()) {
			throw new NotFoundException(__('Invalid pieza'));
		}
		if ($this->Pieza->delete()) {
			$this->Session->setFlash(__('Pieza deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Pieza was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
