<?php
App::uses('AppController', 'Controller');
/**
 * Descuentos Controller
 *
 * @property Descuento $Descuento
 */
class DescuentosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Descuento->recursive = 0;
		$this->set('descuentos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Descuento->id = $id;
		if (!$this->Descuento->exists()) {
			throw new NotFoundException(__('Invalid descuento'));
		}
		$this->set('descuento', $this->Descuento->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Descuento->create();
			if ($this->Descuento->save($this->request->data)) {
				$this->Session->setFlash(__('The descuento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The descuento could not be saved. Please, try again.'));
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
		$this->Descuento->id = $id;
		if (!$this->Descuento->exists()) {
			throw new NotFoundException(__('Invalid descuento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Descuento->save($this->request->data)) {
				$this->Session->setFlash(__('The descuento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The descuento could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Descuento->read(null, $id);
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
		$this->Descuento->id = $id;
		if (!$this->Descuento->exists()) {
			throw new NotFoundException(__('Invalid descuento'));
		}
		if ($this->Descuento->delete()) {
			$this->Session->setFlash(__('Descuento deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Descuento was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
        $this->layout = 'ajax';
        $this->Descuento->recursive = 0;
        $this->set('descuentos', $this->paginate());
    }

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Descuento->id = $id;
		if (!$this->Descuento->exists()) {
			throw new NotFoundException(__('Invalid descuento'));
		}
		$this->set('descuento', $this->Descuento->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
        $this->layout = 'ajax';
        if (!empty($this->data)) {

            $datos = json_decode(stripslashes($this->data[0])); //decodificamos la informacion
            $this->data = array('Descuento' => (array)$datos);

            if ($this->Descuento->save($this->data)) {
                $this->set('guardado', 1);                
                $this->set('newID', $this->Descuento->id);
            } else {
                $this->set('guardado', 0);
            }
        } else {
            $this->set('guardado', 2); // mo se recibieron datos para guardar
        }
    }

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
        $this->layout = 'ajax';
        $datos = json_decode(stripslashes($this->data[0])); //decodificamos la informacion
        $success = false;
        if (count($datos) == 1) { //verificamos si solo se modifico un registro o varios
            $this->data = array('Descuento' => (array) $datos);
            $this->data['Descuento']['id'] = $this->data['Descuento']['id'];
            if ($this->Descuento->save($this->data)) {
                $success = true;
                $this->set('descuentos', $this->Descuento->find('all'));
            }
            $this->set('actualizado', $success);
        } else if (count($datos) >= 2) {
            $resp = array('Descuento' => array());
            foreach ($descuentos as $descuento_data) {
                $descuento = array('Descuento' => (array) $descuento_data);
                $descuento['Descuento']['id'] = $descuento['Descuento']['id'];
                if ($this->Descuento->save($descuento)) {
                    $success = true;
                    array_push($resp['Descuento'], $descuento['Descuento']);
                }
            }
            $this->data = $resp;
        }
        $this->set('actualizado', $success);
    }

/**
 * admin_delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
        $this->layout = 'ajax';
        $grupo = json_decode(stripslashes($this->data));
        if (count($grupo) == 1) {
            $result = $this->Descuento->delete($grupo->id);
            $this->set('eliminado', $result);
        } else {
            $result = true;
            foreach ($grupo as $g) {
                $result = ($result and $this->Descuento->delete($g->id));
            }
            $this->set('eliminado', $result);
        }
    }
}
