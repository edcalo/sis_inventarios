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
        $this->layout = 'ajax';
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
        $this->layout = 'ajax';
        if (!empty($this->data)) {

            $datos = json_decode(stripslashes($this->data)); //decodificamos la informacion
            $this->data = array('Dosificacion' => (array)$datos);

            if ($this->Dosificacion->save($this->data)) {
                $this->set('guardado', 1);                
                $this->set('newID', $this->Dosificacion->id);
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
            $this->data = array('Dosificacion' => (array) $datos);
            $this->data['Dosificacion']['id'] = $this->data['Dosificacion']['id'];
            if ($this->Dosificacion->save($this->data)) {
                $success = true;
                $this->set('dosificaciones', $this->Dosificacion->find('all'));
            }
            $this->set('actualizado', $success);
        } else if (count($datos) >= 2) {
            $resp = array('Dosificacion' => array());
            foreach ($dosificaciones as $dosificacion_data) {
                $dosificacion = array('Dosificacion' => (array) $rol_data);
                $dosificacion['Dosificacion']['id'] = $dosificacion['Dosificacion']['id'];
                if ($this->Dosificacion->save($dosificacion)) {
                    $success = true;
                    array_push($resp['Dosificacion'], $dosificacion['Dosificacion']);
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
            $result = $this->Dosificacion->delete($grupo->id);
            $this->set('eliminado', $result);
        } else {
            $result = true;
            foreach ($grupo as $g) {
                $result = ($result and $this->Dosificacion->delete($g->id));
            }
            $this->set('eliminado', $result);
        }
    }
}
