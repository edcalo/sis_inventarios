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
        $this->layout = 'ajax';
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
        $this->layout = 'ajax';
        if (!empty($this->data)) {

            $datos = json_decode(stripslashes(is_array($this->data) ? $this->data[0]: $this->data)); //decodificamos la informacion
            $this->data = array('Empleado' => (array)$datos);

            if ($this->Empleado->save($this->data)) {
                $this->set('guardado', 1);                
                $this->set('newID', $this->Empleado->id);
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
            $this->data = array('Empleado' => (array) $datos);
            $this->data['Empleado']['id'] = $this->data['Empleado']['id'];
            if ($this->Empleado->save($this->data)) {
                $success = true;
                $this->set('empleados', $this->Empleado->find('all'));
            }
            $this->set('actualizado', $success);
        } else if (count($datos) >= 2) {
            $resp = array('Empleado' => array());
            foreach ($empleados as $empleado_data) {
                $empleado = array('Empleado' => (array) $empleado_data);
                $empleado['Empleado']['id'] = $empleado['Empleado']['id'];
                if ($this->Empleado->save($empleado)) {
                    $success = true;
                    array_push($resp['Empleado'], $empleado['Empleado']);
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
            $result = $this->Empleado->delete($grupo->id);
            $this->set('eliminado', $result);
        } else {
            $result = true;
            foreach ($grupo as $g) {
                $result = ($result and $this->Empleado->delete($g->id));
            }
            $this->set('eliminado', $result);
        }
    }
}
