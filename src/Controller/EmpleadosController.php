<?php
App::uses('AppController', 'Controller');
/**
 * Empleados Controller
 *
 * @property Empleado $Empleado
 */
class EmpleadosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Empleado->recursive = 0;
		$this->set('empleados', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Empleado->id = $id;
		if (!$this->Empleado->exists()) {
			throw new NotFoundException(__('Invalid empleado'));
		}
		$this->set('empleado', $this->Empleado->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Empleado->create();
			if ($this->Empleado->save($this->request->data)) {
				$this->Session->setFlash(__('The empleado has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The empleado could not be saved. Please, try again.'));
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
		$this->Empleado->id = $id;
		if (!$this->Empleado->exists()) {
			throw new NotFoundException(__('Invalid empleado'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Empleado->save($this->request->data)) {
				$this->Session->setFlash(__('The empleado has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The empleado could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Empleado->read(null, $id);
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
		$this->Empleado->id = $id;
		if (!$this->Empleado->exists()) {
			throw new NotFoundException(__('Invalid empleado'));
		}
		if ($this->Empleado->delete()) {
			$this->Session->setFlash(__('Empleado deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Empleado was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Empleado->recursive = 0;
		$this->set('empleados', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Empleado->id = $id;
		if (!$this->Empleado->exists()) {
			throw new NotFoundException(__('Invalid empleado'));
		}
		$this->set('empleado', $this->Empleado->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Empleado->create();
			if ($this->Empleado->save($this->request->data)) {
				$this->Session->setFlash(__('The empleado has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The empleado could not be saved. Please, try again.'));
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
		$this->Empleado->id = $id;
		if (!$this->Empleado->exists()) {
			throw new NotFoundException(__('Invalid empleado'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Empleado->save($this->request->data)) {
				$this->Session->setFlash(__('The empleado has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The empleado could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Empleado->read(null, $id);
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
		$this->Empleado->id = $id;
		if (!$this->Empleado->exists()) {
			throw new NotFoundException(__('Invalid empleado'));
		}
		if ($this->Empleado->delete()) {
			$this->Session->setFlash(__('Empleado deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Empleado was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
