<?php
App::uses('AppController', 'Controller');
/**
 * Dosificaciones Controller
 *
 * @property Dosificacion $Dosificacion
 */
class DosificacionesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Dosificacion->recursive = 0;
		$this->set('dosificaciones', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Dosificacion->id = $id;
		if (!$this->Dosificacion->exists()) {
			throw new NotFoundException(__('Invalid dosificacion'));
		}
		$this->set('dosificacion', $this->Dosificacion->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Dosificacion->create();
			if ($this->Dosificacion->save($this->request->data)) {
				$this->Session->setFlash(__('The dosificacion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dosificacion could not be saved. Please, try again.'));
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
		$this->Dosificacion->id = $id;
		if (!$this->Dosificacion->exists()) {
			throw new NotFoundException(__('Invalid dosificacion'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Dosificacion->save($this->request->data)) {
				$this->Session->setFlash(__('The dosificacion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dosificacion could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Dosificacion->read(null, $id);
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
		$this->Dosificacion->id = $id;
		if (!$this->Dosificacion->exists()) {
			throw new NotFoundException(__('Invalid dosificacion'));
		}
		if ($this->Dosificacion->delete()) {
			$this->Session->setFlash(__('Dosificacion deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Dosificacion was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Dosificacion->recursive = 0;
		$this->set('dosificaciones', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Dosificacion->id = $id;
		if (!$this->Dosificacion->exists()) {
			throw new NotFoundException(__('Invalid dosificacion'));
		}
		$this->set('dosificacion', $this->Dosificacion->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Dosificacion->create();
			if ($this->Dosificacion->save($this->request->data)) {
				$this->Session->setFlash(__('The dosificacion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dosificacion could not be saved. Please, try again.'));
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
		$this->Dosificacion->id = $id;
		if (!$this->Dosificacion->exists()) {
			throw new NotFoundException(__('Invalid dosificacion'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Dosificacion->save($this->request->data)) {
				$this->Session->setFlash(__('The dosificacion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dosificacion could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Dosificacion->read(null, $id);
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
		$this->Dosificacion->id = $id;
		if (!$this->Dosificacion->exists()) {
			throw new NotFoundException(__('Invalid dosificacion'));
		}
		if ($this->Dosificacion->delete()) {
			$this->Session->setFlash(__('Dosificacion deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Dosificacion was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
