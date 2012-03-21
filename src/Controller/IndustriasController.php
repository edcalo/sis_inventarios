<?php
App::uses('AppController', 'Controller');
/**
 * Industrias Controller
 *
 * @property Industria $Industria
 */
class IndustriasController extends AppController {



/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Industria->recursive = 0;
		$this->set('industrias', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Industria->id = $id;
		if (!$this->Industria->exists()) {
			throw new NotFoundException(__('Invalid industria'));
		}
		$this->set('industria', $this->Industria->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Industria->create();
			if ($this->Industria->save($this->request->data)) {
				$this->Session->setFlash(__('The industria has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The industria could not be saved. Please, try again.'));
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
		$this->Industria->id = $id;
		if (!$this->Industria->exists()) {
			throw new NotFoundException(__('Invalid industria'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Industria->save($this->request->data)) {
				$this->Session->setFlash(__('The industria has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The industria could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Industria->read(null, $id);
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
		$this->Industria->id = $id;
		if (!$this->Industria->exists()) {
			throw new NotFoundException(__('Invalid industria'));
		}
		if ($this->Industria->delete()) {
			$this->Session->setFlash(__('Industria deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Industria was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Industria->recursive = 0;
		$this->set('industrias', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Industria->id = $id;
		if (!$this->Industria->exists()) {
			throw new NotFoundException(__('Invalid industria'));
		}
		$this->set('industria', $this->Industria->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Industria->create();
			if ($this->Industria->save($this->request->data)) {
				$this->Session->setFlash(__('The industria has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The industria could not be saved. Please, try again.'));
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
		$this->Industria->id = $id;
		if (!$this->Industria->exists()) {
			throw new NotFoundException(__('Invalid industria'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Industria->save($this->request->data)) {
				$this->Session->setFlash(__('The industria has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The industria could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Industria->read(null, $id);
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
		$this->Industria->id = $id;
		if (!$this->Industria->exists()) {
			throw new NotFoundException(__('Invalid industria'));
		}
		if ($this->Industria->delete()) {
			$this->Session->setFlash(__('Industria deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Industria was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
