<?php
App::uses('AppController', 'Controller');
/**
 * PlanPagos Controller
 *
 * @property PlanPago $PlanPago
 */
class PlanPagosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PlanPago->recursive = 0;
		$this->set('planPagos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PlanPago->id = $id;
		if (!$this->PlanPago->exists()) {
			throw new NotFoundException(__('Invalid plan pago'));
		}
		$this->set('planPago', $this->PlanPago->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PlanPago->create();
			if ($this->PlanPago->save($this->request->data)) {
				$this->Session->setFlash(__('The plan pago has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plan pago could not be saved. Please, try again.'));
			}
		}
		$creditos = $this->PlanPago->Credito->find('list');
		$this->set(compact('creditos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PlanPago->id = $id;
		if (!$this->PlanPago->exists()) {
			throw new NotFoundException(__('Invalid plan pago'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PlanPago->save($this->request->data)) {
				$this->Session->setFlash(__('The plan pago has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plan pago could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PlanPago->read(null, $id);
		}
		$creditos = $this->PlanPago->Credito->find('list');
		$this->set(compact('creditos'));
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
		$this->PlanPago->id = $id;
		if (!$this->PlanPago->exists()) {
			throw new NotFoundException(__('Invalid plan pago'));
		}
		if ($this->PlanPago->delete()) {
			$this->Session->setFlash(__('Plan pago deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Plan pago was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->PlanPago->recursive = 0;
		$this->set('planPagos', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->PlanPago->id = $id;
		if (!$this->PlanPago->exists()) {
			throw new NotFoundException(__('Invalid plan pago'));
		}
		$this->set('planPago', $this->PlanPago->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->PlanPago->create();
			if ($this->PlanPago->save($this->request->data)) {
				$this->Session->setFlash(__('The plan pago has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plan pago could not be saved. Please, try again.'));
			}
		}
		$creditos = $this->PlanPago->Credito->find('list');
		$this->set(compact('creditos'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->PlanPago->id = $id;
		if (!$this->PlanPago->exists()) {
			throw new NotFoundException(__('Invalid plan pago'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PlanPago->save($this->request->data)) {
				$this->Session->setFlash(__('The plan pago has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plan pago could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PlanPago->read(null, $id);
		}
		$creditos = $this->PlanPago->Credito->find('list');
		$this->set(compact('creditos'));
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
		$this->PlanPago->id = $id;
		if (!$this->PlanPago->exists()) {
			throw new NotFoundException(__('Invalid plan pago'));
		}
		if ($this->PlanPago->delete()) {
			$this->Session->setFlash(__('Plan pago deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Plan pago was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
