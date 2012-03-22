<?php
App::uses('AppController', 'Controller');
/**
 * Cuotas Controller
 *
 * @property Cuota $Cuota
 */
class CuotasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Cuota->recursive = 0;
		$this->set('cuotas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Cuota->id = $id;
		if (!$this->Cuota->exists()) {
			throw new NotFoundException(__('Invalid cuota'));
		}
		$this->set('cuota', $this->Cuota->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cuota->create();
			if ($this->Cuota->save($this->request->data)) {
				$this->Session->setFlash(__('The cuota has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cuota could not be saved. Please, try again.'));
			}
		}
		$planDePagos = $this->Cuota->PlanDePago->find('list');
		$this->set(compact('planDePagos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Cuota->id = $id;
		if (!$this->Cuota->exists()) {
			throw new NotFoundException(__('Invalid cuota'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cuota->save($this->request->data)) {
				$this->Session->setFlash(__('The cuota has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cuota could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Cuota->read(null, $id);
		}
		$planDePagos = $this->Cuota->PlanDePago->find('list');
		$this->set(compact('planDePagos'));
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
		$this->Cuota->id = $id;
		if (!$this->Cuota->exists()) {
			throw new NotFoundException(__('Invalid cuota'));
		}
		if ($this->Cuota->delete()) {
			$this->Session->setFlash(__('Cuota deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cuota was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Cuota->recursive = 0;
		$this->set('cuotas', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Cuota->id = $id;
		if (!$this->Cuota->exists()) {
			throw new NotFoundException(__('Invalid cuota'));
		}
		$this->set('cuota', $this->Cuota->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Cuota->create();
			if ($this->Cuota->save($this->request->data)) {
				$this->Session->setFlash(__('The cuota has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cuota could not be saved. Please, try again.'));
			}
		}
		$planDePagos = $this->Cuota->PlanDePago->find('list');
		$this->set(compact('planDePagos'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Cuota->id = $id;
		if (!$this->Cuota->exists()) {
			throw new NotFoundException(__('Invalid cuota'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cuota->save($this->request->data)) {
				$this->Session->setFlash(__('The cuota has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cuota could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Cuota->read(null, $id);
		}
		$planDePagos = $this->Cuota->PlanDePago->find('list');
		$this->set(compact('planDePagos'));
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
		$this->Cuota->id = $id;
		if (!$this->Cuota->exists()) {
			throw new NotFoundException(__('Invalid cuota'));
		}
		if ($this->Cuota->delete()) {
			$this->Session->setFlash(__('Cuota deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cuota was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
